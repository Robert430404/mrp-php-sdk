<?php

namespace mrpsdk\endpointInterfaces\carClasses;

/**
 * Interface ClassesInterface
 *
 * @package mrpsdk\endpointInterfaces\carClasses
 */
interface ClassesInterface
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl();

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
     * This returns the url params in an array
     *
     * @return array
     */
    public function getUrlParams();
}
