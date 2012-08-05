<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('products_model');
  }
  
	public function browse()
	{	  
	  $data = array();
	  $data['products'] = $this->products_model->get_entries();
	  
    $this->template->title('Browse Products');
  	$this->template->build('products/browse', $data);
	}

	public function view($id)
	{	  
	  $data = array();
	  $data['id'] = $id;
	  
    $this->template->title('View an individual product');
  	$this->template->build('products/view', $data);
	}
	
	public function sell()
	{
    $this->template->title('View an individual product');
  	$this->template->build('products/view', $data);	  
	}
}