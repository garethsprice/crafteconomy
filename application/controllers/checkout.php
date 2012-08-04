<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends MY_Controller {
	public function index()
	{	  
    $this->template->title('Checkout');
  	$this->template->build('checkout/index');
	}
}