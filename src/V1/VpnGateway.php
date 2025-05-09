<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a HA VPN gateway. HA VPN is a high-availability (HA) Cloud VPN solution that lets you securely connect your on-premises network to your Google Cloud Virtual Private Cloud network through an IPsec VPN connection in a single region. For more information about Cloud HA VPN solutions, see Cloud VPN topologies .
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.VpnGateway</code>
 */
class VpnGateway extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * The IP family of the gateway IPs for the HA-VPN gateway interfaces. If not specified, IPV4 will be used.
     * Check the GatewayIpVersion enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string gateway_ip_version = 65074843;</code>
     */
    private $gateway_ip_version = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] Type of resource. Always compute#vpnGateway for VPN gateways.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * A fingerprint for the labels being applied to this VpnGateway, which is essentially a hash of the labels set used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update labels. You must always provide an up-to-date fingerprint hash in order to update or change labels, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve a VpnGateway.
     *
     * Generated from protobuf field <code>optional string label_fingerprint = 178124825;</code>
     */
    private $label_fingerprint = null;
    /**
     * Labels for this resource. These can only be added or modified by the setLabels method. Each label key/value pair must comply with RFC1035. Label values may be empty.
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     */
    private $labels;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * URL of the network to which this VPN gateway is attached. Provided by the client when the VPN gateway is created.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     */
    private $network = null;
    /**
     * [Output Only] URL of the region where the VPN gateway resides.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    private $region = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * The stack type for this VPN gateway to identify the IP protocols that are enabled. Possible values are: IPV4_ONLY, IPV4_IPV6, IPV6_ONLY. If not specified, IPV4_ONLY is used if the gateway IP version is IPV4, or IPV4_IPV6 if the gateway IP version is IPV6.
     * Check the StackType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string stack_type = 425908881;</code>
     */
    private $stack_type = null;
    /**
     * The list of VPN interfaces associated with this VPN gateway.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VpnGatewayVpnGatewayInterface vpn_interfaces = 91842181;</code>
     */
    private $vpn_interfaces;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $gateway_ip_version
     *           The IP family of the gateway IPs for the HA-VPN gateway interfaces. If not specified, IPV4 will be used.
     *           Check the GatewayIpVersion enum for the list of possible values.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of resource. Always compute#vpnGateway for VPN gateways.
     *     @type string $label_fingerprint
     *           A fingerprint for the labels being applied to this VpnGateway, which is essentially a hash of the labels set used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update labels. You must always provide an up-to-date fingerprint hash in order to update or change labels, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve a VpnGateway.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels for this resource. These can only be added or modified by the setLabels method. Each label key/value pair must comply with RFC1035. Label values may be empty.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string $network
     *           URL of the network to which this VPN gateway is attached. Provided by the client when the VPN gateway is created.
     *     @type string $region
     *           [Output Only] URL of the region where the VPN gateway resides.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $stack_type
     *           The stack type for this VPN gateway to identify the IP protocols that are enabled. Possible values are: IPV4_ONLY, IPV4_IPV6, IPV6_ONLY. If not specified, IPV4_ONLY is used if the gateway IP version is IPV4, or IPV4_IPV6 if the gateway IP version is IPV6.
     *           Check the StackType enum for the list of possible values.
     *     @type array<\Google\Cloud\Compute\V1\VpnGatewayVpnGatewayInterface>|\Google\Protobuf\Internal\RepeatedField $vpn_interfaces
     *           The list of VPN interfaces associated with this VPN gateway.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
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
     * [Output Only] Creation timestamp in RFC3339 text format.
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
     * The IP family of the gateway IPs for the HA-VPN gateway interfaces. If not specified, IPV4 will be used.
     * Check the GatewayIpVersion enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string gateway_ip_version = 65074843;</code>
     * @return string
     */
    public function getGatewayIpVersion()
    {
        return isset($this->gateway_ip_version) ? $this->gateway_ip_version : '';
    }

    public function hasGatewayIpVersion()
    {
        return isset($this->gateway_ip_version);
    }

    public function clearGatewayIpVersion()
    {
        unset($this->gateway_ip_version);
    }

    /**
     * The IP family of the gateway IPs for the HA-VPN gateway interfaces. If not specified, IPV4 will be used.
     * Check the GatewayIpVersion enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string gateway_ip_version = 65074843;</code>
     * @param string $var
     * @return $this
     */
    public function setGatewayIpVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->gateway_ip_version = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
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
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
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
     * [Output Only] Type of resource. Always compute#vpnGateway for VPN gateways.
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
     * [Output Only] Type of resource. Always compute#vpnGateway for VPN gateways.
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
     * A fingerprint for the labels being applied to this VpnGateway, which is essentially a hash of the labels set used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update labels. You must always provide an up-to-date fingerprint hash in order to update or change labels, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve a VpnGateway.
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
     * A fingerprint for the labels being applied to this VpnGateway, which is essentially a hash of the labels set used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update labels. You must always provide an up-to-date fingerprint hash in order to update or change labels, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make a get() request to retrieve a VpnGateway.
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
     * Labels for this resource. These can only be added or modified by the setLabels method. Each label key/value pair must comply with RFC1035. Label values may be empty.
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels for this resource. These can only be added or modified by the setLabels method. Each label key/value pair must comply with RFC1035. Label values may be empty.
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

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
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
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
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
     * URL of the network to which this VPN gateway is attached. Provided by the client when the VPN gateway is created.
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
     * URL of the network to which this VPN gateway is attached. Provided by the client when the VPN gateway is created.
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
     * [Output Only] URL of the region where the VPN gateway resides.
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
     * [Output Only] URL of the region where the VPN gateway resides.
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
     * [Output Only] Server-defined URL for the resource.
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
     * [Output Only] Server-defined URL for the resource.
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
     * The stack type for this VPN gateway to identify the IP protocols that are enabled. Possible values are: IPV4_ONLY, IPV4_IPV6, IPV6_ONLY. If not specified, IPV4_ONLY is used if the gateway IP version is IPV4, or IPV4_IPV6 if the gateway IP version is IPV6.
     * Check the StackType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string stack_type = 425908881;</code>
     * @return string
     */
    public function getStackType()
    {
        return isset($this->stack_type) ? $this->stack_type : '';
    }

    public function hasStackType()
    {
        return isset($this->stack_type);
    }

    public function clearStackType()
    {
        unset($this->stack_type);
    }

    /**
     * The stack type for this VPN gateway to identify the IP protocols that are enabled. Possible values are: IPV4_ONLY, IPV4_IPV6, IPV6_ONLY. If not specified, IPV4_ONLY is used if the gateway IP version is IPV4, or IPV4_IPV6 if the gateway IP version is IPV6.
     * Check the StackType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string stack_type = 425908881;</code>
     * @param string $var
     * @return $this
     */
    public function setStackType($var)
    {
        GPBUtil::checkString($var, True);
        $this->stack_type = $var;

        return $this;
    }

    /**
     * The list of VPN interfaces associated with this VPN gateway.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VpnGatewayVpnGatewayInterface vpn_interfaces = 91842181;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVpnInterfaces()
    {
        return $this->vpn_interfaces;
    }

    /**
     * The list of VPN interfaces associated with this VPN gateway.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VpnGatewayVpnGatewayInterface vpn_interfaces = 91842181;</code>
     * @param array<\Google\Cloud\Compute\V1\VpnGatewayVpnGatewayInterface>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVpnInterfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\VpnGatewayVpnGatewayInterface::class);
        $this->vpn_interfaces = $arr;

        return $this;
    }

}

