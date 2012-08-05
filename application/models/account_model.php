<?php
class Account_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }
  
  /**
   * Save an entry to the database
   */
  public function payment_start_order($product, $buyer) {    
  	$DateOfRequest = date("Y-m-d H:i:s");
    $data['product_id'] = $product;
  	$data['date_purchased'] = $DateOfRequest;
    $data['buyer_id'] = $buyer;
    $data['order_status'] = 'Pending';
		return $this->db->insert('orders', $data);
	}

  public function order_update($order, $order_status) {
    $data['order_status'] = $order_status;
    
    $this->db->where('id', $order);
    $result = $this->db->update('orders', $data);
  
    $order = $this->get_orders($order);
    $buyer = $this->db->get_where('users', array('id' => $order['buyer_id']))->row_array();

    if($result) {
  		//$message = $this->load->view('account/email/order_update.tpl.php', $data);
  		$message = '<h1>Craft Economy</h1>
    	<p>Your order is now ' . $order_status . '</p>
    	<p>Thanks for using Craft Economy!</p>';
  		$this->email->clear();
  		$this->email->from($this->config->item('admin_email', 'ion_auth'), $this->config->item('site_title', 'ion_auth'));
  		$this->email->to($buyer['email']);
  		$this->email->subject('Your Craft Economy order (#' . $order['id'] . ')');
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
      $query = $this->db->get_where('orders', array('buyer_id' => $user->id));
      //$query = $this->db->get_where('orders', array('buyer_id' => 88));
      return $query->result_array();
    }

    $query = $this->db->get_where('orders', array('id' => $id));
    return $query->row_array();
  }
}