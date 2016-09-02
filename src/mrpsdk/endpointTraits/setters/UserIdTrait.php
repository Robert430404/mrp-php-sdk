<?php

namespace mrpsdk\endpointTraits\setters;

trait UserIdTrait
{
    /**
     * Sets the user id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setUserId($id = 0)
    {
        if (isset($this->requestData['UserId'])) {
            unset($this->requestData['UserId']);
        }

        $this->requestData = array_merge($this->requestData, ['UserId' => $id]);

        return $this;
    }
}