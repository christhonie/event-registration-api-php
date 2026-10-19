# # CloseBatchResponseDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch** | [**\Idealogic\RegistrationAPI\Model\OperationalBatchDTO**](OperationalBatchDTO.md) |  | [optional]
**line_count** | **mixed** | Count of attached log rows (PRINT_BATCH: manifest line count; null for other types). | [optional]
**missing_count** | **mixed** | Full-mode STOCK_TAKE only: number of expected race_numbers that were never scanned and were flipped IN_STOCK -&gt; ISSUED with reason STOCK_TAKE_MISSED. Null otherwise. | [optional]
**missing_ids** | **mixed** | Full-mode STOCK_TAKE only: the race_number ids that were flipped IN_STOCK -&gt; ISSUED. | [optional]
**already_closed** | **mixed** | True when the batch was already CLOSED before this call: nothing was changed, and a note sent with this call was not recorded. The batch is returned as the earlier close left it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
