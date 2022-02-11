<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message containing information of one individual backend.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Backend</code>
 */
class Backend extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies how to determine whether the backend of a load balancer can handle additional traffic or is fully loaded. For usage guidelines, see Connection balancing mode. Backends must use compatible balancing modes. For more information, see Supported balancing modes and target capacity settings and Restrictions and guidance for instance groups. Note: Currently, if you use the API to configure incompatible balancing modes, the configuration might be accepted even though it has no impact and is ignored. Specifically, Backend.maxUtilization is ignored when Backend.balancingMode is RATE. In the future, this incompatible combination will be rejected.
     * Check the BalancingMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string balancing_mode = 430286217;</code>
     */
    protected $balancing_mode = null;
    /**
     * A multiplier applied to the backend's target capacity of its balancing mode. The default value is 1, which means the group serves up to 100% of its configured capacity (depending on balancingMode). A setting of 0 means the group is completely drained, offering 0% of its available capacity. The valid ranges are 0.0 and [0.1,1.0]. You cannot configure a setting larger than 0 and smaller than 0.1. You cannot configure a setting of 0 when there is only one backend attached to the backend service.
     *
     * Generated from protobuf field <code>optional float capacity_scaler = 315958157;</code>
     */
    protected $capacity_scaler = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    protected $description = null;
    /**
     * This field designates whether this is a failover backend. More than one failover backend can be configured for a given BackendService.
     *
     * Generated from protobuf field <code>optional bool failover = 138892530;</code>
     */
    protected $failover = null;
    /**
     * The fully-qualified URL of an instance group or network endpoint group (NEG) resource. To determine what types of backends a load balancer supports, see the [Backend services overview](https://cloud.google.com/load-balancing/docs/backend-service#backends). You must use the *fully-qualified* URL (starting with https://www.googleapis.com/) to specify the instance group or NEG. Partial URLs are not supported.
     *
     * Generated from protobuf field <code>optional string group = 98629247;</code>
     */
    protected $group = null;
    /**
     * Defines a target maximum number of simultaneous connections. For usage guidelines, see Connection balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is RATE.
     *
     * Generated from protobuf field <code>optional int32 max_connections = 110652154;</code>
     */
    protected $max_connections = null;
    /**
     * Defines a target maximum number of simultaneous connections. For usage guidelines, see Connection balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is RATE.
     *
     * Generated from protobuf field <code>optional int32 max_connections_per_endpoint = 216904604;</code>
     */
    protected $max_connections_per_endpoint = null;
    /**
     * Defines a target maximum number of simultaneous connections. For usage guidelines, see Connection balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is RATE.
     *
     * Generated from protobuf field <code>optional int32 max_connections_per_instance = 104671900;</code>
     */
    protected $max_connections_per_instance = null;
    /**
     * Defines a maximum number of HTTP requests per second (RPS). For usage guidelines, see Rate balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is CONNECTION.
     *
     * Generated from protobuf field <code>optional int32 max_rate = 408035035;</code>
     */
    protected $max_rate = null;
    /**
     * Defines a maximum target for requests per second (RPS). For usage guidelines, see Rate balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is CONNECTION.
     *
     * Generated from protobuf field <code>optional float max_rate_per_endpoint = 129832283;</code>
     */
    protected $max_rate_per_endpoint = null;
    /**
     * Defines a maximum target for requests per second (RPS). For usage guidelines, see Rate balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is CONNECTION.
     *
     * Generated from protobuf field <code>optional float max_rate_per_instance = 17599579;</code>
     */
    protected $max_rate_per_instance = null;
    /**
     * Optional parameter to define a target capacity for the UTILIZATIONbalancing mode. The valid range is [0.0, 1.0]. For usage guidelines, see Utilization balancing mode.
     *
     * Generated from protobuf field <code>optional float max_utilization = 148192199;</code>
     */
    protected $max_utilization = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $balancing_mode
     *           Specifies how to determine whether the backend of a load balancer can handle additional traffic or is fully loaded. For usage guidelines, see Connection balancing mode. Backends must use compatible balancing modes. For more information, see Supported balancing modes and target capacity settings and Restrictions and guidance for instance groups. Note: Currently, if you use the API to configure incompatible balancing modes, the configuration might be accepted even though it has no impact and is ignored. Specifically, Backend.maxUtilization is ignored when Backend.balancingMode is RATE. In the future, this incompatible combination will be rejected.
     *           Check the BalancingMode enum for the list of possible values.
     *     @type float $capacity_scaler
     *           A multiplier applied to the backend's target capacity of its balancing mode. The default value is 1, which means the group serves up to 100% of its configured capacity (depending on balancingMode). A setting of 0 means the group is completely drained, offering 0% of its available capacity. The valid ranges are 0.0 and [0.1,1.0]. You cannot configure a setting larger than 0 and smaller than 0.1. You cannot configure a setting of 0 when there is only one backend attached to the backend service.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type bool $failover
     *           This field designates whether this is a failover backend. More than one failover backend can be configured for a given BackendService.
     *     @type string $group
     *           The fully-qualified URL of an instance group or network endpoint group (NEG) resource. To determine what types of backends a load balancer supports, see the [Backend services overview](https://cloud.google.com/load-balancing/docs/backend-service#backends). You must use the *fully-qualified* URL (starting with https://www.googleapis.com/) to specify the instance group or NEG. Partial URLs are not supported.
     *     @type int $max_connections
     *           Defines a target maximum number of simultaneous connections. For usage guidelines, see Connection balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is RATE.
     *     @type int $max_connections_per_endpoint
     *           Defines a target maximum number of simultaneous connections. For usage guidelines, see Connection balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is RATE.
     *     @type int $max_connections_per_instance
     *           Defines a target maximum number of simultaneous connections. For usage guidelines, see Connection balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is RATE.
     *     @type int $max_rate
     *           Defines a maximum number of HTTP requests per second (RPS). For usage guidelines, see Rate balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is CONNECTION.
     *     @type float $max_rate_per_endpoint
     *           Defines a maximum target for requests per second (RPS). For usage guidelines, see Rate balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is CONNECTION.
     *     @type float $max_rate_per_instance
     *           Defines a maximum target for requests per second (RPS). For usage guidelines, see Rate balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is CONNECTION.
     *     @type float $max_utilization
     *           Optional parameter to define a target capacity for the UTILIZATIONbalancing mode. The valid range is [0.0, 1.0]. For usage guidelines, see Utilization balancing mode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies how to determine whether the backend of a load balancer can handle additional traffic or is fully loaded. For usage guidelines, see Connection balancing mode. Backends must use compatible balancing modes. For more information, see Supported balancing modes and target capacity settings and Restrictions and guidance for instance groups. Note: Currently, if you use the API to configure incompatible balancing modes, the configuration might be accepted even though it has no impact and is ignored. Specifically, Backend.maxUtilization is ignored when Backend.balancingMode is RATE. In the future, this incompatible combination will be rejected.
     * Check the BalancingMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string balancing_mode = 430286217;</code>
     * @return string
     */
    public function getBalancingMode()
    {
        return isset($this->balancing_mode) ? $this->balancing_mode : '';
    }

    public function hasBalancingMode()
    {
        return isset($this->balancing_mode);
    }

    public function clearBalancingMode()
    {
        unset($this->balancing_mode);
    }

    /**
     * Specifies how to determine whether the backend of a load balancer can handle additional traffic or is fully loaded. For usage guidelines, see Connection balancing mode. Backends must use compatible balancing modes. For more information, see Supported balancing modes and target capacity settings and Restrictions and guidance for instance groups. Note: Currently, if you use the API to configure incompatible balancing modes, the configuration might be accepted even though it has no impact and is ignored. Specifically, Backend.maxUtilization is ignored when Backend.balancingMode is RATE. In the future, this incompatible combination will be rejected.
     * Check the BalancingMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string balancing_mode = 430286217;</code>
     * @param string $var
     * @return $this
     */
    public function setBalancingMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->balancing_mode = $var;

        return $this;
    }

    /**
     * A multiplier applied to the backend's target capacity of its balancing mode. The default value is 1, which means the group serves up to 100% of its configured capacity (depending on balancingMode). A setting of 0 means the group is completely drained, offering 0% of its available capacity. The valid ranges are 0.0 and [0.1,1.0]. You cannot configure a setting larger than 0 and smaller than 0.1. You cannot configure a setting of 0 when there is only one backend attached to the backend service.
     *
     * Generated from protobuf field <code>optional float capacity_scaler = 315958157;</code>
     * @return float
     */
    public function getCapacityScaler()
    {
        return isset($this->capacity_scaler) ? $this->capacity_scaler : 0.0;
    }

    public function hasCapacityScaler()
    {
        return isset($this->capacity_scaler);
    }

    public function clearCapacityScaler()
    {
        unset($this->capacity_scaler);
    }

    /**
     * A multiplier applied to the backend's target capacity of its balancing mode. The default value is 1, which means the group serves up to 100% of its configured capacity (depending on balancingMode). A setting of 0 means the group is completely drained, offering 0% of its available capacity. The valid ranges are 0.0 and [0.1,1.0]. You cannot configure a setting larger than 0 and smaller than 0.1. You cannot configure a setting of 0 when there is only one backend attached to the backend service.
     *
     * Generated from protobuf field <code>optional float capacity_scaler = 315958157;</code>
     * @param float $var
     * @return $this
     */
    public function setCapacityScaler($var)
    {
        GPBUtil::checkFloat($var);
        $this->capacity_scaler = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * This field designates whether this is a failover backend. More than one failover backend can be configured for a given BackendService.
     *
     * Generated from protobuf field <code>optional bool failover = 138892530;</code>
     * @return bool
     */
    public function getFailover()
    {
        return isset($this->failover) ? $this->failover : false;
    }

    public function hasFailover()
    {
        return isset($this->failover);
    }

    public function clearFailover()
    {
        unset($this->failover);
    }

    /**
     * This field designates whether this is a failover backend. More than one failover backend can be configured for a given BackendService.
     *
     * Generated from protobuf field <code>optional bool failover = 138892530;</code>
     * @param bool $var
     * @return $this
     */
    public function setFailover($var)
    {
        GPBUtil::checkBool($var);
        $this->failover = $var;

        return $this;
    }

    /**
     * The fully-qualified URL of an instance group or network endpoint group (NEG) resource. To determine what types of backends a load balancer supports, see the [Backend services overview](https://cloud.google.com/load-balancing/docs/backend-service#backends). You must use the *fully-qualified* URL (starting with https://www.googleapis.com/) to specify the instance group or NEG. Partial URLs are not supported.
     *
     * Generated from protobuf field <code>optional string group = 98629247;</code>
     * @return string
     */
    public function getGroup()
    {
        return isset($this->group) ? $this->group : '';
    }

    public function hasGroup()
    {
        return isset($this->group);
    }

    public function clearGroup()
    {
        unset($this->group);
    }

    /**
     * The fully-qualified URL of an instance group or network endpoint group (NEG) resource. To determine what types of backends a load balancer supports, see the [Backend services overview](https://cloud.google.com/load-balancing/docs/backend-service#backends). You must use the *fully-qualified* URL (starting with https://www.googleapis.com/) to specify the instance group or NEG. Partial URLs are not supported.
     *
     * Generated from protobuf field <code>optional string group = 98629247;</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

        return $this;
    }

    /**
     * Defines a target maximum number of simultaneous connections. For usage guidelines, see Connection balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is RATE.
     *
     * Generated from protobuf field <code>optional int32 max_connections = 110652154;</code>
     * @return int
     */
    public function getMaxConnections()
    {
        return isset($this->max_connections) ? $this->max_connections : 0;
    }

    public function hasMaxConnections()
    {
        return isset($this->max_connections);
    }

    public function clearMaxConnections()
    {
        unset($this->max_connections);
    }

    /**
     * Defines a target maximum number of simultaneous connections. For usage guidelines, see Connection balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is RATE.
     *
     * Generated from protobuf field <code>optional int32 max_connections = 110652154;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxConnections($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_connections = $var;

        return $this;
    }

    /**
     * Defines a target maximum number of simultaneous connections. For usage guidelines, see Connection balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is RATE.
     *
     * Generated from protobuf field <code>optional int32 max_connections_per_endpoint = 216904604;</code>
     * @return int
     */
    public function getMaxConnectionsPerEndpoint()
    {
        return isset($this->max_connections_per_endpoint) ? $this->max_connections_per_endpoint : 0;
    }

    public function hasMaxConnectionsPerEndpoint()
    {
        return isset($this->max_connections_per_endpoint);
    }

    public function clearMaxConnectionsPerEndpoint()
    {
        unset($this->max_connections_per_endpoint);
    }

    /**
     * Defines a target maximum number of simultaneous connections. For usage guidelines, see Connection balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is RATE.
     *
     * Generated from protobuf field <code>optional int32 max_connections_per_endpoint = 216904604;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxConnectionsPerEndpoint($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_connections_per_endpoint = $var;

        return $this;
    }

    /**
     * Defines a target maximum number of simultaneous connections. For usage guidelines, see Connection balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is RATE.
     *
     * Generated from protobuf field <code>optional int32 max_connections_per_instance = 104671900;</code>
     * @return int
     */
    public function getMaxConnectionsPerInstance()
    {
        return isset($this->max_connections_per_instance) ? $this->max_connections_per_instance : 0;
    }

    public function hasMaxConnectionsPerInstance()
    {
        return isset($this->max_connections_per_instance);
    }

    public function clearMaxConnectionsPerInstance()
    {
        unset($this->max_connections_per_instance);
    }

    /**
     * Defines a target maximum number of simultaneous connections. For usage guidelines, see Connection balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is RATE.
     *
     * Generated from protobuf field <code>optional int32 max_connections_per_instance = 104671900;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxConnectionsPerInstance($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_connections_per_instance = $var;

        return $this;
    }

    /**
     * Defines a maximum number of HTTP requests per second (RPS). For usage guidelines, see Rate balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is CONNECTION.
     *
     * Generated from protobuf field <code>optional int32 max_rate = 408035035;</code>
     * @return int
     */
    public function getMaxRate()
    {
        return isset($this->max_rate) ? $this->max_rate : 0;
    }

    public function hasMaxRate()
    {
        return isset($this->max_rate);
    }

    public function clearMaxRate()
    {
        unset($this->max_rate);
    }

    /**
     * Defines a maximum number of HTTP requests per second (RPS). For usage guidelines, see Rate balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is CONNECTION.
     *
     * Generated from protobuf field <code>optional int32 max_rate = 408035035;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxRate($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_rate = $var;

        return $this;
    }

    /**
     * Defines a maximum target for requests per second (RPS). For usage guidelines, see Rate balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is CONNECTION.
     *
     * Generated from protobuf field <code>optional float max_rate_per_endpoint = 129832283;</code>
     * @return float
     */
    public function getMaxRatePerEndpoint()
    {
        return isset($this->max_rate_per_endpoint) ? $this->max_rate_per_endpoint : 0.0;
    }

    public function hasMaxRatePerEndpoint()
    {
        return isset($this->max_rate_per_endpoint);
    }

    public function clearMaxRatePerEndpoint()
    {
        unset($this->max_rate_per_endpoint);
    }

    /**
     * Defines a maximum target for requests per second (RPS). For usage guidelines, see Rate balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is CONNECTION.
     *
     * Generated from protobuf field <code>optional float max_rate_per_endpoint = 129832283;</code>
     * @param float $var
     * @return $this
     */
    public function setMaxRatePerEndpoint($var)
    {
        GPBUtil::checkFloat($var);
        $this->max_rate_per_endpoint = $var;

        return $this;
    }

    /**
     * Defines a maximum target for requests per second (RPS). For usage guidelines, see Rate balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is CONNECTION.
     *
     * Generated from protobuf field <code>optional float max_rate_per_instance = 17599579;</code>
     * @return float
     */
    public function getMaxRatePerInstance()
    {
        return isset($this->max_rate_per_instance) ? $this->max_rate_per_instance : 0.0;
    }

    public function hasMaxRatePerInstance()
    {
        return isset($this->max_rate_per_instance);
    }

    public function clearMaxRatePerInstance()
    {
        unset($this->max_rate_per_instance);
    }

    /**
     * Defines a maximum target for requests per second (RPS). For usage guidelines, see Rate balancing mode and Utilization balancing mode. Not available if the backend's balancingMode is CONNECTION.
     *
     * Generated from protobuf field <code>optional float max_rate_per_instance = 17599579;</code>
     * @param float $var
     * @return $this
     */
    public function setMaxRatePerInstance($var)
    {
        GPBUtil::checkFloat($var);
        $this->max_rate_per_instance = $var;

        return $this;
    }

    /**
     * Optional parameter to define a target capacity for the UTILIZATIONbalancing mode. The valid range is [0.0, 1.0]. For usage guidelines, see Utilization balancing mode.
     *
     * Generated from protobuf field <code>optional float max_utilization = 148192199;</code>
     * @return float
     */
    public function getMaxUtilization()
    {
        return isset($this->max_utilization) ? $this->max_utilization : 0.0;
    }

    public function hasMaxUtilization()
    {
        return isset($this->max_utilization);
    }

    public function clearMaxUtilization()
    {
        unset($this->max_utilization);
    }

    /**
     * Optional parameter to define a target capacity for the UTILIZATIONbalancing mode. The valid range is [0.0, 1.0]. For usage guidelines, see Utilization balancing mode.
     *
     * Generated from protobuf field <code>optional float max_utilization = 148192199;</code>
     * @param float $var
     * @return $this
     */
    public function setMaxUtilization($var)
    {
        GPBUtil::checkFloat($var);
        $this->max_utilization = $var;

        return $this;
    }

}

