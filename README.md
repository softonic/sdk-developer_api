# DeveloperApiSdk
Add your description here

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v2.108.0
- Package version: 2.4.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [http://corporate.softonic.com/contact-us](http://corporate.softonic.com/contact-us)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/softonic/developer_api_sdk.git"
    }
  ],
  "require": {
    "softonic/developer_api_sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/DeveloperApiSdk/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *http://developer.sftapi.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DevelopersApi* | [**createDeveloper**](docs/Api/DevelopersApi.md#createdeveloper) | **POST** /developers | Creates a new Developer
*DevelopersApi* | [**findDeveloper**](docs/Api/DevelopersApi.md#finddeveloper) | **GET** /developers | List of Developers
*DevelopersApi* | [**readDeveloper**](docs/Api/DevelopersApi.md#readdeveloper) | **GET** /developers/{id_developer} | Fetches a single Developer
*DevelopersApi* | [**replaceDeveloper**](docs/Api/DevelopersApi.md#replacedeveloper) | **PUT** /developers/{id_developer} | Entirely replaces a Developer
*DevelopersApi* | [**updateDeveloper**](docs/Api/DevelopersApi.md#updatedeveloper) | **PATCH** /developers/{id_developer} | Partially updates a Developer


## Documentation For Models

 - [Developer](docs/Model/Developer.md)


## Documentation For Authorization


## developer_api_access_code

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://oauth-v2.softonic.com/token
- **Scopes**: 
 - **developer_api.read.developers**: Read Developers
 - **developer_api.replace.developers**: Replace Developers
 - **developer_api.update.developers**: Update Developers
 - **developer_api.find.developers**: Find Developers
 - **developer_api.create.developers**: Create Developers

## developer_api_application

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - **developer_api.read.developers**: Read Developers
 - **developer_api.replace.developers**: Replace Developers
 - **developer_api.update.developers**: Update Developers
 - **developer_api.find.developers**: Find Developers
 - **developer_api.create.developers**: Create Developers

## developer_api_implicit

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: https://oauth-v2.softonic.com/authorize
- **Scopes**: 
 - **developer_api.read.developers**: Read Developers
 - **developer_api.replace.developers**: Replace Developers
 - **developer_api.update.developers**: Update Developers
 - **developer_api.find.developers**: Find Developers
 - **developer_api.create.developers**: Create Developers

## developer_api_password

- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: 
 - **developer_api.read.developers**: Read Developers
 - **developer_api.replace.developers**: Replace Developers
 - **developer_api.update.developers**: Update Developers
 - **developer_api.find.developers**: Find Developers
 - **developer_api.create.developers**: Create Developers


## Author

XXXXXXXXX@softonic.com


