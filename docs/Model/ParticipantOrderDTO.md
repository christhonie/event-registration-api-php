# # ParticipantOrderDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**number** | **string** |  |
**external_id** | **string** | Foreign key to external order module | [optional]
**status** | **string** |  | [optional]
**organisation** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) |  | [optional]
**email** | **string** | Email of the buyer. | [optional]
**event_participants** | [**\Idealogic\RegistrationAPI\Model\EventParticipantDTO[]**](EventParticipantDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
