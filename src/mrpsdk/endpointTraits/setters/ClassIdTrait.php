<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait ClassIdTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait ClassIdTrait
{
    /**
     * Sets the class id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setClassId($id = 0)
    {
        if (isset($this->requestData['ClassId'])) {
            unset($this->requestData['ClassId']);
        }

        $this->requestData = array_merge($this->requestData, ['ClassId' => $id]);

        return $this;
    }
}
