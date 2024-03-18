# # EventDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** |  |
**venue** | **string** |  | [optional]
**address** | **string** |  | [optional]
**city** | **string** |  | [optional]
**postal_code** | **string** |  | [optional]
**province** | **string** |  | [optional]
**country** | **string** |  | [optional]
**latitude** | **float** |  | [optional]
**longitude** | **float** |  | [optional]
**contact_email** | **string** |  | [optional]
**contact_name** | **string** |  | [optional]
**contact_url** | **string** |  | [optional]
**timezone** | **string** |  |
**start_date_time** | **\DateTime** |  |
**end_date_time** | **\DateTime** |  |
**all_day** | **bool** |  |
**ticket_url** | **string** |  | [optional]
**cost** | **string** |  | [optional]
**result_time_rounding** | **int** |  | [optional]
**mobii_race_id** | **string** |  | [optional]
**calendar_type** | **string** | Product/component used to visualise the calendar listing. | [optional]
**csa_membership_required** | **bool** | Should CSA Membership checking be enabled for this event? If set it overrides the value set in the Series. |
**csa_license_required** | **bool** | Should CSA License checking be enabled for this event? If set it overrides the value set in the Series. |
**csa_strict_registration** | **bool** | Set to TRUE if CSA membership and license checking cannot be skipped during registration. If set it overrides the value set in the Series. |
**csa_day_license_disallow** | **bool** | Set to TRUE to disapply CSA day licenses for this event. If set it overrides the value set in the Series. |
**form_id** | **int** | Set the Person questionnaire form to be used during registration. If set it overrides the value set in the Series. | [optional]
**product_mode** | **string** | Determines how category products will be handled. If set it overrides the value set in the Series. | [optional]
**number_type** | [**\Idealogic\RegistrationAPI\Model\NumberTypeDTO**](NumberTypeDTO.md) |  | [optional]
**tag_type** | [**\Idealogic\RegistrationAPI\Model\TagTypeDTO**](TagTypeDTO.md) |  | [optional]
**series** | [**\Idealogic\RegistrationAPI\Model\SeriesDTO**](SeriesDTO.md) |  | [optional]
**sanctioning_organisation** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) |  | [optional]
**organiser** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) |  | [optional]
**product_default** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**product_number_add** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**product_number_first** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**product_tag_add** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**product_tag_first** | [**\Idealogic\RegistrationAPI\Model\ProductDTO**](ProductDTO.md) |  | [optional]
**categories** | [**\Idealogic\RegistrationAPI\Model\EventCategoryDTO[]**](EventCategoryDTO.md) | Categories used by the event. | [optional]
**diciplines** | [**\Idealogic\RegistrationAPI\Model\DisciplineDTO[]**](DisciplineDTO.md) |  | [optional]
**race_types** | [**\Idealogic\RegistrationAPI\Model\RaceTypeDTO[]**](RaceTypeDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
