<?php

namespace mrpsdk\endpointInterfaces\schedulesResults;

/**
 * Interface YearsInterface
 *
 * @package mrpsdk\endpointInterfaces\schedulesResults
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
