# # PaymentProcessorDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **mixed** |  |
**type** | **mixed** | Online payment provider, card machine, bank account or cash box. The processor is how a payment was made as well as where it landed. |
**organisation** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) | Owner: the organisation whose money the processor holds. |
**active** | **mixed** | False once retired: a retired processor takes no new payments. Defaults to true. | [optional]
**registration_system** | [**\Idealogic\RegistrationAPI\Model\RegistrationSystemDTO**](RegistrationSystemDTO.md) | External key, part 1: the registration system an online processor serves. | [optional]
**gateway_id** | **mixed** | External key, part 2: the payment gateway&#39;s identifier in that registration system. | [optional]
**fee_source** | **mixed** | Where the provider&#39;s actual fees come from: STATEMENT when its statement supersedes the calculated fee, SCHEDULE when the calculated fee is final. Defaults to STATEMENT for an online payment provider and SCHEDULE otherwise. | [optional]
**payout_target** | [**\Idealogic\RegistrationAPI\Model\PaymentProcessorDTO**](PaymentProcessorDTO.md) | The processor this one&#39;s balance is paid out or banked to; only a processor of the same owner. Optional. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
