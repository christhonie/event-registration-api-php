# # CreateOperationalBatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **mixed** |  |
**type** | **mixed** | Batch type: STOCK_TAKE, PRINT_BATCH, RETURN, FLAG_UNFIT, DISPOSE, IMPORT. |
**event_id** | **mixed** | Optional event scope. Required for PRINT_BATCH — envelope printing is per-event. | [optional]
**description** | **mixed** |  | [optional]
**full_mode** | **mixed** | STOCK_TAKE only: when true, snapshot every IN_STOCK race_number in scope at open-time and flip unscanned-but-expected rows to ISSUED on close (US #777). Defaults to false. Setting true for any non-STOCK_TAKE type is a 400. | [optional]
**number_type_id** | **mixed** | STOCK_TAKE full-mode: the one NumberType to stock-take. Kept for clients that send a single type; numberTypeIds supersedes it, and the two are combined when both are sent. | [optional]
**number_type_ids** | **mixed** | STOCK_TAKE full-mode: the NumberTypes to stock-take. At least one is required when fullMode is true; every type must be visible to the caller and all must belong to one organisation. The open-time snapshot covers IN_STOCK numbers of exactly these types. | [optional]
**full_mode_requested** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
