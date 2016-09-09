<?php

namespace mrpsdk\tests\endpoints\crew;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\crew\CrewEndpoint;

class CrewTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $crewEndpoint = new CrewEndpoint(getenv('MRP_API_KEY'));
        $url           = $crewEndpoint->getBaseUrl();

        $this->assertNotEmpty($url);
        $this->assertTrue(is_string($url));
        $this->assertNotFalse(filter_var($url, FILTER_VALIDATE_URL));
    }

    /**
     * Test The Methods That Create The Data Object From The API Call
     */
    public function testDataResponse()
    {
        $crewEndpoint = new CrewEndpoint(getenv('MRP_API_KEY'));
        $data          = $crewEndpoint->getRequest();

        $this->assertNotEmpty($data);
        $this->assertTrue(is_object($data));
        $this->assertEquals(1, $data->RequestValid);
    }
}