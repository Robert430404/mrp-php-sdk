<?php

namespace mrpsdk\endpointTraits\getters;

/**
 * trait GetRequestTrait
 *
 * @package mrpsdk\endpointTraits\getters
 */
trait GetRequestTrait
{
    /**
     * This performs the API Call and returns the Data
     *
     * @return mixed
     */
    public function getRequest()
    {
        foreach ($this->requestData as $key => $data) {
            $this->baseUrl = $this->baseUrl . '&' . $key . '=' . $data;
        }

        $data = $this->newRequest->get($this->baseUrl);

        return $data;
    }
}
