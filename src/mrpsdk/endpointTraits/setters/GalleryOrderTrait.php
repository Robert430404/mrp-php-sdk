<?php

namespace mrpsdk\endpointTraits\setters;

trait GalleryOrderTrait
{
    /**
     * Sets the gallery order for the api call
     *
     * @param  string $order
     * @return        $this
     */
    public function setGalleryOrder($order = 'rankAsc')
    {
        if (isset($this->requestData['GalleryOrder'])) {
            unset($this->requestData['GalleryOrder']);
        }

        $this->requestData = array_merge($this->requestData, ['GalleryOrder' => $order]);

        return $this;
    }
}