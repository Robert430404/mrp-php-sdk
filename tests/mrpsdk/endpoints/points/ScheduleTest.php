<?php

namespace mrpsdk\tests\endpoints\points;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\points\ScheduleEndpoint;

class ScheduleTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $scheduleEndpoint = new ScheduleEndpoint(getenv('MRP_API_KEY'));
        $url              = $scheduleEndpoint->setScheduleYear(2016)
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
        $scheduleEndpoint = new ScheduleEndpoint(getenv('MRP_API_KEY'));
        $data             = $scheduleEndpoint->setScheduleYear(2016)
                                             ->getRequest();

        $this->assertNotEmpty($data);
        $this->assertTrue(is_object($data));
        $this->assertEquals(1, $data->RequestValid);
    }
}