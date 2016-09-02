<?php

namespace mrpsdk\tests\endpoints\schedulesResults;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\schedulesResults\ResultsFeedEndpoint;

class ResultsFeedTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $resultsFeedEndpoint = new ResultsFeedEndpoint(getenv('MRP_API_KEY'));
        $url = $resultsFeedEndpoint->setDriverCount(5)
            ->setClassCount(5)
            ->setEventCount(5)
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
        $resultsFeedEndpoint = new ResultsFeedEndpoint(getenv('MRP_API_KEY'));
        $data = $resultsFeedEndpoint->setDriverCount(5)
            ->setClassCount(5)
            ->setEventCount(5)
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
        $resultsFeedEndpoint = new ResultsFeedEndpoint(getenv('MRP_API_KEY'));
        $array = $resultsFeedEndpoint->setDriverCount(5)
            ->setClassCount(5)
            ->setEventCount(5)
            ->setDriverCount(5)
            ->setClassCount(5)
            ->setEventCount(5)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(3, count($array));
    }
}