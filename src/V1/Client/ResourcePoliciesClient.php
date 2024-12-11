<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Compute\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Compute\V1\AggregatedListResourcePoliciesRequest;
use Google\Cloud\Compute\V1\DeleteResourcePolicyRequest;
use Google\Cloud\Compute\V1\GetIamPolicyResourcePolicyRequest;
use Google\Cloud\Compute\V1\GetResourcePolicyRequest;
use Google\Cloud\Compute\V1\InsertResourcePolicyRequest;
use Google\Cloud\Compute\V1\ListResourcePoliciesRequest;
use Google\Cloud\Compute\V1\PatchResourcePolicyRequest;
use Google\Cloud\Compute\V1\Policy;
use Google\Cloud\Compute\V1\RegionOperationsClient;
use Google\Cloud\Compute\V1\ResourcePolicy;
use Google\Cloud\Compute\V1\SetIamPolicyResourcePolicyRequest;
use Google\Cloud\Compute\V1\TestIamPermissionsResourcePolicyRequest;
use Google\Cloud\Compute\V1\TestPermissionsResponse;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: The ResourcePolicies API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * @method PromiseInterface<PagedListResponse> aggregatedListAsync(AggregatedListResourcePoliciesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteAsync(DeleteResourcePolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ResourcePolicy> getAsync(GetResourcePolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> getIamPolicyAsync(GetIamPolicyResourcePolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> insertAsync(InsertResourcePolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listAsync(ListResourcePoliciesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> patchAsync(PatchResourcePolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> setIamPolicyAsync(SetIamPolicyResourcePolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TestPermissionsResponse> testIamPermissionsAsync(TestIamPermissionsResourcePolicyRequest $request, array $optionalArgs = [])
 */
final class ResourcePoliciesClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.compute.v1.ResourcePolicies';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'compute.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'compute.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/compute',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/resource_policies_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/resource_policies_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/resource_policies_rest_client_config.php',
                ],
            ],
            'operationsClientClass' => RegionOperationsClient::class,
        ];
    }

    /** Implements GapicClientTrait::defaultTransport. */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /** Implements ClientOptionsTrait::supportedTransports. */
    private static function supportedTransports()
    {
        return [
            'rest',
        ];
    }

    /**
     * Return an RegionOperationsClient object with the same endpoint as $this.
     *
     * @return RegionOperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /** Return the default longrunning operation descriptor config. */
    private function getDefaultOperationDescriptor()
    {
        return [
            'additionalArgumentMethods' => [
                'getProject',
                'getRegion',
            ],
            'getOperationMethod' => 'get',
            'cancelOperationMethod' => null,
            'deleteOperationMethod' => 'delete',
            'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
            'operationErrorMessageMethod' => 'getHttpErrorMessage',
            'operationNameMethod' => 'getName',
            'operationStatusMethod' => 'getStatus',
            'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
            'getOperationRequest' => '\Google\Cloud\Compute\V1\GetRegionOperationRequest',
            'cancelOperationRequest' => null,
            'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteRegionOperationRequest',
        ];
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : $this->getDefaultOperationDescriptor();
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'compute.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. At the moment, supports only
     *           `rest`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\RestTransport::build()} method for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Retrieves an aggregated list of resource policies. To prevent failure, Google recommends that you set the `returnPartialSuccess` parameter to `true`.
     *
     * The async variant is {@see ResourcePoliciesClient::aggregatedListAsync()} .
     *
     * @example samples/V1/ResourcePoliciesClient/aggregated_list.php
     *
     * @param AggregatedListResourcePoliciesRequest $request     A request to house fields associated with the call.
     * @param array                                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function aggregatedList(AggregatedListResourcePoliciesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('AggregatedList', $request, $callOptions);
    }

    /**
     * Deletes the specified resource policy.
     *
     * The async variant is {@see ResourcePoliciesClient::deleteAsync()} .
     *
     * @example samples/V1/ResourcePoliciesClient/delete.php
     *
     * @param DeleteResourcePolicyRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function delete(DeleteResourcePolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Delete', $request, $callOptions)->wait();
    }

    /**
     * Retrieves all information of the specified resource policy.
     *
     * The async variant is {@see ResourcePoliciesClient::getAsync()} .
     *
     * @example samples/V1/ResourcePoliciesClient/get.php
     *
     * @param GetResourcePolicyRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ResourcePolicy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function get(GetResourcePolicyRequest $request, array $callOptions = []): ResourcePolicy
    {
        return $this->startApiCall('Get', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. May be empty if no such policy or resource exists.
     *
     * The async variant is {@see ResourcePoliciesClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/ResourcePoliciesClient/get_iam_policy.php
     *
     * @param GetIamPolicyResourcePolicyRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyResourcePolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Creates a new resource policy.
     *
     * The async variant is {@see ResourcePoliciesClient::insertAsync()} .
     *
     * @example samples/V1/ResourcePoliciesClient/insert.php
     *
     * @param InsertResourcePolicyRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function insert(InsertResourcePolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Insert', $request, $callOptions)->wait();
    }

    /**
     * A list all the resource policies that have been configured for the specified project in specified region.
     *
     * The async variant is {@see ResourcePoliciesClient::listAsync()} .
     *
     * @example samples/V1/ResourcePoliciesClient/list.php
     *
     * @param ListResourcePoliciesRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function list(ListResourcePoliciesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('List', $request, $callOptions);
    }

    /**
     * Modify the specified resource policy.
     *
     * The async variant is {@see ResourcePoliciesClient::patchAsync()} .
     *
     * @example samples/V1/ResourcePoliciesClient/patch.php
     *
     * @param PatchResourcePolicyRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function patch(PatchResourcePolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Patch', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces any existing policy.
     *
     * The async variant is {@see ResourcePoliciesClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/ResourcePoliciesClient/set_iam_policy.php
     *
     * @param SetIamPolicyResourcePolicyRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyResourcePolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource.
     *
     * The async variant is {@see ResourcePoliciesClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/ResourcePoliciesClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsResourcePolicyRequest $request     A request to house fields associated with the call.
     * @param array                                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsResourcePolicyRequest $request, array $callOptions = []): TestPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
