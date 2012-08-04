<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {
	public function browse()
	{	  
    $this->template->title('Browse Products');
  	$this->template->build('products/browse');
	}

	public function view($id)
	{	  
	  $data = array();
	  $data['id'] = $id;
	  
    $this->template->title('View an individual product');
  	$this->template->build('products/view', $data);
	}
}