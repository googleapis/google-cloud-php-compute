<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for Instances.TestIamPermissions. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.TestIamPermissionsInstanceRequest</code>
 */
class TestIamPermissionsInstanceRequest extends \Google\Protobuf\Internal\Message
{
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
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TestPermissionsRequest test_permissions_request_resource = 170779302 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $test_permissions_request_resource = null;
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
     *     @type string $project
     *           Project ID for this request.
     *     @type string $resource
     *           Name or id of the resource for this request.
     *     @type \Google\Cloud\Compute\V1\TestPermissionsRequest $test_permissions_request_resource
     *           The body resource for this request
     *     @type string $zone
     *           The name of the zone for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
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
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TestPermissionsRequest test_permissions_request_resource = 170779302 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\TestPermissionsRequest
     */
    public function getTestPermissionsRequestResource()
    {
        return isset($this->test_permissions_request_resource) ? $this->test_permissions_request_resource : null;
    }

    public function hasTestPermissionsRequestResource()
    {
        return isset($this->test_permissions_request_resource);
    }

    public function clearTestPermissionsRequestResource()
    {
        unset($this->test_permissions_request_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TestPermissionsRequest test_permissions_request_resource = 170779302 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\TestPermissionsRequest $var
     * @return $this
     */
    public function setTestPermissionsRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\TestPermissionsRequest::class);
        $this->test_permissions_request_resource = $var;

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

