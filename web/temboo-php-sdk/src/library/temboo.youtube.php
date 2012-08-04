<?php

/**
 * Temboo PHP SDK YouTube classes
 *
 * Execute Choreographies from the Temboo YouTube bundle.
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
 * @subpackage YouTube
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieves Movies and Trailers videos that have had the greatest increases in popularity.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetTrendingVideos extends Temboo_Choreography
{
    /**
     * Retrieves Movies and Trailers videos that have had the greatest increases in popularity.
     *
     * @param Temboo_Session $session The session that owns this GetTrendingVideos choreography.
     * @return YouTube_GetTrendingVideos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/GetTrendingVideos/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTrendingVideos choreography.
     *
     * @param YouTube_GetTrendingVideos_Inputs|array $inputs (optional) Inputs as YouTube_GetTrendingVideos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_GetTrendingVideos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_GetTrendingVideos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTrendingVideos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_GetTrendingVideos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_GetTrendingVideos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTrendingVideos choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetTrendingVideos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTrendingVideos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_GetTrendingVideos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTrendingVideos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_GetTrendingVideos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return YouTube_GetTrendingVideos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the PaidContent input for this GetTrendingVideos choreography.
     *
     * @param bool $value (optional, boolean) Restrict the search to only include paid content ("true") or to include both paid and free content ("false", the default).
     * @return YouTube_GetTrendingVideos_Inputs For method chaining.
     */
    public function setPaidContent($value)
    {
        return $this->set('PaidContent', $value);
    }

    /**
     * Set the value for the Region input for this GetTrendingVideos choreography.
     *
     * @param string $value (optional, string) Restrict search to movies viewable in a specific region (defaults to "US"). Required for paid-content-only searches.
     * @return YouTube_GetTrendingVideos_Inputs For method chaining.
     */
    public function setRegion($value)
    {
        return $this->set('Region', $value);
    }
}


/**
 * Execution object for the GetTrendingVideos choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetTrendingVideos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTrendingVideos choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTrendingVideos execution.
     * @param YouTube_GetTrendingVideos $choreo The choregraphy object for this execution.
     * @param YouTube_GetTrendingVideos_Inputs|array $inputs (optional) Inputs as YouTube_GetTrendingVideos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_GetTrendingVideos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_GetTrendingVideos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTrendingVideos execution.
     *
     * @return YouTube_GetTrendingVideos_Results New results object.
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
     * Wraps results in appopriate results class for this GetTrendingVideos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_GetTrendingVideos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_GetTrendingVideos_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTrendingVideos choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetTrendingVideos_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTrendingVideos choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_GetTrendingVideos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTrendingVideos execution.
     *
     * @return string (XML) The result set returned by the API call.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of videos that reflect YouTube user behavior, or that were selected by YouTube staff.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetStandardFeeds extends Temboo_Choreography
{
    /**
     * Retrieve a list of videos that reflect YouTube user behavior, or that were selected by YouTube staff.
     *
     * @param Temboo_Session $session The session that owns this GetStandardFeeds choreography.
     * @return YouTube_GetStandardFeeds New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/GetStandardFeeds/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetStandardFeeds choreography.
     *
     * @param YouTube_GetStandardFeeds_Inputs|array $inputs (optional) Inputs as YouTube_GetStandardFeeds_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_GetStandardFeeds_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_GetStandardFeeds_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetStandardFeeds choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_GetStandardFeeds_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_GetStandardFeeds_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetStandardFeeds choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetStandardFeeds_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetStandardFeeds choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_GetStandardFeeds_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetStandardFeeds input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_GetStandardFeeds_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return YouTube_GetStandardFeeds_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the MaxResults input for this GetStandardFeeds choreography.
     *
     * @param int $value (optional, integer) Specify the maximum number of results to return. The default value is 10, the maximum value is 50.
     * @return YouTube_GetStandardFeeds_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the StartIndex input for this GetStandardFeeds choreography.
     *
     * @param int $value (optional, integer) Specify the first matching result to return. Uses a one-based index (the first result is 1 by default).
     * @return YouTube_GetStandardFeeds_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the Time input for this GetStandardFeeds choreography.
     *
     * @param string $value (optional, string) Restrict the response to results relevant to the specified time frame. Valid values: today, this_week, this_month, and all_time (the default)
     * @return YouTube_GetStandardFeeds_Inputs For method chaining.
     */
    public function setTime($value)
    {
        return $this->set('Time', $value);
    }

    /**
     * Set the value for the Type input for this GetStandardFeeds choreography.
     *
     * @param string $value (string) Enter top_rated, top_favorites, most_viewed, most_shared, most_popular, most_recent, most_discussed, most_responded, recently_featured, or on_the_web.
     * @return YouTube_GetStandardFeeds_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the GetStandardFeeds choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetStandardFeeds_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetStandardFeeds choreography.
     *
     * @param Temboo_Session $session The session that owns this GetStandardFeeds execution.
     * @param YouTube_GetStandardFeeds $choreo The choregraphy object for this execution.
     * @param YouTube_GetStandardFeeds_Inputs|array $inputs (optional) Inputs as YouTube_GetStandardFeeds_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_GetStandardFeeds_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_GetStandardFeeds $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetStandardFeeds execution.
     *
     * @return YouTube_GetStandardFeeds_Results New results object.
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
     * Wraps results in appopriate results class for this GetStandardFeeds execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_GetStandardFeeds_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_GetStandardFeeds_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetStandardFeeds choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetStandardFeeds_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetStandardFeeds choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_GetStandardFeeds_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetStandardFeeds execution.
     *
     * @return string (XML) The result set returned by the API call.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of live video events.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetLiveEvents extends Temboo_Choreography
{
    /**
     * Retrieve a list of live video events.
     *
     * @param Temboo_Session $session The session that owns this GetLiveEvents choreography.
     * @return YouTube_GetLiveEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/GetLiveEvents/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetLiveEvents choreography.
     *
     * @param YouTube_GetLiveEvents_Inputs|array $inputs (optional) Inputs as YouTube_GetLiveEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_GetLiveEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_GetLiveEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLiveEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_GetLiveEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_GetLiveEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLiveEvents choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetLiveEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetLiveEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_GetLiveEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLiveEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_GetLiveEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return YouTube_GetLiveEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the MaxResults input for this GetLiveEvents choreography.
     *
     * @param int $value (optional, integer) Specify the maximum number of results to return. The default value is 10, the maximum value is 50.
     * @return YouTube_GetLiveEvents_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the StartIndex input for this GetLiveEvents choreography.
     *
     * @param int $value (optional, integer) Specify the first matching result to return. Uses a one-based index (the first result is 1 by default).
     * @return YouTube_GetLiveEvents_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the Type input for this GetLiveEvents choreography.
     *
     * @param string $value (string) Specify the kind of live YouTube event list to retrieve: featured, live_now, upcoming, or recently_broadcasted.
     * @return YouTube_GetLiveEvents_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the GetLiveEvents choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetLiveEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLiveEvents choreography.
     *
     * @param Temboo_Session $session The session that owns this GetLiveEvents execution.
     * @param YouTube_GetLiveEvents $choreo The choregraphy object for this execution.
     * @param YouTube_GetLiveEvents_Inputs|array $inputs (optional) Inputs as YouTube_GetLiveEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_GetLiveEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_GetLiveEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLiveEvents execution.
     *
     * @return YouTube_GetLiveEvents_Results New results object.
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
     * Wraps results in appopriate results class for this GetLiveEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_GetLiveEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_GetLiveEvents_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetLiveEvents choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetLiveEvents_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetLiveEvents choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_GetLiveEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetLiveEvents execution.
     *
     * @return string The result set returned by the API call.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve information about a single video using its ID.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetVideoData extends Temboo_Choreography
{
    /**
     * Retrieve information about a single video using its ID.
     *
     * @param Temboo_Session $session The session that owns this GetVideoData choreography.
     * @return YouTube_GetVideoData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/GetVideoData/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetVideoData choreography.
     *
     * @param YouTube_GetVideoData_Inputs|array $inputs (optional) Inputs as YouTube_GetVideoData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_GetVideoData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_GetVideoData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetVideoData choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_GetVideoData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_GetVideoData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetVideoData choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetVideoData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetVideoData choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_GetVideoData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetVideoData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_GetVideoData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return YouTube_GetVideoData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the VideoID input for this GetVideoData choreography.
     *
     * @param string $value (string) The unique ID given to a video by YouTube.
     * @return YouTube_GetVideoData_Inputs For method chaining.
     */
    public function setVideoID($value)
    {
        return $this->set('VideoID', $value);
    }
}


/**
 * Execution object for the GetVideoData choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetVideoData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetVideoData choreography.
     *
     * @param Temboo_Session $session The session that owns this GetVideoData execution.
     * @param YouTube_GetVideoData $choreo The choregraphy object for this execution.
     * @param YouTube_GetVideoData_Inputs|array $inputs (optional) Inputs as YouTube_GetVideoData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_GetVideoData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_GetVideoData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetVideoData execution.
     *
     * @return YouTube_GetVideoData_Results New results object.
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
     * Wraps results in appopriate results class for this GetVideoData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_GetVideoData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_GetVideoData_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetVideoData choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_GetVideoData_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetVideoData choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_GetVideoData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetVideoData execution.
     *
     * @return string (XML) The result set returned by the API call.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve specific data fields for videos that match a search term.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_FilterSearchResults extends Temboo_Choreography
{
    /**
     * Retrieve specific data fields for videos that match a search term.
     *
     * @param Temboo_Session $session The session that owns this FilterSearchResults choreography.
     * @return YouTube_FilterSearchResults New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/FilterSearchResults/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FilterSearchResults choreography.
     *
     * @param YouTube_FilterSearchResults_Inputs|array $inputs (optional) Inputs as YouTube_FilterSearchResults_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_FilterSearchResults_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_FilterSearchResults_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FilterSearchResults choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_FilterSearchResults_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_FilterSearchResults_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FilterSearchResults choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_FilterSearchResults_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FilterSearchResults choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_FilterSearchResults_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FilterSearchResults input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_FilterSearchResults_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return YouTube_FilterSearchResults_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FieldsToReturn input for this FilterSearchResults choreography.
     *
     * @param string $value (string) Specify the fields and conditions to return in the result set.
     * @return YouTube_FilterSearchResults_Inputs For method chaining.
     */
    public function setFieldsToReturn($value)
    {
        return $this->set('FieldsToReturn', $value);
    }

    /**
     * Set the value for the MaxResults input for this FilterSearchResults choreography.
     *
     * @param int $value (optional, integer) Specify the maximum number of results to return. The default value is 10, the maximum value is 50.
     * @return YouTube_FilterSearchResults_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Query input for this FilterSearchResults choreography.
     *
     * @param string $value (string) A feed search query term, including title, keyword, description, authors' username, or category. Enclose in quotation marks for an exact match.
     * @return YouTube_FilterSearchResults_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the StartIndex input for this FilterSearchResults choreography.
     *
     * @param int $value (optional, integer) Specify the first matching result to return. Uses a one-based index (the first result is 1 by default).
     * @return YouTube_FilterSearchResults_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }
}


/**
 * Execution object for the FilterSearchResults choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_FilterSearchResults_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FilterSearchResults choreography.
     *
     * @param Temboo_Session $session The session that owns this FilterSearchResults execution.
     * @param YouTube_FilterSearchResults $choreo The choregraphy object for this execution.
     * @param YouTube_FilterSearchResults_Inputs|array $inputs (optional) Inputs as YouTube_FilterSearchResults_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_FilterSearchResults_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_FilterSearchResults $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FilterSearchResults execution.
     *
     * @return YouTube_FilterSearchResults_Results New results object.
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
     * Wraps results in appopriate results class for this FilterSearchResults execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_FilterSearchResults_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_FilterSearchResults_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FilterSearchResults choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_FilterSearchResults_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FilterSearchResults choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_FilterSearchResults_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FilterSearchResults execution.
     *
     * @return string (XML) The result set returned by the API call.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of videos to which a specified keyword has been assigned.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchByKeyword extends Temboo_Choreography
{
    /**
     * Retrieve a list of videos to which a specified keyword has been assigned.
     *
     * @param Temboo_Session $session The session that owns this SearchByKeyword choreography.
     * @return YouTube_SearchByKeyword New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/SearchByKeyword/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchByKeyword choreography.
     *
     * @param YouTube_SearchByKeyword_Inputs|array $inputs (optional) Inputs as YouTube_SearchByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_SearchByKeyword_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_SearchByKeyword_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByKeyword choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_SearchByKeyword_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_SearchByKeyword_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByKeyword choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchByKeyword_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchByKeyword choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_SearchByKeyword_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByKeyword input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_SearchByKeyword_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return YouTube_SearchByKeyword_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Keyword input for this SearchByKeyword choreography.
     *
     * @param string $value (string) A keyword associated with a  video, entered in all lowercase letters. Separate multiple keywords with commas (but no spaces).
     * @return YouTube_SearchByKeyword_Inputs For method chaining.
     */
    public function setKeyword($value)
    {
        return $this->set('Keyword', $value);
    }

    /**
     * Set the value for the MaxResults input for this SearchByKeyword choreography.
     *
     * @param int $value (optional, integer) Specify the maximum number of results to return. The default value is 10, the maximum value is 50.
     * @return YouTube_SearchByKeyword_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the StartIndex input for this SearchByKeyword choreography.
     *
     * @param int $value (optional, integer) Specify the first matching result to return. Uses a one-based index (the first result is 1 by default).
     * @return YouTube_SearchByKeyword_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }
}


/**
 * Execution object for the SearchByKeyword choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchByKeyword_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByKeyword choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchByKeyword execution.
     * @param YouTube_SearchByKeyword $choreo The choregraphy object for this execution.
     * @param YouTube_SearchByKeyword_Inputs|array $inputs (optional) Inputs as YouTube_SearchByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_SearchByKeyword_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_SearchByKeyword $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByKeyword execution.
     *
     * @return YouTube_SearchByKeyword_Results New results object.
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
     * Wraps results in appopriate results class for this SearchByKeyword execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_SearchByKeyword_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_SearchByKeyword_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchByKeyword choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchByKeyword_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchByKeyword choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_SearchByKeyword_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchByKeyword execution.
     *
     * @return string (XML) The result set returned by the API call.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of videos in a specified category.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchByCategory extends Temboo_Choreography
{
    /**
     * Retrieve a list of videos in a specified category.
     *
     * @param Temboo_Session $session The session that owns this SearchByCategory choreography.
     * @return YouTube_SearchByCategory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/SearchByCategory/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchByCategory choreography.
     *
     * @param YouTube_SearchByCategory_Inputs|array $inputs (optional) Inputs as YouTube_SearchByCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_SearchByCategory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_SearchByCategory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByCategory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_SearchByCategory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_SearchByCategory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByCategory choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchByCategory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchByCategory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_SearchByCategory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByCategory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_SearchByCategory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return YouTube_SearchByCategory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Category input for this SearchByCategory choreography.
     *
     * @param string $value (string) A valid YouTube video category name, entered with the first letter capitalized.
     * @return YouTube_SearchByCategory_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the MaxResults input for this SearchByCategory choreography.
     *
     * @param int $value (optional, integer) Specify the maximum number of results to return. The default value is 10, the maximum value is 50.
     * @return YouTube_SearchByCategory_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the StartIndex input for this SearchByCategory choreography.
     *
     * @param int $value (optional, integer) Specify the first matching result to return. Uses a one-based index (the first result is 1 by default).
     * @return YouTube_SearchByCategory_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }
}


/**
 * Execution object for the SearchByCategory choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchByCategory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByCategory choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchByCategory execution.
     * @param YouTube_SearchByCategory $choreo The choregraphy object for this execution.
     * @param YouTube_SearchByCategory_Inputs|array $inputs (optional) Inputs as YouTube_SearchByCategory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_SearchByCategory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_SearchByCategory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByCategory execution.
     *
     * @return YouTube_SearchByCategory_Results New results object.
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
     * Wraps results in appopriate results class for this SearchByCategory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_SearchByCategory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_SearchByCategory_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchByCategory choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchByCategory_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchByCategory choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_SearchByCategory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchByCategory execution.
     *
     * @return string (XML) The result set returned by the API call.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of video channels.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchChannels extends Temboo_Choreography
{
    /**
     * Retrieve a list of video channels.
     *
     * @param Temboo_Session $session The session that owns this SearchChannels choreography.
     * @return YouTube_SearchChannels New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/SearchChannels/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchChannels choreography.
     *
     * @param YouTube_SearchChannels_Inputs|array $inputs (optional) Inputs as YouTube_SearchChannels_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_SearchChannels_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_SearchChannels_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchChannels choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_SearchChannels_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_SearchChannels_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchChannels choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchChannels_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchChannels choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_SearchChannels_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchChannels input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_SearchChannels_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return YouTube_SearchChannels_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the MaxResults input for this SearchChannels choreography.
     *
     * @param int $value (optional, integer) Specify the maximum number of results to return. The default value is 10, the maximum value is 50.
     * @return YouTube_SearchChannels_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Query input for this SearchChannels choreography.
     *
     * @param string $value (string) A search query term, such as a title, keyword, description, author's username, or category. Enclose in quotation marks for an exact match.
     * @return YouTube_SearchChannels_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the StartIndex input for this SearchChannels choreography.
     *
     * @param int $value (optional, integer) Specify the first matching result to return. Uses a one-based index (the first result is 1 by default).
     * @return YouTube_SearchChannels_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }
}


/**
 * Execution object for the SearchChannels choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchChannels_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchChannels choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchChannels execution.
     * @param YouTube_SearchChannels $choreo The choregraphy object for this execution.
     * @param YouTube_SearchChannels_Inputs|array $inputs (optional) Inputs as YouTube_SearchChannels_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_SearchChannels_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_SearchChannels $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchChannels execution.
     *
     * @return YouTube_SearchChannels_Results New results object.
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
     * Wraps results in appopriate results class for this SearchChannels execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_SearchChannels_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_SearchChannels_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchChannels choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchChannels_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchChannels choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_SearchChannels_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchChannels execution.
     *
     * @return string (XML) The result set returned by the API call.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of videos matching a specified search term.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchVideos extends Temboo_Choreography
{
    /**
     * Retrieve a list of videos matching a specified search term.
     *
     * @param Temboo_Session $session The session that owns this SearchVideos choreography.
     * @return YouTube_SearchVideos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/SearchVideos/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchVideos choreography.
     *
     * @param YouTube_SearchVideos_Inputs|array $inputs (optional) Inputs as YouTube_SearchVideos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_SearchVideos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_SearchVideos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchVideos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_SearchVideos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_SearchVideos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchVideos choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchVideos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchVideos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_SearchVideos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchVideos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_SearchVideos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return YouTube_SearchVideos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the MaxResults input for this SearchVideos choreography.
     *
     * @param int $value (optional, integer) Specify the maximum number of results to return. The default value is 10, the maximum value is 50.
     * @return YouTube_SearchVideos_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Query input for this SearchVideos choreography.
     *
     * @param string $value (string) A search query term, including title, keyword, description, author's username, or category. Enclose in quotation marks for an for an exact match.
     * @return YouTube_SearchVideos_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the StartIndex input for this SearchVideos choreography.
     *
     * @param int $value (optional, integer) Specify the first matching result to return. Uses a one-based index (the first result is 1 by default).
     * @return YouTube_SearchVideos_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }
}


/**
 * Execution object for the SearchVideos choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchVideos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchVideos choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchVideos execution.
     * @param YouTube_SearchVideos $choreo The choregraphy object for this execution.
     * @param YouTube_SearchVideos_Inputs|array $inputs (optional) Inputs as YouTube_SearchVideos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_SearchVideos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_SearchVideos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchVideos execution.
     *
     * @return YouTube_SearchVideos_Results New results object.
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
     * Wraps results in appopriate results class for this SearchVideos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_SearchVideos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_SearchVideos_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchVideos choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchVideos_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchVideos choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_SearchVideos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchVideos execution.
     *
     * @return string (XML) The result set returned by the API call.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of playlists matching a search term.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchPlaylists extends Temboo_Choreography
{
    /**
     * Retrieve a list of playlists matching a search term.
     *
     * @param Temboo_Session $session The session that owns this SearchPlaylists choreography.
     * @return YouTube_SearchPlaylists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/YouTube/SearchPlaylists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchPlaylists choreography.
     *
     * @param YouTube_SearchPlaylists_Inputs|array $inputs (optional) Inputs as YouTube_SearchPlaylists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_SearchPlaylists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new YouTube_SearchPlaylists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchPlaylists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_SearchPlaylists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new YouTube_SearchPlaylists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchPlaylists choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchPlaylists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchPlaylists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return YouTube_SearchPlaylists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchPlaylists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return YouTube_SearchPlaylists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return YouTube_SearchPlaylists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the MaxResults input for this SearchPlaylists choreography.
     *
     * @param int $value (optional, integer) Specify the maximum number of results to return. The default value is 10, the maximum value is 50.
     * @return YouTube_SearchPlaylists_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Playlist input for this SearchPlaylists choreography.
     *
     * @param string $value (string) The name of a playlist to search for. Separate multiple playlist names with commas (but no spaces).
     * @return YouTube_SearchPlaylists_Inputs For method chaining.
     */
    public function setPlaylist($value)
    {
        return $this->set('Playlist', $value);
    }

    /**
     * Set the value for the StartIndex input for this SearchPlaylists choreography.
     *
     * @param int $value (optional, integer) Specify the first matching result to return. Uses a one-based index (the first result is 1 by default).
     * @return YouTube_SearchPlaylists_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }
}


/**
 * Execution object for the SearchPlaylists choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchPlaylists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchPlaylists choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchPlaylists execution.
     * @param YouTube_SearchPlaylists $choreo The choregraphy object for this execution.
     * @param YouTube_SearchPlaylists_Inputs|array $inputs (optional) Inputs as YouTube_SearchPlaylists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return YouTube_SearchPlaylists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, YouTube_SearchPlaylists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchPlaylists execution.
     *
     * @return YouTube_SearchPlaylists_Results New results object.
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
     * Wraps results in appopriate results class for this SearchPlaylists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return YouTube_SearchPlaylists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new YouTube_SearchPlaylists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchPlaylists choreography.
 *
 * @package Temboo
 * @subpackage YouTube
 */
class YouTube_SearchPlaylists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchPlaylists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return YouTube_SearchPlaylists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchPlaylists execution.
     *
     * @return string (XML) The result set returned by the API call.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>