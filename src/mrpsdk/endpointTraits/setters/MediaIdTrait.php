<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait MediaIdTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait MediaIdTrait
{
    /**
     * Sets the media id for the api call
     *
     * @param  integer $id
     * @return         $this
     */
    public function setMediaId($id = 0)
    {
        if (isset($this->requestData['MediaId'])) {
            unset($this->requestData['MediaId']);
        }

        $this->requestData = array_merge($this->requestData, ['MediaId' => $id]);

        return $this;
    }
}
