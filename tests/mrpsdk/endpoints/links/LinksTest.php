<?php

namespace mrpsdk\tests\endpoints\links;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\links\LinksEndpoint;

class LinksTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $linksEndpoint = new LinksEndpoint(getenv('MRP_API_KEY'));
        $url           = $linksEndpoint->getBaseUrl();

        $this->assertNotEmpty($url);
        $this->assertTrue(is_string($url));
        $this->assertNotFalse(filter_var($url, FILTER_VALIDATE_URL));
    }

    /**
     * Test The Methods That Create The Data Object From The API Call
     */
    public function testDataResponse()
    {
        $linksEndpoint = new LinksEndpoint(getenv('MRP_API_KEY'));
        $data          = $linksEndpoint->getRequest();

        $this->assertNotEmpty($data);
        $this->assertTrue(is_object($data));
        $this->assertEquals(1, $data->RequestValid);
    }
}