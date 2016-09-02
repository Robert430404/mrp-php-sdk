<?php

namespace mrpsdk\endpointInterfaces\news;

/**
 * Class NewsStoryEndpoint
 *
 * @package mrpsdk\endpoints\news
 */
interface NewsStoryInterface
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
     * Sets the images toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeImages($bool = 'false');

    /**
     * Sets the tags toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeTags($bool = 'false');

    /**
     * Sets the news type id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setNewsId($id = 0);

    /**
     * This returns the url params in an array
     *
     * @return array
     */
    public function getUrlParams();
}