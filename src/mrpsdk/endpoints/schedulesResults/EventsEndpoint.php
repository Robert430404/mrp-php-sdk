<?php

namespace mrpsdk\endpoints\schedulesResults;

use mrpsdk\endpointInterfaces\schedulesResults\EventsInterface;
use mrpsdk\endpointTraits\getters\BaseUrlTrait;
use mrpsdk\endpointTraits\getters\GetRequestTrait;
use mrpsdk\endpointTraits\getters\UrlParamsTrait;
use mrpsdk\endpointTraits\setters\DriverCountTrait;
use mrpsdk\endpointTraits\setters\EndDateTrait;
use mrpsdk\endpointTraits\setters\EventYearTrait;
use mrpsdk\endpointTraits\setters\FutureCountTrait;
use mrpsdk\endpointTraits\setters\IncludeClassTrait;
use mrpsdk\endpointTraits\setters\IncludeResultsTrait;
use mrpsdk\endpointTraits\setters\PastCountTrait;
use mrpsdk\endpointTraits\setters\ScheduleIdTrait;
use mrpsdk\endpointTraits\setters\StartDateTrait;
use mrpsdk\endpointTraits\setters\TagIdTrait;
use mrpsdk\endpointTraits\setters\TagTypeTrait;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class EventsEndpoint
 *
 * @package mrpsdk\endpoints\schedulesResults
 */
class EventsEndpoint implements EventsInterface
{
    /**
     * Setters Traits Used In Class
     */
    use ScheduleIdTrait;
    use TagIdTrait;
    use TagTypeTrait;
    use StartDateTrait;
    use EndDateTrait;
    use EventYearTrait;
    use FutureCountTrait;
    use PastCountTrait;
    use IncludeClassTrait;
    use IncludeResultsTrait;
    use DriverCountTrait;

    /**
     * Getters Traits Used In Class
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
     * EventsEndpoint constructor.
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