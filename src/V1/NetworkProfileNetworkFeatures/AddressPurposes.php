<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NetworkProfileNetworkFeatures;

use UnexpectedValueException;

/**
 * 
 * Additional supported values which may be not listed in the enum directly due to technical reasons:
 * PRIVATE_SERVICE_CONNECT
 *
 * Protobuf type <code>google.cloud.compute.v1.NetworkProfileNetworkFeatures.AddressPurposes</code>
 */
class AddressPurposes
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ADDRESS_PURPOSES = 0;</code>
     */
    const UNDEFINED_ADDRESS_PURPOSES = 0;
    /**
     * DNS resolver address in the subnetwork.
     *
     * Generated from protobuf enum <code>DNS_RESOLVER = 476114556;</code>
     */
    const DNS_RESOLVER = 476114556;
    /**
     * VM internal/alias IP, Internal LB service IP, etc.
     *
     * Generated from protobuf enum <code>GCE_ENDPOINT = 230515243;</code>
     */
    const GCE_ENDPOINT = 230515243;
    /**
     * A regional internal IP address range reserved for the VLAN attachment that is used in HA VPN over Cloud Interconnect. This regional internal IP address range must not overlap with any IP address range of subnet/route in the VPC network and its peering networks. After the VLAN attachment is created with the reserved IP address range, when creating a new VPN gateway, its interface IP address is allocated from the associated VLAN attachment’s IP address range.
     *
     * Generated from protobuf enum <code>IPSEC_INTERCONNECT = 340437251;</code>
     */
    const IPSEC_INTERCONNECT = 340437251;
    /**
     * External IP automatically reserved for Cloud NAT.
     *
     * Generated from protobuf enum <code>NAT_AUTO = 163666477;</code>
     */
    const NAT_AUTO = 163666477;
    /**
     * Generated from protobuf enum <code>PRIVATE_SERVICE_CONNECT = 48134724;</code>
     */
    const PRIVATE_SERVICE_CONNECT = 48134724;
    /**
     * A regional internal IP address range reserved for Serverless.
     *
     * Generated from protobuf enum <code>SERVERLESS = 270492508;</code>
     */
    const SERVERLESS = 270492508;
    /**
     * A private network IP address that can be shared by multiple Internal Load Balancer forwarding rules.
     *
     * Generated from protobuf enum <code>SHARED_LOADBALANCER_VIP = 294447572;</code>
     */
    const SHARED_LOADBALANCER_VIP = 294447572;
    /**
     * IP range for peer networks.
     *
     * Generated from protobuf enum <code>VPC_PEERING = 400800170;</code>
     */
    const VPC_PEERING = 400800170;

    private static $valueToName = [
        self::UNDEFINED_ADDRESS_PURPOSES => 'UNDEFINED_ADDRESS_PURPOSES',
        self::DNS_RESOLVER => 'DNS_RESOLVER',
        self::GCE_ENDPOINT => 'GCE_ENDPOINT',
        self::IPSEC_INTERCONNECT => 'IPSEC_INTERCONNECT',
        self::NAT_AUTO => 'NAT_AUTO',
        self::PRIVATE_SERVICE_CONNECT => 'PRIVATE_SERVICE_CONNECT',
        self::SERVERLESS => 'SERVERLESS',
        self::SHARED_LOADBALANCER_VIP => 'SHARED_LOADBALANCER_VIP',
        self::VPC_PEERING => 'VPC_PEERING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


