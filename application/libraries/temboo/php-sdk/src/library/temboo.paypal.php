<?php

/**
 * Temboo PHP SDK PayPal classes
 *
 * Execute Choreographies from the Temboo PayPal bundle.
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
 * @subpackage PayPal
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Generates multiple payments from your PayPal Premier account or Business account to existing PayPal account holders.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_MassPayments extends Temboo_Choreography
{
    /**
     * Generates multiple payments from your PayPal Premier account or Business account to existing PayPal account holders.
     *
     * @param Temboo_Session $session The session that owns this MassPayments choreography.
     * @return PayPal_MassPayments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/MassPayments/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this MassPayments choreography.
     *
     * @param PayPal_MassPayments_Inputs|array $inputs (optional) Inputs as PayPal_MassPayments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_MassPayments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_MassPayments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MassPayments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_MassPayments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_MassPayments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MassPayments choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_MassPayments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the MassPayments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_MassPayments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MassPayments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_MassPayments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return PayPal_MassPayments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the InputFile input for this MassPayments choreography.
     *
     * @param mixed $value (required, any) An input file containing the payments to process. This data can either be in CSV or XML format. The format should be indicated using the InputFormat input. See Choreo documentation for schema details.
     * @return PayPal_MassPayments_Inputs For method chaining.
     */
    public function setInputFile($value)
    {
        return $this->set('InputFile', $value);
    }

    /**
     * Set the value for the EmailSubject input for this MassPayments choreography.
     *
     * @param string $value (optional, string) The subject line of the email that PayPal sends when the transaction is completed. This is the same for all recipients. Character length and limitations: 255 single-byte alphanumeric characters.
     * @return PayPal_MassPayments_Inputs For method chaining.
     */
    public function setEmailSubject($value)
    {
        return $this->set('EmailSubject', $value);
    }

    /**
     * Set the value for the Endpoint input for this MassPayments choreography.
     *
     * @param string $value (optional, string) Set to api-3t.paypal.com when running in production. Defaults to api-3t.sandbox.paypal.com for sandbox testing.
     * @return PayPal_MassPayments_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the InputFormat input for this MassPayments choreography.
     *
     * @param string $value (required, string) The type of input you are providing for this mass payment. Accepted values are "csv" or "xml". See Choreo documentation for expected schema details.
     * @return PayPal_MassPayments_Inputs For method chaining.
     */
    public function setInputFormat($value)
    {
        return $this->set('InputFormat', $value);
    }

    /**
     * Set the value for the Password input for this MassPayments choreography.
     *
     * @param string $value (required, string) The API Password provided by PayPal.
     * @return PayPal_MassPayments_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Signature input for this MassPayments choreography.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_MassPayments_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the User input for this MassPayments choreography.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_MassPayments_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }

}


/**
 * Execution object for the MassPayments choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_MassPayments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MassPayments choreography.
     *
     * @param Temboo_Session $session The session that owns this MassPayments execution.
     * @param PayPal_MassPayments $choreo The choregraphy object for this execution.
     * @param PayPal_MassPayments_Inputs|array $inputs (optional) Inputs as PayPal_MassPayments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_MassPayments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_MassPayments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MassPayments execution.
     *
     * @return PayPal_MassPayments_Results New results object.
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
     * Wraps results in appopriate results class for this MassPayments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_MassPayments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_MassPayments_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the MassPayments choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_MassPayments_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the MassPayments choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_MassPayments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Result" output from this MassPayments execution.
     *
     * @return string The MassPayment result from PayPal returned in the same format you've submitted.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResult()
    {
        return $this->get('Result');
    }
}

/**
 * Confirms whether a postal address and postal code match those of the specified PayPal account holder.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_AddressVerify extends Temboo_Choreography
{
    /**
     * Confirms whether a postal address and postal code match those of the specified PayPal account holder.
     *
     * @param Temboo_Session $session The session that owns this AddressVerify choreography.
     * @return PayPal_AddressVerify New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/AddressVerify/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddressVerify choreography.
     *
     * @param PayPal_AddressVerify_Inputs|array $inputs (optional) Inputs as PayPal_AddressVerify_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_AddressVerify_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_AddressVerify_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddressVerify choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_AddressVerify_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_AddressVerify_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddressVerify choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_AddressVerify_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddressVerify choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_AddressVerify_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddressVerify input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_AddressVerify_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return PayPal_AddressVerify_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this AddressVerify choreography.
     *
     * @param string $value (required, string) The email address of a PayPal member to verify.
     * @return PayPal_AddressVerify_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Endpoint input for this AddressVerify choreography.
     *
     * @param string $value (optional, string) Set to api-3t.paypal.com when running in production. Defaults to api-3t.sandbox.paypal.com for sandbox testing.
     * @return PayPal_AddressVerify_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the Password input for this AddressVerify choreography.
     *
     * @param string $value (required, string) The API Password provided by PayPal.
     * @return PayPal_AddressVerify_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PostalCode input for this AddressVerify choreography.
     *
     * @param string $value (required, string) The postal code to verify.
     * @return PayPal_AddressVerify_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the Signature input for this AddressVerify choreography.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_AddressVerify_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the Street input for this AddressVerify choreography.
     *
     * @param string $value (required, string) The first line of the billing or shipping address to verify.
     * @return PayPal_AddressVerify_Inputs For method chaining.
     */
    public function setStreet($value)
    {
        return $this->set('Street', $value);
    }

    /**
     * Set the value for the User input for this AddressVerify choreography.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_AddressVerify_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the AddressVerify choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_AddressVerify_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddressVerify choreography.
     *
     * @param Temboo_Session $session The session that owns this AddressVerify execution.
     * @param PayPal_AddressVerify $choreo The choregraphy object for this execution.
     * @param PayPal_AddressVerify_Inputs|array $inputs (optional) Inputs as PayPal_AddressVerify_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_AddressVerify_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_AddressVerify $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddressVerify execution.
     *
     * @return PayPal_AddressVerify_Results New results object.
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
     * Wraps results in appopriate results class for this AddressVerify execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_AddressVerify_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_AddressVerify_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddressVerify choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_AddressVerify_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddressVerify choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_AddressVerify_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddressVerify execution.
     *
     * @return string (string) Response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the available balance for a PayPal account.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_GetBalance extends Temboo_Choreography
{
    /**
     * Retrieves the available balance for a PayPal account.
     *
     * @param Temboo_Session $session The session that owns this GetBalance choreography.
     * @return PayPal_GetBalance New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/GetBalance/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBalance choreography.
     *
     * @param PayPal_GetBalance_Inputs|array $inputs (optional) Inputs as PayPal_GetBalance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_GetBalance_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_GetBalance_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBalance choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_GetBalance_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_GetBalance_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBalance choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_GetBalance_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBalance choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_GetBalance_Inputs New instance.
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
     * @return PayPal_GetBalance_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return PayPal_GetBalance_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Endpoint input for this GetBalance choreography.
     *
     * @param string $value (optional, string) Set to api-3t.paypal.com when running in production. Defaults to api-3t.sandbox.paypal.com for sandbox testing.
     * @return PayPal_GetBalance_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the Password input for this GetBalance choreography.
     *
     * @param string $value (required, string) The API Password provided by PayPal.
     * @return PayPal_GetBalance_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Signature input for this GetBalance choreography.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_GetBalance_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the User input for this GetBalance choreography.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_GetBalance_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetBalance choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_GetBalance_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBalance choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBalance execution.
     * @param PayPal_GetBalance $choreo The choregraphy object for this execution.
     * @param PayPal_GetBalance_Inputs|array $inputs (optional) Inputs as PayPal_GetBalance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_GetBalance_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_GetBalance $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBalance execution.
     *
     * @return PayPal_GetBalance_Results New results object.
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
     * @return PayPal_GetBalance_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_GetBalance_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBalance choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_GetBalance_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBalance choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_GetBalance_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBalance execution.
     *
     * @return string (string) Response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Enables you to process a credit card payment.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_ProcessDirectPayment extends Temboo_Choreography
{
    /**
     * Enables you to process a credit card payment.
     *
     * @param Temboo_Session $session The session that owns this ProcessDirectPayment choreography.
     * @return PayPal_ProcessDirectPayment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/ProcessDirectPayment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ProcessDirectPayment choreography.
     *
     * @param PayPal_ProcessDirectPayment_Inputs|array $inputs (optional) Inputs as PayPal_ProcessDirectPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_ProcessDirectPayment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_ProcessDirectPayment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ProcessDirectPayment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_ProcessDirectPayment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_ProcessDirectPayment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ProcessDirectPayment choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_ProcessDirectPayment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ProcessDirectPayment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_ProcessDirectPayment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ProcessDirectPayment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Amount input for this ProcessDirectPayment choreography.
     *
     * @param float $value (required, decimal) The total cost of the transaction to the buyer.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the CardSecurityCode input for this ProcessDirectPayment choreography.
     *
     * @param int $value (required, integer) The card Verification value found on the back of the user's credit card. For Visa, MasterCard, and Discover, the value is exactly 3 digits. For American Express, the value is exactly 4 digits.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setCardSecurityCode($value)
    {
        return $this->set('CardSecurityCode', $value);
    }

    /**
     * Set the value for the City input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, string) The buyer's city.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the CountryCode input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, string) The country code associated with the buyer's address.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the CreditCardNumber input for this ProcessDirectPayment choreography.
     *
     * @param int $value (required, integer) The credit card number used in this payment.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setCreditCardNumber($value)
    {
        return $this->set('CreditCardNumber', $value);
    }

    /**
     * Set the value for the CreditCardType input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, string) The type of credit card being used for this payment.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setCreditCardType($value)
    {
        return $this->set('CreditCardType', $value);
    }

    /**
     * Set the value for the Email input for this ProcessDirectPayment choreography.
     *
     * @param string $value (optional, string) The email address of buyer.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Endpoint input for this ProcessDirectPayment choreography.
     *
     * @param string $value (optional, string) Set to api-3t.paypal.com when running in production. Defaults to api-3t.sandbox.paypal.com for sandbox testing.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the ExpirationDate input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, date) The credit card expiration date. Include leading zero in month if it exists. Formatted like MMYYYY.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setExpirationDate($value)
    {
        return $this->set('ExpirationDate', $value);
    }

    /**
     * Set the value for the FirstName input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, string) The buyer's first name.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the IPAddress input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, string) The IP address of the buyer's browser.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setIPAddress($value)
    {
        return $this->set('IPAddress', $value);
    }

    /**
     * Set the value for the LastName input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, string) The buyer's last name.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the Password input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, string) The API Password provided by PayPal.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PaymentAction input for this ProcessDirectPayment choreography.
     *
     * @param string $value (optional, string) Indicates how you want to obtain payment. Accepted values are "Authorization" or "Sale". Defaults to "Sale".
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setPaymentAction($value)
    {
        return $this->set('PaymentAction', $value);
    }

    /**
     * Set the value for the PhoneNumber input for this ProcessDirectPayment choreography.
     *
     * @param string $value (optional, string) The buyer's phone number.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setPhoneNumber($value)
    {
        return $this->set('PhoneNumber', $value);
    }

    /**
     * Set the value for the ReturnFMFDetails input for this ProcessDirectPayment choreography.
     *
     * @param bool $value (optional, boolean) Flag  to indicate whether you want the results returned by Fraud Management Fitlers. Defaults to 0.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setReturnFMFDetails($value)
    {
        return $this->set('ReturnFMFDetails', $value);
    }

    /**
     * Set the value for the Signature input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the State input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, string) The buyer's state or province.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Street2 input for this ProcessDirectPayment choreography.
     *
     * @param string $value (optional, string) The second line of the buyer's address (if it exists).
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setStreet2($value)
    {
        return $this->set('Street2', $value);
    }

    /**
     * Set the value for the Street input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, string) The buyer's street address (line 1 of address).
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setStreet($value)
    {
        return $this->set('Street', $value);
    }

    /**
     * Set the value for the User input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }

    /**
     * Set the value for the Zip input for this ProcessDirectPayment choreography.
     *
     * @param string $value (required, string) The postal code associated with the buyer's address.
     * @return PayPal_ProcessDirectPayment_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the ProcessDirectPayment choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_ProcessDirectPayment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ProcessDirectPayment choreography.
     *
     * @param Temboo_Session $session The session that owns this ProcessDirectPayment execution.
     * @param PayPal_ProcessDirectPayment $choreo The choregraphy object for this execution.
     * @param PayPal_ProcessDirectPayment_Inputs|array $inputs (optional) Inputs as PayPal_ProcessDirectPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_ProcessDirectPayment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_ProcessDirectPayment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ProcessDirectPayment execution.
     *
     * @return PayPal_ProcessDirectPayment_Results New results object.
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
     * Wraps results in appopriate results class for this ProcessDirectPayment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_ProcessDirectPayment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_ProcessDirectPayment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ProcessDirectPayment choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_ProcessDirectPayment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ProcessDirectPayment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_ProcessDirectPayment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ProcessDirectPayment execution.
     *
     * @return string (string) The full response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Acknowledged" output from this ProcessDirectPayment execution.
     *
     * @return string (string) Indicates the status of the request. Should contain "Sucess" or "Failure".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAcknowledged()
    {
        return $this->get('Acknowledged');
    }

    /**
     * Retrieve the value for the "CorrelationId" output from this ProcessDirectPayment execution.
     *
     * @return string (string) A unique id returned by PayPal for this payment.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCorrelationId()
    {
        return $this->get('CorrelationId');
    }

    /**
     * Retrieve the value for the "ErrorMessage" output from this ProcessDirectPayment execution.
     *
     * @return string (string) This will contain any error message returned by PayPal during this operation.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getErrorMessage()
    {
        return $this->get('ErrorMessage');
    }

    /**
     * Retrieve the value for the "Timestamp" output from this ProcessDirectPayment execution.
     *
     * @return string (date) The timestamp associated with the payment request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTimestamp()
    {
        return $this->get('Timestamp');
    }
}

/**
 * Issue a refund to a PayPal buyer by specifying a transaction ID.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_RefundTransaction extends Temboo_Choreography
{
    /**
     * Issue a refund to a PayPal buyer by specifying a transaction ID.
     *
     * @param Temboo_Session $session The session that owns this RefundTransaction choreography.
     * @return PayPal_RefundTransaction New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/RefundTransaction/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RefundTransaction choreography.
     *
     * @param PayPal_RefundTransaction_Inputs|array $inputs (optional) Inputs as PayPal_RefundTransaction_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_RefundTransaction_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_RefundTransaction_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RefundTransaction choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_RefundTransaction_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_RefundTransaction_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RefundTransaction choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_RefundTransaction_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RefundTransaction choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_RefundTransaction_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RefundTransaction input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_RefundTransaction_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return PayPal_RefundTransaction_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Amount input for this RefundTransaction choreography.
     *
     * @param float $value (optional, decimal) Refund amount. Amount is required if RefundType is set to Partial. If RefundType is set to Full, leave input blank.
     * @return PayPal_RefundTransaction_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the CurrencyCode input for this RefundTransaction choreography.
     *
     * @param string $value (optional, string) A three-character currency code (i.e. USD). Required for partial refunds. Leave this field blank for full refunds. Defaults to USD.
     * @return PayPal_RefundTransaction_Inputs For method chaining.
     */
    public function setCurrencyCode($value)
    {
        return $this->set('CurrencyCode', $value);
    }

    /**
     * Set the value for the Endpoint input for this RefundTransaction choreography.
     *
     * @param string $value (optional, string) Set to api-3t.paypal.com when running in production. Defaults to api-3t.sandbox.paypal.com for sandbox testing.
     * @return PayPal_RefundTransaction_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the InvoiceID input for this RefundTransaction choreography.
     *
     * @param string $value (optional, string) Your own invoice or tracking number. Character length limitation is 127 alphanumeric characters.
     * @return PayPal_RefundTransaction_Inputs For method chaining.
     */
    public function setInvoiceID($value)
    {
        return $this->set('InvoiceID', $value);
    }

    /**
     * Set the value for the Note input for this RefundTransaction choreography.
     *
     * @param string $value (optional, string) Custom note about the refund. Character length limitation is 255 alphanumeric characters.
     * @return PayPal_RefundTransaction_Inputs For method chaining.
     */
    public function setNote($value)
    {
        return $this->set('Note', $value);
    }

    /**
     * Set the value for the Password input for this RefundTransaction choreography.
     *
     * @param string $value (required, string) The API Password provided by PayPal.
     * @return PayPal_RefundTransaction_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the RefundType input for this RefundTransaction choreography.
     *
     * @param string $value (required, string) The refund type must be set to Full or Partial.  This flag effects what values some other input variables should have. Defaults to Full.
     * @return PayPal_RefundTransaction_Inputs For method chaining.
     */
    public function setRefundType($value)
    {
        return $this->set('RefundType', $value);
    }

    /**
     * Set the value for the Signature input for this RefundTransaction choreography.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_RefundTransaction_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the TransactionID input for this RefundTransaction choreography.
     *
     * @param string $value (required, string) The ID for the transaction you want to retrieve data for.
     * @return PayPal_RefundTransaction_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }

    /**
     * Set the value for the User input for this RefundTransaction choreography.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_RefundTransaction_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the RefundTransaction choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_RefundTransaction_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RefundTransaction choreography.
     *
     * @param Temboo_Session $session The session that owns this RefundTransaction execution.
     * @param PayPal_RefundTransaction $choreo The choregraphy object for this execution.
     * @param PayPal_RefundTransaction_Inputs|array $inputs (optional) Inputs as PayPal_RefundTransaction_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_RefundTransaction_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_RefundTransaction $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RefundTransaction execution.
     *
     * @return PayPal_RefundTransaction_Results New results object.
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
     * Wraps results in appopriate results class for this RefundTransaction execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_RefundTransaction_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_RefundTransaction_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RefundTransaction choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_RefundTransaction_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RefundTransaction choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_RefundTransaction_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RefundTransaction execution.
     *
     * @return string (string) Response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a specific transaction.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_GetTransactionDetails extends Temboo_Choreography
{
    /**
     * Retrieves information about a specific transaction.
     *
     * @param Temboo_Session $session The session that owns this GetTransactionDetails choreography.
     * @return PayPal_GetTransactionDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/GetTransactionDetails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTransactionDetails choreography.
     *
     * @param PayPal_GetTransactionDetails_Inputs|array $inputs (optional) Inputs as PayPal_GetTransactionDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_GetTransactionDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_GetTransactionDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTransactionDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_GetTransactionDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_GetTransactionDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTransactionDetails choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_GetTransactionDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTransactionDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_GetTransactionDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTransactionDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_GetTransactionDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return PayPal_GetTransactionDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Endpoint input for this GetTransactionDetails choreography.
     *
     * @param string $value (optional, string) Set to api-3t.paypal.com when running in production. Defaults to api-3t.sandbox.paypal.com for sandbox testing.
     * @return PayPal_GetTransactionDetails_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the Password input for this GetTransactionDetails choreography.
     *
     * @param string $value (required, string) The API Password provided by PayPal.
     * @return PayPal_GetTransactionDetails_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Signature input for this GetTransactionDetails choreography.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_GetTransactionDetails_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the TransactionID input for this GetTransactionDetails choreography.
     *
     * @param string $value (required, string) The ID for the transaction you want to retrieve data for.
     * @return PayPal_GetTransactionDetails_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }

    /**
     * Set the value for the User input for this GetTransactionDetails choreography.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_GetTransactionDetails_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTransactionDetails choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_GetTransactionDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTransactionDetails choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTransactionDetails execution.
     * @param PayPal_GetTransactionDetails $choreo The choregraphy object for this execution.
     * @param PayPal_GetTransactionDetails_Inputs|array $inputs (optional) Inputs as PayPal_GetTransactionDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_GetTransactionDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_GetTransactionDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTransactionDetails execution.
     *
     * @return PayPal_GetTransactionDetails_Results New results object.
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
     * Wraps results in appopriate results class for this GetTransactionDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_GetTransactionDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_GetTransactionDetails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTransactionDetails choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_GetTransactionDetails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTransactionDetails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_GetTransactionDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTransactionDetails execution.
     *
     * @return string (string) Response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the available balance for a PayPal account.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_MakeIndividualPayment extends Temboo_Choreography
{
    /**
     * Retrieves the available balance for a PayPal account.
     *
     * @param Temboo_Session $session The session that owns this MakeIndividualPayment choreography.
     * @return PayPal_MakeIndividualPayment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/MakeIndividualPayment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this MakeIndividualPayment choreography.
     *
     * @param PayPal_MakeIndividualPayment_Inputs|array $inputs (optional) Inputs as PayPal_MakeIndividualPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_MakeIndividualPayment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_MakeIndividualPayment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MakeIndividualPayment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_MakeIndividualPayment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_MakeIndividualPayment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MakeIndividualPayment choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_MakeIndividualPayment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the MakeIndividualPayment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_MakeIndividualPayment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MakeIndividualPayment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_MakeIndividualPayment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return PayPal_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CurrencyCode input for this MakeIndividualPayment choreography.
     *
     * @param string $value (optional, string) The currency code associated with the PaymentAmount. Defaults to "USD".
     * @return PayPal_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setCurrencyCode($value)
    {
        return $this->set('CurrencyCode', $value);
    }

    /**
     * Set the value for the EmailAddress input for this MakeIndividualPayment choreography.
     *
     * @param string $value (required, string) The email address used to identify the recipient of the payment.
     * @return PayPal_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the EmailSubject input for this MakeIndividualPayment choreography.
     *
     * @param string $value (optional, string) The subject line of the email that PayPal sends when the transaction is completed. Character length and limitations: 255 single-byte alphanumeric characters.
     * @return PayPal_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setEmailSubject($value)
    {
        return $this->set('EmailSubject', $value);
    }

    /**
     * Set the value for the Endpoint input for this MakeIndividualPayment choreography.
     *
     * @param string $value (optional, string) Set to api-3t.paypal.com when running in production. Defaults to api-3t.sandbox.paypal.com for sandbox testing.
     * @return PayPal_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the Password input for this MakeIndividualPayment choreography.
     *
     * @param string $value (required, string) The API Password provided by PayPal.
     * @return PayPal_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PaymentAmount input for this MakeIndividualPayment choreography.
     *
     * @param float $value (required, decimal) The amount to be paid.
     * @return PayPal_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setPaymentAmount($value)
    {
        return $this->set('PaymentAmount', $value);
    }

    /**
     * Set the value for the Signature input for this MakeIndividualPayment choreography.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the User input for this MakeIndividualPayment choreography.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the MakeIndividualPayment choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_MakeIndividualPayment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MakeIndividualPayment choreography.
     *
     * @param Temboo_Session $session The session that owns this MakeIndividualPayment execution.
     * @param PayPal_MakeIndividualPayment $choreo The choregraphy object for this execution.
     * @param PayPal_MakeIndividualPayment_Inputs|array $inputs (optional) Inputs as PayPal_MakeIndividualPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_MakeIndividualPayment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_MakeIndividualPayment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MakeIndividualPayment execution.
     *
     * @return PayPal_MakeIndividualPayment_Results New results object.
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
     * Wraps results in appopriate results class for this MakeIndividualPayment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_MakeIndividualPayment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_MakeIndividualPayment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the MakeIndividualPayment choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_MakeIndividualPayment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the MakeIndividualPayment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_MakeIndividualPayment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this MakeIndividualPayment execution.
     *
     * @return string (string) The full response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Acknowledged" output from this MakeIndividualPayment execution.
     *
     * @return string (string) Indicates the status of the request. Should contain "Sucess" or "Failure".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAcknowledged()
    {
        return $this->get('Acknowledged');
    }

    /**
     * Retrieve the value for the "CorrelationId" output from this MakeIndividualPayment execution.
     *
     * @return string (string) A unique id returned by PayPal for this payment.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCorrelationId()
    {
        return $this->get('CorrelationId');
    }

    /**
     * Retrieve the value for the "ErrorMessage" output from this MakeIndividualPayment execution.
     *
     * @return string (string) This will contain any error message returned by PayPal during this operation.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getErrorMessage()
    {
        return $this->get('ErrorMessage');
    }

    /**
     * Retrieve the value for the "Timestamp" output from this MakeIndividualPayment execution.
     *
     * @return string (date) The timestamp associated with the payment request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTimestamp()
    {
        return $this->get('Timestamp');
    }
}

/**
 * Retrieves transaction history for transactions that meet a specified criteria.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_TransactionSearch extends Temboo_Choreography
{
    /**
     * Retrieves transaction history for transactions that meet a specified criteria.
     *
     * @param Temboo_Session $session The session that owns this TransactionSearch choreography.
     * @return PayPal_TransactionSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/TransactionSearch/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TransactionSearch choreography.
     *
     * @param PayPal_TransactionSearch_Inputs|array $inputs (optional) Inputs as PayPal_TransactionSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_TransactionSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_TransactionSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TransactionSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_TransactionSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_TransactionSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TransactionSearch choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_TransactionSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TransactionSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_TransactionSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TransactionSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Account input for this TransactionSearch choreography.
     *
     * @param string $value (optional, string) Search by credit card number.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setAccount($value)
    {
        return $this->set('Account', $value);
    }

    /**
     * Set the value for the AuctionItemNumber input for this TransactionSearch choreography.
     *
     * @param string $value (optional, string) Search by auction item number of the purchased item.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setAuctionItemNumber($value)
    {
        return $this->set('AuctionItemNumber', $value);
    }

    /**
     * Set the value for the CurrencyCode input for this TransactionSearch choreography.
     *
     * @param string $value (optional, string) Search by currency code (i.e. USD).
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setCurrencyCode($value)
    {
        return $this->set('CurrencyCode', $value);
    }

    /**
     * Set the value for the Email input for this TransactionSearch choreography.
     *
     * @param string $value (optional, string) Search by email.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndDate input for this TransactionSearch choreography.
     *
     * @param string $value (optional, date) The latest transaction date to return. Must be an epoch timestamp in milliseconds or formatted in UTC like: 2011-05-19T00:00:00Z.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Endpoint input for this TransactionSearch choreography.
     *
     * @param string $value (optional, string) Set to api-3t.paypal.com when running in production. Defaults to api-3t.sandbox.paypal.com for sandbox testing.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the InvoiceNumber input for this TransactionSearch choreography.
     *
     * @param string $value (optional, string) Search by invoice number.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setInvoiceNumber($value)
    {
        return $this->set('InvoiceNumber', $value);
    }

    /**
     * Set the value for the Password input for this TransactionSearch choreography.
     *
     * @param string $value (required, string) The API Password provided by PayPal.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ReceiptId input for this TransactionSearch choreography.
     *
     * @param string $value (optional, string) Search by the PayPal receipt ID.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setReceiptId($value)
    {
        return $this->set('ReceiptId', $value);
    }

    /**
     * Set the value for the Receiver input for this TransactionSearch choreography.
     *
     * @param string $value (optional, string) Search by the email address of the receiver.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setReceiver($value)
    {
        return $this->set('Receiver', $value);
    }

    /**
     * Set the value for the Signature input for this TransactionSearch choreography.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the StartDate input for this TransactionSearch choreography.
     *
     * @param string $value (required, date) The earliest transaction date to return. Must be an epoch timestamp in milliseconds or formatted in UTC like: 2011-05-19T00:00:00Z.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the TransactionAmount input for this TransactionSearch choreography.
     *
     * @param float $value (optional, decimal) Search by transaction amount.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setTransactionAmount($value)
    {
        return $this->set('TransactionAmount', $value);
    }

    /**
     * Set the value for the TransactionClass input for this TransactionSearch choreography.
     *
     * @param string $value (optional, string) Search by classification of transaction (i.e. All, Sent, Recieved, etc).
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setTransactionClass($value)
    {
        return $this->set('TransactionClass', $value);
    }

    /**
     * Set the value for the TransactionId input for this TransactionSearch choreography.
     *
     * @param string $value (optional, string) Search by the transaction ID
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setTransactionId($value)
    {
        return $this->set('TransactionId', $value);
    }

    /**
     * Set the value for the TransactionStatus input for this TransactionSearch choreography.
     *
     * @param string $value (optional, string) Search by transaction status (i.e. Pending, Processing, Success, Denied, Reversed).
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setTransactionStatus($value)
    {
        return $this->set('TransactionStatus', $value);
    }

    /**
     * Set the value for the User input for this TransactionSearch choreography.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_TransactionSearch_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the TransactionSearch choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_TransactionSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TransactionSearch choreography.
     *
     * @param Temboo_Session $session The session that owns this TransactionSearch execution.
     * @param PayPal_TransactionSearch $choreo The choregraphy object for this execution.
     * @param PayPal_TransactionSearch_Inputs|array $inputs (optional) Inputs as PayPal_TransactionSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_TransactionSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_TransactionSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TransactionSearch execution.
     *
     * @return PayPal_TransactionSearch_Results New results object.
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
     * Wraps results in appopriate results class for this TransactionSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_TransactionSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_TransactionSearch_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TransactionSearch choreography.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_TransactionSearch_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TransactionSearch choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_TransactionSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TransactionSearch execution.
     *
     * @return string (string) Response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>