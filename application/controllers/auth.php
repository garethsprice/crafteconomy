<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url');
		// Load MongoDB library instead of native db driver if required
		$this->config->item('use_mongodb', 'ion_auth') ?
			$this->load->library('mongo_db') :
			$this->load->database();
			
		$this->template->title("Users");
	}

	//redirect if needed, otherwise display the user list
	function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin())
		{
			//redirect them to the home page because they must be an administrator to view this
			redirect($this->config->item('base_url'), 'refresh');
		}

    $this->template->append_metadata('<script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.1/jquery.dataTables.min.js"></script>');
    $this->template->append_metadata('<script src="/assets/js/jquery.dataTables.fnPagingInfo.js"></script>');
    $this->template->append_metadata('<script src="/assets/js/jquery.dataTables.pagination.bootstrap.js"></script>');
    $this->template->append_metadata('<script src="/assets/js/jquery.dataTables.fnPagingInfo.js"></script>');
    //$this->template->append_metadata('<link rel="stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.1/css/jquery.dataTables.css" type="text/css" />');
    $this->template->append_metadata("
      <script type=\"text/javascript\">
      $(document).ready(function()
        {          
          $('#users').dataTable
          ({
            'bPaginate': false
          });
        });
      </script>
    ");

		//set the flash data error message if there is one
		$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

		//list the users
		$this->data['users'] = $this->ion_auth->users()->result();
		foreach ($this->data['users'] as $k => $user)
		{
			$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
		}

    $this->template->title("Users");
		$this->template->build('auth/index', $this->data);


	}

	//log the user in
	function login()
	{
		$this->template->title("Login");

		//validate form input
		$this->form_validation->set_rules('identity', 'Identity', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true)
		{ //check to see if the user is logging in
			//check for "remember me"
			$remember = (bool) $this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
			{ //if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('browse', 'refresh');
			}
			else
			{ //if the login was un-successful
				//redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('auth/login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{  //the user is not logging in so display the login page
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['identity'] = array('name' => 'identity',
				'id' => 'identity',
				'type' => 'text',
				'value' => $this->form_validation->set_value('identity'),
			);
			$this->data['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
			);

			$this->template->build('auth/login', $this->data);
		}
	}

	//log the user out
	function logout()
	{
		$this->template->title("Logout");
		
		//log the user out
		$logout = $this->ion_auth->logout();

		//redirect them back to the page they came from
		redirect('auth', 'refresh');
	}

	//change password
	function change_password()
	{
		$this->form_validation->set_rules('old', 'Old password', 'required');
		$this->form_validation->set_rules('new', 'New Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
		$this->form_validation->set_rules('new_confirm', 'Confirm New Password', 'required');

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}

		$user = $this->ion_auth->user()->row();

		if ($this->form_validation->run() == false)
		{ //display the form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
			$this->data['old_password'] = array(
				'name' => 'old',
				'id'   => 'old',
				'type' => 'password',
			);
			$this->data['new_password'] = array(
				'name' => 'new',
				'id'   => 'new',
				'type' => 'password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
			);
			$this->data['new_password_confirm'] = array(
				'name' => 'new_confirm',
				'id'   => 'new_confirm',
				'type' => 'password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
			);
			$this->data['user_id'] = array(
				'name'  => 'user_id',
				'id'    => 'user_id',
				'type'  => 'hidden',
				'value' => $user->id,
			);

			//render

			$this->template->build('auth/change_password', $this->data);
		}
		else
		{
			$identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));

			$change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

			if ($change)
			{ //if the password was successfully changed
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				$this->logout();
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('auth/change_password', 'refresh');
			}
		}
	}

	//forgot password
	function forgot_password()
	{
		$this->template->title("Forgot Password");
		
		$this->form_validation->set_rules('email', 'Email Address', 'required');
		if ($this->form_validation->run() == false)
		{
			//setup the input
			$this->data['email'] = array('name' => 'email',
				'id' => 'email',
			);
			//set any errors and display the form
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->template->build('auth/forgot_password', $this->data);
		}
		else
		{
			//run the forgotten password method to email an activation code to the user
			$forgotten = $this->ion_auth->forgotten_password($this->input->post('email'));

			if ($forgotten)
			{ //if there were no errors
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect("auth/login", 'refresh'); //we should display a confirmation page here instead of the login page
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect("auth/forgot_password", 'refresh');
			}
		}
	}

	//reset password - final step for forgotten password
	public function reset_password($code = NULL)
	{
	  $this->template->title("Reset Password");
	  
		if (!$code)
		{
			show_404();
		}

		$user = $this->ion_auth->forgotten_password_check($code);

		if ($user)
		{  //if the code is valid then display the password reset form

			$this->form_validation->set_rules('new', 'New Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
			$this->form_validation->set_rules('new_confirm', 'Confirm New Password', 'required');

			if ($this->form_validation->run() == false)
			{//display the form
				//set the flash data error message if there is one
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

				$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
				$this->data['new_password'] = array(
					'name' => 'new',
					'id'   => 'new',
				'type' => 'password',
					'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
				);
				$this->data['new_password_confirm'] = array(
					'name' => 'new_confirm',
					'id'   => 'new_confirm',
					'type' => 'password',
					'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
				);
				$this->data['user_id'] = array(
					'name'  => 'user_id',
					'id'    => 'user_id',
					'type'  => 'hidden',
					'value' => $user->id,
				);
				$this->data['csrf'] = $this->_get_csrf_nonce();
				$this->data['code'] = $code;

				//render
				$this->load->view('auth/reset_password', $this->data);
			}
			else
			{
				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id')) {

					//something fishy might be up
					$this->ion_auth->clear_forgotten_password_code($code);

					show_404();

				} else {
					// finally change the password
					$identity = $user->{$this->config->item('identity', 'ion_auth')};

					$change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

					if ($change)
					{ //if the password was successfully changed
						$this->session->set_flashdata('message', $this->ion_auth->messages());
						$this->logout();
					}
					else
					{
						$this->session->set_flashdata('message', $this->ion_auth->errors());
						redirect('auth/reset_password/' . $code, 'refresh');
					}
				}
			}
		}
		else
		{ //if the code is invalid then send them back to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("auth/forgot_password", 'refresh');
		}
	}


	//activate the user
	function activate($id, $code=false)
	{
		if ($code !== false)
			$activation = $this->ion_auth->activate($id, $code);
		else if ($this->ion_auth->is_admin())
			$activation = $this->ion_auth->activate($id);

		if ($activation)
		{
			//redirect them to the auth page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect("auth", 'refresh');
		}
		else
		{
			//redirect them to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("auth/forgot_password", 'refresh');
		}
	}

	//deactivate the user
	function deactivate($id = NULL)
	{
	  $this->template->title("Deactivate User");
	  
		$id = $this->config->item('use_mongodb', 'ion_auth') ? (string) $id : (int) $id;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('confirm', 'confirmation', 'required');
		$this->form_validation->set_rules('id', 'user ID', 'required|alpha_numeric');

		if ($this->form_validation->run() == FALSE)
		{
			// insert csrf check
			$this->data['csrf'] = $this->_get_csrf_nonce();
			$this->data['target_user'] = $this->ion_auth->user($id)->row();

			$this->template->build('auth/deactivate_user', $this->data);
		}
		else
		{
			// do we really want to deactivate?
			if ($this->input->post('confirm') == 'yes')
			{
				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
				{
					show_404();
				}

				// do we have the right userlevel?
				if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin())
				{
					$this->ion_auth->deactivate($id);
				}
			}

			//redirect them back to the auth page
			redirect('auth', 'refresh');
		}
	}

	//create a new user
	function create_user()
	{
		$this->template->title("Create User");

		//validate form input
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');

		if ($this->form_validation->run() == true)
		{
			$username = strtolower($this->input->post('first_name')) . ' ' . strtolower($this->input->post('last_name'));
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$additional_data = array('first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'phone' => $this->input->post('phone'),
				'billing_address' => $this->input->post('billing_address'),
				'billing_city' => $this->input->post('billing_address'),
				'billing_state' => $this->input->post('billing_address'),
				'billing_postal_code' => $this->input->post('billing_address'),
				'billing_country' => $this->input->post('billing_country'),
				'photo' => $this->input->post('photo'),
				'bio' => $this->input->post('bio'),
			);
		}
		if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data))
		{ //check to see if we are creating the user
			//redirect them back to the admin page
			$this->session->set_flashdata('message', "User Created");
			
			// Automatically log user in
			$this->ion_auth->login($this->input->post('email'), $this->input->post('password'), FALSE);
			redirect("/", 'refresh');
		}
		else
		{ //display the create user form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

      $this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');

			$this->data['first_name'] = array('name' => 'first_name',
				'id' => 'first_name',
				'type' => 'text',
				'value' => $this->form_validation->set_value('first_name'),
			);
			$this->data['last_name'] = array('name' => 'last_name',
				'id' => 'last_name',
				'type' => 'text',
				'value' => $this->form_validation->set_value('last_name'),
			);
			$this->data['email'] = array('name' => 'email',
				'id' => 'email',
				'type' => 'text',
				'value' => $this->form_validation->set_value('email'),
			);
			$this->data['phone'] = array('name' => 'phone',
				'id' => 'phone',
				'type' => 'text',
				'value' => $this->form_validation->set_value('phone'),
			);
			$this->data['billing_address'] = array('name' => 'billing_address',
				'id' => 'billing_address',
				'type' => 'text',
				'value' => $this->form_validation->set_value('billing_address'),
			);
			$this->data['billing_city'] = array('name' => 'billing_city',
				'id' => 'billing_city',
				'type' => 'text',
				'value' => $this->form_validation->set_value('billing_city'),
			);
			$this->data['billing_state'] = array('name' => 'billing_state',
				'id' => 'billing_state',
				'type' => 'text',
				'value' => $this->form_validation->set_value('billing_state'),
			);			
			$this->data['billing_postal_code'] = array('name' => 'billing_postal_code',
				'id' => 'billing_postal_code',
				'type' => 'text',
				'value' => $this->form_validation->set_value('billing_postal_code'),
			);
			$this->data['country_options'] = array(
      		"Afghanistan",
      		"Albania",
      		"Algeria",
      		"Andorra",
      		"Angola",
      		"Antigua and Barbuda",
      		"Argentina",
      		"Armenia",
      		"Australia",
      		"Austria",
      		"Azerbaijan",
      		"Bahamas",
      		"Bahrain",
      		"Bangladesh",
      		"Barbados",
      		"Belarus",
      		"Belgium",
      		"Belize",
      		"Benin",
      		"Bhutan",
      		"Bolivia",
      		"Bosnia and Herzegovina",
      		"Botswana",
      		"Brazil",
      		"Brunei",
      		"Bulgaria",
      		"Burkina Faso",
      		"Burundi",
      		"Cambodia",
      		"Cameroon",
      		"Canada",
      		"Cape Verde",
      		"Central African Republic",
      		"Chad",
      		"Chile",
      		"China",
      		"Colombi",
      		"Comoros",
      		"Congo (Brazzaville)",
      		"Congo",
      		"Costa Rica",
      		"Cote d'Ivoire",
      		"Croatia",
      		"Cuba",
      		"Cyprus",
      		"Czech Republic",
      		"Denmark",
      		"Djibouti",
      		"Dominica",
      		"Dominican Republic",
      		"East Timor (Timor Timur)",
      		"Ecuador",
      		"Egypt",
      		"El Salvador",
      		"Equatorial Guinea",
      		"Eritrea",
      		"Estonia",
      		"Ethiopia",
      		"Fiji",
      		"Finland",
      		"France",
      		"Gabon",
      		"Gambia, The",
      		"Georgia",
      		"Germany",
      		"Ghana",
      		"Greece",
      		"Grenada",
      		"Guatemala",
      		"Guinea",
      		"Guinea-Bissau",
      		"Guyana",
      		"Haiti",
      		"Honduras",
      		"Hungary",
      		"Iceland",
      		"India",
      		"Indonesia",
      		"Iran",
      		"Iraq",
      		"Ireland",
      		"Israel",
      		"Italy",
      		"Jamaica",
      		"Japan",
      		"Jordan",
      		"Kazakhstan",
      		"Kenya",
      		"Kiribati",
      		"Korea, North",
      		"Korea, South",
      		"Kuwait",
      		"Kyrgyzstan",
      		"Laos",
      		"Latvia",
      		"Lebanon",
      		"Lesotho",
      		"Liberia",
      		"Libya",
      		"Liechtenstein",
      		"Lithuania",
      		"Luxembourg",
      		"Macedonia",
      		"Madagascar",
      		"Malawi",
      		"Malaysia",
      		"Maldives",
      		"Mali",
      		"Malta",
      		"Marshall Islands",
      		"Mauritania",
      		"Mauritius",
      		"Mexico",
      		"Micronesia",
      		"Moldova",
      		"Monaco",
      		"Mongolia",
      		"Morocco",
      		"Mozambique",
      		"Myanmar",
      		"Namibia",
      		"Nauru",
      		"Nepa",
      		"Netherlands",
      		"New Zealand",
      		"Nicaragua",
      		"Niger",
      		"Nigeria",
      		"Norway",
      		"Oman",
      		"Pakistan",
      		"Palau",
      		"Panama",
      		"Papua New Guinea",
      		"Paraguay",
      		"Peru",
      		"Philippines",
      		"Poland",
      		"Portugal",
      		"Qatar",
      		"Romania",
      		"Russia",
      		"Rwanda",
      		"Saint Kitts and Nevis",
      		"Saint Lucia",
      		"Saint Vincent",
      		"Samoa",
      		"San Marino",
      		"Sao Tome and Principe",
      		"Saudi Arabia",
      		"Senegal",
      		"Serbia and Montenegro",
      		"Seychelles",
      		"Sierra Leone",
      		"Singapore",
      		"Slovakia",
      		"Slovenia",
      		"Solomon Islands",
      		"Somalia",
      		"South Africa",
      		"Spain",
      		"Sri Lanka",
      		"Sudan",
      		"Suriname",
      		"Swaziland",
      		"Sweden",
      		"Switzerland",
      		"Syria",
      		"Taiwan",
      		"Tajikistan",
      		"Tanzania",
      		"Thailand",
      		"Togo",
      		"Tonga",
      		"Trinidad and Tobago",
      		"Tunisia",
      		"Turkey",
      		"Turkmenistan",
      		"Tuvalu",
      		"Uganda",
      		"Ukraine",
      		"United Arab Emirates",
      		"United Kingdom",
      		"United States",
      		"Uruguay",
      		"Uzbekistan",
      		"Vanuatu",
      		"Vatican City",
      		"Venezuela",
      		"Vietnam",
      		"Yemen",
      		"Zambia",
      		"Zimbabwe"
      	);
			$this->data['phone'] = array('name' => 'phone',
				'id' => 'phone',
				'type' => 'text',
				'value' => $this->form_validation->set_value('phone'),
			);
			$this->data['bio'] = array('name' => 'bio',
				'id' => 'bio',
				'type' => 'textarea',
				'class' => 'input-xlarge',
				'rows' => '5',
				'cols' => '80',
				'value' => $this->form_validation->set_value('bio'),
			);
			$this->template->append_metadata('<script src="//api.filepicker.io/v0/filepicker.js"></script>');
			$this->data['photo'] = array('name' => 'photo',
				'id' => 'photo',
				'type' => 'filepicker-dragdrop',
				'data-fp-apikey' => $this->config->item('filepicker_api_key'),
				'data-fp-option-services' => $this->config->item('filepicker_option_services'),
				'value' => $this->form_validation->set_value('photo'),
			);
			$this->data['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
				'value' => $this->form_validation->set_value('password'),
			);
			$this->data['password_confirm'] = array('name' => 'password_confirm',
				'id' => 'password_confirm',
				'type' => 'password',
				'value' => $this->form_validation->set_value('password_confirm'),
			);
			$this->template->build('auth/create_user', $this->data);
		}
	}

	function _get_csrf_nonce()
	{
		$this->load->helper('string');
		$key = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return array($key => $value);
	}

	function _valid_csrf_nonce()
	{
		if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
				$this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

}
