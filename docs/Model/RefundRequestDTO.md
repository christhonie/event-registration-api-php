# # RefundRequestDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **mixed** | Money returned, from zero up to the smaller of what has been paid and the total line reduction. Zero is a waiver: the lines change and no payment is recorded. |
**processor_id** | **mixed** | The processor the money is returned from. Required when the amount is above zero. | [optional]
**received_at** | **mixed** | When the money was returned (UTC). Defaults to now. | [optional]
**reference** | **mixed** | The reference for the money returned, such as the provider&#39;s refund transaction ID. | [optional]
**reason** | **mixed** | Why the refund is given. |
**lines** | **mixed** | The lines to change; at least one, each at most once. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
