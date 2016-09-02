<?php

namespace mrpsdk\tests\endpoints\points;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\points\YearsEndpoint;

class YearsTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $yearsEndpoint = new YearsEndpoint(getenv('MRP_API_KEY'));
        $url           = $yearsEndpoint->getBaseUrl();

        $this->assertNotEmpty($url);
        $this->assertTrue(is_string($url));
        $this->assertNotFalse(filter_var($url, FILTER_VALIDATE_URL));
    }

    /**
     * Test The Methods That Create The Data Object From The API Call
     */
    public function testDataResponse()
    {
        $yearsEndpoint = new YearsEndpoint(getenv('MRP_API_KEY'));
        $data          = $yearsEndpoint->getRequest();

        $this->assertNotEmpty($data);
        $this->assertTrue(is_object($data));
        $this->assertEquals(1, $data->RequestValid);
    }
}