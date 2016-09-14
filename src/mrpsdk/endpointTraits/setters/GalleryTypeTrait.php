<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait GalleryTypeTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait GalleryTypeTrait
{
    /**
     * Sets the gallery type for the api call
     *
     * @param  string $type
     * @return        $this
     */
    public function setGalleryType($type = '')
    {
        if (isset($this->requestData['GalleryType'])) {
            unset($this->requestData['GalleryType']);
        }

        $this->requestData = array_merge($this->requestData, ['GalleryType' => $type]);

        return $this;
    }
}
