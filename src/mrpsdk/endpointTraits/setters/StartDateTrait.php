<?php

namespace mrpsdk\endpointTraits\setters;

trait StartDateTrait
{
    /**
     * Sets the start date for the api call
     *
     * @param  string $date
     * @return        $this
     */
    public function setStartDate($date = '1/1/1900')
    {
        if (isset($this->requestData['StartDate'])) {
            unset($this->requestData['StartDate']);
        }

        $this->requestData = array_merge($this->requestData, ['StartDate' => $date]);

        return $this;
    }
}