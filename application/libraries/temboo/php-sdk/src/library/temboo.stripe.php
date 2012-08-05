<?php

/**
 * Temboo PHP SDK Stripe classes
 *
 * Execute Choreographies from the Temboo Stripe bundle.
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
 * @subpackage Stripe
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Returns a list of all invoice items or a list of invoice items for a specified customer.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllInvoiceItems extends Temboo_Choreography
{
    /**
     * Returns a list of all invoice items or a list of invoice items for a specified customer.
     *
     * @param Temboo_Session $session The session that owns this ListAllInvoiceItems choreography.
     * @return Stripe_ListAllInvoiceItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/ListAllInvoiceItems/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListAllInvoiceItems choreography.
     *
     * @param Stripe_ListAllInvoiceItems_Inputs|array $inputs (optional) Inputs as Stripe_ListAllInvoiceItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_ListAllInvoiceItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_ListAllInvoiceItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllInvoiceItems choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_ListAllInvoiceItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_ListAllInvoiceItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllInvoiceItems choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllInvoiceItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListAllInvoiceItems choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_ListAllInvoiceItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllInvoiceItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_ListAllInvoiceItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_ListAllInvoiceItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this ListAllInvoiceItems choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_ListAllInvoiceItems_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the Count input for this ListAllInvoiceItems choreography.
     *
     * @param int $value (optional, integer) The limit of invoice items to be returned. Can range from 1 to 100. Defaults to 10.
     * @return Stripe_ListAllInvoiceItems_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the CustomerId input for this ListAllInvoiceItems choreography.
     *
     * @param string $value (optional, string) The unique identifier of the customer whose invoice items to return. If not specified, all invoice items will be returned.
     * @return Stripe_ListAllInvoiceItems_Inputs For method chaining.
     */
    public function setCustomerId($value)
    {
        return $this->set('CustomerId', $value);
    }

    /**
     * Set the value for the Offset input for this ListAllInvoiceItems choreography.
     *
     * @param int $value (optional, integer) Stripe will return a list of invoice items starting at the specified offset. Defaults to 0.
     * @return Stripe_ListAllInvoiceItems_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the ListAllInvoiceItems choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllInvoiceItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllInvoiceItems choreography.
     *
     * @param Temboo_Session $session The session that owns this ListAllInvoiceItems execution.
     * @param Stripe_ListAllInvoiceItems $choreo The choregraphy object for this execution.
     * @param Stripe_ListAllInvoiceItems_Inputs|array $inputs (optional) Inputs as Stripe_ListAllInvoiceItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_ListAllInvoiceItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_ListAllInvoiceItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllInvoiceItems execution.
     *
     * @return Stripe_ListAllInvoiceItems_Results New results object.
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
     * Wraps results in appopriate results class for this ListAllInvoiceItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_ListAllInvoiceItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_ListAllInvoiceItems_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListAllInvoiceItems choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllInvoiceItems_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListAllInvoiceItems choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_ListAllInvoiceItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListAllInvoiceItems execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Charges a credit card by creating a new charge object using credit card details.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewChargeWithCreditCard extends Temboo_Choreography
{
    /**
     * Charges a credit card by creating a new charge object using credit card details.
     *
     * @param Temboo_Session $session The session that owns this CreateNewChargeWithCreditCard choreography.
     * @return Stripe_CreateNewChargeWithCreditCard New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/CreateNewChargeWithCreditCard/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateNewChargeWithCreditCard choreography.
     *
     * @param Stripe_CreateNewChargeWithCreditCard_Inputs|array $inputs (optional) Inputs as Stripe_CreateNewChargeWithCreditCard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateNewChargeWithCreditCard_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_CreateNewChargeWithCreditCard_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateNewChargeWithCreditCard choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_CreateNewChargeWithCreditCard_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateNewChargeWithCreditCard choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewChargeWithCreditCard_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateNewChargeWithCreditCard choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateNewChargeWithCreditCard input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the AddressLine1 input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param string $value (optional, string) The first line of the address that is associated with the credit card billing address
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setAddressLine1($value)
    {
        return $this->set('AddressLine1', $value);
    }

    /**
     * Set the value for the AddressLine2 input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param string $value (optional, string) The second line of the address that is associated with the credit card billing address
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setAddressLine2($value)
    {
        return $this->set('AddressLine2', $value);
    }

    /**
     * Set the value for the Amount input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param int $value (integer) The amount to charge a customer in cents
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the CVC input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param int $value (optional, integer) The 3-digit card security code
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setCVC($value)
    {
        return $this->set('CVC', $value);
    }

    /**
     * Set the value for the CardNumber input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param int $value (integer) The credit card number without any separators
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setCardNumber($value)
    {
        return $this->set('CardNumber', $value);
    }

    /**
     * Set the value for the CardholderName input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param string $value (optional, string) The cardholder's full name as it appears on the credit card
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setCardholderName($value)
    {
        return $this->set('CardholderName', $value);
    }

    /**
     * Set the value for the Country input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param string $value (optional, string) The country associated with the credit card billing address
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Currency input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param string $value (optional, string) 3-letter ISO code for currency. Defaults to 'usd' which is currently the only supported currency.
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the Description input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be associated with the charge as a description
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ExpirationMonth input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param int $value (integer) The card's expiration month as a two digit number
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setExpirationMonth($value)
    {
        return $this->set('ExpirationMonth', $value);
    }

    /**
     * Set the value for the ExpirationYear input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param int $value (integer) The card's expiration year as a 4 digit number
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setExpirationYear($value)
    {
        return $this->set('ExpirationYear', $value);
    }

    /**
     * Set the value for the State input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param string $value (optional, string) The state of the address that is associated with the credit card billing address
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the ZipCode input for this CreateNewChargeWithCreditCard choreography.
     *
     * @param string $value (optional, string) The zip code of the address that is associated with the credit card billing address
     * @return Stripe_CreateNewChargeWithCreditCard_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the CreateNewChargeWithCreditCard choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewChargeWithCreditCard_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateNewChargeWithCreditCard choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateNewChargeWithCreditCard execution.
     * @param Stripe_CreateNewChargeWithCreditCard $choreo The choregraphy object for this execution.
     * @param Stripe_CreateNewChargeWithCreditCard_Inputs|array $inputs (optional) Inputs as Stripe_CreateNewChargeWithCreditCard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateNewChargeWithCreditCard_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_CreateNewChargeWithCreditCard $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateNewChargeWithCreditCard execution.
     *
     * @return Stripe_CreateNewChargeWithCreditCard_Results New results object.
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
     * Wraps results in appopriate results class for this CreateNewChargeWithCreditCard execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_CreateNewChargeWithCreditCard_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_CreateNewChargeWithCreditCard_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateNewChargeWithCreditCard choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewChargeWithCreditCard_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateNewChargeWithCreditCard choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_CreateNewChargeWithCreditCard_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateNewChargeWithCreditCard execution.
     *
     * @return string (XML) The response from stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified invoice item.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeleteInvoiceItem extends Temboo_Choreography
{
    /**
     * Deletes a specified invoice item.
     *
     * @param Temboo_Session $session The session that owns this DeleteInvoiceItem choreography.
     * @return Stripe_DeleteInvoiceItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/DeleteInvoiceItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteInvoiceItem choreography.
     *
     * @param Stripe_DeleteInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_DeleteInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_DeleteInvoiceItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_DeleteInvoiceItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteInvoiceItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_DeleteInvoiceItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_DeleteInvoiceItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteInvoiceItem choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeleteInvoiceItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteInvoiceItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_DeleteInvoiceItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteInvoiceItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_DeleteInvoiceItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_DeleteInvoiceItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this DeleteInvoiceItem choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_DeleteInvoiceItem_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the InvoiceItemId input for this DeleteInvoiceItem choreography.
     *
     * @param string $value (string) The unique identifier of the invoice item you want to delete
     * @return Stripe_DeleteInvoiceItem_Inputs For method chaining.
     */
    public function setInvoiceItemId($value)
    {
        return $this->set('InvoiceItemId', $value);
    }
}


/**
 * Execution object for the DeleteInvoiceItem choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeleteInvoiceItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteInvoiceItem choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteInvoiceItem execution.
     * @param Stripe_DeleteInvoiceItem $choreo The choregraphy object for this execution.
     * @param Stripe_DeleteInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_DeleteInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_DeleteInvoiceItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_DeleteInvoiceItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteInvoiceItem execution.
     *
     * @return Stripe_DeleteInvoiceItem_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteInvoiceItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_DeleteInvoiceItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_DeleteInvoiceItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteInvoiceItem choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeleteInvoiceItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteInvoiceItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_DeleteInvoiceItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteInvoiceItem execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a charge or credit to the customer's next invoice.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateInvoiceItem extends Temboo_Choreography
{
    /**
     * Adds a charge or credit to the customer's next invoice.
     *
     * @param Temboo_Session $session The session that owns this CreateInvoiceItem choreography.
     * @return Stripe_CreateInvoiceItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/CreateInvoiceItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateInvoiceItem choreography.
     *
     * @param Stripe_CreateInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_CreateInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateInvoiceItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_CreateInvoiceItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateInvoiceItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateInvoiceItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_CreateInvoiceItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateInvoiceItem choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateInvoiceItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateInvoiceItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateInvoiceItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateInvoiceItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_CreateInvoiceItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_CreateInvoiceItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this CreateInvoiceItem choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_CreateInvoiceItem_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the Amount input for this CreateInvoiceItem choreography.
     *
     * @param int $value (integer) The amount in cents of the charge to be included in the customer's next invoice
     * @return Stripe_CreateInvoiceItem_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the Currency input for this CreateInvoiceItem choreography.
     *
     * @param string $value (optional, string) 3-letter ISO code for currency. Defaults to 'usd' which is currently the only supported currency.
     * @return Stripe_CreateInvoiceItem_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the CustomerId input for this CreateInvoiceItem choreography.
     *
     * @param string $value (string) The unique identifier of the customer you want to create an invoice item for
     * @return Stripe_CreateInvoiceItem_Inputs For method chaining.
     */
    public function setCustomerId($value)
    {
        return $this->set('CustomerId', $value);
    }

    /**
     * Set the value for the Description input for this CreateInvoiceItem choreography.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be included with the invoice item
     * @return Stripe_CreateInvoiceItem_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }
}


/**
 * Execution object for the CreateInvoiceItem choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateInvoiceItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateInvoiceItem choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateInvoiceItem execution.
     * @param Stripe_CreateInvoiceItem $choreo The choregraphy object for this execution.
     * @param Stripe_CreateInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_CreateInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateInvoiceItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_CreateInvoiceItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateInvoiceItem execution.
     *
     * @return Stripe_CreateInvoiceItem_Results New results object.
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
     * Wraps results in appopriate results class for this CreateInvoiceItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_CreateInvoiceItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_CreateInvoiceItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateInvoiceItem choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateInvoiceItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateInvoiceItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_CreateInvoiceItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateInvoiceItem execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Description" output from this CreateInvoiceItem execution.
     *
     * @return string (optional, string) An arbitrary string of text that will be included with the invoice item
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getDescription()
    {
        return $this->get('Description');
    }
}

/**
 * Retrieves the details of an existing charge.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCharge extends Temboo_Choreography
{
    /**
     * Retrieves the details of an existing charge.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCharge choreography.
     * @return Stripe_RetrieveCharge New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/RetrieveCharge/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveCharge choreography.
     *
     * @param Stripe_RetrieveCharge_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveCharge_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveCharge_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_RetrieveCharge_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveCharge choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveCharge_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_RetrieveCharge_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveCharge choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCharge_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveCharge choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveCharge_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveCharge input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_RetrieveCharge_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_RetrieveCharge_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this RetrieveCharge choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_RetrieveCharge_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the ChargeId input for this RetrieveCharge choreography.
     *
     * @param string $value (optional, string) The unique identifier of the charge you want to retrieve
     * @return Stripe_RetrieveCharge_Inputs For method chaining.
     */
    public function setChargeId($value)
    {
        return $this->set('ChargeId', $value);
    }
}


/**
 * Execution object for the RetrieveCharge choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCharge_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveCharge choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCharge execution.
     * @param Stripe_RetrieveCharge $choreo The choregraphy object for this execution.
     * @param Stripe_RetrieveCharge_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveCharge_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveCharge_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_RetrieveCharge $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveCharge execution.
     *
     * @return Stripe_RetrieveCharge_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveCharge execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_RetrieveCharge_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_RetrieveCharge_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveCharge choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCharge_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveCharge choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_RetrieveCharge_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveCharge execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of all customers. 
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllCustomers extends Temboo_Choreography
{
    /**
     * Returns a list of all customers. 
     *
     * @param Temboo_Session $session The session that owns this ListAllCustomers choreography.
     * @return Stripe_ListAllCustomers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/ListAllCustomers/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListAllCustomers choreography.
     *
     * @param Stripe_ListAllCustomers_Inputs|array $inputs (optional) Inputs as Stripe_ListAllCustomers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_ListAllCustomers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_ListAllCustomers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllCustomers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_ListAllCustomers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_ListAllCustomers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllCustomers choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllCustomers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListAllCustomers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_ListAllCustomers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllCustomers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_ListAllCustomers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_ListAllCustomers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this ListAllCustomers choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_ListAllCustomers_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the Count input for this ListAllCustomers choreography.
     *
     * @param int $value (optional, integer) The limit of customers to be returned. Can range from 1 to 100. Defaults to 10.
     * @return Stripe_ListAllCustomers_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Offset input for this ListAllCustomers choreography.
     *
     * @param int $value (optional, integer) Stripe will return a list of customers starting at the specified offset. Defaults to 0.
     * @return Stripe_ListAllCustomers_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the ListAllCustomers choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllCustomers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllCustomers choreography.
     *
     * @param Temboo_Session $session The session that owns this ListAllCustomers execution.
     * @param Stripe_ListAllCustomers $choreo The choregraphy object for this execution.
     * @param Stripe_ListAllCustomers_Inputs|array $inputs (optional) Inputs as Stripe_ListAllCustomers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_ListAllCustomers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_ListAllCustomers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllCustomers execution.
     *
     * @return Stripe_ListAllCustomers_Results New results object.
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
     * Wraps results in appopriate results class for this ListAllCustomers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_ListAllCustomers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_ListAllCustomers_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListAllCustomers choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllCustomers_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListAllCustomers choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_ListAllCustomers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListAllCustomers execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a customer's upcoming invoice.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveUpcomingInvoice extends Temboo_Choreography
{
    /**
     * Retrieves a customer's upcoming invoice.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUpcomingInvoice choreography.
     * @return Stripe_RetrieveUpcomingInvoice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/RetrieveUpcomingInvoice/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveUpcomingInvoice choreography.
     *
     * @param Stripe_RetrieveUpcomingInvoice_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveUpcomingInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveUpcomingInvoice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_RetrieveUpcomingInvoice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveUpcomingInvoice choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveUpcomingInvoice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_RetrieveUpcomingInvoice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveUpcomingInvoice choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveUpcomingInvoice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveUpcomingInvoice choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveUpcomingInvoice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveUpcomingInvoice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_RetrieveUpcomingInvoice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_RetrieveUpcomingInvoice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this RetrieveUpcomingInvoice choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_RetrieveUpcomingInvoice_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the CustomerId input for this RetrieveUpcomingInvoice choreography.
     *
     * @param string $value (string) The unique identifier of the customer whose upcoming invoice to return
     * @return Stripe_RetrieveUpcomingInvoice_Inputs For method chaining.
     */
    public function setCustomerId($value)
    {
        return $this->set('CustomerId', $value);
    }
}


/**
 * Execution object for the RetrieveUpcomingInvoice choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveUpcomingInvoice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveUpcomingInvoice choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUpcomingInvoice execution.
     * @param Stripe_RetrieveUpcomingInvoice $choreo The choregraphy object for this execution.
     * @param Stripe_RetrieveUpcomingInvoice_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveUpcomingInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveUpcomingInvoice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_RetrieveUpcomingInvoice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveUpcomingInvoice execution.
     *
     * @return Stripe_RetrieveUpcomingInvoice_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveUpcomingInvoice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_RetrieveUpcomingInvoice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_RetrieveUpcomingInvoice_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveUpcomingInvoice choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveUpcomingInvoice_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveUpcomingInvoice choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_RetrieveUpcomingInvoice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveUpcomingInvoice execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified plan.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeletePlan extends Temboo_Choreography
{
    /**
     * Deletes a specified plan.
     *
     * @param Temboo_Session $session The session that owns this DeletePlan choreography.
     * @return Stripe_DeletePlan New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/DeletePlan/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeletePlan choreography.
     *
     * @param Stripe_DeletePlan_Inputs|array $inputs (optional) Inputs as Stripe_DeletePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_DeletePlan_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_DeletePlan_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeletePlan choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_DeletePlan_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_DeletePlan_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeletePlan choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeletePlan_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeletePlan choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_DeletePlan_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeletePlan input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_DeletePlan_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_DeletePlan_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this DeletePlan choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_DeletePlan_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the PlanId input for this DeletePlan choreography.
     *
     * @param string $value (string) The unique identifier of the plan you want to delete
     * @return Stripe_DeletePlan_Inputs For method chaining.
     */
    public function setPlanId($value)
    {
        return $this->set('PlanId', $value);
    }
}


/**
 * Execution object for the DeletePlan choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeletePlan_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeletePlan choreography.
     *
     * @param Temboo_Session $session The session that owns this DeletePlan execution.
     * @param Stripe_DeletePlan $choreo The choregraphy object for this execution.
     * @param Stripe_DeletePlan_Inputs|array $inputs (optional) Inputs as Stripe_DeletePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_DeletePlan_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_DeletePlan $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeletePlan execution.
     *
     * @return Stripe_DeletePlan_Results New results object.
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
     * Wraps results in appopriate results class for this DeletePlan execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_DeletePlan_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_DeletePlan_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeletePlan choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeletePlan_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeletePlan choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_DeletePlan_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeletePlan execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a coupon with specified coupon id.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCoupon extends Temboo_Choreography
{
    /**
     * Retrieves a coupon with specified coupon id.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCoupon choreography.
     * @return Stripe_RetrieveCoupon New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/RetrieveCoupon/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveCoupon choreography.
     *
     * @param Stripe_RetrieveCoupon_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveCoupon_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_RetrieveCoupon_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveCoupon choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveCoupon_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_RetrieveCoupon_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveCoupon choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCoupon_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveCoupon choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveCoupon_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveCoupon input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_RetrieveCoupon_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_RetrieveCoupon_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this RetrieveCoupon choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_RetrieveCoupon_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the CouponId input for this RetrieveCoupon choreography.
     *
     * @param string $value (optional, string) The unique identifier of the coupon you want to retrieve
     * @return Stripe_RetrieveCoupon_Inputs For method chaining.
     */
    public function setCouponId($value)
    {
        return $this->set('CouponId', $value);
    }
}


/**
 * Execution object for the RetrieveCoupon choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCoupon_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveCoupon choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCoupon execution.
     * @param Stripe_RetrieveCoupon $choreo The choregraphy object for this execution.
     * @param Stripe_RetrieveCoupon_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveCoupon_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_RetrieveCoupon $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveCoupon execution.
     *
     * @return Stripe_RetrieveCoupon_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveCoupon execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_RetrieveCoupon_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_RetrieveCoupon_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveCoupon choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCoupon_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveCoupon choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_RetrieveCoupon_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveCoupon execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates the amount or description of an existing invoice item.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_UpdateInvoiceItem extends Temboo_Choreography
{
    /**
     * Updates the amount or description of an existing invoice item.
     *
     * @param Temboo_Session $session The session that owns this UpdateInvoiceItem choreography.
     * @return Stripe_UpdateInvoiceItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/UpdateInvoiceItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateInvoiceItem choreography.
     *
     * @param Stripe_UpdateInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_UpdateInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_UpdateInvoiceItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_UpdateInvoiceItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateInvoiceItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_UpdateInvoiceItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_UpdateInvoiceItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateInvoiceItem choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_UpdateInvoiceItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateInvoiceItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_UpdateInvoiceItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateInvoiceItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this UpdateInvoiceItem choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the Amount input for this UpdateInvoiceItem choreography.
     *
     * @param int $value (integer) The amount in cents of the charge to be included in the customer's next invoice
     * @return Stripe_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the Currency input for this UpdateInvoiceItem choreography.
     *
     * @param string $value (optional, string) 3-letter ISO code for currency. Defaults to 'usd' which is currently the only supported currency.
     * @return Stripe_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the Description input for this UpdateInvoiceItem choreography.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be included with the invoice item
     * @return Stripe_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the InvoiceItemId input for this UpdateInvoiceItem choreography.
     *
     * @param string $value (string) The unique identifier of the invoice item you want to update
     * @return Stripe_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function setInvoiceItemId($value)
    {
        return $this->set('InvoiceItemId', $value);
    }
}


/**
 * Execution object for the UpdateInvoiceItem choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_UpdateInvoiceItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateInvoiceItem choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateInvoiceItem execution.
     * @param Stripe_UpdateInvoiceItem $choreo The choregraphy object for this execution.
     * @param Stripe_UpdateInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_UpdateInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_UpdateInvoiceItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_UpdateInvoiceItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateInvoiceItem execution.
     *
     * @return Stripe_UpdateInvoiceItem_Results New results object.
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
     * Wraps results in appopriate results class for this UpdateInvoiceItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_UpdateInvoiceItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_UpdateInvoiceItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateInvoiceItem choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_UpdateInvoiceItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateInvoiceItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_UpdateInvoiceItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateInvoiceItem execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Description" output from this UpdateInvoiceItem execution.
     *
     * @return string (optional, string) An arbitrary string of text that will be included with the invoice item
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getDescription()
    {
        return $this->get('Description');
    }
}

/**
 * Creates a coupon that can be redeemed by customers for a discount.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateCoupon extends Temboo_Choreography
{
    /**
     * Creates a coupon that can be redeemed by customers for a discount.
     *
     * @param Temboo_Session $session The session that owns this CreateCoupon choreography.
     * @return Stripe_CreateCoupon New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/CreateCoupon/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateCoupon choreography.
     *
     * @param Stripe_CreateCoupon_Inputs|array $inputs (optional) Inputs as Stripe_CreateCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateCoupon_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_CreateCoupon_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateCoupon choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateCoupon_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_CreateCoupon_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateCoupon choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateCoupon_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateCoupon choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateCoupon_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateCoupon input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_CreateCoupon_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_CreateCoupon_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this CreateCoupon choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_CreateCoupon_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the CouponId input for this CreateCoupon choreography.
     *
     * @param string $value (optional, string) The unique identifier of your choice for the coupon. If not specified, a random code will be generated by Stripe.
     * @return Stripe_CreateCoupon_Inputs For method chaining.
     */
    public function setCouponId($value)
    {
        return $this->set('CouponId', $value);
    }

    /**
     * Set the value for the DurationInMonths input for this CreateCoupon choreography.
     *
     * @param int $value (optional, integer) If Duration is set to 'repeating', specify the number of months the discount will be valid.
     * @return Stripe_CreateCoupon_Inputs For method chaining.
     */
    public function setDurationInMonths($value)
    {
        return $this->set('DurationInMonths', $value);
    }

    /**
     * Set the value for the Duration input for this CreateCoupon choreography.
     *
     * @param string $value (string) Indicates how long the discount will be in effect. Valid values are: forever, once, repeating.
     * @return Stripe_CreateCoupon_Inputs For method chaining.
     */
    public function setDuration($value)
    {
        return $this->set('Duration', $value);
    }

    /**
     * Set the value for the MaxRedemptions input for this CreateCoupon choreography.
     *
     * @param int $value (optional, integer) Specify the number times the coupon can be used.
     * @return Stripe_CreateCoupon_Inputs For method chaining.
     */
    public function setMaxRedemptions($value)
    {
        return $this->set('MaxRedemptions', $value);
    }

    /**
     * Set the value for the PercentOff input for this CreateCoupon choreography.
     *
     * @param int $value (integer) A integer between 1 and 100 that represents the discount that the coupon will apply when used by a customer
     * @return Stripe_CreateCoupon_Inputs For method chaining.
     */
    public function setPercentOff($value)
    {
        return $this->set('PercentOff', $value);
    }

    /**
     * Set the value for the RedeemBy input for this CreateCoupon choreography.
     *
     * @param string $value (optional, date) An epoch timestamp in seconds representing the the last time at which the coupon can be used. Specify timestamp in UTC.
     * @return Stripe_CreateCoupon_Inputs For method chaining.
     */
    public function setRedeemBy($value)
    {
        return $this->set('RedeemBy', $value);
    }
}


/**
 * Execution object for the CreateCoupon choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateCoupon_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateCoupon choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateCoupon execution.
     * @param Stripe_CreateCoupon $choreo The choregraphy object for this execution.
     * @param Stripe_CreateCoupon_Inputs|array $inputs (optional) Inputs as Stripe_CreateCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateCoupon_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_CreateCoupon $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateCoupon execution.
     *
     * @return Stripe_CreateCoupon_Results New results object.
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
     * Wraps results in appopriate results class for this CreateCoupon execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_CreateCoupon_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_CreateCoupon_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateCoupon choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateCoupon_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateCoupon choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_CreateCoupon_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateCoupon execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves invoice details using the invoice id.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveInvoice extends Temboo_Choreography
{
    /**
     * Retrieves invoice details using the invoice id.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInvoice choreography.
     * @return Stripe_RetrieveInvoice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/RetrieveInvoice/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveInvoice choreography.
     *
     * @param Stripe_RetrieveInvoice_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveInvoice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_RetrieveInvoice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveInvoice choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveInvoice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_RetrieveInvoice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveInvoice choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveInvoice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveInvoice choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveInvoice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveInvoice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_RetrieveInvoice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_RetrieveInvoice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this RetrieveInvoice choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_RetrieveInvoice_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the InvoiceId input for this RetrieveInvoice choreography.
     *
     * @param string $value (string) The unique identifier of the invoice you want to retrieve
     * @return Stripe_RetrieveInvoice_Inputs For method chaining.
     */
    public function setInvoiceId($value)
    {
        return $this->set('InvoiceId', $value);
    }
}


/**
 * Execution object for the RetrieveInvoice choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveInvoice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveInvoice choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInvoice execution.
     * @param Stripe_RetrieveInvoice $choreo The choregraphy object for this execution.
     * @param Stripe_RetrieveInvoice_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveInvoice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_RetrieveInvoice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveInvoice execution.
     *
     * @return Stripe_RetrieveInvoice_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveInvoice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_RetrieveInvoice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_RetrieveInvoice_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveInvoice choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveInvoice_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveInvoice choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_RetrieveInvoice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveInvoice execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Issues a refund of an existing credit card charge.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RefundCharge extends Temboo_Choreography
{
    /**
     * Issues a refund of an existing credit card charge.
     *
     * @param Temboo_Session $session The session that owns this RefundCharge choreography.
     * @return Stripe_RefundCharge New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/RefundCharge/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RefundCharge choreography.
     *
     * @param Stripe_RefundCharge_Inputs|array $inputs (optional) Inputs as Stripe_RefundCharge_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RefundCharge_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_RefundCharge_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RefundCharge choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RefundCharge_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_RefundCharge_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RefundCharge choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RefundCharge_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RefundCharge choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RefundCharge_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RefundCharge input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_RefundCharge_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_RefundCharge_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this RefundCharge choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_RefundCharge_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the Amount input for this RefundCharge choreography.
     *
     * @param int $value (optional, integer) The amount to refund to the customer in cents. When left empty, the entire charge is refunded.
     * @return Stripe_RefundCharge_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the ChargeId input for this RefundCharge choreography.
     *
     * @param string $value (string) The unique identifier of the charge to be refunded
     * @return Stripe_RefundCharge_Inputs For method chaining.
     */
    public function setChargeId($value)
    {
        return $this->set('ChargeId', $value);
    }
}


/**
 * Execution object for the RefundCharge choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RefundCharge_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RefundCharge choreography.
     *
     * @param Temboo_Session $session The session that owns this RefundCharge execution.
     * @param Stripe_RefundCharge $choreo The choregraphy object for this execution.
     * @param Stripe_RefundCharge_Inputs|array $inputs (optional) Inputs as Stripe_RefundCharge_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RefundCharge_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_RefundCharge $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RefundCharge execution.
     *
     * @return Stripe_RefundCharge_Results New results object.
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
     * Wraps results in appopriate results class for this RefundCharge execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_RefundCharge_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_RefundCharge_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RefundCharge choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RefundCharge_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RefundCharge choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_RefundCharge_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RefundCharge execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a card token based on a given id.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCardToken extends Temboo_Choreography
{
    /**
     * Retrieves a card token based on a given id.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCardToken choreography.
     * @return Stripe_RetrieveCardToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/RetrieveCardToken/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveCardToken choreography.
     *
     * @param Stripe_RetrieveCardToken_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveCardToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveCardToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_RetrieveCardToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveCardToken choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveCardToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_RetrieveCardToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveCardToken choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCardToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveCardToken choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveCardToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveCardToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_RetrieveCardToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_RetrieveCardToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this RetrieveCardToken choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_RetrieveCardToken_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the TokenId input for this RetrieveCardToken choreography.
     *
     * @param string $value (string) The unique identifier of the token you want to retrieve
     * @return Stripe_RetrieveCardToken_Inputs For method chaining.
     */
    public function setTokenId($value)
    {
        return $this->set('TokenId', $value);
    }
}


/**
 * Execution object for the RetrieveCardToken choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCardToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveCardToken choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCardToken execution.
     * @param Stripe_RetrieveCardToken $choreo The choregraphy object for this execution.
     * @param Stripe_RetrieveCardToken_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveCardToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveCardToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_RetrieveCardToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveCardToken execution.
     *
     * @return Stripe_RetrieveCardToken_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveCardToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_RetrieveCardToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_RetrieveCardToken_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveCardToken choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCardToken_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveCardToken choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_RetrieveCardToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveCardToken execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of all plans. 
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllPlans extends Temboo_Choreography
{
    /**
     * Returns a list of all plans. 
     *
     * @param Temboo_Session $session The session that owns this ListAllPlans choreography.
     * @return Stripe_ListAllPlans New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/ListAllPlans/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListAllPlans choreography.
     *
     * @param Stripe_ListAllPlans_Inputs|array $inputs (optional) Inputs as Stripe_ListAllPlans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_ListAllPlans_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_ListAllPlans_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllPlans choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_ListAllPlans_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_ListAllPlans_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllPlans choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllPlans_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListAllPlans choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_ListAllPlans_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllPlans input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_ListAllPlans_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_ListAllPlans_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this ListAllPlans choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_ListAllPlans_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the Count input for this ListAllPlans choreography.
     *
     * @param int $value (optional, integer) The limit of plans to be returned. Can range from 1 to 100. Defaults to 10.
     * @return Stripe_ListAllPlans_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Offset input for this ListAllPlans choreography.
     *
     * @param int $value (optional, integer) Stripe will return a list of plans starting at the specified offset. Defaults to 0.
     * @return Stripe_ListAllPlans_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the ListAllPlans choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllPlans_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllPlans choreography.
     *
     * @param Temboo_Session $session The session that owns this ListAllPlans execution.
     * @param Stripe_ListAllPlans $choreo The choregraphy object for this execution.
     * @param Stripe_ListAllPlans_Inputs|array $inputs (optional) Inputs as Stripe_ListAllPlans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_ListAllPlans_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_ListAllPlans $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllPlans execution.
     *
     * @return Stripe_ListAllPlans_Results New results object.
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
     * Wraps results in appopriate results class for this ListAllPlans execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_ListAllPlans_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_ListAllPlans_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListAllPlans choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllPlans_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListAllPlans choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_ListAllPlans_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListAllPlans execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the details of an existing customer record.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCustomer extends Temboo_Choreography
{
    /**
     * Retrieves the details of an existing customer record.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCustomer choreography.
     * @return Stripe_RetrieveCustomer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/RetrieveCustomer/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveCustomer choreography.
     *
     * @param Stripe_RetrieveCustomer_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveCustomer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_RetrieveCustomer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveCustomer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveCustomer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_RetrieveCustomer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCustomer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveCustomer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveCustomer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveCustomer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_RetrieveCustomer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_RetrieveCustomer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this RetrieveCustomer choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_RetrieveCustomer_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the CustomerId input for this RetrieveCustomer choreography.
     *
     * @param string $value (optional, string) The unique identifier of the customer you want to retrieve
     * @return Stripe_RetrieveCustomer_Inputs For method chaining.
     */
    public function setCustomerId($value)
    {
        return $this->set('CustomerId', $value);
    }
}


/**
 * Execution object for the RetrieveCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCustomer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveCustomer choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCustomer execution.
     * @param Stripe_RetrieveCustomer $choreo The choregraphy object for this execution.
     * @param Stripe_RetrieveCustomer_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveCustomer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_RetrieveCustomer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveCustomer execution.
     *
     * @return Stripe_RetrieveCustomer_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveCustomer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_RetrieveCustomer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_RetrieveCustomer_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveCustomer_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveCustomer choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_RetrieveCustomer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveCustomer execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified customer record.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeleteCustomer extends Temboo_Choreography
{
    /**
     * Deletes a specified customer record.
     *
     * @param Temboo_Session $session The session that owns this DeleteCustomer choreography.
     * @return Stripe_DeleteCustomer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/DeleteCustomer/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteCustomer choreography.
     *
     * @param Stripe_DeleteCustomer_Inputs|array $inputs (optional) Inputs as Stripe_DeleteCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_DeleteCustomer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_DeleteCustomer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteCustomer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_DeleteCustomer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_DeleteCustomer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeleteCustomer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteCustomer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_DeleteCustomer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteCustomer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_DeleteCustomer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_DeleteCustomer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this DeleteCustomer choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_DeleteCustomer_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the CustomerId input for this DeleteCustomer choreography.
     *
     * @param string $value (string) The unique identifier of the customer you want to delete
     * @return Stripe_DeleteCustomer_Inputs For method chaining.
     */
    public function setCustomerId($value)
    {
        return $this->set('CustomerId', $value);
    }
}


/**
 * Execution object for the DeleteCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeleteCustomer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteCustomer choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteCustomer execution.
     * @param Stripe_DeleteCustomer $choreo The choregraphy object for this execution.
     * @param Stripe_DeleteCustomer_Inputs|array $inputs (optional) Inputs as Stripe_DeleteCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_DeleteCustomer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_DeleteCustomer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteCustomer execution.
     *
     * @return Stripe_DeleteCustomer_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteCustomer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_DeleteCustomer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_DeleteCustomer_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeleteCustomer_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteCustomer choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_DeleteCustomer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteCustomer execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of all invoices or a list of invoices for a specified customer.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllInvoices extends Temboo_Choreography
{
    /**
     * Returns a list of all invoices or a list of invoices for a specified customer.
     *
     * @param Temboo_Session $session The session that owns this ListAllInvoices choreography.
     * @return Stripe_ListAllInvoices New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/ListAllInvoices/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListAllInvoices choreography.
     *
     * @param Stripe_ListAllInvoices_Inputs|array $inputs (optional) Inputs as Stripe_ListAllInvoices_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_ListAllInvoices_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_ListAllInvoices_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllInvoices choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_ListAllInvoices_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_ListAllInvoices_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllInvoices choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllInvoices_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListAllInvoices choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_ListAllInvoices_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllInvoices input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_ListAllInvoices_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_ListAllInvoices_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this ListAllInvoices choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_ListAllInvoices_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the Count input for this ListAllInvoices choreography.
     *
     * @param int $value (optional, integer) The limit of invoices to be returned. Can range from 1 to 100. Defaults to 10.
     * @return Stripe_ListAllInvoices_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the CustomerId input for this ListAllInvoices choreography.
     *
     * @param string $value (optional, string) The unique identifier of the customer whose invoice to return. If not specified, all invoices will be returned.
     * @return Stripe_ListAllInvoices_Inputs For method chaining.
     */
    public function setCustomerId($value)
    {
        return $this->set('CustomerId', $value);
    }

    /**
     * Set the value for the Offset input for this ListAllInvoices choreography.
     *
     * @param int $value (optional, integer) Stripe will return a list of invoices starting at the specified offset. Defaults to 0.
     * @return Stripe_ListAllInvoices_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the ListAllInvoices choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllInvoices_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllInvoices choreography.
     *
     * @param Temboo_Session $session The session that owns this ListAllInvoices execution.
     * @param Stripe_ListAllInvoices $choreo The choregraphy object for this execution.
     * @param Stripe_ListAllInvoices_Inputs|array $inputs (optional) Inputs as Stripe_ListAllInvoices_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_ListAllInvoices_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_ListAllInvoices $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllInvoices execution.
     *
     * @return Stripe_ListAllInvoices_Results New results object.
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
     * Wraps results in appopriate results class for this ListAllInvoices execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_ListAllInvoices_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_ListAllInvoices_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListAllInvoices choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllInvoices_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListAllInvoices choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_ListAllInvoices_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListAllInvoices execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Subscribes a customer to a specified plan.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_UpdateActiveSubscription extends Temboo_Choreography
{
    /**
     * Subscribes a customer to a specified plan.
     *
     * @param Temboo_Session $session The session that owns this UpdateActiveSubscription choreography.
     * @return Stripe_UpdateActiveSubscription New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/UpdateActiveSubscription/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateActiveSubscription choreography.
     *
     * @param Stripe_UpdateActiveSubscription_Inputs|array $inputs (optional) Inputs as Stripe_UpdateActiveSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_UpdateActiveSubscription_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_UpdateActiveSubscription_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateActiveSubscription choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_UpdateActiveSubscription_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_UpdateActiveSubscription_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateActiveSubscription choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_UpdateActiveSubscription_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateActiveSubscription choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_UpdateActiveSubscription_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateActiveSubscription input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this UpdateActiveSubscription choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the AddressLine1 input for this UpdateActiveSubscription choreography.
     *
     * @param string $value (optional, string) The first line of the address that is associated with the credit card billing address
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setAddressLine1($value)
    {
        return $this->set('AddressLine1', $value);
    }

    /**
     * Set the value for the AddressLine2 input for this UpdateActiveSubscription choreography.
     *
     * @param string $value (optional, string) The second line of the address that is associated with the credit card billing address
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setAddressLine2($value)
    {
        return $this->set('AddressLine2', $value);
    }

    /**
     * Set the value for the CVC input for this UpdateActiveSubscription choreography.
     *
     * @param int $value (optional, integer) The 3-digit card security code
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setCVC($value)
    {
        return $this->set('CVC', $value);
    }

    /**
     * Set the value for the CardNumber input for this UpdateActiveSubscription choreography.
     *
     * @param int $value (optional, integer) The credit card number without any separators. Required when updating credit card details.
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setCardNumber($value)
    {
        return $this->set('CardNumber', $value);
    }

    /**
     * Set the value for the CardholderName input for this UpdateActiveSubscription choreography.
     *
     * @param string $value (optional, string) The cardholder's full name as it appears on the credit card
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setCardholderName($value)
    {
        return $this->set('CardholderName', $value);
    }

    /**
     * Set the value for the Country input for this UpdateActiveSubscription choreography.
     *
     * @param string $value (optional, string) The country associated with the credit card billing address
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Coupon input for this UpdateActiveSubscription choreography.
     *
     * @param string $value (optional, string) If you provide a coupon code, it can be specified here
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setCoupon($value)
    {
        return $this->set('Coupon', $value);
    }

    /**
     * Set the value for the CustomerId input for this UpdateActiveSubscription choreography.
     *
     * @param string $value (string) The unique identifier of the customer you want to subscribe to a plan
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setCustomerId($value)
    {
        return $this->set('CustomerId', $value);
    }

    /**
     * Set the value for the ExpirationMonth input for this UpdateActiveSubscription choreography.
     *
     * @param int $value (optional, integer) The card's expiration month as a two digit number. Required when updating credit card details.
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setExpirationMonth($value)
    {
        return $this->set('ExpirationMonth', $value);
    }

    /**
     * Set the value for the ExpirationYear input for this UpdateActiveSubscription choreography.
     *
     * @param int $value (optional, integer) The card's expiration year as a four digit number. Required when updating credit card details.
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setExpirationYear($value)
    {
        return $this->set('ExpirationYear', $value);
    }

    /**
     * Set the value for the Plan input for this UpdateActiveSubscription choreography.
     *
     * @param string $value (string) The unique identifier of the plan to subscribe the customer to
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setPlan($value)
    {
        return $this->set('Plan', $value);
    }

    /**
     * Set the value for the Prorate input for this UpdateActiveSubscription choreography.
     *
     * @param bool $value (optional, boolean) When set to 1, Stripe will prorate switching plans during a billing cycle. When set to 0, this feature is disabled. Defaults to 1.
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setProrate($value)
    {
        return $this->set('Prorate', $value);
    }

    /**
     * Set the value for the State input for this UpdateActiveSubscription choreography.
     *
     * @param string $value (optional, string) The state of the address that is associated with the credit card billing address
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Token input for this UpdateActiveSubscription choreography.
     *
     * @param string $value (optional, string) The token associated with a set of credit card details. This can be used as an alternative to specifying credit card details.
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the TrialEnd input for this UpdateActiveSubscription choreography.
     *
     * @param string $value (optional, date) A timestamp representing the end of the trial period in UTC. The customer will not be charged during the trial period.
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setTrialEnd($value)
    {
        return $this->set('TrialEnd', $value);
    }

    /**
     * Set the value for the ZipCode input for this UpdateActiveSubscription choreography.
     *
     * @param string $value (optional, string) The zip code of the address that is associated with the credit card billing address
     * @return Stripe_UpdateActiveSubscription_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the UpdateActiveSubscription choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_UpdateActiveSubscription_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateActiveSubscription choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateActiveSubscription execution.
     * @param Stripe_UpdateActiveSubscription $choreo The choregraphy object for this execution.
     * @param Stripe_UpdateActiveSubscription_Inputs|array $inputs (optional) Inputs as Stripe_UpdateActiveSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_UpdateActiveSubscription_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_UpdateActiveSubscription $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateActiveSubscription execution.
     *
     * @return Stripe_UpdateActiveSubscription_Results New results object.
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
     * Wraps results in appopriate results class for this UpdateActiveSubscription execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_UpdateActiveSubscription_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_UpdateActiveSubscription_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateActiveSubscription choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_UpdateActiveSubscription_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateActiveSubscription choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_UpdateActiveSubscription_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateActiveSubscription execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new customer record.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewCustomer extends Temboo_Choreography
{
    /**
     * Creates a new customer record.
     *
     * @param Temboo_Session $session The session that owns this CreateNewCustomer choreography.
     * @return Stripe_CreateNewCustomer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/CreateNewCustomer/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateNewCustomer choreography.
     *
     * @param Stripe_CreateNewCustomer_Inputs|array $inputs (optional) Inputs as Stripe_CreateNewCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateNewCustomer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_CreateNewCustomer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateNewCustomer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateNewCustomer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_CreateNewCustomer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateNewCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewCustomer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateNewCustomer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateNewCustomer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateNewCustomer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this CreateNewCustomer choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the AddressLine1 input for this CreateNewCustomer choreography.
     *
     * @param string $value (optional, string) The first line of the address that is associated with the credit card billing address
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setAddressLine1($value)
    {
        return $this->set('AddressLine1', $value);
    }

    /**
     * Set the value for the AddressLine2 input for this CreateNewCustomer choreography.
     *
     * @param string $value (optional, string) The second line of the address that is associated with the credit card billing address
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setAddressLine2($value)
    {
        return $this->set('AddressLine2', $value);
    }

    /**
     * Set the value for the CVC input for this CreateNewCustomer choreography.
     *
     * @param int $value (optional, integer) The 3-digit card security code
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setCVC($value)
    {
        return $this->set('CVC', $value);
    }

    /**
     * Set the value for the CardNumber input for this CreateNewCustomer choreography.
     *
     * @param int $value (optional, integer) The credit card number without any separators. Required when attaching a credit card to the customer record unless using a Token.
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setCardNumber($value)
    {
        return $this->set('CardNumber', $value);
    }

    /**
     * Set the value for the CardholderName input for this CreateNewCustomer choreography.
     *
     * @param string $value (optional, string) The cardholder's full name as it appears on the credit card
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setCardholderName($value)
    {
        return $this->set('CardholderName', $value);
    }

    /**
     * Set the value for the Country input for this CreateNewCustomer choreography.
     *
     * @param string $value (optional, string) The country associated with the credit card billing address
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Coupon input for this CreateNewCustomer choreography.
     *
     * @param string $value (optional, string) If you provide a coupon code, it can be specified here
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setCoupon($value)
    {
        return $this->set('Coupon', $value);
    }

    /**
     * Set the value for the Description input for this CreateNewCustomer choreography.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be associated with the customer object
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Email input for this CreateNewCustomer choreography.
     *
     * @param string $value (optional, string) The customer's email address
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ExpirationMonth input for this CreateNewCustomer choreography.
     *
     * @param int $value (optional, integer) The card's expiration month as a two digit number. Required when supplying a card number to attach to the customer.
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setExpirationMonth($value)
    {
        return $this->set('ExpirationMonth', $value);
    }

    /**
     * Set the value for the ExpirationYear input for this CreateNewCustomer choreography.
     *
     * @param int $value (optional, integer) The card's expiration year as a 4 digit number. Required when supplying a card number to attach to the customer.
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setExpirationYear($value)
    {
        return $this->set('ExpirationYear', $value);
    }

    /**
     * Set the value for the Plan input for this CreateNewCustomer choreography.
     *
     * @param string $value (optional, string) The unique identifier of the plan to subscribe the customer to
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setPlan($value)
    {
        return $this->set('Plan', $value);
    }

    /**
     * Set the value for the State input for this CreateNewCustomer choreography.
     *
     * @param string $value (optional, string) The state of the address that is associated with the credit card billing address
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Token input for this CreateNewCustomer choreography.
     *
     * @param string $value (optional, string) The token associated with a set of credit card details. When a token is provided, no other credit card details are necessary.
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the TrialEnd input for this CreateNewCustomer choreography.
     *
     * @param string $value (optional, date) Epoch timestamp in seconds for the end of the trial period. The customer won't be charged during the trial period. Timestamp should be in UTC.
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setTrialEnd($value)
    {
        return $this->set('TrialEnd', $value);
    }

    /**
     * Set the value for the ZipCode input for this CreateNewCustomer choreography.
     *
     * @param string $value (optional, string) The zip code of the address that is associated with the credit card billing address
     * @return Stripe_CreateNewCustomer_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the CreateNewCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewCustomer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateNewCustomer choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateNewCustomer execution.
     * @param Stripe_CreateNewCustomer $choreo The choregraphy object for this execution.
     * @param Stripe_CreateNewCustomer_Inputs|array $inputs (optional) Inputs as Stripe_CreateNewCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateNewCustomer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_CreateNewCustomer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateNewCustomer execution.
     *
     * @return Stripe_CreateNewCustomer_Results New results object.
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
     * Wraps results in appopriate results class for this CreateNewCustomer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_CreateNewCustomer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_CreateNewCustomer_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateNewCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewCustomer_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateNewCustomer choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_CreateNewCustomer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateNewCustomer execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves plan details with a specified plan id.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrievePlan extends Temboo_Choreography
{
    /**
     * Retrieves plan details with a specified plan id.
     *
     * @param Temboo_Session $session The session that owns this RetrievePlan choreography.
     * @return Stripe_RetrievePlan New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/RetrievePlan/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrievePlan choreography.
     *
     * @param Stripe_RetrievePlan_Inputs|array $inputs (optional) Inputs as Stripe_RetrievePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrievePlan_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_RetrievePlan_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrievePlan choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrievePlan_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_RetrievePlan_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrievePlan choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrievePlan_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrievePlan choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrievePlan_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrievePlan input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_RetrievePlan_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_RetrievePlan_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this RetrievePlan choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_RetrievePlan_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the PlanId input for this RetrievePlan choreography.
     *
     * @param string $value (string) The unique identifier of the plan you want to retrieve
     * @return Stripe_RetrievePlan_Inputs For method chaining.
     */
    public function setPlanId($value)
    {
        return $this->set('PlanId', $value);
    }
}


/**
 * Execution object for the RetrievePlan choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrievePlan_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrievePlan choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrievePlan execution.
     * @param Stripe_RetrievePlan $choreo The choregraphy object for this execution.
     * @param Stripe_RetrievePlan_Inputs|array $inputs (optional) Inputs as Stripe_RetrievePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrievePlan_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_RetrievePlan $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrievePlan execution.
     *
     * @return Stripe_RetrievePlan_Results New results object.
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
     * Wraps results in appopriate results class for this RetrievePlan execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_RetrievePlan_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_RetrievePlan_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrievePlan choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrievePlan_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrievePlan choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_RetrievePlan_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrievePlan execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves invoice items with a specified id.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveInvoiceItem extends Temboo_Choreography
{
    /**
     * Retrieves invoice items with a specified id.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInvoiceItem choreography.
     * @return Stripe_RetrieveInvoiceItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/RetrieveInvoiceItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveInvoiceItem choreography.
     *
     * @param Stripe_RetrieveInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveInvoiceItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_RetrieveInvoiceItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveInvoiceItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveInvoiceItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_RetrieveInvoiceItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveInvoiceItem choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveInvoiceItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveInvoiceItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_RetrieveInvoiceItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveInvoiceItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_RetrieveInvoiceItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_RetrieveInvoiceItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this RetrieveInvoiceItem choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_RetrieveInvoiceItem_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the InvoiceItemId input for this RetrieveInvoiceItem choreography.
     *
     * @param string $value (string) The unique identifier of the invoice item you want to retrieve
     * @return Stripe_RetrieveInvoiceItem_Inputs For method chaining.
     */
    public function setInvoiceItemId($value)
    {
        return $this->set('InvoiceItemId', $value);
    }
}


/**
 * Execution object for the RetrieveInvoiceItem choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveInvoiceItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveInvoiceItem choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInvoiceItem execution.
     * @param Stripe_RetrieveInvoiceItem $choreo The choregraphy object for this execution.
     * @param Stripe_RetrieveInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_RetrieveInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_RetrieveInvoiceItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_RetrieveInvoiceItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveInvoiceItem execution.
     *
     * @return Stripe_RetrieveInvoiceItem_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveInvoiceItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_RetrieveInvoiceItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_RetrieveInvoiceItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveInvoiceItem choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_RetrieveInvoiceItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveInvoiceItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_RetrieveInvoiceItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveInvoiceItem execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified coupon.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeleteCoupon extends Temboo_Choreography
{
    /**
     * Deletes a specified coupon.
     *
     * @param Temboo_Session $session The session that owns this DeleteCoupon choreography.
     * @return Stripe_DeleteCoupon New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/DeleteCoupon/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteCoupon choreography.
     *
     * @param Stripe_DeleteCoupon_Inputs|array $inputs (optional) Inputs as Stripe_DeleteCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_DeleteCoupon_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_DeleteCoupon_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteCoupon choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_DeleteCoupon_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_DeleteCoupon_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteCoupon choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeleteCoupon_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteCoupon choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_DeleteCoupon_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteCoupon input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_DeleteCoupon_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_DeleteCoupon_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this DeleteCoupon choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_DeleteCoupon_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the CouponId input for this DeleteCoupon choreography.
     *
     * @param string $value (optional, string) The unique identifier of the coupon you wish to delete
     * @return Stripe_DeleteCoupon_Inputs For method chaining.
     */
    public function setCouponId($value)
    {
        return $this->set('CouponId', $value);
    }
}


/**
 * Execution object for the DeleteCoupon choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeleteCoupon_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteCoupon choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteCoupon execution.
     * @param Stripe_DeleteCoupon $choreo The choregraphy object for this execution.
     * @param Stripe_DeleteCoupon_Inputs|array $inputs (optional) Inputs as Stripe_DeleteCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_DeleteCoupon_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_DeleteCoupon $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteCoupon execution.
     *
     * @return Stripe_DeleteCoupon_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteCoupon execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_DeleteCoupon_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_DeleteCoupon_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteCoupon choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_DeleteCoupon_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteCoupon choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_DeleteCoupon_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteCoupon execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a subscription plan
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreatePlan extends Temboo_Choreography
{
    /**
     * Creates a subscription plan
     *
     * @param Temboo_Session $session The session that owns this CreatePlan choreography.
     * @return Stripe_CreatePlan New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/CreatePlan/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreatePlan choreography.
     *
     * @param Stripe_CreatePlan_Inputs|array $inputs (optional) Inputs as Stripe_CreatePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreatePlan_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_CreatePlan_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreatePlan choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreatePlan_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_CreatePlan_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreatePlan choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreatePlan_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreatePlan choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreatePlan_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreatePlan input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_CreatePlan_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_CreatePlan_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this CreatePlan choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_CreatePlan_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the Amount input for this CreatePlan choreography.
     *
     * @param int $value (integer) The amount in cents to charge on a recurring basis for subscribers of this plan
     * @return Stripe_CreatePlan_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the Currency input for this CreatePlan choreography.
     *
     * @param string $value (optional, string) 3-letter ISO code for currency. Defaults to 'usd' which is currently the only supported currency.
     * @return Stripe_CreatePlan_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the Interval input for this CreatePlan choreography.
     *
     * @param string $value (string) Indicates billing frequency. Valid values are: month or year.
     * @return Stripe_CreatePlan_Inputs For method chaining.
     */
    public function setInterval($value)
    {
        return $this->set('Interval', $value);
    }

    /**
     * Set the value for the PlanId input for this CreatePlan choreography.
     *
     * @param string $value (string) The unique identifier of the plan you want to create
     * @return Stripe_CreatePlan_Inputs For method chaining.
     */
    public function setPlanId($value)
    {
        return $this->set('PlanId', $value);
    }

    /**
     * Set the value for the PlanName input for this CreatePlan choreography.
     *
     * @param string $value (string) The name of the plan which will be displayed in the Stripe web interface.
     * @return Stripe_CreatePlan_Inputs For method chaining.
     */
    public function setPlanName($value)
    {
        return $this->set('PlanName', $value);
    }

    /**
     * Set the value for the TrialPeriodDays input for this CreatePlan choreography.
     *
     * @param int $value (optional, integer) The number of days in a trial period (customer will not be billed until the trial period is over)
     * @return Stripe_CreatePlan_Inputs For method chaining.
     */
    public function setTrialPeriodDays($value)
    {
        return $this->set('TrialPeriodDays', $value);
    }
}


/**
 * Execution object for the CreatePlan choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreatePlan_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreatePlan choreography.
     *
     * @param Temboo_Session $session The session that owns this CreatePlan execution.
     * @param Stripe_CreatePlan $choreo The choregraphy object for this execution.
     * @param Stripe_CreatePlan_Inputs|array $inputs (optional) Inputs as Stripe_CreatePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreatePlan_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_CreatePlan $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreatePlan execution.
     *
     * @return Stripe_CreatePlan_Results New results object.
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
     * Wraps results in appopriate results class for this CreatePlan execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_CreatePlan_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_CreatePlan_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreatePlan choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreatePlan_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreatePlan choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_CreatePlan_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreatePlan execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of all charges or a list of charges for a specified customer.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllCharges extends Temboo_Choreography
{
    /**
     * Returns a list of all charges or a list of charges for a specified customer.
     *
     * @param Temboo_Session $session The session that owns this ListAllCharges choreography.
     * @return Stripe_ListAllCharges New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/ListAllCharges/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListAllCharges choreography.
     *
     * @param Stripe_ListAllCharges_Inputs|array $inputs (optional) Inputs as Stripe_ListAllCharges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_ListAllCharges_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_ListAllCharges_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllCharges choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_ListAllCharges_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_ListAllCharges_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllCharges choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllCharges_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListAllCharges choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_ListAllCharges_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllCharges input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_ListAllCharges_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_ListAllCharges_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this ListAllCharges choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_ListAllCharges_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the Count input for this ListAllCharges choreography.
     *
     * @param int $value (optional, integer) The limit of charges to be returned. Can range from 1 to 100. Defaults to 10.
     * @return Stripe_ListAllCharges_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the CustomerId input for this ListAllCharges choreography.
     *
     * @param string $value (optional, string) The unique identifier of the customer whose charges to return. If not specified, all charges will be returned.
     * @return Stripe_ListAllCharges_Inputs For method chaining.
     */
    public function setCustomerId($value)
    {
        return $this->set('CustomerId', $value);
    }

    /**
     * Set the value for the Offset input for this ListAllCharges choreography.
     *
     * @param int $value (optional, integer) Stripe will return a list of charges starting at the specified offset. Defaults to 0.
     * @return Stripe_ListAllCharges_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the ListAllCharges choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllCharges_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllCharges choreography.
     *
     * @param Temboo_Session $session The session that owns this ListAllCharges execution.
     * @param Stripe_ListAllCharges $choreo The choregraphy object for this execution.
     * @param Stripe_ListAllCharges_Inputs|array $inputs (optional) Inputs as Stripe_ListAllCharges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_ListAllCharges_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_ListAllCharges $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllCharges execution.
     *
     * @return Stripe_ListAllCharges_Results New results object.
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
     * Wraps results in appopriate results class for this ListAllCharges execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_ListAllCharges_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_ListAllCharges_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListAllCharges choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_ListAllCharges_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListAllCharges choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_ListAllCharges_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListAllCharges execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified customer record.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_UpdateCustomer extends Temboo_Choreography
{
    /**
     * Updates a specified customer record.
     *
     * @param Temboo_Session $session The session that owns this UpdateCustomer choreography.
     * @return Stripe_UpdateCustomer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/UpdateCustomer/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateCustomer choreography.
     *
     * @param Stripe_UpdateCustomer_Inputs|array $inputs (optional) Inputs as Stripe_UpdateCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_UpdateCustomer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_UpdateCustomer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateCustomer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_UpdateCustomer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_UpdateCustomer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_UpdateCustomer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateCustomer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_UpdateCustomer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateCustomer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this UpdateCustomer choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the AddressLine1 input for this UpdateCustomer choreography.
     *
     * @param string $value (optional, string) The first line of the address that is associated with the credit card billing address
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setAddressLine1($value)
    {
        return $this->set('AddressLine1', $value);
    }

    /**
     * Set the value for the AddressLine2 input for this UpdateCustomer choreography.
     *
     * @param string $value (optional, string) The second line of the address that is associated with the credit card billing address
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setAddressLine2($value)
    {
        return $this->set('AddressLine2', $value);
    }

    /**
     * Set the value for the CVC input for this UpdateCustomer choreography.
     *
     * @param int $value (optional, integer) The 3-digit card security code
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setCVC($value)
    {
        return $this->set('CVC', $value);
    }

    /**
     * Set the value for the CardNumber input for this UpdateCustomer choreography.
     *
     * @param int $value (optional, integer) The credit card number without any separators. Required when updating credit card details.
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setCardNumber($value)
    {
        return $this->set('CardNumber', $value);
    }

    /**
     * Set the value for the CardholderName input for this UpdateCustomer choreography.
     *
     * @param string $value (optional, string) The cardholder's full name as it appears on the credit card
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setCardholderName($value)
    {
        return $this->set('CardholderName', $value);
    }

    /**
     * Set the value for the Country input for this UpdateCustomer choreography.
     *
     * @param string $value (optional, string) The country associated with the credit card billing address
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Coupon input for this UpdateCustomer choreography.
     *
     * @param string $value (optional, string) If you provide a coupon code, it can be specified here
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setCoupon($value)
    {
        return $this->set('Coupon', $value);
    }

    /**
     * Set the value for the CustomerId input for this UpdateCustomer choreography.
     *
     * @param string $value (string) The unique identifier of the customer you want to update
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setCustomerId($value)
    {
        return $this->set('CustomerId', $value);
    }

    /**
     * Set the value for the Description input for this UpdateCustomer choreography.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be associated with the charge as a description
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Email input for this UpdateCustomer choreography.
     *
     * @param string $value (optional, string) The customer's email address
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ExpirationMonth input for this UpdateCustomer choreography.
     *
     * @param int $value (optional, integer) The card's expiration month as a two digit number. Required when updating credit card details.
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setExpirationMonth($value)
    {
        return $this->set('ExpirationMonth', $value);
    }

    /**
     * Set the value for the ExpirationYear input for this UpdateCustomer choreography.
     *
     * @param int $value (optional, integer) The card's expiration year as a four digit number. Required when updating credit card details.
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setExpirationYear($value)
    {
        return $this->set('ExpirationYear', $value);
    }

    /**
     * Set the value for the State input for this UpdateCustomer choreography.
     *
     * @param string $value (optional, string) The state of the address that is associated with the credit card billing address
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Token input for this UpdateCustomer choreography.
     *
     * @param string $value (optional, string) The token associated with a set of credit card details. When a token is provided, no other credit card details are necessary.
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the ZipCode input for this UpdateCustomer choreography.
     *
     * @param string $value (optional, string) The zip code of the address that is associated with the credit card billing address
     * @return Stripe_UpdateCustomer_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the UpdateCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_UpdateCustomer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateCustomer choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateCustomer execution.
     * @param Stripe_UpdateCustomer $choreo The choregraphy object for this execution.
     * @param Stripe_UpdateCustomer_Inputs|array $inputs (optional) Inputs as Stripe_UpdateCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_UpdateCustomer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_UpdateCustomer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateCustomer execution.
     *
     * @return Stripe_UpdateCustomer_Results New results object.
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
     * Wraps results in appopriate results class for this UpdateCustomer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_UpdateCustomer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_UpdateCustomer_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_UpdateCustomer_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateCustomer choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_UpdateCustomer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateCustomer execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new charge object in order to charge a credit card for an existing customer.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewChargeForExistingCustomer extends Temboo_Choreography
{
    /**
     * Creates a new charge object in order to charge a credit card for an existing customer.
     *
     * @param Temboo_Session $session The session that owns this CreateNewChargeForExistingCustomer choreography.
     * @return Stripe_CreateNewChargeForExistingCustomer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/CreateNewChargeForExistingCustomer/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateNewChargeForExistingCustomer choreography.
     *
     * @param Stripe_CreateNewChargeForExistingCustomer_Inputs|array $inputs (optional) Inputs as Stripe_CreateNewChargeForExistingCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateNewChargeForExistingCustomer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_CreateNewChargeForExistingCustomer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateNewChargeForExistingCustomer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateNewChargeForExistingCustomer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_CreateNewChargeForExistingCustomer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateNewChargeForExistingCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewChargeForExistingCustomer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateNewChargeForExistingCustomer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateNewChargeForExistingCustomer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateNewChargeForExistingCustomer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this CreateNewChargeForExistingCustomer choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the Amount input for this CreateNewChargeForExistingCustomer choreography.
     *
     * @param int $value (integer) The amount to charge a customer in cents
     * @return Stripe_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the Currency input for this CreateNewChargeForExistingCustomer choreography.
     *
     * @param string $value (optional, string) 3-letter ISO code for currency. Defaults to 'usd' which is currently the only supported currency.
     * @return Stripe_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the CustomerId input for this CreateNewChargeForExistingCustomer choreography.
     *
     * @param string $value (string) The id for the customer to charge
     * @return Stripe_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function setCustomerId($value)
    {
        return $this->set('CustomerId', $value);
    }

    /**
     * Set the value for the Description input for this CreateNewChargeForExistingCustomer choreography.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be associated with the charge as a description
     * @return Stripe_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }
}


/**
 * Execution object for the CreateNewChargeForExistingCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewChargeForExistingCustomer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateNewChargeForExistingCustomer choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateNewChargeForExistingCustomer execution.
     * @param Stripe_CreateNewChargeForExistingCustomer $choreo The choregraphy object for this execution.
     * @param Stripe_CreateNewChargeForExistingCustomer_Inputs|array $inputs (optional) Inputs as Stripe_CreateNewChargeForExistingCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateNewChargeForExistingCustomer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_CreateNewChargeForExistingCustomer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateNewChargeForExistingCustomer execution.
     *
     * @return Stripe_CreateNewChargeForExistingCustomer_Results New results object.
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
     * Wraps results in appopriate results class for this CreateNewChargeForExistingCustomer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_CreateNewChargeForExistingCustomer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_CreateNewChargeForExistingCustomer_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateNewChargeForExistingCustomer choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewChargeForExistingCustomer_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateNewChargeForExistingCustomer choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_CreateNewChargeForExistingCustomer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateNewChargeForExistingCustomer execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a single use token associated with credit card details.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateCardToken extends Temboo_Choreography
{
    /**
     * Creates a single use token associated with credit card details.
     *
     * @param Temboo_Session $session The session that owns this CreateCardToken choreography.
     * @return Stripe_CreateCardToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/CreateCardToken/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateCardToken choreography.
     *
     * @param Stripe_CreateCardToken_Inputs|array $inputs (optional) Inputs as Stripe_CreateCardToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateCardToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_CreateCardToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateCardToken choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateCardToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_CreateCardToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateCardToken choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateCardToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateCardToken choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateCardToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateCardToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this CreateCardToken choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the AddressLine1 input for this CreateCardToken choreography.
     *
     * @param string $value (optional, string) The first line of the address that is associated with the credit card billing address
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setAddressLine1($value)
    {
        return $this->set('AddressLine1', $value);
    }

    /**
     * Set the value for the AddressLine2 input for this CreateCardToken choreography.
     *
     * @param string $value (optional, string) The second line of the address that is associated with the credit card billing address
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setAddressLine2($value)
    {
        return $this->set('AddressLine2', $value);
    }

    /**
     * Set the value for the Amount input for this CreateCardToken choreography.
     *
     * @param int $value (optional, integer) The amount to charge a customer in cents. This option will guarantee that there are enough funds to satisfy a charge for this amount. 
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the CVC input for this CreateCardToken choreography.
     *
     * @param int $value (optional, integer) The 3-digit card security code 
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setCVC($value)
    {
        return $this->set('CVC', $value);
    }

    /**
     * Set the value for the CardNumber input for this CreateCardToken choreography.
     *
     * @param int $value (integer) The credit card number without any separators
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setCardNumber($value)
    {
        return $this->set('CardNumber', $value);
    }

    /**
     * Set the value for the CardholderName input for this CreateCardToken choreography.
     *
     * @param string $value (optional, string) The cardholder's full name as it appears on the credit card
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setCardholderName($value)
    {
        return $this->set('CardholderName', $value);
    }

    /**
     * Set the value for the Country input for this CreateCardToken choreography.
     *
     * @param string $value (optional, string) The country associated with the credit card billing address
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Currency input for this CreateCardToken choreography.
     *
     * @param string $value (optional, string) 3-letter ISO code for currency. Defaults to 'usd' which is currently the only supported currency.
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the ExpirationMonth input for this CreateCardToken choreography.
     *
     * @param int $value (integer) The card's expiration month as a two digit number
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setExpirationMonth($value)
    {
        return $this->set('ExpirationMonth', $value);
    }

    /**
     * Set the value for the ExpirationYear input for this CreateCardToken choreography.
     *
     * @param int $value (integer) The card's expiration year as a 4 digit number
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setExpirationYear($value)
    {
        return $this->set('ExpirationYear', $value);
    }

    /**
     * Set the value for the State input for this CreateCardToken choreography.
     *
     * @param string $value (optional, string) The state of the address that is associated with the credit card billing address
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the ZipCode input for this CreateCardToken choreography.
     *
     * @param string $value (optional, string) The zip code of the address that is associated with the credit card billing address
     * @return Stripe_CreateCardToken_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the CreateCardToken choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateCardToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateCardToken choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateCardToken execution.
     * @param Stripe_CreateCardToken $choreo The choregraphy object for this execution.
     * @param Stripe_CreateCardToken_Inputs|array $inputs (optional) Inputs as Stripe_CreateCardToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateCardToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_CreateCardToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateCardToken execution.
     *
     * @return Stripe_CreateCardToken_Results New results object.
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
     * Wraps results in appopriate results class for this CreateCardToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_CreateCardToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_CreateCardToken_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateCardToken choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateCardToken_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateCardToken choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_CreateCardToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateCardToken execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Charges a credit card by creating a new charge object using a card token that is associated with the credit card details.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewChargeWithToken extends Temboo_Choreography
{
    /**
     * Charges a credit card by creating a new charge object using a card token that is associated with the credit card details.
     *
     * @param Temboo_Session $session The session that owns this CreateNewChargeWithToken choreography.
     * @return Stripe_CreateNewChargeWithToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/CreateNewChargeWithToken/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateNewChargeWithToken choreography.
     *
     * @param Stripe_CreateNewChargeWithToken_Inputs|array $inputs (optional) Inputs as Stripe_CreateNewChargeWithToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateNewChargeWithToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_CreateNewChargeWithToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateNewChargeWithToken choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateNewChargeWithToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_CreateNewChargeWithToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateNewChargeWithToken choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewChargeWithToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateNewChargeWithToken choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CreateNewChargeWithToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateNewChargeWithToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this CreateNewChargeWithToken choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the Amount input for this CreateNewChargeWithToken choreography.
     *
     * @param int $value (integer) The amount to charge a customer in cents
     * @return Stripe_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the Currency input for this CreateNewChargeWithToken choreography.
     *
     * @param string $value (optional, string) 3-letter ISO code for currency. Defaults to 'usd' which is currently the only supported currency.
     * @return Stripe_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the Description input for this CreateNewChargeWithToken choreography.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be associated with the charge as a description
     * @return Stripe_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Token input for this CreateNewChargeWithToken choreography.
     *
     * @param string $value (string) The token associated with a set of credit card details. This can be generated with the CreateCardToken Choreo.
     * @return Stripe_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the CreateNewChargeWithToken choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewChargeWithToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateNewChargeWithToken choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateNewChargeWithToken execution.
     * @param Stripe_CreateNewChargeWithToken $choreo The choregraphy object for this execution.
     * @param Stripe_CreateNewChargeWithToken_Inputs|array $inputs (optional) Inputs as Stripe_CreateNewChargeWithToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CreateNewChargeWithToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_CreateNewChargeWithToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateNewChargeWithToken execution.
     *
     * @return Stripe_CreateNewChargeWithToken_Results New results object.
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
     * Wraps results in appopriate results class for this CreateNewChargeWithToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_CreateNewChargeWithToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_CreateNewChargeWithToken_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateNewChargeWithToken choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CreateNewChargeWithToken_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateNewChargeWithToken choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_CreateNewChargeWithToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateNewChargeWithToken execution.
     *
     * @return string (XML) The response from Stripe
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
 * @subpackage Stripe
 */
class Stripe_CancelSubscription extends Temboo_Choreography
{
    /**
     * Cancels an existing subscription.
     *
     * @param Temboo_Session $session The session that owns this CancelSubscription choreography.
     * @return Stripe_CancelSubscription New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/CancelSubscription/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CancelSubscription choreography.
     *
     * @param Stripe_CancelSubscription_Inputs|array $inputs (optional) Inputs as Stripe_CancelSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CancelSubscription_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_CancelSubscription_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CancelSubscription choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CancelSubscription_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_CancelSubscription_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CancelSubscription choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CancelSubscription_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CancelSubscription choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_CancelSubscription_Inputs New instance.
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
     * @return Stripe_CancelSubscription_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Stripe_CancelSubscription_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APISecretKey input for this CancelSubscription choreography.
     *
     * @param string $value (string) The secret API Key providied by Stripe
     * @return Stripe_CancelSubscription_Inputs For method chaining.
     */
    public function setAPISecretKey($value)
    {
        return $this->set('APISecretKey', $value);
    }

    /**
     * Set the value for the AtPeriodEnd input for this CancelSubscription choreography.
     *
     * @param bool $value (optional, boolean) Delays the cancellation of the subscription until the end of the current period when set to 1. Defaults to 0.
     * @return Stripe_CancelSubscription_Inputs For method chaining.
     */
    public function setAtPeriodEnd($value)
    {
        return $this->set('AtPeriodEnd', $value);
    }

    /**
     * Set the value for the CustomerId input for this CancelSubscription choreography.
     *
     * @param string $value (string) The id of the customer whose subscription you want to cancel
     * @return Stripe_CancelSubscription_Inputs For method chaining.
     */
    public function setCustomerId($value)
    {
        return $this->set('CustomerId', $value);
    }
}


/**
 * Execution object for the CancelSubscription choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CancelSubscription_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CancelSubscription choreography.
     *
     * @param Temboo_Session $session The session that owns this CancelSubscription execution.
     * @param Stripe_CancelSubscription $choreo The choregraphy object for this execution.
     * @param Stripe_CancelSubscription_Inputs|array $inputs (optional) Inputs as Stripe_CancelSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_CancelSubscription_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_CancelSubscription $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CancelSubscription execution.
     *
     * @return Stripe_CancelSubscription_Results New results object.
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
     * @return Stripe_CancelSubscription_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_CancelSubscription_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CancelSubscription choreography.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_CancelSubscription_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CancelSubscription choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_CancelSubscription_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CancelSubscription execution.
     *
     * @return string (XML) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>