# # ProgressiveMatchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **mixed** | The match status | [optional]
**confidence_score** | **mixed** | The confidence score (only for UNIQUE_MATCH) | [optional]
**suggestion** | [**\Idealogic\RegistrationAPI\Model\MaskedSuggestion**](MaskedSuggestion.md) | The masked suggestion (only for UNIQUE_MATCH) | [optional]
**suggested_access_level** | **mixed** | The suggested access level based on score (only for UNIQUE_MATCH) | [optional]
**candidate_count** | **mixed** | Number of candidates found (only for AMBIGUOUS) | [optional]
**message** | **mixed** | User-friendly message | [optional]
**suggested_fields** | **mixed** | Suggested fields to provide for better matching (only for AMBIGUOUS/NO_MATCH) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
