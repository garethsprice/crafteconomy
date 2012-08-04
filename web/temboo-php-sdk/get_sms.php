<?php

require 'src/temboo.php';

// Instantiate a Temboo session with valid API key credentials
$session = new Temboo_Session("crafteconomy", "crafteconomy", "e1cb547d-69ef-494a-b");

// Instantiate the choreography using the session object
$getSMSList = new Twilio_GetSMSList($session);

// Get an input object for the choreo
$inputs = $getSMSList->newInputs();

// Execute choreography and get results
$results = $getSMSList->execute($inputs)->getResults();

?>