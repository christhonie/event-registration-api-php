# # SeriesDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  | [optional]
**name** | **mixed** |  |
**csa_membership_required** | **mixed** | Should CSA Membership checking be enabled for this series? |
**csa_license_required** | **mixed** | Should CSA License checking be enabled for this series? |
**csa_strict_registration** | **mixed** | Set to TRUE if CSA membership and license checking cannot be skipped during registration. |
**csa_day_license_disallow** | **mixed** | Set to TRUE to disapply CSA day licenses for events in this series. |
**form_id** | **mixed** | Set the Person questionnaire form to be used during registration. | [optional]
**product_mode** | **mixed** | Determines how category products will be handled. | [optional]
**custom_list1_required** | **mixed** |  |
**custom_list2_required** | **mixed** |  |
**custom_list3_required** | **mixed** |  |
**custom_list1_name** | **mixed** |  | [optional]
**custom_list2_name** | **mixed** |  | [optional]
**custom_list3_name** | **mixed** |  | [optional]
**number_type** | [**\Idealogic\RegistrationAPI\Model\NumberTypeDTO**](NumberTypeDTO.md) | Default NumberType for the series. | [optional]
**tag_type** | [**\Idealogic\RegistrationAPI\Model\TagTypeDTO**](TagTypeDTO.md) | Default TagType for the series. | [optional]
**sanctioning_organisation** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) | The organisation sanctioning the series. Used to filter the EventCategories. |
**organiser** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) |  |
**series_product_default** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | The Product to apply when entering for the series. | [optional]
**product_default** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | The default Product to apply when entering for any event in the series. | [optional]
**product_number_add** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | The product to use when adding an additional number. | [optional]
**product_number_first** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | The product to use when adding the first number. | [optional]
**product_tag_add** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | The product to use when adding an additional tag. | [optional]
**product_tag_first** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | The product to use when adding the first tag. | [optional]
**custom_list1** | [**\Idealogic\RegistrationAPI\Model\CustomListDTO**](CustomListDTO.md) | Custom code list 1 - Codes from this list can be used for participant list_1 entries. | [optional]
**custom_list2** | [**\Idealogic\RegistrationAPI\Model\CustomListDTO**](CustomListDTO.md) | Custom code list 2 - Codes from this list can be used for participant list_2 entries. | [optional]
**custom_list3** | [**\Idealogic\RegistrationAPI\Model\CustomListDTO**](CustomListDTO.md) | Custom code list 3 - Codes from this list can be used for participant list_3 entries. | [optional]
**enrol_process** | [**\Idealogic\RegistrationAPI\Model\ProcessDefinitionDTO**](ProcessDefinitionDTO.md) |  | [optional]
**disciplines** | **mixed** | Disciplines used by the series. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
