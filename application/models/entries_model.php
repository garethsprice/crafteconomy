<?php
class Entries_model extends CI_Model {
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
   * Returns JSON containing various stats for rendering the admin dashboard
   */
  public function get_feed()
  {
    // Use microtime to record execution time for benchmarking
    $time_start = microtime(TRUE);
    
    $feed = array();
    
    $query = $this->db->query('SELECT gender AS `key`,COUNT(gender) AS count FROM entries GROUP BY gender');
    
    $total = 0;
    foreach($query->result() as $row) {
      if(empty($row->key)) {
        $row->key = "undefined";
      }
      $feed['stats'][$row->key] = (int)$row->count;
      $total += $row->count;
    }
    $feed['stats']['total'] = (int)$total;
    
    $query = $this->db->query('SELECT DATE_FORMAT(upload_datetime, "%m/%d/%Y %H:%i") AS upload_datetime,name,CONCAT(stores.address, ", ", stores.city, ", ", stores.state) AS closest_store FROM entries INNER JOIN stores ON entries.closest_store = stores.id ORDER BY entries.upload_datetime DESC LIMIT 10');
    $feed['recent_entries'] = $query->result();
    
    $query = $this->db->query('SELECT COUNT(closest_store) AS count ,CONCAT(stores.address, ", ", stores.city, ", ", stores.state) AS store FROM entries INNER JOIN stores ON closest_store = stores.id GROUP by closest_store ORDER BY COUNT(closest_store) DESC LIMIT 10');
    $feed['popular_stores'] = $query->result();
    
    $query = $this->db->query("SELECT COUNT(id) AS count, UNIX_TIMESTAMP(DATE(upload_datetime))*1000 AS javascript_timestamp FROM entries WHERE upload_datetime BETWEEN CURDATE() - INTERVAL 30 DAY AND NOW() GROUP BY DATE_FORMAT(upload_datetime, '%m/%d/%Y') ORDER BY upload_datetime DESC LIMIT 600");
    $result = $query->result();
    foreach($result as $row) {
      $feed['chart_data'][] = array((double)$row->javascript_timestamp, (int)$row->count);
    }
    
    $feed['benchmark'] = microtime(TRUE) - $time_start;
    
    return $feed;
  }
  
  /**
   * Returns the number of new entries since a given date.
   * Used for returning new entries since last login
   */
  public function get_new_entries_counter($since) {
    $query = $this->db->query('SELECT COUNT(id) AS new_entries FROM entries WHERE upload_datetime > FROM_UNIXTIME('.$since.')');
    return $query->row()->new_entries;
  }
  
  /**
   * Save an entry to the database
   */
  public function set_entry() {
    // Set entry metadata
    $closest_store = $this->get_closest_store($this->input->post('zip', TRUE));
    $interests = $this->input->post('interests', TRUE);
    $interests = is_array($interests) ? implode(', ', $interests) : NULL;
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $upload_datetime = date('Y-m-d H:i:s');
 
    $zipcode = $this->get_zipcode($this->input->post('zip', TRUE));
 
    $adr_zipcode = $this->get_zipcode($this->input->post('adr_zip', TRUE));

    $data = array(
      'email_address' => $this->input->post('email_address', TRUE),
      'name' => $this->input->post('name', TRUE),
      'zip' => $zipcode['zipcode'],
      'phone' => $this->input->post('phone', TRUE),
      'opt_in' => ('' === $this->input->post('opt_in', TRUE)) ? 1 : 0,
      'send_catalog' => ('' === $this->input->post('address', TRUE)) ? 0 : 1,
      'address' => $this->input->post('address', TRUE),
      'city' => ('' === $this->input->post('city')) ? $zipcode['city'] : $this->input->post('city', TRUE),
      'adr_zip' => $this->input->post('adr_zip', TRUE),
      'state' => ('' === $this->input->post('state')) ? $zipcode['state'] : $this->input->post('state', TRUE),
      'gender' => $this->input->post('gender', TRUE),
      'interests' => $interests,
      'closest_store' => !empty($closest_store) ? $closest_store->id : NULL,
      'user_agent' => $user_agent,
      'ip_address' => $ip_address,
      'upload_datetime' => $upload_datetime,
    );
    
    return $this->db->insert('entries', $data);
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