# # AccessUpgradeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **mixed** | Whether the upgrade was successful | [optional]
**upgraded** | **mixed** | Whether the access level was actually upgraded (false if already at max) | [optional]
**previous_access_level** | **mixed** | The previous access level | [optional]
**new_access_level** | **mixed** | The new access level after upgrade | [optional]
**new_score** | **mixed** | The new match score after adding additional fields | [optional]
**message** | **mixed** | User-friendly message | [optional]
**error_code** | **mixed** | Error code if the operation failed | [optional]
**suggested_fields** | **mixed** | Suggested fields to provide if score is still below threshold | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
