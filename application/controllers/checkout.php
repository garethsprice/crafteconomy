<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends MY_Controller {
  public $login_required = TRUE;
  
  public function __construct() {
    parent::__construct();
    $this->load->model('products_model');
  }
  
	public function index($id)
	{	  
	  $this->load->model('products_model');
	  $this->load->model('account_model');
	  $this->load->model('sms_model');
	  
	  $this->load->library('form_validation');
	  $this->load->library('session');
	  
  	$this->template->title("Checkout");

		$this->form_validation->set_rules('credit_card', 'Credit card', 'required');
		$this->form_validation->set_rules('expiration_month', 'Expiration month', 'required');
		$this->form_validation->set_rules('expiration_year', 'Expiration year', 'required');

	  $this->data['product'] = $this->products_model->get_entries($id);
		
		if ($this->form_validation->run() == TRUE)
		{
		  require_once(APPPATH.'libraries/temboo/php-sdk/src/temboo.php');
      // Instantiate a Temboo session with valid API key credentials

      $session = new Temboo_Session($this->config->item('temboo_account_name'), $this->config->item('temboo_api_key_name'), $this->config->item('temboo_api_key_value'));

      // Instantiate the choreography using the session object
      $createNewChargeWithCreditCard = new Stripe_CreateNewChargeWithCreditCard($session);

      // Get an input object for the choreo
      $inputs = $createNewChargeWithCreditCard->newInputs();
      
      $amount = (int) ($this->data['product']['price'] * 100);
      
      $inputs->setAmount($amount)
             ->setCardNumber($this->input->post('credit_card', TRUE))
             ->setExpirationMonth($this->input->post('expiration_month', TRUE))
             ->setExpirationYear($this->input->post('expiration_year', TRUE))
             ->setAPISecretKey($this->config->item('stripe_secret_key'));

      // Execute choreography and get results
      // Kind of dirty, no easy way to get exception details.
      // Maybe talk to the Temboo guys about this.
      try {
        $results = $createNewChargeWithCreditCard->execute($inputs)->getResults();		  
  		  //$response = $results->getResponse();
  		  
  		  $user = $this->ion_auth->user()->row();
  		  
  		  $seller = $this->products_model->get_seller($this->data['product']['id']);
  		  
  		  $this->account_model->payment_start_order($this->data['product']['id'], $user->id);
  		  
  		  $this->sms_model->send($seller['phone'], 'NEW ORDER: ' . $this->data['product']['title'] . ' AMT: '. $this->data['product']['price'] .' SEND: ' . implode(', ', array($user->shipping_address, $user->shipping_city, $user->shipping_state, $user->shipping_postal_code, $user->shipping_country)) . '. Reply "OK ' . $this->db->insert_id() . '" to accept.');
  		  
  		  $this->products_model->add_purchase($this->data['product']['id']);
  		  
  			redirect('account/orders', 'refresh');
		  } catch (Temboo_Exception_Execution $e) {
		    $message = $e->getMessage();
		    preg_match('/"message": "(.*)"/', $message, $matches);
		    $error['message'] = $matches[1];
		    preg_match('/"type": "(.*)"/', $message, $matches);
		    $error['type'] = $matches[1];
		    $this->session->set_userdata('message', '<p>' . $error['message'] . '</p>');
		  }
		}
		
		//setup the input
		$this->data['credit_card'] = array('name' => 'credit_card',
			'id' => 'credit_card',
			'class' => 'input-xlarge required span6',
		);
		
		$this->data['expiration_month'] = array('name' => 'expiration_month',
			'id' => 'expiration_month',
			'class' => 'input-xlarge required span1',
			'placeholder' => 'Month',
		);

		$this->data['expiration_year'] = array('name' => 'expiration_year',
			'id' => 'expiration_year',
			'class' => 'input-xlarge required span2',
			'placeholder' => 'Year',
		);

		//set any errors and display the form
		$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message') . $this->session->userdata('message');
    $this->session->set_userdata('message', NULL);

  	$this->template->build('checkout/index', $this->data);
		
	}
}