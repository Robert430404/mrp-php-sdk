Title: News Views Endpoint Documentation
---
# News Views Endpoint Documentation

This section covers all of the methods and implementation details for the news views endpoint of the SDK/API. Read about the API behavior and requirements [here](http://www.myracepass.com/developers/api/?c=1217&i=20200).

# Endpoint Methods

There are two types of methods associated with this object. Setter methods and Getter methods. The setter methods are what is used to build your request, while the getter methods are used for validation/testing and actually "getting" your data from the endpoint.

The chart outlines all of the methods on this endpoint.

| Method Name      | Method Description                                        | Method Type
| :--------------- | :-------------------------------------------------------- | :----------
|                  |                                                           |
| setNewsId        | This method sets the news id for the call                 | Setter
| setStartDate     | This method sets the start date for the call              | Setter
| setEndDate       | This method sets the end date for the call                | Setter
|                  |                                                           |
| getBaseUrl       | This method gets the base URL used in the call            | Getter
| getUrlParams     | This method gets the current parameters for the url       | Getter
| getRequest       | This method executes a GET request and returns the Data   | Getter

# Endpoint Method Examples

Since this endpoint has no required fields, you can simply create the object and pass the request with no other methods required.

** Below Is A Basic Example Of The Endpoint **

```php
<?php
     
use mrpsdk\endpoints\news\ViewsEndpoint;
     
class NewsClass
{
    /**
     * @var ViewsEndpoint
     */
    protected $viewsEndpoint;
    
    /**
     * YourClass constructor.
     */
    public function __construct()
    {
        $apiKey = 'XXXXXXX-XXXX-XXXXXX-XXXXXXXXXX';
             
        $this->viewsEndpoint = new ViewsEndpoint($apiKey);
    }
    
    /**
     * Returns Data From The MRP API In Object Form From JSON
     * 
     * @return mixed
     */
    public function returnNewsView()
    {
        $data = $this->viewsEndpoint // Your Object
                     ->getRequest(); // Sends Request And Returns Data
            
        return $data;
    }
}
```

There are also more advanced use cases of this endpoint as well. For specific's on usage of the endpoints full features, please reference the API documentation [here](http://www.myracepass.com/developers/api/?c=1217&i=20200).

** Below is an example with all methods chained **

```php
<?php
     
use mrpsdk\endpoints\news\ViewsEndpoint;
     
class NewsClass
{
    /**
     * @var ViewsEndpoint
     */
    protected $viewsEndpoint;
    
    /**
     * YourClass constructor.
     */
    public function __construct()
    {
        $apiKey = 'XXXXXXX-XXXX-XXXXXX-XXXXXXXXXX';
             
        $this->viewsEndpoint = new ViewsEndpoint($apiKey);
    }
    
    /**
     * Returns Data From The MRP API In Object Form From JSON
     * 
     * @return mixed
     */
    public function returnNewsView()
    {
        $data = $this->viewsEndpoint              // Your Object
                     ->setNewsId(1)               // Expects Integer
                     ->setStartDate('08/01/2015') // Expects Date in String Form
                     ->setEndDate('08/01/2016')   // Expects Date in String Form
                     ->getRequest();              // Sends Request And Returns Data
            
        return $data;
    }
}
```
