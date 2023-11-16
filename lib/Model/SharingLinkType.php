<?php
/**
 * SharingLinkType
 *
 * PHP version 7.4
 *
 * @category Class
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
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SharingLinkType Class Doc Comment
 *
 * @category Class
 * @description The type of the link created.  | Value          | Display name      | Description                                                     | | -------------- | ----------------- | --------------------------------------------------------------- | | internal       | Internal          | Creates an internal link without any permissions.               | | view           | View              | Creates a read-only link to the driveItem.                      | | upload         | Upload            | Creates a read-write link to the folder driveItem.              | | edit           | Edit              | Creates a read-write link to the driveItem.                     | | createOnly     | File Drop         | Creates an upload-only link to the folder driveItem.            | | blocksDownload | Secure View       | Creates a read-only link that blocks download to the driveItem. |
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SharingLinkType
{
    /**
     * Possible values of this enum
     */
    public const INTERNAL = 'internal';

    public const VIEW = 'view';

    public const UPLOAD = 'upload';

    public const EDIT = 'edit';

    public const CREATE_ONLY = 'createOnly';

    public const BLOCKS_DOWNLOAD = 'blocksDownload';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INTERNAL,
            self::VIEW,
            self::UPLOAD,
            self::EDIT,
            self::CREATE_ONLY,
            self::BLOCKS_DOWNLOAD
        ];
    }
}


