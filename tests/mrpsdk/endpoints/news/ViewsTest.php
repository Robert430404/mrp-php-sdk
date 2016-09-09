<?php

namespace mrpsdk\tests\endpoints\news;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\news\ViewsEndpoint;

class ViewsTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $newsEndpoint = new ViewsEndpoint(getenv('MRP_API_KEY'));
        $url          = $newsEndpoint->setNewsId(1)
            ->setEndDate('8/21/2016')
            ->setStartDate('8/21/2015')
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
        $newsEndpoint = new ViewsEndpoint(getenv('MRP_API_KEY'));
        $data         = $newsEndpoint->setNewsId(1)
            ->setEndDate('8/21/2016')
            ->setStartDate('8/21/2015')
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
        $pointsEndpoint = new ViewsEndpoint('MRP_API_KEY');
        $array          = $pointsEndpoint->setNewsId(1)
            ->setEndDate('8/21/2016')
            ->setStartDate('8/21/2015')
            ->setNewsId(1)
            ->setEndDate('8/21/2016')
            ->setStartDate('8/21/2015')
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(3, count($array));
    }
}