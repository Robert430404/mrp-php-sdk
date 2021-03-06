<?php

namespace mrpsdk\tests\endpoints\drivers;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\drivers\DriversEndpoint;

class DriversTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $driversEndpoint = new DriversEndpoint(getenv('MRP_API_KEY'));
        $url           = $driversEndpoint->setTagType('driver')
            ->setTagId(1)
            ->setPageSize(1)
            ->setScheduleYear(2016)
            ->setClassId(1)
            ->setCurrentPage(1)
            ->setFeaturedOnly('true')
            ->setForcePic('false')
            ->setIncludeStats('true')
            ->setOrder('name')
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
        $driversEndpoint = new DriversEndpoint(getenv('MRP_API_KEY'));
        $data         = $driversEndpoint->setTagType('driver')
            ->setTagId(1)
            ->setPageSize(1)
            ->setScheduleYear(2016)
            ->setClassId(1)
            ->setCurrentPage(1)
            ->setFeaturedOnly('true')
            ->setForcePic('false')
            ->setIncludeStats('true')
            ->setOrder('name')
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
        $driversEndpoint = new DriversEndpoint('MRP_API_KEY');
        $array          = $driversEndpoint->setTagType('driver')
            ->setTagId(1)
            ->setPageSize(1)
            ->setScheduleYear(2016)
            ->setClassId(1)
            ->setCurrentPage(1)
            ->setFeaturedOnly('true')
            ->setForcePic('false')
            ->setIncludeStats('true')
            ->setOrder('name')
            ->setTagType('driver')
            ->setTagId(1)
            ->setPageSize(1)
            ->setScheduleYear(2016)
            ->setClassId(1)
            ->setCurrentPage(1)
            ->setFeaturedOnly('true')
            ->setForcePic('false')
            ->setIncludeStats('true')
            ->setOrder('name')
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(10, count($array));
    }
}