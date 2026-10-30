# # PaymentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**order_id** | **mixed** |  | [optional]
**processor** | [**\Idealogic\RegistrationAPI\Model\PaymentProcessorDTO**](PaymentProcessorDTO.md) | Where the money landed or was returned from, with its name and type. | [optional]
**amount** | **mixed** | Amount received; negative for a refund. | [optional]
**received_at** | **mixed** | When the money was received or returned (UTC). | [optional]
**reference** | **mixed** | For an online payment, the provider&#39;s transaction ID. | [optional]
**calculated_fee** | **mixed** | Provider fee from the processor&#39;s schedule when the payment was recorded. Zero, with feeReview set, when the processor has no schedule. Null when the provider&#39;s own fee came with the payment, which is then the fee. | [optional]
**fee** | **mixed** | The provider fee: the calculated fee until the provider&#39;s actual figure replaces it. | [optional]
**fee_status** | **mixed** |  | [optional]
**fee_review** | **mixed** | True when the fee could not be worked out, so an operator should look at it. | [optional]
**recorded_by** | **mixed** | Who recorded it, as the audit names them: a user&#39;s login, or an API key&#39;s label, never the key. For display and audit only; it is not a credential, and may be shortened. | [optional]
**recorded_at** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
