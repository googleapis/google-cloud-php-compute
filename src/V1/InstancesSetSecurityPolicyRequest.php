<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstancesSetSecurityPolicyRequest</code>
 */
class InstancesSetSecurityPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The network interfaces that the security policy will be applied to. Network interfaces use the nicN naming format. You can only set a security policy for network interfaces with an access config.
     *
     * Generated from protobuf field <code>repeated string network_interfaces = 52735243;</code>
     */
    private $network_interfaces;
    /**
     * A full or partial URL to a security policy to add to this instance. If this field is set to an empty string it will remove the associated security policy.
     *
     * Generated from protobuf field <code>optional string security_policy = 171082513;</code>
     */
    private $security_policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $network_interfaces
     *           The network interfaces that the security policy will be applied to. Network interfaces use the nicN naming format. You can only set a security policy for network interfaces with an access config.
     *     @type string $security_policy
     *           A full or partial URL to a security policy to add to this instance. If this field is set to an empty string it will remove the associated security policy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The network interfaces that the security policy will be applied to. Network interfaces use the nicN naming format. You can only set a security policy for network interfaces with an access config.
     *
     * Generated from protobuf field <code>repeated string network_interfaces = 52735243;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkInterfaces()
    {
        return $this->network_interfaces;
    }

    /**
     * The network interfaces that the security policy will be applied to. Network interfaces use the nicN naming format. You can only set a security policy for network interfaces with an access config.
     *
     * Generated from protobuf field <code>repeated string network_interfaces = 52735243;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkInterfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->network_interfaces = $arr;

        return $this;
    }

    /**
     * A full or partial URL to a security policy to add to this instance. If this field is set to an empty string it will remove the associated security policy.
     *
     * Generated from protobuf field <code>optional string security_policy = 171082513;</code>
     * @return string
     */
    public function getSecurityPolicy()
    {
        return isset($this->security_policy) ? $this->security_policy : '';
    }

    public function hasSecurityPolicy()
    {
        return isset($this->security_policy);
    }

    public function clearSecurityPolicy()
    {
        unset($this->security_policy);
    }

    /**
     * A full or partial URL to a security policy to add to this instance. If this field is set to an empty string it will remove the associated security policy.
     *
     * Generated from protobuf field <code>optional string security_policy = 171082513;</code>
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
