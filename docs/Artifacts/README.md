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
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ArtifactDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$packageId = "packageId_example"; // string | Id of the package (GUID Id, not name).
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->artifactDetailsGetBadge($organization, $feedId, $packageId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactDetailsApi->artifactDetailsGetBadge: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://feeds.dev.azure.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ArtifactDetailsApi* | [**artifactDetailsGetBadge**](docs/Api/ArtifactDetailsApi.md#artifactdetailsgetbadge) | **GET** /{organization}/{project}/_apis/public/packaging/Feeds/{feedId}/Packages/{packageId}/badge | 
*ArtifactDetailsApi* | [**artifactDetailsGetPackage**](docs/Api/ArtifactDetailsApi.md#artifactdetailsgetpackage) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/packages/{packageId} | 
*ArtifactDetailsApi* | [**artifactDetailsGetPackageVersion**](docs/Api/ArtifactDetailsApi.md#artifactdetailsgetpackageversion) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/Packages/{packageId}/versions/{packageVersionId} | 
*ArtifactDetailsApi* | [**artifactDetailsGetPackageVersionProvenance**](docs/Api/ArtifactDetailsApi.md#artifactdetailsgetpackageversionprovenance) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/Packages/{packageId}/Versions/{packageVersionId}/provenance | 
*ArtifactDetailsApi* | [**artifactDetailsGetPackageVersions**](docs/Api/ArtifactDetailsApi.md#artifactdetailsgetpackageversions) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/Packages/{packageId}/versions | 
*ArtifactDetailsApi* | [**artifactDetailsGetPackages**](docs/Api/ArtifactDetailsApi.md#artifactdetailsgetpackages) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/packages | 
*ArtifactDetailsApi* | [**artifactDetailsQueryPackageMetrics**](docs/Api/ArtifactDetailsApi.md#artifactdetailsquerypackagemetrics) | **POST** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/packagemetricsbatch | 
*ArtifactDetailsApi* | [**artifactDetailsQueryPackageVersionMetrics**](docs/Api/ArtifactDetailsApi.md#artifactdetailsquerypackageversionmetrics) | **POST** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/Packages/{packageId}/versionmetricsbatch | 
*ChangeTrackingApi* | [**changeTrackingGetFeedChange**](docs/Api/ChangeTrackingApi.md#changetrackinggetfeedchange) | **GET** /{organization}/{project}/_apis/packaging/feedchanges/{feedId} | 
*ChangeTrackingApi* | [**changeTrackingGetFeedChanges**](docs/Api/ChangeTrackingApi.md#changetrackinggetfeedchanges) | **GET** /{organization}/{project}/_apis/packaging/feedchanges | 
*ChangeTrackingApi* | [**changeTrackingGetPackageChanges**](docs/Api/ChangeTrackingApi.md#changetrackinggetpackagechanges) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/packagechanges | 
*FeedManagementApi* | [**feedManagementCreateFeed**](docs/Api/FeedManagementApi.md#feedmanagementcreatefeed) | **POST** /{organization}/{project}/_apis/packaging/feeds | 
*FeedManagementApi* | [**feedManagementCreateFeedView**](docs/Api/FeedManagementApi.md#feedmanagementcreatefeedview) | **POST** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/views | 
*FeedManagementApi* | [**feedManagementDeleteFeed**](docs/Api/FeedManagementApi.md#feedmanagementdeletefeed) | **DELETE** /{organization}/{project}/_apis/packaging/feeds/{feedId} | 
*FeedManagementApi* | [**feedManagementDeleteFeedView**](docs/Api/FeedManagementApi.md#feedmanagementdeletefeedview) | **DELETE** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/views/{viewId} | 
*FeedManagementApi* | [**feedManagementGetFeed**](docs/Api/FeedManagementApi.md#feedmanagementgetfeed) | **GET** /{organization}/{project}/_apis/packaging/feeds/{feedId} | 
*FeedManagementApi* | [**feedManagementGetFeedPermissions**](docs/Api/FeedManagementApi.md#feedmanagementgetfeedpermissions) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/permissions | 
*FeedManagementApi* | [**feedManagementGetFeedView**](docs/Api/FeedManagementApi.md#feedmanagementgetfeedview) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/views/{viewId} | 
*FeedManagementApi* | [**feedManagementGetFeedViews**](docs/Api/FeedManagementApi.md#feedmanagementgetfeedviews) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/views | 
*FeedManagementApi* | [**feedManagementGetFeeds**](docs/Api/FeedManagementApi.md#feedmanagementgetfeeds) | **GET** /{organization}/{project}/_apis/packaging/feeds | 
*FeedManagementApi* | [**feedManagementSetFeedPermissions**](docs/Api/FeedManagementApi.md#feedmanagementsetfeedpermissions) | **PATCH** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/permissions | 
*FeedManagementApi* | [**feedManagementUpdateFeed**](docs/Api/FeedManagementApi.md#feedmanagementupdatefeed) | **PATCH** /{organization}/{project}/_apis/packaging/feeds/{feedId} | 
*FeedManagementApi* | [**feedManagementUpdateFeedView**](docs/Api/FeedManagementApi.md#feedmanagementupdatefeedview) | **PATCH** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/views/{viewId} | 
*FeedRecycleBinApi* | [**feedRecycleBinList**](docs/Api/FeedRecycleBinApi.md#feedrecyclebinlist) | **GET** /{organization}/{project}/_apis/packaging/feedrecyclebin | 
*FeedRecycleBinApi* | [**feedRecycleBinPermanentDeleteFeed**](docs/Api/FeedRecycleBinApi.md#feedrecyclebinpermanentdeletefeed) | **DELETE** /{organization}/{project}/_apis/packaging/feedrecyclebin/{feedId} | 
*FeedRecycleBinApi* | [**feedRecycleBinRestoreDeletedFeed**](docs/Api/FeedRecycleBinApi.md#feedrecyclebinrestoredeletedfeed) | **PATCH** /{organization}/{project}/_apis/packaging/feedrecyclebin/{feedId} | 
*RecycleBinApi* | [**recycleBinGetRecycleBinPackage**](docs/Api/RecycleBinApi.md#recyclebingetrecyclebinpackage) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/RecycleBin/Packages/{packageId} | 
*RecycleBinApi* | [**recycleBinGetRecycleBinPackageVersion**](docs/Api/RecycleBinApi.md#recyclebingetrecyclebinpackageversion) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/RecycleBin/Packages/{packageId}/Versions/{packageVersionId} | 
*RecycleBinApi* | [**recycleBinGetRecycleBinPackageVersions**](docs/Api/RecycleBinApi.md#recyclebingetrecyclebinpackageversions) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/RecycleBin/Packages/{packageId}/Versions | 
*RecycleBinApi* | [**recycleBinGetRecycleBinPackages**](docs/Api/RecycleBinApi.md#recyclebingetrecyclebinpackages) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/RecycleBin/Packages | 
*RetentionPoliciesApi* | [**retentionPoliciesDeleteRetentionPolicy**](docs/Api/RetentionPoliciesApi.md#retentionpoliciesdeleteretentionpolicy) | **DELETE** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/retentionpolicies | 
*RetentionPoliciesApi* | [**retentionPoliciesGetRetentionPolicy**](docs/Api/RetentionPoliciesApi.md#retentionpoliciesgetretentionpolicy) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/retentionpolicies | 
*RetentionPoliciesApi* | [**retentionPoliciesSetRetentionPolicy**](docs/Api/RetentionPoliciesApi.md#retentionpoliciessetretentionpolicy) | **PUT** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/retentionpolicies | 
*ServiceSettingsApi* | [**serviceSettingsGetGlobalPermissions**](docs/Api/ServiceSettingsApi.md#servicesettingsgetglobalpermissions) | **GET** /{organization}/_apis/packaging/globalpermissions | 
*ServiceSettingsApi* | [**serviceSettingsSetGlobalPermissions**](docs/Api/ServiceSettingsApi.md#servicesettingssetglobalpermissions) | **PATCH** /{organization}/_apis/packaging/globalpermissions | 


## Documentation For Models

 - [BuildPackage](docs/Model/BuildPackage.md)
 - [FeedBatchData](docs/Model/FeedBatchData.md)
 - [FeedBatchOperationData](docs/Model/FeedBatchOperationData.md)
 - [FeedChange](docs/Model/FeedChange.md)
 - [FeedChangesResponse](docs/Model/FeedChangesResponse.md)
 - [FeedCore](docs/Model/FeedCore.md)
 - [FeedPermission](docs/Model/FeedPermission.md)
 - [FeedRetentionPolicy](docs/Model/FeedRetentionPolicy.md)
 - [FeedUpdate](docs/Model/FeedUpdate.md)
 - [FeedView](docs/Model/FeedView.md)
 - [GlobalPermission](docs/Model/GlobalPermission.md)
 - [IdentityDescriptor](docs/Model/IdentityDescriptor.md)
 - [JsonPatchDocument](docs/Model/JsonPatchDocument.md)
 - [JsonPatchOperation](docs/Model/JsonPatchOperation.md)
 - [MinimalPackageVersion](docs/Model/MinimalPackageVersion.md)
 - [Package](docs/Model/Package.md)
 - [PackageChange](docs/Model/PackageChange.md)
 - [PackageChangesResponse](docs/Model/PackageChangesResponse.md)
 - [PackageDependency](docs/Model/PackageDependency.md)
 - [PackageFile](docs/Model/PackageFile.md)
 - [PackageMetrics](docs/Model/PackageMetrics.md)
 - [PackageMetricsQuery](docs/Model/PackageMetricsQuery.md)
 - [PackageVersionChange](docs/Model/PackageVersionChange.md)
 - [PackageVersionMetrics](docs/Model/PackageVersionMetrics.md)
 - [PackageVersionMetricsQuery](docs/Model/PackageVersionMetricsQuery.md)
 - [PackageVersionProvenance](docs/Model/PackageVersionProvenance.md)
 - [ProjectReference](docs/Model/ProjectReference.md)
 - [ProtocolMetadata](docs/Model/ProtocolMetadata.md)
 - [Provenance](docs/Model/Provenance.md)
 - [ReferenceLinks](docs/Model/ReferenceLinks.md)
 - [UpstreamSource](docs/Model/UpstreamSource.md)
 - [UpstreamStatusDetail](docs/Model/UpstreamStatusDetail.md)
 - [VssJsonCollectionWrapperBase](docs/Model/VssJsonCollectionWrapperBase.md)
 - [Feed](docs/Model/Feed.md)
 - [PackageVersion](docs/Model/PackageVersion.md)
 - [SaveCachedPackagesData](docs/Model/SaveCachedPackagesData.md)
 - [VssJsonCollectionWrapper](docs/Model/VssJsonCollectionWrapper.md)
 - [RecycleBinPackageVersion](docs/Model/RecycleBinPackageVersion.md)


## Documentation For Authorization


## accessToken

- **Type**: HTTP basic authentication

## oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://app.vssps.visualstudio.com/oauth2/authorize&response_type=Assertion
- **Scopes**: 
 - **vso.packaging_write**: Grants the ability to create and read feeds and packages.
 - **vso.packaging**: Grants the ability to read feeds and packages. Also grants the ability to search packages.
 - **vso.packaging_manage**: Grants the ability to create, read, update, and delete feeds and packages.


## Author

nugetvss@microsoft.com

