<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstancesBulkInsertOperationMetadata</code>
 */
class InstancesBulkInsertOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Status information per location (location name is key). Example key: zones/us-central1-a
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.BulkInsertOperationStatus> per_location_status = 167851162;</code>
     */
    private $per_location_status;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $per_location_status
     *           Status information per location (location name is key). Example key: zones/us-central1-a
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Status information per location (location name is key). Example key: zones/us-central1-a
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.BulkInsertOperationStatus> per_location_status = 167851162;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPerLocationStatus()
    {
        return $this->per_location_status;
    }

    /**
     * Status information per location (location name is key). Example key: zones/us-central1-a
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.BulkInsertOperationStatus> per_location_status = 167851162;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPerLocationStatus($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\BulkInsertOperationStatus::class);
        $this->per_location_status = $arr;

        return $this;
    }

}

