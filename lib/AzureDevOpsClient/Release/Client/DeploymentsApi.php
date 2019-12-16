<?php
/**
 * DeploymentsApi
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Release
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

namespace FrankHouweling\AzureDevOpsClient\Release\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FrankHouweling\AzureDevOpsClient\Release\ApiException;
use FrankHouweling\AzureDevOpsClient\Release\Configuration;
use FrankHouweling\AzureDevOpsClient\Release\HeaderSelector;
use FrankHouweling\AzureDevOpsClient\Release\ObjectSerializer;

/**
 * DeploymentsApi Class Doc Comment
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Release
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeploymentsApi
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
     * Operation deploymentsList
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. (required)
     * @param  int $definitionId  (optional)
     * @param  int $definitionEnvironmentId  (optional)
     * @param  string $createdBy  (optional)
     * @param  \DateTime $minModifiedTime  (optional)
     * @param  \DateTime $maxModifiedTime  (optional)
     * @param  string $deploymentStatus  (optional)
     * @param  string $operationStatus  (optional)
     * @param  bool $latestAttemptsOnly  (optional)
     * @param  string $queryOrder  (optional)
     * @param  int $top  (optional)
     * @param  int $continuationToken  (optional)
     * @param  string $createdFor  (optional)
     * @param  \DateTime $minStartedTime  (optional)
     * @param  \DateTime $maxStartedTime  (optional)
     * @param  string $sourceBranch  (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Release\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FrankHouweling\AzureDevOpsClient\Release\Model\Deployment[]
     */
    public function deploymentsList($organization, $project, $apiVersion, $definitionId = null, $definitionEnvironmentId = null, $createdBy = null, $minModifiedTime = null, $maxModifiedTime = null, $deploymentStatus = null, $operationStatus = null, $latestAttemptsOnly = null, $queryOrder = null, $top = null, $continuationToken = null, $createdFor = null, $minStartedTime = null, $maxStartedTime = null, $sourceBranch = null)
    {
        list($response) = $this->deploymentsListWithHttpInfo($organization, $project, $apiVersion, $definitionId, $definitionEnvironmentId, $createdBy, $minModifiedTime, $maxModifiedTime, $deploymentStatus, $operationStatus, $latestAttemptsOnly, $queryOrder, $top, $continuationToken, $createdFor, $minStartedTime, $maxStartedTime, $sourceBranch);
        return $response;
    }

    /**
     * Operation deploymentsListWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. (required)
     * @param  int $definitionId  (optional)
     * @param  int $definitionEnvironmentId  (optional)
     * @param  string $createdBy  (optional)
     * @param  \DateTime $minModifiedTime  (optional)
     * @param  \DateTime $maxModifiedTime  (optional)
     * @param  string $deploymentStatus  (optional)
     * @param  string $operationStatus  (optional)
     * @param  bool $latestAttemptsOnly  (optional)
     * @param  string $queryOrder  (optional)
     * @param  int $top  (optional)
     * @param  int $continuationToken  (optional)
     * @param  string $createdFor  (optional)
     * @param  \DateTime $minStartedTime  (optional)
     * @param  \DateTime $maxStartedTime  (optional)
     * @param  string $sourceBranch  (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Release\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FrankHouweling\AzureDevOpsClient\Release\Model\Deployment[], HTTP status code, HTTP response headers (array of strings)
     */
    public function deploymentsListWithHttpInfo($organization, $project, $apiVersion, $definitionId = null, $definitionEnvironmentId = null, $createdBy = null, $minModifiedTime = null, $maxModifiedTime = null, $deploymentStatus = null, $operationStatus = null, $latestAttemptsOnly = null, $queryOrder = null, $top = null, $continuationToken = null, $createdFor = null, $minStartedTime = null, $maxStartedTime = null, $sourceBranch = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Release\Model\Deployment[]';
        $request = $this->deploymentsListRequest($organization, $project, $apiVersion, $definitionId, $definitionEnvironmentId, $createdBy, $minModifiedTime, $maxModifiedTime, $deploymentStatus, $operationStatus, $latestAttemptsOnly, $queryOrder, $top, $continuationToken, $createdFor, $minStartedTime, $maxStartedTime, $sourceBranch);

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
                        '\FrankHouweling\AzureDevOpsClient\Release\Model\Deployment[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deploymentsListAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. (required)
     * @param  int $definitionId  (optional)
     * @param  int $definitionEnvironmentId  (optional)
     * @param  string $createdBy  (optional)
     * @param  \DateTime $minModifiedTime  (optional)
     * @param  \DateTime $maxModifiedTime  (optional)
     * @param  string $deploymentStatus  (optional)
     * @param  string $operationStatus  (optional)
     * @param  bool $latestAttemptsOnly  (optional)
     * @param  string $queryOrder  (optional)
     * @param  int $top  (optional)
     * @param  int $continuationToken  (optional)
     * @param  string $createdFor  (optional)
     * @param  \DateTime $minStartedTime  (optional)
     * @param  \DateTime $maxStartedTime  (optional)
     * @param  string $sourceBranch  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deploymentsListAsync($organization, $project, $apiVersion, $definitionId = null, $definitionEnvironmentId = null, $createdBy = null, $minModifiedTime = null, $maxModifiedTime = null, $deploymentStatus = null, $operationStatus = null, $latestAttemptsOnly = null, $queryOrder = null, $top = null, $continuationToken = null, $createdFor = null, $minStartedTime = null, $maxStartedTime = null, $sourceBranch = null)
    {
        return $this->deploymentsListAsyncWithHttpInfo($organization, $project, $apiVersion, $definitionId, $definitionEnvironmentId, $createdBy, $minModifiedTime, $maxModifiedTime, $deploymentStatus, $operationStatus, $latestAttemptsOnly, $queryOrder, $top, $continuationToken, $createdFor, $minStartedTime, $maxStartedTime, $sourceBranch)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deploymentsListAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. (required)
     * @param  int $definitionId  (optional)
     * @param  int $definitionEnvironmentId  (optional)
     * @param  string $createdBy  (optional)
     * @param  \DateTime $minModifiedTime  (optional)
     * @param  \DateTime $maxModifiedTime  (optional)
     * @param  string $deploymentStatus  (optional)
     * @param  string $operationStatus  (optional)
     * @param  bool $latestAttemptsOnly  (optional)
     * @param  string $queryOrder  (optional)
     * @param  int $top  (optional)
     * @param  int $continuationToken  (optional)
     * @param  string $createdFor  (optional)
     * @param  \DateTime $minStartedTime  (optional)
     * @param  \DateTime $maxStartedTime  (optional)
     * @param  string $sourceBranch  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deploymentsListAsyncWithHttpInfo($organization, $project, $apiVersion, $definitionId = null, $definitionEnvironmentId = null, $createdBy = null, $minModifiedTime = null, $maxModifiedTime = null, $deploymentStatus = null, $operationStatus = null, $latestAttemptsOnly = null, $queryOrder = null, $top = null, $continuationToken = null, $createdFor = null, $minStartedTime = null, $maxStartedTime = null, $sourceBranch = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Release\Model\Deployment[]';
        $request = $this->deploymentsListRequest($organization, $project, $apiVersion, $definitionId, $definitionEnvironmentId, $createdBy, $minModifiedTime, $maxModifiedTime, $deploymentStatus, $operationStatus, $latestAttemptsOnly, $queryOrder, $top, $continuationToken, $createdFor, $minStartedTime, $maxStartedTime, $sourceBranch);

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
     * Create request for operation 'deploymentsList'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. (required)
     * @param  int $definitionId  (optional)
     * @param  int $definitionEnvironmentId  (optional)
     * @param  string $createdBy  (optional)
     * @param  \DateTime $minModifiedTime  (optional)
     * @param  \DateTime $maxModifiedTime  (optional)
     * @param  string $deploymentStatus  (optional)
     * @param  string $operationStatus  (optional)
     * @param  bool $latestAttemptsOnly  (optional)
     * @param  string $queryOrder  (optional)
     * @param  int $top  (optional)
     * @param  int $continuationToken  (optional)
     * @param  string $createdFor  (optional)
     * @param  \DateTime $minStartedTime  (optional)
     * @param  \DateTime $maxStartedTime  (optional)
     * @param  string $sourceBranch  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deploymentsListRequest($organization, $project, $apiVersion, $definitionId = null, $definitionEnvironmentId = null, $createdBy = null, $minModifiedTime = null, $maxModifiedTime = null, $deploymentStatus = null, $operationStatus = null, $latestAttemptsOnly = null, $queryOrder = null, $top = null, $continuationToken = null, $createdFor = null, $minStartedTime = null, $maxStartedTime = null, $sourceBranch = null)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling deploymentsList'
            );
        }
        // verify the required parameter 'project' is set
        if ($project === null || (is_array($project) && count($project) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project when calling deploymentsList'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling deploymentsList'
            );
        }

        $resourcePath = '/{organization}/{project}/_apis/release/deployments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($definitionId !== null) {
            $queryParams['definitionId'] = ObjectSerializer::toQueryValue($definitionId);
        }
        // query params
        if ($definitionEnvironmentId !== null) {
            $queryParams['definitionEnvironmentId'] = ObjectSerializer::toQueryValue($definitionEnvironmentId);
        }
        // query params
        if ($createdBy !== null) {
            $queryParams['createdBy'] = ObjectSerializer::toQueryValue($createdBy);
        }
        // query params
        if ($minModifiedTime !== null) {
            $queryParams['minModifiedTime'] = ObjectSerializer::toQueryValue($minModifiedTime);
        }
        // query params
        if ($maxModifiedTime !== null) {
            $queryParams['maxModifiedTime'] = ObjectSerializer::toQueryValue($maxModifiedTime);
        }
        // query params
        if ($deploymentStatus !== null) {
            $queryParams['deploymentStatus'] = ObjectSerializer::toQueryValue($deploymentStatus);
        }
        // query params
        if ($operationStatus !== null) {
            $queryParams['operationStatus'] = ObjectSerializer::toQueryValue($operationStatus);
        }
        // query params
        if ($latestAttemptsOnly !== null) {
            $queryParams['latestAttemptsOnly'] = ObjectSerializer::toQueryValue($latestAttemptsOnly);
        }
        // query params
        if ($queryOrder !== null) {
            $queryParams['queryOrder'] = ObjectSerializer::toQueryValue($queryOrder);
        }
        // query params
        if ($top !== null) {
            $queryParams['$top'] = ObjectSerializer::toQueryValue($top);
        }
        // query params
        if ($continuationToken !== null) {
            $queryParams['continuationToken'] = ObjectSerializer::toQueryValue($continuationToken);
        }
        // query params
        if ($createdFor !== null) {
            $queryParams['createdFor'] = ObjectSerializer::toQueryValue($createdFor);
        }
        // query params
        if ($minStartedTime !== null) {
            $queryParams['minStartedTime'] = ObjectSerializer::toQueryValue($minStartedTime);
        }
        // query params
        if ($maxStartedTime !== null) {
            $queryParams['maxStartedTime'] = ObjectSerializer::toQueryValue($maxStartedTime);
        }
        // query params
        if ($sourceBranch !== null) {
            $queryParams['sourceBranch'] = ObjectSerializer::toQueryValue($sourceBranch);
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
