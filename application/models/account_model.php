<?php
class Account_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }
  
  /**
   * Save an entry to the database
   */
  public function payment_start_order($product, $buyer) {   
    $buyer = $this->db->get_where('users', array('id' => $buyer))->row_array();
     
  	$DateOfRequest = date("Y-m-d H:i:s");
    $data['product_id'] = $product;
  	$data['date_purchased'] = $DateOfRequest;
    $data['buyer_id'] = $buyer['id'];
    $data['order_status'] = 'Pending';
    
		$result = $this->db->insert('orders', $data);
		
		$message = '<h1>CraftEconomy</h1>
  	<p>Your order was received and is processing.</p>
  	<p>Thanks for using Craft Economy!</p>';
		$this->email->clear();
		$this->email->from($this->config->item('admin_email', 'ion_auth'), $this->config->item('site_title', 'ion_auth'));
		$this->email->to($buyer['email']);
		$this->email->subject('Receipt for your CraftEconomy order (#' . $this->db->insert_id() . ')');
		$this->email->message($message);
    $this->email->send();
    
    return $result;
	}

  public function order_update($order, $order_status) {
    $data['order_status'] = $order_status;
    
    $this->db->where('id', $order);
    $result = $this->db->update('orders', $data);
  
    $order = $this->get_orders($order);
    $buyer = $this->db->get_where('users', array('id' => $order['buyer_id']))->row_array();

    if($result) {
  		//$message = $this->load->view('account/email/order_update.tpl.php', $data);
  		$message = '<h1>CraftEconomy</h1>
    	<p>Your order is now ' . $order_status . '</p>
    	<p>Thanks for using CraftEconomy!</p>';
  		$this->email->clear();
  		$this->email->from($this->config->item('admin_email', 'ion_auth'), $this->config->item('site_title', 'ion_auth'));
  		$this->email->to($buyer['email']);
  		$this->email->subject('Update for your CraftEconomy order (#' . $order['id'] . ')');
  		$this->email->message($message);
      $this->email->send();
    }
    
    return $result;
  }

  public function get_orders($id = FALSE)
  {
    if ($id === FALSE)
    {
      $user = $this->ion_auth->user()->row();
      // when user ids are in the database
      $this->db->select('*'); 
      $this->db->from('orders');
      $this->db->where('buyer_id', $user->id);
      $this->db->join('products', 'orders.product_id = products.id');
      $query = $this->db->get();
      return $query->result_array();
    }

    $query = $this->db->get_where('orders', array('id' => $id));
    return $query->row_array();
  }

  public function get_sales($id = NULL)
  {
    if (!$id)
    {
      $user = $this->ion_auth->user()->row();
      $this->db->select('*'); 
      $this->db->from('products');
      $this->db->where('seller_id', $user->id);
      $this->db->join('orders', 'orders.product_id = products.id');
      $query = $this->db->get();
      
      return $query->result_array();
    }
  
    $query = $this->db->select('orders.*, products.title')
                  ->from('orders')
                  ->join('products', 'orders.product_id = products.id');
                  
    return $query->row_array();
  }
  
  /**
   * Returns the balance as a floating point number
   */
  public function get_balance($id = NULL) 
  {
    if(!$id) {
      $user = $this->ion_auth->user()->row();
    } else {
      $user = $this->db->get_where('users', array('id' => $id))->row_array();
    }
    return $user->account_balance;
  }
  
  /**
   * Allows a user to cash out via Paypal
   */
  public function cashout() 
  {
    
  }
}