<?php

/**
 * Temboo PHP SDK Twitter classes
 *
 * Execute Choreographies from the Temboo Twitter bundle.
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
 * @subpackage Twitter
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieves a list of numeric IDs for every user the specified user is following.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFriendsByID extends Temboo_Choreography
{
    /**
     * Retrieves a list of numeric IDs for every user the specified user is following.
     *
     * @param Temboo_Session $session The session that owns this GetFriendsByID choreography.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/GetFriendsByID/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetFriendsByID choreography.
     *
     * @param Twitter_FriendsAndFollowers_GetFriendsByID_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_GetFriendsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_GetFriendsByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFriendsByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_GetFriendsByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFriendsByID choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFriendsByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetFriendsByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFriendsByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFriendsByID choreography.
     *
     * @param string $value (conditional, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFriendsByID choreography.
     *
     * @param string $value (conditional, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFriendsByID choreography.
     *
     * @param string $value (conditional, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFriendsByID choreography.
     *
     * @param string $value (conditional, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this GetFriendsByID choreography.
     *
     * @param string $value (conditional, string) Used to retrieve the followers of another Twitter user. Required if UserId isn't specified.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserID input for this GetFriendsByID choreography.
     *
     * @param int $value (conditional, integer) Used to retrieve the followers of another Twitter user. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFriendsByID choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFriendsByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFriendsByID choreography.
     *
     * @param Temboo_Session $session The session that owns this GetFriendsByID execution.
     * @param Twitter_FriendsAndFollowers_GetFriendsByID $choreo The choregraphy object for this execution.
     * @param Twitter_FriendsAndFollowers_GetFriendsByID_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_GetFriendsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_GetFriendsByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFriendsByID execution.
     *
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Results New results object.
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
     * Wraps results in appopriate results class for this GetFriendsByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_GetFriendsByID_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetFriendsByID choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFriendsByID_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetFriendsByID choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetFriendsByID execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns user information for specific Twitter users. The Choreo accepts comma-separated lists of multiple screen names or user IDs.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Lookup extends Temboo_Choreography
{
    /**
     * Returns user information for specific Twitter users. The Choreo accepts comma-separated lists of multiple screen names or user IDs.
     *
     * @param Temboo_Session $session The session that owns this Lookup choreography.
     * @return Twitter_Users_Lookup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/Lookup/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Lookup choreography.
     *
     * @param Twitter_Users_Lookup_Inputs|array $inputs (optional) Inputs as Twitter_Users_Lookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Lookup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_Lookup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Lookup choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Lookup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_Lookup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Lookup choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Lookup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Lookup choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Lookup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Lookup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Lookup choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Lookup choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Lookup choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Lookup choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this Lookup choreography.
     *
     * @param string $value (conditional, string) The screen name of the Twitter user you want to retrieve information for. Required if UserId isn't specified.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this Lookup choreography.
     *
     * @param int $value (conditional, integer) The user id of the Twitter user to return information for. Required if ScreenName isn't specified.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the Lookup choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Lookup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Lookup choreography.
     *
     * @param Temboo_Session $session The session that owns this Lookup execution.
     * @param Twitter_Users_Lookup $choreo The choregraphy object for this execution.
     * @param Twitter_Users_Lookup_Inputs|array $inputs (optional) Inputs as Twitter_Users_Lookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Lookup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_Lookup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Lookup execution.
     *
     * @return Twitter_Users_Lookup_Results New results object.
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
     * Wraps results in appopriate results class for this Lookup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Users_Lookup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_Lookup_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Lookup choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Lookup_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Lookup choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_Lookup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Lookup execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Locates places near the given coordinates which are similar in name.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_SimilarPlaces extends Temboo_Choreography
{
    /**
     * Locates places near the given coordinates which are similar in name.
     *
     * @param Temboo_Session $session The session that owns this SimilarPlaces choreography.
     * @return Twitter_PlacesAndGeo_SimilarPlaces New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/PlacesAndGeo/SimilarPlaces/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SimilarPlaces choreography.
     *
     * @param Twitter_PlacesAndGeo_SimilarPlaces_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_SimilarPlaces_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_PlacesAndGeo_SimilarPlaces_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SimilarPlaces choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_PlacesAndGeo_SimilarPlaces_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SimilarPlaces choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_SimilarPlaces_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SimilarPlaces choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SimilarPlaces input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Accuracy input for this SimilarPlaces choreography.
     *
     * @param string $value (optional, string) A hint on the "region" in which to search. If a number, then this is a radius in meters. You can also specify feet by using the ft suffix (i.e. 5ft).
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Callback input for this SimilarPlaces choreography.
     *
     * @param string $value (optional, string) If supplied, the response will use the JSONP format with a callback of the given name.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the ContainedWithin input for this SimilarPlaces choreography.
     *
     * @param string $value (optional, string) This is the place_id which you would like to restrict the search results to. This id can be retrieved with the GetPlaceInformation Choreo.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setContainedWithin($value)
    {
        return $this->set('ContainedWithin', $value);
    }

    /**
     * Set the value for the Granularity input for this SimilarPlaces choreography.
     *
     * @param string $value (optional, string) This is the minimal granularity of place types to return and must be one of: poi, neighborhood, city, admin or country. Defaults to neighborhood.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setGranularity($value)
    {
        return $this->set('Granularity', $value);
    }

    /**
     * Set the value for the Latitude input for this SimilarPlaces choreography.
     *
     * @param float $value (required, decimal) The latitude to search around.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this SimilarPlaces choreography.
     *
     * @param float $value (required, decimal) The longitude to search around.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MaxResults input for this SimilarPlaces choreography.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Name input for this SimilarPlaces choreography.
     *
     * @param string $value (required, string) The name a place is known as.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }
}


/**
 * Execution object for the SimilarPlaces choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_SimilarPlaces_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SimilarPlaces choreography.
     *
     * @param Temboo_Session $session The session that owns this SimilarPlaces execution.
     * @param Twitter_PlacesAndGeo_SimilarPlaces $choreo The choregraphy object for this execution.
     * @param Twitter_PlacesAndGeo_SimilarPlaces_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_SimilarPlaces_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_PlacesAndGeo_SimilarPlaces $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SimilarPlaces execution.
     *
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Results New results object.
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
     * Wraps results in appopriate results class for this SimilarPlaces execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_PlacesAndGeo_SimilarPlaces_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SimilarPlaces choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_SimilarPlaces_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SimilarPlaces choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SimilarPlaces execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified status.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesDestroy extends Temboo_Choreography
{
    /**
     * Deletes a specified status.
     *
     * @param Temboo_Session $session The session that owns this StatusesDestroy choreography.
     * @return Twitter_Tweets_StatusesDestroy New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/StatusesDestroy/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this StatusesDestroy choreography.
     *
     * @param Twitter_Tweets_StatusesDestroy_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesDestroy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesDestroy_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_StatusesDestroy_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StatusesDestroy choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesDestroy_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_StatusesDestroy_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StatusesDestroy choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesDestroy_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the StatusesDestroy choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesDestroy_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StatusesDestroy input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this StatusesDestroy choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this StatusesDestroy choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this StatusesDestroy choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this StatusesDestroy choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this StatusesDestroy choreography.
     *
     * @param int $value (required, integer) The numerical ID of the desired status.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this StatusesDestroy choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet will include a node called "entities". This node offers a variety of metadata about the tweet.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the TrimUser input for this StatusesDestroy choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet returned in a timeline will include a user object including only the status authors numerical ID.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the StatusesDestroy choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesDestroy_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StatusesDestroy choreography.
     *
     * @param Temboo_Session $session The session that owns this StatusesDestroy execution.
     * @param Twitter_Tweets_StatusesDestroy $choreo The choregraphy object for this execution.
     * @param Twitter_Tweets_StatusesDestroy_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesDestroy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesDestroy_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_StatusesDestroy $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StatusesDestroy execution.
     *
     * @return Twitter_Tweets_StatusesDestroy_Results New results object.
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
     * Wraps results in appopriate results class for this StatusesDestroy execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_StatusesDestroy_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_StatusesDestroy_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the StatusesDestroy choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesDestroy_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the StatusesDestroy choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_StatusesDestroy_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this StatusesDestroy execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a single direct message, specified by an id.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetMessageByID extends Temboo_Choreography
{
    /**
     * Retrieves a single direct message, specified by an id.
     *
     * @param Temboo_Session $session The session that owns this GetMessageByID choreography.
     * @return Twitter_DirectMessages_GetMessageByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/GetMessageByID/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetMessageByID choreography.
     *
     * @param Twitter_DirectMessages_GetMessageByID_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_GetMessageByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_GetMessageByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_GetMessageByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMessageByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_GetMessageByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMessageByID choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetMessageByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetMessageByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMessageByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetMessageByID choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetMessageByID choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetMessageByID choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetMessageByID choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this GetMessageByID choreography.
     *
     * @param int $value (required, integer) The ID of the direct message.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the GetMessageByID choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetMessageByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMessageByID choreography.
     *
     * @param Temboo_Session $session The session that owns this GetMessageByID execution.
     * @param Twitter_DirectMessages_GetMessageByID $choreo The choregraphy object for this execution.
     * @param Twitter_DirectMessages_GetMessageByID_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_GetMessageByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_GetMessageByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_GetMessageByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMessageByID execution.
     *
     * @return Twitter_DirectMessages_GetMessageByID_Results New results object.
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
     * Wraps results in appopriate results class for this GetMessageByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_GetMessageByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_GetMessageByID_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetMessageByID choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetMessageByID_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetMessageByID choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_GetMessageByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetMessageByID execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves user objects of up to 100 members who retweeted a specified status.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_RetweetedBy extends Temboo_Choreography
{
    /**
     * Retrieves user objects of up to 100 members who retweeted a specified status.
     *
     * @param Temboo_Session $session The session that owns this RetweetedBy choreography.
     * @return Twitter_Tweets_RetweetedBy New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/RetweetedBy/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetweetedBy choreography.
     *
     * @param Twitter_Tweets_RetweetedBy_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_RetweetedBy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_RetweetedBy_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_RetweetedBy_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetweetedBy choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_RetweetedBy_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_RetweetedBy_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetweetedBy choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_RetweetedBy_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetweetedBy choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_RetweetedBy_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetweetedBy input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_RetweetedBy_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_RetweetedBy_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetweetedBy choreography.
     *
     * @param string $value (conditional, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_RetweetedBy_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetweetedBy choreography.
     *
     * @param string $value (conditional, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_RetweetedBy_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this RetweetedBy choreography.
     *
     * @param string $value (conditional, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_RetweetedBy_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this RetweetedBy choreography.
     *
     * @param string $value (conditional, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_RetweetedBy_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this RetweetedBy choreography.
     *
     * @param int $value (optional, integer) Specifies the number of retweets to try and retrieve, up to a maximum of 100.
     * @return Twitter_Tweets_RetweetedBy_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ID input for this RetweetedBy choreography.
     *
     * @param int $value (required, integer) The numerical ID of the desired status.
     * @return Twitter_Tweets_RetweetedBy_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Page input for this RetweetedBy choreography.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_Tweets_RetweetedBy_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the RetweetedBy choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_RetweetedBy_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetweetedBy choreography.
     *
     * @param Temboo_Session $session The session that owns this RetweetedBy execution.
     * @param Twitter_Tweets_RetweetedBy $choreo The choregraphy object for this execution.
     * @param Twitter_Tweets_RetweetedBy_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_RetweetedBy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_RetweetedBy_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_RetweetedBy $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetweetedBy execution.
     *
     * @return Twitter_Tweets_RetweetedBy_Results New results object.
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
     * Wraps results in appopriate results class for this RetweetedBy execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_RetweetedBy_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_RetweetedBy_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetweetedBy choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_RetweetedBy_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetweetedBy choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_RetweetedBy_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetweetedBy execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the most recent statuses, including retweets if they exist, posted by the authenticating user and the user's they follow. 
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_HomeTimeline extends Temboo_Choreography
{
    /**
     * Retrieves the most recent statuses, including retweets if they exist, posted by the authenticating user and the user's they follow. 
     *
     * @param Temboo_Session $session The session that owns this HomeTimeline choreography.
     * @return Twitter_Timelines_HomeTimeline New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/HomeTimeline/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this HomeTimeline choreography.
     *
     * @param Twitter_Timelines_HomeTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_HomeTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_HomeTimeline_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_HomeTimeline_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this HomeTimeline choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_HomeTimeline_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_HomeTimeline_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the HomeTimeline choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_HomeTimeline_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the HomeTimeline choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_HomeTimeline_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this HomeTimeline input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this HomeTimeline choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this HomeTimeline choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this HomeTimeline choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this HomeTimeline choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContributorDetails input for this HomeTimeline choreography.
     *
     * @param bool $value (optional, boolean) Set to either true, t or 1 to include the screen_name of the contributor. By default only the user_id of the contributor is included.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setContributorDetails($value)
    {
        return $this->set('ContributorDetails', $value);
    }

    /**
     * Set the value for the Count input for this HomeTimeline choreography.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ExcludeReplies input for this HomeTimeline choreography.
     *
     * @param bool $value (optional, boolean) Set to either true, t or 1 to prevent replies from appearing in the returned timeline.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setExcludeReplies($value)
    {
        return $this->set('ExcludeReplies', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this HomeTimeline choreography.
     *
     * @param bool $value (optional, boolean) An advanced option for returning more verbose metadata. When set to either true, t or 1, each tweet will include a node called "entities".
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the IncludeRetweets input for this HomeTimeline choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1,the timeline will contain native retweets (if they exist) in addition to the standard stream of tweets.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setIncludeRetweets($value)
    {
        return $this->set('IncludeRetweets', $value);
    }

    /**
     * Set the value for the MaxId input for this HomeTimeline choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the Page input for this HomeTimeline choreography.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SinceId input for this HomeTimeline choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this HomeTimeline choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the HomeTimeline choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_HomeTimeline_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the HomeTimeline choreography.
     *
     * @param Temboo_Session $session The session that owns this HomeTimeline execution.
     * @param Twitter_Timelines_HomeTimeline $choreo The choregraphy object for this execution.
     * @param Twitter_Timelines_HomeTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_HomeTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_HomeTimeline_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_HomeTimeline $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this HomeTimeline execution.
     *
     * @return Twitter_Timelines_HomeTimeline_Results New results object.
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
     * Wraps results in appopriate results class for this HomeTimeline execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_HomeTimeline_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_HomeTimeline_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the HomeTimeline choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_HomeTimeline_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the HomeTimeline choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_HomeTimeline_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this HomeTimeline execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Tests for the existence of friendship between two users.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsShow extends Temboo_Choreography
{
    /**
     * Tests for the existence of friendship between two users.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsShow choreography.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/FriendshipsShow/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FriendshipsShow choreography.
     *
     * @param Twitter_FriendsAndFollowers_FriendshipsShow_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsShow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsShow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FriendshipsShow choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_FriendshipsShow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FriendshipsShow choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsShow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FriendshipsShow choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FriendshipsShow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this FriendshipsShow choreography.
     *
     * @param string $value (conditional, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this FriendshipsShow choreography.
     *
     * @param string $value (conditional, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this FriendshipsShow choreography.
     *
     * @param string $value (conditional, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this FriendshipsShow choreography.
     *
     * @param string $value (conditional, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the SourceScreenName input for this FriendshipsShow choreography.
     *
     * @param string $value (conditional, string) The screen_name of the subject user. Required unless specifying UserIds instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setSourceScreenName($value)
    {
        return $this->set('SourceScreenName', $value);
    }

    /**
     * Set the value for the SourceUserID input for this FriendshipsShow choreography.
     *
     * @param int $value (conditional, integer) The ID of the subject user. Required unless specifying ScreenNames instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setSourceUserID($value)
    {
        return $this->set('SourceUserID', $value);
    }

    /**
     * Set the value for the TargetScreenName input for this FriendshipsShow choreography.
     *
     * @param string $value (conditional, string) The screen_name of the target user. Required unless specifying UserIds instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setTargetScreenName($value)
    {
        return $this->set('TargetScreenName', $value);
    }

    /**
     * Set the value for the TargetUserID input for this FriendshipsShow choreography.
     *
     * @param int $value (conditional, integer) The ID of the target user. Required unless specifying ScreenNames instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setTargetUserID($value)
    {
        return $this->set('TargetUserID', $value);
    }
}


/**
 * Execution object for the FriendshipsShow choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsShow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FriendshipsShow choreography.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsShow execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsShow $choreo The choregraphy object for this execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsShow_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsShow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_FriendshipsShow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FriendshipsShow execution.
     *
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Results New results object.
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
     * Wraps results in appopriate results class for this FriendshipsShow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsShow_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FriendshipsShow choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsShow_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FriendshipsShow choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FriendshipsShow execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns all the information about a known place.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GetPlaceInformation extends Temboo_Choreography
{
    /**
     * Returns all the information about a known place.
     *
     * @param Temboo_Session $session The session that owns this GetPlaceInformation choreography.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/PlacesAndGeo/GetPlaceInformation/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetPlaceInformation choreography.
     *
     * @param Twitter_PlacesAndGeo_GetPlaceInformation_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_GetPlaceInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_PlacesAndGeo_GetPlaceInformation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPlaceInformation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_PlacesAndGeo_GetPlaceInformation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPlaceInformation choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GetPlaceInformation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetPlaceInformation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPlaceInformation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the PlaceId input for this GetPlaceInformation choreography.
     *
     * @param string $value (required, string) An id that corresponds to a place in the world. These IDs can be retrieved from the ReverseGeocode Choreo.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setPlaceId($value)
    {
        return $this->set('PlaceId', $value);
    }
}


/**
 * Execution object for the GetPlaceInformation choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GetPlaceInformation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPlaceInformation choreography.
     *
     * @param Temboo_Session $session The session that owns this GetPlaceInformation execution.
     * @param Twitter_PlacesAndGeo_GetPlaceInformation $choreo The choregraphy object for this execution.
     * @param Twitter_PlacesAndGeo_GetPlaceInformation_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_GetPlaceInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_PlacesAndGeo_GetPlaceInformation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPlaceInformation execution.
     *
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Results New results object.
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
     * Wraps results in appopriate results class for this GetPlaceInformation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_PlacesAndGeo_GetPlaceInformation_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetPlaceInformation choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GetPlaceInformation_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetPlaceInformation choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetPlaceInformation execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the top 20 trending topics for each hour in a given day.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Daily extends Temboo_Choreography
{
    /**
     * Retrieves the top 20 trending topics for each hour in a given day.
     *
     * @param Temboo_Session $session The session that owns this Daily choreography.
     * @return Twitter_Trends_Daily New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Trends/Daily/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Daily choreography.
     *
     * @param Twitter_Trends_Daily_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Daily_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Daily_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Trends_Daily_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Daily choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Daily_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Trends_Daily_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Daily choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Daily_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Daily choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Daily_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Daily input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Trends_Daily_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Trends_Daily_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Date input for this Daily choreography.
     *
     * @param string $value (optional, date) The start date for the report. The date should be formatted YYYY-MM-DD.
     * @return Twitter_Trends_Daily_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Exclude input for this Daily choreography.
     *
     * @param string $value (optional, string) Setting this equal to hashtags will remove all hashtags from the trends list.
     * @return Twitter_Trends_Daily_Inputs For method chaining.
     */
    public function setExclude($value)
    {
        return $this->set('Exclude', $value);
    }
}


/**
 * Execution object for the Daily choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Daily_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Daily choreography.
     *
     * @param Temboo_Session $session The session that owns this Daily execution.
     * @param Twitter_Trends_Daily $choreo The choregraphy object for this execution.
     * @param Twitter_Trends_Daily_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Daily_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Daily_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Trends_Daily $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Daily execution.
     *
     * @return Twitter_Trends_Daily_Results New results object.
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
     * Wraps results in appopriate results class for this Daily execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Trends_Daily_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Trends_Daily_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Daily choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Daily_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Daily choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Trends_Daily_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Daily execution.
     *
     * @return string (json) The response from Twitter in JSON format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the relationship of the authenticating user to the comma-separated list of up to 100 screen names or user IDs provided.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsLookup extends Temboo_Choreography
{
    /**
     * Retrieves the relationship of the authenticating user to the comma-separated list of up to 100 screen names or user IDs provided.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsLookup choreography.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/FriendshipsLookup/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FriendshipsLookup choreography.
     *
     * @param Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsLookup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FriendshipsLookup choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FriendshipsLookup choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FriendshipsLookup choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FriendshipsLookup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this FriendshipsLookup choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this FriendshipsLookup choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this FriendshipsLookup choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this FriendshipsLookup choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this FriendshipsLookup choreography.
     *
     * @param string $value (conditional, string) The screen name for the friend you want to create a friendship with. Required if UserId isn't specified.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserID input for this FriendshipsLookup choreography.
     *
     * @param int $value (conditional, integer) The user ID for the friend you want to create a friendship with. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the FriendshipsLookup choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsLookup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FriendshipsLookup choreography.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsLookup execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsLookup $choreo The choregraphy object for this execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_FriendshipsLookup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FriendshipsLookup execution.
     *
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Results New results object.
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
     * Wraps results in appopriate results class for this FriendshipsLookup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsLookup_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FriendshipsLookup choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsLookup_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FriendshipsLookup choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FriendshipsLookup execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent direct messages sent to the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetDirectMessages extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent direct messages sent to the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this GetDirectMessages choreography.
     * @return Twitter_DirectMessages_GetDirectMessages New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/GetDirectMessages/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetDirectMessages choreography.
     *
     * @param Twitter_DirectMessages_GetDirectMessages_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_GetDirectMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_GetDirectMessages_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_GetDirectMessages_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDirectMessages choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_GetDirectMessages_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDirectMessages choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetDirectMessages_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetDirectMessages choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDirectMessages input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetDirectMessages choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetDirectMessages choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetDirectMessages choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetDirectMessages choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this GetDirectMessages choreography.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve up to a maximum of 200.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this GetDirectMessages choreography.
     *
     * @param bool $value (optional, boolean) An advanced option for returning more verbose metadata. When set to either true, t or 1, each tweet will include a node called "entities".
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxID input for this GetDirectMessages choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setMaxID($value)
    {
        return $this->set('MaxID', $value);
    }

    /**
     * Set the value for the Page input for this GetDirectMessages choreography.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SinceID input for this GetDirectMessages choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }

    /**
     * Set the value for the SkipStatus input for this GetDirectMessages choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1 statuses will not be included in the returned user objects.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setSkipStatus($value)
    {
        return $this->set('SkipStatus', $value);
    }
}


/**
 * Execution object for the GetDirectMessages choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetDirectMessages_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDirectMessages choreography.
     *
     * @param Temboo_Session $session The session that owns this GetDirectMessages execution.
     * @param Twitter_DirectMessages_GetDirectMessages $choreo The choregraphy object for this execution.
     * @param Twitter_DirectMessages_GetDirectMessages_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_GetDirectMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_GetDirectMessages_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_GetDirectMessages $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDirectMessages execution.
     *
     * @return Twitter_DirectMessages_GetDirectMessages_Results New results object.
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
     * Wraps results in appopriate results class for this GetDirectMessages execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_GetDirectMessages_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_GetDirectMessages_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetDirectMessages choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetDirectMessages_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetDirectMessages choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_GetDirectMessages_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetDirectMessages execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a single status with a given id.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesShow extends Temboo_Choreography
{
    /**
     * Retrieves a single status with a given id.
     *
     * @param Temboo_Session $session The session that owns this StatusesShow choreography.
     * @return Twitter_Tweets_StatusesShow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/StatusesShow/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this StatusesShow choreography.
     *
     * @param Twitter_Tweets_StatusesShow_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesShow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesShow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_StatusesShow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StatusesShow choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesShow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_StatusesShow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StatusesShow choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesShow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the StatusesShow choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesShow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StatusesShow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ID input for this StatusesShow choreography.
     *
     * @param int $value (required, integer) The numerical ID of the desired status.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this StatusesShow choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet will include a node called "entities,". This node offers a variety of metadata about the tweet.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the TrimUser input for this StatusesShow choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet returned in a timeline will include a user object including only the status authors numerical ID.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the StatusesShow choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesShow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StatusesShow choreography.
     *
     * @param Temboo_Session $session The session that owns this StatusesShow execution.
     * @param Twitter_Tweets_StatusesShow $choreo The choregraphy object for this execution.
     * @param Twitter_Tweets_StatusesShow_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesShow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesShow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_StatusesShow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StatusesShow execution.
     *
     * @return Twitter_Tweets_StatusesShow_Results New results object.
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
     * Wraps results in appopriate results class for this StatusesShow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_StatusesShow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_StatusesShow_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the StatusesShow choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesShow_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the StatusesShow choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_StatusesShow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this StatusesShow execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to search Twitter for a keyword and filter out unwanted Tweets from search results.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_SearchFilter extends Temboo_Choreography
{
    /**
     * Allows you to search Twitter for a keyword and filter out unwanted Tweets from search results.
     *
     * @param Temboo_Session $session The session that owns this SearchFilter choreography.
     * @return Twitter_Search_SearchFilter New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Search/SearchFilter/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchFilter choreography.
     *
     * @param Twitter_Search_SearchFilter_Inputs|array $inputs (optional) Inputs as Twitter_Search_SearchFilter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Search_SearchFilter_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Search_SearchFilter_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchFilter choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Search_SearchFilter_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Search_SearchFilter_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchFilter choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_SearchFilter_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchFilter choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Search_SearchFilter_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchFilter input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Search_SearchFilter_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Search_SearchFilter_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Filter input for this SearchFilter choreography.
     *
     * @param string $value (string) A search string to use to filter out unwanted Tweets.
     * @return Twitter_Search_SearchFilter_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Page input for this SearchFilter choreography.
     *
     * @param int $value (optional, integer) The page number to return. Can be used to page through many results. Defaults to 1.
     * @return Twitter_Search_SearchFilter_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResultsPerPage input for this SearchFilter choreography.
     *
     * @param int $value (integer) The number of results to return. Defaults to 20.
     * @return Twitter_Search_SearchFilter_Inputs For method chaining.
     */
    public function setResultsPerPage($value)
    {
        return $this->set('ResultsPerPage', $value);
    }

    /**
     * Set the value for the SearchString input for this SearchFilter choreography.
     *
     * @param string $value (string) A string to use as the search query
     * @return Twitter_Search_SearchFilter_Inputs For method chaining.
     */
    public function setSearchString($value)
    {
        return $this->set('SearchString', $value);
    }
}


/**
 * Execution object for the SearchFilter choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_SearchFilter_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchFilter choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchFilter execution.
     * @param Twitter_Search_SearchFilter $choreo The choregraphy object for this execution.
     * @param Twitter_Search_SearchFilter_Inputs|array $inputs (optional) Inputs as Twitter_Search_SearchFilter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Search_SearchFilter_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Search_SearchFilter $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchFilter execution.
     *
     * @return Twitter_Search_SearchFilter_Results New results object.
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
     * Wraps results in appopriate results class for this SearchFilter execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Search_SearchFilter_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Search_SearchFilter_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchFilter choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_SearchFilter_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchFilter choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Search_SearchFilter_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchFilter execution.
     *
     * @return string (XML) The response from Twitter
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Destroys the direct message specified in the required ID.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DestroyDirectMessage extends Temboo_Choreography
{
    /**
     * Destroys the direct message specified in the required ID.
     *
     * @param Temboo_Session $session The session that owns this DestroyDirectMessage choreography.
     * @return Twitter_DirectMessages_DestroyDirectMessage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/DestroyDirectMessage/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DestroyDirectMessage choreography.
     *
     * @param Twitter_DirectMessages_DestroyDirectMessage_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_DestroyDirectMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_DestroyDirectMessage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DestroyDirectMessage choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_DestroyDirectMessage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DestroyDirectMessage choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DestroyDirectMessage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DestroyDirectMessage choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DestroyDirectMessage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DestroyDirectMessage choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DestroyDirectMessage choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DestroyDirectMessage choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DestroyDirectMessage choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this DestroyDirectMessage choreography.
     *
     * @param int $value (required, integer) The ID of the direct message.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the DestroyDirectMessage choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DestroyDirectMessage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DestroyDirectMessage choreography.
     *
     * @param Temboo_Session $session The session that owns this DestroyDirectMessage execution.
     * @param Twitter_DirectMessages_DestroyDirectMessage $choreo The choregraphy object for this execution.
     * @param Twitter_DirectMessages_DestroyDirectMessage_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_DestroyDirectMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_DestroyDirectMessage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DestroyDirectMessage execution.
     *
     * @return Twitter_DirectMessages_DestroyDirectMessage_Results New results object.
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
     * Wraps results in appopriate results class for this DestroyDirectMessage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_DestroyDirectMessage_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DestroyDirectMessage choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DestroyDirectMessage_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DestroyDirectMessage choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DestroyDirectMessage execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves up to 100 of the first retweets of a given tweet.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweets extends Temboo_Choreography
{
    /**
     * Retrieves up to 100 of the first retweets of a given tweet.
     *
     * @param Temboo_Session $session The session that owns this GetRetweets choreography.
     * @return Twitter_Tweets_GetRetweets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/GetRetweets/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRetweets choreography.
     *
     * @param Twitter_Tweets_GetRetweets_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_GetRetweets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_GetRetweets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_GetRetweets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRetweets choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_GetRetweets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_GetRetweets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRetweets choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRetweets choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_GetRetweets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRetweets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRetweets choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRetweets choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetRetweets choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetRetweets choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this GetRetweets choreography.
     *
     * @param int $value (optional, integer) Specifies the number of ids to try and retrieve, up to a maximum of 100.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ID input for this GetRetweets choreography.
     *
     * @param int $value (required, integer) The numerical ID of the desired status.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this GetRetweets choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet will include a node called "entities". This node offers a variety of metadata about the tweet.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the TrimUser input for this GetRetweets choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet returned in a timeline will include a user object including only the status authors numerical ID.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the GetRetweets choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRetweets choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRetweets execution.
     * @param Twitter_Tweets_GetRetweets $choreo The choregraphy object for this execution.
     * @param Twitter_Tweets_GetRetweets_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_GetRetweets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_GetRetweets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_GetRetweets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRetweets execution.
     *
     * @return Twitter_Tweets_GetRetweets_Results New results object.
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
     * Wraps results in appopriate results class for this GetRetweets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_GetRetweets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_GetRetweets_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRetweets choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweets_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRetweets choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_GetRetweets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRetweets execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent retweets posted by users that the authenticating user follows.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedToMe extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent retweets posted by users that the authenticating user follows.
     *
     * @param Temboo_Session $session The session that owns this RetweetedToMe choreography.
     * @return Twitter_Timelines_RetweetedToMe New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/RetweetedToMe/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetweetedToMe choreography.
     *
     * @param Twitter_Timelines_RetweetedToMe_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetedToMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetedToMe_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_RetweetedToMe_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetweetedToMe choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetedToMe_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_RetweetedToMe_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetweetedToMe choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedToMe_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetweetedToMe choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetedToMe_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetweetedToMe input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_RetweetedToMe_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_RetweetedToMe_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetweetedToMe choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetedToMe_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetweetedToMe choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetedToMe_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this RetweetedToMe choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_RetweetedToMe_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this RetweetedToMe choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_RetweetedToMe_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this RetweetedToMe choreography.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_RetweetedToMe_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this RetweetedToMe choreography.
     *
     * @param bool $value (optional, boolean) An advanced option for returning more verbose metadata. When set to either true, t or 1, each tweet will include a node called "entities".
     * @return Twitter_Timelines_RetweetedToMe_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxId input for this RetweetedToMe choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_RetweetedToMe_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the Page input for this RetweetedToMe choreography.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_Timelines_RetweetedToMe_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SinceId input for this RetweetedToMe choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_RetweetedToMe_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this RetweetedToMe choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_RetweetedToMe_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the RetweetedToMe choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedToMe_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetweetedToMe choreography.
     *
     * @param Temboo_Session $session The session that owns this RetweetedToMe execution.
     * @param Twitter_Timelines_RetweetedToMe $choreo The choregraphy object for this execution.
     * @param Twitter_Timelines_RetweetedToMe_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetedToMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetedToMe_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_RetweetedToMe $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetweetedToMe execution.
     *
     * @return Twitter_Timelines_RetweetedToMe_Results New results object.
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
     * Wraps results in appopriate results class for this RetweetedToMe execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_RetweetedToMe_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_RetweetedToMe_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetweetedToMe choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedToMe_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetweetedToMe choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_RetweetedToMe_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetweetedToMe execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sends a new direct message to the specified user from the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_SendDirectMessage extends Temboo_Choreography
{
    /**
     * Sends a new direct message to the specified user from the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this SendDirectMessage choreography.
     * @return Twitter_DirectMessages_SendDirectMessage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/SendDirectMessage/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SendDirectMessage choreography.
     *
     * @param Twitter_DirectMessages_SendDirectMessage_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_SendDirectMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_SendDirectMessage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_SendDirectMessage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SendDirectMessage choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_SendDirectMessage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SendDirectMessage choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_SendDirectMessage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SendDirectMessage choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SendDirectMessage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SendDirectMessage choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SendDirectMessage choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SendDirectMessage choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SendDirectMessage choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this SendDirectMessage choreography.
     *
     * @param string $value (conditional, string) The screen name of the user who should receive the direct message. Required unless specifying the UserId.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the Text input for this SendDirectMessage choreography.
     *
     * @param string $value (required, multiline) The text for the direct message. Max characters is 140.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the UserID input for this SendDirectMessage choreography.
     *
     * @param int $value (conditional, integer) The ID of the user who should receive the direct message. Required unless specifying the ScreenName.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }

    /**
     * Set the value for the WrapLinks input for this SendDirectMessage choreography.
     *
     * @param bool $value (optional, boolean) When set to true, any valid URL found in the body will automatically be wrapped with the Twitter's t.co link wrapper.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setWrapLinks($value)
    {
        return $this->set('WrapLinks', $value);
    }
}


/**
 * Execution object for the SendDirectMessage choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_SendDirectMessage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SendDirectMessage choreography.
     *
     * @param Temboo_Session $session The session that owns this SendDirectMessage execution.
     * @param Twitter_DirectMessages_SendDirectMessage $choreo The choregraphy object for this execution.
     * @param Twitter_DirectMessages_SendDirectMessage_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_SendDirectMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_SendDirectMessage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_SendDirectMessage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SendDirectMessage execution.
     *
     * @return Twitter_DirectMessages_SendDirectMessage_Results New results object.
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
     * Wraps results in appopriate results class for this SendDirectMessage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_SendDirectMessage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_SendDirectMessage_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SendDirectMessage choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_SendDirectMessage_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SendDirectMessage choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_SendDirectMessage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SendDirectMessage execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent direct messages sent by the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DirectMessagesSent extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent direct messages sent by the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this DirectMessagesSent choreography.
     * @return Twitter_DirectMessages_DirectMessagesSent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/DirectMessagesSent/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DirectMessagesSent choreography.
     *
     * @param Twitter_DirectMessages_DirectMessagesSent_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_DirectMessagesSent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_DirectMessagesSent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_DirectMessagesSent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DirectMessagesSent choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_DirectMessagesSent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DirectMessagesSent choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DirectMessagesSent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DirectMessagesSent choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DirectMessagesSent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DirectMessagesSent choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DirectMessagesSent choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DirectMessagesSent choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DirectMessagesSent choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this DirectMessagesSent choreography.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve up to a maximum of 200.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this DirectMessagesSent choreography.
     *
     * @param bool $value (optional, boolean) An advanced option for returning more verbose metadata. When set to either true, t or 1, each tweet will include a node called "entities".
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxID input for this DirectMessagesSent choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setMaxID($value)
    {
        return $this->set('MaxID', $value);
    }

    /**
     * Set the value for the Page input for this DirectMessagesSent choreography.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SinceID input for this DirectMessagesSent choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }
}


/**
 * Execution object for the DirectMessagesSent choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DirectMessagesSent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DirectMessagesSent choreography.
     *
     * @param Temboo_Session $session The session that owns this DirectMessagesSent execution.
     * @param Twitter_DirectMessages_DirectMessagesSent $choreo The choregraphy object for this execution.
     * @param Twitter_DirectMessages_DirectMessagesSent_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_DirectMessagesSent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_DirectMessagesSent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_DirectMessagesSent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DirectMessagesSent execution.
     *
     * @return Twitter_DirectMessages_DirectMessagesSent_Results New results object.
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
     * Wraps results in appopriate results class for this DirectMessagesSent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_DirectMessagesSent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_DirectMessagesSent_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DirectMessagesSent choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DirectMessagesSent_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DirectMessagesSent choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_DirectMessagesSent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DirectMessagesSent execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent tweets of the authenticated user that have been retweeted by others.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetsOfMe extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent tweets of the authenticated user that have been retweeted by others.
     *
     * @param Temboo_Session $session The session that owns this RetweetsOfMe choreography.
     * @return Twitter_Timelines_RetweetsOfMe New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/RetweetsOfMe/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetweetsOfMe choreography.
     *
     * @param Twitter_Timelines_RetweetsOfMe_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetsOfMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetsOfMe_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_RetweetsOfMe_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetweetsOfMe choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_RetweetsOfMe_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetweetsOfMe choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetsOfMe_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetweetsOfMe choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetweetsOfMe input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetweetsOfMe choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetweetsOfMe choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this RetweetsOfMe choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this RetweetsOfMe choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this RetweetsOfMe choreography.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this RetweetsOfMe choreography.
     *
     * @param bool $value (optional, boolean) An advanced option for returning more verbose metadata. When set to either true, t or 1, each tweet will include a node called "entities".
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxId input for this RetweetsOfMe choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the Page input for this RetweetsOfMe choreography.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SinceId input for this RetweetsOfMe choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this RetweetsOfMe choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the RetweetsOfMe choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetsOfMe_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetweetsOfMe choreography.
     *
     * @param Temboo_Session $session The session that owns this RetweetsOfMe execution.
     * @param Twitter_Timelines_RetweetsOfMe $choreo The choregraphy object for this execution.
     * @param Twitter_Timelines_RetweetsOfMe_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetsOfMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetsOfMe_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_RetweetsOfMe $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetweetsOfMe execution.
     *
     * @return Twitter_Timelines_RetweetsOfMe_Results New results object.
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
     * Wraps results in appopriate results class for this RetweetsOfMe execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_RetweetsOfMe_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_RetweetsOfMe_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetweetsOfMe choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetsOfMe_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetweetsOfMe choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_RetweetsOfMe_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetweetsOfMe execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the locations that Twitter has trending topic information for.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Available extends Temboo_Choreography
{
    /**
     * Returns the locations that Twitter has trending topic information for.
     *
     * @param Temboo_Session $session The session that owns this Available choreography.
     * @return Twitter_Trends_Available New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Trends/Available/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Available choreography.
     *
     * @param Twitter_Trends_Available_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Available_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Available_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Trends_Available_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Available choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Available_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Trends_Available_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Available choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Available_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Available choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Available_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Available input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Latitude input for this Available choreography.
     *
     * @param float $value (optional, decimal) If provided with a longitude parameter the available trend locations will be sorted by distance, nearest to furthest.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this Available choreography.
     *
     * @param float $value (optional, decimal) If provided with a latitude parameter the available trend locations will be sorted by distance, nearest to furthest.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Available choreography.
     *
     * @param string $value (optional, string) Indicates what format the response will be in. Acceptable formats are "json" or "xml". Defaults to "json".
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Available choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Available_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Available choreography.
     *
     * @param Temboo_Session $session The session that owns this Available execution.
     * @param Twitter_Trends_Available $choreo The choregraphy object for this execution.
     * @param Twitter_Trends_Available_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Available_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Available_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Trends_Available $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Available execution.
     *
     * @return Twitter_Trends_Available_Results New results object.
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
     * Wraps results in appopriate results class for this Available execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Trends_Available_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Trends_Available_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Available choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Available_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Available choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Trends_Available_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Available execution.
     *
     * @return string (json) The response from Twitter in JSON format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves tweets that match a specified query.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_Query extends Temboo_Choreography
{
    /**
     * Retrieves tweets that match a specified query.
     *
     * @param Temboo_Session $session The session that owns this Query choreography.
     * @return Twitter_Search_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Search/Query/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Query choreography.
     *
     * @param Twitter_Search_Query_Inputs|array $inputs (optional) Inputs as Twitter_Search_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Search_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Search_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Search_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Search_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Query choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Search_Query_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Query input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Search_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Search_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Geocode input for this Query choreography.
     *
     * @param string $value (optional, string) Returns tweets by users located within a given radius of the given latitude/longitude. Should be specified in a string like "latitude,longitude,radius" (i.e. 37.781157,-122.398720,1mi).
     * @return Twitter_Search_Query_Inputs For method chaining.
     */
    public function setGeocode($value)
    {
        return $this->set('Geocode', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this Query choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet will include a node called "entities". This node offers a variety of extra metadata about the tweet.
     * @return Twitter_Search_Query_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the Language input for this Query choreography.
     *
     * @param string $value (optional, string) Restricts tweets to the given language, given by an ISO 639-1 code.
     * @return Twitter_Search_Query_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the Page input for this Query choreography.
     *
     * @param int $value (optional, integer) The page number (starting at 1) to return, up to a max of roughly 1500 results. Used in conjunction with the ResultPerPage input.
     * @return Twitter_Search_Query_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Query input for this Query choreography.
     *
     * @param string $value (required, string) A search string to use for the query.
     * @return Twitter_Search_Query_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResultType input for this Query choreography.
     *
     * @param string $value (optional, string) Specifies what type of search results you would prefer to receive. Valid values are: mixed, recent, or popular.
     * @return Twitter_Search_Query_Inputs For method chaining.
     */
    public function setResultType($value)
    {
        return $this->set('ResultType', $value);
    }

    /**
     * Set the value for the ResultsPerPage input for this Query choreography.
     *
     * @param int $value (optional, integer) The number of tweets to return per page, up to a max of 100.
     * @return Twitter_Search_Query_Inputs For method chaining.
     */
    public function setResultsPerPage($value)
    {
        return $this->set('ResultsPerPage', $value);
    }

    /**
     * Set the value for the ShowUser input for this Query choreography.
     *
     * @param bool $value (optional, boolean) When true, prepends ":" to the beginning of the tweet. This is useful for readers that do not display Atom's author field.
     * @return Twitter_Search_Query_Inputs For method chaining.
     */
    public function setShowUser($value)
    {
        return $this->set('ShowUser', $value);
    }

    /**
     * Set the value for the SinceId input for this Query choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (that is, more recent than) the specified ID.
     * @return Twitter_Search_Query_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the Until input for this Query choreography.
     *
     * @param string $value (optional, date) Returns tweets generated before the given date. Date should be formatted as YYYY-MM-DD.
     * @return Twitter_Search_Query_Inputs For method chaining.
     */
    public function setUntil($value)
    {
        return $this->set('Until', $value);
    }
}


/**
 * Execution object for the Query choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query choreography.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param Twitter_Search_Query $choreo The choregraphy object for this execution.
     * @param Twitter_Search_Query_Inputs|array $inputs (optional) Inputs as Twitter_Search_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Search_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Search_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return Twitter_Search_Query_Results New results object.
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
     * Wraps results in appopriate results class for this Query execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Search_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Search_Query_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Query choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_Query_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Query choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Search_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string (xml) 
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Tests for the existence of friendship between two users.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsExist extends Temboo_Choreography
{
    /**
     * Tests for the existence of friendship between two users.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsExist choreography.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/FriendshipsExist/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FriendshipsExist choreography.
     *
     * @param Twitter_FriendsAndFollowers_FriendshipsExist_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsExist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsExist_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FriendshipsExist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_FriendshipsExist_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FriendshipsExist choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsExist_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FriendshipsExist choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FriendshipsExist input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this FriendshipsExist choreography.
     *
     * @param string $value (conditional, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this FriendshipsExist choreography.
     *
     * @param string $value (conditional, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this FriendshipsExist choreography.
     *
     * @param string $value (conditional, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this FriendshipsExist choreography.
     *
     * @param string $value (conditional, string) The Consumer Secret provided by Twitter..
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName1 input for this FriendshipsExist choreography.
     *
     * @param string $value (conditional, string) The screen_name of the user you are checking the relationship from. Required unless specifying UserIds instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Inputs For method chaining.
     */
    public function setScreenName1($value)
    {
        return $this->set('ScreenName1', $value);
    }

    /**
     * Set the value for the ScreenName2 input for this FriendshipsExist choreography.
     *
     * @param string $value (conditional, string) The screen_name of the user you are checking the relationship to. Required unless specifying UserIds instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Inputs For method chaining.
     */
    public function setScreenName2($value)
    {
        return $this->set('ScreenName2', $value);
    }

    /**
     * Set the value for the UserID1 input for this FriendshipsExist choreography.
     *
     * @param int $value (conditional, integer) The ID of the user you are checking the relationship from. Required unless specifying ScreenNames instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Inputs For method chaining.
     */
    public function setUserID1($value)
    {
        return $this->set('UserID1', $value);
    }

    /**
     * Set the value for the UserID2 input for this FriendshipsExist choreography.
     *
     * @param int $value (conditional, integer) The ID of the user you are checking the relationship to. Required unless specifying ScreenNames instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Inputs For method chaining.
     */
    public function setUserID2($value)
    {
        return $this->set('UserID2', $value);
    }
}


/**
 * Execution object for the FriendshipsExist choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsExist_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FriendshipsExist choreography.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsExist execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsExist $choreo The choregraphy object for this execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsExist_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsExist_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_FriendshipsExist $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FriendshipsExist execution.
     *
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Results New results object.
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
     * Wraps results in appopriate results class for this FriendshipsExist execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsExist_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FriendshipsExist choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsExist_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FriendshipsExist choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsExist_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FriendshipsExist execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent statuses posted by the authenticating user or by a specified user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_UserTimeline extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent statuses posted by the authenticating user or by a specified user.
     *
     * @param Temboo_Session $session The session that owns this UserTimeline choreography.
     * @return Twitter_Timelines_UserTimeline New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/UserTimeline/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UserTimeline choreography.
     *
     * @param Twitter_Timelines_UserTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_UserTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_UserTimeline_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_UserTimeline_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserTimeline choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_UserTimeline_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_UserTimeline_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserTimeline choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_UserTimeline_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UserTimeline choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_UserTimeline_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserTimeline input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UserTimeline choreography.
     *
     * @param string $value (conditional, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UserTimeline choreography.
     *
     * @param string $value (conditional, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this UserTimeline choreography.
     *
     * @param string $value (conditional, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this UserTimeline choreography.
     *
     * @param string $value (conditional, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContributorDetails input for this UserTimeline choreography.
     *
     * @param bool $value (optional, boolean) Set to either true, t or 1 to include the screen_name of the contributor. By default only the user_id of the contributor is included.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setContributorDetails($value)
    {
        return $this->set('ContributorDetails', $value);
    }

    /**
     * Set the value for the Count input for this UserTimeline choreography.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ExcludeReplies input for this UserTimeline choreography.
     *
     * @param bool $value (optional, boolean) Set to either true, t or 1 to prevent replies from appearing in the returned timeline.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setExcludeReplies($value)
    {
        return $this->set('ExcludeReplies', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this UserTimeline choreography.
     *
     * @param bool $value (optional, boolean) An advanced option for returning more verbose metadata. When set to either true, t or 1, each tweet will include a node called "entities".
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the IncludeRetweets input for this UserTimeline choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1,the timeline will contain native retweets (if they exist) in addition to the standard stream of tweets.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setIncludeRetweets($value)
    {
        return $this->set('IncludeRetweets', $value);
    }

    /**
     * Set the value for the MaxId input for this UserTimeline choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the Page input for this UserTimeline choreography.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ScreenName input for this UserTimeline choreography.
     *
     * @param string $value (conditional, string) Screen name of the user to return results for. UserId or ScreenName is required when requesting a different user's timeline. Not required if requesting the timeline associated with Oauth credentials.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the SinceId input for this UserTimeline choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this UserTimeline choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }

    /**
     * Set the value for the UserId input for this UserTimeline choreography.
     *
     * @param int $value (conditional, integer) ID of the user to return results for. UserId or ScreenName is required when requesting a different user's timeline. Not required if requesting the timeline associated with Oauth credentials.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the UserTimeline choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_UserTimeline_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserTimeline choreography.
     *
     * @param Temboo_Session $session The session that owns this UserTimeline execution.
     * @param Twitter_Timelines_UserTimeline $choreo The choregraphy object for this execution.
     * @param Twitter_Timelines_UserTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_UserTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_UserTimeline_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_UserTimeline $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserTimeline execution.
     *
     * @return Twitter_Timelines_UserTimeline_Results New results object.
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
     * Wraps results in appopriate results class for this UserTimeline execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_UserTimeline_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_UserTimeline_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UserTimeline choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_UserTimeline_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UserTimeline choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_UserTimeline_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UserTimeline execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent mentions for the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_Mentions extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent mentions for the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this Mentions choreography.
     * @return Twitter_Timelines_Mentions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/Mentions/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Mentions choreography.
     *
     * @param Twitter_Timelines_Mentions_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_Mentions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_Mentions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_Mentions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Mentions choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_Mentions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_Mentions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Mentions choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_Mentions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Mentions choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_Mentions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Mentions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Mentions choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.n
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Mentions choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Mentions choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Mentions choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContributorDetails input for this Mentions choreography.
     *
     * @param bool $value (optional, boolean) Set to either true, t or 1 to include the screen_name of the contributor. By default only the user_id of the contributor is included.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setContributorDetails($value)
    {
        return $this->set('ContributorDetails', $value);
    }

    /**
     * Set the value for the Count input for this Mentions choreography.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this Mentions choreography.
     *
     * @param bool $value (optional, boolean) An advanced option for returning more verbose metadata. When set to either true, t or 1, each tweet will include a node called "entities".
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the IncludeRetweets input for this Mentions choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1,the timeline will contain native retweets (if they exist) in addition to the standard stream of tweets.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setIncludeRetweets($value)
    {
        return $this->set('IncludeRetweets', $value);
    }

    /**
     * Set the value for the MaxId input for this Mentions choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the Page input for this Mentions choreography.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SinceId input for this Mentions choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this Mentions choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the Mentions choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_Mentions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Mentions choreography.
     *
     * @param Temboo_Session $session The session that owns this Mentions execution.
     * @param Twitter_Timelines_Mentions $choreo The choregraphy object for this execution.
     * @param Twitter_Timelines_Mentions_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_Mentions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_Mentions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_Mentions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Mentions execution.
     *
     * @return Twitter_Timelines_Mentions_Results New results object.
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
     * Wraps results in appopriate results class for this Mentions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_Mentions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_Mentions_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Mentions choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_Mentions_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Mentions choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_Mentions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Mentions execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a specific Twitter user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Show extends Temboo_Choreography
{
    /**
     * Retrieves information about a specific Twitter user.
     *
     * @param Temboo_Session $session The session that owns this Show choreography.
     * @return Twitter_Users_Show New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/Show/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Show choreography.
     *
     * @param Twitter_Users_Show_Inputs|array $inputs (optional) Inputs as Twitter_Users_Show_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Show_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_Show_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Show choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Show_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_Show_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Show choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Show_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Show choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Show_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Show input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Show choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Show choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Show choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Show choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this Show choreography.
     *
     * @param string $value (conditional, string) The screen name for the Twitter user to return information for. Required if UserId isn't specified.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this Show choreography.
     *
     * @param int $value (conditional, integer) The user id of the Twitter user to return information for. Required if ScreenName isn't specified.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the Show choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Show_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Show choreography.
     *
     * @param Temboo_Session $session The session that owns this Show execution.
     * @param Twitter_Users_Show $choreo The choregraphy object for this execution.
     * @param Twitter_Users_Show_Inputs|array $inputs (optional) Inputs as Twitter_Users_Show_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Show_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_Show $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Show execution.
     *
     * @return Twitter_Users_Show_Results New results object.
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
     * Wraps results in appopriate results class for this Show execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Users_Show_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_Show_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Show choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Show_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Show choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_Show_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Show execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of numeric IDs for every user who has a pending request to follow the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_IncomingFriendships extends Temboo_Choreography
{
    /**
     * Retrieves a list of numeric IDs for every user who has a pending request to follow the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this IncomingFriendships choreography.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/IncomingFriendships/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this IncomingFriendships choreography.
     *
     * @param Twitter_FriendsAndFollowers_IncomingFriendships_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_IncomingFriendships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_IncomingFriendships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this IncomingFriendships choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_IncomingFriendships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the IncomingFriendships choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_IncomingFriendships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the IncomingFriendships choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this IncomingFriendships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this IncomingFriendships choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this IncomingFriendships choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this IncomingFriendships choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this IncomingFriendships choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this IncomingFriendships choreography.
     *
     * @param int $value (optional, integer) Used to page through large results. Provide a value of -1 to begin paging. Use values as returned in the response body's next_cursor and previous_cursor attributes to page back and forth in the list.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this IncomingFriendships choreography.
     *
     * @param bool $value (optional, boolean) Many programming environments will not consume Twitter IDs due to their size. Provide this option to have ids returned as strings instead. Set to 1 to enable.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }
}


/**
 * Execution object for the IncomingFriendships choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_IncomingFriendships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the IncomingFriendships choreography.
     *
     * @param Temboo_Session $session The session that owns this IncomingFriendships execution.
     * @param Twitter_FriendsAndFollowers_IncomingFriendships $choreo The choregraphy object for this execution.
     * @param Twitter_FriendsAndFollowers_IncomingFriendships_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_IncomingFriendships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_IncomingFriendships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this IncomingFriendships execution.
     *
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Results New results object.
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
     * Wraps results in appopriate results class for this IncomingFriendships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_IncomingFriendships_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the IncomingFriendships choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_IncomingFriendships_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the IncomingFriendships choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this IncomingFriendships execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to update your Twitter status.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesUpdate extends Temboo_Choreography
{
    /**
     * Allows you to update your Twitter status.
     *
     * @param Temboo_Session $session The session that owns this StatusesUpdate choreography.
     * @return Twitter_Tweets_StatusesUpdate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/StatusesUpdate/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this StatusesUpdate choreography.
     *
     * @param Twitter_Tweets_StatusesUpdate_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesUpdate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesUpdate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_StatusesUpdate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StatusesUpdate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesUpdate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_StatusesUpdate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StatusesUpdate choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesUpdate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the StatusesUpdate choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesUpdate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StatusesUpdate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this StatusesUpdate choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this StatusesUpdate choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this StatusesUpdate choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this StatusesUpdate choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the StatusUpdate input for this StatusesUpdate choreography.
     *
     * @param string $value (required, string) The text for your status update. 140-character limit.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setStatusUpdate($value)
    {
        return $this->set('StatusUpdate', $value);
    }
}


/**
 * Execution object for the StatusesUpdate choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesUpdate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StatusesUpdate choreography.
     *
     * @param Temboo_Session $session The session that owns this StatusesUpdate execution.
     * @param Twitter_Tweets_StatusesUpdate $choreo The choregraphy object for this execution.
     * @param Twitter_Tweets_StatusesUpdate_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesUpdate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesUpdate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_StatusesUpdate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StatusesUpdate execution.
     *
     * @return Twitter_Tweets_StatusesUpdate_Results New results object.
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
     * Wraps results in appopriate results class for this StatusesUpdate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_StatusesUpdate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_StatusesUpdate_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the StatusesUpdate choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesUpdate_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the StatusesUpdate choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_StatusesUpdate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this StatusesUpdate execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves search results from Twitter. Can be used to search for users or other keywords.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Search extends Temboo_Choreography
{
    /**
     * Retrieves search results from Twitter. Can be used to search for users or other keywords.
     *
     * @param Temboo_Session $session The session that owns this Search choreography.
     * @return Twitter_Users_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/Search/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Search choreography.
     *
     * @param Twitter_Users_Search_Inputs|array $inputs (optional) Inputs as Twitter_Users_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Search choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Search_Inputs New instance.
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
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Search choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Search choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Search choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Search choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the SearchString input for this Search choreography.
     *
     * @param string $value (required, string) The string used to search for users or other keywords.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setSearchString($value)
    {
        return $this->set('SearchString', $value);
    }
}


/**
 * Execution object for the Search choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search choreography.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param Twitter_Users_Search $choreo The choregraphy object for this execution.
     * @param Twitter_Users_Search_Inputs|array $inputs (optional) Inputs as Twitter_Users_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return Twitter_Users_Search_Results New results object.
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
     * @return Twitter_Users_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_Search_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Search choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Search_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Search choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the top 30 trending topics for each day in a given week.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Weekly extends Temboo_Choreography
{
    /**
     * Retrieves the top 30 trending topics for each day in a given week.
     *
     * @param Temboo_Session $session The session that owns this Weekly choreography.
     * @return Twitter_Trends_Weekly New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Trends/Weekly/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Weekly choreography.
     *
     * @param Twitter_Trends_Weekly_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Weekly_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Weekly_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Trends_Weekly_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Weekly choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Weekly_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Trends_Weekly_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Weekly choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Weekly_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Weekly choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Weekly_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Weekly input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Trends_Weekly_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Trends_Weekly_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Date input for this Weekly choreography.
     *
     * @param string $value (optional, date) The start date for the report. The date should be formatted YYYY-MM-DD.
     * @return Twitter_Trends_Weekly_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Exclude input for this Weekly choreography.
     *
     * @param string $value (optional, string) Setting this equal to hashtags will remove all hashtags from the trends list.
     * @return Twitter_Trends_Weekly_Inputs For method chaining.
     */
    public function setExclude($value)
    {
        return $this->set('Exclude', $value);
    }
}


/**
 * Execution object for the Weekly choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Weekly_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Weekly choreography.
     *
     * @param Temboo_Session $session The session that owns this Weekly execution.
     * @param Twitter_Trends_Weekly $choreo The choregraphy object for this execution.
     * @param Twitter_Trends_Weekly_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Weekly_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Weekly_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Trends_Weekly $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Weekly execution.
     *
     * @return Twitter_Trends_Weekly_Results New results object.
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
     * Wraps results in appopriate results class for this Weekly execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Trends_Weekly_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Trends_Weekly_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Weekly choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Weekly_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Weekly choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Trends_Weekly_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Weekly execution.
     *
     * @return string (json) The response from Twitter in JSON format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves user IDs of up to 100 users who retweeted the status.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_RetweetedByIDs extends Temboo_Choreography
{
    /**
     * Retrieves user IDs of up to 100 users who retweeted the status.
     *
     * @param Temboo_Session $session The session that owns this RetweetedByIDs choreography.
     * @return Twitter_Tweets_RetweetedByIDs New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/RetweetedByIDs/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetweetedByIDs choreography.
     *
     * @param Twitter_Tweets_RetweetedByIDs_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_RetweetedByIDs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_RetweetedByIDs_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_RetweetedByIDs_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetweetedByIDs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_RetweetedByIDs_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_RetweetedByIDs_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetweetedByIDs choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_RetweetedByIDs_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetweetedByIDs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_RetweetedByIDs_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetweetedByIDs input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_RetweetedByIDs_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_RetweetedByIDs_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetweetedByIDs choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_RetweetedByIDs_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetweetedByIDs choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_RetweetedByIDs_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this RetweetedByIDs choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_RetweetedByIDs_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this RetweetedByIDs choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_RetweetedByIDs_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this RetweetedByIDs choreography.
     *
     * @param int $value (optional, integer) Specifies the number of ids to try and retrieve, up to a maximum of 100.
     * @return Twitter_Tweets_RetweetedByIDs_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ID input for this RetweetedByIDs choreography.
     *
     * @param int $value (required, integer) The numerical ID of the desired status.
     * @return Twitter_Tweets_RetweetedByIDs_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Page input for this RetweetedByIDs choreography.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_Tweets_RetweetedByIDs_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this RetweetedByIDs choreography.
     *
     * @param bool $value (optional, boolean) Many programming environments will not consume Twitter's Tweet IDs due to their size. Set this option to 1 to have ids returned as strings instead.
     * @return Twitter_Tweets_RetweetedByIDs_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }
}


/**
 * Execution object for the RetweetedByIDs choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_RetweetedByIDs_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetweetedByIDs choreography.
     *
     * @param Temboo_Session $session The session that owns this RetweetedByIDs execution.
     * @param Twitter_Tweets_RetweetedByIDs $choreo The choregraphy object for this execution.
     * @param Twitter_Tweets_RetweetedByIDs_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_RetweetedByIDs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_RetweetedByIDs_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_RetweetedByIDs $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetweetedByIDs execution.
     *
     * @return Twitter_Tweets_RetweetedByIDs_Results New results object.
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
     * Wraps results in appopriate results class for this RetweetedByIDs execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_RetweetedByIDs_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_RetweetedByIDs_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetweetedByIDs choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_RetweetedByIDs_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetweetedByIDs choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_RetweetedByIDs_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetweetedByIDs execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent statuses, including retweets if they exist, from non-protected users.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_PublicTimeline extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent statuses, including retweets if they exist, from non-protected users.
     *
     * @param Temboo_Session $session The session that owns this PublicTimeline choreography.
     * @return Twitter_Timelines_PublicTimeline New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/PublicTimeline/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PublicTimeline choreography.
     *
     * @param Twitter_Timelines_PublicTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_PublicTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_PublicTimeline_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_PublicTimeline_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PublicTimeline choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_PublicTimeline_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_PublicTimeline_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PublicTimeline choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_PublicTimeline_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PublicTimeline choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_PublicTimeline_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PublicTimeline input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_PublicTimeline_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_PublicTimeline_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the IncludeEntities input for this PublicTimeline choreography.
     *
     * @param bool $value (optional, boolean) An advanced option for returning more verbose metadata. When set to either true, t or 1, each tweet will include a node called "entities".
     * @return Twitter_Timelines_PublicTimeline_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the TrimUser input for this PublicTimeline choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_PublicTimeline_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the PublicTimeline choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_PublicTimeline_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PublicTimeline choreography.
     *
     * @param Temboo_Session $session The session that owns this PublicTimeline execution.
     * @param Twitter_Timelines_PublicTimeline $choreo The choregraphy object for this execution.
     * @param Twitter_Timelines_PublicTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_PublicTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_PublicTimeline_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_PublicTimeline $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PublicTimeline execution.
     *
     * @return Twitter_Timelines_PublicTimeline_Results New results object.
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
     * Wraps results in appopriate results class for this PublicTimeline execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_PublicTimeline_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_PublicTimeline_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PublicTimeline choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_PublicTimeline_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PublicTimeline choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_PublicTimeline_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this PublicTimeline execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of numeric IDs for every protected user for whom the authenticating user has a pending follow request.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_OutgoingFriendships extends Temboo_Choreography
{
    /**
     * Retrieves a list of numeric IDs for every protected user for whom the authenticating user has a pending follow request.
     *
     * @param Temboo_Session $session The session that owns this OutgoingFriendships choreography.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/OutgoingFriendships/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this OutgoingFriendships choreography.
     *
     * @param Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_OutgoingFriendships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this OutgoingFriendships choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the OutgoingFriendships choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the OutgoingFriendships choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this OutgoingFriendships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this OutgoingFriendships choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this OutgoingFriendships choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this OutgoingFriendships choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this OutgoingFriendships choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this OutgoingFriendships choreography.
     *
     * @param int $value (optional, integer) Used to page through large results. Provide a value of -1 to begin paging. Use values as returned in the response body's next_cursor and previous_cursor attributes to page back and forth in the list.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this OutgoingFriendships choreography.
     *
     * @param bool $value (optional, boolean) Many programming environments will not consume Twitter IDs due to their size. Provide this option to have ids returned as strings instead. Set to 1 to enable.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }
}


/**
 * Execution object for the OutgoingFriendships choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_OutgoingFriendships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the OutgoingFriendships choreography.
     *
     * @param Temboo_Session $session The session that owns this OutgoingFriendships execution.
     * @param Twitter_FriendsAndFollowers_OutgoingFriendships $choreo The choregraphy object for this execution.
     * @param Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_OutgoingFriendships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this OutgoingFriendships execution.
     *
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Results New results object.
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
     * Wraps results in appopriate results class for this OutgoingFriendships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_OutgoingFriendships_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the OutgoingFriendships choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_OutgoingFriendships_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the OutgoingFriendships choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this OutgoingFriendships execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of numeric IDs for every user following the specified user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFollowersByID extends Temboo_Choreography
{
    /**
     * Retrieve a list of numeric IDs for every user following the specified user.
     *
     * @param Temboo_Session $session The session that owns this GetFollowersByID choreography.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/GetFollowersByID/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetFollowersByID choreography.
     *
     * @param Twitter_FriendsAndFollowers_GetFollowersByID_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_GetFollowersByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_GetFollowersByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFollowersByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_GetFollowersByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFollowersByID choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFollowersByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetFollowersByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFollowersByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFollowersByID choreography.
     *
     * @param string $value (conditional, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFollowersByID choreography.
     *
     * @param string $value (conditional, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFollowersByID choreography.
     *
     * @param string $value (conditional, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFollowersByID choreography.
     *
     * @param string $value (conditional, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this GetFollowersByID choreography.
     *
     * @param string $value (conditional, string) Used to retrieve the followers of another Twitter user. Required if UserId isn't specified.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserID input for this GetFollowersByID choreography.
     *
     * @param int $value (conditional, integer) Used to retrieve the followers of another Twitter user. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFollowersByID choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFollowersByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFollowersByID choreography.
     *
     * @param Temboo_Session $session The session that owns this GetFollowersByID execution.
     * @param Twitter_FriendsAndFollowers_GetFollowersByID $choreo The choregraphy object for this execution.
     * @param Twitter_FriendsAndFollowers_GetFollowersByID_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_GetFollowersByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_GetFollowersByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFollowersByID execution.
     *
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Results New results object.
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
     * Wraps results in appopriate results class for this GetFollowersByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_GetFollowersByID_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetFollowersByID choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFollowersByID_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetFollowersByID choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetFollowersByID execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent retweets posted by users the specified user follows.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedToUser extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent retweets posted by users the specified user follows.
     *
     * @param Temboo_Session $session The session that owns this RetweetedToUser choreography.
     * @return Twitter_Timelines_RetweetedToUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/RetweetedToUser/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetweetedToUser choreography.
     *
     * @param Twitter_Timelines_RetweetedToUser_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetedToUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetedToUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_RetweetedToUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetweetedToUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetedToUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_RetweetedToUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetweetedToUser choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedToUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetweetedToUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetedToUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetweetedToUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetweetedToUser choreography.
     *
     * @param string $value (conditional, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetweetedToUser choreography.
     *
     * @param string $value (conditional, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this RetweetedToUser choreography.
     *
     * @param string $value (conditional, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this RetweetedToUser choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContributorDetails input for this RetweetedToUser choreography.
     *
     * @param bool $value (optional, boolean) Set to either true, t or 1 to include the screen_name of the contributor. By default only the user_id of the contributor is included.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setContributorDetails($value)
    {
        return $this->set('ContributorDetails', $value);
    }

    /**
     * Set the value for the Count input for this RetweetedToUser choreography.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ExcludeReplies input for this RetweetedToUser choreography.
     *
     * @param bool $value (optional, boolean) Set to either true, t or 1 to prevent replies from appearing in the returned timeline.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setExcludeReplies($value)
    {
        return $this->set('ExcludeReplies', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this RetweetedToUser choreography.
     *
     * @param bool $value (optional, boolean) An advanced option for returning more verbose metadata. When set to either true, t or 1, each tweet will include a node called "entities".
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the IncludeRetweets input for this RetweetedToUser choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1,the timeline will contain native retweets (if they exist) in addition to the standard stream of tweets.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setIncludeRetweets($value)
    {
        return $this->set('IncludeRetweets', $value);
    }

    /**
     * Set the value for the MaxId input for this RetweetedToUser choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the Page input for this RetweetedToUser choreography.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ScreenName input for this RetweetedToUser choreography.
     *
     * @param string $value (conditional, string) The screen name of the user for whom to return results for. Required unless providing a UserId.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the SinceId input for this RetweetedToUser choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this RetweetedToUser choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }

    /**
     * Set the value for the UserId input for this RetweetedToUser choreography.
     *
     * @param int $value (conditional, integer) The ID of the user for whom to return results for. Required unless providing a ScreenName.
     * @return Twitter_Timelines_RetweetedToUser_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the RetweetedToUser choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedToUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetweetedToUser choreography.
     *
     * @param Temboo_Session $session The session that owns this RetweetedToUser execution.
     * @param Twitter_Timelines_RetweetedToUser $choreo The choregraphy object for this execution.
     * @param Twitter_Timelines_RetweetedToUser_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetedToUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetedToUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_RetweetedToUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetweetedToUser execution.
     *
     * @return Twitter_Timelines_RetweetedToUser_Results New results object.
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
     * Wraps results in appopriate results class for this RetweetedToUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_RetweetedToUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_RetweetedToUser_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetweetedToUser choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedToUser_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetweetedToUser choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_RetweetedToUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetweetedToUser execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to unfollow another Twitter user when you specify a Twitter user ID to the Choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_DeleteFriendship extends Temboo_Choreography
{
    /**
     * Allows you to unfollow another Twitter user when you specify a Twitter user ID to the Choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteFriendship choreography.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/DeleteFriendship/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteFriendship choreography.
     *
     * @param Twitter_FriendsAndFollowers_DeleteFriendship_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_DeleteFriendship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_DeleteFriendship_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFriendship choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_DeleteFriendship_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFriendship choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_DeleteFriendship_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteFriendship choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFriendship input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteFriendship choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFriendship choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteFriendship choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteFriendship choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this DeleteFriendship choreography.
     *
     * @param string $value (conditional, string) The screen name for the friend you want to unfollow. Required if UserId isn't specified.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserID input for this DeleteFriendship choreography.
     *
     * @param int $value (conditional, integer) The user ID for the friend you want to unfollow. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DeleteFriendship choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_DeleteFriendship_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFriendship choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteFriendship execution.
     * @param Twitter_FriendsAndFollowers_DeleteFriendship $choreo The choregraphy object for this execution.
     * @param Twitter_FriendsAndFollowers_DeleteFriendship_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_DeleteFriendship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_DeleteFriendship $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFriendship execution.
     *
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteFriendship execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_DeleteFriendship_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteFriendship choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_DeleteFriendship_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteFriendship choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteFriendship execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to follow another Twitter user when you specify a Twitter user ID to the Choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_CreateFriendship extends Temboo_Choreography
{
    /**
     * Allows you to follow another Twitter user when you specify a Twitter user ID to the Choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateFriendship choreography.
     * @return Twitter_FriendsAndFollowers_CreateFriendship New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/CreateFriendship/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateFriendship choreography.
     *
     * @param Twitter_FriendsAndFollowers_CreateFriendship_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_CreateFriendship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_CreateFriendship_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFriendship choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_CreateFriendship_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFriendship choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_CreateFriendship_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateFriendship choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFriendship input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateFriendship choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateFriendship choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this CreateFriendship choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this CreateFriendship choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this CreateFriendship choreography.
     *
     * @param string $value (conditional, string) The screen name for the friend you want to create a friendship with. Required if UserId isn't specified.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this CreateFriendship choreography.
     *
     * @param int $value (conditional, integer) The user id for the friend you want to create a friendship with. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the CreateFriendship choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_CreateFriendship_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFriendship choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateFriendship execution.
     * @param Twitter_FriendsAndFollowers_CreateFriendship $choreo The choregraphy object for this execution.
     * @param Twitter_FriendsAndFollowers_CreateFriendship_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_CreateFriendship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_CreateFriendship $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFriendship execution.
     *
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Results New results object.
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
     * Wraps results in appopriate results class for this CreateFriendship execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_CreateFriendship_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateFriendship choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_CreateFriendship_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateFriendship choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateFriendship execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Given a latitude and a longitude, this API operation searches for up to 20 places that can be used as a place_id when updating a status.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_ReverseGeocode extends Temboo_Choreography
{
    /**
     * Given a latitude and a longitude, this API operation searches for up to 20 places that can be used as a place_id when updating a status.
     *
     * @param Temboo_Session $session The session that owns this ReverseGeocode choreography.
     * @return Twitter_PlacesAndGeo_ReverseGeocode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/PlacesAndGeo/ReverseGeocode/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ReverseGeocode choreography.
     *
     * @param Twitter_PlacesAndGeo_ReverseGeocode_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_ReverseGeocode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_PlacesAndGeo_ReverseGeocode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReverseGeocode choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_PlacesAndGeo_ReverseGeocode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReverseGeocode choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_ReverseGeocode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ReverseGeocode choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReverseGeocode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Accuracy input for this ReverseGeocode choreography.
     *
     * @param string $value (optional, string) A hint on the "region" in which to search. If a number, then this is a radius in meters. You can also specify feet by using the ft suffix (i.e. 5ft).
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Callback input for this ReverseGeocode choreography.
     *
     * @param string $value (optional, string) If supplied, the response will use the JSONP format with a callback of the given name.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the Granularity input for this ReverseGeocode choreography.
     *
     * @param string $value (optional, string) This is the minimal granularity of place types to return and must be one of: poi, neighborhood, city, admin or country. Defaults to neighborhood.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setGranularity($value)
    {
        return $this->set('Granularity', $value);
    }

    /**
     * Set the value for the Latitude input for this ReverseGeocode choreography.
     *
     * @param float $value (required, decimal) The latitude to search around.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this ReverseGeocode choreography.
     *
     * @param float $value (required, decimal) The longitude to search around.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MaxResults input for this ReverseGeocode choreography.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }
}


/**
 * Execution object for the ReverseGeocode choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_ReverseGeocode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReverseGeocode choreography.
     *
     * @param Temboo_Session $session The session that owns this ReverseGeocode execution.
     * @param Twitter_PlacesAndGeo_ReverseGeocode $choreo The choregraphy object for this execution.
     * @param Twitter_PlacesAndGeo_ReverseGeocode_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_ReverseGeocode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_PlacesAndGeo_ReverseGeocode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReverseGeocode execution.
     *
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Results New results object.
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
     * Wraps results in appopriate results class for this ReverseGeocode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_PlacesAndGeo_ReverseGeocode_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ReverseGeocode choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_ReverseGeocode_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ReverseGeocode choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ReverseGeocode execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent retweets posted by the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedByMe extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent retweets posted by the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this RetweetedByMe choreography.
     * @return Twitter_Timelines_RetweetedByMe New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/RetweetedByMe/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetweetedByMe choreography.
     *
     * @param Twitter_Timelines_RetweetedByMe_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetedByMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetedByMe_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_RetweetedByMe_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetweetedByMe choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetedByMe_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_RetweetedByMe_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetweetedByMe choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedByMe_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetweetedByMe choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetedByMe_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetweetedByMe input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_RetweetedByMe_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_RetweetedByMe_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetweetedByMe choreography.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetedByMe_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetweetedByMe choreography.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetedByMe_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this RetweetedByMe choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_RetweetedByMe_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this RetweetedByMe choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_RetweetedByMe_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this RetweetedByMe choreography.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_RetweetedByMe_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this RetweetedByMe choreography.
     *
     * @param bool $value (optional, boolean) An advanced option for returning more verbose metadata. When set to either true, t or 1, each tweet will include a node called "entities".
     * @return Twitter_Timelines_RetweetedByMe_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxId input for this RetweetedByMe choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_RetweetedByMe_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the Page input for this RetweetedByMe choreography.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_Timelines_RetweetedByMe_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SinceId input for this RetweetedByMe choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_RetweetedByMe_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this RetweetedByMe choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_RetweetedByMe_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the RetweetedByMe choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedByMe_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetweetedByMe choreography.
     *
     * @param Temboo_Session $session The session that owns this RetweetedByMe execution.
     * @param Twitter_Timelines_RetweetedByMe $choreo The choregraphy object for this execution.
     * @param Twitter_Timelines_RetweetedByMe_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetedByMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetedByMe_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_RetweetedByMe $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetweetedByMe execution.
     *
     * @return Twitter_Timelines_RetweetedByMe_Results New results object.
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
     * Wraps results in appopriate results class for this RetweetedByMe execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_RetweetedByMe_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_RetweetedByMe_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetweetedByMe choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedByMe_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetweetedByMe choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_RetweetedByMe_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetweetedByMe execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent retweets posted by the specified user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedByUser extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent retweets posted by the specified user.
     *
     * @param Temboo_Session $session The session that owns this RetweetedByUser choreography.
     * @return Twitter_Timelines_RetweetedByUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/RetweetedByUser/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetweetedByUser choreography.
     *
     * @param Twitter_Timelines_RetweetedByUser_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetedByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetedByUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_RetweetedByUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetweetedByUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetedByUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_RetweetedByUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetweetedByUser choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedByUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetweetedByUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetedByUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetweetedByUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetweetedByUser choreography.
     *
     * @param string $value (conditional, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetweetedByUser choreography.
     *
     * @param string $value (conditional, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this RetweetedByUser choreography.
     *
     * @param string $value (conditional, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this RetweetedByUser choreography.
     *
     * @param string $value (conditional, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContributorDetails input for this RetweetedByUser choreography.
     *
     * @param bool $value (optional, boolean) Set to either true, t or 1 to include the screen_name of the contributor. By default only the user_id of the contributor is included.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setContributorDetails($value)
    {
        return $this->set('ContributorDetails', $value);
    }

    /**
     * Set the value for the Count input for this RetweetedByUser choreography.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ExcludeReplies input for this RetweetedByUser choreography.
     *
     * @param bool $value (optional, boolean) Set to either true, t or 1 to prevent replies from appearing in the returned timeline.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setExcludeReplies($value)
    {
        return $this->set('ExcludeReplies', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this RetweetedByUser choreography.
     *
     * @param bool $value (optional, boolean) An advanced option for returning more verbose metadata. When set to either true, t or 1, each tweet will include a node called "entities".
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the IncludeRetweets input for this RetweetedByUser choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1,the timeline will contain native retweets (if they exist) in addition to the standard stream of tweets.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setIncludeRetweets($value)
    {
        return $this->set('IncludeRetweets', $value);
    }

    /**
     * Set the value for the MaxId input for this RetweetedByUser choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the Page input for this RetweetedByUser choreography.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ScreenName input for this RetweetedByUser choreography.
     *
     * @param string $value (required, string) The screen name of the user for whom to return results for.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the SinceId input for this RetweetedByUser choreography.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this RetweetedByUser choreography.
     *
     * @param bool $value (optional, boolean) When set to either true, t or 1, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }

    /**
     * Set the value for the UserId input for this RetweetedByUser choreography.
     *
     * @param int $value (conditional, integer) The ID of the user for whom to return results for. Required unless providing a ScreenName.
     * @return Twitter_Timelines_RetweetedByUser_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the RetweetedByUser choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedByUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetweetedByUser choreography.
     *
     * @param Temboo_Session $session The session that owns this RetweetedByUser execution.
     * @param Twitter_Timelines_RetweetedByUser $choreo The choregraphy object for this execution.
     * @param Twitter_Timelines_RetweetedByUser_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetedByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetedByUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_RetweetedByUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetweetedByUser execution.
     *
     * @return Twitter_Timelines_RetweetedByUser_Results New results object.
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
     * Wraps results in appopriate results class for this RetweetedByUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_RetweetedByUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_RetweetedByUser_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetweetedByUser choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetedByUser_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetweetedByUser choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_RetweetedByUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetweetedByUser execution.
     *
     * @return string (xml) The response from Twitter in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for places that can be attached to a statuses/update using a latitude and a longitude pair, an IP address, or a name.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GeoSearch extends Temboo_Choreography
{
    /**
     * Searches for places that can be attached to a statuses/update using a latitude and a longitude pair, an IP address, or a name.
     *
     * @param Temboo_Session $session The session that owns this GeoSearch choreography.
     * @return Twitter_PlacesAndGeo_GeoSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/PlacesAndGeo/GeoSearch/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GeoSearch choreography.
     *
     * @param Twitter_PlacesAndGeo_GeoSearch_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_GeoSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_GeoSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_PlacesAndGeo_GeoSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GeoSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_PlacesAndGeo_GeoSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GeoSearch choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GeoSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GeoSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GeoSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Accuracy input for this GeoSearch choreography.
     *
     * @param string $value (optional, string) A hint on the "region" in which to search. If a number, then this is a radius in meters. You can also specify feet by using the ft suffix (i.e. 5ft).
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Callback input for this GeoSearch choreography.
     *
     * @param string $value (optional, string) If supplied, the response will use the JSONP format with a callback of the given name.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the ContainedWithin input for this GeoSearch choreography.
     *
     * @param string $value (optional, string) This is the place_id which you would like to restrict the search results to. This id can be retrieved with the GetPlaceInformation Choreo.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setContainedWithin($value)
    {
        return $this->set('ContainedWithin', $value);
    }

    /**
     * Set the value for the Granularity input for this GeoSearch choreography.
     *
     * @param string $value (optional, string) This is the minimal granularity of place types to return and must be one of: poi, neighborhood, city, admin or country. Defaults to neighborhood.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setGranularity($value)
    {
        return $this->set('Granularity', $value);
    }

    /**
     * Set the value for the IP input for this GeoSearch choreography.
     *
     * @param string $value (conditional, string) An IP address. Used when attempting to fix geolocation based off of the user's IP address. You must provide Latitude and Longitude, IP, or Query.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setIP($value)
    {
        return $this->set('IP', $value);
    }

    /**
     * Set the value for the Latitude input for this GeoSearch choreography.
     *
     * @param float $value (conditional, decimal) The latitude to search around. You must provide Latitude and Longitude, IP, or Query.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this GeoSearch choreography.
     *
     * @param float $value (conditional, decimal) The longitude to search around. You must provide Latitude and Longitude, IP, or Query.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MaxResults input for this GeoSearch choreography.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Query input for this GeoSearch choreography.
     *
     * @param string $value (conditional, string) Free-form text to match against while executing a geo-based query. You must provide Latitude and Longitude, IP, or Query.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }
}


/**
 * Execution object for the GeoSearch choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GeoSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GeoSearch choreography.
     *
     * @param Temboo_Session $session The session that owns this GeoSearch execution.
     * @param Twitter_PlacesAndGeo_GeoSearch $choreo The choregraphy object for this execution.
     * @param Twitter_PlacesAndGeo_GeoSearch_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_GeoSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_GeoSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_PlacesAndGeo_GeoSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GeoSearch execution.
     *
     * @return Twitter_PlacesAndGeo_GeoSearch_Results New results object.
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
     * Wraps results in appopriate results class for this GeoSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_GeoSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_PlacesAndGeo_GeoSearch_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GeoSearch choreography.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GeoSearch_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GeoSearch choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_GeoSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GeoSearch execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>