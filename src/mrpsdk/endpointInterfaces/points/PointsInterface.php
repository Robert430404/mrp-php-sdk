<?php

namespace mrpsdk\endpointInterfaces\points;

/**
 * Interface PointsInterface
 *
 * @package mrpsdk\endpointInterfaces\points
 */
interface PointsInterface
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
     * Sets the driver count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setDriverCount($count = 0);

    /**
     * This performs the API Call and returns the Data
     *
     * @return mixed
     */
    public function getRequest();

    /**
     * Sets the schedule id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setScheduleId($id = 0);

    /**
     * This returns the url params in an array
     *
     * @return array
     */
    public function getUrlParams();
}
