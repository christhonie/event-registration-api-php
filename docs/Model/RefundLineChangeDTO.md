# # RefundLineChangeDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_id** | **mixed** | The order line to change. |
**action** | **mixed** | WITHDRAW takes the line out of the sale: the entry withdraws, or the membership is cancelled; an add-on bought for an entry (race number, tag, day licence) leaves on its own. REDUCE keeps it in the sale at reduceTo. |
**reduce_to** | **mixed** | For REDUCE, what the line charges afterwards: from zero up to, not including, what it charges now. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
