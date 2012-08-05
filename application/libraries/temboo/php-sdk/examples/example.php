<?php

/**
 * Temboo PHP SDK example usage
 *
 * Demonstrates how to use the Temboo PHP SDK.
 *
 * PHP version 5
 *
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category   Services
 * @package    Temboo
 * @subpackage Examples
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Your Temboo account name (note that this is NOT your username).
 *
 * @package    Temboo
 * @subpackage Examples
 */
define('ACCOUNT_NAME', 'my account');

/**
 * Your API key name. You can get this from https://live.temboo.com/account/
 *
 * @package    Temboo
 * @subpackage Examples
 */
define('API_KEY_NAME', 'myFirstApp');

/**
 * Your API key value. You can get this from https://live.temboo.com/account/
 *
 * @package    Temboo
 * @subpackage Examples
 */
define('API_KEY_VALUE', '********');


require '../src/temboo.php';


/**
 * A simple Twitter search.
 */
try {
    echo "Searching Twitter...\n";

    // Instantiate a Temboo session with valid API key credentials
    $session = new Temboo_Session(ACCOUNT_NAME, API_KEY_NAME, API_KEY_VALUE);

    // Instantiate the choreography using the session object
    $searchFilter = new Twitter_Search_SearchFilter($session);

    // Get an input object for the choreo
    $inputs = $searchFilter->newInputs();

    // Set the inputs
    $inputs->setSearchString('Elvis')->setFilter('Costello')->setResultsPerPage(10);

    // Execute choreography and get results
    $results = $searchFilter->execute($inputs)->getResults();

    // Print the desired result
    echo $results->getResponse();

    echo "\n\nDone.\n";
}
catch(Temboo_Exception_Authentication $e) {
    echo "Temboo authentication exception caught: " . $e->getMessage() . "\n";
    echo "Debug info:\n\n";
    print_r($e->getDetails());
}
catch(Temboo_Exception_Execution $e) {
    echo "Temboo execution exception caught: " . $e->getMessage() . "\n";
    echo "Debug info:\n\n";
    print_r($e->getDetails());
}
catch(Temboo_Exception_Notfound $e) {
    echo "Temboo 'not found' exception caught: " . $e->getMessage() . "\n";
    echo "Debug info:\n\n";
    print_r($e->getDetails());
}
catch(Temboo_Exception $e) {
    echo "Temboo general exception caught: " . $e->getMessage() . "\n";
    echo "Debug info:\n\n";
    print_r($e->getDetails());
}
catch(Exception $e) {
    echo "Something else went wrong! " . $e->getMessage() . "\n\n";
}

?>