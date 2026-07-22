# # EventCategoryDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**name** | **mixed** |  |
**min_age** | **mixed** | Effective minimum allowed age — cascaded from seriesCategory or sourceCategory if not set locally. Set null on write to clear the local override and re-inherit. | [optional]
**max_age** | **mixed** | Effective maximum allowed age — cascaded from seriesCategory or sourceCategory if not set locally. Set null on write to clear the local override and re-inherit. | [optional]
**gender** | **mixed** | Effective gender restriction — cascaded from seriesCategory or sourceCategory if not set locally. Set null on write to clear the local override and re-inherit. | [optional]
**entry_category** | **mixed** | Effective entry-allowed flag — cascaded from seriesCategory if not set locally. Null means no inherited policy. | [optional]
**race_category** | **mixed** | Effective race-allowed flag — cascaded from seriesCategory if not set locally. Null means no inherited policy. | [optional]
**source_category** | **mixed** | Effective sourceCategory — the organisational Category template. On an event-level row this cascades from seriesCategory.sourceCategory if not set locally. The parentage rule forbids setting both sourceCategory and seriesCategory on the same event-level row. | [optional]
**product** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | Effective product — cascaded from seriesCategory if not set locally. Used when creating an entry based on this category. | [optional]
**series_category** | [**\Idealogic\RegistrationAPI\Model\EventCategoryDTO**](EventCategoryDTO.md) | If this is an Event category, this is the underlying Series category it is based on. | [optional]
**feeder_categories** | **mixed** | Event Categories that feed into this event. Only applicable for race categories (raceCategory &#x3D; true) and where sourceCategories are not set (thus ad-hoc EventCategories). | [optional]
**series** | [**\Idealogic\RegistrationAPI\Model\SeriesDTO**](SeriesDTO.md) |  | [optional]
**event** | **mixed** | An event is a collection of one or more races (activities) are held on a day or series of days. | [optional]
**target_categories** | **mixed** |  | [optional]
**name_local** | **mixed** | Raw name column (null &#x3D; inherited from seriesCategory or sourceCategory). | [optional] [readonly]
**name_origin** | **mixed** | Where the effective name value came from. | [optional] [readonly]
**min_age_local** | **mixed** | Raw minAge column (null &#x3D; inherited). | [optional] [readonly]
**min_age_origin** | **mixed** | Where the effective minAge value came from. | [optional] [readonly]
**max_age_local** | **mixed** | Raw maxAge column (null &#x3D; inherited). | [optional] [readonly]
**max_age_origin** | **mixed** | Where the effective maxAge value came from. | [optional] [readonly]
**gender_local** | **mixed** | Raw gender column (null &#x3D; inherited; distinct from UNKNOWN which is a legitimate value). | [optional] [readonly]
**gender_origin** | **mixed** | Where the effective gender value came from. | [optional] [readonly]
**entry_category_local** | **mixed** | Raw entryCategory column (null &#x3D; no inherited policy). | [optional] [readonly]
**entry_category_origin** | **mixed** | Where the effective entryCategory policy came from. | [optional] [readonly]
**race_category_local** | **mixed** | Raw raceCategory column (null &#x3D; no inherited policy). | [optional] [readonly]
**race_category_origin** | **mixed** | Where the effective raceCategory policy came from. | [optional] [readonly]
**source_category_local** | [**\Idealogic\RegistrationAPI\Model\CategoryDTO**](CategoryDTO.md) | Raw sourceCategory FK (null &#x3D; inherited from seriesCategory; never both set on an event-level row). | [optional] [readonly]
**source_category_origin** | **mixed** | Where the effective sourceCategory came from. | [optional] [readonly]
**product_local** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | Raw product FK (null &#x3D; inherited from seriesCategory). | [optional] [readonly]
**product_origin** | **mixed** | Where the effective product came from. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
