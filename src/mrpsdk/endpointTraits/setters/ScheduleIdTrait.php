<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait ScheduleIdTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait ScheduleIdTrait
{
    /**
     * Sets the schedule id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setScheduleId($id = 0)
    {
        if (isset($this->requestData['ScheduleId'])) {
            unset($this->requestData['ScheduleId']);
        }

        $this->requestData = array_merge($this->requestData, ['ScheduleId' => $id]);

        return $this;
    }
}
