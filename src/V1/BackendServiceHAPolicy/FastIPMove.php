<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\BackendServiceHAPolicy;

use UnexpectedValueException;

/**
 * Specifies whether fast IP move is enabled, and if so, the mechanism to achieve it. Supported values are: - DISABLED: Fast IP Move is disabled. You can only use the haPolicy.leader API to update the leader. - >GARP_RA: Provides a method to very quickly define a new network endpoint as the leader. This method is faster than updating the leader using the haPolicy.leader API. Fast IP move works as follows: The VM hosting the network endpoint that should become the new leader sends either a Gratuitous ARP (GARP) packet (IPv4) or an ICMPv6 Router Advertisement(RA) packet (IPv6). Google Cloud immediately but temporarily associates the forwarding rule IP address with that VM, and both new and in-flight packets are quickly delivered to that VM. Note the important properties of the Fast IP Move functionality: - The GARP/RA-initiated re-routing stays active for approximately 20 minutes. After triggering fast failover, you must also appropriately set the haPolicy.leader. - The new leader instance should continue to send GARP/RA packets periodically every 10 seconds until at least 10 minutes after updating the haPolicy.leader (but stop immediately if it is no longer the leader). - After triggering a fast failover, we recommend that you wait at least 3 seconds before sending another GARP/RA packet from a different VM instance to avoid race conditions. - Don't send GARP/RA packets from different VM instances at the same time. If multiple instances continue to send GARP/RA packets, traffic might be routed to different destinations in an alternating order. This condition ceases when a single instance issues a GARP/RA packet. - The GARP/RA request always takes priority over the leader API. Using the haPolicy.leader API to change the leader to a different instance will have no effect until the GARP/RA request becomes inactive. - The GARP/RA packets should follow the GARP/RA Packet Specifications.. - When multiple forwarding rules refer to a regional backend service, you need only send a GARP or RA packet for a single forwarding rule virtual IP. The virtual IPs for all forwarding rules targeting the same backend service will also be moved to the sender of the GARP or RA packet. The following are the Fast IP Move limitations (that is, when fastIPMove is not DISABLED): - Multiple forwarding rules cannot use the same IP address if one of them refers to a regional backend service with fastIPMove. - The regional backend service must set the network field, and all NEGs must belong to that network. However, individual NEGs can belong to different subnetworks of that network. - The maximum number of network endpoints across all backends of a backend service with fastIPMove is 64. - The maximum number of backend services with fastIPMove that can have the same network endpoint attached to one of its backends is 64. - The maximum number of backend services with fastIPMove in a VPC in a region is 64. - The network endpoints that are attached to a backend of a backend service with fastIPMove cannot resolve to Gen3+ machines for IPv6. - Traffic directed to the leader by a static route next hop will not be redirected to a new leader by fast failover. Such traffic will only be redirected once an haPolicy.leader update has taken effect. Only traffic to the forwarding rule's virtual IP will be redirected to a new leader by fast failover. haPolicy.fastIPMove can be set only at backend service creation time. Once set, it cannot be updated. By default, fastIpMove is set to DISABLED.
 *
 * Protobuf type <code>google.cloud.compute.v1.BackendServiceHAPolicy.FastIPMove</code>
 */
class FastIPMove
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_FAST_I_P_MOVE = 0;</code>
     */
    const UNDEFINED_FAST_I_P_MOVE = 0;
    /**
     * Generated from protobuf enum <code>DISABLED = 516696700;</code>
     */
    const DISABLED = 516696700;
    /**
     * Generated from protobuf enum <code>GARP_RA = 527352630;</code>
     */
    const GARP_RA = 527352630;

    private static $valueToName = [
        self::UNDEFINED_FAST_I_P_MOVE => 'UNDEFINED_FAST_I_P_MOVE',
        self::DISABLED => 'DISABLED',
        self::GARP_RA => 'GARP_RA',
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


