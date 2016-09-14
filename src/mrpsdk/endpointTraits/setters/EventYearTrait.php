<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait EventYearTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait EventYearTrait
{
    /**
     * Sets the event year for the api call
     *
     * @param  integer $year
     * @return         $this
     */
    public function setEventYear($year = 0)
    {
        if (isset($this->requestData['EventYear'])) {
            unset($this->requestData['EventYear']);
        }

        $this->requestData = array_merge($this->requestData, ['EventYear' => $year]);

        return $this;
    }
}
