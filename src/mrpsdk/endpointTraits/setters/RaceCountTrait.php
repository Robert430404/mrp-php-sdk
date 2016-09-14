<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait RaceCountTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait RaceCountTrait
{
    /**
     * Sets the race count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setRaceCount($count = 5)
    {
        if (isset($this->requestData['RaceCount'])) {
            unset($this->requestData['RaceCount']);
        }

        $this->requestData = array_merge($this->requestData, ['RaceCount' => $count]);

        return $this;
    }
}
