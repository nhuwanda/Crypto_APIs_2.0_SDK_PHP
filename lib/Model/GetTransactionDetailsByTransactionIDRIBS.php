<?php
/**
 * GetTransactionDetailsByTransactionIDRIBS
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
 * GetTransactionDetailsByTransactionIDRIBS Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetTransactionDetailsByTransactionIDRIBS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetTransactionDetailsByTransactionIDRIBS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'locktime' => 'int',
        'size' => 'int',
        'v_size' => 'int',
        'version' => 'int',
        'vin' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSD2Vin[]',
        'vout' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSD2Vout[]',
        'vsize' => 'int',
        'contract' => 'string',
        'gas_limit' => 'string',
        'gas_price' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSECGasPrice',
        'gas_used' => 'string',
        'input_data' => 'string',
        'nonce' => 'string',
        'transaction_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'locktime' => null,
        'size' => null,
        'v_size' => null,
        'version' => null,
        'vin' => null,
        'vout' => null,
        'vsize' => null,
        'contract' => null,
        'gas_limit' => null,
        'gas_price' => null,
        'gas_used' => null,
        'input_data' => null,
        'nonce' => null,
        'transaction_status' => null
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
        'locktime' => 'locktime',
        'size' => 'size',
        'v_size' => 'vSize',
        'version' => 'version',
        'vin' => 'vin',
        'vout' => 'vout',
        'vsize' => 'vsize',
        'contract' => 'contract',
        'gas_limit' => 'gasLimit',
        'gas_price' => 'gasPrice',
        'gas_used' => 'gasUsed',
        'input_data' => 'inputData',
        'nonce' => 'nonce',
        'transaction_status' => 'transactionStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locktime' => 'setLocktime',
        'size' => 'setSize',
        'v_size' => 'setVSize',
        'version' => 'setVersion',
        'vin' => 'setVin',
        'vout' => 'setVout',
        'vsize' => 'setVsize',
        'contract' => 'setContract',
        'gas_limit' => 'setGasLimit',
        'gas_price' => 'setGasPrice',
        'gas_used' => 'setGasUsed',
        'input_data' => 'setInputData',
        'nonce' => 'setNonce',
        'transaction_status' => 'setTransactionStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locktime' => 'getLocktime',
        'size' => 'getSize',
        'v_size' => 'getVSize',
        'version' => 'getVersion',
        'vin' => 'getVin',
        'vout' => 'getVout',
        'vsize' => 'getVsize',
        'contract' => 'getContract',
        'gas_limit' => 'getGasLimit',
        'gas_price' => 'getGasPrice',
        'gas_used' => 'getGasUsed',
        'input_data' => 'getInputData',
        'nonce' => 'getNonce',
        'transaction_status' => 'getTransactionStatus'
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
        $this->container['locktime'] = $data['locktime'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['v_size'] = $data['v_size'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['vin'] = $data['vin'] ?? null;
        $this->container['vout'] = $data['vout'] ?? null;
        $this->container['vsize'] = $data['vsize'] ?? null;
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['gas_limit'] = $data['gas_limit'] ?? null;
        $this->container['gas_price'] = $data['gas_price'] ?? null;
        $this->container['gas_used'] = $data['gas_used'] ?? null;
        $this->container['input_data'] = $data['input_data'] ?? null;
        $this->container['nonce'] = $data['nonce'] ?? null;
        $this->container['transaction_status'] = $data['transaction_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['locktime'] === null) {
            $invalidProperties[] = "'locktime' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['v_size'] === null) {
            $invalidProperties[] = "'v_size' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['vin'] === null) {
            $invalidProperties[] = "'vin' can't be null";
        }
        if ($this->container['vout'] === null) {
            $invalidProperties[] = "'vout' can't be null";
        }
        if ($this->container['vsize'] === null) {
            $invalidProperties[] = "'vsize' can't be null";
        }
        if ($this->container['contract'] === null) {
            $invalidProperties[] = "'contract' can't be null";
        }
        if ($this->container['gas_limit'] === null) {
            $invalidProperties[] = "'gas_limit' can't be null";
        }
        if ($this->container['gas_price'] === null) {
            $invalidProperties[] = "'gas_price' can't be null";
        }
        if ($this->container['gas_used'] === null) {
            $invalidProperties[] = "'gas_used' can't be null";
        }
        if ($this->container['input_data'] === null) {
            $invalidProperties[] = "'input_data' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['transaction_status'] === null) {
            $invalidProperties[] = "'transaction_status' can't be null";
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
     * Gets locktime
     *
     * @return int
     */
    public function getLocktime()
    {
        return $this->container['locktime'];
    }

    /**
     * Sets locktime
     *
     * @param int $locktime Represents the time at which a particular transaction can be added to the blockchain.
     *
     * @return self
     */
    public function setLocktime($locktime)
    {
        $this->container['locktime'] = $locktime;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size Represents the total size of this transaction.
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets v_size
     *
     * @return int
     */
    public function getVSize()
    {
        return $this->container['v_size'];
    }

    /**
     * Sets v_size
     *
     * @param int $v_size Represents the virtual size of this transaction.
     *
     * @return self
     */
    public function setVSize($v_size)
    {
        $this->container['v_size'] = $v_size;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version Represents transaction version number.
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets vin
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSD2Vin[]
     */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
     * Sets vin
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSD2Vin[] $vin Represents the transaction inputs.
     *
     * @return self
     */
    public function setVin($vin)
    {
        $this->container['vin'] = $vin;

        return $this;
    }

    /**
     * Gets vout
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSD2Vout[]
     */
    public function getVout()
    {
        return $this->container['vout'];
    }

    /**
     * Sets vout
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSD2Vout[] $vout Represents the transaction outputs.
     *
     * @return self
     */
    public function setVout($vout)
    {
        $this->container['vout'] = $vout;

        return $this;
    }

    /**
     * Gets vsize
     *
     * @return int
     */
    public function getVsize()
    {
        return $this->container['vsize'];
    }

    /**
     * Sets vsize
     *
     * @param int $vsize Represents the virtual size of this transaction.
     *
     * @return self
     */
    public function setVsize($vsize)
    {
        $this->container['vsize'] = $vsize;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return string
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string $contract Represents the specific transaction contract.
     *
     * @return self
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets gas_limit
     *
     * @return string
     */
    public function getGasLimit()
    {
        return $this->container['gas_limit'];
    }

    /**
     * Sets gas_limit
     *
     * @param string $gas_limit Represents the amount of gas used by this specific transaction alone.
     *
     * @return self
     */
    public function setGasLimit($gas_limit)
    {
        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_price
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSECGasPrice
     */
    public function getGasPrice()
    {
        return $this->container['gas_price'];
    }

    /**
     * Sets gas_price
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSECGasPrice $gas_price gas_price
     *
     * @return self
     */
    public function setGasPrice($gas_price)
    {
        $this->container['gas_price'] = $gas_price;

        return $this;
    }

    /**
     * Gets gas_used
     *
     * @return string
     */
    public function getGasUsed()
    {
        return $this->container['gas_used'];
    }

    /**
     * Sets gas_used
     *
     * @param string $gas_used Represents the exact unit of gas that was used for the transaction.
     *
     * @return self
     */
    public function setGasUsed($gas_used)
    {
        $this->container['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Gets input_data
     *
     * @return string
     */
    public function getInputData()
    {
        return $this->container['input_data'];
    }

    /**
     * Sets input_data
     *
     * @param string $input_data Represents additional information that is required for the transaction.
     *
     * @return self
     */
    public function setInputData($input_data)
    {
        $this->container['input_data'] = $input_data;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return string
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string $nonce Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender's address.
     *
     * @return self
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets transaction_status
     *
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->container['transaction_status'];
    }

    /**
     * Sets transaction_status
     *
     * @param string $transaction_status Represents the status of this transaction.
     *
     * @return self
     */
    public function setTransactionStatus($transaction_status)
    {
        $this->container['transaction_status'] = $transaction_status;

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


