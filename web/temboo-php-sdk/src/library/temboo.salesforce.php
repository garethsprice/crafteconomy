<?php

/**
 * Temboo PHP SDK Salesforce classes
 *
 * Execute Choreographies from the Temboo Salesforce bundle.
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
 * @subpackage Salesforce
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Deletes a specified Salesforce Object.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_DeleteObject extends Temboo_Choreography
{
    /**
     * Deletes a specified Salesforce Object.
     *
     * @param Temboo_Session $session The session that owns this DeleteObject choreography.
     * @return Salesforce_DeleteObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/DeleteObject/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteObject choreography.
     *
     * @param Salesforce_DeleteObject_Inputs|array $inputs (optional) Inputs as Salesforce_DeleteObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_DeleteObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_DeleteObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_DeleteObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_DeleteObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteObject choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_DeleteObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_DeleteObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_DeleteObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Salesforce_DeleteObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ID input for this DeleteObject choreography.
     *
     * @param string $value (required, string) The ID of the Object you wish to delete
     * @return Salesforce_DeleteObject_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Password input for this DeleteObject choreography.
     *
     * @param string $value (required, string) Your Salesforce password.
     * @return Salesforce_DeleteObject_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the SecurityToken input for this DeleteObject choreography.
     *
     * @param string $value (required, string) Your Salesforce security token used for API calls.
     * @return Salesforce_DeleteObject_Inputs For method chaining.
     */
    public function setSecurityToken($value)
    {
        return $this->set('SecurityToken', $value);
    }

    /**
     * Set the value for the Username input for this DeleteObject choreography.
     *
     * @param string $value (required, string) Your Salesforce username.
     * @return Salesforce_DeleteObject_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeleteObject choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_DeleteObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteObject choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteObject execution.
     * @param Salesforce_DeleteObject $choreo The choregraphy object for this execution.
     * @param Salesforce_DeleteObject_Inputs|array $inputs (optional) Inputs as Salesforce_DeleteObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_DeleteObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_DeleteObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteObject execution.
     *
     * @return Salesforce_DeleteObject_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_DeleteObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_DeleteObject_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteObject choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_DeleteObject_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteObject choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_DeleteObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteObject execution.
     *
     * @return string (xml) The full response from Salesforce
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an Account Object name.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_UpdateAccountObject extends Temboo_Choreography
{
    /**
     * Updates an Account Object name.
     *
     * @param Temboo_Session $session The session that owns this UpdateAccountObject choreography.
     * @return Salesforce_UpdateAccountObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/UpdateAccountObject/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateAccountObject choreography.
     *
     * @param Salesforce_UpdateAccountObject_Inputs|array $inputs (optional) Inputs as Salesforce_UpdateAccountObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_UpdateAccountObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_UpdateAccountObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateAccountObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_UpdateAccountObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_UpdateAccountObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateAccountObject choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_UpdateAccountObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateAccountObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_UpdateAccountObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateAccountObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_UpdateAccountObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Salesforce_UpdateAccountObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountId input for this UpdateAccountObject choreography.
     *
     * @param string $value (required, string) The ID for the account you want to update
     * @return Salesforce_UpdateAccountObject_Inputs For method chaining.
     */
    public function setAccountId($value)
    {
        return $this->set('AccountId', $value);
    }

    /**
     * Set the value for the AccountName input for this UpdateAccountObject choreography.
     *
     * @param string $value (required, string) A new name to update the Account with
     * @return Salesforce_UpdateAccountObject_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this UpdateAccountObject choreography.
     *
     * @param string $value (required, string) Your Salesforce password.
     * @return Salesforce_UpdateAccountObject_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the SecurityToken input for this UpdateAccountObject choreography.
     *
     * @param string $value (required, string) Your Salesforce security token used for making API calls.
     * @return Salesforce_UpdateAccountObject_Inputs For method chaining.
     */
    public function setSecurityToken($value)
    {
        return $this->set('SecurityToken', $value);
    }

    /**
     * Set the value for the Username input for this UpdateAccountObject choreography.
     *
     * @param string $value (required, string) Your Salesforce username.
     * @return Salesforce_UpdateAccountObject_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UpdateAccountObject choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_UpdateAccountObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateAccountObject choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateAccountObject execution.
     * @param Salesforce_UpdateAccountObject $choreo The choregraphy object for this execution.
     * @param Salesforce_UpdateAccountObject_Inputs|array $inputs (optional) Inputs as Salesforce_UpdateAccountObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_UpdateAccountObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_UpdateAccountObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateAccountObject execution.
     *
     * @return Salesforce_UpdateAccountObject_Results New results object.
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
     * Wraps results in appopriate results class for this UpdateAccountObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_UpdateAccountObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_UpdateAccountObject_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateAccountObject choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_UpdateAccountObject_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateAccountObject choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_UpdateAccountObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateAccountObject execution.
     *
     * @return string (xml) The response from Salesforce
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Executes a query against a Salesforce object and returns data that matches the specified criteria.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Query extends Temboo_Choreography
{
    /**
     * Executes a query against a Salesforce object and returns data that matches the specified criteria.
     *
     * @param Temboo_Session $session The session that owns this Query choreography.
     * @return Salesforce_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Query/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Query choreography.
     *
     * @param Salesforce_Query_Inputs|array $inputs (optional) Inputs as Salesforce_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Query choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Query_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Query input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this Query choreography.
     *
     * @param string $value (required, string) Your Salesforce password.
     * @return Salesforce_Query_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Query input for this Query choreography.
     *
     * @param string $value (required, string) The query to submit to Salesforce. This should be SOQL which differs from standard SQL in some cases (select FirstName, LastName from Lead limit 1).
     * @return Salesforce_Query_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the SecurityToken input for this Query choreography.
     *
     * @param string $value (required, string) Your Salesforce security token for making API calls.
     * @return Salesforce_Query_Inputs For method chaining.
     */
    public function setSecurityToken($value)
    {
        return $this->set('SecurityToken', $value);
    }

    /**
     * Set the value for the Username input for this Query choreography.
     *
     * @param string $value (required, string) Your Salesforce username.
     * @return Salesforce_Query_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the Query choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query choreography.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param Salesforce_Query $choreo The choregraphy object for this execution.
     * @param Salesforce_Query_Inputs|array $inputs (optional) Inputs as Salesforce_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return Salesforce_Query_Results New results object.
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
     * Wraps results in appopriate results class for this Query execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Query_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Query choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Query_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Query choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string (xml) The response from the Salesforce query
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Create Salesforce Objects of any type (Account, Lead, Contact, etc) by specifying rows in CSV format.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_BatchCSVInsert extends Temboo_Choreography
{
    /**
     * Create Salesforce Objects of any type (Account, Lead, Contact, etc) by specifying rows in CSV format.
     *
     * @param Temboo_Session $session The session that owns this BatchCSVInsert choreography.
     * @return Salesforce_BatchCSVInsert New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/BatchCSVInsert/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this BatchCSVInsert choreography.
     *
     * @param Salesforce_BatchCSVInsert_Inputs|array $inputs (optional) Inputs as Salesforce_BatchCSVInsert_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_BatchCSVInsert_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_BatchCSVInsert_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this BatchCSVInsert choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_BatchCSVInsert_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_BatchCSVInsert_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the BatchCSVInsert choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_BatchCSVInsert_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the BatchCSVInsert choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_BatchCSVInsert_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this BatchCSVInsert input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_BatchCSVInsert_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Salesforce_BatchCSVInsert_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CSVInput input for this BatchCSVInsert choreography.
     *
     * @param string $value (conditional, multiline) CSV data to insert. Column names must match Salesforce field names exactly. Required unless using the VaultFile alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return Salesforce_BatchCSVInsert_Inputs For method chaining.
     */
    public function setCSVInput($value)
    {
        return $this->set('CSVInput', $value);
    }

    /**
     * Set the value for the Password input for this BatchCSVInsert choreography.
     *
     * @param string $value (required, string) Your Salesforce password.
     * @return Salesforce_BatchCSVInsert_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the SalesforceObjectType input for this BatchCSVInsert choreography.
     *
     * @param string $value (optional, string) The object type that you are inserting (i.e.Lead, Contact, Account). Defaults to Lead.
     * @return Salesforce_BatchCSVInsert_Inputs For method chaining.
     */
    public function setSalesforceObjectType($value)
    {
        return $this->set('SalesforceObjectType', $value);
    }

    /**
     * Set the value for the SecurityToken input for this BatchCSVInsert choreography.
     *
     * @param string $value (required, string) Your Salesforce security token for making API calls.
     * @return Salesforce_BatchCSVInsert_Inputs For method chaining.
     */
    public function setSecurityToken($value)
    {
        return $this->set('SecurityToken', $value);
    }

    /**
     * Set the value for the Username input for this BatchCSVInsert choreography.
     *
     * @param string $value (required, string) Your Salesforce username.
     * @return Salesforce_BatchCSVInsert_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

}


/**
 * Execution object for the BatchCSVInsert choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_BatchCSVInsert_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the BatchCSVInsert choreography.
     *
     * @param Temboo_Session $session The session that owns this BatchCSVInsert execution.
     * @param Salesforce_BatchCSVInsert $choreo The choregraphy object for this execution.
     * @param Salesforce_BatchCSVInsert_Inputs|array $inputs (optional) Inputs as Salesforce_BatchCSVInsert_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_BatchCSVInsert_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_BatchCSVInsert $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this BatchCSVInsert execution.
     *
     * @return Salesforce_BatchCSVInsert_Results New results object.
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
     * Wraps results in appopriate results class for this BatchCSVInsert execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_BatchCSVInsert_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_BatchCSVInsert_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the BatchCSVInsert choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_BatchCSVInsert_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the BatchCSVInsert choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_BatchCSVInsert_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this BatchCSVInsert execution.
     *
     * @return string (xml) The response from Salesforce
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates new account object.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_CreateAccountObject extends Temboo_Choreography
{
    /**
     * Creates new account object.
     *
     * @param Temboo_Session $session The session that owns this CreateAccountObject choreography.
     * @return Salesforce_CreateAccountObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/CreateAccountObject/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateAccountObject choreography.
     *
     * @param Salesforce_CreateAccountObject_Inputs|array $inputs (optional) Inputs as Salesforce_CreateAccountObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_CreateAccountObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_CreateAccountObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateAccountObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_CreateAccountObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_CreateAccountObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateAccountObject choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_CreateAccountObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateAccountObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_CreateAccountObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateAccountObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_CreateAccountObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Salesforce_CreateAccountObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this CreateAccountObject choreography.
     *
     * @param string $value (required, string) The name of the account to create
     * @return Salesforce_CreateAccountObject_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Password input for this CreateAccountObject choreography.
     *
     * @param string $value (required, string) Your Salesforce password.
     * @return Salesforce_CreateAccountObject_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the SecurityToken input for this CreateAccountObject choreography.
     *
     * @param string $value (required, string) Your Salesforce security token used for making API calls.
     * @return Salesforce_CreateAccountObject_Inputs For method chaining.
     */
    public function setSecurityToken($value)
    {
        return $this->set('SecurityToken', $value);
    }

    /**
     * Set the value for the Username input for this CreateAccountObject choreography.
     *
     * @param string $value (required, string) Your Salesforce username.
     * @return Salesforce_CreateAccountObject_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateAccountObject choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_CreateAccountObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateAccountObject choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateAccountObject execution.
     * @param Salesforce_CreateAccountObject $choreo The choregraphy object for this execution.
     * @param Salesforce_CreateAccountObject_Inputs|array $inputs (optional) Inputs as Salesforce_CreateAccountObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_CreateAccountObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_CreateAccountObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateAccountObject execution.
     *
     * @return Salesforce_CreateAccountObject_Results New results object.
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
     * Wraps results in appopriate results class for this CreateAccountObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_CreateAccountObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_CreateAccountObject_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateAccountObject choreography.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_CreateAccountObject_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateAccountObject choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_CreateAccountObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateAccountObject execution.
     *
     * @return string (xml) The full response from Salesforce
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>