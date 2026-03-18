# # RaceDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **mixed** |  | [optional]
**start_time** | **mixed** | Scheduled or actual start of the race. | [optional]
**min_entries** | **mixed** | Configuration: Minimum number of entries required to host this race. | [optional]
**max_entries** | **mixed** | Configuration: Maximum number of entries for this race. | [optional]
**distance_meters** | **mixed** | Distance of this race. | [optional]
**duration_seconds** | **mixed** | Duration of this race. This is an estimation prior to the race and the actual after the race. | [optional]
**active** | **mixed** | Indicate if this race is going to happen or has happened. |
**status** | **mixed** | Race lifecycle status. |
**end_time** | **mixed** | Time when timing for the group ended. | [optional]
**finish_time** | **mixed** | Time when the first participant in this group finished. | [optional]
**finish_duration_milli_seconds** | **mixed** | The race duration in milli seconds of the fastest Participant in this group. | [optional]
**event_race_type** | [**\Idealogic\RegistrationAPI\Model\EventRaceTypeDTO**](EventRaceTypeDTO.md) |  |
**course** | [**\Idealogic\RegistrationAPI\Model\CourseDTO**](CourseDTO.md) |  |
**event_category** | [**\Idealogic\RegistrationAPI\Model\EventCategoryDTO**](EventCategoryDTO.md) |  |
**config** | [**\Idealogic\RegistrationAPI\Model\RaceTypeConfigDTO**](RaceTypeConfigDTO.md) | The configuration to be used for this race | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
