# # ProcessInstanceDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**identifier** | **mixed** |  |
**status** | **mixed** |  |
**started_at** | **mixed** |  |
**stopped_at** | **mixed** |  | [optional]
**expire_at** | **mixed** |  | [optional]
**definition** | [**\Idealogic\RegistrationAPI\Model\ProcessDefinitionDTO**](ProcessDefinitionDTO.md) |  |
**current_step** | [**\Idealogic\RegistrationAPI\Model\ProcessStepDTO**](ProcessStepDTO.md) |  | [optional]
**started_by** | [**\Idealogic\RegistrationAPI\Model\OrgUserDTO**](OrgUserDTO.md) |  |
**event** | **mixed** | An event is a collection of one or more races (activities) are held on a day or series of days. | [optional]
**membership_period** | [**\Idealogic\RegistrationAPI\Model\MembershipPeriodDTO**](MembershipPeriodDTO.md) |  | [optional]
**people** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
