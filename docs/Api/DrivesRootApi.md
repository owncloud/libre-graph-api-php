# OpenAPI\Client\DrivesRootApi

All URIs are relative to https://ocis.ocis-traefik.latest.owncloud.works/graph/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRoot()**](DrivesRootApi.md#getRoot) | **GET** /drives/{drive-id}/root | Get root from arbitrary space |


## `getRoot()`

```php
getRoot($drive_id): \OpenAPI\Client\Model\DriveItem
```

Get root from arbitrary space

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DrivesRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$drive_id = 'drive_id_example'; // string | key: id of drive

try {
    $result = $apiInstance->getRoot($drive_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DrivesRootApi->getRoot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **drive_id** | **string**| key: id of drive | |

### Return type

[**\OpenAPI\Client\Model\DriveItem**](../Model/DriveItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
