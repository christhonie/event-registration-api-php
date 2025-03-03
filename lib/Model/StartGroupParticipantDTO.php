<?php
/**
 * StartGroupParticipantDTO
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
 * StartGroupParticipantDTO Class Doc Comment
 *
 * @category Class
 * @description Defines a Participant starting in a StartGroup.
 * @package  Idealogic\RegistrationAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StartGroupParticipantDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StartGroupParticipantDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'date_of_birth' => '\DateTime',
        'gender' => 'string',
        'age' => 'int',
        'seq' => 'int',
        'start_group' => '\Idealogic\RegistrationAPI\Model\StartGroupDTO',
        'event_participant' => '\Idealogic\RegistrationAPI\Model\EventParticipantDTO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'first_name' => null,
        'last_name' => null,
        'date_of_birth' => 'date',
        'gender' => null,
        'age' => 'int32',
        'seq' => 'int32',
        'start_group' => null,
        'event_participant' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'first_name' => false,
        'last_name' => false,
        'date_of_birth' => false,
        'gender' => false,
        'age' => false,
        'seq' => false,
        'start_group' => false,
        'event_participant' => false
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
        'name' => 'name',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'date_of_birth' => 'dateOfBirth',
        'gender' => 'gender',
        'age' => 'age',
        'seq' => 'seq',
        'start_group' => 'startGroup',
        'event_participant' => 'eventParticipant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'date_of_birth' => 'setDateOfBirth',
        'gender' => 'setGender',
        'age' => 'setAge',
        'seq' => 'setSeq',
        'start_group' => 'setStartGroup',
        'event_participant' => 'setEventParticipant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'date_of_birth' => 'getDateOfBirth',
        'gender' => 'getGender',
        'age' => 'getAge',
        'seq' => 'getSeq',
        'start_group' => 'getStartGroup',
        'event_participant' => 'getEventParticipant'
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

    public const GENDER_UNKNOWN = 'UNKNOWN';
    public const GENDER_MALE = 'MALE';
    public const GENDER_FEMALE = 'FEMALE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_UNKNOWN,
            self::GENDER_MALE,
            self::GENDER_FEMALE,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('age', $data ?? [], null);
        $this->setIfExists('seq', $data ?? [], null);
        $this->setIfExists('start_group', $data ?? [], null);
        $this->setIfExists('event_participant', $data ?? [], null);
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

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gender', must be one of '%s'",
                $this->container['gender'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['start_group'] === null) {
            $invalidProperties[] = "'start_group' can't be null";
        }
        if ($this->container['event_participant'] === null) {
            $invalidProperties[] = "'event_participant' can't be null";
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
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
     * @param string|null $name name
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
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime|null $date_of_birth date_of_birth
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        if (is_null($date_of_birth)) {
            throw new \InvalidArgumentException('non-nullable date_of_birth cannot be null');
        }
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $allowedValues = $this->getGenderAllowableValues();
        if (!in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gender', must be one of '%s'",
                    $gender,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets age
     *
     * @return int|null
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param int|null $age Age on the day of the race.
     *
     * @return self
     */
    public function setAge($age)
    {
        if (is_null($age)) {
            throw new \InvalidArgumentException('non-nullable age cannot be null');
        }
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets seq
     *
     * @return int|null
     */
    public function getSeq()
    {
        return $this->container['seq'];
    }

    /**
     * Sets seq
     *
     * @param int|null $seq Sequence of this participant in the start group.
     *
     * @return self
     */
    public function setSeq($seq)
    {
        if (is_null($seq)) {
            throw new \InvalidArgumentException('non-nullable seq cannot be null');
        }
        $this->container['seq'] = $seq;

        return $this;
    }

    /**
     * Gets start_group
     *
     * @return \Idealogic\RegistrationAPI\Model\StartGroupDTO
     */
    public function getStartGroup()
    {
        return $this->container['start_group'];
    }

    /**
     * Sets start_group
     *
     * @param \Idealogic\RegistrationAPI\Model\StartGroupDTO $start_group start_group
     *
     * @return self
     */
    public function setStartGroup($start_group)
    {
        if (is_null($start_group)) {
            throw new \InvalidArgumentException('non-nullable start_group cannot be null');
        }
        $this->container['start_group'] = $start_group;

        return $this;
    }

    /**
     * Gets event_participant
     *
     * @return \Idealogic\RegistrationAPI\Model\EventParticipantDTO
     */
    public function getEventParticipant()
    {
        return $this->container['event_participant'];
    }

    /**
     * Sets event_participant
     *
     * @param \Idealogic\RegistrationAPI\Model\EventParticipantDTO $event_participant event_participant
     *
     * @return self
     */
    public function setEventParticipant($event_participant)
    {
        if (is_null($event_participant)) {
            throw new \InvalidArgumentException('non-nullable event_participant cannot be null');
        }
        $this->container['event_participant'] = $event_participant;

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


