<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Applicable only to Failover for Internal TCP/UDP Load Balancing and Network Load Balancing. On failover or failback, this field indicates whether connection draining will be honored. GCP has a fixed connection draining timeout of 10 minutes. A setting of true terminates existing TCP connections to the active pool during failover and failback, immediately draining traffic. A setting of false allows existing TCP connections to persist, even on VMs no longer in the active pool, for up to the duration of the connection draining timeout (10 minutes).
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.BackendServiceFailoverPolicy</code>
 */
class BackendServiceFailoverPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * This can be set to true only if the protocol is TCP.
     * The default is false.
     *
     * Generated from protobuf field <code>bool disable_connection_drain_on_failover = 182150753;</code>
     */
    private $disable_connection_drain_on_failover = false;
    /**
     * Applicable only to Failover for Internal TCP/UDP Load Balancing and Network Load Balancing, If set to true, connections to the load balancer are dropped when all primary and all backup backend VMs are unhealthy.If set to false, connections are distributed among all primary VMs when all primary and all backup backend VMs are unhealthy. The default is false.
     *
     * Generated from protobuf field <code>bool drop_traffic_if_unhealthy = 112289428;</code>
     */
    private $drop_traffic_if_unhealthy = false;
    /**
     * Applicable only to Failover for Internal TCP/UDP Load Balancing and Network Load Balancing. The value of the field must be in the range [0, 1]. If the value is 0, the load balancer performs a failover when the number of healthy primary VMs equals zero. For all other values, the load balancer performs a failover when the total number of healthy primary VMs is less than this ratio.
     *
     * Generated from protobuf field <code>float failover_ratio = 212667006;</code>
     */
    private $failover_ratio = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $disable_connection_drain_on_failover
     *           This can be set to true only if the protocol is TCP.
     *           The default is false.
     *     @type bool $drop_traffic_if_unhealthy
     *           Applicable only to Failover for Internal TCP/UDP Load Balancing and Network Load Balancing, If set to true, connections to the load balancer are dropped when all primary and all backup backend VMs are unhealthy.If set to false, connections are distributed among all primary VMs when all primary and all backup backend VMs are unhealthy. The default is false.
     *     @type float $failover_ratio
     *           Applicable only to Failover for Internal TCP/UDP Load Balancing and Network Load Balancing. The value of the field must be in the range [0, 1]. If the value is 0, the load balancer performs a failover when the number of healthy primary VMs equals zero. For all other values, the load balancer performs a failover when the total number of healthy primary VMs is less than this ratio.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * This can be set to true only if the protocol is TCP.
     * The default is false.
     *
     * Generated from protobuf field <code>bool disable_connection_drain_on_failover = 182150753;</code>
     * @return bool
     */
    public function getDisableConnectionDrainOnFailover()
    {
        return $this->disable_connection_drain_on_failover;
    }

    /**
     * This can be set to true only if the protocol is TCP.
     * The default is false.
     *
     * Generated from protobuf field <code>bool disable_connection_drain_on_failover = 182150753;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableConnectionDrainOnFailover($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_connection_drain_on_failover = $var;

        return $this;
    }

    /**
     * Applicable only to Failover for Internal TCP/UDP Load Balancing and Network Load Balancing, If set to true, connections to the load balancer are dropped when all primary and all backup backend VMs are unhealthy.If set to false, connections are distributed among all primary VMs when all primary and all backup backend VMs are unhealthy. The default is false.
     *
     * Generated from protobuf field <code>bool drop_traffic_if_unhealthy = 112289428;</code>
     * @return bool
     */
    public function getDropTrafficIfUnhealthy()
    {
        return $this->drop_traffic_if_unhealthy;
    }

    /**
     * Applicable only to Failover for Internal TCP/UDP Load Balancing and Network Load Balancing, If set to true, connections to the load balancer are dropped when all primary and all backup backend VMs are unhealthy.If set to false, connections are distributed among all primary VMs when all primary and all backup backend VMs are unhealthy. The default is false.
     *
     * Generated from protobuf field <code>bool drop_traffic_if_unhealthy = 112289428;</code>
     * @param bool $var
     * @return $this
     */
    public function setDropTrafficIfUnhealthy($var)
    {
        GPBUtil::checkBool($var);
        $this->drop_traffic_if_unhealthy = $var;

        return $this;
    }

    /**
     * Applicable only to Failover for Internal TCP/UDP Load Balancing and Network Load Balancing. The value of the field must be in the range [0, 1]. If the value is 0, the load balancer performs a failover when the number of healthy primary VMs equals zero. For all other values, the load balancer performs a failover when the total number of healthy primary VMs is less than this ratio.
     *
     * Generated from protobuf field <code>float failover_ratio = 212667006;</code>
     * @return float
     */
    public function getFailoverRatio()
    {
        return $this->failover_ratio;
    }

    /**
     * Applicable only to Failover for Internal TCP/UDP Load Balancing and Network Load Balancing. The value of the field must be in the range [0, 1]. If the value is 0, the load balancer performs a failover when the number of healthy primary VMs equals zero. For all other values, the load balancer performs a failover when the total number of healthy primary VMs is less than this ratio.
     *
     * Generated from protobuf field <code>float failover_ratio = 212667006;</code>
     * @param float $var
     * @return $this
     */
    public function setFailoverRatio($var)
    {
        GPBUtil::checkFloat($var);
        $this->failover_ratio = $var;

        return $this;
    }

}

