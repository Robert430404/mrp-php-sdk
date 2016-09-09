<?php

namespace mrpsdk\endpointInterfaces\crew;

/**
 * Class CrewEndpoint
 *
 * @package mrpsdk\endpoints\crew
 */
interface CrewInterface
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