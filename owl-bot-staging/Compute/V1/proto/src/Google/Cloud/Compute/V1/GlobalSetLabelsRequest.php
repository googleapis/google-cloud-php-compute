<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GlobalSetLabelsRequest</code>
 */
class GlobalSetLabelsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The fingerprint of the previous set of labels for this resource, used to detect conflicts. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update labels. You must always provide an up-to-date fingerprint hash when updating or changing labels, otherwise the request will fail with error 412 conditionNotMet. Make a get() request to the resource to get the latest fingerprint.
     *
     * Generated from protobuf field <code>optional string label_fingerprint = 178124825;</code>
     */
    protected $label_fingerprint = null;
    /**
     * A list of labels to apply for this resource. Each label key & value must comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash. For example, "webserver-frontend": "images". A label value can also be empty (e.g. "my-label": "").
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $label_fingerprint
     *           The fingerprint of the previous set of labels for this resource, used to detect conflicts. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update labels. You must always provide an up-to-date fingerprint hash when updating or changing labels, otherwise the request will fail with error 412 conditionNotMet. Make a get() request to the resource to get the latest fingerprint.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           A list of labels to apply for this resource. Each label key & value must comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash. For example, "webserver-frontend": "images". A label value can also be empty (e.g. "my-label": "").
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The fingerprint of the previous set of labels for this resource, used to detect conflicts. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update labels. You must always provide an up-to-date fingerprint hash when updating or changing labels, otherwise the request will fail with error 412 conditionNotMet. Make a get() request to the resource to get the latest fingerprint.
     *
     * Generated from protobuf field <code>optional string label_fingerprint = 178124825;</code>
     * @return string
     */
    public function getLabelFingerprint()
    {
        return isset($this->label_fingerprint) ? $this->label_fingerprint : '';
    }

    public function hasLabelFingerprint()
    {
        return isset($this->label_fingerprint);
    }

    public function clearLabelFingerprint()
    {
        unset($this->label_fingerprint);
    }

    /**
     * The fingerprint of the previous set of labels for this resource, used to detect conflicts. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update labels. You must always provide an up-to-date fingerprint hash when updating or changing labels, otherwise the request will fail with error 412 conditionNotMet. Make a get() request to the resource to get the latest fingerprint.
     *
     * Generated from protobuf field <code>optional string label_fingerprint = 178124825;</code>
     * @param string $var
     * @return $this
     */
    public function setLabelFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->label_fingerprint = $var;

        return $this;
    }

    /**
     * A list of labels to apply for this resource. Each label key & value must comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash. For example, "webserver-frontend": "images". A label value can also be empty (e.g. "my-label": "").
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * A list of labels to apply for this resource. Each label key & value must comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash. For example, "webserver-frontend": "images". A label value can also be empty (e.g. "my-label": "").
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

