<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait ScheduleYearTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait ScheduleYearTrait
{
    /**
     * Sets the schedule year for the api call
     *
     * @param  integer $year
     * @return         $this
     */
    public function setScheduleYear($year = 0)
    {
        if (isset($this->requestData['ScheduleYear'])) {
            unset($this->requestData['ScheduleYear']);
        }

        $this->requestData = array_merge($this->requestData, ['ScheduleYear' => $year]);

        return $this;
    }
}
