<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sell extends MY_Controller {
  public $login_required = TRUE;
  
	public function index()
	{	  
    $this->template->title('Sell');
  	$this->template->build('sell/index');
	}
}