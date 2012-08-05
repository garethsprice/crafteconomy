<?php

/**
 * Temboo PHP SDK Factual classes
 *
 * Execute Choreographies from the Temboo Factual bundle.
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
 * @subpackage Factual
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Search for restaurants by name. 
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FindRestaurantsByName extends Temboo_Choreography
{
    /**
     * Search for restaurants by name. 
     *
     * @param Temboo_Session $session The session that owns this FindRestaurantsByName choreography.
     * @return Factual_FindRestaurantsByName New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Factual/FindRestaurantsByName/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FindRestaurantsByName choreography.
     *
     * @param Factual_FindRestaurantsByName_Inputs|array $inputs (optional) Inputs as Factual_FindRestaurantsByName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FindRestaurantsByName_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Factual_FindRestaurantsByName_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindRestaurantsByName choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FindRestaurantsByName_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Factual_FindRestaurantsByName_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindRestaurantsByName choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FindRestaurantsByName_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FindRestaurantsByName choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FindRestaurantsByName_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindRestaurantsByName input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Factual_FindRestaurantsByName_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Factual_FindRestaurantsByName_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindRestaurantsByName choreography.
     *
     * @param string $value (required, string) The API Key provided by Factual (AKA the OAuth Consumer Key).
     * @return Factual_FindRestaurantsByName_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FindRestaurantsByName choreography.
     *
     * @param string $value (required, string) The API Secret provided by Factual (AKA the OAuth Consumer Secret).
     * @return Factual_FindRestaurantsByName_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Query input for this FindRestaurantsByName choreography.
     *
     * @param string $value (required, string) A search string (i.e. Starbucks)
     * @return Factual_FindRestaurantsByName_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }
}


/**
 * Execution object for the FindRestaurantsByName choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FindRestaurantsByName_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindRestaurantsByName choreography.
     *
     * @param Temboo_Session $session The session that owns this FindRestaurantsByName execution.
     * @param Factual_FindRestaurantsByName $choreo The choregraphy object for this execution.
     * @param Factual_FindRestaurantsByName_Inputs|array $inputs (optional) Inputs as Factual_FindRestaurantsByName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FindRestaurantsByName_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Factual_FindRestaurantsByName $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindRestaurantsByName execution.
     *
     * @return Factual_FindRestaurantsByName_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FindRestaurantsByName execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Factual_FindRestaurantsByName_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Factual_FindRestaurantsByName_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FindRestaurantsByName choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FindRestaurantsByName_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FindRestaurantsByName choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Factual_FindRestaurantsByName_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FindRestaurantsByName execution.
     *
     * @return string (xml) The response from Factual.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Filter queries by category.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByCategories extends Temboo_Choreography
{
    /**
     * Filter queries by category.
     *
     * @param Temboo_Session $session The session that owns this FilterPlacesByCategories choreography.
     * @return Factual_FilterPlacesByCategories New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Factual/FilterPlacesByCategories/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FilterPlacesByCategories choreography.
     *
     * @param Factual_FilterPlacesByCategories_Inputs|array $inputs (optional) Inputs as Factual_FilterPlacesByCategories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FilterPlacesByCategories_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Factual_FilterPlacesByCategories_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FilterPlacesByCategories choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FilterPlacesByCategories_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Factual_FilterPlacesByCategories_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FilterPlacesByCategories choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByCategories_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FilterPlacesByCategories choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FilterPlacesByCategories_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FilterPlacesByCategories input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Factual_FilterPlacesByCategories_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Factual_FilterPlacesByCategories_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FilterPlacesByCategories choreography.
     *
     * @param string $value (required, string) The API Key provided by Factual (AKA the OAuth Consumer Key).
     * @return Factual_FilterPlacesByCategories_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FilterPlacesByCategories choreography.
     *
     * @param string $value (required, string) The API Secret provided by Factual (AKA the OAuth Consumer Secret).
     * @return Factual_FilterPlacesByCategories_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Category input for this FilterPlacesByCategories choreography.
     *
     * @param string $value (required, string) Enter a Factual category to narrow the search results.
     * @return Factual_FilterPlacesByCategories_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the City input for this FilterPlacesByCategories choreography.
     *
     * @param string $value (required, string) Enter a city to narrow results to.
     * @return Factual_FilterPlacesByCategories_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Query input for this FilterPlacesByCategories choreography.
     *
     * @param string $value (optional, string) A search string (i.e. Starbucks)
     * @return Factual_FilterPlacesByCategories_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }
}


/**
 * Execution object for the FilterPlacesByCategories choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByCategories_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FilterPlacesByCategories choreography.
     *
     * @param Temboo_Session $session The session that owns this FilterPlacesByCategories execution.
     * @param Factual_FilterPlacesByCategories $choreo The choregraphy object for this execution.
     * @param Factual_FilterPlacesByCategories_Inputs|array $inputs (optional) Inputs as Factual_FilterPlacesByCategories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FilterPlacesByCategories_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Factual_FilterPlacesByCategories $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FilterPlacesByCategories execution.
     *
     * @return Factual_FilterPlacesByCategories_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FilterPlacesByCategories execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Factual_FilterPlacesByCategories_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Factual_FilterPlacesByCategories_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FilterPlacesByCategories choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByCategories_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FilterPlacesByCategories choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Factual_FilterPlacesByCategories_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FilterPlacesByCategories execution.
     *
     * @return string (json) The response from Factual.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Find places by top-level category and near specified latitude, longitude coordinates.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByTopLevelCategory extends Temboo_Choreography
{
    /**
     * Find places by top-level category and near specified latitude, longitude coordinates.
     *
     * @param Temboo_Session $session The session that owns this FilterPlacesByTopLevelCategory choreography.
     * @return Factual_FilterPlacesByTopLevelCategory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Factual/FilterPlacesByTopLevelCategory/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FilterPlacesByTopLevelCategory choreography.
     *
     * @param Factual_FilterPlacesByTopLevelCategory_Inputs|array $inputs (optional) Inputs as Factual_FilterPlacesByTopLevelCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FilterPlacesByTopLevelCategory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Factual_FilterPlacesByTopLevelCategory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FilterPlacesByTopLevelCategory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FilterPlacesByTopLevelCategory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Factual_FilterPlacesByTopLevelCategory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FilterPlacesByTopLevelCategory choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByTopLevelCategory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FilterPlacesByTopLevelCategory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FilterPlacesByTopLevelCategory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FilterPlacesByTopLevelCategory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Factual_FilterPlacesByTopLevelCategory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Factual_FilterPlacesByTopLevelCategory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FilterPlacesByTopLevelCategory choreography.
     *
     * @param string $value (required, string) The API Key provided by Factual (AKA the OAuth Consumer Key).
     * @return Factual_FilterPlacesByTopLevelCategory_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FilterPlacesByTopLevelCategory choreography.
     *
     * @param string $value (required, string) The API Secret provided by Factual (AKA the OAuth Consumer Secret).
     * @return Factual_FilterPlacesByTopLevelCategory_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Category input for this FilterPlacesByTopLevelCategory choreography.
     *
     * @param string $value (required, string) Enter a Factual top-level category to narrow the search results. See Choreo doc for a list of Factual top-level categories.
     * @return Factual_FilterPlacesByTopLevelCategory_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the Latitude input for this FilterPlacesByTopLevelCategory choreography.
     *
     * @param float $value (required, decimal) Enter latitude coordinates of the location defining the center of the search radius.
     * @return Factual_FilterPlacesByTopLevelCategory_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this FilterPlacesByTopLevelCategory choreography.
     *
     * @param float $value (required, decimal) Enter longitude coordinates of the location defining the center of the search radius.
     * @return Factual_FilterPlacesByTopLevelCategory_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Query input for this FilterPlacesByTopLevelCategory choreography.
     *
     * @param string $value (optional, string) A search string (i.e. Starbucks)
     * @return Factual_FilterPlacesByTopLevelCategory_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Radius input for this FilterPlacesByTopLevelCategory choreography.
     *
     * @param int $value (required, integer) Provide the radius (in meters, and centered on the latitude-longitude coordinates specified) for which search results will be returned.
     * @return Factual_FilterPlacesByTopLevelCategory_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }
}


/**
 * Execution object for the FilterPlacesByTopLevelCategory choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByTopLevelCategory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FilterPlacesByTopLevelCategory choreography.
     *
     * @param Temboo_Session $session The session that owns this FilterPlacesByTopLevelCategory execution.
     * @param Factual_FilterPlacesByTopLevelCategory $choreo The choregraphy object for this execution.
     * @param Factual_FilterPlacesByTopLevelCategory_Inputs|array $inputs (optional) Inputs as Factual_FilterPlacesByTopLevelCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FilterPlacesByTopLevelCategory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Factual_FilterPlacesByTopLevelCategory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FilterPlacesByTopLevelCategory execution.
     *
     * @return Factual_FilterPlacesByTopLevelCategory_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FilterPlacesByTopLevelCategory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Factual_FilterPlacesByTopLevelCategory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Factual_FilterPlacesByTopLevelCategory_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FilterPlacesByTopLevelCategory choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByTopLevelCategory_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FilterPlacesByTopLevelCategory choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Factual_FilterPlacesByTopLevelCategory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FilterPlacesByTopLevelCategory execution.
     *
     * @return string (json) The response from Factual.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search for places by name.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FindPlacesByName extends Temboo_Choreography
{
    /**
     * Search for places by name.
     *
     * @param Temboo_Session $session The session that owns this FindPlacesByName choreography.
     * @return Factual_FindPlacesByName New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Factual/FindPlacesByName/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FindPlacesByName choreography.
     *
     * @param Factual_FindPlacesByName_Inputs|array $inputs (optional) Inputs as Factual_FindPlacesByName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FindPlacesByName_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Factual_FindPlacesByName_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindPlacesByName choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FindPlacesByName_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Factual_FindPlacesByName_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindPlacesByName choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FindPlacesByName_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FindPlacesByName choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FindPlacesByName_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindPlacesByName input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Factual_FindPlacesByName_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Factual_FindPlacesByName_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindPlacesByName choreography.
     *
     * @param string $value (required, string) The API Key provided by Factual (AKA the OAuth Consumer Key).
     * @return Factual_FindPlacesByName_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FindPlacesByName choreography.
     *
     * @param string $value (required, string) The API Secret provided by Factual (AKA the OAuth Consumer Secret).
     * @return Factual_FindPlacesByName_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Query input for this FindPlacesByName choreography.
     *
     * @param string $value (required, string) A search string (i.e. Starbucks)
     * @return Factual_FindPlacesByName_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }
}


/**
 * Execution object for the FindPlacesByName choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FindPlacesByName_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindPlacesByName choreography.
     *
     * @param Temboo_Session $session The session that owns this FindPlacesByName execution.
     * @param Factual_FindPlacesByName $choreo The choregraphy object for this execution.
     * @param Factual_FindPlacesByName_Inputs|array $inputs (optional) Inputs as Factual_FindPlacesByName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FindPlacesByName_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Factual_FindPlacesByName $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindPlacesByName execution.
     *
     * @return Factual_FindPlacesByName_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FindPlacesByName execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Factual_FindPlacesByName_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Factual_FindPlacesByName_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FindPlacesByName choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FindPlacesByName_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FindPlacesByName choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Factual_FindPlacesByName_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FindPlacesByName execution.
     *
     * @return string (json) The response from Factual.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Restrict a query to a specified city.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByCity extends Temboo_Choreography
{
    /**
     * Restrict a query to a specified city.
     *
     * @param Temboo_Session $session The session that owns this FilterPlacesByCity choreography.
     * @return Factual_FilterPlacesByCity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Factual/FilterPlacesByCity/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FilterPlacesByCity choreography.
     *
     * @param Factual_FilterPlacesByCity_Inputs|array $inputs (optional) Inputs as Factual_FilterPlacesByCity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FilterPlacesByCity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Factual_FilterPlacesByCity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FilterPlacesByCity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FilterPlacesByCity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Factual_FilterPlacesByCity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FilterPlacesByCity choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByCity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FilterPlacesByCity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FilterPlacesByCity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FilterPlacesByCity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Factual_FilterPlacesByCity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Factual_FilterPlacesByCity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FilterPlacesByCity choreography.
     *
     * @param string $value (required, string) The API Key provided by Factual (AKA the OAuth Consumer Key).
     * @return Factual_FilterPlacesByCity_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FilterPlacesByCity choreography.
     *
     * @param string $value (required, string) The API Secret provided by Factual (AKA the OAuth Consumer Secret).
     * @return Factual_FilterPlacesByCity_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the City input for this FilterPlacesByCity choreography.
     *
     * @param string $value (required, string) Enter a city to narrow results to.
     * @return Factual_FilterPlacesByCity_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Query input for this FilterPlacesByCity choreography.
     *
     * @param string $value (optional, string) A search string (i.e. Starbucks)
     * @return Factual_FilterPlacesByCity_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }
}


/**
 * Execution object for the FilterPlacesByCity choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByCity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FilterPlacesByCity choreography.
     *
     * @param Temboo_Session $session The session that owns this FilterPlacesByCity execution.
     * @param Factual_FilterPlacesByCity $choreo The choregraphy object for this execution.
     * @param Factual_FilterPlacesByCity_Inputs|array $inputs (optional) Inputs as Factual_FilterPlacesByCity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FilterPlacesByCity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Factual_FilterPlacesByCity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FilterPlacesByCity execution.
     *
     * @return Factual_FilterPlacesByCity_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FilterPlacesByCity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Factual_FilterPlacesByCity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Factual_FilterPlacesByCity_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FilterPlacesByCity choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByCity_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FilterPlacesByCity choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Factual_FilterPlacesByCity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FilterPlacesByCity execution.
     *
     * @return string (json) The response from Factual.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Find places near specified latitude, longitude coordinates.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FindPlacesNearCoordinates extends Temboo_Choreography
{
    /**
     * Find places near specified latitude, longitude coordinates.
     *
     * @param Temboo_Session $session The session that owns this FindPlacesNearCoordinates choreography.
     * @return Factual_FindPlacesNearCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Factual/FindPlacesNearCoordinates/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FindPlacesNearCoordinates choreography.
     *
     * @param Factual_FindPlacesNearCoordinates_Inputs|array $inputs (optional) Inputs as Factual_FindPlacesNearCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FindPlacesNearCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Factual_FindPlacesNearCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindPlacesNearCoordinates choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FindPlacesNearCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Factual_FindPlacesNearCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindPlacesNearCoordinates choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FindPlacesNearCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FindPlacesNearCoordinates choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FindPlacesNearCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindPlacesNearCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Factual_FindPlacesNearCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Factual_FindPlacesNearCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindPlacesNearCoordinates choreography.
     *
     * @param string $value (required, string) The API Key provided by Factual (AKA the OAuth Consumer Key).
     * @return Factual_FindPlacesNearCoordinates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FindPlacesNearCoordinates choreography.
     *
     * @param string $value (required, string) The API Secret provided by Factual (AKA the OAuth Consumer Secret).
     * @return Factual_FindPlacesNearCoordinates_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Latitude input for this FindPlacesNearCoordinates choreography.
     *
     * @param float $value (required, decimal) Enter latitude coordinates of the location defining the center of the search radius.
     * @return Factual_FindPlacesNearCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this FindPlacesNearCoordinates choreography.
     *
     * @param float $value (required, decimal) Enter longitude coordinates of the location defining the center of the search radius.
     * @return Factual_FindPlacesNearCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Query input for this FindPlacesNearCoordinates choreography.
     *
     * @param string $value (optional, string) A search string (i.e. Starbucks)
     * @return Factual_FindPlacesNearCoordinates_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Radius input for this FindPlacesNearCoordinates choreography.
     *
     * @param int $value (required, integer) Provide the radius (in meters, and centered on the latitude-longitude coordinates specified) for which search results will be returned.
     * @return Factual_FindPlacesNearCoordinates_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }
}


/**
 * Execution object for the FindPlacesNearCoordinates choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FindPlacesNearCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindPlacesNearCoordinates choreography.
     *
     * @param Temboo_Session $session The session that owns this FindPlacesNearCoordinates execution.
     * @param Factual_FindPlacesNearCoordinates $choreo The choregraphy object for this execution.
     * @param Factual_FindPlacesNearCoordinates_Inputs|array $inputs (optional) Inputs as Factual_FindPlacesNearCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FindPlacesNearCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Factual_FindPlacesNearCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindPlacesNearCoordinates execution.
     *
     * @return Factual_FindPlacesNearCoordinates_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FindPlacesNearCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Factual_FindPlacesNearCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Factual_FindPlacesNearCoordinates_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FindPlacesNearCoordinates choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FindPlacesNearCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FindPlacesNearCoordinates choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Factual_FindPlacesNearCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FindPlacesNearCoordinates execution.
     *
     * @return string (json) The response from Factual.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Find restaurants by cuisine and near specified latitude, longitude coordinates.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterRestaurantsByCuisineAndCoordinates extends Temboo_Choreography
{
    /**
     * Find restaurants by cuisine and near specified latitude, longitude coordinates.
     *
     * @param Temboo_Session $session The session that owns this FilterRestaurantsByCuisineAndCoordinates choreography.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Factual/FilterRestaurantsByCuisineAndCoordinates/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FilterRestaurantsByCuisineAndCoordinates choreography.
     *
     * @param Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs|array $inputs (optional) Inputs as Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Factual_FilterRestaurantsByCuisineAndCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FilterRestaurantsByCuisineAndCoordinates choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FilterRestaurantsByCuisineAndCoordinates choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FilterRestaurantsByCuisineAndCoordinates choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FilterRestaurantsByCuisineAndCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FilterRestaurantsByCuisineAndCoordinates choreography.
     *
     * @param string $value (required, string) The API Key provided by Factual (AKA the OAuth Consumer Key).
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FilterRestaurantsByCuisineAndCoordinates choreography.
     *
     * @param string $value (required, string) The API Secret provided by Factual (AKA the OAuth Consumer Secret).
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Cuisine input for this FilterRestaurantsByCuisineAndCoordinates choreography.
     *
     * @param string $value (required, string) Enter a desired cuisine to narrow the search results. See Choreo doc for a list of available cuisine parameters.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs For method chaining.
     */
    public function setCuisine($value)
    {
        return $this->set('Cuisine', $value);
    }

    /**
     * Set the value for the Latitude input for this FilterRestaurantsByCuisineAndCoordinates choreography.
     *
     * @param float $value (required, decimal) Enter latitude coordinates of the location defining the center of the search radius.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this FilterRestaurantsByCuisineAndCoordinates choreography.
     *
     * @param float $value (required, decimal) Enter longitude coordinates of the location defining the center of the search radius.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Radius input for this FilterRestaurantsByCuisineAndCoordinates choreography.
     *
     * @param int $value (required, integer) Provide the radius (in meters, and centered on the latitude-longitude coordinates specified) for which search results will be returned.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }
}


/**
 * Execution object for the FilterRestaurantsByCuisineAndCoordinates choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterRestaurantsByCuisineAndCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FilterRestaurantsByCuisineAndCoordinates choreography.
     *
     * @param Temboo_Session $session The session that owns this FilterRestaurantsByCuisineAndCoordinates execution.
     * @param Factual_FilterRestaurantsByCuisineAndCoordinates $choreo The choregraphy object for this execution.
     * @param Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs|array $inputs (optional) Inputs as Factual_FilterRestaurantsByCuisineAndCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Factual_FilterRestaurantsByCuisineAndCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FilterRestaurantsByCuisineAndCoordinates execution.
     *
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FilterRestaurantsByCuisineAndCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Factual_FilterRestaurantsByCuisineAndCoordinates_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FilterRestaurantsByCuisineAndCoordinates choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterRestaurantsByCuisineAndCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FilterRestaurantsByCuisineAndCoordinates choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Factual_FilterRestaurantsByCuisineAndCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FilterRestaurantsByCuisineAndCoordinates execution.
     *
     * @return string (json) The response from Factual.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Restrict a query to a specified city.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByMultipleCities extends Temboo_Choreography
{
    /**
     * Restrict a query to a specified city.
     *
     * @param Temboo_Session $session The session that owns this FilterPlacesByMultipleCities choreography.
     * @return Factual_FilterPlacesByMultipleCities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Factual/FilterPlacesByMultipleCities/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FilterPlacesByMultipleCities choreography.
     *
     * @param Factual_FilterPlacesByMultipleCities_Inputs|array $inputs (optional) Inputs as Factual_FilterPlacesByMultipleCities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FilterPlacesByMultipleCities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Factual_FilterPlacesByMultipleCities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FilterPlacesByMultipleCities choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FilterPlacesByMultipleCities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Factual_FilterPlacesByMultipleCities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FilterPlacesByMultipleCities choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByMultipleCities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FilterPlacesByMultipleCities choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Factual_FilterPlacesByMultipleCities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FilterPlacesByMultipleCities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Factual_FilterPlacesByMultipleCities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Factual_FilterPlacesByMultipleCities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FilterPlacesByMultipleCities choreography.
     *
     * @param string $value (required, string) The API Key provided by Factual (AKA the OAuth Consumer Key).
     * @return Factual_FilterPlacesByMultipleCities_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FilterPlacesByMultipleCities choreography.
     *
     * @param string $value (required, string) The API Secret provided by Factual (AKA the OAuth Consumer Secret).
     * @return Factual_FilterPlacesByMultipleCities_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Cities input for this FilterPlacesByMultipleCities choreography.
     *
     * @param string $value (required, string) Enter a list of cities to filter results. Use the following comma-separated format: "New York", "Ithaca", "Albany"
     * @return Factual_FilterPlacesByMultipleCities_Inputs For method chaining.
     */
    public function setCities($value)
    {
        return $this->set('Cities', $value);
    }

    /**
     * Set the value for the Query input for this FilterPlacesByMultipleCities choreography.
     *
     * @param string $value (optional, string) A search string (i.e. Starbucks).
     * @return Factual_FilterPlacesByMultipleCities_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }
}


/**
 * Execution object for the FilterPlacesByMultipleCities choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByMultipleCities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FilterPlacesByMultipleCities choreography.
     *
     * @param Temboo_Session $session The session that owns this FilterPlacesByMultipleCities execution.
     * @param Factual_FilterPlacesByMultipleCities $choreo The choregraphy object for this execution.
     * @param Factual_FilterPlacesByMultipleCities_Inputs|array $inputs (optional) Inputs as Factual_FilterPlacesByMultipleCities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Factual_FilterPlacesByMultipleCities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Factual_FilterPlacesByMultipleCities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FilterPlacesByMultipleCities execution.
     *
     * @return Factual_FilterPlacesByMultipleCities_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FilterPlacesByMultipleCities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Factual_FilterPlacesByMultipleCities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Factual_FilterPlacesByMultipleCities_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FilterPlacesByMultipleCities choreography.
 *
 * @package Temboo
 * @subpackage Factual
 */
class Factual_FilterPlacesByMultipleCities_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FilterPlacesByMultipleCities choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Factual_FilterPlacesByMultipleCities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FilterPlacesByMultipleCities execution.
     *
     * @return string (json) The response from Factual.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "JSON" output from this FilterPlacesByMultipleCities execution.
     *
     * @return string 
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getJSON()
    {
        return $this->get('JSON');
    }
}

?>