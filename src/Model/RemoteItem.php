<?php
/**
 * RemoteItem
 *
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

namespace OpenAPI\Client\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use OpenAPI\Client\ObjectSerializer;

/**
 * RemoteItem Class Doc Comment
 *
 * @description Remote item data, if the item is shared from a drive other than the one being accessed. Read-only.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RemoteItem implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'remoteItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'created_by' => '\OpenAPI\Client\Model\IdentitySet',
        'created_date_time' => '\DateTime',
        'file' => '\OpenAPI\Client\Model\OpenGraphFile',
        'file_system_info' => '\OpenAPI\Client\Model\FileSystemInfo',
        'folder' => '\OpenAPI\Client\Model\Folder',
        'drive_alias' => 'string',
        'path' => 'string',
        'root_id' => 'string',
        'id' => 'string',
        'image' => '\OpenAPI\Client\Model\Image',
        'last_modified_by' => '\OpenAPI\Client\Model\IdentitySet',
        'last_modified_date_time' => '\DateTime',
        'name' => 'string',
        'e_tag' => 'string',
        'c_tag' => 'string',
        'parent_reference' => '\OpenAPI\Client\Model\ItemReference',
        'shared' => '\OpenAPI\Client\Model\Shared',
        'permissions' => '\OpenAPI\Client\Model\Permission[]',
        'size' => 'int',
        'special_folder' => '\OpenAPI\Client\Model\SpecialFolder',
        'web_dav_url' => 'string',
        'web_url' => 'string',
        'at_client_synchronize' => 'bool',
        'at_ui_hidden' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'created_by' => null,
        'created_date_time' => 'date-time',
        'file' => null,
        'file_system_info' => null,
        'folder' => null,
        'drive_alias' => null,
        'path' => null,
        'root_id' => null,
        'id' => null,
        'image' => null,
        'last_modified_by' => null,
        'last_modified_date_time' => 'date-time',
        'name' => null,
        'e_tag' => null,
        'c_tag' => null,
        'parent_reference' => null,
        'shared' => null,
        'permissions' => null,
        'size' => 'int64',
        'special_folder' => null,
        'web_dav_url' => null,
        'web_url' => null,
        'at_client_synchronize' => null,
        'at_ui_hidden' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'created_by' => false,
		'created_date_time' => false,
		'file' => false,
		'file_system_info' => false,
		'folder' => false,
		'drive_alias' => false,
		'path' => false,
		'root_id' => false,
		'id' => false,
		'image' => false,
		'last_modified_by' => false,
		'last_modified_date_time' => false,
		'name' => false,
		'e_tag' => false,
		'c_tag' => false,
		'parent_reference' => false,
		'shared' => false,
		'permissions' => false,
		'size' => false,
		'special_folder' => false,
		'web_dav_url' => false,
		'web_url' => false,
		'at_client_synchronize' => false,
		'at_ui_hidden' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'created_by' => 'createdBy',
        'created_date_time' => 'createdDateTime',
        'file' => 'file',
        'file_system_info' => 'fileSystemInfo',
        'folder' => 'folder',
        'drive_alias' => 'driveAlias',
        'path' => 'path',
        'root_id' => 'rootId',
        'id' => 'id',
        'image' => 'image',
        'last_modified_by' => 'lastModifiedBy',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'name' => 'name',
        'e_tag' => 'eTag',
        'c_tag' => 'cTag',
        'parent_reference' => 'parentReference',
        'shared' => 'shared',
        'permissions' => 'permissions',
        'size' => 'size',
        'special_folder' => 'specialFolder',
        'web_dav_url' => 'webDavUrl',
        'web_url' => 'webUrl',
        'at_client_synchronize' => '@client.synchronize',
        'at_ui_hidden' => '@ui.hidden'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'created_by' => 'setCreatedBy',
        'created_date_time' => 'setCreatedDateTime',
        'file' => 'setFile',
        'file_system_info' => 'setFileSystemInfo',
        'folder' => 'setFolder',
        'drive_alias' => 'setDriveAlias',
        'path' => 'setPath',
        'root_id' => 'setRootId',
        'id' => 'setId',
        'image' => 'setImage',
        'last_modified_by' => 'setLastModifiedBy',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'name' => 'setName',
        'e_tag' => 'setETag',
        'c_tag' => 'setCTag',
        'parent_reference' => 'setParentReference',
        'shared' => 'setShared',
        'permissions' => 'setPermissions',
        'size' => 'setSize',
        'special_folder' => 'setSpecialFolder',
        'web_dav_url' => 'setWebDavUrl',
        'web_url' => 'setWebUrl',
        'at_client_synchronize' => 'setAtClientSynchronize',
        'at_ui_hidden' => 'setAtUiHidden'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'created_by' => 'getCreatedBy',
        'created_date_time' => 'getCreatedDateTime',
        'file' => 'getFile',
        'file_system_info' => 'getFileSystemInfo',
        'folder' => 'getFolder',
        'drive_alias' => 'getDriveAlias',
        'path' => 'getPath',
        'root_id' => 'getRootId',
        'id' => 'getId',
        'image' => 'getImage',
        'last_modified_by' => 'getLastModifiedBy',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'name' => 'getName',
        'e_tag' => 'getETag',
        'c_tag' => 'getCTag',
        'parent_reference' => 'getParentReference',
        'shared' => 'getShared',
        'permissions' => 'getPermissions',
        'size' => 'getSize',
        'special_folder' => 'getSpecialFolder',
        'web_dav_url' => 'getWebDavUrl',
        'web_url' => 'getWebUrl',
        'at_client_synchronize' => 'getAtClientSynchronize',
        'at_ui_hidden' => 'getAtUiHidden'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('created_date_time', $data ?? [], null);
        $this->setIfExists('file', $data ?? [], null);
        $this->setIfExists('file_system_info', $data ?? [], null);
        $this->setIfExists('folder', $data ?? [], null);
        $this->setIfExists('drive_alias', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('root_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('last_modified_by', $data ?? [], null);
        $this->setIfExists('last_modified_date_time', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('e_tag', $data ?? [], null);
        $this->setIfExists('c_tag', $data ?? [], null);
        $this->setIfExists('parent_reference', $data ?? [], null);
        $this->setIfExists('shared', $data ?? [], null);
        $this->setIfExists('permissions', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('special_folder', $data ?? [], null);
        $this->setIfExists('web_dav_url', $data ?? [], null);
        $this->setIfExists('web_url', $data ?? [], null);
        $this->setIfExists('at_client_synchronize', $data ?? [], null);
        $this->setIfExists('at_ui_hidden', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if (!is_null($this->container['created_date_time']) && !preg_match("/^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?(Z|[+-][0-9][0-9]:[0-9][0-9])$/", $this->container['created_date_time'])) {
            $invalidProperties[] = "invalid value for 'created_date_time', must be conform to the pattern /^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?(Z|[+-][0-9][0-9]:[0-9][0-9])$/.";
        }

        if (!is_null($this->container['last_modified_date_time']) && !preg_match("/^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?(Z|[+-][0-9][0-9]:[0-9][0-9])$/", $this->container['last_modified_date_time'])) {
            $invalidProperties[] = "invalid value for 'last_modified_date_time', must be conform to the pattern /^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?(Z|[+-][0-9][0-9]:[0-9][0-9])$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets created_by
     *
     * @return \OpenAPI\Client\Model\IdentitySet|null
     */
    public function getCreatedBy(): ?\OpenAPI\Client\Model\IdentitySet
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \OpenAPI\Client\Model\IdentitySet|null $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy(?\OpenAPI\Client\Model\IdentitySet $created_by): static
    {
        if (is_null($created_by)) {
            throw new InvalidArgumentException('non-nullable created_by cannot be null');
        }
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_date_time
     *
     * @return \DateTime|null
     */
    public function getCreatedDateTime(): ?\DateTime
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     *
     * @param \DateTime|null $created_date_time Date and time of item creation. Read-only.
     *
     * @return $this
     */
    public function setCreatedDateTime(?\DateTime $created_date_time): static
    {
        if (is_null($created_date_time)) {
            throw new InvalidArgumentException('non-nullable created_date_time cannot be null');
        }

        if ((!preg_match("/^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?(Z|[+-][0-9][0-9]:[0-9][0-9])$/", ObjectSerializer::toString($created_date_time)))) {
            throw new InvalidArgumentException("invalid value for \$created_date_time when calling RemoteItem., must conform to the pattern /^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?(Z|[+-][0-9][0-9]:[0-9][0-9])$/.");
        }

        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }

    /**
     * Gets file
     *
     * @return \OpenAPI\Client\Model\OpenGraphFile|null
     */
    public function getFile(): ?\OpenAPI\Client\Model\OpenGraphFile
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \OpenAPI\Client\Model\OpenGraphFile|null $file file
     *
     * @return $this
     */
    public function setFile(?\OpenAPI\Client\Model\OpenGraphFile $file): static
    {
        if (is_null($file)) {
            throw new InvalidArgumentException('non-nullable file cannot be null');
        }
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets file_system_info
     *
     * @return \OpenAPI\Client\Model\FileSystemInfo|null
     */
    public function getFileSystemInfo(): ?\OpenAPI\Client\Model\FileSystemInfo
    {
        return $this->container['file_system_info'];
    }

    /**
     * Sets file_system_info
     *
     * @param \OpenAPI\Client\Model\FileSystemInfo|null $file_system_info file_system_info
     *
     * @return $this
     */
    public function setFileSystemInfo(?\OpenAPI\Client\Model\FileSystemInfo $file_system_info): static
    {
        if (is_null($file_system_info)) {
            throw new InvalidArgumentException('non-nullable file_system_info cannot be null');
        }
        $this->container['file_system_info'] = $file_system_info;

        return $this;
    }

    /**
     * Gets folder
     *
     * @return \OpenAPI\Client\Model\Folder|null
     */
    public function getFolder(): ?\OpenAPI\Client\Model\Folder
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     *
     * @param \OpenAPI\Client\Model\Folder|null $folder folder
     *
     * @return $this
     */
    public function setFolder(?\OpenAPI\Client\Model\Folder $folder): static
    {
        if (is_null($folder)) {
            throw new InvalidArgumentException('non-nullable folder cannot be null');
        }
        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets drive_alias
     *
     * @return string|null
     */
    public function getDriveAlias(): ?string
    {
        return $this->container['drive_alias'];
    }

    /**
     * Sets drive_alias
     *
     * @param string|null $drive_alias The drive alias can be used in clients to make the urls user friendly. Example: 'personal/einstein'. This will be used to resolve to the correct driveID.
     *
     * @return $this
     */
    public function setDriveAlias(?string $drive_alias): static
    {
        if (is_null($drive_alias)) {
            throw new InvalidArgumentException('non-nullable drive_alias cannot be null');
        }
        $this->container['drive_alias'] = $drive_alias;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path The relative path of the item in relation to its drive root.
     *
     * @return $this
     */
    public function setPath(?string $path): static
    {
        if (is_null($path)) {
            throw new InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets root_id
     *
     * @return string|null
     */
    public function getRootId(): ?string
    {
        return $this->container['root_id'];
    }

    /**
     * Sets root_id
     *
     * @param string|null $root_id Unique identifier for the drive root of this item. Read-only.
     *
     * @return $this
     */
    public function setRootId(?string $root_id): static
    {
        if (is_null($root_id)) {
            throw new InvalidArgumentException('non-nullable root_id cannot be null');
        }
        $this->container['root_id'] = $root_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique identifier for the remote item in its drive. Read-only.
     *
     * @return $this
     */
    public function setId(?string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \OpenAPI\Client\Model\Image|null
     */
    public function getImage(): ?\OpenAPI\Client\Model\Image
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \OpenAPI\Client\Model\Image|null $image image
     *
     * @return $this
     */
    public function setImage(?\OpenAPI\Client\Model\Image $image): static
    {
        if (is_null($image)) {
            throw new InvalidArgumentException('non-nullable image cannot be null');
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets last_modified_by
     *
     * @return \OpenAPI\Client\Model\IdentitySet|null
     */
    public function getLastModifiedBy(): ?\OpenAPI\Client\Model\IdentitySet
    {
        return $this->container['last_modified_by'];
    }

    /**
     * Sets last_modified_by
     *
     * @param \OpenAPI\Client\Model\IdentitySet|null $last_modified_by last_modified_by
     *
     * @return $this
     */
    public function setLastModifiedBy(?\OpenAPI\Client\Model\IdentitySet $last_modified_by): static
    {
        if (is_null($last_modified_by)) {
            throw new InvalidArgumentException('non-nullable last_modified_by cannot be null');
        }
        $this->container['last_modified_by'] = $last_modified_by;

        return $this;
    }

    /**
     * Gets last_modified_date_time
     *
     * @return \DateTime|null
     */
    public function getLastModifiedDateTime(): ?\DateTime
    {
        return $this->container['last_modified_date_time'];
    }

    /**
     * Sets last_modified_date_time
     *
     * @param \DateTime|null $last_modified_date_time Date and time the item was last modified. Read-only.
     *
     * @return $this
     */
    public function setLastModifiedDateTime(?\DateTime $last_modified_date_time): static
    {
        if (is_null($last_modified_date_time)) {
            throw new InvalidArgumentException('non-nullable last_modified_date_time cannot be null');
        }

        if ((!preg_match("/^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?(Z|[+-][0-9][0-9]:[0-9][0-9])$/", ObjectSerializer::toString($last_modified_date_time)))) {
            throw new InvalidArgumentException("invalid value for \$last_modified_date_time when calling RemoteItem., must conform to the pattern /^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?(Z|[+-][0-9][0-9]:[0-9][0-9])$/.");
        }

        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Optional. Filename of the remote item. Read-only.
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets e_tag
     *
     * @return string|null
     */
    public function getETag(): ?string
    {
        return $this->container['e_tag'];
    }

    /**
     * Sets e_tag
     *
     * @param string|null $e_tag ETag for the item. Read-only.
     *
     * @return $this
     */
    public function setETag(?string $e_tag): static
    {
        if (is_null($e_tag)) {
            throw new InvalidArgumentException('non-nullable e_tag cannot be null');
        }
        $this->container['e_tag'] = $e_tag;

        return $this;
    }

    /**
     * Gets c_tag
     *
     * @return string|null
     */
    public function getCTag(): ?string
    {
        return $this->container['c_tag'];
    }

    /**
     * Sets c_tag
     *
     * @param string|null $c_tag An eTag for the content of the item. This eTag is not changed if only the metadata is changed. Note This property is not returned if the item is a folder. Read-only.
     *
     * @return $this
     */
    public function setCTag(?string $c_tag): static
    {
        if (is_null($c_tag)) {
            throw new InvalidArgumentException('non-nullable c_tag cannot be null');
        }
        $this->container['c_tag'] = $c_tag;

        return $this;
    }

    /**
     * Gets parent_reference
     *
     * @return \OpenAPI\Client\Model\ItemReference|null
     */
    public function getParentReference(): ?\OpenAPI\Client\Model\ItemReference
    {
        return $this->container['parent_reference'];
    }

    /**
     * Sets parent_reference
     *
     * @param \OpenAPI\Client\Model\ItemReference|null $parent_reference parent_reference
     *
     * @return $this
     */
    public function setParentReference(?\OpenAPI\Client\Model\ItemReference $parent_reference): static
    {
        if (is_null($parent_reference)) {
            throw new InvalidArgumentException('non-nullable parent_reference cannot be null');
        }
        $this->container['parent_reference'] = $parent_reference;

        return $this;
    }

    /**
     * Gets shared
     *
     * @return \OpenAPI\Client\Model\Shared|null
     */
    public function getShared(): ?\OpenAPI\Client\Model\Shared
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     *
     * @param \OpenAPI\Client\Model\Shared|null $shared shared
     *
     * @return $this
     */
    public function setShared(?\OpenAPI\Client\Model\Shared $shared): static
    {
        if (is_null($shared)) {
            throw new InvalidArgumentException('non-nullable shared cannot be null');
        }
        $this->container['shared'] = $shared;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \OpenAPI\Client\Model\Permission[]|null
     */
    public function getPermissions(): ?array
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \OpenAPI\Client\Model\Permission[]|null $permissions The set of permissions for the item. Read-only. Nullable.
     *
     * @return $this
     */
    public function setPermissions(?array $permissions): static
    {
        if (is_null($permissions)) {
            throw new InvalidArgumentException('non-nullable permissions cannot be null');
        }
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size Size of the remote item. Read-only.
     *
     * @return $this
     */
    public function setSize(?int $size): static
    {
        if (is_null($size)) {
            throw new InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets special_folder
     *
     * @return \OpenAPI\Client\Model\SpecialFolder|null
     */
    public function getSpecialFolder(): ?\OpenAPI\Client\Model\SpecialFolder
    {
        return $this->container['special_folder'];
    }

    /**
     * Sets special_folder
     *
     * @param \OpenAPI\Client\Model\SpecialFolder|null $special_folder special_folder
     *
     * @return $this
     */
    public function setSpecialFolder(?\OpenAPI\Client\Model\SpecialFolder $special_folder): static
    {
        if (is_null($special_folder)) {
            throw new InvalidArgumentException('non-nullable special_folder cannot be null');
        }
        $this->container['special_folder'] = $special_folder;

        return $this;
    }

    /**
     * Gets web_dav_url
     *
     * @return string|null
     */
    public function getWebDavUrl(): ?string
    {
        return $this->container['web_dav_url'];
    }

    /**
     * Sets web_dav_url
     *
     * @param string|null $web_dav_url DAV compatible URL for the item.
     *
     * @return $this
     */
    public function setWebDavUrl(?string $web_dav_url): static
    {
        if (is_null($web_dav_url)) {
            throw new InvalidArgumentException('non-nullable web_dav_url cannot be null');
        }
        $this->container['web_dav_url'] = $web_dav_url;

        return $this;
    }

    /**
     * Gets web_url
     *
     * @return string|null
     */
    public function getWebUrl(): ?string
    {
        return $this->container['web_url'];
    }

    /**
     * Sets web_url
     *
     * @param string|null $web_url URL that displays the resource in the browser. Read-only.
     *
     * @return $this
     */
    public function setWebUrl(?string $web_url): static
    {
        if (is_null($web_url)) {
            throw new InvalidArgumentException('non-nullable web_url cannot be null');
        }
        $this->container['web_url'] = $web_url;

        return $this;
    }

    /**
     * Gets at_client_synchronize
     *
     * @return bool|null
     */
    public function getAtClientSynchronize(): ?bool
    {
        return $this->container['at_client_synchronize'];
    }

    /**
     * Sets at_client_synchronize
     *
     * @param bool|null $at_client_synchronize Indicates if the item is synchronized with the underlying storage provider. Read-only.
     *
     * @return $this
     */
    public function setAtClientSynchronize(?bool $at_client_synchronize): static
    {
        if (is_null($at_client_synchronize)) {
            throw new InvalidArgumentException('non-nullable at_client_synchronize cannot be null');
        }
        $this->container['at_client_synchronize'] = $at_client_synchronize;

        return $this;
    }

    /**
     * Gets at_ui_hidden
     *
     * @return bool|null
     */
    public function getAtUiHidden(): ?bool
    {
        return $this->container['at_ui_hidden'];
    }

    /**
     * Sets at_ui_hidden
     *
     * @param bool|null $at_ui_hidden Properties or facets (see UI.Facet) annotated with this term will not be rendered if the annotation evaluates to true. Users can set this to hide permissons.
     *
     * @return $this
     */
    public function setAtUiHidden(?bool $at_ui_hidden): static
    {
        if (is_null($at_ui_hidden)) {
            throw new InvalidArgumentException('non-nullable at_ui_hidden cannot be null');
        }
        $this->container['at_ui_hidden'] = $at_ui_hidden;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


