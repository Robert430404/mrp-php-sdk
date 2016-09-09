<?php

namespace mrpsdk\tests\endpoints\stats;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\staff\StaffEndpoint;

class StaffTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $staffEndpoint = new StaffEndpoint(getenv('MRP_API_KEY'));
        $url           = $staffEndpoint->setPlacement('ContactPage')
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
        $staffEndpoint = new StaffEndpoint(getenv('MRP_API_KEY'));
        $data          = $staffEndpoint->setPlacement('ContactPage')
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
        $staffEndpoint  = new StaffEndpoint('MRP_API_KEY');
        $array          = $staffEndpoint->setPlacement('ContactPage')
            ->setPlacement('ContactPage')
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(1, count($array));
    }
}