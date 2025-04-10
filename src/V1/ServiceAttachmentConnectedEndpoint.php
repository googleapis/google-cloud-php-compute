<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Output Only] A connection connected to this service attachment.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ServiceAttachmentConnectedEndpoint</code>
 */
class ServiceAttachmentConnectedEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The url of the consumer network.
     *
     * Generated from protobuf field <code>optional string consumer_network = 254357221;</code>
     */
    private $consumer_network = null;
    /**
     * The url of a connected endpoint.
     *
     * Generated from protobuf field <code>optional string endpoint = 130489749;</code>
     */
    private $endpoint = null;
    /**
     * The number of consumer Network Connectivity Center spokes that the connected Private Service Connect endpoint has propagated to.
     *
     * Generated from protobuf field <code>optional uint32 propagated_connection_count = 324594130;</code>
     */
    private $propagated_connection_count = null;
    /**
     * The PSC connection id of the connected endpoint.
     *
     * Generated from protobuf field <code>optional uint64 psc_connection_id = 292082397;</code>
     */
    private $psc_connection_id = null;
    /**
     * The status of a connected endpoint to this service attachment.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    private $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $consumer_network
     *           The url of the consumer network.
     *     @type string $endpoint
     *           The url of a connected endpoint.
     *     @type int $propagated_connection_count
     *           The number of consumer Network Connectivity Center spokes that the connected Private Service Connect endpoint has propagated to.
     *     @type int|string $psc_connection_id
     *           The PSC connection id of the connected endpoint.
     *     @type string $status
     *           The status of a connected endpoint to this service attachment.
     *           Check the Status enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The url of the consumer network.
     *
     * Generated from protobuf field <code>optional string consumer_network = 254357221;</code>
     * @return string
     */
    public function getConsumerNetwork()
    {
        return isset($this->consumer_network) ? $this->consumer_network : '';
    }

    public function hasConsumerNetwork()
    {
        return isset($this->consumer_network);
    }

    public function clearConsumerNetwork()
    {
        unset($this->consumer_network);
    }

    /**
     * The url of the consumer network.
     *
     * Generated from protobuf field <code>optional string consumer_network = 254357221;</code>
     * @param string $var
     * @return $this
     */
    public function setConsumerNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->consumer_network = $var;

        return $this;
    }

    /**
     * The url of a connected endpoint.
     *
     * Generated from protobuf field <code>optional string endpoint = 130489749;</code>
     * @return string
     */
    public function getEndpoint()
    {
        return isset($this->endpoint) ? $this->endpoint : '';
    }

    public function hasEndpoint()
    {
        return isset($this->endpoint);
    }

    public function clearEndpoint()
    {
        unset($this->endpoint);
    }

    /**
     * The url of a connected endpoint.
     *
     * Generated from protobuf field <code>optional string endpoint = 130489749;</code>
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
     * The number of consumer Network Connectivity Center spokes that the connected Private Service Connect endpoint has propagated to.
     *
     * Generated from protobuf field <code>optional uint32 propagated_connection_count = 324594130;</code>
     * @return int
     */
    public function getPropagatedConnectionCount()
    {
        return isset($this->propagated_connection_count) ? $this->propagated_connection_count : 0;
    }

    public function hasPropagatedConnectionCount()
    {
        return isset($this->propagated_connection_count);
    }

    public function clearPropagatedConnectionCount()
    {
        unset($this->propagated_connection_count);
    }

    /**
     * The number of consumer Network Connectivity Center spokes that the connected Private Service Connect endpoint has propagated to.
     *
     * Generated from protobuf field <code>optional uint32 propagated_connection_count = 324594130;</code>
     * @param int $var
     * @return $this
     */
    public function setPropagatedConnectionCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->propagated_connection_count = $var;

        return $this;
    }

    /**
     * The PSC connection id of the connected endpoint.
     *
     * Generated from protobuf field <code>optional uint64 psc_connection_id = 292082397;</code>
     * @return int|string
     */
    public function getPscConnectionId()
    {
        return isset($this->psc_connection_id) ? $this->psc_connection_id : 0;
    }

    public function hasPscConnectionId()
    {
        return isset($this->psc_connection_id);
    }

    public function clearPscConnectionId()
    {
        unset($this->psc_connection_id);
    }

    /**
     * The PSC connection id of the connected endpoint.
     *
     * Generated from protobuf field <code>optional uint64 psc_connection_id = 292082397;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPscConnectionId($var)
    {
        GPBUtil::checkUint64($var);
        $this->psc_connection_id = $var;

        return $this;
    }

    /**
     * The status of a connected endpoint to this service attachment.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * The status of a connected endpoint to this service attachment.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

}

