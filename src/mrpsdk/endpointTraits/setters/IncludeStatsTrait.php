<?php

namespace mrpsdk\endpointTraits\setters;

trait IncludeStatsTrait
{
    /**
     * Sets the stats toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeStats($bool = 'false')
    {
        if (isset($this->requestData['IncludeStats'])) {
            unset($this->requestData['IncludeStats']);
        }

        $this->requestData = array_merge($this->requestData, ['IncludeStats' => $bool]);

        return $this;
    }
}