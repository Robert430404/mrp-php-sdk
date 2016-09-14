<?php

namespace mrpsdk\endpointInterfaces\schedulesResults;

/**
 * Interface EventInterface
 *
 * @package mrpsdk\endpointInterfaces\schedulesResults
 */
interface EventInterface
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl();

    /**
     * Sets the driver count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setDriverCount($count = 0);

    /**
     * Sets the event id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setEventId($id = 0);

    /**
     * This performs the API Call and returns the Data
     *
     * @return mixed
     */
    public function getRequest();

    /**
     * Sets the class toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeClass($bool = 'true');

    /**
     * Sets the results toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeResults($bool = 'false');

    /**
     * This returns the url params in an array
     *
     * @return array
     */
    public function getUrlParams();
}
