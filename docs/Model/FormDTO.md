# # FormDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**process_id** | **mixed** |  |
**process_state** | **mixed** |  | [optional]
**people** | **mixed** |  | [optional]
**payment_methods** | **mixed** | Payment method codes the registration link allowed, comma-separated: O online, E EFT, M pay at counter (the link&#39;s ?paymentMethods&#x3D; value, e.g. \&quot;M\&quot; for the walk-in QR code). Optional; absent means no restriction. Recorded on the order when it is created; the methods offered are the registration system&#39;s intersected with these. Unknown codes are ignored. US #1526. | [optional]
**step** | **mixed** |  | [optional]
**phase** | **mixed** |  | [optional]
**title** | **mixed** |  | [optional]
**description** | **mixed** |  | [optional]
**message** | **mixed** |  | [optional]
**info_url** | **mixed** |  | [optional]
**order_id** | **mixed** |  | [optional]
**question_type** | **mixed** |  | [optional]
**required** | **mixed** |  | [optional]
**common_answer** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
