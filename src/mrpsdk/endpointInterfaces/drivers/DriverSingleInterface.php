<?php

namespace mrpsdk\endpointInterfaces\drivers;

/**
 * Interface DriverSingleInterface
 *
 * @package mrpsdk\endpointInterfaces\drivers
 */
interface DriverSingleInterface
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
