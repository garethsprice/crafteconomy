<?php

/**
 * Temboo PHP SDK Temboo classes
 *
 * Execute Choreographies from the Temboo Temboo bundle.
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
 * @subpackage Temboo
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Verifies that a given password matches a standard pattern for passwords.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_PasswordCriteria extends Temboo_Choreography
{
    /**
     * Verifies that a given password matches a standard pattern for passwords.
     *
     * @param Temboo_Session $session The session that owns this PasswordCriteria choreography.
     * @return Temboo_Validation_PasswordCriteria New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/Validation/PasswordCriteria/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PasswordCriteria choreography.
     *
     * @param Temboo_Validation_PasswordCriteria_Inputs|array $inputs (optional) Inputs as Temboo_Validation_PasswordCriteria_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_PasswordCriteria_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_Validation_PasswordCriteria_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PasswordCriteria choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_PasswordCriteria_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_Validation_PasswordCriteria_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PasswordCriteria choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_PasswordCriteria_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PasswordCriteria choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_PasswordCriteria_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PasswordCriteria input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_Validation_PasswordCriteria_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_Validation_PasswordCriteria_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the MaxLength input for this PasswordCriteria choreography.
     *
     * @param int $value (optional, integer) The max length you want to allow for the password. Defaults to 14.
     * @return Temboo_Validation_PasswordCriteria_Inputs For method chaining.
     */
    public function setMaxLength($value)
    {
        return $this->set('MaxLength', $value);
    }

    /**
     * Set the value for the MinLength input for this PasswordCriteria choreography.
     *
     * @param int $value (optional, integer) The minimum length you want to allow for the password. Defaults to 6.
     * @return Temboo_Validation_PasswordCriteria_Inputs For method chaining.
     */
    public function setMinLength($value)
    {
        return $this->set('MinLength', $value);
    }

    /**
     * Set the value for the Password input for this PasswordCriteria choreography.
     *
     * @param string $value (required, string) The password to validate.
     * @return Temboo_Validation_PasswordCriteria_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }
}


/**
 * Execution object for the PasswordCriteria choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_PasswordCriteria_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PasswordCriteria choreography.
     *
     * @param Temboo_Session $session The session that owns this PasswordCriteria execution.
     * @param Temboo_Validation_PasswordCriteria $choreo The choregraphy object for this execution.
     * @param Temboo_Validation_PasswordCriteria_Inputs|array $inputs (optional) Inputs as Temboo_Validation_PasswordCriteria_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_PasswordCriteria_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_Validation_PasswordCriteria $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PasswordCriteria execution.
     *
     * @return Temboo_Validation_PasswordCriteria_Results New results object.
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
     * Wraps results in appopriate results class for this PasswordCriteria execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_Validation_PasswordCriteria_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_Validation_PasswordCriteria_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PasswordCriteria choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_PasswordCriteria_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PasswordCriteria choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_Validation_PasswordCriteria_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Match" output from this PasswordCriteria execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Converts an XML file to a Base64 encoded Excel file.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertXMLToBase64EncodedExcel extends Temboo_Choreography
{
    /**
     * Converts an XML file to a Base64 encoded Excel file.
     *
     * @param Temboo_Session $session The session that owns this ConvertXMLToBase64EncodedExcel choreography.
     * @return Temboo_DataConversions_ConvertXMLToBase64EncodedExcel New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/DataConversions/ConvertXMLToBase64EncodedExcel/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ConvertXMLToBase64EncodedExcel choreography.
     *
     * @param Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Inputs|array $inputs (optional) Inputs as Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ConvertXMLToBase64EncodedExcel choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ConvertXMLToBase64EncodedExcel choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ConvertXMLToBase64EncodedExcel choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ConvertXMLToBase64EncodedExcel input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the XMLFile input for this ConvertXMLToBase64EncodedExcel choreography.
     *
     * @param string $value (required, xml) The XML file you want to convert to XLS format. See documentation for information on the required XML schema.
     * @return Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Inputs For method chaining.
     */
    public function setXMLFile($value)
    {
        return $this->set('XMLFile', $value);
    }
}


/**
 * Execution object for the ConvertXMLToBase64EncodedExcel choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ConvertXMLToBase64EncodedExcel choreography.
     *
     * @param Temboo_Session $session The session that owns this ConvertXMLToBase64EncodedExcel execution.
     * @param Temboo_DataConversions_ConvertXMLToBase64EncodedExcel $choreo The choregraphy object for this execution.
     * @param Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Inputs|array $inputs (optional) Inputs as Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_DataConversions_ConvertXMLToBase64EncodedExcel $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ConvertXMLToBase64EncodedExcel execution.
     *
     * @return Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Results New results object.
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
     * Wraps results in appopriate results class for this ConvertXMLToBase64EncodedExcel execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ConvertXMLToBase64EncodedExcel choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ConvertXMLToBase64EncodedExcel choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_DataConversions_ConvertXMLToBase64EncodedExcel_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "ExcelFile" output from this ConvertXMLToBase64EncodedExcel execution.
     *
     * @return string The Base64 encoded Excel data .
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExcelFile()
    {
        return $this->get('ExcelFile');
    }
}

/**
 * Retrieves a single email message from a specified email account.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Email_GetEmail extends Temboo_Choreography
{
    /**
     * Retrieves a single email message from a specified email account.
     *
     * @param Temboo_Session $session The session that owns this GetEmail choreography.
     * @return Temboo_Email_GetEmail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/Email/GetEmail/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetEmail choreography.
     *
     * @param Temboo_Email_GetEmail_Inputs|array $inputs (optional) Inputs as Temboo_Email_GetEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Email_GetEmail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_Email_GetEmail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEmail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Email_GetEmail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_Email_GetEmail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEmail choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Email_GetEmail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetEmail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Email_GetEmail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEmail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_Email_GetEmail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_Email_GetEmail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DeleteAfterRetrieval input for this GetEmail choreography.
     *
     * @param bool $value (optional, boolean) To delete the message after retrieval, set to 1. Defaults to 0 indicating that the message will not be deleted after retrieval.
     * @return Temboo_Email_GetEmail_Inputs For method chaining.
     */
    public function setDeleteAfterRetrieval($value)
    {
        return $this->set('DeleteAfterRetrieval', $value);
    }

    /**
     * Set the value for the MailboxFolder input for this GetEmail choreography.
     *
     * @param string $value (optional, string) The folder name to retrieve emails from. This is only used when the Protocol input is set to imap. The default value is "Inbox".
     * @return Temboo_Email_GetEmail_Inputs For method chaining.
     */
    public function setMailboxFolder($value)
    {
        return $this->set('MailboxFolder', $value);
    }

    /**
     * Set the value for the Password input for this GetEmail choreography.
     *
     * @param string $value (required, string) The password for the email account.
     * @return Temboo_Email_GetEmail_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Port input for this GetEmail choreography.
     *
     * @param int $value (required, integer) Specify the port number.
     * @return Temboo_Email_GetEmail_Inputs For method chaining.
     */
    public function setPort($value)
    {
        return $this->set('Port', $value);
    }

    /**
     * Set the value for the Protocol input for this GetEmail choreography.
     *
     * @param string $value (required, string) Specify the protocol. Valid values are: pop or imap.
     * @return Temboo_Email_GetEmail_Inputs For method chaining.
     */
    public function setProtocol($value)
    {
        return $this->set('Protocol', $value);
    }

    /**
     * Set the value for the SenderAddressFilter input for this GetEmail choreography.
     *
     * @param string $value (optional, string) A string used to filter by a particular sender address.
     * @return Temboo_Email_GetEmail_Inputs For method chaining.
     */
    public function setSenderAddressFilter($value)
    {
        return $this->set('SenderAddressFilter', $value);
    }

    /**
     * Set the value for the Server input for this GetEmail choreography.
     *
     * @param string $value (required, string) The name or IP address of the email server.
     * @return Temboo_Email_GetEmail_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the SubjectFilter input for this GetEmail choreography.
     *
     * @param string $value (optional, string) A string used to filter by subject.
     * @return Temboo_Email_GetEmail_Inputs For method chaining.
     */
    public function setSubjectFilter($value)
    {
        return $this->set('SubjectFilter', $value);
    }

    /**
     * Set the value for the UseSSL input for this GetEmail choreography.
     *
     * @param bool $value (optional, boolean) Set to 1 to use SSL. Defaults to 1 (true).
     * @return Temboo_Email_GetEmail_Inputs For method chaining.
     */
    public function setUseSSL($value)
    {
        return $this->set('UseSSL', $value);
    }

    /**
     * Set the value for the Username input for this GetEmail choreography.
     *
     * @param string $value (required, string) The username for the email account.
     * @return Temboo_Email_GetEmail_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetEmail choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Email_GetEmail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEmail choreography.
     *
     * @param Temboo_Session $session The session that owns this GetEmail execution.
     * @param Temboo_Email_GetEmail $choreo The choregraphy object for this execution.
     * @param Temboo_Email_GetEmail_Inputs|array $inputs (optional) Inputs as Temboo_Email_GetEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Email_GetEmail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_Email_GetEmail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEmail execution.
     *
     * @return Temboo_Email_GetEmail_Results New results object.
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
     * Wraps results in appopriate results class for this GetEmail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_Email_GetEmail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_Email_GetEmail_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetEmail choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Email_GetEmail_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetEmail choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_Email_GetEmail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Attachment" output from this GetEmail execution.
     *
     * @return string (string) If the email has an attachment, the Base64 encoded contents of the attachment are returned in this output variable.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAttachment()
    {
        return $this->get('Attachment');
    }

    /**
     * Retrieve the value for the "Message" output from this GetEmail execution.
     *
     * @return string (xml) The response from the mail server including the message body and message header fields.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMessage()
    {
        return $this->get('Message');
    }

    /**
     * Retrieve the value for the "MessageBody" output from this GetEmail execution.
     *
     * @return string (string) The message body of the email.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMessageBody()
    {
        return $this->get('MessageBody');
    }

    /**
     * Retrieve the value for the "Sender" output from this GetEmail execution.
     *
     * @return string (string) The sender email address.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSender()
    {
        return $this->get('Sender');
    }

    /**
     * Retrieve the value for the "Subject" output from this GetEmail execution.
     *
     * @return string (string) The subject of the email.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSubject()
    {
        return $this->get('Subject');
    }
}

/**
 * Converts Excel (.xls) formatted data to CSV.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertExcelToCSV extends Temboo_Choreography
{
    /**
     * Converts Excel (.xls) formatted data to CSV.
     *
     * @param Temboo_Session $session The session that owns this ConvertExcelToCSV choreography.
     * @return Temboo_DataConversions_ConvertExcelToCSV New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/DataConversions/ConvertExcelToCSV/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ConvertExcelToCSV choreography.
     *
     * @param Temboo_DataConversions_ConvertExcelToCSV_Inputs|array $inputs (optional) Inputs as Temboo_DataConversions_ConvertExcelToCSV_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_DataConversions_ConvertExcelToCSV_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_DataConversions_ConvertExcelToCSV_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ConvertExcelToCSV choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_DataConversions_ConvertExcelToCSV_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_DataConversions_ConvertExcelToCSV_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ConvertExcelToCSV choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertExcelToCSV_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ConvertExcelToCSV choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_DataConversions_ConvertExcelToCSV_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ConvertExcelToCSV input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_DataConversions_ConvertExcelToCSV_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_DataConversions_ConvertExcelToCSV_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ExcelFile input for this ConvertExcelToCSV choreography.
     *
     * @param string $value (conditional, string) The base64-encoded contents of the Excel file that you want to convert to CSV. Required unless using the VaultFile input alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return Temboo_DataConversions_ConvertExcelToCSV_Inputs For method chaining.
     */
    public function setExcelFile($value)
    {
        return $this->set('ExcelFile', $value);
    }

}


/**
 * Execution object for the ConvertExcelToCSV choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertExcelToCSV_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ConvertExcelToCSV choreography.
     *
     * @param Temboo_Session $session The session that owns this ConvertExcelToCSV execution.
     * @param Temboo_DataConversions_ConvertExcelToCSV $choreo The choregraphy object for this execution.
     * @param Temboo_DataConversions_ConvertExcelToCSV_Inputs|array $inputs (optional) Inputs as Temboo_DataConversions_ConvertExcelToCSV_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_DataConversions_ConvertExcelToCSV_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_DataConversions_ConvertExcelToCSV $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ConvertExcelToCSV execution.
     *
     * @return Temboo_DataConversions_ConvertExcelToCSV_Results New results object.
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
     * Wraps results in appopriate results class for this ConvertExcelToCSV execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_DataConversions_ConvertExcelToCSV_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_DataConversions_ConvertExcelToCSV_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ConvertExcelToCSV choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertExcelToCSV_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ConvertExcelToCSV choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_DataConversions_ConvertExcelToCSV_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "CSVFile" output from this ConvertExcelToCSV execution.
     *
     * @return string (string) The CSV formatted data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCSVFile()
    {
        return $this->get('CSVFile');
    }
}

/**
 * Verifies that a given zip code matches the format expected for German addresses.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_GermanPostalCodes extends Temboo_Choreography
{
    /**
     * Verifies that a given zip code matches the format expected for German addresses.
     *
     * @param Temboo_Session $session The session that owns this GermanPostalCodes choreography.
     * @return Temboo_Validation_GermanPostalCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/Validation/GermanPostalCodes/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GermanPostalCodes choreography.
     *
     * @param Temboo_Validation_GermanPostalCodes_Inputs|array $inputs (optional) Inputs as Temboo_Validation_GermanPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_GermanPostalCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_Validation_GermanPostalCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GermanPostalCodes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_GermanPostalCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_Validation_GermanPostalCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GermanPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_GermanPostalCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GermanPostalCodes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_GermanPostalCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GermanPostalCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_Validation_GermanPostalCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_Validation_GermanPostalCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZipCode input for this GermanPostalCodes choreography.
     *
     * @param string $value (required, string) The zip code to validate.
     * @return Temboo_Validation_GermanPostalCodes_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the GermanPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_GermanPostalCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GermanPostalCodes choreography.
     *
     * @param Temboo_Session $session The session that owns this GermanPostalCodes execution.
     * @param Temboo_Validation_GermanPostalCodes $choreo The choregraphy object for this execution.
     * @param Temboo_Validation_GermanPostalCodes_Inputs|array $inputs (optional) Inputs as Temboo_Validation_GermanPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_GermanPostalCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_Validation_GermanPostalCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GermanPostalCodes execution.
     *
     * @return Temboo_Validation_GermanPostalCodes_Results New results object.
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
     * Wraps results in appopriate results class for this GermanPostalCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_Validation_GermanPostalCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_Validation_GermanPostalCodes_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GermanPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_GermanPostalCodes_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GermanPostalCodes choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_Validation_GermanPostalCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Match" output from this GermanPostalCodes execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Verifies that a given zip code matches the format expected for Russian addresses.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_RussianPostalCodes extends Temboo_Choreography
{
    /**
     * Verifies that a given zip code matches the format expected for Russian addresses.
     *
     * @param Temboo_Session $session The session that owns this RussianPostalCodes choreography.
     * @return Temboo_Validation_RussianPostalCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/Validation/RussianPostalCodes/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RussianPostalCodes choreography.
     *
     * @param Temboo_Validation_RussianPostalCodes_Inputs|array $inputs (optional) Inputs as Temboo_Validation_RussianPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_RussianPostalCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_Validation_RussianPostalCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RussianPostalCodes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_RussianPostalCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_Validation_RussianPostalCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RussianPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_RussianPostalCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RussianPostalCodes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_RussianPostalCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RussianPostalCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_Validation_RussianPostalCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_Validation_RussianPostalCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZipCode input for this RussianPostalCodes choreography.
     *
     * @param string $value (required, string) The zip code to validate.
     * @return Temboo_Validation_RussianPostalCodes_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the RussianPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_RussianPostalCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RussianPostalCodes choreography.
     *
     * @param Temboo_Session $session The session that owns this RussianPostalCodes execution.
     * @param Temboo_Validation_RussianPostalCodes $choreo The choregraphy object for this execution.
     * @param Temboo_Validation_RussianPostalCodes_Inputs|array $inputs (optional) Inputs as Temboo_Validation_RussianPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_RussianPostalCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_Validation_RussianPostalCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RussianPostalCodes execution.
     *
     * @return Temboo_Validation_RussianPostalCodes_Results New results object.
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
     * Wraps results in appopriate results class for this RussianPostalCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_Validation_RussianPostalCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_Validation_RussianPostalCodes_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RussianPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_RussianPostalCodes_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RussianPostalCodes choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_Validation_RussianPostalCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Match" output from this RussianPostalCodes execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Verifies that a given zip code matches the format expected for Canadian addresses.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_CanadianPostalCodes extends Temboo_Choreography
{
    /**
     * Verifies that a given zip code matches the format expected for Canadian addresses.
     *
     * @param Temboo_Session $session The session that owns this CanadianPostalCodes choreography.
     * @return Temboo_Validation_CanadianPostalCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/Validation/CanadianPostalCodes/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CanadianPostalCodes choreography.
     *
     * @param Temboo_Validation_CanadianPostalCodes_Inputs|array $inputs (optional) Inputs as Temboo_Validation_CanadianPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_CanadianPostalCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_Validation_CanadianPostalCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CanadianPostalCodes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_CanadianPostalCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_Validation_CanadianPostalCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CanadianPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_CanadianPostalCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CanadianPostalCodes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_CanadianPostalCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CanadianPostalCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_Validation_CanadianPostalCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_Validation_CanadianPostalCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZipCode input for this CanadianPostalCodes choreography.
     *
     * @param string $value (required, string) The zip code to validate.
     * @return Temboo_Validation_CanadianPostalCodes_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the CanadianPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_CanadianPostalCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CanadianPostalCodes choreography.
     *
     * @param Temboo_Session $session The session that owns this CanadianPostalCodes execution.
     * @param Temboo_Validation_CanadianPostalCodes $choreo The choregraphy object for this execution.
     * @param Temboo_Validation_CanadianPostalCodes_Inputs|array $inputs (optional) Inputs as Temboo_Validation_CanadianPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_CanadianPostalCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_Validation_CanadianPostalCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CanadianPostalCodes execution.
     *
     * @return Temboo_Validation_CanadianPostalCodes_Results New results object.
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
     * Wraps results in appopriate results class for this CanadianPostalCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_Validation_CanadianPostalCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_Validation_CanadianPostalCodes_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CanadianPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_CanadianPostalCodes_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CanadianPostalCodes choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_Validation_CanadianPostalCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Match" output from this CanadianPostalCodes execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Verifies that a given zip code matches the format expected for Dutch addresses.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_DutchPostalCodes extends Temboo_Choreography
{
    /**
     * Verifies that a given zip code matches the format expected for Dutch addresses.
     *
     * @param Temboo_Session $session The session that owns this DutchPostalCodes choreography.
     * @return Temboo_Validation_DutchPostalCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/Validation/DutchPostalCodes/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DutchPostalCodes choreography.
     *
     * @param Temboo_Validation_DutchPostalCodes_Inputs|array $inputs (optional) Inputs as Temboo_Validation_DutchPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_DutchPostalCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_Validation_DutchPostalCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DutchPostalCodes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_DutchPostalCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_Validation_DutchPostalCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DutchPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_DutchPostalCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DutchPostalCodes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_DutchPostalCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DutchPostalCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_Validation_DutchPostalCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_Validation_DutchPostalCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZipCode input for this DutchPostalCodes choreography.
     *
     * @param string $value (required, string) The zip code to validate.
     * @return Temboo_Validation_DutchPostalCodes_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the DutchPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_DutchPostalCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DutchPostalCodes choreography.
     *
     * @param Temboo_Session $session The session that owns this DutchPostalCodes execution.
     * @param Temboo_Validation_DutchPostalCodes $choreo The choregraphy object for this execution.
     * @param Temboo_Validation_DutchPostalCodes_Inputs|array $inputs (optional) Inputs as Temboo_Validation_DutchPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_DutchPostalCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_Validation_DutchPostalCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DutchPostalCodes execution.
     *
     * @return Temboo_Validation_DutchPostalCodes_Results New results object.
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
     * Wraps results in appopriate results class for this DutchPostalCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_Validation_DutchPostalCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_Validation_DutchPostalCodes_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DutchPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_DutchPostalCodes_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DutchPostalCodes choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_Validation_DutchPostalCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Match" output from this DutchPostalCodes execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Validates XML for basic well-formedness and allows you to check XML against a specified XSD schema file.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_XML extends Temboo_Choreography
{
    /**
     * Validates XML for basic well-formedness and allows you to check XML against a specified XSD schema file.
     *
     * @param Temboo_Session $session The session that owns this XML choreography.
     * @return Temboo_Validation_XML New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/Validation/XML/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this XML choreography.
     *
     * @param Temboo_Validation_XML_Inputs|array $inputs (optional) Inputs as Temboo_Validation_XML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_XML_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_Validation_XML_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this XML choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_XML_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_Validation_XML_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the XML choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_XML_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the XML choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_XML_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this XML input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_Validation_XML_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_Validation_XML_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the XMLFile input for this XML choreography.
     *
     * @param string $value (required, xml) The XML file you want to validate.
     * @return Temboo_Validation_XML_Inputs For method chaining.
     */
    public function setXMLFile($value)
    {
        return $this->set('XMLFile', $value);
    }

    /**
     * Set the value for the XSDFile input for this XML choreography.
     *
     * @param string $value (optional, xml) The XSD file to validate an XML file against.
     * @return Temboo_Validation_XML_Inputs For method chaining.
     */
    public function setXSDFile($value)
    {
        return $this->set('XSDFile', $value);
    }
}


/**
 * Execution object for the XML choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_XML_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the XML choreography.
     *
     * @param Temboo_Session $session The session that owns this XML execution.
     * @param Temboo_Validation_XML $choreo The choregraphy object for this execution.
     * @param Temboo_Validation_XML_Inputs|array $inputs (optional) Inputs as Temboo_Validation_XML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_XML_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_Validation_XML $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this XML execution.
     *
     * @return Temboo_Validation_XML_Results New results object.
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
     * Wraps results in appopriate results class for this XML execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_Validation_XML_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_Validation_XML_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the XML choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_XML_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the XML choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_Validation_XML_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Error" output from this XML execution.
     *
     * @return string (string) The error description that is generated if a validation error occurs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getError()
    {
        return $this->get('Error');
    }

    /**
     * Retrieve the value for the "Result" output from this XML execution.
     *
     * @return string (string) The result of the validation. Returns the string "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResult()
    {
        return $this->get('Result');
    }
}

/**
 * Retrieves one or more email messages from a specified mail account.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Email_GetEmails extends Temboo_Choreography
{
    /**
     * Retrieves one or more email messages from a specified mail account.
     *
     * @param Temboo_Session $session The session that owns this GetEmails choreography.
     * @return Temboo_Email_GetEmails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/Email/GetEmails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetEmails choreography.
     *
     * @param Temboo_Email_GetEmails_Inputs|array $inputs (optional) Inputs as Temboo_Email_GetEmails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Email_GetEmails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_Email_GetEmails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEmails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Email_GetEmails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_Email_GetEmails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEmails choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Email_GetEmails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetEmails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Email_GetEmails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEmails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DeleteAfterRetrieval input for this GetEmails choreography.
     *
     * @param bool $value (optional, boolean) To delete messages after retrieval, set to 1. Defaults to 0 indicating that the messages will not be deleted after retrieval.
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function setDeleteAfterRetrieval($value)
    {
        return $this->set('DeleteAfterRetrieval', $value);
    }

    /**
     * Set the value for the MailboxFolder input for this GetEmails choreography.
     *
     * @param string $value (optional, string) The folder name to retrieve emails from. This is only used when the Protocol input is set to imap. The default value is "Inbox".
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function setMailboxFolder($value)
    {
        return $this->set('MailboxFolder', $value);
    }

    /**
     * Set the value for the MaxMessages input for this GetEmails choreography.
     *
     * @param string $value (optional, string) The max number of email messages to retrieve. Valid values are 1-100. Defaults to 100.
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function setMaxMessages($value)
    {
        return $this->set('MaxMessages', $value);
    }

    /**
     * Set the value for the Password input for this GetEmails choreography.
     *
     * @param string $value (required, string) The password for the email account.
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Port input for this GetEmails choreography.
     *
     * @param int $value (required, integer) Specify the port number.
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function setPort($value)
    {
        return $this->set('Port', $value);
    }

    /**
     * Set the value for the Protocol input for this GetEmails choreography.
     *
     * @param string $value (required, string) Specify the protocol. Valid values are: pop or imap.
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function setProtocol($value)
    {
        return $this->set('Protocol', $value);
    }

    /**
     * Set the value for the SenderAddressFilter input for this GetEmails choreography.
     *
     * @param string $value (optional, string) A string used to filter by a particular sender address.
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function setSenderAddressFilter($value)
    {
        return $this->set('SenderAddressFilter', $value);
    }

    /**
     * Set the value for the Server input for this GetEmails choreography.
     *
     * @param string $value (required, string) The name or IP address of the email server.
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the SubjectFilter input for this GetEmails choreography.
     *
     * @param string $value (optional, string) A string used to filter by subject.
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function setSubjectFilter($value)
    {
        return $this->set('SubjectFilter', $value);
    }

    /**
     * Set the value for the UseSSL input for this GetEmails choreography.
     *
     * @param bool $value (optional, boolean) Set to 1 to use SSL. Defaults to 1 (true).
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function setUseSSL($value)
    {
        return $this->set('UseSSL', $value);
    }

    /**
     * Set the value for the Username input for this GetEmails choreography.
     *
     * @param string $value (required, string) The username for the email account.
     * @return Temboo_Email_GetEmails_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetEmails choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Email_GetEmails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEmails choreography.
     *
     * @param Temboo_Session $session The session that owns this GetEmails execution.
     * @param Temboo_Email_GetEmails $choreo The choregraphy object for this execution.
     * @param Temboo_Email_GetEmails_Inputs|array $inputs (optional) Inputs as Temboo_Email_GetEmails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Email_GetEmails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_Email_GetEmails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEmails execution.
     *
     * @return Temboo_Email_GetEmails_Results New results object.
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
     * Wraps results in appopriate results class for this GetEmails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_Email_GetEmails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_Email_GetEmails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetEmails choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Email_GetEmails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetEmails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_Email_GetEmails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Messages" output from this GetEmails execution.
     *
     * @return string (xml) A list of the email messages retrieved from the mail server. Each email message will contain the message body and message header fields.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMessages()
    {
        return $this->get('Messages');
    }
}

/**
 * Converts data from XML format to a JSON format.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertXMLToJSON extends Temboo_Choreography
{
    /**
     * Converts data from XML format to a JSON format.
     *
     * @param Temboo_Session $session The session that owns this ConvertXMLToJSON choreography.
     * @return Temboo_DataConversions_ConvertXMLToJSON New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/DataConversions/ConvertXMLToJSON/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ConvertXMLToJSON choreography.
     *
     * @param Temboo_DataConversions_ConvertXMLToJSON_Inputs|array $inputs (optional) Inputs as Temboo_DataConversions_ConvertXMLToJSON_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_DataConversions_ConvertXMLToJSON_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_DataConversions_ConvertXMLToJSON_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ConvertXMLToJSON choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_DataConversions_ConvertXMLToJSON_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_DataConversions_ConvertXMLToJSON_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ConvertXMLToJSON choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertXMLToJSON_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ConvertXMLToJSON choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_DataConversions_ConvertXMLToJSON_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ConvertXMLToJSON input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_DataConversions_ConvertXMLToJSON_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_DataConversions_ConvertXMLToJSON_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the XML input for this ConvertXMLToJSON choreography.
     *
     * @param string $value (XML) The XML file that you want to convert to JSON format.
     * @return Temboo_DataConversions_ConvertXMLToJSON_Inputs For method chaining.
     */
    public function setXML($value)
    {
        return $this->set('XML', $value);
    }
}


/**
 * Execution object for the ConvertXMLToJSON choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertXMLToJSON_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ConvertXMLToJSON choreography.
     *
     * @param Temboo_Session $session The session that owns this ConvertXMLToJSON execution.
     * @param Temboo_DataConversions_ConvertXMLToJSON $choreo The choregraphy object for this execution.
     * @param Temboo_DataConversions_ConvertXMLToJSON_Inputs|array $inputs (optional) Inputs as Temboo_DataConversions_ConvertXMLToJSON_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_DataConversions_ConvertXMLToJSON_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_DataConversions_ConvertXMLToJSON $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ConvertXMLToJSON execution.
     *
     * @return Temboo_DataConversions_ConvertXMLToJSON_Results New results object.
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
     * Wraps results in appopriate results class for this ConvertXMLToJSON execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_DataConversions_ConvertXMLToJSON_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_DataConversions_ConvertXMLToJSON_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ConvertXMLToJSON choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertXMLToJSON_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ConvertXMLToJSON choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_DataConversions_ConvertXMLToJSON_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "JSON" output from this ConvertXMLToJSON execution.
     *
     * @return string (JSON) The converted data in JSON format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getJSON()
    {
        return $this->get('JSON');
    }
}

/**
 * Verifies that a given email address matches an expected standard pattern.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_EmailAddress extends Temboo_Choreography
{
    /**
     * Verifies that a given email address matches an expected standard pattern.
     *
     * @param Temboo_Session $session The session that owns this EmailAddress choreography.
     * @return Temboo_Validation_EmailAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/Validation/EmailAddress/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this EmailAddress choreography.
     *
     * @param Temboo_Validation_EmailAddress_Inputs|array $inputs (optional) Inputs as Temboo_Validation_EmailAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_EmailAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_Validation_EmailAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EmailAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_EmailAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_Validation_EmailAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EmailAddress choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_EmailAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the EmailAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_EmailAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EmailAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_Validation_EmailAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_Validation_EmailAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the EmailAddress input for this EmailAddress choreography.
     *
     * @param string $value (required, string) The email address to validate.
     * @return Temboo_Validation_EmailAddress_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }
}


/**
 * Execution object for the EmailAddress choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_EmailAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EmailAddress choreography.
     *
     * @param Temboo_Session $session The session that owns this EmailAddress execution.
     * @param Temboo_Validation_EmailAddress $choreo The choregraphy object for this execution.
     * @param Temboo_Validation_EmailAddress_Inputs|array $inputs (optional) Inputs as Temboo_Validation_EmailAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_EmailAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_Validation_EmailAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EmailAddress execution.
     *
     * @return Temboo_Validation_EmailAddress_Results New results object.
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
     * Wraps results in appopriate results class for this EmailAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_Validation_EmailAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_Validation_EmailAddress_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the EmailAddress choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_EmailAddress_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the EmailAddress choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_Validation_EmailAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Match" output from this EmailAddress execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Verifies that a given zip code matches the format expected for UK addresses.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_UKPostalCodes extends Temboo_Choreography
{
    /**
     * Verifies that a given zip code matches the format expected for UK addresses.
     *
     * @param Temboo_Session $session The session that owns this UKPostalCodes choreography.
     * @return Temboo_Validation_UKPostalCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/Validation/UKPostalCodes/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UKPostalCodes choreography.
     *
     * @param Temboo_Validation_UKPostalCodes_Inputs|array $inputs (optional) Inputs as Temboo_Validation_UKPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_UKPostalCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_Validation_UKPostalCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UKPostalCodes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_UKPostalCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_Validation_UKPostalCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UKPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_UKPostalCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UKPostalCodes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_UKPostalCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UKPostalCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_Validation_UKPostalCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_Validation_UKPostalCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZipCode input for this UKPostalCodes choreography.
     *
     * @param string $value (required, string) The zip code to validate.
     * @return Temboo_Validation_UKPostalCodes_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the UKPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_UKPostalCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UKPostalCodes choreography.
     *
     * @param Temboo_Session $session The session that owns this UKPostalCodes execution.
     * @param Temboo_Validation_UKPostalCodes $choreo The choregraphy object for this execution.
     * @param Temboo_Validation_UKPostalCodes_Inputs|array $inputs (optional) Inputs as Temboo_Validation_UKPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_UKPostalCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_Validation_UKPostalCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UKPostalCodes execution.
     *
     * @return Temboo_Validation_UKPostalCodes_Results New results object.
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
     * Wraps results in appopriate results class for this UKPostalCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_Validation_UKPostalCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_Validation_UKPostalCodes_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UKPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_UKPostalCodes_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UKPostalCodes choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_Validation_UKPostalCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Match" output from this UKPostalCodes execution.
     *
     * @return string (string) Contains a string indicating the result of the match -- "valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Converts Excel (.xls) formatted data to XML.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertExcelToXML extends Temboo_Choreography
{
    /**
     * Converts Excel (.xls) formatted data to XML.
     *
     * @param Temboo_Session $session The session that owns this ConvertExcelToXML choreography.
     * @return Temboo_DataConversions_ConvertExcelToXML New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/DataConversions/ConvertExcelToXML/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ConvertExcelToXML choreography.
     *
     * @param Temboo_DataConversions_ConvertExcelToXML_Inputs|array $inputs (optional) Inputs as Temboo_DataConversions_ConvertExcelToXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_DataConversions_ConvertExcelToXML_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_DataConversions_ConvertExcelToXML_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ConvertExcelToXML choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_DataConversions_ConvertExcelToXML_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_DataConversions_ConvertExcelToXML_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ConvertExcelToXML choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertExcelToXML_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ConvertExcelToXML choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_DataConversions_ConvertExcelToXML_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ConvertExcelToXML input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_DataConversions_ConvertExcelToXML_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_DataConversions_ConvertExcelToXML_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ExcelFile input for this ConvertExcelToXML choreography.
     *
     * @param string $value (optional, string) The base64-encoded contents of the Excel file that you want to convert to CSV. Required unless using the VaultFile input alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return Temboo_DataConversions_ConvertExcelToXML_Inputs For method chaining.
     */
    public function setExcelFile($value)
    {
        return $this->set('ExcelFile', $value);
    }

}


/**
 * Execution object for the ConvertExcelToXML choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertExcelToXML_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ConvertExcelToXML choreography.
     *
     * @param Temboo_Session $session The session that owns this ConvertExcelToXML execution.
     * @param Temboo_DataConversions_ConvertExcelToXML $choreo The choregraphy object for this execution.
     * @param Temboo_DataConversions_ConvertExcelToXML_Inputs|array $inputs (optional) Inputs as Temboo_DataConversions_ConvertExcelToXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_DataConversions_ConvertExcelToXML_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_DataConversions_ConvertExcelToXML $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ConvertExcelToXML execution.
     *
     * @return Temboo_DataConversions_ConvertExcelToXML_Results New results object.
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
     * Wraps results in appopriate results class for this ConvertExcelToXML execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_DataConversions_ConvertExcelToXML_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_DataConversions_ConvertExcelToXML_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ConvertExcelToXML choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertExcelToXML_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ConvertExcelToXML choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_DataConversions_ConvertExcelToXML_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "XMLFile" output from this ConvertExcelToXML execution.
     *
     * @return string (xml) The data in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getXMLFile()
    {
        return $this->get('XMLFile');
    }
}

/**
 * Converts a CSV formatted file to Base64 encoded Excel data.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertCSVToBase64EncodedExcel extends Temboo_Choreography
{
    /**
     * Converts a CSV formatted file to Base64 encoded Excel data.
     *
     * @param Temboo_Session $session The session that owns this ConvertCSVToBase64EncodedExcel choreography.
     * @return Temboo_DataConversions_ConvertCSVToBase64EncodedExcel New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/DataConversions/ConvertCSVToBase64EncodedExcel/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ConvertCSVToBase64EncodedExcel choreography.
     *
     * @param Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Inputs|array $inputs (optional) Inputs as Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ConvertCSVToBase64EncodedExcel choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ConvertCSVToBase64EncodedExcel choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ConvertCSVToBase64EncodedExcel choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ConvertCSVToBase64EncodedExcel input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CSVFile input for this ConvertCSVToBase64EncodedExcel choreography.
     *
     * @param string $value (conditional, multiline) The CSV data you want to convert to XLS format. Required unless using the VaultFile input alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Inputs For method chaining.
     */
    public function setCSVFile($value)
    {
        return $this->set('CSVFile', $value);
    }

}


/**
 * Execution object for the ConvertCSVToBase64EncodedExcel choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ConvertCSVToBase64EncodedExcel choreography.
     *
     * @param Temboo_Session $session The session that owns this ConvertCSVToBase64EncodedExcel execution.
     * @param Temboo_DataConversions_ConvertCSVToBase64EncodedExcel $choreo The choregraphy object for this execution.
     * @param Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Inputs|array $inputs (optional) Inputs as Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_DataConversions_ConvertCSVToBase64EncodedExcel $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ConvertCSVToBase64EncodedExcel execution.
     *
     * @return Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Results New results object.
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
     * Wraps results in appopriate results class for this ConvertCSVToBase64EncodedExcel execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ConvertCSVToBase64EncodedExcel choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ConvertCSVToBase64EncodedExcel choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_DataConversions_ConvertCSVToBase64EncodedExcel_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "ExcelFile" output from this ConvertCSVToBase64EncodedExcel execution.
     *
     * @return string (string) The Base64 encoded Excel data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExcelFile()
    {
        return $this->get('ExcelFile');
    }
}

/**
 * Sends an email using a specified email server.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Email_SendEmail extends Temboo_Choreography
{
    /**
     * Sends an email using a specified email server.
     *
     * @param Temboo_Session $session The session that owns this SendEmail choreography.
     * @return Temboo_Email_SendEmail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/Email/SendEmail/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SendEmail choreography.
     *
     * @param Temboo_Email_SendEmail_Inputs|array $inputs (optional) Inputs as Temboo_Email_SendEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Email_SendEmail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_Email_SendEmail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SendEmail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Email_SendEmail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_Email_SendEmail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SendEmail choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Email_SendEmail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SendEmail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Email_SendEmail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SendEmail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_Email_SendEmail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_Email_SendEmail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BCC input for this SendEmail choreography.
     *
     * @param string $value (optional, string) An email address to BCC on the email you're sending. Can be a comma separated list of email addresses.
     * @return Temboo_Email_SendEmail_Inputs For method chaining.
     */
    public function setBCC($value)
    {
        return $this->set('BCC', $value);
    }

    /**
     * Set the value for the CC input for this SendEmail choreography.
     *
     * @param string $value (optional, string) An email address to CC on the email you're sending. Can be a comma separated list of email addresses.
     * @return Temboo_Email_SendEmail_Inputs For method chaining.
     */
    public function setCC($value)
    {
        return $this->set('CC', $value);
    }

    /**
     * Set the value for the MessageBody input for this SendEmail choreography.
     *
     * @param string $value (required, string) The message body for the email.
     * @return Temboo_Email_SendEmail_Inputs For method chaining.
     */
    public function setMessageBody($value)
    {
        return $this->set('MessageBody', $value);
    }

    /**
     * Set the value for the Password input for this SendEmail choreography.
     *
     * @param string $value (required, string) The password for your email account.
     * @return Temboo_Email_SendEmail_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Port input for this SendEmail choreography.
     *
     * @param int $value (required, integer) Specify the port number (i.e. 25 or 465).
     * @return Temboo_Email_SendEmail_Inputs For method chaining.
     */
    public function setPort($value)
    {
        return $this->set('Port', $value);
    }

    /**
     * Set the value for the Server input for this SendEmail choreography.
     *
     * @param string $value (required, string) The name or IP address of the email server.
     * @return Temboo_Email_SendEmail_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Subject input for this SendEmail choreography.
     *
     * @param string $value (required, string) The subject line of the email.
     * @return Temboo_Email_SendEmail_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }

    /**
     * Set the value for the ToAddress input for this SendEmail choreography.
     *
     * @param string $value (required, string) The email address that you want to send an email to. Can be a comma separated list of email addresses.
     * @return Temboo_Email_SendEmail_Inputs For method chaining.
     */
    public function setToAddress($value)
    {
        return $this->set('ToAddress', $value);
    }

    /**
     * Set the value for the UseSSL input for this SendEmail choreography.
     *
     * @param bool $value (optional, boolean) Set to 1 to connect over SSL. Set to 0 for no SSL. Defaults to 1.
     * @return Temboo_Email_SendEmail_Inputs For method chaining.
     */
    public function setUseSSL($value)
    {
        return $this->set('UseSSL', $value);
    }

    /**
     * Set the value for the Username input for this SendEmail choreography.
     *
     * @param string $value (required, string) Your username for your email account. Note, this will used to authenticate your account and as the From Address for the email you are sending.
     * @return Temboo_Email_SendEmail_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the SendEmail choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Email_SendEmail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SendEmail choreography.
     *
     * @param Temboo_Session $session The session that owns this SendEmail execution.
     * @param Temboo_Email_SendEmail $choreo The choregraphy object for this execution.
     * @param Temboo_Email_SendEmail_Inputs|array $inputs (optional) Inputs as Temboo_Email_SendEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Email_SendEmail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_Email_SendEmail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SendEmail execution.
     *
     * @return Temboo_Email_SendEmail_Results New results object.
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
     * Wraps results in appopriate results class for this SendEmail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_Email_SendEmail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_Email_SendEmail_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SendEmail choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Email_SendEmail_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SendEmail choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_Email_SendEmail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
}

/**
 * Verifies that a given zip code matches the format expected for US addresses.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_USPostalCodes extends Temboo_Choreography
{
    /**
     * Verifies that a given zip code matches the format expected for US addresses.
     *
     * @param Temboo_Session $session The session that owns this USPostalCodes choreography.
     * @return Temboo_Validation_USPostalCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/Validation/USPostalCodes/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this USPostalCodes choreography.
     *
     * @param Temboo_Validation_USPostalCodes_Inputs|array $inputs (optional) Inputs as Temboo_Validation_USPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_USPostalCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_Validation_USPostalCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this USPostalCodes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_USPostalCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_Validation_USPostalCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the USPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_USPostalCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the USPostalCodes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_Validation_USPostalCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this USPostalCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_Validation_USPostalCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_Validation_USPostalCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ZipCode input for this USPostalCodes choreography.
     *
     * @param string $value (required, string) The zip code to validate.
     * @return Temboo_Validation_USPostalCodes_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the USPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_USPostalCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the USPostalCodes choreography.
     *
     * @param Temboo_Session $session The session that owns this USPostalCodes execution.
     * @param Temboo_Validation_USPostalCodes $choreo The choregraphy object for this execution.
     * @param Temboo_Validation_USPostalCodes_Inputs|array $inputs (optional) Inputs as Temboo_Validation_USPostalCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_Validation_USPostalCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_Validation_USPostalCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this USPostalCodes execution.
     *
     * @return Temboo_Validation_USPostalCodes_Results New results object.
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
     * Wraps results in appopriate results class for this USPostalCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_Validation_USPostalCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_Validation_USPostalCodes_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the USPostalCodes choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_Validation_USPostalCodes_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the USPostalCodes choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_Validation_USPostalCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Match" output from this USPostalCodes execution.
     *
     * @return string (string) Contains a string indicating the result of the match --"valid" or "invalid".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getMatch()
    {
        return $this->get('Match');
    }
}

/**
 * Converts data from JSON format to a XML format.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertJSONToXML extends Temboo_Choreography
{
    /**
     * Converts data from JSON format to a XML format.
     *
     * @param Temboo_Session $session The session that owns this ConvertJSONToXML choreography.
     * @return Temboo_DataConversions_ConvertJSONToXML New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Temboo/DataConversions/ConvertJSONToXML/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ConvertJSONToXML choreography.
     *
     * @param Temboo_DataConversions_ConvertJSONToXML_Inputs|array $inputs (optional) Inputs as Temboo_DataConversions_ConvertJSONToXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_DataConversions_ConvertJSONToXML_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Temboo_DataConversions_ConvertJSONToXML_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ConvertJSONToXML choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_DataConversions_ConvertJSONToXML_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Temboo_DataConversions_ConvertJSONToXML_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ConvertJSONToXML choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertJSONToXML_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ConvertJSONToXML choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Temboo_DataConversions_ConvertJSONToXML_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ConvertJSONToXML input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Temboo_DataConversions_ConvertJSONToXML_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Temboo_DataConversions_ConvertJSONToXML_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the JSON input for this ConvertJSONToXML choreography.
     *
     * @param string $value (required, json) The JSON data that you want to convert to XML.
     * @return Temboo_DataConversions_ConvertJSONToXML_Inputs For method chaining.
     */
    public function setJSON($value)
    {
        return $this->set('JSON', $value);
    }
}


/**
 * Execution object for the ConvertJSONToXML choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertJSONToXML_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ConvertJSONToXML choreography.
     *
     * @param Temboo_Session $session The session that owns this ConvertJSONToXML execution.
     * @param Temboo_DataConversions_ConvertJSONToXML $choreo The choregraphy object for this execution.
     * @param Temboo_DataConversions_ConvertJSONToXML_Inputs|array $inputs (optional) Inputs as Temboo_DataConversions_ConvertJSONToXML_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Temboo_DataConversions_ConvertJSONToXML_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Temboo_DataConversions_ConvertJSONToXML $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ConvertJSONToXML execution.
     *
     * @return Temboo_DataConversions_ConvertJSONToXML_Results New results object.
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
     * Wraps results in appopriate results class for this ConvertJSONToXML execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Temboo_DataConversions_ConvertJSONToXML_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Temboo_DataConversions_ConvertJSONToXML_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ConvertJSONToXML choreography.
 *
 * @package Temboo
 * @subpackage Temboo
 */
class Temboo_DataConversions_ConvertJSONToXML_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ConvertJSONToXML choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Temboo_DataConversions_ConvertJSONToXML_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "XML" output from this ConvertJSONToXML execution.
     *
     * @return string (xml) The converted data in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getXML()
    {
        return $this->get('XML');
    }
}

?>