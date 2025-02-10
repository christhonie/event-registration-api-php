# # OrderDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**number** | **string** |  |
**external_id** | **string** | Foreign key to external order module | [optional]
**status** | **string** |  | [optional]
**email** | **string** |  | [optional]
**url** | **string** |  | [optional]
**transaction_date_time** | **\DateTime** |  |
**payment_date_time** | **\DateTime** |  | [optional]
**cancel_date_time** | **\DateTime** |  | [optional]
**organisation** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) |  |
**buyer** | [**\Idealogic\RegistrationAPI\Model\PersonNameDTO**](PersonNameDTO.md) |  | [optional]
**registration_system** | [**\Idealogic\RegistrationAPI\Model\RegistrationSystemDTO**](RegistrationSystemDTO.md) |  | [optional]
**payment_processor** | [**\Idealogic\RegistrationAPI\Model\PaymentProcessorDTO**](PaymentProcessorDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
