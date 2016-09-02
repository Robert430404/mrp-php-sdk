<?php

namespace mrpsdk\tests\endpoints\schedulesResults;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\schedulesResults\ResultsEndpoint;

class ResultsTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $resultsEndpoint = new ResultsEndpoint(getenv('MRP_API_KEY'));
        $url = $resultsEndpoint->setClassId(5508)
            ->setDriverCount(1000)
            ->setDriverId(2)
            ->setEventId(2)
            ->setRaceCount(1000)
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
        $resultsEndpoint = new ResultsEndpoint(getenv('MRP_API_KEY'));
        $data = $resultsEndpoint->setClassId(5508)
            ->setDriverCount(1000)
            ->setDriverId(2)
            ->setEventId(2)
            ->setRaceCount(1000)
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
        $resultsEndpoint = new ResultsEndpoint(getenv('MRP_API_KEY'));
        $array = $resultsEndpoint->setClassId(5508)
            ->setClassId(5508)
            ->setDriverCount(1000)
            ->setDriverCount(1000)
            ->setDriverId(2)
            ->setDriverId(2)
            ->setEventId(2)
            ->setEventId(2)
            ->setRaceCount(1000)
            ->setRaceCount(1000)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(5, count($array));
    }
}