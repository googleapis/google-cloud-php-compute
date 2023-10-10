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
use Google\Cloud\Compute\V1\AddAssociationFirewallPolicyRequest;
use Google\Cloud\Compute\V1\AddRuleFirewallPolicyRequest;
use Google\Cloud\Compute\V1\CloneRulesFirewallPolicyRequest;
use Google\Cloud\Compute\V1\DeleteFirewallPolicyRequest;
use Google\Cloud\Compute\V1\FirewallPoliciesListAssociationsResponse;
use Google\Cloud\Compute\V1\FirewallPolicy;
use Google\Cloud\Compute\V1\FirewallPolicyAssociation;
use Google\Cloud\Compute\V1\FirewallPolicyRule;
use Google\Cloud\Compute\V1\GetAssociationFirewallPolicyRequest;
use Google\Cloud\Compute\V1\GetFirewallPolicyRequest;
use Google\Cloud\Compute\V1\GetIamPolicyFirewallPolicyRequest;
use Google\Cloud\Compute\V1\GetRuleFirewallPolicyRequest;
use Google\Cloud\Compute\V1\GlobalOrganizationOperationsClient;
use Google\Cloud\Compute\V1\InsertFirewallPolicyRequest;
use Google\Cloud\Compute\V1\ListAssociationsFirewallPolicyRequest;
use Google\Cloud\Compute\V1\ListFirewallPoliciesRequest;
use Google\Cloud\Compute\V1\MoveFirewallPolicyRequest;
use Google\Cloud\Compute\V1\PatchFirewallPolicyRequest;
use Google\Cloud\Compute\V1\PatchRuleFirewallPolicyRequest;
use Google\Cloud\Compute\V1\Policy;
use Google\Cloud\Compute\V1\RemoveAssociationFirewallPolicyRequest;
use Google\Cloud\Compute\V1\RemoveRuleFirewallPolicyRequest;
use Google\Cloud\Compute\V1\SetIamPolicyFirewallPolicyRequest;
use Google\Cloud\Compute\V1\TestIamPermissionsFirewallPolicyRequest;
use Google\Cloud\Compute\V1\TestPermissionsResponse;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: The FirewallPolicies API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * This class is currently experimental and may be subject to changes. See {@see
 * \Google\Cloud\Compute\V1\FirewallPoliciesClient} for the stable implementation
 *
 * @experimental
 *
 * @method PromiseInterface addAssociationAsync(AddAssociationFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface addRuleAsync(AddRuleFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface cloneRulesAsync(CloneRulesFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteAsync(DeleteFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAsync(GetFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAssociationAsync(GetAssociationFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getRuleAsync(GetRuleFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface insertAsync(InsertFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAsync(ListFirewallPoliciesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAssociationsAsync(ListAssociationsFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface moveAsync(MoveFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface patchAsync(PatchFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface patchRuleAsync(PatchRuleFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface removeAssociationAsync(RemoveAssociationFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface removeRuleAsync(RemoveRuleFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsFirewallPolicyRequest $request, array $optionalArgs = [])
 */
final class FirewallPoliciesClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.compute.v1.FirewallPolicies';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'compute.googleapis.com';

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
            'clientConfig' => __DIR__ . '/../resources/firewall_policies_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/firewall_policies_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/firewall_policies_rest_client_config.php',
                ],
            ],
            'operationsClientClass' => GlobalOrganizationOperationsClient::class,
        ];
    }

    /** Implements GapicClientTrait::defaultTransport. */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /** Implements GapicClientTrait::getSupportedTransports. */
    private static function getSupportedTransports()
    {
        return [
            'rest',
        ];
    }

    /**
     * Return an GlobalOrganizationOperationsClient object with the same endpoint as
     * $this.
     *
     * @return GlobalOrganizationOperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /** Return the default longrunning operation descriptor config. */
    private function getDefaultOperationDescriptor()
    {
        return [
            'additionalArgumentMethods' => [],
            'getOperationMethod' => 'get',
            'cancelOperationMethod' => null,
            'deleteOperationMethod' => 'delete',
            'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
            'operationErrorMessageMethod' => 'getHttpErrorMessage',
            'operationNameMethod' => 'getName',
            'operationStatusMethod' => 'getStatus',
            'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
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
     * Inserts an association for the specified firewall policy.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::addAssociationAsync()} .
     *
     * @param AddAssociationFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                               $callOptions {
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
    public function addAssociation(AddAssociationFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('AddAssociation', $request, $callOptions)->wait();
    }

    /**
     * Inserts a rule into a firewall policy.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::addRuleAsync()} .
     *
     * @param AddRuleFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
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
    public function addRule(AddRuleFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('AddRule', $request, $callOptions)->wait();
    }

    /**
     * Copies rules to the specified firewall policy.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::cloneRulesAsync()} .
     *
     * @param CloneRulesFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
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
    public function cloneRules(CloneRulesFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CloneRules', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified policy.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::deleteAsync()} .
     *
     * @param DeleteFirewallPolicyRequest $request     A request to house fields associated with the call.
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
    public function delete(DeleteFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Delete', $request, $callOptions)->wait();
    }

    /**
     * Returns the specified firewall policy.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::getAsync()} .
     *
     * @param GetFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return FirewallPolicy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function get(GetFirewallPolicyRequest $request, array $callOptions = []): FirewallPolicy
    {
        return $this->startApiCall('Get', $request, $callOptions)->wait();
    }

    /**
     * Gets an association with the specified name.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::getAssociationAsync()} .
     *
     * @param GetAssociationFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return FirewallPolicyAssociation
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getAssociation(GetAssociationFirewallPolicyRequest $request, array $callOptions = []): FirewallPolicyAssociation
    {
        return $this->startApiCall('GetAssociation', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. May be empty if no such policy or resource exists.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::getIamPolicyAsync()} .
     *
     * @param GetIamPolicyFirewallPolicyRequest $request     A request to house fields associated with the call.
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
    public function getIamPolicy(GetIamPolicyFirewallPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Gets a rule of the specified priority.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::getRuleAsync()} .
     *
     * @param GetRuleFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return FirewallPolicyRule
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getRule(GetRuleFirewallPolicyRequest $request, array $callOptions = []): FirewallPolicyRule
    {
        return $this->startApiCall('GetRule', $request, $callOptions)->wait();
    }

    /**
     * Creates a new policy in the specified project using the data included in the request.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::insertAsync()} .
     *
     * @param InsertFirewallPolicyRequest $request     A request to house fields associated with the call.
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
    public function insert(InsertFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Insert', $request, $callOptions)->wait();
    }

    /**
     * Lists all the policies that have been configured for the specified folder or organization.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::listAsync()} .
     *
     * @param ListFirewallPoliciesRequest $request     A request to house fields associated with the call.
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
    public function list(ListFirewallPoliciesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('List', $request, $callOptions);
    }

    /**
     * Lists associations of a specified target, i.e., organization or folder.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::listAssociationsAsync()}
     * .
     *
     * @param ListAssociationsFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return FirewallPoliciesListAssociationsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listAssociations(ListAssociationsFirewallPolicyRequest $request, array $callOptions = []): FirewallPoliciesListAssociationsResponse
    {
        return $this->startApiCall('ListAssociations', $request, $callOptions)->wait();
    }

    /**
     * Moves the specified firewall policy.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::moveAsync()} .
     *
     * @param MoveFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
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
    public function move(MoveFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Move', $request, $callOptions)->wait();
    }

    /**
     * Patches the specified policy with the data included in the request.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::patchAsync()} .
     *
     * @param PatchFirewallPolicyRequest $request     A request to house fields associated with the call.
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
    public function patch(PatchFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Patch', $request, $callOptions)->wait();
    }

    /**
     * Patches a rule of the specified priority.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::patchRuleAsync()} .
     *
     * @param PatchRuleFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
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
    public function patchRule(PatchRuleFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('PatchRule', $request, $callOptions)->wait();
    }

    /**
     * Removes an association for the specified firewall policy.
     *
     * The async variant is
     * {@see FirewallPoliciesGapicClient::removeAssociationAsync()} .
     *
     * @param RemoveAssociationFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                  $callOptions {
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
    public function removeAssociation(RemoveAssociationFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RemoveAssociation', $request, $callOptions)->wait();
    }

    /**
     * Deletes a rule of the specified priority.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::removeRuleAsync()} .
     *
     * @param RemoveRuleFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
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
    public function removeRule(RemoveRuleFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RemoveRule', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces any existing policy.
     *
     * The async variant is {@see FirewallPoliciesGapicClient::setIamPolicyAsync()} .
     *
     * @param SetIamPolicyFirewallPolicyRequest $request     A request to house fields associated with the call.
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
    public function setIamPolicy(SetIamPolicyFirewallPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource.
     *
     * The async variant is
     * {@see FirewallPoliciesGapicClient::testIamPermissionsAsync()} .
     *
     * @param TestIamPermissionsFirewallPolicyRequest $request     A request to house fields associated with the call.
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
    public function testIamPermissions(TestIamPermissionsFirewallPolicyRequest $request, array $callOptions = []): TestPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
