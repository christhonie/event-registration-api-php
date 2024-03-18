# # PersonDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** | Dynamic field to display the Person&#39;s name and date of birth. Used for display purposes. | [optional]
**first_name** | **string** |  |
**last_name** | **string** |  |
**title** | **string** |  | [optional]
**identity_number** | **string** | Number associated with the identification type. | [optional]
**identity_type** | **string** | Identificaiton type, such as a national ID or passport. | [optional]
**email** | **string** |  | [optional]
**date_of_birth** | **\DateTime** |  | [optional]
**gender** | **string** |  | [optional]
**contact_number** | **string** | Telephone number. Usually a cellphone number. | [optional]
**language** | **string** | Native language or preferred contact language. | [optional]
**emergency_contact_name** | **string** | Emergency contact persons&#39;s name. | [optional]
**emergency_contact_number** | **string** | Emergency contact person&#39;s contact number. | [optional]
**emergency_relationship** | **string** | Emergency contact person&#39;s relationship to the person. | [optional]
**parent_contact_name** | **string** | Parent or guardian&#39;s name. | [optional]
**parent_contact_number** | **string** | Parent or guardian&#39;s contact number. | [optional]
**parent_contact_email** | **string** | Parent or guardian&#39;s email. | [optional]
**parent_relationship** | **string** | Parent or guardian&#39;s relationship to the person. | [optional]
**parent_type** | **string** | Parent or guardian. | [optional]
**doctor_name** | **string** | Doctor&#39;s name. | [optional]
**doctor_contact_number** | **string** | Doctor&#39;s contact number. | [optional]
**scheme_name** | **string** | Medical scheme name. | [optional]
**scheme_policy_number** | **string** | Medical scheme policy number. | [optional]
**scheme_principal** | **string** | Medical scheme principal member name. | [optional]
**medical_allergies** | **string** |  | [optional]
**medication** | **string** |  | [optional]
**medical_conditions** | **string** |  | [optional]
**identity_country** | [**\Idealogic\RegistrationAPI\Model\CountryDTO**](CountryDTO.md) |  | [optional]
**nationality** | [**\Idealogic\RegistrationAPI\Model\CountryDTO**](CountryDTO.md) |  | [optional]
**school** | **string** |  | [optional]
**user_id** | **string** |  | [optional]
**org_user_id** | **int** |  | [optional]
**validation_errors** | **bool** |  | [optional]
**identity_number_invalid** | **bool** |  | [optional]
**identity_country_invalid** | **bool** |  | [optional]
**date_of_birth_invalid** | **bool** |  | [optional]
**gender_invalid** | **bool** |  | [optional]
**managed_by** | [**\Idealogic\RegistrationAPI\Model\PersonDTO[]**](PersonDTO.md) |  | [optional]
**add_managed_by** | **int** |  | [optional]
**add_managed_by_type** | **string** |  | [optional]
**link_type** | **string** |  | [optional]
**identity_country_code** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
