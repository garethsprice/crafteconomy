<?php

/**
 * Temboo PHP SDK Klout classes
 *
 * Execute Choreographies from the Temboo Klout bundle.
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
 * @subpackage Klout
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieve up to five Klout score pairs for users that influence a specified user.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_InfluencedBy extends Temboo_Choreography
{
    /**
     * Retrieve up to five Klout score pairs for users that influence a specified user.
     *
     * @param Temboo_Session $session The session that owns this InfluencedBy choreography.
     * @return Klout_InfluencedBy New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/InfluencedBy/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this InfluencedBy choreography.
     *
     * @param Klout_InfluencedBy_Inputs|array $inputs (optional) Inputs as Klout_InfluencedBy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_InfluencedBy_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_InfluencedBy_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InfluencedBy choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_InfluencedBy_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_InfluencedBy_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InfluencedBy choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_InfluencedBy_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the InfluencedBy choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_InfluencedBy_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InfluencedBy input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_InfluencedBy_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Klout_InfluencedBy_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this InfluencedBy choreography.
     *
     * @param string $value (required, string) The API key provided by Klout.
     * @return Klout_InfluencedBy_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ReturnType input for this InfluencedBy choreography.
     *
     * @param string $value (optional, string) The desired format for the retrieved Klout score pairs: xml or json. Defaults to xml.
     * @return Klout_InfluencedBy_Inputs For method chaining.
     */
    public function setReturnType($value)
    {
        return $this->set('ReturnType', $value);
    }

    /**
     * Set the value for the Usernames input for this InfluencedBy choreography.
     *
     * @param string $value (required, string) A comma-delimited string of the Twitter usernames you want the influencers of.
     * @return Klout_InfluencedBy_Inputs For method chaining.
     */
    public function setUsernames($value)
    {
        return $this->set('Usernames', $value);
    }
}


/**
 * Execution object for the InfluencedBy choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_InfluencedBy_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InfluencedBy choreography.
     *
     * @param Temboo_Session $session The session that owns this InfluencedBy execution.
     * @param Klout_InfluencedBy $choreo The choregraphy object for this execution.
     * @param Klout_InfluencedBy_Inputs|array $inputs (optional) Inputs as Klout_InfluencedBy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_InfluencedBy_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_InfluencedBy $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InfluencedBy execution.
     *
     * @return Klout_InfluencedBy_Results New results object.
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
     * Wraps results in appopriate results class for this InfluencedBy execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_InfluencedBy_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_InfluencedBy_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the InfluencedBy choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_InfluencedBy_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the InfluencedBy choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_InfluencedBy_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this InfluencedBy execution.
     *
     * @return string (xml) The retrieved Klout scores for the specified users. The response format depends on what is specified in the ReturnType input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of the top three topics for Twitter users you specify.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_ListTopics extends Temboo_Choreography
{
    /**
     * Retrieves a list of the top three topics for Twitter users you specify.
     *
     * @param Temboo_Session $session The session that owns this ListTopics choreography.
     * @return Klout_ListTopics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/ListTopics/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListTopics choreography.
     *
     * @param Klout_ListTopics_Inputs|array $inputs (optional) Inputs as Klout_ListTopics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_ListTopics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_ListTopics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTopics choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_ListTopics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_ListTopics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTopics choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_ListTopics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListTopics choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_ListTopics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTopics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_ListTopics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Klout_ListTopics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListTopics choreography.
     *
     * @param string $value (required, string) The API key provided by Klout.
     * @return Klout_ListTopics_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ReturnType input for this ListTopics choreography.
     *
     * @param string $value (optional, string) The desired format for the retrieved topics: xml or json. Defaults to xml.
     * @return Klout_ListTopics_Inputs For method chaining.
     */
    public function setReturnType($value)
    {
        return $this->set('ReturnType', $value);
    }

    /**
     * Set the value for the Usernames input for this ListTopics choreography.
     *
     * @param string $value (required, string) A comma-delimited string of Twitter usernames whose topics you want to retrieve.
     * @return Klout_ListTopics_Inputs For method chaining.
     */
    public function setUsernames($value)
    {
        return $this->set('Usernames', $value);
    }
}


/**
 * Execution object for the ListTopics choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_ListTopics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTopics choreography.
     *
     * @param Temboo_Session $session The session that owns this ListTopics execution.
     * @param Klout_ListTopics $choreo The choregraphy object for this execution.
     * @param Klout_ListTopics_Inputs|array $inputs (optional) Inputs as Klout_ListTopics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_ListTopics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_ListTopics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTopics execution.
     *
     * @return Klout_ListTopics_Results New results object.
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
     * Wraps results in appopriate results class for this ListTopics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_ListTopics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_ListTopics_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListTopics choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_ListTopics_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListTopics choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_ListTopics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListTopics execution.
     *
     * @return string (xml) The retrieved Klout scores for the specified users. The response format depends on what is specified in the ReturnType input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve Klout scores for specified Twitter usernames.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_GetScore extends Temboo_Choreography
{
    /**
     * Retrieve Klout scores for specified Twitter usernames.
     *
     * @param Temboo_Session $session The session that owns this GetScore choreography.
     * @return Klout_GetScore New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/GetScore/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetScore choreography.
     *
     * @param Klout_GetScore_Inputs|array $inputs (optional) Inputs as Klout_GetScore_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_GetScore_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_GetScore_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetScore choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_GetScore_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_GetScore_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetScore choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_GetScore_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetScore choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_GetScore_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetScore input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_GetScore_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Klout_GetScore_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetScore choreography.
     *
     * @param string $value (required, string) The API key provided by Klout.
     * @return Klout_GetScore_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ReturnType input for this GetScore choreography.
     *
     * @param string $value (optional, string) The desired format for the returned Klout scores: xml or json. Defaults to xml.
     * @return Klout_GetScore_Inputs For method chaining.
     */
    public function setReturnType($value)
    {
        return $this->set('ReturnType', $value);
    }

    /**
     * Set the value for the Usernames input for this GetScore choreography.
     *
     * @param string $value (required, string) A comma-delimited string of Twitter usernames you want Klout scores for.
     * @return Klout_GetScore_Inputs For method chaining.
     */
    public function setUsernames($value)
    {
        return $this->set('Usernames', $value);
    }
}


/**
 * Execution object for the GetScore choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_GetScore_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetScore choreography.
     *
     * @param Temboo_Session $session The session that owns this GetScore execution.
     * @param Klout_GetScore $choreo The choregraphy object for this execution.
     * @param Klout_GetScore_Inputs|array $inputs (optional) Inputs as Klout_GetScore_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_GetScore_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_GetScore $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetScore execution.
     *
     * @return Klout_GetScore_Results New results object.
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
     * Wraps results in appopriate results class for this GetScore execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_GetScore_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_GetScore_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetScore choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_GetScore_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetScore choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_GetScore_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetScore execution.
     *
     * @return string (xml) The retrieved Klout scores for the specified users. The response format depends on what is specified in the ReturnType input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves up to five Klout score pairs for users that are influenced by a specified user.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_InfluencerOf extends Temboo_Choreography
{
    /**
     * Retrieves up to five Klout score pairs for users that are influenced by a specified user.
     *
     * @param Temboo_Session $session The session that owns this InfluencerOf choreography.
     * @return Klout_InfluencerOf New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/InfluencerOf/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this InfluencerOf choreography.
     *
     * @param Klout_InfluencerOf_Inputs|array $inputs (optional) Inputs as Klout_InfluencerOf_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_InfluencerOf_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_InfluencerOf_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InfluencerOf choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_InfluencerOf_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_InfluencerOf_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InfluencerOf choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_InfluencerOf_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the InfluencerOf choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_InfluencerOf_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InfluencerOf input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_InfluencerOf_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Klout_InfluencerOf_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this InfluencerOf choreography.
     *
     * @param string $value (required, string) The API key provided by Klout.
     * @return Klout_InfluencerOf_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ReturnType input for this InfluencerOf choreography.
     *
     * @param string $value (optional, string) The desired format for the retrieved Klout score pairs: xml or json. Defaults to xml.
     * @return Klout_InfluencerOf_Inputs For method chaining.
     */
    public function setReturnType($value)
    {
        return $this->set('ReturnType', $value);
    }

    /**
     * Set the value for the Usernames input for this InfluencerOf choreography.
     *
     * @param string $value (required, string) A comma-delimited string of Twitter usernames whose influencees to return.
     * @return Klout_InfluencerOf_Inputs For method chaining.
     */
    public function setUsernames($value)
    {
        return $this->set('Usernames', $value);
    }
}


/**
 * Execution object for the InfluencerOf choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_InfluencerOf_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InfluencerOf choreography.
     *
     * @param Temboo_Session $session The session that owns this InfluencerOf execution.
     * @param Klout_InfluencerOf $choreo The choregraphy object for this execution.
     * @param Klout_InfluencerOf_Inputs|array $inputs (optional) Inputs as Klout_InfluencerOf_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_InfluencerOf_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_InfluencerOf $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InfluencerOf execution.
     *
     * @return Klout_InfluencerOf_Results New results object.
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
     * Wraps results in appopriate results class for this InfluencerOf execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_InfluencerOf_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_InfluencerOf_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the InfluencerOf choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_InfluencerOf_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the InfluencerOf choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_InfluencerOf_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this InfluencerOf execution.
     *
     * @return string (xml) The retrieved Klout scores for the specified users. The response format depends on what is specified in the ReturnType input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Show Klout data for a specified Twitter user(s).
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_ShowUser extends Temboo_Choreography
{
    /**
     * Show Klout data for a specified Twitter user(s).
     *
     * @param Temboo_Session $session The session that owns this ShowUser choreography.
     * @return Klout_ShowUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/ShowUser/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ShowUser choreography.
     *
     * @param Klout_ShowUser_Inputs|array $inputs (optional) Inputs as Klout_ShowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_ShowUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_ShowUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_ShowUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_ShowUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowUser choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_ShowUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ShowUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_ShowUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_ShowUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Klout_ShowUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ShowUser choreography.
     *
     * @param string $value (required, string) The API key provided by Klout.
     * @return Klout_ShowUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ReturnType input for this ShowUser choreography.
     *
     * @param string $value (optional, string) The desired format for the returned user data: xml or json. Defaults to xml.
     * @return Klout_ShowUser_Inputs For method chaining.
     */
    public function setReturnType($value)
    {
        return $this->set('ReturnType', $value);
    }

    /**
     * Set the value for the Usernames input for this ShowUser choreography.
     *
     * @param string $value (required, string) A comma-delimited string of Twitter usernames whose Klout data you want to return.
     * @return Klout_ShowUser_Inputs For method chaining.
     */
    public function setUsernames($value)
    {
        return $this->set('Usernames', $value);
    }
}


/**
 * Execution object for the ShowUser choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_ShowUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowUser choreography.
     *
     * @param Temboo_Session $session The session that owns this ShowUser execution.
     * @param Klout_ShowUser $choreo The choregraphy object for this execution.
     * @param Klout_ShowUser_Inputs|array $inputs (optional) Inputs as Klout_ShowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_ShowUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_ShowUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowUser execution.
     *
     * @return Klout_ShowUser_Results New results object.
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
     * Wraps results in appopriate results class for this ShowUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_ShowUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_ShowUser_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ShowUser choreography.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_ShowUser_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ShowUser choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_ShowUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ShowUser execution.
     *
     * @return string (xml) The retrieved Klout scores for the specified users. The response format depends on what is specified in the ReturnType input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>