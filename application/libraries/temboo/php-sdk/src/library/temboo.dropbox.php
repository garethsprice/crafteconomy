<?php

/**
 * Temboo PHP SDK Dropbox classes
 *
 * Execute Choreographies from the Temboo Dropbox bundle.
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
 * @subpackage Dropbox
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Retrieves metadata for the previous revisions of a file
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_GetFileRevisions extends Temboo_Choreography
{
    /**
     * Retrieves metadata for the previous revisions of a file
     *
     * @param Temboo_Session $session The session that owns this GetFileRevisions choreography.
     * @return Dropbox_GetFileRevisions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/GetFileRevisions/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetFileRevisions choreography.
     *
     * @param Dropbox_GetFileRevisions_Inputs|array $inputs (optional) Inputs as Dropbox_GetFileRevisions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_GetFileRevisions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_GetFileRevisions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFileRevisions choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_GetFileRevisions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_GetFileRevisions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFileRevisions choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_GetFileRevisions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetFileRevisions choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_GetFileRevisions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFileRevisions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_GetFileRevisions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_GetFileRevisions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFileRevisions choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_GetFileRevisions_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFileRevisions choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_GetFileRevisions_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this GetFileRevisions choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_GetFileRevisions_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this GetFileRevisions choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_GetFileRevisions_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Path input for this GetFileRevisions choreography.
     *
     * @param string $value (required, string) The path to the file that you want to return revisions for (i.e. RootFolder/SubFolder/MyFile.txt).
     * @return Dropbox_GetFileRevisions_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetFileRevisions choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_GetFileRevisions_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the RevisionLimit input for this GetFileRevisions choreography.
     *
     * @param int $value (optional, integer) Default is 10. Max is 1,000. When listing a file, the service will not report listings containing more than the amount specified here.
     * @return Dropbox_GetFileRevisions_Inputs For method chaining.
     */
    public function setRevisionLimit($value)
    {
        return $this->set('RevisionLimit', $value);
    }
}


/**
 * Execution object for the GetFileRevisions choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_GetFileRevisions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFileRevisions choreography.
     *
     * @param Temboo_Session $session The session that owns this GetFileRevisions execution.
     * @param Dropbox_GetFileRevisions $choreo The choregraphy object for this execution.
     * @param Dropbox_GetFileRevisions_Inputs|array $inputs (optional) Inputs as Dropbox_GetFileRevisions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_GetFileRevisions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_GetFileRevisions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFileRevisions execution.
     *
     * @return Dropbox_GetFileRevisions_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetFileRevisions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_GetFileRevisions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_GetFileRevisions_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetFileRevisions choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_GetFileRevisions_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetFileRevisions choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_GetFileRevisions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetFileRevisions execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to search Dropbox for files or folders by a keyword search.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_SearchFilesAndFolders extends Temboo_Choreography
{
    /**
     * Allows you to search Dropbox for files or folders by a keyword search.
     *
     * @param Temboo_Session $session The session that owns this SearchFilesAndFolders choreography.
     * @return Dropbox_SearchFilesAndFolders New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/SearchFilesAndFolders/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SearchFilesAndFolders choreography.
     *
     * @param Dropbox_SearchFilesAndFolders_Inputs|array $inputs (optional) Inputs as Dropbox_SearchFilesAndFolders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_SearchFilesAndFolders_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_SearchFilesAndFolders_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchFilesAndFolders choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_SearchFilesAndFolders_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_SearchFilesAndFolders_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchFilesAndFolders choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_SearchFilesAndFolders_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SearchFilesAndFolders choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_SearchFilesAndFolders_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchFilesAndFolders input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SearchFilesAndFolders choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SearchFilesAndFolders choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this SearchFilesAndFolders choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this SearchFilesAndFolders choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the FileLimit input for this SearchFilesAndFolders choreography.
     *
     * @param int $value (optional, integer) Dropbox will not return a list that exceeds this specified limit. Defaults to 10,000.
     * @return Dropbox_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setFileLimit($value)
    {
        return $this->set('FileLimit', $value);
    }

    /**
     * Set the value for the Path input for this SearchFilesAndFolders choreography.
     *
     * @param string $value (optional, string) The path to the folder you want to search from (i.e. RootFolder/SubFolder). Leave blank to search ALL.
     * @return Dropbox_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Query input for this SearchFilesAndFolders choreography.
     *
     * @param string $value (required, string) The search string. Must be at least three characters long.
     * @return Dropbox_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchFilesAndFolders choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_SearchFilesAndFolders_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchFilesAndFolders choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_SearchFilesAndFolders_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchFilesAndFolders choreography.
     *
     * @param Temboo_Session $session The session that owns this SearchFilesAndFolders execution.
     * @param Dropbox_SearchFilesAndFolders $choreo The choregraphy object for this execution.
     * @param Dropbox_SearchFilesAndFolders_Inputs|array $inputs (optional) Inputs as Dropbox_SearchFilesAndFolders_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_SearchFilesAndFolders_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_SearchFilesAndFolders $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchFilesAndFolders execution.
     *
     * @return Dropbox_SearchFilesAndFolders_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this SearchFilesAndFolders execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_SearchFilesAndFolders_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_SearchFilesAndFolders_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SearchFilesAndFolders choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_SearchFilesAndFolders_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SearchFilesAndFolders choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_SearchFilesAndFolders_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SearchFilesAndFolders execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists contents of a given Dropbox folder.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_ListFolderContents extends Temboo_Choreography
{
    /**
     * Lists contents of a given Dropbox folder.
     *
     * @param Temboo_Session $session The session that owns this ListFolderContents choreography.
     * @return Dropbox_ListFolderContents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/ListFolderContents/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListFolderContents choreography.
     *
     * @param Dropbox_ListFolderContents_Inputs|array $inputs (optional) Inputs as Dropbox_ListFolderContents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_ListFolderContents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_ListFolderContents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFolderContents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_ListFolderContents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_ListFolderContents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFolderContents choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_ListFolderContents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListFolderContents choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_ListFolderContents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFolderContents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_ListFolderContents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_ListFolderContents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ListFolderContents choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_ListFolderContents_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ListFolderContents choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_ListFolderContents_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this ListFolderContents choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_ListFolderContents_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this ListFolderContents choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_ListFolderContents_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the FileLimit input for this ListFolderContents choreography.
     *
     * @param int $value (optional, integer) Dropbox will not return a list that exceeds this specified limit. Defaults to 10,000.
     * @return Dropbox_ListFolderContents_Inputs For method chaining.
     */
    public function setFileLimit($value)
    {
        return $this->set('FileLimit', $value);
    }

    /**
     * Set the value for the Folder input for this ListFolderContents choreography.
     *
     * @param string $value (optional, string) The name of the folder that contains the listing you want to retrieve. A path to a sub-folder is also valid (i.e. RootFolder/SubFolder).
     * @return Dropbox_ListFolderContents_Inputs For method chaining.
     */
    public function setFolder($value)
    {
        return $this->set('Folder', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListFolderContents choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_ListFolderContents_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListFolderContents choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_ListFolderContents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFolderContents choreography.
     *
     * @param Temboo_Session $session The session that owns this ListFolderContents execution.
     * @param Dropbox_ListFolderContents $choreo The choregraphy object for this execution.
     * @param Dropbox_ListFolderContents_Inputs|array $inputs (optional) Inputs as Dropbox_ListFolderContents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_ListFolderContents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_ListFolderContents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFolderContents execution.
     *
     * @return Dropbox_ListFolderContents_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this ListFolderContents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_ListFolderContents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_ListFolderContents_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListFolderContents choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_ListFolderContents_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListFolderContents choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_ListFolderContents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListFolderContents execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Restores a specified file to a previous revision.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_RestoreFileToRevision extends Temboo_Choreography
{
    /**
     * Restores a specified file to a previous revision.
     *
     * @param Temboo_Session $session The session that owns this RestoreFileToRevision choreography.
     * @return Dropbox_RestoreFileToRevision New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/RestoreFileToRevision/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RestoreFileToRevision choreography.
     *
     * @param Dropbox_RestoreFileToRevision_Inputs|array $inputs (optional) Inputs as Dropbox_RestoreFileToRevision_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_RestoreFileToRevision_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_RestoreFileToRevision_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RestoreFileToRevision choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_RestoreFileToRevision_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_RestoreFileToRevision_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RestoreFileToRevision choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_RestoreFileToRevision_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RestoreFileToRevision choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_RestoreFileToRevision_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RestoreFileToRevision input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_RestoreFileToRevision_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RestoreFileToRevision choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RestoreFileToRevision choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this RestoreFileToRevision choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this RestoreFileToRevision choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Path input for this RestoreFileToRevision choreography.
     *
     * @param string $value (required, string) The path to the file that you want to return revisions for (i.e. RootFolder/SubFolder/MyFile.txt).
     * @return Dropbox_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RestoreFileToRevision choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Revision input for this RestoreFileToRevision choreography.
     *
     * @param string $value (optional, string) The revision of the file to restore. The revision ID can be retrieved by running the GetFileRevision Choreo.
     * @return Dropbox_RestoreFileToRevision_Inputs For method chaining.
     */
    public function setRevision($value)
    {
        return $this->set('Revision', $value);
    }
}


/**
 * Execution object for the RestoreFileToRevision choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_RestoreFileToRevision_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RestoreFileToRevision choreography.
     *
     * @param Temboo_Session $session The session that owns this RestoreFileToRevision execution.
     * @param Dropbox_RestoreFileToRevision $choreo The choregraphy object for this execution.
     * @param Dropbox_RestoreFileToRevision_Inputs|array $inputs (optional) Inputs as Dropbox_RestoreFileToRevision_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_RestoreFileToRevision_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_RestoreFileToRevision $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RestoreFileToRevision execution.
     *
     * @return Dropbox_RestoreFileToRevision_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this RestoreFileToRevision execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_RestoreFileToRevision_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_RestoreFileToRevision_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RestoreFileToRevision choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_RestoreFileToRevision_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RestoreFileToRevision choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_RestoreFileToRevision_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RestoreFileToRevision execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a thumbnail for a specified image.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_GetThumbnail extends Temboo_Choreography
{
    /**
     * Retrieves a thumbnail for a specified image.
     *
     * @param Temboo_Session $session The session that owns this GetThumbnail choreography.
     * @return Dropbox_GetThumbnail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/GetThumbnail/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetThumbnail choreography.
     *
     * @param Dropbox_GetThumbnail_Inputs|array $inputs (optional) Inputs as Dropbox_GetThumbnail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_GetThumbnail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_GetThumbnail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetThumbnail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_GetThumbnail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_GetThumbnail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetThumbnail choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_GetThumbnail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetThumbnail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_GetThumbnail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetThumbnail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_GetThumbnail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_GetThumbnail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetThumbnail choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_GetThumbnail_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetThumbnail choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_GetThumbnail_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this GetThumbnail choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_GetThumbnail_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this GetThumbnail choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_GetThumbnail_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the ImageFormat input for this GetThumbnail choreography.
     *
     * @param string $value (optional, string) The thumbnail format to return for the specified image. Accepted values are: jpeg (default) or png.
     * @return Dropbox_GetThumbnail_Inputs For method chaining.
     */
    public function setImageFormat($value)
    {
        return $this->set('ImageFormat', $value);
    }

    /**
     * Set the value for the Path input for this GetThumbnail choreography.
     *
     * @param string $value (required, string) The path to the file that you want to generate a thumbnail for (i.e. RootFolder/SubFolder/MyFile.txt).
     * @return Dropbox_GetThumbnail_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetThumbnail choreography.
     *
     * @param mixed $value (optional, any) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_GetThumbnail_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Size input for this GetThumbnail choreography.
     *
     * @param string $value (optional, string) The size of the thumbnail to generate. Accepted values are: small, medium, s, m, l, xl. See Choreo documentation for exact dimensions. Defaults to "small".
     * @return Dropbox_GetThumbnail_Inputs For method chaining.
     */
    public function setSize($value)
    {
        return $this->set('Size', $value);
    }
}


/**
 * Execution object for the GetThumbnail choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_GetThumbnail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetThumbnail choreography.
     *
     * @param Temboo_Session $session The session that owns this GetThumbnail execution.
     * @param Dropbox_GetThumbnail $choreo The choregraphy object for this execution.
     * @param Dropbox_GetThumbnail_Inputs|array $inputs (optional) Inputs as Dropbox_GetThumbnail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_GetThumbnail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_GetThumbnail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetThumbnail execution.
     *
     * @return Dropbox_GetThumbnail_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetThumbnail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_GetThumbnail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_GetThumbnail_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetThumbnail choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_GetThumbnail_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetThumbnail choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_GetThumbnail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetThumbnail execution.
     *
     * @return string (string) The base64 encoded image content of the thumbnail.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a Dropbox file or folder that you specify.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_DeleteFileOrFolder extends Temboo_Choreography
{
    /**
     * Deletes a Dropbox file or folder that you specify.
     *
     * @param Temboo_Session $session The session that owns this DeleteFileOrFolder choreography.
     * @return Dropbox_DeleteFileOrFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/DeleteFileOrFolder/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteFileOrFolder choreography.
     *
     * @param Dropbox_DeleteFileOrFolder_Inputs|array $inputs (optional) Inputs as Dropbox_DeleteFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_DeleteFileOrFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_DeleteFileOrFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFileOrFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_DeleteFileOrFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_DeleteFileOrFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_DeleteFileOrFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteFileOrFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_DeleteFileOrFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFileOrFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteFileOrFolder choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFileOrFolder choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this DeleteFileOrFolder choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this DeleteFileOrFolder choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Path input for this DeleteFileOrFolder choreography.
     *
     * @param string $value (required, string) The path to the file or folder you want to delete (i.e. RootFolder/SubFolder/FileToDelete.txt).
     * @return Dropbox_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteFileOrFolder choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_DeleteFileOrFolder_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the DeleteFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_DeleteFileOrFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFileOrFolder choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteFileOrFolder execution.
     * @param Dropbox_DeleteFileOrFolder $choreo The choregraphy object for this execution.
     * @param Dropbox_DeleteFileOrFolder_Inputs|array $inputs (optional) Inputs as Dropbox_DeleteFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_DeleteFileOrFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_DeleteFileOrFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFileOrFolder execution.
     *
     * @return Dropbox_DeleteFileOrFolder_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this DeleteFileOrFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_DeleteFileOrFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_DeleteFileOrFolder_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_DeleteFileOrFolder_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteFileOrFolder choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_DeleteFileOrFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteFileOrFolder execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a Dropbox folder.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_CreateFolder extends Temboo_Choreography
{
    /**
     * Creates a Dropbox folder.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder choreography.
     * @return Dropbox_CreateFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/CreateFolder/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateFolder choreography.
     *
     * @param Dropbox_CreateFolder_Inputs|array $inputs (optional) Inputs as Dropbox_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_CreateFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_CreateFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_CreateFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_CreateFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFolder choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_CreateFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_CreateFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_CreateFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_CreateFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateFolder choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_CreateFolder_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateFolder choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_CreateFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this CreateFolder choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_CreateFolder_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this CreateFolder choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_CreateFolder_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the NewFolderName input for this CreateFolder choreography.
     *
     * @param string $value (required, string) The name of the new folder to create. A path with a root folder is also valid (i.e. RootFolder/NewFolderName).
     * @return Dropbox_CreateFolder_Inputs For method chaining.
     */
    public function setNewFolderName($value)
    {
        return $this->set('NewFolderName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateFolder choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_CreateFolder_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CreateFolder choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_CreateFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFolder choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder execution.
     * @param Dropbox_CreateFolder $choreo The choregraphy object for this execution.
     * @param Dropbox_CreateFolder_Inputs|array $inputs (optional) Inputs as Dropbox_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_CreateFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_CreateFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFolder execution.
     *
     * @return Dropbox_CreateFolder_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this CreateFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_CreateFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_CreateFolder_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateFolder choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_CreateFolder_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateFolder choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_CreateFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateFolder execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about the user's account.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_AccountInfo extends Temboo_Choreography
{
    /**
     * Retrieves information about the user's account.
     *
     * @param Temboo_Session $session The session that owns this AccountInfo choreography.
     * @return Dropbox_AccountInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/AccountInfo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AccountInfo choreography.
     *
     * @param Dropbox_AccountInfo_Inputs|array $inputs (optional) Inputs as Dropbox_AccountInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_AccountInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_AccountInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AccountInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_AccountInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_AccountInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AccountInfo choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_AccountInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AccountInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_AccountInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AccountInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_AccountInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_AccountInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this AccountInfo choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_AccountInfo_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this AccountInfo choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_AccountInfo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this AccountInfo choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_AccountInfo_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this AccountInfo choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_AccountInfo_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AccountInfo choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_AccountInfo_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the AccountInfo choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_AccountInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AccountInfo choreography.
     *
     * @param Temboo_Session $session The session that owns this AccountInfo execution.
     * @param Dropbox_AccountInfo $choreo The choregraphy object for this execution.
     * @param Dropbox_AccountInfo_Inputs|array $inputs (optional) Inputs as Dropbox_AccountInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_AccountInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_AccountInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AccountInfo execution.
     *
     * @return Dropbox_AccountInfo_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this AccountInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_AccountInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_AccountInfo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AccountInfo choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_AccountInfo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AccountInfo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_AccountInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AccountInfo execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a file to your Dropbox account, and returns the file content as Base64 encoded data.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_RetrieveBase64EncodedFile extends Temboo_Choreography
{
    /**
     * Retrieves a file to your Dropbox account, and returns the file content as Base64 encoded data.
     *
     * @param Temboo_Session $session The session that owns this RetrieveBase64EncodedFile choreography.
     * @return Dropbox_RetrieveBase64EncodedFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/RetrieveBase64EncodedFile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveBase64EncodedFile choreography.
     *
     * @param Dropbox_RetrieveBase64EncodedFile_Inputs|array $inputs (optional) Inputs as Dropbox_RetrieveBase64EncodedFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_RetrieveBase64EncodedFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_RetrieveBase64EncodedFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveBase64EncodedFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_RetrieveBase64EncodedFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_RetrieveBase64EncodedFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveBase64EncodedFile choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_RetrieveBase64EncodedFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveBase64EncodedFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_RetrieveBase64EncodedFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveBase64EncodedFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_RetrieveBase64EncodedFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_RetrieveBase64EncodedFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetrieveBase64EncodedFile choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_RetrieveBase64EncodedFile_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveBase64EncodedFile choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_RetrieveBase64EncodedFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this RetrieveBase64EncodedFile choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_RetrieveBase64EncodedFile_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this RetrieveBase64EncodedFile choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_RetrieveBase64EncodedFile_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Path input for this RetrieveBase64EncodedFile choreography.
     *
     * @param string $value (required, string) The path to file you want to retrieve (i.e. RootFolder/SubFolder/MyFile.txt). Only the file name is necessary when the file is at the root level.
     * @return Dropbox_RetrieveBase64EncodedFile_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveBase64EncodedFile choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_RetrieveBase64EncodedFile_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the RetrieveBase64EncodedFile choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_RetrieveBase64EncodedFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveBase64EncodedFile choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveBase64EncodedFile execution.
     * @param Dropbox_RetrieveBase64EncodedFile $choreo The choregraphy object for this execution.
     * @param Dropbox_RetrieveBase64EncodedFile_Inputs|array $inputs (optional) Inputs as Dropbox_RetrieveBase64EncodedFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_RetrieveBase64EncodedFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_RetrieveBase64EncodedFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveBase64EncodedFile execution.
     *
     * @return Dropbox_RetrieveBase64EncodedFile_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this RetrieveBase64EncodedFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_RetrieveBase64EncodedFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_RetrieveBase64EncodedFile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveBase64EncodedFile choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_RetrieveBase64EncodedFile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveBase64EncodedFile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_RetrieveBase64EncodedFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveBase64EncodedFile execution.
     *
     * @return string (string) The response from Dropbox. The response will contain the contents of the file you are retrieving as Base64 encoded data.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you keep up with changes to files and folders in a user's Dropbox.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Delta extends Temboo_Choreography
{
    /**
     * Allows you keep up with changes to files and folders in a user's Dropbox.
     *
     * @param Temboo_Session $session The session that owns this Delta choreography.
     * @return Dropbox_Delta New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/Delta/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this Delta choreography.
     *
     * @param Dropbox_Delta_Inputs|array $inputs (optional) Inputs as Dropbox_Delta_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Delta_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_Delta_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Delta choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Delta_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_Delta_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Delta choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Delta_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the Delta choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_Delta_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Delta input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_Delta_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_Delta_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Delta choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_Delta_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Delta choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_Delta_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this Delta choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_Delta_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this Delta choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_Delta_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this Delta choreography.
     *
     * @param string $value (optional, string) A string that is used to keep track of your current state. On the next call pass in this value to return delta entries that have been recorded since the cursor was returned.
     * @return Dropbox_Delta_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the Locale input for this Delta choreography.
     *
     * @param string $value (optional, string) The metadata returned will have its size field translated based on the given locale.
     * @return Dropbox_Delta_Inputs For method chaining.
     */
    public function setLocale($value)
    {
        return $this->set('Locale', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Delta choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_Delta_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Delta choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Delta_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Delta choreography.
     *
     * @param Temboo_Session $session The session that owns this Delta execution.
     * @param Dropbox_Delta $choreo The choregraphy object for this execution.
     * @param Dropbox_Delta_Inputs|array $inputs (optional) Inputs as Dropbox_Delta_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_Delta_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_Delta $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Delta execution.
     *
     * @return Dropbox_Delta_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this Delta execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_Delta_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_Delta_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the Delta choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_Delta_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the Delta choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_Delta_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this Delta execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a shareable link to files or folders.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_GetShareableLink extends Temboo_Choreography
{
    /**
     * Retrieves a shareable link to files or folders.
     *
     * @param Temboo_Session $session The session that owns this GetShareableLink choreography.
     * @return Dropbox_GetShareableLink New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/GetShareableLink/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetShareableLink choreography.
     *
     * @param Dropbox_GetShareableLink_Inputs|array $inputs (optional) Inputs as Dropbox_GetShareableLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_GetShareableLink_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_GetShareableLink_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetShareableLink choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_GetShareableLink_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_GetShareableLink_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetShareableLink choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_GetShareableLink_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetShareableLink choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_GetShareableLink_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetShareableLink input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_GetShareableLink_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_GetShareableLink_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetShareableLink choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_GetShareableLink_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetShareableLink choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_GetShareableLink_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this GetShareableLink choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_GetShareableLink_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this GetShareableLink choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_GetShareableLink_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the Path input for this GetShareableLink choreography.
     *
     * @param string $value (required, string) The path to the file or folder you want to return a shareable link for (i.e. RootFolder/SubFolder/MyFile.txt).
     * @return Dropbox_GetShareableLink_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetShareableLink choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_GetShareableLink_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetShareableLink choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_GetShareableLink_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetShareableLink choreography.
     *
     * @param Temboo_Session $session The session that owns this GetShareableLink execution.
     * @param Dropbox_GetShareableLink $choreo The choregraphy object for this execution.
     * @param Dropbox_GetShareableLink_Inputs|array $inputs (optional) Inputs as Dropbox_GetShareableLink_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_GetShareableLink_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_GetShareableLink $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetShareableLink execution.
     *
     * @return Dropbox_GetShareableLink_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetShareableLink execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_GetShareableLink_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_GetShareableLink_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetShareableLink choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_GetShareableLink_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetShareableLink choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_GetShareableLink_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetShareableLink execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Uploads a file to your Dropbox account.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_UploadFile extends Temboo_Choreography
{
    /**
     * Uploads a file to your Dropbox account.
     *
     * @param Temboo_Session $session The session that owns this UploadFile choreography.
     * @return Dropbox_UploadFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/UploadFile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UploadFile choreography.
     *
     * @param Dropbox_UploadFile_Inputs|array $inputs (optional) Inputs as Dropbox_UploadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_UploadFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_UploadFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_UploadFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_UploadFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadFile choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_UploadFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UploadFile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_UploadFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_UploadFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_UploadFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this UploadFile choreography.
     *
     * @param string $value (conditional, string) The Base64-encoded contents of the file you want to upload. Required unless using the VaultFile alias instead (an advanced option used when running Choreos in the Temboo Designer).
     * @return Dropbox_UploadFile_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UploadFile choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_UploadFile_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UploadFile choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_UploadFile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this UploadFile choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_UploadFile_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this UploadFile choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_UploadFile_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the FileName input for this UploadFile choreography.
     *
     * @param string $value (required, string) The name of the file you are uploading to Dropbox.
     * @return Dropbox_UploadFile_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the Folder input for this UploadFile choreography.
     *
     * @param string $value (optional, string) The name of the folder that that you want to upload a file to. A path to a sub-folder is also valid (i.e. RootFolder/SubFolder).
     * @return Dropbox_UploadFile_Inputs For method chaining.
     */
    public function setFolder($value)
    {
        return $this->set('Folder', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UploadFile choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_UploadFile_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the UploadFile choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_UploadFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadFile choreography.
     *
     * @param Temboo_Session $session The session that owns this UploadFile execution.
     * @param Dropbox_UploadFile $choreo The choregraphy object for this execution.
     * @param Dropbox_UploadFile_Inputs|array $inputs (optional) Inputs as Dropbox_UploadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_UploadFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_UploadFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadFile execution.
     *
     * @return Dropbox_UploadFile_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this UploadFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_UploadFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_UploadFile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UploadFile choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_UploadFile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UploadFile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_UploadFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UploadFile execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Moves a file or folder to a new location in the Dropbox tree.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_MoveFileOrFolder extends Temboo_Choreography
{
    /**
     * Moves a file or folder to a new location in the Dropbox tree.
     *
     * @param Temboo_Session $session The session that owns this MoveFileOrFolder choreography.
     * @return Dropbox_MoveFileOrFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dropbox/MoveFileOrFolder/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this MoveFileOrFolder choreography.
     *
     * @param Dropbox_MoveFileOrFolder_Inputs|array $inputs (optional) Inputs as Dropbox_MoveFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_MoveFileOrFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dropbox_MoveFileOrFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MoveFileOrFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_MoveFileOrFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dropbox_MoveFileOrFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MoveFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_MoveFileOrFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the MoveFileOrFolder choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dropbox_MoveFileOrFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MoveFileOrFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dropbox_MoveFileOrFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return Dropbox_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this MoveFileOrFolder choreography.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Dropbox_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this MoveFileOrFolder choreography.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Dropbox_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppKey input for this MoveFileOrFolder choreography.
     *
     * @param string $value (required, string) The App Key provided by Dropbox (AKA the OAuth Consumer Key).
     * @return Dropbox_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the AppSecret input for this MoveFileOrFolder choreography.
     *
     * @param string $value (required, string) The App Secret provided by Dropbox (AKA the OAuth Consumer Secret).
     * @return Dropbox_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setAppSecret($value)
    {
        return $this->set('AppSecret', $value);
    }

    /**
     * Set the value for the FromPath input for this MoveFileOrFolder choreography.
     *
     * @param string $value (required, string) Specifies the file or folder to be copied.
     * @return Dropbox_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setFromPath($value)
    {
        return $this->set('FromPath', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this MoveFileOrFolder choreography.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return Dropbox_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ToPath input for this MoveFileOrFolder choreography.
     *
     * @param string $value (required, string) Specifies the destination path, including the new name for the file or folder.
     * @return Dropbox_MoveFileOrFolder_Inputs For method chaining.
     */
    public function setToPath($value)
    {
        return $this->set('ToPath', $value);
    }
}


/**
 * Execution object for the MoveFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_MoveFileOrFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MoveFileOrFolder choreography.
     *
     * @param Temboo_Session $session The session that owns this MoveFileOrFolder execution.
     * @param Dropbox_MoveFileOrFolder $choreo The choregraphy object for this execution.
     * @param Dropbox_MoveFileOrFolder_Inputs|array $inputs (optional) Inputs as Dropbox_MoveFileOrFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dropbox_MoveFileOrFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dropbox_MoveFileOrFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MoveFileOrFolder execution.
     *
     * @return Dropbox_MoveFileOrFolder_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this MoveFileOrFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dropbox_MoveFileOrFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dropbox_MoveFileOrFolder_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the MoveFileOrFolder choreography.
 *
 * @package Temboo
 * @subpackage Dropbox
 */
class Dropbox_MoveFileOrFolder_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the MoveFileOrFolder choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dropbox_MoveFileOrFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this MoveFileOrFolder execution.
     *
     * @return string The response from Dropbox. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>