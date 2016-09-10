<?php

namespace mrpsdk\tests\carClasses\ads;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\carClasses\ClassSingleEndpoint;

class ClassSingleTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $classesEndpoint = new ClassSingleEndpoint(getenv('MRP_API_KEY'));
        $url             = $classesEndpoint->setClassId(1000)
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
        $classesEndpoint = new ClassSingleEndpoint(getenv('MRP_API_KEY'));
        $data            = $classesEndpoint->setClassId(1000)
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
        $classesEndpoint = new ClassSingleEndpoint('MRP_API_KEY');
        $array           = $classesEndpoint->setClassId(1000)
            ->setClassId(1000)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(1, count($array));
    }
}