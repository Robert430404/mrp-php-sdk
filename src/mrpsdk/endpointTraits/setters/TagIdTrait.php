<?php

namespace mrpsdk\endpointTraits\setters;

trait TagIdTrait
{
    /**
     * Sets the tag id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setTagId($id = 0)
    {
        if (isset($this->requestData['TagId'])) {
            unset($this->requestData['TagId']);
        }

        $this->requestData = array_merge($this->requestData, ['TagId' => $id]);

        return $this;
    }
}