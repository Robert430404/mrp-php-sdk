<?php

namespace mrpsdk\endpointTraits\setters;

trait CurrentPageTrait
{
    /**
     * Sets the current page for the api call
     *
     * @param  integer $page
     * @return         $this
     */
    public function setCurrentPage($page = 0)
    {
        if (isset($this->requestData['CurrentPage'])) {
            unset($this->requestData['CurrentPage']);
        }

        $this->requestData = array_merge($this->requestData, ['CurrentPage' => $page]);

        return $this;
    }
}