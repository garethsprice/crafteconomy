<?php
//
//require 'php-sdk/src/temboo.php';
require 'src/temboo.php';

echo "Searching Twitter...\n";

// Instantiate a Temboo session with valid API key credentials
$session = new Temboo_Session("crafteconomy", "crafteconomy", "e1cb547d-69ef-494a-b");

// Instantiate the choreography using the session object
$searchFilter = new Twitter_Search_SearchFilter($session);

// Get an input object for the choreo
$inputs = $searchFilter->newInputs();

// Set the inputs
$inputs->setSearchString('Elvis')->setFilter('Costello')->setResultsPerPage(10);

// Execute choreography and get results
$results = $searchFilter->execute($inputs)->getResults();

// Print the result
echo $results->getResponse();

echo "\n\nDone.\n";
?>