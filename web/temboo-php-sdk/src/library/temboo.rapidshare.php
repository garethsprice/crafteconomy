<?php

/**
 * Temboo PHP SDK RapidShare classes
 *
 * Execute Choreographies from the Temboo RapidShare bundle.
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
 * @subpackage RapidShare
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Delete one or more files from RapidShare.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_DeleteFiles extends Temboo_Choreography
{
    /**
     * Delete one or more files from RapidShare.
     *
     * @param Temboo_Session $session The session that owns this DeleteFiles choreography.
     * @return RapidShare_DeleteFiles New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RapidShare/DeleteFiles/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteFiles choreography.
     *
     * @param RapidShare_DeleteFiles_Inputs|array $inputs (optional) Inputs as RapidShare_DeleteFiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_DeleteFiles_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RapidShare_DeleteFiles_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFiles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_DeleteFiles_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RapidShare_DeleteFiles_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFiles choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_DeleteFiles_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteFiles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_DeleteFiles_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFiles input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RapidShare_DeleteFiles_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RapidShare_DeleteFiles_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the File input for this DeleteFiles choreography.
     *
     * @param int $value (integer) The id of the file to delete. Can be a commas separated list of ids.
     * @return RapidShare_DeleteFiles_Inputs For method chaining.
     */
    public function setFile($value)
    {
        return $this->set('File', $value);
    }

    /**
     * Set the value for the Login input for this DeleteFiles choreography.
     *
     * @param string $value (string) Your RapidShare username
     * @return RapidShare_DeleteFiles_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the Password input for this DeleteFiles choreography.
     *
     * @param string $value (string) Your RapidShare password
     * @return RapidShare_DeleteFiles_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }
}


/**
 * Execution object for the DeleteFiles choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_DeleteFiles_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFiles choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteFiles execution.
     * @param RapidShare_DeleteFiles $choreo The choregraphy object for this execution.
     * @param RapidShare_DeleteFiles_Inputs|array $inputs (optional) Inputs as RapidShare_DeleteFiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_DeleteFiles_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RapidShare_DeleteFiles $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFiles execution.
     *
     * @return RapidShare_DeleteFiles_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteFiles execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RapidShare_DeleteFiles_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RapidShare_DeleteFiles_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteFiles choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_DeleteFiles_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteFiles choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RapidShare_DeleteFiles_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteFiles execution.
     *
     * @return string (string) The response from RapidShare
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Move an existing file to a new folder in RapidShare.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_MoveFilesToRealFolder extends Temboo_Choreography
{
    /**
     * Move an existing file to a new folder in RapidShare.
     *
     * @param Temboo_Session $session The session that owns this MoveFilesToRealFolder choreography.
     * @return RapidShare_MoveFilesToRealFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RapidShare/MoveFilesToRealFolder/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this MoveFilesToRealFolder choreography.
     *
     * @param RapidShare_MoveFilesToRealFolder_Inputs|array $inputs (optional) Inputs as RapidShare_MoveFilesToRealFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_MoveFilesToRealFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RapidShare_MoveFilesToRealFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MoveFilesToRealFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_MoveFilesToRealFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RapidShare_MoveFilesToRealFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MoveFilesToRealFolder choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_MoveFilesToRealFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the MoveFilesToRealFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_MoveFilesToRealFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MoveFilesToRealFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RapidShare_MoveFilesToRealFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RapidShare_MoveFilesToRealFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Files input for this MoveFilesToRealFolder choreography.
     *
     * @param int $value (integer) The id of the file to move. Can be a commas separated list of ids.
     * @return RapidShare_MoveFilesToRealFolder_Inputs For method chaining.
     */
    public function setFiles($value)
    {
        return $this->set('Files', $value);
    }

    /**
     * Set the value for the Login input for this MoveFilesToRealFolder choreography.
     *
     * @param string $value (string) Your RapidShare username
     * @return RapidShare_MoveFilesToRealFolder_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the Password input for this MoveFilesToRealFolder choreography.
     *
     * @param string $value (string) Your RapidShare password
     * @return RapidShare_MoveFilesToRealFolder_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the RealFolder input for this MoveFilesToRealFolder choreography.
     *
     * @param int $value (optional, integer) The ID of the parent folder. Defaults to 0 for 'root'.
     * @return RapidShare_MoveFilesToRealFolder_Inputs For method chaining.
     */
    public function setRealFolder($value)
    {
        return $this->set('RealFolder', $value);
    }
}


/**
 * Execution object for the MoveFilesToRealFolder choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_MoveFilesToRealFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MoveFilesToRealFolder choreography.
     *
     * @param Temboo_Session $session The session that owns this MoveFilesToRealFolder execution.
     * @param RapidShare_MoveFilesToRealFolder $choreo The choregraphy object for this execution.
     * @param RapidShare_MoveFilesToRealFolder_Inputs|array $inputs (optional) Inputs as RapidShare_MoveFilesToRealFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_MoveFilesToRealFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RapidShare_MoveFilesToRealFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MoveFilesToRealFolder execution.
     *
     * @return RapidShare_MoveFilesToRealFolder_Results New results object.
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
     * Wraps results in appopriate results class for this MoveFilesToRealFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RapidShare_MoveFilesToRealFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RapidShare_MoveFilesToRealFolder_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the MoveFilesToRealFolder choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_MoveFilesToRealFolder_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the MoveFilesToRealFolder choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RapidShare_MoveFilesToRealFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this MoveFilesToRealFolder execution.
     *
     * @return string (string) The response from RapidShare. The id of the newly created folder should be returned in the response upon a successful execution.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Send an email that contains a link to a file available on RapidShare.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_SendMail extends Temboo_Choreography
{
    /**
     * Send an email that contains a link to a file available on RapidShare.
     *
     * @param Temboo_Session $session The session that owns this SendMail choreography.
     * @return RapidShare_SendMail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RapidShare/SendMail/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SendMail choreography.
     *
     * @param RapidShare_SendMail_Inputs|array $inputs (optional) Inputs as RapidShare_SendMail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_SendMail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RapidShare_SendMail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SendMail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_SendMail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RapidShare_SendMail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SendMail choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_SendMail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SendMail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_SendMail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SendMail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Comment input for this SendMail choreography.
     *
     * @param string $value (string) A comment that you want to send with the email
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function setComment($value)
    {
        return $this->set('Comment', $value);
    }

    /**
     * Set the value for the Email1 input for this SendMail choreography.
     *
     * @param string $value (string) The first email address to send to
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function setEmail1($value)
    {
        return $this->set('Email1', $value);
    }

    /**
     * Set the value for the Email2 input for this SendMail choreography.
     *
     * @param string $value (optional, string) The second email address to send to
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function setEmail2($value)
    {
        return $this->set('Email2', $value);
    }

    /**
     * Set the value for the Email3 input for this SendMail choreography.
     *
     * @param string $value (optional, string) The third email address to send to
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function setEmail3($value)
    {
        return $this->set('Email3', $value);
    }

    /**
     * Set the value for the FileID1 input for this SendMail choreography.
     *
     * @param int $value (integer) The id for the file to inform the email recipient about
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function setFileID1($value)
    {
        return $this->set('FileID1', $value);
    }

    /**
     * Set the value for the FileName1 input for this SendMail choreography.
     *
     * @param string $value (string) The name of the file to inform the email recipient about
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function setFileName1($value)
    {
        return $this->set('FileName1', $value);
    }

    /**
     * Set the value for the Login input for this SendMail choreography.
     *
     * @param string $value (string) Your RapidShare username
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the Name input for this SendMail choreography.
     *
     * @param string $value (string) The senders name
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Password input for this SendMail choreography.
     *
     * @param string $value (string) Your RapidShare password
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ReplyEmail input for this SendMail choreography.
     *
     * @param string $value (string) The sender reply email address
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function setReplyEmail($value)
    {
        return $this->set('ReplyEmail', $value);
    }

    /**
     * Set the value for the Subject input for this SendMail choreography.
     *
     * @param string $value (string) The subject line for the email
     * @return RapidShare_SendMail_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }
}


/**
 * Execution object for the SendMail choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_SendMail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SendMail choreography.
     *
     * @param Temboo_Session $session The session that owns this SendMail execution.
     * @param RapidShare_SendMail $choreo The choregraphy object for this execution.
     * @param RapidShare_SendMail_Inputs|array $inputs (optional) Inputs as RapidShare_SendMail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_SendMail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RapidShare_SendMail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SendMail execution.
     *
     * @return RapidShare_SendMail_Results New results object.
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
     * Wraps results in appopriate results class for this SendMail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RapidShare_SendMail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RapidShare_SendMail_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SendMail choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_SendMail_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SendMail choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RapidShare_SendMail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SendMail execution.
     *
     * @return string (string) The response from RapidShare
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new folder in RapidShare.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_AddRealFolder extends Temboo_Choreography
{
    /**
     * Creates a new folder in RapidShare.
     *
     * @param Temboo_Session $session The session that owns this AddRealFolder choreography.
     * @return RapidShare_AddRealFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RapidShare/AddRealFolder/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddRealFolder choreography.
     *
     * @param RapidShare_AddRealFolder_Inputs|array $inputs (optional) Inputs as RapidShare_AddRealFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_AddRealFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RapidShare_AddRealFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddRealFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_AddRealFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RapidShare_AddRealFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddRealFolder choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_AddRealFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddRealFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_AddRealFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddRealFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RapidShare_AddRealFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RapidShare_AddRealFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Login input for this AddRealFolder choreography.
     *
     * @param string $value (string) Your RapidShare username
     * @return RapidShare_AddRealFolder_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the Name input for this AddRealFolder choreography.
     *
     * @param string $value (string) The name of the folder (Max character length is 250 bytes)
     * @return RapidShare_AddRealFolder_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Parent input for this AddRealFolder choreography.
     *
     * @param int $value (optional, integer) The ID of the parent folder. Defaults to 0 for 'root'.
     * @return RapidShare_AddRealFolder_Inputs For method chaining.
     */
    public function setParent($value)
    {
        return $this->set('Parent', $value);
    }

    /**
     * Set the value for the Password input for this AddRealFolder choreography.
     *
     * @param string $value (string) Your RapidShare password
     * @return RapidShare_AddRealFolder_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }
}


/**
 * Execution object for the AddRealFolder choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_AddRealFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddRealFolder choreography.
     *
     * @param Temboo_Session $session The session that owns this AddRealFolder execution.
     * @param RapidShare_AddRealFolder $choreo The choregraphy object for this execution.
     * @param RapidShare_AddRealFolder_Inputs|array $inputs (optional) Inputs as RapidShare_AddRealFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_AddRealFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RapidShare_AddRealFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddRealFolder execution.
     *
     * @return RapidShare_AddRealFolder_Results New results object.
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
     * Wraps results in appopriate results class for this AddRealFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RapidShare_AddRealFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RapidShare_AddRealFolder_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddRealFolder choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_AddRealFolder_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddRealFolder choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RapidShare_AddRealFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddRealFolder execution.
     *
     * @return string (string) The response from RapidShare. The id of the newly created folder should be returned in the response upon a successful execution.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Upload a file to RapidShare.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_Upload extends Temboo_Choreography
{
    /**
     * Upload a file to RapidShare.
     *
     * @param Temboo_Session $session The session that owns this Upload choreography.
     * @return RapidShare_Upload New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RapidShare/Upload/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Upload choreography.
     *
     * @param RapidShare_Upload_Inputs|array $inputs (optional) Inputs as RapidShare_Upload_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_Upload_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RapidShare_Upload_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Upload choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_Upload_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RapidShare_Upload_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Upload choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_Upload_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Upload choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_Upload_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Upload input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RapidShare_Upload_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RapidShare_Upload_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this Upload choreography.
     *
     * @param string $value (conditional, string) The base64 encoded contents of the file you want to upload. Required unless using the VaultFile alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return RapidShare_Upload_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the FileName input for this Upload choreography.
     *
     * @param string $value (required, string) The name of the file you want to upload
     * @return RapidShare_Upload_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the Folder input for this Upload choreography.
     *
     * @param int $value (optional, integer) The id of the folder you want to upload the file to
     * @return RapidShare_Upload_Inputs For method chaining.
     */
    public function setFolder($value)
    {
        return $this->set('Folder', $value);
    }

    /**
     * Set the value for the Login input for this Upload choreography.
     *
     * @param string $value (required, string) Your RapidShare username
     * @return RapidShare_Upload_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the Password input for this Upload choreography.
     *
     * @param string $value (required, string) Your RapidShare password
     * @return RapidShare_Upload_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

}


/**
 * Execution object for the Upload choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_Upload_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Upload choreography.
     *
     * @param Temboo_Session $session The session that owns this Upload execution.
     * @param RapidShare_Upload $choreo The choregraphy object for this execution.
     * @param RapidShare_Upload_Inputs|array $inputs (optional) Inputs as RapidShare_Upload_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_Upload_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RapidShare_Upload $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Upload execution.
     *
     * @return RapidShare_Upload_Results New results object.
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
     * Wraps results in appopriate results class for this Upload execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RapidShare_Upload_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RapidShare_Upload_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Upload choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_Upload_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Upload choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RapidShare_Upload_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Upload execution.
     *
     * @return string (string) The response from RapidShare formatted in commas separated values.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete a folder(s) from a RapidShare account.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_DeleteRealFolder extends Temboo_Choreography
{
    /**
     * Delete a folder(s) from a RapidShare account.
     *
     * @param Temboo_Session $session The session that owns this DeleteRealFolder choreography.
     * @return RapidShare_DeleteRealFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RapidShare/DeleteRealFolder/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteRealFolder choreography.
     *
     * @param RapidShare_DeleteRealFolder_Inputs|array $inputs (optional) Inputs as RapidShare_DeleteRealFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_DeleteRealFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RapidShare_DeleteRealFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteRealFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_DeleteRealFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RapidShare_DeleteRealFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteRealFolder choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_DeleteRealFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteRealFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_DeleteRealFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteRealFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RapidShare_DeleteRealFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RapidShare_DeleteRealFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Login input for this DeleteRealFolder choreography.
     *
     * @param string $value (string) Your RapidShare username
     * @return RapidShare_DeleteRealFolder_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the Password input for this DeleteRealFolder choreography.
     *
     * @param string $value (string) Your RapidShare password
     * @return RapidShare_DeleteRealFolder_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the RealFolder input for this DeleteRealFolder choreography.
     *
     * @param int $value (integer) The id of the folder to delete. Can be a commas separated list of ids.
     * @return RapidShare_DeleteRealFolder_Inputs For method chaining.
     */
    public function setRealFolder($value)
    {
        return $this->set('RealFolder', $value);
    }
}


/**
 * Execution object for the DeleteRealFolder choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_DeleteRealFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteRealFolder choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteRealFolder execution.
     * @param RapidShare_DeleteRealFolder $choreo The choregraphy object for this execution.
     * @param RapidShare_DeleteRealFolder_Inputs|array $inputs (optional) Inputs as RapidShare_DeleteRealFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_DeleteRealFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RapidShare_DeleteRealFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteRealFolder execution.
     *
     * @return RapidShare_DeleteRealFolder_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteRealFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RapidShare_DeleteRealFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RapidShare_DeleteRealFolder_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteRealFolder choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_DeleteRealFolder_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteRealFolder choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RapidShare_DeleteRealFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteRealFolder execution.
     *
     * @return string (string) The response from RapidShare
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns details about a RapidShare account in key-value pairs.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_GetAccountDetails extends Temboo_Choreography
{
    /**
     * Returns details about a RapidShare account in key-value pairs.
     *
     * @param Temboo_Session $session The session that owns this GetAccountDetails choreography.
     * @return RapidShare_GetAccountDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RapidShare/GetAccountDetails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAccountDetails choreography.
     *
     * @param RapidShare_GetAccountDetails_Inputs|array $inputs (optional) Inputs as RapidShare_GetAccountDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_GetAccountDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RapidShare_GetAccountDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAccountDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_GetAccountDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RapidShare_GetAccountDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAccountDetails choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_GetAccountDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAccountDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_GetAccountDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAccountDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RapidShare_GetAccountDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RapidShare_GetAccountDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Login input for this GetAccountDetails choreography.
     *
     * @param string $value (string) Your RapidShare username
     * @return RapidShare_GetAccountDetails_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the Password input for this GetAccountDetails choreography.
     *
     * @param string $value (string) Your RapidShare password
     * @return RapidShare_GetAccountDetails_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the WithCookie input for this GetAccountDetails choreography.
     *
     * @param bool $value (optional, boolean) If value "1" is specified, a cookie is returned in the response
     * @return RapidShare_GetAccountDetails_Inputs For method chaining.
     */
    public function setWithCookie($value)
    {
        return $this->set('WithCookie', $value);
    }

    /**
     * Set the value for the WithPublicId input for this GetAccountDetails choreography.
     *
     * @param bool $value (optional, boolean) If value "1" is specified, the public id is returned in the response
     * @return RapidShare_GetAccountDetails_Inputs For method chaining.
     */
    public function setWithPublicId($value)
    {
        return $this->set('WithPublicId', $value);
    }
}


/**
 * Execution object for the GetAccountDetails choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_GetAccountDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAccountDetails choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAccountDetails execution.
     * @param RapidShare_GetAccountDetails $choreo The choregraphy object for this execution.
     * @param RapidShare_GetAccountDetails_Inputs|array $inputs (optional) Inputs as RapidShare_GetAccountDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_GetAccountDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RapidShare_GetAccountDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAccountDetails execution.
     *
     * @return RapidShare_GetAccountDetails_Results New results object.
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
     * Wraps results in appopriate results class for this GetAccountDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RapidShare_GetAccountDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RapidShare_GetAccountDetails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAccountDetails choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_GetAccountDetails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAccountDetails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RapidShare_GetAccountDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAccountDetails execution.
     *
     * @return string (string) The response from RapidShare formatted in key / value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Renames a file to something else.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_RenameFile extends Temboo_Choreography
{
    /**
     * Renames a file to something else.
     *
     * @param Temboo_Session $session The session that owns this RenameFile choreography.
     * @return RapidShare_RenameFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RapidShare/RenameFile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RenameFile choreography.
     *
     * @param RapidShare_RenameFile_Inputs|array $inputs (optional) Inputs as RapidShare_RenameFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_RenameFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RapidShare_RenameFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RenameFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_RenameFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RapidShare_RenameFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RenameFile choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_RenameFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RenameFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_RenameFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RenameFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RapidShare_RenameFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RapidShare_RenameFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileId input for this RenameFile choreography.
     *
     * @param int $value (integer) The ID of the file to be renamed. Can be a commas separated list of ids.
     * @return RapidShare_RenameFile_Inputs For method chaining.
     */
    public function setFileId($value)
    {
        return $this->set('FileId', $value);
    }

    /**
     * Set the value for the Login input for this RenameFile choreography.
     *
     * @param string $value (string) Your RapidShare username
     * @return RapidShare_RenameFile_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the NewFileName input for this RenameFile choreography.
     *
     * @param string $value (string) The new file name.
     * @return RapidShare_RenameFile_Inputs For method chaining.
     */
    public function setNewFileName($value)
    {
        return $this->set('NewFileName', $value);
    }

    /**
     * Set the value for the Password input for this RenameFile choreography.
     *
     * @param string $value (string) Your RapidShare password
     * @return RapidShare_RenameFile_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }
}


/**
 * Execution object for the RenameFile choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_RenameFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RenameFile choreography.
     *
     * @param Temboo_Session $session The session that owns this RenameFile execution.
     * @param RapidShare_RenameFile $choreo The choregraphy object for this execution.
     * @param RapidShare_RenameFile_Inputs|array $inputs (optional) Inputs as RapidShare_RenameFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_RenameFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RapidShare_RenameFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RenameFile execution.
     *
     * @return RapidShare_RenameFile_Results New results object.
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
     * Wraps results in appopriate results class for this RenameFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RapidShare_RenameFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RapidShare_RenameFile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RenameFile choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_RenameFile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RenameFile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RapidShare_RenameFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RenameFile execution.
     *
     * @return string (string) The response from RapidShare. The ID of the newly created folder should be returned in the response upon a successful execution.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns all existing RealFolders
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_ListRealFolders extends Temboo_Choreography
{
    /**
     * Returns all existing RealFolders
     *
     * @param Temboo_Session $session The session that owns this ListRealFolders choreography.
     * @return RapidShare_ListRealFolders New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RapidShare/ListRealFolders/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListRealFolders choreography.
     *
     * @param RapidShare_ListRealFolders_Inputs|array $inputs (optional) Inputs as RapidShare_ListRealFolders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_ListRealFolders_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RapidShare_ListRealFolders_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListRealFolders choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_ListRealFolders_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RapidShare_ListRealFolders_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListRealFolders choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_ListRealFolders_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListRealFolders choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_ListRealFolders_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListRealFolders input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RapidShare_ListRealFolders_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RapidShare_ListRealFolders_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Login input for this ListRealFolders choreography.
     *
     * @param string $value (string) Your RapidShare username
     * @return RapidShare_ListRealFolders_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the Password input for this ListRealFolders choreography.
     *
     * @param string $value (string) Your RapidShare password
     * @return RapidShare_ListRealFolders_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }
}


/**
 * Execution object for the ListRealFolders choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_ListRealFolders_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListRealFolders choreography.
     *
     * @param Temboo_Session $session The session that owns this ListRealFolders execution.
     * @param RapidShare_ListRealFolders $choreo The choregraphy object for this execution.
     * @param RapidShare_ListRealFolders_Inputs|array $inputs (optional) Inputs as RapidShare_ListRealFolders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_ListRealFolders_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RapidShare_ListRealFolders $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListRealFolders execution.
     *
     * @return RapidShare_ListRealFolders_Results New results object.
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
     * Wraps results in appopriate results class for this ListRealFolders execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RapidShare_ListRealFolders_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RapidShare_ListRealFolders_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListRealFolders choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_ListRealFolders_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListRealFolders choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RapidShare_ListRealFolders_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListRealFolders execution.
     *
     * @return string (string) The response from RapidShare formatted in commas separated values.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Changes the parent ID of existing RealFolders, enabling the location of the folder to be moved within a RapidShare account file hierarchy.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_MoveRealFolder extends Temboo_Choreography
{
    /**
     * Changes the parent ID of existing RealFolders, enabling the location of the folder to be moved within a RapidShare account file hierarchy.
     *
     * @param Temboo_Session $session The session that owns this MoveRealFolder choreography.
     * @return RapidShare_MoveRealFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RapidShare/MoveRealFolder/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this MoveRealFolder choreography.
     *
     * @param RapidShare_MoveRealFolder_Inputs|array $inputs (optional) Inputs as RapidShare_MoveRealFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_MoveRealFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RapidShare_MoveRealFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MoveRealFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_MoveRealFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RapidShare_MoveRealFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MoveRealFolder choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_MoveRealFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the MoveRealFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_MoveRealFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MoveRealFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RapidShare_MoveRealFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RapidShare_MoveRealFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FolderId input for this MoveRealFolder choreography.
     *
     * @param int $value (integer) The id of the folder(s) to be moved. Can be a commas separated list of ids.
     * @return RapidShare_MoveRealFolder_Inputs For method chaining.
     */
    public function setFolderId($value)
    {
        return $this->set('FolderId', $value);
    }

    /**
     * Set the value for the Login input for this MoveRealFolder choreography.
     *
     * @param string $value (string) Your RapidShare username
     * @return RapidShare_MoveRealFolder_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the NewParent input for this MoveRealFolder choreography.
     *
     * @param int $value (integer) Enter the ID of new parent folder
     * @return RapidShare_MoveRealFolder_Inputs For method chaining.
     */
    public function setNewParent($value)
    {
        return $this->set('NewParent', $value);
    }

    /**
     * Set the value for the Password input for this MoveRealFolder choreography.
     *
     * @param string $value (string) Your RapidShare password
     * @return RapidShare_MoveRealFolder_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }
}


/**
 * Execution object for the MoveRealFolder choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_MoveRealFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MoveRealFolder choreography.
     *
     * @param Temboo_Session $session The session that owns this MoveRealFolder execution.
     * @param RapidShare_MoveRealFolder $choreo The choregraphy object for this execution.
     * @param RapidShare_MoveRealFolder_Inputs|array $inputs (optional) Inputs as RapidShare_MoveRealFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_MoveRealFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RapidShare_MoveRealFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MoveRealFolder execution.
     *
     * @return RapidShare_MoveRealFolder_Results New results object.
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
     * Wraps results in appopriate results class for this MoveRealFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RapidShare_MoveRealFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RapidShare_MoveRealFolder_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the MoveRealFolder choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_MoveRealFolder_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the MoveRealFolder choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RapidShare_MoveRealFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this MoveRealFolder execution.
     *
     * @return string (string) The response from RapidShare. The id of the newly created folder should be returned in the response upon a successful execution.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists the files in all folders (or in a specified folder) and allows you to control the database columns returned in the result.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_ListFiles extends Temboo_Choreography
{
    /**
     * Lists the files in all folders (or in a specified folder) and allows you to control the database columns returned in the result.
     *
     * @param Temboo_Session $session The session that owns this ListFiles choreography.
     * @return RapidShare_ListFiles New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RapidShare/ListFiles/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListFiles choreography.
     *
     * @param RapidShare_ListFiles_Inputs|array $inputs (optional) Inputs as RapidShare_ListFiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_ListFiles_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RapidShare_ListFiles_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFiles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_ListFiles_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RapidShare_ListFiles_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFiles choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_ListFiles_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListFiles choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RapidShare_ListFiles_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFiles input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RapidShare_ListFiles_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RapidShare_ListFiles_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Fields input for this ListFiles choreography.
     *
     * @param string $value (optional, string) The database columns to return separated by commas. (i.e. downloads,lastdownload,filename,size, etc)
     * @return RapidShare_ListFiles_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the FileIDs input for this ListFiles choreography.
     *
     * @param int $value (optional, integer) The id of the file to list. Multiple IDs can be entered separated by commas.
     * @return RapidShare_ListFiles_Inputs For method chaining.
     */
    public function setFileIDs($value)
    {
        return $this->set('FileIDs', $value);
    }

    /**
     * Set the value for the FileName input for this ListFiles choreography.
     *
     * @param string $value (optional, string) The name of the file to list
     * @return RapidShare_ListFiles_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the FolderID input for this ListFiles choreography.
     *
     * @param int $value (optional, integer) The id of the folder that contains the file you want to list. Defaults to 'all'.
     * @return RapidShare_ListFiles_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }

    /**
     * Set the value for the Login input for this ListFiles choreography.
     *
     * @param string $value (string) Your RapidShare username
     * @return RapidShare_ListFiles_Inputs For method chaining.
     */
    public function setLogin($value)
    {
        return $this->set('Login', $value);
    }

    /**
     * Set the value for the Password input for this ListFiles choreography.
     *
     * @param string $value (string) Your RapidShare password
     * @return RapidShare_ListFiles_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }
}


/**
 * Execution object for the ListFiles choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_ListFiles_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFiles choreography.
     *
     * @param Temboo_Session $session The session that owns this ListFiles execution.
     * @param RapidShare_ListFiles $choreo The choregraphy object for this execution.
     * @param RapidShare_ListFiles_Inputs|array $inputs (optional) Inputs as RapidShare_ListFiles_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RapidShare_ListFiles_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RapidShare_ListFiles $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFiles execution.
     *
     * @return RapidShare_ListFiles_Results New results object.
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
     * Wraps results in appopriate results class for this ListFiles execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RapidShare_ListFiles_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RapidShare_ListFiles_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListFiles choreography.
 *
 * @package Temboo
 * @subpackage RapidShare
 */
class RapidShare_ListFiles_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListFiles choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RapidShare_ListFiles_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListFiles execution.
     *
     * @return string (string) The response from RapidShare formatted in commas separated values.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>