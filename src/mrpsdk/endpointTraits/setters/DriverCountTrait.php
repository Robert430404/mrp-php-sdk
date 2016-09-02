<?php

namespace mrpsdk\endpointTraits\setters;

trait DriverCountTrait
{
    /**
     * Sets the driver count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setDriverCount($count = 0)
    {
        if (isset($this->requestData['DriverCount'])) {
            unset($this->requestData['DriverCount']);
        }

        $this->requestData = array_merge($this->requestData, ['DriverCount' => $count]);

        return $this;
    }
}