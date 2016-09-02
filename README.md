# MyRacePass PHP SDK 

[![Build Status](https://travis-ci.org/Robert430404/mrp-php-sdk.svg?branch=master)](https://travis-ci.org/Robert430404/mrp-php-sdk)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/Robert430404/mrp-php-sdk/blob/master/LICENSE)
[![codecov](https://codecov.io/gh/Robert430404/mrp-php-sdk/branch/master/graph/badge.svg)](https://codecov.io/gh/Robert430404/mrp-php-sdk)
[![Code Climate](https://codeclimate.com/github/Robert430404/mrp-php-sdk/badges/gpa.svg)](https://codeclimate.com/github/Robert430404/mrp-php-sdk)

This project is currently under active development, but once we are finished, this package will give you a quick and easy way to interact with the MyRacePass JSON API V2 inside of PHP. The goal of the project is to give the user a fluent interface to interact with the API's data, which is represented as objects.

We are composer compatible, and once we hit a V 1.0 the package will be put on packagist. We are open to pull requests and issues here on Github and would appreciate as much help as possible.

## What Is Our End Goal With This Project?

Our end goal is complete compatibility with [The MRP API](http://www.myracepass.com/developers/api/). The SDK will follow the same requirements that the API documentation describes for each endpoint.

This is also the first of, hopefully, a number of projects for various programming languages. (ie. JavaScript, Ruby, .NET CORE, etc...) If you have experience in a different language and would like to help spear head another project, please feel free to reach out to me and ask about doing so.

## Some Basic Documentation

Ideally once the tool is developed, you would simply require the package through your composer.json, make sure you have the composer autoloader included, and then start using our objects like so.

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
        // You should really set this up in a config file
        // of sorts (ie. Laravel ENV, Symfony YAML, etc...)
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
        // Returns an object with data from MRP API
        $data = $this->pointsEndpoint
                     ->setScheduleId(1000)
                     ->setClassId(1000)
                     ->getRequest();
            
        // Return your data object
        return $data;
    }
}
```