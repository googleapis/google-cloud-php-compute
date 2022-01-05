<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an Instance Group resource. Instance Groups can be used to configure a target for load balancing. Instance groups can either be managed or unmanaged. To create managed instance groups, use the instanceGroupManager or regionInstanceGroupManager resource instead. Use zonal unmanaged instance groups if you need to apply load balancing to groups of heterogeneous instances or if you need to manage the instances yourself. You cannot create regional unmanaged instance groups. For more information, read Instance groups.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroup</code>
 */
class InstanceGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The creation timestamp for this instance group in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    protected $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    protected $description = null;
    /**
     * [Output Only] The fingerprint of the named ports. The system uses this fingerprint to detect conflicts when multiple users change the named ports concurrently.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     */
    protected $fingerprint = null;
    /**
     * [Output Only] A unique identifier for this instance group, generated by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    protected $id = null;
    /**
     * [Output Only] The resource type, which is always compute#instanceGroup for instance groups.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    protected $kind = null;
    /**
     * The name of the instance group. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    protected $name = null;
    /**
     *  Assigns a name to a port number. For example: {name: "http", port: 80} This allows the system to reference ports by the assigned name instead of a port number. Named ports can also contain multiple ports. For example: [{name: "http", port: 80},{name: "http", port: 8080}] Named ports apply to all instances in this instance group. 
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NamedPort named_ports = 427598732;</code>
     */
    private $named_ports;
    /**
     * [Output Only] The URL of the network to which all instances in the instance group belong. If your instance has multiple network interfaces, then the network and subnetwork fields only refer to the network and subnet used by your primary interface (nic0).
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     */
    protected $network = null;
    /**
     * [Output Only] The URL of the region where the instance group is located (for regional resources).
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    protected $region = null;
    /**
     * [Output Only] The URL for this instance group. The server generates this URL.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    protected $self_link = null;
    /**
     * [Output Only] The total number of instances in the instance group.
     *
     * Generated from protobuf field <code>optional int32 size = 3530753;</code>
     */
    protected $size = null;
    /**
     * [Output Only] The URL of the subnetwork to which all instances in the instance group belong. If your instance has multiple network interfaces, then the network and subnetwork fields only refer to the network and subnet used by your primary interface (nic0).
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     */
    protected $subnetwork = null;
    /**
     * [Output Only] The URL of the zone where the instance group is located (for zonal resources).
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     */
    protected $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *           [Output Only] The creation timestamp for this instance group in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $fingerprint
     *           [Output Only] The fingerprint of the named ports. The system uses this fingerprint to detect conflicts when multiple users change the named ports concurrently.
     *     @type int|string $id
     *           [Output Only] A unique identifier for this instance group, generated by the server.
     *     @type string $kind
     *           [Output Only] The resource type, which is always compute#instanceGroup for instance groups.
     *     @type string $name
     *           The name of the instance group. The name must be 1-63 characters long, and comply with RFC1035.
     *     @type \Google\Cloud\Compute\V1\NamedPort[]|\Google\Protobuf\Internal\RepeatedField $named_ports
     *            Assigns a name to a port number. For example: {name: "http", port: 80} This allows the system to reference ports by the assigned name instead of a port number. Named ports can also contain multiple ports. For example: [{name: "http", port: 80},{name: "http", port: 8080}] Named ports apply to all instances in this instance group. 
     *     @type string $network
     *           [Output Only] The URL of the network to which all instances in the instance group belong. If your instance has multiple network interfaces, then the network and subnetwork fields only refer to the network and subnet used by your primary interface (nic0).
     *     @type string $region
     *           [Output Only] The URL of the region where the instance group is located (for regional resources).
     *     @type string $self_link
     *           [Output Only] The URL for this instance group. The server generates this URL.
     *     @type int $size
     *           [Output Only] The total number of instances in the instance group.
     *     @type string $subnetwork
     *           [Output Only] The URL of the subnetwork to which all instances in the instance group belong. If your instance has multiple network interfaces, then the network and subnetwork fields only refer to the network and subnet used by your primary interface (nic0).
     *     @type string $zone
     *           [Output Only] The URL of the zone where the instance group is located (for zonal resources).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The creation timestamp for this instance group in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] The creation timestamp for this instance group in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

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
     * [Output Only] The fingerprint of the named ports. The system uses this fingerprint to detect conflicts when multiple users change the named ports concurrently.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return isset($this->fingerprint) ? $this->fingerprint : '';
    }

    public function hasFingerprint()
    {
        return isset($this->fingerprint);
    }

    public function clearFingerprint()
    {
        unset($this->fingerprint);
    }

    /**
     * [Output Only] The fingerprint of the named ports. The system uses this fingerprint to detect conflicts when multiple users change the named ports concurrently.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * [Output Only] A unique identifier for this instance group, generated by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] A unique identifier for this instance group, generated by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] The resource type, which is always compute#instanceGroup for instance groups.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] The resource type, which is always compute#instanceGroup for instance groups.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The name of the instance group. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the instance group. The name must be 1-63 characters long, and comply with RFC1035.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
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
     *  Assigns a name to a port number. For example: {name: "http", port: 80} This allows the system to reference ports by the assigned name instead of a port number. Named ports can also contain multiple ports. For example: [{name: "http", port: 80},{name: "http", port: 8080}] Named ports apply to all instances in this instance group. 
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NamedPort named_ports = 427598732;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNamedPorts()
    {
        return $this->named_ports;
    }

    /**
     *  Assigns a name to a port number. For example: {name: "http", port: 80} This allows the system to reference ports by the assigned name instead of a port number. Named ports can also contain multiple ports. For example: [{name: "http", port: 80},{name: "http", port: 8080}] Named ports apply to all instances in this instance group. 
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NamedPort named_ports = 427598732;</code>
     * @param \Google\Cloud\Compute\V1\NamedPort[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNamedPorts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\NamedPort::class);
        $this->named_ports = $arr;

        return $this;
    }

    /**
     * [Output Only] The URL of the network to which all instances in the instance group belong. If your instance has multiple network interfaces, then the network and subnetwork fields only refer to the network and subnet used by your primary interface (nic0).
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     * @return string
     */
    public function getNetwork()
    {
        return isset($this->network) ? $this->network : '';
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * [Output Only] The URL of the network to which all instances in the instance group belong. If your instance has multiple network interfaces, then the network and subnetwork fields only refer to the network and subnet used by your primary interface (nic0).
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the region where the instance group is located (for regional resources).
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] The URL of the region where the instance group is located (for regional resources).
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] The URL for this instance group. The server generates this URL.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] The URL for this instance group. The server generates this URL.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] The total number of instances in the instance group.
     *
     * Generated from protobuf field <code>optional int32 size = 3530753;</code>
     * @return int
     */
    public function getSize()
    {
        return isset($this->size) ? $this->size : 0;
    }

    public function hasSize()
    {
        return isset($this->size);
    }

    public function clearSize()
    {
        unset($this->size);
    }

    /**
     * [Output Only] The total number of instances in the instance group.
     *
     * Generated from protobuf field <code>optional int32 size = 3530753;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the subnetwork to which all instances in the instance group belong. If your instance has multiple network interfaces, then the network and subnetwork fields only refer to the network and subnet used by your primary interface (nic0).
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return isset($this->subnetwork) ? $this->subnetwork : '';
    }

    public function hasSubnetwork()
    {
        return isset($this->subnetwork);
    }

    public function clearSubnetwork()
    {
        unset($this->subnetwork);
    }

    /**
     * [Output Only] The URL of the subnetwork to which all instances in the instance group belong. If your instance has multiple network interfaces, then the network and subnetwork fields only refer to the network and subnet used by your primary interface (nic0).
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the zone where the instance group is located (for zonal resources).
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * [Output Only] The URL of the zone where the instance group is located (for zonal resources).
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

