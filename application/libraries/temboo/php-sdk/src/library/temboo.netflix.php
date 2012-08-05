<?php

/**
 * Temboo PHP SDK Netflix classes
 *
 * Execute Choreographies from the Temboo Netflix bundle.
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
 * @subpackage Netflix
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieves the contents of a subscriber's instant-watch queue.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetInstantQueue extends Temboo_Choreography
{
    /**
     * Retrieves the contents of a subscriber's instant-watch queue.
     *
     * @param Temboo_Session $session The session that owns this GetInstantQueue choreography.
     * @return Netflix_GetInstantQueue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/GetInstantQueue/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetInstantQueue choreography.
     *
     * @param Netflix_GetInstantQueue_Inputs|array $inputs (optional) Inputs as Netflix_GetInstantQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetInstantQueue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_GetInstantQueue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetInstantQueue choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetInstantQueue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_GetInstantQueue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetInstantQueue choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetInstantQueue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetInstantQueue choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetInstantQueue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetInstantQueue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetInstantQueue choreography.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetInstantQueue choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetInstantQueue choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this GetInstantQueue choreography.
     *
     * @param int $value (optional, integer) Set this to the maximum number of results to return. This number cannot be greater than 500. If you do not specify max_results, the default value is 25
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the SharedSecret input for this GetInstantQueue choreography.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the Sort input for this GetInstantQueue choreography.
     *
     * @param string $value (optional, string) Use this to specify the sort order for the queue entries. Sort order may be by queue_sequence, date_added, or alphabetical. The default sort order, if you do not specify one, is queue_sequence.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the StartIndex input for this GetInstantQueue choreography.
     *
     * @param int $value (optional, integer) The offset number of the results from the query.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the UpdatedMin input for this GetInstantQueue choreography.
     *
     * @param string $value (optional, date) If set, the response will include only those items with updated timestamps greater than or equal to the timestamp provided. Specify this value either in Unix time format (seconds since epoch).
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setUpdatedMin($value)
    {
        return $this->set('UpdatedMin', $value);
    }

    /**
     * Set the value for the UserID input for this GetInstantQueue choreography.
     *
     * @param string $value (required, string) The ID associated with the user whose queue information you want to retrieve.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetInstantQueue choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetInstantQueue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetInstantQueue choreography.
     *
     * @param Temboo_Session $session The session that owns this GetInstantQueue execution.
     * @param Netflix_GetInstantQueue $choreo The choregraphy object for this execution.
     * @param Netflix_GetInstantQueue_Inputs|array $inputs (optional) Inputs as Netflix_GetInstantQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetInstantQueue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_GetInstantQueue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetInstantQueue execution.
     *
     * @return Netflix_GetInstantQueue_Results New results object.
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
     * Wraps results in appopriate results class for this GetInstantQueue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Netflix_GetInstantQueue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_GetInstantQueue_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetInstantQueue choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetInstantQueue_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetInstantQueue choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_GetInstantQueue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetInstantQueue execution.
     *
     * @return string (xml) The response from Netflix.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of a subscriber's queues.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetQueues extends Temboo_Choreography
{
    /**
     * Retrieves a list of a subscriber's queues.
     *
     * @param Temboo_Session $session The session that owns this GetQueues choreography.
     * @return Netflix_GetQueues New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/GetQueues/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetQueues choreography.
     *
     * @param Netflix_GetQueues_Inputs|array $inputs (optional) Inputs as Netflix_GetQueues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetQueues_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_GetQueues_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetQueues choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetQueues_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_GetQueues_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetQueues choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetQueues_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetQueues choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetQueues_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetQueues input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetQueues choreography.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetQueues choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetQueues choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this GetQueues choreography.
     *
     * @param int $value (optional, integer) Set this to the maximum number of results to return. This number cannot be greater than 500. If you do not specify max_results, the default value is 25
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the SharedSecret input for this GetQueues choreography.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the Sort input for this GetQueues choreography.
     *
     * @param string $value (optional, string) Use this to specify the sort order for the queue entries. Sort order may be by queue_sequence, date_added, or alphabetical. The default sort order, if you do not specify one, is queue_sequence.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the StartIndex input for this GetQueues choreography.
     *
     * @param int $value (optional, integer) The offset number of the results from the query.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the UpdatedMin input for this GetQueues choreography.
     *
     * @param string $value (optional, date) If set, the response will include only those items with updated timestamps greater than or equal to the timestamp provided. Specify this value either in Unix time format (seconds since epoch).
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setUpdatedMin($value)
    {
        return $this->set('UpdatedMin', $value);
    }

    /**
     * Set the value for the UserID input for this GetQueues choreography.
     *
     * @param string $value (required, string) The ID associated with the user whose queue information you want to retrieve.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetQueues choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetQueues_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetQueues choreography.
     *
     * @param Temboo_Session $session The session that owns this GetQueues execution.
     * @param Netflix_GetQueues $choreo The choregraphy object for this execution.
     * @param Netflix_GetQueues_Inputs|array $inputs (optional) Inputs as Netflix_GetQueues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetQueues_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_GetQueues $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetQueues execution.
     *
     * @return Netflix_GetQueues_Results New results object.
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
     * Wraps results in appopriate results class for this GetQueues execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Netflix_GetQueues_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_GetQueues_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetQueues choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetQueues_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetQueues choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_GetQueues_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetQueues execution.
     *
     * @return string (xml) The response from Netflix.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for a title in the instant-watch title catalog.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_SearchTitleCatalog extends Temboo_Choreography
{
    /**
     * Searches for a title in the instant-watch title catalog.
     *
     * @param Temboo_Session $session The session that owns this SearchTitleCatalog choreography.
     * @return Netflix_SearchTitleCatalog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/SearchTitleCatalog/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchTitleCatalog choreography.
     *
     * @param Netflix_SearchTitleCatalog_Inputs|array $inputs (optional) Inputs as Netflix_SearchTitleCatalog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_SearchTitleCatalog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_SearchTitleCatalog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchTitleCatalog choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_SearchTitleCatalog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_SearchTitleCatalog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchTitleCatalog choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_SearchTitleCatalog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchTitleCatalog choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_SearchTitleCatalog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchTitleCatalog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchTitleCatalog choreography.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SearchTitleCatalog choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SearchTitleCatalog choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this SearchTitleCatalog choreography.
     *
     * @param int $value (optional, integer) Set this to the maximum number of results to return. This number cannot be greater than 500. If you do not specify max_results, the default value is 25
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the SharedSecret input for this SearchTitleCatalog choreography.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the StartIndex input for this SearchTitleCatalog choreography.
     *
     * @param int $value (optional, integer) The offset number of the results from the query.
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the Term input for this SearchTitleCatalog choreography.
     *
     * @param string $value (required, string) Enter a word or phrase to search for in the instant-watch catalog. The Netflix API searches for matching titles and synopses in the catalog.
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setTerm($value)
    {
        return $this->set('Term', $value);
    }
}


/**
 * Execution object for the SearchTitleCatalog choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_SearchTitleCatalog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchTitleCatalog choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchTitleCatalog execution.
     * @param Netflix_SearchTitleCatalog $choreo The choregraphy object for this execution.
     * @param Netflix_SearchTitleCatalog_Inputs|array $inputs (optional) Inputs as Netflix_SearchTitleCatalog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_SearchTitleCatalog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_SearchTitleCatalog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchTitleCatalog execution.
     *
     * @return Netflix_SearchTitleCatalog_Results New results object.
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
     * Wraps results in appopriate results class for this SearchTitleCatalog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Netflix_SearchTitleCatalog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_SearchTitleCatalog_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchTitleCatalog choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_SearchTitleCatalog_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchTitleCatalog choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_SearchTitleCatalog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchTitleCatalog execution.
     *
     * @return string (xml) The response from Netflix.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a subscriber's viewing history.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRecentlyWatched extends Temboo_Choreography
{
    /**
     * Retrieves a subscriber's viewing history.
     *
     * @param Temboo_Session $session The session that owns this GetRecentlyWatched choreography.
     * @return Netflix_GetRecentlyWatched New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/GetRecentlyWatched/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRecentlyWatched choreography.
     *
     * @param Netflix_GetRecentlyWatched_Inputs|array $inputs (optional) Inputs as Netflix_GetRecentlyWatched_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetRecentlyWatched_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_GetRecentlyWatched_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentlyWatched choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetRecentlyWatched_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_GetRecentlyWatched_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentlyWatched choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRecentlyWatched_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRecentlyWatched choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetRecentlyWatched_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentlyWatched input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Netflix_GetRecentlyWatched_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Netflix_GetRecentlyWatched_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRecentlyWatched choreography.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_GetRecentlyWatched_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRecentlyWatched choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Netflix_GetRecentlyWatched_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRecentlyWatched choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Netflix_GetRecentlyWatched_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this GetRecentlyWatched choreography.
     *
     * @param int $value (optional, integer) Set this to the maximum number of results to return. This number cannot be greater than 500. If you do not specify max_results, the default value is 25
     * @return Netflix_GetRecentlyWatched_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the SharedSecret input for this GetRecentlyWatched choreography.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_GetRecentlyWatched_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the StartIndex input for this GetRecentlyWatched choreography.
     *
     * @param int $value (optional, integer) The offset number of the results from the query.
     * @return Netflix_GetRecentlyWatched_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the UpdatedMin input for this GetRecentlyWatched choreography.
     *
     * @param string $value (optional, date) If set, the response will include only those items with updated timestamps greater than or equal to the timestamp provided. Specify this value either in Unix time format (seconds since epoch).
     * @return Netflix_GetRecentlyWatched_Inputs For method chaining.
     */
    public function setUpdatedMin($value)
    {
        return $this->set('UpdatedMin', $value);
    }

    /**
     * Set the value for the UserID input for this GetRecentlyWatched choreography.
     *
     * @param string $value (required, string) The ID associated with the user whose recently watch movies you want to retrieve.
     * @return Netflix_GetRecentlyWatched_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetRecentlyWatched choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRecentlyWatched_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentlyWatched choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRecentlyWatched execution.
     * @param Netflix_GetRecentlyWatched $choreo The choregraphy object for this execution.
     * @param Netflix_GetRecentlyWatched_Inputs|array $inputs (optional) Inputs as Netflix_GetRecentlyWatched_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetRecentlyWatched_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_GetRecentlyWatched $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentlyWatched execution.
     *
     * @return Netflix_GetRecentlyWatched_Results New results object.
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
     * Wraps results in appopriate results class for this GetRecentlyWatched execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Netflix_GetRecentlyWatched_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_GetRecentlyWatched_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRecentlyWatched choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRecentlyWatched_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRecentlyWatched choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_GetRecentlyWatched_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRecentlyWatched execution.
     *
     * @return string (xml) The response from Netflix.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a subscriber's viewing history.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRentalHistory extends Temboo_Choreography
{
    /**
     * Retrieves a subscriber's viewing history.
     *
     * @param Temboo_Session $session The session that owns this GetRentalHistory choreography.
     * @return Netflix_GetRentalHistory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/GetRentalHistory/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRentalHistory choreography.
     *
     * @param Netflix_GetRentalHistory_Inputs|array $inputs (optional) Inputs as Netflix_GetRentalHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetRentalHistory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_GetRentalHistory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRentalHistory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetRentalHistory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_GetRentalHistory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRentalHistory choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRentalHistory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRentalHistory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetRentalHistory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRentalHistory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Netflix_GetRentalHistory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Netflix_GetRentalHistory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRentalHistory choreography.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_GetRentalHistory_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRentalHistory choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Netflix_GetRentalHistory_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRentalHistory choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Netflix_GetRentalHistory_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this GetRentalHistory choreography.
     *
     * @param int $value (optional, integer) Set this to the maximum number of results to return. This number cannot be greater than 500. If you do not specify max_results, the default value is 25
     * @return Netflix_GetRentalHistory_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the SharedSecret input for this GetRentalHistory choreography.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_GetRentalHistory_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the StartIndex input for this GetRentalHistory choreography.
     *
     * @param int $value (optional, integer) The offset number of the results from the query.
     * @return Netflix_GetRentalHistory_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the UpdatedMin input for this GetRentalHistory choreography.
     *
     * @param string $value (optional, date) If set, the response will include only those items with updated timestamps greater than or equal to the timestamp provided. Specify this value either in Unix time format (seconds since epoch).
     * @return Netflix_GetRentalHistory_Inputs For method chaining.
     */
    public function setUpdatedMin($value)
    {
        return $this->set('UpdatedMin', $value);
    }

    /**
     * Set the value for the UserID input for this GetRentalHistory choreography.
     *
     * @param string $value (required, string) The ID associated with the user whose rental history you want to retrieve.
     * @return Netflix_GetRentalHistory_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetRentalHistory choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRentalHistory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRentalHistory choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRentalHistory execution.
     * @param Netflix_GetRentalHistory $choreo The choregraphy object for this execution.
     * @param Netflix_GetRentalHistory_Inputs|array $inputs (optional) Inputs as Netflix_GetRentalHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetRentalHistory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_GetRentalHistory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRentalHistory execution.
     *
     * @return Netflix_GetRentalHistory_Results New results object.
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
     * Wraps results in appopriate results class for this GetRentalHistory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Netflix_GetRentalHistory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_GetRentalHistory_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRentalHistory choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRentalHistory_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRentalHistory choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_GetRentalHistory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRentalHistory execution.
     *
     * @return string (xml) The response from Netflix.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of catalog title recommendations for a subscriber.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRecommendations extends Temboo_Choreography
{
    /**
     * Retrieves a list of catalog title recommendations for a subscriber.
     *
     * @param Temboo_Session $session The session that owns this GetRecommendations choreography.
     * @return Netflix_GetRecommendations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/GetRecommendations/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRecommendations choreography.
     *
     * @param Netflix_GetRecommendations_Inputs|array $inputs (optional) Inputs as Netflix_GetRecommendations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetRecommendations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_GetRecommendations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecommendations choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetRecommendations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_GetRecommendations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecommendations choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRecommendations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRecommendations choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetRecommendations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecommendations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRecommendations choreography.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRecommendations choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRecommendations choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this GetRecommendations choreography.
     *
     * @param int $value (optional, integer) Set this to the maximum number of results to return. This number cannot be greater than 500. If you do not specify max_results, the default value is 25
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the SharedSecret input for this GetRecommendations choreography.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the StartIndex input for this GetRecommendations choreography.
     *
     * @param int $value (optional, integer) The offset number of the results from the query.
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the UserID input for this GetRecommendations choreography.
     *
     * @param string $value (required, string) The ID associated with the user whose recommendations you want to retrieve.
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetRecommendations choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRecommendations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecommendations choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRecommendations execution.
     * @param Netflix_GetRecommendations $choreo The choregraphy object for this execution.
     * @param Netflix_GetRecommendations_Inputs|array $inputs (optional) Inputs as Netflix_GetRecommendations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetRecommendations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_GetRecommendations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecommendations execution.
     *
     * @return Netflix_GetRecommendations_Results New results object.
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
     * Wraps results in appopriate results class for this GetRecommendations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Netflix_GetRecommendations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_GetRecommendations_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRecommendations choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRecommendations_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRecommendations choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_GetRecommendations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRecommendations execution.
     *
     * @return string (xml) The response from Netflix.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the contents of a subscriber's disc queue.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetDiscQueue extends Temboo_Choreography
{
    /**
     * Retrieves the contents of a subscriber's disc queue.
     *
     * @param Temboo_Session $session The session that owns this GetDiscQueue choreography.
     * @return Netflix_GetDiscQueue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/GetDiscQueue/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetDiscQueue choreography.
     *
     * @param Netflix_GetDiscQueue_Inputs|array $inputs (optional) Inputs as Netflix_GetDiscQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetDiscQueue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_GetDiscQueue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDiscQueue choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetDiscQueue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_GetDiscQueue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDiscQueue choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetDiscQueue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetDiscQueue choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetDiscQueue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDiscQueue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetDiscQueue choreography.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetDiscQueue choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetDiscQueue choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this GetDiscQueue choreography.
     *
     * @param int $value (optional, integer) Set this to the maximum number of results to return. This number cannot be greater than 500. If you do not specify max_results, the default value is 25
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the SharedSecret input for this GetDiscQueue choreography.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the Sort input for this GetDiscQueue choreography.
     *
     * @param string $value (optional, string) Use this to specify the sort order for the queue entries. Sort order may be by queue_sequence, date_added, or alphabetical. The default sort order, if you do not specify one, is queue_sequence.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the StartIndex input for this GetDiscQueue choreography.
     *
     * @param int $value (optional, integer) The offset number of the results from the query.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the UpdatedMin input for this GetDiscQueue choreography.
     *
     * @param string $value (optional, date) If set, the response will include only those items with updated timestamps greater than or equal to the timestamp provided. Specify this value either in Unix time format (seconds since epoch).
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setUpdatedMin($value)
    {
        return $this->set('UpdatedMin', $value);
    }

    /**
     * Set the value for the UserID input for this GetDiscQueue choreography.
     *
     * @param string $value (required, string) The ID associated with the user whose queue information you want to retrieve.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetDiscQueue choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetDiscQueue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDiscQueue choreography.
     *
     * @param Temboo_Session $session The session that owns this GetDiscQueue execution.
     * @param Netflix_GetDiscQueue $choreo The choregraphy object for this execution.
     * @param Netflix_GetDiscQueue_Inputs|array $inputs (optional) Inputs as Netflix_GetDiscQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetDiscQueue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_GetDiscQueue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDiscQueue execution.
     *
     * @return Netflix_GetDiscQueue_Results New results object.
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
     * Wraps results in appopriate results class for this GetDiscQueue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Netflix_GetDiscQueue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_GetDiscQueue_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetDiscQueue choreography.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetDiscQueue_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetDiscQueue choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_GetDiscQueue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetDiscQueue execution.
     *
     * @return string (xml) The response from Netflix.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>