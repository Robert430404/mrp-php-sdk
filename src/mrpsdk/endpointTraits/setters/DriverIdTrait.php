<?php

namespace mrpsdk\endpointTraits\setters;

trait DriverIdTrait
{
    /**
     * Sets the driver id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setDriverId($id = 0)
    {
        if (isset($this->requestData['DriverId'])) {
            unset($this->requestData['DriverId']);
        }

        $this->requestData = array_merge($this->requestData, ['DriverId' => $id]);

        return $this;
    }
}