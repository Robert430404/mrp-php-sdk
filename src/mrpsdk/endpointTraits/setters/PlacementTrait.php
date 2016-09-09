<?php

namespace mrpsdk\endpointTraits\setters;

trait PlacementTrait
{
    /**
     * Sets the Placement for the api call
     *
     * @param  string $placement
     * @return        $this
     */
    public function setPlacement($placement = 'StaffPage')
    {
        if (isset($this->requestData['Placement'])) {
            unset($this->requestData['Placement']);
        }

        $this->requestData = array_merge($this->requestData, ['Placement' => $placement]);

        return $this;
    }
}