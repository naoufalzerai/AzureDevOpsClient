<?php
/**
 * BranchesApi
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Tfvc
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Tfvc
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

namespace FrankHouweling\AzureDevOpsClient\Tfvc\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FrankHouweling\AzureDevOpsClient\Tfvc\ApiException;
use FrankHouweling\AzureDevOpsClient\Tfvc\Configuration;
use FrankHouweling\AzureDevOpsClient\Tfvc\HeaderSelector;
use FrankHouweling\AzureDevOpsClient\Tfvc\ObjectSerializer;

/**
 * BranchesApi Class Doc Comment
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Tfvc
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BranchesApi
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
     * Operation branchesGetBranchRefs
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $scopePath Full path to the branch.  Default: $/ Examples: $/, $/MyProject, $/MyProject/SomeFolder. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $includeDeleted Return deleted branches. Default: False (optional)
     * @param  bool $includeLinks Return links. Default: False (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Tfvc\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcBranchRef[]
     */
    public function branchesGetBranchRefs($organization, $scopePath, $project, $apiVersion, $includeDeleted = null, $includeLinks = null)
    {
        list($response) = $this->branchesGetBranchRefsWithHttpInfo($organization, $scopePath, $project, $apiVersion, $includeDeleted, $includeLinks);
        return $response;
    }

    /**
     * Operation branchesGetBranchRefsWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $scopePath Full path to the branch.  Default: $/ Examples: $/, $/MyProject, $/MyProject/SomeFolder. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $includeDeleted Return deleted branches. Default: False (optional)
     * @param  bool $includeLinks Return links. Default: False (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Tfvc\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcBranchRef[], HTTP status code, HTTP response headers (array of strings)
     */
    public function branchesGetBranchRefsWithHttpInfo($organization, $scopePath, $project, $apiVersion, $includeDeleted = null, $includeLinks = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcBranchRef[]';
        $request = $this->branchesGetBranchRefsRequest($organization, $scopePath, $project, $apiVersion, $includeDeleted, $includeLinks);

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
                        '\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcBranchRef[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation branchesGetBranchRefsAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $scopePath Full path to the branch.  Default: $/ Examples: $/, $/MyProject, $/MyProject/SomeFolder. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $includeDeleted Return deleted branches. Default: False (optional)
     * @param  bool $includeLinks Return links. Default: False (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function branchesGetBranchRefsAsync($organization, $scopePath, $project, $apiVersion, $includeDeleted = null, $includeLinks = null)
    {
        return $this->branchesGetBranchRefsAsyncWithHttpInfo($organization, $scopePath, $project, $apiVersion, $includeDeleted, $includeLinks)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation branchesGetBranchRefsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $scopePath Full path to the branch.  Default: $/ Examples: $/, $/MyProject, $/MyProject/SomeFolder. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $includeDeleted Return deleted branches. Default: False (optional)
     * @param  bool $includeLinks Return links. Default: False (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function branchesGetBranchRefsAsyncWithHttpInfo($organization, $scopePath, $project, $apiVersion, $includeDeleted = null, $includeLinks = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcBranchRef[]';
        $request = $this->branchesGetBranchRefsRequest($organization, $scopePath, $project, $apiVersion, $includeDeleted, $includeLinks);

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
     * Create request for operation 'branchesGetBranchRefs'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $scopePath Full path to the branch.  Default: $/ Examples: $/, $/MyProject, $/MyProject/SomeFolder. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $includeDeleted Return deleted branches. Default: False (optional)
     * @param  bool $includeLinks Return links. Default: False (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function branchesGetBranchRefsRequest($organization, $scopePath, $project, $apiVersion, $includeDeleted = null, $includeLinks = null)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling branchesGetBranchRefs'
            );
        }
        // verify the required parameter 'scopePath' is set
        if ($scopePath === null || (is_array($scopePath) && count($scopePath) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $scopePath when calling branchesGetBranchRefs'
            );
        }
        // verify the required parameter 'project' is set
        if ($project === null || (is_array($project) && count($project) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project when calling branchesGetBranchRefs'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling branchesGetBranchRefs'
            );
        }

        $resourcePath = '/{organization}/{project}/_apis/tfvc/branches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($scopePath !== null) {
            $queryParams['scopePath'] = ObjectSerializer::toQueryValue($scopePath);
        }
        // query params
        if ($includeDeleted !== null) {
            $queryParams['includeDeleted'] = ObjectSerializer::toQueryValue($includeDeleted);
        }
        // query params
        if ($includeLinks !== null) {
            $queryParams['includeLinks'] = ObjectSerializer::toQueryValue($includeLinks);
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
