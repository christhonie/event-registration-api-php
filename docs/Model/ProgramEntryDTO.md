# # ProgramEntryDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**name** | **mixed** |  |
**type** | **mixed** |  |
**session** | **mixed** | For multi-day events this refers to the day number, where the first day is day 1. | [optional]
**event_reference_number** | **mixed** | The numeric reference of the event for display purposes. | [optional]
**active** | **mixed** | To remove the entry from the program it can be set as disabled. | [optional]
**seq** | **mixed** | The sequence of this event within the overall event program. | [optional]
**date_time** | **mixed** |  | [optional]
**next** | **mixed** | The next related event in the program, i.e. for multi-round races. | [optional]
**prev** | **mixed** | The previous related event in the program, i.e. for multi-round races. | [optional]
**event** | [**\Idealogic\RegistrationAPI\Model\EventDTO**](EventDTO.md) | The Event this ProgramEntry item is related to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
