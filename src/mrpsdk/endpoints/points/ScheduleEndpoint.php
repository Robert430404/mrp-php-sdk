<?php

namespace mrpsdk\endpoints\points;

use mrpsdk\endpointInterfaces\points\ScheduleInterface;
use mrpsdk\endpointTraits\getters\BaseUrlTrait;
use mrpsdk\endpointTraits\getters\GetRequestTrait;
use mrpsdk\endpointTraits\setters\ScheduleYearTrait;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class ScheduleEndpoint
 *
 * @package mrpsdk\endpoints\points
 */
class ScheduleEndpoint implements ScheduleInterface
{
    /**
     * Setters Traits Used In Endpoint
     */
    use ScheduleYearTrait;

    /**
     * Getters Traits Used In Endpoint
     */
    use BaseUrlTrait;
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
     * ScheduleEndpoint constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->newRequest   = new RequestHelpers();
        $this->baseUrl      = 'https://api.myracepass.com/v2/points/schedules/';
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