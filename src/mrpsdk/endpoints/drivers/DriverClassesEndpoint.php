<?php

namespace mrpsdk\endpoints\drivers;

use mrpsdk\endpointTraits\getters\BaseUrlTrait;
use mrpsdk\endpointTraits\getters\GetRequestTrait;
use mrpsdk\endpointTraits\getters\UrlParamsTrait;
use mrpsdk\endpointTraits\setters\DriverCountTrait;
use mrpsdk\endpointTraits\setters\FeaturedOnlyTrait;
use mrpsdk\endpointTraits\setters\ForcePicTrait;
use mrpsdk\endpointTraits\setters\IncludeDriversTrait;
use mrpsdk\endpointTraits\setters\IncludeStatsTrait;
use mrpsdk\endpointTraits\setters\OrderTrait;
use mrpsdk\endpointTraits\setters\ScheduleYearTrait;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class DriversEndpoint
 *
 * @package mrpsdk\endpoints\points
 */
class DriverClassesEndpoint
{
    /**
     * Setters Traits Used In Endpoint
     */
    use DriverCountTrait;
    use IncludeDriversTrait;
    use ScheduleYearTrait;
    use IncludeStatsTrait;
    use ForcePicTrait;
    use FeaturedOnlyTrait;
    use OrderTrait;

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
     * DriversEndpoint constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->newRequest   = new RequestHelpers();
        $this->baseUrl      = 'https://api.myracepass.com/v2/drivers/classes/';
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