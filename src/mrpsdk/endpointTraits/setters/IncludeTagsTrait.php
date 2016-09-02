<?php

namespace mrpsdk\endpointTraits\setters;

trait IncludeTagsTrait
{
    /**
     * Sets the tags toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setIncludeTags($bool = 'false')
    {
        if (isset($this->requestData['IncludeTags'])) {
            unset($this->requestData['IncludeTags']);
        }

        $this->requestData = array_merge($this->requestData, ['IncludeTags' => $bool]);

        return $this;
    }
}