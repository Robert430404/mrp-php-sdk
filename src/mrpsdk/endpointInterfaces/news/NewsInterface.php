<?php

namespace mrpsdk\endpointInterfaces\news;

/**
 * Class NewsEndpoint
 *
 * @package mrpsdk\endpoints\news
 */
interface NewsInterface
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl();

    /**
     * Sets the current page for the api call
     *
     * @param  integer $page
     * @return         $this
     */
    public function setCurrentPage($page = 0);

    /**
     * Sets the date order for the api call
     *
     * @param  string $order
     * @return        $this
     */
    public function setDataOrder($order = 'nameAsc');

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
    public function setNewsTypeId($id = 0);

    /**
     * Sets the page size for the api call
     *
     * @param  integer $size
     * @return         $this
     */
    public function setPageSize($size = 0);

    /**
     * Sets the pinned number for the api call
     *
     * @param  integer $pinned
     * @return         $this
     */
    public function setPinnedNumber($pinned = 0);

    /**
     * Sets the search for the api call
     *
     * @param  string $pullType
     * @return        $this
     */
    public function setPullType($pullType = '');

    /**
     * Sets the search for the api call
     *
     * @param  string $search
     * @return        $this
     */
    public function setSearch($search = '');

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

    /**
     * Sets the user id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setUserId($id = 0);
}