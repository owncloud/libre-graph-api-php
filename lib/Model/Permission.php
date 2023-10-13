<?php
/**
 * Permission
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
 * Permission Class Doc Comment
 *
 * @category Class
 * @description The Permission resource provides information about a sharing permission granted for a DriveItem resource.  ### Remarks  The Permission resource uses *facets* to provide information about the kind of permission represented by the resource.  Permissions with a &#x60;link&#x60; facet represent sharing links created on the item. Sharing links contain a unique token that provides access to the item for anyone with the link.  Permissions with a &#x60;invitation&#x60; facet represent permissions added by inviting specific users or groups to have access to the file.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Permission implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'permission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'has_password' => 'bool',
        'expiration_date_time' => '\DateTime',
        'granted_to_v2' => '\OpenAPI\Client\Model\SharePointIdentitySet',
        'link' => '\OpenAPI\Client\Model\SharingLink',
        'roles' => 'string[]',
        'granted_to_identities' => '\OpenAPI\Client\Model\IdentitySet[]',
        'at_libre_graph_permissions_actions' => 'string[]',
        'at_ui_hidden' => 'bool'
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
        'has_password' => null,
        'expiration_date_time' => 'date-time',
        'granted_to_v2' => null,
        'link' => null,
        'roles' => null,
        'granted_to_identities' => null,
        'at_libre_graph_permissions_actions' => null,
        'at_ui_hidden' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'has_password' => false,
		'expiration_date_time' => false,
		'granted_to_v2' => false,
		'link' => false,
		'roles' => false,
		'granted_to_identities' => false,
		'at_libre_graph_permissions_actions' => false,
		'at_ui_hidden' => false
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
        'has_password' => 'hasPassword',
        'expiration_date_time' => 'expirationDateTime',
        'granted_to_v2' => 'grantedToV2',
        'link' => 'link',
        'roles' => 'roles',
        'granted_to_identities' => 'grantedToIdentities',
        'at_libre_graph_permissions_actions' => '@libre.graph.permissions.actions',
        'at_ui_hidden' => '@UI.Hidden'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'has_password' => 'setHasPassword',
        'expiration_date_time' => 'setExpirationDateTime',
        'granted_to_v2' => 'setGrantedToV2',
        'link' => 'setLink',
        'roles' => 'setRoles',
        'granted_to_identities' => 'setGrantedToIdentities',
        'at_libre_graph_permissions_actions' => 'setAtLibreGraphPermissionsActions',
        'at_ui_hidden' => 'setAtUiHidden'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'has_password' => 'getHasPassword',
        'expiration_date_time' => 'getExpirationDateTime',
        'granted_to_v2' => 'getGrantedToV2',
        'link' => 'getLink',
        'roles' => 'getRoles',
        'granted_to_identities' => 'getGrantedToIdentities',
        'at_libre_graph_permissions_actions' => 'getAtLibreGraphPermissionsActions',
        'at_ui_hidden' => 'getAtUiHidden'
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
        $this->setIfExists('has_password', $data ?? [], null);
        $this->setIfExists('expiration_date_time', $data ?? [], null);
        $this->setIfExists('granted_to_v2', $data ?? [], null);
        $this->setIfExists('link', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('granted_to_identities', $data ?? [], null);
        $this->setIfExists('at_libre_graph_permissions_actions', $data ?? [], null);
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
     * @param string|null $id The unique identifier of the permission among all permissions on the item. Read-only.
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
     * Gets has_password
     *
     * @return bool|null
     */
    public function getHasPassword()
    {
        return $this->container['has_password'];
    }

    /**
     * Sets has_password
     *
     * @param bool|null $has_password Indicates whether the password is set for this permission. This property only appears in the response. Optional. Read-only.
     *
     * @return self
     */
    public function setHasPassword($has_password)
    {
        if (is_null($has_password)) {
            throw new \InvalidArgumentException('non-nullable has_password cannot be null');
        }
        $this->container['has_password'] = $has_password;

        return $this;
    }

    /**
     * Gets expiration_date_time
     *
     * @return \DateTime|null
     */
    public function getExpirationDateTime()
    {
        return $this->container['expiration_date_time'];
    }

    /**
     * Sets expiration_date_time
     *
     * @param \DateTime|null $expiration_date_time An optional expiration date which limits the permission in time.
     *
     * @return self
     */
    public function setExpirationDateTime($expiration_date_time)
    {
        if (is_null($expiration_date_time)) {
            throw new \InvalidArgumentException('non-nullable expiration_date_time cannot be null');
        }
        $this->container['expiration_date_time'] = $expiration_date_time;

        return $this;
    }

    /**
     * Gets granted_to_v2
     *
     * @return \OpenAPI\Client\Model\SharePointIdentitySet|null
     */
    public function getGrantedToV2()
    {
        return $this->container['granted_to_v2'];
    }

    /**
     * Sets granted_to_v2
     *
     * @param \OpenAPI\Client\Model\SharePointIdentitySet|null $granted_to_v2 granted_to_v2
     *
     * @return self
     */
    public function setGrantedToV2($granted_to_v2)
    {
        if (is_null($granted_to_v2)) {
            throw new \InvalidArgumentException('non-nullable granted_to_v2 cannot be null');
        }
        $this->container['granted_to_v2'] = $granted_to_v2;

        return $this;
    }

    /**
     * Gets link
     *
     * @return \OpenAPI\Client\Model\SharingLink|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param \OpenAPI\Client\Model\SharingLink|null $link link
     *
     * @return self
     */
    public function setLink($link)
    {
        if (is_null($link)) {
            throw new \InvalidArgumentException('non-nullable link cannot be null');
        }
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return string[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string[]|null $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets granted_to_identities
     *
     * @return \OpenAPI\Client\Model\IdentitySet[]|null
     * @deprecated
     */
    public function getGrantedToIdentities()
    {
        return $this->container['granted_to_identities'];
    }

    /**
     * Sets granted_to_identities
     *
     * @param \OpenAPI\Client\Model\IdentitySet[]|null $granted_to_identities For link type permissions, the details of the identity to whom permission was granted. This could be used to grant access to a an external user that can be identified by email, aka guest accounts.
     *
     * @return self
     * @deprecated
     */
    public function setGrantedToIdentities($granted_to_identities)
    {
        if (is_null($granted_to_identities)) {
            throw new \InvalidArgumentException('non-nullable granted_to_identities cannot be null');
        }
        $this->container['granted_to_identities'] = $granted_to_identities;

        return $this;
    }

    /**
     * Gets at_libre_graph_permissions_actions
     *
     * @return string[]|null
     */
    public function getAtLibreGraphPermissionsActions()
    {
        return $this->container['at_libre_graph_permissions_actions'];
    }

    /**
     * Sets at_libre_graph_permissions_actions
     *
     * @param string[]|null $at_libre_graph_permissions_actions Use this to create a permission with custom actions.
     *
     * @return self
     */
    public function setAtLibreGraphPermissionsActions($at_libre_graph_permissions_actions)
    {
        if (is_null($at_libre_graph_permissions_actions)) {
            throw new \InvalidArgumentException('non-nullable at_libre_graph_permissions_actions cannot be null');
        }
        $this->container['at_libre_graph_permissions_actions'] = $at_libre_graph_permissions_actions;

        return $this;
    }

    /**
     * Gets at_ui_hidden
     *
     * @return bool|null
     */
    public function getAtUiHidden()
    {
        return $this->container['at_ui_hidden'];
    }

    /**
     * Sets at_ui_hidden
     *
     * @param bool|null $at_ui_hidden Properties or facets (see UI.Facet) annotated with this term will not be rendered if the annotation evaluates to true. Users can set this to hide permissons.
     *
     * @return self
     */
    public function setAtUiHidden($at_ui_hidden)
    {
        if (is_null($at_ui_hidden)) {
            throw new \InvalidArgumentException('non-nullable at_ui_hidden cannot be null');
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


