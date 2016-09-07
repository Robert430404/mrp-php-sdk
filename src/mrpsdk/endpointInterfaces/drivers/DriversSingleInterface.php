<?php

namespace mrpsdk\endpointInterfaces\drivers;

/**
 * Class DriversEndpoint
 *
 * @package mrpsdk\endpoints\points
 */
interface DriversSingleInterface
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl();

    /**
     * Sets the driver id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setDriverId($id = 0);

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