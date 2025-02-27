<?php
/**
 * ListTransactionsByBlockHeightRIBSLVin
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
 * ListTransactionsByBlockHeightRIBSLVin Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListTransactionsByBlockHeightRIBSLVin implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListTransactionsByBlockHeightRIBSL_vin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'addresses' => 'string[]',
        'coinbase' => 'string',
        'script_sig' => '\CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSLScriptSig',
        'sequence' => 'string',
        'txid' => 'string',
        'txinwitness' => 'string[]',
        'value' => 'string',
        'vout' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'addresses' => null,
        'coinbase' => null,
        'script_sig' => null,
        'sequence' => null,
        'txid' => null,
        'txinwitness' => null,
        'value' => null,
        'vout' => null
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
        'addresses' => 'addresses',
        'coinbase' => 'coinbase',
        'script_sig' => 'scriptSig',
        'sequence' => 'sequence',
        'txid' => 'txid',
        'txinwitness' => 'txinwitness',
        'value' => 'value',
        'vout' => 'vout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addresses' => 'setAddresses',
        'coinbase' => 'setCoinbase',
        'script_sig' => 'setScriptSig',
        'sequence' => 'setSequence',
        'txid' => 'setTxid',
        'txinwitness' => 'setTxinwitness',
        'value' => 'setValue',
        'vout' => 'setVout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addresses' => 'getAddresses',
        'coinbase' => 'getCoinbase',
        'script_sig' => 'getScriptSig',
        'sequence' => 'getSequence',
        'txid' => 'getTxid',
        'txinwitness' => 'getTxinwitness',
        'value' => 'getValue',
        'vout' => 'getVout'
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
        $this->container['addresses'] = $data['addresses'] ?? null;
        $this->container['coinbase'] = $data['coinbase'] ?? null;
        $this->container['script_sig'] = $data['script_sig'] ?? null;
        $this->container['sequence'] = $data['sequence'] ?? null;
        $this->container['txid'] = $data['txid'] ?? null;
        $this->container['txinwitness'] = $data['txinwitness'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['vout'] = $data['vout'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['script_sig'] === null) {
            $invalidProperties[] = "'script_sig' can't be null";
        }
        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
        }
        if ($this->container['txid'] === null) {
            $invalidProperties[] = "'txid' can't be null";
        }
        if ($this->container['txinwitness'] === null) {
            $invalidProperties[] = "'txinwitness' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['vout'] === null) {
            $invalidProperties[] = "'vout' can't be null";
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
     * Gets addresses
     *
     * @return string[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param string[] $addresses addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets coinbase
     *
     * @return string|null
     */
    public function getCoinbase()
    {
        return $this->container['coinbase'];
    }

    /**
     * Sets coinbase
     *
     * @param string|null $coinbase Represents the coinbase hex.
     *
     * @return self
     */
    public function setCoinbase($coinbase)
    {
        $this->container['coinbase'] = $coinbase;

        return $this;
    }

    /**
     * Gets script_sig
     *
     * @return \CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSLScriptSig
     */
    public function getScriptSig()
    {
        return $this->container['script_sig'];
    }

    /**
     * Sets script_sig
     *
     * @param \CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSLScriptSig $script_sig script_sig
     *
     * @return self
     */
    public function setScriptSig($script_sig)
    {
        $this->container['script_sig'] = $script_sig;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return string
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param string $sequence Represents the script sequence number.
     *
     * @return self
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets txid
     *
     * @return string
     */
    public function getTxid()
    {
        return $this->container['txid'];
    }

    /**
     * Sets txid
     *
     * @param string $txid Represents the reference transaction identifier.
     *
     * @return self
     */
    public function setTxid($txid)
    {
        $this->container['txid'] = $txid;

        return $this;
    }

    /**
     * Gets txinwitness
     *
     * @return string[]
     */
    public function getTxinwitness()
    {
        return $this->container['txinwitness'];
    }

    /**
     * Sets txinwitness
     *
     * @param string[] $txinwitness txinwitness
     *
     * @return self
     */
    public function setTxinwitness($txinwitness)
    {
        $this->container['txinwitness'] = $txinwitness;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value Represents the sent/received amount.
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets vout
     *
     * @return int
     */
    public function getVout()
    {
        return $this->container['vout'];
    }

    /**
     * Sets vout
     *
     * @param int $vout It refers to the index of the output address of this transaction. The index starts from 0.
     *
     * @return self
     */
    public function setVout($vout)
    {
        $this->container['vout'] = $vout;

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


