<?php
/**
 * GetWalletAssetDetailsRI
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
 * GetWalletAssetDetailsRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetWalletAssetDetailsRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetWalletAssetDetailsRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'confirmed_balance' => '\CryptoAPIs\Model\GetWalletAssetDetailsRIConfirmedBalance',
        'deposit_addresses_count' => 'int',
        'name' => 'string',
        'recieved_confirmed_amount' => '\CryptoAPIs\Model\GetWalletAssetDetailsRIRecievedConfirmedAmount',
        'sent_confirmed_amount' => '\CryptoAPIs\Model\GetWalletAssetDetailsRISentConfirmedAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'confirmed_balance' => null,
        'deposit_addresses_count' => null,
        'name' => null,
        'recieved_confirmed_amount' => null,
        'sent_confirmed_amount' => null
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
        'confirmed_balance' => 'confirmedBalance',
        'deposit_addresses_count' => 'depositAddressesCount',
        'name' => 'name',
        'recieved_confirmed_amount' => 'recievedConfirmedAmount',
        'sent_confirmed_amount' => 'sentConfirmedAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'confirmed_balance' => 'setConfirmedBalance',
        'deposit_addresses_count' => 'setDepositAddressesCount',
        'name' => 'setName',
        'recieved_confirmed_amount' => 'setRecievedConfirmedAmount',
        'sent_confirmed_amount' => 'setSentConfirmedAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'confirmed_balance' => 'getConfirmedBalance',
        'deposit_addresses_count' => 'getDepositAddressesCount',
        'name' => 'getName',
        'recieved_confirmed_amount' => 'getRecievedConfirmedAmount',
        'sent_confirmed_amount' => 'getSentConfirmedAmount'
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
        $this->container['confirmed_balance'] = $data['confirmed_balance'] ?? null;
        $this->container['deposit_addresses_count'] = $data['deposit_addresses_count'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['recieved_confirmed_amount'] = $data['recieved_confirmed_amount'] ?? null;
        $this->container['sent_confirmed_amount'] = $data['sent_confirmed_amount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['confirmed_balance'] === null) {
            $invalidProperties[] = "'confirmed_balance' can't be null";
        }
        if ($this->container['deposit_addresses_count'] === null) {
            $invalidProperties[] = "'deposit_addresses_count' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['recieved_confirmed_amount'] === null) {
            $invalidProperties[] = "'recieved_confirmed_amount' can't be null";
        }
        if ($this->container['sent_confirmed_amount'] === null) {
            $invalidProperties[] = "'sent_confirmed_amount' can't be null";
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
     * Gets confirmed_balance
     *
     * @return \CryptoAPIs\Model\GetWalletAssetDetailsRIConfirmedBalance
     */
    public function getConfirmedBalance()
    {
        return $this->container['confirmed_balance'];
    }

    /**
     * Sets confirmed_balance
     *
     * @param \CryptoAPIs\Model\GetWalletAssetDetailsRIConfirmedBalance $confirmed_balance confirmed_balance
     *
     * @return self
     */
    public function setConfirmedBalance($confirmed_balance)
    {
        $this->container['confirmed_balance'] = $confirmed_balance;

        return $this;
    }

    /**
     * Gets deposit_addresses_count
     *
     * @return int
     */
    public function getDepositAddressesCount()
    {
        return $this->container['deposit_addresses_count'];
    }

    /**
     * Sets deposit_addresses_count
     *
     * @param int $deposit_addresses_count Specifies the count of deposit addresses in the Wallet.
     *
     * @return self
     */
    public function setDepositAddressesCount($deposit_addresses_count)
    {
        $this->container['deposit_addresses_count'] = $deposit_addresses_count;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Defines the name of the Wallet given to it by the user.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets recieved_confirmed_amount
     *
     * @return \CryptoAPIs\Model\GetWalletAssetDetailsRIRecievedConfirmedAmount
     */
    public function getRecievedConfirmedAmount()
    {
        return $this->container['recieved_confirmed_amount'];
    }

    /**
     * Sets recieved_confirmed_amount
     *
     * @param \CryptoAPIs\Model\GetWalletAssetDetailsRIRecievedConfirmedAmount $recieved_confirmed_amount recieved_confirmed_amount
     *
     * @return self
     */
    public function setRecievedConfirmedAmount($recieved_confirmed_amount)
    {
        $this->container['recieved_confirmed_amount'] = $recieved_confirmed_amount;

        return $this;
    }

    /**
     * Gets sent_confirmed_amount
     *
     * @return \CryptoAPIs\Model\GetWalletAssetDetailsRISentConfirmedAmount
     */
    public function getSentConfirmedAmount()
    {
        return $this->container['sent_confirmed_amount'];
    }

    /**
     * Sets sent_confirmed_amount
     *
     * @param \CryptoAPIs\Model\GetWalletAssetDetailsRISentConfirmedAmount $sent_confirmed_amount sent_confirmed_amount
     *
     * @return self
     */
    public function setSentConfirmedAmount($sent_confirmed_amount)
    {
        $this->container['sent_confirmed_amount'] = $sent_confirmed_amount;

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


