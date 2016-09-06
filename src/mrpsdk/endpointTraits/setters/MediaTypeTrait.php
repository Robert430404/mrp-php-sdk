<?php

namespace mrpsdk\endpointTraits\setters;

trait MediaTypeTrait
{
    /**
     * Sets the media type for the api call
     *
     * @param  string $type
     * @return        $this
     */
    public function setMediaType($type = '')
    {
        if (isset($this->requestData['MediaType'])) {
            unset($this->requestData['MediaType']);
        }

        $this->requestData = array_merge($this->requestData, ['MediaType' => $type]);

        return $this;
    }
}