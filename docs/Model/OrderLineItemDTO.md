# # OrderLineItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**price** | **mixed** |  |
**discount** | **mixed** |  | [optional]
**fee** | **mixed** |  | [optional]
**net** | **mixed** |  | [optional]
**order** | [**\Idealogic\RegistrationAPI\Model\OrderDTO**](OrderDTO.md) |  |
**product** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**person** | [**\Idealogic\RegistrationAPI\Model\PersonNameDTO**](PersonNameDTO.md) | Person linked to this item, if applicable | [optional]
**event_participant** | [**\Idealogic\RegistrationAPI\Model\EventParticipantDTO**](EventParticipantDTO.md) | EventParticipant linked to this item, if applicable | [optional]
**membership** | [**\Idealogic\RegistrationAPI\Model\MembershipDTO**](MembershipDTO.md) | Membership linked to this item, if applicable | [optional]
**number** | [**\Idealogic\RegistrationAPI\Model\RaceNumberDTO**](RaceNumberDTO.md) | Number linked to this item, if applicable | [optional]
**tag** | [**\Idealogic\RegistrationAPI\Model\TagDTO**](TagDTO.md) | Tag linked to this item, if applicable | [optional]
**description** | **mixed** | Product name or membership type | [optional]
**person_name** | **mixed** | Person this line item is for | [optional]
**unit_price** | **mixed** | Unit price for this line item | [optional]
**total_price** | **mixed** | Total price for this line item (quantity * unitPrice) | [optional]
**assigned_number** | **mixed** | Assigned number resolved from linked Membership or EventParticipant | [optional]
**withdrawn_at** | **mixed** | When a refund took the line out of the sale; null while it is in the sale. Set only by a refund. | [optional]
**add_on** | **mixed** | True when the line sells an add-on bought for an entry (a race number, a tag, a day licence) rather than the entry itself; withdrawing it leaves the participant entered. Read-only, set on the order detail. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
