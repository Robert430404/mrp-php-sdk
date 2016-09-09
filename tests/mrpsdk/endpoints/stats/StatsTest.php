<?php

namespace mrpsdk\tests\endpoints\stats;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\stats\StatsEndpoint;

class StatsTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $statsEndpoint = new StatsEndpoint(getenv('MRP_API_KEY'));
        $url           = $statsEndpoint->setCurrentPage(1)
            ->setPageSize(1)
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
        $statsEndpoint = new StatsEndpoint(getenv('MRP_API_KEY'));
        $data          = $statsEndpoint->setCurrentPage(1)
            ->setPageSize(1)
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
        $statsEndpoint  = new StatsEndpoint('MRP_API_KEY');
        $array          = $statsEndpoint->setCurrentPage(1)
            ->setPageSize(1)
            ->setCurrentPage(1)
            ->setPageSize(1)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(2, count($array));
    }
}