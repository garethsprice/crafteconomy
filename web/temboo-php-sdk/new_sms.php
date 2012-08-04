<?
require 'src/temboo.php';
// Instantiate a Temboo session with valid API key credentials
//$session = new Temboo_Session('ACCOUNT_NAME', 'API_KEY_NAME', 'API_KEY_VALUE');
$session = new Temboo_Session("crafteconomy", "crafteconomy", "e1cb547d-69ef-494a-b");

// Instantiate the choreography using the session object
$sendSMS = new Twilio_SendSMS($session);

// Get an input object for the choreo
//AccountSID, AuthToken, Body, From, and To
$sendArray = array('AccountSID' => 'AC9ffdc4c5d3742f48f2921fa652f25575', 
		'AuthToken' => 'adf8defd80c305655cbdf6b2218091a5', 
		'Body' => 'hi test two', 
		'From' => '3474973023', 
		'To' => '4074089561'
	);
$inputs = $sendSMS->newInputs($sendArray);
// $inputs = $sendSMS->newInputs('<body>hi test one</body>
// <from>+13474973023</from>
// <to>+14074089561</to>
// ');

// Execute choreography and get results
$results = $sendSMS->execute($inputs)->getResults();
?>