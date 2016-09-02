<?php

namespace mrpsdk\endpointTraits\setters;

trait PullTypeTrait
{
    /**
     * Sets the search for the api call
     *
     * @param  string $pullType
     * @return        $this
     */
    public function setPullType($pullType = '')
    {
        if (isset($this->requestData['PullType'])) {
            unset($this->requestData['PullType']);
        }

        $this->requestData = array_merge($this->requestData, ['PullType' => $pullType]);

        return $this;
    }
}