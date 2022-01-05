<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for SecurityPolicies.GetRule. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetRuleSecurityPolicyRequest</code>
 */
class GetRuleSecurityPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The priority of the rule to get from the security policy.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     */
    protected $priority = null;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project = '';
    /**
     * Name of the security policy to which the queried rule belongs.
     *
     * Generated from protobuf field <code>string security_policy = 171082513 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $security_policy = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $priority
     *           The priority of the rule to get from the security policy.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $security_policy
     *           Name of the security policy to which the queried rule belongs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The priority of the rule to get from the security policy.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     * @return int
     */
    public function getPriority()
    {
        return isset($this->priority) ? $this->priority : 0;
    }

    public function hasPriority()
    {
        return isset($this->priority);
    }

    public function clearPriority()
    {
        unset($this->priority);
    }

    /**
     * The priority of the rule to get from the security policy.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the security policy to which the queried rule belongs.
     *
     * Generated from protobuf field <code>string security_policy = 171082513 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSecurityPolicy()
    {
        return $this->security_policy;
    }

    /**
     * Name of the security policy to which the queried rule belongs.
     *
     * Generated from protobuf field <code>string security_policy = 171082513 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSecurityPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->security_policy = $var;

        return $this;
    }

}

