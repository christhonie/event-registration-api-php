# # EventParticipantRegistrationDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_methods** | **mixed** | Payment method codes the registration link allowed, comma-separated: O online, E EFT, M pay at counter (the link&#39;s ?paymentMethods&#x3D; value, e.g. \&quot;M\&quot; for the walk-in QR code). Optional; absent means no restriction. Recorded on the order when it is created; the methods offered are the registration system&#39;s intersected with these. Unknown codes are ignored. US #1526. | [optional]
**event** | [**\Idealogic\RegistrationAPI\Model\EventDTO**](EventDTO.md) |  | [optional]
**participants** | **mixed** |  | [optional]
**order** | [**\Idealogic\RegistrationAPI\Model\OrderDTO**](OrderDTO.md) |  | [optional]
**phase** | **mixed** |  | [optional]
**title** | **mixed** |  | [optional]
**message** | **mixed** |  | [optional]
**info_url** | **mixed** |  | [optional]
**question_type** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
