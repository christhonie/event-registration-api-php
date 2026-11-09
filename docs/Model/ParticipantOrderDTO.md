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
**buyer** | [**\Idealogic\RegistrationAPI\Model\PersonNameDTO**](PersonNameDTO.md) | The buyer. Read: the principal&#39;s name. On a storefront sync: the billing name, recorded on the principal where blank. Never changes which principal the order belongs to. | [optional]
**registration_system** | [**\Idealogic\RegistrationAPI\Model\RegistrationSystemDTO**](RegistrationSystemDTO.md) |  | [optional]
**admin_order_url** | **mixed** | The order in its store&#39;s admin, e.g. WooCommerce. Worked out by the server from the registration system&#39;s admin order URL template and the order&#39;s external id; absent when either is missing. | [optional] [readonly]
**line_items** | **mixed** | Line items in this order | [optional]
**total_amount** | **mixed** | Total amount for the order | [optional]
**discount** | **mixed** | Order-level coupon discount total | [optional]
**refund_amount** | **mixed** | Cumulative refund amount | [optional]
**available_payment_methods** | **mixed** | Available payment methods for this order | [optional]
**reference_code** | **mixed** | Reference code for EFT and manual payments | [optional]
**event_participants** | **mixed** |  | [optional]
**gateway_payment** | [**\Idealogic\RegistrationAPI\Model\GatewayPaymentDTO**](GatewayPaymentDTO.md) | The payment that settled the order, sent by the storefront on a sync of a paid order (US #1527). | [optional]
**gateway_refund** | [**\Idealogic\RegistrationAPI\Model\GatewayRefundDTO**](GatewayRefundDTO.md) | A refund made in the storefront, sent on the sync it triggers (US #1527). Logged only. | [optional]
**buyer_phone** | **mixed** | The buyer&#39;s phone number from the storefront&#39;s billing form, sent on the order sync (US #985). Recorded on the principal if it holds none; the buyer&#39;s name travels in buyer.firstName and buyer.lastName. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
