<?php
class Sms_model extends CI_Model {
  public function __construct() {
    $this->load->database();
    
    require_once(APPPATH.'libraries/temboo/php-sdk/src/temboo.php');
		// Instantiate a Temboo session with valid API key credentials
		$this->temboo_session = new Temboo_Session($this->config->item('temboo_account_name'), $this->config->item('temboo_api_key_name'), $this->config->item('temboo_api_key_value'));
  }
  
  public function send($to, $body)
	{	  
		// Instantiate the choreography using the session object
		$sendSMS = new Twilio_SendSMS($this->temboo_session);

		// Get an input object for the choreo
		// AccountSID, AuthToken, Body, From, and To
		$sendArray = array('AccountSID' => $this->config->item('twilio_accountsid'), 
				'AuthToken' => $this->config->item('twilio_authtoken'), 
				'Body' => $body, 
				'From' => $this->config->item('twilio_from'), 
				'To' => $to
			);
		$inputs = $sendSMS->newInputs($sendArray);

		// Execute choreography and get results
		$results = $sendSMS->execute($inputs)->getResults();
	}
}