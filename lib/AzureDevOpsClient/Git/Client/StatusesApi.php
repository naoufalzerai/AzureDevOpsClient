<?php
/**
 * StatusesApi
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

namespace FrankHouweling\AzureDevOpsClient\Git\Client;

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
 * StatusesApi Class Doc Comment
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatusesApi
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
     * Operation statusesCreate
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  \FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus $body Git commit status object to create. (required)
     * @param  string $commitId ID of the Git commit. (required)
     * @param  string $repositoryId ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus
     */
    public function statusesCreate($organization, $body, $commitId, $repositoryId, $project, $apiVersion)
    {
        list($response) = $this->statusesCreateWithHttpInfo($organization, $body, $commitId, $repositoryId, $project, $apiVersion);
        return $response;
    }

    /**
     * Operation statusesCreateWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  \FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus $body Git commit status object to create. (required)
     * @param  string $commitId ID of the Git commit. (required)
     * @param  string $repositoryId ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function statusesCreateWithHttpInfo($organization, $body, $commitId, $repositoryId, $project, $apiVersion)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus';
        $request = $this->statusesCreateRequest($organization, $body, $commitId, $repositoryId, $project, $apiVersion);

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
                        '\FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation statusesCreateAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  \FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus $body Git commit status object to create. (required)
     * @param  string $commitId ID of the Git commit. (required)
     * @param  string $repositoryId ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function statusesCreateAsync($organization, $body, $commitId, $repositoryId, $project, $apiVersion)
    {
        return $this->statusesCreateAsyncWithHttpInfo($organization, $body, $commitId, $repositoryId, $project, $apiVersion)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation statusesCreateAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  \FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus $body Git commit status object to create. (required)
     * @param  string $commitId ID of the Git commit. (required)
     * @param  string $repositoryId ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function statusesCreateAsyncWithHttpInfo($organization, $body, $commitId, $repositoryId, $project, $apiVersion)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus';
        $request = $this->statusesCreateRequest($organization, $body, $commitId, $repositoryId, $project, $apiVersion);

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
     * Create request for operation 'statusesCreate'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  \FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus $body Git commit status object to create. (required)
     * @param  string $commitId ID of the Git commit. (required)
     * @param  string $repositoryId ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function statusesCreateRequest($organization, $body, $commitId, $repositoryId, $project, $apiVersion)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling statusesCreate'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling statusesCreate'
            );
        }
        // verify the required parameter 'commitId' is set
        if ($commitId === null || (is_array($commitId) && count($commitId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $commitId when calling statusesCreate'
            );
        }
        // verify the required parameter 'repositoryId' is set
        if ($repositoryId === null || (is_array($repositoryId) && count($repositoryId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $repositoryId when calling statusesCreate'
            );
        }
        // verify the required parameter 'project' is set
        if ($project === null || (is_array($project) && count($project) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project when calling statusesCreate'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling statusesCreate'
            );
        }

        $resourcePath = '/{organization}/{project}/_apis/git/repositories/{repositoryId}/commits/{commitId}/statuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
        if ($commitId !== null) {
            $resourcePath = str_replace(
                '{' . 'commitId' . '}',
                ObjectSerializer::toPathValue($commitId),
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation statusesList
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $commitId ID of the Git commit. (required)
     * @param  string $repositoryId ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $top Optional. The number of statuses to retrieve. Default is 1000. (optional)
     * @param  int $skip Optional. The number of statuses to ignore. Default is 0. For example, to retrieve results 101-150, set top to 50 and skip to 100. (optional)
     * @param  bool $latestOnly The flag indicates whether to get only latest statuses grouped by &#x60;Context.Name&#x60; and &#x60;Context.Genre&#x60;. (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus[]
     */
    public function statusesList($organization, $commitId, $repositoryId, $project, $apiVersion, $top = null, $skip = null, $latestOnly = null)
    {
        list($response) = $this->statusesListWithHttpInfo($organization, $commitId, $repositoryId, $project, $apiVersion, $top, $skip, $latestOnly);
        return $response;
    }

    /**
     * Operation statusesListWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $commitId ID of the Git commit. (required)
     * @param  string $repositoryId ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $top Optional. The number of statuses to retrieve. Default is 1000. (optional)
     * @param  int $skip Optional. The number of statuses to ignore. Default is 0. For example, to retrieve results 101-150, set top to 50 and skip to 100. (optional)
     * @param  bool $latestOnly The flag indicates whether to get only latest statuses grouped by &#x60;Context.Name&#x60; and &#x60;Context.Genre&#x60;. (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus[], HTTP status code, HTTP response headers (array of strings)
     */
    public function statusesListWithHttpInfo($organization, $commitId, $repositoryId, $project, $apiVersion, $top = null, $skip = null, $latestOnly = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus[]';
        $request = $this->statusesListRequest($organization, $commitId, $repositoryId, $project, $apiVersion, $top, $skip, $latestOnly);

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
                        '\FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation statusesListAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $commitId ID of the Git commit. (required)
     * @param  string $repositoryId ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $top Optional. The number of statuses to retrieve. Default is 1000. (optional)
     * @param  int $skip Optional. The number of statuses to ignore. Default is 0. For example, to retrieve results 101-150, set top to 50 and skip to 100. (optional)
     * @param  bool $latestOnly The flag indicates whether to get only latest statuses grouped by &#x60;Context.Name&#x60; and &#x60;Context.Genre&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function statusesListAsync($organization, $commitId, $repositoryId, $project, $apiVersion, $top = null, $skip = null, $latestOnly = null)
    {
        return $this->statusesListAsyncWithHttpInfo($organization, $commitId, $repositoryId, $project, $apiVersion, $top, $skip, $latestOnly)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation statusesListAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $commitId ID of the Git commit. (required)
     * @param  string $repositoryId ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $top Optional. The number of statuses to retrieve. Default is 1000. (optional)
     * @param  int $skip Optional. The number of statuses to ignore. Default is 0. For example, to retrieve results 101-150, set top to 50 and skip to 100. (optional)
     * @param  bool $latestOnly The flag indicates whether to get only latest statuses grouped by &#x60;Context.Name&#x60; and &#x60;Context.Genre&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function statusesListAsyncWithHttpInfo($organization, $commitId, $repositoryId, $project, $apiVersion, $top = null, $skip = null, $latestOnly = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Git\Model\GitStatus[]';
        $request = $this->statusesListRequest($organization, $commitId, $repositoryId, $project, $apiVersion, $top, $skip, $latestOnly);

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
     * Create request for operation 'statusesList'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $commitId ID of the Git commit. (required)
     * @param  string $repositoryId ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $top Optional. The number of statuses to retrieve. Default is 1000. (optional)
     * @param  int $skip Optional. The number of statuses to ignore. Default is 0. For example, to retrieve results 101-150, set top to 50 and skip to 100. (optional)
     * @param  bool $latestOnly The flag indicates whether to get only latest statuses grouped by &#x60;Context.Name&#x60; and &#x60;Context.Genre&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function statusesListRequest($organization, $commitId, $repositoryId, $project, $apiVersion, $top = null, $skip = null, $latestOnly = null)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling statusesList'
            );
        }
        // verify the required parameter 'commitId' is set
        if ($commitId === null || (is_array($commitId) && count($commitId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $commitId when calling statusesList'
            );
        }
        // verify the required parameter 'repositoryId' is set
        if ($repositoryId === null || (is_array($repositoryId) && count($repositoryId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $repositoryId when calling statusesList'
            );
        }
        // verify the required parameter 'project' is set
        if ($project === null || (is_array($project) && count($project) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project when calling statusesList'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling statusesList'
            );
        }

        $resourcePath = '/{organization}/{project}/_apis/git/repositories/{repositoryId}/commits/{commitId}/statuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($top !== null) {
            $queryParams['top'] = ObjectSerializer::toQueryValue($top);
        }
        // query params
        if ($skip !== null) {
            $queryParams['skip'] = ObjectSerializer::toQueryValue($skip);
        }
        // query params
        if ($latestOnly !== null) {
            $queryParams['latestOnly'] = ObjectSerializer::toQueryValue($latestOnly);
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
        if ($commitId !== null) {
            $resourcePath = str_replace(
                '{' . 'commitId' . '}',
                ObjectSerializer::toPathValue($commitId),
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
