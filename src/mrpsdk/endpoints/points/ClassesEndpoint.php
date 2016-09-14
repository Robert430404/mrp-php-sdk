<?php

namespace mrpsdk\endpoints\points;

use mrpsdk\endpointInterfaces\points\ClassesInterface;
use mrpsdk\endpointTraits\getters\BaseUrlTrait;
use mrpsdk\endpointTraits\getters\GetRequestTrait;
use mrpsdk\endpointTraits\getters\UrlParamsTrait;
use mrpsdk\endpointTraits\setters\ClassCountTrait;
use mrpsdk\endpointTraits\setters\ClassIdTrait;
use mrpsdk\endpointTraits\setters\DriverCountTrait;
use mrpsdk\endpointTraits\setters\IncludePointsTrait;
use mrpsdk\endpointTraits\setters\ScheduleIdTrait;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class ClassesEndpoint
 *
 * @package mrpsdk\endpoints\points
 */
class ClassesEndpoint implements ClassesInterface
{
    /**
     * Setter Traits Used Inside The Endpoint
     */
    use ScheduleIdTrait;
    use ClassIdTrait;
    use ClassCountTrait;
    use DriverCountTrait;
    use IncludePointsTrait;

    /**
     * Getter Traits Used Inside The Endpoint
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
     * ClassesEndpoint constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->newRequest   = new RequestHelpers();
        $this->baseUrl      = 'https://api.myracepass.com/v2/points/classes/';
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
