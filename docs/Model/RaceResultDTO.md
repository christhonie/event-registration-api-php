# # RaceResultDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**position** | **mixed** | Position in the race. First place will be 1, followed by second as 2, etc. | [optional]
**duration_milli_second** | **mixed** | For duration based outcomes this indicates the duration underpinning the result. | [optional]
**laps** | **mixed** | Number of laps completed. Optional. | [optional]
**points** | **mixed** | For points based outcomes this indicates the points underpinning the result. | [optional]
**status** | **mixed** |  | [optional]
**person** | [**\Idealogic\RegistrationAPI\Model\PersonNameDTO**](PersonNameDTO.md) |  | [optional]
**event_participant** | [**\Idealogic\RegistrationAPI\Model\EventParticipantDTO**](EventParticipantDTO.md) |  | [optional]
**start_group_participant** | [**\Idealogic\RegistrationAPI\Model\StartGroupParticipantDTO**](StartGroupParticipantDTO.md) |  | [optional]
**custom1** | [**\Idealogic\RegistrationAPI\Model\CustomListValueDTO**](CustomListValueDTO.md) |  | [optional]
**custom2** | [**\Idealogic\RegistrationAPI\Model\CustomListValueDTO**](CustomListValueDTO.md) |  | [optional]
**custom3** | [**\Idealogic\RegistrationAPI\Model\CustomListValueDTO**](CustomListValueDTO.md) |  | [optional]
**result_set** | [**\Idealogic\RegistrationAPI\Model\ResultSetDTO**](ResultSetDTO.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
