<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionNetworkFirewallPolicies.GetAssociation. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetAssociationRegionNetworkFirewallPolicyRequest</code>
 */
class GetAssociationRegionNetworkFirewallPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the firewall policy to which the queried association belongs.
     *
     * Generated from protobuf field <code>string firewall_policy = 498173265 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $firewall_policy = '';
    /**
     * The name of the association to get from the firewall policy.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project = '';
    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $firewall_policy
     *           Name of the firewall policy to which the queried association belongs.
     *     @type string $name
     *           The name of the association to get from the firewall policy.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region scoping this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the firewall policy to which the queried association belongs.
     *
     * Generated from protobuf field <code>string firewall_policy = 498173265 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFirewallPolicy()
    {
        return $this->firewall_policy;
    }

    /**
     * Name of the firewall policy to which the queried association belongs.
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
     * The name of the association to get from the firewall policy.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the association to get from the firewall policy.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

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
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}
