<?php

namespace mrpsdk\endpoints\schedulesResults;

use mrpsdk\endpointInterfaces\schedulesResults\EventInterface;
use mrpsdk\endpointTraits\getters\BaseUrlTrait;
use mrpsdk\endpointTraits\getters\GetRequestTrait;
use mrpsdk\endpointTraits\getters\UrlParamsTrait;
use mrpsdk\endpointTraits\setters\DriverCountTrait;
use mrpsdk\endpointTraits\setters\EventIdTrait;
use mrpsdk\endpointTraits\setters\IncludeClassTrait;
use mrpsdk\endpointTraits\setters\IncludeResultsTrait;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class EventEndpoint
 *
 * @package mrpsdk\endpoints\schedulesResults
 */
class EventEndpoint implements EventInterface
{
    /**
     * Setters Traits Used In Endpoint
     */
    use EventIdTrait;
    use IncludeClassTrait;
    use IncludeResultsTrait;
    use DriverCountTrait;

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
     * EventEndpoint constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->newRequest   = new RequestHelpers();
        $this->baseUrl      = 'https://api.myracepass.com/v2/schedules/events/';
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
