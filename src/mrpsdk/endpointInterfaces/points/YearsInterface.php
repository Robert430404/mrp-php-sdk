<?php

namespace mrpsdk\endpointInterfaces\points;

/**
 * Class YearsEndpoint
 *
 * @package mrpsdk\endpoints\points
 */
interface YearsInterface
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl();

    /**
     * This performs the API Call and returns the Data
     *
     * @return mixed
     */
    public function getRequest();
}