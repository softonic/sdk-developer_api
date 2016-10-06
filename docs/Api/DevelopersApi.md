# Softonic\DeveloperApiSdk\DevelopersApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeveloper**](DevelopersApi.md#createDeveloper) | **POST** /developers | Creates a new Developer
[**findDeveloper**](DevelopersApi.md#findDeveloper) | **GET** /developers | List of Developers
[**readDeveloper**](DevelopersApi.md#readDeveloper) | **GET** /developers/{id_developer} | Fetches a single Developer
[**updateDeveloper**](DevelopersApi.md#updateDeveloper) | **PATCH** /developers/{id_developer} | Partially updates a Developer


# **createDeveloper**
> createDeveloper($body)

Creates a new Developer

Creates a new Developer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\DeveloperApiSdk\Api\DevelopersApi();
$body = new \Softonic\DeveloperApiSdk\Client\Model\Developer(); // \Softonic\DeveloperApiSdk\Client\Model\Developer | 

try {
    $api_instance->createDeveloper($body);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->createDeveloper: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\DeveloperApiSdk\Client\Model\Developer**](../Model/\Softonic\DeveloperApiSdk\Client\Model\Developer.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findDeveloper**
> \Softonic\DeveloperApiSdk\Client\Model\Developer[] findDeveloper($body)

List of Developers

List of Developers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\DeveloperApiSdk\Api\DevelopersApi();
$body = new \Softonic\DeveloperApiSdk\Client\Model\Developer(); // \Softonic\DeveloperApiSdk\Client\Model\Developer | 

try {
    $result = $api_instance->findDeveloper($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->findDeveloper: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\DeveloperApiSdk\Client\Model\Developer**](../Model/\Softonic\DeveloperApiSdk\Client\Model\Developer.md)|  | [optional]

### Return type

[**\Softonic\DeveloperApiSdk\Client\Model\Developer[]**](../Model/Developer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readDeveloper**
> \Softonic\DeveloperApiSdk\Client\Model\Developer readDeveloper($id_developer)

Fetches a single Developer

Fetches a single Developer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\DeveloperApiSdk\Api\DevelopersApi();
$id_developer = "id_developer_example"; // string | 

try {
    $result = $api_instance->readDeveloper($id_developer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->readDeveloper: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_developer** | **string**|  |

### Return type

[**\Softonic\DeveloperApiSdk\Client\Model\Developer**](../Model/Developer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDeveloper**
> updateDeveloper($id_developer, $body)

Partially updates a Developer

Partially updates a Developer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Softonic\DeveloperApiSdk\Api\DevelopersApi();
$id_developer = "id_developer_example"; // string | 
$body = new \Softonic\DeveloperApiSdk\Client\Model\Developer(); // \Softonic\DeveloperApiSdk\Client\Model\Developer | 

try {
    $api_instance->updateDeveloper($id_developer, $body);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->updateDeveloper: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_developer** | **string**|  |
 **body** | [**\Softonic\DeveloperApiSdk\Client\Model\Developer**](../Model/\Softonic\DeveloperApiSdk\Client\Model\Developer.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

