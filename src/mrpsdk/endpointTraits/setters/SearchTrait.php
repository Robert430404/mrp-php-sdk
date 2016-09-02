<?php

namespace mrpsdk\endpointTraits\setters;

trait SearchTrait
{
    /**
     * Sets the search for the api call
     *
     * @param  string $search
     * @return        $this
     */
    public function setSearch($search = '')
    {
        if (isset($this->requestData['Search'])) {
            unset($this->requestData['Search']);
        }

        $this->requestData = array_merge($this->requestData, ['Search' => $search]);

        return $this;
    }
}