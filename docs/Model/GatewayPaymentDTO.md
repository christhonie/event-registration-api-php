# # GatewayPaymentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gateway_id** | **mixed** | The storefront&#39;s identifier for the gateway, for example payfast or paygate. With the order&#39;s registration system it selects the payment processor the money landed in. | [optional]
**transaction_id** | **mixed** | The provider&#39;s transaction ID. A transaction is recorded once. | [optional]
**paid_at** | **mixed** | When the payment completed (UTC). | [optional]
**amount** | **mixed** | The amount paid. | [optional]
**fee** | **mixed** | The fee the gateway charged, as a positive amount, where the gateway records one. Stored as the actual fee; without it the fee is calculated from the processor&#39;s schedule. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
