<?php

namespace mrpsdk\endpointInterfaces\drivers;

/**
 * Class DriversEndpoint
 *
 * @package mrpsdk\endpoints\points
 */
interface DriversEndpoint
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
     * Sets the current page for the api call
     *
     * @param  integer $page
     * @return         $this
     */
    public function setCurrentPage($page = 0);

    /**
     * Sets the force pic toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setFeaturedOnly($bool = 'false');

    /**
     * Sets the force pic toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setForcePic($bool = 'false');

    /**
     * This performs the API Call and returns the Data
     *
     * @return mixed
     */
    public function getRequest();

    /**
     * Sets the stats toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeStats($bool = 'false');

    /**
     * Sets the order for the api call
     *
     * @param  string $order
     * @return        $this
     */
    public function setOrder($order = 'name');

    /**
     * Sets the page size for the api call
     *
     * @param  integer $size
     * @return         $this
     */
    public function setPageSize($size = 0);

    /**
     * Sets the schedule year for the api call
     *
     * @param  integer $year
     * @return         $this
     */
    public function setScheduleYear($year = 0);

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