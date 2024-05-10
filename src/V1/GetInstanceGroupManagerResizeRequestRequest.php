<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for InstanceGroupManagerResizeRequests.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetInstanceGroupManagerResizeRequestRequest</code>
 */
class GetInstanceGroupManagerResizeRequestRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the managed instance group. Name should conform to RFC1035 or be a resource ID.
     *
     * Generated from protobuf field <code>string instance_group_manager = 249363395 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance_group_manager = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * The name of the resize request. Name should conform to RFC1035 or be a resource ID.
     *
     * Generated from protobuf field <code>string resize_request = 216941060 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resize_request = '';
    /**
     * Name of the href="/compute/docs/regions-zones/#available">zone scoping this request. Name should conform to RFC1035.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $zone = '';

    /**
     * @param string $project              Project ID for this request.
     * @param string $zone                 Name of the href="/compute/docs/regions-zones/#available">zone scoping this request. Name should conform to RFC1035.
     * @param string $instanceGroupManager The name of the managed instance group. Name should conform to RFC1035 or be a resource ID.
     * @param string $resizeRequest        The name of the resize request. Name should conform to RFC1035 or be a resource ID.
     *
     * @return \Google\Cloud\Compute\V1\GetInstanceGroupManagerResizeRequestRequest
     *
     * @experimental
     */
    public static function build(string $project, string $zone, string $instanceGroupManager, string $resizeRequest): self
    {
        return (new self())
            ->setProject($project)
            ->setZone($zone)
            ->setInstanceGroupManager($instanceGroupManager)
            ->setResizeRequest($resizeRequest);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_group_manager
     *           The name of the managed instance group. Name should conform to RFC1035 or be a resource ID.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $resize_request
     *           The name of the resize request. Name should conform to RFC1035 or be a resource ID.
     *     @type string $zone
     *           Name of the href="/compute/docs/regions-zones/#available">zone scoping this request. Name should conform to RFC1035.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the managed instance group. Name should conform to RFC1035 or be a resource ID.
     *
     * Generated from protobuf field <code>string instance_group_manager = 249363395 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstanceGroupManager()
    {
        return $this->instance_group_manager;
    }

    /**
     * The name of the managed instance group. Name should conform to RFC1035 or be a resource ID.
     *
     * Generated from protobuf field <code>string instance_group_manager = 249363395 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceGroupManager($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_group_manager = $var;

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
     * The name of the resize request. Name should conform to RFC1035 or be a resource ID.
     *
     * Generated from protobuf field <code>string resize_request = 216941060 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResizeRequest()
    {
        return $this->resize_request;
    }

    /**
     * The name of the resize request. Name should conform to RFC1035 or be a resource ID.
     *
     * Generated from protobuf field <code>string resize_request = 216941060 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setResizeRequest($var)
    {
        GPBUtil::checkString($var, True);
        $this->resize_request = $var;

        return $this;
    }

    /**
     * Name of the href="/compute/docs/regions-zones/#available">zone scoping this request. Name should conform to RFC1035.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Name of the href="/compute/docs/regions-zones/#available">zone scoping this request. Name should conform to RFC1035.
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
