<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait ParentGalleryIdTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait ParentGalleryIdTrait
{
    /**
     * Sets the parent gallery id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setParentGalleryId($id = 0)
    {
        if (isset($this->requestData['ParentGalleryId'])) {
            unset($this->requestData['ParentGalleryId']);
        }

        $this->requestData = array_merge($this->requestData, ['ParentGalleryId' => $id]);

        return $this;
    }
}
