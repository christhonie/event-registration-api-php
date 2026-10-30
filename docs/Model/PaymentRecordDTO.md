# # PaymentRecordDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**processor_id** | **mixed** | The processor the money landed in, or is returned from. It is also how the payment was made: card at the desk is the card machine, cash is the cash box. |
**amount** | **mixed** | Amount received; negative for a refund. Never zero. |
**received_at** | **mixed** | When the money was received or returned (UTC). Defaults to now. | [optional]
**reference** | **mixed** | For an online processor, the provider&#39;s transaction ID, which may be recorded only once per processor. Otherwise the operator&#39;s reference, such as a bank reference. | [optional]
**fee** | **mixed** | The provider&#39;s own fee for this payment, when it is known now (for example passed by the storefront). Stored as the actual fee. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
