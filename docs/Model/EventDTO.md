# # EventDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **mixed** |  |
**venue** | **mixed** |  | [optional]
**address** | **mixed** |  | [optional]
**city** | **mixed** |  | [optional]
**postal_code** | **mixed** |  | [optional]
**province** | **mixed** |  | [optional]
**country** | **mixed** |  | [optional]
**latitude** | **float** |  | [optional]
**longitude** | **float** |  | [optional]
**contact_email** | **mixed** |  | [optional]
**contact_name** | **mixed** |  | [optional]
**contact_url** | **mixed** |  | [optional]
**timezone** | **mixed** |  |
**start_date_time** | **\DateTime** |  |
**end_date_time** | **\DateTime** |  |
**all_day** | **bool** |  |
**ticket_url** | **mixed** |  | [optional]
**cost** | **mixed** |  | [optional]
**result_time_rounding** | **int** |  | [optional]
**mobii_race_id** | **mixed** |  | [optional]
**calendar_type** | **mixed** | Product/component used to visualise the calendar listing. | [optional]
**csa_membership_required** | **mixed** | Should CSA Membership checking be enabled for this event? If set it overrides the value set in the Series. |
**csa_license_required** | **mixed** | Should CSA License checking be enabled for this event? If set it overrides the value set in the Series. |
**csa_strict_registration** | **mixed** | Set to TRUE if CSA membership and license checking cannot be skipped during registration. If set it overrides the value set in the Series. |
**csa_day_license_disallow** | **mixed** | Set to TRUE to disapply CSA day licenses for this event. If set it overrides the value set in the Series. |
**form_id** | **mixed** | Set the Person questionnaire form to be used during registration. If set it overrides the value set in the Series. | [optional]
**product_mode** | **mixed** | Determines how category products will be handled. If set it overrides the value set in the Series. | [optional]
**custom_list1_required** | **bool** |  |
**custom_list2_required** | **bool** |  |
**custom_list3_required** | **bool** |  |
**custom_list1_name** | **mixed** |  | [optional]
**custom_list2_name** | **mixed** |  | [optional]
**custom_list3_name** | **mixed** |  | [optional]
**number_type** | [**\Idealogic\RegistrationAPI\Model\NumberTypeDTO**](NumberTypeDTO.md) |  | [optional]
**tag_type** | [**\Idealogic\RegistrationAPI\Model\TagTypeDTO**](TagTypeDTO.md) |  | [optional]
**series** | [**\Idealogic\RegistrationAPI\Model\SeriesDTO**](SeriesDTO.md) |  | [optional]
**sanctioning_organisation** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) |  |
**organiser** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) |  |
**product_default** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | The default Product to apply when entering for the event. If set it overrides the value set in the Series. | [optional]
**product_number_add** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | The product to use when adding an additional number. If set it overrides the value set in the Series. | [optional]
**product_number_first** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | The product to use when adding the first number. If set it overrides the value set in the Series. | [optional]
**product_tag_add** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | The product to use when adding an additional tag. If set it overrides the value set in the Series. | [optional]
**product_tag_first** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) | The product to use when adding the first tag. If set it overrides the value set in the Series. | [optional]
**custom_list1** | [**\Idealogic\RegistrationAPI\Model\CustomListDTO**](CustomListDTO.md) | Custom code list 1 - Codes from this list can be used for participant list_1 entries. | [optional]
**custom_list2** | [**\Idealogic\RegistrationAPI\Model\CustomListDTO**](CustomListDTO.md) | Custom code list 2 - Codes from this list can be used for participant list_2 entries. | [optional]
**custom_list3** | [**\Idealogic\RegistrationAPI\Model\CustomListDTO**](CustomListDTO.md) | Custom code list 3 - Codes from this list can be used for participant list_3 entries. | [optional]
**enrol_process** | [**\Idealogic\RegistrationAPI\Model\ProcessDefinitionDTO**](ProcessDefinitionDTO.md) |  | [optional]
**categories** | **mixed** | Categories used by the event. | [optional]
**event_race_types** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
