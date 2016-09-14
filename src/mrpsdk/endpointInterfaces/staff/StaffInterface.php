<?php

namespace mrpsdk\endpointInterfaces\staff;

/**
 * Interface StaffInterface
 *
 * @package mrpsdk\endpointInterfaces\staff
 */
interface StaffInterface
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

    /**
     * Sets the Placement for the api call
     *
     * @param  string $placement
     * @return        $this
     */
    public function setPlacement($placement = 'StaffPage');

    /**
     * This returns the url params in an array
     *
     * @return array
     */
    public function getUrlParams();
}
