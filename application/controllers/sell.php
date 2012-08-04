<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sell extends MY_Controller {
  public $login_required = TRUE;
  
	public function index()
	{	  
	  $this->load->library('form_validation');
	  
  	$this->template->append_metadata('<script src="//api.filepicker.io/v0/filepicker.js"></script>');
  	
  	$this->template->title("Sell");

		$this->form_validation->set_rules('title', 'Title', 'required');
		if ($this->form_validation->run() == false)
		{
			//setup the input
			$this->data['title'] = array('name' => 'title',
				'id' => 'title',
			);
			$this->data['description'] = array('name' => 'description',
				'id' => 'description',
			);
			$this->data['price'] = array('name' => 'price',
				'id' => 'price',
			);
			$this->template->append_metadata('<script src="//api.filepicker.io/v0/filepicker.js"></script>');
			$this->data['photo'] = array('name' => 'photo',
				'id' => 'photo',
				'type' => 'filepicker-dragdrop',
				'data-fp-apikey' => $this->config->item('filepicker_api_key'),
				'data-fp-option-services' => $this->config->item('filepicker_option_services'),
				'value' => $this->form_validation->set_value('photo'),
			);
			//set any errors and display the form
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->template->build('sell/index', $this->data);
		}
		else
		{
			// Save item
		}
	}
}