<?php

namespace mrpsdk\endpoints\galleries;

use mrpsdk\endpointInterfaces\galleries\GalleriesSingleInterface;
use mrpsdk\endpointTraits\getters\BaseUrlTrait;
use mrpsdk\endpointTraits\getters\GetRequestTrait;
use mrpsdk\endpointTraits\getters\UrlParamsTrait;
use mrpsdk\endpointTraits\setters\GalleryIdTrait;
use mrpsdk\endpointTraits\setters\GalleryTypeTrait;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class GalleriesSingleEndpoint
 *
 * @package mrpsdk\endpoints\schedulesResults
 */
class GalleriesSingleEndpoint implements GalleriesSingleInterface
{
    /**
     * Setters Traits Used In Endpoint
     */
    use GalleryTypeTrait;
    use GalleryIdTrait;

    /**
     * Getters Traits Used In Endpoint
     */
    use BaseUrlTrait;
    use UrlParamsTrait;
    use GetRequestTrait;

    /**
     * @var string
     */
    private $mrpKey;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var array
     */
    private $requestData;

    /**
     * @var RequestHelpers
     */
    private $newRequest;

    /**
     * DriverStatsEndpoint constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->newRequest   = new RequestHelpers();
        $this->baseUrl      = 'https://api.myracepass.com/v2/galleries/';
        $this->mrpKey       = $apiKey;
        $this->requestData  = [];

        // Preps the baseurl with the api key
        $this->baseUrl .= '?key=' . $this->mrpKey;
    }

    /**
     * Makes sure the created helper object is released
     */
    public function __destruct()
    {
        unset($this->newRequest);
    }
}