<?php

/**
 * Temboo PHP SDK 37Signals classes
 *
 * Execute Choreographies from the Temboo 37Signals bundle.
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
 * @subpackage 37Signals
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieves information on the person who's credentials are specified.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CurrentPerson extends Temboo_Choreography
{
    /**
     * Retrieves information on the person who's credentials are specified.
     *
     * @param Temboo_Session $session The session that owns this CurrentPerson choreography.
     * @return _37Signals_Basecamp_CurrentPerson New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/CurrentPerson/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CurrentPerson choreography.
     *
     * @param _37Signals_Basecamp_CurrentPerson_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CurrentPerson_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CurrentPerson_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_CurrentPerson_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CurrentPerson choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CurrentPerson_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_CurrentPerson_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CurrentPerson choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CurrentPerson_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CurrentPerson choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CurrentPerson_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CurrentPerson input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_CurrentPerson_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_CurrentPerson_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CurrentPerson choreography.
     *
     * @param string $value (string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return _37Signals_Basecamp_CurrentPerson_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this CurrentPerson choreography.
     *
     * @param string $value (string) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_CurrentPerson_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this CurrentPerson choreography.
     *
     * @param string $value (string) Your Basecamp username or API Key.
     * @return _37Signals_Basecamp_CurrentPerson_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CurrentPerson choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CurrentPerson_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CurrentPerson choreography.
     *
     * @param Temboo_Session $session The session that owns this CurrentPerson execution.
     * @param _37Signals_Basecamp_CurrentPerson $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_CurrentPerson_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CurrentPerson_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CurrentPerson_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_CurrentPerson $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CurrentPerson execution.
     *
     * @return _37Signals_Basecamp_CurrentPerson_Results New results object.
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
     * Wraps results in appopriate results class for this CurrentPerson execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_CurrentPerson_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_CurrentPerson_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CurrentPerson choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CurrentPerson_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CurrentPerson choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_CurrentPerson_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CurrentPerson execution.
     *
     * @return string (XML) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves contacts from your Highrise CRM.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_ListAllPeople extends Temboo_Choreography
{
    /**
     * Retrieves contacts from your Highrise CRM.
     *
     * @param Temboo_Session $session The session that owns this ListAllPeople choreography.
     * @return _37Signals_Highrise_ListAllPeople New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Highrise/ListAllPeople/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListAllPeople choreography.
     *
     * @param _37Signals_Highrise_ListAllPeople_Inputs|array $inputs (optional) Inputs as _37Signals_Highrise_ListAllPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Highrise_ListAllPeople_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Highrise_ListAllPeople_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllPeople choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Highrise_ListAllPeople_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Highrise_ListAllPeople_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllPeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_ListAllPeople_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListAllPeople choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Highrise_ListAllPeople_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllPeople input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Highrise_ListAllPeople_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Highrise_ListAllPeople_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this ListAllPeople choreography.
     *
     * @param string $value (required, string) A valid Highrise account name. This is the first part of the account's URL.
     * @return _37Signals_Highrise_ListAllPeople_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this ListAllPeople choreography.
     *
     * @param string $value (required, string) The Highrise account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Highrise_ListAllPeople_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this ListAllPeople choreography.
     *
     * @param string $value (required, string) A Highrise account username or API Key.
     * @return _37Signals_Highrise_ListAllPeople_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ListAllPeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_ListAllPeople_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllPeople choreography.
     *
     * @param Temboo_Session $session The session that owns this ListAllPeople execution.
     * @param _37Signals_Highrise_ListAllPeople $choreo The choregraphy object for this execution.
     * @param _37Signals_Highrise_ListAllPeople_Inputs|array $inputs (optional) Inputs as _37Signals_Highrise_ListAllPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Highrise_ListAllPeople_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Highrise_ListAllPeople $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllPeople execution.
     *
     * @return _37Signals_Highrise_ListAllPeople_Results New results object.
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
     * Wraps results in appopriate results class for this ListAllPeople execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Highrise_ListAllPeople_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Highrise_ListAllPeople_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListAllPeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_ListAllPeople_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListAllPeople choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Highrise_ListAllPeople_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListAllPeople execution.
     *
     * @return string (xml) The response from Highrise.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new To-do list for a specified project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateList extends Temboo_Choreography
{
    /**
     * Creates a new To-do list for a specified project.
     *
     * @param Temboo_Session $session The session that owns this CreateList choreography.
     * @return _37Signals_Basecamp_CreateList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/CreateList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateList choreography.
     *
     * @param _37Signals_Basecamp_CreateList_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CreateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CreateList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_CreateList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CreateList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_CreateList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateList choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CreateList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_CreateList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_CreateList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreateList choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_CreateList_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Description input for this CreateList choreography.
     *
     * @param string $value (optional, string) The description of the list to create.
     * @return _37Signals_Basecamp_CreateList_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the MilestoneID input for this CreateList choreography.
     *
     * @param int $value (optional, integer) The ID of an existing milestone to include with the new list.
     * @return _37Signals_Basecamp_CreateList_Inputs For method chaining.
     */
    public function setMilestoneID($value)
    {
        return $this->set('MilestoneID', $value);
    }

    /**
     * Set the value for the Name input for this CreateList choreography.
     *
     * @param string $value (optional, string) The name of the list to create.
     * @return _37Signals_Basecamp_CreateList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Password input for this CreateList choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_CreateList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this CreateList choreography.
     *
     * @param int $value (integer) The ID for the project in which you're creating the new list.
     * @return _37Signals_Basecamp_CreateList_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this CreateList choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_CreateList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateList choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateList choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateList execution.
     * @param _37Signals_Basecamp_CreateList $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_CreateList_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CreateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CreateList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_CreateList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateList execution.
     *
     * @return _37Signals_Basecamp_CreateList_Results New results object.
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
     * Wraps results in appopriate results class for this CreateList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_CreateList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_CreateList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateList choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_CreateList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateList execution.
     *
     * @return string No response is returned from Basecamp for update requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves active, inactive, and archived projects.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetProjects extends Temboo_Choreography
{
    /**
     * Retrieves active, inactive, and archived projects.
     *
     * @param Temboo_Session $session The session that owns this GetProjects choreography.
     * @return _37Signals_Basecamp_GetProjects New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetProjects/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetProjects choreography.
     *
     * @param _37Signals_Basecamp_GetProjects_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetProjects_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetProjects_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetProjects_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetProjects choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetProjects_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetProjects_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetProjects choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetProjects_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetProjects choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetProjects_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetProjects input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetProjects_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetProjects_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetProjects choreography.
     *
     * @param string $value (string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return _37Signals_Basecamp_GetProjects_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetProjects choreography.
     *
     * @param string $value (string) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetProjects_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetProjects choreography.
     *
     * @param string $value (string) Your Basecamp username or API Key.
     * @return _37Signals_Basecamp_GetProjects_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetProjects choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetProjects_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetProjects choreography.
     *
     * @param Temboo_Session $session The session that owns this GetProjects execution.
     * @param _37Signals_Basecamp_GetProjects $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetProjects_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetProjects_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetProjects_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetProjects $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetProjects execution.
     *
     * @return _37Signals_Basecamp_GetProjects_Results New results object.
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
     * Wraps results in appopriate results class for this GetProjects execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetProjects_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetProjects_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetProjects choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetProjects_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetProjects choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetProjects_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetProjects execution.
     *
     * @return string (XML) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of files (attachments) in a specified project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetFiles extends Temboo_Choreography
{
    /**
     * Retrieves a list of files (attachments) in a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetFiles choreography.
     * @return _37Signals_Basecamp_GetFiles New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetFiles/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetFiles choreography.
     *
     * @param _37Signals_Basecamp_GetFiles_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetFiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetFiles_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetFiles_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFiles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetFiles_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetFiles_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFiles choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetFiles_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetFiles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetFiles_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFiles input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetFiles_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetFiles_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetFiles choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_GetFiles_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetFiles choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetFiles_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetFiles choreography.
     *
     * @param int $value (integer) The ID for the project that contains the attachments to retrieve.
     * @return _37Signals_Basecamp_GetFiles_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetFiles choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_GetFiles_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetFiles choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetFiles_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFiles choreography.
     *
     * @param Temboo_Session $session The session that owns this GetFiles execution.
     * @param _37Signals_Basecamp_GetFiles $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetFiles_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetFiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetFiles_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetFiles $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFiles execution.
     *
     * @return _37Signals_Basecamp_GetFiles_Results New results object.
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
     * Wraps results in appopriate results class for this GetFiles execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetFiles_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetFiles_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetFiles choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetFiles_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetFiles choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetFiles_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetFiles execution.
     *
     * @return string (XML) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified contact from your Highrise CRM.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_DeletePeople extends Temboo_Choreography
{
    /**
     * Deletes a specified contact from your Highrise CRM.
     *
     * @param Temboo_Session $session The session that owns this DeletePeople choreography.
     * @return _37Signals_Highrise_DeletePeople New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Highrise/DeletePeople/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeletePeople choreography.
     *
     * @param _37Signals_Highrise_DeletePeople_Inputs|array $inputs (optional) Inputs as _37Signals_Highrise_DeletePeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Highrise_DeletePeople_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Highrise_DeletePeople_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeletePeople choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Highrise_DeletePeople_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Highrise_DeletePeople_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeletePeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_DeletePeople_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeletePeople choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Highrise_DeletePeople_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeletePeople input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Highrise_DeletePeople_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Highrise_DeletePeople_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this DeletePeople choreography.
     *
     * @param string $value (required, string) A valid Highrise account name. This is the first part of the account's URL.
     * @return _37Signals_Highrise_DeletePeople_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ContactID input for this DeletePeople choreography.
     *
     * @param string $value (required, string) The ID number of the contact you want to delete. This is used to contruct the URL for the request.
     * @return _37Signals_Highrise_DeletePeople_Inputs For method chaining.
     */
    public function setContactID($value)
    {
        return $this->set('ContactID', $value);
    }

    /**
     * Set the value for the Password input for this DeletePeople choreography.
     *
     * @param string $value (required, string) The Highrise account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Highrise_DeletePeople_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this DeletePeople choreography.
     *
     * @param string $value (required, string) A Highrise account username or API Key.
     * @return _37Signals_Highrise_DeletePeople_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeletePeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_DeletePeople_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeletePeople choreography.
     *
     * @param Temboo_Session $session The session that owns this DeletePeople execution.
     * @param _37Signals_Highrise_DeletePeople $choreo The choregraphy object for this execution.
     * @param _37Signals_Highrise_DeletePeople_Inputs|array $inputs (optional) Inputs as _37Signals_Highrise_DeletePeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Highrise_DeletePeople_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Highrise_DeletePeople $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeletePeople execution.
     *
     * @return _37Signals_Highrise_DeletePeople_Results New results object.
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
     * Wraps results in appopriate results class for this DeletePeople execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Highrise_DeletePeople_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Highrise_DeletePeople_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeletePeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_DeletePeople_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeletePeople choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Highrise_DeletePeople_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeletePeople execution.
     *
     * @return string The response from Highrise. The delete people API method returns no XML, so this variable will contain no data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Reorders the items in a specified To-do list.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_ReorderItems extends Temboo_Choreography
{
    /**
     * Reorders the items in a specified To-do list.
     *
     * @param Temboo_Session $session The session that owns this ReorderItems choreography.
     * @return _37Signals_Basecamp_ReorderItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/ReorderItems/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ReorderItems choreography.
     *
     * @param _37Signals_Basecamp_ReorderItems_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_ReorderItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_ReorderItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_ReorderItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReorderItems choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_ReorderItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_ReorderItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReorderItems choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_ReorderItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ReorderItems choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_ReorderItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReorderItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this ReorderItems choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the FirstItemID input for this ReorderItems choreography.
     *
     * @param int $value (integer) The ID number for the first item in the list.
     * @return _37Signals_Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setFirstItemID($value)
    {
        return $this->set('FirstItemID', $value);
    }

    /**
     * Set the value for the ListID input for this ReorderItems choreography.
     *
     * @param int $value (integer) The ID for the To-do list the items of which you're reordering.
     * @return _37Signals_Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Password input for this ReorderItems choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the SecondItemID input for this ReorderItems choreography.
     *
     * @param int $value (optional, integer) The ID number for the second item in the list.
     * @return _37Signals_Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setSecondItemID($value)
    {
        return $this->set('SecondItemID', $value);
    }

    /**
     * Set the value for the ThirdItemID input for this ReorderItems choreography.
     *
     * @param int $value (optional, integer) The ID number for the third item in the list.
     * @return _37Signals_Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setThirdItemID($value)
    {
        return $this->set('ThirdItemID', $value);
    }

    /**
     * Set the value for the Username input for this ReorderItems choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_ReorderItems_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ReorderItems choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_ReorderItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReorderItems choreography.
     *
     * @param Temboo_Session $session The session that owns this ReorderItems execution.
     * @param _37Signals_Basecamp_ReorderItems $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_ReorderItems_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_ReorderItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_ReorderItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_ReorderItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReorderItems execution.
     *
     * @return _37Signals_Basecamp_ReorderItems_Results New results object.
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
     * Wraps results in appopriate results class for this ReorderItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_ReorderItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_ReorderItems_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ReorderItems choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_ReorderItems_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ReorderItems choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_ReorderItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ReorderItems execution.
     *
     * @return string No response is returned from Basecamp for reorder items requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new calendar entry in a specified project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateEntry extends Temboo_Choreography
{
    /**
     * Creates a new calendar entry in a specified project.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry choreography.
     * @return _37Signals_Basecamp_CreateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/CreateEntry/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateEntry choreography.
     *
     * @param _37Signals_Basecamp_CreateEntry_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CreateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_CreateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateEntry choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CreateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_CreateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateEntry choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CreateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreateEntry choreography.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the EndDate input for this CreateEntry choreography.
     *
     * @param string $value (required, date) The date the entry ends, in YYYY-MM-DD format. This is the same as StartDate for one-day entries.
     * @return _37Signals_Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Password input for this CreateEntry choreography.
     *
     * @param string $value (required, string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this CreateEntry choreography.
     *
     * @param int $value (required, integer) The ID for the project in which to create the new entry.
     * @return _37Signals_Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the ResponsibleParty input for this CreateEntry choreography.
     *
     * @param mixed $value (optional, any) The user ID or company ID (preceded by a “c”, as in "c1234") to assign the entry to. Applies only to "Milestone" entry types.
     * @return _37Signals_Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setResponsibleParty($value)
    {
        return $this->set('ResponsibleParty', $value);
    }

    /**
     * Set the value for the StartDate input for this CreateEntry choreography.
     *
     * @param string $value (required, date) The date the entry starts, in YYYY-MM-DD format.
     * @return _37Signals_Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Title input for this CreateEntry choreography.
     *
     * @param string $value (required, string) The title for the calendar entry to create.
     * @return _37Signals_Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Type input for this CreateEntry choreography.
     *
     * @param string $value (required, string) The type of calendar entry to create, either "Milestone" or "CalendarEvent" (the default).
     * @return _37Signals_Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the Username input for this CreateEntry choreography.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_CreateEntry_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateEntry choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry execution.
     * @param _37Signals_Basecamp_CreateEntry $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_CreateEntry_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CreateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_CreateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateEntry execution.
     *
     * @return _37Signals_Basecamp_CreateEntry_Results New results object.
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
     * Wraps results in appopriate results class for this CreateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_CreateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_CreateEntry_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateEntry choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_CreateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateEntry execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves contacts from your Highrise CRM.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_ShowPeople extends Temboo_Choreography
{
    /**
     * Retrieves contacts from your Highrise CRM.
     *
     * @param Temboo_Session $session The session that owns this ShowPeople choreography.
     * @return _37Signals_Highrise_ShowPeople New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Highrise/ShowPeople/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ShowPeople choreography.
     *
     * @param _37Signals_Highrise_ShowPeople_Inputs|array $inputs (optional) Inputs as _37Signals_Highrise_ShowPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Highrise_ShowPeople_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Highrise_ShowPeople_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowPeople choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Highrise_ShowPeople_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Highrise_ShowPeople_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowPeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_ShowPeople_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ShowPeople choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Highrise_ShowPeople_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowPeople input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Highrise_ShowPeople_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Highrise_ShowPeople_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this ShowPeople choreography.
     *
     * @param string $value (required, string) A Highrise account username or API Key.
     * @return _37Signals_Highrise_ShowPeople_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ConactID input for this ShowPeople choreography.
     *
     * @param int $value (required, integer) The ID of the contact you want to retrieve. This is used to construct the URL for the request.
     * @return _37Signals_Highrise_ShowPeople_Inputs For method chaining.
     */
    public function setConactID($value)
    {
        return $this->set('ConactID', $value);
    }

    /**
     * Set the value for the Password input for this ShowPeople choreography.
     *
     * @param string $value (required, string) The Highrise account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Highrise_ShowPeople_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this ShowPeople choreography.
     *
     * @param string $value (required, string) A Highrise account username or API Key.
     * @return _37Signals_Highrise_ShowPeople_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ShowPeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_ShowPeople_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowPeople choreography.
     *
     * @param Temboo_Session $session The session that owns this ShowPeople execution.
     * @param _37Signals_Highrise_ShowPeople $choreo The choregraphy object for this execution.
     * @param _37Signals_Highrise_ShowPeople_Inputs|array $inputs (optional) Inputs as _37Signals_Highrise_ShowPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Highrise_ShowPeople_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Highrise_ShowPeople $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowPeople execution.
     *
     * @return _37Signals_Highrise_ShowPeople_Results New results object.
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
     * Wraps results in appopriate results class for this ShowPeople execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Highrise_ShowPeople_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Highrise_ShowPeople_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ShowPeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_ShowPeople_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ShowPeople choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Highrise_ShowPeople_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ShowPeople execution.
     *
     * @return string (xml) The response from Highrise.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified item from a To-do list.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_DeleteItem extends Temboo_Choreography
{
    /**
     * Deletes a specified item from a To-do list.
     *
     * @param Temboo_Session $session The session that owns this DeleteItem choreography.
     * @return _37Signals_Basecamp_DeleteItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/DeleteItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteItem choreography.
     *
     * @param _37Signals_Basecamp_DeleteItem_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_DeleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_DeleteItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_DeleteItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_DeleteItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_DeleteItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_DeleteItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_DeleteItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_DeleteItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_DeleteItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this DeleteItem choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_DeleteItem_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ItemID input for this DeleteItem choreography.
     *
     * @param int $value (integer) The ID for the list item to delete.
     * @return _37Signals_Basecamp_DeleteItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteItem choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_DeleteItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this DeleteItem choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_DeleteItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeleteItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_DeleteItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteItem choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteItem execution.
     * @param _37Signals_Basecamp_DeleteItem $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_DeleteItem_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_DeleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_DeleteItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_DeleteItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteItem execution.
     *
     * @return _37Signals_Basecamp_DeleteItem_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_DeleteItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_DeleteItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_DeleteItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_DeleteItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteItem execution.
     *
     * @return string No structured response is returned for delete item requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an individual project using a project id that you specify.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetProject extends Temboo_Choreography
{
    /**
     * Retrieves an individual project using a project id that you specify.
     *
     * @param Temboo_Session $session The session that owns this GetProject choreography.
     * @return _37Signals_Basecamp_GetProject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetProject/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetProject choreography.
     *
     * @param _37Signals_Basecamp_GetProject_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetProject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetProject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetProject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetProject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetProject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetProject choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetProject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetProject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetProject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetProject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetProject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetProject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetProject choreography.
     *
     * @param string $value (string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return _37Signals_Basecamp_GetProject_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetProject choreography.
     *
     * @param string $value (string) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetProject_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectId input for this GetProject choreography.
     *
     * @param int $value (integer) The ID for the project you want to retrieve.
     * @return _37Signals_Basecamp_GetProject_Inputs For method chaining.
     */
    public function setProjectId($value)
    {
        return $this->set('ProjectId', $value);
    }

    /**
     * Set the value for the Username input for this GetProject choreography.
     *
     * @param string $value (string) Your Basecamp username or API Key.
     * @return _37Signals_Basecamp_GetProject_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetProject choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetProject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetProject choreography.
     *
     * @param Temboo_Session $session The session that owns this GetProject execution.
     * @param _37Signals_Basecamp_GetProject $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetProject_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetProject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetProject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetProject execution.
     *
     * @return _37Signals_Basecamp_GetProject_Results New results object.
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
     * Wraps results in appopriate results class for this GetProject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetProject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetProject_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetProject choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetProject_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetProject choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetProject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetProject execution.
     *
     * @return string (XML) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all people that the logged in user has permission to see.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetPeopleAcrossProjects extends Temboo_Choreography
{
    /**
     * Retrieves all people that the logged in user has permission to see.
     *
     * @param Temboo_Session $session The session that owns this GetPeopleAcrossProjects choreography.
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetPeopleAcrossProjects/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetPeopleAcrossProjects choreography.
     *
     * @param _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetPeopleAcrossProjects_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPeopleAcrossProjects choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPeopleAcrossProjects choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetPeopleAcrossProjects choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPeopleAcrossProjects input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetPeopleAcrossProjects choreography.
     *
     * @param string $value (string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetPeopleAcrossProjects choreography.
     *
     * @param string $value (string) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetPeopleAcrossProjects choreography.
     *
     * @param string $value (string) Your Basecamp username or API Key.
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetPeopleAcrossProjects choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetPeopleAcrossProjects_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPeopleAcrossProjects choreography.
     *
     * @param Temboo_Session $session The session that owns this GetPeopleAcrossProjects execution.
     * @param _37Signals_Basecamp_GetPeopleAcrossProjects $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetPeopleAcrossProjects_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetPeopleAcrossProjects $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPeopleAcrossProjects execution.
     *
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects_Results New results object.
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
     * Wraps results in appopriate results class for this GetPeopleAcrossProjects execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetPeopleAcrossProjects_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetPeopleAcrossProjects choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetPeopleAcrossProjects_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetPeopleAcrossProjects choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetPeopleAcrossProjects_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetPeopleAcrossProjects execution.
     *
     * @return string (XML) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specific calendar entry in a project you specify.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_DeleteEntry extends Temboo_Choreography
{
    /**
     * Deletes a specific calendar entry in a project you specify.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry choreography.
     * @return _37Signals_Basecamp_DeleteEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/DeleteEntry/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteEntry choreography.
     *
     * @param _37Signals_Basecamp_DeleteEntry_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_DeleteEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_DeleteEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteEntry choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_DeleteEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_DeleteEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_DeleteEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteEntry choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_DeleteEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this DeleteEntry choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the EntryID input for this DeleteEntry choreography.
     *
     * @param int $value (integer) The ID for the calendar entry to delete.
     * @return _37Signals_Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteEntry choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this DeleteEntry choreography.
     *
     * @param int $value (integer) The ID for the project from which to delete the calendar entry.
     * @return _37Signals_Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this DeleteEntry choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_DeleteEntry_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeleteEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_DeleteEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteEntry choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry execution.
     * @param _37Signals_Basecamp_DeleteEntry $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_DeleteEntry_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_DeleteEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_DeleteEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteEntry execution.
     *
     * @return _37Signals_Basecamp_DeleteEntry_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_DeleteEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_DeleteEntry_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_DeleteEntry_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteEntry choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_DeleteEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteEntry execution.
     *
     * @return string Basecamp returns no content for delete entry requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of To-do records that are in the given project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetListsInProject extends Temboo_Choreography
{
    /**
     * Retrieves a list of To-do records that are in the given project.
     *
     * @param Temboo_Session $session The session that owns this GetListsInProject choreography.
     * @return _37Signals_Basecamp_GetListsInProject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetListsInProject/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetListsInProject choreography.
     *
     * @param _37Signals_Basecamp_GetListsInProject_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetListsInProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetListsInProject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetListsInProject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetListsInProject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetListsInProject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetListsInProject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetListsInProject choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetListsInProject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetListsInProject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetListsInProject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetListsInProject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetListsInProject choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Filter input for this GetListsInProject choreography.
     *
     * @param string $value (optional, string) Specify “pending” to return To-Dos with uncompleted items, or “finished” to return To-Dos with no uncompleted items. Defaults to all lists.
     * @return _37Signals_Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Password input for this GetListsInProject choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetListsInProject choreography.
     *
     * @param int $value (integer) The ID for the project that contains the To-Dos to retrieve.
     * @return _37Signals_Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetListsInProject choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_GetListsInProject_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetListsInProject choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetListsInProject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetListsInProject choreography.
     *
     * @param Temboo_Session $session The session that owns this GetListsInProject execution.
     * @param _37Signals_Basecamp_GetListsInProject $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetListsInProject_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetListsInProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetListsInProject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetListsInProject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetListsInProject execution.
     *
     * @return _37Signals_Basecamp_GetListsInProject_Results New results object.
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
     * Wraps results in appopriate results class for this GetListsInProject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetListsInProject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetListsInProject_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetListsInProject choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetListsInProject_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetListsInProject choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetListsInProject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetListsInProject execution.
     *
     * @return string (XML) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all calendar entries from a specified project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllEntries extends Temboo_Choreography
{
    /**
     * Retrieves all calendar entries from a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetAllEntries choreography.
     * @return _37Signals_Basecamp_GetAllEntries New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetAllEntries/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAllEntries choreography.
     *
     * @param _37Signals_Basecamp_GetAllEntries_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetAllEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetAllEntries_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetAllEntries_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllEntries choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetAllEntries_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetAllEntries_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllEntries choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllEntries_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAllEntries choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetAllEntries_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllEntries input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetAllEntries_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetAllEntries_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetAllEntries choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_GetAllEntries_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetAllEntries choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetAllEntries_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetAllEntries choreography.
     *
     * @param int $value (integer) The ID for the project from which to retrieve all calendar entries.
     * @return _37Signals_Basecamp_GetAllEntries_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetAllEntries choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_GetAllEntries_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetAllEntries choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllEntries_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllEntries choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAllEntries execution.
     * @param _37Signals_Basecamp_GetAllEntries $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetAllEntries_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetAllEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetAllEntries_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetAllEntries $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllEntries execution.
     *
     * @return _37Signals_Basecamp_GetAllEntries_Results New results object.
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
     * Wraps results in appopriate results class for this GetAllEntries execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetAllEntries_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetAllEntries_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAllEntries choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllEntries_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAllEntries choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetAllEntries_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAllEntries execution.
     *
     * @return string (XML) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Marks a specific calendar entry as uncompleted.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UncompleteEntry extends Temboo_Choreography
{
    /**
     * Marks a specific calendar entry as uncompleted.
     *
     * @param Temboo_Session $session The session that owns this UncompleteEntry choreography.
     * @return _37Signals_Basecamp_UncompleteEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/UncompleteEntry/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UncompleteEntry choreography.
     *
     * @param _37Signals_Basecamp_UncompleteEntry_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_UncompleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_UncompleteEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_UncompleteEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UncompleteEntry choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_UncompleteEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_UncompleteEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UncompleteEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UncompleteEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UncompleteEntry choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_UncompleteEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UncompleteEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this UncompleteEntry choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the EntryID input for this UncompleteEntry choreography.
     *
     * @param int $value (integer) The ID for the calendar entry to mark as uncompleted.
     * @return _37Signals_Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }

    /**
     * Set the value for the Password input for this UncompleteEntry choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this UncompleteEntry choreography.
     *
     * @param int $value (integer) The ID for the project with the calendar entry to mark as uncompleted.
     * @return _37Signals_Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this UncompleteEntry choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_UncompleteEntry_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UncompleteEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UncompleteEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UncompleteEntry choreography.
     *
     * @param Temboo_Session $session The session that owns this UncompleteEntry execution.
     * @param _37Signals_Basecamp_UncompleteEntry $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_UncompleteEntry_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_UncompleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_UncompleteEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_UncompleteEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UncompleteEntry execution.
     *
     * @return _37Signals_Basecamp_UncompleteEntry_Results New results object.
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
     * Wraps results in appopriate results class for this UncompleteEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_UncompleteEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_UncompleteEntry_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UncompleteEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UncompleteEntry_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UncompleteEntry choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_UncompleteEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UncompleteEntry execution.
     *
     * @return string (XML) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a calendar event or milestone in a project you specify. 
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UpdateEntry extends Temboo_Choreography
{
    /**
     * Updates a calendar event or milestone in a project you specify. 
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry choreography.
     * @return _37Signals_Basecamp_UpdateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/UpdateEntry/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateEntry choreography.
     *
     * @param _37Signals_Basecamp_UpdateEntry_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_UpdateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_UpdateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateEntry choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_UpdateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UpdateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateEntry choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this UpdateEntry choreography.
     *
     * @param string $value (required, string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the EndDate input for this UpdateEntry choreography.
     *
     * @param string $value (required, date) The new end date for the updated entry, in the format YYYY-MM-DD.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the EntryID input for this UpdateEntry choreography.
     *
     * @param int $value (required, integer) The ID for the calendar entry to update.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }

    /**
     * Set the value for the Password input for this UpdateEntry choreography.
     *
     * @param string $value (required, string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this UpdateEntry choreography.
     *
     * @param int $value (required, integer) The ID of the project with the calendar entry to update.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the ResponsibleParty input for this UpdateEntry choreography.
     *
     * @param mixed $value (optional, any) The user ID or company ID (preceded by a “c”, as in "c1234") to reassign the entry to. Applies only to "Milestone" entry types.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setResponsibleParty($value)
    {
        return $this->set('ResponsibleParty', $value);
    }

    /**
     * Set the value for the StartDate input for this UpdateEntry choreography.
     *
     * @param string $value (optional, date) The new start date for the updated entry, in the format YYYY-MM-DD.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Title input for this UpdateEntry choreography.
     *
     * @param string $value (optional, string) The new title for the updated entry.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Type input for this UpdateEntry choreography.
     *
     * @param string $value (optional, string) The new type for the updated entry, either "CalendarEvent" (the default) or "Milestone".
     * @return _37Signals_Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the Username input for this UpdateEntry choreography.
     *
     * @param string $value (required, string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_UpdateEntry_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UpdateEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UpdateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateEntry choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry execution.
     * @param _37Signals_Basecamp_UpdateEntry $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_UpdateEntry_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_UpdateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_UpdateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateEntry execution.
     *
     * @return _37Signals_Basecamp_UpdateEntry_Results New results object.
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
     * Wraps results in appopriate results class for this UpdateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_UpdateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_UpdateEntry_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UpdateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateEntry choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_UpdateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateEntry execution.
     *
     * @return string (xml) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "TemplateOutput" output from this UpdateEntry execution.
     *
     * @return string The request created from the input template.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTemplateOutput()
    {
        return $this->get('TemplateOutput');
    }
}

/**
 * Creates a new item for a specified To-do list.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateItem extends Temboo_Choreography
{
    /**
     * Creates a new item for a specified To-do list.
     *
     * @param Temboo_Session $session The session that owns this CreateItem choreography.
     * @return _37Signals_Basecamp_CreateItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/CreateItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateItem choreography.
     *
     * @param _37Signals_Basecamp_CreateItem_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CreateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CreateItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_CreateItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CreateItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_CreateItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CreateItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_CreateItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreateItem choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Content input for this CreateItem choreography.
     *
     * @param string $value (string) The text of the item to create.
     * @return _37Signals_Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setContent($value)
    {
        return $this->set('Content', $value);
    }

    /**
     * Set the value for the ListID input for this CreateItem choreography.
     *
     * @param int $value (integer) The ID for the list in which to create the new item.
     * @return _37Signals_Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Password input for this CreateItem choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponsibleParty input for this CreateItem choreography.
     *
     * @param int $value (optional, integer) The user ID or company ID  (preceded by a “c”, as in "c1234") to assign the item to. Defaults to unassigned If left blank.
     * @return _37Signals_Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setResponsibleParty($value)
    {
        return $this->set('ResponsibleParty', $value);
    }

    /**
     * Set the value for the Username input for this CreateItem choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_CreateItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateItem choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateItem execution.
     * @param _37Signals_Basecamp_CreateItem $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_CreateItem_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CreateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CreateItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_CreateItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateItem execution.
     *
     * @return _37Signals_Basecamp_CreateItem_Results New results object.
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
     * Wraps results in appopriate results class for this CreateItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_CreateItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_CreateItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_CreateItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateItem execution.
     *
     * @return string No structured response is returned from Basecamp for new item requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified To-do list record 
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UpdateList extends Temboo_Choreography
{
    /**
     * Updates a specified To-do list record 
     *
     * @param Temboo_Session $session The session that owns this UpdateList choreography.
     * @return _37Signals_Basecamp_UpdateList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/UpdateList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateList choreography.
     *
     * @param _37Signals_Basecamp_UpdateList_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_UpdateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_UpdateList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_UpdateList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_UpdateList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_UpdateList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateList choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UpdateList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_UpdateList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_UpdateList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this UpdateList choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Description input for this UpdateList choreography.
     *
     * @param string $value (optional, string) The new description for the list.
     * @return _37Signals_Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ListID input for this UpdateList choreography.
     *
     * @param int $value (integer) The ID for the list to update.
     * @return _37Signals_Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the MilestoneID input for this UpdateList choreography.
     *
     * @param int $value (optional, integer) The ID of an existing milestone to add to the To-Do list.
     * @return _37Signals_Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setMilestoneID($value)
    {
        return $this->set('MilestoneID', $value);
    }

    /**
     * Set the value for the Name input for this UpdateList choreography.
     *
     * @param string $value (optional, string) The new name for the list.
     * @return _37Signals_Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Password input for this UpdateList choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this UpdateList choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_UpdateList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UpdateList choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UpdateList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateList choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateList execution.
     * @param _37Signals_Basecamp_UpdateList $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_UpdateList_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_UpdateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_UpdateList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_UpdateList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateList execution.
     *
     * @return _37Signals_Basecamp_UpdateList_Results New results object.
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
     * Wraps results in appopriate results class for this UpdateList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_UpdateList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_UpdateList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateList choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UpdateList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_UpdateList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateList execution.
     *
     * @return string No response is returned from Basecamp for update requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a single, specified item in a To-do list.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetItem extends Temboo_Choreography
{
    /**
     * Retrieves a single, specified item in a To-do list.
     *
     * @param Temboo_Session $session The session that owns this GetItem choreography.
     * @return _37Signals_Basecamp_GetItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetItem choreography.
     *
     * @param _37Signals_Basecamp_GetItem_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetItem choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_GetItem_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ItemID input for this GetItem choreography.
     *
     * @param int $value (integer) The ID of the item to return.
     * @return _37Signals_Basecamp_GetItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the Password input for this GetItem choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetItem choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_GetItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetItem choreography.
     *
     * @param Temboo_Session $session The session that owns this GetItem execution.
     * @param _37Signals_Basecamp_GetItem $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetItem_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetItem execution.
     *
     * @return _37Signals_Basecamp_GetItem_Results New results object.
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
     * Wraps results in appopriate results class for this GetItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetItem execution.
     *
     * @return string (XML) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a count of all projects sorted by project status.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_ProjectCounts extends Temboo_Choreography
{
    /**
     * Retrieves a count of all projects sorted by project status.
     *
     * @param Temboo_Session $session The session that owns this ProjectCounts choreography.
     * @return _37Signals_Basecamp_ProjectCounts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/ProjectCounts/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ProjectCounts choreography.
     *
     * @param _37Signals_Basecamp_ProjectCounts_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_ProjectCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_ProjectCounts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_ProjectCounts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ProjectCounts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_ProjectCounts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_ProjectCounts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ProjectCounts choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_ProjectCounts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ProjectCounts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_ProjectCounts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ProjectCounts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_ProjectCounts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_ProjectCounts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this ProjectCounts choreography.
     *
     * @param string $value (string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return _37Signals_Basecamp_ProjectCounts_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this ProjectCounts choreography.
     *
     * @param string $value (string) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_ProjectCounts_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this ProjectCounts choreography.
     *
     * @param string $value (string) Your Basecamp username or API Key.
     * @return _37Signals_Basecamp_ProjectCounts_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ProjectCounts choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_ProjectCounts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ProjectCounts choreography.
     *
     * @param Temboo_Session $session The session that owns this ProjectCounts execution.
     * @param _37Signals_Basecamp_ProjectCounts $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_ProjectCounts_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_ProjectCounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_ProjectCounts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_ProjectCounts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ProjectCounts execution.
     *
     * @return _37Signals_Basecamp_ProjectCounts_Results New results object.
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
     * Wraps results in appopriate results class for this ProjectCounts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_ProjectCounts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_ProjectCounts_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ProjectCounts choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_ProjectCounts_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ProjectCounts choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_ProjectCounts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ProjectCounts execution.
     *
     * @return string (XML) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all To-do lists assigned to a specified user or company.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllLists extends Temboo_Choreography
{
    /**
     * Retrieves all To-do lists assigned to a specified user or company.
     *
     * @param Temboo_Session $session The session that owns this GetAllLists choreography.
     * @return _37Signals_Basecamp_GetAllLists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetAllLists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAllLists choreography.
     *
     * @param _37Signals_Basecamp_GetAllLists_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetAllLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetAllLists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetAllLists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllLists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetAllLists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetAllLists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllLists choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllLists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAllLists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetAllLists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllLists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetAllLists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetAllLists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetAllLists choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_GetAllLists_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetAllLists choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetAllLists_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponsibleParty input for this GetAllLists choreography.
     *
     * @param int $value (optional, integer) The user ID or company ID  (preceded by a “c”, as in "c1234") the To-Do lists are assigned to. Defaults to unassigned To-Dos If left blank.
     * @return _37Signals_Basecamp_GetAllLists_Inputs For method chaining.
     */
    public function setResponsibleParty($value)
    {
        return $this->set('ResponsibleParty', $value);
    }

    /**
     * Set the value for the Username input for this GetAllLists choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_GetAllLists_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetAllLists choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllLists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllLists choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAllLists execution.
     * @param _37Signals_Basecamp_GetAllLists $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetAllLists_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetAllLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetAllLists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetAllLists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllLists execution.
     *
     * @return _37Signals_Basecamp_GetAllLists_Results New results object.
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
     * Wraps results in appopriate results class for this GetAllLists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetAllLists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetAllLists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAllLists choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllLists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAllLists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetAllLists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAllLists execution.
     *
     * @return string (XML) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a single calendar entry in a specified project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetEntry extends Temboo_Choreography
{
    /**
     * Retrieves a single calendar entry in a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetEntry choreography.
     * @return _37Signals_Basecamp_GetEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetEntry/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetEntry choreography.
     *
     * @param _37Signals_Basecamp_GetEntry_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEntry choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetEntry choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetEntry choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_GetEntry_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the EntryID input for this GetEntry choreography.
     *
     * @param int $value (integer) The ID for the calendar entry to retrieve.
     * @return _37Signals_Basecamp_GetEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }

    /**
     * Set the value for the Password input for this GetEntry choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetEntry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetEntry choreography.
     *
     * @param int $value (integer) The ID for the project from which to retrieve the calendar entry.
     * @return _37Signals_Basecamp_GetEntry_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetEntry choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_GetEntry_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEntry choreography.
     *
     * @param Temboo_Session $session The session that owns this GetEntry execution.
     * @param _37Signals_Basecamp_GetEntry $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetEntry_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEntry execution.
     *
     * @return _37Signals_Basecamp_GetEntry_Results New results object.
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
     * Wraps results in appopriate results class for this GetEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetEntry_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetEntry_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetEntry choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetEntry execution.
     *
     * @return string (XML) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new item for a specified To-do list.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UpdateItem extends Temboo_Choreography
{
    /**
     * Creates a new item for a specified To-do list.
     *
     * @param Temboo_Session $session The session that owns this UpdateItem choreography.
     * @return _37Signals_Basecamp_UpdateItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/UpdateItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateItem choreography.
     *
     * @param _37Signals_Basecamp_UpdateItem_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_UpdateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_UpdateItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_UpdateItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_UpdateItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_UpdateItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UpdateItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_UpdateItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this UpdateItem choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Content input for this UpdateItem choreography.
     *
     * @param string $value (string) The text of the updated item.
     * @return _37Signals_Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setContent($value)
    {
        return $this->set('Content', $value);
    }

    /**
     * Set the value for the ItemID input for this UpdateItem choreography.
     *
     * @param int $value (integer) The ID for the item to update.
     * @return _37Signals_Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the Password input for this UpdateItem choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponsibleParty input for this UpdateItem choreography.
     *
     * @param int $value (optional, integer) The user ID or company ID  (preceded by a “c”, as in "c1234") to re-assign the item to when updated. Defaults to unassigned If left blank.
     * @return _37Signals_Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setResponsibleParty($value)
    {
        return $this->set('ResponsibleParty', $value);
    }

    /**
     * Set the value for the Username input for this UpdateItem choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_UpdateItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UpdateItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UpdateItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateItem choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateItem execution.
     * @param _37Signals_Basecamp_UpdateItem $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_UpdateItem_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_UpdateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_UpdateItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_UpdateItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateItem execution.
     *
     * @return _37Signals_Basecamp_UpdateItem_Results New results object.
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
     * Wraps results in appopriate results class for this UpdateItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_UpdateItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_UpdateItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UpdateItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_UpdateItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateItem execution.
     *
     * @return string No structured response is returned from Basecamp for new item requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new Basecamp project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateProject extends Temboo_Choreography
{
    /**
     * Creates a new Basecamp project.
     *
     * @param Temboo_Session $session The session that owns this CreateProject choreography.
     * @return _37Signals_Basecamp_CreateProject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/CreateProject/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateProject choreography.
     *
     * @param _37Signals_Basecamp_CreateProject_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CreateProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CreateProject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_CreateProject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateProject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CreateProject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_CreateProject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateProject choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateProject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateProject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CreateProject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateProject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_CreateProject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_CreateProject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreateProject choreography.
     *
     * @param string $value (string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return _37Signals_Basecamp_CreateProject_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this CreateProject choreography.
     *
     * @param string $value (string) Your Basecamp password. You can use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_CreateProject_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectName input for this CreateProject choreography.
     *
     * @param string $value (string) The name for the project you want to create.
     * @return _37Signals_Basecamp_CreateProject_Inputs For method chaining.
     */
    public function setProjectName($value)
    {
        return $this->set('ProjectName', $value);
    }

    /**
     * Set the value for the Username input for this CreateProject choreography.
     *
     * @param string $value (string) Your Basecamp username or API Key.
     * @return _37Signals_Basecamp_CreateProject_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateProject choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateProject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateProject choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateProject execution.
     * @param _37Signals_Basecamp_CreateProject $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_CreateProject_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CreateProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CreateProject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_CreateProject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateProject execution.
     *
     * @return _37Signals_Basecamp_CreateProject_Results New results object.
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
     * Wraps results in appopriate results class for this CreateProject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_CreateProject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_CreateProject_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateProject choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateProject_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateProject choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_CreateProject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateProject execution.
     *
     * @return string The response from Basecamp. Note that a successful request returns a null result in this output variable.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all calendar events from a specified project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllEvents extends Temboo_Choreography
{
    /**
     * Retrieves all calendar events from a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetAllEvents choreography.
     * @return _37Signals_Basecamp_GetAllEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetAllEvents/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAllEvents choreography.
     *
     * @param _37Signals_Basecamp_GetAllEvents_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetAllEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetAllEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetAllEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetAllEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetAllEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllEvents choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAllEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetAllEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetAllEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetAllEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetAllEvents choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_GetAllEvents_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetAllEvents choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetAllEvents_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetAllEvents choreography.
     *
     * @param int $value (integer) The ID for the project from which to retrieve all calendar events.
     * @return _37Signals_Basecamp_GetAllEvents_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetAllEvents choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_GetAllEvents_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetAllEvents choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllEvents choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAllEvents execution.
     * @param _37Signals_Basecamp_GetAllEvents $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetAllEvents_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetAllEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetAllEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetAllEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllEvents execution.
     *
     * @return _37Signals_Basecamp_GetAllEvents_Results New results object.
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
     * Wraps results in appopriate results class for this GetAllEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetAllEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetAllEvents_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAllEvents choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllEvents_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAllEvents choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetAllEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAllEvents execution.
     *
     * @return string (XML) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified To-do list from a project
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_DeleteList extends Temboo_Choreography
{
    /**
     * Deletes a specified To-do list from a project
     *
     * @param Temboo_Session $session The session that owns this DeleteList choreography.
     * @return _37Signals_Basecamp_DeleteList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/DeleteList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteList choreography.
     *
     * @param _37Signals_Basecamp_DeleteList_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_DeleteList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_DeleteList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_DeleteList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_DeleteList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_DeleteList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteList choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_DeleteList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_DeleteList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_DeleteList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_DeleteList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this DeleteList choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_DeleteList_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ListID input for this DeleteList choreography.
     *
     * @param int $value (integer) The ID for the To-Do list to delete.
     * @return _37Signals_Basecamp_DeleteList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteList choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_DeleteList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this DeleteList choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_DeleteList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeleteList choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_DeleteList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteList choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteList execution.
     * @param _37Signals_Basecamp_DeleteList $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_DeleteList_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_DeleteList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_DeleteList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_DeleteList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteList execution.
     *
     * @return _37Signals_Basecamp_DeleteList_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_DeleteList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_DeleteList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteList choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_DeleteList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_DeleteList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteList execution.
     *
     * @return string No structured response is returned for delete list requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lets you search your Highrise CRM by specifying an email search criteria.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_SearchPeople extends Temboo_Choreography
{
    /**
     * Lets you search your Highrise CRM by specifying an email search criteria.
     *
     * @param Temboo_Session $session The session that owns this SearchPeople choreography.
     * @return _37Signals_Highrise_SearchPeople New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Highrise/SearchPeople/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchPeople choreography.
     *
     * @param _37Signals_Highrise_SearchPeople_Inputs|array $inputs (optional) Inputs as _37Signals_Highrise_SearchPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Highrise_SearchPeople_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Highrise_SearchPeople_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchPeople choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Highrise_SearchPeople_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Highrise_SearchPeople_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchPeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_SearchPeople_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchPeople choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Highrise_SearchPeople_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchPeople input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Highrise_SearchPeople_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this SearchPeople choreography.
     *
     * @param string $value (required, string) A valid Highrise account name. This is the first part of the account's URL.
     * @return _37Signals_Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the City input for this SearchPeople choreography.
     *
     * @param string $value (optional, string) Allows you to search by the city field in Highrise.
     * @return _37Signals_Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Country input for this SearchPeople choreography.
     *
     * @param string $value (optional, string) Allows you to search by the country field in Highrise.
     * @return _37Signals_Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the EmailAddress input for this SearchPeople choreography.
     *
     * @param string $value (optional, string) Allows you to search by the email address field in Highrise.
     * @return _37Signals_Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the Password input for this SearchPeople choreography.
     *
     * @param string $value (required, string) The Highrise account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Phone input for this SearchPeople choreography.
     *
     * @param string $value (optional, string) Allows you to search by the phone field in Highrise.
     * @return _37Signals_Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setPhone($value)
    {
        return $this->set('Phone', $value);
    }

    /**
     * Set the value for the State input for this SearchPeople choreography.
     *
     * @param string $value (optional, string) Allows you to search by the state field in Highrise.
     * @return _37Signals_Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Username input for this SearchPeople choreography.
     *
     * @param string $value (required, string) A Highrise account username or API Key.
     * @return _37Signals_Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the Zip input for this SearchPeople choreography.
     *
     * @param string $value (optional, string) Allows you to search by the ZIP field in Highrise.
     * @return _37Signals_Highrise_SearchPeople_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the SearchPeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_SearchPeople_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchPeople choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchPeople execution.
     * @param _37Signals_Highrise_SearchPeople $choreo The choregraphy object for this execution.
     * @param _37Signals_Highrise_SearchPeople_Inputs|array $inputs (optional) Inputs as _37Signals_Highrise_SearchPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Highrise_SearchPeople_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Highrise_SearchPeople $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchPeople execution.
     *
     * @return _37Signals_Highrise_SearchPeople_Results New results object.
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
     * Wraps results in appopriate results class for this SearchPeople execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Highrise_SearchPeople_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Highrise_SearchPeople_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchPeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_SearchPeople_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchPeople choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Highrise_SearchPeople_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchPeople execution.
     *
     * @return string (xml) The response from Highrise.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of messages associated with a specified project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetMessages extends Temboo_Choreography
{
    /**
     * Retrieves a list of messages associated with a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetMessages choreography.
     * @return _37Signals_Basecamp_GetMessages New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetMessages/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetMessages choreography.
     *
     * @param _37Signals_Basecamp_GetMessages_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetMessages_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetMessages_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMessages choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetMessages_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetMessages_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMessages choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetMessages_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetMessages choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetMessages_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMessages input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetMessages_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetMessages_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetMessages choreography.
     *
     * @param string $value (string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return _37Signals_Basecamp_GetMessages_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetMessages choreography.
     *
     * @param string $value (string) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetMessages_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetMessages choreography.
     *
     * @param int $value (integer) The ID for the project associated with the messages you want to retrieve.
     * @return _37Signals_Basecamp_GetMessages_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetMessages choreography.
     *
     * @param string $value (string) Your Basecamp username or API Key.
     * @return _37Signals_Basecamp_GetMessages_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetMessages choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetMessages_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMessages choreography.
     *
     * @param Temboo_Session $session The session that owns this GetMessages execution.
     * @param _37Signals_Basecamp_GetMessages $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetMessages_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetMessages_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetMessages $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMessages execution.
     *
     * @return _37Signals_Basecamp_GetMessages_Results New results object.
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
     * Wraps results in appopriate results class for this GetMessages execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetMessages_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetMessages_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetMessages choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetMessages_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetMessages choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetMessages_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetMessages execution.
     *
     * @return string (XML) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new message under a specified project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateMessage extends Temboo_Choreography
{
    /**
     * Creates a new message under a specified project.
     *
     * @param Temboo_Session $session The session that owns this CreateMessage choreography.
     * @return _37Signals_Basecamp_CreateMessage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/CreateMessage/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateMessage choreography.
     *
     * @param _37Signals_Basecamp_CreateMessage_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CreateMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CreateMessage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_CreateMessage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateMessage choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CreateMessage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_CreateMessage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateMessage choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateMessage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateMessage choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CreateMessage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateMessage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreateMessage choreography.
     *
     * @param string $value (string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return _37Signals_Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Body input for this CreateMessage choreography.
     *
     * @param string $value (string) The body of the message you're creating.
     * @return _37Signals_Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the Password input for this CreateMessage choreography.
     *
     * @param string $value (string) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectId input for this CreateMessage choreography.
     *
     * @param int $value (integer) The ID of the project that the message will be created under.
     * @return _37Signals_Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setProjectId($value)
    {
        return $this->set('ProjectId', $value);
    }

    /**
     * Set the value for the Title input for this CreateMessage choreography.
     *
     * @param string $value (string) The title of the message you'e creating.
     * @return _37Signals_Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Username input for this CreateMessage choreography.
     *
     * @param string $value (string) Your Basecamp username or API Key.
     * @return _37Signals_Basecamp_CreateMessage_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateMessage choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateMessage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateMessage choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateMessage execution.
     * @param _37Signals_Basecamp_CreateMessage $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_CreateMessage_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CreateMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CreateMessage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_CreateMessage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateMessage execution.
     *
     * @return _37Signals_Basecamp_CreateMessage_Results New results object.
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
     * Wraps results in appopriate results class for this CreateMessage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_CreateMessage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_CreateMessage_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateMessage choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CreateMessage_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateMessage choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_CreateMessage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateMessage execution.
     *
     * @return string The response from Basecamp. Note that a successful request returns a null result in this output variable.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new contact record in your Highrise CRM.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_CreatePeople extends Temboo_Choreography
{
    /**
     * Creates a new contact record in your Highrise CRM.
     *
     * @param Temboo_Session $session The session that owns this CreatePeople choreography.
     * @return _37Signals_Highrise_CreatePeople New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Highrise/CreatePeople/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreatePeople choreography.
     *
     * @param _37Signals_Highrise_CreatePeople_Inputs|array $inputs (optional) Inputs as _37Signals_Highrise_CreatePeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Highrise_CreatePeople_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Highrise_CreatePeople_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreatePeople choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Highrise_CreatePeople_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Highrise_CreatePeople_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreatePeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_CreatePeople_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreatePeople choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Highrise_CreatePeople_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreatePeople input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreatePeople choreography.
     *
     * @param string $value (required, string) A valid Highrise account name. This is the first part of the account's URL.
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Background input for this CreatePeople choreography.
     *
     * @param string $value (optional, string) Corresponds to the background field in Highrise
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setBackground($value)
    {
        return $this->set('Background', $value);
    }

    /**
     * Set the value for the CompanyName input for this CreatePeople choreography.
     *
     * @param string $value (optional, string) Corresponds to the company name field in Highrise.
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setCompanyName($value)
    {
        return $this->set('CompanyName', $value);
    }

    /**
     * Set the value for the EmailAddress input for this CreatePeople choreography.
     *
     * @param string $value (optional, string) Corresponds to the email address field in Highrise.
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the FirstName input for this CreatePeople choreography.
     *
     * @param string $value (required, string) Corresponds to the first name field in Highrise.
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the HomePhone input for this CreatePeople choreography.
     *
     * @param string $value (optional, string) Corresponds to the home phone field in Highrise.
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setHomePhone($value)
    {
        return $this->set('HomePhone', $value);
    }

    /**
     * Set the value for the LastName input for this CreatePeople choreography.
     *
     * @param string $value (optional, string) Corresponds to the last name field in Highrise.
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the Password input for this CreatePeople choreography.
     *
     * @param string $value (required, string) The Highrise account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Title input for this CreatePeople choreography.
     *
     * @param string $value (optional, string) Corresponds to the title field in Highrise.
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Username input for this CreatePeople choreography.
     *
     * @param string $value (required, string) A Highrise account username or API Key.
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the WorkPhone input for this CreatePeople choreography.
     *
     * @param string $value (optional, string) Corresponds to the work phone field in Highrise.
     * @return _37Signals_Highrise_CreatePeople_Inputs For method chaining.
     */
    public function setWorkPhone($value)
    {
        return $this->set('WorkPhone', $value);
    }
}


/**
 * Execution object for the CreatePeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_CreatePeople_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreatePeople choreography.
     *
     * @param Temboo_Session $session The session that owns this CreatePeople execution.
     * @param _37Signals_Highrise_CreatePeople $choreo The choregraphy object for this execution.
     * @param _37Signals_Highrise_CreatePeople_Inputs|array $inputs (optional) Inputs as _37Signals_Highrise_CreatePeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Highrise_CreatePeople_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Highrise_CreatePeople $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreatePeople execution.
     *
     * @return _37Signals_Highrise_CreatePeople_Results New results object.
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
     * Wraps results in appopriate results class for this CreatePeople execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Highrise_CreatePeople_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Highrise_CreatePeople_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreatePeople choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Highrise_CreatePeople_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreatePeople choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Highrise_CreatePeople_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreatePeople execution.
     *
     * @return string (xml) The response from Highrise.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to reorder To-do lists in a specified project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_ReorderLists extends Temboo_Choreography
{
    /**
     * Allows you to reorder To-do lists in a specified project.
     *
     * @param Temboo_Session $session The session that owns this ReorderLists choreography.
     * @return _37Signals_Basecamp_ReorderLists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/ReorderLists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ReorderLists choreography.
     *
     * @param _37Signals_Basecamp_ReorderLists_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_ReorderLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_ReorderLists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_ReorderLists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReorderLists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_ReorderLists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_ReorderLists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReorderLists choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_ReorderLists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ReorderLists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_ReorderLists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReorderLists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this ReorderLists choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the FirstListID input for this ReorderLists choreography.
     *
     * @param int $value (integer) The ID number for the project's first To-Do list.
     * @return _37Signals_Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setFirstListID($value)
    {
        return $this->set('FirstListID', $value);
    }

    /**
     * Set the value for the Password input for this ReorderLists choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this ReorderLists choreography.
     *
     * @param int $value (integer) The ID for the project associated with the to-do lists that you are reordering.
     * @return _37Signals_Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the SecondListID input for this ReorderLists choreography.
     *
     * @param int $value (optional, integer) The ID number for the project's second To-Do list.
     * @return _37Signals_Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setSecondListID($value)
    {
        return $this->set('SecondListID', $value);
    }

    /**
     * Set the value for the ThirdListID input for this ReorderLists choreography.
     *
     * @param int $value (optional, integer) The ID number for the project's third To-Do list.
     * @return _37Signals_Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setThirdListID($value)
    {
        return $this->set('ThirdListID', $value);
    }

    /**
     * Set the value for the Username input for this ReorderLists choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_ReorderLists_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ReorderLists choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_ReorderLists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReorderLists choreography.
     *
     * @param Temboo_Session $session The session that owns this ReorderLists execution.
     * @param _37Signals_Basecamp_ReorderLists $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_ReorderLists_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_ReorderLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_ReorderLists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_ReorderLists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReorderLists execution.
     *
     * @return _37Signals_Basecamp_ReorderLists_Results New results object.
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
     * Wraps results in appopriate results class for this ReorderLists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_ReorderLists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_ReorderLists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ReorderLists choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_ReorderLists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ReorderLists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_ReorderLists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ReorderLists execution.
     *
     * @return string No response is returned from Basecamp for update requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Marks a single, specified item in a To-do list as complete.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CompleteItem extends Temboo_Choreography
{
    /**
     * Marks a single, specified item in a To-do list as complete.
     *
     * @param Temboo_Session $session The session that owns this CompleteItem choreography.
     * @return _37Signals_Basecamp_CompleteItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/CompleteItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CompleteItem choreography.
     *
     * @param _37Signals_Basecamp_CompleteItem_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CompleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CompleteItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_CompleteItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompleteItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CompleteItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_CompleteItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompleteItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CompleteItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CompleteItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CompleteItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompleteItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_CompleteItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_CompleteItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CompleteItem choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_CompleteItem_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ItemID input for this CompleteItem choreography.
     *
     * @param int $value (integer) The ID of the item to mark as complete.
     * @return _37Signals_Basecamp_CompleteItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the Password input for this CompleteItem choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_CompleteItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this CompleteItem choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_CompleteItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CompleteItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CompleteItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompleteItem choreography.
     *
     * @param Temboo_Session $session The session that owns this CompleteItem execution.
     * @param _37Signals_Basecamp_CompleteItem $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_CompleteItem_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CompleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CompleteItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_CompleteItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompleteItem execution.
     *
     * @return _37Signals_Basecamp_CompleteItem_Results New results object.
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
     * Wraps results in appopriate results class for this CompleteItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_CompleteItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_CompleteItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CompleteItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CompleteItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CompleteItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_CompleteItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CompleteItem execution.
     *
     * @return string There is no structrued response from complete item requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all milestones for a specified project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllMilestones extends Temboo_Choreography
{
    /**
     * Retrieves all milestones for a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetAllMilestones choreography.
     * @return _37Signals_Basecamp_GetAllMilestones New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetAllMilestones/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAllMilestones choreography.
     *
     * @param _37Signals_Basecamp_GetAllMilestones_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetAllMilestones_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetAllMilestones_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetAllMilestones_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllMilestones choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetAllMilestones_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetAllMilestones_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllMilestones choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllMilestones_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAllMilestones choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetAllMilestones_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllMilestones input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetAllMilestones_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetAllMilestones_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetAllMilestones choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_GetAllMilestones_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetAllMilestones choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetAllMilestones_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this GetAllMilestones choreography.
     *
     * @param int $value (integer) The ID for the project from which to retrieve all milestones.
     * @return _37Signals_Basecamp_GetAllMilestones_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this GetAllMilestones choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_GetAllMilestones_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetAllMilestones choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllMilestones_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllMilestones choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAllMilestones execution.
     * @param _37Signals_Basecamp_GetAllMilestones $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetAllMilestones_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetAllMilestones_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetAllMilestones_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetAllMilestones $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllMilestones execution.
     *
     * @return _37Signals_Basecamp_GetAllMilestones_Results New results object.
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
     * Wraps results in appopriate results class for this GetAllMilestones execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetAllMilestones_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetAllMilestones_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAllMilestones choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllMilestones_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAllMilestones choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetAllMilestones_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAllMilestones execution.
     *
     * @return string (XML) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a single To-do list specified by its ID.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetList extends Temboo_Choreography
{
    /**
     * Retrieves a single To-do list specified by its ID.
     *
     * @param Temboo_Session $session The session that owns this GetList choreography.
     * @return _37Signals_Basecamp_GetList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetList choreography.
     *
     * @param _37Signals_Basecamp_GetList_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetList choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetList choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_GetList_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ListID input for this GetList choreography.
     *
     * @param int $value (integer) The ID for the To-Do list to return.
     * @return _37Signals_Basecamp_GetList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Password input for this GetList choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetList choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_GetList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetList choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetList choreography.
     *
     * @param Temboo_Session $session The session that owns this GetList execution.
     * @param _37Signals_Basecamp_GetList $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetList_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetList execution.
     *
     * @return _37Signals_Basecamp_GetList_Results New results object.
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
     * Wraps results in appopriate results class for this GetList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetList choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetList execution.
     *
     * @return string (XML) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all items in a specified To-do list.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllListItems extends Temboo_Choreography
{
    /**
     * Retrieves all items in a specified To-do list.
     *
     * @param Temboo_Session $session The session that owns this GetAllListItems choreography.
     * @return _37Signals_Basecamp_GetAllListItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetAllListItems/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAllListItems choreography.
     *
     * @param _37Signals_Basecamp_GetAllListItems_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetAllListItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetAllListItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetAllListItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllListItems choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetAllListItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetAllListItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllListItems choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllListItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAllListItems choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetAllListItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllListItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetAllListItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetAllListItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetAllListItems choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_GetAllListItems_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ListID input for this GetAllListItems choreography.
     *
     * @param int $value (integer) The ID of the list for which you're returning items.
     * @return _37Signals_Basecamp_GetAllListItems_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Password input for this GetAllListItems choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetAllListItems_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetAllListItems choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_GetAllListItems_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetAllListItems choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllListItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllListItems choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAllListItems execution.
     * @param _37Signals_Basecamp_GetAllListItems $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetAllListItems_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetAllListItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetAllListItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetAllListItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllListItems execution.
     *
     * @return _37Signals_Basecamp_GetAllListItems_Results New results object.
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
     * Wraps results in appopriate results class for this GetAllListItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetAllListItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetAllListItems_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAllListItems choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetAllListItems_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAllListItems choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetAllListItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAllListItems execution.
     *
     * @return string (XML) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Marks a specific calendar entry as completed.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CompleteEntry extends Temboo_Choreography
{
    /**
     * Marks a specific calendar entry as completed.
     *
     * @param Temboo_Session $session The session that owns this CompleteEntry choreography.
     * @return _37Signals_Basecamp_CompleteEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/CompleteEntry/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CompleteEntry choreography.
     *
     * @param _37Signals_Basecamp_CompleteEntry_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CompleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CompleteEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_CompleteEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompleteEntry choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CompleteEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_CompleteEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompleteEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CompleteEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CompleteEntry choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_CompleteEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompleteEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CompleteEntry choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the EntryID input for this CompleteEntry choreography.
     *
     * @param int $value (integer) The ID for the calendar entry to mark as completed.
     * @return _37Signals_Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }

    /**
     * Set the value for the Password input for this CompleteEntry choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectID input for this CompleteEntry choreography.
     *
     * @param int $value (integer) The ID for the project with the calendar entry to mark as completed.
     * @return _37Signals_Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function setProjectID($value)
    {
        return $this->set('ProjectID', $value);
    }

    /**
     * Set the value for the Username input for this CompleteEntry choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_CompleteEntry_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CompleteEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CompleteEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompleteEntry choreography.
     *
     * @param Temboo_Session $session The session that owns this CompleteEntry execution.
     * @param _37Signals_Basecamp_CompleteEntry $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_CompleteEntry_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_CompleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_CompleteEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_CompleteEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompleteEntry execution.
     *
     * @return _37Signals_Basecamp_CompleteEntry_Results New results object.
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
     * Wraps results in appopriate results class for this CompleteEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_CompleteEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_CompleteEntry_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CompleteEntry choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_CompleteEntry_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CompleteEntry choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_CompleteEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CompleteEntry execution.
     *
     * @return string (XML) The response returned from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all people that have access to a specified project.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetPeopleWithinProject extends Temboo_Choreography
{
    /**
     * Retrieves all people that have access to a specified project.
     *
     * @param Temboo_Session $session The session that owns this GetPeopleWithinProject choreography.
     * @return _37Signals_Basecamp_GetPeopleWithinProject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/GetPeopleWithinProject/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetPeopleWithinProject choreography.
     *
     * @param _37Signals_Basecamp_GetPeopleWithinProject_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetPeopleWithinProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_GetPeopleWithinProject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPeopleWithinProject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_GetPeopleWithinProject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPeopleWithinProject choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetPeopleWithinProject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetPeopleWithinProject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPeopleWithinProject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this GetPeopleWithinProject choreography.
     *
     * @param string $value (string) The Basecamp account name for you or your company. This is the first part of your account URL.
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this GetPeopleWithinProject choreography.
     *
     * @param string $value (string) Your Basecamp password.  You can use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProjectId input for this GetPeopleWithinProject choreography.
     *
     * @param int $value (integer) The ID for the project associated with the people you want to retrieve.
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Inputs For method chaining.
     */
    public function setProjectId($value)
    {
        return $this->set('ProjectId', $value);
    }

    /**
     * Set the value for the Username input for this GetPeopleWithinProject choreography.
     *
     * @param string $value (string) Your Basecamp username or API Key.
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetPeopleWithinProject choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetPeopleWithinProject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPeopleWithinProject choreography.
     *
     * @param Temboo_Session $session The session that owns this GetPeopleWithinProject execution.
     * @param _37Signals_Basecamp_GetPeopleWithinProject $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_GetPeopleWithinProject_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_GetPeopleWithinProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_GetPeopleWithinProject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPeopleWithinProject execution.
     *
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Results New results object.
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
     * Wraps results in appopriate results class for this GetPeopleWithinProject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_GetPeopleWithinProject_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetPeopleWithinProject choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_GetPeopleWithinProject_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetPeopleWithinProject choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_GetPeopleWithinProject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetPeopleWithinProject execution.
     *
     * @return string (XML) The response from Basecamp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Marks a single, specified item in a To-do list as incomplete.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UncompleteItem extends Temboo_Choreography
{
    /**
     * Marks a single, specified item in a To-do list as incomplete.
     *
     * @param Temboo_Session $session The session that owns this UncompleteItem choreography.
     * @return _37Signals_Basecamp_UncompleteItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/37Signals/Basecamp/UncompleteItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UncompleteItem choreography.
     *
     * @param _37Signals_Basecamp_UncompleteItem_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_UncompleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_UncompleteItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new _37Signals_Basecamp_UncompleteItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UncompleteItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_UncompleteItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new _37Signals_Basecamp_UncompleteItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UncompleteItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UncompleteItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UncompleteItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return _37Signals_Basecamp_UncompleteItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UncompleteItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return _37Signals_Basecamp_UncompleteItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return _37Signals_Basecamp_UncompleteItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this UncompleteItem choreography.
     *
     * @param string $value (string) A valid Basecamp account name. This is the first part of the account's URL.
     * @return _37Signals_Basecamp_UncompleteItem_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the ItemID input for this UncompleteItem choreography.
     *
     * @param int $value (integer) The ID of the item to mark as complete.
     * @return _37Signals_Basecamp_UncompleteItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the Password input for this UncompleteItem choreography.
     *
     * @param string $value (string) The Basecamp account password. Use the value 'X' when specifying an API Key for the Username input.
     * @return _37Signals_Basecamp_UncompleteItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this UncompleteItem choreography.
     *
     * @param string $value (string) A Basecamp account username or API Key.
     * @return _37Signals_Basecamp_UncompleteItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UncompleteItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UncompleteItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UncompleteItem choreography.
     *
     * @param Temboo_Session $session The session that owns this UncompleteItem execution.
     * @param _37Signals_Basecamp_UncompleteItem $choreo The choregraphy object for this execution.
     * @param _37Signals_Basecamp_UncompleteItem_Inputs|array $inputs (optional) Inputs as _37Signals_Basecamp_UncompleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return _37Signals_Basecamp_UncompleteItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, _37Signals_Basecamp_UncompleteItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UncompleteItem execution.
     *
     * @return _37Signals_Basecamp_UncompleteItem_Results New results object.
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
     * Wraps results in appopriate results class for this UncompleteItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return _37Signals_Basecamp_UncompleteItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new _37Signals_Basecamp_UncompleteItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UncompleteItem choreography.
 *
 * @package Temboo
 * @subpackage 37Signals
 */
class _37Signals_Basecamp_UncompleteItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UncompleteItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return _37Signals_Basecamp_UncompleteItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UncompleteItem execution.
     *
     * @return string There is no structrued response from uncomplete item requests.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>