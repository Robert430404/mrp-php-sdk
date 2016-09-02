<?php

namespace mrpsdk\endpoints\news;

use mrpsdk\endpointTraits\getters\BaseUrlTrait;
use mrpsdk\endpointTraits\getters\GetRequestTrait;
use mrpsdk\endpointTraits\getters\UrlParamsTrait;
use mrpsdk\endpointTraits\setters\CurrentPageTrait;
use mrpsdk\endpointTraits\setters\DateOrderTrait;
use mrpsdk\endpointTraits\setters\IncludeImagesTrait;
use mrpsdk\endpointTraits\setters\IncludeTagsTrait;
use mrpsdk\endpointTraits\setters\NewsTypeIdTrait;
use mrpsdk\endpointTraits\setters\PageSizeTrait;
use mrpsdk\endpointTraits\setters\PinnedNumberTrait;
use mrpsdk\endpointTraits\setters\PullTypeTrait;
use mrpsdk\endpointTraits\setters\SearchTrait;
use mrpsdk\endpointTraits\setters\TagIdTrait;
use mrpsdk\endpointTraits\setters\TagTypeTrait;
use mrpsdk\endpointTraits\setters\UserIdTrait;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class NewsEndpoint
 *
 * @package mrpsdk\endpoints\news
 */
class NewsEndpoint
{
    /**
     * Setters Traits Used In Endpoint
     */
    use TagTypeTrait;
    use TagIdTrait;
    use NewsTypeIdTrait;
    use SearchTrait;
    use CurrentPageTrait;
    use PageSizeTrait;
    use PinnedNumberTrait;
    use UserIdTrait;
    use DateOrderTrait;
    use IncludeImagesTrait;
    use IncludeTagsTrait;
    use PullTypeTrait;

    /**
     * Getters Used In Endpoint
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
     * SchedulesEndpoint constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->newRequest   = new RequestHelpers();
        $this->baseUrl      = 'https://api.myracepass.com/v2/news/';
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