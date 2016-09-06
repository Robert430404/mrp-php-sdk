<?php

namespace mrpsdk\endpointInterfaces\media;

/**
 * Class MediaEndpoint
 *
 * @package mrpsdk\endpoints\media
 */
interface MediaInterface
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
     * Sets the gallery id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setGalleryId($id = 0);

    /**
     * This performs the API Call and returns the Data
     *
     * @return mixed
     */
    public function getRequest();

    /**
     * Sets the tags toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeTags($bool = 'false');

    /**
     * Sets the media order for the api call
     *
     * @param  string $order
     * @return        $this
     */
    public function setMediaOrder($order = 'rankAsc');

    /**
     * Sets the media type for the api call
     *
     * @param  string $type
     * @return        $this
     */
    public function setMediaType($type = '');

    /**
     * Sets the page size for the api call
     *
     * @param  integer $size
     * @return         $this
     */
    public function setPageSize($size = 0);

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