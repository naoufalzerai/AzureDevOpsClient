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
$config = FrankHouweling\AzureDevOpsClient\Search\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Search\Api\CodeSearchResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Search\Model\CodeSearchRequest(); // \FrankHouweling\AzureDevOpsClient\Search\Model\CodeSearchRequest | The Code Search Request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->codeSearchResultsFetchCodeSearchResults($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeSearchResultsApi->codeSearchResultsFetchCodeSearchResults: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://almsearch.dev.azure.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CodeSearchResultsApi* | [**codeSearchResultsFetchCodeSearchResults**](docs/Api/CodeSearchResultsApi.md#codesearchresultsfetchcodesearchresults) | **POST** /{organization}/{project}/_apis/search/codesearchresults | 
*PackageSearchResultsApi* | [**packageSearchResultsFetchPackageSearchResults**](docs/Api/PackageSearchResultsApi.md#packagesearchresultsfetchpackagesearchresults) | **POST** /{organization}/_apis/search/packagesearchresults | 
*RepositoriesApi* | [**repositoriesGet**](docs/Api/RepositoriesApi.md#repositoriesget) | **GET** /{organization}/{project}/_apis/search/status/repositories/{repository} | 
*WikiSearchResultsApi* | [**wikiSearchResultsFetchWikiSearchResults**](docs/Api/WikiSearchResultsApi.md#wikisearchresultsfetchwikisearchresults) | **POST** /{organization}/{project}/_apis/search/wikisearchresults | 
*WorkItemSearchResultsApi* | [**workItemSearchResultsFetchWorkItemSearchResults**](docs/Api/WorkItemSearchResultsApi.md#workitemsearchresultsfetchworkitemsearchresults) | **POST** /{organization}/{project}/_apis/search/workitemsearchresults | 


## Documentation For Models

 - [BoardResult](docs/Model/BoardResult.md)
 - [BranchInfo](docs/Model/BranchInfo.md)
 - [CodeResult](docs/Model/CodeResult.md)
 - [Collection](docs/Model/Collection.md)
 - [EntitySearchRequestBase](docs/Model/EntitySearchRequestBase.md)
 - [EntitySearchResponse](docs/Model/EntitySearchResponse.md)
 - [FeedInfo](docs/Model/FeedInfo.md)
 - [Filter](docs/Model/Filter.md)
 - [Hit](docs/Model/Hit.md)
 - [PackageHit](docs/Model/PackageHit.md)
 - [PackageResult](docs/Model/PackageResult.md)
 - [PackageSearchResponse](docs/Model/PackageSearchResponse.md)
 - [Project](docs/Model/Project.md)
 - [ProjectReference](docs/Model/ProjectReference.md)
 - [Repository](docs/Model/Repository.md)
 - [RepositoryStatusResponse](docs/Model/RepositoryStatusResponse.md)
 - [SettingResult](docs/Model/SettingResult.md)
 - [SortOption](docs/Model/SortOption.md)
 - [Team](docs/Model/Team.md)
 - [Version](docs/Model/Version.md)
 - [Wiki](docs/Model/Wiki.md)
 - [WikiHit](docs/Model/WikiHit.md)
 - [WikiResult](docs/Model/WikiResult.md)
 - [WorkItemHit](docs/Model/WorkItemHit.md)
 - [WorkItemResult](docs/Model/WorkItemResult.md)
 - [BoardSearchResponse](docs/Model/BoardSearchResponse.md)
 - [CodeSearchResponse](docs/Model/CodeSearchResponse.md)
 - [EntitySearchRequest](docs/Model/EntitySearchRequest.md)
 - [PackageSearchResponseContent](docs/Model/PackageSearchResponseContent.md)
 - [ScrollSearchRequest](docs/Model/ScrollSearchRequest.md)
 - [SettingSearchResponse](docs/Model/SettingSearchResponse.md)
 - [WikiSearchResponse](docs/Model/WikiSearchResponse.md)
 - [WorkItemSearchResponse](docs/Model/WorkItemSearchResponse.md)
 - [BoardSearchRequest](docs/Model/BoardSearchRequest.md)
 - [CodeSearchRequest](docs/Model/CodeSearchRequest.md)
 - [PackageSearchRequest](docs/Model/PackageSearchRequest.md)
 - [SettingSearchRequest](docs/Model/SettingSearchRequest.md)
 - [WikiSearchRequest](docs/Model/WikiSearchRequest.md)
 - [WorkItemSearchRequest](docs/Model/WorkItemSearchRequest.md)


## Documentation For Authorization


## accessToken

- **Type**: HTTP basic authentication

## oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://app.vssps.visualstudio.com/oauth2/authorize&response_type=Assertion
- **Scopes**: 
 - **vso.code**: Grants the ability to read source code and metadata about commits, changesets, branches, and other version control artifacts. Also grants the ability to search code and get notified about version control events via service hooks.
 - **vso.work**: Grants the ability to read work items, queries, boards, area and iterations paths, and other work item tracking related metadata. Also grants the ability to execute queries, search work items and to receive notifications about work item events via service hooks.
 - **vso.wiki**: Grants the ability to read wikis, wiki pages and wiki attachments. Also grants the ability to search wiki pages.
 - **vso.packaging**: Grants the ability to read feeds and packages. Also grants the ability to search packages.


## Author

nugetvss@microsoft.com

