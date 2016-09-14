<?php

namespace mrpsdk\endpointInterfaces\schedulesResults;

/**
 * Interface ResultsFeedInterface
 *
 * @package mrpsdk\endpointInterfaces\schedulesResults
 */
interface ResultsFeedInterface
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl();

    /**
     * Sets the class count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setClassCount($count = 0);

    /**
     * Sets the driver count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setDriverCount($count = 0);

    /**
     * Sets the event count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setEventCount($count = 5);

    /**
     * This performs the API Call and returns the Data
     *
     * @return mixed
     */
    public function getRequest();

    /**
     * This returns the url params in an array
     *
     * @return array
     */
    public function getUrlParams();
}
