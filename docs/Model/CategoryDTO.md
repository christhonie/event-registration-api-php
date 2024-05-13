# # CategoryDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** |  |
**min_age** | **int** | Minimum allowed age for this category. Leave blank if not applicable. | [optional]
**max_age** | **int** | Maximum allowed age for this category. Leave blank if not applicable. | [optional]
**gender** | **string** | Gender restriction for this category. Leave blank if not applicable. | [optional]
**owner_organisation** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) |  | [optional]
**disciplines** | [**\Idealogic\RegistrationAPI\Model\DisciplineDTO[]**](DisciplineDTO.md) |  | [optional]
**feeder_categories** | [**\Idealogic\RegistrationAPI\Model\CategoryDTO[]**](CategoryDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
