<?php
/**
 * DiffsApi
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Git
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.0-preview
 * Contact: nugetvss@microsoft.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FrankHouweling\AzureDevOpsClient\Git\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FrankHouweling\AzureDevOpsClient\Git\ApiException;
use FrankHouweling\AzureDevOpsClient\Git\Configuration;
use FrankHouweling\AzureDevOpsClient\Git\HeaderSelector;
use FrankHouweling\AzureDevOpsClient\Git\ObjectSerializer;

/**
 * DiffsApi Class Doc Comment
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiffsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation diffsGet
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $diffCommonCommit If true, diff between common and target commits. If false, diff between base and target commits. (optional)
     * @param  int $top Maximum number of changes to return. Defaults to 100. (optional)
     * @param  int $skip Number of changes to skip (optional)
     * @param  string $baseVersion Version string identifier (name of tag/branch, SHA1 of commit) (optional)
     * @param  string $baseVersionOptions Version options - Specify additional modifiers to version (e.g Previous) (optional)
     * @param  string $baseVersionType Version type (branch, tag, or commit). Determines how Id is interpreted (optional)
     * @param  string $targetVersion Version string identifier (name of tag/branch, SHA1 of commit) (optional)
     * @param  string $targetVersionOptions Version options - Specify additional modifiers to version (e.g Previous) (optional)
     * @param  string $targetVersionType Version type (branch, tag, or commit). Determines how Id is interpreted (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitDiffs
     */
    public function diffsGet($organization, $repositoryId, $project, $apiVersion, $diffCommonCommit = null, $top = null, $skip = null, $baseVersion = null, $baseVersionOptions = null, $baseVersionType = null, $targetVersion = null, $targetVersionOptions = null, $targetVersionType = null)
    {
        list($response) = $this->diffsGetWithHttpInfo($organization, $repositoryId, $project, $apiVersion, $diffCommonCommit, $top, $skip, $baseVersion, $baseVersionOptions, $baseVersionType, $targetVersion, $targetVersionOptions, $targetVersionType);
        return $response;
    }

    /**
     * Operation diffsGetWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $diffCommonCommit If true, diff between common and target commits. If false, diff between base and target commits. (optional)
     * @param  int $top Maximum number of changes to return. Defaults to 100. (optional)
     * @param  int $skip Number of changes to skip (optional)
     * @param  string $baseVersion Version string identifier (name of tag/branch, SHA1 of commit) (optional)
     * @param  string $baseVersionOptions Version options - Specify additional modifiers to version (e.g Previous) (optional)
     * @param  string $baseVersionType Version type (branch, tag, or commit). Determines how Id is interpreted (optional)
     * @param  string $targetVersion Version string identifier (name of tag/branch, SHA1 of commit) (optional)
     * @param  string $targetVersionOptions Version options - Specify additional modifiers to version (e.g Previous) (optional)
     * @param  string $targetVersionType Version type (branch, tag, or commit). Determines how Id is interpreted (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitDiffs, HTTP status code, HTTP response headers (array of strings)
     */
    public function diffsGetWithHttpInfo($organization, $repositoryId, $project, $apiVersion, $diffCommonCommit = null, $top = null, $skip = null, $baseVersion = null, $baseVersionOptions = null, $baseVersionType = null, $targetVersion = null, $targetVersionOptions = null, $targetVersionType = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitDiffs';
        $request = $this->diffsGetRequest($organization, $repositoryId, $project, $apiVersion, $diffCommonCommit, $top, $skip, $baseVersion, $baseVersionOptions, $baseVersionType, $targetVersion, $targetVersionOptions, $targetVersionType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitDiffs',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation diffsGetAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $diffCommonCommit If true, diff between common and target commits. If false, diff between base and target commits. (optional)
     * @param  int $top Maximum number of changes to return. Defaults to 100. (optional)
     * @param  int $skip Number of changes to skip (optional)
     * @param  string $baseVersion Version string identifier (name of tag/branch, SHA1 of commit) (optional)
     * @param  string $baseVersionOptions Version options - Specify additional modifiers to version (e.g Previous) (optional)
     * @param  string $baseVersionType Version type (branch, tag, or commit). Determines how Id is interpreted (optional)
     * @param  string $targetVersion Version string identifier (name of tag/branch, SHA1 of commit) (optional)
     * @param  string $targetVersionOptions Version options - Specify additional modifiers to version (e.g Previous) (optional)
     * @param  string $targetVersionType Version type (branch, tag, or commit). Determines how Id is interpreted (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function diffsGetAsync($organization, $repositoryId, $project, $apiVersion, $diffCommonCommit = null, $top = null, $skip = null, $baseVersion = null, $baseVersionOptions = null, $baseVersionType = null, $targetVersion = null, $targetVersionOptions = null, $targetVersionType = null)
    {
        return $this->diffsGetAsyncWithHttpInfo($organization, $repositoryId, $project, $apiVersion, $diffCommonCommit, $top, $skip, $baseVersion, $baseVersionOptions, $baseVersionType, $targetVersion, $targetVersionOptions, $targetVersionType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation diffsGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $diffCommonCommit If true, diff between common and target commits. If false, diff between base and target commits. (optional)
     * @param  int $top Maximum number of changes to return. Defaults to 100. (optional)
     * @param  int $skip Number of changes to skip (optional)
     * @param  string $baseVersion Version string identifier (name of tag/branch, SHA1 of commit) (optional)
     * @param  string $baseVersionOptions Version options - Specify additional modifiers to version (e.g Previous) (optional)
     * @param  string $baseVersionType Version type (branch, tag, or commit). Determines how Id is interpreted (optional)
     * @param  string $targetVersion Version string identifier (name of tag/branch, SHA1 of commit) (optional)
     * @param  string $targetVersionOptions Version options - Specify additional modifiers to version (e.g Previous) (optional)
     * @param  string $targetVersionType Version type (branch, tag, or commit). Determines how Id is interpreted (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function diffsGetAsyncWithHttpInfo($organization, $repositoryId, $project, $apiVersion, $diffCommonCommit = null, $top = null, $skip = null, $baseVersion = null, $baseVersionOptions = null, $baseVersionType = null, $targetVersion = null, $targetVersionOptions = null, $targetVersionType = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitDiffs';
        $request = $this->diffsGetRequest($organization, $repositoryId, $project, $apiVersion, $diffCommonCommit, $top, $skip, $baseVersion, $baseVersionOptions, $baseVersionType, $targetVersion, $targetVersionOptions, $targetVersionType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'diffsGet'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $diffCommonCommit If true, diff between common and target commits. If false, diff between base and target commits. (optional)
     * @param  int $top Maximum number of changes to return. Defaults to 100. (optional)
     * @param  int $skip Number of changes to skip (optional)
     * @param  string $baseVersion Version string identifier (name of tag/branch, SHA1 of commit) (optional)
     * @param  string $baseVersionOptions Version options - Specify additional modifiers to version (e.g Previous) (optional)
     * @param  string $baseVersionType Version type (branch, tag, or commit). Determines how Id is interpreted (optional)
     * @param  string $targetVersion Version string identifier (name of tag/branch, SHA1 of commit) (optional)
     * @param  string $targetVersionOptions Version options - Specify additional modifiers to version (e.g Previous) (optional)
     * @param  string $targetVersionType Version type (branch, tag, or commit). Determines how Id is interpreted (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function diffsGetRequest($organization, $repositoryId, $project, $apiVersion, $diffCommonCommit = null, $top = null, $skip = null, $baseVersion = null, $baseVersionOptions = null, $baseVersionType = null, $targetVersion = null, $targetVersionOptions = null, $targetVersionType = null)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling diffsGet'
            );
        }
        // verify the required parameter 'repositoryId' is set
        if ($repositoryId === null || (is_array($repositoryId) && count($repositoryId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $repositoryId when calling diffsGet'
            );
        }
        // verify the required parameter 'project' is set
        if ($project === null || (is_array($project) && count($project) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project when calling diffsGet'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling diffsGet'
            );
        }

        $resourcePath = '/{organization}/{project}/_apis/git/repositories/{repositoryId}/diffs/commits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($diffCommonCommit !== null) {
            $queryParams['diffCommonCommit'] = ObjectSerializer::toQueryValue($diffCommonCommit);
        }
        // query params
        if ($top !== null) {
            $queryParams['$top'] = ObjectSerializer::toQueryValue($top);
        }
        // query params
        if ($skip !== null) {
            $queryParams['$skip'] = ObjectSerializer::toQueryValue($skip);
        }
        // query params
        if ($baseVersion !== null) {
            $queryParams['baseVersion'] = ObjectSerializer::toQueryValue($baseVersion);
        }
        // query params
        if ($baseVersionOptions !== null) {
            $queryParams['baseVersionOptions'] = ObjectSerializer::toQueryValue($baseVersionOptions);
        }
        // query params
        if ($baseVersionType !== null) {
            $queryParams['baseVersionType'] = ObjectSerializer::toQueryValue($baseVersionType);
        }
        // query params
        if ($targetVersion !== null) {
            $queryParams['targetVersion'] = ObjectSerializer::toQueryValue($targetVersion);
        }
        // query params
        if ($targetVersionOptions !== null) {
            $queryParams['targetVersionOptions'] = ObjectSerializer::toQueryValue($targetVersionOptions);
        }
        // query params
        if ($targetVersionType !== null) {
            $queryParams['targetVersionType'] = ObjectSerializer::toQueryValue($targetVersionType);
        }
        // query params
        if ($apiVersion !== null) {
            $queryParams['api-version'] = ObjectSerializer::toQueryValue($apiVersion);
        }

        // path params
        if ($organization !== null) {
            $resourcePath = str_replace(
                '{' . 'organization' . '}',
                ObjectSerializer::toPathValue($organization),
                $resourcePath
            );
        }
        // path params
        if ($repositoryId !== null) {
            $resourcePath = str_replace(
                '{' . 'repositoryId' . '}',
                ObjectSerializer::toPathValue($repositoryId),
                $resourcePath
            );
        }
        // path params
        if ($project !== null) {
            $resourcePath = str_replace(
                '{' . 'project' . '}',
                ObjectSerializer::toPathValue($project),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token) OR HTTP Basic Authentication with personal access token
        if ($this->config->getAccessToken() !== null) {
			$headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		}

		if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
			$headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
		}

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
