<?php

namespace mrpsdk\endpointTraits\setters;

trait MediaOrderTrait
{
    /**
     * Sets the media order for the api call
     *
     * @param  string $order
     * @return        $this
     */
    public function setMediaOrder($order = 'rankAsc')
    {
        if (isset($this->requestData['MediaOrder'])) {
            unset($this->requestData['MediaOrder']);
        }

        $this->requestData = array_merge($this->requestData, ['MediaOrder' => $order]);

        return $this;
    }
}