<?php
/**
 * CommentReactionsEngagedUsersApi
 * PHP version 5
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Wit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WorkItemTracking
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

namespace FrankHouweling\AzureDevOpsClient\Wit\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FrankHouweling\AzureDevOpsClient\Wit\ApiException;
use FrankHouweling\AzureDevOpsClient\Wit\Configuration;
use FrankHouweling\AzureDevOpsClient\Wit\HeaderSelector;
use FrankHouweling\AzureDevOpsClient\Wit\ObjectSerializer;

/**
 * CommentReactionsEngagedUsersApi Class Doc Comment
 *
 * @category Class
 * @package  FrankHouweling\AzureDevOpsClient\Wit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommentReactionsEngagedUsersApi
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
     * Operation commentReactionsEngagedUsersList
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  int $workItemId WorkItem ID. (required)
     * @param  int $commentId Comment ID. (required)
     * @param  string $reactionType Type of the reaction. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $top  (optional)
     * @param  int $skip  (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Wit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef[]
     */
    public function commentReactionsEngagedUsersList($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion, $top = null, $skip = null)
    {
        list($response) = $this->commentReactionsEngagedUsersListWithHttpInfo($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion, $top, $skip);
        return $response;
    }

    /**
     * Operation commentReactionsEngagedUsersListWithHttpInfo
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  int $workItemId WorkItem ID. (required)
     * @param  int $commentId Comment ID. (required)
     * @param  string $reactionType Type of the reaction. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $top  (optional)
     * @param  int $skip  (optional)
     *
     * @throws \FrankHouweling\AzureDevOpsClient\Wit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef[], HTTP status code, HTTP response headers (array of strings)
     */
    public function commentReactionsEngagedUsersListWithHttpInfo($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion, $top = null, $skip = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef[]';
        $request = $this->commentReactionsEngagedUsersListRequest($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion, $top, $skip);

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
                        '\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation commentReactionsEngagedUsersListAsync
     *
     *
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  int $workItemId WorkItem ID. (required)
     * @param  int $commentId Comment ID. (required)
     * @param  string $reactionType Type of the reaction. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $top  (optional)
     * @param  int $skip  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function commentReactionsEngagedUsersListAsync($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion, $top = null, $skip = null)
    {
        return $this->commentReactionsEngagedUsersListAsyncWithHttpInfo($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion, $top, $skip)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation commentReactionsEngagedUsersListAsyncWithHttpInfo
     *
     *
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  int $workItemId WorkItem ID. (required)
     * @param  int $commentId Comment ID. (required)
     * @param  string $reactionType Type of the reaction. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $top  (optional)
     * @param  int $skip  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function commentReactionsEngagedUsersListAsyncWithHttpInfo($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion, $top = null, $skip = null)
    {
        $returnType = '\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityRef[]';
        $request = $this->commentReactionsEngagedUsersListRequest($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion, $top, $skip);

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
     * Create request for operation 'commentReactionsEngagedUsersList'
     *
     * @param  string $organization The name of the Azure DevOps organization. (required)
     * @param  string $project Project ID or project name (required)
     * @param  int $workItemId WorkItem ID. (required)
     * @param  int $commentId Comment ID. (required)
     * @param  string $reactionType Type of the reaction. (required)
     * @param  string $apiVersion Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. (required)
     * @param  int $top  (optional)
     * @param  int $skip  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function commentReactionsEngagedUsersListRequest($organization, $project, $workItemId, $commentId, $reactionType, $apiVersion, $top = null, $skip = null)
    {
        // verify the required parameter 'organization' is set
        if ($organization === null || (is_array($organization) && count($organization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization when calling commentReactionsEngagedUsersList'
            );
        }
        // verify the required parameter 'project' is set
        if ($project === null || (is_array($project) && count($project) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project when calling commentReactionsEngagedUsersList'
            );
        }
        // verify the required parameter 'workItemId' is set
        if ($workItemId === null || (is_array($workItemId) && count($workItemId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $workItemId when calling commentReactionsEngagedUsersList'
            );
        }
        // verify the required parameter 'commentId' is set
        if ($commentId === null || (is_array($commentId) && count($commentId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $commentId when calling commentReactionsEngagedUsersList'
            );
        }
        // verify the required parameter 'reactionType' is set
        if ($reactionType === null || (is_array($reactionType) && count($reactionType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reactionType when calling commentReactionsEngagedUsersList'
            );
        }
        // verify the required parameter 'apiVersion' is set
        if ($apiVersion === null || (is_array($apiVersion) && count($apiVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiVersion when calling commentReactionsEngagedUsersList'
            );
        }

        $resourcePath = '/{organization}/{project}/_apis/wit/workItems/{workItemId}/comments/{commentId}/reactions/{reactionType}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($top !== null) {
            $queryParams['$top'] = ObjectSerializer::toQueryValue($top);
        }
        // query params
        if ($skip !== null) {
            $queryParams['$skip'] = ObjectSerializer::toQueryValue($skip);
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
        // path params
        if ($workItemId !== null) {
            $resourcePath = str_replace(
                '{' . 'workItemId' . '}',
                ObjectSerializer::toPathValue($workItemId),
                $resourcePath
            );
        }
        // path params
        if ($commentId !== null) {
            $resourcePath = str_replace(
                '{' . 'commentId' . '}',
                ObjectSerializer::toPathValue($commentId),
                $resourcePath
            );
        }
        // path params
        if ($reactionType !== null) {
            $resourcePath = str_replace(
                '{' . 'reactionType' . '}',
                ObjectSerializer::toPathValue($reactionType),
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
