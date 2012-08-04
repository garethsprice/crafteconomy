<?php

/**
 * Temboo PHP SDK Box classes
 *
 * Execute Choreographies from the Temboo Box bundle.
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
 * @subpackage Box
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Unshares a publicly shared Box.net file or folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_UnsharePublic extends Temboo_Choreography
{
    /**
     * Unshares a publicly shared Box.net file or folder.
     *
     * @param Temboo_Session $session The session that owns this UnsharePublic choreography.
     * @return Box_UnsharePublic New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/UnsharePublic/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UnsharePublic choreography.
     *
     * @param Box_UnsharePublic_Inputs|array $inputs (optional) Inputs as Box_UnsharePublic_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_UnsharePublic_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_UnsharePublic_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UnsharePublic choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_UnsharePublic_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_UnsharePublic_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UnsharePublic choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_UnsharePublic_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UnsharePublic choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_UnsharePublic_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UnsharePublic input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_UnsharePublic_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_UnsharePublic_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UnsharePublic choreography.
     *
     * @param string $value (required, string) The API key provided by Box.net.
     * @return Box_UnsharePublic_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this UnsharePublic choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_UnsharePublic_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the TargetID input for this UnsharePublic choreography.
     *
     * @param string $value (required, string) The Box.net ID of the publicly shared file or folder to unshare.
     * @return Box_UnsharePublic_Inputs For method chaining.
     */
    public function setTargetID($value)
    {
        return $this->set('TargetID', $value);
    }

    /**
     * Set the value for the Target input for this UnsharePublic choreography.
     *
     * @param string $value (required, string) They type of item to unshare, either "file" (the default) or "folder".
     * @return Box_UnsharePublic_Inputs For method chaining.
     */
    public function setTarget($value)
    {
        return $this->set('Target', $value);
    }
}


/**
 * Execution object for the UnsharePublic choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_UnsharePublic_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UnsharePublic choreography.
     *
     * @param Temboo_Session $session The session that owns this UnsharePublic execution.
     * @param Box_UnsharePublic $choreo The choregraphy object for this execution.
     * @param Box_UnsharePublic_Inputs|array $inputs (optional) Inputs as Box_UnsharePublic_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_UnsharePublic_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_UnsharePublic $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UnsharePublic execution.
     *
     * @return Box_UnsharePublic_Results New results object.
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
     * Wraps results in appopriate results class for this UnsharePublic execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_UnsharePublic_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_UnsharePublic_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UnsharePublic choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_UnsharePublic_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UnsharePublic choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_UnsharePublic_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UnsharePublic execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of collaborators on a specified Box.net folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_ListCollaborators extends Temboo_Choreography
{
    /**
     * Retrieves a list of collaborators on a specified Box.net folder.
     *
     * @param Temboo_Session $session The session that owns this ListCollaborators choreography.
     * @return Box_ListCollaborators New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/ListCollaborators/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListCollaborators choreography.
     *
     * @param Box_ListCollaborators_Inputs|array $inputs (optional) Inputs as Box_ListCollaborators_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_ListCollaborators_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_ListCollaborators_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCollaborators choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_ListCollaborators_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_ListCollaborators_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCollaborators choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_ListCollaborators_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListCollaborators choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_ListCollaborators_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCollaborators input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_ListCollaborators_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_ListCollaborators_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListCollaborators choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_ListCollaborators_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListCollaborators choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_ListCollaborators_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the TargetID input for this ListCollaborators choreography.
     *
     * @param string $value (required, string) The Box.net ID of the file or folder for which you want to list collaborators.
     * @return Box_ListCollaborators_Inputs For method chaining.
     */
    public function setTargetID($value)
    {
        return $this->set('TargetID', $value);
    }

    /**
     * Set the value for the Target input for this ListCollaborators choreography.
     *
     * @param string $value (required, string) The type of item to list collaborators for, either "file" (the default) or "folder".
     * @return Box_ListCollaborators_Inputs For method chaining.
     */
    public function setTarget($value)
    {
        return $this->set('Target', $value);
    }
}


/**
 * Execution object for the ListCollaborators choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_ListCollaborators_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCollaborators choreography.
     *
     * @param Temboo_Session $session The session that owns this ListCollaborators execution.
     * @param Box_ListCollaborators $choreo The choregraphy object for this execution.
     * @param Box_ListCollaborators_Inputs|array $inputs (optional) Inputs as Box_ListCollaborators_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_ListCollaborators_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_ListCollaborators $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCollaborators execution.
     *
     * @return Box_ListCollaborators_Results New results object.
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
     * Wraps results in appopriate results class for this ListCollaborators execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_ListCollaborators_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_ListCollaborators_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListCollaborators choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_ListCollaborators_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListCollaborators choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_ListCollaborators_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListCollaborators execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a previewer embed link for a Box.net file you specify.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CreateEmbedLink extends Temboo_Choreography
{
    /**
     * Creates a previewer embed link for a Box.net file you specify.
     *
     * @param Temboo_Session $session The session that owns this CreateEmbedLink choreography.
     * @return Box_CreateEmbedLink New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/CreateEmbedLink/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateEmbedLink choreography.
     *
     * @param Box_CreateEmbedLink_Inputs|array $inputs (optional) Inputs as Box_CreateEmbedLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_CreateEmbedLink_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_CreateEmbedLink_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateEmbedLink choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_CreateEmbedLink_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_CreateEmbedLink_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateEmbedLink choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CreateEmbedLink_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateEmbedLink choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_CreateEmbedLink_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateEmbedLink input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_CreateEmbedLink_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_CreateEmbedLink_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateEmbedLink choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_CreateEmbedLink_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AllowDownload input for this CreateEmbedLink choreography.
     *
     * @param bool $value (optional, boolean) Enter "1" to add a direct download button to the preview, or "0" (the default) to not add a button.
     * @return Box_CreateEmbedLink_Inputs For method chaining.
     */
    public function setAllowDownload($value)
    {
        return $this->set('AllowDownload', $value);
    }

    /**
     * Set the value for the AllowPrint input for this CreateEmbedLink choreography.
     *
     * @param bool $value (optional, boolean) Enter "1" to add a print button to the preview, or "0" (the default) to not add a print button.
     * @return Box_CreateEmbedLink_Inputs For method chaining.
     */
    public function setAllowPrint($value)
    {
        return $this->set('AllowPrint', $value);
    }

    /**
     * Set the value for the AllowShare input for this CreateEmbedLink choreography.
     *
     * @param bool $value (optional, boolean) Enter "1" to add a button to generate a shared link to the file in the preview, or "0" (the default) to not add a button.
     * @return Box_CreateEmbedLink_Inputs For method chaining.
     */
    public function setAllowShare($value)
    {
        return $this->set('AllowShare', $value);
    }

    /**
     * Set the value for the AuthToken input for this CreateEmbedLink choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_CreateEmbedLink_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the Color input for this CreateEmbedLink choreography.
     *
     * @param string $value (optional, string) The hexidecimal value of the previewer background color. The default is 9E9E9E (grey).
     * @return Box_CreateEmbedLink_Inputs For method chaining.
     */
    public function setColor($value)
    {
        return $this->set('Color', $value);
    }

    /**
     * Set the value for the FileID input for this CreateEmbedLink choreography.
     *
     * @param string $value (required, string) The Box.net ID of the file for which you want to create an embedded preview link.
     * @return Box_CreateEmbedLink_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }

    /**
     * Set the value for the Height input for this CreateEmbedLink choreography.
     *
     * @param int $value (optional, integer) The height in pixels of the previewer. The default is 600.
     * @return Box_CreateEmbedLink_Inputs For method chaining.
     */
    public function setHeight($value)
    {
        return $this->set('Height', $value);
    }

    /**
     * Set the value for the Width input for this CreateEmbedLink choreography.
     *
     * @param int $value (optional, integer) The width in pixels of the previewer. The default is 600.
     * @return Box_CreateEmbedLink_Inputs For method chaining.
     */
    public function setWidth($value)
    {
        return $this->set('Width', $value);
    }
}


/**
 * Execution object for the CreateEmbedLink choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CreateEmbedLink_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateEmbedLink choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateEmbedLink execution.
     * @param Box_CreateEmbedLink $choreo The choregraphy object for this execution.
     * @param Box_CreateEmbedLink_Inputs|array $inputs (optional) Inputs as Box_CreateEmbedLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_CreateEmbedLink_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_CreateEmbedLink $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateEmbedLink execution.
     *
     * @return Box_CreateEmbedLink_Results New results object.
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
     * Wraps results in appopriate results class for this CreateEmbedLink execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_CreateEmbedLink_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_CreateEmbedLink_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateEmbedLink choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CreateEmbedLink_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateEmbedLink choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_CreateEmbedLink_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateEmbedLink execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "EmbedLink" output from this CreateEmbedLink execution.
     *
     * @return string (string) The embed link returned by Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getEmbedLink()
    {
        return $this->get('EmbedLink');
    }
}

/**
 * Retrieves information on a specified file in a user's Box.net account.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetFileInfo extends Temboo_Choreography
{
    /**
     * Retrieves information on a specified file in a user's Box.net account.
     *
     * @param Temboo_Session $session The session that owns this GetFileInfo choreography.
     * @return Box_GetFileInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/GetFileInfo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetFileInfo choreography.
     *
     * @param Box_GetFileInfo_Inputs|array $inputs (optional) Inputs as Box_GetFileInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_GetFileInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_GetFileInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFileInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_GetFileInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_GetFileInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFileInfo choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetFileInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetFileInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_GetFileInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFileInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_GetFileInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_GetFileInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetFileInfo choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_GetFileInfo_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetFileInfo choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_GetFileInfo_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FileID input for this GetFileInfo choreography.
     *
     * @param string $value (required, string) The id of the file that you want to retrieve info for. This id is returned in various API calls such as GetAccountTree. It is also viewable in your browser's URL bar when viewing the doc at box.com
     * @return Box_GetFileInfo_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }
}


/**
 * Execution object for the GetFileInfo choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetFileInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFileInfo choreography.
     *
     * @param Temboo_Session $session The session that owns this GetFileInfo execution.
     * @param Box_GetFileInfo $choreo The choregraphy object for this execution.
     * @param Box_GetFileInfo_Inputs|array $inputs (optional) Inputs as Box_GetFileInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_GetFileInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_GetFileInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFileInfo execution.
     *
     * @return Box_GetFileInfo_Results New results object.
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
     * Wraps results in appopriate results class for this GetFileInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_GetFileInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_GetFileInfo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetFileInfo choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetFileInfo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetFileInfo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_GetFileInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetFileInfo execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all tags used in a user's Box.net account.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_ExportTags extends Temboo_Choreography
{
    /**
     * Retrieves all tags used in a user's Box.net account.
     *
     * @param Temboo_Session $session The session that owns this ExportTags choreography.
     * @return Box_ExportTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/ExportTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ExportTags choreography.
     *
     * @param Box_ExportTags_Inputs|array $inputs (optional) Inputs as Box_ExportTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_ExportTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_ExportTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ExportTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_ExportTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_ExportTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ExportTags choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_ExportTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ExportTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_ExportTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ExportTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_ExportTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_ExportTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ExportTags choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_ExportTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this ExportTags choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_ExportTags_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }
}


/**
 * Execution object for the ExportTags choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_ExportTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ExportTags choreography.
     *
     * @param Temboo_Session $session The session that owns this ExportTags execution.
     * @param Box_ExportTags $choreo The choregraphy object for this execution.
     * @param Box_ExportTags_Inputs|array $inputs (optional) Inputs as Box_ExportTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_ExportTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_ExportTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ExportTags execution.
     *
     * @return Box_ExportTags_Results New results object.
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
     * Wraps results in appopriate results class for this ExportTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_ExportTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_ExportTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ExportTags choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_ExportTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ExportTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_ExportTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ExportTags execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Uploads files to your Box.net account.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_UploadFile extends Temboo_Choreography
{
    /**
     * Uploads files to your Box.net account.
     *
     * @param Temboo_Session $session The session that owns this UploadFile choreography.
     * @return Box_UploadFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/UploadFile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UploadFile choreography.
     *
     * @param Box_UploadFile_Inputs|array $inputs (optional) Inputs as Box_UploadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_UploadFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_UploadFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_UploadFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_UploadFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_UploadFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UploadFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_UploadFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_UploadFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_UploadFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this UploadFile choreography.
     *
     * @param string $value (conditional, string) The base64 encoded file contents of the file you want to upload. Required unless using the VaultFile alias (an advanced option available when executing Choreos in the Temboo Designer).
     * @return Box_UploadFile_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the AuthToken input for this UploadFile choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_UploadFile_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the ContentType input for this UploadFile choreography.
     *
     * @param string $value (required, string) The Content-Type of the file you're uploading (i.e. applcation/pdf, image/jpeg, text/plain, etc.).
     * @return Box_UploadFile_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileName input for this UploadFile choreography.
     *
     * @param string $value (required, string) The name of the file to upload to Box.net.
     * @return Box_UploadFile_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the FolderID input for this UploadFile choreography.
     *
     * @param string $value (optional, string) The ID of the target folder to upload the file to. Defaults to 0 which is the root folder.
     * @return Box_UploadFile_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }

}


/**
 * Execution object for the UploadFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_UploadFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadFile choreography.
     *
     * @param Temboo_Session $session The session that owns this UploadFile execution.
     * @param Box_UploadFile $choreo The choregraphy object for this execution.
     * @param Box_UploadFile_Inputs|array $inputs (optional) Inputs as Box_UploadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_UploadFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_UploadFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadFile execution.
     *
     * @return Box_UploadFile_Results New results object.
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
     * Wraps results in appopriate results class for this UploadFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_UploadFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_UploadFile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UploadFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_UploadFile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UploadFile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_UploadFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UploadFile execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Share a specified Box.net file or folder publicly.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_SharePublic extends Temboo_Choreography
{
    /**
     * Share a specified Box.net file or folder publicly.
     *
     * @param Temboo_Session $session The session that owns this SharePublic choreography.
     * @return Box_SharePublic New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/SharePublic/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SharePublic choreography.
     *
     * @param Box_SharePublic_Inputs|array $inputs (optional) Inputs as Box_SharePublic_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_SharePublic_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_SharePublic_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SharePublic choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_SharePublic_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_SharePublic_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SharePublic choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_SharePublic_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SharePublic choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_SharePublic_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SharePublic input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_SharePublic_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_SharePublic_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SharePublic choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_SharePublic_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Addresses input for this SharePublic choreography.
     *
     * @param string $value (optional, string) The email addresses for the users you want to notify of the shared item. Separate multiple addresses with commas (no spaces).
     * @return Box_SharePublic_Inputs For method chaining.
     */
    public function setAddresses($value)
    {
        return $this->set('Addresses', $value);
    }

    /**
     * Set the value for the AuthToken input for this SharePublic choreography.
     *
     * @param string $value (required, string) The authorization token provided by Box.net.
     * @return Box_SharePublic_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the Message input for this SharePublic choreography.
     *
     * @param string $value (optional, string) The text of the email message sent to users about the newly shared file or folder.
     * @return Box_SharePublic_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the Password input for this SharePublic choreography.
     *
     * @param string $value (optional, string) A password to protect the shared file or folder.
     * @return Box_SharePublic_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the TargetID input for this SharePublic choreography.
     *
     * @param string $value (required, string) The Box.net ID of the file or folder to share.
     * @return Box_SharePublic_Inputs For method chaining.
     */
    public function setTargetID($value)
    {
        return $this->set('TargetID', $value);
    }

    /**
     * Set the value for the Target input for this SharePublic choreography.
     *
     * @param string $value (required, string) They type of item to share, either "file" (the default) or "folder".
     * @return Box_SharePublic_Inputs For method chaining.
     */
    public function setTarget($value)
    {
        return $this->set('Target', $value);
    }
}


/**
 * Execution object for the SharePublic choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_SharePublic_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SharePublic choreography.
     *
     * @param Temboo_Session $session The session that owns this SharePublic execution.
     * @param Box_SharePublic $choreo The choregraphy object for this execution.
     * @param Box_SharePublic_Inputs|array $inputs (optional) Inputs as Box_SharePublic_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_SharePublic_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_SharePublic $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SharePublic execution.
     *
     * @return Box_SharePublic_Results New results object.
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
     * Wraps results in appopriate results class for this SharePublic execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_SharePublic_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_SharePublic_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SharePublic choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_SharePublic_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SharePublic choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_SharePublic_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SharePublic execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes a collaborator from a Box.net file or folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_RemoveCollaborator extends Temboo_Choreography
{
    /**
     * Removes a collaborator from a Box.net file or folder.
     *
     * @param Temboo_Session $session The session that owns this RemoveCollaborator choreography.
     * @return Box_RemoveCollaborator New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/RemoveCollaborator/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RemoveCollaborator choreography.
     *
     * @param Box_RemoveCollaborator_Inputs|array $inputs (optional) Inputs as Box_RemoveCollaborator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_RemoveCollaborator_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_RemoveCollaborator_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RemoveCollaborator choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_RemoveCollaborator_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_RemoveCollaborator_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RemoveCollaborator choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_RemoveCollaborator_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RemoveCollaborator choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_RemoveCollaborator_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RemoveCollaborator input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_RemoveCollaborator_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_RemoveCollaborator_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RemoveCollaborator choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_RemoveCollaborator_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this RemoveCollaborator choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_RemoveCollaborator_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the CollaborationID input for this RemoveCollaborator choreography.
     *
     * @param string $value (required, string) The Box.net ID of the collaboration to remove.
     * @return Box_RemoveCollaborator_Inputs For method chaining.
     */
    public function setCollaborationID($value)
    {
        return $this->set('CollaborationID', $value);
    }
}


/**
 * Execution object for the RemoveCollaborator choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_RemoveCollaborator_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RemoveCollaborator choreography.
     *
     * @param Temboo_Session $session The session that owns this RemoveCollaborator execution.
     * @param Box_RemoveCollaborator $choreo The choregraphy object for this execution.
     * @param Box_RemoveCollaborator_Inputs|array $inputs (optional) Inputs as Box_RemoveCollaborator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_RemoveCollaborator_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_RemoveCollaborator $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RemoveCollaborator execution.
     *
     * @return Box_RemoveCollaborator_Results New results object.
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
     * Wraps results in appopriate results class for this RemoveCollaborator execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_RemoveCollaborator_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_RemoveCollaborator_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RemoveCollaborator choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_RemoveCollaborator_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RemoveCollaborator choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_RemoveCollaborator_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RemoveCollaborator execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Share a specified Box.net file or folder privately.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_SharePrivate extends Temboo_Choreography
{
    /**
     * Share a specified Box.net file or folder privately.
     *
     * @param Temboo_Session $session The session that owns this SharePrivate choreography.
     * @return Box_SharePrivate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/SharePrivate/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SharePrivate choreography.
     *
     * @param Box_SharePrivate_Inputs|array $inputs (optional) Inputs as Box_SharePrivate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_SharePrivate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_SharePrivate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SharePrivate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_SharePrivate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_SharePrivate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SharePrivate choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_SharePrivate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SharePrivate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_SharePrivate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SharePrivate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_SharePrivate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_SharePrivate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SharePrivate choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_SharePrivate_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Addresses input for this SharePrivate choreography.
     *
     * @param string $value (required, string) The email addresses for the users you want to notify of the shared item. Separate multiple addresses with commas (no spaces).
     * @return Box_SharePrivate_Inputs For method chaining.
     */
    public function setAddresses($value)
    {
        return $this->set('Addresses', $value);
    }

    /**
     * Set the value for the AuthToken input for this SharePrivate choreography.
     *
     * @param string $value (required, string) The authorization token provided by Box.net.
     * @return Box_SharePrivate_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the Message input for this SharePrivate choreography.
     *
     * @param string $value (required, string) The text of the email message sent to users about the newly shared file or folder.
     * @return Box_SharePrivate_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the Notify input for this SharePrivate choreography.
     *
     * @param bool $value (required, boolean) Enter "1" to send a notification email to the users the item is shared with. Enter "0" (the default) to not send a notification.
     * @return Box_SharePrivate_Inputs For method chaining.
     */
    public function setNotify($value)
    {
        return $this->set('Notify', $value);
    }

    /**
     * Set the value for the TargetID input for this SharePrivate choreography.
     *
     * @param string $value (required, string) The Box.net ID of the file or folder to share.
     * @return Box_SharePrivate_Inputs For method chaining.
     */
    public function setTargetID($value)
    {
        return $this->set('TargetID', $value);
    }

    /**
     * Set the value for the Target input for this SharePrivate choreography.
     *
     * @param string $value (required, string) They type of item to share, either "file" (the default) or "folder".
     * @return Box_SharePrivate_Inputs For method chaining.
     */
    public function setTarget($value)
    {
        return $this->set('Target', $value);
    }
}


/**
 * Execution object for the SharePrivate choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_SharePrivate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SharePrivate choreography.
     *
     * @param Temboo_Session $session The session that owns this SharePrivate execution.
     * @param Box_SharePrivate $choreo The choregraphy object for this execution.
     * @param Box_SharePrivate_Inputs|array $inputs (optional) Inputs as Box_SharePrivate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_SharePrivate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_SharePrivate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SharePrivate execution.
     *
     * @return Box_SharePrivate_Results New results object.
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
     * Wraps results in appopriate results class for this SharePrivate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_SharePrivate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_SharePrivate_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SharePrivate choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_SharePrivate_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SharePrivate choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_SharePrivate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SharePrivate execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves comments for a specified object stored in a Box.net account.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetComments extends Temboo_Choreography
{
    /**
     * Retrieves comments for a specified object stored in a Box.net account.
     *
     * @param Temboo_Session $session The session that owns this GetComments choreography.
     * @return Box_GetComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/GetComments/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetComments choreography.
     *
     * @param Box_GetComments_Inputs|array $inputs (optional) Inputs as Box_GetComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_GetComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_GetComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetComments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_GetComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_GetComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetComments choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetComments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_GetComments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetComments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_GetComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_GetComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetComments choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_GetComments_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetComments choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_GetComments_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the TargetID input for this GetComments choreography.
     *
     * @param string $value (required, string) The id of the file that you want to retrieve the comments for.
     * @return Box_GetComments_Inputs For method chaining.
     */
    public function setTargetID($value)
    {
        return $this->set('TargetID', $value);
    }
}


/**
 * Execution object for the GetComments choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetComments choreography.
     *
     * @param Temboo_Session $session The session that owns this GetComments execution.
     * @param Box_GetComments $choreo The choregraphy object for this execution.
     * @param Box_GetComments_Inputs|array $inputs (optional) Inputs as Box_GetComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_GetComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_GetComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetComments execution.
     *
     * @return Box_GetComments_Results New results object.
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
     * Wraps results in appopriate results class for this GetComments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_GetComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_GetComments_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetComments choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetComments_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetComments choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_GetComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetComments execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Enables or disables the upload email address for a folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_ToggleFolderEmail extends Temboo_Choreography
{
    /**
     * Enables or disables the upload email address for a folder.
     *
     * @param Temboo_Session $session The session that owns this ToggleFolderEmail choreography.
     * @return Box_ToggleFolderEmail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/ToggleFolderEmail/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ToggleFolderEmail choreography.
     *
     * @param Box_ToggleFolderEmail_Inputs|array $inputs (optional) Inputs as Box_ToggleFolderEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_ToggleFolderEmail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_ToggleFolderEmail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ToggleFolderEmail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_ToggleFolderEmail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_ToggleFolderEmail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ToggleFolderEmail choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_ToggleFolderEmail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ToggleFolderEmail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_ToggleFolderEmail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ToggleFolderEmail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_ToggleFolderEmail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_ToggleFolderEmail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ToggleFolderEmail choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_ToggleFolderEmail_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this ToggleFolderEmail choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_ToggleFolderEmail_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the Enable input for this ToggleFolderEmail choreography.
     *
     * @param bool $value (required, boolean) Enter "1" (the default) to enable email uploads to the specified folder, or "0" to disable email uploads.
     * @return Box_ToggleFolderEmail_Inputs For method chaining.
     */
    public function setEnable($value)
    {
        return $this->set('Enable', $value);
    }

    /**
     * Set the value for the FolderID input for this ToggleFolderEmail choreography.
     *
     * @param string $value (required, string) The Box.net ID of the folder in which you want to put the new folder.  Defaults to "0", which is the root folder of the account.
     * @return Box_ToggleFolderEmail_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }
}


/**
 * Execution object for the ToggleFolderEmail choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_ToggleFolderEmail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ToggleFolderEmail choreography.
     *
     * @param Temboo_Session $session The session that owns this ToggleFolderEmail execution.
     * @param Box_ToggleFolderEmail $choreo The choregraphy object for this execution.
     * @param Box_ToggleFolderEmail_Inputs|array $inputs (optional) Inputs as Box_ToggleFolderEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_ToggleFolderEmail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_ToggleFolderEmail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ToggleFolderEmail execution.
     *
     * @return Box_ToggleFolderEmail_Results New results object.
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
     * Wraps results in appopriate results class for this ToggleFolderEmail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_ToggleFolderEmail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_ToggleFolderEmail_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ToggleFolderEmail choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_ToggleFolderEmail_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ToggleFolderEmail choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_ToggleFolderEmail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ToggleFolderEmail execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new folder in the parent folder you specify.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CreateFolder extends Temboo_Choreography
{
    /**
     * Creates a new folder in the parent folder you specify.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder choreography.
     * @return Box_CreateFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/CreateFolder/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateFolder choreography.
     *
     * @param Box_CreateFolder_Inputs|array $inputs (optional) Inputs as Box_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_CreateFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_CreateFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_CreateFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_CreateFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFolder choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CreateFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_CreateFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_CreateFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_CreateFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateFolder choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_CreateFolder_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this CreateFolder choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_CreateFolder_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the Name input for this CreateFolder choreography.
     *
     * @param string $value (required, string) The name of the folder to create.
     * @return Box_CreateFolder_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ParentID input for this CreateFolder choreography.
     *
     * @param string $value (required, string) The Box.net ID of the folder in which you want to put the new folder.  Defaults to "0", which is the root folder of the account.
     * @return Box_CreateFolder_Inputs For method chaining.
     */
    public function setParentID($value)
    {
        return $this->set('ParentID', $value);
    }

    /**
     * Set the value for the Share input for this CreateFolder choreography.
     *
     * @param bool $value (required, boolean) Enter "1" to allow the new folder to be shared, or "0" (the default) to keep it private.
     * @return Box_CreateFolder_Inputs For method chaining.
     */
    public function setShare($value)
    {
        return $this->set('Share', $value);
    }
}


/**
 * Execution object for the CreateFolder choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CreateFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFolder choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder execution.
     * @param Box_CreateFolder $choreo The choregraphy object for this execution.
     * @param Box_CreateFolder_Inputs|array $inputs (optional) Inputs as Box_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_CreateFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_CreateFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFolder execution.
     *
     * @return Box_CreateFolder_Results New results object.
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
     * Wraps results in appopriate results class for this CreateFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_CreateFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_CreateFolder_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateFolder choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CreateFolder_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateFolder choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_CreateFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateFolder execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a ticket from Box.net that is used during authentication to obtain a permanent authorization token.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetTicket extends Temboo_Choreography
{
    /**
     * Retrieves a ticket from Box.net that is used during authentication to obtain a permanent authorization token.
     *
     * @param Temboo_Session $session The session that owns this GetTicket choreography.
     * @return Box_GetTicket New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/GetTicket/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTicket choreography.
     *
     * @param Box_GetTicket_Inputs|array $inputs (optional) Inputs as Box_GetTicket_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_GetTicket_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_GetTicket_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTicket choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_GetTicket_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_GetTicket_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTicket choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetTicket_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTicket choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_GetTicket_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTicket input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_GetTicket_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_GetTicket_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTicket choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_GetTicket_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }
}


/**
 * Execution object for the GetTicket choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetTicket_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTicket choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTicket execution.
     * @param Box_GetTicket $choreo The choregraphy object for this execution.
     * @param Box_GetTicket_Inputs|array $inputs (optional) Inputs as Box_GetTicket_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_GetTicket_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_GetTicket $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTicket execution.
     *
     * @return Box_GetTicket_Results New results object.
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
     * Wraps results in appopriate results class for this GetTicket execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_GetTicket_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_GetTicket_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTicket choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetTicket_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTicket choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_GetTicket_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTicket execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Ticket" output from this GetTicket execution.
     *
     * @return string (string) The authentication ticket retrieved from Box.net which is used in the authentication process for retrieving an auth token.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTicket()
    {
        return $this->get('Ticket');
    }
}

/**
 * Retrieves the content of a specified file from your Box.net account, and returns it as Base64 encoded data.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_DownloadBase64EncodedFile extends Temboo_Choreography
{
    /**
     * Retrieves the content of a specified file from your Box.net account, and returns it as Base64 encoded data.
     *
     * @param Temboo_Session $session The session that owns this DownloadBase64EncodedFile choreography.
     * @return Box_DownloadBase64EncodedFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/DownloadBase64EncodedFile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DownloadBase64EncodedFile choreography.
     *
     * @param Box_DownloadBase64EncodedFile_Inputs|array $inputs (optional) Inputs as Box_DownloadBase64EncodedFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_DownloadBase64EncodedFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_DownloadBase64EncodedFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DownloadBase64EncodedFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_DownloadBase64EncodedFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_DownloadBase64EncodedFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DownloadBase64EncodedFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_DownloadBase64EncodedFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DownloadBase64EncodedFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_DownloadBase64EncodedFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DownloadBase64EncodedFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_DownloadBase64EncodedFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_DownloadBase64EncodedFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuthToken input for this DownloadBase64EncodedFile choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_DownloadBase64EncodedFile_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FileID input for this DownloadBase64EncodedFile choreography.
     *
     * @param string $value (required, string) The ID of the file to download from Box.net.
     * @return Box_DownloadBase64EncodedFile_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }
}


/**
 * Execution object for the DownloadBase64EncodedFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_DownloadBase64EncodedFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DownloadBase64EncodedFile choreography.
     *
     * @param Temboo_Session $session The session that owns this DownloadBase64EncodedFile execution.
     * @param Box_DownloadBase64EncodedFile $choreo The choregraphy object for this execution.
     * @param Box_DownloadBase64EncodedFile_Inputs|array $inputs (optional) Inputs as Box_DownloadBase64EncodedFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_DownloadBase64EncodedFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_DownloadBase64EncodedFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DownloadBase64EncodedFile execution.
     *
     * @return Box_DownloadBase64EncodedFile_Results New results object.
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
     * Wraps results in appopriate results class for this DownloadBase64EncodedFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_DownloadBase64EncodedFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_DownloadBase64EncodedFile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DownloadBase64EncodedFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_DownloadBase64EncodedFile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DownloadBase64EncodedFile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_DownloadBase64EncodedFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DownloadBase64EncodedFile execution.
     *
     * @return string (string) The response from Box.net. The response will contain the file content as Base64 encoded data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sets a description for a specified Box.net file or folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_SetDescription extends Temboo_Choreography
{
    /**
     * Sets a description for a specified Box.net file or folder.
     *
     * @param Temboo_Session $session The session that owns this SetDescription choreography.
     * @return Box_SetDescription New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/SetDescription/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SetDescription choreography.
     *
     * @param Box_SetDescription_Inputs|array $inputs (optional) Inputs as Box_SetDescription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_SetDescription_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_SetDescription_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SetDescription choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_SetDescription_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_SetDescription_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SetDescription choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_SetDescription_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SetDescription choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_SetDescription_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SetDescription input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_SetDescription_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_SetDescription_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SetDescription choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_SetDescription_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this SetDescription choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_SetDescription_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the Description input for this SetDescription choreography.
     *
     * @param string $value (required, string) The description for Box.net file or folder.
     * @return Box_SetDescription_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the TargetID input for this SetDescription choreography.
     *
     * @param string $value (required, string) The Box.net ID of the file or folder you want to set a description for.
     * @return Box_SetDescription_Inputs For method chaining.
     */
    public function setTargetID($value)
    {
        return $this->set('TargetID', $value);
    }

    /**
     * Set the value for the Target input for this SetDescription choreography.
     *
     * @param string $value (required, string) They type of item to set a description for, either "file" (the default) or "folder".
     * @return Box_SetDescription_Inputs For method chaining.
     */
    public function setTarget($value)
    {
        return $this->set('Target', $value);
    }
}


/**
 * Execution object for the SetDescription choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_SetDescription_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SetDescription choreography.
     *
     * @param Temboo_Session $session The session that owns this SetDescription execution.
     * @param Box_SetDescription $choreo The choregraphy object for this execution.
     * @param Box_SetDescription_Inputs|array $inputs (optional) Inputs as Box_SetDescription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_SetDescription_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_SetDescription $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SetDescription execution.
     *
     * @return Box_SetDescription_Results New results object.
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
     * Wraps results in appopriate results class for this SetDescription execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_SetDescription_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_SetDescription_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SetDescription choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_SetDescription_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SetDescription choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_SetDescription_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SetDescription execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Copies and renames a file into a specified Box.net folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CopyAndRenameFile extends Temboo_Choreography
{
    /**
     * Copies and renames a file into a specified Box.net folder.
     *
     * @param Temboo_Session $session The session that owns this CopyAndRenameFile choreography.
     * @return Box_CopyAndRenameFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/CopyAndRenameFile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CopyAndRenameFile choreography.
     *
     * @param Box_CopyAndRenameFile_Inputs|array $inputs (optional) Inputs as Box_CopyAndRenameFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_CopyAndRenameFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_CopyAndRenameFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CopyAndRenameFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_CopyAndRenameFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_CopyAndRenameFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CopyAndRenameFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CopyAndRenameFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CopyAndRenameFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_CopyAndRenameFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CopyAndRenameFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_CopyAndRenameFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_CopyAndRenameFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CopyAndRenameFile choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_CopyAndRenameFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this CopyAndRenameFile choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_CopyAndRenameFile_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the DestinationID input for this CopyAndRenameFile choreography.
     *
     * @param string $value (required, string) The Box.net folder ID into which you're copying the file. Defaults to "0", which is the root folder.
     * @return Box_CopyAndRenameFile_Inputs For method chaining.
     */
    public function setDestinationID($value)
    {
        return $this->set('DestinationID', $value);
    }

    /**
     * Set the value for the FileID input for this CopyAndRenameFile choreography.
     *
     * @param string $value (required, string) The Box.net ID of the file you want to copy and rename.
     * @return Box_CopyAndRenameFile_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }

    /**
     * Set the value for the NewName input for this CopyAndRenameFile choreography.
     *
     * @param string $value (required, string) The new name for Box.net file you're copying.
     * @return Box_CopyAndRenameFile_Inputs For method chaining.
     */
    public function setNewName($value)
    {
        return $this->set('NewName', $value);
    }
}


/**
 * Execution object for the CopyAndRenameFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CopyAndRenameFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CopyAndRenameFile choreography.
     *
     * @param Temboo_Session $session The session that owns this CopyAndRenameFile execution.
     * @param Box_CopyAndRenameFile $choreo The choregraphy object for this execution.
     * @param Box_CopyAndRenameFile_Inputs|array $inputs (optional) Inputs as Box_CopyAndRenameFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_CopyAndRenameFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_CopyAndRenameFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CopyAndRenameFile execution.
     *
     * @return Box_CopyAndRenameFile_Results New results object.
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
     * Wraps results in appopriate results class for this CopyAndRenameFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_CopyAndRenameFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_CopyAndRenameFile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CopyAndRenameFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CopyAndRenameFile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CopyAndRenameFile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_CopyAndRenameFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CopyAndRenameFile execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Moves a file or folder into another Box.net folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_MoveFileOrFolder extends Temboo_Choreography
{
    /**
     * Moves a file or folder into another Box.net folder.
     *
     * @param Temboo_Session $session The session that owns this MoveFileOrFolder choreography.
     * @return Box_MoveFileOrFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/MoveFileOrFolder/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this MoveFileOrFolder choreography.
     *
     * @param Box_MoveFileOrFolder_Inputs|array $inputs (optional) Inputs as Box_MoveFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_MoveFileOrFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_MoveFileOrFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MoveFileOrFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_MoveFileOrFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_MoveFileOrFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MoveFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_MoveFileOrFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the MoveFileOrFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_MoveFileOrFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MoveFileOrFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_MoveFileOrFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this MoveFileOrFolder choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this MoveFileOrFolder choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the DestinationID input for this MoveFileOrFolder choreography.
     *
     * @param string $value (required, string) The Box.net folder ID into which you're moving the item.
     * @return Box_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setDestinationID($value)
    {
        return $this->set('DestinationID', $value);
    }

    /**
     * Set the value for the TargetID input for this MoveFileOrFolder choreography.
     *
     * @param string $value (required, string) The Box.net ID of the file or folder you want to move.
     * @return Box_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setTargetID($value)
    {
        return $this->set('TargetID', $value);
    }

    /**
     * Set the value for the Target input for this MoveFileOrFolder choreography.
     *
     * @param string $value (required, string) They type of item to move, either "file" (the default) or "folder".
     * @return Box_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setTarget($value)
    {
        return $this->set('Target', $value);
    }
}


/**
 * Execution object for the MoveFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_MoveFileOrFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MoveFileOrFolder choreography.
     *
     * @param Temboo_Session $session The session that owns this MoveFileOrFolder execution.
     * @param Box_MoveFileOrFolder $choreo The choregraphy object for this execution.
     * @param Box_MoveFileOrFolder_Inputs|array $inputs (optional) Inputs as Box_MoveFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_MoveFileOrFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_MoveFileOrFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MoveFileOrFolder execution.
     *
     * @return Box_MoveFileOrFolder_Results New results object.
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
     * Wraps results in appopriate results class for this MoveFileOrFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_MoveFileOrFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_MoveFileOrFolder_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the MoveFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_MoveFileOrFolder_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the MoveFileOrFolder choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_MoveFileOrFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this MoveFileOrFolder execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Copies a specified file into a Box.net folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CopyFile extends Temboo_Choreography
{
    /**
     * Copies a specified file into a Box.net folder.
     *
     * @param Temboo_Session $session The session that owns this CopyFile choreography.
     * @return Box_CopyFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/CopyFile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CopyFile choreography.
     *
     * @param Box_CopyFile_Inputs|array $inputs (optional) Inputs as Box_CopyFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_CopyFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_CopyFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CopyFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_CopyFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_CopyFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CopyFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CopyFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CopyFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_CopyFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CopyFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_CopyFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_CopyFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CopyFile choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_CopyFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this CopyFile choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_CopyFile_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the DestinationID input for this CopyFile choreography.
     *
     * @param string $value (required, string) The Box.net folder ID into which you're copying the file. Note that you can't copy a file into the same folder as the original file.
     * @return Box_CopyFile_Inputs For method chaining.
     */
    public function setDestinationID($value)
    {
        return $this->set('DestinationID', $value);
    }

    /**
     * Set the value for the FileID input for this CopyFile choreography.
     *
     * @param string $value (required, string) The Box.net ID of the file you want to copy.
     * @return Box_CopyFile_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }
}


/**
 * Execution object for the CopyFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CopyFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CopyFile choreography.
     *
     * @param Temboo_Session $session The session that owns this CopyFile execution.
     * @param Box_CopyFile $choreo The choregraphy object for this execution.
     * @param Box_CopyFile_Inputs|array $inputs (optional) Inputs as Box_CopyFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_CopyFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_CopyFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CopyFile execution.
     *
     * @return Box_CopyFile_Results New results object.
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
     * Wraps results in appopriate results class for this CopyFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_CopyFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_CopyFile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CopyFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_CopyFile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CopyFile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_CopyFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CopyFile execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified Box.net file or folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_DeleteFileOrFolder extends Temboo_Choreography
{
    /**
     * Deletes a specified Box.net file or folder.
     *
     * @param Temboo_Session $session The session that owns this DeleteFileOrFolder choreography.
     * @return Box_DeleteFileOrFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/DeleteFileOrFolder/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteFileOrFolder choreography.
     *
     * @param Box_DeleteFileOrFolder_Inputs|array $inputs (optional) Inputs as Box_DeleteFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_DeleteFileOrFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_DeleteFileOrFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFileOrFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_DeleteFileOrFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_DeleteFileOrFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_DeleteFileOrFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteFileOrFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_DeleteFileOrFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFileOrFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteFileOrFolder choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this DeleteFileOrFolder choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the TargetID input for this DeleteFileOrFolder choreography.
     *
     * @param string $value (required, string) The Box.net ID of the file or folder you want to delete.
     * @return Box_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setTargetID($value)
    {
        return $this->set('TargetID', $value);
    }

    /**
     * Set the value for the Target input for this DeleteFileOrFolder choreography.
     *
     * @param string $value (required, string) The type of item to delete, either "file" (the default) or "folder".
     * @return Box_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setTarget($value)
    {
        return $this->set('Target', $value);
    }
}


/**
 * Execution object for the DeleteFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_DeleteFileOrFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFileOrFolder choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteFileOrFolder execution.
     * @param Box_DeleteFileOrFolder $choreo The choregraphy object for this execution.
     * @param Box_DeleteFileOrFolder_Inputs|array $inputs (optional) Inputs as Box_DeleteFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_DeleteFileOrFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_DeleteFileOrFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFileOrFolder execution.
     *
     * @return Box_DeleteFileOrFolder_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteFileOrFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_DeleteFileOrFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_DeleteFileOrFolder_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_DeleteFileOrFolder_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteFileOrFolder choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_DeleteFileOrFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteFileOrFolder execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the version history for a particular file stored in your Box.net account.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetVersions extends Temboo_Choreography
{
    /**
     * Retrieve the version history for a particular file stored in your Box.net account.
     *
     * @param Temboo_Session $session The session that owns this GetVersions choreography.
     * @return Box_GetVersions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/GetVersions/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetVersions choreography.
     *
     * @param Box_GetVersions_Inputs|array $inputs (optional) Inputs as Box_GetVersions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_GetVersions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_GetVersions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetVersions choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_GetVersions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_GetVersions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetVersions choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetVersions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetVersions choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_GetVersions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetVersions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_GetVersions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_GetVersions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetVersions choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_GetVersions_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetVersions choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_GetVersions_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the TargetID input for this GetVersions choreography.
     *
     * @param string $value (required, string) The ID of the file to retrieve version information for.
     * @return Box_GetVersions_Inputs For method chaining.
     */
    public function setTargetID($value)
    {
        return $this->set('TargetID', $value);
    }
}


/**
 * Execution object for the GetVersions choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetVersions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetVersions choreography.
     *
     * @param Temboo_Session $session The session that owns this GetVersions execution.
     * @param Box_GetVersions $choreo The choregraphy object for this execution.
     * @param Box_GetVersions_Inputs|array $inputs (optional) Inputs as Box_GetVersions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_GetVersions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_GetVersions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetVersions execution.
     *
     * @return Box_GetVersions_Results New results object.
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
     * Wraps results in appopriate results class for this GetVersions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_GetVersions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_GetVersions_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetVersions choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetVersions_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetVersions choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_GetVersions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetVersions execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves only the files and/or folders contained within the specified folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_RetrieveFolderItems extends Temboo_Choreography
{
    /**
     * Retrieves only the files and/or folders contained within the specified folder.
     *
     * @param Temboo_Session $session The session that owns this RetrieveFolderItems choreography.
     * @return Box_RetrieveFolderItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/RetrieveFolderItems/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveFolderItems choreography.
     *
     * @param Box_RetrieveFolderItems_Inputs|array $inputs (optional) Inputs as Box_RetrieveFolderItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_RetrieveFolderItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_RetrieveFolderItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveFolderItems choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_RetrieveFolderItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_RetrieveFolderItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveFolderItems choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_RetrieveFolderItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveFolderItems choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_RetrieveFolderItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveFolderItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_RetrieveFolderItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_RetrieveFolderItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveFolderItems choreography.
     *
     * @param string $value (required, string) The APIKey provided by Box when registering for a developer account.
     * @return Box_RetrieveFolderItems_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this RetrieveFolderItems choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_RetrieveFolderItems_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FolderID input for this RetrieveFolderItems choreography.
     *
     * @param string $value (optional, string) The id of the folder that you want to retrieve items for. This id is returned in various API calls such as GetAccountTree. It is also viewable in your browser's URL bar when viewing the folder at box.
     * @return Box_RetrieveFolderItems_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveFolderItems choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Box_RetrieveFolderItems_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the RetrieveFolderItems choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_RetrieveFolderItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveFolderItems choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveFolderItems execution.
     * @param Box_RetrieveFolderItems $choreo The choregraphy object for this execution.
     * @param Box_RetrieveFolderItems_Inputs|array $inputs (optional) Inputs as Box_RetrieveFolderItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_RetrieveFolderItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_RetrieveFolderItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveFolderItems execution.
     *
     * @return Box_RetrieveFolderItems_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveFolderItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_RetrieveFolderItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_RetrieveFolderItems_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveFolderItems choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_RetrieveFolderItems_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveFolderItems choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_RetrieveFolderItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveFolderItems execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to search items stored in your Box account.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Search extends Temboo_Choreography
{
    /**
     * Allows you to search items stored in your Box account.
     *
     * @param Temboo_Session $session The session that owns this Search choreography.
     * @return Box_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/Search/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Search choreography.
     *
     * @param Box_Search_Inputs|array $inputs (optional) Inputs as Box_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Search choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_Search_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Search input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Search choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_Search_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this Search choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_Search_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the Direction input for this Search choreography.
     *
     * @param string $value (optional, string) Indicates the direction of the result sort order. Accepted values are: ASC or DESC. Defaults to "DESC".
     * @return Box_Search_Inputs For method chaining.
     */
    public function setDirection($value)
    {
        return $this->set('Direction', $value);
    }

    /**
     * Set the value for the Page input for this Search choreography.
     *
     * @param int $value (optional, integer) The page number of the search results. Used in combination with the PerPage input for paging through many results.
     * @return Box_Search_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this Search choreography.
     *
     * @param int $value (optional, integer) The number of results to display per page. Used in combination with the Page input for paging through many results. Defaults to 20.
     * @return Box_Search_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Query input for this Search choreography.
     *
     * @param string $value (required, string) The text to use for the search.
     * @return Box_Search_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Sort input for this Search choreography.
     *
     * @param string $value (optional, string) Indicates how the results will be sorted. Accepted values are: relevance, name, date, or size. Defaults to "relevance".
     * @return Box_Search_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the Search choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search choreography.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param Box_Search $choreo The choregraphy object for this execution.
     * @param Box_Search_Inputs|array $inputs (optional) Inputs as Box_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return Box_Search_Results New results object.
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
     * Wraps results in appopriate results class for this Search execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_Search_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Search choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_Search_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Search choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Renames a specified Box.net file or folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_RenameFileOrFolder extends Temboo_Choreography
{
    /**
     * Renames a specified Box.net file or folder.
     *
     * @param Temboo_Session $session The session that owns this RenameFileOrFolder choreography.
     * @return Box_RenameFileOrFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/RenameFileOrFolder/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RenameFileOrFolder choreography.
     *
     * @param Box_RenameFileOrFolder_Inputs|array $inputs (optional) Inputs as Box_RenameFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_RenameFileOrFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_RenameFileOrFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RenameFileOrFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_RenameFileOrFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_RenameFileOrFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RenameFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_RenameFileOrFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RenameFileOrFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_RenameFileOrFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RenameFileOrFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_RenameFileOrFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_RenameFileOrFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RenameFileOrFolder choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_RenameFileOrFolder_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this RenameFileOrFolder choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_RenameFileOrFolder_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the NewName input for this RenameFileOrFolder choreography.
     *
     * @param string $value (required, string) The new name for Box.net file or folder.
     * @return Box_RenameFileOrFolder_Inputs For method chaining.
     */
    public function setNewName($value)
    {
        return $this->set('NewName', $value);
    }

    /**
     * Set the value for the TargetID input for this RenameFileOrFolder choreography.
     *
     * @param string $value (required, string) The Box.net ID of the file or folder you want to rename.
     * @return Box_RenameFileOrFolder_Inputs For method chaining.
     */
    public function setTargetID($value)
    {
        return $this->set('TargetID', $value);
    }

    /**
     * Set the value for the Target input for this RenameFileOrFolder choreography.
     *
     * @param string $value (required, string) They type of item to rename, either "file" (the default) or "folder".
     * @return Box_RenameFileOrFolder_Inputs For method chaining.
     */
    public function setTarget($value)
    {
        return $this->set('Target', $value);
    }
}


/**
 * Execution object for the RenameFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_RenameFileOrFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RenameFileOrFolder choreography.
     *
     * @param Temboo_Session $session The session that owns this RenameFileOrFolder execution.
     * @param Box_RenameFileOrFolder $choreo The choregraphy object for this execution.
     * @param Box_RenameFileOrFolder_Inputs|array $inputs (optional) Inputs as Box_RenameFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_RenameFileOrFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_RenameFileOrFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RenameFileOrFolder execution.
     *
     * @return Box_RenameFileOrFolder_Results New results object.
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
     * Wraps results in appopriate results class for this RenameFileOrFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_RenameFileOrFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_RenameFileOrFolder_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RenameFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_RenameFileOrFolder_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RenameFileOrFolder choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_RenameFileOrFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RenameFileOrFolder execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the tree information that represents a user's box.net account.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetAccountTree extends Temboo_Choreography
{
    /**
     * Retrieves the tree information that represents a user's box.net account.
     *
     * @param Temboo_Session $session The session that owns this GetAccountTree choreography.
     * @return Box_GetAccountTree New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/GetAccountTree/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAccountTree choreography.
     *
     * @param Box_GetAccountTree_Inputs|array $inputs (optional) Inputs as Box_GetAccountTree_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_GetAccountTree_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_GetAccountTree_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAccountTree choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_GetAccountTree_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_GetAccountTree_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAccountTree choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetAccountTree_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAccountTree choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_GetAccountTree_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAccountTree input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_GetAccountTree_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_GetAccountTree_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetAccountTree choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_GetAccountTree_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetAccountTree choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_GetAccountTree_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FolderID input for this GetAccountTree choreography.
     *
     * @param string $value (optional, string) The folder id that corresponds to the top level of the tree to return. Defaults to zero for the root level.
     * @return Box_GetAccountTree_Inputs For method chaining.
     */
    public function setFolderID($value)
    {
        return $this->set('FolderID', $value);
    }
}


/**
 * Execution object for the GetAccountTree choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetAccountTree_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAccountTree choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAccountTree execution.
     * @param Box_GetAccountTree $choreo The choregraphy object for this execution.
     * @param Box_GetAccountTree_Inputs|array $inputs (optional) Inputs as Box_GetAccountTree_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_GetAccountTree_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_GetAccountTree $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAccountTree execution.
     *
     * @return Box_GetAccountTree_Results New results object.
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
     * Wraps results in appopriate results class for this GetAccountTree execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_GetAccountTree_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_GetAccountTree_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAccountTree choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_GetAccountTree_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAccountTree choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_GetAccountTree_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAccountTree execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Uploads a new version of an existing file in a user’s account.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_UploadNewVersionOfFile extends Temboo_Choreography
{
    /**
     * Uploads a new version of an existing file in a user’s account.
     *
     * @param Temboo_Session $session The session that owns this UploadNewVersionOfFile choreography.
     * @return Box_UploadNewVersionOfFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/UploadNewVersionOfFile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UploadNewVersionOfFile choreography.
     *
     * @param Box_UploadNewVersionOfFile_Inputs|array $inputs (optional) Inputs as Box_UploadNewVersionOfFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_UploadNewVersionOfFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_UploadNewVersionOfFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadNewVersionOfFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_UploadNewVersionOfFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_UploadNewVersionOfFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadNewVersionOfFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_UploadNewVersionOfFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UploadNewVersionOfFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_UploadNewVersionOfFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadNewVersionOfFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_UploadNewVersionOfFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_UploadNewVersionOfFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this UploadNewVersionOfFile choreography.
     *
     * @param string $value (conditional, string) The base64 encoded file contents of the file you want to upload. Required unless using the VaultFile alias (an advanced option available when executing Choreos in the Temboo Designer).
     * @return Box_UploadNewVersionOfFile_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the APIKey input for this UploadNewVersionOfFile choreography.
     *
     * @param string $value (required, string) The APIKey provided by Box when registering for a developer account.
     * @return Box_UploadNewVersionOfFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AuthToken input for this UploadNewVersionOfFile choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_UploadNewVersionOfFile_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the ContentType input for this UploadNewVersionOfFile choreography.
     *
     * @param string $value (required, string) The Content-Type of the file you're uploading (i.e. applcation/pdf, image/jpeg, text/plain, etc.).
     * @return Box_UploadNewVersionOfFile_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileID input for this UploadNewVersionOfFile choreography.
     *
     * @param string $value (required, string) The unique id of the file that you want to update. This id is returned in various API calls such as GetAccountTree. It is also viewable in your browser's URL bar when viewing the doc at box.com.
     * @return Box_UploadNewVersionOfFile_Inputs For method chaining.
     */
    public function setFileID($value)
    {
        return $this->set('FileID', $value);
    }

    /**
     * Set the value for the FileName input for this UploadNewVersionOfFile choreography.
     *
     * @param string $value (required, string) The name of the file to upload to Box.net.
     * @return Box_UploadNewVersionOfFile_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UploadNewVersionOfFile choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Box_UploadNewVersionOfFile_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the UploadNewVersionOfFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_UploadNewVersionOfFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadNewVersionOfFile choreography.
     *
     * @param Temboo_Session $session The session that owns this UploadNewVersionOfFile execution.
     * @param Box_UploadNewVersionOfFile $choreo The choregraphy object for this execution.
     * @param Box_UploadNewVersionOfFile_Inputs|array $inputs (optional) Inputs as Box_UploadNewVersionOfFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_UploadNewVersionOfFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_UploadNewVersionOfFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadNewVersionOfFile execution.
     *
     * @return Box_UploadNewVersionOfFile_Results New results object.
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
     * Wraps results in appopriate results class for this UploadNewVersionOfFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_UploadNewVersionOfFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_UploadNewVersionOfFile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UploadNewVersionOfFile choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_UploadNewVersionOfFile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UploadNewVersionOfFile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_UploadNewVersionOfFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UploadNewVersionOfFile execution.
     *
     * @return string (json) The response from Box.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Accepts a collaboration invitation for a Box.net file or folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_AcceptCollaboration extends Temboo_Choreography
{
    /**
     * Accepts a collaboration invitation for a Box.net file or folder.
     *
     * @param Temboo_Session $session The session that owns this AcceptCollaboration choreography.
     * @return Box_AcceptCollaboration New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/AcceptCollaboration/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AcceptCollaboration choreography.
     *
     * @param Box_AcceptCollaboration_Inputs|array $inputs (optional) Inputs as Box_AcceptCollaboration_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_AcceptCollaboration_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_AcceptCollaboration_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AcceptCollaboration choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_AcceptCollaboration_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_AcceptCollaboration_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AcceptCollaboration choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_AcceptCollaboration_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AcceptCollaboration choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_AcceptCollaboration_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AcceptCollaboration input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_AcceptCollaboration_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_AcceptCollaboration_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AcceptCollaboration choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_AcceptCollaboration_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Accept input for this AcceptCollaboration choreography.
     *
     * @param bool $value (required, boolean) Enter "1" (the default) to accept a collaboration invitation, or "0" to not accept.
     * @return Box_AcceptCollaboration_Inputs For method chaining.
     */
    public function setAccept($value)
    {
        return $this->set('Accept', $value);
    }

    /**
     * Set the value for the AuthToken input for this AcceptCollaboration choreography.
     *
     * @param string $value (required, string) Authorization Token retrieved by following the Oauth process described in Box.net API documentation.
     * @return Box_AcceptCollaboration_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the CollaborationID input for this AcceptCollaboration choreography.
     *
     * @param int $value (required, integer) The Box.net ID of the collaboration to accept.
     * @return Box_AcceptCollaboration_Inputs For method chaining.
     */
    public function setCollaborationID($value)
    {
        return $this->set('CollaborationID', $value);
    }
}


/**
 * Execution object for the AcceptCollaboration choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_AcceptCollaboration_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AcceptCollaboration choreography.
     *
     * @param Temboo_Session $session The session that owns this AcceptCollaboration execution.
     * @param Box_AcceptCollaboration $choreo The choregraphy object for this execution.
     * @param Box_AcceptCollaboration_Inputs|array $inputs (optional) Inputs as Box_AcceptCollaboration_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_AcceptCollaboration_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_AcceptCollaboration $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AcceptCollaboration execution.
     *
     * @return Box_AcceptCollaboration_Results New results object.
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
     * Wraps results in appopriate results class for this AcceptCollaboration execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_AcceptCollaboration_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_AcceptCollaboration_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AcceptCollaboration choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_AcceptCollaboration_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AcceptCollaboration choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_AcceptCollaboration_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AcceptCollaboration execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Invites users to collaborate on a specified Box.net file or folder.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_InviteCollaborators extends Temboo_Choreography
{
    /**
     * Invites users to collaborate on a specified Box.net file or folder.
     *
     * @param Temboo_Session $session The session that owns this InviteCollaborators choreography.
     * @return Box_InviteCollaborators New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Box/InviteCollaborators/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this InviteCollaborators choreography.
     *
     * @param Box_InviteCollaborators_Inputs|array $inputs (optional) Inputs as Box_InviteCollaborators_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_InviteCollaborators_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Box_InviteCollaborators_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InviteCollaborators choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_InviteCollaborators_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Box_InviteCollaborators_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InviteCollaborators choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_InviteCollaborators_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the InviteCollaborators choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Box_InviteCollaborators_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InviteCollaborators input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Box_InviteCollaborators_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Box_InviteCollaborators_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this InviteCollaborators choreography.
     *
     * @param string $value (required, string) The API Key provided by Box.net.
     * @return Box_InviteCollaborators_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Addresses input for this InviteCollaborators choreography.
     *
     * @param string $value (optional, string) The email addresses for the collaborators you want to invite. Separate multiple addresses with commas (no spaces).
     * @return Box_InviteCollaborators_Inputs For method chaining.
     */
    public function setAddresses($value)
    {
        return $this->set('Addresses', $value);
    }

    /**
     * Set the value for the AuthToken input for this InviteCollaborators choreography.
     *
     * @param string $value (required, string) The authorization token provided by Box.net.
     * @return Box_InviteCollaborators_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the Notify input for this InviteCollaborators choreography.
     *
     * @param bool $value (required, boolean) Enter "1" (the default) to send a notification email to the invited collaborators. Enter "0" to not send a notification.
     * @return Box_InviteCollaborators_Inputs For method chaining.
     */
    public function setNotify($value)
    {
        return $this->set('Notify', $value);
    }

    /**
     * Set the value for the Resend input for this InviteCollaborators choreography.
     *
     * @param bool $value (required, boolean) Enter "1" to resend a notification email to the invited collaborators. Enter "0" (the default) to not resend a notification.
     * @return Box_InviteCollaborators_Inputs For method chaining.
     */
    public function setResend($value)
    {
        return $this->set('Resend', $value);
    }

    /**
     * Set the value for the Role input for this InviteCollaborators choreography.
     *
     * @param string $value (required, string) The role to assign to the invited collaborators, either "editor" or "viewer" (the default).
     * @return Box_InviteCollaborators_Inputs For method chaining.
     */
    public function setRole($value)
    {
        return $this->set('Role', $value);
    }

    /**
     * Set the value for the TargetID input for this InviteCollaborators choreography.
     *
     * @param string $value (required, string) The Box.net ID of the file or folder to invite collaborators for.
     * @return Box_InviteCollaborators_Inputs For method chaining.
     */
    public function setTargetID($value)
    {
        return $this->set('TargetID', $value);
    }

    /**
     * Set the value for the Target input for this InviteCollaborators choreography.
     *
     * @param string $value (required, string) The type of item to invite collaborators for. Box.net currently only allows collaborators for folders; "file" will eventually be supported, but for now the default value is "folder".
     * @return Box_InviteCollaborators_Inputs For method chaining.
     */
    public function setTarget($value)
    {
        return $this->set('Target', $value);
    }
}


/**
 * Execution object for the InviteCollaborators choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_InviteCollaborators_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InviteCollaborators choreography.
     *
     * @param Temboo_Session $session The session that owns this InviteCollaborators execution.
     * @param Box_InviteCollaborators $choreo The choregraphy object for this execution.
     * @param Box_InviteCollaborators_Inputs|array $inputs (optional) Inputs as Box_InviteCollaborators_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Box_InviteCollaborators_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Box_InviteCollaborators $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InviteCollaborators execution.
     *
     * @return Box_InviteCollaborators_Results New results object.
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
     * Wraps results in appopriate results class for this InviteCollaborators execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Box_InviteCollaborators_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Box_InviteCollaborators_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the InviteCollaborators choreography.
 *
 * @package Temboo
 * @subpackage Box
 */
class Box_InviteCollaborators_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the InviteCollaborators choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Box_InviteCollaborators_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this InviteCollaborators execution.
     *
     * @return string (xml) The response from Box.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>