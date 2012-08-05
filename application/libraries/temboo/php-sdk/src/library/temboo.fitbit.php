<?php

/**
 * Temboo PHP SDK Fitbit classes
 *
 * Execute Choreographies from the Temboo Fitbit bundle.
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
 * @subpackage Fitbit
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Gets a list of a user's frequent activities.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFrequentActivities extends Temboo_Choreography
{
    /**
     * Gets a list of a user's frequent activities.
     *
     * @param Temboo_Session $session The session that owns this GetFrequentActivities choreography.
     * @return Fitbit_GetFrequentActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetFrequentActivities/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetFrequentActivities choreography.
     *
     * @param Fitbit_GetFrequentActivities_Inputs|array $inputs (optional) Inputs as Fitbit_GetFrequentActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetFrequentActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetFrequentActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFrequentActivities choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetFrequentActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetFrequentActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFrequentActivities choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFrequentActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetFrequentActivities choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetFrequentActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFrequentActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetFrequentActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetFrequentActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFrequentActivities choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetFrequentActivities_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFrequentActivities choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetFrequentActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFrequentActivities choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetFrequentActivities_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFrequentActivities choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetFrequentActivities_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Format input for this GetFrequentActivities choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetFrequentActivities_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this GetFrequentActivities choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetFrequentActivities_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetFrequentActivities choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFrequentActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFrequentActivities choreography.
     *
     * @param Temboo_Session $session The session that owns this GetFrequentActivities execution.
     * @param Fitbit_GetFrequentActivities $choreo The choregraphy object for this execution.
     * @param Fitbit_GetFrequentActivities_Inputs|array $inputs (optional) Inputs as Fitbit_GetFrequentActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetFrequentActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetFrequentActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFrequentActivities execution.
     *
     * @return Fitbit_GetFrequentActivities_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetFrequentActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetFrequentActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetFrequentActivities_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetFrequentActivities choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFrequentActivities_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetFrequentActivities choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetFrequentActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetFrequentActivities execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Log a new activity for a particular date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogActivity extends Temboo_Choreography
{
    /**
     * Log a new activity for a particular date.
     *
     * @param Temboo_Session $session The session that owns this LogActivity choreography.
     * @return Fitbit_LogActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/LogActivity/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this LogActivity choreography.
     *
     * @param Fitbit_LogActivity_Inputs|array $inputs (optional) Inputs as Fitbit_LogActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_LogActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_LogActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogActivity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_LogActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_LogActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogActivity choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the LogActivity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_LogActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogActivity choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogActivity choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityId input for this LogActivity choreography.
     *
     * @param int $value (required, integer) This can be the id of the activity, directory activity, or intensity level activity.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setActivityId($value)
    {
        return $this->set('ActivityId', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogActivity choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogActivity choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogActivity choreography.
     *
     * @param string $value (required, date) The date that corresponds with the new log entry (in the format yyyy-MM-dd).
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the DistanceUnit input for this LogActivity choreography.
     *
     * @param string $value (optional, string) Corresponds with the Distance parameter (i.e. Mile). See Choreo documentation for links to unit charts.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setDistanceUnit($value)
    {
        return $this->set('DistanceUnit', $value);
    }

    /**
     * Set the value for the Distance input for this LogActivity choreography.
     *
     * @param float $value (optional, decimal) The activity distance. Used when activityId corresponds to 'Running'  or 'Walking' for example.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the DurationMilliseconds input for this LogActivity choreography.
     *
     * @param int $value (required, integer) The duration of the activity in milliseconds.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setDurationMilliseconds($value)
    {
        return $this->set('DurationMilliseconds', $value);
    }

    /**
     * Set the value for the Format input for this LogActivity choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the StartTime input for this LogActivity choreography.
     *
     * @param string $value (required, string) The hour and minutes for the start of the activity formatted like HH:mm.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setStartTime($value)
    {
        return $this->set('StartTime', $value);
    }

    /**
     * Set the value for the UserId input for this LogActivity choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_LogActivity_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the LogActivity choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogActivity choreography.
     *
     * @param Temboo_Session $session The session that owns this LogActivity execution.
     * @param Fitbit_LogActivity $choreo The choregraphy object for this execution.
     * @param Fitbit_LogActivity_Inputs|array $inputs (optional) Inputs as Fitbit_LogActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_LogActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_LogActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogActivity execution.
     *
     * @return Fitbit_LogActivity_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this LogActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_LogActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_LogActivity_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the LogActivity choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogActivity_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the LogActivity choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_LogActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this LogActivity execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a specified activity to a user's favorite activities list.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_AddFavoriteActivity extends Temboo_Choreography
{
    /**
     * Adds a specified activity to a user's favorite activities list.
     *
     * @param Temboo_Session $session The session that owns this AddFavoriteActivity choreography.
     * @return Fitbit_AddFavoriteActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/AddFavoriteActivity/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddFavoriteActivity choreography.
     *
     * @param Fitbit_AddFavoriteActivity_Inputs|array $inputs (optional) Inputs as Fitbit_AddFavoriteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_AddFavoriteActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_AddFavoriteActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddFavoriteActivity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_AddFavoriteActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_AddFavoriteActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddFavoriteActivity choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_AddFavoriteActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddFavoriteActivity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_AddFavoriteActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddFavoriteActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_AddFavoriteActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this AddFavoriteActivity choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this AddFavoriteActivity choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityId input for this AddFavoriteActivity choreography.
     *
     * @param int $value (required, integer) The id of the activity you want to make a favorite.
     * @return Fitbit_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setActivityId($value)
    {
        return $this->set('ActivityId', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this AddFavoriteActivity choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this AddFavoriteActivity choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Format input for this AddFavoriteActivity choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this AddFavoriteActivity choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_AddFavoriteActivity_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the AddFavoriteActivity choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_AddFavoriteActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddFavoriteActivity choreography.
     *
     * @param Temboo_Session $session The session that owns this AddFavoriteActivity execution.
     * @param Fitbit_AddFavoriteActivity $choreo The choregraphy object for this execution.
     * @param Fitbit_AddFavoriteActivity_Inputs|array $inputs (optional) Inputs as Fitbit_AddFavoriteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_AddFavoriteActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_AddFavoriteActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddFavoriteActivity execution.
     *
     * @return Fitbit_AddFavoriteActivity_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this AddFavoriteActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_AddFavoriteActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_AddFavoriteActivity_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddFavoriteActivity choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_AddFavoriteActivity_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddFavoriteActivity choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_AddFavoriteActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddFavoriteActivity execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Log a new water entry for a particular date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogWater extends Temboo_Choreography
{
    /**
     * Log a new water entry for a particular date.
     *
     * @param Temboo_Session $session The session that owns this LogWater choreography.
     * @return Fitbit_LogWater New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/LogWater/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this LogWater choreography.
     *
     * @param Fitbit_LogWater_Inputs|array $inputs (optional) Inputs as Fitbit_LogWater_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_LogWater_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_LogWater_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogWater choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_LogWater_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_LogWater_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogWater choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogWater_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the LogWater choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_LogWater_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogWater input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_LogWater_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_LogWater_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this LogWater choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_LogWater_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AccessokenSecret input for this LogWater choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_LogWater_Inputs For method chaining.
     */
    public function setAccessokenSecret($value)
    {
        return $this->set('AccessokenSecret', $value);
    }

    /**
     * Set the value for the Amount input for this LogWater choreography.
     *
     * @param float $value (required, decimal) The amount of water consumed. Corresponds to the Unit input.
     * @return Fitbit_LogWater_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogWater choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_LogWater_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogWater choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_LogWater_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogWater choreography.
     *
     * @param string $value (required, date) The date that corresponds with the new log entry (in the format yyyy-MM-dd).
     * @return Fitbit_LogWater_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Format input for this LogWater choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_LogWater_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Unit input for this LogWater choreography.
     *
     * @param string $value (required, string) Unit of measurement for the water entry. Valid values: 'ml', 'fl oz', or 'cup'.
     * @return Fitbit_LogWater_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }

    /**
     * Set the value for the UserId input for this LogWater choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_LogWater_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the LogWater choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogWater_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogWater choreography.
     *
     * @param Temboo_Session $session The session that owns this LogWater execution.
     * @param Fitbit_LogWater $choreo The choregraphy object for this execution.
     * @param Fitbit_LogWater_Inputs|array $inputs (optional) Inputs as Fitbit_LogWater_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_LogWater_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_LogWater $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogWater execution.
     *
     * @return Fitbit_LogWater_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this LogWater execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_LogWater_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_LogWater_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the LogWater choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogWater_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the LogWater choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_LogWater_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this LogWater execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a user's profile data.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetUserInfo extends Temboo_Choreography
{
    /**
     * Gets a user's profile data.
     *
     * @param Temboo_Session $session The session that owns this GetUserInfo choreography.
     * @return Fitbit_GetUserInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetUserInfo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetUserInfo choreography.
     *
     * @param Fitbit_GetUserInfo_Inputs|array $inputs (optional) Inputs as Fitbit_GetUserInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetUserInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetUserInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUserInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetUserInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetUserInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUserInfo choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetUserInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetUserInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetUserInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUserInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetUserInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetUserInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetUserInfo choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetUserInfo_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetUserInfo choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetUserInfo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetUserInfo choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetUserInfo_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetUserInfo choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetUserInfo_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Format input for this GetUserInfo choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetUserInfo_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this GetUserInfo choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetUserInfo_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetUserInfo choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetUserInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUserInfo choreography.
     *
     * @param Temboo_Session $session The session that owns this GetUserInfo execution.
     * @param Fitbit_GetUserInfo $choreo The choregraphy object for this execution.
     * @param Fitbit_GetUserInfo_Inputs|array $inputs (optional) Inputs as Fitbit_GetUserInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetUserInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetUserInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUserInfo execution.
     *
     * @return Fitbit_GetUserInfo_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetUserInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetUserInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetUserInfo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetUserInfo choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetUserInfo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetUserInfo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetUserInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetUserInfo execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a specified food to a user's favorite food list.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_AddFavoriteFood extends Temboo_Choreography
{
    /**
     * Adds a specified food to a user's favorite food list.
     *
     * @param Temboo_Session $session The session that owns this AddFavoriteFood choreography.
     * @return Fitbit_AddFavoriteFood New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/AddFavoriteFood/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddFavoriteFood choreography.
     *
     * @param Fitbit_AddFavoriteFood_Inputs|array $inputs (optional) Inputs as Fitbit_AddFavoriteFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_AddFavoriteFood_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_AddFavoriteFood_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddFavoriteFood choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_AddFavoriteFood_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_AddFavoriteFood_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddFavoriteFood choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_AddFavoriteFood_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddFavoriteFood choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_AddFavoriteFood_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddFavoriteFood input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_AddFavoriteFood_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_AddFavoriteFood_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this AddFavoriteFood choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_AddFavoriteFood_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this AddFavoriteFood choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_AddFavoriteFood_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this AddFavoriteFood choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_AddFavoriteFood_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this AddFavoriteFood choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_AddFavoriteFood_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the FoodId input for this AddFavoriteFood choreography.
     *
     * @param int $value (required, integer) The id of the food you want to make a favorite.
     * @return Fitbit_AddFavoriteFood_Inputs For method chaining.
     */
    public function setFoodId($value)
    {
        return $this->set('FoodId', $value);
    }

    /**
     * Set the value for the Format input for this AddFavoriteFood choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_AddFavoriteFood_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this AddFavoriteFood choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_AddFavoriteFood_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the AddFavoriteFood choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_AddFavoriteFood_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddFavoriteFood choreography.
     *
     * @param Temboo_Session $session The session that owns this AddFavoriteFood execution.
     * @param Fitbit_AddFavoriteFood $choreo The choregraphy object for this execution.
     * @param Fitbit_AddFavoriteFood_Inputs|array $inputs (optional) Inputs as Fitbit_AddFavoriteFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_AddFavoriteFood_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_AddFavoriteFood $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddFavoriteFood execution.
     *
     * @return Fitbit_AddFavoriteFood_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this AddFavoriteFood execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_AddFavoriteFood_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_AddFavoriteFood_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddFavoriteFood choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_AddFavoriteFood_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddFavoriteFood choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_AddFavoriteFood_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddFavoriteFood execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Log a new food entry for a particular date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogFood extends Temboo_Choreography
{
    /**
     * Log a new food entry for a particular date.
     *
     * @param Temboo_Session $session The session that owns this LogFood choreography.
     * @return Fitbit_LogFood New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/LogFood/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this LogFood choreography.
     *
     * @param Fitbit_LogFood_Inputs|array $inputs (optional) Inputs as Fitbit_LogFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_LogFood_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_LogFood_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogFood choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_LogFood_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_LogFood_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogFood choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogFood_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the LogFood choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_LogFood_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogFood input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogFood choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogFood choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Amount input for this LogFood choreography.
     *
     * @param int $value (required, integer) The amount of food consumed formatted like X.XX. Note that this input corresponds with the UnitId input.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogFood choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogFood choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogFood choreography.
     *
     * @param string $value (required, date) The date that corresponds with the new log entry (in the format yyyy-MM-dd).
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Favorite input for this LogFood choreography.
     *
     * @param bool $value (optional, boolean) Set to 1 to add food to favorites after creating log entry. Defaults to 0 for false.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setFavorite($value)
    {
        return $this->set('Favorite', $value);
    }

    /**
     * Set the value for the FoodId input for this LogFood choreography.
     *
     * @param int $value (required, integer) The id of the food to create a log entry for.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setFoodId($value)
    {
        return $this->set('FoodId', $value);
    }

    /**
     * Set the value for the Format input for this LogFood choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the MealType input for this LogFood choreography.
     *
     * @param string $value (required, string) The type of meal. Valid values: Breakfast, Morning Snack, Lunch, Afternoon Snack, Dinner, Anytime.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setMealType($value)
    {
        return $this->set('MealType', $value);
    }

    /**
     * Set the value for the UnitId input for this LogFood choreography.
     *
     * @param int $value (required, integer) This id can be retrieved through other calls such as: Get Foods (Recent, Frequent, Favorite), Search Foods or Get Food Units.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setUnitId($value)
    {
        return $this->set('UnitId', $value);
    }

    /**
     * Set the value for the UserId input for this LogFood choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_LogFood_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the LogFood choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogFood_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogFood choreography.
     *
     * @param Temboo_Session $session The session that owns this LogFood execution.
     * @param Fitbit_LogFood $choreo The choregraphy object for this execution.
     * @param Fitbit_LogFood_Inputs|array $inputs (optional) Inputs as Fitbit_LogFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_LogFood_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_LogFood $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogFood execution.
     *
     * @return Fitbit_LogFood_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this LogFood execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_LogFood_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_LogFood_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the LogFood choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogFood_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the LogFood choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_LogFood_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this LogFood execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified water log entry.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteWaterLog extends Temboo_Choreography
{
    /**
     * Deletes a specified water log entry.
     *
     * @param Temboo_Session $session The session that owns this DeleteWaterLog choreography.
     * @return Fitbit_DeleteWaterLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/DeleteWaterLog/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteWaterLog choreography.
     *
     * @param Fitbit_DeleteWaterLog_Inputs|array $inputs (optional) Inputs as Fitbit_DeleteWaterLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_DeleteWaterLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_DeleteWaterLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteWaterLog choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_DeleteWaterLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_DeleteWaterLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteWaterLog choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteWaterLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteWaterLog choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_DeleteWaterLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteWaterLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_DeleteWaterLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_DeleteWaterLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteWaterLog choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_DeleteWaterLog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteWaterLog choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_DeleteWaterLog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteWaterLog choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_DeleteWaterLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteWaterLog choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_DeleteWaterLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Format input for this DeleteWaterLog choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_DeleteWaterLog_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this DeleteWaterLog choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_DeleteWaterLog_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }

    /**
     * Set the value for the WaterLogId input for this DeleteWaterLog choreography.
     *
     * @param int $value (required, integer) The id of the water log you want to delete. The Id is returned in the LogWater response.
     * @return Fitbit_DeleteWaterLog_Inputs For method chaining.
     */
    public function setWaterLogId($value)
    {
        return $this->set('WaterLogId', $value);
    }
}


/**
 * Execution object for the DeleteWaterLog choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteWaterLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteWaterLog choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteWaterLog execution.
     * @param Fitbit_DeleteWaterLog $choreo The choregraphy object for this execution.
     * @param Fitbit_DeleteWaterLog_Inputs|array $inputs (optional) Inputs as Fitbit_DeleteWaterLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_DeleteWaterLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_DeleteWaterLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteWaterLog execution.
     *
     * @return Fitbit_DeleteWaterLog_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this DeleteWaterLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_DeleteWaterLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_DeleteWaterLog_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteWaterLog choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteWaterLog_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteWaterLog choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_DeleteWaterLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteWaterLog execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a summary of a user's body measurements for a specified date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetBodyMeasurements extends Temboo_Choreography
{
    /**
     * Gets a summary of a user's body measurements for a specified date.
     *
     * @param Temboo_Session $session The session that owns this GetBodyMeasurements choreography.
     * @return Fitbit_GetBodyMeasurements New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetBodyMeasurements/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBodyMeasurements choreography.
     *
     * @param Fitbit_GetBodyMeasurements_Inputs|array $inputs (optional) Inputs as Fitbit_GetBodyMeasurements_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetBodyMeasurements_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetBodyMeasurements_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBodyMeasurements choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetBodyMeasurements_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetBodyMeasurements_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBodyMeasurements choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetBodyMeasurements_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBodyMeasurements choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetBodyMeasurements_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBodyMeasurements input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetBodyMeasurements_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetBodyMeasurements choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetBodyMeasurements choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetBodyMeasurements choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetBodyMeasurements choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetBodyMeasurements choreography.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd).
     * @return Fitbit_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Format input for this GetBodyMeasurements choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this GetBodyMeasurements choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetBodyMeasurements_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetBodyMeasurements choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetBodyMeasurements_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBodyMeasurements choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBodyMeasurements execution.
     * @param Fitbit_GetBodyMeasurements $choreo The choregraphy object for this execution.
     * @param Fitbit_GetBodyMeasurements_Inputs|array $inputs (optional) Inputs as Fitbit_GetBodyMeasurements_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetBodyMeasurements_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetBodyMeasurements $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBodyMeasurements execution.
     *
     * @return Fitbit_GetBodyMeasurements_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetBodyMeasurements execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetBodyMeasurements_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetBodyMeasurements_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBodyMeasurements choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetBodyMeasurements_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBodyMeasurements choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetBodyMeasurements_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBodyMeasurements execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a summary and list of a user's activities and activity log entries for a specified date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetActivities extends Temboo_Choreography
{
    /**
     * Gets a summary and list of a user's activities and activity log entries for a specified date.
     *
     * @param Temboo_Session $session The session that owns this GetActivities choreography.
     * @return Fitbit_GetActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetActivities/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetActivities choreography.
     *
     * @param Fitbit_GetActivities_Inputs|array $inputs (optional) Inputs as Fitbit_GetActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetActivities choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetActivities choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetActivities choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetActivities choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetActivities_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetActivities choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetActivities choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetActivities_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetActivities choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetActivities_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetActivities choreography.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd).
     * @return Fitbit_GetActivities_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Format input for this GetActivities choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetActivities_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this GetActivities choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetActivities_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetActivities choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetActivities choreography.
     *
     * @param Temboo_Session $session The session that owns this GetActivities execution.
     * @param Fitbit_GetActivities $choreo The choregraphy object for this execution.
     * @param Fitbit_GetActivities_Inputs|array $inputs (optional) Inputs as Fitbit_GetActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetActivities execution.
     *
     * @return Fitbit_GetActivities_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetActivities_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetActivities choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetActivities_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetActivities choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetActivities execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified food from a user's favorite foods list.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteFavoriteFood extends Temboo_Choreography
{
    /**
     * Deletes a specified food from a user's favorite foods list.
     *
     * @param Temboo_Session $session The session that owns this DeleteFavoriteFood choreography.
     * @return Fitbit_DeleteFavoriteFood New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/DeleteFavoriteFood/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteFavoriteFood choreography.
     *
     * @param Fitbit_DeleteFavoriteFood_Inputs|array $inputs (optional) Inputs as Fitbit_DeleteFavoriteFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_DeleteFavoriteFood_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_DeleteFavoriteFood_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFavoriteFood choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_DeleteFavoriteFood_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_DeleteFavoriteFood_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFavoriteFood choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteFavoriteFood_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteFavoriteFood choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_DeleteFavoriteFood_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFavoriteFood input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteFavoriteFood choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFavoriteFood choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteFavoriteFood choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteFavoriteFood choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the FoodId input for this DeleteFavoriteFood choreography.
     *
     * @param int $value (required, integer) The id of the food to delete from you favorites list.
     * @return Fitbit_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setFoodId($value)
    {
        return $this->set('FoodId', $value);
    }

    /**
     * Set the value for the Format input for this DeleteFavoriteFood choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this DeleteFavoriteFood choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_DeleteFavoriteFood_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the DeleteFavoriteFood choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteFavoriteFood_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFavoriteFood choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteFavoriteFood execution.
     * @param Fitbit_DeleteFavoriteFood $choreo The choregraphy object for this execution.
     * @param Fitbit_DeleteFavoriteFood_Inputs|array $inputs (optional) Inputs as Fitbit_DeleteFavoriteFood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_DeleteFavoriteFood_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_DeleteFavoriteFood $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFavoriteFood execution.
     *
     * @return Fitbit_DeleteFavoriteFood_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this DeleteFavoriteFood execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_DeleteFavoriteFood_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_DeleteFavoriteFood_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteFavoriteFood choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteFavoriteFood_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteFavoriteFood choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_DeleteFavoriteFood_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteFavoriteFood execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified activity log entry.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteActivityLog extends Temboo_Choreography
{
    /**
     * Deletes a specified activity log entry.
     *
     * @param Temboo_Session $session The session that owns this DeleteActivityLog choreography.
     * @return Fitbit_DeleteActivityLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/DeleteActivityLog/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteActivityLog choreography.
     *
     * @param Fitbit_DeleteActivityLog_Inputs|array $inputs (optional) Inputs as Fitbit_DeleteActivityLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_DeleteActivityLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_DeleteActivityLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteActivityLog choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_DeleteActivityLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_DeleteActivityLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteActivityLog choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteActivityLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteActivityLog choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_DeleteActivityLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteActivityLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_DeleteActivityLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_DeleteActivityLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteActivityLog choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_DeleteActivityLog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteActivityLog choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_DeleteActivityLog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityLogId input for this DeleteActivityLog choreography.
     *
     * @param int $value (required, integer) The id of the activity log you want to delete. The Id is returned in the LogActivity response.
     * @return Fitbit_DeleteActivityLog_Inputs For method chaining.
     */
    public function setActivityLogId($value)
    {
        return $this->set('ActivityLogId', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteActivityLog choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_DeleteActivityLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteActivityLog choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_DeleteActivityLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Format input for this DeleteActivityLog choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_DeleteActivityLog_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this DeleteActivityLog choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_DeleteActivityLog_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the DeleteActivityLog choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteActivityLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteActivityLog choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteActivityLog execution.
     * @param Fitbit_DeleteActivityLog $choreo The choregraphy object for this execution.
     * @param Fitbit_DeleteActivityLog_Inputs|array $inputs (optional) Inputs as Fitbit_DeleteActivityLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_DeleteActivityLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_DeleteActivityLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteActivityLog execution.
     *
     * @return Fitbit_DeleteActivityLog_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this DeleteActivityLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_DeleteActivityLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_DeleteActivityLog_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteActivityLog choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteActivityLog_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteActivityLog choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_DeleteActivityLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteActivityLog execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search public foods in the Fibit database and private user created foods by keyword search.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_SearchFoods extends Temboo_Choreography
{
    /**
     * Search public foods in the Fibit database and private user created foods by keyword search.
     *
     * @param Temboo_Session $session The session that owns this SearchFoods choreography.
     * @return Fitbit_SearchFoods New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/SearchFoods/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchFoods choreography.
     *
     * @param Fitbit_SearchFoods_Inputs|array $inputs (optional) Inputs as Fitbit_SearchFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_SearchFoods_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_SearchFoods_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchFoods choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_SearchFoods_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_SearchFoods_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_SearchFoods_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchFoods choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_SearchFoods_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchFoods input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_SearchFoods_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_SearchFoods_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SearchFoods choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_SearchFoods_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SearchFoods choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_SearchFoods_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SearchFoods choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_SearchFoods_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SearchFoods choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_SearchFoods_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Format input for this SearchFoods choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_SearchFoods_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Query input for this SearchFoods choreography.
     *
     * @param string $value (required, string) The search query (i.e. artichoke).
     * @return Fitbit_SearchFoods_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the UserId input for this SearchFoods choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_SearchFoods_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the SearchFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_SearchFoods_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchFoods choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchFoods execution.
     * @param Fitbit_SearchFoods $choreo The choregraphy object for this execution.
     * @param Fitbit_SearchFoods_Inputs|array $inputs (optional) Inputs as Fitbit_SearchFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_SearchFoods_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_SearchFoods $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchFoods execution.
     *
     * @return Fitbit_SearchFoods_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this SearchFoods execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_SearchFoods_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_SearchFoods_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_SearchFoods_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchFoods choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_SearchFoods_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchFoods execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a list of a user's favorite activities.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFavoriteActivities extends Temboo_Choreography
{
    /**
     * Gets a list of a user's favorite activities.
     *
     * @param Temboo_Session $session The session that owns this GetFavoriteActivities choreography.
     * @return Fitbit_GetFavoriteActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetFavoriteActivities/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetFavoriteActivities choreography.
     *
     * @param Fitbit_GetFavoriteActivities_Inputs|array $inputs (optional) Inputs as Fitbit_GetFavoriteActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetFavoriteActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetFavoriteActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFavoriteActivities choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetFavoriteActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetFavoriteActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFavoriteActivities choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFavoriteActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetFavoriteActivities choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetFavoriteActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFavoriteActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetFavoriteActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFavoriteActivities choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFavoriteActivities choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFavoriteActivities choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFavoriteActivities choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Format input for this GetFavoriteActivities choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this GetFavoriteActivities choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetFavoriteActivities_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetFavoriteActivities choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFavoriteActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFavoriteActivities choreography.
     *
     * @param Temboo_Session $session The session that owns this GetFavoriteActivities execution.
     * @param Fitbit_GetFavoriteActivities $choreo The choregraphy object for this execution.
     * @param Fitbit_GetFavoriteActivities_Inputs|array $inputs (optional) Inputs as Fitbit_GetFavoriteActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetFavoriteActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetFavoriteActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFavoriteActivities execution.
     *
     * @return Fitbit_GetFavoriteActivities_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetFavoriteActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetFavoriteActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetFavoriteActivities_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetFavoriteActivities choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFavoriteActivities_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetFavoriteActivities choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetFavoriteActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetFavoriteActivities execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified activity from a user's favorite activities list.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteFavoriteActivity extends Temboo_Choreography
{
    /**
     * Deletes a specified activity from a user's favorite activities list.
     *
     * @param Temboo_Session $session The session that owns this DeleteFavoriteActivity choreography.
     * @return Fitbit_DeleteFavoriteActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/DeleteFavoriteActivity/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteFavoriteActivity choreography.
     *
     * @param Fitbit_DeleteFavoriteActivity_Inputs|array $inputs (optional) Inputs as Fitbit_DeleteFavoriteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_DeleteFavoriteActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_DeleteFavoriteActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFavoriteActivity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_DeleteFavoriteActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_DeleteFavoriteActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFavoriteActivity choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteFavoriteActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteFavoriteActivity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_DeleteFavoriteActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFavoriteActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteFavoriteActivity choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFavoriteActivity choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityId input for this DeleteFavoriteActivity choreography.
     *
     * @param int $value (required, integer) The id of the activity you want to delete from your favorites list.
     * @return Fitbit_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setActivityId($value)
    {
        return $this->set('ActivityId', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteFavoriteActivity choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteFavoriteActivity choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Format input for this DeleteFavoriteActivity choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this DeleteFavoriteActivity choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_DeleteFavoriteActivity_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the DeleteFavoriteActivity choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteFavoriteActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFavoriteActivity choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteFavoriteActivity execution.
     * @param Fitbit_DeleteFavoriteActivity $choreo The choregraphy object for this execution.
     * @param Fitbit_DeleteFavoriteActivity_Inputs|array $inputs (optional) Inputs as Fitbit_DeleteFavoriteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_DeleteFavoriteActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_DeleteFavoriteActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFavoriteActivity execution.
     *
     * @return Fitbit_DeleteFavoriteActivity_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this DeleteFavoriteActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_DeleteFavoriteActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_DeleteFavoriteActivity_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteFavoriteActivity choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteFavoriteActivity_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteFavoriteActivity choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_DeleteFavoriteActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteFavoriteActivity execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a list of a user's frequent foods.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFrequentFoods extends Temboo_Choreography
{
    /**
     * Gets a list of a user's frequent foods.
     *
     * @param Temboo_Session $session The session that owns this GetFrequentFoods choreography.
     * @return Fitbit_GetFrequentFoods New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetFrequentFoods/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetFrequentFoods choreography.
     *
     * @param Fitbit_GetFrequentFoods_Inputs|array $inputs (optional) Inputs as Fitbit_GetFrequentFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetFrequentFoods_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetFrequentFoods_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFrequentFoods choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetFrequentFoods_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetFrequentFoods_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFrequentFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFrequentFoods_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetFrequentFoods choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetFrequentFoods_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFrequentFoods input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetFrequentFoods_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetFrequentFoods_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFrequentFoods choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetFrequentFoods_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFrequentFoods choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetFrequentFoods_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFrequentFoods choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetFrequentFoods_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFrequentFoods choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetFrequentFoods_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Format input for this GetFrequentFoods choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetFrequentFoods_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this GetFrequentFoods choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetFrequentFoods_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetFrequentFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFrequentFoods_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFrequentFoods choreography.
     *
     * @param Temboo_Session $session The session that owns this GetFrequentFoods execution.
     * @param Fitbit_GetFrequentFoods $choreo The choregraphy object for this execution.
     * @param Fitbit_GetFrequentFoods_Inputs|array $inputs (optional) Inputs as Fitbit_GetFrequentFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetFrequentFoods_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetFrequentFoods $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFrequentFoods execution.
     *
     * @return Fitbit_GetFrequentFoods_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetFrequentFoods execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetFrequentFoods_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetFrequentFoods_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetFrequentFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFrequentFoods_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetFrequentFoods choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetFrequentFoods_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetFrequentFoods execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets time series data for a given resource based on a date range period you specify.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetTimeSeriesByPeriod extends Temboo_Choreography
{
    /**
     * Gets time series data for a given resource based on a date range period you specify.
     *
     * @param Temboo_Session $session The session that owns this GetTimeSeriesByPeriod choreography.
     * @return Fitbit_GetTimeSeriesByPeriod New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetTimeSeriesByPeriod/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTimeSeriesByPeriod choreography.
     *
     * @param Fitbit_GetTimeSeriesByPeriod_Inputs|array $inputs (optional) Inputs as Fitbit_GetTimeSeriesByPeriod_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetTimeSeriesByPeriod_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetTimeSeriesByPeriod_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTimeSeriesByPeriod choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetTimeSeriesByPeriod_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTimeSeriesByPeriod choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetTimeSeriesByPeriod_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTimeSeriesByPeriod choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTimeSeriesByPeriod input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetTimeSeriesByPeriod choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetTimeSeriesByPeriod choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetTimeSeriesByPeriod choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetTimeSeriesByPeriod choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the EndDate input for this GetTimeSeriesByPeriod choreography.
     *
     * @param string $value (required, date) The end date of the period for the data you want to retrieve (in the format yyyy-MM-dd). You can also specify the value 'today'.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Format input for this GetTimeSeriesByPeriod choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Period input for this GetTimeSeriesByPeriod choreography.
     *
     * @param string $value (optional, string) The date range period. Valid values are: 1d, 7d, 30d, 1w, 1m, 3m, 6m, 1y, max. Defaults to 'max'.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setPeriod($value)
    {
        return $this->set('Period', $value);
    }

    /**
     * Set the value for the ResourcePath input for this GetTimeSeriesByPeriod choreography.
     *
     * @param string $value (optional, string) The resource path that you want to access (for example: activities/log/distance). See Choreo documentation for a full list of resource paths.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setResourcePath($value)
    {
        return $this->set('ResourcePath', $value);
    }

    /**
     * Set the value for the UserId input for this GetTimeSeriesByPeriod choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetTimeSeriesByPeriod_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetTimeSeriesByPeriod choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetTimeSeriesByPeriod_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTimeSeriesByPeriod choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTimeSeriesByPeriod execution.
     * @param Fitbit_GetTimeSeriesByPeriod $choreo The choregraphy object for this execution.
     * @param Fitbit_GetTimeSeriesByPeriod_Inputs|array $inputs (optional) Inputs as Fitbit_GetTimeSeriesByPeriod_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetTimeSeriesByPeriod_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetTimeSeriesByPeriod $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTimeSeriesByPeriod execution.
     *
     * @return Fitbit_GetTimeSeriesByPeriod_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetTimeSeriesByPeriod execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetTimeSeriesByPeriod_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetTimeSeriesByPeriod_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTimeSeriesByPeriod choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetTimeSeriesByPeriod_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTimeSeriesByPeriod choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetTimeSeriesByPeriod_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTimeSeriesByPeriod execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a list of a user's recent activities.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetRecentActivities extends Temboo_Choreography
{
    /**
     * Gets a list of a user's recent activities.
     *
     * @param Temboo_Session $session The session that owns this GetRecentActivities choreography.
     * @return Fitbit_GetRecentActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetRecentActivities/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRecentActivities choreography.
     *
     * @param Fitbit_GetRecentActivities_Inputs|array $inputs (optional) Inputs as Fitbit_GetRecentActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetRecentActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetRecentActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentActivities choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetRecentActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetRecentActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentActivities choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetRecentActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRecentActivities choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetRecentActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetRecentActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetRecentActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRecentActivities choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetRecentActivities_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRecentActivities choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetRecentActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetRecentActivities choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetRecentActivities_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetRecentActivities choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetRecentActivities_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Format input for this GetRecentActivities choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetRecentActivities_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this GetRecentActivities choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetRecentActivities_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetRecentActivities choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetRecentActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentActivities choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRecentActivities execution.
     * @param Fitbit_GetRecentActivities $choreo The choregraphy object for this execution.
     * @param Fitbit_GetRecentActivities_Inputs|array $inputs (optional) Inputs as Fitbit_GetRecentActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetRecentActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetRecentActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentActivities execution.
     *
     * @return Fitbit_GetRecentActivities_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetRecentActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetRecentActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetRecentActivities_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRecentActivities choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetRecentActivities_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRecentActivities choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetRecentActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRecentActivities execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a list of a user's favorite foods.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFavoriteFoods extends Temboo_Choreography
{
    /**
     * Gets a list of a user's favorite foods.
     *
     * @param Temboo_Session $session The session that owns this GetFavoriteFoods choreography.
     * @return Fitbit_GetFavoriteFoods New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetFavoriteFoods/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetFavoriteFoods choreography.
     *
     * @param Fitbit_GetFavoriteFoods_Inputs|array $inputs (optional) Inputs as Fitbit_GetFavoriteFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetFavoriteFoods_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetFavoriteFoods_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFavoriteFoods choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetFavoriteFoods_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetFavoriteFoods_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFavoriteFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFavoriteFoods_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetFavoriteFoods choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetFavoriteFoods_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFavoriteFoods input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetFavoriteFoods_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFavoriteFoods choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFavoriteFoods choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFavoriteFoods choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFavoriteFoods choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Format input for this GetFavoriteFoods choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this GetFavoriteFoods choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetFavoriteFoods_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetFavoriteFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFavoriteFoods_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFavoriteFoods choreography.
     *
     * @param Temboo_Session $session The session that owns this GetFavoriteFoods execution.
     * @param Fitbit_GetFavoriteFoods $choreo The choregraphy object for this execution.
     * @param Fitbit_GetFavoriteFoods_Inputs|array $inputs (optional) Inputs as Fitbit_GetFavoriteFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetFavoriteFoods_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetFavoriteFoods $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFavoriteFoods execution.
     *
     * @return Fitbit_GetFavoriteFoods_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetFavoriteFoods execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetFavoriteFoods_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetFavoriteFoods_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetFavoriteFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFavoriteFoods_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetFavoriteFoods choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetFavoriteFoods_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetFavoriteFoods execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a list of a user's recent foods.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetRecentFoods extends Temboo_Choreography
{
    /**
     * Gets a list of a user's recent foods.
     *
     * @param Temboo_Session $session The session that owns this GetRecentFoods choreography.
     * @return Fitbit_GetRecentFoods New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetRecentFoods/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetRecentFoods choreography.
     *
     * @param Fitbit_GetRecentFoods_Inputs|array $inputs (optional) Inputs as Fitbit_GetRecentFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetRecentFoods_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetRecentFoods_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentFoods choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetRecentFoods_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetRecentFoods_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetRecentFoods_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetRecentFoods choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetRecentFoods_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentFoods input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetRecentFoods_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetRecentFoods_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRecentFoods choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetRecentFoods_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRecentFoods choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetRecentFoods_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetRecentFoods choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetRecentFoods_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetRecentFoods choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetRecentFoods_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Format input for this GetRecentFoods choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetRecentFoods_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this GetRecentFoods choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetRecentFoods_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetRecentFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetRecentFoods_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentFoods choreography.
     *
     * @param Temboo_Session $session The session that owns this GetRecentFoods execution.
     * @param Fitbit_GetRecentFoods $choreo The choregraphy object for this execution.
     * @param Fitbit_GetRecentFoods_Inputs|array $inputs (optional) Inputs as Fitbit_GetRecentFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetRecentFoods_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetRecentFoods $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentFoods execution.
     *
     * @return Fitbit_GetRecentFoods_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetRecentFoods execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetRecentFoods_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetRecentFoods_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetRecentFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetRecentFoods_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetRecentFoods choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetRecentFoods_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetRecentFoods execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Log a new weight for a particular date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogBodyMeasurements extends Temboo_Choreography
{
    /**
     * Log a new weight for a particular date.
     *
     * @param Temboo_Session $session The session that owns this LogBodyMeasurements choreography.
     * @return Fitbit_LogBodyMeasurements New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/LogBodyMeasurements/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this LogBodyMeasurements choreography.
     *
     * @param Fitbit_LogBodyMeasurements_Inputs|array $inputs (optional) Inputs as Fitbit_LogBodyMeasurements_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_LogBodyMeasurements_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_LogBodyMeasurements_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LogBodyMeasurements choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_LogBodyMeasurements_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_LogBodyMeasurements_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LogBodyMeasurements choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogBodyMeasurements_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the LogBodyMeasurements choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_LogBodyMeasurements_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LogBodyMeasurements input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_LogBodyMeasurements_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this LogBodyMeasurements choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this LogBodyMeasurements choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this LogBodyMeasurements choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this LogBodyMeasurements choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this LogBodyMeasurements choreography.
     *
     * @param string $value (required, date) The date that corresponds with the new log entry (in the format yyyy-MM-dd).
     * @return Fitbit_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Format input for this LogBodyMeasurements choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this LogBodyMeasurements choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }

    /**
     * Set the value for the Weight input for this LogBodyMeasurements choreography.
     *
     * @param float $value (required, decimal) A new value (in pounds) to log for weight. In the format of X.XX.
     * @return Fitbit_LogBodyMeasurements_Inputs For method chaining.
     */
    public function setWeight($value)
    {
        return $this->set('Weight', $value);
    }
}


/**
 * Execution object for the LogBodyMeasurements choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogBodyMeasurements_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LogBodyMeasurements choreography.
     *
     * @param Temboo_Session $session The session that owns this LogBodyMeasurements execution.
     * @param Fitbit_LogBodyMeasurements $choreo The choregraphy object for this execution.
     * @param Fitbit_LogBodyMeasurements_Inputs|array $inputs (optional) Inputs as Fitbit_LogBodyMeasurements_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_LogBodyMeasurements_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_LogBodyMeasurements $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LogBodyMeasurements execution.
     *
     * @return Fitbit_LogBodyMeasurements_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this LogBodyMeasurements execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_LogBodyMeasurements_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_LogBodyMeasurements_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the LogBodyMeasurements choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_LogBodyMeasurements_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the LogBodyMeasurements choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_LogBodyMeasurements_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this LogBodyMeasurements execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets time series data for a given resource based on a date range you specify.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetTimeSeriesByDateRange extends Temboo_Choreography
{
    /**
     * Gets time series data for a given resource based on a date range you specify.
     *
     * @param Temboo_Session $session The session that owns this GetTimeSeriesByDateRange choreography.
     * @return Fitbit_GetTimeSeriesByDateRange New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetTimeSeriesByDateRange/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetTimeSeriesByDateRange choreography.
     *
     * @param Fitbit_GetTimeSeriesByDateRange_Inputs|array $inputs (optional) Inputs as Fitbit_GetTimeSeriesByDateRange_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetTimeSeriesByDateRange_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetTimeSeriesByDateRange_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTimeSeriesByDateRange choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetTimeSeriesByDateRange_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTimeSeriesByDateRange choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetTimeSeriesByDateRange_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetTimeSeriesByDateRange choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTimeSeriesByDateRange input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetTimeSeriesByDateRange choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetTimeSeriesByDateRange choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetTimeSeriesByDateRange choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetTimeSeriesByDateRange choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the EndDate input for this GetTimeSeriesByDateRange choreography.
     *
     * @param string $value (required, date) The end date of the date range for the data you want to retrieve (in the format yyyy-MM-dd). You can also specify the value 'today'.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Format input for this GetTimeSeriesByDateRange choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the ResourcePath input for this GetTimeSeriesByDateRange choreography.
     *
     * @param string $value (optional, string) The resource path that you want to access (for example: activities/log/distance). See Choreo documentation for a full list of resource paths.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setResourcePath($value)
    {
        return $this->set('ResourcePath', $value);
    }

    /**
     * Set the value for the StartDate input for this GetTimeSeriesByDateRange choreography.
     *
     * @param string $value (required, date) The start date of the date range for the data you want to retrieve (in the format yyyy-MM-dd). You can also specify the value 'today'.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the UserId input for this GetTimeSeriesByDateRange choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetTimeSeriesByDateRange_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetTimeSeriesByDateRange choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetTimeSeriesByDateRange_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTimeSeriesByDateRange choreography.
     *
     * @param Temboo_Session $session The session that owns this GetTimeSeriesByDateRange execution.
     * @param Fitbit_GetTimeSeriesByDateRange $choreo The choregraphy object for this execution.
     * @param Fitbit_GetTimeSeriesByDateRange_Inputs|array $inputs (optional) Inputs as Fitbit_GetTimeSeriesByDateRange_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetTimeSeriesByDateRange_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetTimeSeriesByDateRange $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTimeSeriesByDateRange execution.
     *
     * @return Fitbit_GetTimeSeriesByDateRange_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetTimeSeriesByDateRange execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetTimeSeriesByDateRange_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetTimeSeriesByDateRange_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetTimeSeriesByDateRange choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetTimeSeriesByDateRange_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetTimeSeriesByDateRange choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetTimeSeriesByDateRange_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetTimeSeriesByDateRange execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified food log entry.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteFoodLog extends Temboo_Choreography
{
    /**
     * Deletes a specified food log entry.
     *
     * @param Temboo_Session $session The session that owns this DeleteFoodLog choreography.
     * @return Fitbit_DeleteFoodLog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/DeleteFoodLog/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteFoodLog choreography.
     *
     * @param Fitbit_DeleteFoodLog_Inputs|array $inputs (optional) Inputs as Fitbit_DeleteFoodLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_DeleteFoodLog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_DeleteFoodLog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFoodLog choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_DeleteFoodLog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_DeleteFoodLog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFoodLog choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteFoodLog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteFoodLog choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_DeleteFoodLog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFoodLog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_DeleteFoodLog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_DeleteFoodLog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteFoodLog choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_DeleteFoodLog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFoodLog choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_DeleteFoodLog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteFoodLog choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_DeleteFoodLog_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteFoodLog choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_DeleteFoodLog_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the FoodLogId input for this DeleteFoodLog choreography.
     *
     * @param int $value (required, integer) The id of the food log you want to delete. The Id is returned in the LogFood response.
     * @return Fitbit_DeleteFoodLog_Inputs For method chaining.
     */
    public function setFoodLogId($value)
    {
        return $this->set('FoodLogId', $value);
    }

    /**
     * Set the value for the Format input for this DeleteFoodLog choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_DeleteFoodLog_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this DeleteFoodLog choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_DeleteFoodLog_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the DeleteFoodLog choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteFoodLog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFoodLog choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteFoodLog execution.
     * @param Fitbit_DeleteFoodLog $choreo The choregraphy object for this execution.
     * @param Fitbit_DeleteFoodLog_Inputs|array $inputs (optional) Inputs as Fitbit_DeleteFoodLog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_DeleteFoodLog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_DeleteFoodLog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFoodLog execution.
     *
     * @return Fitbit_DeleteFoodLog_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this DeleteFoodLog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_DeleteFoodLog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_DeleteFoodLog_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteFoodLog choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_DeleteFoodLog_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteFoodLog choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_DeleteFoodLog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteFoodLog execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a summary a list of a user's sleep log entries for a specified date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetSleep extends Temboo_Choreography
{
    /**
     * Gets a summary a list of a user's sleep log entries for a specified date.
     *
     * @param Temboo_Session $session The session that owns this GetSleep choreography.
     * @return Fitbit_GetSleep New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetSleep/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetSleep choreography.
     *
     * @param Fitbit_GetSleep_Inputs|array $inputs (optional) Inputs as Fitbit_GetSleep_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetSleep_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetSleep_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSleep choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetSleep_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetSleep_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSleep choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetSleep_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetSleep choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetSleep_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSleep input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetSleep_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetSleep_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetSleep choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetSleep_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetSleep choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetSleep_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetSleep choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetSleep_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetSleep choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetSleep_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetSleep choreography.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd).
     * @return Fitbit_GetSleep_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Format input for this GetSleep choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetSleep_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this GetSleep choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetSleep_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetSleep choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetSleep_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSleep choreography.
     *
     * @param Temboo_Session $session The session that owns this GetSleep execution.
     * @param Fitbit_GetSleep $choreo The choregraphy object for this execution.
     * @param Fitbit_GetSleep_Inputs|array $inputs (optional) Inputs as Fitbit_GetSleep_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetSleep_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetSleep $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSleep execution.
     *
     * @return Fitbit_GetSleep_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetSleep execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetSleep_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetSleep_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetSleep choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetSleep_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetSleep choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetSleep_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetSleep execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Gets a summary and list of a user's food log entries for a specified date.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFoods extends Temboo_Choreography
{
    /**
     * Gets a summary and list of a user's food log entries for a specified date.
     *
     * @param Temboo_Session $session The session that owns this GetFoods choreography.
     * @return Fitbit_GetFoods New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Fitbit/GetFoods/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetFoods choreography.
     *
     * @param Fitbit_GetFoods_Inputs|array $inputs (optional) Inputs as Fitbit_GetFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetFoods_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Fitbit_GetFoods_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFoods choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetFoods_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Fitbit_GetFoods_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFoods_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetFoods choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Fitbit_GetFoods_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFoods input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Fitbit_GetFoods_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Fitbit_GetFoods_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFoods choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Fitbit_GetFoods_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFoods choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Fitbit_GetFoods_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFoods choreography.
     *
     * @param string $value (required, string) The Consumer Key provided by Fitbit.
     * @return Fitbit_GetFoods_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFoods choreography.
     *
     * @param string $value (required, string) The Consumer Secret provided by Fitbit.
     * @return Fitbit_GetFoods_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Date input for this GetFoods choreography.
     *
     * @param string $value (required, date) The date that corresponds with the log entry you want to retrieve (in the format yyyy-MM-dd).
     * @return Fitbit_GetFoods_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Format input for this GetFoods choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in: xml or json. Defaults to xml.
     * @return Fitbit_GetFoods_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the UserId input for this GetFoods choreography.
     *
     * @param string $value (optional, string) The user's encoded id. Defaults to "-" (dash) which will return data for the user associated with the token credentials provided.
     * @return Fitbit_GetFoods_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the GetFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFoods_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFoods choreography.
     *
     * @param Temboo_Session $session The session that owns this GetFoods execution.
     * @param Fitbit_GetFoods $choreo The choregraphy object for this execution.
     * @param Fitbit_GetFoods_Inputs|array $inputs (optional) Inputs as Fitbit_GetFoods_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Fitbit_GetFoods_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Fitbit_GetFoods $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFoods execution.
     *
     * @return Fitbit_GetFoods_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetFoods execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Fitbit_GetFoods_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Fitbit_GetFoods_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetFoods choreography.
 *
 * @package Temboo
 * @subpackage Fitbit
 */
class Fitbit_GetFoods_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetFoods choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Fitbit_GetFoods_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetFoods execution.
     *
     * @return string The response from Fitbit.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>