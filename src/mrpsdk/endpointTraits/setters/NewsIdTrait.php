<?php

namespace mrpsdk\endpointTraits\setters;

trait NewsIdTrait
{
    /**
     * Sets the news type id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setNewsId($id = 0)
    {
        if (isset($this->requestData['NewsId'])) {
            unset($this->requestData['NewsId']);
        }

        $this->requestData = array_merge($this->requestData, ['NewsId' => $id]);

        return $this;
    }
}