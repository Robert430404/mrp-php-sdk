<?php

namespace mrpsdk\endpointInterfaces\links;

/**
 * Class LinksEndpoint
 *
 * @package mrpsdk\endpoints\links
 */
interface LinksInterface
{
    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl();

    /**
     * This performs the API Call and returns the Data
     *
     * @return mixed
     */
    public function getRequest();
}