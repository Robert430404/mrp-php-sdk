<?php

namespace mrpsdk\endpointTraits\setters;

trait GalleryOrderTrait
{
    /**
     * Sets the parent gallery id for the api call
     *
     * @param  string $order
     * @return        $this
     */
    public function setGalleryType($order = 'rankAsc')
    {
        if (isset($this->requestData['GalleryOrder'])) {
            unset($this->requestData['GalleryOrder']);
        }

        $this->requestData = array_merge($this->requestData, ['GalleryOrder' => $order]);

        return $this;
    }
}