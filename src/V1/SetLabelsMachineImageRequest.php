<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for MachineImages.SetLabels. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SetLabelsMachineImageRequest</code>
 */
class SetLabelsMachineImageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GlobalSetLabelsRequest global_set_labels_request_resource = 319917189 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $global_set_labels_request_resource = null;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * Name or id of the resource for this request.
     *
     * Generated from protobuf field <code>string resource = 195806222 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource = '';

    /**
     * @param string                                          $project                        Project ID for this request.
     * @param string                                          $resource                       Name or id of the resource for this request.
     * @param \Google\Cloud\Compute\V1\GlobalSetLabelsRequest $globalSetLabelsRequestResource The body resource for this request
     *
     * @return \Google\Cloud\Compute\V1\SetLabelsMachineImageRequest
     *
     * @experimental
     */
    public static function build(string $project, string $resource, \Google\Cloud\Compute\V1\GlobalSetLabelsRequest $globalSetLabelsRequestResource): self
    {
        return (new self())
            ->setProject($project)
            ->setResource($resource)
            ->setGlobalSetLabelsRequestResource($globalSetLabelsRequestResource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\GlobalSetLabelsRequest $global_set_labels_request_resource
     *           The body resource for this request
     *     @type string $project
     *           Project ID for this request.
     *     @type string $resource
     *           Name or id of the resource for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GlobalSetLabelsRequest global_set_labels_request_resource = 319917189 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\GlobalSetLabelsRequest|null
     */
    public function getGlobalSetLabelsRequestResource()
    {
        return $this->global_set_labels_request_resource;
    }

    public function hasGlobalSetLabelsRequestResource()
    {
        return isset($this->global_set_labels_request_resource);
    }

    public function clearGlobalSetLabelsRequestResource()
    {
        unset($this->global_set_labels_request_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GlobalSetLabelsRequest global_set_labels_request_resource = 319917189 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\GlobalSetLabelsRequest $var
     * @return $this
     */
    public function setGlobalSetLabelsRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\GlobalSetLabelsRequest::class);
        $this->global_set_labels_request_resource = $var;

        return $this;
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
     * Name or id of the resource for this request.
     *
     * Generated from protobuf field <code>string resource = 195806222 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Name or id of the resource for this request.
     *
     * Generated from protobuf field <code>string resource = 195806222 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

}

