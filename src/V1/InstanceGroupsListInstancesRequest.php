<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupsListInstancesRequest</code>
 */
class InstanceGroupsListInstancesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A filter for the state of the instances in the instance group. Valid options are ALL or RUNNING. If you do not specify this parameter the list includes all instances regardless of their state.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupsListInstancesRequest.InstanceState instance_state = 92223591;</code>
     */
    private $instance_state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $instance_state
     *           A filter for the state of the instances in the instance group. Valid options are ALL or RUNNING. If you do not specify this parameter the list includes all instances regardless of their state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A filter for the state of the instances in the instance group. Valid options are ALL or RUNNING. If you do not specify this parameter the list includes all instances regardless of their state.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupsListInstancesRequest.InstanceState instance_state = 92223591;</code>
     * @return int
     */
    public function getInstanceState()
    {
        return isset($this->instance_state) ? $this->instance_state : 0;
    }

    public function hasInstanceState()
    {
        return isset($this->instance_state);
    }

    public function clearInstanceState()
    {
        unset($this->instance_state);
    }

    /**
     * A filter for the state of the instances in the instance group. Valid options are ALL or RUNNING. If you do not specify this parameter the list includes all instances regardless of their state.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InstanceGroupsListInstancesRequest.InstanceState instance_state = 92223591;</code>
     * @param int $var
     * @return $this
     */
    public function setInstanceState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\InstanceGroupsListInstancesRequest\InstanceState::class);
        $this->instance_state = $var;

        return $this;
    }

}

