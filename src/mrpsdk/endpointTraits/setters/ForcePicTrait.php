<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait ForcePicTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait ForcePicTrait
{
    /**
     * Sets the force pic toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setForcePic($bool = 'false')
    {
        if (isset($this->requestData['ForcePic'])) {
            unset($this->requestData['ForcePic']);
        }

        $this->requestData = array_merge($this->requestData, ['ForcePic' => $bool]);

        return $this;
    }
}
