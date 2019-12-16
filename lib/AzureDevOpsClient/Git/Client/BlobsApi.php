<?php
/**
 * BlobsApi
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
 * BlobsApi Class Doc Comment
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Git
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BlobsApi
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
     * Operation blobsGetBlob
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $sha1 SHA1 hash of the file. You can get the SHA1 of a file using the \&quot;Git/Items/Get Item\&quot; endpoint. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $download If true, prompt for a download rather than rendering in a browser. Note: this value defaults to true if $format is zip (optional)
     * @param  string $fileName Provide a fileName to use for a download. (optional)
     * @param  string $format Options: json, zip, text, octetstream. If not set, defaults to the MIME type set in the Accept header. (optional)
     * @param  bool $resolveLfs If true, try to resolve a blob to its LFS contents, if it&#39;s an LFS pointer file. Only compatible with octet-stream Accept headers or $format types (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FrankHouweling\AzureDevOpsClient\Git\Model\GitBlobRef
     */
    public function blobsGetBlob($organization, $repositoryId, $sha1, $project, $apiVersion, $download = null, $fileName = null, $format = null, $resolveLfs = null)
    {
        list($response) = $this->blobsGetBlobWithHttpInfo($organization, $repositoryId, $sha1, $project, $apiVersion, $download, $fileName, $format, $resolveLfs);
        return $response;
    }

    /**
     * Operation blobsGetBlobWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $sha1 SHA1 hash of the file. You can get the SHA1 of a file using the \&quot;Git/Items/Get Item\&quot; endpoint. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $download If true, prompt for a download rather than rendering in a browser. Note: this value defaults to true if $format is zip (optional)
     * @param  string $fileName Provide a fileName to use for a download. (optional)
     * @param  string $format Options: json, zip, text, octetstream. If not set, defaults to the MIME type set in the Accept header. (optional)
     * @param  bool $resolveLfs If true, try to resolve a blob to its LFS contents, if it&#39;s an LFS pointer file. Only compatible with octet-stream Accept headers or $format types (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FrankHouweling\AzureDevOpsClient\Git\Model\GitBlobRef, HTTP status code, HTTP response headers (array of strings)
     */
    public function blobsGetBlobWithHttpInfo($organization, $repositoryId, $sha1, $project, $apiVersion, $download = null, $fileName = null, $format = null, $resolveLfs = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Git\Model\GitBlobRef';
        $request = $this->blobsGetBlobRequest($organization, $repositoryId, $sha1, $project, $apiVersion, $download, $fileName, $format, $resolveLfs);

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
                        '\FrankHouweling\AzureDevOpsClient\Git\Model\GitBlobRef',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation blobsGetBlobAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $sha1 SHA1 hash of the file. You can get the SHA1 of a file using the \&quot;Git/Items/Get Item\&quot; endpoint. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $download If true, prompt for a download rather than rendering in a browser. Note: this value defaults to true if $format is zip (optional)
     * @param  string $fileName Provide a fileName to use for a download. (optional)
     * @param  string $format Options: json, zip, text, octetstream. If not set, defaults to the MIME type set in the Accept header. (optional)
     * @param  bool $resolveLfs If true, try to resolve a blob to its LFS contents, if it&#39;s an LFS pointer file. Only compatible with octet-stream Accept headers or $format types (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsGetBlobAsync($organization, $repositoryId, $sha1, $project, $apiVersion, $download = null, $fileName = null, $format = null, $resolveLfs = null)
    {
        return $this->blobsGetBlobAsyncWithHttpInfo($organization, $repositoryId, $sha1, $project, $apiVersion, $download, $fileName, $format, $resolveLfs)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blobsGetBlobAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $sha1 SHA1 hash of the file. You can get the SHA1 of a file using the \&quot;Git/Items/Get Item\&quot; endpoint. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $download If true, prompt for a download rather than rendering in a browser. Note: this value defaults to true if $format is zip (optional)
     * @param  string $fileName Provide a fileName to use for a download. (optional)
     * @param  string $format Options: json, zip, text, octetstream. If not set, defaults to the MIME type set in the Accept header. (optional)
     * @param  bool $resolveLfs If true, try to resolve a blob to its LFS contents, if it&#39;s an LFS pointer file. Only compatible with octet-stream Accept headers or $format types (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsGetBlobAsyncWithHttpInfo($organization, $repositoryId, $sha1, $project, $apiVersion, $download = null, $fileName = null, $format = null, $resolveLfs = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Git\Model\GitBlobRef';
        $request = $this->blobsGetBlobRequest($organization, $repositoryId, $sha1, $project, $apiVersion, $download, $fileName, $format, $resolveLfs);

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
     * Create request for operation 'blobsGetBlob'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $sha1 SHA1 hash of the file. You can get the SHA1 of a file using the \&quot;Git/Items/Get Item\&quot; endpoint. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  bool $download If true, prompt for a download rather than rendering in a browser. Note: this value defaults to true if $format is zip (optional)
     * @param  string $fileName Provide a fileName to use for a download. (optional)
     * @param  string $format Options: json, zip, text, octetstream. If not set, defaults to the MIME type set in the Accept header. (optional)
     * @param  bool $resolveLfs If true, try to resolve a blob to its LFS contents, if it&#39;s an LFS pointer file. Only compatible with octet-stream Accept headers or $format types (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function blobsGetBlobRequest($organization, $repositoryId, $sha1, $project, $apiVersion, $download = null, $fileName = null, $format = null, $resolveLfs = null)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling blobsGetBlob'
            );
        }
        // verify the required parameter 'repositoryId' is set
        if ($repositoryId === null || (is_array($repositoryId) && count($repositoryId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $repositoryId when calling blobsGetBlob'
            );
        }
        // verify the required parameter 'sha1' is set
        if ($sha1 === null || (is_array($sha1) && count($sha1) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sha1 when calling blobsGetBlob'
            );
        }
        // verify the required parameter 'project' is set
        if ($project === null || (is_array($project) && count($project) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project when calling blobsGetBlob'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling blobsGetBlob'
            );
        }

        $resourcePath = '/{organization}/{project}/_apis/git/repositories/{repositoryId}/blobs/{sha1}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($download !== null) {
            $queryParams['download'] = ObjectSerializer::toQueryValue($download);
        }
        // query params
        if ($fileName !== null) {
            $queryParams['fileName'] = ObjectSerializer::toQueryValue($fileName);
        }
        // query params
        if ($format !== null) {
            $queryParams['$format'] = ObjectSerializer::toQueryValue($format);
        }
        // query params
        if ($resolveLfs !== null) {
            $queryParams['resolveLfs'] = ObjectSerializer::toQueryValue($resolveLfs);
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
        if ($sha1 !== null) {
            $resourcePath = str_replace(
                '{' . 'sha1' . '}',
                ObjectSerializer::toPathValue($sha1),
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
                ['application/zip', 'application/octet-stream', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/zip', 'application/octet-stream', 'application/json'],
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
     * Operation blobsGetBlobsZip
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string[] $body Blob IDs (SHA1 hashes) to be returned in the zip file. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $filename  (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function blobsGetBlobsZip($organization, $body, $repositoryId, $project, $apiVersion, $filename = null)
    {
        list($response) = $this->blobsGetBlobsZipWithHttpInfo($organization, $body, $repositoryId, $project, $apiVersion, $filename);
        return $response;
    }

    /**
     * Operation blobsGetBlobsZipWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string[] $body Blob IDs (SHA1 hashes) to be returned in the zip file. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $filename  (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Git\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function blobsGetBlobsZipWithHttpInfo($organization, $body, $repositoryId, $project, $apiVersion, $filename = null)
    {
        $returnType = 'string';
        $request = $this->blobsGetBlobsZipRequest($organization, $body, $repositoryId, $project, $apiVersion, $filename);

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
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation blobsGetBlobsZipAsync
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string[] $body Blob IDs (SHA1 hashes) to be returned in the zip file. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $filename  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsGetBlobsZipAsync($organization, $body, $repositoryId, $project, $apiVersion, $filename = null)
    {
        return $this->blobsGetBlobsZipAsyncWithHttpInfo($organization, $body, $repositoryId, $project, $apiVersion, $filename)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blobsGetBlobsZipAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string[] $body Blob IDs (SHA1 hashes) to be returned in the zip file. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $filename  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blobsGetBlobsZipAsyncWithHttpInfo($organization, $body, $repositoryId, $project, $apiVersion, $filename = null)
    {
        $returnType = 'string';
        $request = $this->blobsGetBlobsZipRequest($organization, $body, $repositoryId, $project, $apiVersion, $filename);

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
     * Create request for operation 'blobsGetBlobsZip'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string[] $body Blob IDs (SHA1 hashes) to be returned in the zip file. (required)
     * @param  string $repositoryId The name or ID of the repository. (required)
     * @param  string $project Project ID or project name (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  string $filename  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function blobsGetBlobsZipRequest($organization, $body, $repositoryId, $project, $apiVersion, $filename = null)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling blobsGetBlobsZip'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling blobsGetBlobsZip'
            );
        }
        // verify the required parameter 'repositoryId' is set
        if ($repositoryId === null || (is_array($repositoryId) && count($repositoryId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $repositoryId when calling blobsGetBlobsZip'
            );
        }
        // verify the required parameter 'project' is set
        if ($project === null || (is_array($project) && count($project) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project when calling blobsGetBlobsZip'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling blobsGetBlobsZip'
            );
        }

        $resourcePath = '/{organization}/{project}/_apis/git/repositories/{repositoryId}/blobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filename !== null) {
            $queryParams['filename'] = ObjectSerializer::toQueryValue($filename);
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/zip']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/zip'],
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
