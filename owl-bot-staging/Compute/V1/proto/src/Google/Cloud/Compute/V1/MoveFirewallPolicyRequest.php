<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for FirewallPolicies.Move. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.MoveFirewallPolicyRequest</code>
 */
class MoveFirewallPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the firewall policy to update.
     *
     * Generated from protobuf field <code>string firewall_policy = 498173265 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $firewall_policy = '';
    /**
     * The new parent of the firewall policy.
     *
     * Generated from protobuf field <code>string parent_id = 459714768 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "parent_id"];</code>
     */
    protected $parent_id = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     */
    protected $request_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $firewall_policy
     *           Name of the firewall policy to update.
     *     @type string $parent_id
     *           The new parent of the firewall policy.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the firewall policy to update.
     *
     * Generated from protobuf field <code>string firewall_policy = 498173265 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFirewallPolicy()
    {
        return $this->firewall_policy;
    }

    /**
     * Name of the firewall policy to update.
     *
     * Generated from protobuf field <code>string firewall_policy = 498173265 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFirewallPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->firewall_policy = $var;

        return $this;
    }

    /**
     * The new parent of the firewall policy.
     *
     * Generated from protobuf field <code>string parent_id = 459714768 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "parent_id"];</code>
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * The new parent of the firewall policy.
     *
     * Generated from protobuf field <code>string parent_id = 459714768 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "parent_id"];</code>
     * @param string $var
     * @return $this
     */
    public function setParentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_id = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

