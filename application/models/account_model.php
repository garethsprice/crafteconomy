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
    return $this->db->update('orders', $data);
  }
}