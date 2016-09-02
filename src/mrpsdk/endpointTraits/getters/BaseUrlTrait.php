<?php

namespace mrpsdk\endpointTraits\getters;

trait BaseUrlTrait
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl()
    {
        foreach($this->requestData as $key => $data)
        {
            $this->baseUrl = $this->baseUrl . '&' . $key . '=' . $data;
        }

        return $this->baseUrl;
    }
}