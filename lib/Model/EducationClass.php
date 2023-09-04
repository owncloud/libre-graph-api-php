<?php
/**
 * EducationClass
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
 * OpenAPI Generator version: 6.2.0
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
 * EducationClass Class Doc Comment
 *
 * @category Class
 * @description And extension of group representing a class or course
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EducationClass implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'educationClass';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'description' => 'string',
        'display_name' => 'string',
        'members' => '\OpenAPI\Client\Model\User[]',
        'membersodata_bind' => 'string[]',
        'classification' => 'string',
        'external_id' => 'string'
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
        'description' => null,
        'display_name' => null,
        'members' => null,
        'membersodata_bind' => null,
        'classification' => null,
        'external_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'description' => false,
		'display_name' => false,
		'members' => false,
		'membersodata_bind' => false,
		'classification' => false,
		'external_id' => false
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
        'description' => 'description',
        'display_name' => 'displayName',
        'members' => 'members',
        'membersodata_bind' => 'members@odata.bind',
        'classification' => 'classification',
        'external_id' => 'externalId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'description' => 'setDescription',
        'display_name' => 'setDisplayName',
        'members' => 'setMembers',
        'membersodata_bind' => 'setMembersodataBind',
        'classification' => 'setClassification',
        'external_id' => 'setExternalId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'description' => 'getDescription',
        'display_name' => 'getDisplayName',
        'members' => 'getMembers',
        'membersodata_bind' => 'getMembersodataBind',
        'classification' => 'getClassification',
        'external_id' => 'getExternalId'
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

    public const CLASSIFICATION__CLASS = 'class';
    public const CLASSIFICATION_COURSE = 'course';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClassificationAllowableValues()
    {
        return [
            self::CLASSIFICATION__CLASS,
            self::CLASSIFICATION_COURSE,
        ];
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('members', $data ?? [], null);
        $this->setIfExists('membersodata_bind', $data ?? [], null);
        $this->setIfExists('classification', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
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

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if (!is_null($this->container['membersodata_bind']) && (count($this->container['membersodata_bind']) > 20)) {
            $invalidProperties[] = "invalid value for 'membersodata_bind', number of items must be less than or equal to 20.";
        }

        if (!is_null($this->container['membersodata_bind']) && (count($this->container['membersodata_bind']) < 1)) {
            $invalidProperties[] = "invalid value for 'membersodata_bind', number of items must be greater than or equal to 1.";
        }

        if ($this->container['classification'] === null) {
            $invalidProperties[] = "'classification' can't be null";
        }
        $allowedValues = $this->getClassificationAllowableValues();
        if (!is_null($this->container['classification']) && !in_array($this->container['classification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'classification', must be one of '%s'",
                $this->container['classification'],
                implode("', '", $allowedValues)
            );
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
     * @param string|null $description An optional description for the group. Returned by default.
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
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name The display name for the group. This property is required when a group is created and cannot be cleared during updates. Returned by default. Supports $search and $orderBy.
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {

        if (is_null($display_name)) {
            throw new \InvalidArgumentException('non-nullable display_name cannot be null');
        }

        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets members
     *
     * @return \OpenAPI\Client\Model\User[]|null
     */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     *
     * @param \OpenAPI\Client\Model\User[]|null $members Users and groups that are members of this group. HTTP Methods: GET (supported for all groups), Nullable. Supports $expand.
     *
     * @return self
     */
    public function setMembers($members)
    {

        if (is_null($members)) {
            throw new \InvalidArgumentException('non-nullable members cannot be null');
        }

        $this->container['members'] = $members;

        return $this;
    }

    /**
     * Gets membersodata_bind
     *
     * @return string[]|null
     */
    public function getMembersodataBind()
    {
        return $this->container['membersodata_bind'];
    }

    /**
     * Sets membersodata_bind
     *
     * @param string[]|null $membersodata_bind A list of member references to the members to be added. Up to 20 members can be added with a single request
     *
     * @return self
     */
    public function setMembersodataBind($membersodata_bind)
    {

        if (!is_null($membersodata_bind) && (count($membersodata_bind) > 20)) {
            throw new \InvalidArgumentException('invalid value for $membersodata_bind when calling EducationClass., number of items must be less than or equal to 20.');
        }
        if (!is_null($membersodata_bind) && (count($membersodata_bind) < 1)) {
            throw new \InvalidArgumentException('invalid length for $membersodata_bind when calling EducationClass., number of items must be greater than or equal to 1.');
        }

        if (is_null($membersodata_bind)) {
            throw new \InvalidArgumentException('non-nullable membersodata_bind cannot be null');
        }

        $this->container['membersodata_bind'] = $membersodata_bind;

        return $this;
    }

    /**
     * Gets classification
     *
     * @return string
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param string $classification Classification of the group, i.e. \"class\" or \"course\"
     *
     * @return self
     */
    public function setClassification($classification)
    {
        $allowedValues = $this->getClassificationAllowableValues();
        if (!in_array($classification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'classification', must be one of '%s'",
                    $classification,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($classification)) {
            throw new \InvalidArgumentException('non-nullable classification cannot be null');
        }

        $this->container['classification'] = $classification;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id An external unique ID for the class
     *
     * @return self
     */
    public function setExternalId($external_id)
    {

        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }

        $this->container['external_id'] = $external_id;

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


