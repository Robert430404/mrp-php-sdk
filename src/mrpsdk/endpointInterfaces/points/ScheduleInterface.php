<?php

namespace mrpsdk\endpointInterfaces\points;

/**
 * Interface ScheduleInterface
 *
 * @package mrpsdk\endpointInterfaces\points
 */
interface ScheduleInterface
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
     * Sets the schedule year for the api call
     *
     * @param  integer $year
     * @return         $this
     */
    public function setScheduleYear($year = 0);
}
