<?php

/**
 * Temboo PHP SDK OfficeDrop classes
 *
 * Execute Choreographies from the Temboo OfficeDrop bundle.
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
 * @subpackage OfficeDrop
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Lets you move documents to the trash by specifying document ids.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_DeleteDocuments extends Temboo_Choreography
{
    /**
     * Lets you move documents to the trash by specifying document ids.
     *
     * @param Temboo_Session $session The session that owns this DeleteDocuments choreography.
     * @return OfficeDrop_DeleteDocuments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OfficeDrop/DeleteDocuments/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteDocuments choreography.
     *
     * @param OfficeDrop_DeleteDocuments_Inputs|array $inputs (optional) Inputs as OfficeDrop_DeleteDocuments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_DeleteDocuments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OfficeDrop_DeleteDocuments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteDocuments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_DeleteDocuments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OfficeDrop_DeleteDocuments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteDocuments choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_DeleteDocuments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteDocuments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_DeleteDocuments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteDocuments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OfficeDrop_DeleteDocuments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return OfficeDrop_DeleteDocuments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DocumentIds input for this DeleteDocuments choreography.
     *
     * @param int $value (required, integer) The IDs of the documents you want to move to the trash.  Separate IDs by commas.
     * @return OfficeDrop_DeleteDocuments_Inputs For method chaining.
     */
    public function setDocumentIds($value)
    {
        return $this->set('DocumentIds', $value);
    }

    /**
     * Set the value for the Password input for this DeleteDocuments choreography.
     *
     * @param string $value (required, string) Your OfficeDrop password.
     * @return OfficeDrop_DeleteDocuments_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this DeleteDocuments choreography.
     *
     * @param string $value (required, string) Your OfficeDrop username.
     * @return OfficeDrop_DeleteDocuments_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeleteDocuments choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_DeleteDocuments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteDocuments choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteDocuments execution.
     * @param OfficeDrop_DeleteDocuments $choreo The choregraphy object for this execution.
     * @param OfficeDrop_DeleteDocuments_Inputs|array $inputs (optional) Inputs as OfficeDrop_DeleteDocuments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_DeleteDocuments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OfficeDrop_DeleteDocuments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteDocuments execution.
     *
     * @return OfficeDrop_DeleteDocuments_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteDocuments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OfficeDrop_DeleteDocuments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OfficeDrop_DeleteDocuments_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteDocuments choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_DeleteDocuments_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteDocuments choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OfficeDrop_DeleteDocuments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteDocuments execution.
     *
     * @return string (xml) The response from OfficeDrop.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Recovers a  password by triggering an email to a specified email address belonging to the user.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_RecoverPassword extends Temboo_Choreography
{
    /**
     * Recovers a  password by triggering an email to a specified email address belonging to the user.
     *
     * @param Temboo_Session $session The session that owns this RecoverPassword choreography.
     * @return OfficeDrop_RecoverPassword New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OfficeDrop/RecoverPassword/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RecoverPassword choreography.
     *
     * @param OfficeDrop_RecoverPassword_Inputs|array $inputs (optional) Inputs as OfficeDrop_RecoverPassword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_RecoverPassword_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OfficeDrop_RecoverPassword_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RecoverPassword choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_RecoverPassword_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OfficeDrop_RecoverPassword_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RecoverPassword choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_RecoverPassword_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RecoverPassword choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_RecoverPassword_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RecoverPassword input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OfficeDrop_RecoverPassword_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return OfficeDrop_RecoverPassword_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this RecoverPassword choreography.
     *
     * @param string $value (required, string) The email address associated with the password you want to recover.
     * @return OfficeDrop_RecoverPassword_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Username input for this RecoverPassword choreography.
     *
     * @param string $value (required, string) The username associated with the password you want to recover.
     * @return OfficeDrop_RecoverPassword_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the RecoverPassword choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_RecoverPassword_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RecoverPassword choreography.
     *
     * @param Temboo_Session $session The session that owns this RecoverPassword execution.
     * @param OfficeDrop_RecoverPassword $choreo The choregraphy object for this execution.
     * @param OfficeDrop_RecoverPassword_Inputs|array $inputs (optional) Inputs as OfficeDrop_RecoverPassword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_RecoverPassword_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OfficeDrop_RecoverPassword $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RecoverPassword execution.
     *
     * @return OfficeDrop_RecoverPassword_Results New results object.
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
     * Wraps results in appopriate results class for this RecoverPassword execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OfficeDrop_RecoverPassword_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OfficeDrop_RecoverPassword_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RecoverPassword choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_RecoverPassword_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RecoverPassword choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OfficeDrop_RecoverPassword_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RecoverPassword execution.
     *
     * @return string (xml) The response from OfficeDrop.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Uploads a document to your OfficeDrop account.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_UploadDocument extends Temboo_Choreography
{
    /**
     * Uploads a document to your OfficeDrop account.
     *
     * @param Temboo_Session $session The session that owns this UploadDocument choreography.
     * @return OfficeDrop_UploadDocument New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OfficeDrop/UploadDocument/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UploadDocument choreography.
     *
     * @param OfficeDrop_UploadDocument_Inputs|array $inputs (optional) Inputs as OfficeDrop_UploadDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_UploadDocument_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OfficeDrop_UploadDocument_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadDocument choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_UploadDocument_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OfficeDrop_UploadDocument_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadDocument choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_UploadDocument_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UploadDocument choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_UploadDocument_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadDocument input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OfficeDrop_UploadDocument_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return OfficeDrop_UploadDocument_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this UploadDocument choreography.
     *
     * @param string $value (conditional, string) The Base64-encoded file contents for the file you want to upload. Required unless using the VaultFile input alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return OfficeDrop_UploadDocument_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the ContentType input for this UploadDocument choreography.
     *
     * @param string $value (optional, string) The Content-Type of the file you are uploading. Defaults to text/plain.
     * @return OfficeDrop_UploadDocument_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileName input for this UploadDocument choreography.
     *
     * @param string $value (required, string) The filename to attach to the file being uploaded.
     * @return OfficeDrop_UploadDocument_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the FolderId input for this UploadDocument choreography.
     *
     * @param int $value (optional, integer) The ID of the folder to which you want to upload the file (if left empty, the file destination will be the root folder).
     * @return OfficeDrop_UploadDocument_Inputs For method chaining.
     */
    public function setFolderId($value)
    {
        return $this->set('FolderId', $value);
    }

    /**
     * Set the value for the Password input for this UploadDocument choreography.
     *
     * @param string $value (required, string) Your OfficeDrop password.
     * @return OfficeDrop_UploadDocument_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this UploadDocument choreography.
     *
     * @param string $value (required, string) Your OfficeDrop username.
     * @return OfficeDrop_UploadDocument_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

}


/**
 * Execution object for the UploadDocument choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_UploadDocument_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadDocument choreography.
     *
     * @param Temboo_Session $session The session that owns this UploadDocument execution.
     * @param OfficeDrop_UploadDocument $choreo The choregraphy object for this execution.
     * @param OfficeDrop_UploadDocument_Inputs|array $inputs (optional) Inputs as OfficeDrop_UploadDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_UploadDocument_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OfficeDrop_UploadDocument $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadDocument execution.
     *
     * @return OfficeDrop_UploadDocument_Results New results object.
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
     * Wraps results in appopriate results class for this UploadDocument execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OfficeDrop_UploadDocument_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OfficeDrop_UploadDocument_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UploadDocument choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_UploadDocument_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UploadDocument choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OfficeDrop_UploadDocument_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UploadDocument execution.
     *
     * @return string (xml) The response from OfficeDrop.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lets you specify a document id to return information on a single document.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_ViewDocument extends Temboo_Choreography
{
    /**
     * Lets you specify a document id to return information on a single document.
     *
     * @param Temboo_Session $session The session that owns this ViewDocument choreography.
     * @return OfficeDrop_ViewDocument New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OfficeDrop/ViewDocument/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ViewDocument choreography.
     *
     * @param OfficeDrop_ViewDocument_Inputs|array $inputs (optional) Inputs as OfficeDrop_ViewDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_ViewDocument_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OfficeDrop_ViewDocument_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ViewDocument choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_ViewDocument_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OfficeDrop_ViewDocument_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ViewDocument choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_ViewDocument_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ViewDocument choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_ViewDocument_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ViewDocument input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OfficeDrop_ViewDocument_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return OfficeDrop_ViewDocument_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DocumentId input for this ViewDocument choreography.
     *
     * @param int $value (required, integer) The ID of the document you want to view.
     * @return OfficeDrop_ViewDocument_Inputs For method chaining.
     */
    public function setDocumentId($value)
    {
        return $this->set('DocumentId', $value);
    }

    /**
     * Set the value for the Password input for this ViewDocument choreography.
     *
     * @param string $value (required, string) Your OfficeDrop password.
     * @return OfficeDrop_ViewDocument_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this ViewDocument choreography.
     *
     * @param string $value (required, string) Your OfficeDrop username.
     * @return OfficeDrop_ViewDocument_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ViewDocument choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_ViewDocument_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ViewDocument choreography.
     *
     * @param Temboo_Session $session The session that owns this ViewDocument execution.
     * @param OfficeDrop_ViewDocument $choreo The choregraphy object for this execution.
     * @param OfficeDrop_ViewDocument_Inputs|array $inputs (optional) Inputs as OfficeDrop_ViewDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_ViewDocument_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OfficeDrop_ViewDocument $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ViewDocument execution.
     *
     * @return OfficeDrop_ViewDocument_Results New results object.
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
     * Wraps results in appopriate results class for this ViewDocument execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OfficeDrop_ViewDocument_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OfficeDrop_ViewDocument_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ViewDocument choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_ViewDocument_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ViewDocument choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OfficeDrop_ViewDocument_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ViewDocument execution.
     *
     * @return string (xml) The response from OfficeDrop.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Register a new user account at OfficeDrop with your application.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_UserRegistration extends Temboo_Choreography
{
    /**
     * Register a new user account at OfficeDrop with your application.
     *
     * @param Temboo_Session $session The session that owns this UserRegistration choreography.
     * @return OfficeDrop_UserRegistration New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OfficeDrop/UserRegistration/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UserRegistration choreography.
     *
     * @param OfficeDrop_UserRegistration_Inputs|array $inputs (optional) Inputs as OfficeDrop_UserRegistration_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_UserRegistration_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OfficeDrop_UserRegistration_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserRegistration choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_UserRegistration_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OfficeDrop_UserRegistration_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserRegistration choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_UserRegistration_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UserRegistration choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_UserRegistration_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserRegistration input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OfficeDrop_UserRegistration_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return OfficeDrop_UserRegistration_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CustomerName input for this UserRegistration choreography.
     *
     * @param string $value (required, string) The customer name that is associated with the new registration
     * @return OfficeDrop_UserRegistration_Inputs For method chaining.
     */
    public function setCustomerName($value)
    {
        return $this->set('CustomerName', $value);
    }

    /**
     * Set the value for the Email input for this UserRegistration choreography.
     *
     * @param string $value (required, string) The email address that is associated with the new registration
     * @return OfficeDrop_UserRegistration_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this UserRegistration choreography.
     *
     * @param string $value (required, string) The password that is associated with the new registration
     * @return OfficeDrop_UserRegistration_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this UserRegistration choreography.
     *
     * @param string $value (required, string) The username that is associated with the new registration
     * @return OfficeDrop_UserRegistration_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the UserRegistration choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_UserRegistration_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserRegistration choreography.
     *
     * @param Temboo_Session $session The session that owns this UserRegistration execution.
     * @param OfficeDrop_UserRegistration $choreo The choregraphy object for this execution.
     * @param OfficeDrop_UserRegistration_Inputs|array $inputs (optional) Inputs as OfficeDrop_UserRegistration_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_UserRegistration_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OfficeDrop_UserRegistration $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserRegistration execution.
     *
     * @return OfficeDrop_UserRegistration_Results New results object.
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
     * Wraps results in appopriate results class for this UserRegistration execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OfficeDrop_UserRegistration_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OfficeDrop_UserRegistration_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UserRegistration choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_UserRegistration_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UserRegistration choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OfficeDrop_UserRegistration_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UserRegistration execution.
     *
     * @return string (xml) The response from OfficeDrop
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Recovers a  username by triggering an email to a specified email address belonging to the user.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_RecoverUsername extends Temboo_Choreography
{
    /**
     * Recovers a  username by triggering an email to a specified email address belonging to the user.
     *
     * @param Temboo_Session $session The session that owns this RecoverUsername choreography.
     * @return OfficeDrop_RecoverUsername New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OfficeDrop/RecoverUsername/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RecoverUsername choreography.
     *
     * @param OfficeDrop_RecoverUsername_Inputs|array $inputs (optional) Inputs as OfficeDrop_RecoverUsername_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_RecoverUsername_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OfficeDrop_RecoverUsername_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RecoverUsername choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_RecoverUsername_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OfficeDrop_RecoverUsername_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RecoverUsername choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_RecoverUsername_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RecoverUsername choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_RecoverUsername_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RecoverUsername input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OfficeDrop_RecoverUsername_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return OfficeDrop_RecoverUsername_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this RecoverUsername choreography.
     *
     * @param string $value (required, string) The email address associated with the username you want to recover.
     * @return OfficeDrop_RecoverUsername_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }
}


/**
 * Execution object for the RecoverUsername choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_RecoverUsername_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RecoverUsername choreography.
     *
     * @param Temboo_Session $session The session that owns this RecoverUsername execution.
     * @param OfficeDrop_RecoverUsername $choreo The choregraphy object for this execution.
     * @param OfficeDrop_RecoverUsername_Inputs|array $inputs (optional) Inputs as OfficeDrop_RecoverUsername_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_RecoverUsername_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OfficeDrop_RecoverUsername $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RecoverUsername execution.
     *
     * @return OfficeDrop_RecoverUsername_Results New results object.
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
     * Wraps results in appopriate results class for this RecoverUsername execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OfficeDrop_RecoverUsername_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OfficeDrop_RecoverUsername_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RecoverUsername choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_RecoverUsername_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RecoverUsername choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OfficeDrop_RecoverUsername_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RecoverUsername execution.
     *
     * @return string (xml) The response from OfficeDrop.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Validates user credentials and returns user info by specifying a username and password.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_ValidateUserCredentials extends Temboo_Choreography
{
    /**
     * Validates user credentials and returns user info by specifying a username and password.
     *
     * @param Temboo_Session $session The session that owns this ValidateUserCredentials choreography.
     * @return OfficeDrop_ValidateUserCredentials New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OfficeDrop/ValidateUserCredentials/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ValidateUserCredentials choreography.
     *
     * @param OfficeDrop_ValidateUserCredentials_Inputs|array $inputs (optional) Inputs as OfficeDrop_ValidateUserCredentials_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_ValidateUserCredentials_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OfficeDrop_ValidateUserCredentials_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ValidateUserCredentials choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_ValidateUserCredentials_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OfficeDrop_ValidateUserCredentials_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ValidateUserCredentials choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_ValidateUserCredentials_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ValidateUserCredentials choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_ValidateUserCredentials_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ValidateUserCredentials input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OfficeDrop_ValidateUserCredentials_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return OfficeDrop_ValidateUserCredentials_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this ValidateUserCredentials choreography.
     *
     * @param string $value (required, string) The OfficeDrop password that should be verified.
     * @return OfficeDrop_ValidateUserCredentials_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this ValidateUserCredentials choreography.
     *
     * @param string $value (required, string) The OfficeDrop username that should be verified.
     * @return OfficeDrop_ValidateUserCredentials_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ValidateUserCredentials choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_ValidateUserCredentials_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ValidateUserCredentials choreography.
     *
     * @param Temboo_Session $session The session that owns this ValidateUserCredentials execution.
     * @param OfficeDrop_ValidateUserCredentials $choreo The choregraphy object for this execution.
     * @param OfficeDrop_ValidateUserCredentials_Inputs|array $inputs (optional) Inputs as OfficeDrop_ValidateUserCredentials_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_ValidateUserCredentials_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OfficeDrop_ValidateUserCredentials $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ValidateUserCredentials execution.
     *
     * @return OfficeDrop_ValidateUserCredentials_Results New results object.
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
     * Wraps results in appopriate results class for this ValidateUserCredentials execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OfficeDrop_ValidateUserCredentials_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OfficeDrop_ValidateUserCredentials_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ValidateUserCredentials choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_ValidateUserCredentials_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ValidateUserCredentials choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OfficeDrop_ValidateUserCredentials_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ValidateUserCredentials execution.
     *
     * @return string (xml) The response from OfficeDrop.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search and return a list of documents from OfficeDrop
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_DocumentsListAndSearch extends Temboo_Choreography
{
    /**
     * Search and return a list of documents from OfficeDrop
     *
     * @param Temboo_Session $session The session that owns this DocumentsListAndSearch choreography.
     * @return OfficeDrop_DocumentsListAndSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OfficeDrop/DocumentsListAndSearch/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DocumentsListAndSearch choreography.
     *
     * @param OfficeDrop_DocumentsListAndSearch_Inputs|array $inputs (optional) Inputs as OfficeDrop_DocumentsListAndSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_DocumentsListAndSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OfficeDrop_DocumentsListAndSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DocumentsListAndSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OfficeDrop_DocumentsListAndSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DocumentsListAndSearch choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_DocumentsListAndSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DocumentsListAndSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DocumentsListAndSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Favorites input for this DocumentsListAndSearch choreography.
     *
     * @param bool $value (optional, boolean) Will return documents that have been marked as favorites. Specify a 1 for true. Defaults to 0.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs For method chaining.
     */
    public function setFavorites($value)
    {
        return $this->set('Favorites', $value);
    }

    /**
     * Set the value for the FolderId input for this DocumentsListAndSearch choreography.
     *
     * @param int $value (optional, integer) The ID of the folder to filter by.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs For method chaining.
     */
    public function setFolderId($value)
    {
        return $this->set('FolderId', $value);
    }

    /**
     * Set the value for the LabelIds input for this DocumentsListAndSearch choreography.
     *
     * @param int $value (optional, integer) A comma separated list of label IDs to filter the result by.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs For method chaining.
     */
    public function setLabelIds($value)
    {
        return $this->set('LabelIds', $value);
    }

    /**
     * Set the value for the Page input for this DocumentsListAndSearch choreography.
     *
     * @param int $value (optional, integer) The page of the documents listing you want to return. Defaults to 1.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Password input for this DocumentsListAndSearch choreography.
     *
     * @param string $value (required, string) Your OfficeDrop password.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PerPage input for this DocumentsListAndSearch choreography.
     *
     * @param int $value (optional, integer) The number of documents you want to return in each request. Defaults to 15.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Query input for this DocumentsListAndSearch choreography.
     *
     * @param string $value (optional, string) The text keywords to search by.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Sort input for this DocumentsListAndSearch choreography.
     *
     * @param string $value (optional, string) The method you want to sort the results by: newest, oldest, most_viewed, name, name_reverse, recently_viewed, most_viewed, or relevance.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the Username input for this DocumentsListAndSearch choreography.
     *
     * @param string $value (required, string) Your OfficeDrop username.
     * @return OfficeDrop_DocumentsListAndSearch_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DocumentsListAndSearch choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_DocumentsListAndSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DocumentsListAndSearch choreography.
     *
     * @param Temboo_Session $session The session that owns this DocumentsListAndSearch execution.
     * @param OfficeDrop_DocumentsListAndSearch $choreo The choregraphy object for this execution.
     * @param OfficeDrop_DocumentsListAndSearch_Inputs|array $inputs (optional) Inputs as OfficeDrop_DocumentsListAndSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OfficeDrop_DocumentsListAndSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OfficeDrop_DocumentsListAndSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DocumentsListAndSearch execution.
     *
     * @return OfficeDrop_DocumentsListAndSearch_Results New results object.
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
     * Wraps results in appopriate results class for this DocumentsListAndSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OfficeDrop_DocumentsListAndSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OfficeDrop_DocumentsListAndSearch_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DocumentsListAndSearch choreography.
 *
 * @package Temboo
 * @subpackage OfficeDrop
 */
class OfficeDrop_DocumentsListAndSearch_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DocumentsListAndSearch choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OfficeDrop_DocumentsListAndSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DocumentsListAndSearch execution.
     *
     * @return string (xml) The response from OfficeDrop.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>