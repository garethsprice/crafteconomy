<?php

/**
 * Temboo PHP SDK Bitly classes
 *
 * Execute Choreographies from the Temboo Bitly bundle.
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
 * @subpackage Bitly
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Used to lookup a bitly link with a given long URL.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_LinkLookup extends Temboo_Choreography
{
    /**
     * Used to lookup a bitly link with a given long URL.
     *
     * @param Temboo_Session $session The session that owns this LinkLookup choreography.
     * @return Bitly_Links_LinkLookup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bitly/Links/LinkLookup/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this LinkLookup choreography.
     *
     * @param Bitly_Links_LinkLookup_Inputs|array $inputs (optional) Inputs as Bitly_Links_LinkLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_Links_LinkLookup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bitly_Links_LinkLookup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LinkLookup choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_Links_LinkLookup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bitly_Links_LinkLookup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LinkLookup choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_LinkLookup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the LinkLookup choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_Links_LinkLookup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LinkLookup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bitly_Links_LinkLookup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Bitly_Links_LinkLookup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this LinkLookup choreography.
     *
     * @param string $value (required, string) The oAuth access token provided by Bitly.
     * @return Bitly_Links_LinkLookup_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LinkLookup choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Accepted values are "json" or "xml". Defaults to "json".
     * @return Bitly_Links_LinkLookup_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the URL input for this LinkLookup choreography.
     *
     * @param string $value (required, string) One or more long URLs to lookup.
     * @return Bitly_Links_LinkLookup_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the LinkLookup choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_LinkLookup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LinkLookup choreography.
     *
     * @param Temboo_Session $session The session that owns this LinkLookup execution.
     * @param Bitly_Links_LinkLookup $choreo The choregraphy object for this execution.
     * @param Bitly_Links_LinkLookup_Inputs|array $inputs (optional) Inputs as Bitly_Links_LinkLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_Links_LinkLookup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bitly_Links_LinkLookup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LinkLookup execution.
     *
     * @return Bitly_Links_LinkLookup_Results New results object.
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
     * Wraps results in appopriate results class for this LinkLookup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bitly_Links_LinkLookup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bitly_Links_LinkLookup_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the LinkLookup choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_LinkLookup_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the LinkLookup choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bitly_Links_LinkLookup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this LinkLookup execution.
     *
     * @return string (xml) The response from Bitly.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the page title for a given bitly link.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_GetLinkInfo extends Temboo_Choreography
{
    /**
     * Returns the page title for a given bitly link.
     *
     * @param Temboo_Session $session The session that owns this GetLinkInfo choreography.
     * @return Bitly_Links_GetLinkInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bitly/Links/GetLinkInfo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetLinkInfo choreography.
     *
     * @param Bitly_Links_GetLinkInfo_Inputs|array $inputs (optional) Inputs as Bitly_Links_GetLinkInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_Links_GetLinkInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bitly_Links_GetLinkInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLinkInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_Links_GetLinkInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bitly_Links_GetLinkInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLinkInfo choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_GetLinkInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetLinkInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_Links_GetLinkInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLinkInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bitly_Links_GetLinkInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Bitly_Links_GetLinkInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLinkInfo choreography.
     *
     * @param string $value (required, string) The oAuth access token provided by Bitly.
     * @return Bitly_Links_GetLinkInfo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLinkInfo choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Accepted values are "json" or "xml". Defaults to "json".
     * @return Bitly_Links_GetLinkInfo_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShortURL input for this GetLinkInfo choreography.
     *
     * @param string $value (required, string) One or more bitly links.
     * @return Bitly_Links_GetLinkInfo_Inputs For method chaining.
     */
    public function setShortURL($value)
    {
        return $this->set('ShortURL', $value);
    }
}


/**
 * Execution object for the GetLinkInfo choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_GetLinkInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLinkInfo choreography.
     *
     * @param Temboo_Session $session The session that owns this GetLinkInfo execution.
     * @param Bitly_Links_GetLinkInfo $choreo The choregraphy object for this execution.
     * @param Bitly_Links_GetLinkInfo_Inputs|array $inputs (optional) Inputs as Bitly_Links_GetLinkInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_Links_GetLinkInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bitly_Links_GetLinkInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLinkInfo execution.
     *
     * @return Bitly_Links_GetLinkInfo_Results New results object.
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
     * Wraps results in appopriate results class for this GetLinkInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bitly_Links_GetLinkInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bitly_Links_GetLinkInfo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetLinkInfo choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_GetLinkInfo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetLinkInfo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bitly_Links_GetLinkInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetLinkInfo execution.
     *
     * @return string (xml) The response from Bitly.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns metrics about the countries referring click traffic to a single bitly link.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetCountryMetricsForLink extends Temboo_Choreography
{
    /**
     * Returns metrics about the countries referring click traffic to a single bitly link.
     *
     * @param Temboo_Session $session The session that owns this GetCountryMetricsForLink choreography.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bitly/LinkMetrics/GetCountryMetricsForLink/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCountryMetricsForLink choreography.
     *
     * @param Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs|array $inputs (optional) Inputs as Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bitly_LinkMetrics_GetCountryMetricsForLink_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCountryMetricsForLink choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCountryMetricsForLink choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCountryMetricsForLink choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCountryMetricsForLink input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCountryMetricsForLink choreography.
     *
     * @param string $value (required, string) The oAuth access token provided by Bitly.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this GetCountryMetricsForLink choreography.
     *
     * @param int $value (optional, integer) The result limit. Defaults to 100. Range is 1 to 1000.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Link input for this GetCountryMetricsForLink choreography.
     *
     * @param string $value (required, string) A bitly link.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCountryMetricsForLink choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Accepted values are "json" or "xml". Defaults to "json".
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Rollup input for this GetCountryMetricsForLink choreography.
     *
     * @param bool $value (optional, boolean) Accepted values are true or false. When set to true, this returns data for multiple units rolled up to a single result instead of a separate value for each period of time.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs For method chaining.
     */
    public function setRollup($value)
    {
        return $this->set('Rollup', $value);
    }

    /**
     * Set the value for the Timestamp input for this GetCountryMetricsForLink choreography.
     *
     * @param string $value (optional, date) An epoch timestamp, indicating the most recent time for which to pull metrics.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs For method chaining.
     */
    public function setTimestamp($value)
    {
        return $this->set('Timestamp', $value);
    }

    /**
     * Set the value for the Timezone input for this GetCountryMetricsForLink choreography.
     *
     * @param string $value (optional, string) An integer hour offset from UTC (-12..12), or a timezone string. Defaults to "America/New_York".
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs For method chaining.
     */
    public function setTimezone($value)
    {
        return $this->set('Timezone', $value);
    }

    /**
     * Set the value for the UnitName input for this GetCountryMetricsForLink choreography.
     *
     * @param string $value (optional, string) The unit of time that corresponds to query you want to run. Accepted values are: minute, hour, day, week, month, and day. Defaults to "day".
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs For method chaining.
     */
    public function setUnitName($value)
    {
        return $this->set('UnitName', $value);
    }

    /**
     * Set the value for the UnitValue input for this GetCountryMetricsForLink choreography.
     *
     * @param int $value (optional, integer) An integer representing the amount of time to query for. Corresponds to the UnitName input. Defaults to -1 indicating to return all units of time.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs For method chaining.
     */
    public function setUnitValue($value)
    {
        return $this->set('UnitValue', $value);
    }
}


/**
 * Execution object for the GetCountryMetricsForLink choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetCountryMetricsForLink_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCountryMetricsForLink choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCountryMetricsForLink execution.
     * @param Bitly_LinkMetrics_GetCountryMetricsForLink $choreo The choregraphy object for this execution.
     * @param Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs|array $inputs (optional) Inputs as Bitly_LinkMetrics_GetCountryMetricsForLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bitly_LinkMetrics_GetCountryMetricsForLink $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCountryMetricsForLink execution.
     *
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Results New results object.
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
     * Wraps results in appopriate results class for this GetCountryMetricsForLink execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bitly_LinkMetrics_GetCountryMetricsForLink_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCountryMetricsForLink choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetCountryMetricsForLink_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCountryMetricsForLink choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bitly_LinkMetrics_GetCountryMetricsForLink_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCountryMetricsForLink execution.
     *
     * @return string (xml) The response from Bitly.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns metrics about the domains referring click traffic to a single bitly link.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetReferringDomains extends Temboo_Choreography
{
    /**
     * Returns metrics about the domains referring click traffic to a single bitly link.
     *
     * @param Temboo_Session $session The session that owns this GetReferringDomains choreography.
     * @return Bitly_LinkMetrics_GetReferringDomains New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bitly/LinkMetrics/GetReferringDomains/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetReferringDomains choreography.
     *
     * @param Bitly_LinkMetrics_GetReferringDomains_Inputs|array $inputs (optional) Inputs as Bitly_LinkMetrics_GetReferringDomains_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_LinkMetrics_GetReferringDomains_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bitly_LinkMetrics_GetReferringDomains_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReferringDomains choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bitly_LinkMetrics_GetReferringDomains_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReferringDomains choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetReferringDomains_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetReferringDomains choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReferringDomains input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetReferringDomains choreography.
     *
     * @param string $value (required, string) The oAuth access token provided by Bitly.
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this GetReferringDomains choreography.
     *
     * @param int $value (optional, integer) The result limit. Defaults to 100. Range is 1 to 1000.
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Link input for this GetReferringDomains choreography.
     *
     * @param string $value (required, string) A bitly link.
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetReferringDomains choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Accepted values are "json" or "xml". Defaults to "json".
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Rollup input for this GetReferringDomains choreography.
     *
     * @param bool $value (optional, boolean) Accepted values are true or false. When set to true, this returns data for multiple units rolled up to a single result instead of a separate value for each period of time.
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs For method chaining.
     */
    public function setRollup($value)
    {
        return $this->set('Rollup', $value);
    }

    /**
     * Set the value for the Timestamp input for this GetReferringDomains choreography.
     *
     * @param string $value (optional, date) An epoch timestamp, indicating the most recent time for which to pull metrics.
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs For method chaining.
     */
    public function setTimestamp($value)
    {
        return $this->set('Timestamp', $value);
    }

    /**
     * Set the value for the Timezone input for this GetReferringDomains choreography.
     *
     * @param string $value (optional, string) An integer hour offset from UTC (-12..12), or a timezone string. Defaults to "America/New_York".
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs For method chaining.
     */
    public function setTimezone($value)
    {
        return $this->set('Timezone', $value);
    }

    /**
     * Set the value for the UnitName input for this GetReferringDomains choreography.
     *
     * @param string $value (optional, string) The unit of time that corresponds to query you want to run. Accepted values are: minute, hour, day, week, month, and day. Defaults to "day".
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs For method chaining.
     */
    public function setUnitName($value)
    {
        return $this->set('UnitName', $value);
    }

    /**
     * Set the value for the UnitValue input for this GetReferringDomains choreography.
     *
     * @param int $value (optional, integer) An integer representing the amount of time to query for. Corresponds to the UnitName input. Defaults to -1 indicating to return all units of time.
     * @return Bitly_LinkMetrics_GetReferringDomains_Inputs For method chaining.
     */
    public function setUnitValue($value)
    {
        return $this->set('UnitValue', $value);
    }
}


/**
 * Execution object for the GetReferringDomains choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetReferringDomains_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReferringDomains choreography.
     *
     * @param Temboo_Session $session The session that owns this GetReferringDomains execution.
     * @param Bitly_LinkMetrics_GetReferringDomains $choreo The choregraphy object for this execution.
     * @param Bitly_LinkMetrics_GetReferringDomains_Inputs|array $inputs (optional) Inputs as Bitly_LinkMetrics_GetReferringDomains_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_LinkMetrics_GetReferringDomains_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bitly_LinkMetrics_GetReferringDomains $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReferringDomains execution.
     *
     * @return Bitly_LinkMetrics_GetReferringDomains_Results New results object.
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
     * Wraps results in appopriate results class for this GetReferringDomains execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bitly_LinkMetrics_GetReferringDomains_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bitly_LinkMetrics_GetReferringDomains_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetReferringDomains choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetReferringDomains_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetReferringDomains choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bitly_LinkMetrics_GetReferringDomains_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetReferringDomains execution.
     *
     * @return string (xml) The response from Bitly.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the count of users who have shortened a specified bitly link.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetEncodersCount extends Temboo_Choreography
{
    /**
     * Returns the count of users who have shortened a specified bitly link.
     *
     * @param Temboo_Session $session The session that owns this GetEncodersCount choreography.
     * @return Bitly_LinkMetrics_GetEncodersCount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bitly/LinkMetrics/GetEncodersCount/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetEncodersCount choreography.
     *
     * @param Bitly_LinkMetrics_GetEncodersCount_Inputs|array $inputs (optional) Inputs as Bitly_LinkMetrics_GetEncodersCount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_LinkMetrics_GetEncodersCount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bitly_LinkMetrics_GetEncodersCount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEncodersCount choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_LinkMetrics_GetEncodersCount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bitly_LinkMetrics_GetEncodersCount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEncodersCount choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetEncodersCount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetEncodersCount choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_LinkMetrics_GetEncodersCount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEncodersCount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bitly_LinkMetrics_GetEncodersCount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Bitly_LinkMetrics_GetEncodersCount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetEncodersCount choreography.
     *
     * @param string $value (required, string) The oAuth access token provided by Bitly.
     * @return Bitly_LinkMetrics_GetEncodersCount_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Link input for this GetEncodersCount choreography.
     *
     * @param string $value (required, string) A bitly link.
     * @return Bitly_LinkMetrics_GetEncodersCount_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetEncodersCount choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Accepted values are "json" or "xml". Defaults to "json".
     * @return Bitly_LinkMetrics_GetEncodersCount_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetEncodersCount choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetEncodersCount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEncodersCount choreography.
     *
     * @param Temboo_Session $session The session that owns this GetEncodersCount execution.
     * @param Bitly_LinkMetrics_GetEncodersCount $choreo The choregraphy object for this execution.
     * @param Bitly_LinkMetrics_GetEncodersCount_Inputs|array $inputs (optional) Inputs as Bitly_LinkMetrics_GetEncodersCount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_LinkMetrics_GetEncodersCount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bitly_LinkMetrics_GetEncodersCount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEncodersCount execution.
     *
     * @return Bitly_LinkMetrics_GetEncodersCount_Results New results object.
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
     * Wraps results in appopriate results class for this GetEncodersCount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bitly_LinkMetrics_GetEncodersCount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bitly_LinkMetrics_GetEncodersCount_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetEncodersCount choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetEncodersCount_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetEncodersCount choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bitly_LinkMetrics_GetEncodersCount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetEncodersCount execution.
     *
     * @return string (xml) The response from Bitly.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a shortened URL for a long URL that you provide.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_ShortenURL extends Temboo_Choreography
{
    /**
     * Returns a shortened URL for a long URL that you provide.
     *
     * @param Temboo_Session $session The session that owns this ShortenURL choreography.
     * @return Bitly_Links_ShortenURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bitly/Links/ShortenURL/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ShortenURL choreography.
     *
     * @param Bitly_Links_ShortenURL_Inputs|array $inputs (optional) Inputs as Bitly_Links_ShortenURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_Links_ShortenURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bitly_Links_ShortenURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShortenURL choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_Links_ShortenURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bitly_Links_ShortenURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShortenURL choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_ShortenURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ShortenURL choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_Links_ShortenURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShortenURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bitly_Links_ShortenURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Bitly_Links_ShortenURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ShortenURL choreography.
     *
     * @param string $value (required, string) The oAuth access token provided by Bitly.
     * @return Bitly_Links_ShortenURL_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the LongURL input for this ShortenURL choreography.
     *
     * @param string $value (required, string) The long url that you want to shorten.
     * @return Bitly_Links_ShortenURL_Inputs For method chaining.
     */
    public function setLongURL($value)
    {
        return $this->set('LongURL', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ShortenURL choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Defaults to simple "txt" format which will just return the shortened URL. "json" and "xml" are also supported.
     * @return Bitly_Links_ShortenURL_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ShortenURL choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_ShortenURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShortenURL choreography.
     *
     * @param Temboo_Session $session The session that owns this ShortenURL execution.
     * @param Bitly_Links_ShortenURL $choreo The choregraphy object for this execution.
     * @param Bitly_Links_ShortenURL_Inputs|array $inputs (optional) Inputs as Bitly_Links_ShortenURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_Links_ShortenURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bitly_Links_ShortenURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShortenURL execution.
     *
     * @return Bitly_Links_ShortenURL_Results New results object.
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
     * Wraps results in appopriate results class for this ShortenURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bitly_Links_ShortenURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bitly_Links_ShortenURL_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ShortenURL choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_ShortenURL_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ShortenURL choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bitly_Links_ShortenURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ShortenURL execution.
     *
     * @return string (xml) The response from Bitly.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the target (long) URL given a shortened bitly URL.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_ExpandURL extends Temboo_Choreography
{
    /**
     * Returns the target (long) URL given a shortened bitly URL.
     *
     * @param Temboo_Session $session The session that owns this ExpandURL choreography.
     * @return Bitly_Links_ExpandURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bitly/Links/ExpandURL/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ExpandURL choreography.
     *
     * @param Bitly_Links_ExpandURL_Inputs|array $inputs (optional) Inputs as Bitly_Links_ExpandURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_Links_ExpandURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bitly_Links_ExpandURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ExpandURL choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_Links_ExpandURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bitly_Links_ExpandURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ExpandURL choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_ExpandURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ExpandURL choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_Links_ExpandURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ExpandURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bitly_Links_ExpandURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Bitly_Links_ExpandURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ExpandURL choreography.
     *
     * @param string $value (required, string) The oAuth access token provided by Bitly.
     * @return Bitly_Links_ExpandURL_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ExpandURL choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Defaults to simple "txt" format which will just return the expanded URL. "json" and "xml" are also supported.
     * @return Bitly_Links_ExpandURL_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShortURL input for this ExpandURL choreography.
     *
     * @param string $value (required, string) One or more bitly links.
     * @return Bitly_Links_ExpandURL_Inputs For method chaining.
     */
    public function setShortURL($value)
    {
        return $this->set('ShortURL', $value);
    }
}


/**
 * Execution object for the ExpandURL choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_ExpandURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ExpandURL choreography.
     *
     * @param Temboo_Session $session The session that owns this ExpandURL execution.
     * @param Bitly_Links_ExpandURL $choreo The choregraphy object for this execution.
     * @param Bitly_Links_ExpandURL_Inputs|array $inputs (optional) Inputs as Bitly_Links_ExpandURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_Links_ExpandURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bitly_Links_ExpandURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ExpandURL execution.
     *
     * @return Bitly_Links_ExpandURL_Results New results object.
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
     * Wraps results in appopriate results class for this ExpandURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bitly_Links_ExpandURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bitly_Links_ExpandURL_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ExpandURL choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_Links_ExpandURL_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ExpandURL choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bitly_Links_ExpandURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ExpandURL execution.
     *
     * @return string (xml) The response from Bitly.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the number of clicks on a single bitly link.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetClicksForLink extends Temboo_Choreography
{
    /**
     * Returns the number of clicks on a single bitly link.
     *
     * @param Temboo_Session $session The session that owns this GetClicksForLink choreography.
     * @return Bitly_LinkMetrics_GetClicksForLink New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bitly/LinkMetrics/GetClicksForLink/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetClicksForLink choreography.
     *
     * @param Bitly_LinkMetrics_GetClicksForLink_Inputs|array $inputs (optional) Inputs as Bitly_LinkMetrics_GetClicksForLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_LinkMetrics_GetClicksForLink_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bitly_LinkMetrics_GetClicksForLink_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetClicksForLink choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bitly_LinkMetrics_GetClicksForLink_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetClicksForLink choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetClicksForLink_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetClicksForLink choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetClicksForLink input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetClicksForLink choreography.
     *
     * @param string $value (required, string) The oAuth access token provided by Bitly.
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this GetClicksForLink choreography.
     *
     * @param int $value (optional, integer) The result limit. Defaults to 100. Range is 1 to 1000.
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Link input for this GetClicksForLink choreography.
     *
     * @param string $value (required, string) A bitly link.
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetClicksForLink choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Accepted values are "json" or "xml". Defaults to "json".
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Rollup input for this GetClicksForLink choreography.
     *
     * @param bool $value (optional, boolean) Accepted values are true or false. When set to true, this returns data for multiple units rolled up to a single result instead of a separate value for each period of time.
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs For method chaining.
     */
    public function setRollup($value)
    {
        return $this->set('Rollup', $value);
    }

    /**
     * Set the value for the Timestamp input for this GetClicksForLink choreography.
     *
     * @param string $value (optional, date) An epoch timestamp, indicating the most recent time for which to pull metrics.
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs For method chaining.
     */
    public function setTimestamp($value)
    {
        return $this->set('Timestamp', $value);
    }

    /**
     * Set the value for the Timezone input for this GetClicksForLink choreography.
     *
     * @param string $value (optional, string) An integer hour offset from UTC (-12..12), or a timezone string. Defaults to "America/New_York".
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs For method chaining.
     */
    public function setTimezone($value)
    {
        return $this->set('Timezone', $value);
    }

    /**
     * Set the value for the UnitName input for this GetClicksForLink choreography.
     *
     * @param string $value (optional, string) The unit of time that corresponds to query you want to run. Accepted values are: minute, hour, day, week, month, and day. Defaults to "day".
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs For method chaining.
     */
    public function setUnitName($value)
    {
        return $this->set('UnitName', $value);
    }

    /**
     * Set the value for the UnitValue input for this GetClicksForLink choreography.
     *
     * @param int $value (optional, integer) An integer representing the amount of time to query for. Corresponds to the UnitName input. Defaults to -1 indicating to return all units of time.
     * @return Bitly_LinkMetrics_GetClicksForLink_Inputs For method chaining.
     */
    public function setUnitValue($value)
    {
        return $this->set('UnitValue', $value);
    }
}


/**
 * Execution object for the GetClicksForLink choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetClicksForLink_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetClicksForLink choreography.
     *
     * @param Temboo_Session $session The session that owns this GetClicksForLink execution.
     * @param Bitly_LinkMetrics_GetClicksForLink $choreo The choregraphy object for this execution.
     * @param Bitly_LinkMetrics_GetClicksForLink_Inputs|array $inputs (optional) Inputs as Bitly_LinkMetrics_GetClicksForLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_LinkMetrics_GetClicksForLink_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bitly_LinkMetrics_GetClicksForLink $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetClicksForLink execution.
     *
     * @return Bitly_LinkMetrics_GetClicksForLink_Results New results object.
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
     * Wraps results in appopriate results class for this GetClicksForLink execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bitly_LinkMetrics_GetClicksForLink_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bitly_LinkMetrics_GetClicksForLink_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetClicksForLink choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetClicksForLink_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetClicksForLink choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bitly_LinkMetrics_GetClicksForLink_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetClicksForLink execution.
     *
     * @return string (xml) The response from Bitly.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns entries from a user's link history in reverse chronological order.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_UserInfo_GetLinkHistory extends Temboo_Choreography
{
    /**
     * Returns entries from a user's link history in reverse chronological order.
     *
     * @param Temboo_Session $session The session that owns this GetLinkHistory choreography.
     * @return Bitly_UserInfo_GetLinkHistory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bitly/UserInfo/GetLinkHistory/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetLinkHistory choreography.
     *
     * @param Bitly_UserInfo_GetLinkHistory_Inputs|array $inputs (optional) Inputs as Bitly_UserInfo_GetLinkHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_UserInfo_GetLinkHistory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bitly_UserInfo_GetLinkHistory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLinkHistory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_UserInfo_GetLinkHistory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bitly_UserInfo_GetLinkHistory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLinkHistory choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_UserInfo_GetLinkHistory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetLinkHistory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_UserInfo_GetLinkHistory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLinkHistory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLinkHistory choreography.
     *
     * @param string $value (required, string) The oAuth access token provided by Bitly.
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Archived input for this GetLinkHistory choreography.
     *
     * @param string $value (optional, string) Accepted values are: on|off|both.  Whether to include or exclude archived history entries. (on = return only archived history entries). Defaults to "off".
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function setArchived($value)
    {
        return $this->set('Archived', $value);
    }

    /**
     * Set the value for the CreatedAfter input for this GetLinkHistory choreography.
     *
     * @param string $value (optional, date) An epoch timestamp representing a date to filter with.
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function setCreatedAfter($value)
    {
        return $this->set('CreatedAfter', $value);
    }

    /**
     * Set the value for the CreatedBefore input for this GetLinkHistory choreography.
     *
     * @param string $value (optional, date) An epoch timestamp representing a date to filter with.
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function setCreatedBefore($value)
    {
        return $this->set('CreatedBefore', $value);
    }

    /**
     * Set the value for the Limit input for this GetLinkHistory choreography.
     *
     * @param int $value (optional, integer) An integer in the range of 1 to 100, specifying the max number of results to return. Defaults to 50.
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Link input for this GetLinkHistory choreography.
     *
     * @param string $value (optional, string) The bitly link to return metadata for (when spcified, overrides all other options).
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the ModifiedAfter input for this GetLinkHistory choreography.
     *
     * @param string $value (optional, date) An epoch timestamp representing a date to filter with.
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function setModifiedAfter($value)
    {
        return $this->set('ModifiedAfter', $value);
    }

    /**
     * Set the value for the Offset input for this GetLinkHistory choreography.
     *
     * @param string $value (optional, string) An integer specifying the numbered result at which to start (used for pagination).
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Private input for this GetLinkHistory choreography.
     *
     * @param string $value (optional, string) Accepted values are: on|off|both.  Whether to include or exclude archived history entries. (on = return only archived history entries). Defaults to "both".
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function setPrivate($value)
    {
        return $this->set('Private', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLinkHistory choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Accepted values are "json" or "xml". Defaults to "json".
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the User input for this GetLinkHistory choreography.
     *
     * @param string $value (optional, string) The user for whom to retrieve history entries (if different from authenticated user).
     * @return Bitly_UserInfo_GetLinkHistory_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetLinkHistory choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_UserInfo_GetLinkHistory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLinkHistory choreography.
     *
     * @param Temboo_Session $session The session that owns this GetLinkHistory execution.
     * @param Bitly_UserInfo_GetLinkHistory $choreo The choregraphy object for this execution.
     * @param Bitly_UserInfo_GetLinkHistory_Inputs|array $inputs (optional) Inputs as Bitly_UserInfo_GetLinkHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_UserInfo_GetLinkHistory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bitly_UserInfo_GetLinkHistory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLinkHistory execution.
     *
     * @return Bitly_UserInfo_GetLinkHistory_Results New results object.
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
     * Wraps results in appopriate results class for this GetLinkHistory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bitly_UserInfo_GetLinkHistory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bitly_UserInfo_GetLinkHistory_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetLinkHistory choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_UserInfo_GetLinkHistory_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetLinkHistory choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bitly_UserInfo_GetLinkHistory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetLinkHistory execution.
     *
     * @return string (xml) The response from Bitly.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns metrics about the pages referring click traffic to a single bitly link.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetReferrers extends Temboo_Choreography
{
    /**
     * Returns metrics about the pages referring click traffic to a single bitly link.
     *
     * @param Temboo_Session $session The session that owns this GetReferrers choreography.
     * @return Bitly_LinkMetrics_GetReferrers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bitly/LinkMetrics/GetReferrers/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetReferrers choreography.
     *
     * @param Bitly_LinkMetrics_GetReferrers_Inputs|array $inputs (optional) Inputs as Bitly_LinkMetrics_GetReferrers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_LinkMetrics_GetReferrers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bitly_LinkMetrics_GetReferrers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReferrers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_LinkMetrics_GetReferrers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bitly_LinkMetrics_GetReferrers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReferrers choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetReferrers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetReferrers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_LinkMetrics_GetReferrers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReferrers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bitly_LinkMetrics_GetReferrers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Bitly_LinkMetrics_GetReferrers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetReferrers choreography.
     *
     * @param string $value (required, string) The oAuth access token provided by Bitly.
     * @return Bitly_LinkMetrics_GetReferrers_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this GetReferrers choreography.
     *
     * @param int $value (optional, integer) The result limit. Defaults to 100. Range is 1 to 1000.
     * @return Bitly_LinkMetrics_GetReferrers_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Link input for this GetReferrers choreography.
     *
     * @param string $value (required, string) A bitly link.
     * @return Bitly_LinkMetrics_GetReferrers_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetReferrers choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Accepted values are "json" or "xml". Defaults to "json".
     * @return Bitly_LinkMetrics_GetReferrers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Rollup input for this GetReferrers choreography.
     *
     * @param bool $value (optional, boolean) Accepted values are true or false. When set to true, this returns data for multiple units rolled up to a single result instead of a separate value for each period of time.
     * @return Bitly_LinkMetrics_GetReferrers_Inputs For method chaining.
     */
    public function setRollup($value)
    {
        return $this->set('Rollup', $value);
    }

    /**
     * Set the value for the Timestamp input for this GetReferrers choreography.
     *
     * @param string $value (optional, date) An epoch timestamp, indicating the most recent time for which to pull metrics.
     * @return Bitly_LinkMetrics_GetReferrers_Inputs For method chaining.
     */
    public function setTimestamp($value)
    {
        return $this->set('Timestamp', $value);
    }

    /**
     * Set the value for the Timezone input for this GetReferrers choreography.
     *
     * @param string $value (optional, string) An integer hour offset from UTC (-12..12), or a timezone string. Defaults to "America/New_York".
     * @return Bitly_LinkMetrics_GetReferrers_Inputs For method chaining.
     */
    public function setTimezone($value)
    {
        return $this->set('Timezone', $value);
    }

    /**
     * Set the value for the UnitName input for this GetReferrers choreography.
     *
     * @param string $value (optional, string) The unit of time that corresponds to query you want to run. Accepted values are: minute, hour, day, week, month, and day. Defaults to "day".
     * @return Bitly_LinkMetrics_GetReferrers_Inputs For method chaining.
     */
    public function setUnitName($value)
    {
        return $this->set('UnitName', $value);
    }

    /**
     * Set the value for the UnitValue input for this GetReferrers choreography.
     *
     * @param int $value (optional, integer) An integer representing the amount of time to query for. Corresponds to the UnitName input. Defaults to -1 indicating to return all units of time.
     * @return Bitly_LinkMetrics_GetReferrers_Inputs For method chaining.
     */
    public function setUnitValue($value)
    {
        return $this->set('UnitValue', $value);
    }
}


/**
 * Execution object for the GetReferrers choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetReferrers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReferrers choreography.
     *
     * @param Temboo_Session $session The session that owns this GetReferrers execution.
     * @param Bitly_LinkMetrics_GetReferrers $choreo The choregraphy object for this execution.
     * @param Bitly_LinkMetrics_GetReferrers_Inputs|array $inputs (optional) Inputs as Bitly_LinkMetrics_GetReferrers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_LinkMetrics_GetReferrers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bitly_LinkMetrics_GetReferrers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReferrers execution.
     *
     * @return Bitly_LinkMetrics_GetReferrers_Results New results object.
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
     * Wraps results in appopriate results class for this GetReferrers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bitly_LinkMetrics_GetReferrers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bitly_LinkMetrics_GetReferrers_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetReferrers choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_LinkMetrics_GetReferrers_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetReferrers choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bitly_LinkMetrics_GetReferrers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetReferrers execution.
     *
     * @return string (xml) The response from Bitly.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about a specified user.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_UserInfo_GetUserInfo extends Temboo_Choreography
{
    /**
     * Returns information about a specified user.
     *
     * @param Temboo_Session $session The session that owns this GetUserInfo choreography.
     * @return Bitly_UserInfo_GetUserInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bitly/UserInfo/GetUserInfo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetUserInfo choreography.
     *
     * @param Bitly_UserInfo_GetUserInfo_Inputs|array $inputs (optional) Inputs as Bitly_UserInfo_GetUserInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_UserInfo_GetUserInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bitly_UserInfo_GetUserInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUserInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_UserInfo_GetUserInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bitly_UserInfo_GetUserInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUserInfo choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_UserInfo_GetUserInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetUserInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bitly_UserInfo_GetUserInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUserInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bitly_UserInfo_GetUserInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Bitly_UserInfo_GetUserInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetUserInfo choreography.
     *
     * @param string $value (required, string) The oAuth access token provided by Bitly.
     * @return Bitly_UserInfo_GetUserInfo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the FullName input for this GetUserInfo choreography.
     *
     * @param string $value (optional, string) The users full name value (only available for the authenticated user).
     * @return Bitly_UserInfo_GetUserInfo_Inputs For method chaining.
     */
    public function setFullName($value)
    {
        return $this->set('FullName', $value);
    }

    /**
     * Set the value for the Login input for this GetUserInfo choreography.
     *
     * @param string $value (optional, string) The bitly login of the user whose info to look up. If not given, the authenticated user will be used.
     * @return Bitly_UserInfo_GetUserInfo_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetUserInfo choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Accepted values are "json" or "xml". Defaults to "json".
     * @return Bitly_UserInfo_GetUserInfo_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetUserInfo choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_UserInfo_GetUserInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUserInfo choreography.
     *
     * @param Temboo_Session $session The session that owns this GetUserInfo execution.
     * @param Bitly_UserInfo_GetUserInfo $choreo The choregraphy object for this execution.
     * @param Bitly_UserInfo_GetUserInfo_Inputs|array $inputs (optional) Inputs as Bitly_UserInfo_GetUserInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bitly_UserInfo_GetUserInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bitly_UserInfo_GetUserInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUserInfo execution.
     *
     * @return Bitly_UserInfo_GetUserInfo_Results New results object.
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
     * Wraps results in appopriate results class for this GetUserInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bitly_UserInfo_GetUserInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bitly_UserInfo_GetUserInfo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetUserInfo choreography.
 *
 * @package Temboo
 * @subpackage Bitly
 */
class Bitly_UserInfo_GetUserInfo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetUserInfo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bitly_UserInfo_GetUserInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetUserInfo execution.
     *
     * @return string (xml) The response from Bitly.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>