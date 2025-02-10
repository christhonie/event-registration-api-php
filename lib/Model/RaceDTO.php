<?php
/**
 * RaceDTO
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
 * The version of the OpenAPI document: 2.0.6-SNAPSHOT
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
 * RaceDTO Class Doc Comment
 *
 * @category Class
 * @package  Idealogic\RegistrationAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RaceDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RaceDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'start_time' => '\DateTime',
        'min_entries' => 'int',
        'max_entries' => 'int',
        'distance_meters' => 'int',
        'duration_seconds' => 'int',
        'active' => 'bool',
        'status' => 'string',
        'end_time' => '\DateTime',
        'finish_time' => '\DateTime',
        'finish_duration_milli_seconds' => 'int',
        'event_race_type' => '\Idealogic\RegistrationAPI\Model\EventRaceTypeDTO',
        'course' => '\Idealogic\RegistrationAPI\Model\CourseDTO',
        'event_category' => '\Idealogic\RegistrationAPI\Model\EventCategoryDTO',
        'config' => '\Idealogic\RegistrationAPI\Model\RaceTypeConfigDTO',
        'event' => '\Idealogic\RegistrationAPI\Model\EventDTO',
        'start_groups' => '\Idealogic\RegistrationAPI\Model\StartGroupDTO[]'
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
        'min_entries' => 'int32',
        'max_entries' => 'int32',
        'distance_meters' => 'int32',
        'duration_seconds' => 'int32',
        'active' => null,
        'status' => null,
        'end_time' => 'date-time',
        'finish_time' => 'date-time',
        'finish_duration_milli_seconds' => 'int64',
        'event_race_type' => null,
        'course' => null,
        'event_category' => null,
        'config' => null,
        'event' => null,
        'start_groups' => null
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
        'min_entries' => false,
        'max_entries' => false,
        'distance_meters' => false,
        'duration_seconds' => false,
        'active' => false,
        'status' => false,
        'end_time' => false,
        'finish_time' => false,
        'finish_duration_milli_seconds' => false,
        'event_race_type' => false,
        'course' => false,
        'event_category' => false,
        'config' => false,
        'event' => false,
        'start_groups' => false
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
        'min_entries' => 'minEntries',
        'max_entries' => 'maxEntries',
        'distance_meters' => 'distanceMeters',
        'duration_seconds' => 'durationSeconds',
        'active' => 'active',
        'status' => 'status',
        'end_time' => 'endTime',
        'finish_time' => 'finishTime',
        'finish_duration_milli_seconds' => 'finishDurationMilliSeconds',
        'event_race_type' => 'eventRaceType',
        'course' => 'course',
        'event_category' => 'eventCategory',
        'config' => 'config',
        'event' => 'event',
        'start_groups' => 'startGroups'
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
        'min_entries' => 'setMinEntries',
        'max_entries' => 'setMaxEntries',
        'distance_meters' => 'setDistanceMeters',
        'duration_seconds' => 'setDurationSeconds',
        'active' => 'setActive',
        'status' => 'setStatus',
        'end_time' => 'setEndTime',
        'finish_time' => 'setFinishTime',
        'finish_duration_milli_seconds' => 'setFinishDurationMilliSeconds',
        'event_race_type' => 'setEventRaceType',
        'course' => 'setCourse',
        'event_category' => 'setEventCategory',
        'config' => 'setConfig',
        'event' => 'setEvent',
        'start_groups' => 'setStartGroups'
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
        'min_entries' => 'getMinEntries',
        'max_entries' => 'getMaxEntries',
        'distance_meters' => 'getDistanceMeters',
        'duration_seconds' => 'getDurationSeconds',
        'active' => 'getActive',
        'status' => 'getStatus',
        'end_time' => 'getEndTime',
        'finish_time' => 'getFinishTime',
        'finish_duration_milli_seconds' => 'getFinishDurationMilliSeconds',
        'event_race_type' => 'getEventRaceType',
        'course' => 'getCourse',
        'event_category' => 'getEventCategory',
        'config' => 'getConfig',
        'event' => 'getEvent',
        'start_groups' => 'getStartGroups'
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

    public const STATUS_PLANNED = 'PLANNED';
    public const STATUS_STAGING = 'STAGING';
    public const STATUS_READY = 'READY';
    public const STATUS_COMPLETED = 'COMPLETED';
    public const STATUS_CANCELLED = 'CANCELLED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PLANNED,
            self::STATUS_STAGING,
            self::STATUS_READY,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELLED,
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
        $this->setIfExists('start_time', $data ?? [], null);
        $this->setIfExists('min_entries', $data ?? [], null);
        $this->setIfExists('max_entries', $data ?? [], null);
        $this->setIfExists('distance_meters', $data ?? [], null);
        $this->setIfExists('duration_seconds', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('end_time', $data ?? [], null);
        $this->setIfExists('finish_time', $data ?? [], null);
        $this->setIfExists('finish_duration_milli_seconds', $data ?? [], null);
        $this->setIfExists('event_race_type', $data ?? [], null);
        $this->setIfExists('course', $data ?? [], null);
        $this->setIfExists('event_category', $data ?? [], null);
        $this->setIfExists('config', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('start_groups', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling RaceDTO., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling RaceDTO., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime|null $start_time Scheduled or actual start of the race.
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
     * Gets min_entries
     *
     * @return int|null
     */
    public function getMinEntries()
    {
        return $this->container['min_entries'];
    }

    /**
     * Sets min_entries
     *
     * @param int|null $min_entries Configuration: Minimum number of entries required to host this race.
     *
     * @return self
     */
    public function setMinEntries($min_entries)
    {
        if (is_null($min_entries)) {
            throw new \InvalidArgumentException('non-nullable min_entries cannot be null');
        }
        $this->container['min_entries'] = $min_entries;

        return $this;
    }

    /**
     * Gets max_entries
     *
     * @return int|null
     */
    public function getMaxEntries()
    {
        return $this->container['max_entries'];
    }

    /**
     * Sets max_entries
     *
     * @param int|null $max_entries Configuration: Maximum number of entries for this race.
     *
     * @return self
     */
    public function setMaxEntries($max_entries)
    {
        if (is_null($max_entries)) {
            throw new \InvalidArgumentException('non-nullable max_entries cannot be null');
        }
        $this->container['max_entries'] = $max_entries;

        return $this;
    }

    /**
     * Gets distance_meters
     *
     * @return int|null
     */
    public function getDistanceMeters()
    {
        return $this->container['distance_meters'];
    }

    /**
     * Sets distance_meters
     *
     * @param int|null $distance_meters Distance of this race.
     *
     * @return self
     */
    public function setDistanceMeters($distance_meters)
    {
        if (is_null($distance_meters)) {
            throw new \InvalidArgumentException('non-nullable distance_meters cannot be null');
        }
        $this->container['distance_meters'] = $distance_meters;

        return $this;
    }

    /**
     * Gets duration_seconds
     *
     * @return int|null
     */
    public function getDurationSeconds()
    {
        return $this->container['duration_seconds'];
    }

    /**
     * Sets duration_seconds
     *
     * @param int|null $duration_seconds Duration of this race. This is an estimation prior to the race and the actual after the race.
     *
     * @return self
     */
    public function setDurationSeconds($duration_seconds)
    {
        if (is_null($duration_seconds)) {
            throw new \InvalidArgumentException('non-nullable duration_seconds cannot be null');
        }
        $this->container['duration_seconds'] = $duration_seconds;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Indicate if this race is going to happen or has happened.
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Race lifecycle status.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime|null $end_time Time when timing for the group ended.
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        if (is_null($end_time)) {
            throw new \InvalidArgumentException('non-nullable end_time cannot be null');
        }
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets finish_time
     *
     * @return \DateTime|null
     */
    public function getFinishTime()
    {
        return $this->container['finish_time'];
    }

    /**
     * Sets finish_time
     *
     * @param \DateTime|null $finish_time Time when the first participant in this group finished.
     *
     * @return self
     */
    public function setFinishTime($finish_time)
    {
        if (is_null($finish_time)) {
            throw new \InvalidArgumentException('non-nullable finish_time cannot be null');
        }
        $this->container['finish_time'] = $finish_time;

        return $this;
    }

    /**
     * Gets finish_duration_milli_seconds
     *
     * @return int|null
     */
    public function getFinishDurationMilliSeconds()
    {
        return $this->container['finish_duration_milli_seconds'];
    }

    /**
     * Sets finish_duration_milli_seconds
     *
     * @param int|null $finish_duration_milli_seconds The race duration in milli seconds of the fastest Participant in this group.
     *
     * @return self
     */
    public function setFinishDurationMilliSeconds($finish_duration_milli_seconds)
    {
        if (is_null($finish_duration_milli_seconds)) {
            throw new \InvalidArgumentException('non-nullable finish_duration_milli_seconds cannot be null');
        }
        $this->container['finish_duration_milli_seconds'] = $finish_duration_milli_seconds;

        return $this;
    }

    /**
     * Gets event_race_type
     *
     * @return \Idealogic\RegistrationAPI\Model\EventRaceTypeDTO|null
     */
    public function getEventRaceType()
    {
        return $this->container['event_race_type'];
    }

    /**
     * Sets event_race_type
     *
     * @param \Idealogic\RegistrationAPI\Model\EventRaceTypeDTO|null $event_race_type event_race_type
     *
     * @return self
     */
    public function setEventRaceType($event_race_type)
    {
        if (is_null($event_race_type)) {
            throw new \InvalidArgumentException('non-nullable event_race_type cannot be null');
        }
        $this->container['event_race_type'] = $event_race_type;

        return $this;
    }

    /**
     * Gets course
     *
     * @return \Idealogic\RegistrationAPI\Model\CourseDTO|null
     */
    public function getCourse()
    {
        return $this->container['course'];
    }

    /**
     * Sets course
     *
     * @param \Idealogic\RegistrationAPI\Model\CourseDTO|null $course course
     *
     * @return self
     */
    public function setCourse($course)
    {
        if (is_null($course)) {
            throw new \InvalidArgumentException('non-nullable course cannot be null');
        }
        $this->container['course'] = $course;

        return $this;
    }

    /**
     * Gets event_category
     *
     * @return \Idealogic\RegistrationAPI\Model\EventCategoryDTO|null
     */
    public function getEventCategory()
    {
        return $this->container['event_category'];
    }

    /**
     * Sets event_category
     *
     * @param \Idealogic\RegistrationAPI\Model\EventCategoryDTO|null $event_category event_category
     *
     * @return self
     */
    public function setEventCategory($event_category)
    {
        if (is_null($event_category)) {
            throw new \InvalidArgumentException('non-nullable event_category cannot be null');
        }
        $this->container['event_category'] = $event_category;

        return $this;
    }

    /**
     * Gets config
     *
     * @return \Idealogic\RegistrationAPI\Model\RaceTypeConfigDTO|null
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \Idealogic\RegistrationAPI\Model\RaceTypeConfigDTO|null $config config
     *
     * @return self
     */
    public function setConfig($config)
    {
        if (is_null($config)) {
            throw new \InvalidArgumentException('non-nullable config cannot be null');
        }
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets event
     *
     * @return \Idealogic\RegistrationAPI\Model\EventDTO|null
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param \Idealogic\RegistrationAPI\Model\EventDTO|null $event event
     *
     * @return self
     */
    public function setEvent($event)
    {
        if (is_null($event)) {
            throw new \InvalidArgumentException('non-nullable event cannot be null');
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets start_groups
     *
     * @return \Idealogic\RegistrationAPI\Model\StartGroupDTO[]|null
     */
    public function getStartGroups()
    {
        return $this->container['start_groups'];
    }

    /**
     * Sets start_groups
     *
     * @param \Idealogic\RegistrationAPI\Model\StartGroupDTO[]|null $start_groups StartGroups linked to this race.
     *
     * @return self
     */
    public function setStartGroups($start_groups)
    {
        if (is_null($start_groups)) {
            throw new \InvalidArgumentException('non-nullable start_groups cannot be null');
        }


        $this->container['start_groups'] = $start_groups;

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


