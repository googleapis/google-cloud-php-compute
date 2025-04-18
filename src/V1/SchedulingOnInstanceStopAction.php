<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines the behaviour for instances with the instance_termination_action STOP.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SchedulingOnInstanceStopAction</code>
 */
class SchedulingOnInstanceStopAction extends \Google\Protobuf\Internal\Message
{
    /**
     * If true, the contents of any attached Local SSD disks will be discarded else, the Local SSD data will be preserved when the instance is stopped at the end of the run duration/termination time.
     *
     * Generated from protobuf field <code>optional bool discard_local_ssd = 319517903;</code>
     */
    private $discard_local_ssd = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $discard_local_ssd
     *           If true, the contents of any attached Local SSD disks will be discarded else, the Local SSD data will be preserved when the instance is stopped at the end of the run duration/termination time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * If true, the contents of any attached Local SSD disks will be discarded else, the Local SSD data will be preserved when the instance is stopped at the end of the run duration/termination time.
     *
     * Generated from protobuf field <code>optional bool discard_local_ssd = 319517903;</code>
     * @return bool
     */
    public function getDiscardLocalSsd()
    {
        return isset($this->discard_local_ssd) ? $this->discard_local_ssd : false;
    }

    public function hasDiscardLocalSsd()
    {
        return isset($this->discard_local_ssd);
    }

    public function clearDiscardLocalSsd()
    {
        unset($this->discard_local_ssd);
    }

    /**
     * If true, the contents of any attached Local SSD disks will be discarded else, the Local SSD data will be preserved when the instance is stopped at the end of the run duration/termination time.
     *
     * Generated from protobuf field <code>optional bool discard_local_ssd = 319517903;</code>
     * @param bool $var
     * @return $this
     */
    public function setDiscardLocalSsd($var)
    {
        GPBUtil::checkBool($var);
        $this->discard_local_ssd = $var;

        return $this;
    }

}

