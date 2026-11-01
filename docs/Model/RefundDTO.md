# # RefundDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**order_id** | **mixed** |  | [optional]
**reason** | **mixed** |  | [optional]
**amount** | **mixed** | Money returned; zero for a waiver. | [optional]
**payment** | [**\Idealogic\RegistrationAPI\Model\PaymentDTO**](PaymentDTO.md) | The negative payment that returned the money; null for a waiver. | [optional]
**lines** | **mixed** |  | [optional]
**recorded_by** | **mixed** | Who applied it. | [optional]
**recorded_at** | **mixed** |  | [optional]
**order_status** | **mixed** | The order&#39;s status once the refund is applied. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
