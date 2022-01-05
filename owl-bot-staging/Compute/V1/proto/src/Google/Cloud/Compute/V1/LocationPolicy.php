<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for location policy among multiple possible locations (e.g. preferences for zone selection among zones in a single region).
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.LocationPolicy</code>
 */
class LocationPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Location configurations mapped by location name. Currently only zone names are supported and must be represented as valid internal URLs, such as zones/us-central1-a.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.LocationPolicyLocation> locations = 413423454;</code>
     */
    private $locations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $locations
     *           Location configurations mapped by location name. Currently only zone names are supported and must be represented as valid internal URLs, such as zones/us-central1-a.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Location configurations mapped by location name. Currently only zone names are supported and must be represented as valid internal URLs, such as zones/us-central1-a.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.LocationPolicyLocation> locations = 413423454;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Location configurations mapped by location name. Currently only zone names are supported and must be represented as valid internal URLs, such as zones/us-central1-a.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.LocationPolicyLocation> locations = 413423454;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLocations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\LocationPolicyLocation::class);
        $this->locations = $arr;

        return $this;
    }

}

