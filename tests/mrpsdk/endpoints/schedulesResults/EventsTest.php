<?php

namespace mrpsdk\tests\endpoints\schedulesResults;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\schedulesResults\EventsEndpoint;

class EventsTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $eventsEndpoint = new EventsEndpoint(getenv('MRP_API_KEY'));
        $url = $eventsEndpoint->setIncludeResults('true')
            ->setScheduleId(5508)
            ->setIncludeClass('true')
            ->setDriverCount(1000)
            ->setEndDate('8/21/2016')
            ->setStartDate('8/21/2015')
            ->setEventYear(2016)
            ->setFutureCount(1000)
            ->setPastCount(1000)
            ->setTagId(12)
            ->setTagType('')
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
        $eventsEndpoint = new EventsEndpoint(getenv('MRP_API_KEY'));
        $data = $eventsEndpoint->setIncludeResults('true')
            ->setScheduleId(5508)
            ->setIncludeClass('true')
            ->setDriverCount(1000)
            ->setEndDate('8/21/2016')
            ->setStartDate('8/21/2015')
            ->setEventYear(2016)
            ->setFutureCount(1000)
            ->setPastCount(1000)
            ->setTagId(12)
            ->setTagType('')
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
        $eventsEndpoint = new EventsEndpoint(getenv('MRP_API_KEY'));
        $array = $eventsEndpoint->setIncludeResults('true')
            ->setIncludeResults('true')
            ->setScheduleId(5508)
            ->setScheduleId(5508)
            ->setIncludeClass('true')
            ->setIncludeClass('true')
            ->setDriverCount(1000)
            ->setDriverCount(1000)
            ->setEndDate('8/21/2016')
            ->setEndDate('8/21/2016')
            ->setStartDate('8/21/2015')
            ->setStartDate('8/21/2015')
            ->setEventYear(2016)
            ->setEventYear(2016)
            ->setFutureCount(1000)
            ->setFutureCount(1000)
            ->setPastCount(1000)
            ->setPastCount(1000)
            ->setTagId(12)
            ->setTagId(12)
            ->setTagType('')
            ->setTagType('')
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(11, count($array));
    }
}