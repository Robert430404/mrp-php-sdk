Title: News Endpoint Documentation
---
# News Endpoint Documentation

This section covers all of the methods and implementation details for the news endpoint of the SDK/API. Read about the API behavior and requirements [here](http://www.myracepass.com/developers/api/?c=1217&i=17408).

# Endpoint Methods

There are two types of methods associated with this object. Setter methods and Getter methods. The setter methods are what is used to build your request, while the getter methods are used for validation/testing and actually "getting" your data from the endpoint.

The chart outlines all of the methods on this endpoint.

| Method Name      | Method Description                                        | Method Type
| :--------------- | :-------------------------------------------------------- | :----------
|                  |                                                           |
| setTagType       | This method sets the tag type for the call                | Setter
| setTagId         | This method sets the tag id for the call                  | Setter
| setNewsTypeId    | This method sets the news type by id for the call         | Setter
| setSearch        | This method sets the search for the call                  | Setter
| setCurrentPage   | This method sets the current page for the call            | Setter
| setPageSize      | This method sets the size of a page for the call          | Setter
| setPinnedNumber  | This method sets the number of pinned posts for the call  | Setter
| setUserId        | This method sets the user id for the call                 | Setter
| setDateOrder     | This method sets the date order for the call              | Setter
| setIncludeImages | This method toggles whether or not images are included    | Setter
| setIncludeTags   | This method toggles whether or not tags are included      | Setter
| setPullType      | This method sets the pull type for the call               | Setter
|                  |                                                           |
| getBaseUrl       | This method gets the base URL used in the call            | Getter
| getUrlParams     | This method gets the current parameters for the url       | Getter
| getRequest       | This method executes a GET request and returns the Data   | Getter

# Endpoint Method Examples

Since this endpoint has no required fields, you can simply create the object and pass the request with no other methods required.

** Below Is A Basic Example Of The Endpoint **

```php
<?php
     
use mrpsdk\endpoints\news\NewsEndpoint;
     
class NewsClass
{
    /**
     * @var NewsEndpoint
     */
    protected $newsEndpoint;
    
    /**
     * YourClass constructor.
     */
    public function __construct()
    {
        $apiKey = 'XXXXXXX-XXXX-XXXXXX-XXXXXXXXXX';
             
        $this->newsEndpoint = new NewsEndpoint($apiKey);
    }
    
    /**
     * Returns Data From The MRP API In Object Form From JSON
     * 
     * @return mixed
     */
    public function returnNewsStories()
    {
        $data = $this->newsEndpoint  // Your Object
                     ->getRequest(); // Sends Request And Returns Data
            
        return $data;
    }
}
```

There are also more advanced use cases of this endpoint as well. For specific's on usage of the endpoints full features, please reference the API documentation [here](http://www.myracepass.com/developers/api/?c=1217&i=17408).

** Below is an example with all methods chained **

```php
<?php
     
use mrpsdk\endpoints\news\NewsEndpoint;
     
class NewsClass
{
    /**
     * @var NewsEndpoint
     */
    protected $newsEndpoint;
    
    /**
     * YourClass constructor.
     */
    public function __construct()
    {
        $apiKey = 'XXXXXXX-XXXX-XXXXXX-XXXXXXXXXX';
             
        $this->newsEndpoint = new NewsEndpoint($apiKey);
    }
    
    /**
     * Returns Data From The MRP API In Object Form From JSON
     * 
     * @return mixed
     */
    public function returnNewsStories()
    {
        $data = $this->newsEndpoint             // Your Object
                     ->setCurrentPage(1)        // Expects Integer
                     ->setDataOrder('nameAsc')  // Expects String
                     ->setIncludeImages('true') // Expects BOOL in String Form
                     ->setIncludeTags('true')   // Expects BOOL in String Form
                     ->setNewsTypeId(0)         // Expects Integer
                     ->setPageSize(10)          // Expects Integer
                     ->setPinnedNumber(1)       // Expects Integer
                     ->setPullType('Official')  // Expects String
                     ->setSearch('Search')      // Expects String
                     ->setTagId(0)              // Expects Integer
                     ->setTagType('Driver')     // Expects String
                     ->setUserId(0)             // Expects Integer
                     ->getRequest();            // Sends Request And Returns Data
            
        return $data;
    }
}
```
