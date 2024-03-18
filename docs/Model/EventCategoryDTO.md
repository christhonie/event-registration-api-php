# # EventCategoryDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** |  |
**min_age** | **int** | Override minimum allowed age for this category. Leave blank if not applicable. | [optional]
**max_age** | **int** | Override maximum allowed age for this category. Leave blank if not applicable. | [optional]
**gender** | **string** | Override gender restriction for this category. Leave blank if not applicable. | [optional]
**entry_category** | **bool** | Indicate if this category can be used for new entries. | [optional]
**race_category** | **bool** | Indicate if this category can be used in races. | [optional]
**source_category** | [**\Idealogic\RegistrationAPI\Model\CategoryDTO**](CategoryDTO.md) |  | [optional]
**product** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**series_category** | [**\Idealogic\RegistrationAPI\Model\EventCategoryDTO**](EventCategoryDTO.md) |  | [optional]
**feeder_categories** | [**\Idealogic\RegistrationAPI\Model\EventCategoryDTO[]**](EventCategoryDTO.md) |  | [optional]
**series** | [**\Idealogic\RegistrationAPI\Model\SeriesDTO**](SeriesDTO.md) |  | [optional]
**event** | [**\Idealogic\RegistrationAPI\Model\EventDTO**](EventDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
