<?php

namespace mrpsdk\endpointTraits\setters;

trait EventIdTrait
{
    /**
     * Sets the event id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setEventId($id = 0)
    {
        if (isset($this->requestData['EventId'])) {
            unset($this->requestData['EventId']);
        }

        $this->requestData = array_merge($this->requestData, ['EventId' => $id]);

        return $this;
    }
}