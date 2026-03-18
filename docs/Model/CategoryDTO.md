# # CategoryDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**name** | **mixed** |  |
**min_age** | **mixed** | Minimum allowed age for this category. Leave blank if not applicable. | [optional]
**max_age** | **mixed** | Maximum allowed age for this category. Leave blank if not applicable. | [optional]
**gender** | **mixed** | Gender restriction for this category. Leave blank if not applicable. | [optional]
**owner_organisation** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) | The organisation controlling this category. For national events this has to be the national organisation. |
**disciplines** | **mixed** | The disciplines where this category is active. | [optional]
**feeder_categories** | **mixed** | Categories that feed into this category. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
