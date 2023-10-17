<?php
/**
 * DriveItem
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
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * DriveItem Class Doc Comment
 *
 * @category Class
 * @description Represents a resource inside a drive. Read-only.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DriveItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'driveItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_by' => '\OpenAPI\Client\Model\IdentitySet',
        'created_date_time' => '\DateTime',
        'description' => 'string',
        'e_tag' => 'string',
        'last_modified_by' => '\OpenAPI\Client\Model\IdentitySet',
        'last_modified_date_time' => '\DateTime',
        'name' => 'string',
        'parent_reference' => '\OpenAPI\Client\Model\ItemReference',
        'web_url' => 'string',
        'content' => 'string',
        'c_tag' => 'string',
        'deleted' => '\OpenAPI\Client\Model\Deleted',
        'file' => '\OpenAPI\Client\Model\OpenGraphFile',
        'file_system_info' => '\OpenAPI\Client\Model\FileSystemInfo',
        'folder' => '\OpenAPI\Client\Model\Folder',
        'image' => '\OpenAPI\Client\Model\Image',
        'photo' => '\OpenAPI\Client\Model\Photo',
        'location' => '\OpenAPI\Client\Model\GeoCoordinates',
        'root' => 'object',
        'trash' => '\OpenAPI\Client\Model\Trash',
        'special_folder' => '\OpenAPI\Client\Model\SpecialFolder',
        'remote_item' => '\OpenAPI\Client\Model\RemoteItem',
        'size' => 'int',
        'web_dav_url' => 'string',
        'children' => '\OpenAPI\Client\Model\DriveItem[]',
        'permissions' => '\OpenAPI\Client\Model\Permission[]',
        'audio' => '\OpenAPI\Client\Model\Audio'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_by' => null,
        'created_date_time' => 'date-time',
        'description' => null,
        'e_tag' => null,
        'last_modified_by' => null,
        'last_modified_date_time' => 'date-time',
        'name' => null,
        'parent_reference' => null,
        'web_url' => null,
        'content' => 'base64url',
        'c_tag' => null,
        'deleted' => null,
        'file' => null,
        'file_system_info' => null,
        'folder' => null,
        'image' => null,
        'photo' => null,
        'location' => null,
        'root' => null,
        'trash' => null,
        'special_folder' => null,
        'remote_item' => null,
        'size' => 'int64',
        'web_dav_url' => null,
        'children' => null,
        'permissions' => null,
        'audio' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'created_by' => false,
		'created_date_time' => false,
		'description' => false,
		'e_tag' => false,
		'last_modified_by' => false,
		'last_modified_date_time' => false,
		'name' => false,
		'parent_reference' => false,
		'web_url' => false,
		'content' => false,
		'c_tag' => false,
		'deleted' => false,
		'file' => false,
		'file_system_info' => false,
		'folder' => false,
		'image' => false,
		'photo' => false,
		'location' => false,
		'root' => false,
		'trash' => false,
		'special_folder' => false,
		'remote_item' => false,
		'size' => false,
		'web_dav_url' => false,
		'children' => false,
		'permissions' => false,
		'audio' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
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
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created_by' => 'createdBy',
        'created_date_time' => 'createdDateTime',
        'description' => 'description',
        'e_tag' => 'eTag',
        'last_modified_by' => 'lastModifiedBy',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'name' => 'name',
        'parent_reference' => 'parentReference',
        'web_url' => 'webUrl',
        'content' => 'content',
        'c_tag' => 'cTag',
        'deleted' => 'deleted',
        'file' => 'file',
        'file_system_info' => 'fileSystemInfo',
        'folder' => 'folder',
        'image' => 'image',
        'photo' => 'photo',
        'location' => 'location',
        'root' => 'root',
        'trash' => 'trash',
        'special_folder' => 'specialFolder',
        'remote_item' => 'remoteItem',
        'size' => 'size',
        'web_dav_url' => 'webDavUrl',
        'children' => 'children',
        'permissions' => 'permissions',
        'audio' => 'audio'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_by' => 'setCreatedBy',
        'created_date_time' => 'setCreatedDateTime',
        'description' => 'setDescription',
        'e_tag' => 'setETag',
        'last_modified_by' => 'setLastModifiedBy',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'name' => 'setName',
        'parent_reference' => 'setParentReference',
        'web_url' => 'setWebUrl',
        'content' => 'setContent',
        'c_tag' => 'setCTag',
        'deleted' => 'setDeleted',
        'file' => 'setFile',
        'file_system_info' => 'setFileSystemInfo',
        'folder' => 'setFolder',
        'image' => 'setImage',
        'photo' => 'setPhoto',
        'location' => 'setLocation',
        'root' => 'setRoot',
        'trash' => 'setTrash',
        'special_folder' => 'setSpecialFolder',
        'remote_item' => 'setRemoteItem',
        'size' => 'setSize',
        'web_dav_url' => 'setWebDavUrl',
        'children' => 'setChildren',
        'permissions' => 'setPermissions',
        'audio' => 'setAudio'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_by' => 'getCreatedBy',
        'created_date_time' => 'getCreatedDateTime',
        'description' => 'getDescription',
        'e_tag' => 'getETag',
        'last_modified_by' => 'getLastModifiedBy',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'name' => 'getName',
        'parent_reference' => 'getParentReference',
        'web_url' => 'getWebUrl',
        'content' => 'getContent',
        'c_tag' => 'getCTag',
        'deleted' => 'getDeleted',
        'file' => 'getFile',
        'file_system_info' => 'getFileSystemInfo',
        'folder' => 'getFolder',
        'image' => 'getImage',
        'photo' => 'getPhoto',
        'location' => 'getLocation',
        'root' => 'getRoot',
        'trash' => 'getTrash',
        'special_folder' => 'getSpecialFolder',
        'remote_item' => 'getRemoteItem',
        'size' => 'getSize',
        'web_dav_url' => 'getWebDavUrl',
        'children' => 'getChildren',
        'permissions' => 'getPermissions',
        'audio' => 'getAudio'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('created_date_time', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('e_tag', $data ?? [], null);
        $this->setIfExists('last_modified_by', $data ?? [], null);
        $this->setIfExists('last_modified_date_time', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('parent_reference', $data ?? [], null);
        $this->setIfExists('web_url', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('c_tag', $data ?? [], null);
        $this->setIfExists('deleted', $data ?? [], null);
        $this->setIfExists('file', $data ?? [], null);
        $this->setIfExists('file_system_info', $data ?? [], null);
        $this->setIfExists('folder', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('photo', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('root', $data ?? [], null);
        $this->setIfExists('trash', $data ?? [], null);
        $this->setIfExists('special_folder', $data ?? [], null);
        $this->setIfExists('remote_item', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('web_dav_url', $data ?? [], null);
        $this->setIfExists('children', $data ?? [], null);
        $this->setIfExists('permissions', $data ?? [], null);
        $this->setIfExists('audio', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['created_date_time']) && !preg_match("/^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])[Tt]([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?([Zz]|[+-][0-9][0-9]:[0-9][0-9])$/", $this->container['created_date_time'])) {
            $invalidProperties[] = "invalid value for 'created_date_time', must be conform to the pattern /^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])[Tt]([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?([Zz]|[+-][0-9][0-9]:[0-9][0-9])$/.";
        }

        if (!is_null($this->container['last_modified_date_time']) && !preg_match("/^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])[Tt]([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?([Zz]|[+-][0-9][0-9]:[0-9][0-9])$/", $this->container['last_modified_date_time'])) {
            $invalidProperties[] = "invalid value for 'last_modified_date_time', must be conform to the pattern /^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])[Tt]([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?([Zz]|[+-][0-9][0-9]:[0-9][0-9])$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Read-only.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \OpenAPI\Client\Model\IdentitySet|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \OpenAPI\Client\Model\IdentitySet|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        if (is_null($created_by)) {
            throw new \InvalidArgumentException('non-nullable created_by cannot be null');
        }
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_date_time
     *
     * @return \DateTime|null
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     *
     * @param \DateTime|null $created_date_time Date and time of item creation. Read-only.
     *
     * @return self
     */
    public function setCreatedDateTime($created_date_time)
    {
        if (is_null($created_date_time)) {
            throw new \InvalidArgumentException('non-nullable created_date_time cannot be null');
        }

        if ((!preg_match("/^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])[Tt]([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?([Zz]|[+-][0-9][0-9]:[0-9][0-9])$/", ObjectSerializer::toString($created_date_time)))) {
            throw new \InvalidArgumentException("invalid value for \$created_date_time when calling DriveItem., must conform to the pattern /^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])[Tt]([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?([Zz]|[+-][0-9][0-9]:[0-9][0-9])$/.");
        }

        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Provides a user-visible description of the item. Optional.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets e_tag
     *
     * @return string|null
     */
    public function getETag()
    {
        return $this->container['e_tag'];
    }

    /**
     * Sets e_tag
     *
     * @param string|null $e_tag ETag for the item. Read-only.
     *
     * @return self
     */
    public function setETag($e_tag)
    {
        if (is_null($e_tag)) {
            throw new \InvalidArgumentException('non-nullable e_tag cannot be null');
        }
        $this->container['e_tag'] = $e_tag;

        return $this;
    }

    /**
     * Gets last_modified_by
     *
     * @return \OpenAPI\Client\Model\IdentitySet|null
     */
    public function getLastModifiedBy()
    {
        return $this->container['last_modified_by'];
    }

    /**
     * Sets last_modified_by
     *
     * @param \OpenAPI\Client\Model\IdentitySet|null $last_modified_by last_modified_by
     *
     * @return self
     */
    public function setLastModifiedBy($last_modified_by)
    {
        if (is_null($last_modified_by)) {
            throw new \InvalidArgumentException('non-nullable last_modified_by cannot be null');
        }
        $this->container['last_modified_by'] = $last_modified_by;

        return $this;
    }

    /**
     * Gets last_modified_date_time
     *
     * @return \DateTime|null
     */
    public function getLastModifiedDateTime()
    {
        return $this->container['last_modified_date_time'];
    }

    /**
     * Sets last_modified_date_time
     *
     * @param \DateTime|null $last_modified_date_time Date and time the item was last modified. Read-only.
     *
     * @return self
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        if (is_null($last_modified_date_time)) {
            throw new \InvalidArgumentException('non-nullable last_modified_date_time cannot be null');
        }

        if ((!preg_match("/^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])[Tt]([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?([Zz]|[+-][0-9][0-9]:[0-9][0-9])$/", ObjectSerializer::toString($last_modified_date_time)))) {
            throw new \InvalidArgumentException("invalid value for \$last_modified_date_time when calling DriveItem., must conform to the pattern /^[0-9]{4,}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])[Tt]([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]{1,12})?([Zz]|[+-][0-9][0-9]:[0-9][0-9])$/.");
        }

        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the item. Read-write.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent_reference
     *
     * @return \OpenAPI\Client\Model\ItemReference|null
     */
    public function getParentReference()
    {
        return $this->container['parent_reference'];
    }

    /**
     * Sets parent_reference
     *
     * @param \OpenAPI\Client\Model\ItemReference|null $parent_reference parent_reference
     *
     * @return self
     */
    public function setParentReference($parent_reference)
    {
        if (is_null($parent_reference)) {
            throw new \InvalidArgumentException('non-nullable parent_reference cannot be null');
        }
        $this->container['parent_reference'] = $parent_reference;

        return $this;
    }

    /**
     * Gets web_url
     *
     * @return string|null
     */
    public function getWebUrl()
    {
        return $this->container['web_url'];
    }

    /**
     * Sets web_url
     *
     * @param string|null $web_url URL that displays the resource in the browser. Read-only.
     *
     * @return self
     */
    public function setWebUrl($web_url)
    {
        if (is_null($web_url)) {
            throw new \InvalidArgumentException('non-nullable web_url cannot be null');
        }
        $this->container['web_url'] = $web_url;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content The content stream, if the item represents a file.
     *
     * @return self
     */
    public function setContent($content)
    {
        if (is_null($content)) {
            throw new \InvalidArgumentException('non-nullable content cannot be null');
        }
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets c_tag
     *
     * @return string|null
     */
    public function getCTag()
    {
        return $this->container['c_tag'];
    }

    /**
     * Sets c_tag
     *
     * @param string|null $c_tag An eTag for the content of the item. This eTag is not changed if only the metadata is changed. Note This property is not returned if the item is a folder. Read-only.
     *
     * @return self
     */
    public function setCTag($c_tag)
    {
        if (is_null($c_tag)) {
            throw new \InvalidArgumentException('non-nullable c_tag cannot be null');
        }
        $this->container['c_tag'] = $c_tag;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return \OpenAPI\Client\Model\Deleted|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param \OpenAPI\Client\Model\Deleted|null $deleted deleted
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        if (is_null($deleted)) {
            throw new \InvalidArgumentException('non-nullable deleted cannot be null');
        }
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets file
     *
     * @return \OpenAPI\Client\Model\OpenGraphFile|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \OpenAPI\Client\Model\OpenGraphFile|null $file file
     *
     * @return self
     */
    public function setFile($file)
    {
        if (is_null($file)) {
            throw new \InvalidArgumentException('non-nullable file cannot be null');
        }
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets file_system_info
     *
     * @return \OpenAPI\Client\Model\FileSystemInfo|null
     */
    public function getFileSystemInfo()
    {
        return $this->container['file_system_info'];
    }

    /**
     * Sets file_system_info
     *
     * @param \OpenAPI\Client\Model\FileSystemInfo|null $file_system_info file_system_info
     *
     * @return self
     */
    public function setFileSystemInfo($file_system_info)
    {
        if (is_null($file_system_info)) {
            throw new \InvalidArgumentException('non-nullable file_system_info cannot be null');
        }
        $this->container['file_system_info'] = $file_system_info;

        return $this;
    }

    /**
     * Gets folder
     *
     * @return \OpenAPI\Client\Model\Folder|null
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     *
     * @param \OpenAPI\Client\Model\Folder|null $folder folder
     *
     * @return self
     */
    public function setFolder($folder)
    {
        if (is_null($folder)) {
            throw new \InvalidArgumentException('non-nullable folder cannot be null');
        }
        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \OpenAPI\Client\Model\Image|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \OpenAPI\Client\Model\Image|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets photo
     *
     * @return \OpenAPI\Client\Model\Photo|null
     */
    public function getPhoto()
    {
        return $this->container['photo'];
    }

    /**
     * Sets photo
     *
     * @param \OpenAPI\Client\Model\Photo|null $photo photo
     *
     * @return self
     */
    public function setPhoto($photo)
    {
        if (is_null($photo)) {
            throw new \InvalidArgumentException('non-nullable photo cannot be null');
        }
        $this->container['photo'] = $photo;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \OpenAPI\Client\Model\GeoCoordinates|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \OpenAPI\Client\Model\GeoCoordinates|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets root
     *
     * @return object|null
     */
    public function getRoot()
    {
        return $this->container['root'];
    }

    /**
     * Sets root
     *
     * @param object|null $root If this property is non-null, it indicates that the driveItem is the top-most driveItem in the drive.
     *
     * @return self
     */
    public function setRoot($root)
    {
        if (is_null($root)) {
            throw new \InvalidArgumentException('non-nullable root cannot be null');
        }
        $this->container['root'] = $root;

        return $this;
    }

    /**
     * Gets trash
     *
     * @return \OpenAPI\Client\Model\Trash|null
     */
    public function getTrash()
    {
        return $this->container['trash'];
    }

    /**
     * Sets trash
     *
     * @param \OpenAPI\Client\Model\Trash|null $trash trash
     *
     * @return self
     */
    public function setTrash($trash)
    {
        if (is_null($trash)) {
            throw new \InvalidArgumentException('non-nullable trash cannot be null');
        }
        $this->container['trash'] = $trash;

        return $this;
    }

    /**
     * Gets special_folder
     *
     * @return \OpenAPI\Client\Model\SpecialFolder|null
     */
    public function getSpecialFolder()
    {
        return $this->container['special_folder'];
    }

    /**
     * Sets special_folder
     *
     * @param \OpenAPI\Client\Model\SpecialFolder|null $special_folder special_folder
     *
     * @return self
     */
    public function setSpecialFolder($special_folder)
    {
        if (is_null($special_folder)) {
            throw new \InvalidArgumentException('non-nullable special_folder cannot be null');
        }
        $this->container['special_folder'] = $special_folder;

        return $this;
    }

    /**
     * Gets remote_item
     *
     * @return \OpenAPI\Client\Model\RemoteItem|null
     */
    public function getRemoteItem()
    {
        return $this->container['remote_item'];
    }

    /**
     * Sets remote_item
     *
     * @param \OpenAPI\Client\Model\RemoteItem|null $remote_item remote_item
     *
     * @return self
     */
    public function setRemoteItem($remote_item)
    {
        if (is_null($remote_item)) {
            throw new \InvalidArgumentException('non-nullable remote_item cannot be null');
        }
        $this->container['remote_item'] = $remote_item;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size Size of the item in bytes. Read-only.
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets web_dav_url
     *
     * @return string|null
     */
    public function getWebDavUrl()
    {
        return $this->container['web_dav_url'];
    }

    /**
     * Sets web_dav_url
     *
     * @param string|null $web_dav_url WebDAV compatible URL for the item. Read-only.
     *
     * @return self
     */
    public function setWebDavUrl($web_dav_url)
    {
        if (is_null($web_dav_url)) {
            throw new \InvalidArgumentException('non-nullable web_dav_url cannot be null');
        }
        $this->container['web_dav_url'] = $web_dav_url;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \OpenAPI\Client\Model\DriveItem[]|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \OpenAPI\Client\Model\DriveItem[]|null $children Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.
     *
     * @return self
     */
    public function setChildren($children)
    {
        if (is_null($children)) {
            throw new \InvalidArgumentException('non-nullable children cannot be null');
        }
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \OpenAPI\Client\Model\Permission[]|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \OpenAPI\Client\Model\Permission[]|null $permissions The set of permissions for the item. Read-only. Nullable.
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        if (is_null($permissions)) {
            throw new \InvalidArgumentException('non-nullable permissions cannot be null');
        }
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets audio
     *
     * @return \OpenAPI\Client\Model\Audio|null
     */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
     * Sets audio
     *
     * @param \OpenAPI\Client\Model\Audio|null $audio audio
     *
     * @return self
     */
    public function setAudio($audio)
    {
        if (is_null($audio)) {
            throw new \InvalidArgumentException('non-nullable audio cannot be null');
        }
        $this->container['audio'] = $audio;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


