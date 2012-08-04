<?php
class User_logs extends CI_Model {
  public function __construct() {
    $this->load->database();
  }
  
  /**
   * Save an entry to the database
   */
  public function write($text) {
  	$data['log_message'] = $text;
  	$DateOfRequest = date("Y-m-d H:i:s");
  	$data['timestamp'] = $DateOfRequest;
		return $this->db->insert('user_logs', $data);
	}
}