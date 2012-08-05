<?php

/**
 * Temboo PHP SDK LinkedIn classes
 *
 * Execute Choreographies from the Temboo LinkedIn bundle.
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
 * @subpackage LinkedIn
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Returns the standard default profile of the current user.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetMemberProfile extends Temboo_Choreography
{
    /**
     * Returns the standard default profile of the current user.
     *
     * @param Temboo_Session $session The session that owns this GetMemberProfile choreography.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/PeopleAndConnections/GetMemberProfile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetMemberProfile choreography.
     *
     * @param LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs|array $inputs (optional) Inputs as LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_PeopleAndConnections_GetMemberProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMemberProfile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMemberProfile choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetMemberProfile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMemberProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetMemberProfile choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetMemberProfile choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetMemberProfile choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetMemberProfile choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetMemberProfile choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetMemberProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMemberProfile choreography.
     *
     * @param Temboo_Session $session The session that owns this GetMemberProfile execution.
     * @param LinkedIn_PeopleAndConnections_GetMemberProfile $choreo The choregraphy object for this execution.
     * @param LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs|array $inputs (optional) Inputs as LinkedIn_PeopleAndConnections_GetMemberProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_PeopleAndConnections_GetMemberProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMemberProfile execution.
     *
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Results New results object.
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
     * Wraps results in appopriate results class for this GetMemberProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_PeopleAndConnections_GetMemberProfile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetMemberProfile choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetMemberProfile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetMemberProfile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_PeopleAndConnections_GetMemberProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetMemberProfile execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Bookmark a job listed on LinkedIn.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_BookmarkAJob extends Temboo_Choreography
{
    /**
     * Bookmark a job listed on LinkedIn.
     *
     * @param Temboo_Session $session The session that owns this BookmarkAJob choreography.
     * @return LinkedIn_Jobs_BookmarkAJob New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Jobs/BookmarkAJob/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this BookmarkAJob choreography.
     *
     * @param LinkedIn_Jobs_BookmarkAJob_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_BookmarkAJob_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_BookmarkAJob_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Jobs_BookmarkAJob_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this BookmarkAJob choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_BookmarkAJob_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Jobs_BookmarkAJob_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the BookmarkAJob choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_BookmarkAJob_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the BookmarkAJob choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_BookmarkAJob_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this BookmarkAJob input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Jobs_BookmarkAJob_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Jobs_BookmarkAJob_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this BookmarkAJob choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Jobs_BookmarkAJob_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this BookmarkAJob choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Jobs_BookmarkAJob_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this BookmarkAJob choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Jobs_BookmarkAJob_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the JobID input for this BookmarkAJob choreography.
     *
     * @param int $value (required, integer) Enter a LinkedIn job ID.
     * @return LinkedIn_Jobs_BookmarkAJob_Inputs For method chaining.
     */
    public function setJobID($value)
    {
        return $this->set('JobID', $value);
    }

    /**
     * Set the value for the SecretKey input for this BookmarkAJob choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Jobs_BookmarkAJob_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the BookmarkAJob choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_BookmarkAJob_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the BookmarkAJob choreography.
     *
     * @param Temboo_Session $session The session that owns this BookmarkAJob execution.
     * @param LinkedIn_Jobs_BookmarkAJob $choreo The choregraphy object for this execution.
     * @param LinkedIn_Jobs_BookmarkAJob_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_BookmarkAJob_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_BookmarkAJob_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Jobs_BookmarkAJob $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this BookmarkAJob execution.
     *
     * @return LinkedIn_Jobs_BookmarkAJob_Results New results object.
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
     * Wraps results in appopriate results class for this BookmarkAJob execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Jobs_BookmarkAJob_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Jobs_BookmarkAJob_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the BookmarkAJob choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_BookmarkAJob_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the BookmarkAJob choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Jobs_BookmarkAJob_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this BookmarkAJob execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of connections associated with the profile of the current user.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetUserConnections extends Temboo_Choreography
{
    /**
     * Returns a list of connections associated with the profile of the current user.
     *
     * @param Temboo_Session $session The session that owns this GetUserConnections choreography.
     * @return LinkedIn_PeopleAndConnections_GetUserConnections New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/PeopleAndConnections/GetUserConnections/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetUserConnections choreography.
     *
     * @param LinkedIn_PeopleAndConnections_GetUserConnections_Inputs|array $inputs (optional) Inputs as LinkedIn_PeopleAndConnections_GetUserConnections_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_PeopleAndConnections_GetUserConnections_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUserConnections choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_PeopleAndConnections_GetUserConnections_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUserConnections choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetUserConnections_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetUserConnections choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUserConnections input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetUserConnections choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetUserConnections choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetUserConnections choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetUserConnections choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetUserConnections choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetUserConnections_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUserConnections choreography.
     *
     * @param Temboo_Session $session The session that owns this GetUserConnections execution.
     * @param LinkedIn_PeopleAndConnections_GetUserConnections $choreo The choregraphy object for this execution.
     * @param LinkedIn_PeopleAndConnections_GetUserConnections_Inputs|array $inputs (optional) Inputs as LinkedIn_PeopleAndConnections_GetUserConnections_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_PeopleAndConnections_GetUserConnections $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUserConnections execution.
     *
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Results New results object.
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
     * Wraps results in appopriate results class for this GetUserConnections execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_PeopleAndConnections_GetUserConnections_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetUserConnections choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetUserConnections_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetUserConnections choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_PeopleAndConnections_GetUserConnections_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetUserConnections execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of suggested companies to be followed by this user.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_SuggestedCompaniesToFollow extends Temboo_Choreography
{
    /**
     * Returns a list of suggested companies to be followed by this user.
     *
     * @param Temboo_Session $session The session that owns this SuggestedCompaniesToFollow choreography.
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/SuggestedCompaniesToFollow/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SuggestedCompaniesToFollow choreography.
     *
     * @param LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_SuggestedCompaniesToFollow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SuggestedCompaniesToFollow choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SuggestedCompaniesToFollow choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SuggestedCompaniesToFollow choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SuggestedCompaniesToFollow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SuggestedCompaniesToFollow choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SuggestedCompaniesToFollow choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SuggestedCompaniesToFollow choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the SecretKey input for this SuggestedCompaniesToFollow choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the SuggestedCompaniesToFollow choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_SuggestedCompaniesToFollow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SuggestedCompaniesToFollow choreography.
     *
     * @param Temboo_Session $session The session that owns this SuggestedCompaniesToFollow execution.
     * @param LinkedIn_Companies_SuggestedCompaniesToFollow $choreo The choregraphy object for this execution.
     * @param LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_SuggestedCompaniesToFollow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_SuggestedCompaniesToFollow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SuggestedCompaniesToFollow execution.
     *
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Results New results object.
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
     * Wraps results in appopriate results class for this SuggestedCompaniesToFollow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_SuggestedCompaniesToFollow_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SuggestedCompaniesToFollow choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_SuggestedCompaniesToFollow_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SuggestedCompaniesToFollow choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_SuggestedCompaniesToFollow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SuggestedCompaniesToFollow execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a listed LinkedIn job.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_GetJobs extends Temboo_Choreography
{
    /**
     * Retrieve a listed LinkedIn job.
     *
     * @param Temboo_Session $session The session that owns this GetJobs choreography.
     * @return LinkedIn_Jobs_GetJobs New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Jobs/GetJobs/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetJobs choreography.
     *
     * @param LinkedIn_Jobs_GetJobs_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_GetJobs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_GetJobs_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Jobs_GetJobs_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetJobs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_GetJobs_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Jobs_GetJobs_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetJobs choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_GetJobs_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetJobs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_GetJobs_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetJobs input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Jobs_GetJobs_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Jobs_GetJobs_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetJobs choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Jobs_GetJobs_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetJobs choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Jobs_GetJobs_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetJobs choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Jobs_GetJobs_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the JobID input for this GetJobs choreography.
     *
     * @param int $value (required, integer) A LinkedIn assigned job ID.
     * @return LinkedIn_Jobs_GetJobs_Inputs For method chaining.
     */
    public function setJobID($value)
    {
        return $this->set('JobID', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetJobs choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Jobs_GetJobs_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetJobs choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_GetJobs_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetJobs choreography.
     *
     * @param Temboo_Session $session The session that owns this GetJobs execution.
     * @param LinkedIn_Jobs_GetJobs $choreo The choregraphy object for this execution.
     * @param LinkedIn_Jobs_GetJobs_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_GetJobs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_GetJobs_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Jobs_GetJobs $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetJobs execution.
     *
     * @return LinkedIn_Jobs_GetJobs_Results New results object.
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
     * Wraps results in appopriate results class for this GetJobs execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Jobs_GetJobs_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Jobs_GetJobs_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetJobs choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_GetJobs_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetJobs choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Jobs_GetJobs_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetJobs execution.
     *
     * @return string (xml) The response from Tumblr in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve jobs matching the specified keyword(s).
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_SearchJobsByKeywords extends Temboo_Choreography
{
    /**
     * Retrieve jobs matching the specified keyword(s).
     *
     * @param Temboo_Session $session The session that owns this SearchJobsByKeywords choreography.
     * @return LinkedIn_Jobs_SearchJobsByKeywords New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Jobs/SearchJobsByKeywords/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchJobsByKeywords choreography.
     *
     * @param LinkedIn_Jobs_SearchJobsByKeywords_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_SearchJobsByKeywords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Jobs_SearchJobsByKeywords_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchJobsByKeywords choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Jobs_SearchJobsByKeywords_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchJobsByKeywords choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_SearchJobsByKeywords_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchJobsByKeywords choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchJobsByKeywords input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchJobsByKeywords choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SearchJobsByKeywords choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SearchJobsByKeywords choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Count input for this SearchJobsByKeywords choreography.
     *
     * @param int $value (optional, integer) Specify the number of jobs to be returned.  Default is 10.  The maximum is 20.
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Keywords input for this SearchJobsByKeywords choreography.
     *
     * @param string $value (required, string) Limit search by specified keyword(s).
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Inputs For method chaining.
     */
    public function setKeywords($value)
    {
        return $this->set('Keywords', $value);
    }

    /**
     * Set the value for the SecretKey input for this SearchJobsByKeywords choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Sort input for this SearchJobsByKeywords choreography.
     *
     * @param string $value (optional, string) Specify the ordering of results. Enter R (for relationship from job to member); DA (dated posted in ascending order); DO (job posted in descending order).
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the SearchJobsByKeywords choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_SearchJobsByKeywords_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchJobsByKeywords choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchJobsByKeywords execution.
     * @param LinkedIn_Jobs_SearchJobsByKeywords $choreo The choregraphy object for this execution.
     * @param LinkedIn_Jobs_SearchJobsByKeywords_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_SearchJobsByKeywords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Jobs_SearchJobsByKeywords $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchJobsByKeywords execution.
     *
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Results New results object.
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
     * Wraps results in appopriate results class for this SearchJobsByKeywords execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Jobs_SearchJobsByKeywords_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchJobsByKeywords choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_SearchJobsByKeywords_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchJobsByKeywords choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Jobs_SearchJobsByKeywords_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchJobsByKeywords execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve jobs matching specified job title.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_SearchJobsByJobTitle extends Temboo_Choreography
{
    /**
     * Retrieve jobs matching specified job title.
     *
     * @param Temboo_Session $session The session that owns this SearchJobsByJobTitle choreography.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Jobs/SearchJobsByJobTitle/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchJobsByJobTitle choreography.
     *
     * @param LinkedIn_Jobs_SearchJobsByJobTitle_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_SearchJobsByJobTitle_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Jobs_SearchJobsByJobTitle_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchJobsByJobTitle choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Jobs_SearchJobsByJobTitle_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchJobsByJobTitle choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_SearchJobsByJobTitle_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchJobsByJobTitle choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchJobsByJobTitle input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchJobsByJobTitle choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SearchJobsByJobTitle choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SearchJobsByJobTitle choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Count input for this SearchJobsByJobTitle choreography.
     *
     * @param int $value (optional, integer) Specify the number of jobs to be returned.  Default is 10.  The maximum is 20.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the JobTitle input for this SearchJobsByJobTitle choreography.
     *
     * @param int $value (required, integer) Search by job title.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Inputs For method chaining.
     */
    public function setJobTitle($value)
    {
        return $this->set('JobTitle', $value);
    }

    /**
     * Set the value for the SecretKey input for this SearchJobsByJobTitle choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Sort input for this SearchJobsByJobTitle choreography.
     *
     * @param string $value (optional, string) Specify the ordering of results. Enter R (for relationship from job to member); DA (dated posted in ascending order); DO (job posted in descending order).
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the SearchJobsByJobTitle choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_SearchJobsByJobTitle_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchJobsByJobTitle choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchJobsByJobTitle execution.
     * @param LinkedIn_Jobs_SearchJobsByJobTitle $choreo The choregraphy object for this execution.
     * @param LinkedIn_Jobs_SearchJobsByJobTitle_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_SearchJobsByJobTitle_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Jobs_SearchJobsByJobTitle $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchJobsByJobTitle execution.
     *
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Results New results object.
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
     * Wraps results in appopriate results class for this SearchJobsByJobTitle execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Jobs_SearchJobsByJobTitle_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchJobsByJobTitle choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_SearchJobsByJobTitle_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchJobsByJobTitle choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Jobs_SearchJobsByJobTitle_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchJobsByJobTitle execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a company profile by ID.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByID extends Temboo_Choreography
{
    /**
     * Retrieve a company profile by ID.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyProfileByID choreography.
     * @return LinkedIn_Companies_GetCompanyProfileByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetCompanyProfileByID/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCompanyProfileByID choreography.
     *
     * @param LinkedIn_Companies_GetCompanyProfileByID_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyProfileByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetCompanyProfileByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyProfileByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetCompanyProfileByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyProfileByID choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCompanyProfileByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyProfileByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyProfileByID choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetCompanyProfileByID choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetCompanyProfileByID choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CompanyID input for this GetCompanyProfileByID choreography.
     *
     * @param int $value (required, integer) A LinkedIn assigned ID associated with the company that you want to retrieve.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setCompanyID($value)
    {
        return $this->set('CompanyID', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetCompanyProfileByID choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Companies_GetCompanyProfileByID_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetCompanyProfileByID choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyProfileByID choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyProfileByID execution.
     * @param LinkedIn_Companies_GetCompanyProfileByID $choreo The choregraphy object for this execution.
     * @param LinkedIn_Companies_GetCompanyProfileByID_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyProfileByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetCompanyProfileByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyProfileByID execution.
     *
     * @return LinkedIn_Companies_GetCompanyProfileByID_Results New results object.
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
     * Wraps results in appopriate results class for this GetCompanyProfileByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetCompanyProfileByID_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCompanyProfileByID choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByID_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCompanyProfileByID choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCompanyProfileByID execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a company profile by entering a company's universal-name.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByName extends Temboo_Choreography
{
    /**
     * Retrieve a company profile by entering a company's universal-name.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyProfileByName choreography.
     * @return LinkedIn_Companies_GetCompanyProfileByName New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetCompanyProfileByName/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCompanyProfileByName choreography.
     *
     * @param LinkedIn_Companies_GetCompanyProfileByName_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyProfileByName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyProfileByName_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetCompanyProfileByName_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyProfileByName choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByName_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetCompanyProfileByName_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyProfileByName choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByName_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCompanyProfileByName choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByName_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyProfileByName input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetCompanyProfileByName_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetCompanyProfileByName_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyProfileByName choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Companies_GetCompanyProfileByName_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetCompanyProfileByName choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Companies_GetCompanyProfileByName_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetCompanyProfileByName choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Companies_GetCompanyProfileByName_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CompanyName input for this GetCompanyProfileByName choreography.
     *
     * @param int $value (required, integer) The unique string identifier for a company.
     * @return LinkedIn_Companies_GetCompanyProfileByName_Inputs For method chaining.
     */
    public function setCompanyName($value)
    {
        return $this->set('CompanyName', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetCompanyProfileByName choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Companies_GetCompanyProfileByName_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetCompanyProfileByName choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByName_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyProfileByName choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyProfileByName execution.
     * @param LinkedIn_Companies_GetCompanyProfileByName $choreo The choregraphy object for this execution.
     * @param LinkedIn_Companies_GetCompanyProfileByName_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyProfileByName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyProfileByName_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetCompanyProfileByName $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyProfileByName execution.
     *
     * @return LinkedIn_Companies_GetCompanyProfileByName_Results New results object.
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
     * Wraps results in appopriate results class for this GetCompanyProfileByName execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByName_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetCompanyProfileByName_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCompanyProfileByName choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByName_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCompanyProfileByName choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByName_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCompanyProfileByName execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve all connections linked to a  member ID.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetConnectionsByMemberID extends Temboo_Choreography
{
    /**
     * Retrieve all connections linked to a  member ID.
     *
     * @param Temboo_Session $session The session that owns this GetConnectionsByMemberID choreography.
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/PeopleAndConnections/GetConnectionsByMemberID/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetConnectionsByMemberID choreography.
     *
     * @param LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs|array $inputs (optional) Inputs as LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetConnectionsByMemberID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetConnectionsByMemberID choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetConnectionsByMemberID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetConnectionsByMemberID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetConnectionsByMemberID choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetConnectionsByMemberID choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetConnectionsByMemberID choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MemberID input for this GetConnectionsByMemberID choreography.
     *
     * @param int $value (required, integer) Enter a LinkedIn Member ID.
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs For method chaining.
     */
    public function setMemberID($value)
    {
        return $this->set('MemberID', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetConnectionsByMemberID choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetConnectionsByMemberID choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetConnectionsByMemberID choreography.
     *
     * @param Temboo_Session $session The session that owns this GetConnectionsByMemberID execution.
     * @param LinkedIn_PeopleAndConnections_GetConnectionsByMemberID $choreo The choregraphy object for this execution.
     * @param LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs|array $inputs (optional) Inputs as LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_PeopleAndConnections_GetConnectionsByMemberID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetConnectionsByMemberID execution.
     *
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Results New results object.
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
     * Wraps results in appopriate results class for this GetConnectionsByMemberID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetConnectionsByMemberID choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetConnectionsByMemberID choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_PeopleAndConnections_GetConnectionsByMemberID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetConnectionsByMemberID execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of bookmarked jobs for the current user.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_GetBookmarkedJobs extends Temboo_Choreography
{
    /**
     * Retrieve a list of bookmarked jobs for the current user.
     *
     * @param Temboo_Session $session The session that owns this GetBookmarkedJobs choreography.
     * @return LinkedIn_Jobs_GetBookmarkedJobs New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Jobs/GetBookmarkedJobs/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBookmarkedJobs choreography.
     *
     * @param LinkedIn_Jobs_GetBookmarkedJobs_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_GetBookmarkedJobs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Jobs_GetBookmarkedJobs_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBookmarkedJobs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Jobs_GetBookmarkedJobs_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBookmarkedJobs choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_GetBookmarkedJobs_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBookmarkedJobs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBookmarkedJobs input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetBookmarkedJobs choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetBookmarkedJobs choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetBookmarkedJobs choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetBookmarkedJobs choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetBookmarkedJobs choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_GetBookmarkedJobs_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBookmarkedJobs choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBookmarkedJobs execution.
     * @param LinkedIn_Jobs_GetBookmarkedJobs $choreo The choregraphy object for this execution.
     * @param LinkedIn_Jobs_GetBookmarkedJobs_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_GetBookmarkedJobs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Jobs_GetBookmarkedJobs $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBookmarkedJobs execution.
     *
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Results New results object.
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
     * Wraps results in appopriate results class for this GetBookmarkedJobs execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Jobs_GetBookmarkedJobs_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBookmarkedJobs choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_GetBookmarkedJobs_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBookmarkedJobs choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Jobs_GetBookmarkedJobs_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBookmarkedJobs execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete a job bookmark by specifying a job ID.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_DeleteJobBookmark extends Temboo_Choreography
{
    /**
     * Delete a job bookmark by specifying a job ID.
     *
     * @param Temboo_Session $session The session that owns this DeleteJobBookmark choreography.
     * @return LinkedIn_Jobs_DeleteJobBookmark New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Jobs/DeleteJobBookmark/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteJobBookmark choreography.
     *
     * @param LinkedIn_Jobs_DeleteJobBookmark_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_DeleteJobBookmark_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_DeleteJobBookmark_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Jobs_DeleteJobBookmark_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteJobBookmark choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_DeleteJobBookmark_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Jobs_DeleteJobBookmark_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteJobBookmark choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_DeleteJobBookmark_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteJobBookmark choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_DeleteJobBookmark_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteJobBookmark input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Jobs_DeleteJobBookmark_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Jobs_DeleteJobBookmark_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteJobBookmark choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Jobs_DeleteJobBookmark_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteJobBookmark choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Jobs_DeleteJobBookmark_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteJobBookmark choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Jobs_DeleteJobBookmark_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the JobID input for this DeleteJobBookmark choreography.
     *
     * @param int $value (required, integer) Enter a LinkedIn job ID.
     * @return LinkedIn_Jobs_DeleteJobBookmark_Inputs For method chaining.
     */
    public function setJobID($value)
    {
        return $this->set('JobID', $value);
    }

    /**
     * Set the value for the SecretKey input for this DeleteJobBookmark choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Jobs_DeleteJobBookmark_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the DeleteJobBookmark choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_DeleteJobBookmark_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteJobBookmark choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteJobBookmark execution.
     * @param LinkedIn_Jobs_DeleteJobBookmark $choreo The choregraphy object for this execution.
     * @param LinkedIn_Jobs_DeleteJobBookmark_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_DeleteJobBookmark_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_DeleteJobBookmark_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Jobs_DeleteJobBookmark $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteJobBookmark execution.
     *
     * @return LinkedIn_Jobs_DeleteJobBookmark_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteJobBookmark execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Jobs_DeleteJobBookmark_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Jobs_DeleteJobBookmark_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteJobBookmark choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_DeleteJobBookmark_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteJobBookmark choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Jobs_DeleteJobBookmark_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteJobBookmark execution.
     *
     * @return string (xml) Stores the response from LinkedIn. Note that for a successful delete operation, no content is a returned and this output variable should be empty.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a company profile by email domain.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByEmailDomain extends Temboo_Choreography
{
    /**
     * Retrieve a company profile by email domain.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyProfileByEmailDomain choreography.
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetCompanyProfileByEmailDomain/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCompanyProfileByEmailDomain choreography.
     *
     * @param LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetCompanyProfileByEmailDomain_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyProfileByEmailDomain choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyProfileByEmailDomain choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCompanyProfileByEmailDomain choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyProfileByEmailDomain input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyProfileByEmailDomain choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetCompanyProfileByEmailDomain choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetCompanyProfileByEmailDomain choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EmailDomain input for this GetCompanyProfileByEmailDomain choreography.
     *
     * @param string $value (required, string) An email domain used to search for a company (i.e. apple.com).
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs For method chaining.
     */
    public function setEmailDomain($value)
    {
        return $this->set('EmailDomain', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetCompanyProfileByEmailDomain choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetCompanyProfileByEmailDomain choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByEmailDomain_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyProfileByEmailDomain choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyProfileByEmailDomain execution.
     * @param LinkedIn_Companies_GetCompanyProfileByEmailDomain $choreo The choregraphy object for this execution.
     * @param LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyProfileByEmailDomain_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetCompanyProfileByEmailDomain $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyProfileByEmailDomain execution.
     *
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Results New results object.
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
     * Wraps results in appopriate results class for this GetCompanyProfileByEmailDomain execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetCompanyProfileByEmailDomain_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCompanyProfileByEmailDomain choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfileByEmailDomain_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCompanyProfileByEmailDomain choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyProfileByEmailDomain_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCompanyProfileByEmailDomain execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a list of job suggestions for the current user.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_GetSuggestedJobs extends Temboo_Choreography
{
    /**
     * Get a list of job suggestions for the current user.
     *
     * @param Temboo_Session $session The session that owns this GetSuggestedJobs choreography.
     * @return LinkedIn_Jobs_GetSuggestedJobs New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Jobs/GetSuggestedJobs/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetSuggestedJobs choreography.
     *
     * @param LinkedIn_Jobs_GetSuggestedJobs_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_GetSuggestedJobs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_GetSuggestedJobs_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Jobs_GetSuggestedJobs_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSuggestedJobs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_GetSuggestedJobs_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Jobs_GetSuggestedJobs_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSuggestedJobs choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_GetSuggestedJobs_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetSuggestedJobs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_GetSuggestedJobs_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSuggestedJobs input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Jobs_GetSuggestedJobs_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Jobs_GetSuggestedJobs_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetSuggestedJobs choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Jobs_GetSuggestedJobs_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetSuggestedJobs choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Jobs_GetSuggestedJobs_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetSuggestedJobs choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Jobs_GetSuggestedJobs_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetSuggestedJobs choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Jobs_GetSuggestedJobs_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetSuggestedJobs choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_GetSuggestedJobs_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSuggestedJobs choreography.
     *
     * @param Temboo_Session $session The session that owns this GetSuggestedJobs execution.
     * @param LinkedIn_Jobs_GetSuggestedJobs $choreo The choregraphy object for this execution.
     * @param LinkedIn_Jobs_GetSuggestedJobs_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_GetSuggestedJobs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_GetSuggestedJobs_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Jobs_GetSuggestedJobs $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSuggestedJobs execution.
     *
     * @return LinkedIn_Jobs_GetSuggestedJobs_Results New results object.
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
     * Wraps results in appopriate results class for this GetSuggestedJobs execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Jobs_GetSuggestedJobs_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Jobs_GetSuggestedJobs_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetSuggestedJobs choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_GetSuggestedJobs_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetSuggestedJobs choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Jobs_GetSuggestedJobs_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetSuggestedJobs execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve multiple company profiles using a given list of company IDs or names.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfiles extends Temboo_Choreography
{
    /**
     * Retrieve multiple company profiles using a given list of company IDs or names.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyProfiles choreography.
     * @return LinkedIn_Companies_GetCompanyProfiles New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/GetCompanyProfiles/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCompanyProfiles choreography.
     *
     * @param LinkedIn_Companies_GetCompanyProfiles_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyProfiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyProfiles_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_GetCompanyProfiles_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyProfiles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyProfiles_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_GetCompanyProfiles_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyProfiles choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfiles_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCompanyProfiles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_GetCompanyProfiles_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyProfiles input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_GetCompanyProfiles_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_GetCompanyProfiles_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyProfiles choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Companies_GetCompanyProfiles_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetCompanyProfiles choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Companies_GetCompanyProfiles_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetCompanyProfiles choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Companies_GetCompanyProfiles_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Companies input for this GetCompanyProfiles choreography.
     *
     * @param string $value (required, string) A comma separated list of company IDs or universal-name key/value pairs. IDs and names can be mixed also. For example: 812686,universal-name=linkedin,universal-name=apple.
     * @return LinkedIn_Companies_GetCompanyProfiles_Inputs For method chaining.
     */
    public function setCompanies($value)
    {
        return $this->set('Companies', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetCompanyProfiles choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Companies_GetCompanyProfiles_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetCompanyProfiles choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfiles_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyProfiles choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyProfiles execution.
     * @param LinkedIn_Companies_GetCompanyProfiles $choreo The choregraphy object for this execution.
     * @param LinkedIn_Companies_GetCompanyProfiles_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_GetCompanyProfiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_GetCompanyProfiles_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_GetCompanyProfiles $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyProfiles execution.
     *
     * @return LinkedIn_Companies_GetCompanyProfiles_Results New results object.
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
     * Wraps results in appopriate results class for this GetCompanyProfiles execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyProfiles_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_GetCompanyProfiles_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCompanyProfiles choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_GetCompanyProfiles_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCompanyProfiles choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_GetCompanyProfiles_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCompanyProfiles execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of companies followed by the current user.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_CompaniesFollowed extends Temboo_Choreography
{
    /**
     * Returns a list of companies followed by the current user.
     *
     * @param Temboo_Session $session The session that owns this CompaniesFollowed choreography.
     * @return LinkedIn_Companies_CompaniesFollowed New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Companies/CompaniesFollowed/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CompaniesFollowed choreography.
     *
     * @param LinkedIn_Companies_CompaniesFollowed_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_CompaniesFollowed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_CompaniesFollowed_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Companies_CompaniesFollowed_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompaniesFollowed choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_CompaniesFollowed_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Companies_CompaniesFollowed_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompaniesFollowed choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_CompaniesFollowed_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CompaniesFollowed choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Companies_CompaniesFollowed_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompaniesFollowed input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Companies_CompaniesFollowed_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Companies_CompaniesFollowed_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CompaniesFollowed choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Companies_CompaniesFollowed_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CompaniesFollowed choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Companies_CompaniesFollowed_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CompaniesFollowed choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Companies_CompaniesFollowed_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the SecretKey input for this CompaniesFollowed choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Companies_CompaniesFollowed_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the CompaniesFollowed choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_CompaniesFollowed_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompaniesFollowed choreography.
     *
     * @param Temboo_Session $session The session that owns this CompaniesFollowed execution.
     * @param LinkedIn_Companies_CompaniesFollowed $choreo The choregraphy object for this execution.
     * @param LinkedIn_Companies_CompaniesFollowed_Inputs|array $inputs (optional) Inputs as LinkedIn_Companies_CompaniesFollowed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Companies_CompaniesFollowed_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Companies_CompaniesFollowed $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompaniesFollowed execution.
     *
     * @return LinkedIn_Companies_CompaniesFollowed_Results New results object.
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
     * Wraps results in appopriate results class for this CompaniesFollowed execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Companies_CompaniesFollowed_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Companies_CompaniesFollowed_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CompaniesFollowed choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Companies_CompaniesFollowed_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CompaniesFollowed choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Companies_CompaniesFollowed_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CompaniesFollowed execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve jobs filtered by zipcode (postal code) and country code.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode extends Temboo_Choreography
{
    /**
     * Retrieve jobs filtered by zipcode (postal code) and country code.
     *
     * @param Temboo_Session $session The session that owns this SearchJobsByZipcodeAndCountryCode choreography.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LinkedIn/Jobs/SearchJobsByZipcodeAndCountryCode/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchJobsByZipcodeAndCountryCode choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchJobsByZipcodeAndCountryCode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param string $value (required, string) The API Key provided by LinkedIn (AKA the OAuth Consumer Key).
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Count input for this SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param int $value (optional, integer) Specify the number of jobs to be returned.  Default is 10.  The maximum is 20.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the CountryCode input for this SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param string $value (optional, string) Enter an ISO 3166 country code.  Default is set to U.S. (US).
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the PostalCode input for this SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param int $value (required, integer) Enter a postal (zip) code.  Don't forget to also set the CountryCode variable.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the SecretKey input for this SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param string $value (required, string) The Secret Key provided by LinkedIn (AKA the OAuth Consumer Secret).
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Sort input for this SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param string $value (optional, string) Specify the ordering of results. Enter R (for relationship from job to member); DA (dated posted in ascending order); DO (job posted in descending order).
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the SearchJobsByZipcodeAndCountryCode choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchJobsByZipcodeAndCountryCode execution.
     * @param LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode $choreo The choregraphy object for this execution.
     * @param LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs|array $inputs (optional) Inputs as LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchJobsByZipcodeAndCountryCode execution.
     *
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Results New results object.
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
     * Wraps results in appopriate results class for this SearchJobsByZipcodeAndCountryCode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchJobsByZipcodeAndCountryCode choreography.
 *
 * @package Temboo
 * @subpackage LinkedIn
 */
class LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchJobsByZipcodeAndCountryCode choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LinkedIn_Jobs_SearchJobsByZipcodeAndCountryCode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchJobsByZipcodeAndCountryCode execution.
     *
     * @return string (xml) The response from LinkedIn in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>