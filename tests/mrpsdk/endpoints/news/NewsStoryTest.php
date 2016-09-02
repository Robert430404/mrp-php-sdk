<?php

namespace mrpsdk\tests\endpoints\news;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\news\NewsStoryEndpoint;

class NewsStoryTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $newsEndpoint = new NewsStoryEndpoint(getenv('MRP_API_KEY'));
        $url          = $newsEndpoint->setIncludeImages('true')
            ->setIncludeTags('true')
            ->setNewsId(0)
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
        $newsEndpoint = new NewsStoryEndpoint(getenv('MRP_API_KEY'));
        $data         = $newsEndpoint->setIncludeImages('true')
            ->setIncludeTags('true')
            ->setNewsId(0)
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
        $pointsEndpoint = new NewsStoryEndpoint('MRP_API_KEY');
        $array          = $pointsEndpoint->setIncludeImages('true')
            ->setIncludeTags('true')
            ->setNewsId(0)
            ->setIncludeImages('true')
            ->setIncludeTags('true')
            ->setNewsId(0)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(3, count($array));
    }
}