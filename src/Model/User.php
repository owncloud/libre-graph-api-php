<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @description Represents an Active Directory user object.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class User implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'user';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'account_enabled' => 'bool',
        'app_role_assignments' => '\OpenAPI\Client\Model\AppRoleAssignment[]',
        'display_name' => 'string',
        'drives' => '\OpenAPI\Client\Model\Drive[]',
        'drive' => '\OpenAPI\Client\Model\Drive',
        'identities' => '\OpenAPI\Client\Model\ObjectIdentity[]',
        'mail' => 'string',
        'member_of' => '\OpenAPI\Client\Model\Group[]',
        'on_premises_sam_account_name' => 'string',
        'password_profile' => '\OpenAPI\Client\Model\PasswordProfile',
        'surname' => 'string',
        'given_name' => 'string',
        'user_type' => 'string',
        'preferred_language' => 'string',
        'sign_in_activity' => '\OpenAPI\Client\Model\SignInActivity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'account_enabled' => null,
        'app_role_assignments' => null,
        'display_name' => null,
        'drives' => null,
        'drive' => null,
        'identities' => null,
        'mail' => null,
        'member_of' => null,
        'on_premises_sam_account_name' => null,
        'password_profile' => null,
        'surname' => null,
        'given_name' => null,
        'user_type' => null,
        'preferred_language' => null,
        'sign_in_activity' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'account_enabled' => false,
		'app_role_assignments' => false,
		'display_name' => false,
		'drives' => false,
		'drive' => false,
		'identities' => false,
		'mail' => false,
		'member_of' => false,
		'on_premises_sam_account_name' => false,
		'password_profile' => false,
		'surname' => false,
		'given_name' => false,
		'user_type' => false,
		'preferred_language' => false,
		'sign_in_activity' => false
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
        'id' => 'id',
        'account_enabled' => 'accountEnabled',
        'app_role_assignments' => 'appRoleAssignments',
        'display_name' => 'displayName',
        'drives' => 'drives',
        'drive' => 'drive',
        'identities' => 'identities',
        'mail' => 'mail',
        'member_of' => 'memberOf',
        'on_premises_sam_account_name' => 'onPremisesSamAccountName',
        'password_profile' => 'passwordProfile',
        'surname' => 'surname',
        'given_name' => 'givenName',
        'user_type' => 'userType',
        'preferred_language' => 'preferredLanguage',
        'sign_in_activity' => 'signInActivity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'account_enabled' => 'setAccountEnabled',
        'app_role_assignments' => 'setAppRoleAssignments',
        'display_name' => 'setDisplayName',
        'drives' => 'setDrives',
        'drive' => 'setDrive',
        'identities' => 'setIdentities',
        'mail' => 'setMail',
        'member_of' => 'setMemberOf',
        'on_premises_sam_account_name' => 'setOnPremisesSamAccountName',
        'password_profile' => 'setPasswordProfile',
        'surname' => 'setSurname',
        'given_name' => 'setGivenName',
        'user_type' => 'setUserType',
        'preferred_language' => 'setPreferredLanguage',
        'sign_in_activity' => 'setSignInActivity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'account_enabled' => 'getAccountEnabled',
        'app_role_assignments' => 'getAppRoleAssignments',
        'display_name' => 'getDisplayName',
        'drives' => 'getDrives',
        'drive' => 'getDrive',
        'identities' => 'getIdentities',
        'mail' => 'getMail',
        'member_of' => 'getMemberOf',
        'on_premises_sam_account_name' => 'getOnPremisesSamAccountName',
        'password_profile' => 'getPasswordProfile',
        'surname' => 'getSurname',
        'given_name' => 'getGivenName',
        'user_type' => 'getUserType',
        'preferred_language' => 'getPreferredLanguage',
        'sign_in_activity' => 'getSignInActivity'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('account_enabled', $data ?? [], null);
        $this->setIfExists('app_role_assignments', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('drives', $data ?? [], null);
        $this->setIfExists('drive', $data ?? [], null);
        $this->setIfExists('identities', $data ?? [], null);
        $this->setIfExists('mail', $data ?? [], null);
        $this->setIfExists('member_of', $data ?? [], null);
        $this->setIfExists('on_premises_sam_account_name', $data ?? [], null);
        $this->setIfExists('password_profile', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('given_name', $data ?? [], null);
        $this->setIfExists('user_type', $data ?? [], null);
        $this->setIfExists('preferred_language', $data ?? [], null);
        $this->setIfExists('sign_in_activity', $data ?? [], null);
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

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if (!is_null($this->container['drives']) && (count($this->container['drives']) > 100)) {
            $invalidProperties[] = "invalid value for 'drives', number of items must be less than or equal to 100.";
        }

        if ($this->container['on_premises_sam_account_name'] === null) {
            $invalidProperties[] = "'on_premises_sam_account_name' can't be null";
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
     * @param string|null $id Read-only.
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
     * Gets account_enabled
     *
     * @return bool|null
     */
    public function getAccountEnabled(): ?bool
    {
        return $this->container['account_enabled'];
    }

    /**
     * Sets account_enabled
     *
     * @param bool|null $account_enabled Set to \"true\" when the account is enabled.
     *
     * @return $this
     */
    public function setAccountEnabled(?bool $account_enabled): static
    {
        if (is_null($account_enabled)) {
            throw new InvalidArgumentException('non-nullable account_enabled cannot be null');
        }
        $this->container['account_enabled'] = $account_enabled;

        return $this;
    }

    /**
     * Gets app_role_assignments
     *
     * @return \OpenAPI\Client\Model\AppRoleAssignment[]|null
     */
    public function getAppRoleAssignments(): ?array
    {
        return $this->container['app_role_assignments'];
    }

    /**
     * Sets app_role_assignments
     *
     * @param \OpenAPI\Client\Model\AppRoleAssignment[]|null $app_role_assignments The apps and app roles which this user has been assigned.
     *
     * @return $this
     */
    public function setAppRoleAssignments(?array $app_role_assignments): static
    {
        if (is_null($app_role_assignments)) {
            throw new InvalidArgumentException('non-nullable app_role_assignments cannot be null');
        }
        $this->container['app_role_assignments'] = $app_role_assignments;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name The name displayed in the address book for the user. This value is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Returned by default. Supports $orderby.
     *
     * @return $this
     */
    public function setDisplayName(string $display_name): static
    {
        if (is_null($display_name)) {
            throw new InvalidArgumentException('non-nullable display_name cannot be null');
        }
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets drives
     *
     * @return \OpenAPI\Client\Model\Drive[]|null
     */
    public function getDrives(): ?array
    {
        return $this->container['drives'];
    }

    /**
     * Sets drives
     *
     * @param \OpenAPI\Client\Model\Drive[]|null $drives A collection of drives available for this user. Read-only.
     *
     * @return $this
     */
    public function setDrives(?array $drives): static
    {
        if (is_null($drives)) {
            throw new InvalidArgumentException('non-nullable drives cannot be null');
        }

        if ((count($drives) > 100)) {
            throw new InvalidArgumentException('invalid value for $drives when calling User., number of items must be less than or equal to 100.');
        }
        $this->container['drives'] = $drives;

        return $this;
    }

    /**
     * Gets drive
     *
     * @return \OpenAPI\Client\Model\Drive|null
     */
    public function getDrive(): ?\OpenAPI\Client\Model\Drive
    {
        return $this->container['drive'];
    }

    /**
     * Sets drive
     *
     * @param \OpenAPI\Client\Model\Drive|null $drive drive
     *
     * @return $this
     */
    public function setDrive(?\OpenAPI\Client\Model\Drive $drive): static
    {
        if (is_null($drive)) {
            throw new InvalidArgumentException('non-nullable drive cannot be null');
        }
        $this->container['drive'] = $drive;

        return $this;
    }

    /**
     * Gets identities
     *
     * @return \OpenAPI\Client\Model\ObjectIdentity[]|null
     */
    public function getIdentities(): ?array
    {
        return $this->container['identities'];
    }

    /**
     * Sets identities
     *
     * @param \OpenAPI\Client\Model\ObjectIdentity[]|null $identities Identities associated with this account.
     *
     * @return $this
     */
    public function setIdentities(?array $identities): static
    {
        if (is_null($identities)) {
            throw new InvalidArgumentException('non-nullable identities cannot be null');
        }
        $this->container['identities'] = $identities;

        return $this;
    }

    /**
     * Gets mail
     *
     * @return string|null
     */
    public function getMail(): ?string
    {
        return $this->container['mail'];
    }

    /**
     * Sets mail
     *
     * @param string|null $mail The SMTP address for the user, for example, 'jeff@contoso.onowncloud.com'. Returned by default.
     *
     * @return $this
     */
    public function setMail(?string $mail): static
    {
        if (is_null($mail)) {
            throw new InvalidArgumentException('non-nullable mail cannot be null');
        }
        $this->container['mail'] = $mail;

        return $this;
    }

    /**
     * Gets member_of
     *
     * @return \OpenAPI\Client\Model\Group[]|null
     */
    public function getMemberOf(): ?array
    {
        return $this->container['member_of'];
    }

    /**
     * Sets member_of
     *
     * @param \OpenAPI\Client\Model\Group[]|null $member_of Groups that this user is a member of. HTTP Methods: GET (supported for all groups). Read-only. Nullable. Supports $expand.
     *
     * @return $this
     */
    public function setMemberOf(?array $member_of): static
    {
        if (is_null($member_of)) {
            throw new InvalidArgumentException('non-nullable member_of cannot be null');
        }
        $this->container['member_of'] = $member_of;

        return $this;
    }

    /**
     * Gets on_premises_sam_account_name
     *
     * @return string
     */
    public function getOnPremisesSamAccountName(): string
    {
        return $this->container['on_premises_sam_account_name'];
    }

    /**
     * Sets on_premises_sam_account_name
     *
     * @param string $on_premises_sam_account_name Contains the on-premises SAM account name synchronized from the on-premises directory.
     *
     * @return $this
     */
    public function setOnPremisesSamAccountName(string $on_premises_sam_account_name): static
    {
        if (is_null($on_premises_sam_account_name)) {
            throw new InvalidArgumentException('non-nullable on_premises_sam_account_name cannot be null');
        }
        $this->container['on_premises_sam_account_name'] = $on_premises_sam_account_name;

        return $this;
    }

    /**
     * Gets password_profile
     *
     * @return \OpenAPI\Client\Model\PasswordProfile|null
     */
    public function getPasswordProfile(): ?\OpenAPI\Client\Model\PasswordProfile
    {
        return $this->container['password_profile'];
    }

    /**
     * Sets password_profile
     *
     * @param \OpenAPI\Client\Model\PasswordProfile|null $password_profile password_profile
     *
     * @return $this
     */
    public function setPasswordProfile(?\OpenAPI\Client\Model\PasswordProfile $password_profile): static
    {
        if (is_null($password_profile)) {
            throw new InvalidArgumentException('non-nullable password_profile cannot be null');
        }
        $this->container['password_profile'] = $password_profile;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname The user's surname (family name or last name). Returned by default.
     *
     * @return $this
     */
    public function setSurname(?string $surname): static
    {
        if (is_null($surname)) {
            throw new InvalidArgumentException('non-nullable surname cannot be null');
        }
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets given_name
     *
     * @return string|null
     */
    public function getGivenName(): ?string
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string|null $given_name The user's givenName. Returned by default.
     *
     * @return $this
     */
    public function setGivenName(?string $given_name): static
    {
        if (is_null($given_name)) {
            throw new InvalidArgumentException('non-nullable given_name cannot be null');
        }
        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets user_type
     *
     * @return string|null
     */
    public function getUserType(): ?string
    {
        return $this->container['user_type'];
    }

    /**
     * Sets user_type
     *
     * @param string|null $user_type The user`s type. This can be either \"Member\" for regular user, \"Guest\" for guest users or \"Federated\" for users imported from a federated instance.
     *
     * @return $this
     */
    public function setUserType(?string $user_type): static
    {
        if (is_null($user_type)) {
            throw new InvalidArgumentException('non-nullable user_type cannot be null');
        }
        $this->container['user_type'] = $user_type;

        return $this;
    }

    /**
     * Gets preferred_language
     *
     * @return string|null
     */
    public function getPreferredLanguage(): ?string
    {
        return $this->container['preferred_language'];
    }

    /**
     * Sets preferred_language
     *
     * @param string|null $preferred_language Represents the users language setting, ISO-639-1 Code
     *
     * @return $this
     */
    public function setPreferredLanguage(?string $preferred_language): static
    {
        if (is_null($preferred_language)) {
            throw new InvalidArgumentException('non-nullable preferred_language cannot be null');
        }
        $this->container['preferred_language'] = $preferred_language;

        return $this;
    }

    /**
     * Gets sign_in_activity
     *
     * @return \OpenAPI\Client\Model\SignInActivity|null
     */
    public function getSignInActivity(): ?\OpenAPI\Client\Model\SignInActivity
    {
        return $this->container['sign_in_activity'];
    }

    /**
     * Sets sign_in_activity
     *
     * @param \OpenAPI\Client\Model\SignInActivity|null $sign_in_activity sign_in_activity
     *
     * @return $this
     */
    public function setSignInActivity(?\OpenAPI\Client\Model\SignInActivity $sign_in_activity): static
    {
        if (is_null($sign_in_activity)) {
            throw new InvalidArgumentException('non-nullable sign_in_activity cannot be null');
        }
        $this->container['sign_in_activity'] = $sign_in_activity;

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


