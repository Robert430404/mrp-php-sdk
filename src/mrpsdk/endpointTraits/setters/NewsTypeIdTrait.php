<?php

namespace mrpsdk\endpointTraits\setters;

trait NewsTypeIdTrait
{
    /**
     * Sets the news type id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setNewsTypeId($id = 0)
    {
        if (isset($this->requestData['NewsTypeId'])) {
            unset($this->requestData['NewsTypeId']);
        }

        $this->requestData = array_merge($this->requestData, ['NewsTypeId' => $id]);

        return $this;
    }
}