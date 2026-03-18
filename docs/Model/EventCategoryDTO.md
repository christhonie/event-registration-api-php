# # EventCategoryDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**name** | **mixed** |  |
**min_age** | **mixed** | Override minimum allowed age for this category. Leave blank if not applicable. | [optional]
**max_age** | **mixed** | Override maximum allowed age for this category. Leave blank if not applicable. | [optional]
**gender** | **mixed** | Override gender restriction for this category. Leave blank if not applicable. | [optional]
**entry_category** | **mixed** | Indicate if this category can be used for new entries. | [optional]
**race_category** | **mixed** | Indicate if this category can be used in races. | [optional]
**source_category** | **mixed** | The underlying standard category this category is based on. | [optional]
**product** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | The product to use when creating an entry based on this category. | [optional]
**series_category** | [**\Idealogic\RegistrationAPI\Model\EventCategoryDTO**](EventCategoryDTO.md) | If this is an Event category, this is the underlying Series category it is based on. | [optional]
**feeder_categories** | **mixed** | Event Categories that feed into this event. Only applicable for race categories (raceCategory &#x3D; true) and where sourceCategories are not set (thus ad-hoc EventCategories). | [optional]
**series** | [**\Idealogic\RegistrationAPI\Model\SeriesDTO**](SeriesDTO.md) |  | [optional]
**event** | **mixed** | An event is a collection of one or more races (activities) are held on a day or series of days. | [optional]
**target_categories** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
