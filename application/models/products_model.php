<?php
class Products_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }
  
  public function get_entries($id = FALSE)
  {
  	if ($id === FALSE)
  	{
  		$query = $this->db->get('products');
  		return $query->result_array();
  	}

  	$query = $this->db->get_where('products', array('id' => $id));
  	return $query->row_array();
  }
  
  public function get_seller($id)
  {
    $query = $this->db->get_where('products', array('id' => $id));
  	$seller_id = $query->row()->seller_id;    
  	$query = $this->db->get_where('users', array('id' => $seller_id));
  	return $query->row_array();
  }
  
  /**
   * Save an entry to the database
   */
  public function set_entry() {
    // Set entry metadata
    $date_submitted = date('Y-m-d H:i:s');
    $user = $this->ion_auth->user()->row();

	  $maker_phone = $this->input->post('maker_phone', TRUE);

    $data = array(
      'seller_id' => $user->id,
      'title' => $this->input->post('title', TRUE),
      'description' => $this->input->post('description', TRUE),
      'price' => $this->input->post('price', TRUE),
      'photo' => $this->input->post('photo', TRUE),
      'date_submitted' => $date_submitted,
      'status' => 1,
    );

	  if(!empty($maker_phone)) {
	    // Check intermediary
	    $query = $this->db->get_where('users', array('phone' => $maker_phone));
	    $row = $query->row_array();
	    $data['seller_id'] = $row['id'];
	    $data['intermediary_id'] = $user->id;
	  }
    
    return $this->db->insert('products', $data);
  }
  
  /**
   * Increments a seller's and intermediary's account balance
   */
  public function add_purchase($id) {
    $product = $this->get_entries($id);
    
    if($product['intermediary_id'] > 0) {
      $intermediary = $this->db->get_where('users', array('id' => $product['intermediary_id']))->row_array();
      $intermediary_commission = $product['price'] * 0.10;
      
      $this->db->query('UPDATE users SET account_balance = account_balance + ' . $intermediary_commission . ' WHERE id=' . $intermediary['id']);
      
      $seller_commission = $product['price'] * 0.85;
    } else {
      $seller_commission = $product['price'] * 0.95;
    }
    
    return $this->db->query('UPDATE users SET account_balance = account_balance + ' . $seller_commission . ' WHERE id=' . $product['seller_id']);
  }
}