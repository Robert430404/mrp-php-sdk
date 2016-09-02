<?php

namespace mrpsdk\endpointTraits\setters;

trait EndDateTrait
{
    /**
     * Sets the end date for the api call
     *
     * @param  string $date
     * @return        $this
     */
    public function setEndDate($date)
    {
        if (isset($this->requestData['EndDate'])) {
            unset($this->requestData['EndDate']);
        }

        $this->requestData = array_merge($this->requestData, ['EndDate' => $date]);

        return $this;
    }
}