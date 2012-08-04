<?php

/**
 * Temboo PHP SDK LastFm classes
 *
 * Execute Choreographies from the Temboo LastFm bundle.
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
 * @subpackage LastFm
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Searches for an album by name. Returns album matches sorted by relevance.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_Search extends Temboo_Choreography
{
    /**
     * Searches for an album by name. Returns album matches sorted by relevance.
     *
     * @param Temboo_Session $session The session that owns this Search choreography.
     * @return LastFm_Album_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Album/Search/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Search choreography.
     *
     * @param LastFm_Album_Search_Inputs|array $inputs (optional) Inputs as LastFm_Album_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Album_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Album_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Search choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_Search_Inputs New instance.
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
     * @return LastFm_Album_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Album_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Search choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_Album_Search_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Album input for this Search choreography.
     *
     * @param string $value (string) The album name.
     * @return LastFm_Album_Search_Inputs For method chaining.
     */
    public function setAlbum($value)
    {
        return $this->set('Album', $value);
    }

    /**
     * Set the value for the Limit input for this Search choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 30.
     * @return LastFm_Album_Search_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this Search choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_Album_Search_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the Search choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search choreography.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param LastFm_Album_Search $choreo The choregraphy object for this execution.
     * @param LastFm_Album_Search_Inputs|array $inputs (optional) Inputs as LastFm_Album_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Album_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return LastFm_Album_Search_Results New results object.
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
     * @return LastFm_Album_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Album_Search_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Search choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_Search_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Search choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Album_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the top tags for an artist on Last.fm, ordered by popularity.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopTags extends Temboo_Choreography
{
    /**
     * Retrieves the top tags for an artist on Last.fm, ordered by popularity.
     *
     * @param Temboo_Session $session The session that owns this GetTopTags choreography.
     * @return LastFm_Artist_GetTopTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetTopTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTopTags choreography.
     *
     * @param LastFm_Artist_GetTopTags_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetTopTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetTopTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetTopTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTopTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetTopTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetTopTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTopTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTopTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetTopTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTopTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetTopTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetTopTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTopTags choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Artist_GetTopTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetTopTags choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Artist_GetTopTags_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetTopTags choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Artist_GetTopTags_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the MbID input for this GetTopTags choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the artist. Required unless providing Artist.
     * @return LastFm_Artist_GetTopTags_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }
}


/**
 * Execution object for the GetTopTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTopTags choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTopTags execution.
     * @param LastFm_Artist_GetTopTags $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetTopTags_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetTopTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetTopTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetTopTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTopTags execution.
     *
     * @return LastFm_Artist_GetTopTags_Results New results object.
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
     * Wraps results in appopriate results class for this GetTopTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetTopTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetTopTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTopTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTopTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetTopTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTopTags execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a paginated list of all events recommended to a user by Last.fm, based on their listening profile. 
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecommendedEvents extends Temboo_Choreography
{
    /**
     * Retrieves a paginated list of all events recommended to a user by Last.fm, based on their listening profile. 
     *
     * @param Temboo_Session $session The session that owns this GetRecommendedEvents choreography.
     * @return LastFm_User_GetRecommendedEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetRecommendedEvents/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRecommendedEvents choreography.
     *
     * @param LastFm_User_GetRecommendedEvents_Inputs|array $inputs (optional) Inputs as LastFm_User_GetRecommendedEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetRecommendedEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetRecommendedEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecommendedEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetRecommendedEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetRecommendedEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecommendedEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecommendedEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRecommendedEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetRecommendedEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecommendedEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetRecommendedEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetRecommendedEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRecommendedEvents choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetRecommendedEvents_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetRecommendedEvents choreography.
     *
     * @param string $value (string) Your Last.fm API Secret.
     * @return LastFm_User_GetRecommendedEvents_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Limit input for this GetRecommendedEvents choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_User_GetRecommendedEvents_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetRecommendedEvents choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to first page.
     * @return LastFm_User_GetRecommendedEvents_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SessionKey input for this GetRecommendedEvents choreography.
     *
     * @param string $value (string) The session key retrieved in the last step of the authorization process.
     * @return LastFm_User_GetRecommendedEvents_Inputs For method chaining.
     */
    public function setSessionKey($value)
    {
        return $this->set('SessionKey', $value);
    }
}


/**
 * Execution object for the GetRecommendedEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecommendedEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecommendedEvents choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRecommendedEvents execution.
     * @param LastFm_User_GetRecommendedEvents $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetRecommendedEvents_Inputs|array $inputs (optional) Inputs as LastFm_User_GetRecommendedEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetRecommendedEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetRecommendedEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecommendedEvents execution.
     *
     * @return LastFm_User_GetRecommendedEvents_Results New results object.
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
     * Wraps results in appopriate results class for this GetRecommendedEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetRecommendedEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetRecommendedEvents_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRecommendedEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecommendedEvents_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRecommendedEvents choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetRecommendedEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRecommendedEvents execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of upcoming events that a user is attending.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetEvents extends Temboo_Choreography
{
    /**
     * Retrieves a list of upcoming events that a user is attending.
     *
     * @param Temboo_Session $session The session that owns this GetEvents choreography.
     * @return LastFm_User_GetEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetEvents/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetEvents choreography.
     *
     * @param LastFm_User_GetEvents_Inputs|array $inputs (optional) Inputs as LastFm_User_GetEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetEvents choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetEvents_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FestivalsOnly input for this GetEvents choreography.
     *
     * @param bool $value (optional, boolean) Whether only festivals should be returned, or all events. Defaults to 0 to return all events.
     * @return LastFm_User_GetEvents_Inputs For method chaining.
     */
    public function setFestivalsOnly($value)
    {
        return $this->set('FestivalsOnly', $value);
    }

    /**
     * Set the value for the Limit input for this GetEvents choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_User_GetEvents_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetEvents choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_User_GetEvents_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the User input for this GetEvents choreography.
     *
     * @param string $value (string) The user to fetch the events for.
     * @return LastFm_User_GetEvents_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEvents choreography.
     *
     * @param Temboo_Session $session The session that owns this GetEvents execution.
     * @param LastFm_User_GetEvents $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetEvents_Inputs|array $inputs (optional) Inputs as LastFm_User_GetEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEvents execution.
     *
     * @return LastFm_User_GetEvents_Results New results object.
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
     * Wraps results in appopriate results class for this GetEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetEvents_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetEvents_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetEvents choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetEvents execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an album chart for a user profile, for a given date range.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyAlbumChart extends Temboo_Choreography
{
    /**
     * Retrieves an album chart for a user profile, for a given date range.
     *
     * @param Temboo_Session $session The session that owns this GetWeeklyAlbumChart choreography.
     * @return LastFm_User_GetWeeklyAlbumChart New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetWeeklyAlbumChart/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetWeeklyAlbumChart choreography.
     *
     * @param LastFm_User_GetWeeklyAlbumChart_Inputs|array $inputs (optional) Inputs as LastFm_User_GetWeeklyAlbumChart_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetWeeklyAlbumChart_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetWeeklyAlbumChart_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWeeklyAlbumChart choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetWeeklyAlbumChart_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetWeeklyAlbumChart_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWeeklyAlbumChart choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyAlbumChart_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetWeeklyAlbumChart choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetWeeklyAlbumChart_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWeeklyAlbumChart input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetWeeklyAlbumChart_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetWeeklyAlbumChart_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetWeeklyAlbumChart choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetWeeklyAlbumChart_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EndTimestamp input for this GetWeeklyAlbumChart choreography.
     *
     * @param string $value (optional, date) End timestamp at which the chart should end on, in UNIX timestamp format. This must be in the UTC time zone.
     * @return LastFm_User_GetWeeklyAlbumChart_Inputs For method chaining.
     */
    public function setEndTimestamp($value)
    {
        return $this->set('EndTimestamp', $value);
    }

    /**
     * Set the value for the StartTimestamp input for this GetWeeklyAlbumChart choreography.
     *
     * @param string $value (optional, date) Beginning timestamp at which the chart should start from, in UNIX timestamp format. This must be in the UTC time zone.
     * @return LastFm_User_GetWeeklyAlbumChart_Inputs For method chaining.
     */
    public function setStartTimestamp($value)
    {
        return $this->set('StartTimestamp', $value);
    }

    /**
     * Set the value for the User input for this GetWeeklyAlbumChart choreography.
     *
     * @param string $value (string) The last.fm username to fetch the charts of.
     * @return LastFm_User_GetWeeklyAlbumChart_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetWeeklyAlbumChart choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyAlbumChart_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWeeklyAlbumChart choreography.
     *
     * @param Temboo_Session $session The session that owns this GetWeeklyAlbumChart execution.
     * @param LastFm_User_GetWeeklyAlbumChart $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetWeeklyAlbumChart_Inputs|array $inputs (optional) Inputs as LastFm_User_GetWeeklyAlbumChart_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetWeeklyAlbumChart_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetWeeklyAlbumChart $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWeeklyAlbumChart execution.
     *
     * @return LastFm_User_GetWeeklyAlbumChart_Results New results object.
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
     * Wraps results in appopriate results class for this GetWeeklyAlbumChart execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetWeeklyAlbumChart_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetWeeklyAlbumChart_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetWeeklyAlbumChart choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyAlbumChart_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetWeeklyAlbumChart choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetWeeklyAlbumChart_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetWeeklyAlbumChart execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves Last.fm artist recommendations for a user.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecommendedArtists extends Temboo_Choreography
{
    /**
     * Retrieves Last.fm artist recommendations for a user.
     *
     * @param Temboo_Session $session The session that owns this GetRecommendedArtists choreography.
     * @return LastFm_User_GetRecommendedArtists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetRecommendedArtists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRecommendedArtists choreography.
     *
     * @param LastFm_User_GetRecommendedArtists_Inputs|array $inputs (optional) Inputs as LastFm_User_GetRecommendedArtists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetRecommendedArtists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetRecommendedArtists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecommendedArtists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetRecommendedArtists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetRecommendedArtists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecommendedArtists choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecommendedArtists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRecommendedArtists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetRecommendedArtists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecommendedArtists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetRecommendedArtists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetRecommendedArtists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRecommendedArtists choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetRecommendedArtists_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetRecommendedArtists choreography.
     *
     * @param string $value (string) Your Last.fm API Secret.
     * @return LastFm_User_GetRecommendedArtists_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Limit input for this GetRecommendedArtists choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_User_GetRecommendedArtists_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetRecommendedArtists choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to first page.
     * @return LastFm_User_GetRecommendedArtists_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SessionKey input for this GetRecommendedArtists choreography.
     *
     * @param string $value (string) The session key retrieved in the last step of the authorization process.
     * @return LastFm_User_GetRecommendedArtists_Inputs For method chaining.
     */
    public function setSessionKey($value)
    {
        return $this->set('SessionKey', $value);
    }
}


/**
 * Execution object for the GetRecommendedArtists choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecommendedArtists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecommendedArtists choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRecommendedArtists execution.
     * @param LastFm_User_GetRecommendedArtists $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetRecommendedArtists_Inputs|array $inputs (optional) Inputs as LastFm_User_GetRecommendedArtists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetRecommendedArtists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetRecommendedArtists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecommendedArtists execution.
     *
     * @return LastFm_User_GetRecommendedArtists_Results New results object.
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
     * Wraps results in appopriate results class for this GetRecommendedArtists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetRecommendedArtists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetRecommendedArtists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRecommendedArtists choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecommendedArtists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRecommendedArtists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetRecommendedArtists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRecommendedArtists execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Tags an artist with one or more user supplied tags. 
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_AddTags extends Temboo_Choreography
{
    /**
     * Tags an artist with one or more user supplied tags. 
     *
     * @param Temboo_Session $session The session that owns this AddTags choreography.
     * @return LastFm_Artist_AddTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/AddTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddTags choreography.
     *
     * @param LastFm_Artist_AddTags_Inputs|array $inputs (optional) Inputs as LastFm_Artist_AddTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_AddTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_AddTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_AddTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_AddTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_AddTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_AddTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_AddTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_AddTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AddTags choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_Artist_AddTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this AddTags choreography.
     *
     * @param string $value (string) Your Last.fm API Secret.
     * @return LastFm_Artist_AddTags_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Artist input for this AddTags choreography.
     *
     * @param string $value (string) The artist name.
     * @return LastFm_Artist_AddTags_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the SessionKey input for this AddTags choreography.
     *
     * @param string $value (string) The session key retrieved in the last step of the authorization process.
     * @return LastFm_Artist_AddTags_Inputs For method chaining.
     */
    public function setSessionKey($value)
    {
        return $this->set('SessionKey', $value);
    }

    /**
     * Set the value for the Tags input for this AddTags choreography.
     *
     * @param string $value (string) A comma delimited list of user supplied tags to apply to this artist. Accepts a maximum of 10 tags.
     * @return LastFm_Artist_AddTags_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }
}


/**
 * Execution object for the AddTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_AddTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddTags choreography.
     *
     * @param Temboo_Session $session The session that owns this AddTags execution.
     * @param LastFm_Artist_AddTags $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_AddTags_Inputs|array $inputs (optional) Inputs as LastFm_Artist_AddTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_AddTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_AddTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddTags execution.
     *
     * @return LastFm_Artist_AddTags_Results New results object.
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
     * Wraps results in appopriate results class for this AddTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_AddTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_AddTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_AddTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_AddTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddTags execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the metadata for an artist including biographical data.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetInfo extends Temboo_Choreography
{
    /**
     * Retrieves the metadata for an artist including biographical data.
     *
     * @param Temboo_Session $session The session that owns this GetInfo choreography.
     * @return LastFm_Artist_GetInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetInfo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetInfo choreography.
     *
     * @param LastFm_Artist_GetInfo_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetInfo choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetInfo choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Artist_GetInfo_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetInfo choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Artist_GetInfo_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetInfo choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Artist_GetInfo_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the Language input for this GetInfo choreography.
     *
     * @param string $value (optional, string) The language to return the biography in, expressed as an ISO 639 alpha-2 code.
     * @return LastFm_Artist_GetInfo_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the MbID input for this GetInfo choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the artist. Required unless providing Artist.
     * @return LastFm_Artist_GetInfo_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }

    /**
     * Set the value for the Username input for this GetInfo choreography.
     *
     * @param string $value (optional, string) The username for the context of the request. If supplied, the user's playcount for this artist is included in the response.
     * @return LastFm_Artist_GetInfo_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetInfo choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetInfo choreography.
     *
     * @param Temboo_Session $session The session that owns this GetInfo execution.
     * @param LastFm_Artist_GetInfo $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetInfo_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetInfo execution.
     *
     * @return LastFm_Artist_GetInfo_Results New results object.
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
     * Wraps results in appopriate results class for this GetInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetInfo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetInfo choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetInfo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetInfo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetInfo execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of the last 50 tracks loved by a user.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetLovedTracks extends Temboo_Choreography
{
    /**
     * Retrieves a list of the last 50 tracks loved by a user.
     *
     * @param Temboo_Session $session The session that owns this GetLovedTracks choreography.
     * @return LastFm_User_GetLovedTracks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetLovedTracks/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetLovedTracks choreography.
     *
     * @param LastFm_User_GetLovedTracks_Inputs|array $inputs (optional) Inputs as LastFm_User_GetLovedTracks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetLovedTracks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetLovedTracks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLovedTracks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetLovedTracks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetLovedTracks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLovedTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetLovedTracks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetLovedTracks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetLovedTracks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLovedTracks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetLovedTracks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetLovedTracks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetLovedTracks choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetLovedTracks_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetLovedTracks choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_User_GetLovedTracks_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetLovedTracks choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_User_GetLovedTracks_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the User input for this GetLovedTracks choreography.
     *
     * @param string $value (string) The user name to fetch the loved tracks for.
     * @return LastFm_User_GetLovedTracks_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetLovedTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetLovedTracks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLovedTracks choreography.
     *
     * @param Temboo_Session $session The session that owns this GetLovedTracks execution.
     * @param LastFm_User_GetLovedTracks $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetLovedTracks_Inputs|array $inputs (optional) Inputs as LastFm_User_GetLovedTracks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetLovedTracks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetLovedTracks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLovedTracks execution.
     *
     * @return LastFm_User_GetLovedTracks_Results New results object.
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
     * Wraps results in appopriate results class for this GetLovedTracks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetLovedTracks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetLovedTracks_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetLovedTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetLovedTracks_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetLovedTracks choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetLovedTracks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetLovedTracks execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Tags an album using a list of user supplied tags. 
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_AddTags extends Temboo_Choreography
{
    /**
     * Tags an album using a list of user supplied tags. 
     *
     * @param Temboo_Session $session The session that owns this AddTags choreography.
     * @return LastFm_Album_AddTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Album/AddTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddTags choreography.
     *
     * @param LastFm_Album_AddTags_Inputs|array $inputs (optional) Inputs as LastFm_Album_AddTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_AddTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Album_AddTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_AddTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Album_AddTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_AddTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_AddTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Album_AddTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Album_AddTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AddTags choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_Album_AddTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this AddTags choreography.
     *
     * @param string $value (string) Your Last.fm API Secret.
     * @return LastFm_Album_AddTags_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Album input for this AddTags choreography.
     *
     * @param string $value (string) The album name.
     * @return LastFm_Album_AddTags_Inputs For method chaining.
     */
    public function setAlbum($value)
    {
        return $this->set('Album', $value);
    }

    /**
     * Set the value for the Artist input for this AddTags choreography.
     *
     * @param string $value (string) The artist name.
     * @return LastFm_Album_AddTags_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the SessionKey input for this AddTags choreography.
     *
     * @param string $value (string) The session key retrieved in the last step of the authorization process.
     * @return LastFm_Album_AddTags_Inputs For method chaining.
     */
    public function setSessionKey($value)
    {
        return $this->set('SessionKey', $value);
    }

    /**
     * Set the value for the Tags input for this AddTags choreography.
     *
     * @param string $value (string) A comma delimited list of user supplied tags to apply to this album. Accepts a maximum of 10 tags.
     * @return LastFm_Album_AddTags_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }
}


/**
 * Execution object for the AddTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_AddTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddTags choreography.
     *
     * @param Temboo_Session $session The session that owns this AddTags execution.
     * @param LastFm_Album_AddTags $choreo The choregraphy object for this execution.
     * @param LastFm_Album_AddTags_Inputs|array $inputs (optional) Inputs as LastFm_Album_AddTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_AddTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Album_AddTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddTags execution.
     *
     * @return LastFm_Album_AddTags_Results New results object.
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
     * Wraps results in appopriate results class for this AddTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Album_AddTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Album_AddTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_AddTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Album_AddTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddTags execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a user's personal tags.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetPersonalTags extends Temboo_Choreography
{
    /**
     * Retrieves a user's personal tags.
     *
     * @param Temboo_Session $session The session that owns this GetPersonalTags choreography.
     * @return LastFm_User_GetPersonalTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetPersonalTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetPersonalTags choreography.
     *
     * @param LastFm_User_GetPersonalTags_Inputs|array $inputs (optional) Inputs as LastFm_User_GetPersonalTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetPersonalTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetPersonalTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPersonalTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetPersonalTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetPersonalTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPersonalTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetPersonalTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetPersonalTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetPersonalTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPersonalTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetPersonalTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetPersonalTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPersonalTags choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetPersonalTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetPersonalTags choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_User_GetPersonalTags_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetPersonalTags choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_User_GetPersonalTags_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Tag input for this GetPersonalTags choreography.
     *
     * @param string $value (string) The tag you're interested in.
     * @return LastFm_User_GetPersonalTags_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }

    /**
     * Set the value for the TaggingType input for this GetPersonalTags choreography.
     *
     * @param string $value (string) The type of items which have been tagged. Valid values are: artist, album, track.
     * @return LastFm_User_GetPersonalTags_Inputs For method chaining.
     */
    public function setTaggingType($value)
    {
        return $this->set('TaggingType', $value);
    }

    /**
     * Set the value for the User input for this GetPersonalTags choreography.
     *
     * @param string $value (string) The user who performed the taggings.
     * @return LastFm_User_GetPersonalTags_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetPersonalTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetPersonalTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPersonalTags choreography.
     *
     * @param Temboo_Session $session The session that owns this GetPersonalTags execution.
     * @param LastFm_User_GetPersonalTags $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetPersonalTags_Inputs|array $inputs (optional) Inputs as LastFm_User_GetPersonalTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetPersonalTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetPersonalTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPersonalTags execution.
     *
     * @return LastFm_User_GetPersonalTags_Results New results object.
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
     * Wraps results in appopriate results class for this GetPersonalTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetPersonalTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetPersonalTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetPersonalTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetPersonalTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetPersonalTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetPersonalTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetPersonalTags execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of Buy Links for a particular Album.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetBuyLinks extends Temboo_Choreography
{
    /**
     * Retrieves a list of Buy Links for a particular Album.
     *
     * @param Temboo_Session $session The session that owns this GetBuyLinks choreography.
     * @return LastFm_Album_GetBuyLinks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Album/GetBuyLinks/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBuyLinks choreography.
     *
     * @param LastFm_Album_GetBuyLinks_Inputs|array $inputs (optional) Inputs as LastFm_Album_GetBuyLinks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_GetBuyLinks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Album_GetBuyLinks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBuyLinks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_GetBuyLinks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Album_GetBuyLinks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBuyLinks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetBuyLinks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBuyLinks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_GetBuyLinks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBuyLinks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Album_GetBuyLinks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Album_GetBuyLinks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetBuyLinks choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Album_GetBuyLinks_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Album input for this GetBuyLinks choreography.
     *
     * @param string $value (conditional, string) The album name. Required unless providing MbID.
     * @return LastFm_Album_GetBuyLinks_Inputs For method chaining.
     */
    public function setAlbum($value)
    {
        return $this->set('Album', $value);
    }

    /**
     * Set the value for the Artist input for this GetBuyLinks choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Album_GetBuyLinks_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetBuyLinks choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Album_GetBuyLinks_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the Country input for this GetBuyLinks choreography.
     *
     * @param string $value (optional, string) A country name, as defined by the ISO 3166-1 country names standard.
     * @return LastFm_Album_GetBuyLinks_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the MbID input for this GetBuyLinks choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the album. Required unless providing the Album and Artist.
     * @return LastFm_Album_GetBuyLinks_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }
}


/**
 * Execution object for the GetBuyLinks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetBuyLinks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBuyLinks choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBuyLinks execution.
     * @param LastFm_Album_GetBuyLinks $choreo The choregraphy object for this execution.
     * @param LastFm_Album_GetBuyLinks_Inputs|array $inputs (optional) Inputs as LastFm_Album_GetBuyLinks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_GetBuyLinks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Album_GetBuyLinks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBuyLinks execution.
     *
     * @return LastFm_Album_GetBuyLinks_Results New results object.
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
     * Wraps results in appopriate results class for this GetBuyLinks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Album_GetBuyLinks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Album_GetBuyLinks_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBuyLinks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetBuyLinks_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBuyLinks choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Album_GetBuyLinks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBuyLinks execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the top fans for an artist on Last.fm, based on listening data.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopFans extends Temboo_Choreography
{
    /**
     * Retrieves the top fans for an artist on Last.fm, based on listening data.
     *
     * @param Temboo_Session $session The session that owns this GetTopFans choreography.
     * @return LastFm_Artist_GetTopFans New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetTopFans/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTopFans choreography.
     *
     * @param LastFm_Artist_GetTopFans_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetTopFans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetTopFans_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetTopFans_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTopFans choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetTopFans_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetTopFans_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTopFans choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopFans_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTopFans choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetTopFans_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTopFans input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetTopFans_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetTopFans_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTopFans choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Artist_GetTopFans_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetTopFans choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Artist_GetTopFans_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetTopFans choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Artist_GetTopFans_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the MbID input for this GetTopFans choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the artist. Required unless providing Artist.
     * @return LastFm_Artist_GetTopFans_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }
}


/**
 * Execution object for the GetTopFans choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopFans_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTopFans choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTopFans execution.
     * @param LastFm_Artist_GetTopFans $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetTopFans_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetTopFans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetTopFans_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetTopFans $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTopFans execution.
     *
     * @return LastFm_Artist_GetTopFans_Results New results object.
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
     * Wraps results in appopriate results class for this GetTopFans execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetTopFans_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetTopFans_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTopFans choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopFans_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTopFans choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetTopFans_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTopFans execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes a user's tag from an artist.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_RemoveTag extends Temboo_Choreography
{
    /**
     * Removes a user's tag from an artist.
     *
     * @param Temboo_Session $session The session that owns this RemoveTag choreography.
     * @return LastFm_Artist_RemoveTag New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/RemoveTag/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RemoveTag choreography.
     *
     * @param LastFm_Artist_RemoveTag_Inputs|array $inputs (optional) Inputs as LastFm_Artist_RemoveTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_RemoveTag_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_RemoveTag_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RemoveTag choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_RemoveTag_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_RemoveTag_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RemoveTag choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_RemoveTag_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RemoveTag choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_RemoveTag_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RemoveTag input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_RemoveTag_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_RemoveTag_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RemoveTag choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_Artist_RemoveTag_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this RemoveTag choreography.
     *
     * @param string $value (string) Your Last.fm API Secret.
     * @return LastFm_Artist_RemoveTag_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Artist input for this RemoveTag choreography.
     *
     * @param string $value (string) The artist name.
     * @return LastFm_Artist_RemoveTag_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the SessionKey input for this RemoveTag choreography.
     *
     * @param string $value (string) The session key retrieved in the last step of the authorization process.
     * @return LastFm_Artist_RemoveTag_Inputs For method chaining.
     */
    public function setSessionKey($value)
    {
        return $this->set('SessionKey', $value);
    }

    /**
     * Set the value for the Tag input for this RemoveTag choreography.
     *
     * @param string $value (string) A single user tag to remove from this artist.
     * @return LastFm_Artist_RemoveTag_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }
}


/**
 * Execution object for the RemoveTag choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_RemoveTag_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RemoveTag choreography.
     *
     * @param Temboo_Session $session The session that owns this RemoveTag execution.
     * @param LastFm_Artist_RemoveTag $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_RemoveTag_Inputs|array $inputs (optional) Inputs as LastFm_Artist_RemoveTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_RemoveTag_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_RemoveTag $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RemoveTag execution.
     *
     * @return LastFm_Artist_RemoveTag_Results New results object.
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
     * Wraps results in appopriate results class for this RemoveTag execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_RemoveTag_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_RemoveTag_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RemoveTag choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_RemoveTag_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RemoveTag choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_RemoveTag_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RemoveTag execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the metadata for an album on Last.fm using the album and artist name or a musicbrainz id.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetInfo extends Temboo_Choreography
{
    /**
     * Retrieves the metadata for an album on Last.fm using the album and artist name or a musicbrainz id.
     *
     * @param Temboo_Session $session The session that owns this GetInfo choreography.
     * @return LastFm_Album_GetInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Album/GetInfo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetInfo choreography.
     *
     * @param LastFm_Album_GetInfo_Inputs|array $inputs (optional) Inputs as LastFm_Album_GetInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_GetInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Album_GetInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_GetInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Album_GetInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetInfo choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_GetInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Album_GetInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Album_GetInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetInfo choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Album_GetInfo_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Album input for this GetInfo choreography.
     *
     * @param string $value (conditional, string) The album name. Required unless providing MbID.
     * @return LastFm_Album_GetInfo_Inputs For method chaining.
     */
    public function setAlbum($value)
    {
        return $this->set('Album', $value);
    }

    /**
     * Set the value for the Artist input for this GetInfo choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Album_GetInfo_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetInfo choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Album_GetInfo_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the Language input for this GetInfo choreography.
     *
     * @param string $value (optional, string) The language to return the biography in, expressed as an ISO 639 alpha-2 code.
     * @return LastFm_Album_GetInfo_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the MbID input for this GetInfo choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the album. Required unless providing the Album and Artist.
     * @return LastFm_Album_GetInfo_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }

    /**
     * Set the value for the Username input for this GetInfo choreography.
     *
     * @param string $value (optional, string) The username for the context of the request. If supplied, the user's playcount for this album is included in the response.
     * @return LastFm_Album_GetInfo_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetInfo choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetInfo choreography.
     *
     * @param Temboo_Session $session The session that owns this GetInfo execution.
     * @param LastFm_Album_GetInfo $choreo The choregraphy object for this execution.
     * @param LastFm_Album_GetInfo_Inputs|array $inputs (optional) Inputs as LastFm_Album_GetInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_GetInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Album_GetInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetInfo execution.
     *
     * @return LastFm_Album_GetInfo_Results New results object.
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
     * Wraps results in appopriate results class for this GetInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Album_GetInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Album_GetInfo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetInfo choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetInfo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetInfo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Album_GetInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetInfo execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for an artist by name. Returns artist matches sorted by relevance.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_Search extends Temboo_Choreography
{
    /**
     * Searches for an artist by name. Returns artist matches sorted by relevance.
     *
     * @param Temboo_Session $session The session that owns this Search choreography.
     * @return LastFm_Artist_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/Search/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Search choreography.
     *
     * @param LastFm_Artist_Search_Inputs|array $inputs (optional) Inputs as LastFm_Artist_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Search choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_Search_Inputs New instance.
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
     * @return LastFm_Artist_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Search choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_Artist_Search_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this Search choreography.
     *
     * @param string $value (string) The artist name.
     * @return LastFm_Artist_Search_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the Limit input for this Search choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 30.
     * @return LastFm_Artist_Search_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this Search choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_Artist_Search_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the Search choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search choreography.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param LastFm_Artist_Search $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_Search_Inputs|array $inputs (optional) Inputs as LastFm_Artist_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return LastFm_Artist_Search_Results New results object.
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
     * @return LastFm_Artist_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_Search_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Search choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_Search_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Search choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a Tasteometer score from two user inputs, along with a list of shared artists.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Tasteometer_CompareUsers extends Temboo_Choreography
{
    /**
     * Retrieves a Tasteometer score from two user inputs, along with a list of shared artists.
     *
     * @param Temboo_Session $session The session that owns this CompareUsers choreography.
     * @return LastFm_Tasteometer_CompareUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Tasteometer/CompareUsers/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CompareUsers choreography.
     *
     * @param LastFm_Tasteometer_CompareUsers_Inputs|array $inputs (optional) Inputs as LastFm_Tasteometer_CompareUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Tasteometer_CompareUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Tasteometer_CompareUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompareUsers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Tasteometer_CompareUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Tasteometer_CompareUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompareUsers choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Tasteometer_CompareUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CompareUsers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Tasteometer_CompareUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompareUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Tasteometer_CompareUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Tasteometer_CompareUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CompareUsers choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_Tasteometer_CompareUsers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this CompareUsers choreography.
     *
     * @param int $value (optional, integer) How many shared artists to display. Defaults to 5.
     * @return LastFm_Tasteometer_CompareUsers_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the User1 input for this CompareUsers choreography.
     *
     * @param string $value (string) The first user to compare.
     * @return LastFm_Tasteometer_CompareUsers_Inputs For method chaining.
     */
    public function setUser1($value)
    {
        return $this->set('User1', $value);
    }

    /**
     * Set the value for the User2 input for this CompareUsers choreography.
     *
     * @param string $value (string) The second user to compare.
     * @return LastFm_Tasteometer_CompareUsers_Inputs For method chaining.
     */
    public function setUser2($value)
    {
        return $this->set('User2', $value);
    }
}


/**
 * Execution object for the CompareUsers choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Tasteometer_CompareUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompareUsers choreography.
     *
     * @param Temboo_Session $session The session that owns this CompareUsers execution.
     * @param LastFm_Tasteometer_CompareUsers $choreo The choregraphy object for this execution.
     * @param LastFm_Tasteometer_CompareUsers_Inputs|array $inputs (optional) Inputs as LastFm_Tasteometer_CompareUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Tasteometer_CompareUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Tasteometer_CompareUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompareUsers execution.
     *
     * @return LastFm_Tasteometer_CompareUsers_Results New results object.
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
     * Wraps results in appopriate results class for this CompareUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Tasteometer_CompareUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Tasteometer_CompareUsers_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CompareUsers choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Tasteometer_CompareUsers_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CompareUsers choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Tasteometer_CompareUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CompareUsers execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to share an artist with Last.fm users or other friends.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_Share extends Temboo_Choreography
{
    /**
     * Allows you to share an artist with Last.fm users or other friends.
     *
     * @param Temboo_Session $session The session that owns this Share choreography.
     * @return LastFm_Artist_Share New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/Share/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Share choreography.
     *
     * @param LastFm_Artist_Share_Inputs|array $inputs (optional) Inputs as LastFm_Artist_Share_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_Share_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_Share_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Share choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_Share_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_Share_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Share choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_Share_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Share choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_Share_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Share input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_Share_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_Share_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Share choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_Artist_Share_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Share choreography.
     *
     * @param string $value (string) Your Last.fm API Secret.
     * @return LastFm_Artist_Share_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Artist input for this Share choreography.
     *
     * @param string $value (string) The artist name.
     * @return LastFm_Artist_Share_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the Message input for this Share choreography.
     *
     * @param string $value (optional, string) An optional message to send with the recommendation. If not supplied a default message will be used.
     * @return LastFm_Artist_Share_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the Public input for this Share choreography.
     *
     * @param bool $value (optional, boolean) Optionally show in the sharing users activity feed. Defaults to 0 (false).
     * @return LastFm_Artist_Share_Inputs For method chaining.
     */
    public function setPublic($value)
    {
        return $this->set('Public', $value);
    }

    /**
     * Set the value for the Recipient input for this Share choreography.
     *
     * @param string $value (string) A comma delimited list of email addresses or Last.fm usernames. Maximum is 10.
     * @return LastFm_Artist_Share_Inputs For method chaining.
     */
    public function setRecipient($value)
    {
        return $this->set('Recipient', $value);
    }

    /**
     * Set the value for the SessionKey input for this Share choreography.
     *
     * @param string $value (string) The session key retrieved in the last step of the authorization process.
     * @return LastFm_Artist_Share_Inputs For method chaining.
     */
    public function setSessionKey($value)
    {
        return $this->set('SessionKey', $value);
    }
}


/**
 * Execution object for the Share choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_Share_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Share choreography.
     *
     * @param Temboo_Session $session The session that owns this Share execution.
     * @param LastFm_Artist_Share $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_Share_Inputs|array $inputs (optional) Inputs as LastFm_Artist_Share_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_Share_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_Share $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Share execution.
     *
     * @return LastFm_Artist_Share_Results New results object.
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
     * Wraps results in appopriate results class for this Share execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_Share_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_Share_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Share choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_Share_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Share choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_Share_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Share execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the top artists listened to by a user.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopArtists extends Temboo_Choreography
{
    /**
     * Retrieves the top artists listened to by a user.
     *
     * @param Temboo_Session $session The session that owns this GetTopArtists choreography.
     * @return LastFm_User_GetTopArtists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetTopArtists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTopArtists choreography.
     *
     * @param LastFm_User_GetTopArtists_Inputs|array $inputs (optional) Inputs as LastFm_User_GetTopArtists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetTopArtists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetTopArtists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTopArtists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetTopArtists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetTopArtists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTopArtists choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopArtists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTopArtists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetTopArtists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTopArtists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetTopArtists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetTopArtists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTopArtists choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetTopArtists_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetTopArtists choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_User_GetTopArtists_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetTopArtists choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_User_GetTopArtists_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Period input for this GetTopArtists choreography.
     *
     * @param string $value (optional, string) The time period over which to retrieve top artists for. Valid values are: overall, 7day, 3month, 6month, 12month. Defaults to 'overall'.
     * @return LastFm_User_GetTopArtists_Inputs For method chaining.
     */
    public function setPeriod($value)
    {
        return $this->set('Period', $value);
    }

    /**
     * Set the value for the User input for this GetTopArtists choreography.
     *
     * @param string $value (string) The Last.fm username to fetch top artists for.
     * @return LastFm_User_GetTopArtists_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTopArtists choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopArtists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTopArtists choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTopArtists execution.
     * @param LastFm_User_GetTopArtists $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetTopArtists_Inputs|array $inputs (optional) Inputs as LastFm_User_GetTopArtists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetTopArtists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetTopArtists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTopArtists execution.
     *
     * @return LastFm_User_GetTopArtists_Results New results object.
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
     * Wraps results in appopriate results class for this GetTopArtists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetTopArtists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetTopArtists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTopArtists choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopArtists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTopArtists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetTopArtists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTopArtists execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of upcoming events for this artist.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetEvents extends Temboo_Choreography
{
    /**
     * Retrieves a list of upcoming events for this artist.
     *
     * @param Temboo_Session $session The session that owns this GetEvents choreography.
     * @return LastFm_Artist_GetEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetEvents/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetEvents choreography.
     *
     * @param LastFm_Artist_GetEvents_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetEvents choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Artist_GetEvents_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetEvents choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Artist_GetEvents_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetEvents choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Artist_GetEvents_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the FestivalsOnly input for this GetEvents choreography.
     *
     * @param bool $value (optional, boolean) Whether only festivals should be returned, or all events. Defaults to 0 (false).
     * @return LastFm_Artist_GetEvents_Inputs For method chaining.
     */
    public function setFestivalsOnly($value)
    {
        return $this->set('FestivalsOnly', $value);
    }

    /**
     * Set the value for the Limit input for this GetEvents choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_Artist_GetEvents_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MbID input for this GetEvents choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the artist. Required unless providing Artist.
     * @return LastFm_Artist_GetEvents_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }

    /**
     * Set the value for the Page input for this GetEvents choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_Artist_GetEvents_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the GetEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEvents choreography.
     *
     * @param Temboo_Session $session The session that owns this GetEvents execution.
     * @param LastFm_Artist_GetEvents $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetEvents_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEvents execution.
     *
     * @return LastFm_Artist_GetEvents_Results New results object.
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
     * Wraps results in appopriate results class for this GetEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetEvents_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetEvents_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetEvents choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetEvents execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of forthcoming releases based on a user's musical taste. 
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetNewReleases extends Temboo_Choreography
{
    /**
     * Retrieves a list of forthcoming releases based on a user's musical taste. 
     *
     * @param Temboo_Session $session The session that owns this GetNewReleases choreography.
     * @return LastFm_User_GetNewReleases New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetNewReleases/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetNewReleases choreography.
     *
     * @param LastFm_User_GetNewReleases_Inputs|array $inputs (optional) Inputs as LastFm_User_GetNewReleases_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetNewReleases_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetNewReleases_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNewReleases choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetNewReleases_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetNewReleases_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNewReleases choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetNewReleases_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetNewReleases choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetNewReleases_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNewReleases input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetNewReleases_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetNewReleases_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetNewReleases choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetNewReleases_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the UserRecommendations input for this GetNewReleases choreography.
     *
     * @param bool $value (optional, boolean) If 1, the feed contains new releases based on Last.fm's artist recommendations for this user. Otherwise, it is based on their library.
     * @return LastFm_User_GetNewReleases_Inputs For method chaining.
     */
    public function setUserRecommendations($value)
    {
        return $this->set('UserRecommendations', $value);
    }

    /**
     * Set the value for the User input for this GetNewReleases choreography.
     *
     * @param string $value (string) The Last.fm username.
     * @return LastFm_User_GetNewReleases_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetNewReleases choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetNewReleases_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNewReleases choreography.
     *
     * @param Temboo_Session $session The session that owns this GetNewReleases execution.
     * @param LastFm_User_GetNewReleases $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetNewReleases_Inputs|array $inputs (optional) Inputs as LastFm_User_GetNewReleases_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetNewReleases_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetNewReleases $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNewReleases execution.
     *
     * @return LastFm_User_GetNewReleases_Results New results object.
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
     * Wraps results in appopriate results class for this GetNewReleases execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetNewReleases_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetNewReleases_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetNewReleases choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetNewReleases_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetNewReleases choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetNewReleases_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetNewReleases execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the top tracks listened to by a user.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopTracks extends Temboo_Choreography
{
    /**
     * Retrieves the top tracks listened to by a user.
     *
     * @param Temboo_Session $session The session that owns this GetTopTracks choreography.
     * @return LastFm_User_GetTopTracks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetTopTracks/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTopTracks choreography.
     *
     * @param LastFm_User_GetTopTracks_Inputs|array $inputs (optional) Inputs as LastFm_User_GetTopTracks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetTopTracks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetTopTracks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTopTracks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetTopTracks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetTopTracks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTopTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopTracks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTopTracks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetTopTracks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTopTracks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetTopTracks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetTopTracks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTopTracks choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetTopTracks_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetTopTracks choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_User_GetTopTracks_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetTopTracks choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_User_GetTopTracks_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Period input for this GetTopTracks choreography.
     *
     * @param string $value (optional, string) The time period over which to retrieve top tracks for. Valid values are: overall, 7day, 3month, 6month, 12month. Defaults to 'overall'.
     * @return LastFm_User_GetTopTracks_Inputs For method chaining.
     */
    public function setPeriod($value)
    {
        return $this->set('Period', $value);
    }

    /**
     * Set the value for the User input for this GetTopTracks choreography.
     *
     * @param string $value (string) The Last.fm username to fetch top tracks for.
     * @return LastFm_User_GetTopTracks_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTopTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopTracks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTopTracks choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTopTracks execution.
     * @param LastFm_User_GetTopTracks $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetTopTracks_Inputs|array $inputs (optional) Inputs as LastFm_User_GetTopTracks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetTopTracks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetTopTracks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTopTracks execution.
     *
     * @return LastFm_User_GetTopTracks_Results New results object.
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
     * Wraps results in appopriate results class for this GetTopTracks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetTopTracks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetTopTracks_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTopTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopTracks_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTopTracks choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetTopTracks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTopTracks execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the top albums for an artist on Last.fm, ordered by popularity.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopAlbums extends Temboo_Choreography
{
    /**
     * Retrieves the top albums for an artist on Last.fm, ordered by popularity.
     *
     * @param Temboo_Session $session The session that owns this GetTopAlbums choreography.
     * @return LastFm_Artist_GetTopAlbums New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetTopAlbums/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTopAlbums choreography.
     *
     * @param LastFm_Artist_GetTopAlbums_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetTopAlbums_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetTopAlbums_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetTopAlbums_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTopAlbums choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetTopAlbums_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetTopAlbums_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTopAlbums choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopAlbums_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTopAlbums choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetTopAlbums_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTopAlbums input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetTopAlbums_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetTopAlbums_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTopAlbums choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Artist_GetTopAlbums_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetTopAlbums choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Artist_GetTopAlbums_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetTopAlbums choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Artist_GetTopAlbums_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the Limit input for this GetTopAlbums choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_Artist_GetTopAlbums_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MbID input for this GetTopAlbums choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the artist. Required unless providing Artist.
     * @return LastFm_Artist_GetTopAlbums_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }
}


/**
 * Execution object for the GetTopAlbums choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopAlbums_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTopAlbums choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTopAlbums execution.
     * @param LastFm_Artist_GetTopAlbums $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetTopAlbums_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetTopAlbums_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetTopAlbums_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetTopAlbums $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTopAlbums execution.
     *
     * @return LastFm_Artist_GetTopAlbums_Results New results object.
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
     * Wraps results in appopriate results class for this GetTopAlbums execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetTopAlbums_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetTopAlbums_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTopAlbums choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopAlbums_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTopAlbums choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetTopAlbums_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTopAlbums execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of shouts for a specified user.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetShouts extends Temboo_Choreography
{
    /**
     * Retrieves a list of shouts for a specified user.
     *
     * @param Temboo_Session $session The session that owns this GetShouts choreography.
     * @return LastFm_User_GetShouts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetShouts/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetShouts choreography.
     *
     * @param LastFm_User_GetShouts_Inputs|array $inputs (optional) Inputs as LastFm_User_GetShouts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetShouts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetShouts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetShouts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetShouts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetShouts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetShouts choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetShouts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetShouts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetShouts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetShouts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetShouts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetShouts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetShouts choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetShouts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetShouts choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50. Maximum is 200.
     * @return LastFm_User_GetShouts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetShouts choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_User_GetShouts_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the User input for this GetShouts choreography.
     *
     * @param string $value (string) The last.fm username to fetch shouts for.
     * @return LastFm_User_GetShouts_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetShouts choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetShouts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetShouts choreography.
     *
     * @param Temboo_Session $session The session that owns this GetShouts execution.
     * @param LastFm_User_GetShouts $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetShouts_Inputs|array $inputs (optional) Inputs as LastFm_User_GetShouts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetShouts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetShouts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetShouts execution.
     *
     * @return LastFm_User_GetShouts_Results New results object.
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
     * Wraps results in appopriate results class for this GetShouts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetShouts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetShouts_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetShouts choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetShouts_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetShouts choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetShouts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetShouts execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to check whether the supplied artist has a correction to a canonical artist.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetCorrection extends Temboo_Choreography
{
    /**
     * Allows you to check whether the supplied artist has a correction to a canonical artist.
     *
     * @param Temboo_Session $session The session that owns this GetCorrection choreography.
     * @return LastFm_Artist_GetCorrection New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetCorrection/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCorrection choreography.
     *
     * @param LastFm_Artist_GetCorrection_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetCorrection_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetCorrection_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetCorrection_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCorrection choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetCorrection_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetCorrection_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCorrection choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetCorrection_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCorrection choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetCorrection_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCorrection input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetCorrection_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetCorrection_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCorrection choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_Artist_GetCorrection_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetCorrection choreography.
     *
     * @param string $value (string) The artist name to correct.
     * @return LastFm_Artist_GetCorrection_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }
}


/**
 * Execution object for the GetCorrection choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetCorrection_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCorrection choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCorrection execution.
     * @param LastFm_Artist_GetCorrection $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetCorrection_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetCorrection_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetCorrection_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetCorrection $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCorrection execution.
     *
     * @return LastFm_Artist_GetCorrection_Results New results object.
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
     * Wraps results in appopriate results class for this GetCorrection execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetCorrection_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetCorrection_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCorrection choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetCorrection_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCorrection choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetCorrection_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCorrection execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of a user's neighbours on Last.fm. 
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetNeighbours extends Temboo_Choreography
{
    /**
     * Retrieves a list of a user's neighbours on Last.fm. 
     *
     * @param Temboo_Session $session The session that owns this GetNeighbours choreography.
     * @return LastFm_User_GetNeighbours New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetNeighbours/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetNeighbours choreography.
     *
     * @param LastFm_User_GetNeighbours_Inputs|array $inputs (optional) Inputs as LastFm_User_GetNeighbours_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetNeighbours_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetNeighbours_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNeighbours choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetNeighbours_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetNeighbours_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNeighbours choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetNeighbours_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetNeighbours choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetNeighbours_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNeighbours input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetNeighbours_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetNeighbours_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetNeighbours choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetNeighbours_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetNeighbours choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_User_GetNeighbours_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the User input for this GetNeighbours choreography.
     *
     * @param string $value (string) The last.fm username to fetch the neighbours of.
     * @return LastFm_User_GetNeighbours_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetNeighbours choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetNeighbours_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNeighbours choreography.
     *
     * @param Temboo_Session $session The session that owns this GetNeighbours execution.
     * @param LastFm_User_GetNeighbours $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetNeighbours_Inputs|array $inputs (optional) Inputs as LastFm_User_GetNeighbours_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetNeighbours_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetNeighbours $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNeighbours execution.
     *
     * @return LastFm_User_GetNeighbours_Results New results object.
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
     * Wraps results in appopriate results class for this GetNeighbours execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetNeighbours_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetNeighbours_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetNeighbours choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetNeighbours_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetNeighbours choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetNeighbours_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetNeighbours execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the tags applied by an individual user to an album on Last.fm.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetTags extends Temboo_Choreography
{
    /**
     * Retrieves the tags applied by an individual user to an album on Last.fm.
     *
     * @param Temboo_Session $session The session that owns this GetTags choreography.
     * @return LastFm_Album_GetTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Album/GetTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTags choreography.
     *
     * @param LastFm_Album_GetTags_Inputs|array $inputs (optional) Inputs as LastFm_Album_GetTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_GetTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Album_GetTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_GetTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Album_GetTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_GetTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Album_GetTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Album_GetTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTags choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Album_GetTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Album input for this GetTags choreography.
     *
     * @param string $value (conditional, string) The album name. Required unless providing MbID.
     * @return LastFm_Album_GetTags_Inputs For method chaining.
     */
    public function setAlbum($value)
    {
        return $this->set('Album', $value);
    }

    /**
     * Set the value for the Artist input for this GetTags choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Album_GetTags_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetTags choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Album_GetTags_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the MbID input for this GetTags choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the album. Required unless providing the Album and Artist.
     * @return LastFm_Album_GetTags_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }

    /**
     * Set the value for the User input for this GetTags choreography.
     *
     * @param string $value (required, string) The last.fm username to lookup.
     * @return LastFm_Album_GetTags_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTags choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTags execution.
     * @param LastFm_Album_GetTags $choreo The choregraphy object for this execution.
     * @param LastFm_Album_GetTags_Inputs|array $inputs (optional) Inputs as LastFm_Album_GetTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_GetTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Album_GetTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTags execution.
     *
     * @return LastFm_Album_GetTags_Results New results object.
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
     * Wraps results in appopriate results class for this GetTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Album_GetTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Album_GetTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Album_GetTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTags execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of shouts for a specified artist.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetShouts extends Temboo_Choreography
{
    /**
     * Retrieves a list of shouts for a specified artist.
     *
     * @param Temboo_Session $session The session that owns this GetShouts choreography.
     * @return LastFm_Artist_GetShouts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetShouts/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetShouts choreography.
     *
     * @param LastFm_Artist_GetShouts_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetShouts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetShouts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetShouts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetShouts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetShouts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetShouts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetShouts choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetShouts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetShouts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetShouts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetShouts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetShouts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetShouts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetShouts choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Artist_GetShouts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetShouts choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Artist_GetShouts_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetShouts choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Artist_GetShouts_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the Limit input for this GetShouts choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_Artist_GetShouts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MbID input for this GetShouts choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the artist. Required unless providing Artist.
     * @return LastFm_Artist_GetShouts_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }

    /**
     * Set the value for the Page input for this GetShouts choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_Artist_GetShouts_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the GetShouts choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetShouts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetShouts choreography.
     *
     * @param Temboo_Session $session The session that owns this GetShouts execution.
     * @param LastFm_Artist_GetShouts $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetShouts_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetShouts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetShouts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetShouts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetShouts execution.
     *
     * @return LastFm_Artist_GetShouts_Results New results object.
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
     * Wraps results in appopriate results class for this GetShouts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetShouts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetShouts_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetShouts choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetShouts_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetShouts choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetShouts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetShouts execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of the top tags for an album on Last.fm, ordered by popularity. 
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetTopTags extends Temboo_Choreography
{
    /**
     * Retrieves a list of the top tags for an album on Last.fm, ordered by popularity. 
     *
     * @param Temboo_Session $session The session that owns this GetTopTags choreography.
     * @return LastFm_Album_GetTopTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Album/GetTopTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTopTags choreography.
     *
     * @param LastFm_Album_GetTopTags_Inputs|array $inputs (optional) Inputs as LastFm_Album_GetTopTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_GetTopTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Album_GetTopTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTopTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_GetTopTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Album_GetTopTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTopTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetTopTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTopTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_GetTopTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTopTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Album_GetTopTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Album_GetTopTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTopTags choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Album_GetTopTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Album input for this GetTopTags choreography.
     *
     * @param string $value (conditional, string) The album name. Required unless providing MbID.
     * @return LastFm_Album_GetTopTags_Inputs For method chaining.
     */
    public function setAlbum($value)
    {
        return $this->set('Album', $value);
    }

    /**
     * Set the value for the Artist input for this GetTopTags choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Album_GetTopTags_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetTopTags choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Album_GetTopTags_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the MbID input for this GetTopTags choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the album. Required unless providing the Album and Artist.
     * @return LastFm_Album_GetTopTags_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }
}


/**
 * Execution object for the GetTopTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetTopTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTopTags choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTopTags execution.
     * @param LastFm_Album_GetTopTags $choreo The choregraphy object for this execution.
     * @param LastFm_Album_GetTopTags_Inputs|array $inputs (optional) Inputs as LastFm_Album_GetTopTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_GetTopTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Album_GetTopTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTopTags execution.
     *
     * @return LastFm_Album_GetTopTags_Results New results object.
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
     * Wraps results in appopriate results class for this GetTopTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Album_GetTopTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Album_GetTopTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTopTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetTopTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTopTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Album_GetTopTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTopTags execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of tracks by a given artist scrobbled by this user, including scrobble time.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetArtistTracks extends Temboo_Choreography
{
    /**
     * Retrieves a list of tracks by a given artist scrobbled by this user, including scrobble time.
     *
     * @param Temboo_Session $session The session that owns this GetArtistTracks choreography.
     * @return LastFm_User_GetArtistTracks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetArtistTracks/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetArtistTracks choreography.
     *
     * @param LastFm_User_GetArtistTracks_Inputs|array $inputs (optional) Inputs as LastFm_User_GetArtistTracks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetArtistTracks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetArtistTracks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetArtistTracks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetArtistTracks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetArtistTracks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetArtistTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetArtistTracks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetArtistTracks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetArtistTracks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetArtistTracks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetArtistTracks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetArtistTracks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetArtistTracks choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_User_GetArtistTracks_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetArtistTracks choreography.
     *
     * @param string $value (required, string) The artist name you are interested in.
     * @return LastFm_User_GetArtistTracks_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the EndTimestamp input for this GetArtistTracks choreography.
     *
     * @param string $value (optional, date) A unix timestamp to end at.
     * @return LastFm_User_GetArtistTracks_Inputs For method chaining.
     */
    public function setEndTimestamp($value)
    {
        return $this->set('EndTimestamp', $value);
    }

    /**
     * Set the value for the Page input for this GetArtistTracks choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_User_GetArtistTracks_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the StartTimestamp input for this GetArtistTracks choreography.
     *
     * @param string $value (optional, date) A unix timestamp to start at.
     * @return LastFm_User_GetArtistTracks_Inputs For method chaining.
     */
    public function setStartTimestamp($value)
    {
        return $this->set('StartTimestamp', $value);
    }

    /**
     * Set the value for the User input for this GetArtistTracks choreography.
     *
     * @param string $value (required, string) The last.fm username to fetch the recent tracks of.
     * @return LastFm_User_GetArtistTracks_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetArtistTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetArtistTracks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetArtistTracks choreography.
     *
     * @param Temboo_Session $session The session that owns this GetArtistTracks execution.
     * @param LastFm_User_GetArtistTracks $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetArtistTracks_Inputs|array $inputs (optional) Inputs as LastFm_User_GetArtistTracks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetArtistTracks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetArtistTracks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetArtistTracks execution.
     *
     * @return LastFm_User_GetArtistTracks_Results New results object.
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
     * Wraps results in appopriate results class for this GetArtistTracks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetArtistTracks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetArtistTracks_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetArtistTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetArtistTracks_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetArtistTracks choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetArtistTracks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetArtistTracks execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of the tracks banned by a particular user.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetBannedTracks extends Temboo_Choreography
{
    /**
     * Retrieves a list of the tracks banned by a particular user.
     *
     * @param Temboo_Session $session The session that owns this GetBannedTracks choreography.
     * @return LastFm_User_GetBannedTracks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetBannedTracks/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBannedTracks choreography.
     *
     * @param LastFm_User_GetBannedTracks_Inputs|array $inputs (optional) Inputs as LastFm_User_GetBannedTracks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetBannedTracks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetBannedTracks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBannedTracks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetBannedTracks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetBannedTracks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBannedTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetBannedTracks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBannedTracks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetBannedTracks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBannedTracks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetBannedTracks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetBannedTracks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetBannedTracks choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetBannedTracks_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetBannedTracks choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_User_GetBannedTracks_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetBannedTracks choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_User_GetBannedTracks_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the User input for this GetBannedTracks choreography.
     *
     * @param string $value (string) The user name associated with the banned tracks you want to retrieve.
     * @return LastFm_User_GetBannedTracks_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetBannedTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetBannedTracks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBannedTracks choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBannedTracks execution.
     * @param LastFm_User_GetBannedTracks $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetBannedTracks_Inputs|array $inputs (optional) Inputs as LastFm_User_GetBannedTracks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetBannedTracks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetBannedTracks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBannedTracks execution.
     *
     * @return LastFm_User_GetBannedTracks_Results New results object.
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
     * Wraps results in appopriate results class for this GetBannedTracks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetBannedTracks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetBannedTracks_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBannedTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetBannedTracks_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBannedTracks choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetBannedTracks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBannedTracks execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all the artists similar to the specified artist.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetSimilar extends Temboo_Choreography
{
    /**
     * Retrieves a list of all the artists similar to the specified artist.
     *
     * @param Temboo_Session $session The session that owns this GetSimilar choreography.
     * @return LastFm_Artist_GetSimilar New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetSimilar/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetSimilar choreography.
     *
     * @param LastFm_Artist_GetSimilar_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetSimilar_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetSimilar_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetSimilar_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSimilar choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetSimilar_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetSimilar_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSimilar choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetSimilar_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetSimilar choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetSimilar_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSimilar input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetSimilar_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetSimilar_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetSimilar choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Artist_GetSimilar_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetSimilar choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Artist_GetSimilar_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetSimilar choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Artist_GetSimilar_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the Limit input for this GetSimilar choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_Artist_GetSimilar_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MbID input for this GetSimilar choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the artist. Required unless providing Artist.
     * @return LastFm_Artist_GetSimilar_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }
}


/**
 * Execution object for the GetSimilar choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetSimilar_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSimilar choreography.
     *
     * @param Temboo_Session $session The session that owns this GetSimilar execution.
     * @param LastFm_Artist_GetSimilar $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetSimilar_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetSimilar_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetSimilar_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetSimilar $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSimilar execution.
     *
     * @return LastFm_Artist_GetSimilar_Results New results object.
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
     * Wraps results in appopriate results class for this GetSimilar execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetSimilar_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetSimilar_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetSimilar choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetSimilar_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetSimilar choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetSimilar_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetSimilar execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a message in an artist's shoutbox.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_Shout extends Temboo_Choreography
{
    /**
     * Creates a message in an artist's shoutbox.
     *
     * @param Temboo_Session $session The session that owns this Shout choreography.
     * @return LastFm_Artist_Shout New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/Shout/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Shout choreography.
     *
     * @param LastFm_Artist_Shout_Inputs|array $inputs (optional) Inputs as LastFm_Artist_Shout_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_Shout_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_Shout_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Shout choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_Shout_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_Shout_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Shout choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_Shout_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Shout choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_Shout_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Shout input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_Shout_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_Shout_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Shout choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_Artist_Shout_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Shout choreography.
     *
     * @param string $value (string) Your Last.fm API Secret.
     * @return LastFm_Artist_Shout_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Artist input for this Shout choreography.
     *
     * @param string $value (string) The artist name.
     * @return LastFm_Artist_Shout_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the Message input for this Shout choreography.
     *
     * @param string $value (optional, string) An optional message to send with the recommendation. If not supplied a default message will be used.
     * @return LastFm_Artist_Shout_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the SessionKey input for this Shout choreography.
     *
     * @param string $value (string) The session key retrieved in the last step of the authorization process.
     * @return LastFm_Artist_Shout_Inputs For method chaining.
     */
    public function setSessionKey($value)
    {
        return $this->set('SessionKey', $value);
    }
}


/**
 * Execution object for the Shout choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_Shout_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Shout choreography.
     *
     * @param Temboo_Session $session The session that owns this Shout execution.
     * @param LastFm_Artist_Shout $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_Shout_Inputs|array $inputs (optional) Inputs as LastFm_Artist_Shout_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_Shout_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_Shout $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Shout execution.
     *
     * @return LastFm_Artist_Shout_Results New results object.
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
     * Wraps results in appopriate results class for this Shout execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_Shout_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_Shout_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Shout choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_Shout_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Shout choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_Shout_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Shout execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a message in a user's shoutbox 
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_Shout extends Temboo_Choreography
{
    /**
     * Creates a message in a user's shoutbox 
     *
     * @param Temboo_Session $session The session that owns this Shout choreography.
     * @return LastFm_User_Shout New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/Shout/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Shout choreography.
     *
     * @param LastFm_User_Shout_Inputs|array $inputs (optional) Inputs as LastFm_User_Shout_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_Shout_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_Shout_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Shout choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_Shout_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_Shout_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Shout choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_Shout_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Shout choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_Shout_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Shout input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_Shout_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_Shout_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Shout choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_User_Shout_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Shout choreography.
     *
     * @param string $value (required, string) Your Last.fm API Secret.
     * @return LastFm_User_Shout_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Message input for this Shout choreography.
     *
     * @param string $value (required, string) The message to post to the shoutbox.
     * @return LastFm_User_Shout_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the SessionKey input for this Shout choreography.
     *
     * @param string $value (required, string) The session key retrieved in the last step of the authorization process.
     * @return LastFm_User_Shout_Inputs For method chaining.
     */
    public function setSessionKey($value)
    {
        return $this->set('SessionKey', $value);
    }

    /**
     * Set the value for the User input for this Shout choreography.
     *
     * @param string $value (required, string) The name of the user to shout on.
     * @return LastFm_User_Shout_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the Shout choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_Shout_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Shout choreography.
     *
     * @param Temboo_Session $session The session that owns this Shout execution.
     * @param LastFm_User_Shout $choreo The choregraphy object for this execution.
     * @param LastFm_User_Shout_Inputs|array $inputs (optional) Inputs as LastFm_User_Shout_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_Shout_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_Shout $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Shout execution.
     *
     * @return LastFm_User_Shout_Results New results object.
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
     * Wraps results in appopriate results class for this Shout execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_Shout_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_Shout_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Shout choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_Shout_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Shout choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_Shout_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Shout execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get information about a user profile.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetInfo extends Temboo_Choreography
{
    /**
     * Get information about a user profile.
     *
     * @param Temboo_Session $session The session that owns this GetInfo choreography.
     * @return LastFm_User_GetInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetInfo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetInfo choreography.
     *
     * @param LastFm_User_GetInfo_Inputs|array $inputs (optional) Inputs as LastFm_User_GetInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetInfo choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetInfo choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_User_GetInfo_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the User input for this GetInfo choreography.
     *
     * @param string $value (required, string) The user to fetch info for.
     * @return LastFm_User_GetInfo_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetInfo choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetInfo choreography.
     *
     * @param Temboo_Session $session The session that owns this GetInfo execution.
     * @param LastFm_User_GetInfo $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetInfo_Inputs|array $inputs (optional) Inputs as LastFm_User_GetInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetInfo execution.
     *
     * @return LastFm_User_GetInfo_Results New results object.
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
     * Wraps results in appopriate results class for this GetInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetInfo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetInfo choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetInfo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetInfo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetInfo execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of the user's friends on Last.fm.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetFriends extends Temboo_Choreography
{
    /**
     * Retrieves a list of the user's friends on Last.fm.
     *
     * @param Temboo_Session $session The session that owns this GetFriends choreography.
     * @return LastFm_User_GetFriends New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetFriends/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetFriends choreography.
     *
     * @param LastFm_User_GetFriends_Inputs|array $inputs (optional) Inputs as LastFm_User_GetFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetFriends_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetFriends_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFriends choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetFriends_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetFriends_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFriends choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetFriends_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetFriends choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetFriends_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFriends input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetFriends_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetFriends_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetFriends choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetFriends_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetFriends choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_User_GetFriends_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetFriends choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_User_GetFriends_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the RecentTracks input for this GetFriends choreography.
     *
     * @param bool $value (optional, boolean) Whether or not to include information about friends' recent listening in the response. Defaults to 0 for false.
     * @return LastFm_User_GetFriends_Inputs For method chaining.
     */
    public function setRecentTracks($value)
    {
        return $this->set('RecentTracks', $value);
    }

    /**
     * Set the value for the User input for this GetFriends choreography.
     *
     * @param string $value (string) The last.fm username to fetch the friends of.
     * @return LastFm_User_GetFriends_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetFriends choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetFriends_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFriends choreography.
     *
     * @param Temboo_Session $session The session that owns this GetFriends execution.
     * @param LastFm_User_GetFriends $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetFriends_Inputs|array $inputs (optional) Inputs as LastFm_User_GetFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetFriends_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetFriends $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFriends execution.
     *
     * @return LastFm_User_GetFriends_Results New results object.
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
     * Wraps results in appopriate results class for this GetFriends execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetFriends_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetFriends_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetFriends choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetFriends_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetFriends choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetFriends_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetFriends execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes a user's tag from a specified album.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_RemoveTag extends Temboo_Choreography
{
    /**
     * Removes a user's tag from a specified album.
     *
     * @param Temboo_Session $session The session that owns this RemoveTag choreography.
     * @return LastFm_Album_RemoveTag New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Album/RemoveTag/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RemoveTag choreography.
     *
     * @param LastFm_Album_RemoveTag_Inputs|array $inputs (optional) Inputs as LastFm_Album_RemoveTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_RemoveTag_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Album_RemoveTag_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RemoveTag choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_RemoveTag_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Album_RemoveTag_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RemoveTag choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_RemoveTag_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RemoveTag choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_RemoveTag_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RemoveTag input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Album_RemoveTag_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Album_RemoveTag_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RemoveTag choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_Album_RemoveTag_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this RemoveTag choreography.
     *
     * @param string $value (string) Your Last.fm API Secret.
     * @return LastFm_Album_RemoveTag_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Album input for this RemoveTag choreography.
     *
     * @param string $value (string) The album name.
     * @return LastFm_Album_RemoveTag_Inputs For method chaining.
     */
    public function setAlbum($value)
    {
        return $this->set('Album', $value);
    }

    /**
     * Set the value for the Artist input for this RemoveTag choreography.
     *
     * @param string $value (string) The artist name.
     * @return LastFm_Album_RemoveTag_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the SessionKey input for this RemoveTag choreography.
     *
     * @param string $value (string) The session key retrieved in the last step of the authorization process.
     * @return LastFm_Album_RemoveTag_Inputs For method chaining.
     */
    public function setSessionKey($value)
    {
        return $this->set('SessionKey', $value);
    }

    /**
     * Set the value for the Tag input for this RemoveTag choreography.
     *
     * @param string $value (string) A single user tag to remove from this album.
     * @return LastFm_Album_RemoveTag_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }
}


/**
 * Execution object for the RemoveTag choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_RemoveTag_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RemoveTag choreography.
     *
     * @param Temboo_Session $session The session that owns this RemoveTag execution.
     * @param LastFm_Album_RemoveTag $choreo The choregraphy object for this execution.
     * @param LastFm_Album_RemoveTag_Inputs|array $inputs (optional) Inputs as LastFm_Album_RemoveTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_RemoveTag_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Album_RemoveTag $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RemoveTag execution.
     *
     * @return LastFm_Album_RemoveTag_Results New results object.
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
     * Wraps results in appopriate results class for this RemoveTag execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Album_RemoveTag_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Album_RemoveTag_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RemoveTag choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_RemoveTag_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RemoveTag choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Album_RemoveTag_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RemoveTag execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of shouts for a specified album.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetShouts extends Temboo_Choreography
{
    /**
     * Retrieves a list of shouts for a specified album.
     *
     * @param Temboo_Session $session The session that owns this GetShouts choreography.
     * @return LastFm_Album_GetShouts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Album/GetShouts/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetShouts choreography.
     *
     * @param LastFm_Album_GetShouts_Inputs|array $inputs (optional) Inputs as LastFm_Album_GetShouts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_GetShouts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Album_GetShouts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetShouts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_GetShouts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Album_GetShouts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetShouts choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetShouts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetShouts choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_GetShouts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetShouts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Album_GetShouts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Album_GetShouts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetShouts choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Album_GetShouts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Album input for this GetShouts choreography.
     *
     * @param string $value (conditional, string) The album title. Required unless providing MbID.
     * @return LastFm_Album_GetShouts_Inputs For method chaining.
     */
    public function setAlbum($value)
    {
        return $this->set('Album', $value);
    }

    /**
     * Set the value for the Artist input for this GetShouts choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Album_GetShouts_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetShouts choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Album_GetShouts_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the MbID input for this GetShouts choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the album. Required unless providing the Album and Artist.
     * @return LastFm_Album_GetShouts_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }

    /**
     * Set the value for the Page input for this GetShouts choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to first page.
     * @return LastFm_Album_GetShouts_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the GetShouts choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetShouts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetShouts choreography.
     *
     * @param Temboo_Session $session The session that owns this GetShouts execution.
     * @param LastFm_Album_GetShouts $choreo The choregraphy object for this execution.
     * @param LastFm_Album_GetShouts_Inputs|array $inputs (optional) Inputs as LastFm_Album_GetShouts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_GetShouts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Album_GetShouts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetShouts execution.
     *
     * @return LastFm_Album_GetShouts_Results New results object.
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
     * Wraps results in appopriate results class for this GetShouts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Album_GetShouts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Album_GetShouts_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetShouts choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_GetShouts_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetShouts choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Album_GetShouts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetShouts execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the top albums listened to by a user.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopAlbums extends Temboo_Choreography
{
    /**
     * Retrieves the top albums listened to by a user.
     *
     * @param Temboo_Session $session The session that owns this GetTopAlbums choreography.
     * @return LastFm_User_GetTopAlbums New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetTopAlbums/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTopAlbums choreography.
     *
     * @param LastFm_User_GetTopAlbums_Inputs|array $inputs (optional) Inputs as LastFm_User_GetTopAlbums_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetTopAlbums_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetTopAlbums_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTopAlbums choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetTopAlbums_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetTopAlbums_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTopAlbums choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopAlbums_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTopAlbums choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetTopAlbums_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTopAlbums input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetTopAlbums_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetTopAlbums_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTopAlbums choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetTopAlbums_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetTopAlbums choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_User_GetTopAlbums_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetTopAlbums choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_User_GetTopAlbums_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Period input for this GetTopAlbums choreography.
     *
     * @param string $value (optional, string) The time period over which to retrieve top albums for. Valid values are: overall, 7day, 3month, 6month, 12month. Defaults to 'overall'.
     * @return LastFm_User_GetTopAlbums_Inputs For method chaining.
     */
    public function setPeriod($value)
    {
        return $this->set('Period', $value);
    }

    /**
     * Set the value for the User input for this GetTopAlbums choreography.
     *
     * @param string $value (string) The Last.fm username to fetch top albums for.
     * @return LastFm_User_GetTopAlbums_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTopAlbums choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopAlbums_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTopAlbums choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTopAlbums execution.
     * @param LastFm_User_GetTopAlbums $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetTopAlbums_Inputs|array $inputs (optional) Inputs as LastFm_User_GetTopAlbums_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetTopAlbums_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetTopAlbums $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTopAlbums execution.
     *
     * @return LastFm_User_GetTopAlbums_Results New results object.
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
     * Wraps results in appopriate results class for this GetTopAlbums execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetTopAlbums_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetTopAlbums_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTopAlbums choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopAlbums_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTopAlbums choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetTopAlbums_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTopAlbums execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a podcast of free mp3s based on a specified artist.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetPodcast extends Temboo_Choreography
{
    /**
     * Retrieves a podcast of free mp3s based on a specified artist.
     *
     * @param Temboo_Session $session The session that owns this GetPodcast choreography.
     * @return LastFm_Artist_GetPodcast New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetPodcast/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetPodcast choreography.
     *
     * @param LastFm_Artist_GetPodcast_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetPodcast_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetPodcast_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetPodcast_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPodcast choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetPodcast_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetPodcast_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPodcast choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetPodcast_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetPodcast choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetPodcast_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPodcast input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetPodcast_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetPodcast_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPodcast choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Artist_GetPodcast_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetPodcast choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Artist_GetPodcast_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetPodcast choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Artist_GetPodcast_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the MbID input for this GetPodcast choreography.
     *
     * @param string $value (optional, string) The musicbrainz id for the artist. Required unless providing Artist.
     * @return LastFm_Artist_GetPodcast_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }
}


/**
 * Execution object for the GetPodcast choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetPodcast_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPodcast choreography.
     *
     * @param Temboo_Session $session The session that owns this GetPodcast execution.
     * @param LastFm_Artist_GetPodcast $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetPodcast_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetPodcast_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetPodcast_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetPodcast $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPodcast execution.
     *
     * @return LastFm_Artist_GetPodcast_Results New results object.
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
     * Wraps results in appopriate results class for this GetPodcast execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetPodcast_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetPodcast_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetPodcast choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetPodcast_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetPodcast choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetPodcast_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetPodcast execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of available charts for this user, expressed as date ranges which can be sent to the chart services.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyChartList extends Temboo_Choreography
{
    /**
     * Retrieves a list of available charts for this user, expressed as date ranges which can be sent to the chart services.
     *
     * @param Temboo_Session $session The session that owns this GetWeeklyChartList choreography.
     * @return LastFm_User_GetWeeklyChartList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetWeeklyChartList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetWeeklyChartList choreography.
     *
     * @param LastFm_User_GetWeeklyChartList_Inputs|array $inputs (optional) Inputs as LastFm_User_GetWeeklyChartList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetWeeklyChartList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetWeeklyChartList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWeeklyChartList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetWeeklyChartList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetWeeklyChartList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWeeklyChartList choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyChartList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetWeeklyChartList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetWeeklyChartList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWeeklyChartList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetWeeklyChartList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetWeeklyChartList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetWeeklyChartList choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetWeeklyChartList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the User input for this GetWeeklyChartList choreography.
     *
     * @param string $value (string) The last.fm username to fetch the charts of.
     * @return LastFm_User_GetWeeklyChartList_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetWeeklyChartList choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyChartList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWeeklyChartList choreography.
     *
     * @param Temboo_Session $session The session that owns this GetWeeklyChartList execution.
     * @param LastFm_User_GetWeeklyChartList $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetWeeklyChartList_Inputs|array $inputs (optional) Inputs as LastFm_User_GetWeeklyChartList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetWeeklyChartList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetWeeklyChartList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWeeklyChartList execution.
     *
     * @return LastFm_User_GetWeeklyChartList_Results New results object.
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
     * Wraps results in appopriate results class for this GetWeeklyChartList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetWeeklyChartList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetWeeklyChartList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetWeeklyChartList choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyChartList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetWeeklyChartList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetWeeklyChartList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetWeeklyChartList execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a list of the recent tracks listened to by this user.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecentTracks extends Temboo_Choreography
{
    /**
     * Get a list of the recent tracks listened to by this user.
     *
     * @param Temboo_Session $session The session that owns this GetRecentTracks choreography.
     * @return LastFm_User_GetRecentTracks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetRecentTracks/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRecentTracks choreography.
     *
     * @param LastFm_User_GetRecentTracks_Inputs|array $inputs (optional) Inputs as LastFm_User_GetRecentTracks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetRecentTracks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetRecentTracks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentTracks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetRecentTracks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetRecentTracks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecentTracks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRecentTracks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetRecentTracks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentTracks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetRecentTracks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetRecentTracks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRecentTracks choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetRecentTracks_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EndTimestamp input for this GetRecentTracks choreography.
     *
     * @param string $value (optional, date) End timestamp of a range - only display scrobbles before this time, in UNIX timestamp format. This must be in the UTC time zone.
     * @return LastFm_User_GetRecentTracks_Inputs For method chaining.
     */
    public function setEndTimestamp($value)
    {
        return $this->set('EndTimestamp', $value);
    }

    /**
     * Set the value for the Limit input for this GetRecentTracks choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50. Maximum is 200.
     * @return LastFm_User_GetRecentTracks_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetRecentTracks choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_User_GetRecentTracks_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the StartTimestamp input for this GetRecentTracks choreography.
     *
     * @param string $value (optional, date) Beginning timestamp of a range - only display scrobbles after this time, in UNIX timestamp format. This must be in the UTC time zone.
     * @return LastFm_User_GetRecentTracks_Inputs For method chaining.
     */
    public function setStartTimestamp($value)
    {
        return $this->set('StartTimestamp', $value);
    }

    /**
     * Set the value for the User input for this GetRecentTracks choreography.
     *
     * @param string $value (string) The last.fm username to fetch the recent tracks of.
     * @return LastFm_User_GetRecentTracks_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetRecentTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecentTracks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentTracks choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRecentTracks execution.
     * @param LastFm_User_GetRecentTracks $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetRecentTracks_Inputs|array $inputs (optional) Inputs as LastFm_User_GetRecentTracks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetRecentTracks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetRecentTracks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentTracks execution.
     *
     * @return LastFm_User_GetRecentTracks_Results New results object.
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
     * Wraps results in appopriate results class for this GetRecentTracks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetRecentTracks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetRecentTracks_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRecentTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecentTracks_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRecentTracks choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetRecentTracks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRecentTracks execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of images for a specified artist in a variety of sizes. 
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetImages extends Temboo_Choreography
{
    /**
     * Retrieves a list of images for a specified artist in a variety of sizes. 
     *
     * @param Temboo_Session $session The session that owns this GetImages choreography.
     * @return LastFm_Artist_GetImages New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetImages/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetImages choreography.
     *
     * @param LastFm_Artist_GetImages_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetImages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetImages_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetImages_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetImages choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetImages_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetImages_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetImages choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetImages_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetImages choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetImages_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetImages input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetImages_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetImages_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetImages choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Artist_GetImages_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetImages choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Artist_GetImages_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetImages choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Artist_GetImages_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the Limit input for this GetImages choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_Artist_GetImages_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MbID input for this GetImages choreography.
     *
     * @param string $value (optional, string) The musicbrainz id for the artist. Required unless providing Artist.
     * @return LastFm_Artist_GetImages_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }

    /**
     * Set the value for the Order input for this GetImages choreography.
     *
     * @param string $value (optional, string) Sort ordering can be either 'popularity' (default) or 'dateadded'.
     * @return LastFm_Artist_GetImages_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }
}


/**
 * Execution object for the GetImages choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetImages_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetImages choreography.
     *
     * @param Temboo_Session $session The session that owns this GetImages execution.
     * @param LastFm_Artist_GetImages $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetImages_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetImages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetImages_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetImages $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetImages execution.
     *
     * @return LastFm_Artist_GetImages_Results New results object.
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
     * Wraps results in appopriate results class for this GetImages execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetImages_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetImages_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetImages choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetImages_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetImages choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetImages_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetImages execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a Tasteometer score from two artist inputs.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Tasteometer_CompareArtists extends Temboo_Choreography
{
    /**
     * Retrieves a Tasteometer score from two artist inputs.
     *
     * @param Temboo_Session $session The session that owns this CompareArtists choreography.
     * @return LastFm_Tasteometer_CompareArtists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Tasteometer/CompareArtists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CompareArtists choreography.
     *
     * @param LastFm_Tasteometer_CompareArtists_Inputs|array $inputs (optional) Inputs as LastFm_Tasteometer_CompareArtists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Tasteometer_CompareArtists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Tasteometer_CompareArtists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompareArtists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Tasteometer_CompareArtists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Tasteometer_CompareArtists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompareArtists choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Tasteometer_CompareArtists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CompareArtists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Tasteometer_CompareArtists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompareArtists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Tasteometer_CompareArtists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Tasteometer_CompareArtists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CompareArtists choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_Tasteometer_CompareArtists_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist1 input for this CompareArtists choreography.
     *
     * @param string $value (string) The first artist to compare.
     * @return LastFm_Tasteometer_CompareArtists_Inputs For method chaining.
     */
    public function setArtist1($value)
    {
        return $this->set('Artist1', $value);
    }

    /**
     * Set the value for the Artist2 input for this CompareArtists choreography.
     *
     * @param string $value (string) The second artist to compare.
     * @return LastFm_Tasteometer_CompareArtists_Inputs For method chaining.
     */
    public function setArtist2($value)
    {
        return $this->set('Artist2', $value);
    }

    /**
     * Set the value for the Limit input for this CompareArtists choreography.
     *
     * @param int $value (optional, integer) How many shared artists to display. Defaults to 5.
     * @return LastFm_Tasteometer_CompareArtists_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }
}


/**
 * Execution object for the CompareArtists choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Tasteometer_CompareArtists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompareArtists choreography.
     *
     * @param Temboo_Session $session The session that owns this CompareArtists execution.
     * @param LastFm_Tasteometer_CompareArtists $choreo The choregraphy object for this execution.
     * @param LastFm_Tasteometer_CompareArtists_Inputs|array $inputs (optional) Inputs as LastFm_Tasteometer_CompareArtists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Tasteometer_CompareArtists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Tasteometer_CompareArtists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompareArtists execution.
     *
     * @return LastFm_Tasteometer_CompareArtists_Results New results object.
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
     * Wraps results in appopriate results class for this CompareArtists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Tasteometer_CompareArtists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Tasteometer_CompareArtists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CompareArtists choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Tasteometer_CompareArtists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CompareArtists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Tasteometer_CompareArtists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CompareArtists execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to share an album with one or more Last.fm users or other friends.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_Share extends Temboo_Choreography
{
    /**
     * Allows you to share an album with one or more Last.fm users or other friends.
     *
     * @param Temboo_Session $session The session that owns this Share choreography.
     * @return LastFm_Album_Share New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Album/Share/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Share choreography.
     *
     * @param LastFm_Album_Share_Inputs|array $inputs (optional) Inputs as LastFm_Album_Share_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_Share_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Album_Share_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Share choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_Share_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Album_Share_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Share choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_Share_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Share choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Album_Share_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Share input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Album_Share_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Album_Share_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Share choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_Album_Share_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Share choreography.
     *
     * @param string $value (string) Your Last.fm API Secret.
     * @return LastFm_Album_Share_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Album input for this Share choreography.
     *
     * @param string $value (string) The album name.
     * @return LastFm_Album_Share_Inputs For method chaining.
     */
    public function setAlbum($value)
    {
        return $this->set('Album', $value);
    }

    /**
     * Set the value for the Artist input for this Share choreography.
     *
     * @param string $value (string) The artist name.
     * @return LastFm_Album_Share_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the Message input for this Share choreography.
     *
     * @param string $value (optional, string) An optional message to send with the recommendation. If not supplied a default message will be used.
     * @return LastFm_Album_Share_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }

    /**
     * Set the value for the Public input for this Share choreography.
     *
     * @param bool $value (optional, boolean) Optionally show in the sharing users activity feed. Defaults to 0 (false).
     * @return LastFm_Album_Share_Inputs For method chaining.
     */
    public function setPublic($value)
    {
        return $this->set('Public', $value);
    }

    /**
     * Set the value for the Recipient input for this Share choreography.
     *
     * @param string $value (string) A comma delimited list of email addresses or Last.fm usernames. Maximum is 10.
     * @return LastFm_Album_Share_Inputs For method chaining.
     */
    public function setRecipient($value)
    {
        return $this->set('Recipient', $value);
    }

    /**
     * Set the value for the SessionKey input for this Share choreography.
     *
     * @param string $value (string) The session key retrieved in the last step of the authorization process.
     * @return LastFm_Album_Share_Inputs For method chaining.
     */
    public function setSessionKey($value)
    {
        return $this->set('SessionKey', $value);
    }
}


/**
 * Execution object for the Share choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_Share_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Share choreography.
     *
     * @param Temboo_Session $session The session that owns this Share execution.
     * @param LastFm_Album_Share $choreo The choregraphy object for this execution.
     * @param LastFm_Album_Share_Inputs|array $inputs (optional) Inputs as LastFm_Album_Share_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Album_Share_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Album_Share $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Share execution.
     *
     * @return LastFm_Album_Share_Results New results object.
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
     * Wraps results in appopriate results class for this Share execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Album_Share_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Album_Share_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Share choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Album_Share_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Share choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Album_Share_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Share execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a paginated list of all the events this artist has played at in the past.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetPastEvents extends Temboo_Choreography
{
    /**
     * Retrieves a paginated list of all the events this artist has played at in the past.
     *
     * @param Temboo_Session $session The session that owns this GetPastEvents choreography.
     * @return LastFm_Artist_GetPastEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetPastEvents/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetPastEvents choreography.
     *
     * @param LastFm_Artist_GetPastEvents_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetPastEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetPastEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetPastEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPastEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetPastEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetPastEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPastEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetPastEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetPastEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetPastEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPastEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetPastEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetPastEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPastEvents choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Artist_GetPastEvents_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetPastEvents choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Artist_GetPastEvents_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetPastEvents choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Artist_GetPastEvents_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the Limit input for this GetPastEvents choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_Artist_GetPastEvents_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MbID input for this GetPastEvents choreography.
     *
     * @param string $value (optional, string) The musicbrainz id for the artist. Required unless providing Artist.
     * @return LastFm_Artist_GetPastEvents_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }
}


/**
 * Execution object for the GetPastEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetPastEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPastEvents choreography.
     *
     * @param Temboo_Session $session The session that owns this GetPastEvents execution.
     * @param LastFm_Artist_GetPastEvents $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetPastEvents_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetPastEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetPastEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetPastEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPastEvents execution.
     *
     * @return LastFm_Artist_GetPastEvents_Results New results object.
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
     * Wraps results in appopriate results class for this GetPastEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetPastEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetPastEvents_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetPastEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetPastEvents_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetPastEvents choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetPastEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetPastEvents execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of the recent Stations listened to by this user.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecentStations extends Temboo_Choreography
{
    /**
     * Retrieves a list of the recent Stations listened to by this user.
     *
     * @param Temboo_Session $session The session that owns this GetRecentStations choreography.
     * @return LastFm_User_GetRecentStations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetRecentStations/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRecentStations choreography.
     *
     * @param LastFm_User_GetRecentStations_Inputs|array $inputs (optional) Inputs as LastFm_User_GetRecentStations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetRecentStations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetRecentStations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentStations choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetRecentStations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetRecentStations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentStations choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecentStations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRecentStations choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetRecentStations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentStations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetRecentStations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetRecentStations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRecentStations choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_User_GetRecentStations_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetRecentStations choreography.
     *
     * @param string $value (required, string) Your Last.fm API Secret.
     * @return LastFm_User_GetRecentStations_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Limit input for this GetRecentStations choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 10. Maximum is 25.
     * @return LastFm_User_GetRecentStations_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetRecentStations choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to first page.
     * @return LastFm_User_GetRecentStations_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SessionKey input for this GetRecentStations choreography.
     *
     * @param string $value (required, string) The session key retrieved in the last step of the authorization process.
     * @return LastFm_User_GetRecentStations_Inputs For method chaining.
     */
    public function setSessionKey($value)
    {
        return $this->set('SessionKey', $value);
    }

    /**
     * Set the value for the User input for this GetRecentStations choreography.
     *
     * @param string $value (required, string) The last.fm username to fetch the recent Stations of.
     * @return LastFm_User_GetRecentStations_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetRecentStations choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecentStations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentStations choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRecentStations execution.
     * @param LastFm_User_GetRecentStations $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetRecentStations_Inputs|array $inputs (optional) Inputs as LastFm_User_GetRecentStations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetRecentStations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetRecentStations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentStations execution.
     *
     * @return LastFm_User_GetRecentStations_Results New results object.
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
     * Wraps results in appopriate results class for this GetRecentStations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetRecentStations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetRecentStations_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRecentStations choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetRecentStations_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRecentStations choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetRecentStations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRecentStations execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the tags applied by an individual user to an artist on Last.fm.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTags extends Temboo_Choreography
{
    /**
     * Retrieves the tags applied by an individual user to an artist on Last.fm.
     *
     * @param Temboo_Session $session The session that owns this GetTags choreography.
     * @return LastFm_Artist_GetTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTags choreography.
     *
     * @param LastFm_Artist_GetTags_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTags choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Artist_GetTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetTags choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Artist_GetTags_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetTags choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Artist_GetTags_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the MbID input for this GetTags choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the artist. Required unless providing Artist.
     * @return LastFm_Artist_GetTags_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }

    /**
     * Set the value for the User input for this GetTags choreography.
     *
     * @param string $value (required, string) The last.fm username to use for the lookup.
     * @return LastFm_Artist_GetTags_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTags choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTags execution.
     * @param LastFm_Artist_GetTags $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetTags_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTags execution.
     *
     * @return LastFm_Artist_GetTags_Results New results object.
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
     * Wraps results in appopriate results class for this GetTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTags execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of a user's playlists on Last.fm. 
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetPlaylists extends Temboo_Choreography
{
    /**
     * Retrieves a list of a user's playlists on Last.fm. 
     *
     * @param Temboo_Session $session The session that owns this GetPlaylists choreography.
     * @return LastFm_User_GetPlaylists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetPlaylists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetPlaylists choreography.
     *
     * @param LastFm_User_GetPlaylists_Inputs|array $inputs (optional) Inputs as LastFm_User_GetPlaylists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetPlaylists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetPlaylists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPlaylists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetPlaylists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetPlaylists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPlaylists choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetPlaylists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetPlaylists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetPlaylists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPlaylists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetPlaylists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetPlaylists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPlaylists choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_User_GetPlaylists_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the User input for this GetPlaylists choreography.
     *
     * @param string $value (required, string) The last.fm username to fetch the playlists of.
     * @return LastFm_User_GetPlaylists_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetPlaylists choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetPlaylists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPlaylists choreography.
     *
     * @param Temboo_Session $session The session that owns this GetPlaylists execution.
     * @param LastFm_User_GetPlaylists $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetPlaylists_Inputs|array $inputs (optional) Inputs as LastFm_User_GetPlaylists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetPlaylists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetPlaylists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPlaylists execution.
     *
     * @return LastFm_User_GetPlaylists_Results New results object.
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
     * Wraps results in appopriate results class for this GetPlaylists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetPlaylists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetPlaylists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetPlaylists choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetPlaylists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetPlaylists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetPlaylists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetPlaylists execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a paginated list of all events a user has attended in the past. 
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetPastEvents extends Temboo_Choreography
{
    /**
     * Retrieves a paginated list of all events a user has attended in the past. 
     *
     * @param Temboo_Session $session The session that owns this GetPastEvents choreography.
     * @return LastFm_User_GetPastEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetPastEvents/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetPastEvents choreography.
     *
     * @param LastFm_User_GetPastEvents_Inputs|array $inputs (optional) Inputs as LastFm_User_GetPastEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetPastEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetPastEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPastEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetPastEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetPastEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPastEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetPastEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetPastEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetPastEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPastEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetPastEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetPastEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPastEvents choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetPastEvents_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetPastEvents choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_User_GetPastEvents_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Page input for this GetPastEvents choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_User_GetPastEvents_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the User input for this GetPastEvents choreography.
     *
     * @param string $value (string) The username to fetch the events for.
     * @return LastFm_User_GetPastEvents_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetPastEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetPastEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPastEvents choreography.
     *
     * @param Temboo_Session $session The session that owns this GetPastEvents execution.
     * @param LastFm_User_GetPastEvents $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetPastEvents_Inputs|array $inputs (optional) Inputs as LastFm_User_GetPastEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetPastEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetPastEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPastEvents execution.
     *
     * @return LastFm_User_GetPastEvents_Results New results object.
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
     * Wraps results in appopriate results class for this GetPastEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetPastEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetPastEvents_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetPastEvents choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetPastEvents_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetPastEvents choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetPastEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetPastEvents execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a track chart for a user profile, for a given date range.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyTrackChart extends Temboo_Choreography
{
    /**
     * Retrieves a track chart for a user profile, for a given date range.
     *
     * @param Temboo_Session $session The session that owns this GetWeeklyTrackChart choreography.
     * @return LastFm_User_GetWeeklyTrackChart New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetWeeklyTrackChart/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetWeeklyTrackChart choreography.
     *
     * @param LastFm_User_GetWeeklyTrackChart_Inputs|array $inputs (optional) Inputs as LastFm_User_GetWeeklyTrackChart_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetWeeklyTrackChart_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetWeeklyTrackChart_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWeeklyTrackChart choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetWeeklyTrackChart_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetWeeklyTrackChart_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWeeklyTrackChart choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyTrackChart_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetWeeklyTrackChart choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetWeeklyTrackChart_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWeeklyTrackChart input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetWeeklyTrackChart_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetWeeklyTrackChart_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetWeeklyTrackChart choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetWeeklyTrackChart_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EndTimestamp input for this GetWeeklyTrackChart choreography.
     *
     * @param string $value (optional, date) End timestamp at which the chart should end on, in UNIX timestamp format. This must be in the UTC time zone.
     * @return LastFm_User_GetWeeklyTrackChart_Inputs For method chaining.
     */
    public function setEndTimestamp($value)
    {
        return $this->set('EndTimestamp', $value);
    }

    /**
     * Set the value for the StartTimestamp input for this GetWeeklyTrackChart choreography.
     *
     * @param string $value (optional, date) Beginning timestamp at which the chart should start from, in UNIX timestamp format. This must be in the UTC time zone.
     * @return LastFm_User_GetWeeklyTrackChart_Inputs For method chaining.
     */
    public function setStartTimestamp($value)
    {
        return $this->set('StartTimestamp', $value);
    }

    /**
     * Set the value for the User input for this GetWeeklyTrackChart choreography.
     *
     * @param string $value (string) The last.fm username to fetch the charts of.
     * @return LastFm_User_GetWeeklyTrackChart_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetWeeklyTrackChart choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyTrackChart_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWeeklyTrackChart choreography.
     *
     * @param Temboo_Session $session The session that owns this GetWeeklyTrackChart execution.
     * @param LastFm_User_GetWeeklyTrackChart $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetWeeklyTrackChart_Inputs|array $inputs (optional) Inputs as LastFm_User_GetWeeklyTrackChart_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetWeeklyTrackChart_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetWeeklyTrackChart $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWeeklyTrackChart execution.
     *
     * @return LastFm_User_GetWeeklyTrackChart_Results New results object.
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
     * Wraps results in appopriate results class for this GetWeeklyTrackChart execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetWeeklyTrackChart_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetWeeklyTrackChart_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetWeeklyTrackChart choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyTrackChart_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetWeeklyTrackChart choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetWeeklyTrackChart_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetWeeklyTrackChart execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the top tags used by a user. 
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopTags extends Temboo_Choreography
{
    /**
     * Retrieves the top tags used by a user. 
     *
     * @param Temboo_Session $session The session that owns this GetTopTags choreography.
     * @return LastFm_User_GetTopTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetTopTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTopTags choreography.
     *
     * @param LastFm_User_GetTopTags_Inputs|array $inputs (optional) Inputs as LastFm_User_GetTopTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetTopTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetTopTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTopTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetTopTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetTopTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTopTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTopTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetTopTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTopTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetTopTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetTopTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTopTags choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetTopTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetTopTags choreography.
     *
     * @param int $value (optional, integer) Limit the number of tags returned. Defaults to 10.
     * @return LastFm_User_GetTopTags_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the User input for this GetTopTags choreography.
     *
     * @param string $value (string) The Last.fm username to fetch top tags for.
     * @return LastFm_User_GetTopTags_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetTopTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTopTags choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTopTags execution.
     * @param LastFm_User_GetTopTags $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetTopTags_Inputs|array $inputs (optional) Inputs as LastFm_User_GetTopTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetTopTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetTopTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTopTags execution.
     *
     * @return LastFm_User_GetTopTags_Results New results object.
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
     * Wraps results in appopriate results class for this GetTopTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetTopTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetTopTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTopTags choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetTopTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTopTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetTopTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTopTags execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the top tracks by an artist on Last.fm, ordered by popularity.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopTracks extends Temboo_Choreography
{
    /**
     * Retrieves the top tracks by an artist on Last.fm, ordered by popularity.
     *
     * @param Temboo_Session $session The session that owns this GetTopTracks choreography.
     * @return LastFm_Artist_GetTopTracks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/Artist/GetTopTracks/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTopTracks choreography.
     *
     * @param LastFm_Artist_GetTopTracks_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetTopTracks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetTopTracks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_Artist_GetTopTracks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTopTracks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetTopTracks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_Artist_GetTopTracks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTopTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopTracks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTopTracks choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_Artist_GetTopTracks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTopTracks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_Artist_GetTopTracks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_Artist_GetTopTracks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTopTracks choreography.
     *
     * @param string $value (required, string) Your Last.fm API Key.
     * @return LastFm_Artist_GetTopTracks_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Artist input for this GetTopTracks choreography.
     *
     * @param string $value (conditional, string) The artist name. Required unless providing MbID.
     * @return LastFm_Artist_GetTopTracks_Inputs For method chaining.
     */
    public function setArtist($value)
    {
        return $this->set('Artist', $value);
    }

    /**
     * Set the value for the AutoCorrect input for this GetTopTracks choreography.
     *
     * @param bool $value (optional, boolean) Transform misspelled artist names into correct artist names. The corrected artist name will be returned in the response. Defaults to 0.
     * @return LastFm_Artist_GetTopTracks_Inputs For method chaining.
     */
    public function setAutoCorrect($value)
    {
        return $this->set('AutoCorrect', $value);
    }

    /**
     * Set the value for the Limit input for this GetTopTracks choreography.
     *
     * @param int $value (optional, integer) The number of results to fetch per page. Defaults to 50.
     * @return LastFm_Artist_GetTopTracks_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MbID input for this GetTopTracks choreography.
     *
     * @param string $value (conditional, string) The musicbrainz id for the artist. Required unless providing Artist.
     * @return LastFm_Artist_GetTopTracks_Inputs For method chaining.
     */
    public function setMbID($value)
    {
        return $this->set('MbID', $value);
    }

    /**
     * Set the value for the Page input for this GetTopTracks choreography.
     *
     * @param int $value (optional, integer) The page number to fetch. Defaults to 1.
     * @return LastFm_Artist_GetTopTracks_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the GetTopTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopTracks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTopTracks choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTopTracks execution.
     * @param LastFm_Artist_GetTopTracks $choreo The choregraphy object for this execution.
     * @param LastFm_Artist_GetTopTracks_Inputs|array $inputs (optional) Inputs as LastFm_Artist_GetTopTracks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_Artist_GetTopTracks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_Artist_GetTopTracks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTopTracks execution.
     *
     * @return LastFm_Artist_GetTopTracks_Results New results object.
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
     * Wraps results in appopriate results class for this GetTopTracks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_Artist_GetTopTracks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_Artist_GetTopTracks_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTopTracks choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_Artist_GetTopTracks_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTopTracks choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_Artist_GetTopTracks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTopTracks execution.
     *
     * @return string (xml) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an artist chart for a user profile, for a given date range.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyArtistChart extends Temboo_Choreography
{
    /**
     * Retrieves an artist chart for a user profile, for a given date range.
     *
     * @param Temboo_Session $session The session that owns this GetWeeklyArtistChart choreography.
     * @return LastFm_User_GetWeeklyArtistChart New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/LastFm/User/GetWeeklyArtistChart/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetWeeklyArtistChart choreography.
     *
     * @param LastFm_User_GetWeeklyArtistChart_Inputs|array $inputs (optional) Inputs as LastFm_User_GetWeeklyArtistChart_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetWeeklyArtistChart_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new LastFm_User_GetWeeklyArtistChart_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWeeklyArtistChart choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetWeeklyArtistChart_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new LastFm_User_GetWeeklyArtistChart_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWeeklyArtistChart choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyArtistChart_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetWeeklyArtistChart choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return LastFm_User_GetWeeklyArtistChart_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWeeklyArtistChart input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return LastFm_User_GetWeeklyArtistChart_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return LastFm_User_GetWeeklyArtistChart_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetWeeklyArtistChart choreography.
     *
     * @param string $value (string) Your Last.fm API Key.
     * @return LastFm_User_GetWeeklyArtistChart_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EndTimestamp input for this GetWeeklyArtistChart choreography.
     *
     * @param string $value (optional, date) End timestamp at which the chart should end on, in UNIX timestamp format. This must be in the UTC time zone.
     * @return LastFm_User_GetWeeklyArtistChart_Inputs For method chaining.
     */
    public function setEndTimestamp($value)
    {
        return $this->set('EndTimestamp', $value);
    }

    /**
     * Set the value for the StartTimestamp input for this GetWeeklyArtistChart choreography.
     *
     * @param string $value (optional, date) Beginning timestamp at which the chart should start from, in UNIX timestamp format. This must be in the UTC time zone.
     * @return LastFm_User_GetWeeklyArtistChart_Inputs For method chaining.
     */
    public function setStartTimestamp($value)
    {
        return $this->set('StartTimestamp', $value);
    }

    /**
     * Set the value for the User input for this GetWeeklyArtistChart choreography.
     *
     * @param string $value (string) The last.fm username to fetch the charts of.
     * @return LastFm_User_GetWeeklyArtistChart_Inputs For method chaining.
     */
    public function setUser($value)
    {
        return $this->set('User', $value);
    }
}


/**
 * Execution object for the GetWeeklyArtistChart choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyArtistChart_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWeeklyArtistChart choreography.
     *
     * @param Temboo_Session $session The session that owns this GetWeeklyArtistChart execution.
     * @param LastFm_User_GetWeeklyArtistChart $choreo The choregraphy object for this execution.
     * @param LastFm_User_GetWeeklyArtistChart_Inputs|array $inputs (optional) Inputs as LastFm_User_GetWeeklyArtistChart_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return LastFm_User_GetWeeklyArtistChart_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, LastFm_User_GetWeeklyArtistChart $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWeeklyArtistChart execution.
     *
     * @return LastFm_User_GetWeeklyArtistChart_Results New results object.
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
     * Wraps results in appopriate results class for this GetWeeklyArtistChart execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return LastFm_User_GetWeeklyArtistChart_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new LastFm_User_GetWeeklyArtistChart_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetWeeklyArtistChart choreography.
 *
 * @package Temboo
 * @subpackage LastFm
 */
class LastFm_User_GetWeeklyArtistChart_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetWeeklyArtistChart choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return LastFm_User_GetWeeklyArtistChart_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetWeeklyArtistChart execution.
     *
     * @return string (XML) The response from Last.fm.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>