<?php

namespace mrpsdk\endpointInterfaces\galleries;

/**
 * Interface GalleriesInterface
 *
 * @package mrpsdk\endpointInterfaces\galleries
 */
interface GalleriesInterface
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
     * Sets the gallery order for the api call
     *
     * @param  string $order
     * @return        $this
     */
    public function setGalleryOrder($order = 'rankAsc');

    /**
     * Sets the gallery type for the api call
     *
     * @param  string $type
     * @return        $this
     */
    public function setGalleryType($type = '');

    /**
     * This performs the API Call and returns the Data
     *
     * @return mixed
     */
    public function getRequest();

    /**
     * Sets the page size for the api call
     *
     * @param  integer $size
     * @return         $this
     */
    public function setPageSize($size = 0);

    /**
     * Sets the parent gallery id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setParentGalleryId($id = 0);

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
