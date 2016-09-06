<?php

namespace mrpsdk\endpoints\media;

use mrpsdk\endpointTraits\getters\BaseUrlTrait;
use mrpsdk\endpointTraits\getters\GetRequestTrait;
use mrpsdk\endpointTraits\getters\UrlParamsTrait;
use mrpsdk\endpointTraits\setters\CurrentPageTrait;
use mrpsdk\endpointTraits\setters\GalleryIdTrait;
use mrpsdk\endpointTraits\setters\IncludeTagsTrait;
use mrpsdk\endpointTraits\setters\MediaOrderTrait;
use mrpsdk\endpointTraits\setters\MediaTypeTrait;
use mrpsdk\endpointTraits\setters\PageSizeTrait;
use mrpsdk\endpointTraits\setters\TagIdTrait;
use mrpsdk\endpointTraits\setters\TagTypeTrait;
use mrpsdk\endpointTraits\setters\UserIdTrait;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class MediaEndpoint
 *
 * @package mrpsdk\endpoints\media
 */
class MediaEndpoint
{
    /**
     * Setters Traits Used In Endpoint
     */
    use MediaTypeTrait;
    use GalleryIdTrait;
    use TagIdTrait;
    use TagTypeTrait;
    use CurrentPageTrait;
    use PageSizeTrait;
    use UserIdTrait;
    use MediaOrderTrait;
    use IncludeTagsTrait;

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
     * MediaEndpoint constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->newRequest   = new RequestHelpers();
        $this->baseUrl      = 'https://api.myracepass.com/v2/media/';
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