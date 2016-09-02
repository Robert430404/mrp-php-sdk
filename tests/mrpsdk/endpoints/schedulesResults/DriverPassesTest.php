<?php

namespace mrpsdk\tests\endpoints\schedulesResults;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\schedulesResults\DriverPassesEndpoint;

class DriverPassesTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $driverPassesEndpoint = new DriverPassesEndpoint(getenv('MRP_API_KEY'));
        $url                  = $driverPassesEndpoint->setClassId(1000)
                                                     ->setScheduleId(5508)
                                                     ->setDataOrder('nameAsc')
                                                     ->setDriverId(1023)
                                                     ->setEndDate('8/21/2016')
                                                     ->setStartDate('8/21/2015')
                                                     ->setEventId(2)
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
        $driverPassesEndpoint = new DriverPassesEndpoint(getenv('MRP_API_KEY'));
        $data                  = $driverPassesEndpoint->setClassId(1000)
                                                      ->setScheduleId(5508)
                                                      ->setDataOrder('nameAsc')
                                                      ->setDriverId(1023)
                                                      ->setEndDate('8/21/2016')
                                                      ->setStartDate('8/21/2015')
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
        $driverPassesEndpoint = new DriverPassesEndpoint(getenv('MRP_API_KEY'));
        $array                = $driverPassesEndpoint->setClassId(1000)
                                                     ->setClassId(1000)
                                                     ->setScheduleId(5508)
                                                     ->setScheduleId(5508)
                                                     ->setDataOrder('nameAsc')
                                                     ->setDataOrder('nameAsc')
                                                     ->setDriverId(1023)
                                                     ->setDriverId(1023)
                                                     ->setEndDate('8/21/2016')
                                                     ->setEndDate('8/21/2016')
                                                     ->setStartDate('8/21/2015')
                                                     ->setStartDate('8/21/2015')
                                                     ->setEventId(2)
                                                     ->setEventId(2)
                                                     ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(7, count($array));
    }
}