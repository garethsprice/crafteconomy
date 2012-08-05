<?php
class Products_model extends CI_Model {
  public function __construct() {
    $this->load->database();
  }
  
  public function get_entries($id = FALSE)
  {
  	if ($id === FALSE)
  	{
  		$query = $this->db->get('entries');
  		return $query->result_array();
  	}

  	$query = $this->db->get_where('entries', array('id' => $id));
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
  
  /**
   * Inserts a duplicate entry for a user who has earned a second go.
   */
  public function clone_entry($id) {
    $query = $this->db->get_where('entries', array('id' => $id));
  	$data = $query->row_array();
  	// Mark this in the database as a second entry for later filtering
  	$data['bonus_entry'] = 1;
  	unset($data['id']);
  	return $this->db->insert('entries', $data);
  }
  
  /**
   * Returns the closest store to a zip code with a maximum bound
   */
  public function get_closest_store($zip, $max_distance=0.75) { 
    $sql = "SELECT s.*, GLength(LineString(`point`, (SELECT point FROM zipcodes WHERE zipcode=?))) 
      AS distance 
      FROM stores s 
      INNER JOIN zipcodes z 
      ON s.zipcode = z.zipcode 
      WHERE GLength(LineString(`point`, (SELECT point FROM zipcodes WHERE zipcode=?))) < ? 
      AND z.decommissioned = 'false'
      ORDER BY distance ASC 
      LIMIT 1";
      
    $query = $this->db->query($sql, array($zip, $zip, $max_distance));
    
    if($query) {
      return $query->row();
    }
  }
  
  /**
   * Returns TRUE if a zip code is valid
   */
  public function valid_zip_code($zip) {
    // Simple fast check for a 5-digit numeric string
    if(!is_numeric($zip) || strlen($zip) != 5) {
      return FALSE;
    }
    
    // More expensive but final query to make sure zip is valid
    $query = $this->db->query("SELECT zipcode FROM zipcodes WHERE zipcode=?", array($zip));
    return ($query->num_rows() > 0) ? TRUE : FALSE;
  }
  
  /**
   * Given a latitude and longitude, return the closest zip code.
   * Not super-accurate as the DB is accurate to .6 of a sq mile which in Manhattan
   * is 50+ zip codes, and you can be closer to the center of one zipcode
   * whilst still being physically located in another code... but client wants
   * to see a demo :)
   */
  public function latlng_to_zip($lat, $lng) {
    $sql = "SELECT zipcode, GLength(LineString(`point`, POINT(?, ?))) 
      AS distance 
      FROM zipcodes
      WHERE `point` IS NOT NULL
      AND decommissioned = 'false'
      ORDER BY distance ASC 
      LIMIT 1";  
      
    $query = $this->db->query($sql, array($lat, $lng));
    
    if($query) {
      return $query->row()->zipcode;
    }  
  }
  
  public function get_zipcode($zip)
  {
  	$query = $this->db->get_where('zipcodes', array('zipcode' => $zip));
  	return $query->row_array();
  }
}