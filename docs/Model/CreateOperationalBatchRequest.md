# # CreateOperationalBatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **mixed** |  |
**type** | **mixed** | Batch type: STOCK_TAKE, PRINT_BATCH, RETURN, FLAG_UNFIT, DISPOSE, IMPORT. |
**event_id** | **mixed** | Optional event scope. Required for PRINT_BATCH — envelope printing is per-event. | [optional]
**description** | **mixed** |  | [optional]
**full_mode** | **mixed** | Implied by STOCK_TAKE, so callers can stop sending it: a stock take is always full, snapshotting every IN_STOCK race_number of its number types at open-time and flipping unscanned-but-expected rows to ISSUED on close. Omitted or true on a STOCK_TAKE is a full stock take; false on a STOCK_TAKE is a 400, as is true on any other type. To be removed from the API. | [optional]
**number_type_id** | **mixed** | STOCK_TAKE: the one NumberType to stock-take. Kept for clients that send a single type; numberTypeIds supersedes it, and the two are combined when both are sent. | [optional]
**number_type_ids** | **mixed** | STOCK_TAKE: the NumberTypes to stock-take. At least one is required for a STOCK_TAKE; every type must be visible to the caller and all must belong to one organisation. The open-time snapshot covers IN_STOCK numbers of exactly these types. | [optional]
**full_mode_requested** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
