# # RoundDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**name** | **mixed** |  | [optional]
**seq** | **mixed** | The round sequence in the Race. |
**min_entries** | **mixed** | Configuration: Minimum number of entries required to host this round. | [optional]
**max_entries** | **mixed** | Configuration: Maximum number of entries for this round. | [optional]
**distance_meters** | **mixed** | Distance of this round if different from Race. | [optional]
**duration_seconds** | **mixed** | Duration of this race. This is an estimation prior to the race and the actual after the race. | [optional]
**start_time** | **mixed** | Scheduled or actual start of the race. | [optional]
**active** | **mixed** | Indicate if this race is going to happen or has happened. |
**status** | **mixed** | Race lifecycle status. |
**end_time** | **mixed** | Time when timing for the group ended. | [optional]
**finish_time** | **mixed** | Time when the first participant in this group finished. | [optional]
**finish_duration_milli_seconds** | **mixed** | The race duration in milli seconds of the fastest Participant in this group. | [optional]
**race** | [**\Idealogic\RegistrationAPI\Model\RaceDTO**](RaceDTO.md) | The Race this round is associated with. |
**round_type** | [**\Idealogic\RegistrationAPI\Model\RoundTypeDTO**](RoundTypeDTO.md) | Configuration defining this round instance. |
**parent** | **mixed** | Used to create child rounds. | [optional]
**prev_round** | **mixed** | The previous round in this Race. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
