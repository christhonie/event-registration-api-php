# # ParticipantOrderDTO

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
**payment_amount** | **mixed** |  | [optional]
**cancel_date_time** | **mixed** |  | [optional]
**organisation** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) |  |
**buyer** | [**\Idealogic\RegistrationAPI\Model\PersonNameDTO**](PersonNameDTO.md) |  | [optional]
**registration_system** | [**\Idealogic\RegistrationAPI\Model\RegistrationSystemDTO**](RegistrationSystemDTO.md) |  | [optional]
**line_items** | **mixed** | Line items in this order | [optional]
**total_amount** | **mixed** | Total amount for the order | [optional]
**discount** | **mixed** | Order-level coupon discount total | [optional]
**refund_amount** | **mixed** | Cumulative refund amount | [optional]
**available_payment_methods** | **mixed** | Available payment methods for this order | [optional]
**reference_code** | **mixed** | Reference code for EFT and manual payments | [optional]
**event_participants** | **mixed** |  | [optional]
**gateway_payment** | [**\Idealogic\RegistrationAPI\Model\GatewayPaymentDTO**](GatewayPaymentDTO.md) | The payment that settled the order, sent by the storefront on a sync of a paid order (US #1527). | [optional]
**gateway_refund** | [**\Idealogic\RegistrationAPI\Model\GatewayRefundDTO**](GatewayRefundDTO.md) | A refund made in the storefront, sent on the sync it triggers (US #1527). Logged only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
