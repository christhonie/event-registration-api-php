# # NumberTypeDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **mixed** |  | [optional]
**description** | **mixed** |  | [optional]
**format** | **mixed** | Format string, using Java String.format() specification, to display the number based on the sequence number. A mandatory %d field has to be provided. | [optional]
**valid_from** | **mixed** | The default and earliest date numbers of this type can be valid. |
**valid_to** | **mixed** | The default and latest date numbers of this type can be valid. Leave blank to leave unconstrained. | [optional]
**parent** | [**\Idealogic\RegistrationAPI\Model\NumberTypeDTO**](NumberTypeDTO.md) | Set Parent to indicate a number subtype | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
