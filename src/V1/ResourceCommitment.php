<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Commitment for a particular hardware resource (a commitment is composed of one or more of these).
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourceCommitment</code>
 */
class ResourceCommitment extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the accelerator type or GPU resource. Specify this field only when the type of hardware resource is ACCELERATOR.
     *
     * Generated from protobuf field <code>optional string accelerator_type = 138031246;</code>
     */
    private $accelerator_type = null;
    /**
     * The quantity of the hardware resource that you want to commit to purchasing (in a type-dependent unit). - For vCPUs, you must specify an integer value. - For memory, you specify the amount of MB that you want. The value you specify must be a multiple of 256 MB, with up to 6.5 GB of memory per every vCPU. - For GPUs, you must specify an integer value. - For Local SSD disks, you must specify the amount in GB. The size of a single Local SSD disk is 375 GB. 
     *
     * Generated from protobuf field <code>optional int64 amount = 196759640;</code>
     */
    private $amount = null;
    /**
     * The type of hardware resource that you want to specify. You can specify any of the following values: - VCPU - MEMORY - LOCAL_SSD - ACCELERATOR Specify as a separate entry in the list for each individual resource type.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     */
    private $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $accelerator_type
     *           Name of the accelerator type or GPU resource. Specify this field only when the type of hardware resource is ACCELERATOR.
     *     @type int|string $amount
     *           The quantity of the hardware resource that you want to commit to purchasing (in a type-dependent unit). - For vCPUs, you must specify an integer value. - For memory, you specify the amount of MB that you want. The value you specify must be a multiple of 256 MB, with up to 6.5 GB of memory per every vCPU. - For GPUs, you must specify an integer value. - For Local SSD disks, you must specify the amount in GB. The size of a single Local SSD disk is 375 GB. 
     *     @type string $type
     *           The type of hardware resource that you want to specify. You can specify any of the following values: - VCPU - MEMORY - LOCAL_SSD - ACCELERATOR Specify as a separate entry in the list for each individual resource type.
     *           Check the Type enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the accelerator type or GPU resource. Specify this field only when the type of hardware resource is ACCELERATOR.
     *
     * Generated from protobuf field <code>optional string accelerator_type = 138031246;</code>
     * @return string
     */
    public function getAcceleratorType()
    {
        return isset($this->accelerator_type) ? $this->accelerator_type : '';
    }

    public function hasAcceleratorType()
    {
        return isset($this->accelerator_type);
    }

    public function clearAcceleratorType()
    {
        unset($this->accelerator_type);
    }

    /**
     * Name of the accelerator type or GPU resource. Specify this field only when the type of hardware resource is ACCELERATOR.
     *
     * Generated from protobuf field <code>optional string accelerator_type = 138031246;</code>
     * @param string $var
     * @return $this
     */
    public function setAcceleratorType($var)
    {
        GPBUtil::checkString($var, True);
        $this->accelerator_type = $var;

        return $this;
    }

    /**
     * The quantity of the hardware resource that you want to commit to purchasing (in a type-dependent unit). - For vCPUs, you must specify an integer value. - For memory, you specify the amount of MB that you want. The value you specify must be a multiple of 256 MB, with up to 6.5 GB of memory per every vCPU. - For GPUs, you must specify an integer value. - For Local SSD disks, you must specify the amount in GB. The size of a single Local SSD disk is 375 GB. 
     *
     * Generated from protobuf field <code>optional int64 amount = 196759640;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return isset($this->amount) ? $this->amount : 0;
    }

    public function hasAmount()
    {
        return isset($this->amount);
    }

    public function clearAmount()
    {
        unset($this->amount);
    }

    /**
     * The quantity of the hardware resource that you want to commit to purchasing (in a type-dependent unit). - For vCPUs, you must specify an integer value. - For memory, you specify the amount of MB that you want. The value you specify must be a multiple of 256 MB, with up to 6.5 GB of memory per every vCPU. - For GPUs, you must specify an integer value. - For Local SSD disks, you must specify the amount in GB. The size of a single Local SSD disk is 375 GB. 
     *
     * Generated from protobuf field <code>optional int64 amount = 196759640;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * The type of hardware resource that you want to specify. You can specify any of the following values: - VCPU - MEMORY - LOCAL_SSD - ACCELERATOR Specify as a separate entry in the list for each individual resource type.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @return string
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : '';
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * The type of hardware resource that you want to specify. You can specify any of the following values: - VCPU - MEMORY - LOCAL_SSD - ACCELERATOR Specify as a separate entry in the list for each individual resource type.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

