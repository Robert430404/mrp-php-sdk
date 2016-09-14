<?php

namespace mrpsdk\endpointInterfaces\crew;

/**
 * Interface CrewInterface
 *
 * @package mrpsdk\endpointInterfaces\crew
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
