<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait PullTypeTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait PullTypeTrait
{
    /**
     * Sets the pull type for the api call
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
