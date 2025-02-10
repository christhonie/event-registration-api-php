# # SeriesDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** |  |
**csa_membership_required** | **bool** | Should CSA Membership checking be enabled for this series? |
**csa_license_required** | **bool** | Should CSA License checking be enabled for this series? |
**csa_strict_registration** | **bool** | Set to TRUE if CSA membership and license checking cannot be skipped during registration. |
**csa_day_license_disallow** | **bool** | Set to TRUE to disapply CSA day licenses for events in this series. |
**form_id** | **int** | Set the Person questionnaire form to be used during registration. | [optional]
**product_mode** | **string** | Determines how category products will be handled. | [optional]
**custom_list1_required** | **bool** |  |
**custom_list2_required** | **bool** |  |
**custom_list3_required** | **bool** |  |
**custom_list1_name** | **string** |  | [optional]
**custom_list2_name** | **string** |  | [optional]
**custom_list3_name** | **string** |  | [optional]
**number_type** | [**\Idealogic\RegistrationAPI\Model\NumberTypeDTO**](NumberTypeDTO.md) |  | [optional]
**tag_type** | [**\Idealogic\RegistrationAPI\Model\TagTypeDTO**](TagTypeDTO.md) |  | [optional]
**sanctioning_organisation** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) |  |
**organiser** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) |  |
**series_product_default** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**product_default** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**product_number_add** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**product_number_first** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**product_tag_add** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**product_tag_first** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**custom_list1** | [**\Idealogic\RegistrationAPI\Model\CustomListDTO**](CustomListDTO.md) |  | [optional]
**custom_list2** | [**\Idealogic\RegistrationAPI\Model\CustomListDTO**](CustomListDTO.md) |  | [optional]
**custom_list3** | [**\Idealogic\RegistrationAPI\Model\CustomListDTO**](CustomListDTO.md) |  | [optional]
**enrol_process** | [**\Idealogic\RegistrationAPI\Model\ProcessDefinitionDTO**](ProcessDefinitionDTO.md) |  | [optional]
**disciplines** | [**\Idealogic\RegistrationAPI\Model\DisciplineDTO[]**](DisciplineDTO.md) | Disciplines used by the series. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
