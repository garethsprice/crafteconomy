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
  
  /**
   * Save an entry to the database
   */
  public function set_entry() {
    // Set entry metadata
    $date_submitted = date('Y-m-d H:i:s');
    $user = $this->ion_auth->user()->row();

    $data = array(
      'seller_id' => $user->id,
      'title' => $this->input->post('title', TRUE),
      'description' => $this->input->post('description', TRUE),
      'price' => $this->input->post('price', TRUE),
      'photo' => $this->input->post('photo', TRUE),
      'date_submitted' => $date_submitted,
      'status' => 1,
    );
    
    return $this->db->insert('products', $data);
  }
}