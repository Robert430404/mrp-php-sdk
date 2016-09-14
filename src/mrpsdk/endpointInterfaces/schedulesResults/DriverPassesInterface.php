<?php

namespace mrpsdk\endpointInterfaces\schedulesResults;

/**
 * Interface DriverPassesInterface
 *
 * @package mrpsdk\endpointInterfaces\schedulesResults
 */
interface DriverPassesInterface
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
     * Sets the date order for the api call
     *
     * @param  string $order
     * @return        $this
     */
    public function setDataOrder($order = 'nameAsc');

    /**
     * Sets the driver id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setDriverId($id = 0);

    /**
     * Sets the end date for the api call
     *
     * @param  string $date
     * @return        $this
     */
    public function setEndDate($date);

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
     * This returns the url params in an array
     *
     * @return array
     */
    public function getUrlParams();
}
