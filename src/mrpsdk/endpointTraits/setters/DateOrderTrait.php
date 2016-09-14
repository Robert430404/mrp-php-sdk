<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait DateOrderTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait DateOrderTrait
{
    /**
     * Sets the date order for the api call
     *
     * @param  string $order
     * @return        $this
     */
    public function setDataOrder($order = 'nameAsc')
    {
        if (isset($this->requestData['Order'])) {
            unset($this->requestData['Order']);
        }

        $this->requestData = array_merge($this->requestData, ['Order' => $order]);

        return $this;
    }
}
