<?php
/**
 * MembershipOrderUpdateResponseDTO
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Idealogic\RegistrationAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Idealogic Event and Member Admin Service API
 *
 * Adminstrative services for managing events and members
 *
 * The version of the OpenAPI document: 2.2.0-SNAPSHOT
 * Contact: development@idealogic.co.za
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Idealogic\RegistrationAPI\Model;

use \ArrayAccess;
use \Idealogic\RegistrationAPI\ObjectSerializer;

/**
 * MembershipOrderUpdateResponseDTO Class Doc Comment
 *
 * @category Class
 * @package  Idealogic\RegistrationAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MembershipOrderUpdateResponseDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MembershipOrderUpdateResponseDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'card_attachment_url' => 'string',
        'card_attachment_filename' => 'string',
        'card_data' => 'string',
        'member_list' => '\Idealogic\RegistrationAPI\Model\MembershipStatusDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'card_attachment_url' => null,
        'card_attachment_filename' => null,
        'card_data' => null,
        'member_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'card_attachment_url' => false,
        'card_attachment_filename' => false,
        'card_data' => false,
        'member_list' => false
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
        'card_attachment_url' => 'cardAttachmentURL',
        'card_attachment_filename' => 'cardAttachmentFilename',
        'card_data' => 'cardData',
        'member_list' => 'memberList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_attachment_url' => 'setCardAttachmentUrl',
        'card_attachment_filename' => 'setCardAttachmentFilename',
        'card_data' => 'setCardData',
        'member_list' => 'setMemberList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_attachment_url' => 'getCardAttachmentUrl',
        'card_attachment_filename' => 'getCardAttachmentFilename',
        'card_data' => 'getCardData',
        'member_list' => 'getMemberList'
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
        $this->setIfExists('card_attachment_url', $data ?? [], null);
        $this->setIfExists('card_attachment_filename', $data ?? [], null);
        $this->setIfExists('card_data', $data ?? [], null);
        $this->setIfExists('member_list', $data ?? [], null);
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
     * Gets card_attachment_url
     *
     * @return string|null
     */
    public function getCardAttachmentUrl()
    {
        return $this->container['card_attachment_url'];
    }

    /**
     * Sets card_attachment_url
     *
     * @param string|null $card_attachment_url card_attachment_url
     *
     * @return self
     */
    public function setCardAttachmentUrl($card_attachment_url)
    {
        if (is_null($card_attachment_url)) {
            throw new \InvalidArgumentException('non-nullable card_attachment_url cannot be null');
        }
        $this->container['card_attachment_url'] = $card_attachment_url;

        return $this;
    }

    /**
     * Gets card_attachment_filename
     *
     * @return string|null
     */
    public function getCardAttachmentFilename()
    {
        return $this->container['card_attachment_filename'];
    }

    /**
     * Sets card_attachment_filename
     *
     * @param string|null $card_attachment_filename card_attachment_filename
     *
     * @return self
     */
    public function setCardAttachmentFilename($card_attachment_filename)
    {
        if (is_null($card_attachment_filename)) {
            throw new \InvalidArgumentException('non-nullable card_attachment_filename cannot be null');
        }
        $this->container['card_attachment_filename'] = $card_attachment_filename;

        return $this;
    }

    /**
     * Gets card_data
     *
     * @return string|null
     */
    public function getCardData()
    {
        return $this->container['card_data'];
    }

    /**
     * Sets card_data
     *
     * @param string|null $card_data card_data
     *
     * @return self
     */
    public function setCardData($card_data)
    {
        if (is_null($card_data)) {
            throw new \InvalidArgumentException('non-nullable card_data cannot be null');
        }
        $this->container['card_data'] = $card_data;

        return $this;
    }

    /**
     * Gets member_list
     *
     * @return \Idealogic\RegistrationAPI\Model\MembershipStatusDTO[]|null
     */
    public function getMemberList()
    {
        return $this->container['member_list'];
    }

    /**
     * Sets member_list
     *
     * @param \Idealogic\RegistrationAPI\Model\MembershipStatusDTO[]|null $member_list member_list
     *
     * @return self
     */
    public function setMemberList($member_list)
    {
        if (is_null($member_list)) {
            throw new \InvalidArgumentException('non-nullable member_list cannot be null');
        }
        $this->container['member_list'] = $member_list;

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


