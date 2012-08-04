<?php

/**
 * Temboo PHP SDK Facebook classes
 *
 * Execute Choreographies from the Temboo Facebook bundle.
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
 * @subpackage Facebook
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieves a list of uploaded videos associated with a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_VideoUploads extends Temboo_Choreography
{
    /**
     * Retrieves a list of uploaded videos associated with a specified user.
     *
     * @param Temboo_Session $session The session that owns this VideoUploads choreography.
     * @return Facebook_VideoUploads New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/VideoUploads/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this VideoUploads choreography.
     *
     * @param Facebook_VideoUploads_Inputs|array $inputs (optional) Inputs as Facebook_VideoUploads_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_VideoUploads_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_VideoUploads_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VideoUploads choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_VideoUploads_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_VideoUploads_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VideoUploads choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_VideoUploads_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the VideoUploads choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_VideoUploads_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VideoUploads input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_VideoUploads_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_VideoUploads_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this VideoUploads choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_VideoUploads_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this VideoUploads choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_VideoUploads_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VideoUploads choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_VideoUploads_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the VideoUploads choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_VideoUploads_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VideoUploads choreography.
     *
     * @param Temboo_Session $session The session that owns this VideoUploads execution.
     * @param Facebook_VideoUploads $choreo The choregraphy object for this execution.
     * @param Facebook_VideoUploads_Inputs|array $inputs (optional) Inputs as Facebook_VideoUploads_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_VideoUploads_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_VideoUploads $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VideoUploads execution.
     *
     * @return Facebook_VideoUploads_Results New results object.
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
     * Wraps results in appopriate results class for this VideoUploads execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_VideoUploads_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_VideoUploads_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the VideoUploads choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_VideoUploads_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the VideoUploads choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_VideoUploads_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this VideoUploads execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves movies associated with a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Movies extends Temboo_Choreography
{
    /**
     * Retrieves movies associated with a specified user.
     *
     * @param Temboo_Session $session The session that owns this Movies choreography.
     * @return Facebook_Movies New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/Movies/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Movies choreography.
     *
     * @param Facebook_Movies_Inputs|array $inputs (optional) Inputs as Facebook_Movies_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Movies_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_Movies_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Movies choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Movies_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_Movies_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Movies choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Movies_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Movies choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Movies_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Movies input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_Movies_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_Movies_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Movies choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_Movies_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this Movies choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_Movies_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Movies choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_Movies_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Movies choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Movies_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Movies choreography.
     *
     * @param Temboo_Session $session The session that owns this Movies execution.
     * @param Facebook_Movies $choreo The choregraphy object for this execution.
     * @param Facebook_Movies_Inputs|array $inputs (optional) Inputs as Facebook_Movies_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Movies_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_Movies $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Movies execution.
     *
     * @return Facebook_Movies_Results New results object.
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
     * Wraps results in appopriate results class for this Movies execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_Movies_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_Movies_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Movies choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Movies_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Movies choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_Movies_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Movies execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to leave a comment on a specified Graph API object.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_CommentCreate extends Temboo_Choreography
{
    /**
     * Allows a user to leave a comment on a specified Graph API object.
     *
     * @param Temboo_Session $session The session that owns this CommentCreate choreography.
     * @return Facebook_CommentCreate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/CommentCreate/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CommentCreate choreography.
     *
     * @param Facebook_CommentCreate_Inputs|array $inputs (optional) Inputs as Facebook_CommentCreate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_CommentCreate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_CommentCreate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommentCreate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_CommentCreate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_CommentCreate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommentCreate choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_CommentCreate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CommentCreate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_CommentCreate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommentCreate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_CommentCreate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_CommentCreate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CommentCreate choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_CommentCreate_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Message input for this CommentCreate choreography.
     *
     * @param string $value (required, string) The comment text.
     * @return Facebook_CommentCreate_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the ObjectID input for this CommentCreate choreography.
     *
     * @param int $value (required, integer) The id of a graph api object that you like.
     * @return Facebook_CommentCreate_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CommentCreate choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_CommentCreate_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CommentCreate choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_CommentCreate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommentCreate choreography.
     *
     * @param Temboo_Session $session The session that owns this CommentCreate execution.
     * @param Facebook_CommentCreate $choreo The choregraphy object for this execution.
     * @param Facebook_CommentCreate_Inputs|array $inputs (optional) Inputs as Facebook_CommentCreate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_CommentCreate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_CommentCreate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommentCreate execution.
     *
     * @return Facebook_CommentCreate_Results New results object.
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
     * Wraps results in appopriate results class for this CommentCreate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_CommentCreate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_CommentCreate_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CommentCreate choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_CommentCreate_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CommentCreate choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_CommentCreate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CommentCreate execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of checkins associated with a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Checkins extends Temboo_Choreography
{
    /**
     * Retrieves a list of checkins associated with a specified user.
     *
     * @param Temboo_Session $session The session that owns this Checkins choreography.
     * @return Facebook_Checkins New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/Checkins/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Checkins choreography.
     *
     * @param Facebook_Checkins_Inputs|array $inputs (optional) Inputs as Facebook_Checkins_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Checkins_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_Checkins_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Checkins choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Checkins_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_Checkins_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Checkins choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Checkins_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Checkins choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Checkins_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Checkins input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_Checkins_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_Checkins_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Checkins choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_Checkins_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this Checkins choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_Checkins_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Checkins choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_Checkins_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Checkins choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Checkins_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Checkins choreography.
     *
     * @param Temboo_Session $session The session that owns this Checkins execution.
     * @param Facebook_Checkins $choreo The choregraphy object for this execution.
     * @param Facebook_Checkins_Inputs|array $inputs (optional) Inputs as Facebook_Checkins_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Checkins_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_Checkins $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Checkins execution.
     *
     * @return Facebook_Checkins_Results New results object.
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
     * Wraps results in appopriate results class for this Checkins execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_Checkins_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_Checkins_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Checkins choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Checkins_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Checkins choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_Checkins_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Checkins execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves music associated with a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Music extends Temboo_Choreography
{
    /**
     * Retrieves music associated with a specified user.
     *
     * @param Temboo_Session $session The session that owns this Music choreography.
     * @return Facebook_Music New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/Music/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Music choreography.
     *
     * @param Facebook_Music_Inputs|array $inputs (optional) Inputs as Facebook_Music_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Music_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_Music_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Music choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Music_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_Music_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Music choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Music_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Music choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Music_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Music input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_Music_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_Music_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Music choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_Music_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this Music choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_Music_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Music choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_Music_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Music choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Music_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Music choreography.
     *
     * @param Temboo_Session $session The session that owns this Music execution.
     * @param Facebook_Music $choreo The choregraphy object for this execution.
     * @param Facebook_Music_Inputs|array $inputs (optional) Inputs as Facebook_Music_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Music_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_Music $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Music execution.
     *
     * @return Facebook_Music_Results New results object.
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
     * Wraps results in appopriate results class for this Music execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_Music_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_Music_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Music choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Music_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Music choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_Music_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Music execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of photo albums associated with a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_PhotoAlbums extends Temboo_Choreography
{
    /**
     * Retrieves a list of photo albums associated with a specified user.
     *
     * @param Temboo_Session $session The session that owns this PhotoAlbums choreography.
     * @return Facebook_PhotoAlbums New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/PhotoAlbums/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PhotoAlbums choreography.
     *
     * @param Facebook_PhotoAlbums_Inputs|array $inputs (optional) Inputs as Facebook_PhotoAlbums_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_PhotoAlbums_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_PhotoAlbums_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PhotoAlbums choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_PhotoAlbums_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_PhotoAlbums_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PhotoAlbums choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_PhotoAlbums_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PhotoAlbums choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_PhotoAlbums_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PhotoAlbums input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_PhotoAlbums_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_PhotoAlbums_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this PhotoAlbums choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_PhotoAlbums_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this PhotoAlbums choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_PhotoAlbums_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PhotoAlbums choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_PhotoAlbums_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PhotoAlbums choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_PhotoAlbums_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PhotoAlbums choreography.
     *
     * @param Temboo_Session $session The session that owns this PhotoAlbums execution.
     * @param Facebook_PhotoAlbums $choreo The choregraphy object for this execution.
     * @param Facebook_PhotoAlbums_Inputs|array $inputs (optional) Inputs as Facebook_PhotoAlbums_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_PhotoAlbums_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_PhotoAlbums $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PhotoAlbums execution.
     *
     * @return Facebook_PhotoAlbums_Results New results object.
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
     * Wraps results in appopriate results class for this PhotoAlbums execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_PhotoAlbums_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_PhotoAlbums_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PhotoAlbums choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_PhotoAlbums_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PhotoAlbums choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_PhotoAlbums_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this PhotoAlbums execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves likes for a specified Graph API object.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_GetLikesForObject extends Temboo_Choreography
{
    /**
     * Retrieves likes for a specified Graph API object.
     *
     * @param Temboo_Session $session The session that owns this GetLikesForObject choreography.
     * @return Facebook_GetLikesForObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/GetLikesForObject/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetLikesForObject choreography.
     *
     * @param Facebook_GetLikesForObject_Inputs|array $inputs (optional) Inputs as Facebook_GetLikesForObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_GetLikesForObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_GetLikesForObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLikesForObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_GetLikesForObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_GetLikesForObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLikesForObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_GetLikesForObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetLikesForObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_GetLikesForObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLikesForObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_GetLikesForObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_GetLikesForObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLikesForObject choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_GetLikesForObject_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ObjectID input for this GetLikesForObject choreography.
     *
     * @param int $value (required, integer) The id of a graph api object to get likes for.
     * @return Facebook_GetLikesForObject_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLikesForObject choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_GetLikesForObject_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetLikesForObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_GetLikesForObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLikesForObject choreography.
     *
     * @param Temboo_Session $session The session that owns this GetLikesForObject execution.
     * @param Facebook_GetLikesForObject $choreo The choregraphy object for this execution.
     * @param Facebook_GetLikesForObject_Inputs|array $inputs (optional) Inputs as Facebook_GetLikesForObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_GetLikesForObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_GetLikesForObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLikesForObject execution.
     *
     * @return Facebook_GetLikesForObject_Results New results object.
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
     * Wraps results in appopriate results class for this GetLikesForObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_GetLikesForObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_GetLikesForObject_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetLikesForObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_GetLikesForObject_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetLikesForObject choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_GetLikesForObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetLikesForObject execution.
     *
     * @return bool (boolean) The response from Facebook. Returns "true" on success.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified comment.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_CommentDelete extends Temboo_Choreography
{
    /**
     * Deletes a specified comment.
     *
     * @param Temboo_Session $session The session that owns this CommentDelete choreography.
     * @return Facebook_CommentDelete New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/CommentDelete/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CommentDelete choreography.
     *
     * @param Facebook_CommentDelete_Inputs|array $inputs (optional) Inputs as Facebook_CommentDelete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_CommentDelete_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_CommentDelete_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CommentDelete choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_CommentDelete_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_CommentDelete_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CommentDelete choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_CommentDelete_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CommentDelete choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_CommentDelete_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CommentDelete input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_CommentDelete_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_CommentDelete_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CommentDelete choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_CommentDelete_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CommentID input for this CommentDelete choreography.
     *
     * @param string $value (required, string) The id of the comment to delete
     * @return Facebook_CommentDelete_Inputs For method chaining.
     */
    public function setCommentID($value)
    {
        return $this->set('CommentID', $value);
    }
}


/**
 * Execution object for the CommentDelete choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_CommentDelete_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CommentDelete choreography.
     *
     * @param Temboo_Session $session The session that owns this CommentDelete execution.
     * @param Facebook_CommentDelete $choreo The choregraphy object for this execution.
     * @param Facebook_CommentDelete_Inputs|array $inputs (optional) Inputs as Facebook_CommentDelete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_CommentDelete_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_CommentDelete $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CommentDelete execution.
     *
     * @return Facebook_CommentDelete_Results New results object.
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
     * Wraps results in appopriate results class for this CommentDelete execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_CommentDelete_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_CommentDelete_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CommentDelete choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_CommentDelete_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CommentDelete choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_CommentDelete_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CommentDelete execution.
     *
     * @return bool (boolean) The response from Facebook. Returns "true" on success.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the feed from a specified user's Wall.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_ProfileFeed extends Temboo_Choreography
{
    /**
     * Retrieves the feed from a specified user's Wall.
     *
     * @param Temboo_Session $session The session that owns this ProfileFeed choreography.
     * @return Facebook_ProfileFeed New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/ProfileFeed/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ProfileFeed choreography.
     *
     * @param Facebook_ProfileFeed_Inputs|array $inputs (optional) Inputs as Facebook_ProfileFeed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_ProfileFeed_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_ProfileFeed_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ProfileFeed choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_ProfileFeed_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_ProfileFeed_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ProfileFeed choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_ProfileFeed_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ProfileFeed choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_ProfileFeed_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ProfileFeed input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_ProfileFeed_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_ProfileFeed_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ProfileFeed choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_ProfileFeed_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this ProfileFeed choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_ProfileFeed_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ProfileFeed choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_ProfileFeed_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ProfileFeed choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_ProfileFeed_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ProfileFeed choreography.
     *
     * @param Temboo_Session $session The session that owns this ProfileFeed execution.
     * @param Facebook_ProfileFeed $choreo The choregraphy object for this execution.
     * @param Facebook_ProfileFeed_Inputs|array $inputs (optional) Inputs as Facebook_ProfileFeed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_ProfileFeed_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_ProfileFeed $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ProfileFeed execution.
     *
     * @return Facebook_ProfileFeed_Results New results object.
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
     * Wraps results in appopriate results class for this ProfileFeed execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_ProfileFeed_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_ProfileFeed_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ProfileFeed choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_ProfileFeed_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ProfileFeed choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_ProfileFeed_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ProfileFeed execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of photos associated with a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_PhotoTags extends Temboo_Choreography
{
    /**
     * Retrieves a list of photos associated with a specified user.
     *
     * @param Temboo_Session $session The session that owns this PhotoTags choreography.
     * @return Facebook_PhotoTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/PhotoTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PhotoTags choreography.
     *
     * @param Facebook_PhotoTags_Inputs|array $inputs (optional) Inputs as Facebook_PhotoTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_PhotoTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_PhotoTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PhotoTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_PhotoTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_PhotoTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PhotoTags choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_PhotoTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PhotoTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_PhotoTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PhotoTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_PhotoTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_PhotoTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this PhotoTags choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_PhotoTags_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this PhotoTags choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_PhotoTags_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PhotoTags choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_PhotoTags_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PhotoTags choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_PhotoTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PhotoTags choreography.
     *
     * @param Temboo_Session $session The session that owns this PhotoTags execution.
     * @param Facebook_PhotoTags $choreo The choregraphy object for this execution.
     * @param Facebook_PhotoTags_Inputs|array $inputs (optional) Inputs as Facebook_PhotoTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_PhotoTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_PhotoTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PhotoTags execution.
     *
     * @return Facebook_PhotoTags_Results New results object.
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
     * Wraps results in appopriate results class for this PhotoTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_PhotoTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_PhotoTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PhotoTags choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_PhotoTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PhotoTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_PhotoTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this PhotoTags execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a checkin at a location represented by a Page.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_CreateCheckin extends Temboo_Choreography
{
    /**
     * Creates a checkin at a location represented by a Page.
     *
     * @param Temboo_Session $session The session that owns this CreateCheckin choreography.
     * @return Facebook_CreateCheckin New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/CreateCheckin/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateCheckin choreography.
     *
     * @param Facebook_CreateCheckin_Inputs|array $inputs (optional) Inputs as Facebook_CreateCheckin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_CreateCheckin_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_CreateCheckin_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateCheckin choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_CreateCheckin_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_CreateCheckin_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateCheckin choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_CreateCheckin_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateCheckin choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_CreateCheckin_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateCheckin input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_CreateCheckin_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_CreateCheckin_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateCheckin choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_CreateCheckin_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Latitude input for this CreateCheckin choreography.
     *
     * @param float $value (required, decimal) The latitude coordinate of the Checkin location.
     * @return Facebook_CreateCheckin_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this CreateCheckin choreography.
     *
     * @param float $value (required, decimal) The longitude coordinate of the Checkin location.
     * @return Facebook_CreateCheckin_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Message input for this CreateCheckin choreography.
     *
     * @param string $value (optional, string) A message to include with the Checkin.
     * @return Facebook_CreateCheckin_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the PlaceID input for this CreateCheckin choreography.
     *
     * @param int $value (required, integer) The ID of the place associated with your Checkin.
     * @return Facebook_CreateCheckin_Inputs For method chaining.
     */
    public function setPlaceID($value)
    {
        return $this->set('PlaceID', $value);
    }

    /**
     * Set the value for the ProfileId input for this CreateCheckin choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_CreateCheckin_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateCheckin choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_CreateCheckin_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CreateCheckin choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_CreateCheckin_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateCheckin choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateCheckin execution.
     * @param Facebook_CreateCheckin $choreo The choregraphy object for this execution.
     * @param Facebook_CreateCheckin_Inputs|array $inputs (optional) Inputs as Facebook_CreateCheckin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_CreateCheckin_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_CreateCheckin $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateCheckin execution.
     *
     * @return Facebook_CreateCheckin_Results New results object.
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
     * Wraps results in appopriate results class for this CreateCheckin execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_CreateCheckin_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_CreateCheckin_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateCheckin choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_CreateCheckin_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateCheckin choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_CreateCheckin_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateCheckin execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of video tags associated with a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_VideoTags extends Temboo_Choreography
{
    /**
     * Retrieves a list of video tags associated with a specified user.
     *
     * @param Temboo_Session $session The session that owns this VideoTags choreography.
     * @return Facebook_VideoTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/VideoTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this VideoTags choreography.
     *
     * @param Facebook_VideoTags_Inputs|array $inputs (optional) Inputs as Facebook_VideoTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_VideoTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_VideoTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VideoTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_VideoTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_VideoTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VideoTags choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_VideoTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the VideoTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_VideoTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VideoTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_VideoTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_VideoTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this VideoTags choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_VideoTags_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this VideoTags choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_VideoTags_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VideoTags choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_VideoTags_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the VideoTags choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_VideoTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VideoTags choreography.
     *
     * @param Temboo_Session $session The session that owns this VideoTags execution.
     * @param Facebook_VideoTags $choreo The choregraphy object for this execution.
     * @param Facebook_VideoTags_Inputs|array $inputs (optional) Inputs as Facebook_VideoTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_VideoTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_VideoTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VideoTags execution.
     *
     * @return Facebook_VideoTags_Results New results object.
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
     * Wraps results in appopriate results class for this VideoTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_VideoTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_VideoTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the VideoTags choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_VideoTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the VideoTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_VideoTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this VideoTags execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the current news feed associated with a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_NewsFeed extends Temboo_Choreography
{
    /**
     * Retrieves the current news feed associated with a specified user.
     *
     * @param Temboo_Session $session The session that owns this NewsFeed choreography.
     * @return Facebook_NewsFeed New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/NewsFeed/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this NewsFeed choreography.
     *
     * @param Facebook_NewsFeed_Inputs|array $inputs (optional) Inputs as Facebook_NewsFeed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_NewsFeed_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_NewsFeed_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this NewsFeed choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_NewsFeed_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_NewsFeed_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the NewsFeed choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_NewsFeed_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the NewsFeed choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_NewsFeed_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this NewsFeed input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_NewsFeed_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_NewsFeed_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this NewsFeed choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_NewsFeed_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this NewsFeed choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_NewsFeed_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this NewsFeed choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_NewsFeed_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the NewsFeed choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_NewsFeed_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the NewsFeed choreography.
     *
     * @param Temboo_Session $session The session that owns this NewsFeed execution.
     * @param Facebook_NewsFeed $choreo The choregraphy object for this execution.
     * @param Facebook_NewsFeed_Inputs|array $inputs (optional) Inputs as Facebook_NewsFeed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_NewsFeed_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_NewsFeed $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this NewsFeed execution.
     *
     * @return Facebook_NewsFeed_Results New results object.
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
     * Wraps results in appopriate results class for this NewsFeed execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_NewsFeed_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_NewsFeed_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the NewsFeed choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_NewsFeed_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the NewsFeed choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_NewsFeed_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this NewsFeed execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of  statuses for a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_StatusGet extends Temboo_Choreography
{
    /**
     * Retrieves a list of  statuses for a specified user.
     *
     * @param Temboo_Session $session The session that owns this StatusGet choreography.
     * @return Facebook_StatusGet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/StatusGet/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this StatusGet choreography.
     *
     * @param Facebook_StatusGet_Inputs|array $inputs (optional) Inputs as Facebook_StatusGet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_StatusGet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_StatusGet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StatusGet choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_StatusGet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_StatusGet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StatusGet choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_StatusGet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the StatusGet choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_StatusGet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StatusGet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_StatusGet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_StatusGet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this StatusGet choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final OAuth step.
     * @return Facebook_StatusGet_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this StatusGet choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_StatusGet_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this StatusGet choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_StatusGet_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the StatusGet choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_StatusGet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StatusGet choreography.
     *
     * @param Temboo_Session $session The session that owns this StatusGet execution.
     * @param Facebook_StatusGet $choreo The choregraphy object for this execution.
     * @param Facebook_StatusGet_Inputs|array $inputs (optional) Inputs as Facebook_StatusGet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_StatusGet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_StatusGet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StatusGet execution.
     *
     * @return Facebook_StatusGet_Results New results object.
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
     * Wraps results in appopriate results class for this StatusGet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_StatusGet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_StatusGet_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the StatusGet choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_StatusGet_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the StatusGet choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_StatusGet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this StatusGet execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of names and profile IDs for Facebook friends associated with a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_FriendsGet extends Temboo_Choreography
{
    /**
     * Retrieves a list of names and profile IDs for Facebook friends associated with a specified user.
     *
     * @param Temboo_Session $session The session that owns this FriendsGet choreography.
     * @return Facebook_FriendsGet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/FriendsGet/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FriendsGet choreography.
     *
     * @param Facebook_FriendsGet_Inputs|array $inputs (optional) Inputs as Facebook_FriendsGet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_FriendsGet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_FriendsGet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FriendsGet choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_FriendsGet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_FriendsGet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FriendsGet choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_FriendsGet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FriendsGet choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_FriendsGet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FriendsGet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_FriendsGet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_FriendsGet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this FriendsGet choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final OAuth step.
     * @return Facebook_FriendsGet_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this FriendsGet choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_FriendsGet_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FriendsGet choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_FriendsGet_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FriendsGet choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_FriendsGet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FriendsGet choreography.
     *
     * @param Temboo_Session $session The session that owns this FriendsGet execution.
     * @param Facebook_FriendsGet $choreo The choregraphy object for this execution.
     * @param Facebook_FriendsGet_Inputs|array $inputs (optional) Inputs as Facebook_FriendsGet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_FriendsGet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_FriendsGet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FriendsGet execution.
     *
     * @return Facebook_FriendsGet_Results New results object.
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
     * Wraps results in appopriate results class for this FriendsGet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_FriendsGet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_FriendsGet_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FriendsGet choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_FriendsGet_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FriendsGet choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_FriendsGet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FriendsGet execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of events associated with a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Events extends Temboo_Choreography
{
    /**
     * Retrieves a list of events associated with a specified user.
     *
     * @param Temboo_Session $session The session that owns this Events choreography.
     * @return Facebook_Events New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/Events/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Events choreography.
     *
     * @param Facebook_Events_Inputs|array $inputs (optional) Inputs as Facebook_Events_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Events_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_Events_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Events choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Events_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_Events_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Events choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Events_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Events choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Events_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Events input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_Events_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_Events_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Events choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_Events_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this Events choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_Events_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Events choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_Events_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Events choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Events_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Events choreography.
     *
     * @param Temboo_Session $session The session that owns this Events execution.
     * @param Facebook_Events $choreo The choregraphy object for this execution.
     * @param Facebook_Events_Inputs|array $inputs (optional) Inputs as Facebook_Events_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Events_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_Events $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Events execution.
     *
     * @return Facebook_Events_Results New results object.
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
     * Wraps results in appopriate results class for this Events execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_Events_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_Events_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Events choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Events_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Events choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_Events_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Events execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of friend requests for a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_FriendRequests extends Temboo_Choreography
{
    /**
     * Retrieves a list of friend requests for a specified user.
     *
     * @param Temboo_Session $session The session that owns this FriendRequests choreography.
     * @return Facebook_FriendRequests New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/FriendRequests/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FriendRequests choreography.
     *
     * @param Facebook_FriendRequests_Inputs|array $inputs (optional) Inputs as Facebook_FriendRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_FriendRequests_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_FriendRequests_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FriendRequests choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_FriendRequests_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_FriendRequests_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FriendRequests choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_FriendRequests_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FriendRequests choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_FriendRequests_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FriendRequests input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_FriendRequests_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_FriendRequests_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this FriendRequests choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_FriendRequests_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this FriendRequests choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_FriendRequests_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FriendRequests choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_FriendRequests_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FriendRequests choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_FriendRequests_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FriendRequests choreography.
     *
     * @param Temboo_Session $session The session that owns this FriendRequests execution.
     * @param Facebook_FriendRequests $choreo The choregraphy object for this execution.
     * @param Facebook_FriendRequests_Inputs|array $inputs (optional) Inputs as Facebook_FriendRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_FriendRequests_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_FriendRequests $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FriendRequests execution.
     *
     * @return Facebook_FriendRequests_Results New results object.
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
     * Wraps results in appopriate results class for this FriendRequests execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_FriendRequests_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_FriendRequests_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FriendRequests choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_FriendRequests_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FriendRequests choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_FriendRequests_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FriendRequests execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves retrieves the details for a Graph API object that you specify.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_GetObject extends Temboo_Choreography
{
    /**
     * Retrieves retrieves the details for a Graph API object that you specify.
     *
     * @param Temboo_Session $session The session that owns this GetObject choreography.
     * @return Facebook_GetObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/GetObject/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetObject choreography.
     *
     * @param Facebook_GetObject_Inputs|array $inputs (optional) Inputs as Facebook_GetObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_GetObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_GetObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_GetObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_GetObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_GetObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_GetObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_GetObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_GetObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetObject choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_GetObject_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ObjectID input for this GetObject choreography.
     *
     * @param int $value (required, integer) The id of a graph api object to retrieve.
     * @return Facebook_GetObject_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetObject choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_GetObject_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_GetObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetObject choreography.
     *
     * @param Temboo_Session $session The session that owns this GetObject execution.
     * @param Facebook_GetObject $choreo The choregraphy object for this execution.
     * @param Facebook_GetObject_Inputs|array $inputs (optional) Inputs as Facebook_GetObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_GetObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_GetObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetObject execution.
     *
     * @return Facebook_GetObject_Results New results object.
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
     * Wraps results in appopriate results class for this GetObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_GetObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_GetObject_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_GetObject_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetObject choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_GetObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetObject execution.
     *
     * @return bool (boolean) The response from Facebook. Returns "true" on success.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the set of permissions associated with a given access token.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Permissions extends Temboo_Choreography
{
    /**
     * Retrieves the set of permissions associated with a given access token.
     *
     * @param Temboo_Session $session The session that owns this Permissions choreography.
     * @return Facebook_Permissions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/Permissions/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Permissions choreography.
     *
     * @param Facebook_Permissions_Inputs|array $inputs (optional) Inputs as Facebook_Permissions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Permissions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_Permissions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Permissions choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Permissions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_Permissions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Permissions choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Permissions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Permissions choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Permissions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Permissions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_Permissions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_Permissions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Permissions choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_Permissions_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this Permissions choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_Permissions_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Permissions choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_Permissions_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Permissions choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Permissions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Permissions choreography.
     *
     * @param Temboo_Session $session The session that owns this Permissions execution.
     * @param Facebook_Permissions $choreo The choregraphy object for this execution.
     * @param Facebook_Permissions_Inputs|array $inputs (optional) Inputs as Facebook_Permissions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Permissions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_Permissions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Permissions execution.
     *
     * @return Facebook_Permissions_Results New results object.
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
     * Wraps results in appopriate results class for this Permissions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_Permissions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_Permissions_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Permissions choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Permissions_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Permissions choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_Permissions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Permissions execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search public objects across the social graph.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Search extends Temboo_Choreography
{
    /**
     * Search public objects across the social graph.
     *
     * @param Temboo_Session $session The session that owns this Search choreography.
     * @return Facebook_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/Search/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Search choreography.
     *
     * @param Facebook_Search_Inputs|array $inputs (optional) Inputs as Facebook_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Search choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Search_Inputs New instance.
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
     * @return Facebook_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Search choreography.
     *
     * @param string $value (conditional, string) The access token retrieved from the final step of the OAuth process. This is required for certain object types such as "user".
     * @return Facebook_Search_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Center input for this Search choreography.
     *
     * @param string $value (optional, string) The coordinates for a place (such as 37.76,122.427). Used only when specifying an object ype of "place".
     * @return Facebook_Search_Inputs For method chaining.
     */
    public function setCenter($value)
    {
        return $this->set('Center', $value);
    }

    /**
     * Set the value for the Distance input for this Search choreography.
     *
     * @param int $value (optional, integer) The distance search parameter used only when specifying an object type of "place". Defaults to 1000.
     * @return Facebook_Search_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the ObjectType input for this Search choreography.
     *
     * @param string $value (required, string) The type of object to search for. Accepted values are: post, user, page, event, group, place, or checkin.
     * @return Facebook_Search_Inputs For method chaining.
     */
    public function setObjectType($value)
    {
        return $this->set('ObjectType', $value);
    }

    /**
     * Set the value for the Query input for this Search choreography.
     *
     * @param string $value (required, string) The Facebook query term to send in the request.
     * @return Facebook_Search_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Search choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_Search_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Search choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search choreography.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param Facebook_Search $choreo The choregraphy object for this execution.
     * @param Facebook_Search_Inputs|array $inputs (optional) Inputs as Facebook_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return Facebook_Search_Results New results object.
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
     * @return Facebook_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_Search_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Search choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Search_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Search choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified status message from the authenticated user's feed.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_StatusDelete extends Temboo_Choreography
{
    /**
     * Deletes a specified status message from the authenticated user's feed.
     *
     * @param Temboo_Session $session The session that owns this StatusDelete choreography.
     * @return Facebook_StatusDelete New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/StatusDelete/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this StatusDelete choreography.
     *
     * @param Facebook_StatusDelete_Inputs|array $inputs (optional) Inputs as Facebook_StatusDelete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_StatusDelete_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_StatusDelete_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StatusDelete choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_StatusDelete_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_StatusDelete_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StatusDelete choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_StatusDelete_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the StatusDelete choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_StatusDelete_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StatusDelete input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_StatusDelete_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_StatusDelete_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this StatusDelete choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_StatusDelete_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the StatusID input for this StatusDelete choreography.
     *
     * @param int $value (required, integer) The ID for the status message you want to delete.
     * @return Facebook_StatusDelete_Inputs For method chaining.
     */
    public function setStatusID($value)
    {
        return $this->set('StatusID', $value);
    }
}


/**
 * Execution object for the StatusDelete choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_StatusDelete_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StatusDelete choreography.
     *
     * @param Temboo_Session $session The session that owns this StatusDelete execution.
     * @param Facebook_StatusDelete $choreo The choregraphy object for this execution.
     * @param Facebook_StatusDelete_Inputs|array $inputs (optional) Inputs as Facebook_StatusDelete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_StatusDelete_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_StatusDelete $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StatusDelete execution.
     *
     * @return Facebook_StatusDelete_Results New results object.
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
     * Wraps results in appopriate results class for this StatusDelete execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_StatusDelete_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_StatusDelete_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the StatusDelete choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_StatusDelete_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the StatusDelete choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_StatusDelete_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this StatusDelete execution.
     *
     * @return bool (boolean) The response from Facebook. Returns "true" on success.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the Likes for a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Likes extends Temboo_Choreography
{
    /**
     * Retrieves the Likes for a specified user.
     *
     * @param Temboo_Session $session The session that owns this Likes choreography.
     * @return Facebook_Likes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/Likes/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Likes choreography.
     *
     * @param Facebook_Likes_Inputs|array $inputs (optional) Inputs as Facebook_Likes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Likes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_Likes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Likes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Likes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_Likes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Likes choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Likes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Likes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Likes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Likes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_Likes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_Likes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Likes choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_Likes_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this Likes choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_Likes_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Likes choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_Likes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Likes choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Likes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Likes choreography.
     *
     * @param Temboo_Session $session The session that owns this Likes execution.
     * @param Facebook_Likes $choreo The choregraphy object for this execution.
     * @param Facebook_Likes_Inputs|array $inputs (optional) Inputs as Facebook_Likes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Likes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_Likes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Likes execution.
     *
     * @return Facebook_Likes_Results New results object.
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
     * Wraps results in appopriate results class for this Likes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_Likes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_Likes_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Likes choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Likes_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Likes choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_Likes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Likes execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about the specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_User extends Temboo_Choreography
{
    /**
     * Retrieves information about the specified user.
     *
     * @param Temboo_Session $session The session that owns this User choreography.
     * @return Facebook_User New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/User/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this User choreography.
     *
     * @param Facebook_User_Inputs|array $inputs (optional) Inputs as Facebook_User_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_User_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_User_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this User choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_User_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_User_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the User choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_User_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the User choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_User_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this User input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_User_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_User_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this User choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_User_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this User choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_User_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this User choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_User_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the User choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_User_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the User choreography.
     *
     * @param Temboo_Session $session The session that owns this User execution.
     * @param Facebook_User $choreo The choregraphy object for this execution.
     * @param Facebook_User_Inputs|array $inputs (optional) Inputs as Facebook_User_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_User_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_User $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this User execution.
     *
     * @return Facebook_User_Results New results object.
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
     * Wraps results in appopriate results class for this User execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_User_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_User_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the User choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_User_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the User choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_User_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this User execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of messages in a specified user's inbox.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Inbox extends Temboo_Choreography
{
    /**
     * Retrieves a list of messages in a specified user's inbox.
     *
     * @param Temboo_Session $session The session that owns this Inbox choreography.
     * @return Facebook_Inbox New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/Inbox/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Inbox choreography.
     *
     * @param Facebook_Inbox_Inputs|array $inputs (optional) Inputs as Facebook_Inbox_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Inbox_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_Inbox_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Inbox choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Inbox_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_Inbox_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Inbox choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Inbox_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Inbox choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Inbox_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Inbox input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_Inbox_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_Inbox_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Inbox choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_Inbox_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this Inbox choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_Inbox_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Inbox choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_Inbox_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Inbox choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Inbox_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Inbox choreography.
     *
     * @param Temboo_Session $session The session that owns this Inbox execution.
     * @param Facebook_Inbox $choreo The choregraphy object for this execution.
     * @param Facebook_Inbox_Inputs|array $inputs (optional) Inputs as Facebook_Inbox_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Inbox_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_Inbox $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Inbox execution.
     *
     * @return Facebook_Inbox_Results New results object.
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
     * Wraps results in appopriate results class for this Inbox execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_Inbox_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_Inbox_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Inbox choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Inbox_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Inbox choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_Inbox_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Inbox execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves comments for a specified Graph API object.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_GetCommentsForObject extends Temboo_Choreography
{
    /**
     * Retrieves comments for a specified Graph API object.
     *
     * @param Temboo_Session $session The session that owns this GetCommentsForObject choreography.
     * @return Facebook_GetCommentsForObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/GetCommentsForObject/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCommentsForObject choreography.
     *
     * @param Facebook_GetCommentsForObject_Inputs|array $inputs (optional) Inputs as Facebook_GetCommentsForObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_GetCommentsForObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_GetCommentsForObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCommentsForObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_GetCommentsForObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_GetCommentsForObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCommentsForObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_GetCommentsForObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCommentsForObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_GetCommentsForObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCommentsForObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_GetCommentsForObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_GetCommentsForObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetCommentsForObject choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_GetCommentsForObject_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ObjectID input for this GetCommentsForObject choreography.
     *
     * @param int $value (required, integer) The id of a graph api object to get comments for.
     * @return Facebook_GetCommentsForObject_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCommentsForObject choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_GetCommentsForObject_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetCommentsForObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_GetCommentsForObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCommentsForObject choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCommentsForObject execution.
     * @param Facebook_GetCommentsForObject $choreo The choregraphy object for this execution.
     * @param Facebook_GetCommentsForObject_Inputs|array $inputs (optional) Inputs as Facebook_GetCommentsForObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_GetCommentsForObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_GetCommentsForObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCommentsForObject execution.
     *
     * @return Facebook_GetCommentsForObject_Results New results object.
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
     * Wraps results in appopriate results class for this GetCommentsForObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_GetCommentsForObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_GetCommentsForObject_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCommentsForObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_GetCommentsForObject_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCommentsForObject choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_GetCommentsForObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCommentsForObject execution.
     *
     * @return bool (boolean) The response from Facebook. Returns "true" on success.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of groups associated with a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Groups extends Temboo_Choreography
{
    /**
     * Retrieves a list of groups associated with a specified user.
     *
     * @param Temboo_Session $session The session that owns this Groups choreography.
     * @return Facebook_Groups New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/Groups/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Groups choreography.
     *
     * @param Facebook_Groups_Inputs|array $inputs (optional) Inputs as Facebook_Groups_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Groups_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_Groups_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Groups choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Groups_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_Groups_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Groups choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Groups_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Groups choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Groups_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Groups input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_Groups_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_Groups_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Groups choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_Groups_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this Groups choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_Groups_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Groups choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_Groups_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Groups choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Groups_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Groups choreography.
     *
     * @param Temboo_Session $session The session that owns this Groups execution.
     * @param Facebook_Groups $choreo The choregraphy object for this execution.
     * @param Facebook_Groups_Inputs|array $inputs (optional) Inputs as Facebook_Groups_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Groups_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_Groups $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Groups execution.
     *
     * @return Facebook_Groups_Results New results object.
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
     * Wraps results in appopriate results class for this Groups execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_Groups_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_Groups_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Groups choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Groups_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Groups choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_Groups_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Groups execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of messages in a specified user's outbox.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Outbox extends Temboo_Choreography
{
    /**
     * Retrieves a list of messages in a specified user's outbox.
     *
     * @param Temboo_Session $session The session that owns this Outbox choreography.
     * @return Facebook_Outbox New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/Outbox/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Outbox choreography.
     *
     * @param Facebook_Outbox_Inputs|array $inputs (optional) Inputs as Facebook_Outbox_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Outbox_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_Outbox_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Outbox choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Outbox_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_Outbox_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Outbox choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Outbox_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Outbox choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Outbox_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Outbox input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_Outbox_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_Outbox_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Outbox choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_Outbox_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this Outbox choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_Outbox_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Outbox choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_Outbox_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Outbox choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Outbox_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Outbox choreography.
     *
     * @param Temboo_Session $session The session that owns this Outbox execution.
     * @param Facebook_Outbox $choreo The choregraphy object for this execution.
     * @param Facebook_Outbox_Inputs|array $inputs (optional) Inputs as Facebook_Outbox_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Outbox_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_Outbox $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Outbox execution.
     *
     * @return Facebook_Outbox_Results New results object.
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
     * Wraps results in appopriate results class for this Outbox execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_Outbox_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_Outbox_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Outbox choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Outbox_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Outbox choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_Outbox_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Outbox execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to "unlike" a Graph API object.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_UnlikeObject extends Temboo_Choreography
{
    /**
     * Allows a user to "unlike" a Graph API object.
     *
     * @param Temboo_Session $session The session that owns this UnlikeObject choreography.
     * @return Facebook_UnlikeObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/UnlikeObject/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UnlikeObject choreography.
     *
     * @param Facebook_UnlikeObject_Inputs|array $inputs (optional) Inputs as Facebook_UnlikeObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_UnlikeObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_UnlikeObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UnlikeObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_UnlikeObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_UnlikeObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UnlikeObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_UnlikeObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UnlikeObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_UnlikeObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UnlikeObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_UnlikeObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_UnlikeObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UnlikeObject choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_UnlikeObject_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ObjectID input for this UnlikeObject choreography.
     *
     * @param int $value (required, integer) The id of a graph api object to unlike.
     * @return Facebook_UnlikeObject_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }
}


/**
 * Execution object for the UnlikeObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_UnlikeObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UnlikeObject choreography.
     *
     * @param Temboo_Session $session The session that owns this UnlikeObject execution.
     * @param Facebook_UnlikeObject $choreo The choregraphy object for this execution.
     * @param Facebook_UnlikeObject_Inputs|array $inputs (optional) Inputs as Facebook_UnlikeObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_UnlikeObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_UnlikeObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UnlikeObject execution.
     *
     * @return Facebook_UnlikeObject_Results New results object.
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
     * Wraps results in appopriate results class for this UnlikeObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_UnlikeObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_UnlikeObject_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UnlikeObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_UnlikeObject_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UnlikeObject choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_UnlikeObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UnlikeObject execution.
     *
     * @return bool (boolean) The response from Facebook. Returns "true" on success.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves notes associated with a specified user.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Notes extends Temboo_Choreography
{
    /**
     * Retrieves notes associated with a specified user.
     *
     * @param Temboo_Session $session The session that owns this Notes choreography.
     * @return Facebook_Notes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/Notes/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Notes choreography.
     *
     * @param Facebook_Notes_Inputs|array $inputs (optional) Inputs as Facebook_Notes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Notes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_Notes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Notes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Notes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_Notes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Notes choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Notes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Notes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_Notes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Notes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_Notes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_Notes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Notes choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_Notes_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ProfileId input for this Notes choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_Notes_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Notes choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_Notes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Notes choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Notes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Notes choreography.
     *
     * @param Temboo_Session $session The session that owns this Notes execution.
     * @param Facebook_Notes $choreo The choregraphy object for this execution.
     * @param Facebook_Notes_Inputs|array $inputs (optional) Inputs as Facebook_Notes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_Notes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_Notes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Notes execution.
     *
     * @return Facebook_Notes_Results New results object.
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
     * Wraps results in appopriate results class for this Notes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_Notes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_Notes_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Notes choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_Notes_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Notes choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_Notes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Notes execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to "like" a Graph API object.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_LikeObject extends Temboo_Choreography
{
    /**
     * Allows a user to "like" a Graph API object.
     *
     * @param Temboo_Session $session The session that owns this LikeObject choreography.
     * @return Facebook_LikeObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/LikeObject/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this LikeObject choreography.
     *
     * @param Facebook_LikeObject_Inputs|array $inputs (optional) Inputs as Facebook_LikeObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_LikeObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_LikeObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LikeObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_LikeObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_LikeObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LikeObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_LikeObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the LikeObject choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_LikeObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LikeObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_LikeObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_LikeObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this LikeObject choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_LikeObject_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ObjectID input for this LikeObject choreography.
     *
     * @param int $value (required, integer) The id of a graph api object that you like.
     * @return Facebook_LikeObject_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LikeObject choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_LikeObject_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the LikeObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_LikeObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LikeObject choreography.
     *
     * @param Temboo_Session $session The session that owns this LikeObject execution.
     * @param Facebook_LikeObject $choreo The choregraphy object for this execution.
     * @param Facebook_LikeObject_Inputs|array $inputs (optional) Inputs as Facebook_LikeObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_LikeObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_LikeObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LikeObject execution.
     *
     * @return Facebook_LikeObject_Results New results object.
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
     * Wraps results in appopriate results class for this LikeObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_LikeObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_LikeObject_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the LikeObject choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_LikeObject_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the LikeObject choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_LikeObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this LikeObject execution.
     *
     * @return bool (boolean) The response from Facebook. Returns "true" on success.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a user's Facebook status.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_StatusSet extends Temboo_Choreography
{
    /**
     * Updates a user's Facebook status.
     *
     * @param Temboo_Session $session The session that owns this StatusSet choreography.
     * @return Facebook_StatusSet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Facebook/StatusSet/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this StatusSet choreography.
     *
     * @param Facebook_StatusSet_Inputs|array $inputs (optional) Inputs as Facebook_StatusSet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_StatusSet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Facebook_StatusSet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StatusSet choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_StatusSet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Facebook_StatusSet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StatusSet choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_StatusSet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the StatusSet choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Facebook_StatusSet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StatusSet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Facebook_StatusSet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Facebook_StatusSet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this StatusSet choreography.
     *
     * @param string $value (required, string) The access token retrieved from the final step of the OAuth process.
     * @return Facebook_StatusSet_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Message input for this StatusSet choreography.
     *
     * @param string $value (required, string) The status message to set.
     * @return Facebook_StatusSet_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the ProfileId input for this StatusSet choreography.
     *
     * @param int $value (optional, integer) The profile id associated with the Graph API object you want to access. Defaults to "me" indicating that you want to access an object associated with the authenticated user.
     * @return Facebook_StatusSet_Inputs For method chaining.
     */
    public function setProfileId($value)
    {
        return $this->set('ProfileId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this StatusSet choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to json.
     * @return Facebook_StatusSet_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the StatusSet choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_StatusSet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StatusSet choreography.
     *
     * @param Temboo_Session $session The session that owns this StatusSet execution.
     * @param Facebook_StatusSet $choreo The choregraphy object for this execution.
     * @param Facebook_StatusSet_Inputs|array $inputs (optional) Inputs as Facebook_StatusSet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Facebook_StatusSet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Facebook_StatusSet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StatusSet execution.
     *
     * @return Facebook_StatusSet_Results New results object.
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
     * Wraps results in appopriate results class for this StatusSet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Facebook_StatusSet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Facebook_StatusSet_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the StatusSet choreography.
 *
 * @package Temboo
 * @subpackage Facebook
 */
class Facebook_StatusSet_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the StatusSet choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Facebook_StatusSet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this StatusSet execution.
     *
     * @return string The response from Facebook. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>