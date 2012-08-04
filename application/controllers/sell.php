<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sell extends MY_Controller {
  public $login_required = TRUE;
  
	public function index()
	{	  
	  $this->load->library('form_validation');
	  
  	$this->template->append_metadata('<script src="//api.filepicker.io/v0/filepicker.js"></script>');
	  
    $this->template->title('Sell');
  	$this->template->build('sell/index');
	}
}