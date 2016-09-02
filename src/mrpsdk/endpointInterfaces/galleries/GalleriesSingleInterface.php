<?php

namespace mrpsdk\endpointInterfaces\galleries;

/**
 * Class GalleriesSingleEndpoint
 *
 * @package mrpsdk\endpoints\schedulesResults
 */
interface GalleriesSingleInterface
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl();

    /**
     * Sets the gallery id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setGalleryId($id = 0);

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
     * This returns the url params in an array
     *
     * @return array
     */
    public function getUrlParams();
}