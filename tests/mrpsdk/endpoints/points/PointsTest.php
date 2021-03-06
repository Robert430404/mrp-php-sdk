<?php

namespace mrpsdk\tests\endpoints\points;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\points\PointsEndpoint;

class PointsTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $pointsEndpoint = new PointsEndpoint(getenv('MRP_API_KEY'));
        $url            = $pointsEndpoint->setDriverCount(1000)
                                         ->setScheduleId(5580)
                                         ->setClassId(1000)
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
        $pointsEndpoint = new PointsEndpoint(getenv('MRP_API_KEY'));
        $data           = $pointsEndpoint->setDriverCount(1000)
                                         ->setScheduleId(5580)
                                         ->setClassId(1000)
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
        $pointsEndpoint = new PointsEndpoint('MRP_API_KEY');
        $array          = $pointsEndpoint->setScheduleId(5580)
                                         ->setScheduleId(5580)
                                         ->setDriverCount(1000)
                                         ->setDriverCount(1000)
                                         ->setClassId(1000)
                                         ->setClassId(1000)
                                         ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(3, count($array));
    }
}