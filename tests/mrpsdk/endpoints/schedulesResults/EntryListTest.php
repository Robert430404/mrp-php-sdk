<?php

namespace mrpsdk\tests\endpoints\schedulesResults;

use PHPUnit\Framework\TestCase;
use mrpsdk\endpoints\schedulesResults\EntryListEndpoint;

class EntryListTest extends TestCase
{
    /**
     * Test The Methods That Generate The URL for API Call
     */
    public function testBaseUrlGeneration()
    {
        $entryListEndpoint = new EntryListEndpoint(getenv('MRP_API_KEY'));
        $url = $entryListEndpoint->setClassId(1000)
            ->setEventId(2)
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
        $entryListEndpoint = new EntryListEndpoint(getenv('MRP_API_KEY'));
        $data = $entryListEndpoint->setClassId(1000)
            ->setEventId(2)
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
        $entryListEndpoint = new EntryListEndpoint(getenv('MRP_API_KEY'));
        $array = $entryListEndpoint->setClassId(1000)
            ->setClassId(1000)
            ->setEventId(2)
            ->setEventId(2)
            ->getUrlParams();

        $this->assertTrue(is_array($array));
        $this->assertEquals(2, count($array));
    }
}