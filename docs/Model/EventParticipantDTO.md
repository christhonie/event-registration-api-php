# # EventParticipantDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** |  | [optional]
**first_name** | **mixed** |  | [optional]
**last_name** | **mixed** |  |
**email** | **mixed** |  | [optional]
**identity_number** | **mixed** |  | [optional]
**identity_type** | **string** |  | [optional]
**identity_country** | **mixed** |  | [optional]
**date_of_birth** | **\DateTime** |  | [optional]
**gender** | **string** |  |
**age** | **mixed** | Age on the first day of the event. | [optional]
**paid** | **bool** |  | [optional]
**confirm_email** | **bool** |  | [optional]
**active** | **bool** |  | [optional]
**override_indicator** | **bool** |  | [optional]
**team_indicator** | **bool** |  | [optional]
**event** | [**\Idealogic\RegistrationAPI\Model\EventDTO**](EventDTO.md) |  |
**series** | [**\Idealogic\RegistrationAPI\Model\SeriesDTO**](SeriesDTO.md) |  | [optional]
**person** | [**\Idealogic\RegistrationAPI\Model\PersonDTO**](PersonDTO.md) |  |
**category** | [**\Idealogic\RegistrationAPI\Model\EventCategoryDTO**](EventCategoryDTO.md) |  |
**team** | **mixed** | In case this is a team members the participant is linked to the team participant entry. | [optional]
**number** | [**\Idealogic\RegistrationAPI\Model\RaceNumberDTO**](RaceNumberDTO.md) |  | [optional]
**tag** | [**\Idealogic\RegistrationAPI\Model\TagDTO**](TagDTO.md) |  | [optional]
**custom1** | [**\Idealogic\RegistrationAPI\Model\CustomListValueDTO**](CustomListValueDTO.md) |  | [optional]
**custom2** | [**\Idealogic\RegistrationAPI\Model\CustomListValueDTO**](CustomListValueDTO.md) |  | [optional]
**custom3** | [**\Idealogic\RegistrationAPI\Model\CustomListValueDTO**](CustomListValueDTO.md) |  | [optional]
**enrol_instance** | [**\Idealogic\RegistrationAPI\Model\ProcessInstanceDTO**](ProcessInstanceDTO.md) |  | [optional]
**orders** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
