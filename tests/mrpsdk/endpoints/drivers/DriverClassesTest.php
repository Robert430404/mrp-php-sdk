<?php

namespace mrpsdk\tests\endpoints\drivers;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\drivers\DriverClassesEndpoint;

class DriverClassesTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $driversEndpoint = new DriverClassesEndpoint(getenv('MRP_API_KEY'));
        $url           = $driversEndpoint->setDriverCount(1)
            ->setOrder('name')
            ->setIncludeStats('true')
            ->setScheduleYear(2016)
            ->setFeaturedOnly('true')
            ->setForcePic('false')
            ->setIncludeDrivers('true')
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
        $driversEndpoint = new DriverClassesEndpoint(getenv('MRP_API_KEY'));
        $data         = $driversEndpoint->setDriverCount(1)
            ->setOrder('name')
            ->setIncludeStats('true')
            ->setScheduleYear(2016)
            ->setFeaturedOnly('true')
            ->setForcePic('false')
            ->setIncludeDrivers('true')
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
        $driversEndpoint = new DriverClassesEndpoint('MRP_API_KEY');
        $array          = $driversEndpoint->setDriverCount(1)
            ->setOrder('name')
            ->setIncludeStats('true')
            ->setScheduleYear(2016)
            ->setFeaturedOnly('true')
            ->setForcePic('false')
            ->setIncludeDrivers('true')
            ->setDriverCount(1)
            ->setOrder('name')
            ->setIncludeStats('true')
            ->setScheduleYear(2016)
            ->setFeaturedOnly('true')
            ->setForcePic('false')
            ->setIncludeDrivers('true')
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(7, count($array));
    }
}