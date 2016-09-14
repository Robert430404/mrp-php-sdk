<?php

namespace mrpsdk\endpointInterfaces\media;

/**
 * Interface MediaSingleInterface
 *
 * @package mrpsdk\endpointInterfaces\media
 */
interface MediaSingleInterface
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
     * Sets the tags toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeTags($bool = 'false');

    /**
     * Sets the media id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setMediaId($id = 0);

    /**
     * Sets the media type for the api call
     *
     * @param  string $type
     * @return        $this
     */
    public function setMediaType($type = '');

    /**
     * This returns the url params in an array
     *
     * @return array
     */
    public function getUrlParams();
}
