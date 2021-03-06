<?php

namespace mrpsdk\tests\endpoints\galleries;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\galleries\GalleriesSingleEndpoint;

class GalleriesSingleTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $galleriesEndpoint = new GalleriesSingleEndpoint(getenv('MRP_API_KEY'));
        $url               = $galleriesEndpoint->setGalleryId(0)
            ->setGalleryType('image')
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
        $galleriesEndpoint = new GalleriesSingleEndpoint(getenv('MRP_API_KEY'));
        $data         = $galleriesEndpoint->setGalleryId(0)
            ->setGalleryType('image')
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
        $galleriesEndpoint = new GalleriesSingleEndpoint('MRP_API_KEY');
        $array          = $galleriesEndpoint->setGalleryId(0)
            ->setGalleryType('image')
            ->setGalleryId(0)
            ->setGalleryType('image')
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(2, count($array));
    }
}