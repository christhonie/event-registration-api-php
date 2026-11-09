# # MembershipOrderUpdateRequestDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remove** | **mixed** |  | [optional]
**id** | **mixed** | ID of the Order in this system to update | [optional]
**number** | **mixed** | Order number, as seen by the user | [optional]
**external_id** | **mixed** | Order ID in the external system, typically the primary key | [optional]
**status** | **mixed** | Current status of the order | [optional]
**email** | **mixed** | Email address associated with the order: the buyer&#39;s billing email | [optional]
**buyer** | [**\Idealogic\RegistrationAPI\Model\PersonNameDTO**](PersonNameDTO.md) | The buyer&#39;s name from the storefront&#39;s billing form (US #985). Only firstName and lastName are read; recorded on the principal where it holds none. | [optional]
**buyer_phone** | **mixed** | The buyer&#39;s phone number from the storefront&#39;s billing form (US #985). Recorded on the principal if it holds none. | [optional]
**discount** | **mixed** | Order-level coupon discount total | [optional]
**refund_amount** | **mixed** | Cumulative refund amount | [optional]
**payment_date_time** | **mixed** | Date and time the payment was made | [optional]
**payment_amount** | **mixed** | Amount paid | [optional]
**gateway_payment** | [**\Idealogic\RegistrationAPI\Model\GatewayPaymentDTO**](GatewayPaymentDTO.md) | The payment that settled the order, sent by the storefront on a sync of a paid order (US #1527). | [optional]
**gateway_refund** | [**\Idealogic\RegistrationAPI\Model\GatewayRefundDTO**](GatewayRefundDTO.md) | A refund made in the storefront, sent on the sync it triggers (US #1527). Logged only. | [optional]
**line_items** | **mixed** | List of line items in the order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
