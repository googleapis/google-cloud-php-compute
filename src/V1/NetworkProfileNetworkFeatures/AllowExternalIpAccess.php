<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NetworkProfileNetworkFeatures;

use UnexpectedValueException;

/**
 * Specifies whether VMs are allowed to have external IP access on network interfaces connected to this VPC.
 *
 * Protobuf type <code>google.cloud.compute.v1.NetworkProfileNetworkFeatures.AllowExternalIpAccess</code>
 */
class AllowExternalIpAccess
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ALLOW_EXTERNAL_IP_ACCESS = 0;</code>
     */
    const UNDEFINED_ALLOW_EXTERNAL_IP_ACCESS = 0;
    /**
     * Generated from protobuf enum <code>EXTERNAL_IP_ACCESS_ALLOWED = 109530193;</code>
     */
    const EXTERNAL_IP_ACCESS_ALLOWED = 109530193;
    /**
     * Generated from protobuf enum <code>EXTERNAL_IP_ACCESS_BLOCKED = 462564501;</code>
     */
    const EXTERNAL_IP_ACCESS_BLOCKED = 462564501;

    private static $valueToName = [
        self::UNDEFINED_ALLOW_EXTERNAL_IP_ACCESS => 'UNDEFINED_ALLOW_EXTERNAL_IP_ACCESS',
        self::EXTERNAL_IP_ACCESS_ALLOWED => 'EXTERNAL_IP_ACCESS_ALLOWED',
        self::EXTERNAL_IP_ACCESS_BLOCKED => 'EXTERNAL_IP_ACCESS_BLOCKED',
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

