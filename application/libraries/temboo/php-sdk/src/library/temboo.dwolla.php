<?php

/**
 * Temboo PHP SDK Dwolla classes
 *
 * Execute Choreographies from the Temboo Dwolla bundle.
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
 * @subpackage Dwolla
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Use this method to request funds from a source user, originating from the user associated with the authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Request extends Temboo_Choreography
{
    /**
     * Use this method to request funds from a source user, originating from the user associated with the authorized access token.
     *
     * @param Temboo_Session $session The session that owns this Request choreography.
     * @return Dwolla_Transactions_Request New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Transactions/Request/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Request choreography.
     *
     * @param Dwolla_Transactions_Request_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Request_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Request_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Transactions_Request_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Request choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Request_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Transactions_Request_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Request choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Request_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Request choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Request_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Request input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Request choreography.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Amount input for this Request choreography.
     *
     * @param float $value (required, decimal) Amount of funds to request from the source user.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the FacillitatorAmount input for this Request choreography.
     *
     * @param float $value (optional, decimal) Amount of the facilitator fee to override. Only applicable if the facilitator fee feature is enabled. If set to 0, facilitator fee is disabled for transaction. Cannot exceed 25% of the 'amount'.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setFacillitatorAmount($value)
    {
        return $this->set('FacillitatorAmount', $value);
    }

    /**
     * Set the value for the Notes input for this Request choreography.
     *
     * @param string $value (optional, multiline) Note to attach to the transaction. Limited to 250 characters.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setNotes($value)
    {
        return $this->set('Notes', $value);
    }

    /**
     * Set the value for the Pin input for this Request choreography.
     *
     * @param int $value (required, integer) User's PIN associated with their account.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setPin($value)
    {
        return $this->set('Pin', $value);
    }

    /**
     * Set the value for the SourceID input for this Request choreography.
     *
     * @param string $value (required, string) Identification of the user to request funds from. Must be the Dwolla identifier, Facebook identifier, Twitter screename, phone number, or email address.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setSourceID($value)
    {
        return $this->set('SourceID', $value);
    }

    /**
     * Set the value for the SourceType input for this Request choreography.
     *
     * @param string $value (optional, string) Type of destination user. Defaults to Dwolla. Can be Dwolla, Facebook, Twitter, Email, or Phone.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setSourceType($value)
    {
        return $this->set('SourceType', $value);
    }
}


/**
 * Execution object for the Request choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Request_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Request choreography.
     *
     * @param Temboo_Session $session The session that owns this Request execution.
     * @param Dwolla_Transactions_Request $choreo The choregraphy object for this execution.
     * @param Dwolla_Transactions_Request_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Request_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Request_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Transactions_Request $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Request execution.
     *
     * @return Dwolla_Transactions_Request_Results New results object.
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
     * Wraps results in appopriate results class for this Request execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Transactions_Request_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Transactions_Request_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Request choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Request_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Request choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Transactions_Request_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Request execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the information for contacts for the user assoicated with the authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_UserContacts extends Temboo_Choreography
{
    /**
     * Retrieves the information for contacts for the user assoicated with the authorized access token.
     *
     * @param Temboo_Session $session The session that owns this UserContacts choreography.
     * @return Dwolla_Contacts_UserContacts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Contacts/UserContacts/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UserContacts choreography.
     *
     * @param Dwolla_Contacts_UserContacts_Inputs|array $inputs (optional) Inputs as Dwolla_Contacts_UserContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Contacts_UserContacts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Contacts_UserContacts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserContacts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Contacts_UserContacts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Contacts_UserContacts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserContacts choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_UserContacts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UserContacts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Contacts_UserContacts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserContacts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Contacts_UserContacts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Contacts_UserContacts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UserContacts choreography.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Contacts_UserContacts_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this UserContacts choreography.
     *
     * @param int $value (optional, integer) Number of contacts to retrieve. Defaults to 10. Can be between 1 and 200 contacts.
     * @return Dwolla_Contacts_UserContacts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Search input for this UserContacts choreography.
     *
     * @param string $value (optional, string) Search term used to search the contacts.
     * @return Dwolla_Contacts_UserContacts_Inputs For method chaining.
     */
    public function setSearch($value)
    {
        return $this->set('Search', $value);
    }

    /**
     * Set the value for the Types input for this UserContacts choreography.
     *
     * @param string $value (optional, string) Type of accounts to retrieve, in the form of a comma-separated list (e.g. "Facebook,Dwolla")
     * @return Dwolla_Contacts_UserContacts_Inputs For method chaining.
     */
    public function setTypes($value)
    {
        return $this->set('Types', $value);
    }
}


/**
 * Execution object for the UserContacts choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_UserContacts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserContacts choreography.
     *
     * @param Temboo_Session $session The session that owns this UserContacts execution.
     * @param Dwolla_Contacts_UserContacts $choreo The choregraphy object for this execution.
     * @param Dwolla_Contacts_UserContacts_Inputs|array $inputs (optional) Inputs as Dwolla_Contacts_UserContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Contacts_UserContacts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Contacts_UserContacts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserContacts execution.
     *
     * @return Dwolla_Contacts_UserContacts_Results New results object.
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
     * Wraps results in appopriate results class for this UserContacts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Contacts_UserContacts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Contacts_UserContacts_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UserContacts choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_UserContacts_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UserContacts choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Contacts_UserContacts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UserContacts execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of transactions for the user associated with the authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Listing extends Temboo_Choreography
{
    /**
     * Retrieves a list of transactions for the user associated with the authorized access token.
     *
     * @param Temboo_Session $session The session that owns this Listing choreography.
     * @return Dwolla_Transactions_Listing New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Transactions/Listing/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Listing choreography.
     *
     * @param Dwolla_Transactions_Listing_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Listing_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Listing_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Transactions_Listing_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Listing choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Listing_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Transactions_Listing_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Listing choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Listing_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Listing choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Listing_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Listing input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Listing choreography.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this Listing choreography.
     *
     * @param int $value (optional, integer) Number of transactions to retrieve. Defaults to 10. Can be between 1 and 200 transactions.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the SinceDate input for this Listing choreography.
     *
     * @param string $value (optional, string) Earliest date and time for which to retrieve transactions. Defaults to 7 days prior to current date and time in UTC.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function setSinceDate($value)
    {
        return $this->set('SinceDate', $value);
    }

    /**
     * Set the value for the Skip input for this Listing choreography.
     *
     * @param int $value (optional, integer) Number of transactions to skip. Defaults to 0.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the Types input for this Listing choreography.
     *
     * @param string $value (optional, string) Transaction types to retrieve. Must be delimited by a '|'. Options are money_sent, money_received, deposit, withdrawal, and fee. Defaults to include all transaction types.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function setTypes($value)
    {
        return $this->set('Types', $value);
    }
}


/**
 * Execution object for the Listing choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Listing_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Listing choreography.
     *
     * @param Temboo_Session $session The session that owns this Listing execution.
     * @param Dwolla_Transactions_Listing $choreo The choregraphy object for this execution.
     * @param Dwolla_Transactions_Listing_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Listing_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Listing_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Transactions_Listing $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Listing execution.
     *
     * @return Dwolla_Transactions_Listing_Results New results object.
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
     * Wraps results in appopriate results class for this Listing execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Transactions_Listing_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Transactions_Listing_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Listing choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Listing_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Listing choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Transactions_Listing_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Listing execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the account information for the user associated with the given authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Account extends Temboo_Choreography
{
    /**
     * Retrieves the account information for the user associated with the given authorized access token.
     *
     * @param Temboo_Session $session The session that owns this Account choreography.
     * @return Dwolla_Users_Account New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Users/Account/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Account choreography.
     *
     * @param Dwolla_Users_Account_Inputs|array $inputs (optional) Inputs as Dwolla_Users_Account_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Users_Account_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Users_Account_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Account choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Users_Account_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Users_Account_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Account choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Account_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Account choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Users_Account_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Account input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Users_Account_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Users_Account_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Account choreography.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Users_Account_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the Account choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Account_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Account choreography.
     *
     * @param Temboo_Session $session The session that owns this Account execution.
     * @param Dwolla_Users_Account $choreo The choregraphy object for this execution.
     * @param Dwolla_Users_Account_Inputs|array $inputs (optional) Inputs as Dwolla_Users_Account_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Users_Account_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Users_Account $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Account execution.
     *
     * @return Dwolla_Users_Account_Results New results object.
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
     * Wraps results in appopriate results class for this Account execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Users_Account_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Users_Account_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Account choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Account_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Account choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Users_Account_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Account execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the account information for the user associated with the given authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Stats extends Temboo_Choreography
{
    /**
     * Retrieves the account information for the user associated with the given authorized access token.
     *
     * @param Temboo_Session $session The session that owns this Stats choreography.
     * @return Dwolla_Transactions_Stats New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Transactions/Stats/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Stats choreography.
     *
     * @param Dwolla_Transactions_Stats_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Stats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Stats_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Transactions_Stats_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Stats choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Stats_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Transactions_Stats_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Stats choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Stats_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Stats choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Stats_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Stats input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Transactions_Stats_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Transactions_Stats_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Stats choreography.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Transactions_Stats_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EndDate input for this Stats choreography.
     *
     * @param string $value (optional, string) Ending date and time to for which to process transactions stats. Defaults to current date and time in UTC.
     * @return Dwolla_Transactions_Stats_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the StartDate input for this Stats choreography.
     *
     * @param string $value (optional, string) Starting date and time to for which to process transactions stats. Defaults to 0300 of the current day in UTC.
     * @return Dwolla_Transactions_Stats_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Types input for this Stats choreography.
     *
     * @param string $value (optional, string) Types of status to retrieve. Must be comma delimited. Options are TransactionsCount and TransactionsTotal. Defaults to include all stats.
     * @return Dwolla_Transactions_Stats_Inputs For method chaining.
     */
    public function setTypes($value)
    {
        return $this->set('Types', $value);
    }
}


/**
 * Execution object for the Stats choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Stats_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Stats choreography.
     *
     * @param Temboo_Session $session The session that owns this Stats execution.
     * @param Dwolla_Transactions_Stats $choreo The choregraphy object for this execution.
     * @param Dwolla_Transactions_Stats_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Stats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Stats_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Transactions_Stats $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Stats execution.
     *
     * @return Dwolla_Transactions_Stats_Results New results object.
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
     * Wraps results in appopriate results class for this Stats execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Transactions_Stats_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Transactions_Stats_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Stats choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Stats_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Stats choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Transactions_Stats_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Stats execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the account balance for the user associated with the given authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Balance_GetBalance extends Temboo_Choreography
{
    /**
     * Retrieves the account balance for the user associated with the given authorized access token.
     *
     * @param Temboo_Session $session The session that owns this GetBalance choreography.
     * @return Dwolla_Balance_GetBalance New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Balance/GetBalance/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBalance choreography.
     *
     * @param Dwolla_Balance_GetBalance_Inputs|array $inputs (optional) Inputs as Dwolla_Balance_GetBalance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Balance_GetBalance_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Balance_GetBalance_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBalance choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Balance_GetBalance_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Balance_GetBalance_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBalance choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Balance_GetBalance_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBalance choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Balance_GetBalance_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBalance input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Balance_GetBalance_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Balance_GetBalance_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetBalance choreography.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Balance_GetBalance_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the GetBalance choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Balance_GetBalance_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBalance choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBalance execution.
     * @param Dwolla_Balance_GetBalance $choreo The choregraphy object for this execution.
     * @param Dwolla_Balance_GetBalance_Inputs|array $inputs (optional) Inputs as Dwolla_Balance_GetBalance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Balance_GetBalance_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Balance_GetBalance $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBalance execution.
     *
     * @return Dwolla_Balance_GetBalance_Results New results object.
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
     * Wraps results in appopriate results class for this GetBalance execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Balance_GetBalance_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Balance_GetBalance_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBalance choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Balance_GetBalance_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBalance choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Balance_GetBalance_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBalance execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the account information for the user associated with the given authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesByID extends Temboo_Choreography
{
    /**
     * Retrieves the account information for the user associated with the given authorized access token.
     *
     * @param Temboo_Session $session The session that owns this FundingSourcesByID choreography.
     * @return Dwolla_FundingSources_FundingSourcesByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/FundingSources/FundingSourcesByID/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FundingSourcesByID choreography.
     *
     * @param Dwolla_FundingSources_FundingSourcesByID_Inputs|array $inputs (optional) Inputs as Dwolla_FundingSources_FundingSourcesByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_FundingSources_FundingSourcesByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_FundingSources_FundingSourcesByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FundingSourcesByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_FundingSources_FundingSourcesByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_FundingSources_FundingSourcesByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FundingSourcesByID choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FundingSourcesByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_FundingSources_FundingSourcesByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FundingSourcesByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_FundingSources_FundingSourcesByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dwolla_FundingSources_FundingSourcesByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this FundingSourcesByID choreography.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_FundingSources_FundingSourcesByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the FundingID input for this FundingSourcesByID choreography.
     *
     * @param string $value (required, string) Funding source identifier of the funding source being requested.
     * @return Dwolla_FundingSources_FundingSourcesByID_Inputs For method chaining.
     */
    public function setFundingID($value)
    {
        return $this->set('FundingID', $value);
    }
}


/**
 * Execution object for the FundingSourcesByID choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FundingSourcesByID choreography.
     *
     * @param Temboo_Session $session The session that owns this FundingSourcesByID execution.
     * @param Dwolla_FundingSources_FundingSourcesByID $choreo The choregraphy object for this execution.
     * @param Dwolla_FundingSources_FundingSourcesByID_Inputs|array $inputs (optional) Inputs as Dwolla_FundingSources_FundingSourcesByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_FundingSources_FundingSourcesByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_FundingSources_FundingSourcesByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FundingSourcesByID execution.
     *
     * @return Dwolla_FundingSources_FundingSourcesByID_Results New results object.
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
     * Wraps results in appopriate results class for this FundingSourcesByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_FundingSources_FundingSourcesByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_FundingSources_FundingSourcesByID_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FundingSourcesByID choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesByID_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FundingSourcesByID choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_FundingSources_FundingSourcesByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FundingSourcesByID execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Use this method to send funds to a destination user, from the user associated with the authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Send extends Temboo_Choreography
{
    /**
     * Use this method to send funds to a destination user, from the user associated with the authorized access token.
     *
     * @param Temboo_Session $session The session that owns this Send choreography.
     * @return Dwolla_Transactions_Send New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Transactions/Send/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Send choreography.
     *
     * @param Dwolla_Transactions_Send_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Send_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Send_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Transactions_Send_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Send choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Send_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Transactions_Send_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Send choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Send_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Send choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Send_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Send input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Send choreography.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Amount input for this Send choreography.
     *
     * @param float $value (required, decimal) Amount of funds to transfer to the destination user.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the AssumeCosts input for this Send choreography.
     *
     * @param bool $value (required, boolean) Set to true if the user will assume the Dwolla fee. Set to false if the destination user will assume the Dwolla fee. Does not affect facilitator fees. Defaults to false.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setAssumeCosts($value)
    {
        return $this->set('AssumeCosts', $value);
    }

    /**
     * Set the value for the DestinationId input for this Send choreography.
     *
     * @param string $value (required, string) Identification of the user to send funds to. Must be the Dwolla identifier, Facebook identifier, Twitter identifier, phone number, or email address.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setDestinationId($value)
    {
        return $this->set('DestinationId', $value);
    }

    /**
     * Set the value for the DestinationType input for this Send choreography.
     *
     * @param string $value (optional, string) Type of destination user. Defaults to Dwolla. Can be Dwolla, Facebook, Twitter, Email, or Phone.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setDestinationType($value)
    {
        return $this->set('DestinationType', $value);
    }

    /**
     * Set the value for the FacillitatorAmount input for this Send choreography.
     *
     * @param string $value (required, string) Amount of the facilitator fee to override. Only applicable if the facilitator fee feature is enabled. If set to 0, facilitator fee is disabled for transaction. Cannot exceed 25% of the 'amount'.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setFacillitatorAmount($value)
    {
        return $this->set('FacillitatorAmount', $value);
    }

    /**
     * Set the value for the FundsSource input for this Send choreography.
     *
     * @param string $value (required, string) Id of funding source to send funds from. Defaults to Balance.  Balance sourced transfers process immediately. Non-balanced sourced transfers may process immediately or take up to five business days.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setFundsSource($value)
    {
        return $this->set('FundsSource', $value);
    }

    /**
     * Set the value for the Notes input for this Send choreography.
     *
     * @param string $value (required, multiline) Note to attach to the transaction. Limited to 250 characters.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setNotes($value)
    {
        return $this->set('Notes', $value);
    }

    /**
     * Set the value for the Pin input for this Send choreography.
     *
     * @param int $value (required, integer) User's PIN associated with their account
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setPin($value)
    {
        return $this->set('Pin', $value);
    }
}


/**
 * Execution object for the Send choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Send_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Send choreography.
     *
     * @param Temboo_Session $session The session that owns this Send execution.
     * @param Dwolla_Transactions_Send $choreo The choregraphy object for this execution.
     * @param Dwolla_Transactions_Send_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Send_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Send_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Transactions_Send $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Send execution.
     *
     * @return Dwolla_Transactions_Send_Results New results object.
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
     * Wraps results in appopriate results class for this Send execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Transactions_Send_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Transactions_Send_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Send choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Send_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Send choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Transactions_Send_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Send execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the Dwolla account information for the user associated with the specified consumer credentials and Dwolla account identifier.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Basic extends Temboo_Choreography
{
    /**
     * Retrieves the Dwolla account information for the user associated with the specified consumer credentials and Dwolla account identifier.
     *
     * @param Temboo_Session $session The session that owns this Basic choreography.
     * @return Dwolla_Users_Basic New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Users/Basic/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Basic choreography.
     *
     * @param Dwolla_Users_Basic_Inputs|array $inputs (optional) Inputs as Dwolla_Users_Basic_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Users_Basic_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Users_Basic_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Basic choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Users_Basic_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Users_Basic_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Basic choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Basic_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Basic choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Users_Basic_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Basic input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Users_Basic_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Users_Basic_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountIdentifier input for this Basic choreography.
     *
     * @param string $value (required, string) Dwolla account identifier or email address of the Dwolla account.
     * @return Dwolla_Users_Basic_Inputs For method chaining.
     */
    public function setAccountIdentifier($value)
    {
        return $this->set('AccountIdentifier', $value);
    }

    /**
     * Set the value for the ClientID input for this Basic choreography.
     *
     * @param string $value (required, string) The Client ID provided by Dwolla (AKA the Consumer Key).
     * @return Dwolla_Users_Basic_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Basic choreography.
     *
     * @param string $value (required, string) The Client Secret provided by Dwolla (AKA the Consumer Secret).
     * @return Dwolla_Users_Basic_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }
}


/**
 * Execution object for the Basic choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Basic_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Basic choreography.
     *
     * @param Temboo_Session $session The session that owns this Basic execution.
     * @param Dwolla_Users_Basic $choreo The choregraphy object for this execution.
     * @param Dwolla_Users_Basic_Inputs|array $inputs (optional) Inputs as Dwolla_Users_Basic_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Users_Basic_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Users_Basic $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Basic execution.
     *
     * @return Dwolla_Users_Basic_Results New results object.
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
     * Wraps results in appopriate results class for this Basic execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Users_Basic_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Users_Basic_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Basic choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Basic_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Basic choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Users_Basic_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Basic execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of verified funding sources for the user associated with the authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesListing extends Temboo_Choreography
{
    /**
     * Retrieves a list of verified funding sources for the user associated with the authorized access token.
     *
     * @param Temboo_Session $session The session that owns this FundingSourcesListing choreography.
     * @return Dwolla_FundingSources_FundingSourcesListing New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/FundingSources/FundingSourcesListing/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FundingSourcesListing choreography.
     *
     * @param Dwolla_FundingSources_FundingSourcesListing_Inputs|array $inputs (optional) Inputs as Dwolla_FundingSources_FundingSourcesListing_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_FundingSources_FundingSourcesListing_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_FundingSources_FundingSourcesListing_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FundingSourcesListing choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_FundingSources_FundingSourcesListing_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_FundingSources_FundingSourcesListing_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FundingSourcesListing choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesListing_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FundingSourcesListing choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_FundingSources_FundingSourcesListing_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FundingSourcesListing input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_FundingSources_FundingSourcesListing_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dwolla_FundingSources_FundingSourcesListing_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this FundingSourcesListing choreography.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_FundingSources_FundingSourcesListing_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the FundingSourcesListing choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesListing_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FundingSourcesListing choreography.
     *
     * @param Temboo_Session $session The session that owns this FundingSourcesListing execution.
     * @param Dwolla_FundingSources_FundingSourcesListing $choreo The choregraphy object for this execution.
     * @param Dwolla_FundingSources_FundingSourcesListing_Inputs|array $inputs (optional) Inputs as Dwolla_FundingSources_FundingSourcesListing_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_FundingSources_FundingSourcesListing_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_FundingSources_FundingSourcesListing $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FundingSourcesListing execution.
     *
     * @return Dwolla_FundingSources_FundingSourcesListing_Results New results object.
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
     * Wraps results in appopriate results class for this FundingSourcesListing execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_FundingSources_FundingSourcesListing_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_FundingSources_FundingSourcesListing_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FundingSourcesListing choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesListing_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FundingSourcesListing choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_FundingSources_FundingSourcesListing_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FundingSourcesListing execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves nearby Dwolla spots within the range of the provided latitude and longitude.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_NearbyContacts extends Temboo_Choreography
{
    /**
     * Retrieves nearby Dwolla spots within the range of the provided latitude and longitude.
     *
     * @param Temboo_Session $session The session that owns this NearbyContacts choreography.
     * @return Dwolla_Contacts_NearbyContacts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Contacts/NearbyContacts/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this NearbyContacts choreography.
     *
     * @param Dwolla_Contacts_NearbyContacts_Inputs|array $inputs (optional) Inputs as Dwolla_Contacts_NearbyContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Contacts_NearbyContacts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Contacts_NearbyContacts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this NearbyContacts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Contacts_NearbyContacts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Contacts_NearbyContacts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the NearbyContacts choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_NearbyContacts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the NearbyContacts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Contacts_NearbyContacts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this NearbyContacts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this NearbyContacts choreography.
     *
     * @param string $value (required, string) The Client ID provided by Dwolla (AKA the Consumer Key).
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this NearbyContacts choreography.
     *
     * @param string $value (required, string) The Client Secret provided by Dwolla (AKA the Consumer Secret).
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Latitude input for this NearbyContacts choreography.
     *
     * @param float $value (required, decimal) Current latitude.
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this NearbyContacts choreography.
     *
     * @param int $value (optional, integer) Number of spots to retrieve. Defaults to 10.
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this NearbyContacts choreography.
     *
     * @param float $value (required, decimal) Current longitude.
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Range input for this NearbyContacts choreography.
     *
     * @param int $value (optional, integer) Range to retrieve spots for in miles.
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setRange($value)
    {
        return $this->set('Range', $value);
    }
}


/**
 * Execution object for the NearbyContacts choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_NearbyContacts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the NearbyContacts choreography.
     *
     * @param Temboo_Session $session The session that owns this NearbyContacts execution.
     * @param Dwolla_Contacts_NearbyContacts $choreo The choregraphy object for this execution.
     * @param Dwolla_Contacts_NearbyContacts_Inputs|array $inputs (optional) Inputs as Dwolla_Contacts_NearbyContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Contacts_NearbyContacts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Contacts_NearbyContacts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this NearbyContacts execution.
     *
     * @return Dwolla_Contacts_NearbyContacts_Results New results object.
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
     * Wraps results in appopriate results class for this NearbyContacts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Contacts_NearbyContacts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Contacts_NearbyContacts_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the NearbyContacts choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_NearbyContacts_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the NearbyContacts choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Contacts_NearbyContacts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this NearbyContacts execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the account information about the specified transaction by Transaction ID.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_ByID extends Temboo_Choreography
{
    /**
     * Retrieves the account information about the specified transaction by Transaction ID.
     *
     * @param Temboo_Session $session The session that owns this ByID choreography.
     * @return Dwolla_Transactions_ByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Transactions/ByID/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ByID choreography.
     *
     * @param Dwolla_Transactions_ByID_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_ByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_ByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Transactions_ByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_ByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Transactions_ByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByID choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_ByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_ByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Transactions_ByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Transactions_ByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ByID choreography.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Transactions_ByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the TransactionID input for this ByID choreography.
     *
     * @param int $value (required, integer) Transaction identifier of the transaction being requested.
     * @return Dwolla_Transactions_ByID_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }
}


/**
 * Execution object for the ByID choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_ByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByID choreography.
     *
     * @param Temboo_Session $session The session that owns this ByID execution.
     * @param Dwolla_Transactions_ByID $choreo The choregraphy object for this execution.
     * @param Dwolla_Transactions_ByID_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_ByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_ByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Transactions_ByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByID execution.
     *
     * @return Dwolla_Transactions_ByID_Results New results object.
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
     * Wraps results in appopriate results class for this ByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Transactions_ByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Transactions_ByID_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ByID choreography.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_ByID_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ByID choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Transactions_ByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ByID execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>