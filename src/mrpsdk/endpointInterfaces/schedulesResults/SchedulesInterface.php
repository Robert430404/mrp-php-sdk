<?php

namespace mrpsdk\endpointInterfaces\schedulesResults;

/**
 * Class SchedulesEndpoint
 *
 * @package mrpsdk\endpoints\schedulesResults
 */
interface SchedulesInterface
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

    /**
     * This returns the url params in an array
     *
     * @return array
     */
    public function getUrlParams();
}