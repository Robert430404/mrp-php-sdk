<?php

namespace mrpsdk\endpointTraits\setters;

/**
 * Trait FeedCountTrait
 *
 * @package mrpsdk\endpointTraits\setters
 */
trait FeedCountTrait
{
    /**
     * Sets the feed count for the api call
     *
     * @param  integer $count
     * @return         $this
     */
    public function setFeedCount($count = 0)
    {
        if (isset($this->requestData['FeedCount'])) {
            unset($this->requestData['FeedCount']);
        }

        $this->requestData = array_merge($this->requestData, ['FeedCount' => $count]);

        return $this;
    }
}
