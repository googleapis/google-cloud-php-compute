<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The spec for modifying the path before sending the request to the matched backend service.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.UrlRewrite</code>
 */
class UrlRewrite extends \Google\Protobuf\Internal\Message
{
    /**
     * Before forwarding the request to the selected service, the request's host header is replaced with contents of hostRewrite. The value must be from 1 to 255 characters.
     *
     * Generated from protobuf field <code>optional string host_rewrite = 159819253;</code>
     */
    protected $host_rewrite = null;
    /**
     * Before forwarding the request to the selected backend service, the matching portion of the request's path is replaced by pathPrefixRewrite. The value must be from 1 to 1024 characters.
     *
     * Generated from protobuf field <code>optional string path_prefix_rewrite = 41186361;</code>
     */
    protected $path_prefix_rewrite = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $host_rewrite
     *           Before forwarding the request to the selected service, the request's host header is replaced with contents of hostRewrite. The value must be from 1 to 255 characters.
     *     @type string $path_prefix_rewrite
     *           Before forwarding the request to the selected backend service, the matching portion of the request's path is replaced by pathPrefixRewrite. The value must be from 1 to 1024 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Before forwarding the request to the selected service, the request's host header is replaced with contents of hostRewrite. The value must be from 1 to 255 characters.
     *
     * Generated from protobuf field <code>optional string host_rewrite = 159819253;</code>
     * @return string
     */
    public function getHostRewrite()
    {
        return isset($this->host_rewrite) ? $this->host_rewrite : '';
    }

    public function hasHostRewrite()
    {
        return isset($this->host_rewrite);
    }

    public function clearHostRewrite()
    {
        unset($this->host_rewrite);
    }

    /**
     * Before forwarding the request to the selected service, the request's host header is replaced with contents of hostRewrite. The value must be from 1 to 255 characters.
     *
     * Generated from protobuf field <code>optional string host_rewrite = 159819253;</code>
     * @param string $var
     * @return $this
     */
    public function setHostRewrite($var)
    {
        GPBUtil::checkString($var, True);
        $this->host_rewrite = $var;

        return $this;
    }

    /**
     * Before forwarding the request to the selected backend service, the matching portion of the request's path is replaced by pathPrefixRewrite. The value must be from 1 to 1024 characters.
     *
     * Generated from protobuf field <code>optional string path_prefix_rewrite = 41186361;</code>
     * @return string
     */
    public function getPathPrefixRewrite()
    {
        return isset($this->path_prefix_rewrite) ? $this->path_prefix_rewrite : '';
    }

    public function hasPathPrefixRewrite()
    {
        return isset($this->path_prefix_rewrite);
    }

    public function clearPathPrefixRewrite()
    {
        unset($this->path_prefix_rewrite);
    }

    /**
     * Before forwarding the request to the selected backend service, the matching portion of the request's path is replaced by pathPrefixRewrite. The value must be from 1 to 1024 characters.
     *
     * Generated from protobuf field <code>optional string path_prefix_rewrite = 41186361;</code>
     * @param string $var
     * @return $this
     */
    public function setPathPrefixRewrite($var)
    {
        GPBUtil::checkString($var, True);
        $this->path_prefix_rewrite = $var;

        return $this;
    }

}

