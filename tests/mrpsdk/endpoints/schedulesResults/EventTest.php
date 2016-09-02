<?php

namespace mrpsdk\tests\endpoints\schedulesResults;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\schedulesResults\EventEndpoint;

class EventTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $eventEndpoint = new EventEndpoint(getenv('MRP_API_KEY'));
        $url = $eventEndpoint->setEventId(2)
            ->setDriverCount(1000)
            ->setIncludeClass('true')
            ->setIncludeResults('true')
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
        $eventEndpoint = new EventEndpoint(getenv('MRP_API_KEY'));
        $data = $eventEndpoint->setEventId(2)
            ->setDriverCount(1000)
            ->setIncludeClass('true')
            ->setIncludeResults('true')
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
        $eventEndpoint = new EventEndpoint(getenv('MRP_API_KEY'));
        $array = $eventEndpoint->setEventId(2)
            ->setEventId(2)
            ->setDriverCount(1000)
            ->setDriverCount(1000)
            ->setIncludeClass('true')
            ->setIncludeClass('true')
            ->setIncludeResults('true')
            ->setIncludeResults('true')
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(4, count($array));
    }
}