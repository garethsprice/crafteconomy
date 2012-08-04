<?php

/**
 * Temboo PHP SDK InfluenceExplorer classes
 *
 * Execute Choreographies from the Temboo InfluenceExplorer bundle.
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
 * @subpackage InfluenceExplorer
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Looks up the entity ID based on an ID from a different data set. Currently Influence Explorer provides a mapping from the ID schemes used by Center for Reponsive Politics (CRP) and the National Institute for Money in State Politics (NIMSP).
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_IDLookup extends Temboo_Choreography
{
    /**
     * Looks up the entity ID based on an ID from a different data set. Currently Influence Explorer provides a mapping from the ID schemes used by Center for Reponsive Politics (CRP) and the National Institute for Money in State Politics (NIMSP).
     *
     * @param Temboo_Session $session The session that owns this IDLookup choreography.
     * @return InfluenceExplorer_IDLookup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/IDLookup/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this IDLookup choreography.
     *
     * @param InfluenceExplorer_IDLookup_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_IDLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_IDLookup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_IDLookup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this IDLookup choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_IDLookup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_IDLookup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the IDLookup choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_IDLookup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the IDLookup choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_IDLookup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this IDLookup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_IDLookup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_IDLookup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this IDLookup choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_IDLookup_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ID input for this IDLookup choreography.
     *
     * @param string $value (required, string) The ID of the Entity in the given namespace.
     * @return InfluenceExplorer_IDLookup_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Namespace input for this IDLookup choreography.
     *
     * @param string $value (required, string) The dataset and data type of the ID. Accepted values are: urn:crp:individual, urn:crp:organization, urn:crp:recipient, urn:nimsp:organization, urn:nimsp:recipient. See documentation for more details.
     * @return InfluenceExplorer_IDLookup_Inputs For method chaining.
     */
    public function setNamespace($value)
    {
        return $this->set('Namespace', $value);
    }
}


/**
 * Execution object for the IDLookup choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_IDLookup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the IDLookup choreography.
     *
     * @param Temboo_Session $session The session that owns this IDLookup execution.
     * @param InfluenceExplorer_IDLookup $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_IDLookup_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_IDLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_IDLookup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_IDLookup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this IDLookup execution.
     *
     * @return InfluenceExplorer_IDLookup_Results New results object.
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
     * Wraps results in appopriate results class for this IDLookup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_IDLookup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_IDLookup_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the IDLookup choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_IDLookup_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the IDLookup choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_IDLookup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this IDLookup execution.
     *
     * @return string (json) The response from Influence Explorer.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for politicians, individuals, or organizations with the given name. Returns basic information about the the contributions to and from the entity that is specified.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_SearchByName extends Temboo_Choreography
{
    /**
     * Searches for politicians, individuals, or organizations with the given name. Returns basic information about the the contributions to and from the entity that is specified.
     *
     * @param Temboo_Session $session The session that owns this SearchByName choreography.
     * @return InfluenceExplorer_SearchByName New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/SearchByName/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchByName choreography.
     *
     * @param InfluenceExplorer_SearchByName_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_SearchByName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_SearchByName_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_SearchByName_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByName choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_SearchByName_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_SearchByName_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByName choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_SearchByName_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchByName choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_SearchByName_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByName input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_SearchByName_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_SearchByName_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchByName choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_SearchByName_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Search input for this SearchByName choreography.
     *
     * @param string $value (required, string) The query string.
     * @return InfluenceExplorer_SearchByName_Inputs For method chaining.
     */
    public function setSearch($value)
    {
        return $this->set('Search', $value);
    }
}


/**
 * Execution object for the SearchByName choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_SearchByName_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByName choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchByName execution.
     * @param InfluenceExplorer_SearchByName $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_SearchByName_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_SearchByName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_SearchByName_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_SearchByName $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByName execution.
     *
     * @return InfluenceExplorer_SearchByName_Results New results object.
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
     * Wraps results in appopriate results class for this SearchByName execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_SearchByName_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_SearchByName_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchByName choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_SearchByName_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchByName choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_SearchByName_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchByName execution.
     *
     * @return string (json) The response from Influence Explorer.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns general information about a particular politician, individual, or organization with a given entity id.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_EntityOverview extends Temboo_Choreography
{
    /**
     * Returns general information about a particular politician, individual, or organization with a given entity id.
     *
     * @param Temboo_Session $session The session that owns this EntityOverview choreography.
     * @return InfluenceExplorer_EntityOverview New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/EntityOverview/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this EntityOverview choreography.
     *
     * @param InfluenceExplorer_EntityOverview_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_EntityOverview_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_EntityOverview_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_EntityOverview_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EntityOverview choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_EntityOverview_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_EntityOverview_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EntityOverview choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_EntityOverview_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the EntityOverview choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_EntityOverview_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EntityOverview input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_EntityOverview_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_EntityOverview_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this EntityOverview choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_EntityOverview_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Cycle input for this EntityOverview choreography.
     *
     * @param string $value (optional, date) Specify a yyyy-formatted election cycle. Example: 2012, or 2008|2012 to limit results between 2008 and 2012.
     * @return InfluenceExplorer_EntityOverview_Inputs For method chaining.
     */
    public function setCycle($value)
    {
        return $this->set('Cycle', $value);
    }

    /**
     * Set the value for the EntityID input for this EntityOverview choreography.
     *
     * @param string $value (required, string) The ID for the Entity that you want to return information for. This ID can be retrieved by running the SearchByName Choreo.
     * @return InfluenceExplorer_EntityOverview_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }
}


/**
 * Execution object for the EntityOverview choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_EntityOverview_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EntityOverview choreography.
     *
     * @param Temboo_Session $session The session that owns this EntityOverview execution.
     * @param InfluenceExplorer_EntityOverview $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_EntityOverview_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_EntityOverview_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_EntityOverview_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_EntityOverview $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EntityOverview execution.
     *
     * @return InfluenceExplorer_EntityOverview_Results New results object.
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
     * Wraps results in appopriate results class for this EntityOverview execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_EntityOverview_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_EntityOverview_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the EntityOverview choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_EntityOverview_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the EntityOverview choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_EntityOverview_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this EntityOverview execution.
     *
     * @return string (json) The response from Influence Explorer.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns how much an individual or organization gave to each party.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_PartyBreakdown extends Temboo_Choreography
{
    /**
     * Returns how much an individual or organization gave to each party.
     *
     * @param Temboo_Session $session The session that owns this PartyBreakdown choreography.
     * @return InfluenceExplorer_PartyBreakdown New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/PartyBreakdown/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PartyBreakdown choreography.
     *
     * @param InfluenceExplorer_PartyBreakdown_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_PartyBreakdown_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_PartyBreakdown_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_PartyBreakdown_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PartyBreakdown choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_PartyBreakdown_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_PartyBreakdown_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PartyBreakdown choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_PartyBreakdown_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PartyBreakdown choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_PartyBreakdown_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PartyBreakdown input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_PartyBreakdown_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_PartyBreakdown_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PartyBreakdown choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_PartyBreakdown_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ContributorType input for this PartyBreakdown choreography.
     *
     * @param string $value (required, string) This indicates whether the contributor is an individual or orgnaization. Accepted values are: "indiv" or "org". Defaults to "org".
     * @return InfluenceExplorer_PartyBreakdown_Inputs For method chaining.
     */
    public function setContributorType($value)
    {
        return $this->set('ContributorType', $value);
    }

    /**
     * Set the value for the EntityID input for this PartyBreakdown choreography.
     *
     * @param string $value (required, string) The ID for the Entity that you want to return information for. This ID can be retrieved by running the SearchByName Choreo.
     * @return InfluenceExplorer_PartyBreakdown_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }
}


/**
 * Execution object for the PartyBreakdown choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_PartyBreakdown_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PartyBreakdown choreography.
     *
     * @param Temboo_Session $session The session that owns this PartyBreakdown execution.
     * @param InfluenceExplorer_PartyBreakdown $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_PartyBreakdown_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_PartyBreakdown_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_PartyBreakdown_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_PartyBreakdown $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PartyBreakdown execution.
     *
     * @return InfluenceExplorer_PartyBreakdown_Results New results object.
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
     * Wraps results in appopriate results class for this PartyBreakdown execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_PartyBreakdown_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_PartyBreakdown_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PartyBreakdown choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_PartyBreakdown_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PartyBreakdown choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_PartyBreakdown_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this PartyBreakdown execution.
     *
     * @return string (json) The response from Influence Explorer.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns information about federal grants awarded.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_FederalGrants extends Temboo_Choreography
{
    /**
     * Returns information about federal grants awarded.
     *
     * @param Temboo_Session $session The session that owns this FederalGrants choreography.
     * @return InfluenceExplorer_FederalGrants New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/FederalGrants/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FederalGrants choreography.
     *
     * @param InfluenceExplorer_FederalGrants_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_FederalGrants_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_FederalGrants_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_FederalGrants_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FederalGrants choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_FederalGrants_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_FederalGrants_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FederalGrants choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_FederalGrants_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FederalGrants choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_FederalGrants_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FederalGrants input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_FederalGrants_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_FederalGrants_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FederalGrants choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_FederalGrants_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AgencyName input for this FederalGrants choreography.
     *
     * @param string $value (optional, string) Full-text search on the reported name of the federal agency awarding the grant.
     * @return InfluenceExplorer_FederalGrants_Inputs For method chaining.
     */
    public function setAgencyName($value)
    {
        return $this->set('AgencyName', $value);
    }

    /**
     * Set the value for the Amount input for this FederalGrants choreography.
     *
     * @param string $value (optional, string) The grant amount. Valid formats include: 500 (exactly $500); >|500 (greater than, or equal to 500); <|500 (less than or equal to 500).
     * @return InfluenceExplorer_FederalGrants_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the AssistanceType input for this FederalGrants choreography.
     *
     * @param int $value (optional, integer) A numeric code for the type of grant awarded. See documentation for more details for this parameter.
     * @return InfluenceExplorer_FederalGrants_Inputs For method chaining.
     */
    public function setAssistanceType($value)
    {
        return $this->set('AssistanceType', $value);
    }

    /**
     * Set the value for the FiscalYear input for this FederalGrants choreography.
     *
     * @param string $value (optional, date) The year in which the grant was awarded. A YYYY formatted year. You can also specify a range by separating years with a pipe (i.e. 2008|2012).
     * @return InfluenceExplorer_FederalGrants_Inputs For method chaining.
     */
    public function setFiscalYear($value)
    {
        return $this->set('FiscalYear', $value);
    }

    /**
     * Set the value for the RecipientName input for this FederalGrants choreography.
     *
     * @param string $value (optional, string) Full-text search on the reported name of the grant recipient.
     * @return InfluenceExplorer_FederalGrants_Inputs For method chaining.
     */
    public function setRecipientName($value)
    {
        return $this->set('RecipientName', $value);
    }

    /**
     * Set the value for the RecipientState input for this FederalGrants choreography.
     *
     * @param string $value (optional, string) Two-letter abbreviation of the state in which the grant was awarded.
     * @return InfluenceExplorer_FederalGrants_Inputs For method chaining.
     */
    public function setRecipientState($value)
    {
        return $this->set('RecipientState', $value);
    }

    /**
     * Set the value for the RecipientType input for this FederalGrants choreography.
     *
     * @param int $value (optional, integer) The numeric code representing the type of entity that received the grant. See documentation for more details about this parameter.
     * @return InfluenceExplorer_FederalGrants_Inputs For method chaining.
     */
    public function setRecipientType($value)
    {
        return $this->set('RecipientType', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FederalGrants choreography.
     *
     * @param string $value (optional, string) Indicates the desired format for the response. Accepted values are: json (the default), csv, and xls. Note when specifying xls, restults are returned as Base64 encoded data.
     * @return InfluenceExplorer_FederalGrants_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FederalGrants choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_FederalGrants_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FederalGrants choreography.
     *
     * @param Temboo_Session $session The session that owns this FederalGrants execution.
     * @param InfluenceExplorer_FederalGrants $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_FederalGrants_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_FederalGrants_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_FederalGrants_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_FederalGrants $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FederalGrants execution.
     *
     * @return InfluenceExplorer_FederalGrants_Results New results object.
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
     * Wraps results in appopriate results class for this FederalGrants execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_FederalGrants_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_FederalGrants_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FederalGrants choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_FederalGrants_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FederalGrants choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_FederalGrants_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FederalGrants execution.
     *
     * @return string The response from Influence Explorer. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the portion of contribution given by an individual or organization that went to state versus federal candidates.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_StateFederalBreakdown extends Temboo_Choreography
{
    /**
     * Returns the portion of contribution given by an individual or organization that went to state versus federal candidates.
     *
     * @param Temboo_Session $session The session that owns this StateFederalBreakdown choreography.
     * @return InfluenceExplorer_StateFederalBreakdown New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/StateFederalBreakdown/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this StateFederalBreakdown choreography.
     *
     * @param InfluenceExplorer_StateFederalBreakdown_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_StateFederalBreakdown_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_StateFederalBreakdown_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_StateFederalBreakdown_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StateFederalBreakdown choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_StateFederalBreakdown_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_StateFederalBreakdown_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StateFederalBreakdown choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_StateFederalBreakdown_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the StateFederalBreakdown choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_StateFederalBreakdown_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StateFederalBreakdown input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_StateFederalBreakdown_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_StateFederalBreakdown_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this StateFederalBreakdown choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_StateFederalBreakdown_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EntityID input for this StateFederalBreakdown choreography.
     *
     * @param string $value (required, string) The ID for the Entity that you want to return information for. This ID can be retrieved by running the SearchByName Choreo.
     * @return InfluenceExplorer_StateFederalBreakdown_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }
}


/**
 * Execution object for the StateFederalBreakdown choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_StateFederalBreakdown_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StateFederalBreakdown choreography.
     *
     * @param Temboo_Session $session The session that owns this StateFederalBreakdown execution.
     * @param InfluenceExplorer_StateFederalBreakdown $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_StateFederalBreakdown_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_StateFederalBreakdown_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_StateFederalBreakdown_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_StateFederalBreakdown $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StateFederalBreakdown execution.
     *
     * @return InfluenceExplorer_StateFederalBreakdown_Results New results object.
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
     * Wraps results in appopriate results class for this StateFederalBreakdown execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_StateFederalBreakdown_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_StateFederalBreakdown_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the StateFederalBreakdown choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_StateFederalBreakdown_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the StateFederalBreakdown choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_StateFederalBreakdown_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this StateFederalBreakdown execution.
     *
     * @return string (json) The response from Influence Explorer.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a breakdown, for a given candidate, of how much of the money raised came from individuals versus organizations (PACs).
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_ContributorTypeBreakdown extends Temboo_Choreography
{
    /**
     * Returns a breakdown, for a given candidate, of how much of the money raised came from individuals versus organizations (PACs).
     *
     * @param Temboo_Session $session The session that owns this ContributorTypeBreakdown choreography.
     * @return InfluenceExplorer_ContributorTypeBreakdown New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/ContributorTypeBreakdown/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ContributorTypeBreakdown choreography.
     *
     * @param InfluenceExplorer_ContributorTypeBreakdown_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_ContributorTypeBreakdown_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_ContributorTypeBreakdown_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_ContributorTypeBreakdown_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ContributorTypeBreakdown choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_ContributorTypeBreakdown_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_ContributorTypeBreakdown_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ContributorTypeBreakdown choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_ContributorTypeBreakdown_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ContributorTypeBreakdown choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_ContributorTypeBreakdown_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ContributorTypeBreakdown input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_ContributorTypeBreakdown_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_ContributorTypeBreakdown_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ContributorTypeBreakdown choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_ContributorTypeBreakdown_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EntityID input for this ContributorTypeBreakdown choreography.
     *
     * @param string $value (required, string) The ID for the Entity that you want to return information for. This ID can be retrieved by running the SearchByName Choreo.
     * @return InfluenceExplorer_ContributorTypeBreakdown_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }
}


/**
 * Execution object for the ContributorTypeBreakdown choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_ContributorTypeBreakdown_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ContributorTypeBreakdown choreography.
     *
     * @param Temboo_Session $session The session that owns this ContributorTypeBreakdown execution.
     * @param InfluenceExplorer_ContributorTypeBreakdown $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_ContributorTypeBreakdown_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_ContributorTypeBreakdown_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_ContributorTypeBreakdown_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_ContributorTypeBreakdown $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ContributorTypeBreakdown execution.
     *
     * @return InfluenceExplorer_ContributorTypeBreakdown_Results New results object.
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
     * Wraps results in appopriate results class for this ContributorTypeBreakdown execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_ContributorTypeBreakdown_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_ContributorTypeBreakdown_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ContributorTypeBreakdown choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_ContributorTypeBreakdown_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ContributorTypeBreakdown choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_ContributorTypeBreakdown_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ContributorTypeBreakdown execution.
     *
     * @return string (json) The response from Influence Explorer.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the top recipients of money from a specified organization.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopRecipients extends Temboo_Choreography
{
    /**
     * Returns the top recipients of money from a specified organization.
     *
     * @param Temboo_Session $session The session that owns this TopRecipients choreography.
     * @return InfluenceExplorer_TopRecipients New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/TopRecipients/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TopRecipients choreography.
     *
     * @param InfluenceExplorer_TopRecipients_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_TopRecipients_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_TopRecipients_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_TopRecipients_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopRecipients choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_TopRecipients_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_TopRecipients_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopRecipients choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopRecipients_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TopRecipients choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_TopRecipients_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopRecipients input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_TopRecipients_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_TopRecipients_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TopRecipients choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_TopRecipients_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EntityID input for this TopRecipients choreography.
     *
     * @param string $value (required, string) The ID for the Entity that you want to return information for. This ID can be retrieved by running the SearchByName Choreo.
     * @return InfluenceExplorer_TopRecipients_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the Limit input for this TopRecipients choreography.
     *
     * @param int $value (optional, integer) The number of resutls to return.
     * @return InfluenceExplorer_TopRecipients_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }
}


/**
 * Execution object for the TopRecipients choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopRecipients_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopRecipients choreography.
     *
     * @param Temboo_Session $session The session that owns this TopRecipients execution.
     * @param InfluenceExplorer_TopRecipients $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_TopRecipients_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_TopRecipients_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_TopRecipients_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_TopRecipients $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopRecipients execution.
     *
     * @return InfluenceExplorer_TopRecipients_Results New results object.
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
     * Wraps results in appopriate results class for this TopRecipients execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_TopRecipients_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_TopRecipients_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TopRecipients choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopRecipients_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TopRecipients choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_TopRecipients_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TopRecipients execution.
     *
     * @return string (json) The response from Influence Explorer.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the top contributing organizations for a particular politician, ranked by total dollars given.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopContributors extends Temboo_Choreography
{
    /**
     * Returns the top contributing organizations for a particular politician, ranked by total dollars given.
     *
     * @param Temboo_Session $session The session that owns this TopContributors choreography.
     * @return InfluenceExplorer_TopContributors New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/TopContributors/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TopContributors choreography.
     *
     * @param InfluenceExplorer_TopContributors_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_TopContributors_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_TopContributors_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_TopContributors_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopContributors choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_TopContributors_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_TopContributors_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopContributors choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopContributors_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TopContributors choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_TopContributors_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopContributors input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_TopContributors_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_TopContributors_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TopContributors choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_TopContributors_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EntityID input for this TopContributors choreography.
     *
     * @param string $value (required, string) The ID for the Entity that you want to return information for. This ID can be retrieved by running the SearchByName Choreo.
     * @return InfluenceExplorer_TopContributors_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }
}


/**
 * Execution object for the TopContributors choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopContributors_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopContributors choreography.
     *
     * @param Temboo_Session $session The session that owns this TopContributors execution.
     * @param InfluenceExplorer_TopContributors $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_TopContributors_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_TopContributors_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_TopContributors_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_TopContributors $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopContributors execution.
     *
     * @return InfluenceExplorer_TopContributors_Results New results object.
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
     * Wraps results in appopriate results class for this TopContributors execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_TopContributors_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_TopContributors_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TopContributors choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopContributors_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TopContributors choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_TopContributors_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TopContributors execution.
     *
     * @return string (json) The response from Influence Explorer.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a breakdown of how much of the money raised was from contributors in the politician's state versus outside the politician's state.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_LocalBreakdown extends Temboo_Choreography
{
    /**
     * Returns a breakdown of how much of the money raised was from contributors in the politician's state versus outside the politician's state.
     *
     * @param Temboo_Session $session The session that owns this LocalBreakdown choreography.
     * @return InfluenceExplorer_LocalBreakdown New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/LocalBreakdown/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this LocalBreakdown choreography.
     *
     * @param InfluenceExplorer_LocalBreakdown_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_LocalBreakdown_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_LocalBreakdown_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_LocalBreakdown_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LocalBreakdown choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_LocalBreakdown_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_LocalBreakdown_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LocalBreakdown choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_LocalBreakdown_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the LocalBreakdown choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_LocalBreakdown_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LocalBreakdown input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_LocalBreakdown_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_LocalBreakdown_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this LocalBreakdown choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_LocalBreakdown_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EntityID input for this LocalBreakdown choreography.
     *
     * @param string $value (required, string) The ID for the Entity that you want to return information for. This ID can be retrieved by running the SearchByName Choreo.
     * @return InfluenceExplorer_LocalBreakdown_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }
}


/**
 * Execution object for the LocalBreakdown choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_LocalBreakdown_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LocalBreakdown choreography.
     *
     * @param Temboo_Session $session The session that owns this LocalBreakdown execution.
     * @param InfluenceExplorer_LocalBreakdown $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_LocalBreakdown_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_LocalBreakdown_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_LocalBreakdown_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_LocalBreakdown $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LocalBreakdown execution.
     *
     * @return InfluenceExplorer_LocalBreakdown_Results New results object.
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
     * Wraps results in appopriate results class for this LocalBreakdown execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_LocalBreakdown_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_LocalBreakdown_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the LocalBreakdown choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_LocalBreakdown_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the LocalBreakdown choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_LocalBreakdown_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this LocalBreakdown execution.
     *
     * @return string (json) The response from Influence Explorer.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the top politicians to which this individual has given money.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopRecipientPoliticians extends Temboo_Choreography
{
    /**
     * Returns the top politicians to which this individual has given money.
     *
     * @param Temboo_Session $session The session that owns this TopRecipientPoliticians choreography.
     * @return InfluenceExplorer_TopRecipientPoliticians New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/TopRecipientPoliticians/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TopRecipientPoliticians choreography.
     *
     * @param InfluenceExplorer_TopRecipientPoliticians_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_TopRecipientPoliticians_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_TopRecipientPoliticians_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_TopRecipientPoliticians_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopRecipientPoliticians choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_TopRecipientPoliticians_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_TopRecipientPoliticians_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopRecipientPoliticians choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopRecipientPoliticians_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TopRecipientPoliticians choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_TopRecipientPoliticians_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopRecipientPoliticians input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_TopRecipientPoliticians_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_TopRecipientPoliticians_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TopRecipientPoliticians choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_TopRecipientPoliticians_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EntityID input for this TopRecipientPoliticians choreography.
     *
     * @param string $value (required, string) The ID for the Entity that you want to return information for. This ID can be retrieved by running the SearchByName Choreo.
     * @return InfluenceExplorer_TopRecipientPoliticians_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the Limit input for this TopRecipientPoliticians choreography.
     *
     * @param int $value (optional, integer) The number of resutls to return.
     * @return InfluenceExplorer_TopRecipientPoliticians_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }
}


/**
 * Execution object for the TopRecipientPoliticians choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopRecipientPoliticians_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopRecipientPoliticians choreography.
     *
     * @param Temboo_Session $session The session that owns this TopRecipientPoliticians execution.
     * @param InfluenceExplorer_TopRecipientPoliticians $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_TopRecipientPoliticians_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_TopRecipientPoliticians_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_TopRecipientPoliticians_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_TopRecipientPoliticians $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopRecipientPoliticians execution.
     *
     * @return InfluenceExplorer_TopRecipientPoliticians_Results New results object.
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
     * Wraps results in appopriate results class for this TopRecipientPoliticians execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_TopRecipientPoliticians_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_TopRecipientPoliticians_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TopRecipientPoliticians choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopRecipientPoliticians_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TopRecipientPoliticians choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_TopRecipientPoliticians_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TopRecipientPoliticians execution.
     *
     * @return string (json) The response from Influence Explorer.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve detailed information on political campaign contributions, filtered by date, contributor, state, employer, campaign, etc.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_CampaignContribution extends Temboo_Choreography
{
    /**
     * Retrieve detailed information on political campaign contributions, filtered by date, contributor, state, employer, campaign, etc.
     *
     * @param Temboo_Session $session The session that owns this CampaignContribution choreography.
     * @return InfluenceExplorer_CampaignContribution New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/CampaignContribution/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CampaignContribution choreography.
     *
     * @param InfluenceExplorer_CampaignContribution_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_CampaignContribution_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_CampaignContribution_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_CampaignContribution_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CampaignContribution choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_CampaignContribution_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_CampaignContribution_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CampaignContribution choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_CampaignContribution_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CampaignContribution choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_CampaignContribution_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CampaignContribution input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CampaignContribution choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Amount input for this CampaignContribution choreography.
     *
     * @param string $value (optional, string) Enter the amount of dollars spent on lobbying.  Valid formats include: 500 (exactly $500); >|500 (greater than, or equal to 500); <|500 (less than or equal to 500).
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the ContributorName input for this CampaignContribution choreography.
     *
     * @param string $value (optional, string) Specfiy the name of an individual, PAC, organization, or employer for which a full-text search will be performed.
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setContributorName($value)
    {
        return $this->set('ContributorName', $value);
    }

    /**
     * Set the value for the ContributorsByState input for this CampaignContribution choreography.
     *
     * @param string $value (optional, string) Enter a two-letter state designation from which the contribution is made.
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setContributorsByState($value)
    {
        return $this->set('ContributorsByState', $value);
    }

    /**
     * Set the value for the Cycle input for this CampaignContribution choreography.
     *
     * @param string $value (optional, string) Specify a yyyy-formatted election cycle. Example: 2012, or 2008|2012 to limit results between 2008 and 2012.
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setCycle($value)
    {
        return $this->set('Cycle', $value);
    }

    /**
     * Set the value for the Date input for this CampaignContribution choreography.
     *
     * @param string $value (optional, string) Specify a date of the contribution in ISO date format.  For example: 2006-08-06.  Or, ><|2006-08-06|2006-09-12 to limit results between specific dates.
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the OrganizationName input for this CampaignContribution choreography.
     *
     * @param string $value (optional, string) Specify a full-text search on employer, organization, and parent organization.
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setOrganizationName($value)
    {
        return $this->set('OrganizationName', $value);
    }

    /**
     * Set the value for the RecipientName input for this CampaignContribution choreography.
     *
     * @param string $value (optional, string) Enter the full-text search on name of PAC or candidate receiving the contribution.
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setRecipientName($value)
    {
        return $this->set('RecipientName', $value);
    }

    /**
     * Set the value for the RecipientState input for this CampaignContribution choreography.
     *
     * @param string $value (optional, string) Specify a two-letter state abbreviation for the state in which the recipient of contributions is running a campaign.
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setRecipientState($value)
    {
        return $this->set('RecipientState', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CampaignContribution choreography.
     *
     * @param string $value (optional, string) Indicates the desired format for the response. Accepted values are: json (the default), csv, and xls. Note when specifying xls, restults are returned as Base64 encoded data.
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Seat input for this CampaignContribution choreography.
     *
     * @param string $value (optional, string) Specify the type of political office being sought.  Examples: federal:senate (US Senate), federal:president (US President), state:governor.  For more info see documentation.
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setSeat($value)
    {
        return $this->set('Seat', $value);
    }

    /**
     * Set the value for the TransactionNamespace input for this CampaignContribution choreography.
     *
     * @param string $value (optional, string) Filters on federal or state contributions. Valid namespaces are: urn:fec:transaction (for federal) or urn:nimsp:transaction (for state).
     * @return InfluenceExplorer_CampaignContribution_Inputs For method chaining.
     */
    public function setTransactionNamespace($value)
    {
        return $this->set('TransactionNamespace', $value);
    }
}


/**
 * Execution object for the CampaignContribution choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_CampaignContribution_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CampaignContribution choreography.
     *
     * @param Temboo_Session $session The session that owns this CampaignContribution execution.
     * @param InfluenceExplorer_CampaignContribution $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_CampaignContribution_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_CampaignContribution_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_CampaignContribution_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_CampaignContribution $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CampaignContribution execution.
     *
     * @return InfluenceExplorer_CampaignContribution_Results New results object.
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
     * Wraps results in appopriate results class for this CampaignContribution execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_CampaignContribution_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_CampaignContribution_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CampaignContribution choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_CampaignContribution_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CampaignContribution choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_CampaignContribution_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CampaignContribution execution.
     *
     * @return string The response from Influence Explorer. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the contribution amounts that each sector gave to the politician.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopSectors extends Temboo_Choreography
{
    /**
     * Returns the contribution amounts that each sector gave to the politician.
     *
     * @param Temboo_Session $session The session that owns this TopSectors choreography.
     * @return InfluenceExplorer_TopSectors New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/TopSectors/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TopSectors choreography.
     *
     * @param InfluenceExplorer_TopSectors_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_TopSectors_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_TopSectors_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_TopSectors_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopSectors choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_TopSectors_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_TopSectors_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopSectors choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopSectors_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TopSectors choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_TopSectors_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopSectors input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_TopSectors_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_TopSectors_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TopSectors choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_TopSectors_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EntityID input for this TopSectors choreography.
     *
     * @param string $value (required, string) The ID for the Entity that you want to return information for. This ID can be retrieved by running the SearchByName Choreo.
     * @return InfluenceExplorer_TopSectors_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }
}


/**
 * Execution object for the TopSectors choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopSectors_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopSectors choreography.
     *
     * @param Temboo_Session $session The session that owns this TopSectors execution.
     * @param InfluenceExplorer_TopSectors $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_TopSectors_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_TopSectors_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_TopSectors_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_TopSectors $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopSectors execution.
     *
     * @return InfluenceExplorer_TopSectors_Results New results object.
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
     * Wraps results in appopriate results class for this TopSectors execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_TopSectors_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_TopSectors_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TopSectors choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopSectors_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TopSectors choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_TopSectors_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TopSectors execution.
     *
     * @return string (json) The response from Influence Explorer.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the top organizations to which the specified individual has given money.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopRecipientOrganizations extends Temboo_Choreography
{
    /**
     * Returns the top organizations to which the specified individual has given money.
     *
     * @param Temboo_Session $session The session that owns this TopRecipientOrganizations choreography.
     * @return InfluenceExplorer_TopRecipientOrganizations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/TopRecipientOrganizations/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TopRecipientOrganizations choreography.
     *
     * @param InfluenceExplorer_TopRecipientOrganizations_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_TopRecipientOrganizations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_TopRecipientOrganizations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_TopRecipientOrganizations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopRecipientOrganizations choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_TopRecipientOrganizations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_TopRecipientOrganizations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopRecipientOrganizations choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopRecipientOrganizations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TopRecipientOrganizations choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_TopRecipientOrganizations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopRecipientOrganizations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_TopRecipientOrganizations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_TopRecipientOrganizations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TopRecipientOrganizations choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_TopRecipientOrganizations_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EntityID input for this TopRecipientOrganizations choreography.
     *
     * @param string $value (required, string) The ID for the Entity that you want to return information for. This ID can be retrieved by running the SearchByName Choreo.
     * @return InfluenceExplorer_TopRecipientOrganizations_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the Limit input for this TopRecipientOrganizations choreography.
     *
     * @param int $value (optional, integer) The number of resutls to return.
     * @return InfluenceExplorer_TopRecipientOrganizations_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }
}


/**
 * Execution object for the TopRecipientOrganizations choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopRecipientOrganizations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopRecipientOrganizations choreography.
     *
     * @param Temboo_Session $session The session that owns this TopRecipientOrganizations execution.
     * @param InfluenceExplorer_TopRecipientOrganizations $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_TopRecipientOrganizations_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_TopRecipientOrganizations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_TopRecipientOrganizations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_TopRecipientOrganizations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopRecipientOrganizations execution.
     *
     * @return InfluenceExplorer_TopRecipientOrganizations_Results New results object.
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
     * Wraps results in appopriate results class for this TopRecipientOrganizations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_TopRecipientOrganizations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_TopRecipientOrganizations_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TopRecipientOrganizations choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_TopRecipientOrganizations_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TopRecipientOrganizations choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_TopRecipientOrganizations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TopRecipientOrganizations execution.
     *
     * @return string (json) The response from Influence Explorer.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain detailed lobbying information.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_FederalLobbying extends Temboo_Choreography
{
    /**
     * Obtain detailed lobbying information.
     *
     * @param Temboo_Session $session The session that owns this FederalLobbying choreography.
     * @return InfluenceExplorer_FederalLobbying New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/InfluenceExplorer/FederalLobbying/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FederalLobbying choreography.
     *
     * @param InfluenceExplorer_FederalLobbying_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_FederalLobbying_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_FederalLobbying_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new InfluenceExplorer_FederalLobbying_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FederalLobbying choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_FederalLobbying_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new InfluenceExplorer_FederalLobbying_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FederalLobbying choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_FederalLobbying_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FederalLobbying choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return InfluenceExplorer_FederalLobbying_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FederalLobbying input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FederalLobbying choreography.
     *
     * @param string $value (required, string) The API key provided by Sunlight Data Services.
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Amount input for this FederalLobbying choreography.
     *
     * @param string $value (optional, string) Enter the amount of dollars spent on lobbying.  Valid formats include: 500 (exactly $500); >|500 (greater than, or equal to 500); <|500 (less than or equal to 500).
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the ClientParentOrganization input for this FederalLobbying choreography.
     *
     * @param string $value (optional, string) Specify a full-text search of a client's parent organizationfor.
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function setClientParentOrganization($value)
    {
        return $this->set('ClientParentOrganization', $value);
    }

    /**
     * Set the value for the ClientSearch input for this FederalLobbying choreography.
     *
     * @param string $value (optional, string) Enter the name of the client for whom this lobbyist is working. This parameter executes a full-text search.
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function setClientSearch($value)
    {
        return $this->set('ClientSearch', $value);
    }

    /**
     * Set the value for the FilingType input for this FederalLobbying choreography.
     *
     * @param string $value (optional, string) Specify the type of filing as identified by CRP.  Example: n, for non-self filer parent.  For more info, go here: http://data.influenceexplorer.com/api/lobbying/
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function setFilingType($value)
    {
        return $this->set('FilingType', $value);
    }

    /**
     * Set the value for the LobbyistSearch input for this FederalLobbying choreography.
     *
     * @param string $value (optional, string) Specify a full-text search of a lobbyist's name.
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function setLobbyistSearch($value)
    {
        return $this->set('LobbyistSearch', $value);
    }

    /**
     * Set the value for the RegistrantSearch input for this FederalLobbying choreography.
     *
     * @param string $value (optional, string) Specify a full-text search of an organization or a person, who is fling the lobbyist registration.
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function setRegistrantSearch($value)
    {
        return $this->set('RegistrantSearch', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FederalLobbying choreography.
     *
     * @param string $value (optional, string) Indicates the desired format for the response. Accepted values are: json (the default), csv, and xls. Note when specifying xls, restults are returned as Base64 encoded data.
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TransactionID input for this FederalLobbying choreography.
     *
     * @param string $value (optional, string) Enter the report ID given by the Senate Office of Public Records.
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }

    /**
     * Set the value for the TransactionType input for this FederalLobbying choreography.
     *
     * @param string $value (optional, string) Enter the type of filing as reported by the Senate Office of Public Records. See here for additional info: http://assets.transparencydata.org.s3.amazonaws.com/docs/transaction_types-20100402.csv
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function setTransactionType($value)
    {
        return $this->set('TransactionType', $value);
    }

    /**
     * Set the value for the YearFiled input for this FederalLobbying choreography.
     *
     * @param string $value (optional, string) Specify the year in which a registration was filed. Use the following format: yyyy. Example: 2011. Logical OR is also possible by using the | (pipe) symbol.  Example: 2008|2012.
     * @return InfluenceExplorer_FederalLobbying_Inputs For method chaining.
     */
    public function setYearFiled($value)
    {
        return $this->set('YearFiled', $value);
    }
}


/**
 * Execution object for the FederalLobbying choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_FederalLobbying_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FederalLobbying choreography.
     *
     * @param Temboo_Session $session The session that owns this FederalLobbying execution.
     * @param InfluenceExplorer_FederalLobbying $choreo The choregraphy object for this execution.
     * @param InfluenceExplorer_FederalLobbying_Inputs|array $inputs (optional) Inputs as InfluenceExplorer_FederalLobbying_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return InfluenceExplorer_FederalLobbying_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, InfluenceExplorer_FederalLobbying $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FederalLobbying execution.
     *
     * @return InfluenceExplorer_FederalLobbying_Results New results object.
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
     * Wraps results in appopriate results class for this FederalLobbying execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return InfluenceExplorer_FederalLobbying_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new InfluenceExplorer_FederalLobbying_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FederalLobbying choreography.
 *
 * @package Temboo
 * @subpackage InfluenceExplorer
 */
class InfluenceExplorer_FederalLobbying_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FederalLobbying choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return InfluenceExplorer_FederalLobbying_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FederalLobbying execution.
     *
     * @return string The response from Influence Explorer. Corresponds to the ResponseFormat input. Defaults to json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>