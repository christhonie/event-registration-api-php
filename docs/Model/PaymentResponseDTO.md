# # PaymentResponseDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_method** | [**\Idealogic\RegistrationAPI\Model\PaymentMethod**](PaymentMethod.md) | Selected payment method |
**payment_url** | **mixed** | Payment URL for online payments | [optional]
**external_order_id** | **mixed** | External order ID from payment processor | [optional]
**reference_code** | **mixed** | Reference code for EFT and manual payments | [optional]
**banking_details** | [**\Idealogic\RegistrationAPI\Model\BankingDetailsDTO**](BankingDetailsDTO.md) | Banking details for EFT payments | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
