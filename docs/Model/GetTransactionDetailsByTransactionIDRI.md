# # GetTransactionDetailsByTransactionIDRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** | Represents the index position of the transaction in the specific block. |
**mined_in_block_hash** | **string** | Represents the hash of the block where this transaction was mined/confirmed for first time. The hash is defined as a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. | [optional]
**mined_in_block_height** | **int** | Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block. | [optional]
**recipients** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIRecipients[]**](GetTransactionDetailsByTransactionIDRIRecipients.md) | Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**senders** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRISenders[]**](GetTransactionDetailsByTransactionIDRISenders.md) | Represents a list of sender addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**transaction_hash** | **string** | Represents the same as &#x60;transactionId&#x60; for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols &#x60;hash&#x60; is different from &#x60;transactionId&#x60; for SegWit transactions. |
**transaction_id** | **string** | Represents the unique identifier of a transaction, i.e. it could be &#x60;transactionId&#x60; in UTXO-based protocols like Bitcoin, and transaction &#x60;hash&#x60; in Ethereum blockchain. |
**fee** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIFee**](GetTransactionDetailsByTransactionIDRIFee.md) |  |
**is_confirmed** | **bool** | Defines whether the transaction is mined/confirmed or not. If it is \&quot;false\&quot;, it means the transaction is still in the Mempool waiting to be included in a block. Value \&quot;true\&quot; means that this transaction is already confirmed and included in a block. |
**blockchain_specific** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBS**](GetTransactionDetailsByTransactionIDRIBS.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
