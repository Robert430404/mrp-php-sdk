<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait FeaturedOnlyTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait FeaturedOnlyTrait
{
    /**
     * Sets the force pic toggle for the api call
     *
     * @param  string $bool
     * @return        $this
     */
    public function setFeaturedOnly($bool = 'false')
    {
        if (isset($this->requestData['FeaturedOnly'])) {
            unset($this->requestData['FeaturedOnly']);
        }

        $this->requestData = array_merge($this->requestData, ['FeaturedOnly' => $bool]);

        return $this;
    }
}
