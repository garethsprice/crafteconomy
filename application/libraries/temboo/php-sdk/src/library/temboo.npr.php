<?php

/**
 * Temboo PHP SDK NPR classes
 *
 * Execute Choreographies from the Temboo NPR bundle.
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
 * @subpackage NPR
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieves a list of NPR personalities and corresponding IDs. Also used to look up the IDs of specific NPR personalities by specifying them as an optional parameter.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Bios extends Temboo_Choreography
{
    /**
     * Retrieves a list of NPR personalities and corresponding IDs. Also used to look up the IDs of specific NPR personalities by specifying them as an optional parameter.
     *
     * @param Temboo_Session $session The session that owns this Bios choreography.
     * @return NPR_StoryFinder_Bios New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StoryFinder/Bios/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Bios choreography.
     *
     * @param NPR_StoryFinder_Bios_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Bios_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Bios_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StoryFinder_Bios_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Bios choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Bios_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StoryFinder_Bios_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Bios choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Bios_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Bios choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Bios_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Bios input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StoryFinder_Bios_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StoryFinder_Bios_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Personality input for this Bios choreography.
     *
     * @param string $value (optional, string) The specific name or an NPR personality to return. Multiple names can be specified separated by commas (i.e. Andrei Codrescu,Allison Keyes). Personality IDs are returned when this input is used.
     * @return NPR_StoryFinder_Bios_Inputs For method chaining.
     */
    public function setPersonality($value)
    {
        return $this->set('Personality', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Bios choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Set to json or xml (the default). Note that when specifying Personality, only xml is returned.
     * @return NPR_StoryFinder_Bios_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StoryCountAll input for this Bios choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories.
     * @return NPR_StoryFinder_Bios_Inputs For method chaining.
     */
    public function setStoryCountAll($value)
    {
        return $this->set('StoryCountAll', $value);
    }

    /**
     * Set the value for the StoryCountMonth input for this Bios choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published in the last month.
     * @return NPR_StoryFinder_Bios_Inputs For method chaining.
     */
    public function setStoryCountMonth($value)
    {
        return $this->set('StoryCountMonth', $value);
    }

    /**
     * Set the value for the StoryCountToday input for this Bios choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published today.
     * @return NPR_StoryFinder_Bios_Inputs For method chaining.
     */
    public function setStoryCountToday($value)
    {
        return $this->set('StoryCountToday', $value);
    }
}


/**
 * Execution object for the Bios choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Bios_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Bios choreography.
     *
     * @param Temboo_Session $session The session that owns this Bios execution.
     * @param NPR_StoryFinder_Bios $choreo The choregraphy object for this execution.
     * @param NPR_StoryFinder_Bios_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Bios_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Bios_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StoryFinder_Bios $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Bios execution.
     *
     * @return NPR_StoryFinder_Bios_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Bios execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StoryFinder_Bios_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StoryFinder_Bios_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Bios choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Bios_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Bios choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StoryFinder_Bios_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Bios execution.
     *
     * @return string The response from NPR.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Id" output from this Bios execution.
     *
     * @return int (integer) The ID of the personality specified. This is only returned when the Personality input is specified. When personalities are specified, this will be a list of IDs separated by commas.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getId()
    {
        return $this->get('Id');
    }
}

/**
 * Retrieves local NPR member stations based on zip code.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByCity extends Temboo_Choreography
{
    /**
     * Retrieves local NPR member stations based on zip code.
     *
     * @param Temboo_Session $session The session that owns this SearchByCity choreography.
     * @return NPR_StationFinder_SearchByCity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StationFinder/SearchByCity/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchByCity choreography.
     *
     * @param NPR_StationFinder_SearchByCity_Inputs|array $inputs (optional) Inputs as NPR_StationFinder_SearchByCity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StationFinder_SearchByCity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StationFinder_SearchByCity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByCity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StationFinder_SearchByCity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StationFinder_SearchByCity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByCity choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByCity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchByCity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StationFinder_SearchByCity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByCity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StationFinder_SearchByCity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StationFinder_SearchByCity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchByCity choreography.
     *
     * @param string $value (required, string) The API Key provided by NPR.
     * @return NPR_StationFinder_SearchByCity_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the City input for this SearchByCity choreography.
     *
     * @param string $value (required, string) Enter the city name. When searching by city, the state parameter must also be specified.
     * @return NPR_StationFinder_SearchByCity_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the State input for this SearchByCity choreography.
     *
     * @param string $value (required, string) Enter the state. The city parameter must also be specified.
     * @return NPR_StationFinder_SearchByCity_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the SearchByCity choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByCity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByCity choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchByCity execution.
     * @param NPR_StationFinder_SearchByCity $choreo The choregraphy object for this execution.
     * @param NPR_StationFinder_SearchByCity_Inputs|array $inputs (optional) Inputs as NPR_StationFinder_SearchByCity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StationFinder_SearchByCity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StationFinder_SearchByCity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByCity execution.
     *
     * @return NPR_StationFinder_SearchByCity_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this SearchByCity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StationFinder_SearchByCity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StationFinder_SearchByCity_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchByCity choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByCity_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchByCity choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StationFinder_SearchByCity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchByCity execution.
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
 * Retrieves a list of NPR music artists and corresponding IDs. Also used to look up the IDs of specific NPR music artists by specifying them as an optional parameter.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_MusicArtists extends Temboo_Choreography
{
    /**
     * Retrieves a list of NPR music artists and corresponding IDs. Also used to look up the IDs of specific NPR music artists by specifying them as an optional parameter.
     *
     * @param Temboo_Session $session The session that owns this MusicArtists choreography.
     * @return NPR_StoryFinder_MusicArtists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StoryFinder/MusicArtists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this MusicArtists choreography.
     *
     * @param NPR_StoryFinder_MusicArtists_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_MusicArtists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_MusicArtists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StoryFinder_MusicArtists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MusicArtists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_MusicArtists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StoryFinder_MusicArtists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MusicArtists choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_MusicArtists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the MusicArtists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_MusicArtists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MusicArtists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StoryFinder_MusicArtists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StoryFinder_MusicArtists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the MusicArtist input for this MusicArtists choreography.
     *
     * @param string $value (optional, string) The specific name or an NPR music artist to return. Multiple names can be specified separated by commas (i.e. Thom Yorke,Yo La Tengo). Music artist IDs are returned when this input is used.
     * @return NPR_StoryFinder_MusicArtists_Inputs For method chaining.
     */
    public function setMusicArtist($value)
    {
        return $this->set('MusicArtist', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this MusicArtists choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Set to json or xml (the default). Note that when specifying MusicArtist, only xml is returned.
     * @return NPR_StoryFinder_MusicArtists_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StoryCountAll input for this MusicArtists choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories.
     * @return NPR_StoryFinder_MusicArtists_Inputs For method chaining.
     */
    public function setStoryCountAll($value)
    {
        return $this->set('StoryCountAll', $value);
    }

    /**
     * Set the value for the StoryCountMonth input for this MusicArtists choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published in the last month.
     * @return NPR_StoryFinder_MusicArtists_Inputs For method chaining.
     */
    public function setStoryCountMonth($value)
    {
        return $this->set('StoryCountMonth', $value);
    }

    /**
     * Set the value for the StoryCountToday input for this MusicArtists choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published today.
     * @return NPR_StoryFinder_MusicArtists_Inputs For method chaining.
     */
    public function setStoryCountToday($value)
    {
        return $this->set('StoryCountToday', $value);
    }
}


/**
 * Execution object for the MusicArtists choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_MusicArtists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MusicArtists choreography.
     *
     * @param Temboo_Session $session The session that owns this MusicArtists execution.
     * @param NPR_StoryFinder_MusicArtists $choreo The choregraphy object for this execution.
     * @param NPR_StoryFinder_MusicArtists_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_MusicArtists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_MusicArtists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StoryFinder_MusicArtists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MusicArtists execution.
     *
     * @return NPR_StoryFinder_MusicArtists_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this MusicArtists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StoryFinder_MusicArtists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StoryFinder_MusicArtists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the MusicArtists choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_MusicArtists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the MusicArtists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StoryFinder_MusicArtists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this MusicArtists execution.
     *
     * @return string The response from NPR.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Id" output from this MusicArtists execution.
     *
     * @return int (integer) The ID of the music artist. This is only returned when the MusicArtist input is specified. When multiple artist names are specified, this will be a list of IDs separated by commas.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getId()
    {
        return $this->get('Id');
    }
}

/**
 * Retrieves a list of NPR programs and corresponding IDs. Also used to look up the IDs of specific NPR programs by specifying them as an optional parameter.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Programs extends Temboo_Choreography
{
    /**
     * Retrieves a list of NPR programs and corresponding IDs. Also used to look up the IDs of specific NPR programs by specifying them as an optional parameter.
     *
     * @param Temboo_Session $session The session that owns this Programs choreography.
     * @return NPR_StoryFinder_Programs New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StoryFinder/Programs/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Programs choreography.
     *
     * @param NPR_StoryFinder_Programs_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Programs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Programs_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StoryFinder_Programs_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Programs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Programs_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StoryFinder_Programs_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Programs choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Programs_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Programs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Programs_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Programs input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StoryFinder_Programs_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StoryFinder_Programs_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Program input for this Programs choreography.
     *
     * @param string $value (optional, string) The specific program title to return. Multiple prorgam titles can be specified separated by commas (i.e. All Things Considered,Tell Me More). Program IDs are returned when this input is used.
     * @return NPR_StoryFinder_Programs_Inputs For method chaining.
     */
    public function setProgram($value)
    {
        return $this->set('Program', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Programs choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Set to json or xml (the default). Note that when specifying Program, only xml is returned.
     * @return NPR_StoryFinder_Programs_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StoryCountAll input for this Programs choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories.
     * @return NPR_StoryFinder_Programs_Inputs For method chaining.
     */
    public function setStoryCountAll($value)
    {
        return $this->set('StoryCountAll', $value);
    }

    /**
     * Set the value for the StoryCountMonth input for this Programs choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published in the last month.
     * @return NPR_StoryFinder_Programs_Inputs For method chaining.
     */
    public function setStoryCountMonth($value)
    {
        return $this->set('StoryCountMonth', $value);
    }

    /**
     * Set the value for the StoryCountToday input for this Programs choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published today.
     * @return NPR_StoryFinder_Programs_Inputs For method chaining.
     */
    public function setStoryCountToday($value)
    {
        return $this->set('StoryCountToday', $value);
    }
}


/**
 * Execution object for the Programs choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Programs_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Programs choreography.
     *
     * @param Temboo_Session $session The session that owns this Programs execution.
     * @param NPR_StoryFinder_Programs $choreo The choregraphy object for this execution.
     * @param NPR_StoryFinder_Programs_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Programs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Programs_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StoryFinder_Programs $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Programs execution.
     *
     * @return NPR_StoryFinder_Programs_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Programs execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StoryFinder_Programs_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StoryFinder_Programs_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Programs choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Programs_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Programs choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StoryFinder_Programs_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Programs execution.
     *
     * @return string The response from NPR.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Id" output from this Programs execution.
     *
     * @return int (integer) The ID of the program. This is only returned when the Program input is specified. When multiple programs are specified, this will be a list of IDs separated by commas.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getId()
    {
        return $this->get('Id');
    }
}

/**
 * Retrieves a list of NPR music genres and corresponding IDs. Also used to look up the IDs of specific NPR music genres by specifying those as an optional parameter.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_MusicGenres extends Temboo_Choreography
{
    /**
     * Retrieves a list of NPR music genres and corresponding IDs. Also used to look up the IDs of specific NPR music genres by specifying those as an optional parameter.
     *
     * @param Temboo_Session $session The session that owns this MusicGenres choreography.
     * @return NPR_StoryFinder_MusicGenres New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StoryFinder/MusicGenres/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this MusicGenres choreography.
     *
     * @param NPR_StoryFinder_MusicGenres_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_MusicGenres_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_MusicGenres_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StoryFinder_MusicGenres_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MusicGenres choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_MusicGenres_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StoryFinder_MusicGenres_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MusicGenres choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_MusicGenres_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the MusicGenres choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_MusicGenres_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MusicGenres input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StoryFinder_MusicGenres_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StoryFinder_MusicGenres_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the MusicGenre input for this MusicGenres choreography.
     *
     * @param string $value (optional, string) The specific music genre title to return. Multiple genre titles can be specified separated by commas (i.e. Blues,Classical). Genre IDs are returned when this input is used.
     * @return NPR_StoryFinder_MusicGenres_Inputs For method chaining.
     */
    public function setMusicGenre($value)
    {
        return $this->set('MusicGenre', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this MusicGenres choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Set to json or xml (the default). Note that when specifying MusicGenre, only xml is returned.
     * @return NPR_StoryFinder_MusicGenres_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StoryCountAll input for this MusicGenres choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories.
     * @return NPR_StoryFinder_MusicGenres_Inputs For method chaining.
     */
    public function setStoryCountAll($value)
    {
        return $this->set('StoryCountAll', $value);
    }

    /**
     * Set the value for the StoryCountMonth input for this MusicGenres choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published in the last month.
     * @return NPR_StoryFinder_MusicGenres_Inputs For method chaining.
     */
    public function setStoryCountMonth($value)
    {
        return $this->set('StoryCountMonth', $value);
    }

    /**
     * Set the value for the StoryCountToday input for this MusicGenres choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published today.
     * @return NPR_StoryFinder_MusicGenres_Inputs For method chaining.
     */
    public function setStoryCountToday($value)
    {
        return $this->set('StoryCountToday', $value);
    }
}


/**
 * Execution object for the MusicGenres choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_MusicGenres_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MusicGenres choreography.
     *
     * @param Temboo_Session $session The session that owns this MusicGenres execution.
     * @param NPR_StoryFinder_MusicGenres $choreo The choregraphy object for this execution.
     * @param NPR_StoryFinder_MusicGenres_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_MusicGenres_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_MusicGenres_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StoryFinder_MusicGenres $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MusicGenres execution.
     *
     * @return NPR_StoryFinder_MusicGenres_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this MusicGenres execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StoryFinder_MusicGenres_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StoryFinder_MusicGenres_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the MusicGenres choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_MusicGenres_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the MusicGenres choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StoryFinder_MusicGenres_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this MusicGenres execution.
     *
     * @return string The response from NPR.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Id" output from this MusicGenres execution.
     *
     * @return int (integer) The ID of the music genre. This is only returned when the MusicGenre input is specified. When multiple genres are specified, this will be a list of IDs separated by commas.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getId()
    {
        return $this->get('Id');
    }
}

/**
 * Retrieves a list of NPR topics and corresponding IDs. Also used to look up the IDs of specific NPR topics by specifying them as an optional parameter.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Topics extends Temboo_Choreography
{
    /**
     * Retrieves a list of NPR topics and corresponding IDs. Also used to look up the IDs of specific NPR topics by specifying them as an optional parameter.
     *
     * @param Temboo_Session $session The session that owns this Topics choreography.
     * @return NPR_StoryFinder_Topics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StoryFinder/Topics/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Topics choreography.
     *
     * @param NPR_StoryFinder_Topics_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Topics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Topics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StoryFinder_Topics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Topics choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Topics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StoryFinder_Topics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Topics choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Topics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Topics choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Topics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Topics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StoryFinder_Topics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StoryFinder_Topics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ResponseFormat input for this Topics choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Set to json or xml (the default). Note that when specifying Topic, only xml is returned.
     * @return NPR_StoryFinder_Topics_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StoryCountAll input for this Topics choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories.
     * @return NPR_StoryFinder_Topics_Inputs For method chaining.
     */
    public function setStoryCountAll($value)
    {
        return $this->set('StoryCountAll', $value);
    }

    /**
     * Set the value for the StoryCountMonth input for this Topics choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published in the last month.
     * @return NPR_StoryFinder_Topics_Inputs For method chaining.
     */
    public function setStoryCountMonth($value)
    {
        return $this->set('StoryCountMonth', $value);
    }

    /**
     * Set the value for the StoryCountToday input for this Topics choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published today.
     * @return NPR_StoryFinder_Topics_Inputs For method chaining.
     */
    public function setStoryCountToday($value)
    {
        return $this->set('StoryCountToday', $value);
    }

    /**
     * Set the value for the Topic input for this Topics choreography.
     *
     * @param string $value (optional, string) The specific topic title to return. Multiple topics can be specified separated by commas (i.e. Energy,Europe). Topic IDs are returned when this input is used.
     * @return NPR_StoryFinder_Topics_Inputs For method chaining.
     */
    public function setTopic($value)
    {
        return $this->set('Topic', $value);
    }
}


/**
 * Execution object for the Topics choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Topics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Topics choreography.
     *
     * @param Temboo_Session $session The session that owns this Topics execution.
     * @param NPR_StoryFinder_Topics $choreo The choregraphy object for this execution.
     * @param NPR_StoryFinder_Topics_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Topics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Topics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StoryFinder_Topics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Topics execution.
     *
     * @return NPR_StoryFinder_Topics_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Topics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StoryFinder_Topics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StoryFinder_Topics_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Topics choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Topics_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Topics choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StoryFinder_Topics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Topics execution.
     *
     * @return string The response from NPR.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Id" output from this Topics execution.
     *
     * @return int (integer) The ID of the topic. This is only returned when the Topic input is specified. When topics are specified, this will be a list of IDs separated by commas.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getId()
    {
        return $this->get('Id');
    }
}

/**
 * Retrieves a list of NPR series titles and corresponding IDs. Also used to look up the IDs of specific NPR series by specifying those as an optional parameter.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Series extends Temboo_Choreography
{
    /**
     * Retrieves a list of NPR series titles and corresponding IDs. Also used to look up the IDs of specific NPR series by specifying those as an optional parameter.
     *
     * @param Temboo_Session $session The session that owns this Series choreography.
     * @return NPR_StoryFinder_Series New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StoryFinder/Series/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Series choreography.
     *
     * @param NPR_StoryFinder_Series_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Series_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Series_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StoryFinder_Series_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Series choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Series_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StoryFinder_Series_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Series choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Series_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Series choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Series_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Series input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StoryFinder_Series_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StoryFinder_Series_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ResponseFormat input for this Series choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Set to json or xml (the default). Note that when specifying Series, only xml is returned.
     * @return NPR_StoryFinder_Series_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Series input for this Series choreography.
     *
     * @param string $value (optional, string) The specific series title to return. Multiple titles can be specified separated by commas (i.e. Life in Berlin,Climate Connections). Series IDs are returned when this input is used.
     * @return NPR_StoryFinder_Series_Inputs For method chaining.
     */
    public function setSeries($value)
    {
        return $this->set('Series', $value);
    }

    /**
     * Set the value for the StoryCountAll input for this Series choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories.
     * @return NPR_StoryFinder_Series_Inputs For method chaining.
     */
    public function setStoryCountAll($value)
    {
        return $this->set('StoryCountAll', $value);
    }

    /**
     * Set the value for the StoryCountMonth input for this Series choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published in the last month.
     * @return NPR_StoryFinder_Series_Inputs For method chaining.
     */
    public function setStoryCountMonth($value)
    {
        return $this->set('StoryCountMonth', $value);
    }

    /**
     * Set the value for the StoryCountToday input for this Series choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published today.
     * @return NPR_StoryFinder_Series_Inputs For method chaining.
     */
    public function setStoryCountToday($value)
    {
        return $this->set('StoryCountToday', $value);
    }
}


/**
 * Execution object for the Series choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Series_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Series choreography.
     *
     * @param Temboo_Session $session The session that owns this Series execution.
     * @param NPR_StoryFinder_Series $choreo The choregraphy object for this execution.
     * @param NPR_StoryFinder_Series_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Series_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Series_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StoryFinder_Series $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Series execution.
     *
     * @return NPR_StoryFinder_Series_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Series execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StoryFinder_Series_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StoryFinder_Series_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Series choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Series_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Series choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StoryFinder_Series_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Series execution.
     *
     * @return string The response from NPR.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Id" output from this Series execution.
     *
     * @return int (integer) The ID of the series. This is only returned when the Series input is specified. When multiple series are specified, this will be a list of IDs separated by commas.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getId()
    {
        return $this->get('Id');
    }
}

/**
 * Retrieves local NPR member stations near the specified lattitude and longitude location coordinates.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByLocation extends Temboo_Choreography
{
    /**
     * Retrieves local NPR member stations near the specified lattitude and longitude location coordinates.
     *
     * @param Temboo_Session $session The session that owns this SearchByLocation choreography.
     * @return NPR_StationFinder_SearchByLocation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StationFinder/SearchByLocation/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchByLocation choreography.
     *
     * @param NPR_StationFinder_SearchByLocation_Inputs|array $inputs (optional) Inputs as NPR_StationFinder_SearchByLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StationFinder_SearchByLocation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StationFinder_SearchByLocation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByLocation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StationFinder_SearchByLocation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StationFinder_SearchByLocation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByLocation choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByLocation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchByLocation choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StationFinder_SearchByLocation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByLocation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StationFinder_SearchByLocation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StationFinder_SearchByLocation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchByLocation choreography.
     *
     * @param string $value (required, string) The API Key provided by NPR.
     * @return NPR_StationFinder_SearchByLocation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Lattitude input for this SearchByLocation choreography.
     *
     * @param float $value (required, decimal) The lattitude point of a station's location. Must be used together with the longitude parameter. This must be a positive value.
     * @return NPR_StationFinder_SearchByLocation_Inputs For method chaining.
     */
    public function setLattitude($value)
    {
        return $this->set('Lattitude', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchByLocation choreography.
     *
     * @param float $value (required, decimal) The longitude point of a station's location. Must be used together with the lattitude parameter. This must be a positive value.
     * @return NPR_StationFinder_SearchByLocation_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }
}


/**
 * Execution object for the SearchByLocation choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByLocation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByLocation choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchByLocation execution.
     * @param NPR_StationFinder_SearchByLocation $choreo The choregraphy object for this execution.
     * @param NPR_StationFinder_SearchByLocation_Inputs|array $inputs (optional) Inputs as NPR_StationFinder_SearchByLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StationFinder_SearchByLocation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StationFinder_SearchByLocation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByLocation execution.
     *
     * @return NPR_StationFinder_SearchByLocation_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this SearchByLocation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StationFinder_SearchByLocation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StationFinder_SearchByLocation_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchByLocation choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByLocation_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchByLocation choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StationFinder_SearchByLocation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchByLocation execution.
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
 * Retrieves local NPR member stations based on uniquely identifying call letters.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByCallLetters extends Temboo_Choreography
{
    /**
     * Retrieves local NPR member stations based on uniquely identifying call letters.
     *
     * @param Temboo_Session $session The session that owns this SearchByCallLetters choreography.
     * @return NPR_StationFinder_SearchByCallLetters New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StationFinder/SearchByCallLetters/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchByCallLetters choreography.
     *
     * @param NPR_StationFinder_SearchByCallLetters_Inputs|array $inputs (optional) Inputs as NPR_StationFinder_SearchByCallLetters_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StationFinder_SearchByCallLetters_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StationFinder_SearchByCallLetters_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByCallLetters choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StationFinder_SearchByCallLetters_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StationFinder_SearchByCallLetters_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByCallLetters choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByCallLetters_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchByCallLetters choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StationFinder_SearchByCallLetters_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByCallLetters input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StationFinder_SearchByCallLetters_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StationFinder_SearchByCallLetters_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchByCallLetters choreography.
     *
     * @param string $value (required, string) The API Key provided by NPR.
     * @return NPR_StationFinder_SearchByCallLetters_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Band input for this SearchByCallLetters choreography.
     *
     * @param string $value (optional, string) Enter AM or FM.
     * @return NPR_StationFinder_SearchByCallLetters_Inputs For method chaining.
     */
    public function setBand($value)
    {
        return $this->set('Band', $value);
    }

    /**
     * Set the value for the CallLetters input for this SearchByCallLetters choreography.
     *
     * @param string $value (required, string) Enter the unique identifier associated with a station.
     * @return NPR_StationFinder_SearchByCallLetters_Inputs For method chaining.
     */
    public function setCallLetters($value)
    {
        return $this->set('CallLetters', $value);
    }
}


/**
 * Execution object for the SearchByCallLetters choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByCallLetters_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByCallLetters choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchByCallLetters execution.
     * @param NPR_StationFinder_SearchByCallLetters $choreo The choregraphy object for this execution.
     * @param NPR_StationFinder_SearchByCallLetters_Inputs|array $inputs (optional) Inputs as NPR_StationFinder_SearchByCallLetters_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StationFinder_SearchByCallLetters_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StationFinder_SearchByCallLetters $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByCallLetters execution.
     *
     * @return NPR_StationFinder_SearchByCallLetters_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this SearchByCallLetters execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StationFinder_SearchByCallLetters_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StationFinder_SearchByCallLetters_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchByCallLetters choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByCallLetters_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchByCallLetters choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StationFinder_SearchByCallLetters_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchByCallLetters execution.
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
 * Retrieves transcripts of NPR stories based on their unique story IDs.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_Transcripts_TranscriptSearch extends Temboo_Choreography
{
    /**
     * Retrieves transcripts of NPR stories based on their unique story IDs.
     *
     * @param Temboo_Session $session The session that owns this TranscriptSearch choreography.
     * @return NPR_Transcripts_TranscriptSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/Transcripts/TranscriptSearch/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TranscriptSearch choreography.
     *
     * @param NPR_Transcripts_TranscriptSearch_Inputs|array $inputs (optional) Inputs as NPR_Transcripts_TranscriptSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_Transcripts_TranscriptSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_Transcripts_TranscriptSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TranscriptSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_Transcripts_TranscriptSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_Transcripts_TranscriptSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TranscriptSearch choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_Transcripts_TranscriptSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TranscriptSearch choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_Transcripts_TranscriptSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TranscriptSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_Transcripts_TranscriptSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_Transcripts_TranscriptSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TranscriptSearch choreography.
     *
     * @param string $value (required, string) The API Key provided by NPR.
     * @return NPR_Transcripts_TranscriptSearch_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ID input for this TranscriptSearch choreography.
     *
     * @param int $value (required, integer) The story ID for which you want a transcript. You can find the story ID by first running an aprropriate StoryFinder Choreo.
     * @return NPR_Transcripts_TranscriptSearch_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the TranscriptSearch choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_Transcripts_TranscriptSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TranscriptSearch choreography.
     *
     * @param Temboo_Session $session The session that owns this TranscriptSearch execution.
     * @param NPR_Transcripts_TranscriptSearch $choreo The choregraphy object for this execution.
     * @param NPR_Transcripts_TranscriptSearch_Inputs|array $inputs (optional) Inputs as NPR_Transcripts_TranscriptSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_Transcripts_TranscriptSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_Transcripts_TranscriptSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TranscriptSearch execution.
     *
     * @return NPR_Transcripts_TranscriptSearch_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this TranscriptSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_Transcripts_TranscriptSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_Transcripts_TranscriptSearch_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TranscriptSearch choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_Transcripts_TranscriptSearch_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TranscriptSearch choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_Transcripts_TranscriptSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TranscriptSearch execution.
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
 * Retrieves local NPR member stations based on zip code.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByZipCode extends Temboo_Choreography
{
    /**
     * Retrieves local NPR member stations based on zip code.
     *
     * @param Temboo_Session $session The session that owns this SearchByZipCode choreography.
     * @return NPR_StationFinder_SearchByZipCode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StationFinder/SearchByZipCode/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchByZipCode choreography.
     *
     * @param NPR_StationFinder_SearchByZipCode_Inputs|array $inputs (optional) Inputs as NPR_StationFinder_SearchByZipCode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StationFinder_SearchByZipCode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StationFinder_SearchByZipCode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByZipCode choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StationFinder_SearchByZipCode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StationFinder_SearchByZipCode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByZipCode choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByZipCode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchByZipCode choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StationFinder_SearchByZipCode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByZipCode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StationFinder_SearchByZipCode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StationFinder_SearchByZipCode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchByZipCode choreography.
     *
     * @param string $value (required, string) The API Key provided by NPR.
     * @return NPR_StationFinder_SearchByZipCode_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Zip input for this SearchByZipCode choreography.
     *
     * @param string $value (required, string) Enter a five-digit zip code.
     * @return NPR_StationFinder_SearchByZipCode_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the SearchByZipCode choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByZipCode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByZipCode choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchByZipCode execution.
     * @param NPR_StationFinder_SearchByZipCode $choreo The choregraphy object for this execution.
     * @param NPR_StationFinder_SearchByZipCode_Inputs|array $inputs (optional) Inputs as NPR_StationFinder_SearchByZipCode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StationFinder_SearchByZipCode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StationFinder_SearchByZipCode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByZipCode execution.
     *
     * @return NPR_StationFinder_SearchByZipCode_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this SearchByZipCode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StationFinder_SearchByZipCode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StationFinder_SearchByZipCode_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchByZipCode choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByZipCode_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchByZipCode choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StationFinder_SearchByZipCode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchByZipCode execution.
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
 * Queries the Story API for stories across all NPR media, including audio, text, images, and web-only content.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Query extends Temboo_Choreography
{
    /**
     * Queries the Story API for stories across all NPR media, including audio, text, images, and web-only content.
     *
     * @param Temboo_Session $session The session that owns this Query choreography.
     * @return NPR_StoryFinder_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StoryFinder/Query/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Query choreography.
     *
     * @param NPR_StoryFinder_Query_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StoryFinder_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StoryFinder_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Query choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Query_Inputs New instance.
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
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Query choreography.
     *
     * @param string $value (required, multiline) The API Key provided by NPR.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DateType input for this Query choreography.
     *
     * @param string $value (optional, string) Controls the meaning of StartDate and EndDate. Values can be story or correction.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setDateType($value)
    {
        return $this->set('DateType', $value);
    }

    /**
     * Set the value for the Date input for this Query choreography.
     *
     * @param string $value (optional, string) The exact date for which stories will be returned. Format: YYYY-MM-DD The special value current is also allowed. Cannot be used with StartDate or EndDate.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the EndDate input for this Query choreography.
     *
     * @param string $value (optional, string) The end date for which stories will be returned. Format: YYYY-MM-DD Can be used with StartDate to search a range. Cannot be used with Date. The meaning of this parameter can be modified with DateType.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Fields input for this Query choreography.
     *
     * @param string $value (optional, string) Comma-delimited list of fields to be returned in the output for the results. List of fields can be made up of selectable fields or compilation fields. Defaults to all available fields.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setFields($value)
    {
        return $this->set('Fields', $value);
    }

    /**
     * Set the value for the IDBoolean input for this Query choreography.
     *
     * @param string $value (optional, string) Describes how IDs are searched. Allowed values: and, or, union.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setIDBoolean($value)
    {
        return $this->set('IDBoolean', $value);
    }

    /**
     * Set the value for the ID input for this Query choreography.
     *
     * @param string $value (optional, string) Comma-delimited list of ID numbers corresponding to topics, music genres, programs, blogs, bios, music artists, and series.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the NumResults input for this Query choreography.
     *
     * @param int $value (optional, integer) The number of stories to be returned up to 20 maximum.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setNumResults($value)
    {
        return $this->set('NumResults', $value);
    }

    /**
     * Set the value for the OrgID input for this Query choreography.
     *
     * @param string $value (optional, string) Comma-delimited list of ID numbers of local stations.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setOrgID($value)
    {
        return $this->set('OrgID', $value);
    }

    /**
     * Set the value for the RequiredAssets input for this Query choreography.
     *
     * @param string $value (optional, string) Comma-delimited list that limits the resulting set to contain only stories with a particular type of asset. Allowed values: audio, image, text, and correction.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setRequiredAssets($value)
    {
        return $this->set('RequiredAssets', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Query choreography.
     *
     * @param string $value (optional, string) Enter output format. Values accepted: NPRML, RSS, MediaRSS, Podcast, ATOM, JSON, HTML WIdget, Javascript Widget. Default is JSON.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SearchTerm input for this Query choreography.
     *
     * @param string $value (optional, string) Term to search in NPR's search engine. Can be used with SearchType to specify which fields should be searched.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setSearchTerm($value)
    {
        return $this->set('SearchTerm', $value);
    }

    /**
     * Set the value for the SearchType input for this Query choreography.
     *
     * @param string $value (optional, string) Used with SearchTerm to specify which fields should be searched. Default searches all fields. Allowed values: main and full.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setSearchType($value)
    {
        return $this->set('SearchType', $value);
    }

    /**
     * Set the value for the Sort input for this Query choreography.
     *
     * @param string $value (optional, string) Determines the order in which the stories will be returned. Default is date descending. Other allowed values: date ascending, editor assigned, and featured.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the StartDate input for this Query choreography.
     *
     * @param string $value (optional, string) The start date for which stories will be returned. Format: YYYY-MM-DD Can be used with EndDate to search a range. Cannot be used with Date. The meaning of this parameter can be modified with DateType.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the StartNum input for this Query choreography.
     *
     * @param int $value (optional, integer) Determines where in the result set to start returning stories.
     * @return NPR_StoryFinder_Query_Inputs For method chaining.
     */
    public function setStartNum($value)
    {
        return $this->set('StartNum', $value);
    }
}


/**
 * Execution object for the Query choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query choreography.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param NPR_StoryFinder_Query $choreo The choregraphy object for this execution.
     * @param NPR_StoryFinder_Query_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StoryFinder_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return NPR_StoryFinder_Query_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
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
     * @return NPR_StoryFinder_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StoryFinder_Query_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Query choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Query_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Query choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StoryFinder_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string (xml) The response from NPR.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of NPR categories from a specified list type ID.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_GetListByID extends Temboo_Choreography
{
    /**
     * Retrieves a list of NPR categories from a specified list type ID.
     *
     * @param Temboo_Session $session The session that owns this GetListByID choreography.
     * @return NPR_StoryFinder_GetListByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StoryFinder/GetListByID/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetListByID choreography.
     *
     * @param NPR_StoryFinder_GetListByID_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_GetListByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_GetListByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StoryFinder_GetListByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetListByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_GetListByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StoryFinder_GetListByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetListByID choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_GetListByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetListByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_GetListByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetListByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StoryFinder_GetListByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StoryFinder_GetListByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ChildrenOf input for this GetListByID choreography.
     *
     * @param int $value (optional, integer) Returns only items which are assigned to the given topic ID. For example, if Id=3006 and ChildrenOf=1008 only recent series which are assigned to "Arts & Life" are returned.
     * @return NPR_StoryFinder_GetListByID_Inputs For method chaining.
     */
    public function setChildrenOf($value)
    {
        return $this->set('ChildrenOf', $value);
    }

    /**
     * Set the value for the HideChildren input for this GetListByID choreography.
     *
     * @param bool $value (optional, boolean) If set to "1", returns only topics which are not subtopics of another topic.
     * @return NPR_StoryFinder_GetListByID_Inputs For method chaining.
     */
    public function setHideChildren($value)
    {
        return $this->set('HideChildren', $value);
    }

    /**
     * Set the value for the Id input for this GetListByID choreography.
     *
     * @param int $value (required, integer) The id of the list type you want to retrieve. For example, the list type id for Music Genres is 3218).
     * @return NPR_StoryFinder_GetListByID_Inputs For method chaining.
     */
    public function setId($value)
    {
        return $this->set('Id', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetListByID choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Set to json or xml (the default).
     * @return NPR_StoryFinder_GetListByID_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StoryCountAll input for this GetListByID choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories.
     * @return NPR_StoryFinder_GetListByID_Inputs For method chaining.
     */
    public function setStoryCountAll($value)
    {
        return $this->set('StoryCountAll', $value);
    }

    /**
     * Set the value for the StoryCountMonth input for this GetListByID choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published in the last month.
     * @return NPR_StoryFinder_GetListByID_Inputs For method chaining.
     */
    public function setStoryCountMonth($value)
    {
        return $this->set('StoryCountMonth', $value);
    }

    /**
     * Set the value for the StoryCountToday input for this GetListByID choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published today.
     * @return NPR_StoryFinder_GetListByID_Inputs For method chaining.
     */
    public function setStoryCountToday($value)
    {
        return $this->set('StoryCountToday', $value);
    }
}


/**
 * Execution object for the GetListByID choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_GetListByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetListByID choreography.
     *
     * @param Temboo_Session $session The session that owns this GetListByID execution.
     * @param NPR_StoryFinder_GetListByID $choreo The choregraphy object for this execution.
     * @param NPR_StoryFinder_GetListByID_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_GetListByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_GetListByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StoryFinder_GetListByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetListByID execution.
     *
     * @return NPR_StoryFinder_GetListByID_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetListByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StoryFinder_GetListByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StoryFinder_GetListByID_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetListByID choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_GetListByID_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetListByID choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StoryFinder_GetListByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetListByID execution.
     *
     * @return string (xml) The response from NPR.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves local NPR member stations based on their unique ID.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByID extends Temboo_Choreography
{
    /**
     * Retrieves local NPR member stations based on their unique ID.
     *
     * @param Temboo_Session $session The session that owns this SearchByID choreography.
     * @return NPR_StationFinder_SearchByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StationFinder/SearchByID/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchByID choreography.
     *
     * @param NPR_StationFinder_SearchByID_Inputs|array $inputs (optional) Inputs as NPR_StationFinder_SearchByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StationFinder_SearchByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StationFinder_SearchByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StationFinder_SearchByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StationFinder_SearchByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByID choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchByID choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StationFinder_SearchByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StationFinder_SearchByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StationFinder_SearchByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchByID choreography.
     *
     * @param string $value (required, string) The API Key provided by NPR.
     * @return NPR_StationFinder_SearchByID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ID input for this SearchByID choreography.
     *
     * @param int $value (required, integer) The unique ID that NPR asociates with the organization.
     * @return NPR_StationFinder_SearchByID_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the SearchByID choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByID choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchByID execution.
     * @param NPR_StationFinder_SearchByID $choreo The choregraphy object for this execution.
     * @param NPR_StationFinder_SearchByID_Inputs|array $inputs (optional) Inputs as NPR_StationFinder_SearchByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StationFinder_SearchByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StationFinder_SearchByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByID execution.
     *
     * @return NPR_StationFinder_SearchByID_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this SearchByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StationFinder_SearchByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StationFinder_SearchByID_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchByID choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StationFinder_SearchByID_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchByID choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StationFinder_SearchByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchByID execution.
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
 * Retrieves a list of NPR column titles and corresponding IDs. Also used to look up the IDs of specific NPR columns by specifying the title as an optional parameter.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Columns extends Temboo_Choreography
{
    /**
     * Retrieves a list of NPR column titles and corresponding IDs. Also used to look up the IDs of specific NPR columns by specifying the title as an optional parameter.
     *
     * @param Temboo_Session $session The session that owns this Columns choreography.
     * @return NPR_StoryFinder_Columns New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StoryFinder/Columns/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Columns choreography.
     *
     * @param NPR_StoryFinder_Columns_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Columns_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Columns_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StoryFinder_Columns_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Columns choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Columns_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StoryFinder_Columns_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Columns choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Columns_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Columns choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Columns_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Columns input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StoryFinder_Columns_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StoryFinder_Columns_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Column input for this Columns choreography.
     *
     * @param string $value (optional, string) The specific column title to return. Multiple column titles can be specified separated by commas (i.e. Book Reviews,My Guilty Pleasure). Column IDs are returned when this input is used.
     * @return NPR_StoryFinder_Columns_Inputs For method chaining.
     */
    public function setColumn($value)
    {
        return $this->set('Column', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Columns choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Set to json or xml (the default). Note that when specifying Column, only xml is returned.
     * @return NPR_StoryFinder_Columns_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StoryCountAll input for this Columns choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories.
     * @return NPR_StoryFinder_Columns_Inputs For method chaining.
     */
    public function setStoryCountAll($value)
    {
        return $this->set('StoryCountAll', $value);
    }

    /**
     * Set the value for the StoryCountMonth input for this Columns choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published in the last month.
     * @return NPR_StoryFinder_Columns_Inputs For method chaining.
     */
    public function setStoryCountMonth($value)
    {
        return $this->set('StoryCountMonth', $value);
    }

    /**
     * Set the value for the StoryCountToday input for this Columns choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published today.
     * @return NPR_StoryFinder_Columns_Inputs For method chaining.
     */
    public function setStoryCountToday($value)
    {
        return $this->set('StoryCountToday', $value);
    }
}


/**
 * Execution object for the Columns choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Columns_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Columns choreography.
     *
     * @param Temboo_Session $session The session that owns this Columns execution.
     * @param NPR_StoryFinder_Columns $choreo The choregraphy object for this execution.
     * @param NPR_StoryFinder_Columns_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Columns_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Columns_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StoryFinder_Columns $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Columns execution.
     *
     * @return NPR_StoryFinder_Columns_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Columns execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StoryFinder_Columns_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StoryFinder_Columns_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Columns choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Columns_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Columns choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StoryFinder_Columns_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Columns execution.
     *
     * @return string The response from NPR.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Id" output from this Columns execution.
     *
     * @return int (integer) The ID of the column. This is only returned when the Column input is specified. When columns are specified, this will be a list of IDs separated by commas.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getId()
    {
        return $this->get('Id');
    }
}

/**
 * Retrieves a list of NPR blogs and corresponding IDs. Also used to look up the IDs of specific NPR blog by specifying those as an optional parameter.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Blogs extends Temboo_Choreography
{
    /**
     * Retrieves a list of NPR blogs and corresponding IDs. Also used to look up the IDs of specific NPR blog by specifying those as an optional parameter.
     *
     * @param Temboo_Session $session The session that owns this Blogs choreography.
     * @return NPR_StoryFinder_Blogs New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NPR/StoryFinder/Blogs/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Blogs choreography.
     *
     * @param NPR_StoryFinder_Blogs_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Blogs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Blogs_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NPR_StoryFinder_Blogs_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Blogs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Blogs_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NPR_StoryFinder_Blogs_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Blogs choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Blogs_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Blogs choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NPR_StoryFinder_Blogs_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Blogs input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NPR_StoryFinder_Blogs_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return NPR_StoryFinder_Blogs_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Blog input for this Blogs choreography.
     *
     * @param string $value (optional, string) The specific blog title to return. Multiple blog titles can be specified separated by commas (i.e. Soapbox,Planet Money). Blog IDs are returned when this input is used.
     * @return NPR_StoryFinder_Blogs_Inputs For method chaining.
     */
    public function setBlog($value)
    {
        return $this->set('Blog', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Blogs choreography.
     *
     * @param string $value (optional, string) The format that you want the response to be in. Set to json or xml (the default). Note that when specifying Blog, only xml is returned.
     * @return NPR_StoryFinder_Blogs_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StoryCountAll input for this Blogs choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories.
     * @return NPR_StoryFinder_Blogs_Inputs For method chaining.
     */
    public function setStoryCountAll($value)
    {
        return $this->set('StoryCountAll', $value);
    }

    /**
     * Set the value for the StoryCountMonth input for this Blogs choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published in the last month.
     * @return NPR_StoryFinder_Blogs_Inputs For method chaining.
     */
    public function setStoryCountMonth($value)
    {
        return $this->set('StoryCountMonth', $value);
    }

    /**
     * Set the value for the StoryCountToday input for this Blogs choreography.
     *
     * @param int $value (optional, integer) Returns only items with at least this number of associated stories published today.
     * @return NPR_StoryFinder_Blogs_Inputs For method chaining.
     */
    public function setStoryCountToday($value)
    {
        return $this->set('StoryCountToday', $value);
    }
}


/**
 * Execution object for the Blogs choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Blogs_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Blogs choreography.
     *
     * @param Temboo_Session $session The session that owns this Blogs execution.
     * @param NPR_StoryFinder_Blogs $choreo The choregraphy object for this execution.
     * @param NPR_StoryFinder_Blogs_Inputs|array $inputs (optional) Inputs as NPR_StoryFinder_Blogs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NPR_StoryFinder_Blogs_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NPR_StoryFinder_Blogs $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Blogs execution.
     *
     * @return NPR_StoryFinder_Blogs_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Blogs execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NPR_StoryFinder_Blogs_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NPR_StoryFinder_Blogs_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Blogs choreography.
 *
 * @package Temboo
 * @subpackage NPR
 */
class NPR_StoryFinder_Blogs_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Blogs choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NPR_StoryFinder_Blogs_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Blogs execution.
     *
     * @return string The response from NPR.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "Id" output from this Blogs execution.
     *
     * @return int (integer) The ID of the blog. This is only returned when the Blog input is specified. When multiple blogs are specified, this will be a list of IDs separated by commas.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getId()
    {
        return $this->get('Id');
    }
}

?>