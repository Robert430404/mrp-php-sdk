<?php

namespace mrpsdk\endpointInterfaces\ads;

/**
 * Interface AdsInterface
 *
 * @package mrpsdk\endpointInterfaces\ads
 */
interface AdsInterface
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl();

    /**
     * Sets the feed count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setFeedCount($count = 0);

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
