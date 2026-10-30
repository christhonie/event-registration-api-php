# # GlRecordDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**amount** | **mixed** | Amount is positive for debit, negative for credit |
**posted_date** | **mixed** |  |
**account** | [**\Idealogic\RegistrationAPI\Model\GlAccountDTO**](GlAccountDTO.md) |  |
**transaction** | [**\Idealogic\RegistrationAPI\Model\GlTransactionDTO**](GlTransactionDTO.md) |  |
**order_line_item_id** | **mixed** | The order line this posting line is for, if any. | [optional]
**event_id** | **mixed** | The event this posting line concerns, so event and series figures come from the ledger. | [optional]
**counterparty_organisation_id** | **mixed** | The other company, on a line recording a balance with it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
