# # ScanRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number_ids** | **mixed** |  |
**batch_id** | **mixed** | The session: an OPEN batch of type RETURN or STOCK_TAKE. Omit it to scan into the open RETURN batch, opened on the first scan when there is none; type must then be RETURN. The response echoes the batch, so later scans of the session pass it. | [optional]
**type** | **mixed** | RETURN or STOCK_TAKE. Required when batchId is omitted, and then only RETURN is accepted: a stock take is opened beforehand with its number types. With a batchId it is optional and, when given, must match the batch&#39;s type. | [optional]
**note** | **mixed** | Free-form note recorded on the rows the scan writes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
