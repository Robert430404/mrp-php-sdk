<?php

namespace mrpsdk\endpoints\schedulesResults;

use mrpsdk\endpointInterfaces\schedulesResults\DriverStatsInterface;
use mrpsdk\helpers\RequestHelpers;

/**
 * Class DriverStatsEndpoint
 *
 * @package mrpsdk\endpoints\schedulesResults
 */
class DriverStatsEndpoint implements DriverStatsInterface
{
    /**
     * @var string
     */
    private $mrpKey;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var RequestHelpers
     */
    private $newRequest;

    /**
     * DriverStatsEndpoint constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->newRequest   = new RequestHelpers();
        $this->baseUrl      = 'https://api.myracepass.com/v2/schedules/driverStats/';
        $this->mrpKey       = $apiKey;

        // Preps the baseurl with the api key
        $this->baseUrl .= '?key=' . $this->mrpKey;
    }

    /**
     * This returns the base url for validation purposes
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * This performs the API Call and returns the Data
     *
     * @return mixed
     */
    public function getRequest()
    {
        $data = $this->newRequest->get($this->baseUrl);

        return $data;
    }

    /**
     * Makes sure the created helper object is released
     */
    public function __destruct()
    {
        unset($this->newRequest);
    }
}
