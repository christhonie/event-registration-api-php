# # OperationalBatchDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**name** | **mixed** |  |
**type** | **mixed** | Type: STOCK_TAKE (ST), PRINT_BATCH (PB), RETURN (RT), FLAG_UNFIT (FU), DISPOSE (DS), IMPORT (IM). |
**status** | **mixed** | Status: OPEN (O), CLOSED (C), CANCELLED (X). |
**event_id** | **mixed** |  | [optional]
**event_name** | **mixed** |  | [optional]
**opened_by** | **mixed** |  | [optional]
**opened_on** | **mixed** |  |
**closed_by** | **mixed** |  | [optional]
**closed_on** | **mixed** |  | [optional]
**description** | **mixed** |  | [optional]
**full_mode** | **mixed** | STOCK_TAKE full-mode flag (US #777). Drives open-time member snapshot and close-time missing flip. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
