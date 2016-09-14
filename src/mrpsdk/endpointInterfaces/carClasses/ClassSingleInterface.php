<?php

namespace mrpsdk\endpointInterfaces\carClasses;

/**
 * Interface ClassSingleInterface
 *
 * @package mrpsdk\endpointInterfaces\carClasses
 */
interface ClassSingleInterface
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl();

    /**
     * Sets the class id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setClassId($id = 0);

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
