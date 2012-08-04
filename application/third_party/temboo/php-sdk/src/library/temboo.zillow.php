<?php

/**
 * Temboo PHP SDK Zillow classes
 *
 * Execute Choreographies from the Temboo Zillow bundle.
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
 * @subpackage Zillow
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieve current interest rates for a specified loan type.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetRateSummary extends Temboo_Choreography
{
    /**
     * Retrieve current interest rates for a specified loan type.
     *
     * @param Temboo_Session $session The session that owns this GetRateSummary choreography.
     * @return Zillow_GetRateSummary New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zillow/GetRateSummary/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRateSummary choreography.
     *
     * @param Zillow_GetRateSummary_Inputs|array $inputs (optional) Inputs as Zillow_GetRateSummary_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zillow_GetRateSummary_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zillow_GetRateSummary_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRateSummary choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zillow_GetRateSummary_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zillow_GetRateSummary_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRateSummary choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetRateSummary_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRateSummary choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zillow_GetRateSummary_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRateSummary input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zillow_GetRateSummary_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Zillow_GetRateSummary_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OutputFormat input for this GetRateSummary choreography.
     *
     * @param string $value (optional, string) Enter the desired query output format.  Enter: xml, or json.  Default output is set to: xml.
     * @return Zillow_GetRateSummary_Inputs For method chaining.
     */
    public function setOutputFormat($value)
    {
        return $this->set('OutputFormat', $value);
    }

    /**
     * Set the value for the State input for this GetRateSummary choreography.
     *
     * @param string $value (optional, string) Enter a U.S. state abbreviation for which to retrieve mortgage rates.  If null, the national average rate is returned.
     * @return Zillow_GetRateSummary_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the ZWSID input for this GetRateSummary choreography.
     *
     * @param string $value (required, string) Enter a Zillow Web Service Identifier (ZWS ID).
     * @return Zillow_GetRateSummary_Inputs For method chaining.
     */
    public function setZWSID($value)
    {
        return $this->set('ZWSID', $value);
    }
}


/**
 * Execution object for the GetRateSummary choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetRateSummary_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRateSummary choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRateSummary execution.
     * @param Zillow_GetRateSummary $choreo The choregraphy object for this execution.
     * @param Zillow_GetRateSummary_Inputs|array $inputs (optional) Inputs as Zillow_GetRateSummary_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zillow_GetRateSummary_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zillow_GetRateSummary $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRateSummary execution.
     *
     * @return Zillow_GetRateSummary_Results New results object.
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
     * Wraps results in appopriate results class for this GetRateSummary execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zillow_GetRateSummary_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zillow_GetRateSummary_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRateSummary choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetRateSummary_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRateSummary choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zillow_GetRateSummary_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRateSummary execution.
     *
     * @return string (xml) The response from Zillow.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of comparable recent sales for a specified property.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetComps extends Temboo_Choreography
{
    /**
     * Returns a list of comparable recent sales for a specified property.
     *
     * @param Temboo_Session $session The session that owns this GetComps choreography.
     * @return Zillow_GetComps New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zillow/GetComps/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetComps choreography.
     *
     * @param Zillow_GetComps_Inputs|array $inputs (optional) Inputs as Zillow_GetComps_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zillow_GetComps_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zillow_GetComps_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetComps choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zillow_GetComps_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zillow_GetComps_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetComps choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetComps_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetComps choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zillow_GetComps_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetComps input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zillow_GetComps_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Zillow_GetComps_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Count input for this GetComps choreography.
     *
     * @param int $value (required, integer) Enter the number of comparable recent sales to retrieve. Choose a value between 1 and 25.
     * @return Zillow_GetComps_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the RentEstimate input for this GetComps choreography.
     *
     * @param bool $value (optional, boolean) Set to 1 (true) to enable. Defaults to 0 (false).
     * @return Zillow_GetComps_Inputs For method chaining.
     */
    public function setRentEstimate($value)
    {
        return $this->set('RentEstimate', $value);
    }

    /**
     * Set the value for the ZPID input for this GetComps choreography.
     *
     * @param int $value (required, integer) Enter a Zillow Property ID for the property being queried.
     * @return Zillow_GetComps_Inputs For method chaining.
     */
    public function setZPID($value)
    {
        return $this->set('ZPID', $value);
    }

    /**
     * Set the value for the ZWSID input for this GetComps choreography.
     *
     * @param string $value (required, string) Enter a Zillow Web Service Identifier (ZWS ID).
     * @return Zillow_GetComps_Inputs For method chaining.
     */
    public function setZWSID($value)
    {
        return $this->set('ZWSID', $value);
    }
}


/**
 * Execution object for the GetComps choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetComps_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetComps choreography.
     *
     * @param Temboo_Session $session The session that owns this GetComps execution.
     * @param Zillow_GetComps $choreo The choregraphy object for this execution.
     * @param Zillow_GetComps_Inputs|array $inputs (optional) Inputs as Zillow_GetComps_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zillow_GetComps_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zillow_GetComps $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetComps execution.
     *
     * @return Zillow_GetComps_Results New results object.
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
     * Wraps results in appopriate results class for this GetComps execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zillow_GetComps_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zillow_GetComps_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetComps choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetComps_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetComps choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zillow_GetComps_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetComps execution.
     *
     * @return string (xml) The response from Zillow.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve estimate information for a specified property.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetZestimate extends Temboo_Choreography
{
    /**
     * Retrieve estimate information for a specified property.
     *
     * @param Temboo_Session $session The session that owns this GetZestimate choreography.
     * @return Zillow_GetZestimate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zillow/GetZestimate/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetZestimate choreography.
     *
     * @param Zillow_GetZestimate_Inputs|array $inputs (optional) Inputs as Zillow_GetZestimate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zillow_GetZestimate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zillow_GetZestimate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetZestimate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zillow_GetZestimate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zillow_GetZestimate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetZestimate choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetZestimate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetZestimate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zillow_GetZestimate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetZestimate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zillow_GetZestimate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Zillow_GetZestimate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the RentEstimate input for this GetZestimate choreography.
     *
     * @param bool $value (optional, boolean) Set to 1 (true) to enable. Defaults to 0 (false).
     * @return Zillow_GetZestimate_Inputs For method chaining.
     */
    public function setRentEstimate($value)
    {
        return $this->set('RentEstimate', $value);
    }

    /**
     * Set the value for the ZPID input for this GetZestimate choreography.
     *
     * @param int $value (required, integer) Enter a Zillow Property ID for the property being queried.
     * @return Zillow_GetZestimate_Inputs For method chaining.
     */
    public function setZPID($value)
    {
        return $this->set('ZPID', $value);
    }

    /**
     * Set the value for the ZWSID input for this GetZestimate choreography.
     *
     * @param string $value (required, string) Enter a Zillow Web Service Identifier (ZWS ID).
     * @return Zillow_GetZestimate_Inputs For method chaining.
     */
    public function setZWSID($value)
    {
        return $this->set('ZWSID', $value);
    }
}


/**
 * Execution object for the GetZestimate choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetZestimate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetZestimate choreography.
     *
     * @param Temboo_Session $session The session that owns this GetZestimate execution.
     * @param Zillow_GetZestimate $choreo The choregraphy object for this execution.
     * @param Zillow_GetZestimate_Inputs|array $inputs (optional) Inputs as Zillow_GetZestimate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zillow_GetZestimate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zillow_GetZestimate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetZestimate execution.
     *
     * @return Zillow_GetZestimate_Results New results object.
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
     * Wraps results in appopriate results class for this GetZestimate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zillow_GetZestimate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zillow_GetZestimate_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetZestimate choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetZestimate_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetZestimate choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zillow_GetZestimate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetZestimate execution.
     *
     * @return string (xml) The response from Zillow.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve estimated monthly payments, including principal and interest based on current interest rates.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetMonthlyPayments extends Temboo_Choreography
{
    /**
     * Retrieve estimated monthly payments, including principal and interest based on current interest rates.
     *
     * @param Temboo_Session $session The session that owns this GetMonthlyPayments choreography.
     * @return Zillow_GetMonthlyPayments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zillow/GetMonthlyPayments/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetMonthlyPayments choreography.
     *
     * @param Zillow_GetMonthlyPayments_Inputs|array $inputs (optional) Inputs as Zillow_GetMonthlyPayments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zillow_GetMonthlyPayments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zillow_GetMonthlyPayments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMonthlyPayments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zillow_GetMonthlyPayments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zillow_GetMonthlyPayments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMonthlyPayments choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetMonthlyPayments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetMonthlyPayments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zillow_GetMonthlyPayments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMonthlyPayments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zillow_GetMonthlyPayments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Zillow_GetMonthlyPayments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DollarsDown input for this GetMonthlyPayments choreography.
     *
     * @param int $value (optional, integer) Specify the dollar amount that is placed for a down payment. This variable can be used in place of DownPaymentAmount.
     * @return Zillow_GetMonthlyPayments_Inputs For method chaining.
     */
    public function setDollarsDown($value)
    {
        return $this->set('DollarsDown', $value);
    }

    /**
     * Set the value for the DownPaymentAmount input for this GetMonthlyPayments choreography.
     *
     * @param int $value (optional, integer) Enter the percentage of the total properly price that will be used as a down payment. If < 20%, mortage insurance info is also returned.
     * @return Zillow_GetMonthlyPayments_Inputs For method chaining.
     */
    public function setDownPaymentAmount($value)
    {
        return $this->set('DownPaymentAmount', $value);
    }

    /**
     * Set the value for the OutputFormat input for this GetMonthlyPayments choreography.
     *
     * @param string $value (optional, string) Enter the desired query output format.  Enter: xml, or json.  Default output is set to: xml.
     * @return Zillow_GetMonthlyPayments_Inputs For method chaining.
     */
    public function setOutputFormat($value)
    {
        return $this->set('OutputFormat', $value);
    }

    /**
     * Set the value for the Price input for this GetMonthlyPayments choreography.
     *
     * @param int $value (required, integer) Enter the price for which the monthly payment is to be calculated.
     * @return Zillow_GetMonthlyPayments_Inputs For method chaining.
     */
    public function setPrice($value)
    {
        return $this->set('Price', $value);
    }

    /**
     * Set the value for the ZWSID input for this GetMonthlyPayments choreography.
     *
     * @param string $value (required, string) Enter a Zillow Web Service Identifier (ZWS ID).
     * @return Zillow_GetMonthlyPayments_Inputs For method chaining.
     */
    public function setZWSID($value)
    {
        return $this->set('ZWSID', $value);
    }

    /**
     * Set the value for the Zip input for this GetMonthlyPayments choreography.
     *
     * @param int $value (optional, integer) Enter the zip code of the property.  If null, no property tax, or hazard insurance data will be returned.
     * @return Zillow_GetMonthlyPayments_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the GetMonthlyPayments choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetMonthlyPayments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMonthlyPayments choreography.
     *
     * @param Temboo_Session $session The session that owns this GetMonthlyPayments execution.
     * @param Zillow_GetMonthlyPayments $choreo The choregraphy object for this execution.
     * @param Zillow_GetMonthlyPayments_Inputs|array $inputs (optional) Inputs as Zillow_GetMonthlyPayments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zillow_GetMonthlyPayments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zillow_GetMonthlyPayments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMonthlyPayments execution.
     *
     * @return Zillow_GetMonthlyPayments_Results New results object.
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
     * Wraps results in appopriate results class for this GetMonthlyPayments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zillow_GetMonthlyPayments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zillow_GetMonthlyPayments_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetMonthlyPayments choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetMonthlyPayments_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetMonthlyPayments choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zillow_GetMonthlyPayments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetMonthlyPayments execution.
     *
     * @return string (xml) The response from Zillow.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve comprehensive property information for a specified address. 
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetDeepSearchResults extends Temboo_Choreography
{
    /**
     * Retrieve comprehensive property information for a specified address. 
     *
     * @param Temboo_Session $session The session that owns this GetDeepSearchResults choreography.
     * @return Zillow_GetDeepSearchResults New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zillow/GetDeepSearchResults/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetDeepSearchResults choreography.
     *
     * @param Zillow_GetDeepSearchResults_Inputs|array $inputs (optional) Inputs as Zillow_GetDeepSearchResults_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zillow_GetDeepSearchResults_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zillow_GetDeepSearchResults_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDeepSearchResults choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zillow_GetDeepSearchResults_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zillow_GetDeepSearchResults_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDeepSearchResults choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetDeepSearchResults_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetDeepSearchResults choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zillow_GetDeepSearchResults_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDeepSearchResults input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zillow_GetDeepSearchResults_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Zillow_GetDeepSearchResults_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Address input for this GetDeepSearchResults choreography.
     *
     * @param string $value (required, string) Enter the address of the property to search.
     * @return Zillow_GetDeepSearchResults_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the City input for this GetDeepSearchResults choreography.
     *
     * @param string $value (required, string) Enter a city name.
     * @return Zillow_GetDeepSearchResults_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the RentEstimate input for this GetDeepSearchResults choreography.
     *
     * @param bool $value (optional, boolean) Set to 1 (true) to enable. Defaults to 0 (false).
     * @return Zillow_GetDeepSearchResults_Inputs For method chaining.
     */
    public function setRentEstimate($value)
    {
        return $this->set('RentEstimate', $value);
    }

    /**
     * Set the value for the State input for this GetDeepSearchResults choreography.
     *
     * @param string $value (required, string) Enter a State abbreviation. If State is set, an entry for City must also be entered.
     * @return Zillow_GetDeepSearchResults_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the ZWSID input for this GetDeepSearchResults choreography.
     *
     * @param string $value (required, string) Enter a Zillow Web Service Identifier (ZWS ID).
     * @return Zillow_GetDeepSearchResults_Inputs For method chaining.
     */
    public function setZWSID($value)
    {
        return $this->set('ZWSID', $value);
    }

    /**
     * Set the value for the Zipcode input for this GetDeepSearchResults choreography.
     *
     * @param int $value (required, integer) Enter a zipcode. Can be combined with or without the  City and State input variables.
     * @return Zillow_GetDeepSearchResults_Inputs For method chaining.
     */
    public function setZipcode($value)
    {
        return $this->set('Zipcode', $value);
    }
}


/**
 * Execution object for the GetDeepSearchResults choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetDeepSearchResults_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDeepSearchResults choreography.
     *
     * @param Temboo_Session $session The session that owns this GetDeepSearchResults execution.
     * @param Zillow_GetDeepSearchResults $choreo The choregraphy object for this execution.
     * @param Zillow_GetDeepSearchResults_Inputs|array $inputs (optional) Inputs as Zillow_GetDeepSearchResults_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zillow_GetDeepSearchResults_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zillow_GetDeepSearchResults $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDeepSearchResults execution.
     *
     * @return Zillow_GetDeepSearchResults_Results New results object.
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
     * Wraps results in appopriate results class for this GetDeepSearchResults execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zillow_GetDeepSearchResults_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zillow_GetDeepSearchResults_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetDeepSearchResults choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetDeepSearchResults_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetDeepSearchResults choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zillow_GetDeepSearchResults_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetDeepSearchResults execution.
     *
     * @return string (xml) The response from Zillow.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve detailed property information that has been edited by the home's owner or agent.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetUpdatedPropertyDetails extends Temboo_Choreography
{
    /**
     * Retrieve detailed property information that has been edited by the home's owner or agent.
     *
     * @param Temboo_Session $session The session that owns this GetUpdatedPropertyDetails choreography.
     * @return Zillow_GetUpdatedPropertyDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zillow/GetUpdatedPropertyDetails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetUpdatedPropertyDetails choreography.
     *
     * @param Zillow_GetUpdatedPropertyDetails_Inputs|array $inputs (optional) Inputs as Zillow_GetUpdatedPropertyDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zillow_GetUpdatedPropertyDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zillow_GetUpdatedPropertyDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUpdatedPropertyDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zillow_GetUpdatedPropertyDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zillow_GetUpdatedPropertyDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUpdatedPropertyDetails choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetUpdatedPropertyDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetUpdatedPropertyDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zillow_GetUpdatedPropertyDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUpdatedPropertyDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zillow_GetUpdatedPropertyDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Zillow_GetUpdatedPropertyDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZPID input for this GetUpdatedPropertyDetails choreography.
     *
     * @param int $value (required, integer) Enter a Zillow Property ID for the property being queried.
     * @return Zillow_GetUpdatedPropertyDetails_Inputs For method chaining.
     */
    public function setZPID($value)
    {
        return $this->set('ZPID', $value);
    }

    /**
     * Set the value for the ZWSID input for this GetUpdatedPropertyDetails choreography.
     *
     * @param string $value (required, string) Enter a Zillow Web Service Identifier (ZWS ID).
     * @return Zillow_GetUpdatedPropertyDetails_Inputs For method chaining.
     */
    public function setZWSID($value)
    {
        return $this->set('ZWSID', $value);
    }
}


/**
 * Execution object for the GetUpdatedPropertyDetails choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetUpdatedPropertyDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUpdatedPropertyDetails choreography.
     *
     * @param Temboo_Session $session The session that owns this GetUpdatedPropertyDetails execution.
     * @param Zillow_GetUpdatedPropertyDetails $choreo The choregraphy object for this execution.
     * @param Zillow_GetUpdatedPropertyDetails_Inputs|array $inputs (optional) Inputs as Zillow_GetUpdatedPropertyDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zillow_GetUpdatedPropertyDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zillow_GetUpdatedPropertyDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUpdatedPropertyDetails execution.
     *
     * @return Zillow_GetUpdatedPropertyDetails_Results New results object.
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
     * Wraps results in appopriate results class for this GetUpdatedPropertyDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zillow_GetUpdatedPropertyDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zillow_GetUpdatedPropertyDetails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetUpdatedPropertyDetails choreography.
 *
 * @package Temboo
 * @subpackage Zillow
 */
class Zillow_GetUpdatedPropertyDetails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetUpdatedPropertyDetails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zillow_GetUpdatedPropertyDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetUpdatedPropertyDetails execution.
     *
     * @return string (xml) The response from Zillow.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>