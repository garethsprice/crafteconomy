<?php
class MY_Controller extends CI_Controller {
  function __construct() {
    parent::__construct();
    
    $this->load->helper('url');
    
    if(!empty($this->login_required) && $this->login_required) {
      $this->load->library('ion_auth');
      		
  		if (!$this->ion_auth->logged_in()) 
  		{
  			//redirect them to the login page
  			redirect('login', 'refresh');
  		} 
	  }
	  
	  if(!empty($this->admin_required) && $this->admin_required) {
	    $this->load->library('ion_auth');
	    
    	if (!$this->ion_auth->is_admin()) {
  			//redirect them to the home page because they must be an administrator to view this
  			redirect($this->config->item('base_url'), 'refresh');
  		}
    }

    $user = $this->ion_auth->user()->row();
    if(!empty($user)) {
      // Set variables for authenticated users
    }
    
    // Define main menu
    $this->load->spark('menu/1.0.0');

    $nav = array();
    $nav['browse'] = '<i class="icon-th-list"></i> Buy';
    $nav['sell'] = '<i class="icon-th-list"></i> Sell';
    if(empty($user)) {
      $nav['register'] = '<i class="icon-th-list"></i> Register';
      $nav['login'] = '<i class="icon-th-list"></i> Login';
    } else {
      $nav['account/settings'] = '<i class="icon-user"></i> Account';
      $nav['logout'] = '<i class="icon-user"></i> Log out';
    }
    
    $active = ltrim($_SERVER['REQUEST_URI'], '/');
    
    $this->menu->container_tag_id = 'main-nav';
    $this->menu->container_tag_class = 'nav nav-tabs nav-stacked';
    $menu = $this->menu->render($nav, $active, NULL, 'basic');
    $this->template->set('main_nav', $menu);
  }
}