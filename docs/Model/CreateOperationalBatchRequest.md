# # CreateOperationalBatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **mixed** |  |
**type** | **mixed** | Batch type: STOCK_TAKE, PRINT_BATCH, RETURN, FLAG_UNFIT, DISPOSE, IMPORT. |
**event_id** | **mixed** | Optional event scope. Required for PRINT_BATCH — envelope printing is per-event. | [optional]
**description** | **mixed** |  | [optional]
**full_mode** | **mixed** | STOCK_TAKE only: when true, snapshot every IN_STOCK race_number in scope at open-time and flip unscanned-but-expected rows to ISSUED on close (US #777). Defaults to false. Setting true for any non-STOCK_TAKE type is a 400. | [optional]
**number_type_id** | **mixed** | STOCK_TAKE full-mode only: restrict the open-time snapshot to RaceNumbers of this NumberType. Null &#x3D; all NumberTypes in the operator&#39;s tenant scope. | [optional]
**full_mode_requested** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
