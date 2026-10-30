# # ProcessorFeeRateDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**processor_id** | **mixed** | The processor the rate belongs to; taken from the request path. | [optional] [readonly]
**effective_from** | **mixed** | First day the rate applies. On a change, the day the successor takes over. |
**effective_to** | **mixed** | Last day the rate applies; empty while it is open-ended. Ignored on a change, whose successor keeps the old rate&#39;s end. | [optional]
**fixed_amount** | **mixed** | Per transaction, for example 2.00. |
**percentage** | **mixed** | Of the transaction amount, in percent: 3.5 is 3.5%. |
**combination** | **mixed** | SUM: fixed amount plus percentage. GREATER_OF: the greater of the two. |
**minimum** | **mixed** | Least fee charged; empty for none. | [optional]
**cap** | **mixed** | Most fee charged; empty for none. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
