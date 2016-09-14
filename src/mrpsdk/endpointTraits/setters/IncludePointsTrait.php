<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait IncludePointsTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait IncludePointsTrait
{
    /**
     * Sets the points toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludePoints($bool = 'false')
    {
        if (isset($this->requestData['IncludePoints'])) {
            unset($this->requestData['IncludePoints']);
        }

        $this->requestData = array_merge($this->requestData, ['IncludePoints' => $bool]);

        return $this;
    }
}
