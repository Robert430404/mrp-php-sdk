<?php

namespace mrpsdk\tests\endpoints\drivers;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\drivers\DriverSingleEndpoint;

class DriverSingleTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $driversEndpoint = new DriverSingleEndpoint(getenv('MRP_API_KEY'));
        $url           = $driversEndpoint->setDriverId(1023)
            ->getBaseUrl();

        $this->assertNotEmpty($url);
        $this->assertTrue(is_string($url));
        $this->assertNotFalse(filter_var($url, FILTER_VALIDATE_URL));
    }

    /**
     * Test The Methods That Create The Data Object From The API Call
     */
    public function testDataResponse()
    {
        $driversEndpoint = new DriverSingleEndpoint(getenv('MRP_API_KEY'));
        $data         = $driversEndpoint->setDriverId(1023)
            ->getRequest();

        $this->assertNotEmpty($data);
        $this->assertTrue(is_object($data));
        $this->assertEquals(1, $data->RequestValid);
    }

    /**
     * This tests the fluent builder to unset duplicate values
     */
    public function testParamUnset()
    {
        $driversEndpoint = new DriverSingleEndpoint('MRP_API_KEY');
        $array          = $driversEndpoint->setDriverId(1023)
            ->setDriverId(1000)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(1, count($array));
    }
}