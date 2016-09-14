<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait ClassCountTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait ClassCountTrait
{
    /**
     * Sets the class count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setClassCount($count = 0)
    {
        if (isset($this->requestData['ClassCount'])) {
            unset($this->requestData['ClassCount']);
        }

        $this->requestData = array_merge($this->requestData, ['ClassCount' => $count]);

        return $this;
    }
}
