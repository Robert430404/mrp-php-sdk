<?php

namespace mrpsdk\endpointTraits\setters;

trait PinnedNumberTrait
{
    /**
     * Sets the pinned number for the api call
     *
     * @param  integer $pinned
     * @return         $this
     */
    public function setPinnedNumber($pinned = 0)
    {
        if (isset($this->requestData['PinnedNum'])) {
            unset($this->requestData['PinnedNum']);
        }

        $this->requestData = array_merge($this->requestData, ['PinnedNum' => $pinned]);

        return $this;
    }
}