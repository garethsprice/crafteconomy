<?php

/**
 * Temboo PHP SDK Flickr classes
 *
 * Execute Choreographies from the Temboo Flickr bundle.
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
 * @subpackage Flickr
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Returns a place ID for a given latitude, longitude and accuracy.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByLatLon extends Temboo_Choreography
{
    /**
     * Returns a place ID for a given latitude, longitude and accuracy.
     *
     * @param Temboo_Session $session The session that owns this FindByLatLon choreography.
     * @return Flickr_Places_FindByLatLon New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Places/FindByLatLon/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FindByLatLon choreography.
     *
     * @param Flickr_Places_FindByLatLon_Inputs|array $inputs (optional) Inputs as Flickr_Places_FindByLatLon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Places_FindByLatLon_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Places_FindByLatLon_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindByLatLon choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Places_FindByLatLon_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Places_FindByLatLon_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindByLatLon choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByLatLon_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FindByLatLon choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Places_FindByLatLon_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindByLatLon input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Places_FindByLatLon_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Places_FindByLatLon_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindByLatLon choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Places_FindByLatLon_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FindByLatLon choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Places_FindByLatLon_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this FindByLatLon choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Places_FindByLatLon_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this FindByLatLon choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Places_FindByLatLon_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Accuracy input for this FindByLatLon choreography.
     *
     * @param int $value (optional, integer) Recorded accuracy level of the location information. Valid range is 1-16. The default is 16.
     * @return Flickr_Places_FindByLatLon_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Latitude input for this FindByLatLon choreography.
     *
     * @param float $value (required, decimal) The latitude whose valid range is -90 to 90. Anything more than 4 decimal places will be truncated.
     * @return Flickr_Places_FindByLatLon_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this FindByLatLon choreography.
     *
     * @param float $value (required, decimal) The longitude whose valid range is -180 to 180. Anything more than 4 decimal places will be truncated.
     * @return Flickr_Places_FindByLatLon_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }
}


/**
 * Execution object for the FindByLatLon choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByLatLon_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindByLatLon choreography.
     *
     * @param Temboo_Session $session The session that owns this FindByLatLon execution.
     * @param Flickr_Places_FindByLatLon $choreo The choregraphy object for this execution.
     * @param Flickr_Places_FindByLatLon_Inputs|array $inputs (optional) Inputs as Flickr_Places_FindByLatLon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Places_FindByLatLon_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Places_FindByLatLon $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindByLatLon execution.
     *
     * @return Flickr_Places_FindByLatLon_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FindByLatLon execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Places_FindByLatLon_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Places_FindByLatLon_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FindByLatLon choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_FindByLatLon_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FindByLatLon choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Places_FindByLatLon_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FindByLatLon execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain geo-location information for a place using its flickr.com/places URL.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_GetInfoByURL extends Temboo_Choreography
{
    /**
     * Obtain geo-location information for a place using its flickr.com/places URL.
     *
     * @param Temboo_Session $session The session that owns this GetInfoByURL choreography.
     * @return Flickr_Places_GetInfoByURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Places/GetInfoByURL/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetInfoByURL choreography.
     *
     * @param Flickr_Places_GetInfoByURL_Inputs|array $inputs (optional) Inputs as Flickr_Places_GetInfoByURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Places_GetInfoByURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Places_GetInfoByURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetInfoByURL choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Places_GetInfoByURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Places_GetInfoByURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetInfoByURL choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_GetInfoByURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetInfoByURL choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Places_GetInfoByURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetInfoByURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Places_GetInfoByURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Places_GetInfoByURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetInfoByURL choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Places_GetInfoByURL_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the URL input for this GetInfoByURL choreography.
     *
     * @param string $value (required, string) Enter a flickr.com/places URL in the following form: /country/region/city. For example: /USA/NewYork/Rochester.
     * @return Flickr_Places_GetInfoByURL_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the GetInfoByURL choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_GetInfoByURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetInfoByURL choreography.
     *
     * @param Temboo_Session $session The session that owns this GetInfoByURL execution.
     * @param Flickr_Places_GetInfoByURL $choreo The choregraphy object for this execution.
     * @param Flickr_Places_GetInfoByURL_Inputs|array $inputs (optional) Inputs as Flickr_Places_GetInfoByURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Places_GetInfoByURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Places_GetInfoByURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetInfoByURL execution.
     *
     * @return Flickr_Places_GetInfoByURL_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetInfoByURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Places_GetInfoByURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Places_GetInfoByURL_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetInfoByURL choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_GetInfoByURL_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetInfoByURL choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Places_GetInfoByURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetInfoByURL execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns next and previous favorites for a photo in a user's favorites.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetContext extends Temboo_Choreography
{
    /**
     * Returns next and previous favorites for a photo in a user's favorites.
     *
     * @param Temboo_Session $session The session that owns this GetContext choreography.
     * @return Flickr_Favorites_GetContext New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Favorites/GetContext/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetContext choreography.
     *
     * @param Flickr_Favorites_GetContext_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_GetContext_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_GetContext_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Favorites_GetContext_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetContext choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_GetContext_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Favorites_GetContext_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetContext choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetContext_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetContext choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_GetContext_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetContext input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Favorites_GetContext_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Favorites_GetContext_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetContext choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Favorites_GetContext_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the PhotoId input for this GetContext choreography.
     *
     * @param int $value (required, integer) The id of the photo to fetch the context for.
     * @return Flickr_Favorites_GetContext_Inputs For method chaining.
     */
    public function setPhotoId($value)
    {
        return $this->set('PhotoId', $value);
    }

    /**
     * Set the value for the UserId input for this GetContext choreography.
     *
     * @param string $value (conditional, string) The user who counts the photo as a favorite.
     * @return Flickr_Favorites_GetContext_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetContext choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetContext_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetContext choreography.
     *
     * @param Temboo_Session $session The session that owns this GetContext execution.
     * @param Flickr_Favorites_GetContext $choreo The choregraphy object for this execution.
     * @param Flickr_Favorites_GetContext_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_GetContext_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_GetContext_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Favorites_GetContext $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetContext execution.
     *
     * @return Flickr_Favorites_GetContext_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetContext execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Favorites_GetContext_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Favorites_GetContext_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetContext choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetContext_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetContext choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Favorites_GetContext_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetContext execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Add a tag to a specified photo on Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_AddTags extends Temboo_Choreography
{
    /**
     * Add a tag to a specified photo on Flickr.
     *
     * @param Temboo_Session $session The session that owns this AddTags choreography.
     * @return Flickr_PhotoComments_AddTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/PhotoComments/AddTags/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddTags choreography.
     *
     * @param Flickr_PhotoComments_AddTags_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_AddTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_AddTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_PhotoComments_AddTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_AddTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_PhotoComments_AddTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddTags choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_AddTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddTags choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_AddTags_Inputs New instance.
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
     * @return Flickr_PhotoComments_AddTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_PhotoComments_AddTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AddTags choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_PhotoComments_AddTags_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this AddTags choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_PhotoComments_AddTags_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this AddTags choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_PhotoComments_AddTags_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this AddTags choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_PhotoComments_AddTags_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PhotoId input for this AddTags choreography.
     *
     * @param int $value (required, integer) The id of the photo to add tags to.
     * @return Flickr_PhotoComments_AddTags_Inputs For method chaining.
     */
    public function setPhotoId($value)
    {
        return $this->set('PhotoId', $value);
    }

    /**
     * Set the value for the Tags input for this AddTags choreography.
     *
     * @param string $value (required, string) The tags to add to the photo. Multiple tags can be separated by spaces.
     * @return Flickr_PhotoComments_AddTags_Inputs For method chaining.
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
 * @subpackage Flickr
 */
class Flickr_PhotoComments_AddTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddTags choreography.
     *
     * @param Temboo_Session $session The session that owns this AddTags execution.
     * @param Flickr_PhotoComments_AddTags $choreo The choregraphy object for this execution.
     * @param Flickr_PhotoComments_AddTags_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_AddTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_AddTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_PhotoComments_AddTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddTags execution.
     *
     * @return Flickr_PhotoComments_AddTags_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
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
     * @return Flickr_PhotoComments_AddTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_PhotoComments_AddTags_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddTags choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_AddTags_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddTags choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_PhotoComments_AddTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddTags execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of your geo-tagged photos.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetWithGeoData extends Temboo_Choreography
{
    /**
     * Returns a list of your geo-tagged photos.
     *
     * @param Temboo_Session $session The session that owns this GetWithGeoData choreography.
     * @return Flickr_Photos_GetWithGeoData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/GetWithGeoData/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetWithGeoData choreography.
     *
     * @param Flickr_Photos_GetWithGeoData_Inputs|array $inputs (optional) Inputs as Flickr_Photos_GetWithGeoData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_GetWithGeoData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_GetWithGeoData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWithGeoData choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_GetWithGeoData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_GetWithGeoData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWithGeoData choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetWithGeoData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetWithGeoData choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_GetWithGeoData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWithGeoData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetWithGeoData choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetWithGeoData choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetWithGeoData choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetWithGeoData choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Extras input for this GetWithGeoData choreography.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to retrieve for each returned record. See Choreo documentation for accepted values.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the MaxTakenDate input for this GetWithGeoData choreography.
     *
     * @param string $value (optional, date) Photos with an taken date less than or equal to this value will be returned. The date should be in the form of a mysql datetime.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setMaxTakenDate($value)
    {
        return $this->set('MaxTakenDate', $value);
    }

    /**
     * Set the value for the MaxUploadDate input for this GetWithGeoData choreography.
     *
     * @param string $value (optional, date) Photos with an upload date less than or equal to this value will be returned. The date should be in the form of a unix timestamp.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setMaxUploadDate($value)
    {
        return $this->set('MaxUploadDate', $value);
    }

    /**
     * Set the value for the Media input for this GetWithGeoData choreography.
     *
     * @param string $value (optional, string) Filter results by media type. Possible values are all (default), photos or videos.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setMedia($value)
    {
        return $this->set('Media', $value);
    }

    /**
     * Set the value for the MinTakenDate input for this GetWithGeoData choreography.
     *
     * @param string $value (optional, date) Photos with an taken date greater than or equal to this value will be returned. The date should be in the form of a mysql datetime.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setMinTakenDate($value)
    {
        return $this->set('MinTakenDate', $value);
    }

    /**
     * Set the value for the MinUploadDate input for this GetWithGeoData choreography.
     *
     * @param string $value (optional, date) Photos with an upload date greater than or equal to this value will be returned. The date should be in the form of a unix timestamp.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setMinUploadDate($value)
    {
        return $this->set('MinUploadDate', $value);
    }

    /**
     * Set the value for the Page input for this GetWithGeoData choreography.
     *
     * @param int $value (optional, integer) The page of results to return. Used for paging through many results. Defaults to 1.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this GetWithGeoData choreography.
     *
     * @param int $value (optional, integer) Number of photos to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the PrivacyFilter input for this GetWithGeoData choreography.
     *
     * @param int $value (optional, integer) Valid values are: 1 (public photos), 2 (private photos visible to friends), 3 (private photos visible to family), 4 (private photos visible to friends and family), 5 (completely private photos).
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setPrivacyFilter($value)
    {
        return $this->set('PrivacyFilter', $value);
    }

    /**
     * Set the value for the Sort input for this GetWithGeoData choreography.
     *
     * @param mixed $value (optional, any) The sort order. Deafults to date-posted-desc. Accepted values are: date-posted-asc, date-posted-desc, date-taken-asc, date-taken-desc, interestingness-desc, and interestingness-asc.
     * @return Flickr_Photos_GetWithGeoData_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the GetWithGeoData choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetWithGeoData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWithGeoData choreography.
     *
     * @param Temboo_Session $session The session that owns this GetWithGeoData execution.
     * @param Flickr_Photos_GetWithGeoData $choreo The choregraphy object for this execution.
     * @param Flickr_Photos_GetWithGeoData_Inputs|array $inputs (optional) Inputs as Flickr_Photos_GetWithGeoData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_GetWithGeoData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_GetWithGeoData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWithGeoData execution.
     *
     * @return Flickr_Photos_GetWithGeoData_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetWithGeoData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_GetWithGeoData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_GetWithGeoData_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetWithGeoData choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetWithGeoData_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetWithGeoData choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_GetWithGeoData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetWithGeoData execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of people in a given photo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_People_GetListOfPeople extends Temboo_Choreography
{
    /**
     * Retrieve a list of people in a given photo.
     *
     * @param Temboo_Session $session The session that owns this GetListOfPeople choreography.
     * @return Flickr_People_GetListOfPeople New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/People/GetListOfPeople/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetListOfPeople choreography.
     *
     * @param Flickr_People_GetListOfPeople_Inputs|array $inputs (optional) Inputs as Flickr_People_GetListOfPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_People_GetListOfPeople_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_People_GetListOfPeople_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetListOfPeople choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_People_GetListOfPeople_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_People_GetListOfPeople_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetListOfPeople choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_People_GetListOfPeople_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetListOfPeople choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_People_GetListOfPeople_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetListOfPeople input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_People_GetListOfPeople_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_People_GetListOfPeople_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetListOfPeople choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_People_GetListOfPeople_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the PhotoID input for this GetListOfPeople choreography.
     *
     * @param string $value (required, string) Enter the ID of a photo for which people will be listed.
     * @return Flickr_People_GetListOfPeople_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }
}


/**
 * Execution object for the GetListOfPeople choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_People_GetListOfPeople_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetListOfPeople choreography.
     *
     * @param Temboo_Session $session The session that owns this GetListOfPeople execution.
     * @param Flickr_People_GetListOfPeople $choreo The choregraphy object for this execution.
     * @param Flickr_People_GetListOfPeople_Inputs|array $inputs (optional) Inputs as Flickr_People_GetListOfPeople_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_People_GetListOfPeople_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_People_GetListOfPeople $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetListOfPeople execution.
     *
     * @return Flickr_People_GetListOfPeople_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetListOfPeople execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_People_GetListOfPeople_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_People_GetListOfPeople_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetListOfPeople choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_People_GetListOfPeople_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetListOfPeople choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_People_GetListOfPeople_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetListOfPeople execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a photo to a user's favorites list.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_AddFavorite extends Temboo_Choreography
{
    /**
     * Adds a photo to a user's favorites list.
     *
     * @param Temboo_Session $session The session that owns this AddFavorite choreography.
     * @return Flickr_Favorites_AddFavorite New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Favorites/AddFavorite/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddFavorite choreography.
     *
     * @param Flickr_Favorites_AddFavorite_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_AddFavorite_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_AddFavorite_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Favorites_AddFavorite_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddFavorite choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_AddFavorite_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Favorites_AddFavorite_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddFavorite choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_AddFavorite_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddFavorite choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_AddFavorite_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddFavorite input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Favorites_AddFavorite_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Favorites_AddFavorite_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AddFavorite choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Favorites_AddFavorite_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this AddFavorite choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Favorites_AddFavorite_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this AddFavorite choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Favorites_AddFavorite_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this AddFavorite choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Favorites_AddFavorite_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PhotoId input for this AddFavorite choreography.
     *
     * @param int $value (required, integer) The id of the photo to add a favorites list.
     * @return Flickr_Favorites_AddFavorite_Inputs For method chaining.
     */
    public function setPhotoId($value)
    {
        return $this->set('PhotoId', $value);
    }
}


/**
 * Execution object for the AddFavorite choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_AddFavorite_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddFavorite choreography.
     *
     * @param Temboo_Session $session The session that owns this AddFavorite execution.
     * @param Flickr_Favorites_AddFavorite $choreo The choregraphy object for this execution.
     * @param Flickr_Favorites_AddFavorite_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_AddFavorite_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_AddFavorite_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Favorites_AddFavorite $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddFavorite execution.
     *
     * @return Flickr_Favorites_AddFavorite_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this AddFavorite execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Favorites_AddFavorite_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Favorites_AddFavorite_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddFavorite choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_AddFavorite_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddFavorite choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Favorites_AddFavorite_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddFavorite execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes a photo from a user's favorites list.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_Remove extends Temboo_Choreography
{
    /**
     * Removes a photo from a user's favorites list.
     *
     * @param Temboo_Session $session The session that owns this Remove choreography.
     * @return Flickr_Favorites_Remove New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Favorites/Remove/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Remove choreography.
     *
     * @param Flickr_Favorites_Remove_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_Remove_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_Remove_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Favorites_Remove_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Remove choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_Remove_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Favorites_Remove_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Remove choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_Remove_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Remove choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_Remove_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Remove input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Favorites_Remove_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Favorites_Remove_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Remove choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Favorites_Remove_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Remove choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Favorites_Remove_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Remove choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Favorites_Remove_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Remove choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Favorites_Remove_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PhotoId input for this Remove choreography.
     *
     * @param int $value (required, integer) The id of the photo to remove from the user's favorites.
     * @return Flickr_Favorites_Remove_Inputs For method chaining.
     */
    public function setPhotoId($value)
    {
        return $this->set('PhotoId', $value);
    }
}


/**
 * Execution object for the Remove choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_Remove_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Remove choreography.
     *
     * @param Temboo_Session $session The session that owns this Remove execution.
     * @param Flickr_Favorites_Remove $choreo The choregraphy object for this execution.
     * @param Flickr_Favorites_Remove_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_Remove_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_Remove_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Favorites_Remove $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Remove execution.
     *
     * @return Flickr_Favorites_Remove_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Remove execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Favorites_Remove_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Favorites_Remove_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Remove choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_Remove_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Remove choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Favorites_Remove_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Remove execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete a specified comment from a photo on Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_DeleteComment extends Temboo_Choreography
{
    /**
     * Delete a specified comment from a photo on Flickr.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment choreography.
     * @return Flickr_PhotoComments_DeleteComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/PhotoComments/DeleteComment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteComment choreography.
     *
     * @param Flickr_PhotoComments_DeleteComment_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_DeleteComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_PhotoComments_DeleteComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_DeleteComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_PhotoComments_DeleteComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteComment choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_DeleteComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_DeleteComment_Inputs New instance.
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
     * @return Flickr_PhotoComments_DeleteComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_PhotoComments_DeleteComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteComment choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_PhotoComments_DeleteComment_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this DeleteComment choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_PhotoComments_DeleteComment_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteComment choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_PhotoComments_DeleteComment_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteComment choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_PhotoComments_DeleteComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CommentId input for this DeleteComment choreography.
     *
     * @param string $value (required, string) The unique id of the comment that you want to delete
     * @return Flickr_PhotoComments_DeleteComment_Inputs For method chaining.
     */
    public function setCommentId($value)
    {
        return $this->set('CommentId', $value);
    }
}


/**
 * Execution object for the DeleteComment choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_DeleteComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteComment choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment execution.
     * @param Flickr_PhotoComments_DeleteComment $choreo The choregraphy object for this execution.
     * @param Flickr_PhotoComments_DeleteComment_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_DeleteComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_PhotoComments_DeleteComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteComment execution.
     *
     * @return Flickr_PhotoComments_DeleteComment_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
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
     * @return Flickr_PhotoComments_DeleteComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_PhotoComments_DeleteComment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteComment choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_DeleteComment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteComment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_PhotoComments_DeleteComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteComment execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of the user's favorite photos.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetList extends Temboo_Choreography
{
    /**
     * Returns a list of the user's favorite photos.
     *
     * @param Temboo_Session $session The session that owns this GetList choreography.
     * @return Flickr_Favorites_GetList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Favorites/GetList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetList choreography.
     *
     * @param Flickr_Favorites_GetList_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_GetList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Favorites_GetList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_GetList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Favorites_GetList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetList choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_GetList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Favorites_GetList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Favorites_GetList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetList choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Favorites_GetList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetList choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Favorites_GetList_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetList choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Favorites_GetList_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetList choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Favorites_GetList_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Extras input for this GetList choreography.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to fetch for each returned record. See Choreo documentation for accepted values.
     * @return Flickr_Favorites_GetList_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the MaxFaveDate input for this GetList choreography.
     *
     * @param string $value (optional, date) Maximum date that a photo was favorited on. The date should be in the form of a unix timestamp.
     * @return Flickr_Favorites_GetList_Inputs For method chaining.
     */
    public function setMaxFaveDate($value)
    {
        return $this->set('MaxFaveDate', $value);
    }

    /**
     * Set the value for the MinFaveDate input for this GetList choreography.
     *
     * @param string $value (optional, date) Minimum date that a photo was favorited on. The date should be in the form of a unix timestamp.
     * @return Flickr_Favorites_GetList_Inputs For method chaining.
     */
    public function setMinFaveDate($value)
    {
        return $this->set('MinFaveDate', $value);
    }

    /**
     * Set the value for the Page input for this GetList choreography.
     *
     * @param int $value (optional, integer) The page of results to return. Used for paging through many results.
     * @return Flickr_Favorites_GetList_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this GetList choreography.
     *
     * @param int $value (optional, integer) The number of photos to return per page. Defaults to 100.
     * @return Flickr_Favorites_GetList_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the UserId input for this GetList choreography.
     *
     * @param string $value (required, string) The NSID of the user to fetch the favorites list for. If this argument is omitted, the favorites list for the calling user is returned.
     * @return Flickr_Favorites_GetList_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetList choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetList choreography.
     *
     * @param Temboo_Session $session The session that owns this GetList execution.
     * @param Flickr_Favorites_GetList $choreo The choregraphy object for this execution.
     * @param Flickr_Favorites_GetList_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_GetList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Favorites_GetList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetList execution.
     *
     * @return Flickr_Favorites_GetList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Favorites_GetList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Favorites_GetList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetList choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Favorites_GetList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetList execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve public photos that have been recently uploaded to Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetRecentPhotos extends Temboo_Choreography
{
    /**
     * Retrieve public photos that have been recently uploaded to Flickr.
     *
     * @param Temboo_Session $session The session that owns this GetRecentPhotos choreography.
     * @return Flickr_Photos_GetRecentPhotos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/GetRecentPhotos/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRecentPhotos choreography.
     *
     * @param Flickr_Photos_GetRecentPhotos_Inputs|array $inputs (optional) Inputs as Flickr_Photos_GetRecentPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_GetRecentPhotos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_GetRecentPhotos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentPhotos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_GetRecentPhotos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_GetRecentPhotos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentPhotos choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetRecentPhotos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRecentPhotos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_GetRecentPhotos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentPhotos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_GetRecentPhotos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_GetRecentPhotos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRecentPhotos choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_GetRecentPhotos_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Extras input for this GetRecentPhotos choreography.
     *
     * @param string $value (optional, string) A comma-separated list returning additional photo information such as: license, description, date_upload, date_taken.  Additional options are listed on this method's API doc page.
     * @return Flickr_Photos_GetRecentPhotos_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the Page input for this GetRecentPhotos choreography.
     *
     * @param int $value (optional, integer) Specify the page of photos that is to be returned.  If unspecified, the first page is returned.
     * @return Flickr_Photos_GetRecentPhotos_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this GetRecentPhotos choreography.
     *
     * @param int $value (optional, integer) Specify how many photos to display per page. Default is set to: 100. The mamimum allowed value is: 500.
     * @return Flickr_Photos_GetRecentPhotos_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }
}


/**
 * Execution object for the GetRecentPhotos choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetRecentPhotos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentPhotos choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRecentPhotos execution.
     * @param Flickr_Photos_GetRecentPhotos $choreo The choregraphy object for this execution.
     * @param Flickr_Photos_GetRecentPhotos_Inputs|array $inputs (optional) Inputs as Flickr_Photos_GetRecentPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_GetRecentPhotos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_GetRecentPhotos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentPhotos execution.
     *
     * @return Flickr_Photos_GetRecentPhotos_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetRecentPhotos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_GetRecentPhotos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_GetRecentPhotos_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRecentPhotos choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetRecentPhotos_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRecentPhotos choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_GetRecentPhotos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRecentPhotos execution.
     *
     * @return string (xml) The response in XML from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Return a list of the user's photos for a specified location.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_PhotosForLocation extends Temboo_Choreography
{
    /**
     * Return a list of the user's photos for a specified location.
     *
     * @param Temboo_Session $session The session that owns this PhotosForLocation choreography.
     * @return Flickr_Geo_PhotosForLocation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Geo/PhotosForLocation/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this PhotosForLocation choreography.
     *
     * @param Flickr_Geo_PhotosForLocation_Inputs|array $inputs (optional) Inputs as Flickr_Geo_PhotosForLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Geo_PhotosForLocation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Geo_PhotosForLocation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PhotosForLocation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Geo_PhotosForLocation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Geo_PhotosForLocation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PhotosForLocation choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_PhotosForLocation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the PhotosForLocation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Geo_PhotosForLocation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PhotosForLocation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Geo_PhotosForLocation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Geo_PhotosForLocation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PhotosForLocation choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Geo_PhotosForLocation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this PhotosForLocation choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Geo_PhotosForLocation_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this PhotosForLocation choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Geo_PhotosForLocation_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this PhotosForLocation choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Geo_PhotosForLocation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Accuracy input for this PhotosForLocation choreography.
     *
     * @param int $value (optional, integer) Recorded accuracy level of the location information. Current range is 1-16. Defaults to 16 if not specified.
     * @return Flickr_Geo_PhotosForLocation_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Extras input for this PhotosForLocation choreography.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to retrieve for each returned record. See Choreo documentation for accepted values.
     * @return Flickr_Geo_PhotosForLocation_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the Latitude input for this PhotosForLocation choreography.
     *
     * @param float $value (required, decimal) The latitude whose valid range is -90 to 90. Anything more than 6 decimal places will be truncated.
     * @return Flickr_Geo_PhotosForLocation_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this PhotosForLocation choreography.
     *
     * @param float $value (required, decimal) The longitude whose valid range is -180 to 180. Anything more than 6 decimal places will be truncated.
     * @return Flickr_Geo_PhotosForLocation_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Page input for this PhotosForLocation choreography.
     *
     * @param int $value (optional, integer) The page of results to return. Used for paging through many results. Defaults to 1.
     * @return Flickr_Geo_PhotosForLocation_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this PhotosForLocation choreography.
     *
     * @param int $value (optional, integer) Number of photos to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
     * @return Flickr_Geo_PhotosForLocation_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }
}


/**
 * Execution object for the PhotosForLocation choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_PhotosForLocation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PhotosForLocation choreography.
     *
     * @param Temboo_Session $session The session that owns this PhotosForLocation execution.
     * @param Flickr_Geo_PhotosForLocation $choreo The choregraphy object for this execution.
     * @param Flickr_Geo_PhotosForLocation_Inputs|array $inputs (optional) Inputs as Flickr_Geo_PhotosForLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Geo_PhotosForLocation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Geo_PhotosForLocation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PhotosForLocation execution.
     *
     * @return Flickr_Geo_PhotosForLocation_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this PhotosForLocation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Geo_PhotosForLocation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Geo_PhotosForLocation_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the PhotosForLocation choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_PhotosForLocation_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the PhotosForLocation choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Geo_PhotosForLocation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this PhotosForLocation execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the photosets belonging to the specified user.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_GetList extends Temboo_Choreography
{
    /**
     * Returns the photosets belonging to the specified user.
     *
     * @param Temboo_Session $session The session that owns this GetList choreography.
     * @return Flickr_PhotoSets_GetList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/PhotoSets/GetList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetList choreography.
     *
     * @param Flickr_PhotoSets_GetList_Inputs|array $inputs (optional) Inputs as Flickr_PhotoSets_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoSets_GetList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_PhotoSets_GetList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoSets_GetList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_PhotoSets_GetList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetList choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_GetList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoSets_GetList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_PhotoSets_GetList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_PhotoSets_GetList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetList choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_PhotoSets_GetList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetList choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_PhotoSets_GetList_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetList choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_PhotoSets_GetList_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetList choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_PhotoSets_GetList_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Page input for this GetList choreography.
     *
     * @param int $value (optional, integer) The page of results to get. Currently, if this is not provided, all sets are returned, but this behaviour may change in future.
     * @return Flickr_PhotoSets_GetList_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this GetList choreography.
     *
     * @param int $value (optional, integer) The number of sets to get per page. If paging is enabled, the maximum number of sets per page is 500.
     * @return Flickr_PhotoSets_GetList_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }
}


/**
 * Execution object for the GetList choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_GetList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetList choreography.
     *
     * @param Temboo_Session $session The session that owns this GetList execution.
     * @param Flickr_PhotoSets_GetList $choreo The choregraphy object for this execution.
     * @param Flickr_PhotoSets_GetList_Inputs|array $inputs (optional) Inputs as Flickr_PhotoSets_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoSets_GetList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_PhotoSets_GetList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetList execution.
     *
     * @return Flickr_PhotoSets_GetList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_PhotoSets_GetList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_PhotoSets_GetList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetList choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_GetList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_PhotoSets_GetList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetList execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Add a comment to a specified photo on Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_AddComment extends Temboo_Choreography
{
    /**
     * Add a comment to a specified photo on Flickr.
     *
     * @param Temboo_Session $session The session that owns this AddComment choreography.
     * @return Flickr_PhotoComments_AddComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/PhotoComments/AddComment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddComment choreography.
     *
     * @param Flickr_PhotoComments_AddComment_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_AddComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_AddComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_PhotoComments_AddComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_AddComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_PhotoComments_AddComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddComment choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_AddComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddComment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_AddComment_Inputs New instance.
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
     * @return Flickr_PhotoComments_AddComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_PhotoComments_AddComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AddComment choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_PhotoComments_AddComment_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this AddComment choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_PhotoComments_AddComment_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this AddComment choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_PhotoComments_AddComment_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this AddComment choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_PhotoComments_AddComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CommentText input for this AddComment choreography.
     *
     * @param string $value (required, string) The text of the comment you are adding.
     * @return Flickr_PhotoComments_AddComment_Inputs For method chaining.
     */
    public function setCommentText($value)
    {
        return $this->set('CommentText', $value);
    }

    /**
     * Set the value for the PhotoId input for this AddComment choreography.
     *
     * @param int $value (required, integer) The id of the photo to add a comment to
     * @return Flickr_PhotoComments_AddComment_Inputs For method chaining.
     */
    public function setPhotoId($value)
    {
        return $this->set('PhotoId', $value);
    }
}


/**
 * Execution object for the AddComment choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_AddComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddComment choreography.
     *
     * @param Temboo_Session $session The session that owns this AddComment execution.
     * @param Flickr_PhotoComments_AddComment $choreo The choregraphy object for this execution.
     * @param Flickr_PhotoComments_AddComment_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_AddComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_AddComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_PhotoComments_AddComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddComment execution.
     *
     * @return Flickr_PhotoComments_AddComment_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
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
     * @return Flickr_PhotoComments_AddComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_PhotoComments_AddComment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddComment choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_AddComment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddComment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_PhotoComments_AddComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddComment execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of favorite public photos for the given user.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetPublicList extends Temboo_Choreography
{
    /**
     * Returns a list of favorite public photos for the given user.
     *
     * @param Temboo_Session $session The session that owns this GetPublicList choreography.
     * @return Flickr_Favorites_GetPublicList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Favorites/GetPublicList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetPublicList choreography.
     *
     * @param Flickr_Favorites_GetPublicList_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_GetPublicList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_GetPublicList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Favorites_GetPublicList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPublicList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_GetPublicList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Favorites_GetPublicList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPublicList choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetPublicList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetPublicList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Favorites_GetPublicList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPublicList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Favorites_GetPublicList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Favorites_GetPublicList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPublicList choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Favorites_GetPublicList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Extras input for this GetPublicList choreography.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to fetch for each returned record. See Choreo documentation for accepted values.
     * @return Flickr_Favorites_GetPublicList_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the MaxFaveDate input for this GetPublicList choreography.
     *
     * @param string $value (optional, date) Maximum date that a photo was favorited on. The date should be in the form of a unix timestamp.
     * @return Flickr_Favorites_GetPublicList_Inputs For method chaining.
     */
    public function setMaxFaveDate($value)
    {
        return $this->set('MaxFaveDate', $value);
    }

    /**
     * Set the value for the MinFaveDate input for this GetPublicList choreography.
     *
     * @param string $value (optional, date) Minimum date that a photo was favorited on. The date should be in the form of a unix timestamp.
     * @return Flickr_Favorites_GetPublicList_Inputs For method chaining.
     */
    public function setMinFaveDate($value)
    {
        return $this->set('MinFaveDate', $value);
    }

    /**
     * Set the value for the Page input for this GetPublicList choreography.
     *
     * @param int $value (optional, integer) The page of results to return. Used for paging through many results.
     * @return Flickr_Favorites_GetPublicList_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this GetPublicList choreography.
     *
     * @param int $value (optional, integer) The number of photos to return per page. Defaults to 100.
     * @return Flickr_Favorites_GetPublicList_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the UserId input for this GetPublicList choreography.
     *
     * @param string $value (required, string) The user to fetch the favorites list for.
     * @return Flickr_Favorites_GetPublicList_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetPublicList choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetPublicList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPublicList choreography.
     *
     * @param Temboo_Session $session The session that owns this GetPublicList execution.
     * @param Flickr_Favorites_GetPublicList $choreo The choregraphy object for this execution.
     * @param Flickr_Favorites_GetPublicList_Inputs|array $inputs (optional) Inputs as Flickr_Favorites_GetPublicList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Favorites_GetPublicList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Favorites_GetPublicList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPublicList execution.
     *
     * @return Flickr_Favorites_GetPublicList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetPublicList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Favorites_GetPublicList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Favorites_GetPublicList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetPublicList choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Favorites_GetPublicList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetPublicList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Favorites_GetPublicList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetPublicList execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Uploads a photo to Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_UploadPhoto extends Temboo_Choreography
{
    /**
     * Uploads a photo to Flickr.
     *
     * @param Temboo_Session $session The session that owns this UploadPhoto choreography.
     * @return Flickr_Photos_UploadPhoto New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/UploadPhoto/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UploadPhoto choreography.
     *
     * @param Flickr_Photos_UploadPhoto_Inputs|array $inputs (optional) Inputs as Flickr_Photos_UploadPhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_UploadPhoto_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_UploadPhoto_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadPhoto choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_UploadPhoto_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_UploadPhoto_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadPhoto choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_UploadPhoto_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UploadPhoto choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_UploadPhoto_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadPhoto input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ImageFileContents input for this UploadPhoto choreography.
     *
     * @param string $value (conditional, string) The base-64 encoded file contents to upload. Required unless using the VaultFile input alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setImageFileContents($value)
    {
        return $this->set('ImageFileContents', $value);
    }

    /**
     * Set the value for the APIKey input for this UploadPhoto choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this UploadPhoto choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UploadPhoto choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UploadPhoto choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ContentType input for this UploadPhoto choreography.
     *
     * @param int $value (optional, integer) The type of content you are uploading. Set to 1 for Photo, 2 for Screenshot, or 3 for Other. Defaults to 1.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the Description input for this UploadPhoto choreography.
     *
     * @param string $value (optional, string) A description for the photo.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Hidden input for this UploadPhoto choreography.
     *
     * @param int $value (optional, integer) Set to 1 to allow photos to appear in global search results, 2 to be hidden from public searches. Defaults to 2.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setHidden($value)
    {
        return $this->set('Hidden', $value);
    }

    /**
     * Set the value for the IsFamily input for this UploadPhoto choreography.
     *
     * @param bool $value (optional, boolean) Set to 0 for no, 1 for yes. Specifies who can view the photo. Defaults to 0.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setIsFamily($value)
    {
        return $this->set('IsFamily', $value);
    }

    /**
     * Set the value for the IsFriend input for this UploadPhoto choreography.
     *
     * @param bool $value (optional, boolean) Set to 0 for no, 1 for yes. Specifies who can view the photo. Defaults to 0.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setIsFriend($value)
    {
        return $this->set('IsFriend', $value);
    }

    /**
     * Set the value for the IsPublic input for this UploadPhoto choreography.
     *
     * @param bool $value (optional, boolean) Set to 0 for no, 1 for yes. Specifies who can view the photo. Defaults to 0.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setIsPublic($value)
    {
        return $this->set('IsPublic', $value);
    }

    /**
     * Set the value for the SafetyLevel input for this UploadPhoto choreography.
     *
     * @param int $value (optional, integer) Set value to 1 for Safe, 2 for Moderate, or 3 for Restricted. Defaults to 1.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setSafetyLevel($value)
    {
        return $this->set('SafetyLevel', $value);
    }

    /**
     * Set the value for the Tags input for this UploadPhoto choreography.
     *
     * @param string $value (optional, string) A list of tags to apply to the photo. Separate multiple tags with spaces.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Title input for this UploadPhoto choreography.
     *
     * @param string $value (optional, string) The title of the photo you're uploading.
     * @return Flickr_Photos_UploadPhoto_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

}


/**
 * Execution object for the UploadPhoto choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_UploadPhoto_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadPhoto choreography.
     *
     * @param Temboo_Session $session The session that owns this UploadPhoto execution.
     * @param Flickr_Photos_UploadPhoto $choreo The choregraphy object for this execution.
     * @param Flickr_Photos_UploadPhoto_Inputs|array $inputs (optional) Inputs as Flickr_Photos_UploadPhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_UploadPhoto_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_UploadPhoto $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadPhoto execution.
     *
     * @return Flickr_Photos_UploadPhoto_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this UploadPhoto execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_UploadPhoto_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_UploadPhoto_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UploadPhoto choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_UploadPhoto_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UploadPhoto choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_UploadPhoto_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UploadPhoto execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves comments for a given photo on Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_GetComments extends Temboo_Choreography
{
    /**
     * Retrieves comments for a given photo on Flickr.
     *
     * @param Temboo_Session $session The session that owns this GetComments choreography.
     * @return Flickr_PhotoComments_GetComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/PhotoComments/GetComments/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetComments choreography.
     *
     * @param Flickr_PhotoComments_GetComments_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_GetComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_GetComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_PhotoComments_GetComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetComments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_GetComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_PhotoComments_GetComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetComments choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_GetComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetComments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoComments_GetComments_Inputs New instance.
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
     * @return Flickr_PhotoComments_GetComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_PhotoComments_GetComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetComments choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_PhotoComments_GetComments_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetComments choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_PhotoComments_GetComments_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetComments choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_PhotoComments_GetComments_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetComments choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_PhotoComments_GetComments_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxCommentDate input for this GetComments choreography.
     *
     * @param string $value (optional, date) The maximum date that a a comment was created. Should be formatted as a unix timestamp.
     * @return Flickr_PhotoComments_GetComments_Inputs For method chaining.
     */
    public function setMaxCommentDate($value)
    {
        return $this->set('MaxCommentDate', $value);
    }

    /**
     * Set the value for the MinCommentDate input for this GetComments choreography.
     *
     * @param string $value (optional, date) The minimum date that a a comment was created. Should be formatted as a unix timestamp.
     * @return Flickr_PhotoComments_GetComments_Inputs For method chaining.
     */
    public function setMinCommentDate($value)
    {
        return $this->set('MinCommentDate', $value);
    }

    /**
     * Set the value for the PhotoId input for this GetComments choreography.
     *
     * @param int $value (required, integer) The id of the photo to retrieve comments for.
     * @return Flickr_PhotoComments_GetComments_Inputs For method chaining.
     */
    public function setPhotoId($value)
    {
        return $this->set('PhotoId', $value);
    }
}


/**
 * Execution object for the GetComments choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_GetComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetComments choreography.
     *
     * @param Temboo_Session $session The session that owns this GetComments execution.
     * @param Flickr_PhotoComments_GetComments $choreo The choregraphy object for this execution.
     * @param Flickr_PhotoComments_GetComments_Inputs|array $inputs (optional) Inputs as Flickr_PhotoComments_GetComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoComments_GetComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_PhotoComments_GetComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetComments execution.
     *
     * @return Flickr_PhotoComments_GetComments_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
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
     * @return Flickr_PhotoComments_GetComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_PhotoComments_GetComments_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetComments choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoComments_GetComments_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetComments choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_PhotoComments_GetComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetComments execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the popular tags for a given user (or the currently logged in user).
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_GetListUserPopular extends Temboo_Choreography
{
    /**
     * Retrieves the popular tags for a given user (or the currently logged in user).
     *
     * @param Temboo_Session $session The session that owns this GetListUserPopular choreography.
     * @return Flickr_Tags_GetListUserPopular New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Tags/GetListUserPopular/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetListUserPopular choreography.
     *
     * @param Flickr_Tags_GetListUserPopular_Inputs|array $inputs (optional) Inputs as Flickr_Tags_GetListUserPopular_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Tags_GetListUserPopular_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Tags_GetListUserPopular_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetListUserPopular choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Tags_GetListUserPopular_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Tags_GetListUserPopular_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetListUserPopular choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_GetListUserPopular_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetListUserPopular choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Tags_GetListUserPopular_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetListUserPopular input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Tags_GetListUserPopular_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Tags_GetListUserPopular_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetListUserPopular choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Tags_GetListUserPopular_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetListUserPopular choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Tags_GetListUserPopular_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetListUserPopular choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Tags_GetListUserPopular_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetListUserPopular choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Tags_GetListUserPopular_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Count input for this GetListUserPopular choreography.
     *
     * @param int $value (optional, integer) Number of popular tags to return. defaults to 10 when this argument is not present.
     * @return Flickr_Tags_GetListUserPopular_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the UserId input for this GetListUserPopular choreography.
     *
     * @param int $value (optional, integer) The NSID of the user to fetch the tag list for. If not provided, the authenticated user is assumed.
     * @return Flickr_Tags_GetListUserPopular_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetListUserPopular choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_GetListUserPopular_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetListUserPopular choreography.
     *
     * @param Temboo_Session $session The session that owns this GetListUserPopular execution.
     * @param Flickr_Tags_GetListUserPopular $choreo The choregraphy object for this execution.
     * @param Flickr_Tags_GetListUserPopular_Inputs|array $inputs (optional) Inputs as Flickr_Tags_GetListUserPopular_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Tags_GetListUserPopular_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Tags_GetListUserPopular $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetListUserPopular execution.
     *
     * @return Flickr_Tags_GetListUserPopular_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetListUserPopular execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Tags_GetListUserPopular_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Tags_GetListUserPopular_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetListUserPopular choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_GetListUserPopular_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetListUserPopular choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Tags_GetListUserPopular_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetListUserPopular execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a gallery list for a specfied user.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_GetGalleryList extends Temboo_Choreography
{
    /**
     * Get a gallery list for a specfied user.
     *
     * @param Temboo_Session $session The session that owns this GetGalleryList choreography.
     * @return Flickr_Galleries_GetGalleryList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Galleries/GetGalleryList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetGalleryList choreography.
     *
     * @param Flickr_Galleries_GetGalleryList_Inputs|array $inputs (optional) Inputs as Flickr_Galleries_GetGalleryList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Galleries_GetGalleryList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Galleries_GetGalleryList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetGalleryList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Galleries_GetGalleryList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Galleries_GetGalleryList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetGalleryList choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_GetGalleryList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetGalleryList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Galleries_GetGalleryList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetGalleryList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Galleries_GetGalleryList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Galleries_GetGalleryList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetGalleryList choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Galleries_GetGalleryList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the GalleriesPerPage input for this GetGalleryList choreography.
     *
     * @param int $value (optional, integer) Specify the number of galleries that are to be returned per page.  If null, defaults to 100 galleries returned.  Maximum is 500.
     * @return Flickr_Galleries_GetGalleryList_Inputs For method chaining.
     */
    public function setGalleriesPerPage($value)
    {
        return $this->set('GalleriesPerPage', $value);
    }

    /**
     * Set the value for the Page input for this GetGalleryList choreography.
     *
     * @param int $value (optional, integer) Enter the number of results pages to be returned.  Default is: 1.
     * @return Flickr_Galleries_GetGalleryList_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the UserID input for this GetGalleryList choreography.
     *
     * @param string $value (optional, string) Provide the NSID for the user whose gallery list(s) are to be retreived.
     * @return Flickr_Galleries_GetGalleryList_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetGalleryList choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_GetGalleryList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetGalleryList choreography.
     *
     * @param Temboo_Session $session The session that owns this GetGalleryList execution.
     * @param Flickr_Galleries_GetGalleryList $choreo The choregraphy object for this execution.
     * @param Flickr_Galleries_GetGalleryList_Inputs|array $inputs (optional) Inputs as Flickr_Galleries_GetGalleryList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Galleries_GetGalleryList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Galleries_GetGalleryList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetGalleryList execution.
     *
     * @return Flickr_Galleries_GetGalleryList_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetGalleryList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Galleries_GetGalleryList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Galleries_GetGalleryList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetGalleryList choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_GetGalleryList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetGalleryList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Galleries_GetGalleryList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetGalleryList execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of place IDs for a query string.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_Find extends Temboo_Choreography
{
    /**
     * Returns a list of place IDs for a query string.
     *
     * @param Temboo_Session $session The session that owns this Find choreography.
     * @return Flickr_Places_Find New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Places/Find/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Find choreography.
     *
     * @param Flickr_Places_Find_Inputs|array $inputs (optional) Inputs as Flickr_Places_Find_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Places_Find_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Places_Find_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Find choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Places_Find_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Places_Find_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Find choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_Find_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Find choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Places_Find_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Find input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Places_Find_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Places_Find_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Find choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Places_Find_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this Find choreography.
     *
     * @param string $value (conditional, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Places_Find_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Find choreography.
     *
     * @param string $value (conditional, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Places_Find_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Find choreography.
     *
     * @param string $value (conditional, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Places_Find_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Query input for this Find choreography.
     *
     * @param string $value (required, string) The query string to use for place ID lookups.
     * @return Flickr_Places_Find_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }
}


/**
 * Execution object for the Find choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_Find_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Find choreography.
     *
     * @param Temboo_Session $session The session that owns this Find execution.
     * @param Flickr_Places_Find $choreo The choregraphy object for this execution.
     * @param Flickr_Places_Find_Inputs|array $inputs (optional) Inputs as Flickr_Places_Find_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Places_Find_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Places_Find $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Find execution.
     *
     * @return Flickr_Places_Find_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Find execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Places_Find_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Places_Find_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Find choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Places_Find_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Find choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Places_Find_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Find execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the tag list for a given user (or the currently logged in user).
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_GetListUser extends Temboo_Choreography
{
    /**
     * Retrieves the tag list for a given user (or the currently logged in user).
     *
     * @param Temboo_Session $session The session that owns this GetListUser choreography.
     * @return Flickr_Tags_GetListUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Tags/GetListUser/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetListUser choreography.
     *
     * @param Flickr_Tags_GetListUser_Inputs|array $inputs (optional) Inputs as Flickr_Tags_GetListUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Tags_GetListUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Tags_GetListUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetListUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Tags_GetListUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Tags_GetListUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetListUser choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_GetListUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetListUser choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Tags_GetListUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetListUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Tags_GetListUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Tags_GetListUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetListUser choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Tags_GetListUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetListUser choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Tags_GetListUser_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetListUser choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Tags_GetListUser_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetListUser choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Tags_GetListUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the UserId input for this GetListUser choreography.
     *
     * @param int $value (optional, integer) The NSID of the user to fetch the tag list for. If not provided, the authenticated user is assumed.
     * @return Flickr_Tags_GetListUser_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetListUser choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_GetListUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetListUser choreography.
     *
     * @param Temboo_Session $session The session that owns this GetListUser execution.
     * @param Flickr_Tags_GetListUser $choreo The choregraphy object for this execution.
     * @param Flickr_Tags_GetListUser_Inputs|array $inputs (optional) Inputs as Flickr_Tags_GetListUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Tags_GetListUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Tags_GetListUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetListUser execution.
     *
     * @return Flickr_Tags_GetListUser_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetListUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Tags_GetListUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Tags_GetListUser_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetListUser choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_GetListUser_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetListUser choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Tags_GetListUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetListUser execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the list of photos in a set.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_GetPhotos extends Temboo_Choreography
{
    /**
     * Retrieves the list of photos in a set.
     *
     * @param Temboo_Session $session The session that owns this GetPhotos choreography.
     * @return Flickr_PhotoSets_GetPhotos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/PhotoSets/GetPhotos/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetPhotos choreography.
     *
     * @param Flickr_PhotoSets_GetPhotos_Inputs|array $inputs (optional) Inputs as Flickr_PhotoSets_GetPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoSets_GetPhotos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_PhotoSets_GetPhotos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPhotos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoSets_GetPhotos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_PhotoSets_GetPhotos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPhotos choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_GetPhotos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetPhotos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_PhotoSets_GetPhotos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPhotos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_PhotoSets_GetPhotos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_PhotoSets_GetPhotos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPhotos choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_PhotoSets_GetPhotos_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetPhotos choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_PhotoSets_GetPhotos_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetPhotos choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_PhotoSets_GetPhotos_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetPhotos choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_PhotoSets_GetPhotos_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Media input for this GetPhotos choreography.
     *
     * @param string $value (optional, string) Filter results by media type. Possible values are all (default), photos or videos
     * @return Flickr_PhotoSets_GetPhotos_Inputs For method chaining.
     */
    public function setMedia($value)
    {
        return $this->set('Media', $value);
    }

    /**
     * Set the value for the Page input for this GetPhotos choreography.
     *
     * @param int $value (optional, integer) The page of results to return. If this argument is omitted, it defaults to 1.
     * @return Flickr_PhotoSets_GetPhotos_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this GetPhotos choreography.
     *
     * @param int $value (optional, integer) The number of photos to return per page. Defaults to 500. The maximum allowed value is 500.
     * @return Flickr_PhotoSets_GetPhotos_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the PhotoSetID input for this GetPhotos choreography.
     *
     * @param int $value (required, integer) The ID of the photo set.
     * @return Flickr_PhotoSets_GetPhotos_Inputs For method chaining.
     */
    public function setPhotoSetID($value)
    {
        return $this->set('PhotoSetID', $value);
    }

    /**
     * Set the value for the PrivacyFilter input for this GetPhotos choreography.
     *
     * @param int $value (optional, integer) Valid values are: 1 (public photos), 2 (private photos visible to friends), 3 (private photos visible to family), 4 (private photos visible to friends and family), 5 (completely private photos).
     * @return Flickr_PhotoSets_GetPhotos_Inputs For method chaining.
     */
    public function setPrivacyFilter($value)
    {
        return $this->set('PrivacyFilter', $value);
    }
}


/**
 * Execution object for the GetPhotos choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_GetPhotos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPhotos choreography.
     *
     * @param Temboo_Session $session The session that owns this GetPhotos execution.
     * @param Flickr_PhotoSets_GetPhotos $choreo The choregraphy object for this execution.
     * @param Flickr_PhotoSets_GetPhotos_Inputs|array $inputs (optional) Inputs as Flickr_PhotoSets_GetPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_PhotoSets_GetPhotos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_PhotoSets_GetPhotos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPhotos execution.
     *
     * @return Flickr_PhotoSets_GetPhotos_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetPhotos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_PhotoSets_GetPhotos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_PhotoSets_GetPhotos_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetPhotos choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_PhotoSets_GetPhotos_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetPhotos choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_PhotoSets_GetPhotos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetPhotos execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the tag list for a given photo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_GetListPhoto extends Temboo_Choreography
{
    /**
     * Retrieves the tag list for a given photo.
     *
     * @param Temboo_Session $session The session that owns this GetListPhoto choreography.
     * @return Flickr_Tags_GetListPhoto New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Tags/GetListPhoto/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetListPhoto choreography.
     *
     * @param Flickr_Tags_GetListPhoto_Inputs|array $inputs (optional) Inputs as Flickr_Tags_GetListPhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Tags_GetListPhoto_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Tags_GetListPhoto_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetListPhoto choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Tags_GetListPhoto_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Tags_GetListPhoto_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetListPhoto choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_GetListPhoto_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetListPhoto choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Tags_GetListPhoto_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetListPhoto input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Tags_GetListPhoto_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Tags_GetListPhoto_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetListPhoto choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Tags_GetListPhoto_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetListPhoto choreography.
     *
     * @param string $value (conditional, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Tags_GetListPhoto_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetListPhoto choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Tags_GetListPhoto_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetListPhoto choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Tags_GetListPhoto_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PhotoId input for this GetListPhoto choreography.
     *
     * @param int $value (required, integer) The id of the photo to return tags for.
     * @return Flickr_Tags_GetListPhoto_Inputs For method chaining.
     */
    public function setPhotoId($value)
    {
        return $this->set('PhotoId', $value);
    }
}


/**
 * Execution object for the GetListPhoto choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_GetListPhoto_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetListPhoto choreography.
     *
     * @param Temboo_Session $session The session that owns this GetListPhoto execution.
     * @param Flickr_Tags_GetListPhoto $choreo The choregraphy object for this execution.
     * @param Flickr_Tags_GetListPhoto_Inputs|array $inputs (optional) Inputs as Flickr_Tags_GetListPhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Tags_GetListPhoto_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Tags_GetListPhoto $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetListPhoto execution.
     *
     * @return Flickr_Tags_GetListPhoto_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetListPhoto execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Tags_GetListPhoto_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Tags_GetListPhoto_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetListPhoto choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Tags_GetListPhoto_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetListPhoto choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Tags_GetListPhoto_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetListPhoto execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Add a comment to a specified photo on Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_CreateGallery extends Temboo_Choreography
{
    /**
     * Add a comment to a specified photo on Flickr.
     *
     * @param Temboo_Session $session The session that owns this CreateGallery choreography.
     * @return Flickr_Galleries_CreateGallery New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Galleries/CreateGallery/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateGallery choreography.
     *
     * @param Flickr_Galleries_CreateGallery_Inputs|array $inputs (optional) Inputs as Flickr_Galleries_CreateGallery_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Galleries_CreateGallery_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Galleries_CreateGallery_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateGallery choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Galleries_CreateGallery_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Galleries_CreateGallery_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateGallery choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_CreateGallery_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateGallery choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Galleries_CreateGallery_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateGallery input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Galleries_CreateGallery_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Galleries_CreateGallery_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateGallery choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Galleries_CreateGallery_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this CreateGallery choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Galleries_CreateGallery_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateGallery choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Galleries_CreateGallery_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateGallery choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Galleries_CreateGallery_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Description input for this CreateGallery choreography.
     *
     * @param string $value (required, string) The text of the comment you are adding.
     * @return Flickr_Galleries_CreateGallery_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the PrimaryPhotoID input for this CreateGallery choreography.
     *
     * @param int $value (required, integer) The id of the photo to add a comment to.
     * @return Flickr_Galleries_CreateGallery_Inputs For method chaining.
     */
    public function setPrimaryPhotoID($value)
    {
        return $this->set('PrimaryPhotoID', $value);
    }

    /**
     * Set the value for the Title input for this CreateGallery choreography.
     *
     * @param string $value (required, string) The name of the gallery.
     * @return Flickr_Galleries_CreateGallery_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }
}


/**
 * Execution object for the CreateGallery choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_CreateGallery_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateGallery choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateGallery execution.
     * @param Flickr_Galleries_CreateGallery $choreo The choregraphy object for this execution.
     * @param Flickr_Galleries_CreateGallery_Inputs|array $inputs (optional) Inputs as Flickr_Galleries_CreateGallery_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Galleries_CreateGallery_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Galleries_CreateGallery $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateGallery execution.
     *
     * @return Flickr_Galleries_CreateGallery_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this CreateGallery execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Galleries_CreateGallery_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Galleries_CreateGallery_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateGallery choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Galleries_CreateGallery_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateGallery choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Galleries_CreateGallery_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateGallery execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain a list of public photos for a given user.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetPublicPhotos extends Temboo_Choreography
{
    /**
     * Obtain a list of public photos for a given user.
     *
     * @param Temboo_Session $session The session that owns this GetPublicPhotos choreography.
     * @return Flickr_Photos_GetPublicPhotos New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/GetPublicPhotos/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetPublicPhotos choreography.
     *
     * @param Flickr_Photos_GetPublicPhotos_Inputs|array $inputs (optional) Inputs as Flickr_Photos_GetPublicPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_GetPublicPhotos_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_GetPublicPhotos_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPublicPhotos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_GetPublicPhotos_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_GetPublicPhotos_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPublicPhotos choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetPublicPhotos_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetPublicPhotos choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_GetPublicPhotos_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPublicPhotos input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_GetPublicPhotos_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_GetPublicPhotos_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPublicPhotos choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_GetPublicPhotos_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Extras input for this GetPublicPhotos choreography.
     *
     * @param string $value (optional, string) A comma-separated list returning additional photo information such as: license, description, date_upload, date_taken.  Additional options are listed on this method's API doc page.
     * @return Flickr_Photos_GetPublicPhotos_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the Page input for this GetPublicPhotos choreography.
     *
     * @param int $value (optional, integer) Specify the page of photos that is to be returned.  If unspecified, the first page is returned.
     * @return Flickr_Photos_GetPublicPhotos_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this GetPublicPhotos choreography.
     *
     * @param int $value (optional, integer) Specify how many photos to display per page. Default is set to: 100. The mamimum allowed value is: 500.
     * @return Flickr_Photos_GetPublicPhotos_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the SafeSearch input for this GetPublicPhotos choreography.
     *
     * @param int $value (optional, integer) Specify a safe search setting by entering: 1 (for safe), 2 (moderate), 3 (restricted).  Default is set to: 1 (safe).
     * @return Flickr_Photos_GetPublicPhotos_Inputs For method chaining.
     */
    public function setSafeSearch($value)
    {
        return $this->set('SafeSearch', $value);
    }

    /**
     * Set the value for the UserID input for this GetPublicPhotos choreography.
     *
     * @param string $value (required, string) Enter the NSID of the user whose public photos are being retrieved.
     * @return Flickr_Photos_GetPublicPhotos_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetPublicPhotos choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetPublicPhotos_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPublicPhotos choreography.
     *
     * @param Temboo_Session $session The session that owns this GetPublicPhotos execution.
     * @param Flickr_Photos_GetPublicPhotos $choreo The choregraphy object for this execution.
     * @param Flickr_Photos_GetPublicPhotos_Inputs|array $inputs (optional) Inputs as Flickr_Photos_GetPublicPhotos_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_GetPublicPhotos_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_GetPublicPhotos $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPublicPhotos execution.
     *
     * @return Flickr_Photos_GetPublicPhotos_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetPublicPhotos execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_GetPublicPhotos_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_GetPublicPhotos_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetPublicPhotos choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetPublicPhotos_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetPublicPhotos choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_GetPublicPhotos_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetPublicPhotos execution.
     *
     * @return string (xml) The response in XML from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sets the geo data (including latitude and longitude) for a specified photo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_SetLocation extends Temboo_Choreography
{
    /**
     * Sets the geo data (including latitude and longitude) for a specified photo.
     *
     * @param Temboo_Session $session The session that owns this SetLocation choreography.
     * @return Flickr_Geo_SetLocation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Geo/SetLocation/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SetLocation choreography.
     *
     * @param Flickr_Geo_SetLocation_Inputs|array $inputs (optional) Inputs as Flickr_Geo_SetLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Geo_SetLocation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Geo_SetLocation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SetLocation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Geo_SetLocation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Geo_SetLocation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SetLocation choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_SetLocation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SetLocation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Geo_SetLocation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SetLocation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SetLocation choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this SetLocation choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SetLocation choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SetLocation choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Accuracy input for this SetLocation choreography.
     *
     * @param int $value (optional, integer) Recorded accuracy level of the location information. Current range is 1-16. Defaults to 16 if not specified.
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Context input for this SetLocation choreography.
     *
     * @param string $value (optional, string) A numeric value representing the photo's location beyond latitude and longitude. For example, you can indicate that a photo was taken "indoors" or "outdoors". Set to 1 for indoors or 2 for outdoors.
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setContext($value)
    {
        return $this->set('Context', $value);
    }

    /**
     * Set the value for the Extras input for this SetLocation choreography.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to retrieve for each returned record. See Choreo documentation for accepted values.
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the Latitude input for this SetLocation choreography.
     *
     * @param float $value (required, decimal) The latitude whose valid range is -90 to 90. Anything more than 6 decimal places will be truncated.
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this SetLocation choreography.
     *
     * @param float $value (required, decimal) The longitude whose valid range is -180 to 180. Anything more than 6 decimal places will be truncated.
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Page input for this SetLocation choreography.
     *
     * @param int $value (optional, integer) The page of results to return. Used for paging through many results. Defaults to 1.
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this SetLocation choreography.
     *
     * @param int $value (optional, integer) Number of photos to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the PhotoID input for this SetLocation choreography.
     *
     * @param int $value (required, integer) The id of the photo to set location data for.
     * @return Flickr_Geo_SetLocation_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }
}


/**
 * Execution object for the SetLocation choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_SetLocation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SetLocation choreography.
     *
     * @param Temboo_Session $session The session that owns this SetLocation execution.
     * @param Flickr_Geo_SetLocation $choreo The choregraphy object for this execution.
     * @param Flickr_Geo_SetLocation_Inputs|array $inputs (optional) Inputs as Flickr_Geo_SetLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Geo_SetLocation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Geo_SetLocation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SetLocation execution.
     *
     * @return Flickr_Geo_SetLocation_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this SetLocation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Geo_SetLocation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Geo_SetLocation_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SetLocation choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_SetLocation_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SetLocation choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Geo_SetLocation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SetLocation execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of your photos which haven't been geo-tagged.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetWithoutGeoData extends Temboo_Choreography
{
    /**
     * Returns a list of your photos which haven't been geo-tagged.
     *
     * @param Temboo_Session $session The session that owns this GetWithoutGeoData choreography.
     * @return Flickr_Photos_GetWithoutGeoData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/GetWithoutGeoData/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetWithoutGeoData choreography.
     *
     * @param Flickr_Photos_GetWithoutGeoData_Inputs|array $inputs (optional) Inputs as Flickr_Photos_GetWithoutGeoData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_GetWithoutGeoData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_GetWithoutGeoData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWithoutGeoData choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_GetWithoutGeoData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWithoutGeoData choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetWithoutGeoData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetWithoutGeoData choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWithoutGeoData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetWithoutGeoData choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetWithoutGeoData choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetWithoutGeoData choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetWithoutGeoData choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Extras input for this GetWithoutGeoData choreography.
     *
     * @param string $value (optional, string) A comma-delimited list of extra information to retrieve for each returned record. See Choreo documentation for accepted values.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setExtras($value)
    {
        return $this->set('Extras', $value);
    }

    /**
     * Set the value for the MaxTakenDate input for this GetWithoutGeoData choreography.
     *
     * @param string $value (optional, date) Photos with an taken date less than or equal to this value will be returned. The date should be in the form of a mysql datetime.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setMaxTakenDate($value)
    {
        return $this->set('MaxTakenDate', $value);
    }

    /**
     * Set the value for the MaxUploadDate input for this GetWithoutGeoData choreography.
     *
     * @param string $value (optional, date) Photos with an upload date less than or equal to this value will be returned. The date should be in the form of a unix timestamp.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setMaxUploadDate($value)
    {
        return $this->set('MaxUploadDate', $value);
    }

    /**
     * Set the value for the Media input for this GetWithoutGeoData choreography.
     *
     * @param string $value (optional, string) Filter results by media type. Possible values are all (default), photos or videos.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setMedia($value)
    {
        return $this->set('Media', $value);
    }

    /**
     * Set the value for the MinTakenDate input for this GetWithoutGeoData choreography.
     *
     * @param string $value (optional, date) Photos with an taken date greater than or equal to this value will be returned. The date should be in the form of a mysql datetime.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setMinTakenDate($value)
    {
        return $this->set('MinTakenDate', $value);
    }

    /**
     * Set the value for the MinUploadDate input for this GetWithoutGeoData choreography.
     *
     * @param string $value (optional, date) Photos with an upload date greater than or equal to this value will be returned. The date should be in the form of a unix timestamp.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setMinUploadDate($value)
    {
        return $this->set('MinUploadDate', $value);
    }

    /**
     * Set the value for the Page input for this GetWithoutGeoData choreography.
     *
     * @param int $value (optional, integer) The page of results to return. Used for paging through many results. Defaults to 1.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PerPage input for this GetWithoutGeoData choreography.
     *
     * @param int $value (optional, integer) Number of photos to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the PrivacyFilter input for this GetWithoutGeoData choreography.
     *
     * @param int $value (optional, integer) Valid values are: 1 (public photos), 2 (private photos visible to friends), 3 (private photos visible to family), 4 (private photos visible to friends and family), 5 (completely private photos).
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setPrivacyFilter($value)
    {
        return $this->set('PrivacyFilter', $value);
    }

    /**
     * Set the value for the Sort input for this GetWithoutGeoData choreography.
     *
     * @param mixed $value (optional, any) The sort order. Deafults to date-posted-desc. Accepted values are: date-posted-asc, date-posted-desc, date-taken-asc, date-taken-desc, interestingness-desc, and interestingness-asc.
     * @return Flickr_Photos_GetWithoutGeoData_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }
}


/**
 * Execution object for the GetWithoutGeoData choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetWithoutGeoData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWithoutGeoData choreography.
     *
     * @param Temboo_Session $session The session that owns this GetWithoutGeoData execution.
     * @param Flickr_Photos_GetWithoutGeoData $choreo The choregraphy object for this execution.
     * @param Flickr_Photos_GetWithoutGeoData_Inputs|array $inputs (optional) Inputs as Flickr_Photos_GetWithoutGeoData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_GetWithoutGeoData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_GetWithoutGeoData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWithoutGeoData execution.
     *
     * @return Flickr_Photos_GetWithoutGeoData_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetWithoutGeoData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_GetWithoutGeoData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_GetWithoutGeoData_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetWithoutGeoData choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetWithoutGeoData_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetWithoutGeoData choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_GetWithoutGeoData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetWithoutGeoData execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete a photo from Flickr.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_DeletePhoto extends Temboo_Choreography
{
    /**
     * Delete a photo from Flickr.
     *
     * @param Temboo_Session $session The session that owns this DeletePhoto choreography.
     * @return Flickr_Photos_DeletePhoto New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/DeletePhoto/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeletePhoto choreography.
     *
     * @param Flickr_Photos_DeletePhoto_Inputs|array $inputs (optional) Inputs as Flickr_Photos_DeletePhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_DeletePhoto_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_DeletePhoto_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeletePhoto choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_DeletePhoto_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_DeletePhoto_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeletePhoto choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_DeletePhoto_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeletePhoto choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_DeletePhoto_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeletePhoto input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_DeletePhoto_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_DeletePhoto_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeletePhoto choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Photos_DeletePhoto_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this DeletePhoto choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Photos_DeletePhoto_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeletePhoto choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Photos_DeletePhoto_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeletePhoto choreography.
     *
     * @param string $value (optional, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Photos_DeletePhoto_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PhotoId input for this DeletePhoto choreography.
     *
     * @param int $value (required, integer) The id of the photo that you want to delete.
     * @return Flickr_Photos_DeletePhoto_Inputs For method chaining.
     */
    public function setPhotoId($value)
    {
        return $this->set('PhotoId', $value);
    }
}


/**
 * Execution object for the DeletePhoto choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_DeletePhoto_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeletePhoto choreography.
     *
     * @param Temboo_Session $session The session that owns this DeletePhoto execution.
     * @param Flickr_Photos_DeletePhoto $choreo The choregraphy object for this execution.
     * @param Flickr_Photos_DeletePhoto_Inputs|array $inputs (optional) Inputs as Flickr_Photos_DeletePhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_DeletePhoto_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_DeletePhoto $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeletePhoto execution.
     *
     * @return Flickr_Photos_DeletePhoto_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this DeletePhoto execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_DeletePhoto_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_DeletePhoto_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeletePhoto choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_DeletePhoto_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeletePhoto choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_DeletePhoto_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeletePhoto execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain a user's NSID by providing their email address.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_People_FindPeopleByEmail extends Temboo_Choreography
{
    /**
     * Obtain a user's NSID by providing their email address.
     *
     * @param Temboo_Session $session The session that owns this FindPeopleByEmail choreography.
     * @return Flickr_People_FindPeopleByEmail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/People/FindPeopleByEmail/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FindPeopleByEmail choreography.
     *
     * @param Flickr_People_FindPeopleByEmail_Inputs|array $inputs (optional) Inputs as Flickr_People_FindPeopleByEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_People_FindPeopleByEmail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_People_FindPeopleByEmail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindPeopleByEmail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_People_FindPeopleByEmail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_People_FindPeopleByEmail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindPeopleByEmail choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_People_FindPeopleByEmail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FindPeopleByEmail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_People_FindPeopleByEmail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindPeopleByEmail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_People_FindPeopleByEmail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_People_FindPeopleByEmail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindPeopleByEmail choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_People_FindPeopleByEmail_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FindEmail input for this FindPeopleByEmail choreography.
     *
     * @param string $value (required, string) Enter the email of the user being sought.
     * @return Flickr_People_FindPeopleByEmail_Inputs For method chaining.
     */
    public function setFindEmail($value)
    {
        return $this->set('FindEmail', $value);
    }
}


/**
 * Execution object for the FindPeopleByEmail choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_People_FindPeopleByEmail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindPeopleByEmail choreography.
     *
     * @param Temboo_Session $session The session that owns this FindPeopleByEmail execution.
     * @param Flickr_People_FindPeopleByEmail $choreo The choregraphy object for this execution.
     * @param Flickr_People_FindPeopleByEmail_Inputs|array $inputs (optional) Inputs as Flickr_People_FindPeopleByEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_People_FindPeopleByEmail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_People_FindPeopleByEmail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindPeopleByEmail execution.
     *
     * @return Flickr_People_FindPeopleByEmail_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FindPeopleByEmail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_People_FindPeopleByEmail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_People_FindPeopleByEmail_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FindPeopleByEmail choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_People_FindPeopleByEmail_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FindPeopleByEmail choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_People_FindPeopleByEmail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FindPeopleByEmail execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a photo from a constructed source URL and returns the file content as Base64 encoded data.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetBase64EncodedPhoto extends Temboo_Choreography
{
    /**
     * Retrieves a photo from a constructed source URL and returns the file content as Base64 encoded data.
     *
     * @param Temboo_Session $session The session that owns this GetBase64EncodedPhoto choreography.
     * @return Flickr_Photos_GetBase64EncodedPhoto New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Photos/GetBase64EncodedPhoto/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBase64EncodedPhoto choreography.
     *
     * @param Flickr_Photos_GetBase64EncodedPhoto_Inputs|array $inputs (optional) Inputs as Flickr_Photos_GetBase64EncodedPhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_GetBase64EncodedPhoto_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Photos_GetBase64EncodedPhoto_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBase64EncodedPhoto choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_GetBase64EncodedPhoto_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Photos_GetBase64EncodedPhoto_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBase64EncodedPhoto choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetBase64EncodedPhoto_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBase64EncodedPhoto choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Photos_GetBase64EncodedPhoto_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBase64EncodedPhoto input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Photos_GetBase64EncodedPhoto_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Photos_GetBase64EncodedPhoto_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FarmID input for this GetBase64EncodedPhoto choreography.
     *
     * @param int $value (required, integer) The farm id associated with the photo. This is returned by many API methods associated with photo details.
     * @return Flickr_Photos_GetBase64EncodedPhoto_Inputs For method chaining.
     */
    public function setFarmID($value)
    {
        return $this->set('FarmID', $value);
    }

    /**
     * Set the value for the ImageType input for this GetBase64EncodedPhoto choreography.
     *
     * @param string $value (optional, string) The image type. Valid values are: jpg, png, or gif. Defaults to "jpg".
     * @return Flickr_Photos_GetBase64EncodedPhoto_Inputs For method chaining.
     */
    public function setImageType($value)
    {
        return $this->set('ImageType', $value);
    }

    /**
     * Set the value for the PhotoID input for this GetBase64EncodedPhoto choreography.
     *
     * @param int $value (required, integer) The id of the photo you to download.
     * @return Flickr_Photos_GetBase64EncodedPhoto_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the Secret input for this GetBase64EncodedPhoto choreography.
     *
     * @param string $value (required, string) The secret associated with the photo. This is returned by many API methods associated with photo details.
     * @return Flickr_Photos_GetBase64EncodedPhoto_Inputs For method chaining.
     */
    public function setSecret($value)
    {
        return $this->set('Secret', $value);
    }

    /**
     * Set the value for the ServerID input for this GetBase64EncodedPhoto choreography.
     *
     * @param int $value (required, integer) The server id associated with the photo. This is returned by many API methods associated with photo details.
     * @return Flickr_Photos_GetBase64EncodedPhoto_Inputs For method chaining.
     */
    public function setServerID($value)
    {
        return $this->set('ServerID', $value);
    }
}


/**
 * Execution object for the GetBase64EncodedPhoto choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetBase64EncodedPhoto_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBase64EncodedPhoto choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBase64EncodedPhoto execution.
     * @param Flickr_Photos_GetBase64EncodedPhoto $choreo The choregraphy object for this execution.
     * @param Flickr_Photos_GetBase64EncodedPhoto_Inputs|array $inputs (optional) Inputs as Flickr_Photos_GetBase64EncodedPhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Photos_GetBase64EncodedPhoto_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Photos_GetBase64EncodedPhoto $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBase64EncodedPhoto execution.
     *
     * @return Flickr_Photos_GetBase64EncodedPhoto_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetBase64EncodedPhoto execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Photos_GetBase64EncodedPhoto_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Photos_GetBase64EncodedPhoto_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBase64EncodedPhoto choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Photos_GetBase64EncodedPhoto_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBase64EncodedPhoto choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Photos_GetBase64EncodedPhoto_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBase64EncodedPhoto execution.
     *
     * @return string (string) The Base64 encoded image content.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves geo data (including latitude and longitude coordinates) for a specified photo.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_GetLocation extends Temboo_Choreography
{
    /**
     * Retrieves geo data (including latitude and longitude coordinates) for a specified photo.
     *
     * @param Temboo_Session $session The session that owns this GetLocation choreography.
     * @return Flickr_Geo_GetLocation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Flickr/Geo/GetLocation/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetLocation choreography.
     *
     * @param Flickr_Geo_GetLocation_Inputs|array $inputs (optional) Inputs as Flickr_Geo_GetLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Geo_GetLocation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Flickr_Geo_GetLocation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLocation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Geo_GetLocation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Flickr_Geo_GetLocation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLocation choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_GetLocation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetLocation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Flickr_Geo_GetLocation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLocation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Flickr_Geo_GetLocation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Flickr_Geo_GetLocation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetLocation choreography.
     *
     * @param string $value (required, string) The API Key provided by Flickr (AKA the OAuth Consumer Key).
     * @return Flickr_Geo_GetLocation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this GetLocation choreography.
     *
     * @param string $value (required, string) The API Secret provided by Flickr (AKA the OAuth Consumer Secret).
     * @return Flickr_Geo_GetLocation_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetLocation choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Flickr_Geo_GetLocation_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetLocation choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Flickr_Geo_GetLocation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PhotoId input for this GetLocation choreography.
     *
     * @param int $value (required, integer) The id of the photo that you want to get the location for.
     * @return Flickr_Geo_GetLocation_Inputs For method chaining.
     */
    public function setPhotoId($value)
    {
        return $this->set('PhotoId', $value);
    }
}


/**
 * Execution object for the GetLocation choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_GetLocation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLocation choreography.
     *
     * @param Temboo_Session $session The session that owns this GetLocation execution.
     * @param Flickr_Geo_GetLocation $choreo The choregraphy object for this execution.
     * @param Flickr_Geo_GetLocation_Inputs|array $inputs (optional) Inputs as Flickr_Geo_GetLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Flickr_Geo_GetLocation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Flickr_Geo_GetLocation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLocation execution.
     *
     * @return Flickr_Geo_GetLocation_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetLocation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Flickr_Geo_GetLocation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Flickr_Geo_GetLocation_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetLocation choreography.
 *
 * @package Temboo
 * @subpackage Flickr
 */
class Flickr_Geo_GetLocation_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetLocation choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Flickr_Geo_GetLocation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetLocation execution.
     *
     * @return string (xml) The response from Flickr.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>