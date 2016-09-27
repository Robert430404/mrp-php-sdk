# MyRacePass PHP SDK 

[![Latest Stable Version](https://poser.pugx.org/robert430404/mrp-php-sdk/v/stable)](https://packagist.org/packages/robert430404/mrp-php-sdk)
[![Build Status](https://travis-ci.org/Robert430404/mrp-php-sdk.svg?branch=master)](https://travis-ci.org/Robert430404/mrp-php-sdk)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/Robert430404/mrp-php-sdk/blob/master/LICENSE)
[![codecov](https://codecov.io/gh/Robert430404/mrp-php-sdk/branch/master/graph/badge.svg)](https://codecov.io/gh/Robert430404/mrp-php-sdk)
[![Code Climate](https://codeclimate.com/github/Robert430404/mrp-php-sdk/badges/gpa.svg)](https://codeclimate.com/github/Robert430404/mrp-php-sdk)

This package gives you a fluent interface to interact with the My Race Pass API V2. All endpoint's are supported and all of the request parameters are fully implemented. We return PHP Objects from the API for use inside of your application. 

We are composer compatible, and are on packagist. We are open to pull requests and issues here on Github and would appreciate as much help as possible.

In order to install our package via Composer, please use the following command. 

    composer require robert430404/mrp-php-sdk

Or add this line to your composer.json
    
    "require": {
        "robert430404/mrp-php-sdk": "1.0.0"
    }

## Information About The MRP API V2

We have complete compatibility with [The MRP API](http://www.myracepass.com/developers/api/). The SDK will follow the same requirements that the API documentation describes for each endpoint.

## Some Basic Documentation

More In Depth Documentation Can Be Found [Here](https://robert430404.github.io/mrp-php-sdk/) ** It is currently under development **

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
