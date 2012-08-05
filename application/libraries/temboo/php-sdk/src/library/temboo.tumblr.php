<?php

/**
 * Temboo PHP SDK Tumblr classes
 *
 * Execute Choreographies from the Temboo Tumblr bundle.
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
 * @subpackage Tumblr
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieves the user information associated with a given set of Tumblr Oauth credentials.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_GetUserInformation extends Temboo_Choreography
{
    /**
     * Retrieves the user information associated with a given set of Tumblr Oauth credentials.
     *
     * @param Temboo_Session $session The session that owns this GetUserInformation choreography.
     * @return Tumblr_GetUserInformation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/GetUserInformation/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetUserInformation choreography.
     *
     * @param Tumblr_GetUserInformation_Inputs|array $inputs (optional) Inputs as Tumblr_GetUserInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_GetUserInformation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_GetUserInformation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUserInformation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_GetUserInformation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_GetUserInformation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUserInformation choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_GetUserInformation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetUserInformation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_GetUserInformation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUserInformation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_GetUserInformation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_GetUserInformation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetUserInformation choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_GetUserInformation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetUserInformation choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_GetUserInformation_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetUserInformation choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_GetUserInformation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the SecretKey input for this GetUserInformation choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_GetUserInformation_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the GetUserInformation choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_GetUserInformation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUserInformation choreography.
     *
     * @param Temboo_Session $session The session that owns this GetUserInformation execution.
     * @param Tumblr_GetUserInformation $choreo The choregraphy object for this execution.
     * @param Tumblr_GetUserInformation_Inputs|array $inputs (optional) Inputs as Tumblr_GetUserInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_GetUserInformation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_GetUserInformation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUserInformation execution.
     *
     * @return Tumblr_GetUserInformation_Results New results object.
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
     * Wraps results in appopriate results class for this GetUserInformation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_GetUserInformation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_GetUserInformation_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetUserInformation choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_GetUserInformation_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetUserInformation choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_GetUserInformation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetUserInformation execution.
     *
     * @return string (xml) The response from Tumblr in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified quote post on a Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditQuotePost extends Temboo_Choreography
{
    /**
     * Updates a specified quote post on a Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this EditQuotePost choreography.
     * @return Tumblr_EditQuotePost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/EditQuotePost/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this EditQuotePost choreography.
     *
     * @param Tumblr_EditQuotePost_Inputs|array $inputs (optional) Inputs as Tumblr_EditQuotePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_EditQuotePost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_EditQuotePost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditQuotePost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_EditQuotePost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_EditQuotePost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditQuotePost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditQuotePost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the EditQuotePost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_EditQuotePost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditQuotePost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Quote input for this EditQuotePost choreography.
     *
     * @param string $value (required, string) The full text of the quote. HTML entities must be escpaed.
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setQuote($value)
    {
        return $this->set('Quote', $value);
    }

    /**
     * Set the value for the APIKey input for this EditQuotePost choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditQuotePost choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditQuotePost choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditQuotePost choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this EditQuotePost choreography.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ID input for this EditQuotePost choreography.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Markdown input for this EditQuotePost choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditQuotePost choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditQuotePost choreography.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the Source input for this EditQuotePost choreography.
     *
     * @param string $value (optional, string) The cited source of the quote. HTML is allowed.
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setSource($value)
    {
        return $this->set('Source', $value);
    }

    /**
     * Set the value for the State input for this EditQuotePost choreography.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditQuotePost choreography.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this EditQuotePost choreography.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_EditQuotePost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the EditQuotePost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditQuotePost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditQuotePost choreography.
     *
     * @param Temboo_Session $session The session that owns this EditQuotePost execution.
     * @param Tumblr_EditQuotePost $choreo The choregraphy object for this execution.
     * @param Tumblr_EditQuotePost_Inputs|array $inputs (optional) Inputs as Tumblr_EditQuotePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_EditQuotePost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_EditQuotePost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditQuotePost execution.
     *
     * @return Tumblr_EditQuotePost_Results New results object.
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
     * Wraps results in appopriate results class for this EditQuotePost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_EditQuotePost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_EditQuotePost_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the EditQuotePost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditQuotePost_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the EditQuotePost choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_EditQuotePost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this EditQuotePost execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of queued posts for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveDraftPosts extends Temboo_Choreography
{
    /**
     * Retrieves a list of queued posts for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this RetrieveDraftPosts choreography.
     * @return Tumblr_RetrieveDraftPosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/RetrieveDraftPosts/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveDraftPosts choreography.
     *
     * @param Tumblr_RetrieveDraftPosts_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveDraftPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveDraftPosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_RetrieveDraftPosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveDraftPosts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveDraftPosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_RetrieveDraftPosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveDraftPosts choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveDraftPosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveDraftPosts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveDraftPosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveDraftPosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveDraftPosts choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveDraftPosts choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveDraftPosts choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this RetrieveDraftPosts choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveDraftPosts choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_RetrieveDraftPosts_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RetrieveDraftPosts choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveDraftPosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveDraftPosts choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveDraftPosts execution.
     * @param Tumblr_RetrieveDraftPosts $choreo The choregraphy object for this execution.
     * @param Tumblr_RetrieveDraftPosts_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveDraftPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveDraftPosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_RetrieveDraftPosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveDraftPosts execution.
     *
     * @return Tumblr_RetrieveDraftPosts_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveDraftPosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_RetrieveDraftPosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_RetrieveDraftPosts_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveDraftPosts choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveDraftPosts_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveDraftPosts choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_RetrieveDraftPosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveDraftPosts execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified link post on a Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditLinkPost extends Temboo_Choreography
{
    /**
     * Updates a specified link post on a Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this EditLinkPost choreography.
     * @return Tumblr_EditLinkPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/EditLinkPost/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this EditLinkPost choreography.
     *
     * @param Tumblr_EditLinkPost_Inputs|array $inputs (optional) Inputs as Tumblr_EditLinkPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_EditLinkPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_EditLinkPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditLinkPost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_EditLinkPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_EditLinkPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditLinkPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditLinkPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the EditLinkPost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_EditLinkPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditLinkPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the URL input for this EditLinkPost choreography.
     *
     * @param string $value (required, string) The link you want to post.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the APIKey input for this EditLinkPost choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditLinkPost choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditLinkPost choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditLinkPost choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this EditLinkPost choreography.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Description input for this EditLinkPost choreography.
     *
     * @param string $value (optional, string) A user-supplied description. HTML is allowed.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ID input for this EditLinkPost choreography.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Markdown input for this EditLinkPost choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditLinkPost choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditLinkPost choreography.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this EditLinkPost choreography.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditLinkPost choreography.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this EditLinkPost choreography.
     *
     * @param string $value (optional, string) The title of the page the link points to. HTML entities should be escaped.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Tweet input for this EditLinkPost choreography.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_EditLinkPost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the EditLinkPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditLinkPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditLinkPost choreography.
     *
     * @param Temboo_Session $session The session that owns this EditLinkPost execution.
     * @param Tumblr_EditLinkPost $choreo The choregraphy object for this execution.
     * @param Tumblr_EditLinkPost_Inputs|array $inputs (optional) Inputs as Tumblr_EditLinkPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_EditLinkPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_EditLinkPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditLinkPost execution.
     *
     * @return Tumblr_EditLinkPost_Results New results object.
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
     * Wraps results in appopriate results class for this EditLinkPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_EditLinkPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_EditLinkPost_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the EditLinkPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditLinkPost_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the EditLinkPost choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_EditLinkPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this EditLinkPost execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new chat post for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateChatPost extends Temboo_Choreography
{
    /**
     * Creates a new chat post for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this CreateChatPost choreography.
     * @return Tumblr_CreateChatPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/CreateChatPost/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateChatPost choreography.
     *
     * @param Tumblr_CreateChatPost_Inputs|array $inputs (optional) Inputs as Tumblr_CreateChatPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_CreateChatPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_CreateChatPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateChatPost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_CreateChatPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_CreateChatPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateChatPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateChatPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateChatPost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_CreateChatPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateChatPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Conversation input for this CreateChatPost choreography.
     *
     * @param string $value (required, string) The text of the conversation/chat, with dialogue labels (no HTML).
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setConversation($value)
    {
        return $this->set('Conversation', $value);
    }

    /**
     * Set the value for the APIKey input for this CreateChatPost choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateChatPost choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateChatPost choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreateChatPost choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this CreateChatPost choreography.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Markdown input for this CreateChatPost choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreateChatPost choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreateChatPost choreography.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this CreateChatPost choreography.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreateChatPost choreography.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this CreateChatPost choreography.
     *
     * @param string $value (optional, string) The title of the chat.
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Tweet input for this CreateChatPost choreography.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_CreateChatPost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the CreateChatPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateChatPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateChatPost choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateChatPost execution.
     * @param Tumblr_CreateChatPost $choreo The choregraphy object for this execution.
     * @param Tumblr_CreateChatPost_Inputs|array $inputs (optional) Inputs as Tumblr_CreateChatPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_CreateChatPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_CreateChatPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateChatPost execution.
     *
     * @return Tumblr_CreateChatPost_Results New results object.
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
     * Wraps results in appopriate results class for this CreateChatPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_CreateChatPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_CreateChatPost_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateChatPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateChatPost_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateChatPost choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_CreateChatPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateChatPost execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified photo post on a Tumblr blog using a provided image file.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditPhotoPostWithImageFile extends Temboo_Choreography
{
    /**
     * Updates a specified photo post on a Tumblr blog using a provided image file.
     *
     * @param Temboo_Session $session The session that owns this EditPhotoPostWithImageFile choreography.
     * @return Tumblr_EditPhotoPostWithImageFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/EditPhotoPostWithImageFile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this EditPhotoPostWithImageFile choreography.
     *
     * @param Tumblr_EditPhotoPostWithImageFile_Inputs|array $inputs (optional) Inputs as Tumblr_EditPhotoPostWithImageFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_EditPhotoPostWithImageFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_EditPhotoPostWithImageFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditPhotoPostWithImageFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_EditPhotoPostWithImageFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditPhotoPostWithImageFile choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditPhotoPostWithImageFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the EditPhotoPostWithImageFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditPhotoPostWithImageFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Data input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (conditional, string) The base64 ecoded contents of the image you want to post.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setData($value)
    {
        return $this->set('Data', $value);
    }

    /**
     * Set the value for the APIKey input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Caption input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, string) The user-supplied caption. HTML is allowed.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setCaption($value)
    {
        return $this->set('Caption', $value);
    }

    /**
     * Set the value for the Date input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ID input for this EditPhotoPostWithImageFile choreography.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Link input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, string) The "click-through URL" for the photo.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the Markdown input for this EditPhotoPostWithImageFile choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this EditPhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_EditPhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }

}


/**
 * Execution object for the EditPhotoPostWithImageFile choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditPhotoPostWithImageFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditPhotoPostWithImageFile choreography.
     *
     * @param Temboo_Session $session The session that owns this EditPhotoPostWithImageFile execution.
     * @param Tumblr_EditPhotoPostWithImageFile $choreo The choregraphy object for this execution.
     * @param Tumblr_EditPhotoPostWithImageFile_Inputs|array $inputs (optional) Inputs as Tumblr_EditPhotoPostWithImageFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_EditPhotoPostWithImageFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_EditPhotoPostWithImageFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditPhotoPostWithImageFile execution.
     *
     * @return Tumblr_EditPhotoPostWithImageFile_Results New results object.
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
     * Wraps results in appopriate results class for this EditPhotoPostWithImageFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_EditPhotoPostWithImageFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_EditPhotoPostWithImageFile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the EditPhotoPostWithImageFile choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditPhotoPostWithImageFile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the EditPhotoPostWithImageFile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_EditPhotoPostWithImageFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this EditPhotoPostWithImageFile execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified chat post on a Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditChatPost extends Temboo_Choreography
{
    /**
     * Updates a specified chat post on a Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this EditChatPost choreography.
     * @return Tumblr_EditChatPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/EditChatPost/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this EditChatPost choreography.
     *
     * @param Tumblr_EditChatPost_Inputs|array $inputs (optional) Inputs as Tumblr_EditChatPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_EditChatPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_EditChatPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditChatPost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_EditChatPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_EditChatPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditChatPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditChatPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the EditChatPost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_EditChatPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditChatPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Conversation input for this EditChatPost choreography.
     *
     * @param string $value (required, string) The text of the conversation/chat, with dialogue labels (no HTML).
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setConversation($value)
    {
        return $this->set('Conversation', $value);
    }

    /**
     * Set the value for the APIKey input for this EditChatPost choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditChatPost choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditChatPost choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditChatPost choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this EditChatPost choreography.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ID input for this EditChatPost choreography.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Markdown input for this EditChatPost choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditChatPost choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditChatPost choreography.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this EditChatPost choreography.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditChatPost choreography.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this EditChatPost choreography.
     *
     * @param string $value (optional, string) The title of the chat.
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Tweet input for this EditChatPost choreography.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_EditChatPost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the EditChatPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditChatPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditChatPost choreography.
     *
     * @param Temboo_Session $session The session that owns this EditChatPost execution.
     * @param Tumblr_EditChatPost $choreo The choregraphy object for this execution.
     * @param Tumblr_EditChatPost_Inputs|array $inputs (optional) Inputs as Tumblr_EditChatPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_EditChatPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_EditChatPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditChatPost execution.
     *
     * @return Tumblr_EditChatPost_Results New results object.
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
     * Wraps results in appopriate results class for this EditChatPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_EditChatPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_EditChatPost_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the EditChatPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditChatPost_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the EditChatPost choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_EditChatPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this EditChatPost execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of submission posts for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveSubmissionPosts extends Temboo_Choreography
{
    /**
     * Retrieves a list of submission posts for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this RetrieveSubmissionPosts choreography.
     * @return Tumblr_RetrieveSubmissionPosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/RetrieveSubmissionPosts/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveSubmissionPosts choreography.
     *
     * @param Tumblr_RetrieveSubmissionPosts_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveSubmissionPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveSubmissionPosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_RetrieveSubmissionPosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveSubmissionPosts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveSubmissionPosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_RetrieveSubmissionPosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveSubmissionPosts choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveSubmissionPosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveSubmissionPosts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveSubmissionPosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveSubmissionPosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveSubmissionPosts choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveSubmissionPosts choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveSubmissionPosts choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this RetrieveSubmissionPosts choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveSubmissionPosts choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_RetrieveSubmissionPosts_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RetrieveSubmissionPosts choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveSubmissionPosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveSubmissionPosts choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveSubmissionPosts execution.
     * @param Tumblr_RetrieveSubmissionPosts $choreo The choregraphy object for this execution.
     * @param Tumblr_RetrieveSubmissionPosts_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveSubmissionPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveSubmissionPosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_RetrieveSubmissionPosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveSubmissionPosts execution.
     *
     * @return Tumblr_RetrieveSubmissionPosts_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveSubmissionPosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_RetrieveSubmissionPosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_RetrieveSubmissionPosts_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveSubmissionPosts choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveSubmissionPosts_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveSubmissionPosts choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_RetrieveSubmissionPosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveSubmissionPosts execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified post from a Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_DeletePost extends Temboo_Choreography
{
    /**
     * Deletes a specified post from a Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this DeletePost choreography.
     * @return Tumblr_DeletePost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/DeletePost/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeletePost choreography.
     *
     * @param Tumblr_DeletePost_Inputs|array $inputs (optional) Inputs as Tumblr_DeletePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_DeletePost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_DeletePost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeletePost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_DeletePost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_DeletePost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeletePost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_DeletePost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeletePost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_DeletePost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeletePost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_DeletePost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_DeletePost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeletePost choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_DeletePost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeletePost choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_DeletePost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeletePost choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_DeletePost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this DeletePost choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_DeletePost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the ID input for this DeletePost choreography.
     *
     * @param int $value (required, integer) The ID of the post you want to delete.
     * @return Tumblr_DeletePost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the SecretKey input for this DeletePost choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_DeletePost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the DeletePost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_DeletePost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeletePost choreography.
     *
     * @param Temboo_Session $session The session that owns this DeletePost execution.
     * @param Tumblr_DeletePost $choreo The choregraphy object for this execution.
     * @param Tumblr_DeletePost_Inputs|array $inputs (optional) Inputs as Tumblr_DeletePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_DeletePost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_DeletePost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeletePost execution.
     *
     * @return Tumblr_DeletePost_Results New results object.
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
     * Wraps results in appopriate results class for this DeletePost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_DeletePost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_DeletePost_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeletePost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_DeletePost_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeletePost choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_DeletePost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeletePost execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves published posts using various search and filter parameters.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrievePublishedPosts extends Temboo_Choreography
{
    /**
     * Retrieves published posts using various search and filter parameters.
     *
     * @param Temboo_Session $session The session that owns this RetrievePublishedPosts choreography.
     * @return Tumblr_RetrievePublishedPosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/RetrievePublishedPosts/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrievePublishedPosts choreography.
     *
     * @param Tumblr_RetrievePublishedPosts_Inputs|array $inputs (optional) Inputs as Tumblr_RetrievePublishedPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrievePublishedPosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_RetrievePublishedPosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrievePublishedPosts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrievePublishedPosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_RetrievePublishedPosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrievePublishedPosts choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrievePublishedPosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrievePublishedPosts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrievePublishedPosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrievePublishedPosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrievePublishedPosts choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the BaseHostname input for this RetrievePublishedPosts choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Format input for this RetrievePublishedPosts choreography.
     *
     * @param string $value (optional, string) Specifies the post format to return. Valid values are: text (Plain text, no HTML), raw (As entered by user). HTML is returned when left null.
     * @return Tumblr_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the ID input for this RetrievePublishedPosts choreography.
     *
     * @param int $value (optional, integer) The specified post ID in order to return a single post.
     * @return Tumblr_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Limit input for this RetrievePublishedPosts choreography.
     *
     * @param int $value (optional, integer) The number of posts to return: 1- 20. Defaults to 20.
     * @return Tumblr_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the NotesInfo input for this RetrievePublishedPosts choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether to return notes information (specify true or false). Defaults to 0 (false).
     * @return Tumblr_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setNotesInfo($value)
    {
        return $this->set('NotesInfo', $value);
    }

    /**
     * Set the value for the Offset input for this RetrievePublishedPosts choreography.
     *
     * @param int $value (optional, integer) The post number to start at. Defaults to 0.
     * @return Tumblr_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ReblogInfo input for this RetrievePublishedPosts choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether to return reblog information (specify 1 or 0). Defaults to 0 (false).
     * @return Tumblr_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setReblogInfo($value)
    {
        return $this->set('ReblogInfo', $value);
    }

    /**
     * Set the value for the Tag input for this RetrievePublishedPosts choreography.
     *
     * @param string $value (optional, string) Limits the response to posts with the specified tag.
     * @return Tumblr_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }

    /**
     * Set the value for the Type input for this RetrievePublishedPosts choreography.
     *
     * @param string $value (optional, string) The type of post to return. Specify one of the following:  text, quote, link, answer, video, audio, photo. When null, all types are returned.
     * @return Tumblr_RetrievePublishedPosts_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the RetrievePublishedPosts choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrievePublishedPosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrievePublishedPosts choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrievePublishedPosts execution.
     * @param Tumblr_RetrievePublishedPosts $choreo The choregraphy object for this execution.
     * @param Tumblr_RetrievePublishedPosts_Inputs|array $inputs (optional) Inputs as Tumblr_RetrievePublishedPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrievePublishedPosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_RetrievePublishedPosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrievePublishedPosts execution.
     *
     * @return Tumblr_RetrievePublishedPosts_Results New results object.
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
     * Wraps results in appopriate results class for this RetrievePublishedPosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_RetrievePublishedPosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_RetrievePublishedPosts_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrievePublishedPosts choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrievePublishedPosts_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrievePublishedPosts choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_RetrievePublishedPosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrievePublishedPosts execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of queued posts for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveQueuedPosts extends Temboo_Choreography
{
    /**
     * Retrieves a list of queued posts for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this RetrieveQueuedPosts choreography.
     * @return Tumblr_RetrieveQueuedPosts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/RetrieveQueuedPosts/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveQueuedPosts choreography.
     *
     * @param Tumblr_RetrieveQueuedPosts_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveQueuedPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveQueuedPosts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_RetrieveQueuedPosts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveQueuedPosts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveQueuedPosts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_RetrieveQueuedPosts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveQueuedPosts choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveQueuedPosts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveQueuedPosts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveQueuedPosts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveQueuedPosts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveQueuedPosts choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveQueuedPosts choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveQueuedPosts choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this RetrieveQueuedPosts choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveQueuedPosts choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_RetrieveQueuedPosts_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RetrieveQueuedPosts choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveQueuedPosts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveQueuedPosts choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveQueuedPosts execution.
     * @param Tumblr_RetrieveQueuedPosts $choreo The choregraphy object for this execution.
     * @param Tumblr_RetrieveQueuedPosts_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveQueuedPosts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveQueuedPosts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_RetrieveQueuedPosts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveQueuedPosts execution.
     *
     * @return Tumblr_RetrieveQueuedPosts_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveQueuedPosts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_RetrieveQueuedPosts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_RetrieveQueuedPosts_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveQueuedPosts choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveQueuedPosts_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveQueuedPosts choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_RetrieveQueuedPosts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveQueuedPosts execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns general information about the blog, such as the title, number of posts, and other high-level data.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveBlogInfo extends Temboo_Choreography
{
    /**
     * Returns general information about the blog, such as the title, number of posts, and other high-level data.
     *
     * @param Temboo_Session $session The session that owns this RetrieveBlogInfo choreography.
     * @return Tumblr_RetrieveBlogInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/RetrieveBlogInfo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveBlogInfo choreography.
     *
     * @param Tumblr_RetrieveBlogInfo_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveBlogInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveBlogInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_RetrieveBlogInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveBlogInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveBlogInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_RetrieveBlogInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveBlogInfo choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveBlogInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveBlogInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveBlogInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveBlogInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_RetrieveBlogInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_RetrieveBlogInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveBlogInfo choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_RetrieveBlogInfo_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the BaseHostname input for this RetrieveBlogInfo choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_RetrieveBlogInfo_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }
}


/**
 * Execution object for the RetrieveBlogInfo choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveBlogInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveBlogInfo choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveBlogInfo execution.
     * @param Tumblr_RetrieveBlogInfo $choreo The choregraphy object for this execution.
     * @param Tumblr_RetrieveBlogInfo_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveBlogInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveBlogInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_RetrieveBlogInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveBlogInfo execution.
     *
     * @return Tumblr_RetrieveBlogInfo_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveBlogInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_RetrieveBlogInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_RetrieveBlogInfo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveBlogInfo choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveBlogInfo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveBlogInfo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_RetrieveBlogInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveBlogInfo execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the count of followers for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveBlogFollowers extends Temboo_Choreography
{
    /**
     * Retrieves the count of followers for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this RetrieveBlogFollowers choreography.
     * @return Tumblr_RetrieveBlogFollowers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/RetrieveBlogFollowers/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveBlogFollowers choreography.
     *
     * @param Tumblr_RetrieveBlogFollowers_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveBlogFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveBlogFollowers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_RetrieveBlogFollowers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveBlogFollowers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveBlogFollowers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_RetrieveBlogFollowers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveBlogFollowers choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveBlogFollowers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveBlogFollowers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveBlogFollowers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveBlogFollowers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveBlogFollowers choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveBlogFollowers choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveBlogFollowers choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this RetrieveBlogFollowers choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com)
     * @return Tumblr_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Limit input for this RetrieveBlogFollowers choreography.
     *
     * @param int $value (optional, integer) The number of results to return: 1 - 20. Defaults to 20.
     * @return Tumblr_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this RetrieveBlogFollowers choreography.
     *
     * @param int $value (optional, integer) The result to start at. Defaults to 0.
     * @return Tumblr_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveBlogFollowers choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_RetrieveBlogFollowers_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RetrieveBlogFollowers choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveBlogFollowers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveBlogFollowers choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveBlogFollowers execution.
     * @param Tumblr_RetrieveBlogFollowers $choreo The choregraphy object for this execution.
     * @param Tumblr_RetrieveBlogFollowers_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveBlogFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveBlogFollowers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_RetrieveBlogFollowers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveBlogFollowers execution.
     *
     * @return Tumblr_RetrieveBlogFollowers_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveBlogFollowers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_RetrieveBlogFollowers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_RetrieveBlogFollowers_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveBlogFollowers choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveBlogFollowers_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveBlogFollowers choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_RetrieveBlogFollowers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveBlogFollowers execution.
     *
     * @return string (xml) The response from Tumblr in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified text post on a Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditTextPost extends Temboo_Choreography
{
    /**
     * Updates a specified text post on a Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this EditTextPost choreography.
     * @return Tumblr_EditTextPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/EditTextPost/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this EditTextPost choreography.
     *
     * @param Tumblr_EditTextPost_Inputs|array $inputs (optional) Inputs as Tumblr_EditTextPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_EditTextPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_EditTextPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditTextPost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_EditTextPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_EditTextPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditTextPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditTextPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the EditTextPost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_EditTextPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditTextPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Body input for this EditTextPost choreography.
     *
     * @param string $value (required, string) The full post body, HTML allowed.
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the APIKey input for this EditTextPost choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditTextPost choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditTextPost choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditTextPost choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this EditTextPost choreography.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ID input for this EditTextPost choreography.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Markdown input for this EditTextPost choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditTextPost choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditTextPost choreography.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this EditTextPost choreography.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditTextPost choreography.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this EditTextPost choreography.
     *
     * @param string $value (optional, string) The optional title of the post. HTML entities must be escaped.
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Tweet input for this EditTextPost choreography.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_EditTextPost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the EditTextPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditTextPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditTextPost choreography.
     *
     * @param Temboo_Session $session The session that owns this EditTextPost execution.
     * @param Tumblr_EditTextPost $choreo The choregraphy object for this execution.
     * @param Tumblr_EditTextPost_Inputs|array $inputs (optional) Inputs as Tumblr_EditTextPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_EditTextPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_EditTextPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditTextPost execution.
     *
     * @return Tumblr_EditTextPost_Results New results object.
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
     * Wraps results in appopriate results class for this EditTextPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_EditTextPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_EditTextPost_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the EditTextPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditTextPost_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the EditTextPost choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_EditTextPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this EditTextPost execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new photo post using a an image that you specify.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreatePhotoPostWithImageFile extends Temboo_Choreography
{
    /**
     * Creates a new photo post using a an image that you specify.
     *
     * @param Temboo_Session $session The session that owns this CreatePhotoPostWithImageFile choreography.
     * @return Tumblr_CreatePhotoPostWithImageFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/CreatePhotoPostWithImageFile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreatePhotoPostWithImageFile choreography.
     *
     * @param Tumblr_CreatePhotoPostWithImageFile_Inputs|array $inputs (optional) Inputs as Tumblr_CreatePhotoPostWithImageFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_CreatePhotoPostWithImageFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_CreatePhotoPostWithImageFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreatePhotoPostWithImageFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_CreatePhotoPostWithImageFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreatePhotoPostWithImageFile choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreatePhotoPostWithImageFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreatePhotoPostWithImageFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreatePhotoPostWithImageFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Data input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (conditional, string) The base64 ecoded contents of the image you want to post.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setData($value)
    {
        return $this->set('Data', $value);
    }

    /**
     * Set the value for the APIKey input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Caption input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, string) The user-supplied caption. HTML is allowed.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setCaption($value)
    {
        return $this->set('Caption', $value);
    }

    /**
     * Set the value for the Date input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Link input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, string) The "click-through URL" for the photo.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the Markdown input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this CreatePhotoPostWithImageFile choreography.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_CreatePhotoPostWithImageFile_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }

}


/**
 * Execution object for the CreatePhotoPostWithImageFile choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreatePhotoPostWithImageFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreatePhotoPostWithImageFile choreography.
     *
     * @param Temboo_Session $session The session that owns this CreatePhotoPostWithImageFile execution.
     * @param Tumblr_CreatePhotoPostWithImageFile $choreo The choregraphy object for this execution.
     * @param Tumblr_CreatePhotoPostWithImageFile_Inputs|array $inputs (optional) Inputs as Tumblr_CreatePhotoPostWithImageFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_CreatePhotoPostWithImageFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_CreatePhotoPostWithImageFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreatePhotoPostWithImageFile execution.
     *
     * @return Tumblr_CreatePhotoPostWithImageFile_Results New results object.
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
     * Wraps results in appopriate results class for this CreatePhotoPostWithImageFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_CreatePhotoPostWithImageFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_CreatePhotoPostWithImageFile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreatePhotoPostWithImageFile choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreatePhotoPostWithImageFile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreatePhotoPostWithImageFile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_CreatePhotoPostWithImageFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreatePhotoPostWithImageFile execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to like a specified post.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_LikePost extends Temboo_Choreography
{
    /**
     * Allows a user to like a specified post.
     *
     * @param Temboo_Session $session The session that owns this LikePost choreography.
     * @return Tumblr_LikePost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/LikePost/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this LikePost choreography.
     *
     * @param Tumblr_LikePost_Inputs|array $inputs (optional) Inputs as Tumblr_LikePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_LikePost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_LikePost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LikePost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_LikePost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_LikePost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LikePost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_LikePost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the LikePost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_LikePost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LikePost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_LikePost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_LikePost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this LikePost choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_LikePost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LikePost choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_LikePost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LikePost choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_LikePost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ID input for this LikePost choreography.
     *
     * @param int $value (required, integer) The ID of the post you want to like.
     * @return Tumblr_LikePost_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the ReblogKey input for this LikePost choreography.
     *
     * @param string $value (required, string) The reblog key for the post id. This can be retrieved with the RetrievePublishedPosts Choreo.
     * @return Tumblr_LikePost_Inputs For method chaining.
     */
    public function setReblogKey($value)
    {
        return $this->set('ReblogKey', $value);
    }

    /**
     * Set the value for the SecretKey input for this LikePost choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_LikePost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the LikePost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_LikePost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LikePost choreography.
     *
     * @param Temboo_Session $session The session that owns this LikePost execution.
     * @param Tumblr_LikePost $choreo The choregraphy object for this execution.
     * @param Tumblr_LikePost_Inputs|array $inputs (optional) Inputs as Tumblr_LikePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_LikePost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_LikePost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LikePost execution.
     *
     * @return Tumblr_LikePost_Results New results object.
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
     * Wraps results in appopriate results class for this LikePost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_LikePost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_LikePost_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the LikePost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_LikePost_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the LikePost choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_LikePost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this LikePost execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new photo post using a specified source image URL.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreatePhotoPostWithURL extends Temboo_Choreography
{
    /**
     * Creates a new photo post using a specified source image URL.
     *
     * @param Temboo_Session $session The session that owns this CreatePhotoPostWithURL choreography.
     * @return Tumblr_CreatePhotoPostWithURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/CreatePhotoPostWithURL/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreatePhotoPostWithURL choreography.
     *
     * @param Tumblr_CreatePhotoPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_CreatePhotoPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_CreatePhotoPostWithURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_CreatePhotoPostWithURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreatePhotoPostWithURL choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_CreatePhotoPostWithURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreatePhotoPostWithURL choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreatePhotoPostWithURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreatePhotoPostWithURL choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreatePhotoPostWithURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Source input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (required, string) The photo source URL.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setSource($value)
    {
        return $this->set('Source', $value);
    }

    /**
     * Set the value for the APIKey input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Caption input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (optional, string) The user-supplied caption. HTML is allowed.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setCaption($value)
    {
        return $this->set('Caption', $value);
    }

    /**
     * Set the value for the Date input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Link input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (optional, string) The "click-through URL" for the photo.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the Markdown input for this CreatePhotoPostWithURL choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this CreatePhotoPostWithURL choreography.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_CreatePhotoPostWithURL_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the CreatePhotoPostWithURL choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreatePhotoPostWithURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreatePhotoPostWithURL choreography.
     *
     * @param Temboo_Session $session The session that owns this CreatePhotoPostWithURL execution.
     * @param Tumblr_CreatePhotoPostWithURL $choreo The choregraphy object for this execution.
     * @param Tumblr_CreatePhotoPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_CreatePhotoPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_CreatePhotoPostWithURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_CreatePhotoPostWithURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreatePhotoPostWithURL execution.
     *
     * @return Tumblr_CreatePhotoPostWithURL_Results New results object.
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
     * Wraps results in appopriate results class for this CreatePhotoPostWithURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_CreatePhotoPostWithURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_CreatePhotoPostWithURL_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreatePhotoPostWithURL choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreatePhotoPostWithURL_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreatePhotoPostWithURL choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_CreatePhotoPostWithURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreatePhotoPostWithURL execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the liked posts for the user that corresponds to the OAuth credentials provided.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveUserLikes extends Temboo_Choreography
{
    /**
     * Retrieves the liked posts for the user that corresponds to the OAuth credentials provided.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUserLikes choreography.
     * @return Tumblr_RetrieveUserLikes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/RetrieveUserLikes/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveUserLikes choreography.
     *
     * @param Tumblr_RetrieveUserLikes_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveUserLikes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveUserLikes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_RetrieveUserLikes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveUserLikes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveUserLikes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_RetrieveUserLikes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveUserLikes choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveUserLikes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveUserLikes choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveUserLikes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveUserLikes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_RetrieveUserLikes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveUserLikes choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveUserLikes choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveUserLikes choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this RetrieveUserLikes choreography.
     *
     * @param int $value (optional, integer) The number of results to return: 1 - 20. Defaults to 20.
     * @return Tumblr_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this RetrieveUserLikes choreography.
     *
     * @param int $value (optional, integer) The result to start at. Defaults to 0.
     * @return Tumblr_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveUserLikes choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_RetrieveUserLikes_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RetrieveUserLikes choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveUserLikes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveUserLikes choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUserLikes execution.
     * @param Tumblr_RetrieveUserLikes $choreo The choregraphy object for this execution.
     * @param Tumblr_RetrieveUserLikes_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveUserLikes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveUserLikes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_RetrieveUserLikes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveUserLikes execution.
     *
     * @return Tumblr_RetrieveUserLikes_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveUserLikes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_RetrieveUserLikes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_RetrieveUserLikes_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveUserLikes choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveUserLikes_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveUserLikes choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_RetrieveUserLikes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveUserLikes execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the blogs followed by the user whose OAuth credentials are provided.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveFollowedBlogsForUser extends Temboo_Choreography
{
    /**
     * Retrieve the blogs followed by the user whose OAuth credentials are provided.
     *
     * @param Temboo_Session $session The session that owns this RetrieveFollowedBlogsForUser choreography.
     * @return Tumblr_RetrieveFollowedBlogsForUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/RetrieveFollowedBlogsForUser/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveFollowedBlogsForUser choreography.
     *
     * @param Tumblr_RetrieveFollowedBlogsForUser_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveFollowedBlogsForUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveFollowedBlogsForUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_RetrieveFollowedBlogsForUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveFollowedBlogsForUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveFollowedBlogsForUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_RetrieveFollowedBlogsForUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveFollowedBlogsForUser choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveFollowedBlogsForUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveFollowedBlogsForUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveFollowedBlogsForUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveFollowedBlogsForUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveFollowedBlogsForUser choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveFollowedBlogsForUser choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveFollowedBlogsForUser choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this RetrieveFollowedBlogsForUser choreography.
     *
     * @param int $value (optional, integer) The number of results to return: 1 - 20. Defaults to 20.
     * @return Tumblr_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this RetrieveFollowedBlogsForUser choreography.
     *
     * @param int $value (optional, integer) The result to start at. Defaults to 0.
     * @return Tumblr_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveFollowedBlogsForUser choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_RetrieveFollowedBlogsForUser_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }
}


/**
 * Execution object for the RetrieveFollowedBlogsForUser choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveFollowedBlogsForUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveFollowedBlogsForUser choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveFollowedBlogsForUser execution.
     * @param Tumblr_RetrieveFollowedBlogsForUser $choreo The choregraphy object for this execution.
     * @param Tumblr_RetrieveFollowedBlogsForUser_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveFollowedBlogsForUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveFollowedBlogsForUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_RetrieveFollowedBlogsForUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveFollowedBlogsForUser execution.
     *
     * @return Tumblr_RetrieveFollowedBlogsForUser_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveFollowedBlogsForUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_RetrieveFollowedBlogsForUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_RetrieveFollowedBlogsForUser_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveFollowedBlogsForUser choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveFollowedBlogsForUser_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveFollowedBlogsForUser choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_RetrieveFollowedBlogsForUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveFollowedBlogsForUser execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the dashboard of the user that corresponds to the OAuth credentials provided.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveUserDashboard extends Temboo_Choreography
{
    /**
     * Retrieves the dashboard of the user that corresponds to the OAuth credentials provided.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUserDashboard choreography.
     * @return Tumblr_RetrieveUserDashboard New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/RetrieveUserDashboard/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveUserDashboard choreography.
     *
     * @param Tumblr_RetrieveUserDashboard_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveUserDashboard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveUserDashboard_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_RetrieveUserDashboard_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveUserDashboard choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveUserDashboard_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_RetrieveUserDashboard_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveUserDashboard choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveUserDashboard_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveUserDashboard choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_RetrieveUserDashboard_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveUserDashboard input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveUserDashboard choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveUserDashboard choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveUserDashboard choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this RetrieveUserDashboard choreography.
     *
     * @param int $value (optional, integer) The number of results to return: 1 - 20. Defaults to 20.
     * @return Tumblr_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the NotesInfo input for this RetrieveUserDashboard choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether to return notes information. Specify 1(true) or 0 (false). Defaults to 0.
     * @return Tumblr_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setNotesInfo($value)
    {
        return $this->set('NotesInfo', $value);
    }

    /**
     * Set the value for the Offset input for this RetrieveUserDashboard choreography.
     *
     * @param int $value (optional, integer) The result to start at. Defaults to 0.
     * @return Tumblr_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ReblogInfo input for this RetrieveUserDashboard choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether to return reblog information. Specify 1(true) or 0 (false). Defaults to 0.
     * @return Tumblr_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setReblogInfo($value)
    {
        return $this->set('ReblogInfo', $value);
    }

    /**
     * Set the value for the SecretKey input for this RetrieveUserDashboard choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the SinceId input for this RetrieveUserDashboard choreography.
     *
     * @param int $value (optional, integer) Return posts that have appeared after this ID. Used to page through results.
     * @return Tumblr_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the Type input for this RetrieveUserDashboard choreography.
     *
     * @param string $value (optional, string) The type of post to return. Specify one of the following:  text, photo, quote, link, chat, audio, video, answer.
     * @return Tumblr_RetrieveUserDashboard_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the RetrieveUserDashboard choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveUserDashboard_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveUserDashboard choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUserDashboard execution.
     * @param Tumblr_RetrieveUserDashboard $choreo The choregraphy object for this execution.
     * @param Tumblr_RetrieveUserDashboard_Inputs|array $inputs (optional) Inputs as Tumblr_RetrieveUserDashboard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_RetrieveUserDashboard_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_RetrieveUserDashboard $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveUserDashboard execution.
     *
     * @return Tumblr_RetrieveUserDashboard_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveUserDashboard execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_RetrieveUserDashboard_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_RetrieveUserDashboard_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveUserDashboard choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_RetrieveUserDashboard_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveUserDashboard choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_RetrieveUserDashboard_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveUserDashboard execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a specified photo post on a Tumblr blog using an image source link.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditPhotoPostWithURL extends Temboo_Choreography
{
    /**
     * Updates a specified photo post on a Tumblr blog using an image source link.
     *
     * @param Temboo_Session $session The session that owns this EditPhotoPostWithURL choreography.
     * @return Tumblr_EditPhotoPostWithURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/EditPhotoPostWithURL/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this EditPhotoPostWithURL choreography.
     *
     * @param Tumblr_EditPhotoPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_EditPhotoPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_EditPhotoPostWithURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_EditPhotoPostWithURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditPhotoPostWithURL choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_EditPhotoPostWithURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_EditPhotoPostWithURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditPhotoPostWithURL choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditPhotoPostWithURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the EditPhotoPostWithURL choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_EditPhotoPostWithURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditPhotoPostWithURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Source input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (required, string) The photo source URL.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setSource($value)
    {
        return $this->set('Source', $value);
    }

    /**
     * Set the value for the APIKey input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Caption input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (optional, string) The user-supplied caption. HTML is allowed.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setCaption($value)
    {
        return $this->set('Caption', $value);
    }

    /**
     * Set the value for the Date input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ID input for this EditPhotoPostWithURL choreography.
     *
     * @param int $value (required, integer) The ID of the post you want to edit.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Link input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (optional, string) The "click-through URL" for the photo.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setLink($value)
    {
        return $this->set('Link', $value);
    }

    /**
     * Set the value for the Markdown input for this EditPhotoPostWithURL choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the SecretKey input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this EditPhotoPostWithURL choreography.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_EditPhotoPostWithURL_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the EditPhotoPostWithURL choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditPhotoPostWithURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditPhotoPostWithURL choreography.
     *
     * @param Temboo_Session $session The session that owns this EditPhotoPostWithURL execution.
     * @param Tumblr_EditPhotoPostWithURL $choreo The choregraphy object for this execution.
     * @param Tumblr_EditPhotoPostWithURL_Inputs|array $inputs (optional) Inputs as Tumblr_EditPhotoPostWithURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_EditPhotoPostWithURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_EditPhotoPostWithURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditPhotoPostWithURL execution.
     *
     * @return Tumblr_EditPhotoPostWithURL_Results New results object.
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
     * Wraps results in appopriate results class for this EditPhotoPostWithURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_EditPhotoPostWithURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_EditPhotoPostWithURL_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the EditPhotoPostWithURL choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_EditPhotoPostWithURL_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the EditPhotoPostWithURL choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_EditPhotoPostWithURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this EditPhotoPostWithURL execution.
     *
     * @return string (xml) The response from Tumblr in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new link post for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateLinkPost extends Temboo_Choreography
{
    /**
     * Creates a new link post for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this CreateLinkPost choreography.
     * @return Tumblr_CreateLinkPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/CreateLinkPost/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateLinkPost choreography.
     *
     * @param Tumblr_CreateLinkPost_Inputs|array $inputs (optional) Inputs as Tumblr_CreateLinkPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_CreateLinkPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_CreateLinkPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateLinkPost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_CreateLinkPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_CreateLinkPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateLinkPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateLinkPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateLinkPost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_CreateLinkPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateLinkPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the URL input for this CreateLinkPost choreography.
     *
     * @param string $value (required, string) The link you want to post.
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the APIKey input for this CreateLinkPost choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateLinkPost choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateLinkPost choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreateLinkPost choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this CreateLinkPost choreography.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Description input for this CreateLinkPost choreography.
     *
     * @param string $value (optional, string) A user-supplied description. HTML is allowed.
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Markdown input for this CreateLinkPost choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreateLinkPost choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreateLinkPost choreography.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this CreateLinkPost choreography.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreateLinkPost choreography.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this CreateLinkPost choreography.
     *
     * @param string $value (optional, string) The title of the page the link points to. HTML entities should be escaped.
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Tweet input for this CreateLinkPost choreography.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_CreateLinkPost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the CreateLinkPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateLinkPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateLinkPost choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateLinkPost execution.
     * @param Tumblr_CreateLinkPost $choreo The choregraphy object for this execution.
     * @param Tumblr_CreateLinkPost_Inputs|array $inputs (optional) Inputs as Tumblr_CreateLinkPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_CreateLinkPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_CreateLinkPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateLinkPost execution.
     *
     * @return Tumblr_CreateLinkPost_Results New results object.
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
     * Wraps results in appopriate results class for this CreateLinkPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_CreateLinkPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_CreateLinkPost_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateLinkPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateLinkPost_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateLinkPost choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_CreateLinkPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateLinkPost execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new text post for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateQuotePost extends Temboo_Choreography
{
    /**
     * Creates a new text post for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this CreateQuotePost choreography.
     * @return Tumblr_CreateQuotePost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/CreateQuotePost/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateQuotePost choreography.
     *
     * @param Tumblr_CreateQuotePost_Inputs|array $inputs (optional) Inputs as Tumblr_CreateQuotePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_CreateQuotePost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_CreateQuotePost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateQuotePost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_CreateQuotePost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_CreateQuotePost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateQuotePost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateQuotePost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateQuotePost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_CreateQuotePost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateQuotePost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Quote input for this CreateQuotePost choreography.
     *
     * @param string $value (required, string) The full text of the quote. HTML entities must be escpaed.
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setQuote($value)
    {
        return $this->set('Quote', $value);
    }

    /**
     * Set the value for the APIKey input for this CreateQuotePost choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateQuotePost choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateQuotePost choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreateQuotePost choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this CreateQuotePost choreography.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Markdown input for this CreateQuotePost choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreateQuotePost choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreateQuotePost choreography.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the Source input for this CreateQuotePost choreography.
     *
     * @param string $value (optional, string) The cited source of the quote. HTML is allowed.
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setSource($value)
    {
        return $this->set('Source', $value);
    }

    /**
     * Set the value for the State input for this CreateQuotePost choreography.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreateQuotePost choreography.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Tweet input for this CreateQuotePost choreography.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_CreateQuotePost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the CreateQuotePost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateQuotePost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateQuotePost choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateQuotePost execution.
     * @param Tumblr_CreateQuotePost $choreo The choregraphy object for this execution.
     * @param Tumblr_CreateQuotePost_Inputs|array $inputs (optional) Inputs as Tumblr_CreateQuotePost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_CreateQuotePost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_CreateQuotePost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateQuotePost execution.
     *
     * @return Tumblr_CreateQuotePost_Results New results object.
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
     * Wraps results in appopriate results class for this CreateQuotePost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_CreateQuotePost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_CreateQuotePost_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateQuotePost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateQuotePost_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateQuotePost choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_CreateQuotePost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateQuotePost execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new quote post for a specified Tumblr blog.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateTextPost extends Temboo_Choreography
{
    /**
     * Creates a new quote post for a specified Tumblr blog.
     *
     * @param Temboo_Session $session The session that owns this CreateTextPost choreography.
     * @return Tumblr_CreateTextPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Tumblr/CreateTextPost/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateTextPost choreography.
     *
     * @param Tumblr_CreateTextPost_Inputs|array $inputs (optional) Inputs as Tumblr_CreateTextPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_CreateTextPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Tumblr_CreateTextPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateTextPost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_CreateTextPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Tumblr_CreateTextPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateTextPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateTextPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateTextPost choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Tumblr_CreateTextPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateTextPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Body input for this CreateTextPost choreography.
     *
     * @param string $value (required, string) The full post body, HTML allowed.
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the APIKey input for this CreateTextPost choreography.
     *
     * @param string $value (required, string) The API Key provided by Tumblr (AKA the OAuth Consumer Key).
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateTextPost choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateTextPost choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the BaseHostname input for this CreateTextPost choreography.
     *
     * @param string $value (required, string) The standard or custom blog hostname (i.e. temboo.tumblr.com).
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setBaseHostname($value)
    {
        return $this->set('BaseHostname', $value);
    }

    /**
     * Set the value for the Date input for this CreateTextPost choreography.
     *
     * @param string $value (optional, date) The GMT date and time of the post. Can be an epoch timestamp in milliseconds or formatted like: Dec 8th, 2011 4:03pm. Defaults to NOW().
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Markdown input for this CreateTextPost choreography.
     *
     * @param bool $value (optional, boolean) Indicates whether the post uses markdown syntax. Defaults to false. Set to 1 to indicate true.
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setMarkdown($value)
    {
        return $this->set('Markdown', $value);
    }

    /**
     * Set the value for the SecretKey input for this CreateTextPost choreography.
     *
     * @param string $value (required, string) The Secret Key provided by Tumblr (AKA the OAuth Consumer Secret).
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setSecretKey($value)
    {
        return $this->set('SecretKey', $value);
    }

    /**
     * Set the value for the Slug input for this CreateTextPost choreography.
     *
     * @param string $value (optional, string) Adds a short text summary to the end of the post URL.
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setSlug($value)
    {
        return $this->set('Slug', $value);
    }

    /**
     * Set the value for the State input for this CreateTextPost choreography.
     *
     * @param string $value (optional, string) The state of the post. Specify one of the following:  published, draft, queue. Defaults to published.
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Tags input for this CreateTextPost choreography.
     *
     * @param string $value (optional, string) Comma-separated tags for this post.
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this CreateTextPost choreography.
     *
     * @param string $value (optional, string) The optional title of the post. HTML entities must be escaped.
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Tweet input for this CreateTextPost choreography.
     *
     * @param string $value (optional, string) Manages the autotweet (if enabled) for this post. Defaults to off for no tweet. Enter text to override the default tweet.
     * @return Tumblr_CreateTextPost_Inputs For method chaining.
     */
    public function setTweet($value)
    {
        return $this->set('Tweet', $value);
    }
}


/**
 * Execution object for the CreateTextPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateTextPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateTextPost choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateTextPost execution.
     * @param Tumblr_CreateTextPost $choreo The choregraphy object for this execution.
     * @param Tumblr_CreateTextPost_Inputs|array $inputs (optional) Inputs as Tumblr_CreateTextPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Tumblr_CreateTextPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Tumblr_CreateTextPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateTextPost execution.
     *
     * @return Tumblr_CreateTextPost_Results New results object.
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
     * Wraps results in appopriate results class for this CreateTextPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Tumblr_CreateTextPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Tumblr_CreateTextPost_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateTextPost choreography.
 *
 * @package Temboo
 * @subpackage Tumblr
 */
class Tumblr_CreateTextPost_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateTextPost choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Tumblr_CreateTextPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateTextPost execution.
     *
     * @return string (xml) The response from Tumblr in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>