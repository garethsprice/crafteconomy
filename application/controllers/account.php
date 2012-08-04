<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends MY_Controller {
  public $login_required = TRUE;
  
	public function orders()
	{	  
    $this->template->title('Orders');
  	$this->template->build('account/orders');
	}
	
	public function payments()
	{	  
    $this->template->title('Account Balance and Payments');
  	$this->template->build('account/payments');
	}
}