<?php

namespace mrpsdk\endpointTraits\setters;

trait IncludeClassTrait
{
    /**
     * Sets the class toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeClass($bool = 'true')
    {
        if (isset($this->requestData['IncludeClass'])) {
            unset($this->requestData['IncludeClass']);
        }

        $this->requestData = array_merge($this->requestData, ['IncludeClass' => $bool]);

        return $this;
    }
}