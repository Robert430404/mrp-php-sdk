<?php

namespace mrpsdk\endpointTraits\setters;

trait OrderTrait
{
    /**
     * Sets the order for the api call
     *
     * @param  string $order
     * @return        $this
     */
    public function setOrder($order = 'rankAsc')
    {
        if (isset($this->requestData['Order'])) {
            unset($this->requestData['Order']);
        }

        $this->requestData = array_merge($this->requestData, ['Order' => $order]);

        return $this;
    }
}