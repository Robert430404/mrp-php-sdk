<?php

namespace mrpsdk\tests\endpoints\points;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\points\ClassesEndpoint;

class ClassesTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $classesEndpoint = new ClassesEndpoint(getenv('MRP_API_KEY'));
        $url             = $classesEndpoint->setClassCount(1000)
                                           ->setClassId(1000)
                                           ->setDriverCount(1000)
                                           ->setIncludePoints('TRUE')
                                           ->setScheduleId(5580)
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
        $classesEndpoint = new ClassesEndpoint(getenv('MRP_API_KEY'));
        $data            = $classesEndpoint->setClassCount(1000)
                                           ->setClassId(1000)
                                           ->setDriverCount(1000)
                                           ->setIncludePoints('TRUE')
                                           ->setScheduleId(5580)
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
        $classesEndpoint = new ClassesEndpoint('MRP_API_KEY');
        $array           = $classesEndpoint->setScheduleId(5580)
                                           ->setScheduleId(5580)
                                           ->setDriverCount(1000)
                                           ->setDriverCount(1000)
                                           ->setClassCount(1000)
                                           ->setClassCount(1000)
                                           ->setClassId(1000)
                                           ->setClassId(1000)
                                           ->setIncludePoints('true')
                                           ->setIncludePoints('true')
                                           ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(5, count($array));
    }
}