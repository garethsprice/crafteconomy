<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales extends MY_Controller {
  public $login_required = TRUE;

  public function __construct() {
    parent::__construct();
    $this->load->model('account_model');
  }

	public function index()
	{
		$data = array();
	  $data['orders'] = $this->account_model->get_sales();
	  $data['balance'] = $this->account_model->get_balance();
    $this->template->title('Browse Sales');
  	$this->template->build('account/sales_view', $data);
	}
}