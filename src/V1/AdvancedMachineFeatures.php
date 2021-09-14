<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies options for controlling advanced machine features. Options that would traditionally be configured in a BIOS belong here. Features that require operating system support may have corresponding entries in the GuestOsFeatures of an Image (e.g., whether or not the OS in the Image supports nested virtualization being enabled or disabled).
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AdvancedMachineFeatures</code>
 */
class AdvancedMachineFeatures extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether to enable nested virtualization or not (default is false).
     *
     * Generated from protobuf field <code>bool enable_nested_virtualization = 16639365;</code>
     */
    private $enable_nested_virtualization = null;
    /**
     * The number of threads per physical core. To disable simultaneous multithreading (SMT) set this to 1. If unset, the maximum number of threads supported per core by the underlying processor is assumed.
     *
     * Generated from protobuf field <code>int32 threads_per_core = 352611671;</code>
     */
    private $threads_per_core = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_nested_virtualization
     *           Whether to enable nested virtualization or not (default is false).
     *     @type int $threads_per_core
     *           The number of threads per physical core. To disable simultaneous multithreading (SMT) set this to 1. If unset, the maximum number of threads supported per core by the underlying processor is assumed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether to enable nested virtualization or not (default is false).
     *
     * Generated from protobuf field <code>bool enable_nested_virtualization = 16639365;</code>
     * @return bool
     */
    public function getEnableNestedVirtualization()
    {
        return isset($this->enable_nested_virtualization) ? $this->enable_nested_virtualization : false;
    }

    public function hasEnableNestedVirtualization()
    {
        return isset($this->enable_nested_virtualization);
    }

    public function clearEnableNestedVirtualization()
    {
        unset($this->enable_nested_virtualization);
    }

    /**
     * Whether to enable nested virtualization or not (default is false).
     *
     * Generated from protobuf field <code>bool enable_nested_virtualization = 16639365;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableNestedVirtualization($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_nested_virtualization = $var;

        return $this;
    }

    /**
     * The number of threads per physical core. To disable simultaneous multithreading (SMT) set this to 1. If unset, the maximum number of threads supported per core by the underlying processor is assumed.
     *
     * Generated from protobuf field <code>int32 threads_per_core = 352611671;</code>
     * @return int
     */
    public function getThreadsPerCore()
    {
        return isset($this->threads_per_core) ? $this->threads_per_core : 0;
    }

    public function hasThreadsPerCore()
    {
        return isset($this->threads_per_core);
    }

    public function clearThreadsPerCore()
    {
        unset($this->threads_per_core);
    }

    /**
     * The number of threads per physical core. To disable simultaneous multithreading (SMT) set this to 1. If unset, the maximum number of threads supported per core by the underlying processor is assumed.
     *
     * Generated from protobuf field <code>int32 threads_per_core = 352611671;</code>
     * @param int $var
     * @return $this
     */
    public function setThreadsPerCore($var)
    {
        GPBUtil::checkInt32($var);
        $this->threads_per_core = $var;

        return $this;
    }

}

