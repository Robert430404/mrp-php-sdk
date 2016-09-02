<?php

namespace mrpsdk\endpointTraits\setters;

trait PastCountTrait
{
    /**
     * Sets the past count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setPastCount($count = 0)
    {
        if (isset($this->requestData['PastCount'])) {
            unset($this->requestData['PastCount']);
        }

        $this->requestData = array_merge($this->requestData, ['PastCount' => $count]);

        return $this;
    }
}