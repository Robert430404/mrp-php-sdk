<?php

namespace mrpsdk\endpointTraits\setters;

trait GalleryTypeTrait
{
    /**
     * Sets the parent gallery id for the api call
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