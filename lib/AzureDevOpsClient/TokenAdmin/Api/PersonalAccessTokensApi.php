<?php
/**
 * PersonalAccessTokensApi
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\TokenAdmin
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TokenAdmin
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

namespace FrankHouweling\AzureDevOpsClient\TokenAdmin\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FrankHouweling\AzureDevOpsClient\TokenAdmin\ApiException;
use FrankHouweling\AzureDevOpsClient\TokenAdmin\Configuration;
use FrankHouweling\AzureDevOpsClient\TokenAdmin\HeaderSelector;
use FrankHouweling\AzureDevOpsClient\TokenAdmin\ObjectSerializer;

/**
 * PersonalAccessTokensApi Class Doc Comment
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\TokenAdmin
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonalAccessTokensApi
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
     * Operation personalAccessTokensList
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $subjectDescriptor The descriptor of the target user. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $pageSize The maximum number of results to return on each page. (optional)
     * @param  string $continuationToken An opaque data blob that allows the next page of data to resume immediately after where the previous page ended. The only reliable way to know if there is more data left is the presence of a continuation token. (optional)
     * @param  bool $isPublic Set to false for PAT tokens and true for SSH tokens. (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\TokenAdmin\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FrankHouweling\AzureDevOpsClient\TokenAdmin\Model\TokenAdminPagedSessionTokens
     */
    public function personalAccessTokensList($organization, $subjectDescriptor, $apiVersion, $pageSize = null, $continuationToken = null, $isPublic = null)
    {
        list($response) = $this->personalAccessTokensListWithHttpInfo($organization, $subjectDescriptor, $apiVersion, $pageSize, $continuationToken, $isPublic);
        return $response;
    }

    /**
     * Operation personalAccessTokensListWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $subjectDescriptor The descriptor of the target user. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $pageSize The maximum number of results to return on each page. (optional)
     * @param  string $continuationToken An opaque data blob that allows the next page of data to resume immediately after where the previous page ended. The only reliable way to know if there is more data left is the presence of a continuation token. (optional)
     * @param  bool $isPublic Set to false for PAT tokens and true for SSH tokens. (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\TokenAdmin\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FrankHouweling\AzureDevOpsClient\TokenAdmin\Model\TokenAdminPagedSessionTokens, HTTP status code, HTTP response headers (array of strings)
     */
    public function personalAccessTokensListWithHttpInfo($organization, $subjectDescriptor, $apiVersion, $pageSize = null, $continuationToken = null, $isPublic = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\TokenAdmin\Model\TokenAdminPagedSessionTokens';
        $request = $this->personalAccessTokensListRequest($organization, $subjectDescriptor, $apiVersion, $pageSize, $continuationToken, $isPublic);

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
                        '\FrankHouweling\AzureDevOpsClient\TokenAdmin\Model\TokenAdminPagedSessionTokens',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation personalAccessTokensListAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $subjectDescriptor The descriptor of the target user. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $pageSize The maximum number of results to return on each page. (optional)
     * @param  string $continuationToken An opaque data blob that allows the next page of data to resume immediately after where the previous page ended. The only reliable way to know if there is more data left is the presence of a continuation token. (optional)
     * @param  bool $isPublic Set to false for PAT tokens and true for SSH tokens. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function personalAccessTokensListAsync($organization, $subjectDescriptor, $apiVersion, $pageSize = null, $continuationToken = null, $isPublic = null)
    {
        return $this->personalAccessTokensListAsyncWithHttpInfo($organization, $subjectDescriptor, $apiVersion, $pageSize, $continuationToken, $isPublic)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation personalAccessTokensListAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $subjectDescriptor The descriptor of the target user. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $pageSize The maximum number of results to return on each page. (optional)
     * @param  string $continuationToken An opaque data blob that allows the next page of data to resume immediately after where the previous page ended. The only reliable way to know if there is more data left is the presence of a continuation token. (optional)
     * @param  bool $isPublic Set to false for PAT tokens and true for SSH tokens. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function personalAccessTokensListAsyncWithHttpInfo($organization, $subjectDescriptor, $apiVersion, $pageSize = null, $continuationToken = null, $isPublic = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\TokenAdmin\Model\TokenAdminPagedSessionTokens';
        $request = $this->personalAccessTokensListRequest($organization, $subjectDescriptor, $apiVersion, $pageSize, $continuationToken, $isPublic);

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
     * Create request for operation 'personalAccessTokensList'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $subjectDescriptor The descriptor of the target user. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $pageSize The maximum number of results to return on each page. (optional)
     * @param  string $continuationToken An opaque data blob that allows the next page of data to resume immediately after where the previous page ended. The only reliable way to know if there is more data left is the presence of a continuation token. (optional)
     * @param  bool $isPublic Set to false for PAT tokens and true for SSH tokens. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function personalAccessTokensListRequest($organization, $subjectDescriptor, $apiVersion, $pageSize = null, $continuationToken = null, $isPublic = null)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling personalAccessTokensList'
            );
        }
        // verify the required parameter 'subjectDescriptor' is set
        if ($subjectDescriptor === null || (is_array($subjectDescriptor) && count($subjectDescriptor) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $subjectDescriptor when calling personalAccessTokensList'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling personalAccessTokensList'
            );
        }

        $resourcePath = '/{organization}/_apis/tokenadmin/personalaccesstokens/{subjectDescriptor}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($pageSize !== null) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($pageSize);
        }
        // query params
        if ($continuationToken !== null) {
            $queryParams['continuationToken'] = ObjectSerializer::toQueryValue($continuationToken);
        }
        // query params
        if ($isPublic !== null) {
            $queryParams['isPublic'] = ObjectSerializer::toQueryValue($isPublic);
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
        if ($subjectDescriptor !== null) {
            $resourcePath = str_replace(
                '{' . 'subjectDescriptor' . '}',
                ObjectSerializer::toPathValue($subjectDescriptor),
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
