# # NumberTypeDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**format** | **string** | Format string, using Java String.format() specification, to display the number based on the sequence number. A mandatory %d field has to be provided. | [optional]
**valid_from** | **\DateTime** | The default and earliest date numbers of this type can be valid. |
**valid_to** | **\DateTime** | The default and latest date numbers of this type can be valid. Leave blank to leave unconstrained. | [optional]
**parent** | [**\Idealogic\RegistrationAPI\Model\NumberTypeDTO**](NumberTypeDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
