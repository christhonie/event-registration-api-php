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
**organisation_id** | **mixed** |  | [optional]
**opened_by** | **mixed** | Who opened the batch, as stored: a signed-in user&#39;s subject (identity-provider object id), an API key&#39;s audit label (api-key:&lt;description&gt;), or null. Prefer openedByDisplayName for display. | [optional]
**opened_by_display_name** | **mixed** | Display name of whoever opened the batch: the person a user subject resolves to, or an API key&#39;s audit label as stored. Null when openedBy is null or resolves to no person. | [optional]
**opened_on** | **mixed** |  |
**closed_by** | **mixed** | Who closed or cancelled the batch, stored as openedBy is. Prefer closedByDisplayName for display. | [optional]
**closed_by_display_name** | **mixed** | Display name of whoever closed or cancelled the batch, resolved as openedByDisplayName is. | [optional]
**closed_on** | **mixed** |  | [optional]
**description** | **mixed** |  | [optional]
**full_mode** | **mixed** | STOCK_TAKE full-mode flag (US #777). Drives open-time member snapshot and close-time missing flip. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
