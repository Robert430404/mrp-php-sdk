<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait IncludeImagesTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait IncludeImagesTrait
{
    /**
     * Sets the images toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeImages($bool = 'false')
    {
        if (isset($this->requestData['IncludeImages'])) {
            unset($this->requestData['IncludeImages']);
        }

        $this->requestData = array_merge($this->requestData, ['IncludeImages' => $bool]);

        return $this;
    }
}
