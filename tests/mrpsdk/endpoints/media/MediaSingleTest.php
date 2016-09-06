<?php

namespace mrpsdk\tests\endpoints\media;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\media\MediaSingleEndpoint;

class MediaSingleTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $mediaEndpoint = new MediaSingleEndpoint(getenv('MRP_API_KEY'));
        $url           = $mediaEndpoint->setMediaType('image')
            ->setIncludeTags('true')
            ->setMediaId(1)
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
        $mediaEndpoint = new MediaSingleEndpoint(getenv('MRP_API_KEY'));
        $data         = $mediaEndpoint->setMediaType('image')
            ->setIncludeTags('true')
            ->setMediaId(1)
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
        $mediaEndpoint = new MediaSingleEndpoint('MRP_API_KEY');
        $array          = $mediaEndpoint->setMediaType('image')
            ->setIncludeTags('true')
            ->setMediaId(1)
            ->setMediaType('image')
            ->setIncludeTags('true')
            ->setMediaId(1)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(3, count($array));
    }
}