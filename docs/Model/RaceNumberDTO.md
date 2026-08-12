# # RaceNumberDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**number** | **mixed** |  | [optional]
**colour** | **mixed** |  | [optional]
**additional_info** | **mixed** |  | [optional]
**sequence** | **mixed** | The sequence of this number within the type. | [optional]
**valid_from** | **\DateTime** |  |
**valid_to** | **\DateTime** |  | [optional]
**last_used** | **\DateTime** |  | [optional]
**state** | **mixed** | Lifecycle state: MANUFACTURED (M), IN_STOCK (S), ISSUED (I), IN_USE (U), UNFIT_FOR_SERVICE (F), DESTROYED (D). | [optional]
**type** | [**\Idealogic\RegistrationAPI\Model\NumberTypeDTO**](NumberTypeDTO.md) |  |
**sub_type** | [**\Idealogic\RegistrationAPI\Model\NumberTypeDTO**](NumberTypeDTO.md) |  | [optional]
**person** | [**\Idealogic\RegistrationAPI\Model\PersonNameDTO**](PersonNameDTO.md) |  | [optional]
**tag_id** | **mixed** | Identifier of the paired Tag (WS3 / US #478a). Null when the number has not been paired yet — ~77% of legacy rows by design (see Risk #2 in the WS3 design journal). Read-only on this DTO; pairing happens via the C02 scan UI / manufactured-numbers import. | [optional] [readonly]
**tag_barcode** | **mixed** | Barcode of the paired Tag, derived from tag.tagBarcode.code. Null when the number has not been paired yet. Read-only convenience field for stock-view display; the canonical barcode source remains TagBarcode. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
