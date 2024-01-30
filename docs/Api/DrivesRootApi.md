# OpenAPI\Client\DrivesRootApi

All URIs are relative to https://ocis.ocis-traefik.latest.owncloud.works/graph, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDriveItem()**](DrivesRootApi.md#createDriveItem) | **POST** /v1beta1/drives/{drive-id}/root/children | Create a drive item |
| [**getRoot()**](DrivesRootApi.md#getRoot) | **GET** /v1.0/drives/{drive-id}/root | Get root from arbitrary space |


## `createDriveItem()`

```php
createDriveItem($drive_id, $drive_item): \OpenAPI\Client\Model\DriveItem
```

Create a drive item

You can use the root childrens endpoint to mount a remoteItem in the share jail. The `@client.synchronize` property of the `driveItem` in the [sharedWithMe](#/me.drive/ListSharedWithMe) endpoint will change to true.

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
$drive_id = a0ca6a90-a365-4782-871e-d44447bbc668$a0ca6a90-a365-4782-871e-d44447bbc668; // string | key: id of drive
$drive_item = {"name":"Einsteins project share","remoteItem":{"id":"a-storage-provider-id$a-space-id!a-node-id","permissions":[{"id":"share-id"}]}}; // \OpenAPI\Client\Model\DriveItem | In the request body, provide a JSON object with the following parameters. For mounting a share the necessary remoteItem id and permission id can be taken from the [sharedWithMe](#/me.drive/ListSharedWithMe) endpoint.

try {
    $result = $apiInstance->createDriveItem($drive_id, $drive_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DrivesRootApi->createDriveItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **drive_id** | **string**| key: id of drive | |
| **drive_item** | [**\OpenAPI\Client\Model\DriveItem**](../Model/DriveItem.md)| In the request body, provide a JSON object with the following parameters. For mounting a share the necessary remoteItem id and permission id can be taken from the [sharedWithMe](#/me.drive/ListSharedWithMe) endpoint. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DriveItem**](../Model/DriveItem.md)

### Authorization

[openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

[openId](../../README.md#openId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
