<?php

/**
 * Temboo PHP SDK Twilio classes
 *
 * Execute Choreographies from the Temboo Twilio bundle.
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
 * @subpackage Twilio
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieves a list of SMS messages from your Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetSMSList extends Temboo_Choreography
{
    /**
     * Retrieves a list of SMS messages from your Twilio account.
     *
     * @param Temboo_Session $session The session that owns this GetSMSList choreography.
     * @return Twilio_GetSMSList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/GetSMSList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetSMSList choreography.
     *
     * @param Twilio_GetSMSList_Inputs|array $inputs (optional) Inputs as Twilio_GetSMSList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_GetSMSList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_GetSMSList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSMSList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_GetSMSList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_GetSMSList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSMSList choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetSMSList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetSMSList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_GetSMSList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSMSList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_GetSMSList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twilio_GetSMSList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetSMSList choreography.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_GetSMSList_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetSMSList choreography.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_GetSMSList_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the DateSent input for this GetSMSList choreography.
     *
     * @param string $value (optional, date) A date in YYYY-MM-DD format. If you use this input, the Choreo will retrieve only messages sent on this date.
     * @return Twilio_GetSMSList_Inputs For method chaining.
     */
    public function setDateSent($value)
    {
        return $this->set('DateSent', $value);
    }

    /**
     * Set the value for the From input for this GetSMSList choreography.
     *
     * @param string $value (optional, string) If used, the Choreo will only retrieve messages sent from this phone number.
     * @return Twilio_GetSMSList_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the To input for this GetSMSList choreography.
     *
     * @param string $value (optional, string) If used, the Choreo will only retrieve messages sent to this phone number.
     * @return Twilio_GetSMSList_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }
}


/**
 * Execution object for the GetSMSList choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetSMSList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSMSList choreography.
     *
     * @param Temboo_Session $session The session that owns this GetSMSList execution.
     * @param Twilio_GetSMSList $choreo The choregraphy object for this execution.
     * @param Twilio_GetSMSList_Inputs|array $inputs (optional) Inputs as Twilio_GetSMSList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_GetSMSList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_GetSMSList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSMSList execution.
     *
     * @return Twilio_GetSMSList_Results New results object.
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
     * Wraps results in appopriate results class for this GetSMSList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_GetSMSList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_GetSMSList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetSMSList choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetSMSList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetSMSList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_GetSMSList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetSMSList execution.
     *
     * @return string (xml) The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sends an SMS to a specified phone number using the Twilio API.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SendSMS extends Temboo_Choreography
{
    /**
     * Sends an SMS to a specified phone number using the Twilio API.
     *
     * @param Temboo_Session $session The session that owns this SendSMS choreography.
     * @return Twilio_SendSMS New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/SendSMS/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SendSMS choreography.
     *
     * @param Twilio_SendSMS_Inputs|array $inputs (optional) Inputs as Twilio_SendSMS_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_SendSMS_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_SendSMS_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SendSMS choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_SendSMS_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_SendSMS_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SendSMS choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SendSMS_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SendSMS choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_SendSMS_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SendSMS input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_SendSMS_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twilio_SendSMS_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this SendSMS choreography.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_SendSMS_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this SendSMS choreography.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_SendSMS_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the Body input for this SendSMS choreography.
     *
     * @param string $value (required, string) The text of your SMS message.
     * @return Twilio_SendSMS_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the From input for this SendSMS choreography.
     *
     * @param string $value (required, string) The purchased Twilio phone number (or Twilio Sandbox number) to send the message from.
     * @return Twilio_SendSMS_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the To input for this SendSMS choreography.
     *
     * @param string $value (required, string) The destination phone number for the SMS message.
     * @return Twilio_SendSMS_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }
}


/**
 * Execution object for the SendSMS choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SendSMS_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SendSMS choreography.
     *
     * @param Temboo_Session $session The session that owns this SendSMS execution.
     * @param Twilio_SendSMS $choreo The choregraphy object for this execution.
     * @param Twilio_SendSMS_Inputs|array $inputs (optional) Inputs as Twilio_SendSMS_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_SendSMS_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_SendSMS $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SendSMS execution.
     *
     * @return Twilio_SendSMS_Results New results object.
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
     * Wraps results in appopriate results class for this SendSMS execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_SendSMS_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_SendSMS_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SendSMS choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SendSMS_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SendSMS choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_SendSMS_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
}

/**
 * Create a Twilio subaccount.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_CreateSubaccount extends Temboo_Choreography
{
    /**
     * Create a Twilio subaccount.
     *
     * @param Temboo_Session $session The session that owns this CreateSubaccount choreography.
     * @return Twilio_CreateSubaccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/CreateSubaccount/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateSubaccount choreography.
     *
     * @param Twilio_CreateSubaccount_Inputs|array $inputs (optional) Inputs as Twilio_CreateSubaccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_CreateSubaccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_CreateSubaccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateSubaccount choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_CreateSubaccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_CreateSubaccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateSubaccount choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_CreateSubaccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateSubaccount choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_CreateSubaccount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateSubaccount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_CreateSubaccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twilio_CreateSubaccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this CreateSubaccount choreography.
     *
     * @param string $value (conditional, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_CreateSubaccount_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this CreateSubaccount choreography.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_CreateSubaccount_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this CreateSubaccount choreography.
     *
     * @param string $value (optional, string) Enter a name for the subaccount being created.
     * @return Twilio_CreateSubaccount_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }
}


/**
 * Execution object for the CreateSubaccount choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_CreateSubaccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateSubaccount choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateSubaccount execution.
     * @param Twilio_CreateSubaccount $choreo The choregraphy object for this execution.
     * @param Twilio_CreateSubaccount_Inputs|array $inputs (optional) Inputs as Twilio_CreateSubaccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_CreateSubaccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_CreateSubaccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateSubaccount execution.
     *
     * @return Twilio_CreateSubaccount_Results New results object.
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
     * Wraps results in appopriate results class for this CreateSubaccount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_CreateSubaccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_CreateSubaccount_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateSubaccount choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_CreateSubaccount_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateSubaccount choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_CreateSubaccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateSubaccount execution.
     *
     * @return string (xml) The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete a notification from the account log.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_DeleteNotification extends Temboo_Choreography
{
    /**
     * Delete a notification from the account log.
     *
     * @param Temboo_Session $session The session that owns this DeleteNotification choreography.
     * @return Twilio_DeleteNotification New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/DeleteNotification/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteNotification choreography.
     *
     * @param Twilio_DeleteNotification_Inputs|array $inputs (optional) Inputs as Twilio_DeleteNotification_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_DeleteNotification_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_DeleteNotification_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteNotification choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_DeleteNotification_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_DeleteNotification_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteNotification choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_DeleteNotification_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteNotification choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_DeleteNotification_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteNotification input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_DeleteNotification_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twilio_DeleteNotification_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this DeleteNotification choreography.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_DeleteNotification_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this DeleteNotification choreography.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_DeleteNotification_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the NotificationSID input for this DeleteNotification choreography.
     *
     * @param string $value (required, string) Enter the SID of the notification resource to be deleted.
     * @return Twilio_DeleteNotification_Inputs For method chaining.
     */
    public function setNotificationSID($value)
    {
        return $this->set('NotificationSID', $value);
    }
}


/**
 * Execution object for the DeleteNotification choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_DeleteNotification_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteNotification choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteNotification execution.
     * @param Twilio_DeleteNotification $choreo The choregraphy object for this execution.
     * @param Twilio_DeleteNotification_Inputs|array $inputs (optional) Inputs as Twilio_DeleteNotification_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_DeleteNotification_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_DeleteNotification $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteNotification execution.
     *
     * @return Twilio_DeleteNotification_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteNotification execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_DeleteNotification_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_DeleteNotification_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteNotification choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_DeleteNotification_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteNotification choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_DeleteNotification_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteNotification execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Return a list of all notifications generated for a specified account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetAllNotifications extends Temboo_Choreography
{
    /**
     * Return a list of all notifications generated for a specified account.
     *
     * @param Temboo_Session $session The session that owns this GetAllNotifications choreography.
     * @return Twilio_GetAllNotifications New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/GetAllNotifications/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAllNotifications choreography.
     *
     * @param Twilio_GetAllNotifications_Inputs|array $inputs (optional) Inputs as Twilio_GetAllNotifications_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_GetAllNotifications_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_GetAllNotifications_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllNotifications choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_GetAllNotifications_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_GetAllNotifications_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllNotifications choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetAllNotifications_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAllNotifications choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_GetAllNotifications_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllNotifications input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_GetAllNotifications_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twilio_GetAllNotifications_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetAllNotifications choreography.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_GetAllNotifications_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetAllNotifications choreography.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_GetAllNotifications_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the LogLevel input for this GetAllNotifications choreography.
     *
     * @param int $value (optional, integer) Specify the log level by entering: 0 for ERROR, 1 for WARNING.
     * @return Twilio_GetAllNotifications_Inputs For method chaining.
     */
    public function setLogLevel($value)
    {
        return $this->set('LogLevel', $value);
    }

    /**
     * Set the value for the MessageDate input for this GetAllNotifications choreography.
     *
     * @param string $value (optional, string) Filter notifications by date.  Dates should be formatted as follows: YYYY-MM-DD.  Dates before, at, or after a specified date can be entered using inequality operators: >=YYYY-MM-DD
     * @return Twilio_GetAllNotifications_Inputs For method chaining.
     */
    public function setMessageDate($value)
    {
        return $this->set('MessageDate', $value);
    }
}


/**
 * Execution object for the GetAllNotifications choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetAllNotifications_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllNotifications choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAllNotifications execution.
     * @param Twilio_GetAllNotifications $choreo The choregraphy object for this execution.
     * @param Twilio_GetAllNotifications_Inputs|array $inputs (optional) Inputs as Twilio_GetAllNotifications_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_GetAllNotifications_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_GetAllNotifications $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllNotifications execution.
     *
     * @return Twilio_GetAllNotifications_Results New results object.
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
     * Wraps results in appopriate results class for this GetAllNotifications execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_GetAllNotifications_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_GetAllNotifications_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAllNotifications choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetAllNotifications_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAllNotifications choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_GetAllNotifications_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAllNotifications execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a specific SMS from Twilio by allowing you to specify a message ID.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetSMSMessageById extends Temboo_Choreography
{
    /**
     * Retrieves a specific SMS from Twilio by allowing you to specify a message ID.
     *
     * @param Temboo_Session $session The session that owns this GetSMSMessageById choreography.
     * @return Twilio_GetSMSMessageById New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/GetSMSMessageById/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetSMSMessageById choreography.
     *
     * @param Twilio_GetSMSMessageById_Inputs|array $inputs (optional) Inputs as Twilio_GetSMSMessageById_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_GetSMSMessageById_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_GetSMSMessageById_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSMSMessageById choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_GetSMSMessageById_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_GetSMSMessageById_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSMSMessageById choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetSMSMessageById_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetSMSMessageById choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_GetSMSMessageById_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSMSMessageById input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_GetSMSMessageById_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twilio_GetSMSMessageById_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetSMSMessageById choreography.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_GetSMSMessageById_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetSMSMessageById choreography.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_GetSMSMessageById_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the SMSMessageSid input for this GetSMSMessageById choreography.
     *
     * @param string $value (required, string) The unique ID for the Twilio message you want to retrieve.
     * @return Twilio_GetSMSMessageById_Inputs For method chaining.
     */
    public function setSMSMessageSid($value)
    {
        return $this->set('SMSMessageSid', $value);
    }
}


/**
 * Execution object for the GetSMSMessageById choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetSMSMessageById_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSMSMessageById choreography.
     *
     * @param Temboo_Session $session The session that owns this GetSMSMessageById execution.
     * @param Twilio_GetSMSMessageById $choreo The choregraphy object for this execution.
     * @param Twilio_GetSMSMessageById_Inputs|array $inputs (optional) Inputs as Twilio_GetSMSMessageById_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_GetSMSMessageById_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_GetSMSMessageById $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSMSMessageById execution.
     *
     * @return Twilio_GetSMSMessageById_Results New results object.
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
     * Wraps results in appopriate results class for this GetSMSMessageById execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_GetSMSMessageById_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_GetSMSMessageById_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetSMSMessageById choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetSMSMessageById_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetSMSMessageById choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_GetSMSMessageById_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetSMSMessageById execution.
     *
     * @return string (xml) The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain account information.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetAccountInfo extends Temboo_Choreography
{
    /**
     * Obtain account information.
     *
     * @param Temboo_Session $session The session that owns this GetAccountInfo choreography.
     * @return Twilio_GetAccountInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/GetAccountInfo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAccountInfo choreography.
     *
     * @param Twilio_GetAccountInfo_Inputs|array $inputs (optional) Inputs as Twilio_GetAccountInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_GetAccountInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_GetAccountInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAccountInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_GetAccountInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_GetAccountInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAccountInfo choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetAccountInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAccountInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_GetAccountInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAccountInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_GetAccountInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twilio_GetAccountInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetAccountInfo choreography.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_GetAccountInfo_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetAccountInfo choreography.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_GetAccountInfo_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }
}


/**
 * Execution object for the GetAccountInfo choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetAccountInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAccountInfo choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAccountInfo execution.
     * @param Twilio_GetAccountInfo $choreo The choregraphy object for this execution.
     * @param Twilio_GetAccountInfo_Inputs|array $inputs (optional) Inputs as Twilio_GetAccountInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_GetAccountInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_GetAccountInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAccountInfo execution.
     *
     * @return Twilio_GetAccountInfo_Results New results object.
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
     * Wraps results in appopriate results class for this GetAccountInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_GetAccountInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_GetAccountInfo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAccountInfo choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetAccountInfo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAccountInfo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_GetAccountInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAccountInfo execution.
     *
     * @return string (xml) The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get comprehensive log information for a specified Notification SID. 
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetNotificationBySID extends Temboo_Choreography
{
    /**
     * Get comprehensive log information for a specified Notification SID. 
     *
     * @param Temboo_Session $session The session that owns this GetNotificationBySID choreography.
     * @return Twilio_GetNotificationBySID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/GetNotificationBySID/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetNotificationBySID choreography.
     *
     * @param Twilio_GetNotificationBySID_Inputs|array $inputs (optional) Inputs as Twilio_GetNotificationBySID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_GetNotificationBySID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_GetNotificationBySID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNotificationBySID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_GetNotificationBySID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_GetNotificationBySID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNotificationBySID choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetNotificationBySID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetNotificationBySID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_GetNotificationBySID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNotificationBySID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_GetNotificationBySID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twilio_GetNotificationBySID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetNotificationBySID choreography.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_GetNotificationBySID_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetNotificationBySID choreography.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_GetNotificationBySID_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the NotificationSID input for this GetNotificationBySID choreography.
     *
     * @param string $value (required, string) Enter the SID of the notification resource to be retrieved.
     * @return Twilio_GetNotificationBySID_Inputs For method chaining.
     */
    public function setNotificationSID($value)
    {
        return $this->set('NotificationSID', $value);
    }
}


/**
 * Execution object for the GetNotificationBySID choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetNotificationBySID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNotificationBySID choreography.
     *
     * @param Temboo_Session $session The session that owns this GetNotificationBySID execution.
     * @param Twilio_GetNotificationBySID $choreo The choregraphy object for this execution.
     * @param Twilio_GetNotificationBySID_Inputs|array $inputs (optional) Inputs as Twilio_GetNotificationBySID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_GetNotificationBySID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_GetNotificationBySID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNotificationBySID execution.
     *
     * @return Twilio_GetNotificationBySID_Results New results object.
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
     * Wraps results in appopriate results class for this GetNotificationBySID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_GetNotificationBySID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_GetNotificationBySID_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetNotificationBySID choreography.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_GetNotificationBySID_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetNotificationBySID choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_GetNotificationBySID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetNotificationBySID execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>