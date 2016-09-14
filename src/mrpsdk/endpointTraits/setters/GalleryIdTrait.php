<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait GalleryIdTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait GalleryIdTrait
{
    /**
     * Sets the gallery id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setGalleryId($id = 0)
    {
        if (isset($this->requestData['GalleryId'])) {
            unset($this->requestData['GalleryId']);
        }

        $this->requestData = array_merge($this->requestData, ['GalleryId' => $id]);

        return $this;
    }
}
