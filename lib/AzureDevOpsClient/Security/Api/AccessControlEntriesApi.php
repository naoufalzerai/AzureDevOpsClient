<?php
/**
 * AccessControlEntriesApi
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Security
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Security
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

namespace FrankHouweling\AzureDevOpsClient\Security\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FrankHouweling\AzureDevOpsClient\Security\ApiException;
use FrankHouweling\AzureDevOpsClient\Security\Configuration;
use FrankHouweling\AzureDevOpsClient\Security\HeaderSelector;
use FrankHouweling\AzureDevOpsClient\Security\ObjectSerializer;

/**
 * AccessControlEntriesApi Class Doc Comment
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Security
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccessControlEntriesApi
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
     * Operation accessControlEntriesRemoveAccessControlEntries
     *
     * @param  string $securityNamespaceId Security namespace identifier. (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $token The token whose ACL should be modified. (optional)
     * @param  string $descriptors String containing a list of identity descriptors separated by &#39;,&#39; whose entries should be removed. (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Security\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return bool
     */
    public function accessControlEntriesRemoveAccessControlEntries($securityNamespaceId, $organization, $apiVersion, $token = null, $descriptors = null)
    {
        list($response) = $this->accessControlEntriesRemoveAccessControlEntriesWithHttpInfo($securityNamespaceId, $organization, $apiVersion, $token, $descriptors);
        return $response;
    }

    /**
     * Operation accessControlEntriesRemoveAccessControlEntriesWithHttpInfo
     *
     * @param  string $securityNamespaceId Security namespace identifier. (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $token The token whose ACL should be modified. (optional)
     * @param  string $descriptors String containing a list of identity descriptors separated by &#39;,&#39; whose entries should be removed. (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Security\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function accessControlEntriesRemoveAccessControlEntriesWithHttpInfo($securityNamespaceId, $organization, $apiVersion, $token = null, $descriptors = null)
    {
        $returnType = 'bool';
        $request = $this->accessControlEntriesRemoveAccessControlEntriesRequest($securityNamespaceId, $organization, $apiVersion, $token, $descriptors);

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
                        'bool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accessControlEntriesRemoveAccessControlEntriesAsync
     *
     * 
     *
     * @param  string $securityNamespaceId Security namespace identifier. (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $token The token whose ACL should be modified. (optional)
     * @param  string $descriptors String containing a list of identity descriptors separated by &#39;,&#39; whose entries should be removed. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accessControlEntriesRemoveAccessControlEntriesAsync($securityNamespaceId, $organization, $apiVersion, $token = null, $descriptors = null)
    {
        return $this->accessControlEntriesRemoveAccessControlEntriesAsyncWithHttpInfo($securityNamespaceId, $organization, $apiVersion, $token, $descriptors)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accessControlEntriesRemoveAccessControlEntriesAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $securityNamespaceId Security namespace identifier. (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $token The token whose ACL should be modified. (optional)
     * @param  string $descriptors String containing a list of identity descriptors separated by &#39;,&#39; whose entries should be removed. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accessControlEntriesRemoveAccessControlEntriesAsyncWithHttpInfo($securityNamespaceId, $organization, $apiVersion, $token = null, $descriptors = null)
    {
        $returnType = 'bool';
        $request = $this->accessControlEntriesRemoveAccessControlEntriesRequest($securityNamespaceId, $organization, $apiVersion, $token, $descriptors);

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
     * Create request for operation 'accessControlEntriesRemoveAccessControlEntries'
     *
     * @param  string $securityNamespaceId Security namespace identifier. (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $token The token whose ACL should be modified. (optional)
     * @param  string $descriptors String containing a list of identity descriptors separated by &#39;,&#39; whose entries should be removed. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function accessControlEntriesRemoveAccessControlEntriesRequest($securityNamespaceId, $organization, $apiVersion, $token = null, $descriptors = null)
    {
        // verify the required parameter 'securityNamespaceId' is set
        if ($securityNamespaceId === null || (is_array($securityNamespaceId) && count($securityNamespaceId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $securityNamespaceId when calling accessControlEntriesRemoveAccessControlEntries'
            );
        }
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling accessControlEntriesRemoveAccessControlEntries'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling accessControlEntriesRemoveAccessControlEntries'
            );
        }

        $resourcePath = '/{organization}/_apis/accesscontrolentries/{securityNamespaceId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($token !== null) {
            $queryParams['token'] = ObjectSerializer::toQueryValue($token);
        }
        // query params
        if ($descriptors !== null) {
            $queryParams['descriptors'] = ObjectSerializer::toQueryValue($descriptors);
        }
        // query params
        if ($apiVersion !== null) {
            $queryParams['api-version'] = ObjectSerializer::toQueryValue($apiVersion);
        }

        // path params
        if ($securityNamespaceId !== null) {
            $resourcePath = str_replace(
                '{' . 'securityNamespaceId' . '}',
                ObjectSerializer::toPathValue($securityNamespaceId),
                $resourcePath
            );
        }
        // path params
        if ($organization !== null) {
            $resourcePath = str_replace(
                '{' . 'organization' . '}',
                ObjectSerializer::toPathValue($organization),
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation accessControlEntriesSetAccessControlEntries
     *
     * @param  \FrankHouweling\AzureDevOpsClient\Security\Model\JObject $body  (required)
     * @param  string $securityNamespaceId Security namespace identifier. (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Security\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FrankHouweling\AzureDevOpsClient\Security\Model\AccessControlEntry[]
     */
    public function accessControlEntriesSetAccessControlEntries($body, $securityNamespaceId, $organization, $apiVersion)
    {
        list($response) = $this->accessControlEntriesSetAccessControlEntriesWithHttpInfo($body, $securityNamespaceId, $organization, $apiVersion);
        return $response;
    }

    /**
     * Operation accessControlEntriesSetAccessControlEntriesWithHttpInfo
     *
     * @param  \FrankHouweling\AzureDevOpsClient\Security\Model\JObject $body  (required)
     * @param  string $securityNamespaceId Security namespace identifier. (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Security\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FrankHouweling\AzureDevOpsClient\Security\Model\AccessControlEntry[], HTTP status code, HTTP response headers (array of strings)
     */
    public function accessControlEntriesSetAccessControlEntriesWithHttpInfo($body, $securityNamespaceId, $organization, $apiVersion)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Security\Model\AccessControlEntry[]';
        $request = $this->accessControlEntriesSetAccessControlEntriesRequest($body, $securityNamespaceId, $organization, $apiVersion);

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
                        '\FrankHouweling\AzureDevOpsClient\Security\Model\AccessControlEntry[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accessControlEntriesSetAccessControlEntriesAsync
     *
     * 
     *
     * @param  \FrankHouweling\AzureDevOpsClient\Security\Model\JObject $body  (required)
     * @param  string $securityNamespaceId Security namespace identifier. (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accessControlEntriesSetAccessControlEntriesAsync($body, $securityNamespaceId, $organization, $apiVersion)
    {
        return $this->accessControlEntriesSetAccessControlEntriesAsyncWithHttpInfo($body, $securityNamespaceId, $organization, $apiVersion)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accessControlEntriesSetAccessControlEntriesAsyncWithHttpInfo
     *
     * 
     *
     * @param  \FrankHouweling\AzureDevOpsClient\Security\Model\JObject $body  (required)
     * @param  string $securityNamespaceId Security namespace identifier. (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accessControlEntriesSetAccessControlEntriesAsyncWithHttpInfo($body, $securityNamespaceId, $organization, $apiVersion)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Security\Model\AccessControlEntry[]';
        $request = $this->accessControlEntriesSetAccessControlEntriesRequest($body, $securityNamespaceId, $organization, $apiVersion);

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
     * Create request for operation 'accessControlEntriesSetAccessControlEntries'
     *
     * @param  \FrankHouweling\AzureDevOpsClient\Security\Model\JObject $body  (required)
     * @param  string $securityNamespaceId Security namespace identifier. (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function accessControlEntriesSetAccessControlEntriesRequest($body, $securityNamespaceId, $organization, $apiVersion)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling accessControlEntriesSetAccessControlEntries'
            );
        }
        // verify the required parameter 'securityNamespaceId' is set
        if ($securityNamespaceId === null || (is_array($securityNamespaceId) && count($securityNamespaceId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $securityNamespaceId when calling accessControlEntriesSetAccessControlEntries'
            );
        }
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling accessControlEntriesSetAccessControlEntries'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling accessControlEntriesSetAccessControlEntries'
            );
        }

        $resourcePath = '/{organization}/_apis/accesscontrolentries/{securityNamespaceId}';
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
        if ($securityNamespaceId !== null) {
            $resourcePath = str_replace(
                '{' . 'securityNamespaceId' . '}',
                ObjectSerializer::toPathValue($securityNamespaceId),
                $resourcePath
            );
        }
        // path params
        if ($organization !== null) {
            $resourcePath = str_replace(
                '{' . 'organization' . '}',
                ObjectSerializer::toPathValue($organization),
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
            'POST',
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
