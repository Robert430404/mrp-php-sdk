<?php

namespace mrpsdk\tests\endpoints\galleries;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\galleries\GalleriesEndpoint;

class GalleriesTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $galleriesEndpoint = new GalleriesEndpoint(getenv('MRP_API_KEY'));
        $url               = $galleriesEndpoint->setGalleryType('image')
            ->setGalleryOrder('rankAsc')
            ->setCurrentPage(1)
            ->setPageSize(10)
            ->setParentGalleryId(0)
            ->setTagId(0)
            ->setTagType('Driver')
            ->setUserId(1)
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
        $galleriesEndpoint = new GalleriesEndpoint(getenv('MRP_API_KEY'));
        $data         = $galleriesEndpoint->setGalleryType('image')
            ->setGalleryOrder('rankAsc')
            ->setCurrentPage(1)
            ->setPageSize(10)
            ->setParentGalleryId(0)
            ->setTagId(0)
            ->setTagType('Driver')
            ->setUserId(1)
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
        $galleriesEndpoint = new GalleriesEndpoint('MRP_API_KEY');
        $array          = $galleriesEndpoint->setGalleryType('image')
            ->setGalleryOrder('rankAsc')
            ->setCurrentPage(1)
            ->setPageSize(10)
            ->setParentGalleryId(0)
            ->setTagId(0)
            ->setTagType('Driver')
            ->setUserId(1)
            ->setGalleryType('image')
            ->setGalleryOrder('rankAsc')
            ->setCurrentPage(1)
            ->setPageSize(10)
            ->setParentGalleryId(0)
            ->setTagId(0)
            ->setTagType('Driver')
            ->setUserId(1)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(8, count($array));
    }
}