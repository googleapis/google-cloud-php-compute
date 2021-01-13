<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RegionUrlMapsValidateRequest</code>
 */
class RegionUrlMapsValidateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Content of the UrlMap to be validated.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.UrlMap resource = 195806222;</code>
     */
    private $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\UrlMap $resource
     *           Content of the UrlMap to be validated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Content of the UrlMap to be validated.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.UrlMap resource = 195806222;</code>
     * @return \Google\Cloud\Compute\V1\UrlMap
     */
    public function getResource()
    {
        return isset($this->resource) ? $this->resource : null;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Content of the UrlMap to be validated.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.UrlMap resource = 195806222;</code>
     * @param \Google\Cloud\Compute\V1\UrlMap $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\UrlMap::class);
        $this->resource = $var;

        return $this;
    }

}

