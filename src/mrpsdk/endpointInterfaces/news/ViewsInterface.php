<?php

namespace mrpsdk\endpointInterfaces\news;

/**
 * Interface ViewsInterface
 *
 * @package mrpsdk\endpointInterfaces\news
 */
interface ViewsInterface
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl();

    /**
     * Sets the end date for the api call
     *
     * @param  string $date
     * @return        $this
     */
    public function setEndDate($date);

    /**
     * This performs the API Call and returns the Data
     *
     * @return mixed
     */
    public function getRequest();

    /**
     * Sets the news type id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setNewsId($id = 0);

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
