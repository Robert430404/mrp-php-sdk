<?php

namespace mrpsdk\tests\endpoints\schedulesResults;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\schedulesResults\DriverStatsEndpoint;

class DriverStatsTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $driverStatsEndpoint = new DriverStatsEndpoint(getenv('MRP_API_KEY'));
        $url = $driverStatsEndpoint->getBaseUrl();

        $this->assertNotEmpty($url);
        $this->assertTrue(is_string($url));
        $this->assertNotFalse(filter_var($url, FILTER_VALIDATE_URL));
    }

    /**
     * Test The Methods That Create The Data Object From The API Call
     */
    public function testDataResponse()
    {
        $driverStatsEndpoint = new DriverStatsEndpoint(getenv('MRP_API_KEY'));
        $data = $driverStatsEndpoint->getRequest();

        $this->assertNotEmpty($data);
        $this->assertTrue(is_object($data));
        $this->assertEquals(1, $data->RequestValid);
    }
}