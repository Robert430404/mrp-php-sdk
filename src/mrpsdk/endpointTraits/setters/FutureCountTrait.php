<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait FutureCountTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait FutureCountTrait
{
    /**
     * Sets the future count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setFutureCount($count = 0)
    {
        if (isset($this->requestData['FutureCount'])) {
            unset($this->requestData['FutureCount']);
        }

        $this->requestData = array_merge($this->requestData, ['FutureCount' => $count]);

        return $this;
    }
}
