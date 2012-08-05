<?php

/**
 * Temboo PHP SDK GitHub classes
 *
 * Execute Choreographies from the Temboo GitHub bundle.
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
 * @subpackage GitHub
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieves a list of comments for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommentsForRepo extends Temboo_Choreography
{
    /**
     * Retrieves a list of comments for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListCommentsForRepo choreography.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Comments/ListCommentsForRepo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListCommentsForRepo choreography.
     *
     * @param GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Comments_ListCommentsForRepo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCommentsForRepo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCommentsForRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListCommentsForRepo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCommentsForRepo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListCommentsForRepo choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListCommentsForRepo choreography.
     *
     * @param string $value (required, string) The name of the repo to list comments for.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListCommentsForRepo choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListCommentsForRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommentsForRepo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCommentsForRepo choreography.
     *
     * @param Temboo_Session $session The session that owns this ListCommentsForRepo execution.
     * @param GitHub_ReposAPI_Comments_ListCommentsForRepo $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_ListCommentsForRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Comments_ListCommentsForRepo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCommentsForRepo execution.
     *
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Results New results object.
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
     * Wraps results in appopriate results class for this ListCommentsForRepo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Comments_ListCommentsForRepo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListCommentsForRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommentsForRepo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListCommentsForRepo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_ListCommentsForRepo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListCommentsForRepo execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListCommentsForRepo execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListCommentsForRepo execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Creates a comment for a specified gist.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_CreateComment extends Temboo_Choreography
{
    /**
     * Creates a comment for a specified gist.
     *
     * @param Temboo_Session $session The session that owns this CreateComment choreography.
     * @return GitHub_GistsAPI_Comments_CreateComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Comments/CreateComment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateComment choreography.
     *
     * @param GitHub_GistsAPI_Comments_CreateComment_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_CreateComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_CreateComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Comments_CreateComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Comments_CreateComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_CreateComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateComment choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Body input for this CreateComment choreography.
     *
     * @param string $value (required, string) The text for the comment.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the ID input for this CreateComment choreography.
     *
     * @param string $value (required, string) The id of the gist to comment on.
     * @return GitHub_GistsAPI_Comments_CreateComment_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the CreateComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_CreateComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateComment choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateComment execution.
     * @param GitHub_GistsAPI_Comments_CreateComment $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Comments_CreateComment_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_CreateComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_CreateComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Comments_CreateComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateComment execution.
     *
     * @return GitHub_GistsAPI_Comments_CreateComment_Results New results object.
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
     * Wraps results in appopriate results class for this CreateComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_CreateComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Comments_CreateComment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_CreateComment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateComment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_CreateComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateComment execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this CreateComment execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this CreateComment execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Checks to see if the provided user is a collaborator.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_GetCollaboratorStatus extends Temboo_Choreography
{
    /**
     * Checks to see if the provided user is a collaborator.
     *
     * @param Temboo_Session $session The session that owns this GetCollaboratorStatus choreography.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Collaborators/GetCollaboratorStatus/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCollaboratorStatus choreography.
     *
     * @param GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCollaboratorStatus choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCollaboratorStatus choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCollaboratorStatus choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCollaboratorStatus input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCollaboratorStatus choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Collaborator input for this GetCollaboratorStatus choreography.
     *
     * @param string $value (required, string) The username of the collaborator to check.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs For method chaining.
     */
    public function setCollaborator($value)
    {
        return $this->set('Collaborator', $value);
    }

    /**
     * Set the value for the Repo input for this GetCollaboratorStatus choreography.
     *
     * @param string $value (required, string) The name of the repo that has the collaborators to retrieve.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetCollaboratorStatus choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetCollaboratorStatus choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCollaboratorStatus choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCollaboratorStatus execution.
     * @param GitHub_ReposAPI_Collaborators_GetCollaboratorStatus $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Collaborators_GetCollaboratorStatus $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCollaboratorStatus execution.
     *
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Results New results object.
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
     * Wraps results in appopriate results class for this GetCollaboratorStatus execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCollaboratorStatus choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCollaboratorStatus choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_GetCollaboratorStatus_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCollaboratorStatus execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetCollaboratorStatus execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetCollaboratorStatus execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Returns the contents of any file or directory in a repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetArchive extends Temboo_Choreography
{
    /**
     * Returns the contents of any file or directory in a repository.
     *
     * @param Temboo_Session $session The session that owns this GetArchive choreography.
     * @return GitHub_ReposAPI_Contents_GetArchive New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Contents/GetArchive/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetArchive choreography.
     *
     * @param GitHub_ReposAPI_Contents_GetArchive_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Contents_GetArchive_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Contents_GetArchive_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Contents_GetArchive_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetArchive choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Contents_GetArchive_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetArchive choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetArchive_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetArchive choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetArchive input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetArchive choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Path input for this GetArchive choreography.
     *
     * @param string $value (optional, string) The content path.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Ref input for this GetArchive choreography.
     *
     * @param string $value (optional, string) The name of the commit, branch, or tag. Defaults to "master".
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function setRef($value)
    {
        return $this->set('Ref', $value);
    }

    /**
     * Set the value for the Repo input for this GetArchive choreography.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetArchive choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Contents_GetArchive_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetArchive choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetArchive_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetArchive choreography.
     *
     * @param Temboo_Session $session The session that owns this GetArchive execution.
     * @param GitHub_ReposAPI_Contents_GetArchive $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Contents_GetArchive_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Contents_GetArchive_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Contents_GetArchive_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Contents_GetArchive $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetArchive execution.
     *
     * @return GitHub_ReposAPI_Contents_GetArchive_Results New results object.
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
     * Wraps results in appopriate results class for this GetArchive execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Contents_GetArchive_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Contents_GetArchive_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetArchive choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetArchive_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetArchive choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Contents_GetArchive_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetArchive execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetArchive execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetArchive execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a list of branches for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListBranches extends Temboo_Choreography
{
    /**
     * Retrieves a list of branches for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListBranches choreography.
     * @return GitHub_ReposAPI_Repos_ListBranches New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListBranches/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListBranches choreography.
     *
     * @param GitHub_ReposAPI_Repos_ListBranches_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListBranches_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListBranches_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListBranches_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListBranches choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListBranches_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListBranches choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListBranches_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListBranches choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListBranches input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListBranches choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListBranches choreography.
     *
     * @param string $value (required, string) The name of the repo to list branches for.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListBranches choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_ListBranches_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListBranches choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListBranches_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListBranches choreography.
     *
     * @param Temboo_Session $session The session that owns this ListBranches execution.
     * @param GitHub_ReposAPI_Repos_ListBranches $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Repos_ListBranches_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListBranches_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListBranches_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListBranches $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListBranches execution.
     *
     * @return GitHub_ReposAPI_Repos_ListBranches_Results New results object.
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
     * Wraps results in appopriate results class for this ListBranches execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListBranches_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListBranches_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListBranches choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListBranches_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListBranches choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListBranches_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListBranches execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListBranches execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListBranches execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves an individual commit comment.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_GetCommitComment extends Temboo_Choreography
{
    /**
     * Retrieves an individual commit comment.
     *
     * @param Temboo_Session $session The session that owns this GetCommitComment choreography.
     * @return GitHub_ReposAPI_Comments_GetCommitComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Comments/GetCommitComment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCommitComment choreography.
     *
     * @param GitHub_ReposAPI_Comments_GetCommitComment_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_GetCommitComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Comments_GetCommitComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCommitComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Comments_GetCommitComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCommitComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_GetCommitComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCommitComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCommitComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCommitComment choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this GetCommitComment choreography.
     *
     * @param string $value (required, string) The comment id.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Repo input for this GetCommitComment choreography.
     *
     * @param string $value (required, string) The name of the repo that the comment is associated with.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetCommitComment choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetCommitComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_GetCommitComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCommitComment choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCommitComment execution.
     * @param GitHub_ReposAPI_Comments_GetCommitComment $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Comments_GetCommitComment_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_GetCommitComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Comments_GetCommitComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCommitComment execution.
     *
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Results New results object.
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
     * Wraps results in appopriate results class for this GetCommitComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Comments_GetCommitComment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCommitComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_GetCommitComment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCommitComment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_GetCommitComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCommitComment execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetCommitComment execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetCommitComment execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Creates a fork for the authenticated user.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_CreateFork extends Temboo_Choreography
{
    /**
     * Creates a fork for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this CreateFork choreography.
     * @return GitHub_ReposAPI_Forks_CreateFork New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Forks/CreateFork/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateFork choreography.
     *
     * @param GitHub_ReposAPI_Forks_CreateFork_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Forks_CreateFork_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Forks_CreateFork_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Forks_CreateFork_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFork choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Forks_CreateFork_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFork choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_CreateFork_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateFork choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFork input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateFork choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Org input for this CreateFork choreography.
     *
     * @param string $value (optional, string) The organization login. The repository will be forked into this organization.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs For method chaining.
     */
    public function setOrg($value)
    {
        return $this->set('Org', $value);
    }

    /**
     * Set the value for the Repo input for this CreateFork choreography.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this CreateFork choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Forks_CreateFork_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the CreateFork choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_CreateFork_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFork choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateFork execution.
     * @param GitHub_ReposAPI_Forks_CreateFork $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Forks_CreateFork_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Forks_CreateFork_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Forks_CreateFork_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Forks_CreateFork $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFork execution.
     *
     * @return GitHub_ReposAPI_Forks_CreateFork_Results New results object.
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
     * Wraps results in appopriate results class for this CreateFork execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Forks_CreateFork_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Forks_CreateFork_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateFork choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_CreateFork_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateFork choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Forks_CreateFork_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateFork execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this CreateFork execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this CreateFork execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Returns a list of all public gists.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListPublicGists extends Temboo_Choreography
{
    /**
     * Returns a list of all public gists.
     *
     * @param Temboo_Session $session The session that owns this ListPublicGists choreography.
     * @return GitHub_GistsAPI_Gists_ListPublicGists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/ListPublicGists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListPublicGists choreography.
     *
     * @param GitHub_GistsAPI_Gists_ListPublicGists_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListPublicGists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_ListPublicGists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPublicGists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_ListPublicGists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPublicGists choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListPublicGists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListPublicGists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPublicGists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Page input for this ListPublicGists choreography.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the ListPublicGists choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListPublicGists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPublicGists choreography.
     *
     * @param Temboo_Session $session The session that owns this ListPublicGists execution.
     * @param GitHub_GistsAPI_Gists_ListPublicGists $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Gists_ListPublicGists_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListPublicGists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_ListPublicGists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPublicGists execution.
     *
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Results New results object.
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
     * Wraps results in appopriate results class for this ListPublicGists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_ListPublicGists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListPublicGists choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListPublicGists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListPublicGists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListPublicGists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListPublicGists execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "LastPage" output from this ListPublicGists execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListPublicGists execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "NextPage" output from this ListPublicGists execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListPublicGists execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a list of public repositories for the specified user.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListUserRepos extends Temboo_Choreography
{
    /**
     * Retrieves a list of public repositories for the specified user.
     *
     * @param Temboo_Session $session The session that owns this ListUserRepos choreography.
     * @return GitHub_ReposAPI_Repos_ListUserRepos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListUserRepos/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListUserRepos choreography.
     *
     * @param GitHub_ReposAPI_Repos_ListUserRepos_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListUserRepos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListUserRepos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListUserRepos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListUserRepos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListUserRepos choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListUserRepos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListUserRepos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListUserRepos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Direction input for this ListUserRepos choreography.
     *
     * @param string $value (optional, string) Valid values are asc or desc. Default behavior is desc unless sorting by full_name in which case, the direction is asc.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function setDirection($value)
    {
        return $this->set('Direction', $value);
    }

    /**
     * Set the value for the Page input for this ListUserRepos choreography.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Sort input for this ListUserRepos choreography.
     *
     * @param string $value (optional, string) The sort order of the results. Valid values are: created, updated, pushed, or full_name (the default).
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the Type input for this ListUserRepos choreography.
     *
     * @param string $value (optional, string) The type of repos to return. Valid values are: all (the default), owner, public, or member.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the User input for this ListUserRepos choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListUserRepos choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListUserRepos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListUserRepos choreography.
     *
     * @param Temboo_Session $session The session that owns this ListUserRepos execution.
     * @param GitHub_ReposAPI_Repos_ListUserRepos $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Repos_ListUserRepos_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListUserRepos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListUserRepos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListUserRepos execution.
     *
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Results New results object.
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
     * Wraps results in appopriate results class for this ListUserRepos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListUserRepos_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListUserRepos choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListUserRepos_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListUserRepos choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListUserRepos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListUserRepos execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "LastPage" output from this ListUserRepos execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListUserRepos execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "NextPage" output from this ListUserRepos execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListUserRepos execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Unstars a gist using a specified gist id.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_UnstarGist extends Temboo_Choreography
{
    /**
     * Unstars a gist using a specified gist id.
     *
     * @param Temboo_Session $session The session that owns this UnstarGist choreography.
     * @return GitHub_GistsAPI_Gists_UnstarGist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/UnstarGist/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UnstarGist choreography.
     *
     * @param GitHub_GistsAPI_Gists_UnstarGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_UnstarGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_UnstarGist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UnstarGist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_UnstarGist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UnstarGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_UnstarGist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UnstarGist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UnstarGist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UnstarGist choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this UnstarGist choreography.
     *
     * @param string $value (required, string) The id for the gist you want to unstar.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the UnstarGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_UnstarGist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UnstarGist choreography.
     *
     * @param Temboo_Session $session The session that owns this UnstarGist execution.
     * @param GitHub_GistsAPI_Gists_UnstarGist $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Gists_UnstarGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_UnstarGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_UnstarGist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UnstarGist execution.
     *
     * @return GitHub_GistsAPI_Gists_UnstarGist_Results New results object.
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
     * Wraps results in appopriate results class for this UnstarGist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_UnstarGist_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UnstarGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_UnstarGist_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UnstarGist choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_UnstarGist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UnstarGist execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this UnstarGist execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this UnstarGist execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Stars a gist using a specified gist id.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_StarGist extends Temboo_Choreography
{
    /**
     * Stars a gist using a specified gist id.
     *
     * @param Temboo_Session $session The session that owns this StarGist choreography.
     * @return GitHub_GistsAPI_Gists_StarGist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/StarGist/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this StarGist choreography.
     *
     * @param GitHub_GistsAPI_Gists_StarGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_StarGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_StarGist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_StarGist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StarGist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_StarGist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_StarGist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StarGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_StarGist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the StarGist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_StarGist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StarGist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_StarGist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_StarGist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this StarGist choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Gists_StarGist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this StarGist choreography.
     *
     * @param string $value (required, string) The id for the gist you want to star.
     * @return GitHub_GistsAPI_Gists_StarGist_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the StarGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_StarGist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StarGist choreography.
     *
     * @param Temboo_Session $session The session that owns this StarGist execution.
     * @param GitHub_GistsAPI_Gists_StarGist $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Gists_StarGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_StarGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_StarGist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_StarGist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StarGist execution.
     *
     * @return GitHub_GistsAPI_Gists_StarGist_Results New results object.
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
     * Wraps results in appopriate results class for this StarGist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_StarGist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_StarGist_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the StarGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_StarGist_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the StarGist choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_StarGist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this StarGist execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this StarGist execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this StarGist execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a list of teams for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTeams extends Temboo_Choreography
{
    /**
     * Retrieves a list of teams for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListTeams choreography.
     * @return GitHub_ReposAPI_Repos_ListTeams New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListTeams/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListTeams choreography.
     *
     * @param GitHub_ReposAPI_Repos_ListTeams_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListTeams_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListTeams_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListTeams_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTeams choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListTeams_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTeams choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTeams_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListTeams choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTeams input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListTeams choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListTeams choreography.
     *
     * @param string $value (required, string) The name of the repo to list teams for.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListTeams choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_ListTeams_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListTeams choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTeams_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTeams choreography.
     *
     * @param Temboo_Session $session The session that owns this ListTeams execution.
     * @param GitHub_ReposAPI_Repos_ListTeams $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Repos_ListTeams_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListTeams_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListTeams_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListTeams $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTeams execution.
     *
     * @return GitHub_ReposAPI_Repos_ListTeams_Results New results object.
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
     * Wraps results in appopriate results class for this ListTeams execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListTeams_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListTeams_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListTeams choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTeams_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListTeams choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListTeams_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListTeams execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListTeams execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListTeams execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * List all issues for a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListIssuesForRepo extends Temboo_Choreography
{
    /**
     * List all issues for a specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListIssuesForRepo choreography.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/IssuesAPI/Issues/ListIssuesForRepo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListIssuesForRepo choreography.
     *
     * @param GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs|array $inputs (optional) Inputs as GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_IssuesAPI_Issues_ListIssuesForRepo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListIssuesForRepo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListIssuesForRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListIssuesForRepo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListIssuesForRepo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListIssuesForRepo choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Assignee input for this ListIssuesForRepo choreography.
     *
     * @param string $value (required, string) Can be set to a username, "none" for issues with no assinged user, or * for issues with any assigned user.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setAssignee($value)
    {
        return $this->set('Assignee', $value);
    }

    /**
     * Set the value for the Direction input for this ListIssuesForRepo choreography.
     *
     * @param string $value (optional, string) The direction of the sort order. Valid values are: asc or desc (the default).
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setDirection($value)
    {
        return $this->set('Direction', $value);
    }

    /**
     * Set the value for the Labels input for this ListIssuesForRepo choreography.
     *
     * @param string $value (optional, string) A comma separated list of label names (i.e. bug, ui, etc).
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setLabels($value)
    {
        return $this->set('Labels', $value);
    }

    /**
     * Set the value for the Mentioned input for this ListIssuesForRepo choreography.
     *
     * @param string $value (optional, string) A Github username that is mentioned.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setMentioned($value)
    {
        return $this->set('Mentioned', $value);
    }

    /**
     * Set the value for the Milestone input for this ListIssuesForRepo choreography.
     *
     * @param string $value (required, string) Can be set to a milestone number, "none" for issues with no milestone, or * for issues with any milestone.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setMilestone($value)
    {
        return $this->set('Milestone', $value);
    }

    /**
     * Set the value for the Page input for this ListIssuesForRepo choreography.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Repo input for this ListIssuesForRepo choreography.
     *
     * @param string $value (required, string) The name of the repo.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the Since input for this ListIssuesForRepo choreography.
     *
     * @param string $value (optional, date) A timestamp in ISO 8601 format (YYYY-MM-DDTHH:MM:SSZ). Returns issues since this date.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the Sort input for this ListIssuesForRepo choreography.
     *
     * @param string $value (optional, string) Indicates how the issues will be sorted in the response. Valid sort options are: created (the default), updated, comments.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the State input for this ListIssuesForRepo choreography.
     *
     * @param string $value (optional, string) Returns issues with a particular state: open (the default) or closed.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the User input for this ListIssuesForRepo choreography.
     *
     * @param string $value (required, string) A GitHub username.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListIssuesForRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListIssuesForRepo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListIssuesForRepo choreography.
     *
     * @param Temboo_Session $session The session that owns this ListIssuesForRepo execution.
     * @param GitHub_IssuesAPI_Issues_ListIssuesForRepo $choreo The choregraphy object for this execution.
     * @param GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs|array $inputs (optional) Inputs as GitHub_IssuesAPI_Issues_ListIssuesForRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_IssuesAPI_Issues_ListIssuesForRepo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListIssuesForRepo execution.
     *
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Results New results object.
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
     * Wraps results in appopriate results class for this ListIssuesForRepo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_IssuesAPI_Issues_ListIssuesForRepo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListIssuesForRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListIssuesForRepo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListIssuesForRepo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_IssuesAPI_Issues_ListIssuesForRepo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListIssuesForRepo execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "LastPage" output from this ListIssuesForRepo execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListIssuesForRepo execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "NextPage" output from this ListIssuesForRepo execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListIssuesForRepo execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Deletes a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_DeleteRepo extends Temboo_Choreography
{
    /**
     * Deletes a specified repository.
     *
     * @param Temboo_Session $session The session that owns this DeleteRepo choreography.
     * @return GitHub_ReposAPI_Repos_DeleteRepo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/DeleteRepo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteRepo choreography.
     *
     * @param GitHub_ReposAPI_Repos_DeleteRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_DeleteRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_DeleteRepo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteRepo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_DeleteRepo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_DeleteRepo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteRepo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteRepo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteRepo choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this DeleteRepo choreography.
     *
     * @param string $value (required, string) The name of the repo to delete.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this DeleteRepo choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the DeleteRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_DeleteRepo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteRepo choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteRepo execution.
     * @param GitHub_ReposAPI_Repos_DeleteRepo $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Repos_DeleteRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_DeleteRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_DeleteRepo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteRepo execution.
     *
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteRepo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_DeleteRepo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_DeleteRepo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteRepo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_DeleteRepo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteRepo execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this DeleteRepo execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this DeleteRepo execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Creates a comment on a specified commit.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_CreateCommitComment extends Temboo_Choreography
{
    /**
     * Creates a comment on a specified commit.
     *
     * @param Temboo_Session $session The session that owns this CreateCommitComment choreography.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Comments/CreateCommitComment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateCommitComment choreography.
     *
     * @param GitHub_ReposAPI_Comments_CreateCommitComment_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_CreateCommitComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Comments_CreateCommitComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateCommitComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Comments_CreateCommitComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateCommitComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_CreateCommitComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateCommitComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateCommitComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateCommitComment choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Body input for this CreateCommitComment choreography.
     *
     * @param string $value (required, string) The comment text.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the Line input for this CreateCommitComment choreography.
     *
     * @param int $value (required, integer) The line number in the file to comment on.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setLine($value)
    {
        return $this->set('Line', $value);
    }

    /**
     * Set the value for the Path input for this CreateCommitComment choreography.
     *
     * @param string $value (required, string) The relative path of the file to comment on.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Position input for this CreateCommitComment choreography.
     *
     * @param int $value (required, integer) The line index in the diff to comment on.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setPosition($value)
    {
        return $this->set('Position', $value);
    }

    /**
     * Set the value for the Repo input for this CreateCommitComment choreography.
     *
     * @param string $value (required, string) The name of the repo that the comment is associated with.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this CreateCommitComment choreography.
     *
     * @param string $value (required, string) The SHA or id of the commit.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this CreateCommitComment choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the CreateCommitComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_CreateCommitComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateCommitComment choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateCommitComment execution.
     * @param GitHub_ReposAPI_Comments_CreateCommitComment $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Comments_CreateCommitComment_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_CreateCommitComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Comments_CreateCommitComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateCommitComment execution.
     *
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Results New results object.
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
     * Wraps results in appopriate results class for this CreateCommitComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Comments_CreateCommitComment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateCommitComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_CreateCommitComment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateCommitComment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_CreateCommitComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateCommitComment execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this CreateCommitComment execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this CreateCommitComment execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a single comment.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_GetComment extends Temboo_Choreography
{
    /**
     * Retrieves a single comment.
     *
     * @param Temboo_Session $session The session that owns this GetComment choreography.
     * @return GitHub_GistsAPI_Comments_GetComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Comments/GetComment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetComment choreography.
     *
     * @param GitHub_GistsAPI_Comments_GetComment_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_GetComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_GetComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Comments_GetComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_GetComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Comments_GetComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_GetComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_GetComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Comments_GetComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Comments_GetComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ID input for this GetComment choreography.
     *
     * @param string $value (required, string) The id of the comment to retrieve.
     * @return GitHub_GistsAPI_Comments_GetComment_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the GetComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_GetComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetComment choreography.
     *
     * @param Temboo_Session $session The session that owns this GetComment execution.
     * @param GitHub_GistsAPI_Comments_GetComment $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Comments_GetComment_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_GetComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_GetComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Comments_GetComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetComment execution.
     *
     * @return GitHub_GistsAPI_Comments_GetComment_Results New results object.
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
     * Wraps results in appopriate results class for this GetComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_GetComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Comments_GetComment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_GetComment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetComment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_GetComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetComment execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetComment execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetComment execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves an individual reference on the system, including things like notes and statshes if they exist on the server.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetReference extends Temboo_Choreography
{
    /**
     * Retrieves an individual reference on the system, including things like notes and statshes if they exist on the server.
     *
     * @param Temboo_Session $session The session that owns this GetReference choreography.
     * @return GitHub_GitDataAPI_References_GetReference New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/References/GetReference/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetReference choreography.
     *
     * @param GitHub_GitDataAPI_References_GetReference_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_GetReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_GetReference_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_References_GetReference_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReference choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_References_GetReference_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReference choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetReference_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetReference choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReference input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetReference choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Ref input for this GetReference choreography.
     *
     * @param string $value (required, string) The reference to retrieve. Must be formatted as refs/heads/branch. Refs can be retrieved by running the GetAllReferences and parsing the value for "ref".
     * @return GitHub_GitDataAPI_References_GetReference_Inputs For method chaining.
     */
    public function setRef($value)
    {
        return $this->set('Ref', $value);
    }

    /**
     * Set the value for the Repo input for this GetReference choreography.
     *
     * @param string $value (required, string) The name of the repo associated with the references to retrieve.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetReference choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_References_GetReference_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetReference choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetReference_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReference choreography.
     *
     * @param Temboo_Session $session The session that owns this GetReference execution.
     * @param GitHub_GitDataAPI_References_GetReference $choreo The choregraphy object for this execution.
     * @param GitHub_GitDataAPI_References_GetReference_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_GetReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_GetReference_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_References_GetReference $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReference execution.
     *
     * @return GitHub_GitDataAPI_References_GetReference_Results New results object.
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
     * Wraps results in appopriate results class for this GetReference execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_GetReference_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_References_GetReference_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetReference choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetReference_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetReference choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_GetReference_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetReference execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetReference execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetReference execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Checks whether or not a gist is starred.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CheckGist extends Temboo_Choreography
{
    /**
     * Checks whether or not a gist is starred.
     *
     * @param Temboo_Session $session The session that owns this CheckGist choreography.
     * @return GitHub_GistsAPI_Gists_CheckGist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/CheckGist/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CheckGist choreography.
     *
     * @param GitHub_GistsAPI_Gists_CheckGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_CheckGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_CheckGist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_CheckGist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CheckGist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_CheckGist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_CheckGist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CheckGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CheckGist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CheckGist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_CheckGist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CheckGist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_CheckGist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_CheckGist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CheckGist choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Gists_CheckGist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this CheckGist choreography.
     *
     * @param string $value (required, string) The id for the gist you want to check.
     * @return GitHub_GistsAPI_Gists_CheckGist_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the CheckGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CheckGist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CheckGist choreography.
     *
     * @param Temboo_Session $session The session that owns this CheckGist execution.
     * @param GitHub_GistsAPI_Gists_CheckGist $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Gists_CheckGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_CheckGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_CheckGist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_CheckGist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CheckGist execution.
     *
     * @return GitHub_GistsAPI_Gists_CheckGist_Results New results object.
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
     * Wraps results in appopriate results class for this CheckGist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_CheckGist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_CheckGist_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CheckGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CheckGist_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CheckGist choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_CheckGist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CheckGist execution.
     *
     * @return string (string) A boolean flag that indicates whether or not the gist is starred.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this CheckGist execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this CheckGist execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves information for a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetRepo extends Temboo_Choreography
{
    /**
     * Retrieves information for a specified repository.
     *
     * @param Temboo_Session $session The session that owns this GetRepo choreography.
     * @return GitHub_ReposAPI_Repos_GetRepo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/GetRepo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRepo choreography.
     *
     * @param GitHub_ReposAPI_Repos_GetRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_GetRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_GetRepo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_GetRepo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRepo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_GetRepo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetRepo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRepo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRepo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetRepo choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this GetRepo choreography.
     *
     * @param string $value (required, string) The name of the repo to retrieve.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetRepo choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_GetRepo_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetRepo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRepo choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRepo execution.
     * @param GitHub_ReposAPI_Repos_GetRepo $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Repos_GetRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_GetRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_GetRepo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_GetRepo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRepo execution.
     *
     * @return GitHub_ReposAPI_Repos_GetRepo_Results New results object.
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
     * Wraps results in appopriate results class for this GetRepo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_GetRepo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_GetRepo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetRepo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRepo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_GetRepo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRepo execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetRepo execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetRepo execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Returns an individual gist with a given id.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_GetGist extends Temboo_Choreography
{
    /**
     * Returns an individual gist with a given id.
     *
     * @param Temboo_Session $session The session that owns this GetGist choreography.
     * @return GitHub_GistsAPI_Gists_GetGist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/GetGist/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetGist choreography.
     *
     * @param GitHub_GistsAPI_Gists_GetGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_GetGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_GetGist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_GetGist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetGist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_GetGist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_GetGist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_GetGist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetGist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_GetGist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetGist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_GetGist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_GetGist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetGist choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_GistsAPI_Gists_GetGist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this GetGist choreography.
     *
     * @param string $value (required, string) The id for the gist you want to retrieve.
     * @return GitHub_GistsAPI_Gists_GetGist_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the GetGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_GetGist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetGist choreography.
     *
     * @param Temboo_Session $session The session that owns this GetGist execution.
     * @param GitHub_GistsAPI_Gists_GetGist $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Gists_GetGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_GetGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_GetGist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_GetGist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetGist execution.
     *
     * @return GitHub_GistsAPI_Gists_GetGist_Results New results object.
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
     * Wraps results in appopriate results class for this GetGist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_GetGist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_GetGist_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_GetGist_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetGist choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_GetGist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetGist execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetGist execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetGist execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Creates a tag object.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_CreateTag extends Temboo_Choreography
{
    /**
     * Creates a tag object.
     *
     * @param Temboo_Session $session The session that owns this CreateTag choreography.
     * @return GitHub_GitDataAPI_Tags_CreateTag New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/Tags/CreateTag/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateTag choreography.
     *
     * @param GitHub_GitDataAPI_Tags_CreateTag_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_Tags_CreateTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_Tags_CreateTag_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateTag choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_Tags_CreateTag_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateTag choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_CreateTag_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateTag choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateTag input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateTag choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Message input for this CreateTag choreography.
     *
     * @param string $value (required, string) The tag message.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the Object input for this CreateTag choreography.
     *
     * @param string $value (required, string) The SHA of the git object that is being tagged.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setObject($value)
    {
        return $this->set('Object', $value);
    }

    /**
     * Set the value for the Repo input for this CreateTag choreography.
     *
     * @param string $value (required, string) The name of the repo associated with the tag being created.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the Tag input for this CreateTag choreography.
     *
     * @param string $value (required, string) A string to use for the tag (i.e. v0.0.1).
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }

    /**
     * Set the value for the TaggerDate input for this CreateTag choreography.
     *
     * @param string $value (required, date) A timestamp of when the object is tagged. Should be formatted like: 2011-06-17T14:53:35-07:00.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setTaggerDate($value)
    {
        return $this->set('TaggerDate', $value);
    }

    /**
     * Set the value for the TaggerEmail input for this CreateTag choreography.
     *
     * @param string $value (required, string) The email of the author of the tag.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setTaggerEmail($value)
    {
        return $this->set('TaggerEmail', $value);
    }

    /**
     * Set the value for the TaggerName input for this CreateTag choreography.
     *
     * @param string $value (required, string) The name of the author of the tag.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setTaggerName($value)
    {
        return $this->set('TaggerName', $value);
    }

    /**
     * Set the value for the Type input for this CreateTag choreography.
     *
     * @param string $value (required, string) The type of object that is being tagged. Valid values are: commit, tree, or blob.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the User input for this CreateTag choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the CreateTag choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_CreateTag_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateTag choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateTag execution.
     * @param GitHub_GitDataAPI_Tags_CreateTag $choreo The choregraphy object for this execution.
     * @param GitHub_GitDataAPI_Tags_CreateTag_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_Tags_CreateTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_Tags_CreateTag $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateTag execution.
     *
     * @return GitHub_GitDataAPI_Tags_CreateTag_Results New results object.
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
     * Wraps results in appopriate results class for this CreateTag execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_Tags_CreateTag_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateTag choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_CreateTag_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateTag choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_Tags_CreateTag_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateTag execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this CreateTag execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this CreateTag execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a list of languages for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListLanguages extends Temboo_Choreography
{
    /**
     * Retrieves a list of languages for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListLanguages choreography.
     * @return GitHub_ReposAPI_Repos_ListLanguages New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListLanguages/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListLanguages choreography.
     *
     * @param GitHub_ReposAPI_Repos_ListLanguages_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListLanguages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListLanguages_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListLanguages choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListLanguages_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListLanguages choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListLanguages_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListLanguages choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListLanguages input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListLanguages choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListLanguages choreography.
     *
     * @param string $value (required, string) The name of the repo to list languages for.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListLanguages choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListLanguages choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListLanguages_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListLanguages choreography.
     *
     * @param Temboo_Session $session The session that owns this ListLanguages execution.
     * @param GitHub_ReposAPI_Repos_ListLanguages $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Repos_ListLanguages_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListLanguages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListLanguages $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListLanguages execution.
     *
     * @return GitHub_ReposAPI_Repos_ListLanguages_Results New results object.
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
     * Wraps results in appopriate results class for this ListLanguages execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListLanguages_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListLanguages choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListLanguages_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListLanguages choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListLanguages_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListLanguages execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListLanguages execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListLanguages execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a list of repositories for the authenticated user.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListYourRepos extends Temboo_Choreography
{
    /**
     * Retrieves a list of repositories for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this ListYourRepos choreography.
     * @return GitHub_ReposAPI_Repos_ListYourRepos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListYourRepos/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListYourRepos choreography.
     *
     * @param GitHub_ReposAPI_Repos_ListYourRepos_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListYourRepos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListYourRepos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListYourRepos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListYourRepos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListYourRepos choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListYourRepos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListYourRepos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListYourRepos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListYourRepos choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Direction input for this ListYourRepos choreography.
     *
     * @param string $value (optional, string) Valid values are asc or desc. Default behavior is desc unless sorting by full_name in which case, the direction is asc.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function setDirection($value)
    {
        return $this->set('Direction', $value);
    }

    /**
     * Set the value for the Page input for this ListYourRepos choreography.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Sort input for this ListYourRepos choreography.
     *
     * @param string $value (optional, string) The sort order of the results. Valid values are: created, updated, pushed, or full_name (the default).
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the Type input for this ListYourRepos choreography.
     *
     * @param string $value (optional, string) The type of repos to return. Valid values are: all (the default), owner, public, private, or member.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the ListYourRepos choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListYourRepos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListYourRepos choreography.
     *
     * @param Temboo_Session $session The session that owns this ListYourRepos execution.
     * @param GitHub_ReposAPI_Repos_ListYourRepos $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Repos_ListYourRepos_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListYourRepos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListYourRepos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListYourRepos execution.
     *
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Results New results object.
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
     * Wraps results in appopriate results class for this ListYourRepos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListYourRepos_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListYourRepos choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListYourRepos_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListYourRepos choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListYourRepos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListYourRepos execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "LastPage" output from this ListYourRepos execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListYourRepos execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "NextPage" output from this ListYourRepos execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListYourRepos execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Returns a list of gists for a given user.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsByUser extends Temboo_Choreography
{
    /**
     * Returns a list of gists for a given user.
     *
     * @param Temboo_Session $session The session that owns this ListGistsByUser choreography.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/ListGistsByUser/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListGistsByUser choreography.
     *
     * @param GitHub_GistsAPI_Gists_ListGistsByUser_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListGistsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_ListGistsByUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListGistsByUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_ListGistsByUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListGistsByUser choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsByUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListGistsByUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListGistsByUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListGistsByUser choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Page input for this ListGistsByUser choreography.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the User input for this ListGistsByUser choreography.
     *
     * @param string $value (required, string) The username for which you want to retrieve a list of gists.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListGistsByUser choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsByUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListGistsByUser choreography.
     *
     * @param Temboo_Session $session The session that owns this ListGistsByUser execution.
     * @param GitHub_GistsAPI_Gists_ListGistsByUser $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Gists_ListGistsByUser_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListGistsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_ListGistsByUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListGistsByUser execution.
     *
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Results New results object.
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
     * Wraps results in appopriate results class for this ListGistsByUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_ListGistsByUser_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListGistsByUser choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsByUser_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListGistsByUser choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsByUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListGistsByUser execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "LastPage" output from this ListGistsByUser execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListGistsByUser execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "NextPage" output from this ListGistsByUser execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListGistsByUser execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves the README file for a repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetReadMe extends Temboo_Choreography
{
    /**
     * Retrieves the README file for a repository.
     *
     * @param Temboo_Session $session The session that owns this GetReadMe choreography.
     * @return GitHub_ReposAPI_Contents_GetReadMe New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Contents/GetReadMe/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetReadMe choreography.
     *
     * @param GitHub_ReposAPI_Contents_GetReadMe_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Contents_GetReadMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Contents_GetReadMe_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetReadMe choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Contents_GetReadMe_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetReadMe choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetReadMe_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetReadMe choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetReadMe input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetReadMe choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Ref input for this GetReadMe choreography.
     *
     * @param string $value (optional, string) The name of the commit, branch, or tag. Defaults to "master".
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs For method chaining.
     */
    public function setRef($value)
    {
        return $this->set('Ref', $value);
    }

    /**
     * Set the value for the Repo input for this GetReadMe choreography.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetReadMe choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetReadMe choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetReadMe_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetReadMe choreography.
     *
     * @param Temboo_Session $session The session that owns this GetReadMe execution.
     * @param GitHub_ReposAPI_Contents_GetReadMe $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Contents_GetReadMe_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Contents_GetReadMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Contents_GetReadMe $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetReadMe execution.
     *
     * @return GitHub_ReposAPI_Contents_GetReadMe_Results New results object.
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
     * Wraps results in appopriate results class for this GetReadMe execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Contents_GetReadMe_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetReadMe choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetReadMe_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetReadMe choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Contents_GetReadMe_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetReadMe execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetReadMe execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetReadMe execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Deletes a specified reference.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_DeleteReference extends Temboo_Choreography
{
    /**
     * Deletes a specified reference.
     *
     * @param Temboo_Session $session The session that owns this DeleteReference choreography.
     * @return GitHub_GitDataAPI_References_DeleteReference New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/References/DeleteReference/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteReference choreography.
     *
     * @param GitHub_GitDataAPI_References_DeleteReference_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_DeleteReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_DeleteReference_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_References_DeleteReference_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteReference choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_References_DeleteReference_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteReference choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_DeleteReference_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteReference choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteReference input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteReference choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Ref input for this DeleteReference choreography.
     *
     * @param string $value (required, string) The name of the fully qualified reference to delete. Must be formatted as refs/heads/branch. Refs can be retrieved by running the GetAllReferences and parsing the value for "ref".
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs For method chaining.
     */
    public function setRef($value)
    {
        return $this->set('Ref', $value);
    }

    /**
     * Set the value for the Repo input for this DeleteReference choreography.
     *
     * @param string $value (required, string) The name of the repo associated with the reference that's being deleted.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this DeleteReference choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_References_DeleteReference_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the DeleteReference choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_DeleteReference_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteReference choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteReference execution.
     * @param GitHub_GitDataAPI_References_DeleteReference $choreo The choregraphy object for this execution.
     * @param GitHub_GitDataAPI_References_DeleteReference_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_DeleteReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_DeleteReference_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_References_DeleteReference $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteReference execution.
     *
     * @return GitHub_GitDataAPI_References_DeleteReference_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteReference execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_DeleteReference_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_References_DeleteReference_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteReference choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_DeleteReference_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteReference choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_DeleteReference_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteReference execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this DeleteReference execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this DeleteReference execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Creates a reference on the system.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_CreateReference extends Temboo_Choreography
{
    /**
     * Creates a reference on the system.
     *
     * @param Temboo_Session $session The session that owns this CreateReference choreography.
     * @return GitHub_GitDataAPI_References_CreateReference New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/References/CreateReference/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateReference choreography.
     *
     * @param GitHub_GitDataAPI_References_CreateReference_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_CreateReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_CreateReference_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_References_CreateReference_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateReference choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_References_CreateReference_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateReference choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_CreateReference_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateReference choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateReference input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateReference choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Ref input for this CreateReference choreography.
     *
     * @param string $value (required, string) The name of the fully qualified reference. Must be formatted as refs/heads/branch. Refs can be retrieved by running the GetAllReferences and parsing the value for "ref".
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function setRef($value)
    {
        return $this->set('Ref', $value);
    }

    /**
     * Set the value for the Repo input for this CreateReference choreography.
     *
     * @param string $value (required, string) The name of the repo associated with the reference being created.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this CreateReference choreography.
     *
     * @param string $value (required, string) The SHA1 value to set this reference to.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this CreateReference choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_References_CreateReference_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the CreateReference choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_CreateReference_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateReference choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateReference execution.
     * @param GitHub_GitDataAPI_References_CreateReference $choreo The choregraphy object for this execution.
     * @param GitHub_GitDataAPI_References_CreateReference_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_CreateReference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_CreateReference_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_References_CreateReference $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateReference execution.
     *
     * @return GitHub_GitDataAPI_References_CreateReference_Results New results object.
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
     * Wraps results in appopriate results class for this CreateReference execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_CreateReference_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_References_CreateReference_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateReference choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_CreateReference_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateReference choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_CreateReference_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateReference execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this CreateReference execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this CreateReference execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves an individual commit.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_GetCommit extends Temboo_Choreography
{
    /**
     * Retrieves an individual commit.
     *
     * @param Temboo_Session $session The session that owns this GetCommit choreography.
     * @return GitHub_ReposAPI_Commits_GetCommit New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Commits/GetCommit/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCommit choreography.
     *
     * @param GitHub_ReposAPI_Commits_GetCommit_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Commits_GetCommit_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Commits_GetCommit_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Commits_GetCommit_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCommit choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Commits_GetCommit_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCommit choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_GetCommit_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCommit choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCommit input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCommit choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this GetCommit choreography.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this GetCommit choreography.
     *
     * @param string $value (required, string) The SHA of the commit to return.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this GetCommit choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetCommit choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_GetCommit_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCommit choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCommit execution.
     * @param GitHub_ReposAPI_Commits_GetCommit $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Commits_GetCommit_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Commits_GetCommit_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Commits_GetCommit_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Commits_GetCommit $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCommit execution.
     *
     * @return GitHub_ReposAPI_Commits_GetCommit_Results New results object.
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
     * Wraps results in appopriate results class for this GetCommit execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Commits_GetCommit_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Commits_GetCommit_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCommit choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_GetCommit_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCommit choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Commits_GetCommit_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCommit execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetCommit execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetCommit execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a comparison between two commits.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_CompareCommits extends Temboo_Choreography
{
    /**
     * Retrieves a comparison between two commits.
     *
     * @param Temboo_Session $session The session that owns this CompareCommits choreography.
     * @return GitHub_ReposAPI_Commits_CompareCommits New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Commits/CompareCommits/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CompareCommits choreography.
     *
     * @param GitHub_ReposAPI_Commits_CompareCommits_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Commits_CompareCommits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Commits_CompareCommits_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompareCommits choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Commits_CompareCommits_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompareCommits choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_CompareCommits_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CompareCommits choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompareCommits input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CompareCommits choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Base input for this CompareCommits choreography.
     *
     * @param string $value (required, string) The base commit (i.e. "master").
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function setBase($value)
    {
        return $this->set('Base', $value);
    }

    /**
     * Set the value for the Head input for this CompareCommits choreography.
     *
     * @param string $value (required, string) The head commit.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function setHead($value)
    {
        return $this->set('Head', $value);
    }

    /**
     * Set the value for the Repo input for this CompareCommits choreography.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this CompareCommits choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the CompareCommits choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_CompareCommits_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompareCommits choreography.
     *
     * @param Temboo_Session $session The session that owns this CompareCommits execution.
     * @param GitHub_ReposAPI_Commits_CompareCommits $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Commits_CompareCommits_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Commits_CompareCommits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Commits_CompareCommits $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompareCommits execution.
     *
     * @return GitHub_ReposAPI_Commits_CompareCommits_Results New results object.
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
     * Wraps results in appopriate results class for this CompareCommits execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Commits_CompareCommits_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CompareCommits choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_CompareCommits_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CompareCommits choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Commits_CompareCommits_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CompareCommits execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this CompareCommits execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this CompareCommits execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Creates a new repository for the authenticated user.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_CreateRepo extends Temboo_Choreography
{
    /**
     * Creates a new repository for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this CreateRepo choreography.
     * @return GitHub_ReposAPI_Repos_CreateRepo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/CreateRepo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateRepo choreography.
     *
     * @param GitHub_ReposAPI_Repos_CreateRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_CreateRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_CreateRepo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateRepo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_CreateRepo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_CreateRepo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateRepo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateRepo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateRepo choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Description input for this CreateRepo choreography.
     *
     * @param string $value (optional, string) A text description for the repo.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the HasDownloads input for this CreateRepo choreography.
     *
     * @param bool $value (optional, boolean) Se to "true" to enable downloads for this repository. Defaults to "true".
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setHasDownloads($value)
    {
        return $this->set('HasDownloads', $value);
    }

    /**
     * Set the value for the HasIssues input for this CreateRepo choreography.
     *
     * @param bool $value (optional, boolean) Set to "true" to enable issues for this repository. Defaults to "true."
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setHasIssues($value)
    {
        return $this->set('HasIssues', $value);
    }

    /**
     * Set the value for the HasWiki input for this CreateRepo choreography.
     *
     * @param bool $value (optional, boolean) Set to "true" to enable the wiki for this repository. Defaults to "true".
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setHasWiki($value)
    {
        return $this->set('HasWiki', $value);
    }

    /**
     * Set the value for the Homepage input for this CreateRepo choreography.
     *
     * @param string $value (optional, string) A homepage link.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setHomepage($value)
    {
        return $this->set('Homepage', $value);
    }

    /**
     * Set the value for the Name input for this CreateRepo choreography.
     *
     * @param string $value (required, string) The name of the repo being created.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Private input for this CreateRepo choreography.
     *
     * @param bool $value (optional, boolean) A flag indicating the the repo is private or public. Set to "true" to create a private repository. Defaults to "false".
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setPrivate($value)
    {
        return $this->set('Private', $value);
    }

    /**
     * Set the value for the TeamID input for this CreateRepo choreography.
     *
     * @param int $value (optional, integer) The id of the team that will be granted access to this repository. Only valid when creating a repo in an organization.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Inputs For method chaining.
     */
    public function setTeamID($value)
    {
        return $this->set('TeamID', $value);
    }
}


/**
 * Execution object for the CreateRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_CreateRepo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateRepo choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateRepo execution.
     * @param GitHub_ReposAPI_Repos_CreateRepo $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Repos_CreateRepo_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_CreateRepo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_CreateRepo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateRepo execution.
     *
     * @return GitHub_ReposAPI_Repos_CreateRepo_Results New results object.
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
     * Wraps results in appopriate results class for this CreateRepo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_CreateRepo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateRepo choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_CreateRepo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateRepo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_CreateRepo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateRepo execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this CreateRepo execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this CreateRepo execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves an array of all the references on the system, including things like notes and stashes if they exist on the server.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetAllReferences extends Temboo_Choreography
{
    /**
     * Retrieves an array of all the references on the system, including things like notes and stashes if they exist on the server.
     *
     * @param Temboo_Session $session The session that owns this GetAllReferences choreography.
     * @return GitHub_GitDataAPI_References_GetAllReferences New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/References/GetAllReferences/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAllReferences choreography.
     *
     * @param GitHub_GitDataAPI_References_GetAllReferences_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_GetAllReferences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_References_GetAllReferences_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllReferences choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_References_GetAllReferences_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllReferences choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetAllReferences_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAllReferences choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllReferences input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetAllReferences choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this GetAllReferences choreography.
     *
     * @param string $value (required, string) The name of the repo associated with the references to retrieve.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetAllReferences choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetAllReferences choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetAllReferences_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllReferences choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAllReferences execution.
     * @param GitHub_GitDataAPI_References_GetAllReferences $choreo The choregraphy object for this execution.
     * @param GitHub_GitDataAPI_References_GetAllReferences_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_References_GetAllReferences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_References_GetAllReferences $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllReferences execution.
     *
     * @return GitHub_GitDataAPI_References_GetAllReferences_Results New results object.
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
     * Wraps results in appopriate results class for this GetAllReferences execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_References_GetAllReferences_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAllReferences choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_References_GetAllReferences_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAllReferences choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_References_GetAllReferences_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAllReferences execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetAllReferences execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetAllReferences execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Returns a list of starred gists for the authenticated user.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListStarredGists extends Temboo_Choreography
{
    /**
     * Returns a list of starred gists for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this ListStarredGists choreography.
     * @return GitHub_GistsAPI_Gists_ListStarredGists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/ListStarredGists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListStarredGists choreography.
     *
     * @param GitHub_GistsAPI_Gists_ListStarredGists_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListStarredGists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_ListStarredGists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListStarredGists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_ListStarredGists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListStarredGists choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListStarredGists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListStarredGists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListStarredGists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListStarredGists choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Page input for this ListStarredGists choreography.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the ListStarredGists choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListStarredGists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListStarredGists choreography.
     *
     * @param Temboo_Session $session The session that owns this ListStarredGists execution.
     * @param GitHub_GistsAPI_Gists_ListStarredGists $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Gists_ListStarredGists_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListStarredGists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_ListStarredGists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListStarredGists execution.
     *
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Results New results object.
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
     * Wraps results in appopriate results class for this ListStarredGists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_ListStarredGists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListStarredGists choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListStarredGists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListStarredGists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListStarredGists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListStarredGists execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "LastPage" output from this ListStarredGists execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListStarredGists execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "NextPage" output from this ListStarredGists execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListStarredGists execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves information for a specified branch.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetBranch extends Temboo_Choreography
{
    /**
     * Retrieves information for a specified branch.
     *
     * @param Temboo_Session $session The session that owns this GetBranch choreography.
     * @return GitHub_ReposAPI_Repos_GetBranch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/GetBranch/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBranch choreography.
     *
     * @param GitHub_ReposAPI_Repos_GetBranch_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_GetBranch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_GetBranch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_GetBranch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBranch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_GetBranch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBranch choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetBranch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBranch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBranch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetBranch choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Branch input for this GetBranch choreography.
     *
     * @param string $value (required, string) The name of the branch to retrieve.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs For method chaining.
     */
    public function setBranch($value)
    {
        return $this->set('Branch', $value);
    }

    /**
     * Set the value for the Repo input for this GetBranch choreography.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetBranch choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_GetBranch_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetBranch choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetBranch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBranch choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBranch execution.
     * @param GitHub_ReposAPI_Repos_GetBranch $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Repos_GetBranch_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_GetBranch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_GetBranch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_GetBranch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBranch execution.
     *
     * @return GitHub_ReposAPI_Repos_GetBranch_Results New results object.
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
     * Wraps results in appopriate results class for this GetBranch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_GetBranch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_GetBranch_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBranch choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_GetBranch_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBranch choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_GetBranch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBranch execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetBranch execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetBranch execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Returns a list of gists for the authenticated user or if called anonymously, return all public gists.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser extends Temboo_Choreography
{
    /**
     * Returns a list of gists for the authenticated user or if called anonymously, return all public gists.
     *
     * @param Temboo_Session $session The session that owns this ListGistsForAuthenticatedUser choreography.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/ListGistsForAuthenticatedUser/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListGistsForAuthenticatedUser choreography.
     *
     * @param GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListGistsForAuthenticatedUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListGistsForAuthenticatedUser choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListGistsForAuthenticatedUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListGistsForAuthenticatedUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListGistsForAuthenticatedUser choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. If not provided, all public gists are returned.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Page input for this ListGistsForAuthenticatedUser choreography.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the ListGistsForAuthenticatedUser choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListGistsForAuthenticatedUser choreography.
     *
     * @param Temboo_Session $session The session that owns this ListGistsForAuthenticatedUser execution.
     * @param GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListGistsForAuthenticatedUser execution.
     *
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Results New results object.
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
     * Wraps results in appopriate results class for this ListGistsForAuthenticatedUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListGistsForAuthenticatedUser choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListGistsForAuthenticatedUser choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_ListGistsForAuthenticatedUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListGistsForAuthenticatedUser execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "LastPage" output from this ListGistsForAuthenticatedUser execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListGistsForAuthenticatedUser execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "NextPage" output from this ListGistsForAuthenticatedUser execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListGistsForAuthenticatedUser execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Adds a collaborator to a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_AddCollaborator extends Temboo_Choreography
{
    /**
     * Adds a collaborator to a specified repository.
     *
     * @param Temboo_Session $session The session that owns this AddCollaborator choreography.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Collaborators/AddCollaborator/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddCollaborator choreography.
     *
     * @param GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Collaborators_AddCollaborator_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddCollaborator choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddCollaborator choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddCollaborator choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddCollaborator input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AddCollaborator choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Collaborator input for this AddCollaborator choreography.
     *
     * @param string $value (required, string) The username of the collaborator to check.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs For method chaining.
     */
    public function setCollaborator($value)
    {
        return $this->set('Collaborator', $value);
    }

    /**
     * Set the value for the Repo input for this AddCollaborator choreography.
     *
     * @param string $value (required, string) The name of the repo to add a collaborator to.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this AddCollaborator choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the AddCollaborator choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_AddCollaborator_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddCollaborator choreography.
     *
     * @param Temboo_Session $session The session that owns this AddCollaborator execution.
     * @param GitHub_ReposAPI_Collaborators_AddCollaborator $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_AddCollaborator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Collaborators_AddCollaborator $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddCollaborator execution.
     *
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Results New results object.
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
     * Wraps results in appopriate results class for this AddCollaborator execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Collaborators_AddCollaborator_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddCollaborator choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_AddCollaborator_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddCollaborator choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_AddCollaborator_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddCollaborator execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this AddCollaborator execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this AddCollaborator execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a list of comments for a single commit.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommitComments extends Temboo_Choreography
{
    /**
     * Retrieves a list of comments for a single commit.
     *
     * @param Temboo_Session $session The session that owns this ListCommitComments choreography.
     * @return GitHub_ReposAPI_Comments_ListCommitComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Comments/ListCommitComments/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListCommitComments choreography.
     *
     * @param GitHub_ReposAPI_Comments_ListCommitComments_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_ListCommitComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Comments_ListCommitComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCommitComments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Comments_ListCommitComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCommitComments choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommitComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListCommitComments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCommitComments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListCommitComments choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListCommitComments choreography.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this ListCommitComments choreography.
     *
     * @param string $value (required, string) The SHA of the commit.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this ListCommitComments choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListCommitComments choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommitComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCommitComments choreography.
     *
     * @param Temboo_Session $session The session that owns this ListCommitComments execution.
     * @param GitHub_ReposAPI_Comments_ListCommitComments $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Comments_ListCommitComments_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_ListCommitComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Comments_ListCommitComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCommitComments execution.
     *
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Results New results object.
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
     * Wraps results in appopriate results class for this ListCommitComments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Comments_ListCommitComments_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListCommitComments choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_ListCommitComments_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListCommitComments choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_ListCommitComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListCommitComments execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListCommitComments execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListCommitComments execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieces a list of repositories for the specified organization.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListReposByOrg extends Temboo_Choreography
{
    /**
     * Retrieces a list of repositories for the specified organization.
     *
     * @param Temboo_Session $session The session that owns this ListReposByOrg choreography.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListReposByOrg/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListReposByOrg choreography.
     *
     * @param GitHub_ReposAPI_Repos_ListReposByOrg_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListReposByOrg_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListReposByOrg_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListReposByOrg choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListReposByOrg_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListReposByOrg choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListReposByOrg_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListReposByOrg choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListReposByOrg input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListReposByOrg choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Org input for this ListReposByOrg choreography.
     *
     * @param string $value (required, string) The name of the organization.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs For method chaining.
     */
    public function setOrg($value)
    {
        return $this->set('Org', $value);
    }

    /**
     * Set the value for the Page input for this ListReposByOrg choreography.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Type input for this ListReposByOrg choreography.
     *
     * @param string $value (optional, string) The type of repos to return. Valid values are: all (the default), public, member, or private.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the ListReposByOrg choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListReposByOrg_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListReposByOrg choreography.
     *
     * @param Temboo_Session $session The session that owns this ListReposByOrg execution.
     * @param GitHub_ReposAPI_Repos_ListReposByOrg $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Repos_ListReposByOrg_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListReposByOrg_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListReposByOrg $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListReposByOrg execution.
     *
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Results New results object.
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
     * Wraps results in appopriate results class for this ListReposByOrg execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListReposByOrg_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListReposByOrg choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListReposByOrg_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListReposByOrg choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListReposByOrg_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListReposByOrg execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "LastPage" output from this ListReposByOrg execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListReposByOrg execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "NextPage" output from this ListReposByOrg execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListReposByOrg execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a specified commit from a repo.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Commits_GetCommit extends Temboo_Choreography
{
    /**
     * Retrieves a specified commit from a repo.
     *
     * @param Temboo_Session $session The session that owns this GetCommit choreography.
     * @return GitHub_GitDataAPI_Commits_GetCommit New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/Commits/GetCommit/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCommit choreography.
     *
     * @param GitHub_GitDataAPI_Commits_GetCommit_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_Commits_GetCommit_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_Commits_GetCommit_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCommit choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_Commits_GetCommit_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCommit choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Commits_GetCommit_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCommit choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCommit input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCommit choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this GetCommit choreography.
     *
     * @param string $value (required, string) The repo associated with the commit.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this GetCommit choreography.
     *
     * @param string $value (required, string) The unique commit SHA associated with the commit to retrieve.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this GetCommit choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetCommit choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Commits_GetCommit_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCommit choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCommit execution.
     * @param GitHub_GitDataAPI_Commits_GetCommit $choreo The choregraphy object for this execution.
     * @param GitHub_GitDataAPI_Commits_GetCommit_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_Commits_GetCommit_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_Commits_GetCommit $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCommit execution.
     *
     * @return GitHub_GitDataAPI_Commits_GetCommit_Results New results object.
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
     * Wraps results in appopriate results class for this GetCommit execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_Commits_GetCommit_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCommit choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Commits_GetCommit_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCommit choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_Commits_GetCommit_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCommit execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetCommit execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetCommit execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a specified tag object.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_GetTag extends Temboo_Choreography
{
    /**
     * Retrieves a specified tag object.
     *
     * @param Temboo_Session $session The session that owns this GetTag choreography.
     * @return GitHub_GitDataAPI_Tags_GetTag New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GitDataAPI/Tags/GetTag/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTag choreography.
     *
     * @param GitHub_GitDataAPI_Tags_GetTag_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_Tags_GetTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_Tags_GetTag_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GitDataAPI_Tags_GetTag_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTag choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GitDataAPI_Tags_GetTag_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTag choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_GetTag_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTag choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTag input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetTag choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this GetTag choreography.
     *
     * @param string $value (required, string) The name of the repo associated with the tag to retrieve.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this GetTag choreography.
     *
     * @param string $value (required, string) The SHA associated with the tag to retrieve.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this GetTag choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_GitDataAPI_Tags_GetTag_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTag choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_GetTag_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTag choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTag execution.
     * @param GitHub_GitDataAPI_Tags_GetTag $choreo The choregraphy object for this execution.
     * @param GitHub_GitDataAPI_Tags_GetTag_Inputs|array $inputs (optional) Inputs as GitHub_GitDataAPI_Tags_GetTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GitDataAPI_Tags_GetTag_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GitDataAPI_Tags_GetTag $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTag execution.
     *
     * @return GitHub_GitDataAPI_Tags_GetTag_Results New results object.
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
     * Wraps results in appopriate results class for this GetTag execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GitDataAPI_Tags_GetTag_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GitDataAPI_Tags_GetTag_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTag choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GitDataAPI_Tags_GetTag_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTag choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GitDataAPI_Tags_GetTag_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTag execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetTag execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetTag execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Removes a collaborator from a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_RemoveCollaborator extends Temboo_Choreography
{
    /**
     * Removes a collaborator from a specified repository.
     *
     * @param Temboo_Session $session The session that owns this RemoveCollaborator choreography.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Collaborators/RemoveCollaborator/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RemoveCollaborator choreography.
     *
     * @param GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Collaborators_RemoveCollaborator_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RemoveCollaborator choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RemoveCollaborator choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RemoveCollaborator choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs New instance.
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
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RemoveCollaborator choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Collaborator input for this RemoveCollaborator choreography.
     *
     * @param string $value (required, string) The username of the collaborator to remove.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs For method chaining.
     */
    public function setCollaborator($value)
    {
        return $this->set('Collaborator', $value);
    }

    /**
     * Set the value for the Repo input for this RemoveCollaborator choreography.
     *
     * @param string $value (required, string) The name of the repo that the collaborator will be removed from.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this RemoveCollaborator choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the RemoveCollaborator choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_RemoveCollaborator_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RemoveCollaborator choreography.
     *
     * @param Temboo_Session $session The session that owns this RemoveCollaborator execution.
     * @param GitHub_ReposAPI_Collaborators_RemoveCollaborator $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_RemoveCollaborator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Collaborators_RemoveCollaborator $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RemoveCollaborator execution.
     *
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Results New results object.
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
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Collaborators_RemoveCollaborator_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RemoveCollaborator choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_RemoveCollaborator_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RemoveCollaborator choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_RemoveCollaborator_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RemoveCollaborator execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this RemoveCollaborator execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this RemoveCollaborator execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves comments for a specified gist.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_ListComments extends Temboo_Choreography
{
    /**
     * Retrieves comments for a specified gist.
     *
     * @param Temboo_Session $session The session that owns this ListComments choreography.
     * @return GitHub_GistsAPI_Comments_ListComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Comments/ListComments/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListComments choreography.
     *
     * @param GitHub_GistsAPI_Comments_ListComments_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_ListComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_ListComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Comments_ListComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListComments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_ListComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Comments_ListComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListComments choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_ListComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListComments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_ListComments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListComments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Comments_ListComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Comments_ListComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ID input for this ListComments choreography.
     *
     * @param string $value (required, string) The id of the gist to fetch comments for.
     * @return GitHub_GistsAPI_Comments_ListComments_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Page input for this ListComments choreography.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_GistsAPI_Comments_ListComments_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the ListComments choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_ListComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListComments choreography.
     *
     * @param Temboo_Session $session The session that owns this ListComments execution.
     * @param GitHub_GistsAPI_Comments_ListComments $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Comments_ListComments_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_ListComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_ListComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Comments_ListComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListComments execution.
     *
     * @return GitHub_GistsAPI_Comments_ListComments_Results New results object.
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
     * Wraps results in appopriate results class for this ListComments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_ListComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Comments_ListComments_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListComments choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_ListComments_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListComments choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_ListComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListComments execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "LastPage" output from this ListComments execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListComments execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "NextPage" output from this ListComments execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListComments execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Creates a gist.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CreateGist extends Temboo_Choreography
{
    /**
     * Creates a gist.
     *
     * @param Temboo_Session $session The session that owns this CreateGist choreography.
     * @return GitHub_GistsAPI_Gists_CreateGist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/CreateGist/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateGist choreography.
     *
     * @param GitHub_GistsAPI_Gists_CreateGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_CreateGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_CreateGist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_CreateGist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateGist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_CreateGist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CreateGist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateGist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateGist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateGist choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Description input for this CreateGist choreography.
     *
     * @param string $value (optional, string) The description for this gist.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the FileContents input for this CreateGist choreography.
     *
     * @param string $value (required, string) The file contents of the gist.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the FileName input for this CreateGist choreography.
     *
     * @param string $value (required, string) The file name of the gist (i.e. myProject.py).
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the Public input for this CreateGist choreography.
     *
     * @param bool $value (required, boolean) Indicates whether or not the gist is public or private.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setPublic($value)
    {
        return $this->set('Public', $value);
    }

    /**
     * Set the value for the User input for this CreateGist choreography.
     *
     * @param string $value (required, string) The user who is creating the gist.
     * @return GitHub_GistsAPI_Gists_CreateGist_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the CreateGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CreateGist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateGist choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateGist execution.
     * @param GitHub_GistsAPI_Gists_CreateGist $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Gists_CreateGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_CreateGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_CreateGist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_CreateGist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateGist execution.
     *
     * @return GitHub_GistsAPI_Gists_CreateGist_Results New results object.
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
     * Wraps results in appopriate results class for this CreateGist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_CreateGist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_CreateGist_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_CreateGist_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateGist choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_CreateGist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateGist execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this CreateGist execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this CreateGist execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Lists all issues associated with the provided access token.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListYourIssues extends Temboo_Choreography
{
    /**
     * Lists all issues associated with the provided access token.
     *
     * @param Temboo_Session $session The session that owns this ListYourIssues choreography.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/IssuesAPI/Issues/ListYourIssues/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListYourIssues choreography.
     *
     * @param GitHub_IssuesAPI_Issues_ListYourIssues_Inputs|array $inputs (optional) Inputs as GitHub_IssuesAPI_Issues_ListYourIssues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_IssuesAPI_Issues_ListYourIssues_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListYourIssues choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_IssuesAPI_Issues_ListYourIssues_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListYourIssues choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListYourIssues_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListYourIssues choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListYourIssues input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListYourIssues choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Direction input for this ListYourIssues choreography.
     *
     * @param string $value (optional, string) The direction of the sort order. Valid values are: asc or desc (the default).
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setDirection($value)
    {
        return $this->set('Direction', $value);
    }

    /**
     * Set the value for the Filter input for this ListYourIssues choreography.
     *
     * @param string $value (optional, string) Filters issues using one of the following strings: assigned (the default), created, mentioned, subscribed.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Labels input for this ListYourIssues choreography.
     *
     * @param string $value (optional, string) A comma separated list of label names (i.e. bug, ui, etc).
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setLabels($value)
    {
        return $this->set('Labels', $value);
    }

    /**
     * Set the value for the Page input for this ListYourIssues choreography.
     *
     * @param int $value (optional, integer) Indicates the page index that you want to retrieve. This is used to page through many results. Defaults to 1.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Since input for this ListYourIssues choreography.
     *
     * @param string $value (optional, date) A timestamp in ISO 8601 format (YYYY-MM-DDTHH:MM:SSZ). Returns issues since this date.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the Sort input for this ListYourIssues choreography.
     *
     * @param string $value (optional, string) Indicates how the issues will be sorted in the response. Valid sort options are: created (the default), updated, comments.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the State input for this ListYourIssues choreography.
     *
     * @param string $value (optional, string) Returns issues with a particular state: open (the default) or closed.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the ListYourIssues choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListYourIssues_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListYourIssues choreography.
     *
     * @param Temboo_Session $session The session that owns this ListYourIssues execution.
     * @param GitHub_IssuesAPI_Issues_ListYourIssues $choreo The choregraphy object for this execution.
     * @param GitHub_IssuesAPI_Issues_ListYourIssues_Inputs|array $inputs (optional) Inputs as GitHub_IssuesAPI_Issues_ListYourIssues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_IssuesAPI_Issues_ListYourIssues $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListYourIssues execution.
     *
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Results New results object.
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
     * Wraps results in appopriate results class for this ListYourIssues execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_IssuesAPI_Issues_ListYourIssues_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListYourIssues choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_IssuesAPI_Issues_ListYourIssues_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListYourIssues choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_IssuesAPI_Issues_ListYourIssues_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListYourIssues execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "LastPage" output from this ListYourIssues execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the last available page.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLastPage()
    {
        return $this->get('LastPage');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListYourIssues execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "NextPage" output from this ListYourIssues execution.
     *
     * @return int (integer) If multiple pages are available for the response, this contains the next page that you should retrieve.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextPage()
    {
        return $this->get('NextPage');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListYourIssues execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a list of tags for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTags extends Temboo_Choreography
{
    /**
     * Retrieves a list of tags for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListTags choreography.
     * @return GitHub_ReposAPI_Repos_ListTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListTags choreography.
     *
     * @param GitHub_ReposAPI_Repos_ListTags_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTags choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListTags choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListTags choreography.
     *
     * @param string $value (required, string) The name of the repo to list tags for.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListTags choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_ListTags_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListTags choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTags choreography.
     *
     * @param Temboo_Session $session The session that owns this ListTags execution.
     * @param GitHub_ReposAPI_Repos_ListTags $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Repos_ListTags_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTags execution.
     *
     * @return GitHub_ReposAPI_Repos_ListTags_Results New results object.
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
     * Wraps results in appopriate results class for this ListTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListTags choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListTags execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListTags execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListTags execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Returns a tarball or zipball archive for a repository. 
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetContents extends Temboo_Choreography
{
    /**
     * Returns a tarball or zipball archive for a repository. 
     *
     * @param Temboo_Session $session The session that owns this GetContents choreography.
     * @return GitHub_ReposAPI_Contents_GetContents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Contents/GetContents/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetContents choreography.
     *
     * @param GitHub_ReposAPI_Contents_GetContents_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Contents_GetContents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Contents_GetContents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Contents_GetContents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetContents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Contents_GetContents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetContents choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetContents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetContents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetContents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetContents choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ArchiveFormat input for this GetContents choreography.
     *
     * @param string $value (required, string) Either tarball or zipball. Defaults to "tarball".
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function setArchiveFormat($value)
    {
        return $this->set('ArchiveFormat', $value);
    }

    /**
     * Set the value for the Ref input for this GetContents choreography.
     *
     * @param string $value (optional, string) A valid Git reference. Defaults to "master".
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function setRef($value)
    {
        return $this->set('Ref', $value);
    }

    /**
     * Set the value for the Repo input for this GetContents choreography.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this GetContents choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Contents_GetContents_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetContents choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetContents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetContents choreography.
     *
     * @param Temboo_Session $session The session that owns this GetContents execution.
     * @param GitHub_ReposAPI_Contents_GetContents $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Contents_GetContents_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Contents_GetContents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Contents_GetContents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Contents_GetContents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetContents execution.
     *
     * @return GitHub_ReposAPI_Contents_GetContents_Results New results object.
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
     * Wraps results in appopriate results class for this GetContents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Contents_GetContents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Contents_GetContents_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetContents choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Contents_GetContents_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetContents choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Contents_GetContents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetContents execution.
     *
     * @return string (string) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of collaborators for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_ListCollaborators extends Temboo_Choreography
{
    /**
     * Retrieves a list of collaborators for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListCollaborators choreography.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Collaborators/ListCollaborators/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListCollaborators choreography.
     *
     * @param GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Collaborators_ListCollaborators_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCollaborators choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCollaborators choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListCollaborators choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs New instance.
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
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListCollaborators choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this ListCollaborators choreography.
     *
     * @param string $value (required, string) The name of the repo that has the collaborators to retrieve.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListCollaborators choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListCollaborators choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_ListCollaborators_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCollaborators choreography.
     *
     * @param Temboo_Session $session The session that owns this ListCollaborators execution.
     * @param GitHub_ReposAPI_Collaborators_ListCollaborators $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Collaborators_ListCollaborators_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Collaborators_ListCollaborators $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCollaborators execution.
     *
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Results New results object.
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
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Collaborators_ListCollaborators_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListCollaborators choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Collaborators_ListCollaborators_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListCollaborators choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Collaborators_ListCollaborators_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListCollaborators execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListCollaborators execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListCollaborators execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Lists commits for a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_ListCommits extends Temboo_Choreography
{
    /**
     * Lists commits for a specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListCommits choreography.
     * @return GitHub_ReposAPI_Commits_ListCommits New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Commits/ListCommits/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListCommits choreography.
     *
     * @param GitHub_ReposAPI_Commits_ListCommits_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Commits_ListCommits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Commits_ListCommits_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Commits_ListCommits_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCommits choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Commits_ListCommits_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCommits choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_ListCommits_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListCommits choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCommits input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListCommits choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Path input for this ListCommits choreography.
     *
     * @param string $value (optional, string) Returns only commits containing this file path.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Repo input for this ListCommits choreography.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the SHA input for this ListCommits choreography.
     *
     * @param string $value (optional, string) The SHA or branch to start listing commits from.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function setSHA($value)
    {
        return $this->set('SHA', $value);
    }

    /**
     * Set the value for the User input for this ListCommits choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Commits_ListCommits_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListCommits choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_ListCommits_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCommits choreography.
     *
     * @param Temboo_Session $session The session that owns this ListCommits execution.
     * @param GitHub_ReposAPI_Commits_ListCommits $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Commits_ListCommits_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Commits_ListCommits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Commits_ListCommits_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Commits_ListCommits $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCommits execution.
     *
     * @return GitHub_ReposAPI_Commits_ListCommits_Results New results object.
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
     * Wraps results in appopriate results class for this ListCommits execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Commits_ListCommits_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Commits_ListCommits_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListCommits choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Commits_ListCommits_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListCommits choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Commits_ListCommits_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListCommits execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListCommits execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListCommits execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Deletes a specified comment.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_DeleteComment extends Temboo_Choreography
{
    /**
     * Deletes a specified comment.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment choreography.
     * @return GitHub_GistsAPI_Comments_DeleteComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Comments/DeleteComment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteComment choreography.
     *
     * @param GitHub_GistsAPI_Comments_DeleteComment_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Comments_DeleteComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Comments_DeleteComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_DeleteComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteComment choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this DeleteComment choreography.
     *
     * @param string $value (required, string) The id of the comment to delete.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the DeleteComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_DeleteComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteComment choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment execution.
     * @param GitHub_GistsAPI_Comments_DeleteComment $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Comments_DeleteComment_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Comments_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Comments_DeleteComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteComment execution.
     *
     * @return GitHub_GistsAPI_Comments_DeleteComment_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Comments_DeleteComment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Comments_DeleteComment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteComment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Comments_DeleteComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteComment execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this DeleteComment execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this DeleteComment execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Deletes a specified gist.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_DeleteGist extends Temboo_Choreography
{
    /**
     * Deletes a specified gist.
     *
     * @param Temboo_Session $session The session that owns this DeleteGist choreography.
     * @return GitHub_GistsAPI_Gists_DeleteGist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/GistsAPI/Gists/DeleteGist/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteGist choreography.
     *
     * @param GitHub_GistsAPI_Gists_DeleteGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_DeleteGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_GistsAPI_Gists_DeleteGist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteGist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_GistsAPI_Gists_DeleteGist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_DeleteGist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteGist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteGist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteGist choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this DeleteGist choreography.
     *
     * @param string $value (required, string) The id for the gist you want to delete.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the DeleteGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_DeleteGist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteGist choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteGist execution.
     * @param GitHub_GistsAPI_Gists_DeleteGist $choreo The choregraphy object for this execution.
     * @param GitHub_GistsAPI_Gists_DeleteGist_Inputs|array $inputs (optional) Inputs as GitHub_GistsAPI_Gists_DeleteGist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_GistsAPI_Gists_DeleteGist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteGist execution.
     *
     * @return GitHub_GistsAPI_Gists_DeleteGist_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteGist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_GistsAPI_Gists_DeleteGist_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteGist choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_GistsAPI_Gists_DeleteGist_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteGist choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_GistsAPI_Gists_DeleteGist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteGist execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this DeleteGist execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this DeleteGist execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves a list of contributors for the specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListContributors extends Temboo_Choreography
{
    /**
     * Retrieves a list of contributors for the specified repository.
     *
     * @param Temboo_Session $session The session that owns this ListContributors choreography.
     * @return GitHub_ReposAPI_Repos_ListContributors New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Repos/ListContributors/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListContributors choreography.
     *
     * @param GitHub_ReposAPI_Repos_ListContributors_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListContributors_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListContributors_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Repos_ListContributors_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListContributors choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Repos_ListContributors_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListContributors choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListContributors_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListContributors choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListContributors input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListContributors choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Anonymous input for this ListContributors choreography.
     *
     * @param bool $value (optional, boolean) Flag indicating that the response should include anonymous contributors. Set to 1 or true to include anonymous contributors.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs For method chaining.
     */
    public function setAnonymous($value)
    {
        return $this->set('Anonymous', $value);
    }

    /**
     * Set the value for the Repo input for this ListContributors choreography.
     *
     * @param string $value (required, string) The name of the repo that has the contributors to retrieve.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this ListContributors choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Repos_ListContributors_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the ListContributors choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListContributors_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListContributors choreography.
     *
     * @param Temboo_Session $session The session that owns this ListContributors execution.
     * @param GitHub_ReposAPI_Repos_ListContributors $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Repos_ListContributors_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Repos_ListContributors_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Repos_ListContributors_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Repos_ListContributors $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListContributors execution.
     *
     * @return GitHub_ReposAPI_Repos_ListContributors_Results New results object.
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
     * Wraps results in appopriate results class for this ListContributors execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListContributors_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Repos_ListContributors_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListContributors choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Repos_ListContributors_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListContributors choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Repos_ListContributors_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListContributors execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this ListContributors execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this ListContributors execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Retrieves forks for a specified repository.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_GetForks extends Temboo_Choreography
{
    /**
     * Retrieves forks for a specified repository.
     *
     * @param Temboo_Session $session The session that owns this GetForks choreography.
     * @return GitHub_ReposAPI_Forks_GetForks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Forks/GetForks/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetForks choreography.
     *
     * @param GitHub_ReposAPI_Forks_GetForks_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Forks_GetForks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Forks_GetForks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Forks_GetForks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetForks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Forks_GetForks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetForks choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_GetForks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetForks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetForks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetForks choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process. Required when accessing a protected resource.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Repo input for this GetForks choreography.
     *
     * @param string $value (required, string) The name of the repository.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the Sort input for this GetForks choreography.
     *
     * @param string $value (optional, string) Valid values are: newest, oldest, or watchers. Default is "newest".
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the User input for this GetForks choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Forks_GetForks_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetForks choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_GetForks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetForks choreography.
     *
     * @param Temboo_Session $session The session that owns this GetForks execution.
     * @param GitHub_ReposAPI_Forks_GetForks $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Forks_GetForks_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Forks_GetForks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Forks_GetForks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Forks_GetForks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetForks execution.
     *
     * @return GitHub_ReposAPI_Forks_GetForks_Results New results object.
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
     * Wraps results in appopriate results class for this GetForks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Forks_GetForks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Forks_GetForks_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetForks choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Forks_GetForks_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetForks choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Forks_GetForks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetForks execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this GetForks execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this GetForks execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

/**
 * Deletes a specified commit comment.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_DeleteCommitComment extends Temboo_Choreography
{
    /**
     * Deletes a specified commit comment.
     *
     * @param Temboo_Session $session The session that owns this DeleteCommitComment choreography.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GitHub/ReposAPI/Comments/DeleteCommitComment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteCommitComment choreography.
     *
     * @param GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GitHub_ReposAPI_Comments_DeleteCommitComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteCommitComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteCommitComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteCommitComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteCommitComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteCommitComment choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this DeleteCommitComment choreography.
     *
     * @param string $value (required, string) The comment id.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Repo input for this DeleteCommitComment choreography.
     *
     * @param string $value (required, string) The name of the repo that the comment is associated with.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs For method chaining.
     */
    public function setRepo($value)
    {
        return $this->set('Repo', $value);
    }

    /**
     * Set the value for the User input for this DeleteCommitComment choreography.
     *
     * @param string $value (required, string) The GitHub username.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the DeleteCommitComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_DeleteCommitComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteCommitComment choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteCommitComment execution.
     * @param GitHub_ReposAPI_Comments_DeleteCommitComment $choreo The choregraphy object for this execution.
     * @param GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs|array $inputs (optional) Inputs as GitHub_ReposAPI_Comments_DeleteCommitComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GitHub_ReposAPI_Comments_DeleteCommitComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteCommitComment execution.
     *
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteCommitComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GitHub_ReposAPI_Comments_DeleteCommitComment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteCommitComment choreography.
 *
 * @package Temboo
 * @subpackage GitHub
 */
class GitHub_ReposAPI_Comments_DeleteCommitComment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteCommitComment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GitHub_ReposAPI_Comments_DeleteCommitComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteCommitComment execution.
     *
     * @return string (json) The response from GitHub.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Limit" output from this DeleteCommitComment execution.
     *
     * @return int (integer) The available rate limit for your account. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLimit()
    {
        return $this->get('Limit');
    }

    /**
     * Retrieve the value for the "Remaining" output from this DeleteCommitComment execution.
     *
     * @return int (integer) The remaining number of API requests available to you. This is returned in the GitHub response header.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRemaining()
    {
        return $this->get('Remaining');
    }
}

?>