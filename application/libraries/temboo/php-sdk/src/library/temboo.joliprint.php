<?php

/**
 * Temboo PHP SDK Joliprint classes
 *
 * Execute Choreographies from the Temboo Joliprint bundle.
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
 * @subpackage Joliprint
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Converts a website URL you specify to a PDF document and returns the file content as Base64 encoded data.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetBase64EncodedPDF extends Temboo_Choreography
{
    /**
     * Converts a website URL you specify to a PDF document and returns the file content as Base64 encoded data.
     *
     * @param Temboo_Session $session The session that owns this GetBase64EncodedPDF choreography.
     * @return Joliprint_GetBase64EncodedPDF New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Joliprint/GetBase64EncodedPDF/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBase64EncodedPDF choreography.
     *
     * @param Joliprint_GetBase64EncodedPDF_Inputs|array $inputs (optional) Inputs as Joliprint_GetBase64EncodedPDF_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Joliprint_GetBase64EncodedPDF_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Joliprint_GetBase64EncodedPDF_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBase64EncodedPDF choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Joliprint_GetBase64EncodedPDF_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Joliprint_GetBase64EncodedPDF_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBase64EncodedPDF choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetBase64EncodedPDF_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBase64EncodedPDF choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Joliprint_GetBase64EncodedPDF_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBase64EncodedPDF input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Joliprint_GetBase64EncodedPDF_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Joliprint_GetBase64EncodedPDF_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the URL input for this GetBase64EncodedPDF choreography.
     *
     * @param string $value (required, string) The URL of the website to convert to a PDF.
     * @return Joliprint_GetBase64EncodedPDF_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the GetBase64EncodedPDF choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetBase64EncodedPDF_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBase64EncodedPDF choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBase64EncodedPDF execution.
     * @param Joliprint_GetBase64EncodedPDF $choreo The choregraphy object for this execution.
     * @param Joliprint_GetBase64EncodedPDF_Inputs|array $inputs (optional) Inputs as Joliprint_GetBase64EncodedPDF_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Joliprint_GetBase64EncodedPDF_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Joliprint_GetBase64EncodedPDF $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBase64EncodedPDF execution.
     *
     * @return Joliprint_GetBase64EncodedPDF_Results New results object.
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
     * Wraps results in appopriate results class for this GetBase64EncodedPDF execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Joliprint_GetBase64EncodedPDF_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Joliprint_GetBase64EncodedPDF_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBase64EncodedPDF choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetBase64EncodedPDF_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBase64EncodedPDF choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Joliprint_GetBase64EncodedPDF_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBase64EncodedPDF execution.
     *
     * @return string The response returned by the Joliprint API. The response contains a PDF file returned as Base64 encoded data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the atributes of a PDF document created from a website URL in JSON format.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetJSON extends Temboo_Choreography
{
    /**
     * Retrieves the atributes of a PDF document created from a website URL in JSON format.
     *
     * @param Temboo_Session $session The session that owns this GetJSON choreography.
     * @return Joliprint_GetJSON New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Joliprint/GetJSON/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetJSON choreography.
     *
     * @param Joliprint_GetJSON_Inputs|array $inputs (optional) Inputs as Joliprint_GetJSON_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Joliprint_GetJSON_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Joliprint_GetJSON_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetJSON choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Joliprint_GetJSON_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Joliprint_GetJSON_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetJSON choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetJSON_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetJSON choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Joliprint_GetJSON_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetJSON input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Joliprint_GetJSON_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Joliprint_GetJSON_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the URL input for this GetJSON choreography.
     *
     * @param string $value (required, string) The URL of the website to convert to a PDF.
     * @return Joliprint_GetJSON_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the GetJSON choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetJSON_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetJSON choreography.
     *
     * @param Temboo_Session $session The session that owns this GetJSON execution.
     * @param Joliprint_GetJSON $choreo The choregraphy object for this execution.
     * @param Joliprint_GetJSON_Inputs|array $inputs (optional) Inputs as Joliprint_GetJSON_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Joliprint_GetJSON_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Joliprint_GetJSON $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetJSON execution.
     *
     * @return Joliprint_GetJSON_Results New results object.
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
     * Wraps results in appopriate results class for this GetJSON execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Joliprint_GetJSON_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Joliprint_GetJSON_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetJSON choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetJSON_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetJSON choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Joliprint_GetJSON_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetJSON execution.
     *
     * @return string (json) The response returned by the Joliprint API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the shortened URL for a PDF document created from a website URL you specify.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetShortURL extends Temboo_Choreography
{
    /**
     * Retrieves the shortened URL for a PDF document created from a website URL you specify.
     *
     * @param Temboo_Session $session The session that owns this GetShortURL choreography.
     * @return Joliprint_GetShortURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Joliprint/GetShortURL/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetShortURL choreography.
     *
     * @param Joliprint_GetShortURL_Inputs|array $inputs (optional) Inputs as Joliprint_GetShortURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Joliprint_GetShortURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Joliprint_GetShortURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetShortURL choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Joliprint_GetShortURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Joliprint_GetShortURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetShortURL choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetShortURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetShortURL choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Joliprint_GetShortURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetShortURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Joliprint_GetShortURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Joliprint_GetShortURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the URL input for this GetShortURL choreography.
     *
     * @param string $value (required, string) The URL of the website to convert to a PDF.
     * @return Joliprint_GetShortURL_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the GetShortURL choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetShortURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetShortURL choreography.
     *
     * @param Temboo_Session $session The session that owns this GetShortURL execution.
     * @param Joliprint_GetShortURL $choreo The choregraphy object for this execution.
     * @param Joliprint_GetShortURL_Inputs|array $inputs (optional) Inputs as Joliprint_GetShortURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Joliprint_GetShortURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Joliprint_GetShortURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetShortURL execution.
     *
     * @return Joliprint_GetShortURL_Results New results object.
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
     * Wraps results in appopriate results class for this GetShortURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Joliprint_GetShortURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Joliprint_GetShortURL_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetShortURL choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetShortURL_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetShortURL choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Joliprint_GetShortURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetShortURL execution.
     *
     * @return string (string) The response returned by the Joliprint API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the atributes of a PDF document created from a website URL in XML format.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetXML extends Temboo_Choreography
{
    /**
     * Retrieves the atributes of a PDF document created from a website URL in XML format.
     *
     * @param Temboo_Session $session The session that owns this GetXML choreography.
     * @return Joliprint_GetXML New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Joliprint/GetXML/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetXML choreography.
     *
     * @param Joliprint_GetXML_Inputs|array $inputs (optional) Inputs as Joliprint_GetXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Joliprint_GetXML_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Joliprint_GetXML_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetXML choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Joliprint_GetXML_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Joliprint_GetXML_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetXML choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetXML_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetXML choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Joliprint_GetXML_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetXML input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Joliprint_GetXML_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Joliprint_GetXML_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the URL input for this GetXML choreography.
     *
     * @param string $value (string) The URL of the website to convert to a PDF.
     * @return Joliprint_GetXML_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the GetXML choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetXML_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetXML choreography.
     *
     * @param Temboo_Session $session The session that owns this GetXML execution.
     * @param Joliprint_GetXML $choreo The choregraphy object for this execution.
     * @param Joliprint_GetXML_Inputs|array $inputs (optional) Inputs as Joliprint_GetXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Joliprint_GetXML_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Joliprint_GetXML $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetXML execution.
     *
     * @return Joliprint_GetXML_Results New results object.
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
     * Wraps results in appopriate results class for this GetXML execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Joliprint_GetXML_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Joliprint_GetXML_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetXML choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetXML_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetXML choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Joliprint_GetXML_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetXML execution.
     *
     * @return string (XML) The response returned by the Joliprint API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "PDF" output from this GetXML execution.
     *
     * @return string (string) The URL where you can download the printed PDF.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPDF()
    {
        return $this->get('PDF');
    }
}

/**
 * Creates a JPEG thumbnail of a PDF document created from a website URL you specify and returns the file content as Base64 encoded data.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetBase64EncodedThumbnail extends Temboo_Choreography
{
    /**
     * Creates a JPEG thumbnail of a PDF document created from a website URL you specify and returns the file content as Base64 encoded data.
     *
     * @param Temboo_Session $session The session that owns this GetBase64EncodedThumbnail choreography.
     * @return Joliprint_GetBase64EncodedThumbnail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Joliprint/GetBase64EncodedThumbnail/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBase64EncodedThumbnail choreography.
     *
     * @param Joliprint_GetBase64EncodedThumbnail_Inputs|array $inputs (optional) Inputs as Joliprint_GetBase64EncodedThumbnail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Joliprint_GetBase64EncodedThumbnail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Joliprint_GetBase64EncodedThumbnail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBase64EncodedThumbnail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Joliprint_GetBase64EncodedThumbnail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Joliprint_GetBase64EncodedThumbnail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBase64EncodedThumbnail choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetBase64EncodedThumbnail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBase64EncodedThumbnail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Joliprint_GetBase64EncodedThumbnail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBase64EncodedThumbnail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Joliprint_GetBase64EncodedThumbnail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Joliprint_GetBase64EncodedThumbnail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the URL input for this GetBase64EncodedThumbnail choreography.
     *
     * @param string $value (required, string) The URL of the website to convert to a PDF.
     * @return Joliprint_GetBase64EncodedThumbnail_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the GetBase64EncodedThumbnail choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetBase64EncodedThumbnail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBase64EncodedThumbnail choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBase64EncodedThumbnail execution.
     * @param Joliprint_GetBase64EncodedThumbnail $choreo The choregraphy object for this execution.
     * @param Joliprint_GetBase64EncodedThumbnail_Inputs|array $inputs (optional) Inputs as Joliprint_GetBase64EncodedThumbnail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Joliprint_GetBase64EncodedThumbnail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Joliprint_GetBase64EncodedThumbnail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBase64EncodedThumbnail execution.
     *
     * @return Joliprint_GetBase64EncodedThumbnail_Results New results object.
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
     * Wraps results in appopriate results class for this GetBase64EncodedThumbnail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Joliprint_GetBase64EncodedThumbnail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Joliprint_GetBase64EncodedThumbnail_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBase64EncodedThumbnail choreography.
 *
 * @package Temboo
 * @subpackage Joliprint
 */
class Joliprint_GetBase64EncodedThumbnail_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBase64EncodedThumbnail choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Joliprint_GetBase64EncodedThumbnail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBase64EncodedThumbnail execution.
     *
     * @return string The response returned by the Joliprint API. The response will contain a JPEG image returned as Base64 encoded data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>