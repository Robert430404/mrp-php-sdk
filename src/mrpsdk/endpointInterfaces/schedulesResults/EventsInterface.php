<?php

namespace mrpsdk\endpointInterfaces\schedulesResults;

/**
 * Interface EventsInterface
 *
 * @package mrpsdk\endpointInterfaces\schedulesResults
 */
interface EventsInterface
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl();

    /**
     * Sets the driver count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setDriverCount($count = 0);

    /**
     * Sets the end date for the api call
     *
     * @param  string $date
     * @return        $this
     */
    public function setEndDate($date);

    /**
     * Sets the event year for the api call
     *
     * @param  integer $year
     * @return         $this
     */
    public function setEventYear($year = 0);

    /**
     * Sets the future count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setFutureCount($count = 0);

    /**
     * This performs the API Call and returns the Data
     *
     * @return mixed
     */
    public function getRequest();

    /**
     * Sets the class toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeClass($bool = 'true');

    /**
     * Sets the results toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeResults($bool = 'false');

    /**
     * Sets the past count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setPastCount($count = 0);

    /**
     * Sets the schedule id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setScheduleId($id = 0);

    /**
     * Sets the start date for the api call
     *
     * @param  string $date
     * @return        $this
     */
    public function setStartDate($date = '1/1/1900');

    /**
     * Sets the tag id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setTagId($id = 0);

    /**
     * Sets the tag type for the api call
     *
     * @param  string $type
     * @return        $this
     */
    public function setTagType($type = '');

    /**
     * This returns the url params in an array
     *
     * @return array
     */
    public function getUrlParams();
}
