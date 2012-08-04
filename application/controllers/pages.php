<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MY_Controller {
	public function view($page = 'home')
	{	  
  	if ( ! file_exists('application/themes/crafteconomy/views/pages/'.$page.'.php'))
  	{
  		// Whoops, we don't have a page for that!
  		show_404();
  	}

    $this->template->title(ucwords(str_replace('-', ' ', $page)));
  	$this->template->build('pages/' . $page);
	}
}