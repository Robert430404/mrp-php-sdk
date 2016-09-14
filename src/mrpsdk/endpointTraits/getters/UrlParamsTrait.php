<?php

namespace mrpsdk\endpointTraits\getters;

/**
 * Trait UrlParamsTrait
 *
 * @package mrpsdk\endpointTraits\getters
 */
trait UrlParamsTrait
{
    /**
     * This returns the url params in an array
     *
     * @return array
     */
    public function getUrlParams()
    {
        return $this->requestData;
    }
}
