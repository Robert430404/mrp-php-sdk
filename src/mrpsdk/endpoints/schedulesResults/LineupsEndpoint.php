<?php

namespace mrpsdk\endpoints\schedulesResults;

use mrpsdk\endpointInterfaces\schedulesResults\LineupsInterface;
use mrpsdk\endpointTraits\getters\BaseUrlTrait;
use mrpsdk\endpointTraits\getters\GetRequestTrait;
use mrpsdk\endpointTraits\getters\UrlParamsTrait;
use mrpsdk\endpointTraits\setters\ClassIdTrait;
use mrpsdk\endpointTraits\setters\EventIdTrait;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class LineupsEndpoint
 *
 * @package mrpsdk\endpoints\schedulesResults
 */
class LineupsEndpoint implements LineupsInterface
{
    /**
     * Setters Traits Used In Endpoint
     */
    use EventIdTrait;
    use ClassIdTrait;

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
     * LineupsEndpoint constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->newRequest   = new RequestHelpers();
        $this->baseUrl      = 'https://api.myracepass.com/v2/schedules/lineups/';
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
