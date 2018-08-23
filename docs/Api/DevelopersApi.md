# Softonic\DeveloperApiSdk\DevelopersApi

All URIs are relative to *https://developer.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeveloper**](DevelopersApi.md#createDeveloper) | **POST** /developers | Creates a new Developer
[**findDeveloper**](DevelopersApi.md#findDeveloper) | **GET** /developers | List of Developers
[**readDeveloper**](DevelopersApi.md#readDeveloper) | **GET** /developers/{id_developer} | Fetches a single Developer
[**replaceDeveloper**](DevelopersApi.md#replaceDeveloper) | **PUT** /developers/{id_developer} | Entirely replaces a Developer
[**updateDeveloper**](DevelopersApi.md#updateDeveloper) | **PATCH** /developers/{id_developer} | Partially updates a Developer


# **createDeveloper**
> createDeveloper($body)

Creates a new Developer

Creates a new Developer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: developer_api_access_code
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_application
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_implicit
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_password
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DeveloperApiSdk\Api\DevelopersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Softonic\DeveloperApiSdk\Client\Model\Developer(); // \Softonic\DeveloperApiSdk\Client\Model\Developer | 

try {
    $apiInstance->createDeveloper($body);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->createDeveloper: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Softonic\DeveloperApiSdk\Client\Model\Developer**](../Model/Developer.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[developer_api_access_code](../../README.md#developer_api_access_code), [developer_api_application](../../README.md#developer_api_application), [developer_api_implicit](../../README.md#developer_api_implicit), [developer_api_password](../../README.md#developer_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findDeveloper**
> \Softonic\DeveloperApiSdk\Client\Model\Developer[] findDeveloper($page, $limit, $search)

List of Developers

List of Developers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: developer_api_access_code
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_application
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_implicit
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_password
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DeveloperApiSdk\Api\DevelopersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page of the pagination when listing
$limit = 56; // int | Number of results per page when listing
$search = "search_example"; // string | Field to search for

try {
    $result = $apiInstance->findDeveloper($page, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->findDeveloper: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page of the pagination when listing | [optional]
 **limit** | **int**| Number of results per page when listing | [optional]
 **search** | **string**| Field to search for | [optional]

### Return type

[**\Softonic\DeveloperApiSdk\Client\Model\Developer[]**](../Model/Developer.md)

### Authorization

[developer_api_access_code](../../README.md#developer_api_access_code), [developer_api_application](../../README.md#developer_api_application), [developer_api_implicit](../../README.md#developer_api_implicit), [developer_api_password](../../README.md#developer_api_password)

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

// Configure OAuth2 access token for authorization: developer_api_access_code
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_application
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_implicit
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_password
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DeveloperApiSdk\Api\DevelopersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_developer = "id_developer_example"; // string | Developer identifier

try {
    $result = $apiInstance->readDeveloper($id_developer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->readDeveloper: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_developer** | **string**| Developer identifier |

### Return type

[**\Softonic\DeveloperApiSdk\Client\Model\Developer**](../Model/Developer.md)

### Authorization

[developer_api_access_code](../../README.md#developer_api_access_code), [developer_api_application](../../README.md#developer_api_application), [developer_api_implicit](../../README.md#developer_api_implicit), [developer_api_password](../../README.md#developer_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceDeveloper**
> replaceDeveloper($id_developer, $body)

Entirely replaces a Developer

Entirely replaces a Developer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: developer_api_access_code
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_application
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_implicit
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_password
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DeveloperApiSdk\Api\DevelopersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_developer = "id_developer_example"; // string | Developer identifier
$body = new \Softonic\DeveloperApiSdk\Client\Model\Developer(); // \Softonic\DeveloperApiSdk\Client\Model\Developer | 

try {
    $apiInstance->replaceDeveloper($id_developer, $body);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->replaceDeveloper: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_developer** | **string**| Developer identifier |
 **body** | [**\Softonic\DeveloperApiSdk\Client\Model\Developer**](../Model/Developer.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[developer_api_access_code](../../README.md#developer_api_access_code), [developer_api_application](../../README.md#developer_api_application), [developer_api_implicit](../../README.md#developer_api_implicit), [developer_api_password](../../README.md#developer_api_password)

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

// Configure OAuth2 access token for authorization: developer_api_access_code
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_application
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_implicit
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: developer_api_password
$config = Softonic\DeveloperApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Softonic\DeveloperApiSdk\Api\DevelopersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_developer = "id_developer_example"; // string | Developer identifier
$body = new \Softonic\DeveloperApiSdk\Client\Model\Developer(); // \Softonic\DeveloperApiSdk\Client\Model\Developer | 

try {
    $apiInstance->updateDeveloper($id_developer, $body);
} catch (Exception $e) {
    echo 'Exception when calling DevelopersApi->updateDeveloper: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_developer** | **string**| Developer identifier |
 **body** | [**\Softonic\DeveloperApiSdk\Client\Model\Developer**](../Model/Developer.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[developer_api_access_code](../../README.md#developer_api_access_code), [developer_api_application](../../README.md#developer_api_application), [developer_api_implicit](../../README.md#developer_api_implicit), [developer_api_password](../../README.md#developer_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

