<?php
/**
 * Created by PhpStorm.
 * User: dlcimac
 * Date: 9/2/16
 * Time: 3:13 PM
 */
namespace mrpsdk\endpointInterfaces\points;


/**
 * Class ClassesEndpoint
 *
 * @package mrpsdk\endpoints\points
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
     * Sets the class count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setClassCount($count = 0);

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
     * Sets the points toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludePoints($bool = 'false');

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