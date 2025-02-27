<?php
/**
 * GetLatestMinedZilliqaBlockRI
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CryptoAPIs\Model;

use \ArrayAccess;
use \CryptoAPIs\ObjectSerializer;

/**
 * GetLatestMinedZilliqaBlockRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetLatestMinedZilliqaBlockRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetLatestMinedZilliqaBlockRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'block_hash' => 'string',
        'block_height' => 'int',
        'difficulty' => 'string',
        'ds_block' => 'int',
        'ds_difficulty' => 'string',
        'ds_leader' => 'string',
        'gas_limit' => 'int',
        'gas_used' => 'int',
        'micro_blocks' => 'string[]',
        'previous_block_hash' => 'string',
        'timestamp' => 'int',
        'transactions_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'block_hash' => null,
        'block_height' => null,
        'difficulty' => null,
        'ds_block' => null,
        'ds_difficulty' => null,
        'ds_leader' => null,
        'gas_limit' => null,
        'gas_used' => null,
        'micro_blocks' => null,
        'previous_block_hash' => null,
        'timestamp' => null,
        'transactions_count' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'block_hash' => 'blockHash',
        'block_height' => 'blockHeight',
        'difficulty' => 'difficulty',
        'ds_block' => 'dsBlock',
        'ds_difficulty' => 'dsDifficulty',
        'ds_leader' => 'dsLeader',
        'gas_limit' => 'gasLimit',
        'gas_used' => 'gasUsed',
        'micro_blocks' => 'microBlocks',
        'previous_block_hash' => 'previousBlockHash',
        'timestamp' => 'timestamp',
        'transactions_count' => 'transactionsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'block_hash' => 'setBlockHash',
        'block_height' => 'setBlockHeight',
        'difficulty' => 'setDifficulty',
        'ds_block' => 'setDsBlock',
        'ds_difficulty' => 'setDsDifficulty',
        'ds_leader' => 'setDsLeader',
        'gas_limit' => 'setGasLimit',
        'gas_used' => 'setGasUsed',
        'micro_blocks' => 'setMicroBlocks',
        'previous_block_hash' => 'setPreviousBlockHash',
        'timestamp' => 'setTimestamp',
        'transactions_count' => 'setTransactionsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'block_hash' => 'getBlockHash',
        'block_height' => 'getBlockHeight',
        'difficulty' => 'getDifficulty',
        'ds_block' => 'getDsBlock',
        'ds_difficulty' => 'getDsDifficulty',
        'ds_leader' => 'getDsLeader',
        'gas_limit' => 'getGasLimit',
        'gas_used' => 'getGasUsed',
        'micro_blocks' => 'getMicroBlocks',
        'previous_block_hash' => 'getPreviousBlockHash',
        'timestamp' => 'getTimestamp',
        'transactions_count' => 'getTransactionsCount'
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
        $this->container['block_hash'] = $data['block_hash'] ?? null;
        $this->container['block_height'] = $data['block_height'] ?? null;
        $this->container['difficulty'] = $data['difficulty'] ?? null;
        $this->container['ds_block'] = $data['ds_block'] ?? null;
        $this->container['ds_difficulty'] = $data['ds_difficulty'] ?? null;
        $this->container['ds_leader'] = $data['ds_leader'] ?? null;
        $this->container['gas_limit'] = $data['gas_limit'] ?? null;
        $this->container['gas_used'] = $data['gas_used'] ?? null;
        $this->container['micro_blocks'] = $data['micro_blocks'] ?? null;
        $this->container['previous_block_hash'] = $data['previous_block_hash'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['transactions_count'] = $data['transactions_count'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['block_hash'] === null) {
            $invalidProperties[] = "'block_hash' can't be null";
        }
        if ($this->container['block_height'] === null) {
            $invalidProperties[] = "'block_height' can't be null";
        }
        if ($this->container['difficulty'] === null) {
            $invalidProperties[] = "'difficulty' can't be null";
        }
        if ($this->container['ds_block'] === null) {
            $invalidProperties[] = "'ds_block' can't be null";
        }
        if ($this->container['ds_difficulty'] === null) {
            $invalidProperties[] = "'ds_difficulty' can't be null";
        }
        if ($this->container['ds_leader'] === null) {
            $invalidProperties[] = "'ds_leader' can't be null";
        }
        if ($this->container['gas_limit'] === null) {
            $invalidProperties[] = "'gas_limit' can't be null";
        }
        if ($this->container['gas_used'] === null) {
            $invalidProperties[] = "'gas_used' can't be null";
        }
        if ($this->container['micro_blocks'] === null) {
            $invalidProperties[] = "'micro_blocks' can't be null";
        }
        if ($this->container['previous_block_hash'] === null) {
            $invalidProperties[] = "'previous_block_hash' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['transactions_count'] === null) {
            $invalidProperties[] = "'transactions_count' can't be null";
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
     * Gets block_hash
     *
     * @return string
     */
    public function getBlockHash()
    {
        return $this->container['block_hash'];
    }

    /**
     * Sets block_hash
     *
     * @param string $block_hash Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm.
     *
     * @return self
     */
    public function setBlockHash($block_hash)
    {
        $this->container['block_hash'] = $block_hash;

        return $this;
    }

    /**
     * Gets block_height
     *
     * @return int
     */
    public function getBlockHeight()
    {
        return $this->container['block_height'];
    }

    /**
     * Sets block_height
     *
     * @param int $block_height Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \"Genesis block\".
     *
     * @return self
     */
    public function setBlockHeight($block_height)
    {
        $this->container['block_height'] = $block_height;

        return $this;
    }

    /**
     * Gets difficulty
     *
     * @return string
     */
    public function getDifficulty()
    {
        return $this->container['difficulty'];
    }

    /**
     * Sets difficulty
     *
     * @param string $difficulty Defines how difficult it is for a specific miner to mine the block.
     *
     * @return self
     */
    public function setDifficulty($difficulty)
    {
        $this->container['difficulty'] = $difficulty;

        return $this;
    }

    /**
     * Gets ds_block
     *
     * @return int
     */
    public function getDsBlock()
    {
        return $this->container['ds_block'];
    }

    /**
     * Sets ds_block
     *
     * @param int $ds_block Represents the Directory Service block which contains metadata about the miners who participate in the consensus protocol.
     *
     * @return self
     */
    public function setDsBlock($ds_block)
    {
        $this->container['ds_block'] = $ds_block;

        return $this;
    }

    /**
     * Gets ds_difficulty
     *
     * @return string
     */
    public function getDsDifficulty()
    {
        return $this->container['ds_difficulty'];
    }

    /**
     * Sets ds_difficulty
     *
     * @param string $ds_difficulty Defines how difficult it is to mine the dsBlocks.
     *
     * @return self
     */
    public function setDsDifficulty($ds_difficulty)
    {
        $this->container['ds_difficulty'] = $ds_difficulty;

        return $this;
    }

    /**
     * Gets ds_leader
     *
     * @return string
     */
    public function getDsLeader()
    {
        return $this->container['ds_leader'];
    }

    /**
     * Sets ds_leader
     *
     * @param string $ds_leader Represents a part of the DS Committee which leads the consensus protocol for the epoch.
     *
     * @return self
     */
    public function setDsLeader($ds_leader)
    {
        $this->container['ds_leader'] = $ds_leader;

        return $this;
    }

    /**
     * Gets gas_limit
     *
     * @return int
     */
    public function getGasLimit()
    {
        return $this->container['gas_limit'];
    }

    /**
     * Sets gas_limit
     *
     * @param int $gas_limit Represents the maximum amount of gas allowed in the block in order to determine how many transactions it can fit.
     *
     * @return self
     */
    public function setGasLimit($gas_limit)
    {
        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_used
     *
     * @return int
     */
    public function getGasUsed()
    {
        return $this->container['gas_used'];
    }

    /**
     * Sets gas_used
     *
     * @param int $gas_used Defines how much of the gas for the block has been used.
     *
     * @return self
     */
    public function setGasUsed($gas_used)
    {
        $this->container['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Gets micro_blocks
     *
     * @return string[]
     */
    public function getMicroBlocks()
    {
        return $this->container['micro_blocks'];
    }

    /**
     * Sets micro_blocks
     *
     * @param string[] $micro_blocks micro_blocks
     *
     * @return self
     */
    public function setMicroBlocks($micro_blocks)
    {
        $this->container['micro_blocks'] = $micro_blocks;

        return $this;
    }

    /**
     * Gets previous_block_hash
     *
     * @return string
     */
    public function getPreviousBlockHash()
    {
        return $this->container['previous_block_hash'];
    }

    /**
     * Sets previous_block_hash
     *
     * @param string $previous_block_hash Represents the hash of the previous block, also known as the parent block.
     *
     * @return self
     */
    public function setPreviousBlockHash($previous_block_hash)
    {
        $this->container['previous_block_hash'] = $previous_block_hash;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp Defines the exact date/time when this block was mined in Unix Timestamp.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets transactions_count
     *
     * @return int
     */
    public function getTransactionsCount()
    {
        return $this->container['transactions_count'];
    }

    /**
     * Sets transactions_count
     *
     * @param int $transactions_count Represents the total number of all transactions as part of this block.
     *
     * @return self
     */
    public function setTransactionsCount($transactions_count)
    {
        $this->container['transactions_count'] = $transactions_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


