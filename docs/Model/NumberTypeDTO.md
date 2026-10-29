# # NumberTypeDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **mixed** |  | [optional]
**description** | **mixed** |  | [optional]
**format** | **mixed** | Pattern for the face value of a minted number: exactly one &#x60;#&#x60;, replaced by the sequence, so &#x60;HNR-#-26&#x60; mints &#x60;HNR-731-26&#x60;. Null mints the plain sequence. The pattern plus the sequence must fit the 10-character number column. | [optional]
**virtual** | **mixed** | True when numbers of this type are minted by the system rather than loaded as physical stock. Omitted on update keeps the stored value. | [optional]
**last_created_sequence** | **mixed** | Watermark: the sequence of the last number the batch job minted. Only the batch job moves it; it is ignored on write. | [optional] [readonly]
**valid_from** | **mixed** | The default and earliest date numbers of this type can be valid. |
**valid_to** | **mixed** | The default and latest date numbers of this type can be valid. Leave blank to leave unconstrained. | [optional]
**parent** | [**\Idealogic\RegistrationAPI\Model\NumberTypeDTO**](NumberTypeDTO.md) | Set Parent to indicate a number subtype | [optional]
**organisation** | [**\Idealogic\RegistrationAPI\Model\OrganisationDTO**](OrganisationDTO.md) | The organisation that owns this number type. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
