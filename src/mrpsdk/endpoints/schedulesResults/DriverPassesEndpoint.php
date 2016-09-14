<?php

namespace mrpsdk\endpoints\schedulesResults;

use mrpsdk\endpointInterfaces\schedulesResults\DriverPassesInterface;
use mrpsdk\endpointTraits\getters\BaseUrlTrait;
use mrpsdk\endpointTraits\getters\GetRequestTrait;
use mrpsdk\endpointTraits\getters\UrlParamsTrait;
use mrpsdk\endpointTraits\setters\ClassIdTrait;
use mrpsdk\endpointTraits\setters\DateOrderTrait;
use mrpsdk\endpointTraits\setters\DriverIdTrait;
use mrpsdk\endpointTraits\setters\EndDateTrait;
use mrpsdk\endpointTraits\setters\EventIdTrait;
use mrpsdk\endpointTraits\setters\ScheduleIdTrait;
use mrpsdk\endpointTraits\setters\StartDateTrait;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class DriverPassesEndpoint
 *
 * @package mrpsdk\endpoints\schedulesResults
 */
class DriverPassesEndpoint implements DriverPassesInterface
{
    /**
     * Setters Traits Used In Endpoint
     */
    use ScheduleIdTrait;
    use ClassIdTrait;
    use DriverIdTrait;
    use EventIdTrait;
    use EndDateTrait;
    use StartDateTrait;
    use DateOrderTrait;

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
     * DriverPassesEndpoint constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->newRequest   = new RequestHelpers();
        $this->baseUrl      = 'https://api.myracepass.com/v2/schedules/driverPasses/';
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
