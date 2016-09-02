<?php

namespace mrpsdk\endpoints\news;

use mrpsdk\endpointTraits\getters\BaseUrlTrait;
use mrpsdk\endpointTraits\getters\GetRequestTrait;
use mrpsdk\endpointTraits\getters\UrlParamsTrait;
use mrpsdk\endpointTraits\setters\EndDateTrait;
use mrpsdk\endpointTraits\setters\NewsIdTrait;
use mrpsdk\endpointTraits\setters\StartDateTrait;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class ViewsEndpoint
 *
 * @package mrpsdk\endpoints\news
 */
class ViewsEndpoint
{
    /**
     * Setters Traits Used In Endpoint
     */
    use NewsIdTrait;
    use StartDateTrait;
    use EndDateTrait;

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
        $this->baseUrl      = 'https://api.myracepass.com/v2/news/views/';
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