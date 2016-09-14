<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait IncludeDriversTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait IncludeDriversTrait
{
    /**
     * Sets the drivers toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeDrivers($bool = 'false')
    {
        if (isset($this->requestData['IncludeDrivers'])) {
            unset($this->requestData['IncludeDrivers']);
        }

        $this->requestData = array_merge($this->requestData, ['IncludeDrivers' => $bool]);

        return $this;
    }
}
