# # SettlementDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**due** | **mixed** | What the order&#39;s active lines charge, each after its own discount. | [optional]
**paid** | **mixed** | The sum of the order&#39;s payments, refunds being negative. | [optional]
**outstanding** | **mixed** | What is still owed; zero once paid in full. | [optional]
**credit** | **mixed** | Paid beyond what is due: the payer&#39;s credit until it is refunded, transferred or kept. | [optional]
**active_lines** | **mixed** | How many of the order&#39;s lines are still in the sale. | [optional]
**status** | **mixed** |  | [optional]
**accepted_on_account_by** | **mixed** | Who accepted the order on account (US #1201); null unless accepted. Its sale is then owed without a payment. | [optional]
**accepted_on_account_at** | **mixed** | When the order was accepted on account (UTC); null unless accepted. | [optional]
**accepted_on_account_reason** | **mixed** | Why the order was accepted on account. | [optional]
**accepted_on_account_reference** | **mixed** | The invoice or other reference given when the order was accepted on account, if any. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
