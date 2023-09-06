# OpenAPI\Client\MeDriveApi

All URIs are relative to https://ocis.ocis-traefik.latest.owncloud.works/graph/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getHome()**](MeDriveApi.md#getHome) | **GET** /me/drive | Get personal space for user |


## `getHome()`

```php
getHome(): \OpenAPI\Client\Model\Drive
```

Get personal space for user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\MeDriveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getHome();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeDriveApi->getHome: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Drive**](../Model/Drive.md)

### Authorization

[openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
