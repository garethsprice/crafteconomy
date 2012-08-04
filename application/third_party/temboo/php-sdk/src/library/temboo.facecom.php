<?php

/**
 * Temboo PHP SDK FaceCom classes
 *
 * Execute Choreographies from the Temboo FaceCom bundle.
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
 * @subpackage FaceCom
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Detect and recognize one or more user ID's faces in specified photos submitted via a URL(s).
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesRecognize extends Temboo_Choreography
{
    /**
     * Detect and recognize one or more user ID's faces in specified photos submitted via a URL(s).
     *
     * @param Temboo_Session $session The session that owns this FacesRecognize choreography.
     * @return FaceCom_FacesRecognize New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/FacesRecognize/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FacesRecognize choreography.
     *
     * @param FaceCom_FacesRecognize_Inputs|array $inputs (optional) Inputs as FaceCom_FacesRecognize_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_FacesRecognize_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_FacesRecognize_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FacesRecognize choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_FacesRecognize_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_FacesRecognize_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FacesRecognize choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesRecognize_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FacesRecognize choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_FacesRecognize_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FacesRecognize input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_FacesRecognize_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_FacesRecognize_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FacesRecognize choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_FacesRecognize_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FacesRecognize choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_FacesRecognize_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Attributes input for this FacesRecognize choreography.
     *
     * @param string $value (optional, string) Specify attributes returned: all, none, or a list of comma-separated attributes. Default attributes returned are: gender, glasses, smiling.
     * @return FaceCom_FacesRecognize_Inputs For method chaining.
     */
    public function setAttributes($value)
    {
        return $this->set('Attributes', $value);
    }

    /**
     * Set the value for the CallbackURL input for this FacesRecognize choreography.
     *
     * @param string $value (optional, string) Invoke the method, and POST the response to the specified URL. For additional information, see the Choreo documentation.
     * @return FaceCom_FacesRecognize_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the Callback input for this FacesRecognize choreography.
     *
     * @param string $value (optional, string) Enter a javascript method to wrap a JSON-formatted response for JSONP support.  This call is ignored if ResponseFormat=xml.
     * @return FaceCom_FacesRecognize_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the Detector input for this FacesRecognize choreography.
     *
     * @param string $value (optional, string) Specify the face detector work mode.  Enter: Normal (default), or Aggressive. Note that using Aggressive counts as two Normal detections.
     * @return FaceCom_FacesRecognize_Inputs For method chaining.
     */
    public function setDetector($value)
    {
        return $this->set('Detector', $value);
    }

    /**
     * Set the value for the Namespace input for this FacesRecognize choreography.
     *
     * @param string $value (optional, string) Enter a default user if using short-hand syntax (only the user ID, without adding the @namespace).
     * @return FaceCom_FacesRecognize_Inputs For method chaining.
     */
    public function setNamespace($value)
    {
        return $this->set('Namespace', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FacesRecognize choreography.
     *
     * @param string $value (optional, string) You have the option of selecting json or xml.  Defaults to xml.
     * @return FaceCom_FacesRecognize_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UIDs input for this FacesRecognize choreography.
     *
     * @param string $value (required, string) Enter the user IDs to search for in the photo(s) being passed in the request.
     * @return FaceCom_FacesRecognize_Inputs For method chaining.
     */
    public function setUIDs($value)
    {
        return $this->set('UIDs', $value);
    }

    /**
     * Set the value for the URLs input for this FacesRecognize choreography.
     *
     * @param string $value (required, string) A comma-separated list of JPG photos to be tagged.
     * @return FaceCom_FacesRecognize_Inputs For method chaining.
     */
    public function setURLs($value)
    {
        return $this->set('URLs', $value);
    }
}


/**
 * Execution object for the FacesRecognize choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesRecognize_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FacesRecognize choreography.
     *
     * @param Temboo_Session $session The session that owns this FacesRecognize execution.
     * @param FaceCom_FacesRecognize $choreo The choregraphy object for this execution.
     * @param FaceCom_FacesRecognize_Inputs|array $inputs (optional) Inputs as FaceCom_FacesRecognize_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_FacesRecognize_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_FacesRecognize $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FacesRecognize execution.
     *
     * @return FaceCom_FacesRecognize_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FacesRecognize execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_FacesRecognize_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_FacesRecognize_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FacesRecognize choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesRecognize_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FacesRecognize choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_FacesRecognize_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FacesRecognize execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve tags for detected faces in one or more photos passed via an uploaded file, or by passing the base64-encoded contents of a photo.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesDetectUploadFromDisk extends Temboo_Choreography
{
    /**
     * Retrieve tags for detected faces in one or more photos passed via an uploaded file, or by passing the base64-encoded contents of a photo.
     *
     * @param Temboo_Session $session The session that owns this FacesDetectUploadFromDisk choreography.
     * @return FaceCom_FacesDetectUploadFromDisk New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/FacesDetectUploadFromDisk/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FacesDetectUploadFromDisk choreography.
     *
     * @param FaceCom_FacesDetectUploadFromDisk_Inputs|array $inputs (optional) Inputs as FaceCom_FacesDetectUploadFromDisk_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_FacesDetectUploadFromDisk_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_FacesDetectUploadFromDisk_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FacesDetectUploadFromDisk choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_FacesDetectUploadFromDisk_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_FacesDetectUploadFromDisk_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FacesDetectUploadFromDisk choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesDetectUploadFromDisk_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FacesDetectUploadFromDisk choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_FacesDetectUploadFromDisk_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FacesDetectUploadFromDisk input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_FacesDetectUploadFromDisk_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_FacesDetectUploadFromDisk_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this FacesDetectUploadFromDisk choreography.
     *
     * @param string $value (conditional, string) The base64 encoded file contents of the image you want to upload. Required unless using the VaultFile alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return FaceCom_FacesDetectUploadFromDisk_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the APIKey input for this FacesDetectUploadFromDisk choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_FacesDetectUploadFromDisk_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FacesDetectUploadFromDisk choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_FacesDetectUploadFromDisk_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Attributes input for this FacesDetectUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Specify attributes returned: all, none, or a list of comma-separated attributes. Default attributes returned are: gender, glasses, smiling.
     * @return FaceCom_FacesDetectUploadFromDisk_Inputs For method chaining.
     */
    public function setAttributes($value)
    {
        return $this->set('Attributes', $value);
    }

    /**
     * Set the value for the CallbackURL input for this FacesDetectUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Specify a method, and POST the response to the specified URL.
     * @return FaceCom_FacesDetectUploadFromDisk_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the Detector input for this FacesDetectUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Specify the face detector work mode.  Enter: Normal (default), or Aggressive. Note that using Aggressive counts as two Normal detections.
     * @return FaceCom_FacesDetectUploadFromDisk_Inputs For method chaining.
     */
    public function setDetector($value)
    {
        return $this->set('Detector', $value);
    }

    /**
     * Set the value for the FileName input for this FacesDetectUploadFromDisk choreography.
     *
     * @param string $value (required, string) The name of the file you are transferring to Face.com
     * @return FaceCom_FacesDetectUploadFromDisk_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FacesDetectUploadFromDisk choreography.
     *
     * @param string $value (conditional, string) You have the option of selecting json or xml. Defaults to xml.
     * @return FaceCom_FacesDetectUploadFromDisk_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the FacesDetectUploadFromDisk choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesDetectUploadFromDisk_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FacesDetectUploadFromDisk choreography.
     *
     * @param Temboo_Session $session The session that owns this FacesDetectUploadFromDisk execution.
     * @param FaceCom_FacesDetectUploadFromDisk $choreo The choregraphy object for this execution.
     * @param FaceCom_FacesDetectUploadFromDisk_Inputs|array $inputs (optional) Inputs as FaceCom_FacesDetectUploadFromDisk_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_FacesDetectUploadFromDisk_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_FacesDetectUploadFromDisk $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FacesDetectUploadFromDisk execution.
     *
     * @return FaceCom_FacesDetectUploadFromDisk_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FacesDetectUploadFromDisk execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_FacesDetectUploadFromDisk_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_FacesDetectUploadFromDisk_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FacesDetectUploadFromDisk choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesDetectUploadFromDisk_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FacesDetectUploadFromDisk choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_FacesDetectUploadFromDisk_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FacesDetectUploadFromDisk execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Detect and recognize one or more user ID's faces in specified photos.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesRecognizeUploadFromDisk extends Temboo_Choreography
{
    /**
     * Detect and recognize one or more user ID's faces in specified photos.
     *
     * @param Temboo_Session $session The session that owns this FacesRecognizeUploadFromDisk choreography.
     * @return FaceCom_FacesRecognizeUploadFromDisk New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/FacesRecognizeUploadFromDisk/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param FaceCom_FacesRecognizeUploadFromDisk_Inputs|array $inputs (optional) Inputs as FaceCom_FacesRecognizeUploadFromDisk_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_FacesRecognizeUploadFromDisk_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_FacesRecognizeUploadFromDisk_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FacesRecognizeUploadFromDisk choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesRecognizeUploadFromDisk_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FacesRecognizeUploadFromDisk choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FacesRecognizeUploadFromDisk input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param string $value (optional, string) The base64 encoded file contents of the image you want to upload. Required unless using the VaultFile alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the APIKey input for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Attributes input for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Specify attributes returned: all, none, or a list of comma-separated attributes. Default attributes returned are: gender, glasses, smiling.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function setAttributes($value)
    {
        return $this->set('Attributes', $value);
    }

    /**
     * Set the value for the CallbackURL input for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Invoke the method, and POST the response to the specified URL. For additional information, see the Choreo documentation.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the Callback input for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Enter a javascript method to wrap a JSON-formatted response for JSONP support.  This call is ignored if ResponseFormat=xml.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the Detector input for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Specify the face detector work mode.  Enter: Normal (default), or Aggressive. Note that using Aggressive counts as two Normal detections.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function setDetector($value)
    {
        return $this->set('Detector', $value);
    }

    /**
     * Set the value for the FileName input for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param string $value (required, string) The name of the file you are transferring to Face.com
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the Namespace input for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Enter a default user if using short-hand syntax (only the user ID, without adding the @namespace)
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function setNamespace($value)
    {
        return $this->set('Namespace', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param string $value (optional, string) You have the option of selecting json or xml.  Defaults to xml.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UIDs input for this FacesRecognizeUploadFromDisk choreography.
     *
     * @param string $value (required, string) Enter the user IDs to search for in the photo(s) being passed in the request.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Inputs For method chaining.
     */
    public function setUIDs($value)
    {
        return $this->set('UIDs', $value);
    }

}


/**
 * Execution object for the FacesRecognizeUploadFromDisk choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesRecognizeUploadFromDisk_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FacesRecognizeUploadFromDisk choreography.
     *
     * @param Temboo_Session $session The session that owns this FacesRecognizeUploadFromDisk execution.
     * @param FaceCom_FacesRecognizeUploadFromDisk $choreo The choregraphy object for this execution.
     * @param FaceCom_FacesRecognizeUploadFromDisk_Inputs|array $inputs (optional) Inputs as FaceCom_FacesRecognizeUploadFromDisk_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_FacesRecognizeUploadFromDisk $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FacesRecognizeUploadFromDisk execution.
     *
     * @return FaceCom_FacesRecognizeUploadFromDisk_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FacesRecognizeUploadFromDisk execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_FacesRecognizeUploadFromDisk_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FacesRecognizeUploadFromDisk choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesRecognizeUploadFromDisk_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FacesRecognizeUploadFromDisk choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_FacesRecognizeUploadFromDisk_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FacesRecognizeUploadFromDisk execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves tags for detected faces in one or more photos submitted via a URL, and returns the list of tags in XML format.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesDetect extends Temboo_Choreography
{
    /**
     * Retrieves tags for detected faces in one or more photos submitted via a URL, and returns the list of tags in XML format.
     *
     * @param Temboo_Session $session The session that owns this FacesDetect choreography.
     * @return FaceCom_FacesDetect New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/FacesDetect/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FacesDetect choreography.
     *
     * @param FaceCom_FacesDetect_Inputs|array $inputs (optional) Inputs as FaceCom_FacesDetect_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_FacesDetect_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_FacesDetect_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FacesDetect choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_FacesDetect_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_FacesDetect_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FacesDetect choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesDetect_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FacesDetect choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_FacesDetect_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FacesDetect input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_FacesDetect_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_FacesDetect_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FacesDetect choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_FacesDetect_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FacesDetect choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_FacesDetect_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Attributes input for this FacesDetect choreography.
     *
     * @param string $value (optional, string) Specify attributes returned: all, none, or a list of comma-separated attributes. Default attributes returned are: gender, glasses, smiling.
     * @return FaceCom_FacesDetect_Inputs For method chaining.
     */
    public function setAttributes($value)
    {
        return $this->set('Attributes', $value);
    }

    /**
     * Set the value for the CallbackURL input for this FacesDetect choreography.
     *
     * @param string $value (optional, string) Specify a method, and POST the response to the specified URL.
     * @return FaceCom_FacesDetect_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the Detector input for this FacesDetect choreography.
     *
     * @param string $value (optional, string) Specify the face detector work mode.  Enter: Normal (default), or Aggressive. Note that using Aggressive counts as two Normal detections.
     * @return FaceCom_FacesDetect_Inputs For method chaining.
     */
    public function setDetector($value)
    {
        return $this->set('Detector', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FacesDetect choreography.
     *
     * @param string $value (optional, string) You have the option of selecting json or xml. Defaults to xml.
     * @return FaceCom_FacesDetect_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the URLs input for this FacesDetect choreography.
     *
     * @param string $value (required, string) A comma-separated list of JPG photos to be tagged.
     * @return FaceCom_FacesDetect_Inputs For method chaining.
     */
    public function setURLs($value)
    {
        return $this->set('URLs', $value);
    }
}


/**
 * Execution object for the FacesDetect choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesDetect_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FacesDetect choreography.
     *
     * @param Temboo_Session $session The session that owns this FacesDetect execution.
     * @param FaceCom_FacesDetect $choreo The choregraphy object for this execution.
     * @param FaceCom_FacesDetect_Inputs|array $inputs (optional) Inputs as FaceCom_FacesDetect_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_FacesDetect_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_FacesDetect $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FacesDetect execution.
     *
     * @return FaceCom_FacesDetect_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FacesDetect execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_FacesDetect_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_FacesDetect_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FacesDetect choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesDetect_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FacesDetect choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_FacesDetect_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FacesDetect execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Display saved tags in photos that have been passed via an uploaded file, or by passing the base64-encoded contents of a photo.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsGetUploadFromDisk extends Temboo_Choreography
{
    /**
     * Display saved tags in photos that have been passed via an uploaded file, or by passing the base64-encoded contents of a photo.
     *
     * @param Temboo_Session $session The session that owns this TagsGetUploadFromDisk choreography.
     * @return FaceCom_TagsGetUploadFromDisk New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/TagsGetUploadFromDisk/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TagsGetUploadFromDisk choreography.
     *
     * @param FaceCom_TagsGetUploadFromDisk_Inputs|array $inputs (optional) Inputs as FaceCom_TagsGetUploadFromDisk_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_TagsGetUploadFromDisk_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_TagsGetUploadFromDisk_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TagsGetUploadFromDisk choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_TagsGetUploadFromDisk_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TagsGetUploadFromDisk choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsGetUploadFromDisk_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TagsGetUploadFromDisk choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TagsGetUploadFromDisk input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (optional, string) The base64 encoded file contents of the image you want to upload. Required unless using the VaultFile alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the APIKey input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Callback input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Enter a javascript method to wrap a JSON-formatted response for JSONP support.  This call is ignored if ResponseFormat=xml
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the FileName input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (required, string) The name of the file you are transferring to Face.com
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the Filter input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Filter results using the following format and options: gender:male/female. For additional options see Choreo documentation.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Limit input for this TagsGetUploadFromDisk choreography.
     *
     * @param int $value (optional, integer) Enter the maximum number of tags to be returned. Default: 5.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Namespace input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Enter a default user namespace to be used for all users specified in teh short-hand syntax (user ID, without '@namespace').
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setNamespace($value)
    {
        return $this->set('Namespace', $value);
    }

    /**
     * Set the value for the Order input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Enter: recent, or random.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PIDs input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Enter photo IDs to retrieve tags from.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setPIDs($value)
    {
        return $this->set('PIDs', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (optional, string) You have the option of selecting json or xml.  Defaults to xml.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Together input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (optional, string) If specifying multiple UIDs, return only those photos where ALL UIDs appear together in the photo. Default: false.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setTogether($value)
    {
        return $this->set('Together', $value);
    }

    /**
     * Set the value for the UIDs input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Enter a comma-separated list of user IDs to retrieve.
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setUIDs($value)
    {
        return $this->set('UIDs', $value);
    }

    /**
     * Set the value for the UserAuth input for this TagsGetUploadFromDisk choreography.
     *
     * @param string $value (optional, string) Use to access Facebook and Twitter resources for tagging.  Enter name:value pairs, comma-separated. EXAMPLE fb_user:[facebook user_id].
     * @return FaceCom_TagsGetUploadFromDisk_Inputs For method chaining.
     */
    public function setUserAuth($value)
    {
        return $this->set('UserAuth', $value);
    }

}


/**
 * Execution object for the TagsGetUploadFromDisk choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsGetUploadFromDisk_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TagsGetUploadFromDisk choreography.
     *
     * @param Temboo_Session $session The session that owns this TagsGetUploadFromDisk execution.
     * @param FaceCom_TagsGetUploadFromDisk $choreo The choregraphy object for this execution.
     * @param FaceCom_TagsGetUploadFromDisk_Inputs|array $inputs (optional) Inputs as FaceCom_TagsGetUploadFromDisk_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_TagsGetUploadFromDisk_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_TagsGetUploadFromDisk $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TagsGetUploadFromDisk execution.
     *
     * @return FaceCom_TagsGetUploadFromDisk_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this TagsGetUploadFromDisk execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_TagsGetUploadFromDisk_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_TagsGetUploadFromDisk_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TagsGetUploadFromDisk choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsGetUploadFromDisk_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TagsGetUploadFromDisk choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_TagsGetUploadFromDisk_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TagsGetUploadFromDisk execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Remove a previously saved face tag from a photo.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsRemove extends Temboo_Choreography
{
    /**
     * Remove a previously saved face tag from a photo.
     *
     * @param Temboo_Session $session The session that owns this TagsRemove choreography.
     * @return FaceCom_TagsRemove New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/TagsRemove/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TagsRemove choreography.
     *
     * @param FaceCom_TagsRemove_Inputs|array $inputs (optional) Inputs as FaceCom_TagsRemove_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_TagsRemove_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_TagsRemove_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TagsRemove choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_TagsRemove_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_TagsRemove_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TagsRemove choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsRemove_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TagsRemove choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_TagsRemove_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TagsRemove input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_TagsRemove_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_TagsRemove_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TagsRemove choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_TagsRemove_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this TagsRemove choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_TagsRemove_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Callback input for this TagsRemove choreography.
     *
     * @param string $value (optional, string) Enter a javascript method to wrap a JSON-formatted response for JSONP support.  This call is ignored if ResponseFormat=xml.
     * @return FaceCom_TagsRemove_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the Password input for this TagsRemove choreography.
     *
     * @param string $value (optional, string) Must be enabled in application settings. Use when saving tags is specified to be a priviledged action in your application.
     * @return FaceCom_TagsRemove_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TagsRemove choreography.
     *
     * @param string $value (optional, string) You have the option of selecting json or xml.  Defaults to xml.
     * @return FaceCom_TagsRemove_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TIDs input for this TagsRemove choreography.
     *
     * @param string $value (required, string) Enter at least one tag ID, obtained from FacesDetect or FacesRecognized choreos. The tag ID will be associated with the user ID (UID).
     * @return FaceCom_TagsRemove_Inputs For method chaining.
     */
    public function setTIDs($value)
    {
        return $this->set('TIDs', $value);
    }

    /**
     * Set the value for the TaggerID input for this TagsRemove choreography.
     *
     * @param string $value (required, string) Enter the user ID of the tagger.
     * @return FaceCom_TagsRemove_Inputs For method chaining.
     */
    public function setTaggerID($value)
    {
        return $this->set('TaggerID', $value);
    }

    /**
     * Set the value for the UserAuth input for this TagsRemove choreography.
     *
     * @param string $value (optional, string) Use to access Facebook and Twitter resources for tagging.  Enter name:value pairs, comma-separated. EXAMPLE fb_user:[facebook user_id].
     * @return FaceCom_TagsRemove_Inputs For method chaining.
     */
    public function setUserAuth($value)
    {
        return $this->set('UserAuth', $value);
    }
}


/**
 * Execution object for the TagsRemove choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsRemove_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TagsRemove choreography.
     *
     * @param Temboo_Session $session The session that owns this TagsRemove execution.
     * @param FaceCom_TagsRemove $choreo The choregraphy object for this execution.
     * @param FaceCom_TagsRemove_Inputs|array $inputs (optional) Inputs as FaceCom_TagsRemove_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_TagsRemove_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_TagsRemove $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TagsRemove execution.
     *
     * @return FaceCom_TagsRemove_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this TagsRemove execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_TagsRemove_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_TagsRemove_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TagsRemove choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsRemove_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TagsRemove choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_TagsRemove_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TagsRemove execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve training status for provided user IDs.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesStatus extends Temboo_Choreography
{
    /**
     * Retrieve training status for provided user IDs.
     *
     * @param Temboo_Session $session The session that owns this FacesStatus choreography.
     * @return FaceCom_FacesStatus New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/FacesStatus/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FacesStatus choreography.
     *
     * @param FaceCom_FacesStatus_Inputs|array $inputs (optional) Inputs as FaceCom_FacesStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_FacesStatus_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_FacesStatus_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FacesStatus choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_FacesStatus_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_FacesStatus_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FacesStatus choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesStatus_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FacesStatus choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_FacesStatus_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FacesStatus input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_FacesStatus_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_FacesStatus_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FacesStatus choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_FacesStatus_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FacesStatus choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_FacesStatus_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the CallbackURL input for this FacesStatus choreography.
     *
     * @param string $value (optional, string) Invoke the method, and POST the response to the specified URL. For additional information, see the Choreo documentation.
     * @return FaceCom_FacesStatus_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the Callback input for this FacesStatus choreography.
     *
     * @param string $value (optional, string) Enter a javascript method to wrap a JSON-formatted response for JSONP support.  This call is ignored if ResponseFormat=xml.
     * @return FaceCom_FacesStatus_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the Namespace input for this FacesStatus choreography.
     *
     * @param string $value (optional, string) Enter a default user if using short-hand syntax (only the user ID, without adding the @namespace)
     * @return FaceCom_FacesStatus_Inputs For method chaining.
     */
    public function setNamespace($value)
    {
        return $this->set('Namespace', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FacesStatus choreography.
     *
     * @param string $value (optional, string) You have the option of selecting json or xml.  Defaults to xml.
     * @return FaceCom_FacesStatus_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UIDs input for this FacesStatus choreography.
     *
     * @param string $value (required, string) Enter the user IDs to search for in the photo(s) being passed in the request.
     * @return FaceCom_FacesStatus_Inputs For method chaining.
     */
    public function setUIDs($value)
    {
        return $this->set('UIDs', $value);
    }

    /**
     * Set the value for the UserAuth input for this FacesStatus choreography.
     *
     * @param string $value (optional, string) Use to access Facebook and Twitter resources for tagging.  Enter name:value pairs, comma-separated. EXAMPLE fb_user:[facebook user_id].
     * @return FaceCom_FacesStatus_Inputs For method chaining.
     */
    public function setUserAuth($value)
    {
        return $this->set('UserAuth', $value);
    }
}


/**
 * Execution object for the FacesStatus choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesStatus_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FacesStatus choreography.
     *
     * @param Temboo_Session $session The session that owns this FacesStatus execution.
     * @param FaceCom_FacesStatus $choreo The choregraphy object for this execution.
     * @param FaceCom_FacesStatus_Inputs|array $inputs (optional) Inputs as FaceCom_FacesStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_FacesStatus_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_FacesStatus $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FacesStatus execution.
     *
     * @return FaceCom_FacesStatus_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FacesStatus execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_FacesStatus_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_FacesStatus_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FacesStatus choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesStatus_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FacesStatus choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_FacesStatus_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FacesStatus execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain the current rate limit for a Face.com user account.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_AccountLimits extends Temboo_Choreography
{
    /**
     * Obtain the current rate limit for a Face.com user account.
     *
     * @param Temboo_Session $session The session that owns this AccountLimits choreography.
     * @return FaceCom_AccountLimits New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/AccountLimits/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AccountLimits choreography.
     *
     * @param FaceCom_AccountLimits_Inputs|array $inputs (optional) Inputs as FaceCom_AccountLimits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_AccountLimits_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_AccountLimits_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AccountLimits choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_AccountLimits_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_AccountLimits_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AccountLimits choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_AccountLimits_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AccountLimits choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_AccountLimits_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AccountLimits input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_AccountLimits_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_AccountLimits_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AccountLimits choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_AccountLimits_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this AccountLimits choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_AccountLimits_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AccountLimits choreography.
     *
     * @param string $value (optional, string) You have the option of selecting json or xml. Defaults to 'xml'.
     * @return FaceCom_AccountLimits_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the AccountLimits choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_AccountLimits_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AccountLimits choreography.
     *
     * @param Temboo_Session $session The session that owns this AccountLimits execution.
     * @param FaceCom_AccountLimits $choreo The choregraphy object for this execution.
     * @param FaceCom_AccountLimits_Inputs|array $inputs (optional) Inputs as FaceCom_AccountLimits_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_AccountLimits_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_AccountLimits $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AccountLimits execution.
     *
     * @return FaceCom_AccountLimits_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this AccountLimits execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_AccountLimits_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_AccountLimits_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AccountLimits choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_AccountLimits_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AccountLimits choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_AccountLimits_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AccountLimits execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Display saved tags in photos that have been uploaded via a URL, or for a specified User ID.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsGet extends Temboo_Choreography
{
    /**
     * Display saved tags in photos that have been uploaded via a URL, or for a specified User ID.
     *
     * @param Temboo_Session $session The session that owns this TagsGet choreography.
     * @return FaceCom_TagsGet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/TagsGet/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TagsGet choreography.
     *
     * @param FaceCom_TagsGet_Inputs|array $inputs (optional) Inputs as FaceCom_TagsGet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_TagsGet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_TagsGet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TagsGet choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_TagsGet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_TagsGet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TagsGet choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsGet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TagsGet choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_TagsGet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TagsGet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TagsGet choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this TagsGet choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Callback input for this TagsGet choreography.
     *
     * @param string $value (optional, string) Enter a javascript method to wrap a JSON-formatted response for JSONP support.  This call is ignored if ResponseFormat=xml
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the Filter input for this TagsGet choreography.
     *
     * @param string $value (optional, string) Filter results using the following format and options: gender:male/female. For additional options see Choreo documentation.
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Limit input for this TagsGet choreography.
     *
     * @param int $value (optional, integer) Enter the maximum number of tags to be returned. Default: 5.
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Namespace input for this TagsGet choreography.
     *
     * @param string $value (optional, string) Enter a default user namespace to be used for all users specified in teh short-hand syntax (user ID, without '@namespace').
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setNamespace($value)
    {
        return $this->set('Namespace', $value);
    }

    /**
     * Set the value for the Order input for this TagsGet choreography.
     *
     * @param string $value (optional, string) Enter: recent, or random.
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the PIDs input for this TagsGet choreography.
     *
     * @param string $value (optional, string) Enter photo IDs to retrieve tags from.
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setPIDs($value)
    {
        return $this->set('PIDs', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TagsGet choreography.
     *
     * @param string $value (optional, string) You have the option of selecting json or xml.  Defaults to xml.
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Together input for this TagsGet choreography.
     *
     * @param string $value (optional, string) If specifying multiple UIDs, return only those photos where ALL UIDs appear together in the photo. Default: false.
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setTogether($value)
    {
        return $this->set('Together', $value);
    }

    /**
     * Set the value for the UIDs input for this TagsGet choreography.
     *
     * @param string $value (optional, string) Enter a comma-separated list of user IDs to retrieve.
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setUIDs($value)
    {
        return $this->set('UIDs', $value);
    }

    /**
     * Set the value for the URLs input for this TagsGet choreography.
     *
     * @param string $value (optional, string) A comma-separated list of JPG photos to be tagged.
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setURLs($value)
    {
        return $this->set('URLs', $value);
    }

    /**
     * Set the value for the UserAuth input for this TagsGet choreography.
     *
     * @param string $value (optional, string) Use to access Facebook and Twitter resources for tagging.  Enter name:value pairs, comma-separated. EXAMPLE fb_user:[facebook user_id].
     * @return FaceCom_TagsGet_Inputs For method chaining.
     */
    public function setUserAuth($value)
    {
        return $this->set('UserAuth', $value);
    }
}


/**
 * Execution object for the TagsGet choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsGet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TagsGet choreography.
     *
     * @param Temboo_Session $session The session that owns this TagsGet execution.
     * @param FaceCom_TagsGet $choreo The choregraphy object for this execution.
     * @param FaceCom_TagsGet_Inputs|array $inputs (optional) Inputs as FaceCom_TagsGet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_TagsGet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_TagsGet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TagsGet execution.
     *
     * @return FaceCom_TagsGet_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this TagsGet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_TagsGet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_TagsGet_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TagsGet choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsGet_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TagsGet choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_TagsGet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TagsGet execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Call the training procedure for a provided user ID and return any changes.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesTrain extends Temboo_Choreography
{
    /**
     * Call the training procedure for a provided user ID and return any changes.
     *
     * @param Temboo_Session $session The session that owns this FacesTrain choreography.
     * @return FaceCom_FacesTrain New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/FacesTrain/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this FacesTrain choreography.
     *
     * @param FaceCom_FacesTrain_Inputs|array $inputs (optional) Inputs as FaceCom_FacesTrain_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_FacesTrain_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_FacesTrain_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FacesTrain choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_FacesTrain_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_FacesTrain_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FacesTrain choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesTrain_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the FacesTrain choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_FacesTrain_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FacesTrain input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_FacesTrain_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_FacesTrain_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FacesTrain choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_FacesTrain_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FacesTrain choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_FacesTrain_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the CallbackURL input for this FacesTrain choreography.
     *
     * @param string $value (optional, string) Invoke the method, and POST the response to the specified URL. For additional information, see the Choreo documentation.
     * @return FaceCom_FacesTrain_Inputs For method chaining.
     */
    public function setCallbackURL($value)
    {
        return $this->set('CallbackURL', $value);
    }

    /**
     * Set the value for the Callback input for this FacesTrain choreography.
     *
     * @param string $value (optional, string) Enter a javascript method to wrap a JSON-formatted response for JSONP support.  This call is ignored if ResponseFormat=xml.
     * @return FaceCom_FacesTrain_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the Namespace input for this FacesTrain choreography.
     *
     * @param string $value (optional, string) Enter a default user if using short-hand syntax (only the user ID, without adding the @namespace)
     * @return FaceCom_FacesTrain_Inputs For method chaining.
     */
    public function setNamespace($value)
    {
        return $this->set('Namespace', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FacesTrain choreography.
     *
     * @param string $value (optional, string) You have the option of selecting json or xml.  Defaults to xml.
     * @return FaceCom_FacesTrain_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UIDs input for this FacesTrain choreography.
     *
     * @param string $value (required, string) Enter the user IDs to search for in the photo(s) being passed in the request.
     * @return FaceCom_FacesTrain_Inputs For method chaining.
     */
    public function setUIDs($value)
    {
        return $this->set('UIDs', $value);
    }

    /**
     * Set the value for the UserAuth input for this FacesTrain choreography.
     *
     * @param string $value (optional, string) Use to access Facebook and Twitter resources for tagging.  Enter name:value pairs, comma-separated. EXAMPLE fb_user:[facebook user_id].
     * @return FaceCom_FacesTrain_Inputs For method chaining.
     */
    public function setUserAuth($value)
    {
        return $this->set('UserAuth', $value);
    }
}


/**
 * Execution object for the FacesTrain choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesTrain_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FacesTrain choreography.
     *
     * @param Temboo_Session $session The session that owns this FacesTrain execution.
     * @param FaceCom_FacesTrain $choreo The choregraphy object for this execution.
     * @param FaceCom_FacesTrain_Inputs|array $inputs (optional) Inputs as FaceCom_FacesTrain_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_FacesTrain_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_FacesTrain $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FacesTrain execution.
     *
     * @return FaceCom_FacesTrain_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this FacesTrain execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_FacesTrain_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_FacesTrain_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the FacesTrain choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_FacesTrain_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the FacesTrain choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_FacesTrain_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this FacesTrain execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain a list of current users registered in the account's private namespaces.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_AccountUsers extends Temboo_Choreography
{
    /**
     * Obtain a list of current users registered in the account's private namespaces.
     *
     * @param Temboo_Session $session The session that owns this AccountUsers choreography.
     * @return FaceCom_AccountUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/AccountUsers/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AccountUsers choreography.
     *
     * @param FaceCom_AccountUsers_Inputs|array $inputs (optional) Inputs as FaceCom_AccountUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_AccountUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_AccountUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AccountUsers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_AccountUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_AccountUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AccountUsers choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_AccountUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AccountUsers choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_AccountUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AccountUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_AccountUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_AccountUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AccountUsers choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_AccountUsers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this AccountUsers choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_AccountUsers_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Namespaces input for this AccountUsers choreography.
     *
     * @param string $value (required, string) Enter a comma-delimited list of one or more private face.com namespaces.
     * @return FaceCom_AccountUsers_Inputs For method chaining.
     */
    public function setNamespaces($value)
    {
        return $this->set('Namespaces', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AccountUsers choreography.
     *
     * @param string $value (optional, string) You have the option of selecting json or xml. Defaults to 'xml'.
     * @return FaceCom_AccountUsers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the AccountUsers choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_AccountUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AccountUsers choreography.
     *
     * @param Temboo_Session $session The session that owns this AccountUsers execution.
     * @param FaceCom_AccountUsers $choreo The choregraphy object for this execution.
     * @param FaceCom_AccountUsers_Inputs|array $inputs (optional) Inputs as FaceCom_AccountUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_AccountUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_AccountUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AccountUsers execution.
     *
     * @return FaceCom_AccountUsers_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this AccountUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_AccountUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_AccountUsers_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AccountUsers choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_AccountUsers_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AccountUsers choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_AccountUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AccountUsers execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Save automatically-detected face tags
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsSave extends Temboo_Choreography
{
    /**
     * Save automatically-detected face tags
     *
     * @param Temboo_Session $session The session that owns this TagsSave choreography.
     * @return FaceCom_TagsSave New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/TagsSave/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TagsSave choreography.
     *
     * @param FaceCom_TagsSave_Inputs|array $inputs (optional) Inputs as FaceCom_TagsSave_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_TagsSave_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_TagsSave_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TagsSave choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_TagsSave_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_TagsSave_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TagsSave choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsSave_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TagsSave choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_TagsSave_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TagsSave input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_TagsSave_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_TagsSave_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TagsSave choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_TagsSave_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this TagsSave choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_TagsSave_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Label input for this TagsSave choreography.
     *
     * @param string $value (optional, string) The name of the user being displayed.  Usually, this in the format: First and Last name).
     * @return FaceCom_TagsSave_Inputs For method chaining.
     */
    public function setLabel($value)
    {
        return $this->set('Label', $value);
    }

    /**
     * Set the value for the Password input for this TagsSave choreography.
     *
     * @param string $value (optional, string) must be enabled in application settings] Use when saving tags is specified to be a priviledged action in your application.
     * @return FaceCom_TagsSave_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TagsSave choreography.
     *
     * @param string $value (optional, string) You have the option of selecting json or xml.  Defaults to xml.
     * @return FaceCom_TagsSave_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TIDs input for this TagsSave choreography.
     *
     * @param string $value (required, string) Enter at least one tag ID, obtained from FacesDetect or FacesRecognized choreos. The tag ID will be associated with the user ID (UID).
     * @return FaceCom_TagsSave_Inputs For method chaining.
     */
    public function setTIDs($value)
    {
        return $this->set('TIDs', $value);
    }

    /**
     * Set the value for the TaggerID input for this TagsSave choreography.
     *
     * @param string $value (optional, string) Enter the ID of the user who is adding the tag.
     * @return FaceCom_TagsSave_Inputs For method chaining.
     */
    public function setTaggerID($value)
    {
        return $this->set('TaggerID', $value);
    }

    /**
     * Set the value for the UID input for this TagsSave choreography.
     *
     * @param string $value (required, string) The user ID of the user that is being tagged.  Use the following format: userID@namespace
     * @return FaceCom_TagsSave_Inputs For method chaining.
     */
    public function setUID($value)
    {
        return $this->set('UID', $value);
    }

    /**
     * Set the value for the UserAuth input for this TagsSave choreography.
     *
     * @param string $value (optional, string) Use to access Facebook and Twitter resources for tagging.  Enter name:value pairs, comma-separated. EXAMPLE fb_user:[facebook user_id].
     * @return FaceCom_TagsSave_Inputs For method chaining.
     */
    public function setUserAuth($value)
    {
        return $this->set('UserAuth', $value);
    }
}


/**
 * Execution object for the TagsSave choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsSave_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TagsSave choreography.
     *
     * @param Temboo_Session $session The session that owns this TagsSave execution.
     * @param FaceCom_TagsSave $choreo The choregraphy object for this execution.
     * @param FaceCom_TagsSave_Inputs|array $inputs (optional) Inputs as FaceCom_TagsSave_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_TagsSave_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_TagsSave $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TagsSave execution.
     *
     * @return FaceCom_TagsSave_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this TagsSave execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_TagsSave_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_TagsSave_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TagsSave choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsSave_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TagsSave choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_TagsSave_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TagsSave execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Manually add a face tag to a photo.  Manually-added tags are not used to train the Face.com detection system.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsAdd extends Temboo_Choreography
{
    /**
     * Manually add a face tag to a photo.  Manually-added tags are not used to train the Face.com detection system.
     *
     * @param Temboo_Session $session The session that owns this TagsAdd choreography.
     * @return FaceCom_TagsAdd New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FaceCom/TagsAdd/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TagsAdd choreography.
     *
     * @param FaceCom_TagsAdd_Inputs|array $inputs (optional) Inputs as FaceCom_TagsAdd_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_TagsAdd_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FaceCom_TagsAdd_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TagsAdd choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_TagsAdd_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FaceCom_TagsAdd_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TagsAdd choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsAdd_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TagsAdd choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FaceCom_TagsAdd_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TagsAdd input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TagsAdd choreography.
     *
     * @param string $value (required, string) The API Key provided by Face.com.
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this TagsAdd choreography.
     *
     * @param string $value (required, string) The API Secret provided by Face.com.
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Callback input for this TagsAdd choreography.
     *
     * @param string $value (optional, string) Enter a javascript method to wrap a JSON-formatted response for JSONP support.  This call is ignored if ResponseFormat=xml
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the Height input for this TagsAdd choreography.
     *
     * @param int $value (required, integer) Enter the height of the tag, as a percentage from 0 to 100.
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setHeight($value)
    {
        return $this->set('Height', $value);
    }

    /**
     * Set the value for the Label input for this TagsAdd choreography.
     *
     * @param string $value (optional, string) The name of the user being displayed.  Usually, this in the format: First and Last name).
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setLabel($value)
    {
        return $this->set('Label', $value);
    }

    /**
     * Set the value for the Password input for this TagsAdd choreography.
     *
     * @param string $value (optional, string) must be enabled in application settings] Use when saving tags is specified to be a priviledged action in your application.
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TagsAdd choreography.
     *
     * @param string $value (optional, string) You have the option of selecting json or xml.  Defaults to xml.
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TaggerID input for this TagsAdd choreography.
     *
     * @param string $value (required, string) Enter the ID of the user who is adding the tag.
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setTaggerID($value)
    {
        return $this->set('TaggerID', $value);
    }

    /**
     * Set the value for the UID input for this TagsAdd choreography.
     *
     * @param string $value (required, string) Enter the ID of the user being tagged in the format: userID@namespace
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setUID($value)
    {
        return $this->set('UID', $value);
    }

    /**
     * Set the value for the URL input for this TagsAdd choreography.
     *
     * @param string $value (required, string) Enter the URL of the photo to be tagged.
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the UserAuth input for this TagsAdd choreography.
     *
     * @param string $value (optional, string) Use to access Facebook and Twitter resources for tagging.  Enter name:value pairs, comma-separated. EXAMPLE fb_user:[facebook user_id].
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setUserAuth($value)
    {
        return $this->set('UserAuth', $value);
    }

    /**
     * Set the value for the Width input for this TagsAdd choreography.
     *
     * @param int $value (required, integer) Enter the width of the tag, as a percentage from 0 to 100.
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setWidth($value)
    {
        return $this->set('Width', $value);
    }

    /**
     * Set the value for the X input for this TagsAdd choreography.
     *
     * @param int $value (required, integer) Enter the horizontal position of the tag, as a percentage from 0 to 100, measured from the left of the photo.
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setX($value)
    {
        return $this->set('X', $value);
    }

    /**
     * Set the value for the Y input for this TagsAdd choreography.
     *
     * @param int $value (required, integer) Enter the veritcal position of the tag, as a percentage from 0 to 100, measured from the top of the photo.
     * @return FaceCom_TagsAdd_Inputs For method chaining.
     */
    public function setY($value)
    {
        return $this->set('Y', $value);
    }
}


/**
 * Execution object for the TagsAdd choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsAdd_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TagsAdd choreography.
     *
     * @param Temboo_Session $session The session that owns this TagsAdd execution.
     * @param FaceCom_TagsAdd $choreo The choregraphy object for this execution.
     * @param FaceCom_TagsAdd_Inputs|array $inputs (optional) Inputs as FaceCom_TagsAdd_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FaceCom_TagsAdd_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FaceCom_TagsAdd $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TagsAdd execution.
     *
     * @return FaceCom_TagsAdd_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this TagsAdd execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FaceCom_TagsAdd_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FaceCom_TagsAdd_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TagsAdd choreography.
 *
 * @package Temboo
 * @subpackage FaceCom
 */
class FaceCom_TagsAdd_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TagsAdd choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FaceCom_TagsAdd_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TagsAdd execution.
     *
     * @return string The response from Face.com. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>