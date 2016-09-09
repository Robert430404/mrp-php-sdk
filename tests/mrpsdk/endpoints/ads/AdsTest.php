<?php

namespace mrpsdk\tests\endpoints\ads;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\ads\AdsEndpoint;

class AdsTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $adsEndpoint = new AdsEndpoint(getenv('MRP_API_KEY'));
        $url         = $adsEndpoint->setFeedCount(1)
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
        $adsEndpoint = new AdsEndpoint(getenv('MRP_API_KEY'));
        $data        = $adsEndpoint->setFeedCount(1)
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
        $adsEndpoint = new AdsEndpoint('MRP_API_KEY');
        $array       = $adsEndpoint->setFeedCount(1)
            ->setFeedCount(1)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(1, count($array));
    }
}