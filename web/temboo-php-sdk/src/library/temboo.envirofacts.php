<?php

/**
 * Temboo PHP SDK EnviroFacts classes
 *
 * Execute Choreographies from the Temboo EnviroFacts bundle.
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
 * @subpackage EnviroFacts
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieves a list of the annual release quantities of toxic chemicals at EPA-regulated facilities into air, water, on-site land, and underground wells.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_ToxinReleaseByFacility extends Temboo_Choreography
{
    /**
     * Retrieves a list of the annual release quantities of toxic chemicals at EPA-regulated facilities into air, water, on-site land, and underground wells.
     *
     * @param Temboo_Session $session The session that owns this ToxinReleaseByFacility choreography.
     * @return EnviroFacts_ToxinReleaseByFacility New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/EnviroFacts/ToxinReleaseByFacility/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ToxinReleaseByFacility choreography.
     *
     * @param EnviroFacts_ToxinReleaseByFacility_Inputs|array $inputs (optional) Inputs as EnviroFacts_ToxinReleaseByFacility_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return EnviroFacts_ToxinReleaseByFacility_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new EnviroFacts_ToxinReleaseByFacility_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ToxinReleaseByFacility choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return EnviroFacts_ToxinReleaseByFacility_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new EnviroFacts_ToxinReleaseByFacility_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ToxinReleaseByFacility choreography.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_ToxinReleaseByFacility_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ToxinReleaseByFacility choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return EnviroFacts_ToxinReleaseByFacility_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ToxinReleaseByFacility input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return EnviroFacts_ToxinReleaseByFacility_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return EnviroFacts_ToxinReleaseByFacility_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FacilityID input for this ToxinReleaseByFacility choreography.
     *
     * @param string $value (required, string) FacilityID for which a toxin release report is to be generated. Found by first running the FacilitiesSearch Choreo.
     * @return EnviroFacts_ToxinReleaseByFacility_Inputs For method chaining.
     */
    public function setFacilityID($value)
    {
        return $this->set('FacilityID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ToxinReleaseByFacility choreography.
     *
     * @param string $value (optional, string) Specify the desired response format. Valid formats are: xml (the default) and csv.
     * @return EnviroFacts_ToxinReleaseByFacility_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the RowEnd input for this ToxinReleaseByFacility choreography.
     *
     * @param int $value (optional, integer) Number 1 or greater indicates the ending row number of the results displayed. Default is 4999 when RowStart is 0. Up to 5000 entries are returned in the output.
     * @return EnviroFacts_ToxinReleaseByFacility_Inputs For method chaining.
     */
    public function setRowEnd($value)
    {
        return $this->set('RowEnd', $value);
    }

    /**
     * Set the value for the RowStart input for this ToxinReleaseByFacility choreography.
     *
     * @param int $value (optional, integer) Indicates the starting row number of the results displayed. Default is 0.
     * @return EnviroFacts_ToxinReleaseByFacility_Inputs For method chaining.
     */
    public function setRowStart($value)
    {
        return $this->set('RowStart', $value);
    }
}


/**
 * Execution object for the ToxinReleaseByFacility choreography.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_ToxinReleaseByFacility_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ToxinReleaseByFacility choreography.
     *
     * @param Temboo_Session $session The session that owns this ToxinReleaseByFacility execution.
     * @param EnviroFacts_ToxinReleaseByFacility $choreo The choregraphy object for this execution.
     * @param EnviroFacts_ToxinReleaseByFacility_Inputs|array $inputs (optional) Inputs as EnviroFacts_ToxinReleaseByFacility_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return EnviroFacts_ToxinReleaseByFacility_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, EnviroFacts_ToxinReleaseByFacility $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ToxinReleaseByFacility execution.
     *
     * @return EnviroFacts_ToxinReleaseByFacility_Results New results object.
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
     * Wraps results in appopriate results class for this ToxinReleaseByFacility execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return EnviroFacts_ToxinReleaseByFacility_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new EnviroFacts_ToxinReleaseByFacility_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ToxinReleaseByFacility choreography.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_ToxinReleaseByFacility_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ToxinReleaseByFacility choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return EnviroFacts_ToxinReleaseByFacility_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ToxinReleaseByFacility execution.
     *
     * @return string The response from EnviroFacts.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about specific chemicals released by EPA-regulated facilities.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_ChemicalSearch extends Temboo_Choreography
{
    /**
     * Retrieves information about specific chemicals released by EPA-regulated facilities.
     *
     * @param Temboo_Session $session The session that owns this ChemicalSearch choreography.
     * @return EnviroFacts_ChemicalSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/EnviroFacts/ChemicalSearch/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ChemicalSearch choreography.
     *
     * @param EnviroFacts_ChemicalSearch_Inputs|array $inputs (optional) Inputs as EnviroFacts_ChemicalSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return EnviroFacts_ChemicalSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new EnviroFacts_ChemicalSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ChemicalSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return EnviroFacts_ChemicalSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new EnviroFacts_ChemicalSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ChemicalSearch choreography.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_ChemicalSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ChemicalSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return EnviroFacts_ChemicalSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ChemicalSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return EnviroFacts_ChemicalSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return EnviroFacts_ChemicalSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ChemicalID input for this ChemicalSearch choreography.
     *
     * @param string $value (required, string) EPA ID number of a chemical. Chemical IDs from a given facility can be found by first running the ChemActivityByFacility or ToxinReleaseByFacility Choreos.
     * @return EnviroFacts_ChemicalSearch_Inputs For method chaining.
     */
    public function setChemicalID($value)
    {
        return $this->set('ChemicalID', $value);
    }
}


/**
 * Execution object for the ChemicalSearch choreography.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_ChemicalSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ChemicalSearch choreography.
     *
     * @param Temboo_Session $session The session that owns this ChemicalSearch execution.
     * @param EnviroFacts_ChemicalSearch $choreo The choregraphy object for this execution.
     * @param EnviroFacts_ChemicalSearch_Inputs|array $inputs (optional) Inputs as EnviroFacts_ChemicalSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return EnviroFacts_ChemicalSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, EnviroFacts_ChemicalSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ChemicalSearch execution.
     *
     * @return EnviroFacts_ChemicalSearch_Results New results object.
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
     * Wraps results in appopriate results class for this ChemicalSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return EnviroFacts_ChemicalSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new EnviroFacts_ChemicalSearch_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ChemicalSearch choreography.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_ChemicalSearch_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ChemicalSearch choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return EnviroFacts_ChemicalSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ChemicalSearch execution.
     *
     * @return string (xml) The response from EnviroFacts.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of the type of manufacturing activity of toxic chemicals at any EPA-regulated facility.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_ChemActivityByFacility extends Temboo_Choreography
{
    /**
     * Retrieves a list of the type of manufacturing activity of toxic chemicals at any EPA-regulated facility.
     *
     * @param Temboo_Session $session The session that owns this ChemActivityByFacility choreography.
     * @return EnviroFacts_ChemActivityByFacility New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/EnviroFacts/ChemActivityByFacility/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ChemActivityByFacility choreography.
     *
     * @param EnviroFacts_ChemActivityByFacility_Inputs|array $inputs (optional) Inputs as EnviroFacts_ChemActivityByFacility_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return EnviroFacts_ChemActivityByFacility_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new EnviroFacts_ChemActivityByFacility_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ChemActivityByFacility choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return EnviroFacts_ChemActivityByFacility_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new EnviroFacts_ChemActivityByFacility_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ChemActivityByFacility choreography.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_ChemActivityByFacility_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ChemActivityByFacility choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return EnviroFacts_ChemActivityByFacility_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ChemActivityByFacility input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return EnviroFacts_ChemActivityByFacility_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return EnviroFacts_ChemActivityByFacility_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FacilityID input for this ChemActivityByFacility choreography.
     *
     * @param string $value (required, string) FacilityID for which a toxin release report is to be generated. Found by first running the FacilitiesSearch Choreo.
     * @return EnviroFacts_ChemActivityByFacility_Inputs For method chaining.
     */
    public function setFacilityID($value)
    {
        return $this->set('FacilityID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ChemActivityByFacility choreography.
     *
     * @param string $value (optional, string) Specify the desired response format. Valid formats are: xml (the default) and csv.
     * @return EnviroFacts_ChemActivityByFacility_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the RowEnd input for this ChemActivityByFacility choreography.
     *
     * @param int $value (optional, integer) Number 1 or greater indicates the ending row number of the results displayed. Default is 4999 when RowStart is 0. Up to 5000 entries are returned in the output.
     * @return EnviroFacts_ChemActivityByFacility_Inputs For method chaining.
     */
    public function setRowEnd($value)
    {
        return $this->set('RowEnd', $value);
    }

    /**
     * Set the value for the RowStart input for this ChemActivityByFacility choreography.
     *
     * @param int $value (optional, integer) Indicates the starting row number of the results displayed. Default is 0.
     * @return EnviroFacts_ChemActivityByFacility_Inputs For method chaining.
     */
    public function setRowStart($value)
    {
        return $this->set('RowStart', $value);
    }
}


/**
 * Execution object for the ChemActivityByFacility choreography.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_ChemActivityByFacility_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ChemActivityByFacility choreography.
     *
     * @param Temboo_Session $session The session that owns this ChemActivityByFacility execution.
     * @param EnviroFacts_ChemActivityByFacility $choreo The choregraphy object for this execution.
     * @param EnviroFacts_ChemActivityByFacility_Inputs|array $inputs (optional) Inputs as EnviroFacts_ChemActivityByFacility_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return EnviroFacts_ChemActivityByFacility_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, EnviroFacts_ChemActivityByFacility $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ChemActivityByFacility execution.
     *
     * @return EnviroFacts_ChemActivityByFacility_Results New results object.
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
     * Wraps results in appopriate results class for this ChemActivityByFacility execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return EnviroFacts_ChemActivityByFacility_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new EnviroFacts_ChemActivityByFacility_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ChemActivityByFacility choreography.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_ChemActivityByFacility_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ChemActivityByFacility choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return EnviroFacts_ChemActivityByFacility_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ChemActivityByFacility execution.
     *
     * @return string The response from EnviroFacts.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of EPA-regulated facilities in the Toxins Release Inventory (TRI) database within a given area code.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_FacilitiesSearchByZip extends Temboo_Choreography
{
    /**
     * Retrieves a list of EPA-regulated facilities in the Toxins Release Inventory (TRI) database within a given area code.
     *
     * @param Temboo_Session $session The session that owns this FacilitiesSearchByZip choreography.
     * @return EnviroFacts_FacilitiesSearchByZip New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/EnviroFacts/FacilitiesSearchByZip/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FacilitiesSearchByZip choreography.
     *
     * @param EnviroFacts_FacilitiesSearchByZip_Inputs|array $inputs (optional) Inputs as EnviroFacts_FacilitiesSearchByZip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return EnviroFacts_FacilitiesSearchByZip_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new EnviroFacts_FacilitiesSearchByZip_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FacilitiesSearchByZip choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return EnviroFacts_FacilitiesSearchByZip_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new EnviroFacts_FacilitiesSearchByZip_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FacilitiesSearchByZip choreography.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_FacilitiesSearchByZip_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FacilitiesSearchByZip choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return EnviroFacts_FacilitiesSearchByZip_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FacilitiesSearchByZip input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return EnviroFacts_FacilitiesSearchByZip_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return EnviroFacts_FacilitiesSearchByZip_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ResponseFormat input for this FacilitiesSearchByZip choreography.
     *
     * @param string $value (optional, string) Specify the desired response format. Valid formats are: xml (the default) and csv.
     * @return EnviroFacts_FacilitiesSearchByZip_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the RowEnd input for this FacilitiesSearchByZip choreography.
     *
     * @param int $value (optional, integer) Number 1 or greater indicates the ending row number of the results displayed. Default is 4999 when RowStart is 0. Up to 5000 entries are returned in the output.
     * @return EnviroFacts_FacilitiesSearchByZip_Inputs For method chaining.
     */
    public function setRowEnd($value)
    {
        return $this->set('RowEnd', $value);
    }

    /**
     * Set the value for the RowStart input for this FacilitiesSearchByZip choreography.
     *
     * @param int $value (optional, integer) Indicates the starting row number of the results displayed. Default is 0.
     * @return EnviroFacts_FacilitiesSearchByZip_Inputs For method chaining.
     */
    public function setRowStart($value)
    {
        return $this->set('RowStart', $value);
    }

    /**
     * Set the value for the Zip input for this FacilitiesSearchByZip choreography.
     *
     * @param string $value (required, string) Zip code to be searched.
     * @return EnviroFacts_FacilitiesSearchByZip_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the FacilitiesSearchByZip choreography.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_FacilitiesSearchByZip_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FacilitiesSearchByZip choreography.
     *
     * @param Temboo_Session $session The session that owns this FacilitiesSearchByZip execution.
     * @param EnviroFacts_FacilitiesSearchByZip $choreo The choregraphy object for this execution.
     * @param EnviroFacts_FacilitiesSearchByZip_Inputs|array $inputs (optional) Inputs as EnviroFacts_FacilitiesSearchByZip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return EnviroFacts_FacilitiesSearchByZip_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, EnviroFacts_FacilitiesSearchByZip $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FacilitiesSearchByZip execution.
     *
     * @return EnviroFacts_FacilitiesSearchByZip_Results New results object.
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
     * Wraps results in appopriate results class for this FacilitiesSearchByZip execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return EnviroFacts_FacilitiesSearchByZip_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new EnviroFacts_FacilitiesSearchByZip_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FacilitiesSearchByZip choreography.
 *
 * @package Temboo
 * @subpackage EnviroFacts
 */
class EnviroFacts_FacilitiesSearchByZip_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FacilitiesSearchByZip choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return EnviroFacts_FacilitiesSearchByZip_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FacilitiesSearchByZip execution.
     *
     * @return string The response from EnviroFacts.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>