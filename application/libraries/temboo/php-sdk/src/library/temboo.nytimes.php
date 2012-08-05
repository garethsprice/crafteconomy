<?php

/**
 * Temboo PHP SDK NYTimes classes
 *
 * Execute Choreographies from the Temboo NYTimes bundle.
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
 * @subpackage NYTimes
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Allows you to do a spatial search for events within a box bounded by specified northeast and southwest points.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchEventsByBoundedBox extends Temboo_Choreography
{
    /**
     * Allows you to do a spatial search for events within a box bounded by specified northeast and southwest points.
     *
     * @param Temboo_Session $session The session that owns this SearchEventsByBoundedBox choreography.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/EventListings/SearchEventsByBoundedBox/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchEventsByBoundedBox choreography.
     *
     * @param NYTimes_EventListings_SearchEventsByBoundedBox_Inputs|array $inputs (optional) Inputs as NYTimes_EventListings_SearchEventsByBoundedBox_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_EventListings_SearchEventsByBoundedBox_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchEventsByBoundedBox choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_EventListings_SearchEventsByBoundedBox_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchEventsByBoundedBox choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchEventsByBoundedBox_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchEventsByBoundedBox choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchEventsByBoundedBox input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchEventsByBoundedBox choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DateRange input for this SearchEventsByBoundedBox choreography.
     *
     * @param string $value (optional, date) Start date to end date in the following format: YYYY-MM-DD:YYYY-MM-DD.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the Filters input for this SearchEventsByBoundedBox choreography.
     *
     * @param string $value (optional, string) Filters search results using facet names and values. See Choreo documentation for examples.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setFilters($value)
    {
        return $this->set('Filters', $value);
    }

    /**
     * Set the value for the Limit input for this SearchEventsByBoundedBox choreography.
     *
     * @param int $value (optional, integer) The number of results to return.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the NortheastLatitude input for this SearchEventsByBoundedBox choreography.
     *
     * @param float $value (conditional, decimal) The northeastern latitude of the bounding box to search. When searching within a bounded box, all four coordinates are required.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setNortheastLatitude($value)
    {
        return $this->set('NortheastLatitude', $value);
    }

    /**
     * Set the value for the NortheastLongitude input for this SearchEventsByBoundedBox choreography.
     *
     * @param float $value (conditional, decimal) The northeastern longitude of the bounding box to search. When searching within a bounded box, all four coordinates are required.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setNortheastLongitude($value)
    {
        return $this->set('NortheastLongitude', $value);
    }

    /**
     * Set the value for the Offset input for this SearchEventsByBoundedBox choreography.
     *
     * @param int $value (optional, integer) A numeric value indicating the starting point of the result set. This can be used in combination with the Limit input to page through results.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Query input for this SearchEventsByBoundedBox choreography.
     *
     * @param string $value (optional, string) Search keywords to perform a text search on the following fields: web_description, event_name and venue_name.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Radius input for this SearchEventsByBoundedBox choreography.
     *
     * @param int $value (optional, integer) The radius of the spacial search (in meters). Defaults to 1000.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchEventsByBoundedBox choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to json, xml, or sphp. Defaults to xml.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this SearchEventsByBoundedBox choreography.
     *
     * @param string $value (optional, string) Allows you to sort results. Appending "+asc" or "+desc" to a facet will sort results on that value in ascending or descending order (i.e. dist+asc).
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the SouthwestLatitude input for this SearchEventsByBoundedBox choreography.
     *
     * @param float $value (conditional, decimal) The southwest latitude of the bounding box to search. When searching within a bounded box, all four coordinates are required.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setSouthwestLatitude($value)
    {
        return $this->set('SouthwestLatitude', $value);
    }

    /**
     * Set the value for the SouthwestLongitude input for this SearchEventsByBoundedBox choreography.
     *
     * @param float $value (conditional, decimal) The southwest longitude of the bounding box to search. When searching within a bounded box, all four coordinates are required.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Inputs For method chaining.
     */
    public function setSouthwestLongitude($value)
    {
        return $this->set('SouthwestLongitude', $value);
    }
}


/**
 * Execution object for the SearchEventsByBoundedBox choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchEventsByBoundedBox_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchEventsByBoundedBox choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchEventsByBoundedBox execution.
     * @param NYTimes_EventListings_SearchEventsByBoundedBox $choreo The choregraphy object for this execution.
     * @param NYTimes_EventListings_SearchEventsByBoundedBox_Inputs|array $inputs (optional) Inputs as NYTimes_EventListings_SearchEventsByBoundedBox_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_EventListings_SearchEventsByBoundedBox $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchEventsByBoundedBox execution.
     *
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Results New results object.
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
     * Wraps results in appopriate results class for this SearchEventsByBoundedBox execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_EventListings_SearchEventsByBoundedBox_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchEventsByBoundedBox choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchEventsByBoundedBox_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchEventsByBoundedBox choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_EventListings_SearchEventsByBoundedBox_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchEventsByBoundedBox execution.
     *
     * @return string The response from the NY Times API. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of PACs that have been designated by the FEC as "leadership PACs".
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_LeadershipPACs extends Temboo_Choreography
{
    /**
     * Retrieve a list of PACs that have been designated by the FEC as "leadership PACs".
     *
     * @param Temboo_Session $session The session that owns this LeadershipPACs choreography.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/LeadershipPACs/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this LeadershipPACs choreography.
     *
     * @param NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_LeadershipPACs_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LeadershipPACs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LeadershipPACs choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the LeadershipPACs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LeadershipPACs input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this LeadershipPACs choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this LeadershipPACs choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LeadershipPACs choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the LeadershipPACs choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_LeadershipPACs_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LeadershipPACs choreography.
     *
     * @param Temboo_Session $session The session that owns this LeadershipPACs execution.
     * @param NYTimes_CampaignFinance_Committees_LeadershipPACs $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_LeadershipPACs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_LeadershipPACs $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LeadershipPACs execution.
     *
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Results New results object.
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
     * Wraps results in appopriate results class for this LeadershipPACs execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_LeadershipPACs_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the LeadershipPACs choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_LeadershipPACs_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the LeadershipPACs choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_LeadershipPACs_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this LeadershipPACs execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves recent news items.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetRecentNews extends Temboo_Choreography
{
    /**
     * Retrieves recent news items.
     *
     * @param Temboo_Session $session The session that owns this GetRecentNews choreography.
     * @return NYTimes_TimesNewswire_GetRecentNews New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/TimesNewswire/GetRecentNews/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRecentNews choreography.
     *
     * @param NYTimes_TimesNewswire_GetRecentNews_Inputs|array $inputs (optional) Inputs as NYTimes_TimesNewswire_GetRecentNews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_TimesNewswire_GetRecentNews_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_TimesNewswire_GetRecentNews_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentNews choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_TimesNewswire_GetRecentNews_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_TimesNewswire_GetRecentNews_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentNews choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetRecentNews_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRecentNews choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_TimesNewswire_GetRecentNews_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentNews input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_TimesNewswire_GetRecentNews_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_TimesNewswire_GetRecentNews_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRecentNews choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_TimesNewswire_GetRecentNews_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetRecentNews choreography.
     *
     * @param int $value (optional, integer) The number of results to return. Defaults to 20.
     * @return NYTimes_TimesNewswire_GetRecentNews_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this GetRecentNews choreography.
     *
     * @param int $value (optional, integer) A numeric value indicating the starting point of the result set. This can be used in combination with the Limit input to page through results.
     * @return NYTimes_TimesNewswire_GetRecentNews_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetRecentNews choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to json, xml, or sphp. Defaults to xml.
     * @return NYTimes_TimesNewswire_GetRecentNews_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Section input for this GetRecentNews choreography.
     *
     * @param string $value (optional, string) Limits the set of items by one or more sections. Separate sections by semicolons. Defaults to "all" to get all sections. See Choreo documentation for more options for this input.
     * @return NYTimes_TimesNewswire_GetRecentNews_Inputs For method chaining.
     */
    public function setSection($value)
    {
        return $this->set('Section', $value);
    }

    /**
     * Set the value for the Source input for this GetRecentNews choreography.
     *
     * @param string $value (optional, string) Limits the set of items by originating source. Set to "nyt" for New York Times items only and "iht" for International Herald Tribune items. Set to "all" for both (the default).
     * @return NYTimes_TimesNewswire_GetRecentNews_Inputs For method chaining.
     */
    public function setSource($value)
    {
        return $this->set('Source', $value);
    }

    /**
     * Set the value for the TimePeriod input for this GetRecentNews choreography.
     *
     * @param int $value (optional, integer) Limits the set of items by time published. Valid range is number of hours, 1–720 (in hours). Defaults to 24.
     * @return NYTimes_TimesNewswire_GetRecentNews_Inputs For method chaining.
     */
    public function setTimePeriod($value)
    {
        return $this->set('TimePeriod', $value);
    }
}


/**
 * Execution object for the GetRecentNews choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetRecentNews_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentNews choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRecentNews execution.
     * @param NYTimes_TimesNewswire_GetRecentNews $choreo The choregraphy object for this execution.
     * @param NYTimes_TimesNewswire_GetRecentNews_Inputs|array $inputs (optional) Inputs as NYTimes_TimesNewswire_GetRecentNews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_TimesNewswire_GetRecentNews_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_TimesNewswire_GetRecentNews $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentNews execution.
     *
     * @return NYTimes_TimesNewswire_GetRecentNews_Results New results object.
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
     * Wraps results in appopriate results class for this GetRecentNews execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_TimesNewswire_GetRecentNews_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_TimesNewswire_GetRecentNews_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRecentNews choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetRecentNews_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRecentNews choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_TimesNewswire_GetRecentNews_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRecentNews execution.
     *
     * @return string The response from the NY Times API. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the 20 most recent independent expenditures by a given committee, also known as "Super PACs."
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures extends Temboo_Choreography
{
    /**
     * Retrieve the 20 most recent independent expenditures by a given committee, also known as "Super PACs."
     *
     * @param Temboo_Session $session The session that owns this CommitteeIndependentExpenditures choreography.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/IndependentExpenditures/CommitteeIndependentExpenditures/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CommitteeIndependentExpenditures choreography.
     *
     * @param NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeIndependentExpenditures choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeIndependentExpenditures choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CommitteeIndependentExpenditures choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeIndependentExpenditures input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CommitteeIndependentExpenditures choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CommitteeIndependentExpenditures choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the FECID input for this CommitteeIndependentExpenditures choreography.
     *
     * @param string $value (required, string) Enter the FEC ID for the committee.  ID can be obtained by first running the CommitteeSearch Choreo.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function setFECID($value)
    {
        return $this->set('FECID', $value);
    }

    /**
     * Set the value for the Offset input for this CommitteeIndependentExpenditures choreography.
     *
     * @param int $value (optional, integer) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value (e.g., Offset=40 displays results 41–60).
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeIndependentExpenditures choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommitteeIndependentExpenditures choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeIndependentExpenditures choreography.
     *
     * @param Temboo_Session $session The session that owns this CommitteeIndependentExpenditures execution.
     * @param NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeIndependentExpenditures execution.
     *
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Results New results object.
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
     * Wraps results in appopriate results class for this CommitteeIndependentExpenditures execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CommitteeIndependentExpenditures choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CommitteeIndependentExpenditures choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_CommitteeIndependentExpenditures_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CommitteeIndependentExpenditures execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve contributions made by individuals to a specific presidential candidate. 
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates extends Temboo_Choreography
{
    /**
     * Retrieve contributions made by individuals to a specific presidential candidate. 
     *
     * @param Temboo_Session $session The session that owns this ContributionsToPresidentialCandidates choreography.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/IndividualContributors/ContributionsToPresidentialCandidates/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ContributionsToPresidentialCandidates choreography.
     *
     * @param NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ContributionsToPresidentialCandidates choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ContributionsToPresidentialCandidates choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ContributionsToPresidentialCandidates choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ContributionsToPresidentialCandidates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ContributionsToPresidentialCandidates choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this ContributionsToPresidentialCandidates choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the CandidateFECID input for this ContributionsToPresidentialCandidates choreography.
     *
     * @param string $value (conditional, string) Enter a candidate's nine-digit FEC ID. IDs can be obtained by first running the CandidateSearch Choreo. Required unless providing the LastName input.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function setCandidateFECID($value)
    {
        return $this->set('CandidateFECID', $value);
    }

    /**
     * Set the value for the LastName input for this ContributionsToPresidentialCandidates choreography.
     *
     * @param string $value (conditional, string) Enter the name of a presidential candidate for whom contributions will be obtained. Required unless providing the CandidateFECID input.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ContributionsToPresidentialCandidates choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ContributionsToPresidentialCandidates choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ContributionsToPresidentialCandidates choreography.
     *
     * @param Temboo_Session $session The session that owns this ContributionsToPresidentialCandidates execution.
     * @param NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ContributionsToPresidentialCandidates execution.
     *
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Results New results object.
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
     * Wraps results in appopriate results class for this ContributionsToPresidentialCandidates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ContributionsToPresidentialCandidates choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ContributionsToPresidentialCandidates choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsToPresidentialCandidates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ContributionsToPresidentialCandidates execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves lists of reviews and NYT Critics' Picks.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetCriticsPicks extends Temboo_Choreography
{
    /**
     * Retrieves lists of reviews and NYT Critics' Picks.
     *
     * @param Temboo_Session $session The session that owns this GetCriticsPicks choreography.
     * @return NYTimes_MovieReviews_GetCriticsPicks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MovieReviews/GetCriticsPicks/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCriticsPicks choreography.
     *
     * @param NYTimes_MovieReviews_GetCriticsPicks_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_GetCriticsPicks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MovieReviews_GetCriticsPicks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCriticsPicks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MovieReviews_GetCriticsPicks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCriticsPicks choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetCriticsPicks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCriticsPicks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCriticsPicks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCriticsPicks choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Offset input for this GetCriticsPicks choreography.
     *
     * @param int $value (optional, integer) A numeric value indicating the starting point of the result set. Used to page through results.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Order input for this GetCriticsPicks choreography.
     *
     * @param string $value (optional, string) Sets the sort order of the results. Accepted values are: by-title, by-publication-date, by-opening-date, by-dvd-release-date.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the ResourceType input for this GetCriticsPicks choreography.
     *
     * @param string $value (optional, string) Specify "picks" to get NYT Critics' Picks in theaters or "dvd-picks" to get NYT Critics' Picks on DVD. Specify "all" to retrieve all reviews.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Inputs For method chaining.
     */
    public function setResourceType($value)
    {
        return $this->set('ResourceType', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCriticsPicks choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to json, xml, or sphp. Defaults to xml.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetCriticsPicks choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetCriticsPicks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCriticsPicks choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCriticsPicks execution.
     * @param NYTimes_MovieReviews_GetCriticsPicks $choreo The choregraphy object for this execution.
     * @param NYTimes_MovieReviews_GetCriticsPicks_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_GetCriticsPicks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MovieReviews_GetCriticsPicks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCriticsPicks execution.
     *
     * @return NYTimes_MovieReviews_GetCriticsPicks_Results New results object.
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
     * Wraps results in appopriate results class for this GetCriticsPicks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MovieReviews_GetCriticsPicks_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCriticsPicks choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetCriticsPicks_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCriticsPicks choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MovieReviews_GetCriticsPicks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCriticsPicks execution.
     *
     * @return string The response from the NY Times API. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the total amount of donations aggregated by a specified location (by state and/or zipcode).
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals extends Temboo_Choreography
{
    /**
     * Retrieve the total amount of donations aggregated by a specified location (by state and/or zipcode).
     *
     * @param Temboo_Session $session The session that owns this PresidentialStateZipTotals choreography.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/PresidentialCampaigns/PresidentialStateZipTotals/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PresidentialStateZipTotals choreography.
     *
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PresidentialStateZipTotals choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PresidentialStateZipTotals choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PresidentialStateZipTotals choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PresidentialStateZipTotals input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PresidentialStateZipTotals choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this PresidentialStateZipTotals choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the Location input for this PresidentialStateZipTotals choreography.
     *
     * @param string $value (required, string) Enter the location for which data will be retrieved. If ResourceType = states, use a two-letter state abbreviation (example: NY).  For zips, enter a five-digit zip code.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function setLocation($value)
    {
        return $this->set('Location', $value);
    }

    /**
     * Set the value for the ResourceType input for this PresidentialStateZipTotals choreography.
     *
     * @param string $value (required, string) Specify the type of resource to use when retrieving donor data. Valid formats include: zips, or states.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function setResourceType($value)
    {
        return $this->set('ResourceType', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PresidentialStateZipTotals choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PresidentialStateZipTotals choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PresidentialStateZipTotals choreography.
     *
     * @param Temboo_Session $session The session that owns this PresidentialStateZipTotals execution.
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PresidentialStateZipTotals execution.
     *
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Results New results object.
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
     * Wraps results in appopriate results class for this PresidentialStateZipTotals execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PresidentialStateZipTotals choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PresidentialStateZipTotals choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialStateZipTotals_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this PresidentialStateZipTotals execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the total receipts and disbursements for all presidential candidates for a particular campaign cycle.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals extends Temboo_Choreography
{
    /**
     * Retrieves the total receipts and disbursements for all presidential candidates for a particular campaign cycle.
     *
     * @param Temboo_Session $session The session that owns this PresidentialCandidateTotals choreography.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/PresidentialCampaigns/PresidentialCandidateTotals/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PresidentialCandidateTotals choreography.
     *
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PresidentialCandidateTotals choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PresidentialCandidateTotals choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PresidentialCandidateTotals choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PresidentialCandidateTotals input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PresidentialCandidateTotals choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this PresidentialCandidateTotals choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PresidentialCandidateTotals choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PresidentialCandidateTotals choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PresidentialCandidateTotals choreography.
     *
     * @param Temboo_Session $session The session that owns this PresidentialCandidateTotals execution.
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PresidentialCandidateTotals execution.
     *
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Results New results object.
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
     * Wraps results in appopriate results class for this PresidentialCandidateTotals execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PresidentialCandidateTotals choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PresidentialCandidateTotals choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialCandidateTotals_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this PresidentialCandidateTotals execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain a list of available form types used in FEC filings.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes extends Temboo_Choreography
{
    /**
     * Obtain a list of available form types used in FEC filings.
     *
     * @param Temboo_Session $session The session that owns this GetElectronicFilingFormTypes choreography.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/ElectronicFilings/GetElectronicFilingFormTypes/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetElectronicFilingFormTypes choreography.
     *
     * @param NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetElectronicFilingFormTypes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetElectronicFilingFormTypes choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetElectronicFilingFormTypes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetElectronicFilingFormTypes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetElectronicFilingFormTypes choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this GetElectronicFilingFormTypes choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetElectronicFilingFormTypes choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetElectronicFilingFormTypes choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetElectronicFilingFormTypes choreography.
     *
     * @param Temboo_Session $session The session that owns this GetElectronicFilingFormTypes execution.
     * @param NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetElectronicFilingFormTypes execution.
     *
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Results New results object.
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
     * Wraps results in appopriate results class for this GetElectronicFilingFormTypes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetElectronicFilingFormTypes choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetElectronicFilingFormTypes choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_ElectronicFilings_GetElectronicFilingFormTypes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetElectronicFilingFormTypes execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves counts of real estate sales from New York Times Web Service.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_SalesCounts extends Temboo_Choreography
{
    /**
     * Retrieves counts of real estate sales from New York Times Web Service.
     *
     * @param Temboo_Session $session The session that owns this SalesCounts choreography.
     * @return NYTimes_RealEstate_SalesCounts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/RealEstate/SalesCounts/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SalesCounts choreography.
     *
     * @param NYTimes_RealEstate_SalesCounts_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_SalesCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_SalesCounts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_RealEstate_SalesCounts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SalesCounts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_SalesCounts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_RealEstate_SalesCounts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SalesCounts choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_SalesCounts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SalesCounts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_SalesCounts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SalesCounts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_RealEstate_SalesCounts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_RealEstate_SalesCounts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SalesCounts choreography.
     *
     * @param string $value (string) The API Key provided by NY Times
     * @return NYTimes_RealEstate_SalesCounts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Bedrooms input for this SalesCounts choreography.
     *
     * @param int $value (optional, integer) Limits the results by number of bedrooms to search for. Defaults to 1.
     * @return NYTimes_RealEstate_SalesCounts_Inputs For method chaining.
     */
    public function setBedrooms($value)
    {
        return $this->set('Bedrooms', $value);
    }

    /**
     * Set the value for the DateRange input for this SalesCounts choreography.
     *
     * @param string $value (string) Sets the quarter, month, week or day for the results (i.e. 2008-Q1, 2008-W52, 2007-07, 2010-10-01, etc)
     * @return NYTimes_RealEstate_SalesCounts_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the GeoExtentLevel input for this SalesCounts choreography.
     *
     * @param string $value (string) The geographical unit for the results (i.e. borough, neighborhood, or zip)
     * @return NYTimes_RealEstate_SalesCounts_Inputs For method chaining.
     */
    public function setGeoExtentLevel($value)
    {
        return $this->set('GeoExtentLevel', $value);
    }

    /**
     * Set the value for the GeoExtentValue input for this SalesCounts choreography.
     *
     * @param string $value (string) Limits the search to a specific area.  For example, if GeoExtendLevel is borough, the value for GeoExtendValue could be Brooklyn.
     * @return NYTimes_RealEstate_SalesCounts_Inputs For method chaining.
     */
    public function setGeoExtentValue($value)
    {
        return $this->set('GeoExtentValue', $value);
    }

    /**
     * Set the value for the GeoSummaryLevel input for this SalesCounts choreography.
     *
     * @param string $value (string) The geographic unit for grouping the results (borough, neighborhood, or zip)
     * @return NYTimes_RealEstate_SalesCounts_Inputs For method chaining.
     */
    public function setGeoSummaryLevel($value)
    {
        return $this->set('GeoSummaryLevel', $value);
    }
}


/**
 * Execution object for the SalesCounts choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_SalesCounts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SalesCounts choreography.
     *
     * @param Temboo_Session $session The session that owns this SalesCounts execution.
     * @param NYTimes_RealEstate_SalesCounts $choreo The choregraphy object for this execution.
     * @param NYTimes_RealEstate_SalesCounts_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_SalesCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_SalesCounts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_RealEstate_SalesCounts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SalesCounts execution.
     *
     * @return NYTimes_RealEstate_SalesCounts_Results New results object.
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
     * Wraps results in appopriate results class for this SalesCounts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_RealEstate_SalesCounts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_RealEstate_SalesCounts_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SalesCounts choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_SalesCounts_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SalesCounts choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_RealEstate_SalesCounts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SalesCounts execution.
     *
     * @return string (XML) The response from the NY Times API
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain contributions made by a Political Action Committee (PAC) to a candidate.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate extends Temboo_Choreography
{
    /**
     * Obtain contributions made by a Political Action Committee (PAC) to a candidate.
     *
     * @param Temboo_Session $session The session that owns this CommitteeContributionsToCandidate choreography.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/CommitteeContributionsToCandidate/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CommitteeContributionsToCandidate choreography.
     *
     * @param NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeContributionsToCandidate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeContributionsToCandidate choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CommitteeContributionsToCandidate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeContributionsToCandidate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CommitteeContributionsToCandidate choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CommitteeContributionsToCandidate choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the CandidateFECID input for this CommitteeContributionsToCandidate choreography.
     *
     * @param string $value (required, string) Enter a cadidate's FEC ID.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function setCandidateFECID($value)
    {
        return $this->set('CandidateFECID', $value);
    }

    /**
     * Set the value for the CommitteeFECID input for this CommitteeContributionsToCandidate choreography.
     *
     * @param string $value (required, string) Enter a committee's FEC ID.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function setCommitteeFECID($value)
    {
        return $this->set('CommitteeFECID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeContributionsToCandidate choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommitteeContributionsToCandidate choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeContributionsToCandidate choreography.
     *
     * @param Temboo_Session $session The session that owns this CommitteeContributionsToCandidate execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeContributionsToCandidate execution.
     *
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Results New results object.
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
     * Wraps results in appopriate results class for this CommitteeContributionsToCandidate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CommitteeContributionsToCandidate choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CommitteeContributionsToCandidate choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributionsToCandidate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CommitteeContributionsToCandidate execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain a specific Political Action Committee's electronic filings.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeFilings extends Temboo_Choreography
{
    /**
     * Obtain a specific Political Action Committee's electronic filings.
     *
     * @param Temboo_Session $session The session that owns this CommitteeFilings choreography.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/CommitteeFilings/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CommitteeFilings choreography.
     *
     * @param NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeFilings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeFilings choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeFilings choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CommitteeFilings choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeFilings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CommitteeFilings choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CommitteeFilings choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the CommitteeFECID input for this CommitteeFilings choreography.
     *
     * @param string $value (required, string) Enter a committee's FEC ID.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs For method chaining.
     */
    public function setCommitteeFECID($value)
    {
        return $this->set('CommitteeFECID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeFilings choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommitteeFilings choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeFilings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeFilings choreography.
     *
     * @param Temboo_Session $session The session that owns this CommitteeFilings execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeFilings $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeFilings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_CommitteeFilings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeFilings execution.
     *
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Results New results object.
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
     * Wraps results in appopriate results class for this CommitteeFilings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeFilings_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CommitteeFilings choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeFilings_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CommitteeFilings choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeFilings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CommitteeFilings execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches events by location, filters, or full text search.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchEvents extends Temboo_Choreography
{
    /**
     * Searches events by location, filters, or full text search.
     *
     * @param Temboo_Session $session The session that owns this SearchEvents choreography.
     * @return NYTimes_EventListings_SearchEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/EventListings/SearchEvents/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchEvents choreography.
     *
     * @param NYTimes_EventListings_SearchEvents_Inputs|array $inputs (optional) Inputs as NYTimes_EventListings_SearchEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_EventListings_SearchEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_EventListings_SearchEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_EventListings_SearchEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_EventListings_SearchEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchEvents choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_EventListings_SearchEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchEvents choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DateRange input for this SearchEvents choreography.
     *
     * @param string $value (optional, date) Start date to end date in the following format: YYYY-MM-DD:YYYY-MM-DD.
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the Filters input for this SearchEvents choreography.
     *
     * @param string $value (optional, string) Filters search results using facet names and values. See Choreo documentation for examples.
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function setFilters($value)
    {
        return $this->set('Filters', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchEvents choreography.
     *
     * @param float $value (optional, decimal) The latitude coordinate of the location to use in the event search. If specified, Longitude must also be provided.
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this SearchEvents choreography.
     *
     * @param int $value (optional, integer) The number of results to return.
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchEvents choreography.
     *
     * @param float $value (optional, decimal) The longitude coordinate of the location to use in the event search. If specified, Latitude must also be provided.
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Offset input for this SearchEvents choreography.
     *
     * @param int $value (optional, integer) A numeric value indicating the starting point of the result set. This can be used in combination with the Limit input to page through results.
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Query input for this SearchEvents choreography.
     *
     * @param string $value (optional, string) Search keywords to perform a text search on the following fields: web_description, event_name and venue_name.
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Radius input for this SearchEvents choreography.
     *
     * @param int $value (optional, integer) The radius of the spacial search (in meters). Defaults to 1000.
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchEvents choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to json, xml, or sphp. Defaults to xml.
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this SearchEvents choreography.
     *
     * @param string $value (optional, string) Allows you to sort results. Appending "+asc" or "+desc" to a facet will sort results on that value in ascending or descending order (i.e. dist+asc).
     * @return NYTimes_EventListings_SearchEvents_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the SearchEvents choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchEvents choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchEvents execution.
     * @param NYTimes_EventListings_SearchEvents $choreo The choregraphy object for this execution.
     * @param NYTimes_EventListings_SearchEvents_Inputs|array $inputs (optional) Inputs as NYTimes_EventListings_SearchEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_EventListings_SearchEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_EventListings_SearchEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchEvents execution.
     *
     * @return NYTimes_EventListings_SearchEvents_Results New results object.
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
     * Wraps results in appopriate results class for this SearchEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_EventListings_SearchEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_EventListings_SearchEvents_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchEvents choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_EventListings_SearchEvents_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchEvents choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_EventListings_SearchEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchEvents execution.
     *
     * @return string The response from the NY Times API. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain details about a specific Political Action Committee.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeDetails extends Temboo_Choreography
{
    /**
     * Obtain details about a specific Political Action Committee.
     *
     * @param Temboo_Session $session The session that owns this CommitteeDetails choreography.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/CommitteeDetails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CommitteeDetails choreography.
     *
     * @param NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeDetails choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CommitteeDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CommitteeDetails choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CommitteeDetails choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the CommitteeFECID input for this CommitteeDetails choreography.
     *
     * @param string $value (required, string) Enter a committee's FEC ID.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs For method chaining.
     */
    public function setCommitteeFECID($value)
    {
        return $this->set('CommitteeFECID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeDetails choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommitteeDetails choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeDetails choreography.
     *
     * @param Temboo_Session $session The session that owns this CommitteeDetails execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeDetails $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_CommitteeDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeDetails execution.
     *
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Results New results object.
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
     * Wraps results in appopriate results class for this CommitteeDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeDetails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CommitteeDetails choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeDetails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CommitteeDetails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CommitteeDetails execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves reviews by a specific Times reviewer.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewsByReviewer extends Temboo_Choreography
{
    /**
     * Retrieves reviews by a specific Times reviewer.
     *
     * @param Temboo_Session $session The session that owns this GetReviewsByReviewer choreography.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MovieReviews/GetReviewsByReviewer/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetReviewsByReviewer choreography.
     *
     * @param NYTimes_MovieReviews_GetReviewsByReviewer_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_GetReviewsByReviewer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MovieReviews_GetReviewsByReviewer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReviewsByReviewer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MovieReviews_GetReviewsByReviewer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReviewsByReviewer choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewsByReviewer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetReviewsByReviewer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReviewsByReviewer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetReviewsByReviewer choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CriticsPick input for this GetReviewsByReviewer choreography.
     *
     * @param string $value (optional, string) Set this parameter to Y to limt the results to NYT Critics' Picks. To get only those movies that have not been highlighted by Times critics, specify N.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Inputs For method chaining.
     */
    public function setCriticsPick($value)
    {
        return $this->set('CriticsPick', $value);
    }

    /**
     * Set the value for the Offset input for this GetReviewsByReviewer choreography.
     *
     * @param int $value (optional, integer) A numeric value indicating the starting point of the result set. Used to page through results.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Order input for this GetReviewsByReviewer choreography.
     *
     * @param string $value (optional, string) Sets the sort order of the results. Accepted values are: by-title, by-publication-date, by-opening-date, by-dvd-release-date.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetReviewsByReviewer choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to json, xml, or sphp. Defaults to xml.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ReviewerName input for this GetReviewsByReviewer choreography.
     *
     * @param string $value (required, string) The name of the Times reviewer. Reviewer names should be separated by hyphens or dots (i.e. manohla-dargis or manohla.dargis)
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Inputs For method chaining.
     */
    public function setReviewerName($value)
    {
        return $this->set('ReviewerName', $value);
    }
}


/**
 * Execution object for the GetReviewsByReviewer choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewsByReviewer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReviewsByReviewer choreography.
     *
     * @param Temboo_Session $session The session that owns this GetReviewsByReviewer execution.
     * @param NYTimes_MovieReviews_GetReviewsByReviewer $choreo The choregraphy object for this execution.
     * @param NYTimes_MovieReviews_GetReviewsByReviewer_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_GetReviewsByReviewer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MovieReviews_GetReviewsByReviewer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReviewsByReviewer execution.
     *
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Results New results object.
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
     * Wraps results in appopriate results class for this GetReviewsByReviewer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MovieReviews_GetReviewsByReviewer_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetReviewsByReviewer choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewsByReviewer_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetReviewsByReviewer choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MovieReviews_GetReviewsByReviewer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetReviewsByReviewer execution.
     *
     * @return string The response from the NY Times API. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves data from a New York Times best-seller list for a specified title.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_BestSellerHistory extends Temboo_Choreography
{
    /**
     * Retrieves data from a New York Times best-seller list for a specified title.
     *
     * @param Temboo_Session $session The session that owns this BestSellerHistory choreography.
     * @return NYTimes_BestSellers_BestSellerHistory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/BestSellers/BestSellerHistory/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this BestSellerHistory choreography.
     *
     * @param NYTimes_BestSellers_BestSellerHistory_Inputs|array $inputs (optional) Inputs as NYTimes_BestSellers_BestSellerHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_BestSellers_BestSellerHistory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_BestSellers_BestSellerHistory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this BestSellerHistory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_BestSellers_BestSellerHistory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_BestSellers_BestSellerHistory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the BestSellerHistory choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_BestSellerHistory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the BestSellerHistory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_BestSellers_BestSellerHistory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this BestSellerHistory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_BestSellers_BestSellerHistory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_BestSellers_BestSellerHistory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this BestSellerHistory choreography.
     *
     * @param string $value (string) The API Key provided by NY Times
     * @return NYTimes_BestSellers_BestSellerHistory_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Title input for this BestSellerHistory choreography.
     *
     * @param string $value (string) The title of the best seller to retrieve data for
     * @return NYTimes_BestSellers_BestSellerHistory_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }
}


/**
 * Execution object for the BestSellerHistory choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_BestSellerHistory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the BestSellerHistory choreography.
     *
     * @param Temboo_Session $session The session that owns this BestSellerHistory execution.
     * @param NYTimes_BestSellers_BestSellerHistory $choreo The choregraphy object for this execution.
     * @param NYTimes_BestSellers_BestSellerHistory_Inputs|array $inputs (optional) Inputs as NYTimes_BestSellers_BestSellerHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_BestSellers_BestSellerHistory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_BestSellers_BestSellerHistory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this BestSellerHistory execution.
     *
     * @return NYTimes_BestSellers_BestSellerHistory_Results New results object.
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
     * Wraps results in appopriate results class for this BestSellerHistory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_BestSellers_BestSellerHistory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_BestSellers_BestSellerHistory_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the BestSellerHistory choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_BestSellerHistory_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the BestSellerHistory choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_BestSellers_BestSellerHistory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this BestSellerHistory execution.
     *
     * @return string (XML) The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve details about individual donors, or a summary of donors from a particular location to a presidential election campaign.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation extends Temboo_Choreography
{
    /**
     * Retrieve details about individual donors, or a summary of donors from a particular location to a presidential election campaign.
     *
     * @param Temboo_Session $session The session that owns this PresidentialDonorInformation choreography.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/PresidentialCampaigns/PresidentialDonorInformation/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PresidentialDonorInformation choreography.
     *
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PresidentialDonorInformation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PresidentialDonorInformation choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PresidentialDonorInformation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PresidentialDonorInformation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PresidentialDonorInformation choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this PresidentialDonorInformation choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the FirstName input for this PresidentialDonorInformation choreography.
     *
     * @param string $value (optional, string) Enter the first name of a donor.  This parameter can be used together with LastName and/or Zip
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the LastName input for this PresidentialDonorInformation choreography.
     *
     * @param string $value (optional, string) Enter the last name of an individual donor to be retrieved.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the Offset input for this PresidentialDonorInformation choreography.
     *
     * @param int $value (optional, integer) Specify the starting point of the retrieved results, in multiples of 20.  By default, the first 20 results are returned.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PresidentialDonorInformation choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Zip input for this PresidentialDonorInformation choreography.
     *
     * @param int $value (optional, integer) Enter a zipcode for which donor information wil be retrieved.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the PresidentialDonorInformation choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PresidentialDonorInformation choreography.
     *
     * @param Temboo_Session $session The session that owns this PresidentialDonorInformation execution.
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PresidentialDonorInformation execution.
     *
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Results New results object.
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
     * Wraps results in appopriate results class for this PresidentialDonorInformation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PresidentialDonorInformation choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PresidentialDonorInformation choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_PresidentialCampaigns_PresidentialDonorInformation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this PresidentialDonorInformation execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves percentiles of real estate sales from New York Times Web Service.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_SalesPercentiles extends Temboo_Choreography
{
    /**
     * Retrieves percentiles of real estate sales from New York Times Web Service.
     *
     * @param Temboo_Session $session The session that owns this SalesPercentiles choreography.
     * @return NYTimes_RealEstate_SalesPercentiles New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/RealEstate/SalesPercentiles/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SalesPercentiles choreography.
     *
     * @param NYTimes_RealEstate_SalesPercentiles_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_SalesPercentiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_SalesPercentiles_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_RealEstate_SalesPercentiles_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SalesPercentiles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_SalesPercentiles_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_RealEstate_SalesPercentiles_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SalesPercentiles choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_SalesPercentiles_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SalesPercentiles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_SalesPercentiles_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SalesPercentiles input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_RealEstate_SalesPercentiles_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_RealEstate_SalesPercentiles_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SalesPercentiles choreography.
     *
     * @param string $value (string) The API Key provided by NY Times
     * @return NYTimes_RealEstate_SalesPercentiles_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Bedrooms input for this SalesPercentiles choreography.
     *
     * @param int $value (optional, integer) Limits the results by number of bedrooms to search for. Defaults to 1.
     * @return NYTimes_RealEstate_SalesPercentiles_Inputs For method chaining.
     */
    public function setBedrooms($value)
    {
        return $this->set('Bedrooms', $value);
    }

    /**
     * Set the value for the DateRange input for this SalesPercentiles choreography.
     *
     * @param string $value (string) Sets the quarter, month, week or day for the results (i.e. 2008-Q1, 2008-W52, 2007-07, etc)
     * @return NYTimes_RealEstate_SalesPercentiles_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the GeoExtentLevel input for this SalesPercentiles choreography.
     *
     * @param string $value (string) The geographical unit for the results (i.e. borough, neighborhood, or zip)
     * @return NYTimes_RealEstate_SalesPercentiles_Inputs For method chaining.
     */
    public function setGeoExtentLevel($value)
    {
        return $this->set('GeoExtentLevel', $value);
    }

    /**
     * Set the value for the GeoExtentValue input for this SalesPercentiles choreography.
     *
     * @param string $value (string) Limits the search to a specific area.  For example, if GeoExtendLevel is borough, the value for GeoExtendValue could be Brooklyn.
     * @return NYTimes_RealEstate_SalesPercentiles_Inputs For method chaining.
     */
    public function setGeoExtentValue($value)
    {
        return $this->set('GeoExtentValue', $value);
    }

    /**
     * Set the value for the GeoSummaryLevel input for this SalesPercentiles choreography.
     *
     * @param string $value (string) The geographic unit for grouping the results (borough, neighborhood, or zip)
     * @return NYTimes_RealEstate_SalesPercentiles_Inputs For method chaining.
     */
    public function setGeoSummaryLevel($value)
    {
        return $this->set('GeoSummaryLevel', $value);
    }

    /**
     * Set the value for the Percentile input for this SalesPercentiles choreography.
     *
     * @param int $value (integer) Specify the percentile for sales prices you want to retrieve (i.e 50)
     * @return NYTimes_RealEstate_SalesPercentiles_Inputs For method chaining.
     */
    public function setPercentile($value)
    {
        return $this->set('Percentile', $value);
    }
}


/**
 * Execution object for the SalesPercentiles choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_SalesPercentiles_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SalesPercentiles choreography.
     *
     * @param Temboo_Session $session The session that owns this SalesPercentiles execution.
     * @param NYTimes_RealEstate_SalesPercentiles $choreo The choregraphy object for this execution.
     * @param NYTimes_RealEstate_SalesPercentiles_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_SalesPercentiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_SalesPercentiles_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_RealEstate_SalesPercentiles $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SalesPercentiles execution.
     *
     * @return NYTimes_RealEstate_SalesPercentiles_Results New results object.
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
     * Wraps results in appopriate results class for this SalesPercentiles execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_RealEstate_SalesPercentiles_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_RealEstate_SalesPercentiles_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SalesPercentiles choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_SalesPercentiles_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SalesPercentiles choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_RealEstate_SalesPercentiles_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SalesPercentiles execution.
     *
     * @return string (XML) The response from the NY Times API
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for the blog posts and articles that are most frequently shared.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_MostShared extends Temboo_Choreography
{
    /**
     * Retrieves information for the blog posts and articles that are most frequently shared.
     *
     * @param Temboo_Session $session The session that owns this MostShared choreography.
     * @return NYTimes_MostPopular_MostShared New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MostPopular/MostShared/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this MostShared choreography.
     *
     * @param NYTimes_MostPopular_MostShared_Inputs|array $inputs (optional) Inputs as NYTimes_MostPopular_MostShared_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MostPopular_MostShared_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MostPopular_MostShared_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MostShared choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MostPopular_MostShared_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MostPopular_MostShared_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MostShared choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_MostShared_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the MostShared choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MostPopular_MostShared_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MostShared input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MostPopular_MostShared_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MostPopular_MostShared_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this MostShared choreography.
     *
     * @param string $value (string) The API Key provided by NY Times
     * @return NYTimes_MostPopular_MostShared_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Section input for this MostShared choreography.
     *
     * @param string $value (string) Limits the results by one or more sections (i.e. arts).  To get all sections, specify all-sections.
     * @return NYTimes_MostPopular_MostShared_Inputs For method chaining.
     */
    public function setSection($value)
    {
        return $this->set('Section', $value);
    }

    /**
     * Set the value for the ShareTypes input for this MostShared choreography.
     *
     * @param string $value (string) Limits the results by the method used to share the items.  Separate multiple share types by semicolons (i.e. facebook; twitter).
     * @return NYTimes_MostPopular_MostShared_Inputs For method chaining.
     */
    public function setShareTypes($value)
    {
        return $this->set('ShareTypes', $value);
    }

    /**
     * Set the value for the TimePeriod input for this MostShared choreography.
     *
     * @param int $value (integer) Corresponds to a day, a week, or a month of content (i.e. 1, 7, 30)
     * @return NYTimes_MostPopular_MostShared_Inputs For method chaining.
     */
    public function setTimePeriod($value)
    {
        return $this->set('TimePeriod', $value);
    }
}


/**
 * Execution object for the MostShared choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_MostShared_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MostShared choreography.
     *
     * @param Temboo_Session $session The session that owns this MostShared execution.
     * @param NYTimes_MostPopular_MostShared $choreo The choregraphy object for this execution.
     * @param NYTimes_MostPopular_MostShared_Inputs|array $inputs (optional) Inputs as NYTimes_MostPopular_MostShared_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MostPopular_MostShared_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MostPopular_MostShared $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MostShared execution.
     *
     * @return NYTimes_MostPopular_MostShared_Results New results object.
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
     * Wraps results in appopriate results class for this MostShared execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MostPopular_MostShared_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MostPopular_MostShared_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the MostShared choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_MostShared_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the MostShared choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MostPopular_MostShared_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this MostShared execution.
     *
     * @return string (XML) The response from the NY Times API
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves counts of real estate listings from New York Times Web Service.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_ListingsCounts extends Temboo_Choreography
{
    /**
     * Retrieves counts of real estate listings from New York Times Web Service.
     *
     * @param Temboo_Session $session The session that owns this ListingsCounts choreography.
     * @return NYTimes_RealEstate_ListingsCounts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/RealEstate/ListingsCounts/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListingsCounts choreography.
     *
     * @param NYTimes_RealEstate_ListingsCounts_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_ListingsCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_ListingsCounts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_RealEstate_ListingsCounts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListingsCounts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_ListingsCounts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_RealEstate_ListingsCounts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListingsCounts choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_ListingsCounts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListingsCounts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_ListingsCounts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListingsCounts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_RealEstate_ListingsCounts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_RealEstate_ListingsCounts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListingsCounts choreography.
     *
     * @param string $value (string) The API Key provided by NY Times
     * @return NYTimes_RealEstate_ListingsCounts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Bedrooms input for this ListingsCounts choreography.
     *
     * @param int $value (optional, integer) Limits the results by number of bedrooms to search for. Defaults to 1.
     * @return NYTimes_RealEstate_ListingsCounts_Inputs For method chaining.
     */
    public function setBedrooms($value)
    {
        return $this->set('Bedrooms', $value);
    }

    /**
     * Set the value for the DateRange input for this ListingsCounts choreography.
     *
     * @param string $value (string) Sets the quarter, month, week or day for the results (i.e. 2008-Q1, 2008-W52, 2007-07, 2010-10-01, etc)
     * @return NYTimes_RealEstate_ListingsCounts_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the GeoExtentLevel input for this ListingsCounts choreography.
     *
     * @param string $value (string) The geographical unit for the results (i.e. borough, neighborhood, or zip)
     * @return NYTimes_RealEstate_ListingsCounts_Inputs For method chaining.
     */
    public function setGeoExtentLevel($value)
    {
        return $this->set('GeoExtentLevel', $value);
    }

    /**
     * Set the value for the GeoExtentValue input for this ListingsCounts choreography.
     *
     * @param string $value (string) Limits the search to a specific area.  For example, if GeoExtendLevel is borough, the value for GeoExtendValue could be Brooklyn.
     * @return NYTimes_RealEstate_ListingsCounts_Inputs For method chaining.
     */
    public function setGeoExtentValue($value)
    {
        return $this->set('GeoExtentValue', $value);
    }

    /**
     * Set the value for the GeoSummaryLevel input for this ListingsCounts choreography.
     *
     * @param string $value (string) The geographic unit for grouping the results (borough, neighborhood, or zip)
     * @return NYTimes_RealEstate_ListingsCounts_Inputs For method chaining.
     */
    public function setGeoSummaryLevel($value)
    {
        return $this->set('GeoSummaryLevel', $value);
    }
}


/**
 * Execution object for the ListingsCounts choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_ListingsCounts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListingsCounts choreography.
     *
     * @param Temboo_Session $session The session that owns this ListingsCounts execution.
     * @param NYTimes_RealEstate_ListingsCounts $choreo The choregraphy object for this execution.
     * @param NYTimes_RealEstate_ListingsCounts_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_ListingsCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_ListingsCounts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_RealEstate_ListingsCounts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListingsCounts execution.
     *
     * @return NYTimes_RealEstate_ListingsCounts_Results New results object.
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
     * Wraps results in appopriate results class for this ListingsCounts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_RealEstate_ListingsCounts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_RealEstate_ListingsCounts_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListingsCounts choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_ListingsCounts_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListingsCounts choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_RealEstate_ListingsCounts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListingsCounts execution.
     *
     * @return string (XML) The response from the NY Times API
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search for a Presidential or Congressional candidate by last name and election cycle.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateSearch extends Temboo_Choreography
{
    /**
     * Search for a Presidential or Congressional candidate by last name and election cycle.
     *
     * @param Temboo_Session $session The session that owns this CandidateSearch choreography.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Candidates/CandidateSearch/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CandidateSearch choreography.
     *
     * @param NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CandidateSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CandidateSearch choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CandidateSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CandidateSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CandidateSearch choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CandidateSearch choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the LastName input for this CandidateSearch choreography.
     *
     * @param string $value (required, string) Enter the last name (or partial last name) of a Congressional or Presidential office candidate.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CandidateSearch choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CandidateSearch choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CandidateSearch choreography.
     *
     * @param Temboo_Session $session The session that owns this CandidateSearch execution.
     * @param NYTimes_CampaignFinance_Candidates_CandidateSearch $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_CandidateSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Candidates_CandidateSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CandidateSearch execution.
     *
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Results New results object.
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
     * Wraps results in appopriate results class for this CandidateSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateSearch_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CandidateSearch choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateSearch_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CandidateSearch choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CandidateSearch execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search for a political action committee (PACs) by name, or partial name.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeSearch extends Temboo_Choreography
{
    /**
     * Search for a political action committee (PACs) by name, or partial name.
     *
     * @param Temboo_Session $session The session that owns this CommitteeSearch choreography.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/CommitteeSearch/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CommitteeSearch choreography.
     *
     * @param NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeSearch choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CommitteeSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CommitteeSearch choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CommitteeSearch choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the Name input for this CommitteeSearch choreography.
     *
     * @param string $value (required, string) Specify the name of the committee to be retireved. Partial names are also acceptable.  Examples: viacom.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeSearch choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommitteeSearch choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeSearch choreography.
     *
     * @param Temboo_Session $session The session that owns this CommitteeSearch execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeSearch $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_CommitteeSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeSearch execution.
     *
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Results New results object.
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
     * Wraps results in appopriate results class for this CommitteeSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeSearch_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CommitteeSearch choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeSearch_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CommitteeSearch choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CommitteeSearch execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves data from a New York Times best-seller list for a specified date.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_BestSellerListByDate extends Temboo_Choreography
{
    /**
     * Retrieves data from a New York Times best-seller list for a specified date.
     *
     * @param Temboo_Session $session The session that owns this BestSellerListByDate choreography.
     * @return NYTimes_BestSellers_BestSellerListByDate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/BestSellers/BestSellerListByDate/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this BestSellerListByDate choreography.
     *
     * @param NYTimes_BestSellers_BestSellerListByDate_Inputs|array $inputs (optional) Inputs as NYTimes_BestSellers_BestSellerListByDate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_BestSellers_BestSellerListByDate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_BestSellers_BestSellerListByDate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this BestSellerListByDate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_BestSellers_BestSellerListByDate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_BestSellers_BestSellerListByDate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the BestSellerListByDate choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_BestSellerListByDate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the BestSellerListByDate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_BestSellers_BestSellerListByDate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this BestSellerListByDate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_BestSellers_BestSellerListByDate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_BestSellers_BestSellerListByDate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this BestSellerListByDate choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times
     * @return NYTimes_BestSellers_BestSellerListByDate_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Date input for this BestSellerListByDate choreography.
     *
     * @param string $value (required, date) The best-seller list publication date. Can be an epoch timestamp in milliseconds or in YYYY-MM-DD format.
     * @return NYTimes_BestSellers_BestSellerListByDate_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ListName input for this BestSellerListByDate choreography.
     *
     * @param string $value (required, string) The Times best-seller list to retrieve (i.e. e-book-fiction or hardcover-fiction)
     * @return NYTimes_BestSellers_BestSellerListByDate_Inputs For method chaining.
     */
    public function setListName($value)
    {
        return $this->set('ListName', $value);
    }
}


/**
 * Execution object for the BestSellerListByDate choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_BestSellerListByDate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the BestSellerListByDate choreography.
     *
     * @param Temboo_Session $session The session that owns this BestSellerListByDate execution.
     * @param NYTimes_BestSellers_BestSellerListByDate $choreo The choregraphy object for this execution.
     * @param NYTimes_BestSellers_BestSellerListByDate_Inputs|array $inputs (optional) Inputs as NYTimes_BestSellers_BestSellerListByDate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_BestSellers_BestSellerListByDate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_BestSellers_BestSellerListByDate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this BestSellerListByDate execution.
     *
     * @return NYTimes_BestSellers_BestSellerListByDate_Results New results object.
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
     * Wraps results in appopriate results class for this BestSellerListByDate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_BestSellers_BestSellerListByDate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_BestSellers_BestSellerListByDate_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the BestSellerListByDate choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_BestSellers_BestSellerListByDate_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the BestSellerListByDate choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_BestSellers_BestSellerListByDate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this BestSellerListByDate execution.
     *
     * @return string (xml) The response from the NY Times API
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for the blog posts and articles that are most frequently viewed.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_MostViewed extends Temboo_Choreography
{
    /**
     * Retrieves information for the blog posts and articles that are most frequently viewed.
     *
     * @param Temboo_Session $session The session that owns this MostViewed choreography.
     * @return NYTimes_MostPopular_MostViewed New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MostPopular/MostViewed/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this MostViewed choreography.
     *
     * @param NYTimes_MostPopular_MostViewed_Inputs|array $inputs (optional) Inputs as NYTimes_MostPopular_MostViewed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MostPopular_MostViewed_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MostPopular_MostViewed_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MostViewed choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MostPopular_MostViewed_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MostPopular_MostViewed_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MostViewed choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_MostViewed_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the MostViewed choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MostPopular_MostViewed_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MostViewed input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MostPopular_MostViewed_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MostPopular_MostViewed_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this MostViewed choreography.
     *
     * @param string $value (string) The API Key provided by NY Times
     * @return NYTimes_MostPopular_MostViewed_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Offset input for this MostViewed choreography.
     *
     * @param int $value (optional, integer) The starting point of the result set. Must be a multiple of 20.
     * @return NYTimes_MostPopular_MostViewed_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Section input for this MostViewed choreography.
     *
     * @param string $value (string) Limits the results by one or more sections (i.e. arts).  To get all sections, specify all-sections.
     * @return NYTimes_MostPopular_MostViewed_Inputs For method chaining.
     */
    public function setSection($value)
    {
        return $this->set('Section', $value);
    }

    /**
     * Set the value for the TimePeriod input for this MostViewed choreography.
     *
     * @param int $value (integer) Corresponds to a day, a week, or a month of content (i.e. 1, 7, 30)
     * @return NYTimes_MostPopular_MostViewed_Inputs For method chaining.
     */
    public function setTimePeriod($value)
    {
        return $this->set('TimePeriod', $value);
    }
}


/**
 * Execution object for the MostViewed choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_MostViewed_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MostViewed choreography.
     *
     * @param Temboo_Session $session The session that owns this MostViewed execution.
     * @param NYTimes_MostPopular_MostViewed $choreo The choregraphy object for this execution.
     * @param NYTimes_MostPopular_MostViewed_Inputs|array $inputs (optional) Inputs as NYTimes_MostPopular_MostViewed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MostPopular_MostViewed_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MostPopular_MostViewed $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MostViewed execution.
     *
     * @return NYTimes_MostPopular_MostViewed_Results New results object.
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
     * Wraps results in appopriate results class for this MostViewed execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MostPopular_MostViewed_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MostPopular_MostViewed_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the MostViewed choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_MostViewed_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the MostViewed choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MostPopular_MostViewed_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this MostViewed execution.
     *
     * @return string The response from the NY Times API
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain finance details for a Presidential or Congressional candidate.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateDetails extends Temboo_Choreography
{
    /**
     * Obtain finance details for a Presidential or Congressional candidate.
     *
     * @param Temboo_Session $session The session that owns this CandidateDetails choreography.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Candidates/CandidateDetails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CandidateDetails choreography.
     *
     * @param NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CandidateDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CandidateDetails choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CandidateDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CandidateDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CandidateDetails choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CandidateDetails choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the FECID input for this CandidateDetails choreography.
     *
     * @param string $value (required, string) Enter the FEC ID for the candidate.  ID can be obtained by first running the CandidateSearch Choreo.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs For method chaining.
     */
    public function setFECID($value)
    {
        return $this->set('FECID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CandidateDetails choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CandidateDetails choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CandidateDetails choreography.
     *
     * @param Temboo_Session $session The session that owns this CandidateDetails execution.
     * @param NYTimes_CampaignFinance_Candidates_CandidateDetails $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_CandidateDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Candidates_CandidateDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CandidateDetails execution.
     *
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Results New results object.
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
     * Wraps results in appopriate results class for this CandidateDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateDetails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CandidateDetails choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateDetails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CandidateDetails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CandidateDetails execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Queries the Newswire API for a specific news item.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetSpecificNewsItem extends Temboo_Choreography
{
    /**
     * Queries the Newswire API for a specific news item.
     *
     * @param Temboo_Session $session The session that owns this GetSpecificNewsItem choreography.
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/TimesNewswire/GetSpecificNewsItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetSpecificNewsItem choreography.
     *
     * @param NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs|array $inputs (optional) Inputs as NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_TimesNewswire_GetSpecificNewsItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSpecificNewsItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSpecificNewsItem choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetSpecificNewsItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSpecificNewsItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetSpecificNewsItem choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetSpecificNewsItem choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to json, xml, or sphp. Defaults to xml.
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the URL input for this GetSpecificNewsItem choreography.
     *
     * @param string $value (required, string) The complete URL of a specific news item. This URL is returned in the output of the GetRecentNews Choreo.
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the GetSpecificNewsItem choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetSpecificNewsItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSpecificNewsItem choreography.
     *
     * @param Temboo_Session $session The session that owns this GetSpecificNewsItem execution.
     * @param NYTimes_TimesNewswire_GetSpecificNewsItem $choreo The choregraphy object for this execution.
     * @param NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs|array $inputs (optional) Inputs as NYTimes_TimesNewswire_GetSpecificNewsItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_TimesNewswire_GetSpecificNewsItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSpecificNewsItem execution.
     *
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem_Results New results object.
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
     * Wraps results in appopriate results class for this GetSpecificNewsItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_TimesNewswire_GetSpecificNewsItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetSpecificNewsItem choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_TimesNewswire_GetSpecificNewsItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetSpecificNewsItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_TimesNewswire_GetSpecificNewsItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetSpecificNewsItem execution.
     *
     * @return string The response from the NY Times API. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain contributions made by a Political Action Committee (PAC) in an election cycle.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributions extends Temboo_Choreography
{
    /**
     * Obtain contributions made by a Political Action Committee (PAC) in an election cycle.
     *
     * @param Temboo_Session $session The session that owns this CommitteeContributions choreography.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/CommitteeContributions/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CommitteeContributions choreography.
     *
     * @param NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeContributions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommitteeContributions choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommitteeContributions choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CommitteeContributions choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommitteeContributions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CommitteeContributions choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CommitteeContributions choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the CommitteeFECID input for this CommitteeContributions choreography.
     *
     * @param string $value (conditional, string) Enter a political action committee's FEC ID.  Either CommitteeFECID, OR Name must be provided.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setCommitteeFECID($value)
    {
        return $this->set('CommitteeFECID', $value);
    }

    /**
     * Set the value for the Name input for this CommitteeContributions choreography.
     *
     * @param string $value (conditional, string) Enter the name of a political action committee (PAC) whose contributions will be obtained. Either Name or CommitteeFECID must be provided.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Offset input for this CommitteeContributions choreography.
     *
     * @param int $value (optional, integer) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value (e.g., Offset=40 displays results 41–60).
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommitteeContributions choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommitteeContributions choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommitteeContributions choreography.
     *
     * @param Temboo_Session $session The session that owns this CommitteeContributions execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeContributions $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_CommitteeContributions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_CommitteeContributions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommitteeContributions execution.
     *
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Results New results object.
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
     * Wraps results in appopriate results class for this CommitteeContributions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_CommitteeContributions_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CommitteeContributions choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_CommitteeContributions_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CommitteeContributions choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_CommitteeContributions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CommitteeContributions execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves 20 of the most recently added political office candidates.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_NewCandidates extends Temboo_Choreography
{
    /**
     * Retrieves 20 of the most recently added political office candidates.
     *
     * @param Temboo_Session $session The session that owns this NewCandidates choreography.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Candidates/NewCandidates/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this NewCandidates choreography.
     *
     * @param NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Candidates_NewCandidates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this NewCandidates choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the NewCandidates choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the NewCandidates choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this NewCandidates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this NewCandidates choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this NewCandidates choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this NewCandidates choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the NewCandidates choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_NewCandidates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the NewCandidates choreography.
     *
     * @param Temboo_Session $session The session that owns this NewCandidates execution.
     * @param NYTimes_CampaignFinance_Candidates_NewCandidates $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_NewCandidates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Candidates_NewCandidates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this NewCandidates execution.
     *
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Results New results object.
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
     * Wraps results in appopriate results class for this NewCandidates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Candidates_NewCandidates_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the NewCandidates choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_NewCandidates_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the NewCandidates choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_NewCandidates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this NewCandidates execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves biographical information about reviewers.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewerDetails extends Temboo_Choreography
{
    /**
     * Retrieves biographical information about reviewers.
     *
     * @param Temboo_Session $session The session that owns this GetReviewerDetails choreography.
     * @return NYTimes_MovieReviews_GetReviewerDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MovieReviews/GetReviewerDetails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetReviewerDetails choreography.
     *
     * @param NYTimes_MovieReviews_GetReviewerDetails_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_GetReviewerDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_GetReviewerDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MovieReviews_GetReviewerDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReviewerDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_GetReviewerDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MovieReviews_GetReviewerDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReviewerDetails choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewerDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetReviewerDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_GetReviewerDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReviewerDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MovieReviews_GetReviewerDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MovieReviews_GetReviewerDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetReviewerDetails choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_MovieReviews_GetReviewerDetails_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ResourceType input for this GetReviewerDetails choreography.
     *
     * @param string $value (optional, string) Specify "all", "full-time", or "part-time" for that subset. Specify a reviewer's name to get details about a reviewer. Names should be separated by hyphens or dots (i.e. manohla-dargis)
     * @return NYTimes_MovieReviews_GetReviewerDetails_Inputs For method chaining.
     */
    public function setResourceType($value)
    {
        return $this->set('ResourceType', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetReviewerDetails choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to json, xml, or sphp. Defaults to xml.
     * @return NYTimes_MovieReviews_GetReviewerDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetReviewerDetails choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewerDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReviewerDetails choreography.
     *
     * @param Temboo_Session $session The session that owns this GetReviewerDetails execution.
     * @param NYTimes_MovieReviews_GetReviewerDetails $choreo The choregraphy object for this execution.
     * @param NYTimes_MovieReviews_GetReviewerDetails_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_GetReviewerDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_GetReviewerDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MovieReviews_GetReviewerDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReviewerDetails execution.
     *
     * @return NYTimes_MovieReviews_GetReviewerDetails_Results New results object.
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
     * Wraps results in appopriate results class for this GetReviewerDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MovieReviews_GetReviewerDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MovieReviews_GetReviewerDetails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetReviewerDetails choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewerDetails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetReviewerDetails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MovieReviews_GetReviewerDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetReviewerDetails execution.
     *
     * @return string The response from the NY Times API. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves 20 of the most recent committees that have registered as independent expenditure-only (commonly known as "Super PACs").
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees extends Temboo_Choreography
{
    /**
     * Retrieves 20 of the most recent committees that have registered as independent expenditure-only (commonly known as "Super PACs").
     *
     * @param Temboo_Session $session The session that owns this IndependentExpenditureOnlyCommittees choreography.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/IndependentExpenditures/IndependentExpenditureOnlyCommittees/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this IndependentExpenditureOnlyCommittees choreography.
     *
     * @param NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this IndependentExpenditureOnlyCommittees choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the IndependentExpenditureOnlyCommittees choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the IndependentExpenditureOnlyCommittees choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this IndependentExpenditureOnlyCommittees input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this IndependentExpenditureOnlyCommittees choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this IndependentExpenditureOnlyCommittees choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the Offset input for this IndependentExpenditureOnlyCommittees choreography.
     *
     * @param int $value (optional, integer) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value (e.g., Offset=40 displays results 41–60).
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this IndependentExpenditureOnlyCommittees choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the IndependentExpenditureOnlyCommittees choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the IndependentExpenditureOnlyCommittees choreography.
     *
     * @param Temboo_Session $session The session that owns this IndependentExpenditureOnlyCommittees execution.
     * @param NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this IndependentExpenditureOnlyCommittees execution.
     *
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Results New results object.
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
     * Wraps results in appopriate results class for this IndependentExpenditureOnlyCommittees execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the IndependentExpenditureOnlyCommittees choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the IndependentExpenditureOnlyCommittees choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_IndependentExpenditureOnlyCommittees_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this IndependentExpenditureOnlyCommittees execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for the blog posts and articles that are most frequently emailed.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_MostEmailed extends Temboo_Choreography
{
    /**
     * Retrieves information for the blog posts and articles that are most frequently emailed.
     *
     * @param Temboo_Session $session The session that owns this MostEmailed choreography.
     * @return NYTimes_MostPopular_MostEmailed New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MostPopular/MostEmailed/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this MostEmailed choreography.
     *
     * @param NYTimes_MostPopular_MostEmailed_Inputs|array $inputs (optional) Inputs as NYTimes_MostPopular_MostEmailed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MostPopular_MostEmailed_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MostPopular_MostEmailed_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MostEmailed choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MostPopular_MostEmailed_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MostPopular_MostEmailed_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MostEmailed choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_MostEmailed_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the MostEmailed choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MostPopular_MostEmailed_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MostEmailed input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MostPopular_MostEmailed_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MostPopular_MostEmailed_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this MostEmailed choreography.
     *
     * @param string $value (string) The API Key provided by NY Times
     * @return NYTimes_MostPopular_MostEmailed_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Section input for this MostEmailed choreography.
     *
     * @param string $value (string) Limits the results by one or more sections (i.e. arts).  To get all sections, specify all-sections.
     * @return NYTimes_MostPopular_MostEmailed_Inputs For method chaining.
     */
    public function setSection($value)
    {
        return $this->set('Section', $value);
    }

    /**
     * Set the value for the TimePeriod input for this MostEmailed choreography.
     *
     * @param int $value (integer) Corresponds to a day, a week, or a month of content (i.e. 1, 7, 30)
     * @return NYTimes_MostPopular_MostEmailed_Inputs For method chaining.
     */
    public function setTimePeriod($value)
    {
        return $this->set('TimePeriod', $value);
    }
}


/**
 * Execution object for the MostEmailed choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_MostEmailed_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MostEmailed choreography.
     *
     * @param Temboo_Session $session The session that owns this MostEmailed execution.
     * @param NYTimes_MostPopular_MostEmailed $choreo The choregraphy object for this execution.
     * @param NYTimes_MostPopular_MostEmailed_Inputs|array $inputs (optional) Inputs as NYTimes_MostPopular_MostEmailed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MostPopular_MostEmailed_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MostPopular_MostEmailed $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MostEmailed execution.
     *
     * @return NYTimes_MostPopular_MostEmailed_Results New results object.
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
     * Wraps results in appopriate results class for this MostEmailed execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MostPopular_MostEmailed_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MostPopular_MostEmailed_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the MostEmailed choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MostPopular_MostEmailed_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the MostEmailed choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MostPopular_MostEmailed_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this MostEmailed execution.
     *
     * @return string (XML) The response from the NY Times API
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves 20 of the most recently added committees.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_NewCommittees extends Temboo_Choreography
{
    /**
     * Retrieves 20 of the most recently added committees.
     *
     * @param Temboo_Session $session The session that owns this NewCommittees choreography.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Committees/NewCommittees/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this NewCommittees choreography.
     *
     * @param NYTimes_CampaignFinance_Committees_NewCommittees_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_NewCommittees_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Committees_NewCommittees_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this NewCommittees choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Committees_NewCommittees_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the NewCommittees choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_NewCommittees_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the NewCommittees choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this NewCommittees input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this NewCommittees choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this NewCommittees choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this NewCommittees choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the NewCommittees choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_NewCommittees_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the NewCommittees choreography.
     *
     * @param Temboo_Session $session The session that owns this NewCommittees execution.
     * @param NYTimes_CampaignFinance_Committees_NewCommittees $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_Committees_NewCommittees_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Committees_NewCommittees_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Committees_NewCommittees $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this NewCommittees execution.
     *
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Results New results object.
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
     * Wraps results in appopriate results class for this NewCommittees execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Committees_NewCommittees_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the NewCommittees choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Committees_NewCommittees_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the NewCommittees choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Committees_NewCommittees_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this NewCommittees execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves 20 of the most recent independent expenditures in support of or opposition to presidential candidates.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures extends Temboo_Choreography
{
    /**
     * Retrieves 20 of the most recent independent expenditures in support of or opposition to presidential candidates.
     *
     * @param Temboo_Session $session The session that owns this PresidentialIndependentExpenditures choreography.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/IndependentExpenditures/PresidentialIndependentExpenditures/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PresidentialIndependentExpenditures choreography.
     *
     * @param NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PresidentialIndependentExpenditures choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PresidentialIndependentExpenditures choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PresidentialIndependentExpenditures choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PresidentialIndependentExpenditures input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PresidentialIndependentExpenditures choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this PresidentialIndependentExpenditures choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the Offset input for this PresidentialIndependentExpenditures choreography.
     *
     * @param int $value (optional, integer) The first 20 results are shown by default. To page through the results, set Offset to the appropriate value (e.g., Offset=40 displays results 41–60).
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PresidentialIndependentExpenditures choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PresidentialIndependentExpenditures choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PresidentialIndependentExpenditures choreography.
     *
     * @param Temboo_Session $session The session that owns this PresidentialIndependentExpenditures execution.
     * @param NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PresidentialIndependentExpenditures execution.
     *
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Results New results object.
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
     * Wraps results in appopriate results class for this PresidentialIndependentExpenditures execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PresidentialIndependentExpenditures choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PresidentialIndependentExpenditures choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndependentExpenditures_PresidentialIndependentExpenditures_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this PresidentialIndependentExpenditures execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of the 20 top candidates in terms of contributions received.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory extends Temboo_Choreography
{
    /**
     * Retrieve a list of the 20 top candidates in terms of contributions received.
     *
     * @param Temboo_Session $session The session that owns this CandidateLeadersByCategory choreography.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/Candidates/CandidateLeadersByCategory/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CandidateLeadersByCategory choreography.
     *
     * @param NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CandidateLeadersByCategory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CandidateLeadersByCategory choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CandidateLeadersByCategory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CandidateLeadersByCategory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CandidateLeadersByCategory choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this CandidateLeadersByCategory choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the Category input for this CandidateLeadersByCategory choreography.
     *
     * @param string $value (required, string) Specify thecategory to be retrieved. Example: contribution-total, returns the total amount of financial contributions received by this candidate's campaign.  See Description for more info.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CandidateLeadersByCategory choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CandidateLeadersByCategory choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CandidateLeadersByCategory choreography.
     *
     * @param Temboo_Session $session The session that owns this CandidateLeadersByCategory execution.
     * @param NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CandidateLeadersByCategory execution.
     *
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Results New results object.
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
     * Wraps results in appopriate results class for this CandidateLeadersByCategory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CandidateLeadersByCategory choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CandidateLeadersByCategory choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_Candidates_CandidateLeadersByCategory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CandidateLeadersByCategory execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves percentiles of real estate listings from New York Times Web Service.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_ListingsPercentiles extends Temboo_Choreography
{
    /**
     * Retrieves percentiles of real estate listings from New York Times Web Service.
     *
     * @param Temboo_Session $session The session that owns this ListingsPercentiles choreography.
     * @return NYTimes_RealEstate_ListingsPercentiles New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/RealEstate/ListingsPercentiles/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListingsPercentiles choreography.
     *
     * @param NYTimes_RealEstate_ListingsPercentiles_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_ListingsPercentiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_ListingsPercentiles_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_RealEstate_ListingsPercentiles_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListingsPercentiles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_ListingsPercentiles_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_RealEstate_ListingsPercentiles_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListingsPercentiles choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_ListingsPercentiles_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListingsPercentiles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_RealEstate_ListingsPercentiles_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListingsPercentiles input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_RealEstate_ListingsPercentiles_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_RealEstate_ListingsPercentiles_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListingsPercentiles choreography.
     *
     * @param string $value (string) The API Key provided by NY Times
     * @return NYTimes_RealEstate_ListingsPercentiles_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Bedrooms input for this ListingsPercentiles choreography.
     *
     * @param int $value (optional, integer) Limits the results by number of bedrooms to search for. Defaults to 1.
     * @return NYTimes_RealEstate_ListingsPercentiles_Inputs For method chaining.
     */
    public function setBedrooms($value)
    {
        return $this->set('Bedrooms', $value);
    }

    /**
     * Set the value for the DateRange input for this ListingsPercentiles choreography.
     *
     * @param string $value (string) Sets the quarter, month, week or day for the results (i.e. 2008-Q1, 2008-W52, 2007-07, 2010-10-01, etc)
     * @return NYTimes_RealEstate_ListingsPercentiles_Inputs For method chaining.
     */
    public function setDateRange($value)
    {
        return $this->set('DateRange', $value);
    }

    /**
     * Set the value for the GeoExtentLevel input for this ListingsPercentiles choreography.
     *
     * @param string $value (string) The geographical unit for the results (i.e. borough, neighborhood, or zip)
     * @return NYTimes_RealEstate_ListingsPercentiles_Inputs For method chaining.
     */
    public function setGeoExtentLevel($value)
    {
        return $this->set('GeoExtentLevel', $value);
    }

    /**
     * Set the value for the GeoExtentValue input for this ListingsPercentiles choreography.
     *
     * @param string $value (string) Limits the search to a specific area.  For example, if GeoExtendLevel is borough, the value for GeoExtendValue could be Brooklyn.
     * @return NYTimes_RealEstate_ListingsPercentiles_Inputs For method chaining.
     */
    public function setGeoExtentValue($value)
    {
        return $this->set('GeoExtentValue', $value);
    }

    /**
     * Set the value for the GeoSummaryLevel input for this ListingsPercentiles choreography.
     *
     * @param string $value (string) The geographic unit for grouping the results (borough, neighborhood, or zip)
     * @return NYTimes_RealEstate_ListingsPercentiles_Inputs For method chaining.
     */
    public function setGeoSummaryLevel($value)
    {
        return $this->set('GeoSummaryLevel', $value);
    }

    /**
     * Set the value for the Percentile input for this ListingsPercentiles choreography.
     *
     * @param int $value (integer) Specify a percentile for the listing prices you want to retrieve (i.e 50)
     * @return NYTimes_RealEstate_ListingsPercentiles_Inputs For method chaining.
     */
    public function setPercentile($value)
    {
        return $this->set('Percentile', $value);
    }
}


/**
 * Execution object for the ListingsPercentiles choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_ListingsPercentiles_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListingsPercentiles choreography.
     *
     * @param Temboo_Session $session The session that owns this ListingsPercentiles execution.
     * @param NYTimes_RealEstate_ListingsPercentiles $choreo The choregraphy object for this execution.
     * @param NYTimes_RealEstate_ListingsPercentiles_Inputs|array $inputs (optional) Inputs as NYTimes_RealEstate_ListingsPercentiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_RealEstate_ListingsPercentiles_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_RealEstate_ListingsPercentiles $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListingsPercentiles execution.
     *
     * @return NYTimes_RealEstate_ListingsPercentiles_Results New results object.
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
     * Wraps results in appopriate results class for this ListingsPercentiles execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_RealEstate_ListingsPercentiles_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_RealEstate_ListingsPercentiles_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListingsPercentiles choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_RealEstate_ListingsPercentiles_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListingsPercentiles choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_RealEstate_ListingsPercentiles_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListingsPercentiles execution.
     *
     * @return string (XML) The response from the NY Times Web Service
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lets you query the Article Search API for New York Times articles.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_ArticleSearch_QueryArticles extends Temboo_Choreography
{
    /**
     * Lets you query the Article Search API for New York Times articles.
     *
     * @param Temboo_Session $session The session that owns this QueryArticles choreography.
     * @return NYTimes_ArticleSearch_QueryArticles New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/ArticleSearch/QueryArticles/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this QueryArticles choreography.
     *
     * @param NYTimes_ArticleSearch_QueryArticles_Inputs|array $inputs (optional) Inputs as NYTimes_ArticleSearch_QueryArticles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_ArticleSearch_QueryArticles_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_ArticleSearch_QueryArticles_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this QueryArticles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_ArticleSearch_QueryArticles_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the QueryArticles choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_ArticleSearch_QueryArticles_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the QueryArticles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this QueryArticles input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this QueryArticles choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the BeginDate input for this QueryArticles choreography.
     *
     * @param string $value (optional, date) Sets the starting point (which is inclusive) of the range of publication dates to return. Must be used with EndDate.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setBeginDate($value)
    {
        return $this->set('BeginDate', $value);
    }

    /**
     * Set the value for the EndDate input for this QueryArticles choreography.
     *
     * @param string $value (optional, date) Sets the end point (which is inclusive) of the range of publication dates to return. Must be used with BeginDate.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Facets input for this QueryArticles choreography.
     *
     * @param string $value (optional, string) A comma-delimited list of up to 5 facets. This indicates the sets of facet values to include in the response. See Choreo documentation for more information about accepted values for this input.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setFacets($value)
    {
        return $this->set('Facets', $value);
    }

    /**
     * Set the value for the Fields input for this QueryArticles choreography.
     *
     * @param string $value (optional, string) A comma-delimited list of fields to return. These fields are returned by default: body, byline, date, title, and url.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the Offset input for this QueryArticles choreography.
     *
     * @param int $value (optional, integer) This corresponds to which set of 10 results is returned. Used to page through results. Set to 0 to return records 0-9, set to 1 to return records 10-19, etc.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Query input for this QueryArticles choreography.
     *
     * @param string $value (required, string) Search keywords (optionally applied to specific fields) and/or facets. See Choreo documentation for syntax examples.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Rank input for this QueryArticles choreography.
     *
     * @param string $value (optional, string) Sets the order of the results. Accepted values are: newest (the defaults), oldest, or closest.
     * @return NYTimes_ArticleSearch_QueryArticles_Inputs For method chaining.
     */
    public function setRank($value)
    {
        return $this->set('Rank', $value);
    }
}


/**
 * Execution object for the QueryArticles choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_ArticleSearch_QueryArticles_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the QueryArticles choreography.
     *
     * @param Temboo_Session $session The session that owns this QueryArticles execution.
     * @param NYTimes_ArticleSearch_QueryArticles $choreo The choregraphy object for this execution.
     * @param NYTimes_ArticleSearch_QueryArticles_Inputs|array $inputs (optional) Inputs as NYTimes_ArticleSearch_QueryArticles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_ArticleSearch_QueryArticles_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_ArticleSearch_QueryArticles $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this QueryArticles execution.
     *
     * @return NYTimes_ArticleSearch_QueryArticles_Results New results object.
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
     * Wraps results in appopriate results class for this QueryArticles execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_ArticleSearch_QueryArticles_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_ArticleSearch_QueryArticles_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the QueryArticles choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_ArticleSearch_QueryArticles_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the QueryArticles choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_ArticleSearch_QueryArticles_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this QueryArticles execution.
     *
     * @return string (json) The response from the NY Times API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve contributions made by individuals to a specific presidential candidate. 
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate extends Temboo_Choreography
{
    /**
     * Retrieve contributions made by individuals to a specific presidential candidate. 
     *
     * @param Temboo_Session $session The session that owns this ContributionsByCandidate choreography.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/CampaignFinance/IndividualContributors/ContributionsByCandidate/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ContributionsByCandidate choreography.
     *
     * @param NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ContributionsByCandidate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ContributionsByCandidate choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ContributionsByCandidate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ContributionsByCandidate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ContributionsByCandidate choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CampaignCycle input for this ContributionsByCandidate choreography.
     *
     * @param int $value (required, integer) Enter the campaign cycle year in YYYY format.  This must be an even year. 
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs For method chaining.
     */
    public function setCampaignCycle($value)
    {
        return $this->set('CampaignCycle', $value);
    }

    /**
     * Set the value for the CandidateFECID input for this ContributionsByCandidate choreography.
     *
     * @param string $value (required, string) Enter a cadidate's nine-digit FEC ID. IDs can be obtained by first running the CandidateSearch Choreo.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs For method chaining.
     */
    public function setCandidateFECID($value)
    {
        return $this->set('CandidateFECID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ContributionsByCandidate choreography.
     *
     * @param string $value (optional, string) Enter json or xml.  Default is json.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ContributionsByCandidate choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ContributionsByCandidate choreography.
     *
     * @param Temboo_Session $session The session that owns this ContributionsByCandidate execution.
     * @param NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate $choreo The choregraphy object for this execution.
     * @param NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs|array $inputs (optional) Inputs as NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ContributionsByCandidate execution.
     *
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Results New results object.
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
     * Wraps results in appopriate results class for this ContributionsByCandidate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ContributionsByCandidate choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ContributionsByCandidate choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_CampaignFinance_IndividualContributors_ContributionsByCandidate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ContributionsByCandidate execution.
     *
     * @return string The response from the NY Times API corresponds to the setting (json, or xml) entered in the ResponseFormat variable.  Default is set to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches movie reviews by keyword and various filter parameters.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewsByKeyword extends Temboo_Choreography
{
    /**
     * Searches movie reviews by keyword and various filter parameters.
     *
     * @param Temboo_Session $session The session that owns this GetReviewsByKeyword choreography.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NYTimes/MovieReviews/GetReviewsByKeyword/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetReviewsByKeyword choreography.
     *
     * @param NYTimes_MovieReviews_GetReviewsByKeyword_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_GetReviewsByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NYTimes_MovieReviews_GetReviewsByKeyword_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReviewsByKeyword choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NYTimes_MovieReviews_GetReviewsByKeyword_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReviewsByKeyword choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewsByKeyword_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetReviewsByKeyword choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReviewsByKeyword input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetReviewsByKeyword choreography.
     *
     * @param string $value (required, string) The API Key provided by NY Times.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CriticsPick input for this GetReviewsByKeyword choreography.
     *
     * @param string $value (optional, string) Set this parameter to Y to limt the results to NYT Critics' Picks. To get only those movies that have not been highlighted by Times critics, specify N.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setCriticsPick($value)
    {
        return $this->set('CriticsPick', $value);
    }

    /**
     * Set the value for the DVD input for this GetReviewsByKeyword choreography.
     *
     * @param string $value (optional, string) Set this parameter to Y to limit the results to movies that have been released on DVD. To get only those movies that have not been released on DVD, specify N.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setDVD($value)
    {
        return $this->set('DVD', $value);
    }

    /**
     * Set the value for the Limit input for this GetReviewsByKeyword choreography.
     *
     * @param int $value (optional, integer) The number of results to return.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this GetReviewsByKeyword choreography.
     *
     * @param int $value (optional, integer) A numeric value indicating the starting point of the result set. This can be used in combination with the Limit input to page through results.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the OpeningDate input for this GetReviewsByKeyword choreography.
     *
     * @param string $value (optional, date) Limits by date or range of dates. The opening-date is the date the movie's opening date in the New York region. Format YYYY-MM-DD. Separate ranges with semicolons.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setOpeningDate($value)
    {
        return $this->set('OpeningDate', $value);
    }

    /**
     * Set the value for the Order input for this GetReviewsByKeyword choreography.
     *
     * @param string $value (optional, string) Sets the sort order of the results. Accepted values are: by-title, by-publication-date, by-opening-date, by-dvd-release-date.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PublicationDate input for this GetReviewsByKeyword choreography.
     *
     * @param string $value (optional, date) Limits by date or range of dates. The publication-date is the date the review was first publish.ed in The Times. Format YYYY-MM-DD. Separate ranges with semicolons.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setPublicationDate($value)
    {
        return $this->set('PublicationDate', $value);
    }

    /**
     * Set the value for the Query input for this GetReviewsByKeyword choreography.
     *
     * @param string $value (optional, string) A string of search keywords. Matches movie titles and indexed terms.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetReviewsByKeyword choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to json, xml, or sphp. Defaults to xml.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Reviewer input for this GetReviewsByKeyword choreography.
     *
     * @param string $value (optional, string) Limits results to reviews by a specific critic. Reviewer names should be hyphenated or concatenated with dots.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setReviewer($value)
    {
        return $this->set('Reviewer', $value);
    }

    /**
     * Set the value for the ThousandBest input for this GetReviewsByKeyword choreography.
     *
     * @param string $value (optional, string) Set this parameter to Y to limit the results to movies on the Times list of The Best 1,000 Movies Ever Made. To get only those movies that are not on the list, specify N.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Inputs For method chaining.
     */
    public function setThousandBest($value)
    {
        return $this->set('ThousandBest', $value);
    }
}


/**
 * Execution object for the GetReviewsByKeyword choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewsByKeyword_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReviewsByKeyword choreography.
     *
     * @param Temboo_Session $session The session that owns this GetReviewsByKeyword execution.
     * @param NYTimes_MovieReviews_GetReviewsByKeyword $choreo The choregraphy object for this execution.
     * @param NYTimes_MovieReviews_GetReviewsByKeyword_Inputs|array $inputs (optional) Inputs as NYTimes_MovieReviews_GetReviewsByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NYTimes_MovieReviews_GetReviewsByKeyword $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReviewsByKeyword execution.
     *
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Results New results object.
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
     * Wraps results in appopriate results class for this GetReviewsByKeyword execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NYTimes_MovieReviews_GetReviewsByKeyword_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetReviewsByKeyword choreography.
 *
 * @package Temboo
 * @subpackage NYTimes
 */
class NYTimes_MovieReviews_GetReviewsByKeyword_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetReviewsByKeyword choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NYTimes_MovieReviews_GetReviewsByKeyword_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetReviewsByKeyword execution.
     *
     * @return string The response from the NY Times API. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>