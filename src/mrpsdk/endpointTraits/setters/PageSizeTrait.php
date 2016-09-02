<?php

namespace mrpsdk\endpointTraits\setters;

trait PageSizeTrait
{
    /**
     * Sets the page size for the api call
     *
     * @param  integer $size
     * @return         $this
     */
    public function setPageSize($size = 0)
    {
        if (isset($this->requestData['PageSize'])) {
            unset($this->requestData['PageSize']);
        }

        $this->requestData = array_merge($this->requestData, ['PageSize' => $size]);

        return $this;
    }
}