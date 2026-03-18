# # OrderDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**number** | **mixed** |  |
**external_id** | **mixed** | Foreign key to external order module | [optional]
**status** | **mixed** |  | [optional]
**email** | **mixed** |  | [optional]
**url** | **mixed** |  | [optional]
**transaction_date_time** | **mixed** |  |
**payment_date_time** | **mixed** |  | [optional]
**cancel_date_time** | **mixed** |  | [optional]
**organisation** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) |  |
**buyer** | [**\Idealogic\RegistrationAPI\Model\PersonNameDTO**](PersonNameDTO.md) |  | [optional]
**registration_system** | [**\Idealogic\RegistrationAPI\Model\RegistrationSystemDTO**](RegistrationSystemDTO.md) |  | [optional]
**payment_processor** | [**\Idealogic\RegistrationAPI\Model\PaymentProcessorDTO**](PaymentProcessorDTO.md) |  | [optional]
**line_items** | **mixed** | Line items in this order | [optional]
**total_amount** | **mixed** | Total amount for the order | [optional]
**available_payment_methods** | **mixed** | Available payment methods for this order | [optional]
**reference_code** | **mixed** | Reference code for EFT and manual payments | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
