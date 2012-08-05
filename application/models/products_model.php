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
}