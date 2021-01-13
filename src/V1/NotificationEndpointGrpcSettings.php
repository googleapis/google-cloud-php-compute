<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a gRPC setting that describes one gRPC notification endpoint and the retry duration attempting to send notification to this endpoint.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NotificationEndpointGrpcSettings</code>
 */
class NotificationEndpointGrpcSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. If specified, this field is used to set the authority header by the sender of notifications. See https://tools.ietf.org/html/rfc7540#section-8.1.2.3
     *
     * Generated from protobuf field <code>string authority = 133433155;</code>
     */
    private $authority = '';
    /**
     * Endpoint to which gRPC notifications are sent. This must be a valid gRPCLB DNS name.
     *
     * Generated from protobuf field <code>string endpoint = 130489749;</code>
     */
    private $endpoint = '';
    /**
     * Optional. If specified, this field is used to populate the "name" field in gRPC requests.
     *
     * Generated from protobuf field <code>string payload_name = 31922844;</code>
     */
    private $payload_name = '';
    /**
     * Optional. This field is used to configure how often to send a full update of all non-healthy backends. If unspecified, full updates are not sent. If specified, must be in the range between 600 seconds to 3600 seconds. Nanos are disallowed.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration resend_interval = 209853513;</code>
     */
    private $resend_interval = null;
    /**
     * How much time (in seconds) is spent attempting notification retries until a successful response is received. Default is 30s. Limit is 20m (1200s). Must be a positive number.
     *
     * Generated from protobuf field <code>uint32 retry_duration_sec = 115681117;</code>
     */
    private $retry_duration_sec = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $authority
     *           Optional. If specified, this field is used to set the authority header by the sender of notifications. See https://tools.ietf.org/html/rfc7540#section-8.1.2.3
     *     @type string $endpoint
     *           Endpoint to which gRPC notifications are sent. This must be a valid gRPCLB DNS name.
     *     @type string $payload_name
     *           Optional. If specified, this field is used to populate the "name" field in gRPC requests.
     *     @type \Google\Cloud\Compute\V1\Duration $resend_interval
     *           Optional. This field is used to configure how often to send a full update of all non-healthy backends. If unspecified, full updates are not sent. If specified, must be in the range between 600 seconds to 3600 seconds. Nanos are disallowed.
     *     @type int $retry_duration_sec
     *           How much time (in seconds) is spent attempting notification retries until a successful response is received. Default is 30s. Limit is 20m (1200s). Must be a positive number.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. If specified, this field is used to set the authority header by the sender of notifications. See https://tools.ietf.org/html/rfc7540#section-8.1.2.3
     *
     * Generated from protobuf field <code>string authority = 133433155;</code>
     * @return string
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Optional. If specified, this field is used to set the authority header by the sender of notifications. See https://tools.ietf.org/html/rfc7540#section-8.1.2.3
     *
     * Generated from protobuf field <code>string authority = 133433155;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthority($var)
    {
        GPBUtil::checkString($var, True);
        $this->authority = $var;

        return $this;
    }

    /**
     * Endpoint to which gRPC notifications are sent. This must be a valid gRPCLB DNS name.
     *
     * Generated from protobuf field <code>string endpoint = 130489749;</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Endpoint to which gRPC notifications are sent. This must be a valid gRPCLB DNS name.
     *
     * Generated from protobuf field <code>string endpoint = 130489749;</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * Optional. If specified, this field is used to populate the "name" field in gRPC requests.
     *
     * Generated from protobuf field <code>string payload_name = 31922844;</code>
     * @return string
     */
    public function getPayloadName()
    {
        return $this->payload_name;
    }

    /**
     * Optional. If specified, this field is used to populate the "name" field in gRPC requests.
     *
     * Generated from protobuf field <code>string payload_name = 31922844;</code>
     * @param string $var
     * @return $this
     */
    public function setPayloadName($var)
    {
        GPBUtil::checkString($var, True);
        $this->payload_name = $var;

        return $this;
    }

    /**
     * Optional. This field is used to configure how often to send a full update of all non-healthy backends. If unspecified, full updates are not sent. If specified, must be in the range between 600 seconds to 3600 seconds. Nanos are disallowed.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration resend_interval = 209853513;</code>
     * @return \Google\Cloud\Compute\V1\Duration
     */
    public function getResendInterval()
    {
        return isset($this->resend_interval) ? $this->resend_interval : null;
    }

    public function hasResendInterval()
    {
        return isset($this->resend_interval);
    }

    public function clearResendInterval()
    {
        unset($this->resend_interval);
    }

    /**
     * Optional. This field is used to configure how often to send a full update of all non-healthy backends. If unspecified, full updates are not sent. If specified, must be in the range between 600 seconds to 3600 seconds. Nanos are disallowed.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration resend_interval = 209853513;</code>
     * @param \Google\Cloud\Compute\V1\Duration $var
     * @return $this
     */
    public function setResendInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Duration::class);
        $this->resend_interval = $var;

        return $this;
    }

    /**
     * How much time (in seconds) is spent attempting notification retries until a successful response is received. Default is 30s. Limit is 20m (1200s). Must be a positive number.
     *
     * Generated from protobuf field <code>uint32 retry_duration_sec = 115681117;</code>
     * @return int
     */
    public function getRetryDurationSec()
    {
        return $this->retry_duration_sec;
    }

    /**
     * How much time (in seconds) is spent attempting notification retries until a successful response is received. Default is 30s. Limit is 20m (1200s). Must be a positive number.
     *
     * Generated from protobuf field <code>uint32 retry_duration_sec = 115681117;</code>
     * @param int $var
     * @return $this
     */
    public function setRetryDurationSec($var)
    {
        GPBUtil::checkUint32($var);
        $this->retry_duration_sec = $var;

        return $this;
    }

}

