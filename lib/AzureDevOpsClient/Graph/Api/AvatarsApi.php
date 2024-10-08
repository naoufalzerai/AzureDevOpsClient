<?php
/**
 * AvatarsApi
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Graph
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Graph
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

namespace FrankHouweling\AzureDevOpsClient\Graph\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FrankHouweling\AzureDevOpsClient\Graph\ApiException;
use FrankHouweling\AzureDevOpsClient\Graph\Configuration;
use FrankHouweling\AzureDevOpsClient\Graph\HeaderSelector;
use FrankHouweling\AzureDevOpsClient\Graph\ObjectSerializer;

/**
 * AvatarsApi Class Doc Comment
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Graph
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvatarsApi
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
     * Operation avatarsDelete
     *
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Graph\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function avatarsDelete($subjectDescriptor, $organization, $apiVersion)
    {
        $this->avatarsDeleteWithHttpInfo($subjectDescriptor, $organization, $apiVersion);
    }

    /**
     * Operation avatarsDeleteWithHttpInfo
     *
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Graph\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function avatarsDeleteWithHttpInfo($subjectDescriptor, $organization, $apiVersion)
    {
        $returnType = '';
        $request = $this->avatarsDeleteRequest($subjectDescriptor, $organization, $apiVersion);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation avatarsDeleteAsync
     *
     *
     *
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function avatarsDeleteAsync($subjectDescriptor, $organization, $apiVersion)
    {
        return $this->avatarsDeleteAsyncWithHttpInfo($subjectDescriptor, $organization, $apiVersion)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation avatarsDeleteAsyncWithHttpInfo
     *
     *
     *
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function avatarsDeleteAsyncWithHttpInfo($subjectDescriptor, $organization, $apiVersion)
    {
        $returnType = '';
        $request = $this->avatarsDeleteRequest($subjectDescriptor, $organization, $apiVersion);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'avatarsDelete'
     *
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function avatarsDeleteRequest($subjectDescriptor, $organization, $apiVersion)
    {
        // verify the required parameter 'subjectDescriptor' is set
        if ($subjectDescriptor === null || (is_array($subjectDescriptor) && count($subjectDescriptor) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $subjectDescriptor when calling avatarsDelete'
            );
        }
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling avatarsDelete'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling avatarsDelete'
            );
        }

        $resourcePath = '/{organization}/_apis/graph/Subjects/{subjectDescriptor}/avatars';
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
        if ($subjectDescriptor !== null) {
            $resourcePath = str_replace(
                '{' . 'subjectDescriptor' . '}',
                ObjectSerializer::toPathValue($subjectDescriptor),
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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

        // this endpoint requires HTTP basic authentication
        else if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
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
     * Operation avatarsGet
     *
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $size  (optional)
     * @param  string $format  (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Graph\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FrankHouweling\AzureDevOpsClient\Graph\Model\Avatar
     */
    public function avatarsGet($subjectDescriptor, $organization, $apiVersion, $size = null, $format = null)
    {
        list($response) = $this->avatarsGetWithHttpInfo($subjectDescriptor, $organization, $apiVersion, $size, $format);
        return $response;
    }

    /**
     * Operation avatarsGetWithHttpInfo
     *
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $size  (optional)
     * @param  string $format  (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Graph\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FrankHouweling\AzureDevOpsClient\Graph\Model\Avatar, HTTP status code, HTTP response headers (array of strings)
     */
    public function avatarsGetWithHttpInfo($subjectDescriptor, $organization, $apiVersion, $size = null, $format = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Graph\Model\Avatar';
        $request = $this->avatarsGetRequest($subjectDescriptor, $organization, $apiVersion, $size, $format);

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
                    $content = json_decode($content)->value;
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
                        '\FrankHouweling\AzureDevOpsClient\Graph\Model\Avatar',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation avatarsGetAsync
     *
     *
     *
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $size  (optional)
     * @param  string $format  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function avatarsGetAsync($subjectDescriptor, $organization, $apiVersion, $size = null, $format = null)
    {
        return $this->avatarsGetAsyncWithHttpInfo($subjectDescriptor, $organization, $apiVersion, $size, $format)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation avatarsGetAsyncWithHttpInfo
     *
     *
     *
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $size  (optional)
     * @param  string $format  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function avatarsGetAsyncWithHttpInfo($subjectDescriptor, $organization, $apiVersion, $size = null, $format = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Graph\Model\Avatar';
        $request = $this->avatarsGetRequest($subjectDescriptor, $organization, $apiVersion, $size, $format);

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
                            $content = json_decode($content)->value;
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
     * Create request for operation 'avatarsGet'
     *
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $size  (optional)
     * @param  string $format  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function avatarsGetRequest($subjectDescriptor, $organization, $apiVersion, $size = null, $format = null)
    {
        // verify the required parameter 'subjectDescriptor' is set
        if ($subjectDescriptor === null || (is_array($subjectDescriptor) && count($subjectDescriptor) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $subjectDescriptor when calling avatarsGet'
            );
        }
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling avatarsGet'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling avatarsGet'
            );
        }

        $resourcePath = '/{organization}/_apis/graph/Subjects/{subjectDescriptor}/avatars';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($size !== null) {
            $queryParams['size'] = ObjectSerializer::toQueryValue($size);
        }
        // query params
        if ($format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($format);
        }
        // query params
        if ($apiVersion !== null) {
            $queryParams['api-version'] = ObjectSerializer::toQueryValue($apiVersion);
        }

        // path params
        if ($subjectDescriptor !== null) {
            $resourcePath = str_replace(
                '{' . 'subjectDescriptor' . '}',
                ObjectSerializer::toPathValue($subjectDescriptor),
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

		else if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
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
     * Operation avatarsSetAvatar
     *
     * @param  \FrankHouweling\AzureDevOpsClient\Graph\Model\Avatar $body  (required)
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Graph\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function avatarsSetAvatar($body, $subjectDescriptor, $organization, $apiVersion)
    {
        $this->avatarsSetAvatarWithHttpInfo($body, $subjectDescriptor, $organization, $apiVersion);
    }

    /**
     * Operation avatarsSetAvatarWithHttpInfo
     *
     * @param  \FrankHouweling\AzureDevOpsClient\Graph\Model\Avatar $body  (required)
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Graph\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function avatarsSetAvatarWithHttpInfo($body, $subjectDescriptor, $organization, $apiVersion)
    {
        $returnType = '';
        $request = $this->avatarsSetAvatarRequest($body, $subjectDescriptor, $organization, $apiVersion);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation avatarsSetAvatarAsync
     *
     *
     *
     * @param  \FrankHouweling\AzureDevOpsClient\Graph\Model\Avatar $body  (required)
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function avatarsSetAvatarAsync($body, $subjectDescriptor, $organization, $apiVersion)
    {
        return $this->avatarsSetAvatarAsyncWithHttpInfo($body, $subjectDescriptor, $organization, $apiVersion)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation avatarsSetAvatarAsyncWithHttpInfo
     *
     *
     *
     * @param  \FrankHouweling\AzureDevOpsClient\Graph\Model\Avatar $body  (required)
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function avatarsSetAvatarAsyncWithHttpInfo($body, $subjectDescriptor, $organization, $apiVersion)
    {
        $returnType = '';
        $request = $this->avatarsSetAvatarRequest($body, $subjectDescriptor, $organization, $apiVersion);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'avatarsSetAvatar'
     *
     * @param  \FrankHouweling\AzureDevOpsClient\Graph\Model\Avatar $body  (required)
     * @param  string $subjectDescriptor  (required)
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function avatarsSetAvatarRequest($body, $subjectDescriptor, $organization, $apiVersion)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling avatarsSetAvatar'
            );
        }
        // verify the required parameter 'subjectDescriptor' is set
        if ($subjectDescriptor === null || (is_array($subjectDescriptor) && count($subjectDescriptor) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $subjectDescriptor when calling avatarsSetAvatar'
            );
        }
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling avatarsSetAvatar'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling avatarsSetAvatar'
            );
        }

        $resourcePath = '/{organization}/_apis/graph/Subjects/{subjectDescriptor}/avatars';
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
        if ($subjectDescriptor !== null) {
            $resourcePath = str_replace(
                '{' . 'subjectDescriptor' . '}',
                ObjectSerializer::toPathValue($subjectDescriptor),
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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

        // this endpoint requires HTTP basic authentication
        else if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
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
            'PUT',
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
