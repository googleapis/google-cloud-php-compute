<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The information about the HTTP Cookie on which the hash function is based for load balancing policies that use a consistent hash.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ConsistentHashLoadBalancerSettingsHttpCookie</code>
 */
class ConsistentHashLoadBalancerSettingsHttpCookie extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the cookie.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = '';
    /**
     * Path to set for the cookie.
     *
     * Generated from protobuf field <code>string path = 3433509;</code>
     */
    private $path = '';
    /**
     * Lifetime of the cookie.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration ttl = 115180;</code>
     */
    private $ttl = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the cookie.
     *     @type string $path
     *           Path to set for the cookie.
     *     @type \Google\Cloud\Compute\V1\Duration $ttl
     *           Lifetime of the cookie.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the cookie.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the cookie.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Path to set for the cookie.
     *
     * Generated from protobuf field <code>string path = 3433509;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Path to set for the cookie.
     *
     * Generated from protobuf field <code>string path = 3433509;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Lifetime of the cookie.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration ttl = 115180;</code>
     * @return \Google\Cloud\Compute\V1\Duration
     */
    public function getTtl()
    {
        return isset($this->ttl) ? $this->ttl : null;
    }

    public function hasTtl()
    {
        return isset($this->ttl);
    }

    public function clearTtl()
    {
        unset($this->ttl);
    }

    /**
     * Lifetime of the cookie.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration ttl = 115180;</code>
     * @param \Google\Cloud\Compute\V1\Duration $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Duration::class);
        $this->ttl = $var;

        return $this;
    }

}

