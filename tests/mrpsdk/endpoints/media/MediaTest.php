<?php

namespace mrpsdk\tests\endpoints\media;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\media\MediaEndpoint;

class MediaTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $mediaEndpoint = new MediaEndpoint(getenv('MRP_API_KEY'));
        $url           = $mediaEndpoint->setGalleryId(2)
            ->setUserId(2)
            ->setTagType('Driver')
            ->setTagId(1)
            ->setMediaOrder('fileSizeAsc')
            ->setMediaType('image')
            ->setCurrentPage(1)
            ->setIncludeTags('true')
            ->setPageSize(10)
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
        $mediaEndpoint = new MediaEndpoint(getenv('MRP_API_KEY'));
        $data         = $mediaEndpoint->setGalleryId(2)
            ->setUserId(2)
            ->setTagType('Driver')
            ->setTagId(1)
            ->setMediaOrder('fileSizeAsc')
            ->setMediaType('image')
            ->setCurrentPage(1)
            ->setIncludeTags('true')
            ->setPageSize(10)
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
        $mediaEndpoint = new MediaEndpoint('MRP_API_KEY');
        $array          = $mediaEndpoint->setGalleryId(2)
            ->setUserId(2)
            ->setTagType('Driver')
            ->setTagId(1)
            ->setMediaOrder('fileSizeAsc')
            ->setMediaType('image')
            ->setCurrentPage(1)
            ->setIncludeTags('true')
            ->setPageSize(10)
            ->setGalleryId(2)
            ->setUserId(2)
            ->setTagType('Driver')
            ->setTagId(1)
            ->setMediaOrder('fileSizeAsc')
            ->setMediaType('image')
            ->setCurrentPage(1)
            ->setIncludeTags('true')
            ->setPageSize(10)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(9, count($array));
    }
}