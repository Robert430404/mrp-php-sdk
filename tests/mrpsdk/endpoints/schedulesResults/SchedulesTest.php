<?php

namespace mrpsdk\tests\endpoints\schedulesResults;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\schedulesResults\SchedulesEndpoint;

class SchedulesTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $schedulesEndpoint = new SchedulesEndpoint(getenv('MRP_API_KEY'));
        $url = $schedulesEndpoint->setScheduleYear(2016)
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
        $schedulesEndpoint = new SchedulesEndpoint(getenv('MRP_API_KEY'));
        $data = $schedulesEndpoint->setScheduleYear(2016)
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
        $schedulesEndpoint = new SchedulesEndpoint('MRP_API_KEY');
        $array = $schedulesEndpoint->setScheduleYear(2016)
            ->setScheduleYear(2016)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(1, count($array));
    }
}