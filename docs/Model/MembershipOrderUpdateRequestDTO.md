# # MembershipOrderUpdateRequestDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remove** | **bool** |  | [optional]
**id** | **int** | ID of the Order in this system to update | [optional]
**number** | **string** | Order number, as seen by the user | [optional]
**external_id** | **string** | Order ID in the external system, typically the primary key | [optional]
**status** | **string** | Current status of the order | [optional]
**email** | **string** | Email address associated with the order | [optional]
**line_items** | [**\Idealogic\RegistrationAPI\Model\MembershipOrderLineItemDTO[]**](MembershipOrderLineItemDTO.md) | List of line items in the order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
