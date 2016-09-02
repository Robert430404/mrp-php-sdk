<?php

namespace mrpsdk\endpointTraits\setters;

trait IncludeResultsTrait
{
    /**
     * Sets the results toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeResults($bool = 'false')
    {
        if (isset($this->requestData['IncludeResults'])) {
            unset($this->requestData['IncludeResults']);
        }

        $this->requestData = array_merge($this->requestData, ['IncludeResults' => $bool]);

        return $this;
    }
}