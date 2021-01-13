<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for Instances.GetIamPolicy. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetIamPolicyInstanceRequest</code>
 */
class GetIamPolicyInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Requested IAM Policy version.
     *
     * Generated from protobuf field <code>int32 options_requested_policy_version = 230784573;</code>
     */
    private $options_requested_policy_version = 0;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * Name or id of the resource for this request.
     *
     * Generated from protobuf field <code>string resource = 195806222 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource = '';
    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $options_requested_policy_version
     *           Requested IAM Policy version.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $resource
     *           Name or id of the resource for this request.
     *     @type string $zone
     *           The name of the zone for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Requested IAM Policy version.
     *
     * Generated from protobuf field <code>int32 options_requested_policy_version = 230784573;</code>
     * @return int
     */
    public function getOptionsRequestedPolicyVersion()
    {
        return $this->options_requested_policy_version;
    }

    /**
     * Requested IAM Policy version.
     *
     * Generated from protobuf field <code>int32 options_requested_policy_version = 230784573;</code>
     * @param int $var
     * @return $this
     */
    public function setOptionsRequestedPolicyVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->options_requested_policy_version = $var;

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
     * Name or id of the resource for this request.
     *
     * Generated from protobuf field <code>string resource = 195806222 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Name or id of the resource for this request.
     *
     * Generated from protobuf field <code>string resource = 195806222 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

