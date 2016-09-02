<?php

namespace mrpsdk\endpointTraits\setters;

trait TagTypeTrait
{
    /**
     * Sets the tag type for the api call
     *
     * @param  string $type
     * @return        $this
     */
    public function setTagType($type = '')
    {
        if (isset($this->requestData['TagType'])) {
            unset($this->requestData['TagType']);
        }

        $this->requestData = array_merge($this->requestData, ['TagType' => $type]);

        return $this;
    }
}