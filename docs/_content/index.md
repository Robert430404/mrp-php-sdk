Title: MyRacePass PHP SDK Documentation
---
# MyRacePass PHP SDK Documentation

The MyRacePass PHP SDK gives you a fluent interface to interact with the My Race Pass API V2. All endpoint's are supported and all of the request parameters are fully implemented. We return PHP Objects from the API for use inside of your application. 

In order to install our package via Composer, please use the following command.

```bash
composer require robert430404/mrp-php-sdk
```

Or add these lines to a new composer.json

```json
{
    "require": {
        "robert430404/mrp-php-sdk": "1.0.0"
    }
}
```

## Information About The MRP API V2

We have complete compatibility with [The MRP API](http://www.myracepass.com/developers/api/). The SDK will follow the same requirements that the API documentation describes for each endpoint.

## Getting Started Quick Guide

Using the package in a standalone application is very simple. Instantiate an instance of the object and pass in your API key via the constructor. From there simply call methods from the object to create your call and get your data returned to you.

```php
<?php
     
use mrpsdk\endpoints\points\PointsEndpoint;
     
class YourClass
{
    /**
     * @var PointsEndpoint
     */
    protected $pointsEndpoint;
    
    /**
     * YourClass constructor.
     */
    public function __construct()
    {
        $apiKey = 'XXXXXXX-XXXX-XXXXXX-XXXXXXXXXX';
             
        $this->pointsEndpoint = new PointsEndpoint($apiKey);
    }
    
    /**
     * Returns Data From The MRP API In Object Form From JSON
     * 
     * @return mixed
     */
    public function returnData()
    {
        $data = $this->pointsEndpoint      // Your Object
                     ->setScheduleId(1000) // Builds URL
                     ->setClassId(1000)    // Builds URL
                     ->getRequest();       // Sends Request And Returns Data
            
        return $data;
    }
}
```
