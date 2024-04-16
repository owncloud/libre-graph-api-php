<?php
/**
 * DriveItemApi
 * PHP version 8.1
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Libre Graph API
 *
 * Libre Graph is a free API for cloud collaboration inspired by the MS Graph API.
 *
 * The version of the OpenAPI document: v1.0.4
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * DriveItemApi Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DriveItemApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'deleteDriveItem' => [
            'application/json',
        ],
        'updateDriveItem' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation deleteDriveItem
     *
     * Delete a DriveItem.
     *
     * @param  string $drive_id key: id of drive (required)
     * @param  string $item_id key: id of item (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteDriveItem'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return void
     */
    public function deleteDriveItem(
        string $drive_id,
        string $item_id,
        string $contentType = self::contentTypes['deleteDriveItem'][0]
    )
    {
        $this->deleteDriveItemWithHttpInfo($drive_id, $item_id, $contentType);
    }

    /**
     * Operation deleteDriveItemWithHttpInfo
     *
     * Delete a DriveItem.
     *
     * @param  string $drive_id key: id of drive (required)
     * @param  string $item_id key: id of item (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteDriveItem'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDriveItemWithHttpInfo(
        string $drive_id,
        string $item_id,
        string $contentType = self::contentTypes['deleteDriveItem'][0]
    ): array
    {
        $request = $this->deleteDriveItemRequest($drive_id, $item_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\OdataError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteDriveItemAsync
     *
     * Delete a DriveItem.
     *
     * @param  string $drive_id key: id of drive (required)
     * @param  string $item_id key: id of item (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteDriveItem'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function deleteDriveItemAsync(
        string $drive_id,
        string $item_id,
        string $contentType = self::contentTypes['deleteDriveItem'][0]
    ): PromiseInterface
    {
        return $this->deleteDriveItemAsyncWithHttpInfo($drive_id, $item_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteDriveItemAsyncWithHttpInfo
     *
     * Delete a DriveItem.
     *
     * @param  string $drive_id key: id of drive (required)
     * @param  string $item_id key: id of item (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteDriveItem'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function deleteDriveItemAsyncWithHttpInfo(
        $drive_id,
        $item_id,
        string $contentType = self::contentTypes['deleteDriveItem'][0]
    ): PromiseInterface
    {
        $returnType = '';
        $request = $this->deleteDriveItemRequest($drive_id, $item_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteDriveItem'
     *
     * @param  string $drive_id key: id of drive (required)
     * @param  string $item_id key: id of item (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteDriveItem'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteDriveItemRequest(
        $drive_id,
        $item_id,
        string $contentType = self::contentTypes['deleteDriveItem'][0]
    ): Request
    {

        // verify the required parameter 'drive_id' is set
        if ($drive_id === null || (is_array($drive_id) && count($drive_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $drive_id when calling deleteDriveItem'
            );
        }

        // verify the required parameter 'item_id' is set
        if ($item_id === null || (is_array($item_id) && count($item_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $item_id when calling deleteDriveItem'
            );
        }


        $resourcePath = '/v1beta1/drives/{drive-id}/items/{item-id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($drive_id !== null) {
            $resourcePath = str_replace(
                '{' . 'drive-id' . '}',
                ObjectSerializer::toPathValue($drive_id),
                $resourcePath
            );
        }
        // path params
        if ($item_id !== null) {
            $resourcePath = str_replace(
                '{' . 'item-id' . '}',
                ObjectSerializer::toPathValue($item_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateDriveItem
     *
     * Update a DriveItem.
     *
     * @param  string $drive_id key: id of drive (required)
     * @param  string $item_id key: id of item (required)
     * @param  \OpenAPI\Client\Model\DriveItem $drive_item DriveItem properties to update (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDriveItem'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return void
     */
    public function updateDriveItem(
        string $drive_id,
        string $item_id,
        \OpenAPI\Client\Model\DriveItem $drive_item,
        string $contentType = self::contentTypes['updateDriveItem'][0]
    )
    {
        $this->updateDriveItemWithHttpInfo($drive_id, $item_id, $drive_item, $contentType);
    }

    /**
     * Operation updateDriveItemWithHttpInfo
     *
     * Update a DriveItem.
     *
     * @param  string $drive_id key: id of drive (required)
     * @param  string $item_id key: id of item (required)
     * @param  \OpenAPI\Client\Model\DriveItem $drive_item DriveItem properties to update (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDriveItem'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDriveItemWithHttpInfo(
        string $drive_id,
        string $item_id,
        \OpenAPI\Client\Model\DriveItem $drive_item,
        string $contentType = self::contentTypes['updateDriveItem'][0]
    ): array
    {
        $request = $this->updateDriveItemRequest($drive_id, $item_id, $drive_item, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\OdataError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateDriveItemAsync
     *
     * Update a DriveItem.
     *
     * @param  string $drive_id key: id of drive (required)
     * @param  string $item_id key: id of item (required)
     * @param  \OpenAPI\Client\Model\DriveItem $drive_item DriveItem properties to update (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDriveItem'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function updateDriveItemAsync(
        string $drive_id,
        string $item_id,
        \OpenAPI\Client\Model\DriveItem $drive_item,
        string $contentType = self::contentTypes['updateDriveItem'][0]
    ): PromiseInterface
    {
        return $this->updateDriveItemAsyncWithHttpInfo($drive_id, $item_id, $drive_item, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDriveItemAsyncWithHttpInfo
     *
     * Update a DriveItem.
     *
     * @param  string $drive_id key: id of drive (required)
     * @param  string $item_id key: id of item (required)
     * @param  \OpenAPI\Client\Model\DriveItem $drive_item DriveItem properties to update (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDriveItem'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function updateDriveItemAsyncWithHttpInfo(
        $drive_id,
        $item_id,
        $drive_item,
        string $contentType = self::contentTypes['updateDriveItem'][0]
    ): PromiseInterface
    {
        $returnType = '';
        $request = $this->updateDriveItemRequest($drive_id, $item_id, $drive_item, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateDriveItem'
     *
     * @param  string $drive_id key: id of drive (required)
     * @param  string $item_id key: id of item (required)
     * @param  \OpenAPI\Client\Model\DriveItem $drive_item DriveItem properties to update (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDriveItem'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateDriveItemRequest(
        $drive_id,
        $item_id,
        $drive_item,
        string $contentType = self::contentTypes['updateDriveItem'][0]
    ): Request
    {

        // verify the required parameter 'drive_id' is set
        if ($drive_id === null || (is_array($drive_id) && count($drive_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $drive_id when calling updateDriveItem'
            );
        }

        // verify the required parameter 'item_id' is set
        if ($item_id === null || (is_array($item_id) && count($item_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $item_id when calling updateDriveItem'
            );
        }

        // verify the required parameter 'drive_item' is set
        if ($drive_item === null || (is_array($drive_item) && count($drive_item) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $drive_item when calling updateDriveItem'
            );
        }


        $resourcePath = '/v1beta1/drives/{drive-id}/items/{item-id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($drive_id !== null) {
            $resourcePath = str_replace(
                '{' . 'drive-id' . '}',
                ObjectSerializer::toPathValue($drive_id),
                $resourcePath
            );
        }
        // path params
        if ($item_id !== null) {
            $resourcePath = str_replace(
                '{' . 'item-id' . '}',
                ObjectSerializer::toPathValue($item_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($drive_item)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($drive_item));
            } else {
                $httpBody = $drive_item;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PATCH',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
