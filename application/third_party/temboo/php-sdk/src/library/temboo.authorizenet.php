<?php

/**
 * Temboo PHP SDK AuthorizeNet classes
 *
 * Execute Choreographies from the Temboo AuthorizeNet bundle.
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
 * @subpackage AuthorizeNet
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Returns status information for a specified subscription.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus extends Temboo_Choreography
{
    /**
     * Returns status information for a specified subscription.
     *
     * @param Temboo_Session $session The session that owns this GetSubscriptionStatus choreography.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/AutomatedRecurringBilling/GetSubscriptionStatus/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetSubscriptionStatus choreography.
     *
     * @param AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSubscriptionStatus choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSubscriptionStatus choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetSubscriptionStatus choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSubscriptionStatus input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetSubscriptionStatus choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetSubscriptionStatus choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the RefId input for this GetSubscriptionStatus choreography.
     *
     * @param string $value (optional, string) The merchant assigned reference id for the subscription.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function setRefId($value)
    {
        return $this->set('RefId', $value);
    }

    /**
     * Set the value for the SubscriptionId input for this GetSubscriptionStatus choreography.
     *
     * @param int $value (required, integer) The id of the subscription that you want to retrieve the status for.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function setSubscriptionId($value)
    {
        return $this->set('SubscriptionId', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetSubscriptionStatus choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetSubscriptionStatus choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSubscriptionStatus choreography.
     *
     * @param Temboo_Session $session The session that owns this GetSubscriptionStatus execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSubscriptionStatus execution.
     *
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Results New results object.
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
     * Wraps results in appopriate results class for this GetSubscriptionStatus execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetSubscriptionStatus choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetSubscriptionStatus choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetSubscriptionStatus execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new subscription and sets up a recurring payment for the subscription using a credit card payment method.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard extends Temboo_Choreography
{
    /**
     * Creates a new subscription and sets up a recurring payment for the subscription using a credit card payment method.
     *
     * @param Temboo_Session $session The session that owns this CreateSubscriptionWithCreditCard choreography.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/AutomatedRecurringBilling/CreateSubscriptionWithCreditCard/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateSubscriptionWithCreditCard choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateSubscriptionWithCreditCard choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateSubscriptionWithCreditCard input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Amount input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param float $value (required, decimal) The amount to bill the customer for each recurring payment.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the BillingAddress input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The street address associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setBillingAddress($value)
    {
        return $this->set('BillingAddress', $value);
    }

    /**
     * Set the value for the BillingCity input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The city associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setBillingCity($value)
    {
        return $this->set('BillingCity', $value);
    }

    /**
     * Set the value for the BillingCompany input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The company associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setBillingCompany($value)
    {
        return $this->set('BillingCompany', $value);
    }

    /**
     * Set the value for the BillingCountry input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The country associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setBillingCountry($value)
    {
        return $this->set('BillingCountry', $value);
    }

    /**
     * Set the value for the BillingFirstName input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (required, string) The first name associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setBillingFirstName($value)
    {
        return $this->set('BillingFirstName', $value);
    }

    /**
     * Set the value for the BillingLastName input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (required, string) The last name associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setBillingLastName($value)
    {
        return $this->set('BillingLastName', $value);
    }

    /**
     * Set the value for the BillingState input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The state associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setBillingState($value)
    {
        return $this->set('BillingState', $value);
    }

    /**
     * Set the value for the BillingZipCode input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The zip code associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setBillingZipCode($value)
    {
        return $this->set('BillingZipCode', $value);
    }

    /**
     * Set the value for the CardCode input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param int $value (optional, integer) The 3 digit security code of the credit card.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setCardCode($value)
    {
        return $this->set('CardCode', $value);
    }

    /**
     * Set the value for the CardNumber input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param int $value (required, integer) The credit card number for the recurring payment.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setCardNumber($value)
    {
        return $this->set('CardNumber', $value);
    }

    /**
     * Set the value for the Description input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The description of the subscription. 255 max characters.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Email input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The email address of the customer.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Endpoint input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the ExpirationDate input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (required, date) The 4 digit expiration date of the credit card. Formatted like MM/YY.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setExpirationDate($value)
    {
        return $this->set('ExpirationDate', $value);
    }

    /**
     * Set the value for the FaxNumber input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The fax number of the customer.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setFaxNumber($value)
    {
        return $this->set('FaxNumber', $value);
    }

    /**
     * Set the value for the Id input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The merchant assigned customer id.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setId($value)
    {
        return $this->set('Id', $value);
    }

    /**
     * Set the value for the InvoiceNumber input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The merchant assigned invoice number for the subscription.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setInvoiceNumber($value)
    {
        return $this->set('InvoiceNumber', $value);
    }

    /**
     * Set the value for the Length input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param int $value (optional, integer) Measurement of time for the frequency of billing. Associated with 'Unit'. Defaults to 1. Use 1-12 for unit months or 7-365 for unit days.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setLength($value)
    {
        return $this->set('Length', $value);
    }

    /**
     * Set the value for the PhoneNumber input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The phone number of the customer.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setPhoneNumber($value)
    {
        return $this->set('PhoneNumber', $value);
    }

    /**
     * Set the value for the RefId input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The merchant-assigned reference ID for the request. If specified, it will be returned in the response from authorize.net.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setRefId($value)
    {
        return $this->set('RefId', $value);
    }

    /**
     * Set the value for the ShippingAddress input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The street address associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setShippingAddress($value)
    {
        return $this->set('ShippingAddress', $value);
    }

    /**
     * Set the value for the ShippingCity input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The city associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setShippingCity($value)
    {
        return $this->set('ShippingCity', $value);
    }

    /**
     * Set the value for the ShippingCompany input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The company associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setShippingCompany($value)
    {
        return $this->set('ShippingCompany', $value);
    }

    /**
     * Set the value for the ShippingCountry input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The country associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setShippingCountry($value)
    {
        return $this->set('ShippingCountry', $value);
    }

    /**
     * Set the value for the ShippingFirstName input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The first name associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setShippingFirstName($value)
    {
        return $this->set('ShippingFirstName', $value);
    }

    /**
     * Set the value for the ShippingLastName input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The last name associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setShippingLastName($value)
    {
        return $this->set('ShippingLastName', $value);
    }

    /**
     * Set the value for the ShippingState input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The state associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setShippingState($value)
    {
        return $this->set('ShippingState', $value);
    }

    /**
     * Set the value for the ShippingZipCode input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The zip code associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setShippingZipCode($value)
    {
        return $this->set('ShippingZipCode', $value);
    }

    /**
     * Set the value for the StartDate input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (required, date) The date that the subscription and billing begin. Formatted like YYYY-MM-DD.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the SubscriptionName input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) The merchant assigned name for the subscription. 50 max characters.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setSubscriptionName($value)
    {
        return $this->set('SubscriptionName', $value);
    }

    /**
     * Set the value for the TotalOccurrences input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param int $value (optional, integer) Number of billing occurrences or payments for the subscription. Defaults to 9999 which means the subscription will be ongoing.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setTotalOccurrences($value)
    {
        return $this->set('TotalOccurrences', $value);
    }

    /**
     * Set the value for the TransactionKey input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }

    /**
     * Set the value for the TrialAmount input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param float $value (conditional, decimal) The amount to be charged for a payment during a trial period. Required when TrialOccurances is specified. Defaults to 0.00.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setTrialAmount($value)
    {
        return $this->set('TrialAmount', $value);
    }

    /**
     * Set the value for the TrialOccurrences input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param int $value (optional, integer) Number of billing occurrences or payments in the trial period. Defaults to 0.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setTrialOccurrences($value)
    {
        return $this->set('TrialOccurrences', $value);
    }

    /**
     * Set the value for the Unit input for this CreateSubscriptionWithCreditCard choreography.
     *
     * @param string $value (optional, string) Unit of time between billing cycles. Used in association with interval 'Length'. Values can be 'months' or 'days'. Defaults to 'months'.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }
}


/**
 * Execution object for the CreateSubscriptionWithCreditCard choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateSubscriptionWithCreditCard choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateSubscriptionWithCreditCard execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateSubscriptionWithCreditCard execution.
     *
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Results New results object.
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
     * Wraps results in appopriate results class for this CreateSubscriptionWithCreditCard execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateSubscriptionWithCreditCard choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateSubscriptionWithCreditCard choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithCreditCard_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateSubscriptionWithCreditCard execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns data about a settled batch including: Batch ID, Settlement Time, and Settlement State, and Batch Statistics by payment type.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList extends Temboo_Choreography
{
    /**
     * Returns data about a settled batch including: Batch ID, Settlement Time, and Settlement State, and Batch Statistics by payment type.
     *
     * @param Temboo_Session $session The session that owns this GetSettledBatchList choreography.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/TransactionDetailsAPI/GetSettledBatchList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetSettledBatchList choreography.
     *
     * @param AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSettledBatchList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSettledBatchList choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetSettledBatchList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSettledBatchList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetSettledBatchList choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetSettledBatchList choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the FirstSettlementDate input for this GetSettledBatchList choreography.
     *
     * @param string $value (required, date) Can be an epoch timestamp in milliseconds or formatted like 2010-12-01T00:00:00Z.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setFirstSettlementDate($value)
    {
        return $this->set('FirstSettlementDate', $value);
    }

    /**
     * Set the value for the IncludeStatistics input for this GetSettledBatchList choreography.
     *
     * @param bool $value (optional, boolean) When 1 is specified, batch statistics by payment type are returned. Defaults to 1.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setIncludeStatistics($value)
    {
        return $this->set('IncludeStatistics', $value);
    }

    /**
     * Set the value for the LastSettlementDate input for this GetSettledBatchList choreography.
     *
     * @param string $value (required, date) Can be an epoch timestamp in milliseconds or formatted like 2010-12-01T00:00:00Z.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setLastSettlementDate($value)
    {
        return $this->set('LastSettlementDate', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetSettledBatchList choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetSettledBatchList choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSettledBatchList choreography.
     *
     * @param Temboo_Session $session The session that owns this GetSettledBatchList execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSettledBatchList execution.
     *
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Results New results object.
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
     * Wraps results in appopriate results class for this GetSettledBatchList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetSettledBatchList choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetSettledBatchList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetSettledBatchList execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Cancels an existing subscription.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CancelSubscription extends Temboo_Choreography
{
    /**
     * Cancels an existing subscription.
     *
     * @param Temboo_Session $session The session that owns this CancelSubscription choreography.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/AutomatedRecurringBilling/CancelSubscription/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CancelSubscription choreography.
     *
     * @param AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CancelSubscription choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CancelSubscription choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CancelSubscription choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CancelSubscription input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this CancelSubscription choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Endpoint input for this CancelSubscription choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the RefId input for this CancelSubscription choreography.
     *
     * @param string $value (optional, string) The merchant assigned reference id for the subscription.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function setRefId($value)
    {
        return $this->set('RefId', $value);
    }

    /**
     * Set the value for the SubscriptionId input for this CancelSubscription choreography.
     *
     * @param int $value (required, integer) The id of the subscription that you want to cancel.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function setSubscriptionId($value)
    {
        return $this->set('SubscriptionId', $value);
    }

    /**
     * Set the value for the TransactionKey input for this CancelSubscription choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the CancelSubscription choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CancelSubscription choreography.
     *
     * @param Temboo_Session $session The session that owns this CancelSubscription execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_CancelSubscription $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_AutomatedRecurringBilling_CancelSubscription $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CancelSubscription execution.
     *
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Results New results object.
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
     * Wraps results in appopriate results class for this CancelSubscription execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CancelSubscription choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CancelSubscription choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CancelSubscription execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all existing customer profile IDs.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds extends Temboo_Choreography
{
    /**
     * Retrieves all existing customer profile IDs.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerProfileIds choreography.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/CustomerInformationManager/GetCustomerProfileIds/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCustomerProfileIds choreography.
     *
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCustomerProfileIds choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCustomerProfileIds choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCustomerProfileIds choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCustomerProfileIds input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetCustomerProfileIds choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetCustomerProfileIds choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetCustomerProfileIds choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetCustomerProfileIds choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCustomerProfileIds choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerProfileIds execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCustomerProfileIds execution.
     *
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Results New results object.
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
     * Wraps results in appopriate results class for this GetCustomerProfileIds execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCustomerProfileIds choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCustomerProfileIds choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCustomerProfileIds execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an existing customer profile by id with relevant payment profiles and shipping addresses.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfile extends Temboo_Choreography
{
    /**
     * Retrieves an existing customer profile by id with relevant payment profiles and shipping addresses.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerProfile choreography.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/CustomerInformationManager/GetCustomerProfile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCustomerProfile choreography.
     *
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCustomerProfile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCustomerProfile choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCustomerProfile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCustomerProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetCustomerProfile choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the CustomerProfileId input for this GetCustomerProfile choreography.
     *
     * @param int $value (required, integer) The id of the customer who's profile you want to return.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs For method chaining.
     */
    public function setCustomerProfileId($value)
    {
        return $this->set('CustomerProfileId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetCustomerProfile choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetCustomerProfile choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetCustomerProfile choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCustomerProfile choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerProfile execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerProfile $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_CustomerInformationManager_GetCustomerProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCustomerProfile execution.
     *
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Results New results object.
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
     * Wraps results in appopriate results class for this GetCustomerProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCustomerProfile choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCustomerProfile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCustomerProfile execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new subscription and sets up a recurring payment for the subscription using a bank account payment.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount extends Temboo_Choreography
{
    /**
     * Creates a new subscription and sets up a recurring payment for the subscription using a bank account payment.
     *
     * @param Temboo_Session $session The session that owns this CreateSubscriptionWithBankAccount choreography.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/AutomatedRecurringBilling/CreateSubscriptionWithBankAccount/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateSubscriptionWithBankAccount choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateSubscriptionWithBankAccount choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateSubscriptionWithBankAccount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the AccountNumber input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param int $value (required, integer) The account number associated with the bank account payment.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AccountType input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (required, string) The account type to use for the bank account payment. Accepted values are: checking, businessChecking, and savings.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setAccountType($value)
    {
        return $this->set('AccountType', $value);
    }

    /**
     * Set the value for the Amount input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param float $value (required, decimal) The amount to bill the customer for each recurring payment.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the BankName input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The bank name associated with the bank account number.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setBankName($value)
    {
        return $this->set('BankName', $value);
    }

    /**
     * Set the value for the BillingAddress input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The street address associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setBillingAddress($value)
    {
        return $this->set('BillingAddress', $value);
    }

    /**
     * Set the value for the BillingCity input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The city associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setBillingCity($value)
    {
        return $this->set('BillingCity', $value);
    }

    /**
     * Set the value for the BillingCompany input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The company associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setBillingCompany($value)
    {
        return $this->set('BillingCompany', $value);
    }

    /**
     * Set the value for the BillingCountry input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The country associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setBillingCountry($value)
    {
        return $this->set('BillingCountry', $value);
    }

    /**
     * Set the value for the BillingFirstName input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (required, string) The first name associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setBillingFirstName($value)
    {
        return $this->set('BillingFirstName', $value);
    }

    /**
     * Set the value for the BillingLastName input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (required, string) The last name associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setBillingLastName($value)
    {
        return $this->set('BillingLastName', $value);
    }

    /**
     * Set the value for the BillingState input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The state associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setBillingState($value)
    {
        return $this->set('BillingState', $value);
    }

    /**
     * Set the value for the BillingZipCode input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The zip code associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setBillingZipCode($value)
    {
        return $this->set('BillingZipCode', $value);
    }

    /**
     * Set the value for the Description input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The description of the subscription. 255 max characters.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ECheckType input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (required, string) The type of electronic check transaction used for the subscription. Acceptable values are: PPD or WEB.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setECheckType($value)
    {
        return $this->set('ECheckType', $value);
    }

    /**
     * Set the value for the Email input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The email address of the customer.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Endpoint input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the FaxNumber input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The fax number of the customer.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setFaxNumber($value)
    {
        return $this->set('FaxNumber', $value);
    }

    /**
     * Set the value for the Id input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The merchant assigned customer id.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setId($value)
    {
        return $this->set('Id', $value);
    }

    /**
     * Set the value for the InvoiceNumber input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The merchant assigned invoice number for the subscription.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setInvoiceNumber($value)
    {
        return $this->set('InvoiceNumber', $value);
    }

    /**
     * Set the value for the Length input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param int $value (optional, integer) Measurement of time for the frequency of billing. Associated with 'Unit'. Defaults to 1. Use 1-12 for unit months or 7-365 for unit days.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setLength($value)
    {
        return $this->set('Length', $value);
    }

    /**
     * Set the value for the NameOnAccount input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (required, string) The name on the bank account.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setNameOnAccount($value)
    {
        return $this->set('NameOnAccount', $value);
    }

    /**
     * Set the value for the PhoneNumber input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The phone number of the customer.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setPhoneNumber($value)
    {
        return $this->set('PhoneNumber', $value);
    }

    /**
     * Set the value for the RefId input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The merchant-assigned reference ID for the request. If specified, it will be returned in the response from authorize.net.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setRefId($value)
    {
        return $this->set('RefId', $value);
    }

    /**
     * Set the value for the RoutingNumber input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param int $value (required, integer) The routing number associated with the bank account payment.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setRoutingNumber($value)
    {
        return $this->set('RoutingNumber', $value);
    }

    /**
     * Set the value for the ShippingAddress input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The street address associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setShippingAddress($value)
    {
        return $this->set('ShippingAddress', $value);
    }

    /**
     * Set the value for the ShippingCity input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The city associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setShippingCity($value)
    {
        return $this->set('ShippingCity', $value);
    }

    /**
     * Set the value for the ShippingCompany input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The company associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setShippingCompany($value)
    {
        return $this->set('ShippingCompany', $value);
    }

    /**
     * Set the value for the ShippingCountry input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The country associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setShippingCountry($value)
    {
        return $this->set('ShippingCountry', $value);
    }

    /**
     * Set the value for the ShippingFirstName input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The first name associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setShippingFirstName($value)
    {
        return $this->set('ShippingFirstName', $value);
    }

    /**
     * Set the value for the ShippingLastName input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The last name associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setShippingLastName($value)
    {
        return $this->set('ShippingLastName', $value);
    }

    /**
     * Set the value for the ShippingState input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The state associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setShippingState($value)
    {
        return $this->set('ShippingState', $value);
    }

    /**
     * Set the value for the ShippingZipCode input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The zip code associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setShippingZipCode($value)
    {
        return $this->set('ShippingZipCode', $value);
    }

    /**
     * Set the value for the StartDate input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (required, date) The date that the subscription and billing begin. Formatted like YYYY-MM-DD.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the SubscriptionName input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) The merchant assigned name for the subscription. 50 max characters.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setSubscriptionName($value)
    {
        return $this->set('SubscriptionName', $value);
    }

    /**
     * Set the value for the TotalOccurrences input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param int $value (optional, integer) Number of billing occurrences or payments for the subscription. Defaults to 9999 which means the subscription will be ongoing.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setTotalOccurrences($value)
    {
        return $this->set('TotalOccurrences', $value);
    }

    /**
     * Set the value for the TransactionKey input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }

    /**
     * Set the value for the TrialAmount input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param float $value (conditional, decimal) The amount to be charged for a payment during a trial period. Required when TrialOccurances is specified. Defaults to 0.00.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setTrialAmount($value)
    {
        return $this->set('TrialAmount', $value);
    }

    /**
     * Set the value for the TrialOccurrences input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param int $value (optional, integer) Number of billing occurrences or payments in the trial period. Defaults to 0.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setTrialOccurrences($value)
    {
        return $this->set('TrialOccurrences', $value);
    }

    /**
     * Set the value for the Unit input for this CreateSubscriptionWithBankAccount choreography.
     *
     * @param string $value (optional, string) Unit of time between billing cycles. Used in association with interval 'Length'. Values can be 'months' or 'days'. Defaults to 'months'.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }
}


/**
 * Execution object for the CreateSubscriptionWithBankAccount choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateSubscriptionWithBankAccount choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateSubscriptionWithBankAccount execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateSubscriptionWithBankAccount execution.
     *
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Results New results object.
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
     * Wraps results in appopriate results class for this CreateSubscriptionWithBankAccount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateSubscriptionWithBankAccount choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateSubscriptionWithBankAccount choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CreateSubscriptionWithBankAccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateSubscriptionWithBankAccount execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a customer shipping address for an existing customer profile.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress extends Temboo_Choreography
{
    /**
     * Retrieves a customer shipping address for an existing customer profile.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerShippingAddress choreography.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/CustomerInformationManager/GetCustomerShippingAddress/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCustomerShippingAddress choreography.
     *
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCustomerShippingAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCustomerShippingAddress choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCustomerShippingAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCustomerShippingAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetCustomerShippingAddress choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the CustomerAddressId input for this GetCustomerShippingAddress choreography.
     *
     * @param int $value (required, integer) The id for the shipping profile you want to retrieve.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function setCustomerAddressId($value)
    {
        return $this->set('CustomerAddressId', $value);
    }

    /**
     * Set the value for the CustomerProfileId input for this GetCustomerShippingAddress choreography.
     *
     * @param int $value (required, integer) The id of the customer who's shipping address you want to return.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function setCustomerProfileId($value)
    {
        return $this->set('CustomerProfileId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetCustomerShippingAddress choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetCustomerShippingAddress choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetCustomerShippingAddress choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCustomerShippingAddress choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerShippingAddress execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCustomerShippingAddress execution.
     *
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Results New results object.
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
     * Wraps results in appopriate results class for this GetCustomerShippingAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCustomerShippingAddress choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCustomerShippingAddress choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCustomerShippingAddress execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns limited details for unsettled transactions.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList extends Temboo_Choreography
{
    /**
     * Returns limited details for unsettled transactions.
     *
     * @param Temboo_Session $session The session that owns this GetUnsettledTransactionList choreography.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/TransactionDetailsAPI/GetUnsettledTransactionList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetUnsettledTransactionList choreography.
     *
     * @param AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUnsettledTransactionList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUnsettledTransactionList choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetUnsettledTransactionList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUnsettledTransactionList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetUnsettledTransactionList choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetUnsettledTransactionList choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetUnsettledTransactionList choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetUnsettledTransactionList choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUnsettledTransactionList choreography.
     *
     * @param Temboo_Session $session The session that owns this GetUnsettledTransactionList execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUnsettledTransactionList execution.
     *
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Results New results object.
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
     * Wraps results in appopriate results class for this GetUnsettledTransactionList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetUnsettledTransactionList choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetUnsettledTransactionList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetUnsettledTransactionList execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns batch statistics by payment type for a specified batch ID.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics extends Temboo_Choreography
{
    /**
     * Returns batch statistics by payment type for a specified batch ID.
     *
     * @param Temboo_Session $session The session that owns this GetBatchStatistics choreography.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/TransactionDetailsAPI/GetBatchStatistics/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBatchStatistics choreography.
     *
     * @param AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBatchStatistics choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBatchStatistics choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBatchStatistics choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBatchStatistics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetBatchStatistics choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the BatchId input for this GetBatchStatistics choreography.
     *
     * @param int $value (required, integer) The id of the batch that you want to retrieve a list of transactions for.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs For method chaining.
     */
    public function setBatchId($value)
    {
        return $this->set('BatchId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetBatchStatistics choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetBatchStatistics choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetBatchStatistics choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBatchStatistics choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBatchStatistics execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBatchStatistics execution.
     *
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Results New results object.
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
     * Wraps results in appopriate results class for this GetBatchStatistics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBatchStatistics choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBatchStatistics choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBatchStatistics execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns transaction details for a specified transaction ID.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails extends Temboo_Choreography
{
    /**
     * Returns transaction details for a specified transaction ID.
     *
     * @param Temboo_Session $session The session that owns this GetTransactionDetails choreography.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/TransactionDetailsAPI/GetTransactionDetails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTransactionDetails choreography.
     *
     * @param AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTransactionDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTransactionDetails choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTransactionDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs New instance.
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
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetTransactionDetails choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetTransactionDetails choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionId input for this GetTransactionDetails choreography.
     *
     * @param int $value (required, integer) The id of the transaction that you want to retrieve information for.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs For method chaining.
     */
    public function setTransactionId($value)
    {
        return $this->set('TransactionId', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetTransactionDetails choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetTransactionDetails choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTransactionDetails choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTransactionDetails execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTransactionDetails execution.
     *
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Results New results object.
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
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTransactionDetails choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTransactionDetails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTransactionDetails execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing subscription.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription extends Temboo_Choreography
{
    /**
     * Updates an existing subscription.
     *
     * @param Temboo_Session $session The session that owns this UpdateSubscription choreography.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/AutomatedRecurringBilling/UpdateSubscription/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateSubscription choreography.
     *
     * @param AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateSubscription choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateSubscription choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateSubscription choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateSubscription input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the RequestXML input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, xml) Use this input to bybass single element inputs and submit your own XML for the request. See documentation for information on the correct schema.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setRequestXML($value)
    {
        return $this->set('RequestXML', $value);
    }

    /**
     * Set the value for the APILoginId input for this UpdateSubscription choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the AccountNumber input for this UpdateSubscription choreography.
     *
     * @param int $value (optional, integer) The account number when a banking account payment is specified.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AccountType input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The account type to use when a banking account payment is specified. Accepted values are: checking, businessChecking, and savings.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setAccountType($value)
    {
        return $this->set('AccountType', $value);
    }

    /**
     * Set the value for the Amount input for this UpdateSubscription choreography.
     *
     * @param float $value (optional, decimal) The amount to bill the customer for each recurring payment.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the BankName input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The bank name associated with the bank account number specified for a bank account payment.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setBankName($value)
    {
        return $this->set('BankName', $value);
    }

    /**
     * Set the value for the BillingAddress input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The street address associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setBillingAddress($value)
    {
        return $this->set('BillingAddress', $value);
    }

    /**
     * Set the value for the BillingCity input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The city associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setBillingCity($value)
    {
        return $this->set('BillingCity', $value);
    }

    /**
     * Set the value for the BillingCompany input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The company associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setBillingCompany($value)
    {
        return $this->set('BillingCompany', $value);
    }

    /**
     * Set the value for the BillingCountry input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The country associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setBillingCountry($value)
    {
        return $this->set('BillingCountry', $value);
    }

    /**
     * Set the value for the BillingFirstName input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The first name associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setBillingFirstName($value)
    {
        return $this->set('BillingFirstName', $value);
    }

    /**
     * Set the value for the BillingLastName input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The last name associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setBillingLastName($value)
    {
        return $this->set('BillingLastName', $value);
    }

    /**
     * Set the value for the BillingState input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The state associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setBillingState($value)
    {
        return $this->set('BillingState', $value);
    }

    /**
     * Set the value for the BillingZipCode input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The zip code associated with the billing address.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setBillingZipCode($value)
    {
        return $this->set('BillingZipCode', $value);
    }

    /**
     * Set the value for the CardCode input for this UpdateSubscription choreography.
     *
     * @param int $value (optional, integer) The 3 digit security code of the credit card.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setCardCode($value)
    {
        return $this->set('CardCode', $value);
    }

    /**
     * Set the value for the CardNumber input for this UpdateSubscription choreography.
     *
     * @param int $value (optional, integer) The credit card number for the recurring payment.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setCardNumber($value)
    {
        return $this->set('CardNumber', $value);
    }

    /**
     * Set the value for the Description input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The description of the subscription. 255 max characters.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ECheckType input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The type of electronic check transaction used for the subscription. Acceptable values are: PPD or WEB.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setECheckType($value)
    {
        return $this->set('ECheckType', $value);
    }

    /**
     * Set the value for the Email input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The email address of the customer.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Endpoint input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the ExpirationDate input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, date) The 4 digit expiration date of the credit card. Formatted like MM/YY.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setExpirationDate($value)
    {
        return $this->set('ExpirationDate', $value);
    }

    /**
     * Set the value for the FaxNumber input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The fax number of the customer.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setFaxNumber($value)
    {
        return $this->set('FaxNumber', $value);
    }

    /**
     * Set the value for the Id input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The merchant assigned customer id.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setId($value)
    {
        return $this->set('Id', $value);
    }

    /**
     * Set the value for the InvoiceNumber input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The merchant assigned invoice number for the subscription.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setInvoiceNumber($value)
    {
        return $this->set('InvoiceNumber', $value);
    }

    /**
     * Set the value for the NameOnAccount input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The name on the bank account.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setNameOnAccount($value)
    {
        return $this->set('NameOnAccount', $value);
    }

    /**
     * Set the value for the PhoneNumber input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The phone number of the customer.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setPhoneNumber($value)
    {
        return $this->set('PhoneNumber', $value);
    }

    /**
     * Set the value for the RefId input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The merchant-assigned reference ID for the request. If specified, it will be returned in the response from authorize.net.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setRefId($value)
    {
        return $this->set('RefId', $value);
    }

    /**
     * Set the value for the RoutingNumber input for this UpdateSubscription choreography.
     *
     * @param int $value (optional, integer) The routing number associated with the bank account payment.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setRoutingNumber($value)
    {
        return $this->set('RoutingNumber', $value);
    }

    /**
     * Set the value for the ShippingAddress input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The street address associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setShippingAddress($value)
    {
        return $this->set('ShippingAddress', $value);
    }

    /**
     * Set the value for the ShippingCity input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The city associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setShippingCity($value)
    {
        return $this->set('ShippingCity', $value);
    }

    /**
     * Set the value for the ShippingCompany input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The company associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setShippingCompany($value)
    {
        return $this->set('ShippingCompany', $value);
    }

    /**
     * Set the value for the ShippingCountry input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The country associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setShippingCountry($value)
    {
        return $this->set('ShippingCountry', $value);
    }

    /**
     * Set the value for the ShippingFirstName input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The first name associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setShippingFirstName($value)
    {
        return $this->set('ShippingFirstName', $value);
    }

    /**
     * Set the value for the ShippingLastName input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The last name associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setShippingLastName($value)
    {
        return $this->set('ShippingLastName', $value);
    }

    /**
     * Set the value for the ShippingState input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The state associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setShippingState($value)
    {
        return $this->set('ShippingState', $value);
    }

    /**
     * Set the value for the ShippingZipCode input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The zip code associated with the shipping address. Used when the shipping and billing address are different.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setShippingZipCode($value)
    {
        return $this->set('ShippingZipCode', $value);
    }

    /**
     * Set the value for the StartDate input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, date) The date that the subscription and billing begin. Formatted like YYYY-MM-DD.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the SubscriptionId input for this UpdateSubscription choreography.
     *
     * @param int $value (required, integer) The id of the subscription you want to update.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setSubscriptionId($value)
    {
        return $this->set('SubscriptionId', $value);
    }

    /**
     * Set the value for the SubscriptionName input for this UpdateSubscription choreography.
     *
     * @param string $value (optional, string) The merchant assigned name for the subscription. 50 max characters.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setSubscriptionName($value)
    {
        return $this->set('SubscriptionName', $value);
    }

    /**
     * Set the value for the TotalOccurrences input for this UpdateSubscription choreography.
     *
     * @param int $value (optional, integer) Number of billing occurrences or payments for the subscription.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setTotalOccurrences($value)
    {
        return $this->set('TotalOccurrences', $value);
    }

    /**
     * Set the value for the TransactionKey input for this UpdateSubscription choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }

    /**
     * Set the value for the TrialAmount input for this UpdateSubscription choreography.
     *
     * @param float $value (conditional, decimal) The amount to be charged for a payment during a trial period. Required when TrialOccurances is specified. Defaults to 0.00.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setTrialAmount($value)
    {
        return $this->set('TrialAmount', $value);
    }

    /**
     * Set the value for the TrialOccurrences input for this UpdateSubscription choreography.
     *
     * @param int $value (optional, integer) Number of billing occurrences or payments in the trial period.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs For method chaining.
     */
    public function setTrialOccurrences($value)
    {
        return $this->set('TrialOccurrences', $value);
    }
}


/**
 * Execution object for the UpdateSubscription choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateSubscription choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateSubscription execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateSubscription execution.
     *
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Results New results object.
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
     * Wraps results in appopriate results class for this UpdateSubscription execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateSubscription choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateSubscription choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_UpdateSubscription_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateSubscription execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a payment profile associated with an existing customer profile.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile extends Temboo_Choreography
{
    /**
     * Retrieves a payment profile associated with an existing customer profile.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerPaymentProfile choreography.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/CustomerInformationManager/GetCustomerPaymentProfile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCustomerPaymentProfile choreography.
     *
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCustomerPaymentProfile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCustomerPaymentProfile choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCustomerPaymentProfile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCustomerPaymentProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetCustomerPaymentProfile choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the CustomerPaymentProfileId input for this GetCustomerPaymentProfile choreography.
     *
     * @param int $value (required, integer) The id for the payment profile you want to retrieve.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function setCustomerPaymentProfileId($value)
    {
        return $this->set('CustomerPaymentProfileId', $value);
    }

    /**
     * Set the value for the CustomerProfileId input for this GetCustomerPaymentProfile choreography.
     *
     * @param int $value (required, integer) The id of the customer who's payment profile you want to return.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function setCustomerProfileId($value)
    {
        return $this->set('CustomerProfileId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetCustomerPaymentProfile choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetCustomerPaymentProfile choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetCustomerPaymentProfile choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCustomerPaymentProfile choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerPaymentProfile execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCustomerPaymentProfile execution.
     *
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Results New results object.
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
     * Wraps results in appopriate results class for this GetCustomerPaymentProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCustomerPaymentProfile choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCustomerPaymentProfile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCustomerPaymentProfile execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of transactions and their details for a specified batch ID.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionList extends Temboo_Choreography
{
    /**
     * Returns a list of transactions and their details for a specified batch ID.
     *
     * @param Temboo_Session $session The session that owns this GetTransactionList choreography.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/TransactionDetailsAPI/GetTransactionList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTransactionList choreography.
     *
     * @param AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTransactionList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTransactionList choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTransactionList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTransactionList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetTransactionList choreography.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the BatchId input for this GetTransactionList choreography.
     *
     * @param int $value (required, integer) The id of the batch that you want to retrieve a list of transactions for.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs For method chaining.
     */
    public function setBatchId($value)
    {
        return $this->set('BatchId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetTransactionList choreography.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetTransactionList choreography.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetTransactionList choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTransactionList choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTransactionList execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetTransactionList $choreo The choregraphy object for this execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_TransactionDetailsAPI_GetTransactionList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTransactionList execution.
     *
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Results New results object.
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
     * Wraps results in appopriate results class for this GetTransactionList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTransactionList choreography.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTransactionList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTransactionList execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>