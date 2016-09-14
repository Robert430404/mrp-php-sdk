<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait EventCountTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait EventCountTrait
{
    /**
     * Sets the event count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setEventCount($count = 5)
    {
        if (isset($this->requestData['EventCount'])) {
            unset($this->requestData['EventCount']);
        }

        $this->requestData = array_merge($this->requestData, ['EventCount' => $count]);

        return $this;
    }
}
