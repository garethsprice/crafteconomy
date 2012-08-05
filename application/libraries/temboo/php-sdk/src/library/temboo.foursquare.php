<?php

/**
 * Temboo PHP SDK Foursquare classes
 *
 * Execute Choreographies from the Temboo Foursquare bundle.
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
 * @subpackage Foursquare
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Returns a list of recommended venues near the current location.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Explore extends Temboo_Choreography
{
    /**
     * Returns a list of recommended venues near the current location.
     *
     * @param Temboo_Session $session The session that owns this Explore choreography.
     * @return Foursquare_Venues_Explore New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/Explore/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Explore choreography.
     *
     * @param Foursquare_Venues_Explore_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Explore_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Explore_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_Explore_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Explore choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Explore_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_Explore_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Explore choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Explore_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Explore choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Explore_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Explore input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccuracyOfCoordinates input for this Explore choreography.
     *
     * @param int $value (optional, integer) Accuracy of latitude and longitude, in meters.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setAccuracyOfCoordinates($value)
    {
        return $this->set('AccuracyOfCoordinates', $value);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this Explore choreography.
     *
     * @param int $value (optional, integer) Accuracy of the user's altitude, in meters.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this Explore choreography.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the ClientID input for this Explore choreography.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Explore choreography.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Intent input for this Explore choreography.
     *
     * @param string $value (optional, string) Limit results to venues when set to "specials".
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setIntent($value)
    {
        return $this->set('Intent', $value);
    }

    /**
     * Set the value for the Latitude input for this Explore choreography.
     *
     * @param float $value (conditional, decimal) The latitude point of the user's location. Required unless the Near parameter is provided.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this Explore choreography.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this Explore choreography.
     *
     * @param float $value (conditional, decimal) The longitude point of the user's location. Required unless the Near parameter is provided.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Near input for this Explore choreography.
     *
     * @param string $value (conditional, string) A string naming a place in the world. If the near string is not geocodable, returns a failed_geocode error. Required unless provided Latitude and Longitude.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setNear($value)
    {
        return $this->set('Near', $value);
    }

    /**
     * Set the value for the Novelty input for this Explore choreography.
     *
     * @param string $value (optional, string) Pass new or old to limit results to places the acting user hasn't been or has been, respectively. Omitting this parameter returns a mixture of both new and old.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setNovelty($value)
    {
        return $this->set('Novelty', $value);
    }

    /**
     * Set the value for the OauthToken input for this Explore choreography.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Query input for this Explore choreography.
     *
     * @param string $value (optional, string) A search term to be applied against tips, category, etc. at a venue.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Radius input for this Explore choreography.
     *
     * @param int $value (optional, integer) Radius to search within, in meters. If radius is not specified, a suggested radius will be used depending on the density of venues in the area.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Explore choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Section input for this Explore choreography.
     *
     * @param string $value (optional, string) One of food, drinks, coffee, shops, arts, or outdoors. Choosing one of these limits results to venues with categories matching these terms.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setSection($value)
    {
        return $this->set('Section', $value);
    }
}


/**
 * Execution object for the Explore choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Explore_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Explore choreography.
     *
     * @param Temboo_Session $session The session that owns this Explore execution.
     * @param Foursquare_Venues_Explore $choreo The choregraphy object for this execution.
     * @param Foursquare_Venues_Explore_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Explore_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Explore_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_Explore $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Explore execution.
     *
     * @return Foursquare_Venues_Explore_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Explore execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_Explore_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_Explore_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Explore choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Explore_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Explore choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_Explore_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Explore execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of venues near the current location with the most people currently checked in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TrendingVenues extends Temboo_Choreography
{
    /**
     * Returns a list of venues near the current location with the most people currently checked in.
     *
     * @param Temboo_Session $session The session that owns this TrendingVenues choreography.
     * @return Foursquare_Venues_TrendingVenues New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/TrendingVenues/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TrendingVenues choreography.
     *
     * @param Foursquare_Venues_TrendingVenues_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_TrendingVenues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_TrendingVenues_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_TrendingVenues_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TrendingVenues choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_TrendingVenues_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_TrendingVenues_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TrendingVenues choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TrendingVenues_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TrendingVenues choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_TrendingVenues_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TrendingVenues input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Latitude input for this TrendingVenues choreography.
     *
     * @param float $value (required, decimal) The latitude point of the user's location.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this TrendingVenues choreography.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this TrendingVenues choreography.
     *
     * @param float $value (required, decimal) The longitude point of the user's location.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this TrendingVenues choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Radius input for this TrendingVenues choreography.
     *
     * @param int $value (optional, integer) Radius in meters, up to approximately 2000 meters.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TrendingVenues choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the TrendingVenues choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TrendingVenues_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TrendingVenues choreography.
     *
     * @param Temboo_Session $session The session that owns this TrendingVenues execution.
     * @param Foursquare_Venues_TrendingVenues $choreo The choregraphy object for this execution.
     * @param Foursquare_Venues_TrendingVenues_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_TrendingVenues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_TrendingVenues_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_TrendingVenues $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TrendingVenues execution.
     *
     * @return Foursquare_Venues_TrendingVenues_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this TrendingVenues execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_TrendingVenues_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_TrendingVenues_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TrendingVenues choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TrendingVenues_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TrendingVenues choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_TrendingVenues_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TrendingVenues execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes a comment to a specified checkin.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_DeleteComment extends Temboo_Choreography
{
    /**
     * Removes a comment to a specified checkin.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment choreography.
     * @return Foursquare_Checkins_DeleteComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/DeleteComment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteComment choreography.
     *
     * @param Foursquare_Checkins_DeleteComment_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_DeleteComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_DeleteComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_DeleteComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_DeleteComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteComment choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_DeleteComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_DeleteComment_Inputs New instance.
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
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this DeleteComment choreography.
     *
     * @param string $value (required, string) The ID of the checkin associated with the comment you want to remove.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the CommentID input for this DeleteComment choreography.
     *
     * @param string $value (required, string) The id of the comment to remove.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setCommentID($value)
    {
        return $this->set('CommentID', $value);
    }

    /**
     * Set the value for the OauthToken input for this DeleteComment choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteComment choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the DeleteComment choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_DeleteComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteComment choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment execution.
     * @param Foursquare_Checkins_DeleteComment $choreo The choregraphy object for this execution.
     * @param Foursquare_Checkins_DeleteComment_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_DeleteComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_DeleteComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteComment execution.
     *
     * @return Foursquare_Checkins_DeleteComment_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
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
     * @return Foursquare_Checkins_DeleteComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_DeleteComment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteComment choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_DeleteComment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteComment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_DeleteComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteComment execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the lists that a tip appears on.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Listed extends Temboo_Choreography
{
    /**
     * Returns the lists that a tip appears on.
     *
     * @param Temboo_Session $session The session that owns this Listed choreography.
     * @return Foursquare_Tips_Listed New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/Listed/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Listed choreography.
     *
     * @param Foursquare_Tips_Listed_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_Listed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_Listed_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_Listed_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Listed choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_Listed_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_Listed_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Listed choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Listed_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Listed choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_Listed_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Listed input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Group input for this Listed choreography.
     *
     * @param string $value (optional, string) Accepted values are: created, edited, followed, friends, other. If no acting user is present, only other is supported.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setGroup($value)
    {
        return $this->set('Group', $value);
    }

    /**
     * Set the value for the OauthToken input for this Listed choreography.
     *
     * @param string $value (required, string) Your Foursquare API Oauth token string.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Listed choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TipID input for this Listed choreography.
     *
     * @param string $value (required, string) The id of a tip to get lists for.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }
}


/**
 * Execution object for the Listed choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Listed_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Listed choreography.
     *
     * @param Temboo_Session $session The session that owns this Listed execution.
     * @param Foursquare_Tips_Listed $choreo The choregraphy object for this execution.
     * @param Foursquare_Tips_Listed_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_Listed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_Listed_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_Listed $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Listed execution.
     *
     * @return Foursquare_Tips_Listed_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Listed execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_Listed_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_Listed_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Listed choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Listed_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Listed choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_Listed_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Listed execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a comment to a specified checkin.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddComment extends Temboo_Choreography
{
    /**
     * Adds a comment to a specified checkin.
     *
     * @param Temboo_Session $session The session that owns this AddComment choreography.
     * @return Foursquare_Checkins_AddComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/AddComment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddComment choreography.
     *
     * @param Foursquare_Checkins_AddComment_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_AddComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_AddComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_AddComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_AddComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_AddComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddComment choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_AddComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this AddComment choreography.
     *
     * @param string $value (required, string) The ID of the checkin that you want to create a comment for.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddComment choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddComment choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this AddComment choreography.
     *
     * @param string $value (required, string) The text of the comment, up to 200 characters.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the AddComment choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddComment choreography.
     *
     * @param Temboo_Session $session The session that owns this AddComment execution.
     * @param Foursquare_Checkins_AddComment $choreo The choregraphy object for this execution.
     * @param Foursquare_Checkins_AddComment_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_AddComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_AddComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_AddComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddComment execution.
     *
     * @return Foursquare_Checkins_AddComment_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this AddComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_AddComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_AddComment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddComment choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddComment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddComment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_AddComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddComment execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to delete an item from a list.

 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_DeleteItem extends Temboo_Choreography
{
    /**
     * Allows a user to delete an item from a list.

     *
     * @param Temboo_Session $session The session that owns this DeleteItem choreography.
     * @return Foursquare_Lists_DeleteItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/DeleteItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteItem choreography.
     *
     * @param Foursquare_Lists_DeleteItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_DeleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_DeleteItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_DeleteItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_DeleteItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_DeleteItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteItem choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_DeleteItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_DeleteItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ItemID input for this DeleteItem choreography.
     *
     * @param string $value (required, string) The id of the item to delete.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ListID input for this DeleteItem choreography.
     *
     * @param string $value (required, string) This can be a user-created list id or one of tips, todos, or dones.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this DeleteItem choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteItem choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the DeleteItem choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_DeleteItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteItem choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteItem execution.
     * @param Foursquare_Lists_DeleteItem $choreo The choregraphy object for this execution.
     * @param Foursquare_Lists_DeleteItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_DeleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_DeleteItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_DeleteItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteItem execution.
     *
     * @return Foursquare_Lists_DeleteItem_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this DeleteItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_DeleteItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_DeleteItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteItem choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_DeleteItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_DeleteItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteItem execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a user's mayorships.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Mayorships extends Temboo_Choreography
{
    /**
     * Returns a user's mayorships.
     *
     * @param Temboo_Session $session The session that owns this Mayorships choreography.
     * @return Foursquare_Users_Mayorships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/Mayorships/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Mayorships choreography.
     *
     * @param Foursquare_Users_Mayorships_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Mayorships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Mayorships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_Mayorships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Mayorships choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Mayorships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_Mayorships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Mayorships choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Mayorships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Mayorships choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Mayorships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Mayorships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this Mayorships choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Mayorships choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this Mayorships choreography.
     *
     * @param string $value (optional, string) Identity of the user to get mayorships for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the Mayorships choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Mayorships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Mayorships choreography.
     *
     * @param Temboo_Session $session The session that owns this Mayorships execution.
     * @param Foursquare_Users_Mayorships $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_Mayorships_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Mayorships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Mayorships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_Mayorships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Mayorships execution.
     *
     * @return Foursquare_Users_Mayorships_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Mayorships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_Mayorships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_Mayorships_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Mayorships choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Mayorships_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Mayorships choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_Mayorships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Mayorships execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to add a new photo to a checkin, tip, or a venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_AddPhoto extends Temboo_Choreography
{
    /**
     * Allows a user to add a new photo to a checkin, tip, or a venue.
     *
     * @param Temboo_Session $session The session that owns this AddPhoto choreography.
     * @return Foursquare_Photos_AddPhoto New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Photos/AddPhoto/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddPhoto choreography.
     *
     * @param Foursquare_Photos_AddPhoto_Inputs|array $inputs (optional) Inputs as Foursquare_Photos_AddPhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Photos_AddPhoto_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Photos_AddPhoto_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddPhoto choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Photos_AddPhoto_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Photos_AddPhoto_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddPhoto choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_AddPhoto_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddPhoto choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Photos_AddPhoto_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddPhoto input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this AddPhoto choreography.
     *
     * @param int $value (optional, integer) Vertical accuracy of the user's location, in meters.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this AddPhoto choreography.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the Broadcast input for this AddPhoto choreography.
     *
     * @param string $value (optional, string) Whether to broadcast this photo. Set to "twitter" if you want to send to twitter, "facebook "if you want to send to facebook, or "twitter,facebook" if you want to send to both.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setBroadcast($value)
    {
        return $this->set('Broadcast', $value);
    }

    /**
     * Set the value for the CheckinID input for this AddPhoto choreography.
     *
     * @param mixed $value (conditional, any) The ID of the checkin to attach a photo to. One of the id fields (CheckinID, TipID, or VenueID) must be specified.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the ImageFile input for this AddPhoto choreography.
     *
     * @param string $value (conditional, string) The base64 encoded image contents. Required unless using the VaultFile alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setImageFile($value)
    {
        return $this->set('ImageFile', $value);
    }

    /**
     * Set the value for the LLAccuracy input for this AddPhoto choreography.
     *
     * @param int $value (optional, integer) Accuracy of the user's latitude and longitude, in meters.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setLLAccuracy($value)
    {
        return $this->set('LLAccuracy', $value);
    }

    /**
     * Set the value for the Latitude input for this AddPhoto choreography.
     *
     * @param float $value (optional, decimal) Laitude of the user's location.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this AddPhoto choreography.
     *
     * @param float $value (optional, decimal) Longitude of the user's location.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddPhoto choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddPhoto choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TipID input for this AddPhoto choreography.
     *
     * @param string $value (conditional, string) The ID of the tip to attach a photo to. One of the id fields (CheckinID, TipID, or VenueID) must be specified.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }

    /**
     * Set the value for the VenueID input for this AddPhoto choreography.
     *
     * @param string $value (conditional, string) The ID of the venue to attach a photo to. One of the id fields (CheckinID, TipID, or VenueID) must be specified.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }

}


/**
 * Execution object for the AddPhoto choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_AddPhoto_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddPhoto choreography.
     *
     * @param Temboo_Session $session The session that owns this AddPhoto execution.
     * @param Foursquare_Photos_AddPhoto $choreo The choregraphy object for this execution.
     * @param Foursquare_Photos_AddPhoto_Inputs|array $inputs (optional) Inputs as Foursquare_Photos_AddPhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Photos_AddPhoto_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Photos_AddPhoto $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddPhoto execution.
     *
     * @return Foursquare_Photos_AddPhoto_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this AddPhoto execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Photos_AddPhoto_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Photos_AddPhoto_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddPhoto choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_AddPhoto_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddPhoto choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Photos_AddPhoto_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddPhoto execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain a list of venues near the current location. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_SearchVenues extends Temboo_Choreography
{
    /**
     * Obtain a list of venues near the current location. 
     *
     * @param Temboo_Session $session The session that owns this SearchVenues choreography.
     * @return Foursquare_Venues_SearchVenues New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/SearchVenues/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchVenues choreography.
     *
     * @param Foursquare_Venues_SearchVenues_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_SearchVenues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_SearchVenues_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_SearchVenues_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchVenues choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_SearchVenues_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_SearchVenues_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchVenues choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_SearchVenues_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchVenues choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_SearchVenues_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchVenues input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccuracyOfCoordinates input for this SearchVenues choreography.
     *
     * @param int $value (optional, integer) Accuracy of latitude and longitude, in meters. Currently, this parameter   does not affect search results.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setAccuracyOfCoordinates($value)
    {
        return $this->set('AccuracyOfCoordinates', $value);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this SearchVenues choreography.
     *
     * @param int $value (optional, integer) Accuracy of the user's altitude, in meters. Currently, this parameter does not affect search results.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this SearchVenues choreography.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters. Currently, this parameter does not affect search results.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the ClientID input for this SearchVenues choreography.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this SearchVenues choreography.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Intent input for this SearchVenues choreography.
     *
     * @param string $value (optional, string) Indicates your intent when performing the search.  Enter: checkin (default), match (requires Query and Latitude/Longitude to be provided).
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setIntent($value)
    {
        return $this->set('Intent', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchVenues choreography.
     *
     * @param float $value (required, decimal) The latitude point of the user's location.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this SearchVenues choreography.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchVenues choreography.
     *
     * @param float $value (required, decimal) The longitude point of the user's location.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this SearchVenues choreography.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Query input for this SearchVenues choreography.
     *
     * @param string $value (optional, string) Your search string.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchVenues choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchVenues choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_SearchVenues_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchVenues choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchVenues execution.
     * @param Foursquare_Venues_SearchVenues $choreo The choregraphy object for this execution.
     * @param Foursquare_Venues_SearchVenues_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_SearchVenues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_SearchVenues_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_SearchVenues $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchVenues execution.
     *
     * @return Foursquare_Venues_SearchVenues_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this SearchVenues execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_SearchVenues_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_SearchVenues_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchVenues choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_SearchVenues_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchVenues choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_SearchVenues_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchVenues execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of specials near the current location.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SearchSpecials extends Temboo_Choreography
{
    /**
     * Returns a list of specials near the current location.
     *
     * @param Temboo_Session $session The session that owns this SearchSpecials choreography.
     * @return Foursquare_Specials_SearchSpecials New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Specials/SearchSpecials/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchSpecials choreography.
     *
     * @param Foursquare_Specials_SearchSpecials_Inputs|array $inputs (optional) Inputs as Foursquare_Specials_SearchSpecials_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Specials_SearchSpecials_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Specials_SearchSpecials_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchSpecials choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Specials_SearchSpecials_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Specials_SearchSpecials_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchSpecials choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SearchSpecials_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchSpecials choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Specials_SearchSpecials_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchSpecials input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccuracyOfCoordinates input for this SearchSpecials choreography.
     *
     * @param int $value (optional, integer) Accuracy of latitude and longitude, in meters.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setAccuracyOfCoordinates($value)
    {
        return $this->set('AccuracyOfCoordinates', $value);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this SearchSpecials choreography.
     *
     * @param int $value (optional, integer) Accuracy of the user's altitude, in meters.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this SearchSpecials choreography.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the ClientID input for this SearchSpecials choreography.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this SearchSpecials choreography.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchSpecials choreography.
     *
     * @param float $value (conditional, decimal) The latitude point of the user's location.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this SearchSpecials choreography.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchSpecials choreography.
     *
     * @param float $value (conditional, decimal) The longitude point of the user's location.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this SearchSpecials choreography.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Radius input for this SearchSpecials choreography.
     *
     * @param int $value (optional, integer) Limit results to venues within this many meters of the specified location. Defaults to a city-wide area.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchSpecials choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchSpecials choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SearchSpecials_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchSpecials choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchSpecials execution.
     * @param Foursquare_Specials_SearchSpecials $choreo The choregraphy object for this execution.
     * @param Foursquare_Specials_SearchSpecials_Inputs|array $inputs (optional) Inputs as Foursquare_Specials_SearchSpecials_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Specials_SearchSpecials_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Specials_SearchSpecials $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchSpecials execution.
     *
     * @return Foursquare_Specials_SearchSpecials_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this SearchSpecials execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Specials_SearchSpecials_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Specials_SearchSpecials_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchSpecials choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SearchSpecials_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchSpecials choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Specials_SearchSpecials_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchSpecials execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * This choreo returns tips for a particular venue written by other Foursquare users.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TipsFromVenue extends Temboo_Choreography
{
    /**
     * This choreo returns tips for a particular venue written by other Foursquare users.
     *
     * @param Temboo_Session $session The session that owns this TipsFromVenue choreography.
     * @return Foursquare_Venues_TipsFromVenue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/TipsFromVenue/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TipsFromVenue choreography.
     *
     * @param Foursquare_Venues_TipsFromVenue_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_TipsFromVenue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_TipsFromVenue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_TipsFromVenue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TipsFromVenue choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_TipsFromVenue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_TipsFromVenue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TipsFromVenue choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TipsFromVenue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TipsFromVenue choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_TipsFromVenue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TipsFromVenue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this TipsFromVenue choreography.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this TipsFromVenue choreography.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Limit input for this TipsFromVenue choreography.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this TipsFromVenue choreography.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this TipsFromVenue choreography.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TipsFromVenue choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this TipsFromVenue choreography.
     *
     * @param string $value (optional, string) Enter: recent or popular.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the VenueID input for this TipsFromVenue choreography.
     *
     * @param string $value (required, string) The venue you want tips for.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the TipsFromVenue choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TipsFromVenue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TipsFromVenue choreography.
     *
     * @param Temboo_Session $session The session that owns this TipsFromVenue execution.
     * @param Foursquare_Venues_TipsFromVenue $choreo The choregraphy object for this execution.
     * @param Foursquare_Venues_TipsFromVenue_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_TipsFromVenue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_TipsFromVenue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_TipsFromVenue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TipsFromVenue execution.
     *
     * @return Foursquare_Venues_TipsFromVenue_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this TipsFromVenue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_TipsFromVenue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_TipsFromVenue_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TipsFromVenue choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TipsFromVenue_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TipsFromVenue choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_TipsFromVenue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TipsFromVenue execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to locate friends.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_FindUsers extends Temboo_Choreography
{
    /**
     * Allows a user to locate friends.
     *
     * @param Temboo_Session $session The session that owns this FindUsers choreography.
     * @return Foursquare_Users_FindUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/FindUsers/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FindUsers choreography.
     *
     * @param Foursquare_Users_FindUsers_Inputs|array $inputs (optional) Inputs as Foursquare_Users_FindUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_FindUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_FindUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindUsers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_FindUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_FindUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindUsers choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_FindUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FindUsers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_FindUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this FindUsers choreography.
     *
     * @param string $value (conditional, string) A comma-delimited list of email addresses to look for. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the FacebookID input for this FindUsers choreography.
     *
     * @param string $value (conditional, string) A comma-delimited list of Facebook ID's to look for. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setFacebookID($value)
    {
        return $this->set('FacebookID', $value);
    }

    /**
     * Set the value for the Name input for this FindUsers choreography.
     *
     * @param string $value (conditional, string) A single string to search for in users' names. A single string to search for in users' names. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the OauthToken input for this FindUsers choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Phone input for this FindUsers choreography.
     *
     * @param string $value (conditional, string) A comma-delimited list of phone numbers to look for. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setPhone($value)
    {
        return $this->set('Phone', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindUsers choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TwitterSource input for this FindUsers choreography.
     *
     * @param string $value (conditional, string) A single Twitter handle. Results will be users that this handle follows on Twitter who use Foursquare. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setTwitterSource($value)
    {
        return $this->set('TwitterSource', $value);
    }

    /**
     * Set the value for the Twitter input for this FindUsers choreography.
     *
     * @param string $value (conditional, string) A comma-delimited list of Twitter handles to look for. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setTwitter($value)
    {
        return $this->set('Twitter', $value);
    }
}


/**
 * Execution object for the FindUsers choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_FindUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindUsers choreography.
     *
     * @param Temboo_Session $session The session that owns this FindUsers execution.
     * @param Foursquare_Users_FindUsers $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_FindUsers_Inputs|array $inputs (optional) Inputs as Foursquare_Users_FindUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_FindUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_FindUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindUsers execution.
     *
     * @return Foursquare_Users_FindUsers_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FindUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_FindUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_FindUsers_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FindUsers choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_FindUsers_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FindUsers choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_FindUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FindUsers execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to add a new tip at a venue. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_AddTips extends Temboo_Choreography
{
    /**
     * Allows you to add a new tip at a venue. 
     *
     * @param Temboo_Session $session The session that owns this AddTips choreography.
     * @return Foursquare_Tips_AddTips New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/AddTips/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddTips choreography.
     *
     * @param Foursquare_Tips_AddTips_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_AddTips_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_AddTips_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_AddTips_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddTips choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_AddTips_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_AddTips_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddTips choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_AddTips_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddTips choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_AddTips_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddTips input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Broadcast input for this AddTips choreography.
     *
     * @param string $value (optional, string) Whether to broadcast this tip. Set to "twitter" if you want to send to twitter, "facebook" if you want to send to facebook, or "twitter,facebook" if you want to send to both.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setBroadcast($value)
    {
        return $this->set('Broadcast', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddTips choreography.
     *
     * @param string $value (required, string) Your Foursquare API Oauth token string.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddTips choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this AddTips choreography.
     *
     * @param string $value (required, string) The text of the tip, up to 200 characters.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the URL input for this AddTips choreography.
     *
     * @param string $value (optional, string) A URL related to this tip.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the VenueID input for this AddTips choreography.
     *
     * @param string $value (required, string) The venue where you want to add this tip.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the AddTips choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_AddTips_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddTips choreography.
     *
     * @param Temboo_Session $session The session that owns this AddTips execution.
     * @param Foursquare_Tips_AddTips $choreo The choregraphy object for this execution.
     * @param Foursquare_Tips_AddTips_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_AddTips_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_AddTips_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_AddTips $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddTips execution.
     *
     * @return Foursquare_Tips_AddTips_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this AddTips execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_AddTips_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_AddTips_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddTips choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_AddTips_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddTips choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_AddTips_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddTips execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves details of a photo. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_PhotoDetails extends Temboo_Choreography
{
    /**
     * Retrieves details of a photo. 
     *
     * @param Temboo_Session $session The session that owns this PhotoDetails choreography.
     * @return Foursquare_Photos_PhotoDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Photos/PhotoDetails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PhotoDetails choreography.
     *
     * @param Foursquare_Photos_PhotoDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Photos_PhotoDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Photos_PhotoDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Photos_PhotoDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PhotoDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Photos_PhotoDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Photos_PhotoDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PhotoDetails choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_PhotoDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PhotoDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Photos_PhotoDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PhotoDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this PhotoDetails choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this PhotoDetails choreography.
     *
     * @param string $value (required, string) The ID of the photo to get details for.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PhotoDetails choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PhotoDetails choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_PhotoDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PhotoDetails choreography.
     *
     * @param Temboo_Session $session The session that owns this PhotoDetails execution.
     * @param Foursquare_Photos_PhotoDetails $choreo The choregraphy object for this execution.
     * @param Foursquare_Photos_PhotoDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Photos_PhotoDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Photos_PhotoDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Photos_PhotoDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PhotoDetails execution.
     *
     * @return Foursquare_Photos_PhotoDetails_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this PhotoDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Photos_PhotoDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Photos_PhotoDetails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PhotoDetails choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_PhotoDetails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PhotoDetails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Photos_PhotoDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this PhotoDetails execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain details about venues, including location, mayorship, tags, tips, specials and category.  Users who have authenticated via their oauth_token credential, also receive information about who is at the location being querried.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueDetail extends Temboo_Choreography
{
    /**
     * Obtain details about venues, including location, mayorship, tags, tips, specials and category.  Users who have authenticated via their oauth_token credential, also receive information about who is at the location being querried.
     *
     * @param Temboo_Session $session The session that owns this VenueDetail choreography.
     * @return Foursquare_Venues_VenueDetail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/VenueDetail/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this VenueDetail choreography.
     *
     * @param Foursquare_Venues_VenueDetail_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueDetail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueDetail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_VenueDetail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VenueDetail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueDetail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_VenueDetail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VenueDetail choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueDetail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the VenueDetail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueDetail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VenueDetail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this VenueDetail choreography.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this VenueDetail choreography.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this VenueDetail choreography.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VenueDetail choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this VenueDetail choreography.
     *
     * @param string $value (required, string) The ID associated with the venue you want to retrieve details for.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the VenueDetail choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueDetail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VenueDetail choreography.
     *
     * @param Temboo_Session $session The session that owns this VenueDetail execution.
     * @param Foursquare_Venues_VenueDetail $choreo The choregraphy object for this execution.
     * @param Foursquare_Venues_VenueDetail_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueDetail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueDetail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_VenueDetail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VenueDetail execution.
     *
     * @return Foursquare_Venues_VenueDetail_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this VenueDetail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_VenueDetail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_VenueDetail_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the VenueDetail choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueDetail_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the VenueDetail choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_VenueDetail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this VenueDetail execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a count and items of users following the specified list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListFollowers extends Temboo_Choreography
{
    /**
     * Returns a count and items of users following the specified list.
     *
     * @param Temboo_Session $session The session that owns this ListFollowers choreography.
     * @return Foursquare_Lists_ListFollowers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/ListFollowers/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListFollowers choreography.
     *
     * @param Foursquare_Lists_ListFollowers_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_ListFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_ListFollowers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_ListFollowers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFollowers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_ListFollowers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_ListFollowers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFollowers choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListFollowers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListFollowers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_ListFollowers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFollowers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ListID input for this ListFollowers choreography.
     *
     * @param string $value (required, string) The id of a user-created list.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this ListFollowers choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListFollowers choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListFollowers choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListFollowers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFollowers choreography.
     *
     * @param Temboo_Session $session The session that owns this ListFollowers execution.
     * @param Foursquare_Lists_ListFollowers $choreo The choregraphy object for this execution.
     * @param Foursquare_Lists_ListFollowers_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_ListFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_ListFollowers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_ListFollowers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFollowers execution.
     *
     * @return Foursquare_Lists_ListFollowers_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this ListFollowers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_ListFollowers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_ListFollowers_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListFollowers choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListFollowers_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListFollowers choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_ListFollowers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListFollowers execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gives details about a tip, including which users (especially friends) have marked the tip to-do or done. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_TipDetails extends Temboo_Choreography
{
    /**
     * Gives details about a tip, including which users (especially friends) have marked the tip to-do or done. 
     *
     * @param Temboo_Session $session The session that owns this TipDetails choreography.
     * @return Foursquare_Tips_TipDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/TipDetails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TipDetails choreography.
     *
     * @param Foursquare_Tips_TipDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_TipDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_TipDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_TipDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TipDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_TipDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_TipDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TipDetails choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_TipDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TipDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_TipDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TipDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this TipDetails choreography.
     *
     * @param string $value (required, string) Your Foursquare API Oauth token string.
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TipDetails choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TipID input for this TipDetails choreography.
     *
     * @param string $value (required, string) ID of tip to retrieve
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }
}


/**
 * Execution object for the TipDetails choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_TipDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TipDetails choreography.
     *
     * @param Temboo_Session $session The session that owns this TipDetails execution.
     * @param Foursquare_Tips_TipDetails $choreo The choregraphy object for this execution.
     * @param Foursquare_Tips_TipDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_TipDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_TipDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_TipDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TipDetails execution.
     *
     * @return Foursquare_Tips_TipDetails_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this TipDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_TipDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_TipDetails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TipDetails choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_TipDetails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TipDetails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_TipDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TipDetails execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns badges for a given user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Badges extends Temboo_Choreography
{
    /**
     * Returns badges for a given user.
     *
     * @param Temboo_Session $session The session that owns this Badges choreography.
     * @return Foursquare_Users_Badges New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/Badges/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Badges choreography.
     *
     * @param Foursquare_Users_Badges_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Badges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Badges_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_Badges_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Badges choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Badges_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_Badges_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Badges choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Badges_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Badges choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Badges_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Badges input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this Badges choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Badges choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this Badges choreography.
     *
     * @param string $value (optional, string) Identity of the user to get badges for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the Badges choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Badges_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Badges choreography.
     *
     * @param Temboo_Session $session The session that owns this Badges execution.
     * @param Foursquare_Users_Badges $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_Badges_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Badges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Badges_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_Badges $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Badges execution.
     *
     * @return Foursquare_Users_Badges_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Badges execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_Badges_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_Badges_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Badges choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Badges_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Badges choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_Badges_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Badges execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns photos from a user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PhotosFromUser extends Temboo_Choreography
{
    /**
     * Returns photos from a user.
     *
     * @param Temboo_Session $session The session that owns this PhotosFromUser choreography.
     * @return Foursquare_Users_PhotosFromUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/PhotosFromUser/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PhotosFromUser choreography.
     *
     * @param Foursquare_Users_PhotosFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_PhotosFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_PhotosFromUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_PhotosFromUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PhotosFromUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_PhotosFromUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_PhotosFromUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PhotosFromUser choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PhotosFromUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PhotosFromUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_PhotosFromUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PhotosFromUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this PhotosFromUser choreography.
     *
     * @param int $value (optional, integer) Number of results to return, up to 500.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this PhotosFromUser choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this PhotosFromUser choreography.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PhotosFromUser choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this PhotosFromUser choreography.
     *
     * @param string $value (optional, string) Identity of the user to get badges for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the PhotosFromUser choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PhotosFromUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PhotosFromUser choreography.
     *
     * @param Temboo_Session $session The session that owns this PhotosFromUser execution.
     * @param Foursquare_Users_PhotosFromUser $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_PhotosFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_PhotosFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_PhotosFromUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_PhotosFromUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PhotosFromUser execution.
     *
     * @return Foursquare_Users_PhotosFromUser_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this PhotosFromUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_PhotosFromUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_PhotosFromUser_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PhotosFromUser choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PhotosFromUser_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PhotosFromUser choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_PhotosFromUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this PhotosFromUser execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns details of a checkin.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CheckinDetails extends Temboo_Choreography
{
    /**
     * Returns details of a checkin.
     *
     * @param Temboo_Session $session The session that owns this CheckinDetails choreography.
     * @return Foursquare_Checkins_CheckinDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/CheckinDetails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CheckinDetails choreography.
     *
     * @param Foursquare_Checkins_CheckinDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_CheckinDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_CheckinDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_CheckinDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CheckinDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_CheckinDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_CheckinDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CheckinDetails choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CheckinDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CheckinDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_CheckinDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CheckinDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this CheckinDetails choreography.
     *
     * @param string $value (required, string) The ID of the checkin to retrieve additional information for.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the OauthToken input for this CheckinDetails choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CheckinDetails choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Signature input for this CheckinDetails choreography.
     *
     * @param string $value (optional, string) When checkins are sent to public feeds such as Twitter, foursquare appends a signature to them (s=XXXXXX). The same value can be used here.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }
}


/**
 * Execution object for the CheckinDetails choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CheckinDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CheckinDetails choreography.
     *
     * @param Temboo_Session $session The session that owns this CheckinDetails execution.
     * @param Foursquare_Checkins_CheckinDetails $choreo The choregraphy object for this execution.
     * @param Foursquare_Checkins_CheckinDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_CheckinDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_CheckinDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_CheckinDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CheckinDetails execution.
     *
     * @return Foursquare_Checkins_CheckinDetails_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this CheckinDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_CheckinDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_CheckinDetails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CheckinDetails choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CheckinDetails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CheckinDetails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_CheckinDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CheckinDetails execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to follow a list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_FollowList extends Temboo_Choreography
{
    /**
     * Allows a user to follow a list.
     *
     * @param Temboo_Session $session The session that owns this FollowList choreography.
     * @return Foursquare_Lists_FollowList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/FollowList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FollowList choreography.
     *
     * @param Foursquare_Lists_FollowList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_FollowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_FollowList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_FollowList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FollowList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_FollowList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_FollowList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FollowList choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_FollowList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FollowList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_FollowList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FollowList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ListID input for this FollowList choreography.
     *
     * @param string $value (required, string) The id of a user-created list.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this FollowList choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FollowList choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FollowList choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_FollowList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FollowList choreography.
     *
     * @param Temboo_Session $session The session that owns this FollowList execution.
     * @param Foursquare_Lists_FollowList $choreo The choregraphy object for this execution.
     * @param Foursquare_Lists_FollowList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_FollowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_FollowList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_FollowList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FollowList execution.
     *
     * @return Foursquare_Lists_FollowList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FollowList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_FollowList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_FollowList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FollowList choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_FollowList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FollowList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_FollowList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FollowList execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of recent friends' checkins.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_RecentCheckins extends Temboo_Choreography
{
    /**
     * Returns a list of recent friends' checkins.
     *
     * @param Temboo_Session $session The session that owns this RecentCheckins choreography.
     * @return Foursquare_Checkins_RecentCheckins New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/RecentCheckins/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RecentCheckins choreography.
     *
     * @param Foursquare_Checkins_RecentCheckins_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_RecentCheckins_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_RecentCheckins_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_RecentCheckins_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RecentCheckins choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_RecentCheckins_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_RecentCheckins_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RecentCheckins choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_RecentCheckins_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RecentCheckins choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_RecentCheckins_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RecentCheckins input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AfterTimeStamp input for this RecentCheckins choreography.
     *
     * @param int $value (optional, integer) Seconds after which to look for checkins, e.g. for looking for new checkins since the last fetch.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setAfterTimeStamp($value)
    {
        return $this->set('AfterTimeStamp', $value);
    }

    /**
     * Set the value for the Latitude input for this RecentCheckins choreography.
     *
     * @param float $value (optional, decimal) The latitude point of the user's location.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this RecentCheckins choreography.
     *
     * @param int $value (optional, integer) Number of results to return, up to 100.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this RecentCheckins choreography.
     *
     * @param float $value (optional, decimal) The longitude point of the user's location.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this RecentCheckins choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RecentCheckins choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the RecentCheckins choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_RecentCheckins_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RecentCheckins choreography.
     *
     * @param Temboo_Session $session The session that owns this RecentCheckins execution.
     * @param Foursquare_Checkins_RecentCheckins $choreo The choregraphy object for this execution.
     * @param Foursquare_Checkins_RecentCheckins_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_RecentCheckins_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_RecentCheckins_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_RecentCheckins $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RecentCheckins execution.
     *
     * @return Foursquare_Checkins_RecentCheckins_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this RecentCheckins execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_RecentCheckins_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_RecentCheckins_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RecentCheckins choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_RecentCheckins_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RecentCheckins choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_RecentCheckins_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RecentCheckins execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to unfollow a list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UnfollowList extends Temboo_Choreography
{
    /**
     * Allows a user to unfollow a list.
     *
     * @param Temboo_Session $session The session that owns this UnfollowList choreography.
     * @return Foursquare_Lists_UnfollowList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/UnfollowList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UnfollowList choreography.
     *
     * @param Foursquare_Lists_UnfollowList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UnfollowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UnfollowList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_UnfollowList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UnfollowList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UnfollowList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_UnfollowList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UnfollowList choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UnfollowList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UnfollowList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UnfollowList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UnfollowList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ListID input for this UnfollowList choreography.
     *
     * @param string $value (required, string) The id of a user-created list.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this UnfollowList choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UnfollowList choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the UnfollowList choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UnfollowList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UnfollowList choreography.
     *
     * @param Temboo_Session $session The session that owns this UnfollowList execution.
     * @param Foursquare_Lists_UnfollowList $choreo The choregraphy object for this execution.
     * @param Foursquare_Lists_UnfollowList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UnfollowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UnfollowList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_UnfollowList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UnfollowList execution.
     *
     * @return Foursquare_Lists_UnfollowList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this UnfollowList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_UnfollowList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_UnfollowList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UnfollowList choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UnfollowList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UnfollowList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_UnfollowList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UnfollowList execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of a user's friends.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ListFriends extends Temboo_Choreography
{
    /**
     * Retrieve a list of a user's friends.
     *
     * @param Temboo_Session $session The session that owns this ListFriends choreography.
     * @return Foursquare_Users_ListFriends New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/ListFriends/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListFriends choreography.
     *
     * @param Foursquare_Users_ListFriends_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ListFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ListFriends_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_ListFriends_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFriends choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ListFriends_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_ListFriends_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFriends choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ListFriends_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListFriends choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ListFriends_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFriends input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this ListFriends choreography.
     *
     * @param int $value (optional, integer) The number of results returned, up to 500.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this ListFriends choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this ListFriends choreography.
     *
     * @param int $value (optional, integer) Specify an offest to page through results.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListFriends choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ListFriends choreography.
     *
     * @param string $value (optional, string) Identity of the user to get friends for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListFriends choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ListFriends_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFriends choreography.
     *
     * @param Temboo_Session $session The session that owns this ListFriends execution.
     * @param Foursquare_Users_ListFriends $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_ListFriends_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ListFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ListFriends_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_ListFriends $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFriends execution.
     *
     * @return Foursquare_Users_ListFriends_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this ListFriends execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_ListFriends_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_ListFriends_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListFriends choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ListFriends_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListFriends choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_ListFriends_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListFriends execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a given list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateList extends Temboo_Choreography
{
    /**
     * Updates a given list.
     *
     * @param Temboo_Session $session The session that owns this UpdateList choreography.
     * @return Foursquare_Lists_UpdateList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/UpdateList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateList choreography.
     *
     * @param Foursquare_Lists_UpdateList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UpdateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UpdateList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_UpdateList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UpdateList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_UpdateList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateList choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UpdateList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Collaborative input for this UpdateList choreography.
     *
     * @param bool $value (optional, boolean) A flag indicating that this list can be edited by friends. Set to 1 for true. Defaults to 0 (false).
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setCollaborative($value)
    {
        return $this->set('Collaborative', $value);
    }

    /**
     * Set the value for the Description input for this UpdateList choreography.
     *
     * @param string $value (optional, string) The description of the list.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ListID input for this UpdateList choreography.
     *
     * @param string $value (required, string) The id of the list to update.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Name input for this UpdateList choreography.
     *
     * @param string $value (required, string) The name of the list.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the OauthToken input for this UpdateList choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this UpdateList choreography.
     *
     * @param string $value (optional, string) The id of a photo that should be set as the list photo.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateList choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the UpdateList choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateList choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateList execution.
     * @param Foursquare_Lists_UpdateList $choreo The choregraphy object for this execution.
     * @param Foursquare_Lists_UpdateList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UpdateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UpdateList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_UpdateList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateList execution.
     *
     * @return Foursquare_Lists_UpdateList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this UpdateList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_UpdateList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_UpdateList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateList choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_UpdateList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateList execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of all venues visited by the specified user, along with how many visits and when they were last there. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_VenueHistory extends Temboo_Choreography
{
    /**
     * Returns a list of all venues visited by the specified user, along with how many visits and when they were last there. 
     *
     * @param Temboo_Session $session The session that owns this VenueHistory choreography.
     * @return Foursquare_Users_VenueHistory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/VenueHistory/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this VenueHistory choreography.
     *
     * @param Foursquare_Users_VenueHistory_Inputs|array $inputs (optional) Inputs as Foursquare_Users_VenueHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_VenueHistory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_VenueHistory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VenueHistory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_VenueHistory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_VenueHistory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VenueHistory choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_VenueHistory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the VenueHistory choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_VenueHistory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VenueHistory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AfterTimeStamp input for this VenueHistory choreography.
     *
     * @param string $value (optional, date) Retrieve the first results after the seconds entered since epoch time.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setAfterTimeStamp($value)
    {
        return $this->set('AfterTimeStamp', $value);
    }

    /**
     * Set the value for the BeforeTimeStamp input for this VenueHistory choreography.
     *
     * @param string $value (optional, date) Retrieve the first results prior to the seconds specified. Useful for paging backward in time.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setBeforeTimeStamp($value)
    {
        return $this->set('BeforeTimeStamp', $value);
    }

    /**
     * Set the value for the CategoryID input for this VenueHistory choreography.
     *
     * @param string $value (optional, string) Limits returned venues to those in this category. If specifying a top-level category, all sub-categories will also match the query.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the OauthToken input for this VenueHistory choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VenueHistory choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this VenueHistory choreography.
     *
     * @param string $value (optional, string) Only 'self' is supported at this moment by the Foursquare API. Defaults to: self.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the VenueHistory choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_VenueHistory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VenueHistory choreography.
     *
     * @param Temboo_Session $session The session that owns this VenueHistory execution.
     * @param Foursquare_Users_VenueHistory $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_VenueHistory_Inputs|array $inputs (optional) Inputs as Foursquare_Users_VenueHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_VenueHistory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_VenueHistory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VenueHistory execution.
     *
     * @return Foursquare_Users_VenueHistory_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this VenueHistory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_VenueHistory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_VenueHistory_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the VenueHistory choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_VenueHistory_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the VenueHistory choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_VenueHistory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this VenueHistory execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of checkins for an authenticated user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_CheckinsByUser extends Temboo_Choreography
{
    /**
     * Retrieve a list of checkins for an authenticated user.
     *
     * @param Temboo_Session $session The session that owns this CheckinsByUser choreography.
     * @return Foursquare_Users_CheckinsByUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/CheckinsByUser/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CheckinsByUser choreography.
     *
     * @param Foursquare_Users_CheckinsByUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_CheckinsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_CheckinsByUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_CheckinsByUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CheckinsByUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_CheckinsByUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_CheckinsByUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CheckinsByUser choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_CheckinsByUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CheckinsByUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_CheckinsByUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CheckinsByUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AfterTimeStamp input for this CheckinsByUser choreography.
     *
     * @param string $value (optional, date) Retrieve the first results after the seconds entered since epoch time.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setAfterTimeStamp($value)
    {
        return $this->set('AfterTimeStamp', $value);
    }

    /**
     * Set the value for the BeforeTimeStamp input for this CheckinsByUser choreography.
     *
     * @param string $value (optional, date) Retrieve the first results prior to the seconds specified. Useful for paging backward in time.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setBeforeTimeStamp($value)
    {
        return $this->set('BeforeTimeStamp', $value);
    }

    /**
     * Set the value for the Limit input for this CheckinsByUser choreography.
     *
     * @param int $value (optional, integer) The total number of results to be returned, up to 250.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this CheckinsByUser choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this CheckinsByUser choreography.
     *
     * @param int $value (optional, integer) The number of results to skip. Used to page through results.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CheckinsByUser choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this CheckinsByUser choreography.
     *
     * @param string $value (optional, string) Only 'self' is supported at this moment by the Foursquare API. Defaults to: self.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the CheckinsByUser choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_CheckinsByUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CheckinsByUser choreography.
     *
     * @param Temboo_Session $session The session that owns this CheckinsByUser execution.
     * @param Foursquare_Users_CheckinsByUser $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_CheckinsByUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_CheckinsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_CheckinsByUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_CheckinsByUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CheckinsByUser execution.
     *
     * @return Foursquare_Users_CheckinsByUser_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this CheckinsByUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_CheckinsByUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_CheckinsByUser_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CheckinsByUser choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_CheckinsByUser_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CheckinsByUser choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_CheckinsByUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CheckinsByUser execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves user lists.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserLists extends Temboo_Choreography
{
    /**
     * Retrieves user lists.
     *
     * @param Temboo_Session $session The session that owns this UserLists choreography.
     * @return Foursquare_Users_UserLists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/UserLists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UserLists choreography.
     *
     * @param Foursquare_Users_UserLists_Inputs|array $inputs (optional) Inputs as Foursquare_Users_UserLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_UserLists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_UserLists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserLists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_UserLists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_UserLists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserLists choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserLists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UserLists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_UserLists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserLists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Group input for this UserLists choreography.
     *
     * @param string $value (optional, string) Used to narrow down the lists to returns. Valid values are: created, edited, followed, friends, and suggested. See documentation for definitions of these parameter values.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setGroup($value)
    {
        return $this->set('Group', $value);
    }

    /**
     * Set the value for the Latitude input for this UserLists choreography.
     *
     * @param float $value (conditional, decimal) Latitude of user's location. Required in order to return the suggested group.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this UserLists choreography.
     *
     * @param float $value (conditional, decimal) Longitude of user's location. Required in order to return the suggested group.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this UserLists choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UserLists choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this UserLists choreography.
     *
     * @param string $value (optional, string) Identity of the user to get lists for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the UserLists choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserLists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserLists choreography.
     *
     * @param Temboo_Session $session The session that owns this UserLists execution.
     * @param Foursquare_Users_UserLists $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_UserLists_Inputs|array $inputs (optional) Inputs as Foursquare_Users_UserLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_UserLists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_UserLists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserLists execution.
     *
     * @return Foursquare_Users_UserLists_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this UserLists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_UserLists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_UserLists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UserLists choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserLists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UserLists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_UserLists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UserLists execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of venues similar to the specified venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Similar extends Temboo_Choreography
{
    /**
     * Returns a list of venues similar to the specified venue.
     *
     * @param Temboo_Session $session The session that owns this Similar choreography.
     * @return Foursquare_Venues_Similar New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/Similar/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Similar choreography.
     *
     * @param Foursquare_Venues_Similar_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Similar_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Similar_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_Similar_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Similar choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Similar_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_Similar_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Similar choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Similar_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Similar choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Similar_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Similar input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this Similar choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Similar choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this Similar choreography.
     *
     * @param string $value (required, string) The id for the venue you want similar venues for.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the Similar choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Similar_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Similar choreography.
     *
     * @param Temboo_Session $session The session that owns this Similar execution.
     * @param Foursquare_Venues_Similar $choreo The choregraphy object for this execution.
     * @param Foursquare_Venues_Similar_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Similar_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Similar_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_Similar $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Similar execution.
     *
     * @return Foursquare_Venues_Similar_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Similar execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_Similar_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_Similar_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Similar choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Similar_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Similar choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_Similar_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Similar execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Denies a pending friend request from another user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_DenyFriendRequest extends Temboo_Choreography
{
    /**
     * Denies a pending friend request from another user.
     *
     * @param Temboo_Session $session The session that owns this DenyFriendRequest choreography.
     * @return Foursquare_Users_DenyFriendRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/DenyFriendRequest/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DenyFriendRequest choreography.
     *
     * @param Foursquare_Users_DenyFriendRequest_Inputs|array $inputs (optional) Inputs as Foursquare_Users_DenyFriendRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_DenyFriendRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_DenyFriendRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DenyFriendRequest choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_DenyFriendRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_DenyFriendRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DenyFriendRequest choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_DenyFriendRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DenyFriendRequest choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_DenyFriendRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DenyFriendRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this DenyFriendRequest choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DenyFriendRequest choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this DenyFriendRequest choreography.
     *
     * @param string $value (required, string) The user ID of a pending friend.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DenyFriendRequest choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_DenyFriendRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DenyFriendRequest choreography.
     *
     * @param Temboo_Session $session The session that owns this DenyFriendRequest execution.
     * @param Foursquare_Users_DenyFriendRequest $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_DenyFriendRequest_Inputs|array $inputs (optional) Inputs as Foursquare_Users_DenyFriendRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_DenyFriendRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_DenyFriendRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DenyFriendRequest execution.
     *
     * @return Foursquare_Users_DenyFriendRequest_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this DenyFriendRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_DenyFriendRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_DenyFriendRequest_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DenyFriendRequest choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_DenyFriendRequest_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DenyFriendRequest choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_DenyFriendRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DenyFriendRequest execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to create a checkin with Foursquare.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CreateCheckin extends Temboo_Choreography
{
    /**
     * Allows you to create a checkin with Foursquare.
     *
     * @param Temboo_Session $session The session that owns this CreateCheckin choreography.
     * @return Foursquare_Checkins_CreateCheckin New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/CreateCheckin/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateCheckin choreography.
     *
     * @param Foursquare_Checkins_CreateCheckin_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_CreateCheckin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_CreateCheckin_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_CreateCheckin_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateCheckin choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_CreateCheckin_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_CreateCheckin_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateCheckin choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CreateCheckin_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateCheckin choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_CreateCheckin_Inputs New instance.
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
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccuracyOfCoordinates input for this CreateCheckin choreography.
     *
     * @param int $value (optional, integer) Accuracy of the user's latitude and longitude, in meters.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setAccuracyOfCoordinates($value)
    {
        return $this->set('AccuracyOfCoordinates', $value);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this CreateCheckin choreography.
     *
     * @param int $value (optional, integer) Vertical accuracy of the user's location, in meters.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this CreateCheckin choreography.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the Broadcast input for this CreateCheckin choreography.
     *
     * @param string $value (optional, string) Who to broadcast this check-in to. Can be a comma-delimited list: private, public, facebook, twitter, or followers. Defaults to 'public'.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setBroadcast($value)
    {
        return $this->set('Broadcast', $value);
    }

    /**
     * Set the value for the EventID input for this CreateCheckin choreography.
     *
     * @param string $value (optional, string) The event the user is checking in to. A venueId for a venue with this eventId must also be specified in the request.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setEventID($value)
    {
        return $this->set('EventID', $value);
    }

    /**
     * Set the value for the Latitude input for this CreateCheckin choreography.
     *
     * @param float $value (optional, decimal) The latitude point of the user's location.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this CreateCheckin choreography.
     *
     * @param float $value (optional, decimal) The longitude point of the user's location.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this CreateCheckin choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateCheckin choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Shout input for this CreateCheckin choreography.
     *
     * @param string $value (optional, string) A message about your check-in. The maximum length of this field is 140 characters.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setShout($value)
    {
        return $this->set('Shout', $value);
    }

    /**
     * Set the value for the VenueID input for this CreateCheckin choreography.
     *
     * @param string $value (required, string) The venue where the user is checking in. No venueid is needed if shouting or just providing a venue name.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }

    /**
     * Set the value for the Venue input for this CreateCheckin choreography.
     *
     * @param string $value (optional, string) If you are not shouting, but you don't have a venue ID or prefer a 'venueless' checkin, pass the venue name as a string using this parameter.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setVenue($value)
    {
        return $this->set('Venue', $value);
    }
}


/**
 * Execution object for the CreateCheckin choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CreateCheckin_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateCheckin choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateCheckin execution.
     * @param Foursquare_Checkins_CreateCheckin $choreo The choregraphy object for this execution.
     * @param Foursquare_Checkins_CreateCheckin_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_CreateCheckin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_CreateCheckin_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_CreateCheckin $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateCheckin execution.
     *
     * @return Foursquare_Checkins_CreateCheckin_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
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
     * @return Foursquare_Checkins_CreateCheckin_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_CreateCheckin_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateCheckin choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CreateCheckin_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateCheckin choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_CreateCheckin_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateCheckin execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Provides a count of how many people are at a given venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_HereNow extends Temboo_Choreography
{
    /**
     * Provides a count of how many people are at a given venue.
     *
     * @param Temboo_Session $session The session that owns this HereNow choreography.
     * @return Foursquare_Venues_HereNow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/HereNow/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this HereNow choreography.
     *
     * @param Foursquare_Venues_HereNow_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_HereNow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_HereNow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_HereNow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this HereNow choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_HereNow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_HereNow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the HereNow choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_HereNow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the HereNow choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_HereNow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this HereNow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AfterTimestamp input for this HereNow choreography.
     *
     * @param string $value (optional, date) Retrieve the first results to follow this timestamp (an epoch timestamp in seconds).
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setAfterTimestamp($value)
    {
        return $this->set('AfterTimestamp', $value);
    }

    /**
     * Set the value for the Limit input for this HereNow choreography.
     *
     * @param int $value (optional, integer) The number of results to return, up to 500.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this HereNow choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this HereNow choreography.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this HereNow choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this HereNow choreography.
     *
     * @param string $value (required, string) The ID associated with the venue you want to retrieve details for.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the HereNow choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_HereNow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the HereNow choreography.
     *
     * @param Temboo_Session $session The session that owns this HereNow execution.
     * @param Foursquare_Venues_HereNow $choreo The choregraphy object for this execution.
     * @param Foursquare_Venues_HereNow_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_HereNow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_HereNow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_HereNow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this HereNow execution.
     *
     * @return Foursquare_Venues_HereNow_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this HereNow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_HereNow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_HereNow_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the HereNow choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_HereNow_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the HereNow choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_HereNow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this HereNow execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to add or remove photos and tips from items on user-created lists.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateItem extends Temboo_Choreography
{
    /**
     * Allows you to add or remove photos and tips from items on user-created lists.
     *
     * @param Temboo_Session $session The session that owns this UpdateItem choreography.
     * @return Foursquare_Lists_UpdateItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/UpdateItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateItem choreography.
     *
     * @param Foursquare_Lists_UpdateItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UpdateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UpdateItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_UpdateItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UpdateItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_UpdateItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateItem choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UpdateItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ItemID input for this UpdateItem choreography.
     *
     * @param string $value (required, string) The id of an item on a list that you wish to update.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ListID input for this UpdateItem choreography.
     *
     * @param string $value (required, string) The ID of a user-created list to update
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this UpdateItem choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this UpdateItem choreography.
     *
     * @param string $value (optional, string) If present and non-empty, adds a photo to this item. If present and empty, will remove the photo on this item. If the photo was a private checkin photo, it will be promoted to a public venue photo.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateItem choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this UpdateItem choreography.
     *
     * @param string $value (optional, string) If present, this creates a public tip on the venue and replaces any existing tip on the item. Cannot be used in conjuction with TipID or PhotoID.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the TipID input for this UpdateItem choreography.
     *
     * @param string $value (optional, string) The id of a tip to add to the list. Cannot be used in conjunction with the Text and URL inputs. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }

    /**
     * Set the value for the URL input for this UpdateItem choreography.
     *
     * @param string $value (optional, string) If adding a new tip using the Text input, this can associate a url with the tip.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the UpdateItem choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateItem choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateItem execution.
     * @param Foursquare_Lists_UpdateItem $choreo The choregraphy object for this execution.
     * @param Foursquare_Lists_UpdateItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UpdateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UpdateItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_UpdateItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateItem execution.
     *
     * @return Foursquare_Lists_UpdateItem_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this UpdateItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_UpdateItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_UpdateItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateItem choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_UpdateItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateItem execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns an array of users have done this tip.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Done extends Temboo_Choreography
{
    /**
     * Returns an array of users have done this tip.
     *
     * @param Temboo_Session $session The session that owns this Done choreography.
     * @return Foursquare_Tips_Done New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/Done/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Done choreography.
     *
     * @param Foursquare_Tips_Done_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_Done_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_Done_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_Done_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Done choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_Done_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_Done_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Done choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Done_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Done choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_Done_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Done input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this Done choreography.
     *
     * @param int $value (optional, integer) Number of results to return, up to 200.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this Done choreography.
     *
     * @param string $value (required, string) Your Foursquare API Oauth token string.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this Done choreography.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Done choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TipID input for this Done choreography.
     *
     * @param string $value (required, string) The id of a tip to get users who have marked the tip as done.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }
}


/**
 * Execution object for the Done choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Done_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Done choreography.
     *
     * @param Temboo_Session $session The session that owns this Done execution.
     * @param Foursquare_Tips_Done $choreo The choregraphy object for this execution.
     * @param Foursquare_Tips_Done_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_Done_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_Done_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_Done $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Done execution.
     *
     * @return Foursquare_Tips_Done_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Done execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_Done_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_Done_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Done choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Done_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Done choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_Done_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Done execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user to add an item to a list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddItem extends Temboo_Choreography
{
    /**
     * Allows a user to add an item to a list.
     *
     * @param Temboo_Session $session The session that owns this AddItem choreography.
     * @return Foursquare_Lists_AddItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/AddItem/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddItem choreography.
     *
     * @param Foursquare_Lists_AddItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_AddItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_AddItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_AddItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_AddItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_AddItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddItem choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddItem choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_AddItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ItemID input for this AddItem choreography.
     *
     * @param string $value (conditional, string) The id of an item on a list that you wish to copy to the target list. Used in conjuction with ListID. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ItemListID input for this AddItem choreography.
     *
     * @param string $value (conditional, string) The ID of a list that contains an item that you wish to copy to the new list. Used in conjuction with ItemID. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setItemListID($value)
    {
        return $this->set('ItemListID', $value);
    }

    /**
     * Set the value for the ListID input for this AddItem choreography.
     *
     * @param string $value (required, string) The ID of the list that  you are adding an item to. This can be a user-created list id or one of tips, todos, or dones.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddItem choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddItem choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this AddItem choreography.
     *
     * @param string $value (optional, string) If the target is a user-created list, this will create a public tip on the venue. If the target is todos, the text will be a private note that is only visible to the author.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the TipID input for this AddItem choreography.
     *
     * @param string $value (conditional, string) The id of a tip to add to the list. Cannot be used in conjunction with the Text and URL inputs. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }

    /**
     * Set the value for the URL input for this AddItem choreography.
     *
     * @param string $value (optional, string) If adding a new tip using the Text input, this can associate a url with the tip.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the VenueID input for this AddItem choreography.
     *
     * @param string $value (conditional, string) The id of a venue to add to the list. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the AddItem choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddItem choreography.
     *
     * @param Temboo_Session $session The session that owns this AddItem execution.
     * @param Foursquare_Lists_AddItem $choreo The choregraphy object for this execution.
     * @param Foursquare_Lists_AddItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_AddItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_AddItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_AddItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddItem execution.
     *
     * @return Foursquare_Lists_AddItem_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this AddItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_AddItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_AddItem_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddItem choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddItem_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddItem choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_AddItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddItem execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a list of tips near the specified area.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_SearchNearbyTips extends Temboo_Choreography
{
    /**
     * Get a list of tips near the specified area.
     *
     * @param Temboo_Session $session The session that owns this SearchNearbyTips choreography.
     * @return Foursquare_Tips_SearchNearbyTips New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/SearchNearbyTips/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchNearbyTips choreography.
     *
     * @param Foursquare_Tips_SearchNearbyTips_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_SearchNearbyTips_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_SearchNearbyTips_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_SearchNearbyTips_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchNearbyTips choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_SearchNearbyTips_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchNearbyTips choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_SearchNearbyTips_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchNearbyTips choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchNearbyTips input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Filter input for this SearchNearbyTips choreography.
     *
     * @param string $value (optional, string) Filter results.  If set to 'friends', the choreo returns tips from friends.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchNearbyTips choreography.
     *
     * @param float $value (required, decimal) The latitude point of the user's location.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this SearchNearbyTips choreography.
     *
     * @param int $value (optional, integer) Number of results to be returned by the search, up to 500.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchNearbyTips choreography.
     *
     * @param float $value (required, decimal) The longitude point of the user's location.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this SearchNearbyTips choreography.
     *
     * @param string $value (required, string) Your Foursquare API Oauth token string.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this SearchNearbyTips choreography.
     *
     * @param int $value (optional, integer) Use to page through the list of results.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Query input for this SearchNearbyTips choreography.
     *
     * @param string $value (optional, string) Only find tips matching the given term. Cannot be used in conjunction with 'friends' filter.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchNearbyTips choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchNearbyTips choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_SearchNearbyTips_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchNearbyTips choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchNearbyTips execution.
     * @param Foursquare_Tips_SearchNearbyTips $choreo The choregraphy object for this execution.
     * @param Foursquare_Tips_SearchNearbyTips_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_SearchNearbyTips_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_SearchNearbyTips_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_SearchNearbyTips $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchNearbyTips execution.
     *
     * @return Foursquare_Tips_SearchNearbyTips_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this SearchNearbyTips execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_SearchNearbyTips_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_SearchNearbyTips_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchNearbyTips choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_SearchNearbyTips_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchNearbyTips choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_SearchNearbyTips_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchNearbyTips execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Approves a pending friend request from another user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ApproveFriendRequest extends Temboo_Choreography
{
    /**
     * Approves a pending friend request from another user.
     *
     * @param Temboo_Session $session The session that owns this ApproveFriendRequest choreography.
     * @return Foursquare_Users_ApproveFriendRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/ApproveFriendRequest/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ApproveFriendRequest choreography.
     *
     * @param Foursquare_Users_ApproveFriendRequest_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ApproveFriendRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ApproveFriendRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_ApproveFriendRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ApproveFriendRequest choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_ApproveFriendRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ApproveFriendRequest choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ApproveFriendRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ApproveFriendRequest choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ApproveFriendRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this ApproveFriendRequest choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ApproveFriendRequest choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ApproveFriendRequest choreography.
     *
     * @param string $value (required, string) The user ID of a pending friend.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ApproveFriendRequest choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ApproveFriendRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ApproveFriendRequest choreography.
     *
     * @param Temboo_Session $session The session that owns this ApproveFriendRequest execution.
     * @param Foursquare_Users_ApproveFriendRequest $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_ApproveFriendRequest_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ApproveFriendRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ApproveFriendRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_ApproveFriendRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ApproveFriendRequest execution.
     *
     * @return Foursquare_Users_ApproveFriendRequest_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this ApproveFriendRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_ApproveFriendRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_ApproveFriendRequest_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ApproveFriendRequest choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ApproveFriendRequest_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ApproveFriendRequest choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_ApproveFriendRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ApproveFriendRequest execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns details about a given list. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListDetails extends Temboo_Choreography
{
    /**
     * Returns details about a given list. 
     *
     * @param Temboo_Session $session The session that owns this ListDetails choreography.
     * @return Foursquare_Lists_ListDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/ListDetails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListDetails choreography.
     *
     * @param Foursquare_Lists_ListDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_ListDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_ListDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_ListDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_ListDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_ListDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListDetails choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListDetails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_ListDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this ListDetails choreography.
     *
     * @param int $value (optional, integer) Number of results to return, up to 500.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ListID input for this ListDetails choreography.
     *
     * @param string $value (required, string) This can be a user-created list id or one of tips, todos, or dones.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this ListDetails choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this ListDetails choreography.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListDetails choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ListDetails choreography.
     *
     * @param string $value (optional, string) Identity of the user to get tips for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListDetails choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListDetails choreography.
     *
     * @param Temboo_Session $session The session that owns this ListDetails execution.
     * @param Foursquare_Lists_ListDetails $choreo The choregraphy object for this execution.
     * @param Foursquare_Lists_ListDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_ListDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_ListDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_ListDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListDetails execution.
     *
     * @return Foursquare_Lists_ListDetails_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this ListDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_ListDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_ListDetails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListDetails choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListDetails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListDetails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_ListDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListDetails execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddList extends Temboo_Choreography
{
    /**
     * Creates a new list.
     *
     * @param Temboo_Session $session The session that owns this AddList choreography.
     * @return Foursquare_Lists_AddList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/AddList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddList choreography.
     *
     * @param Foursquare_Lists_AddList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_AddList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_AddList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_AddList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_AddList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_AddList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddList choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_AddList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Collaborative input for this AddList choreography.
     *
     * @param bool $value (optional, boolean) A flag indicating that this list can be edited by friends. Set to 1 for true. Defaults to 0 (false).
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setCollaborative($value)
    {
        return $this->set('Collaborative', $value);
    }

    /**
     * Set the value for the Description input for this AddList choreography.
     *
     * @param string $value (optional, string) The description of the list.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Name input for this AddList choreography.
     *
     * @param string $value (required, string) The name of the list.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddList choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this AddList choreography.
     *
     * @param string $value (optional, string) The id of a photo that should be set as the list photo.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddList choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the AddList choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddList choreography.
     *
     * @param Temboo_Session $session The session that owns this AddList execution.
     * @param Foursquare_Lists_AddList $choreo The choregraphy object for this execution.
     * @param Foursquare_Lists_AddList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_AddList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_AddList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_AddList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddList execution.
     *
     * @return Foursquare_Lists_AddList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this AddList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_AddList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_AddList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddList choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_AddList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddList execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns tips from a user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_TipsFromUser extends Temboo_Choreography
{
    /**
     * Returns tips from a user.
     *
     * @param Temboo_Session $session The session that owns this TipsFromUser choreography.
     * @return Foursquare_Users_TipsFromUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/TipsFromUser/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TipsFromUser choreography.
     *
     * @param Foursquare_Users_TipsFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_TipsFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_TipsFromUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_TipsFromUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TipsFromUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_TipsFromUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_TipsFromUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TipsFromUser choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_TipsFromUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TipsFromUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_TipsFromUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TipsFromUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Latitude input for this TipsFromUser choreography.
     *
     * @param float $value (optional, decimal) The latitude point of the user's location.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this TipsFromUser choreography.
     *
     * @param int $value (optional, integer) Number of results to return, up to 500.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this TipsFromUser choreography.
     *
     * @param float $value (optional, decimal) The longitude point of the user's location.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this TipsFromUser choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this TipsFromUser choreography.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TipsFromUser choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this TipsFromUser choreography.
     *
     * @param string $value (optional, string) Enter: recent, nearby, or popular. NEARBY requires geolat and geolong to be provided.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the UserID input for this TipsFromUser choreography.
     *
     * @param string $value (optional, string) Identity of the user to get tips for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the TipsFromUser choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_TipsFromUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TipsFromUser choreography.
     *
     * @param Temboo_Session $session The session that owns this TipsFromUser execution.
     * @param Foursquare_Users_TipsFromUser $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_TipsFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_TipsFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_TipsFromUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_TipsFromUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TipsFromUser execution.
     *
     * @return Foursquare_Users_TipsFromUser_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this TipsFromUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_TipsFromUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_TipsFromUser_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TipsFromUser choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_TipsFromUser_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TipsFromUser choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_TipsFromUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TipsFromUser execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of pending friend requests for the authenticated user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PendingFriendRequests extends Temboo_Choreography
{
    /**
     * Retrieves a list of pending friend requests for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this PendingFriendRequests choreography.
     * @return Foursquare_Users_PendingFriendRequests New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/PendingFriendRequests/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PendingFriendRequests choreography.
     *
     * @param Foursquare_Users_PendingFriendRequests_Inputs|array $inputs (optional) Inputs as Foursquare_Users_PendingFriendRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_PendingFriendRequests_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_PendingFriendRequests_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PendingFriendRequests choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_PendingFriendRequests_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_PendingFriendRequests_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PendingFriendRequests choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PendingFriendRequests_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PendingFriendRequests choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_PendingFriendRequests_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PendingFriendRequests input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_PendingFriendRequests_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_PendingFriendRequests_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this PendingFriendRequests choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_PendingFriendRequests_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PendingFriendRequests choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_PendingFriendRequests_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PendingFriendRequests choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PendingFriendRequests_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PendingFriendRequests choreography.
     *
     * @param Temboo_Session $session The session that owns this PendingFriendRequests execution.
     * @param Foursquare_Users_PendingFriendRequests $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_PendingFriendRequests_Inputs|array $inputs (optional) Inputs as Foursquare_Users_PendingFriendRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_PendingFriendRequests_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_PendingFriendRequests $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PendingFriendRequests execution.
     *
     * @return Foursquare_Users_PendingFriendRequests_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this PendingFriendRequests execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_PendingFriendRequests_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_PendingFriendRequests_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PendingFriendRequests choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PendingFriendRequests_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PendingFriendRequests choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_PendingFriendRequests_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this PendingFriendRequests execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Return the user's Leaderboard
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Leaderboard extends Temboo_Choreography
{
    /**
     * Return the user's Leaderboard
     *
     * @param Temboo_Session $session The session that owns this Leaderboard choreography.
     * @return Foursquare_Users_Leaderboard New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/Leaderboard/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Leaderboard choreography.
     *
     * @param Foursquare_Users_Leaderboard_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Leaderboard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Leaderboard_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_Leaderboard_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Leaderboard choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Leaderboard_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_Leaderboard_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Leaderboard choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Leaderboard_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Leaderboard choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Leaderboard_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Leaderboard input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Neighbors input for this Leaderboard choreography.
     *
     * @param int $value (optional, integer) The number of friends' scores to return that are adjacent to your score, in ranked order.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function setNeighbors($value)
    {
        return $this->set('Neighbors', $value);
    }

    /**
     * Set the value for the OauthToken input for this Leaderboard choreography.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Leaderboard choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Leaderboard choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Leaderboard_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Leaderboard choreography.
     *
     * @param Temboo_Session $session The session that owns this Leaderboard execution.
     * @param Foursquare_Users_Leaderboard $choreo The choregraphy object for this execution.
     * @param Foursquare_Users_Leaderboard_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Leaderboard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Leaderboard_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_Leaderboard $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Leaderboard execution.
     *
     * @return Foursquare_Users_Leaderboard_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Leaderboard execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_Leaderboard_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_Leaderboard_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Leaderboard choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Leaderboard_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Leaderboard choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_Leaderboard_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Leaderboard execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to access information about the current events at a place.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueEvents extends Temboo_Choreography
{
    /**
     * Allows you to access information about the current events at a place.
     *
     * @param Temboo_Session $session The session that owns this VenueEvents choreography.
     * @return Foursquare_Venues_VenueEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/VenueEvents/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this VenueEvents choreography.
     *
     * @param Foursquare_Venues_VenueEvents_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_VenueEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VenueEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_VenueEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VenueEvents choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the VenueEvents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VenueEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this VenueEvents choreography.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VenueEvents choreography.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this VenueEvents choreography.
     *
     * @param string $value (required, string) The ID associated with the venue you want to retrieve details for.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the VenueEvents choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VenueEvents choreography.
     *
     * @param Temboo_Session $session The session that owns this VenueEvents execution.
     * @param Foursquare_Venues_VenueEvents $choreo The choregraphy object for this execution.
     * @param Foursquare_Venues_VenueEvents_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_VenueEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VenueEvents execution.
     *
     * @return Foursquare_Venues_VenueEvents_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this VenueEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_VenueEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_VenueEvents_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the VenueEvents choreography.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueEvents_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the VenueEvents choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_VenueEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this VenueEvents execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>