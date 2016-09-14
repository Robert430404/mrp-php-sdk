<?php

namespace mrpsdk\endpoints\galleries;

use mrpsdk\endpointInterfaces\galleries\GalleriesInterface;
use mrpsdk\endpointTraits\getters\BaseUrlTrait;
use mrpsdk\endpointTraits\getters\GetRequestTrait;
use mrpsdk\endpointTraits\getters\UrlParamsTrait;
use mrpsdk\endpointTraits\setters\CurrentPageTrait;
use mrpsdk\endpointTraits\setters\GalleryOrderTrait;
use mrpsdk\endpointTraits\setters\GalleryTypeTrait;
use mrpsdk\endpointTraits\setters\PageSizeTrait;
use mrpsdk\endpointTraits\setters\ParentGalleryIdTrait;
use mrpsdk\endpointTraits\setters\TagIdTrait;
use mrpsdk\endpointTraits\setters\TagTypeTrait;
use mrpsdk\endpointTraits\setters\UserIdTrait;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class GalleriesEndpoint
 *
 * @package mrpsdk\endpoints\galleries
 */
class GalleriesEndpoint implements GalleriesInterface
{
    /**
     * Setters Traits Used In Endpoint
     */
    use GalleryTypeTrait;
    use ParentGalleryIdTrait;
    use TagIdTrait;
    use TagTypeTrait;
    use CurrentPageTrait;
    use PageSizeTrait;
    use UserIdTrait;
    use GalleryOrderTrait;

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
