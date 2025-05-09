<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\AllocationReservationSharingPolicy;

use UnexpectedValueException;

/**
 * Sharing config for all Google Cloud services.
 *
 * Protobuf type <code>google.cloud.compute.v1.AllocationReservationSharingPolicy.ServiceShareType</code>
 */
class ServiceShareType
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_SERVICE_SHARE_TYPE = 0;</code>
     */
    const UNDEFINED_SERVICE_SHARE_TYPE = 0;
    /**
     * Allow all Google Cloud managed services to share reservations.
     *
     * Generated from protobuf enum <code>ALLOW_ALL = 475536235;</code>
     */
    const ALLOW_ALL = 475536235;
    /**
     * [Default] Disallow sharing with all Google Cloud services.
     *
     * Generated from protobuf enum <code>DISALLOW_ALL = 277786301;</code>
     */
    const DISALLOW_ALL = 277786301;
    /**
     * Generated from protobuf enum <code>SERVICE_SHARE_TYPE_UNSPECIFIED = 279057148;</code>
     */
    const SERVICE_SHARE_TYPE_UNSPECIFIED = 279057148;

    private static $valueToName = [
        self::UNDEFINED_SERVICE_SHARE_TYPE => 'UNDEFINED_SERVICE_SHARE_TYPE',
        self::ALLOW_ALL => 'ALLOW_ALL',
        self::DISALLOW_ALL => 'DISALLOW_ALL',
        self::SERVICE_SHARE_TYPE_UNSPECIFIED => 'SERVICE_SHARE_TYPE_UNSPECIFIED',
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


