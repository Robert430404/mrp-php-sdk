<?php

namespace mrpsdk\tests\endpoints\news;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\news\NewsEndpoint;

class NewsTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $newsEndpoint = new NewsEndpoint(getenv('MRP_API_KEY'));
        $url          = $newsEndpoint->setCurrentPage(1)
            ->setDataOrder('nameAsc')
            ->setIncludeImages('true')
            ->setIncludeTags('true')
            ->setNewsTypeId(0)
            ->setPageSize(10)
            ->setPinnedNumber(1)
            ->setPullType('Official')
            ->setSearch('Search')
            ->setTagId(0)
            ->setTagType('Driver')
            ->setUserId(0)
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
        $newsEndpoint = new NewsEndpoint(getenv('MRP_API_KEY'));
        $data         = $newsEndpoint->setCurrentPage(1)
            ->setDataOrder('nameAsc')
            ->setIncludeImages('true')
            ->setIncludeTags('true')
            ->setNewsTypeId(0)
            ->setPageSize(10)
            ->setPinnedNumber(1)
            ->setPullType('Official')
            ->setSearch('Search')
            ->setTagId(0)
            ->setTagType('Driver')
            ->setUserId(0)
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
        $pointsEndpoint = new NewsEndpoint('MRP_API_KEY');
        $array          = $pointsEndpoint->setCurrentPage(1)
            ->setDataOrder('nameAsc')
            ->setIncludeImages('true')
            ->setIncludeTags('true')
            ->setNewsTypeId(0)
            ->setPageSize(10)
            ->setPinnedNumber(1)
            ->setPullType('Official')
            ->setSearch('Search')
            ->setTagId(0)
            ->setTagType('Driver')
            ->setUserId(0)
            ->setCurrentPage(1)
            ->setDataOrder('nameAsc')
            ->setIncludeImages('true')
            ->setIncludeTags('true')
            ->setNewsTypeId(0)
            ->setPageSize(10)
            ->setPinnedNumber(1)
            ->setPullType('Official')
            ->setSearch('Search')
            ->setTagId(0)
            ->setTagType('Driver')
            ->setUserId(0)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(12, count($array));
    }
}