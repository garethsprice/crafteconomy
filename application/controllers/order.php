<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MY_Controller {
  public $login_required = TRUE;

  public function __construct() {
    parent::__construct();
    $this->load->model('account_model');
  }
  
  // This is taken care of in sms.php controller
	// public function orders($order, $order_status)
	// {	  
	// 	$this->account_model->order_update($order, $order_status);
 //    $this->template->title('Orders');
 //  	$this->template->build('account/orders');


	// }
	
	public function payments($product_id)
	{	
		$user = $this->ion_auth->user()->row();
		$this->account_model->payment_start_order($product_id, $user);
    $this->template->title('Account Balance and Payments');
  	$this->template->build('account/payments');
	}
}