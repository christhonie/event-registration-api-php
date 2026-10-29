# # RaceNumberStockBreakdownRowDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type_id** | **mixed** |  | [optional]
**type_name** | **mixed** |  | [optional]
**type_virtual** | **mixed** | Whether the type is virtual: minted numbers that are never handed over physically, so issue, return, stock take, flag-unfit and dispose do not apply to them (ADO #1491). | [optional]
**sub_type_id** | **mixed** |  | [optional]
**sub_type_name** | **mixed** |  | [optional]
**counts** | **array<string,mixed>** | Per-state row counts, zero-filled over the five T02 states (IN_STOCK, ISSUED, IN_USE, UNFIT_FOR_SERVICE, DESTROYED). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
