Title: News Single Endpoint Documentation
---
# News Single Endpoint Documentation

This section covers all of the methods and implementation details for the news single endpoint of the SDK/API. Read about the API behavior and requirements [here](http://www.myracepass.com/developers/api/?c=1217&i=17423).

# Endpoint Methods

There are two types of methods associated with this object. Setter methods and Getter methods. The setter methods are what is used to build your request, while the getter methods are used for validation/testing and actually "getting" your data from the endpoint.

The chart outlines all of the methods on this endpoint.

| Method Name      | Method Description                                        | Method Type
| :--------------- | :-------------------------------------------------------- | :----------
|                  |                                                           |
| setNewsId        | This method sets the news id for the call                 | Setter
| setIncludeImages | This method toggles whether or not images are included    | Setter
| setIncludeTags   | This method toggles whether or not tags are included      | Setter
|                  |                                                           |
| getBaseUrl       | This method gets the base URL used in the call            | Getter
| getUrlParams     | This method gets the current parameters for the url       | Getter
| getRequest       | This method executes a GET request and returns the Data   | Getter

# Endpoint Method Examples

This endpoint requires you to set the news ID so it can find the single story you are wanting.

** Below Is A Basic Example Of The Endpoint **

```php
<?php
     
use mrpsdk\endpoints\news\NewsStoryEndpoint;
     
class NewsClass
{
    /**
     * @var NewsStoryEndpoint
     */
    protected $newsStoryEndpoint;
    
    /**
     * YourClass constructor.
     */
    public function __construct()
    {
        $apiKey = 'XXXXXXX-XXXX-XXXXXX-XXXXXXXXXX';
             
        $this->newsStoryEndpoint = new NewsStoryEndpoint($apiKey);
    }
    
    /**
     * Returns Data From The MRP API In Object Form From JSON
     * 
     * @return mixed
     */
    public function returnNewsStory()
    {
        $data = $this->newsStoryEndpoint // Your Object
                     ->setNewsId(1)      // Expects Integer
                     ->getRequest();     // Sends Request And Returns Data
            
        return $data;
    }
}
```

There are also more advanced use cases of this endpoint as well. For specific's on usage of the endpoints full features, please reference the API documentation [here](http://www.myracepass.com/developers/api/?c=1217&i=17423).

** Below is an example with all methods chained **

```php
<?php
     
use mrpsdk\endpoints\news\NewsStoryEndpoint;
     
class NewsClass
{
    /**
     * @var NewsStoryEndpoint
     */
    protected $newsStoryEndpoint;
    
    /**
     * YourClass constructor.
     */
    public function __construct()
    {
        $apiKey = 'XXXXXXX-XXXX-XXXXXX-XXXXXXXXXX';
             
        $this->newsStoryEndpoint = new NewsStoryEndpoint($apiKey);
    }
    
    /**
     * Returns Data From The MRP API In Object Form From JSON
     * 
     * @return mixed
     */
    public function returnNewsStory()
    {
        $data = $this->newsStoryEndpoint        // Your Object
                     ->setNewsId(1)             // Expects Integer
                     ->setIncludeImages('true') // Expects BOOL in String Form
                     ->setIncludeTags('true')   // Expects BOOL in String Form
                     ->getRequest();            // Sends Request And Returns Data
            
        return $data;
    }
}
```
