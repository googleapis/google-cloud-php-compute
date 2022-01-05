<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceWithNamedPorts</code>
 */
class InstanceWithNamedPorts extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The URL of the instance.
     *
     * Generated from protobuf field <code>optional string instance = 18257045;</code>
     */
    protected $instance = null;
    /**
     * [Output Only] The named ports that belong to this instance group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NamedPort named_ports = 427598732;</code>
     */
    private $named_ports;
    /**
     * [Output Only] The status of the instance.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           [Output Only] The URL of the instance.
     *     @type \Google\Cloud\Compute\V1\NamedPort[]|\Google\Protobuf\Internal\RepeatedField $named_ports
     *           [Output Only] The named ports that belong to this instance group.
     *     @type string $status
     *           [Output Only] The status of the instance.
     *           Check the Status enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The URL of the instance.
     *
     * Generated from protobuf field <code>optional string instance = 18257045;</code>
     * @return string
     */
    public function getInstance()
    {
        return isset($this->instance) ? $this->instance : '';
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * [Output Only] The URL of the instance.
     *
     * Generated from protobuf field <code>optional string instance = 18257045;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * [Output Only] The named ports that belong to this instance group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NamedPort named_ports = 427598732;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNamedPorts()
    {
        return $this->named_ports;
    }

    /**
     * [Output Only] The named ports that belong to this instance group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NamedPort named_ports = 427598732;</code>
     * @param \Google\Cloud\Compute\V1\NamedPort[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNamedPorts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\NamedPort::class);
        $this->named_ports = $arr;

        return $this;
    }

    /**
     * [Output Only] The status of the instance.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] The status of the instance.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

}

