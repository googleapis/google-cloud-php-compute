<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for TargetHttpProxies.Patch. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PatchTargetHttpProxyRequest</code>
 */
class PatchTargetHttpProxyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    protected $project = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000). end_interface: MixerMutationRequestBuilder
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     */
    protected $request_id = null;
    /**
     * Name of the TargetHttpProxy resource to patch.
     *
     * Generated from protobuf field <code>string target_http_proxy = 206872421 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $target_http_proxy = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetHttpProxy target_http_proxy_resource = 24696744 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $target_http_proxy_resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Project ID for this request.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000). end_interface: MixerMutationRequestBuilder
     *     @type string $target_http_proxy
     *           Name of the TargetHttpProxy resource to patch.
     *     @type \Google\Cloud\Compute\V1\TargetHttpProxy $target_http_proxy_resource
     *           The body resource for this request
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000). end_interface: MixerMutationRequestBuilder
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000). end_interface: MixerMutationRequestBuilder
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Name of the TargetHttpProxy resource to patch.
     *
     * Generated from protobuf field <code>string target_http_proxy = 206872421 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetHttpProxy()
    {
        return $this->target_http_proxy;
    }

    /**
     * Name of the TargetHttpProxy resource to patch.
     *
     * Generated from protobuf field <code>string target_http_proxy = 206872421 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetHttpProxy($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_http_proxy = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetHttpProxy target_http_proxy_resource = 24696744 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\TargetHttpProxy|null
     */
    public function getTargetHttpProxyResource()
    {
        return $this->target_http_proxy_resource;
    }

    public function hasTargetHttpProxyResource()
    {
        return isset($this->target_http_proxy_resource);
    }

    public function clearTargetHttpProxyResource()
    {
        unset($this->target_http_proxy_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetHttpProxy target_http_proxy_resource = 24696744 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\TargetHttpProxy $var
     * @return $this
     */
    public function setTargetHttpProxyResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\TargetHttpProxy::class);
        $this->target_http_proxy_resource = $var;

        return $this;
    }

}

