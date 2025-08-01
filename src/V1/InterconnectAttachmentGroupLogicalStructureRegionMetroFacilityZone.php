<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Output Only] The zones that Attachments in this group are present in, in the given facilities. This is inherited from their Interconnects.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InterconnectAttachmentGroupLogicalStructureRegionMetroFacilityZone</code>
 */
class InterconnectAttachmentGroupLogicalStructureRegionMetroFacilityZone extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] URLs of Attachments in the given zone, to the given region, on Interconnects in the given facility and metro. Every Attachment in the AG has such an entry.
     *
     * Generated from protobuf field <code>repeated string attachments = 334744496;</code>
     */
    private $attachments;
    /**
     * [Output Only] The name of a zone, either "zone1" or "zone2".
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     */
    private $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $attachments
     *           [Output Only] URLs of Attachments in the given zone, to the given region, on Interconnects in the given facility and metro. Every Attachment in the AG has such an entry.
     *     @type string $zone
     *           [Output Only] The name of a zone, either "zone1" or "zone2".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] URLs of Attachments in the given zone, to the given region, on Interconnects in the given facility and metro. Every Attachment in the AG has such an entry.
     *
     * Generated from protobuf field <code>repeated string attachments = 334744496;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * [Output Only] URLs of Attachments in the given zone, to the given region, on Interconnects in the given facility and metro. Every Attachment in the AG has such an entry.
     *
     * Generated from protobuf field <code>repeated string attachments = 334744496;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttachments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attachments = $arr;

        return $this;
    }

    /**
     * [Output Only] The name of a zone, either "zone1" or "zone2".
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * [Output Only] The name of a zone, either "zone1" or "zone2".
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
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

