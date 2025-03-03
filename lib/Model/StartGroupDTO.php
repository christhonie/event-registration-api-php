<?php
/**
 * StartGroupDTO
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
 * StartGroupDTO Class Doc Comment
 *
 * @category Class
 * @package  Idealogic\RegistrationAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StartGroupDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StartGroupDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'start_time' => '\DateTime',
        'seq' => 'int',
        'race' => '\Idealogic\RegistrationAPI\Model\RaceDTO',
        'round' => '\Idealogic\RegistrationAPI\Model\RoundDTO',
        'program_entry' => '\Idealogic\RegistrationAPI\Model\ProgramEntryDTO'
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
        'start_time' => 'date-time',
        'seq' => 'int32',
        'race' => null,
        'round' => null,
        'program_entry' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'start_time' => false,
        'seq' => false,
        'race' => false,
        'round' => false,
        'program_entry' => false
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
        'start_time' => 'startTime',
        'seq' => 'seq',
        'race' => 'race',
        'round' => 'round',
        'program_entry' => 'programEntry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'start_time' => 'setStartTime',
        'seq' => 'setSeq',
        'race' => 'setRace',
        'round' => 'setRound',
        'program_entry' => 'setProgramEntry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'start_time' => 'getStartTime',
        'seq' => 'getSeq',
        'race' => 'getRace',
        'round' => 'getRound',
        'program_entry' => 'getProgramEntry'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('start_time', $data ?? [], null);
        $this->setIfExists('seq', $data ?? [], null);
        $this->setIfExists('race', $data ?? [], null);
        $this->setIfExists('round', $data ?? [], null);
        $this->setIfExists('program_entry', $data ?? [], null);
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

        if ($this->container['start_time'] === null) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ($this->container['race'] === null) {
            $invalidProperties[] = "'race' can't be null";
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
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time Time when the group started.
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        if (is_null($start_time)) {
            throw new \InvalidArgumentException('non-nullable start_time cannot be null');
        }
        $this->container['start_time'] = $start_time;

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
     * @param int|null $seq Sequence of this start group in the Race.
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
     * Gets race
     *
     * @return \Idealogic\RegistrationAPI\Model\RaceDTO
     */
    public function getRace()
    {
        return $this->container['race'];
    }

    /**
     * Sets race
     *
     * @param \Idealogic\RegistrationAPI\Model\RaceDTO $race race
     *
     * @return self
     */
    public function setRace($race)
    {
        if (is_null($race)) {
            throw new \InvalidArgumentException('non-nullable race cannot be null');
        }
        $this->container['race'] = $race;

        return $this;
    }

    /**
     * Gets round
     *
     * @return \Idealogic\RegistrationAPI\Model\RoundDTO|null
     */
    public function getRound()
    {
        return $this->container['round'];
    }

    /**
     * Sets round
     *
     * @param \Idealogic\RegistrationAPI\Model\RoundDTO|null $round round
     *
     * @return self
     */
    public function setRound($round)
    {
        if (is_null($round)) {
            throw new \InvalidArgumentException('non-nullable round cannot be null');
        }
        $this->container['round'] = $round;

        return $this;
    }

    /**
     * Gets program_entry
     *
     * @return \Idealogic\RegistrationAPI\Model\ProgramEntryDTO|null
     */
    public function getProgramEntry()
    {
        return $this->container['program_entry'];
    }

    /**
     * Sets program_entry
     *
     * @param \Idealogic\RegistrationAPI\Model\ProgramEntryDTO|null $program_entry program_entry
     *
     * @return self
     */
    public function setProgramEntry($program_entry)
    {
        if (is_null($program_entry)) {
            throw new \InvalidArgumentException('non-nullable program_entry cannot be null');
        }
        $this->container['program_entry'] = $program_entry;

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


