<?php

namespace mrpsdk\endpointInterfaces\drivers;

/**
 * Class DriversEndpoint
 *
 * @package mrpsdk\endpoints\points
 */
interface DriverClassesInterface
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
     * Sets the drivers toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeDrivers($bool = 'false');

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