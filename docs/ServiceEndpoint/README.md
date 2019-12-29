# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 6.0-preview
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Api\EndpointproxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Model\DataSourceBinding(); // \FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Model\DataSourceBinding | Describes the data source to fetch.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->endpointproxyQuery($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointproxyApi->endpointproxyQuery: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://dev.azure.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EndpointproxyApi* | [**endpointproxyQuery**](docs/Api/EndpointproxyApi.md#endpointproxyquery) | **POST** /{organization}/{project}/_apis/serviceendpoint/endpointproxy | 
*EndpointsApi* | [**endpointsCreate**](docs/Api/EndpointsApi.md#endpointscreate) | **POST** /{organization}/_apis/serviceendpoint/endpoints | 
*EndpointsApi* | [**endpointsDelete**](docs/Api/EndpointsApi.md#endpointsdelete) | **DELETE** /{organization}/_apis/serviceendpoint/endpoints/{endpointId} | 
*EndpointsApi* | [**endpointsGet**](docs/Api/EndpointsApi.md#endpointsget) | **GET** /{organization}/{project}/_apis/serviceendpoint/endpoints/{endpointId} | 
*EndpointsApi* | [**endpointsGetServiceEndpointsByNames**](docs/Api/EndpointsApi.md#endpointsgetserviceendpointsbynames) | **GET** /{organization}/{project}/_apis/serviceendpoint/endpoints | 
*EndpointsApi* | [**endpointsShareServiceEndpoint**](docs/Api/EndpointsApi.md#endpointsshareserviceendpoint) | **PATCH** /{organization}/_apis/serviceendpoint/endpoints/{endpointId} | 
*EndpointsApi* | [**endpointsUpdate**](docs/Api/EndpointsApi.md#endpointsupdate) | **PUT** /{organization}/_apis/serviceendpoint/endpoints/{endpointId} | 
*ExecutionhistoryApi* | [**executionhistoryList**](docs/Api/ExecutionhistoryApi.md#executionhistorylist) | **GET** /{organization}/{project}/_apis/serviceendpoint/{endpointId}/executionhistory | 
*TypesApi* | [**typesList**](docs/Api/TypesApi.md#typeslist) | **GET** /{organization}/_apis/serviceendpoint/types | 


## Documentation For Models

 - [AadOauthTokenRequest](docs/Model/AadOauthTokenRequest.md)
 - [AadOauthTokenResult](docs/Model/AadOauthTokenResult.md)
 - [AuthenticationSchemeReference](docs/Model/AuthenticationSchemeReference.md)
 - [AuthorizationHeader](docs/Model/AuthorizationHeader.md)
 - [AzureAppService](docs/Model/AzureAppService.md)
 - [AzureMLWorkspace](docs/Model/AzureMLWorkspace.md)
 - [AzureManagementGroup](docs/Model/AzureManagementGroup.md)
 - [AzureManagementGroupQueryResult](docs/Model/AzureManagementGroupQueryResult.md)
 - [AzurePermission](docs/Model/AzurePermission.md)
 - [AzureSpnOperationStatus](docs/Model/AzureSpnOperationStatus.md)
 - [AzureSubscription](docs/Model/AzureSubscription.md)
 - [AzureSubscriptionQueryResult](docs/Model/AzureSubscriptionQueryResult.md)
 - [ClientCertificate](docs/Model/ClientCertificate.md)
 - [DataSource](docs/Model/DataSource.md)
 - [DataSourceBindingBase](docs/Model/DataSourceBindingBase.md)
 - [DataSourceDetails](docs/Model/DataSourceDetails.md)
 - [DependencyBinding](docs/Model/DependencyBinding.md)
 - [DependencyData](docs/Model/DependencyData.md)
 - [DependsOn](docs/Model/DependsOn.md)
 - [EndpointAuthorization](docs/Model/EndpointAuthorization.md)
 - [EndpointOperationStatus](docs/Model/EndpointOperationStatus.md)
 - [EndpointUrl](docs/Model/EndpointUrl.md)
 - [GraphSubjectBase](docs/Model/GraphSubjectBase.md)
 - [HelpLink](docs/Model/HelpLink.md)
 - [InputDescriptor](docs/Model/InputDescriptor.md)
 - [InputValidation](docs/Model/InputValidation.md)
 - [InputValue](docs/Model/InputValue.md)
 - [InputValues](docs/Model/InputValues.md)
 - [InputValuesError](docs/Model/InputValuesError.md)
 - [JObject](docs/Model/JObject.md)
 - [JToken](docs/Model/JToken.md)
 - [OAuth2TokenResult](docs/Model/OAuth2TokenResult.md)
 - [OAuthConfiguration](docs/Model/OAuthConfiguration.md)
 - [OAuthConfigurationParams](docs/Model/OAuthConfigurationParams.md)
 - [OAuthEndpointStatus](docs/Model/OAuthEndpointStatus.md)
 - [Parameter](docs/Model/Parameter.md)
 - [ProjectReference](docs/Model/ProjectReference.md)
 - [ReferenceLinks](docs/Model/ReferenceLinks.md)
 - [RefreshAuthenticationParameters](docs/Model/RefreshAuthenticationParameters.md)
 - [ResultTransformationDetails](docs/Model/ResultTransformationDetails.md)
 - [ServiceEndpoint](docs/Model/ServiceEndpoint.md)
 - [ServiceEndpointAuthenticationScheme](docs/Model/ServiceEndpointAuthenticationScheme.md)
 - [ServiceEndpointDetails](docs/Model/ServiceEndpointDetails.md)
 - [ServiceEndpointExecutionData](docs/Model/ServiceEndpointExecutionData.md)
 - [ServiceEndpointExecutionOwner](docs/Model/ServiceEndpointExecutionOwner.md)
 - [ServiceEndpointExecutionRecord](docs/Model/ServiceEndpointExecutionRecord.md)
 - [ServiceEndpointExecutionRecordsInput](docs/Model/ServiceEndpointExecutionRecordsInput.md)
 - [ServiceEndpointOAuthConfigurationReference](docs/Model/ServiceEndpointOAuthConfigurationReference.md)
 - [ServiceEndpointProjectReference](docs/Model/ServiceEndpointProjectReference.md)
 - [ServiceEndpointRequest](docs/Model/ServiceEndpointRequest.md)
 - [ServiceEndpointRequestResult](docs/Model/ServiceEndpointRequestResult.md)
 - [ServiceEndpointType](docs/Model/ServiceEndpointType.md)
 - [VssJsonCollectionWrapperBase](docs/Model/VssJsonCollectionWrapperBase.md)
 - [AuthConfiguration](docs/Model/AuthConfiguration.md)
 - [AzureResourcePermission](docs/Model/AzureResourcePermission.md)
 - [AzureRoleAssignmentPermission](docs/Model/AzureRoleAssignmentPermission.md)
 - [DataSourceBinding](docs/Model/DataSourceBinding.md)
 - [IdentityRef](docs/Model/IdentityRef.md)
 - [VssJsonCollectionWrapper](docs/Model/VssJsonCollectionWrapper.md)
 - [AzureKeyVaultPermission](docs/Model/AzureKeyVaultPermission.md)


## Documentation For Authorization


## accessToken

- **Type**: HTTP basic authentication

## oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://app.vssps.visualstudio.com/oauth2/authorize&response_type=Assertion
- **Scopes**: 
 - **vso.serviceendpoint**: Grants the ability to read service endpoints.
 - **vso.serviceendpoint_query**: Grants the ability to read and query service endpoints.


## Author

nugetvss@microsoft.com

