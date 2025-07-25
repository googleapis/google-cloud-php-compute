<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InterconnectGroupsOperationalStatus;

use UnexpectedValueException;

/**
 * Summarizes the status of the group.
 *
 * Protobuf type <code>google.cloud.compute.v1.InterconnectGroupsOperationalStatus.GroupStatus</code>
 */
class GroupStatus
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_GROUP_STATUS = 0;</code>
     */
    const UNDEFINED_GROUP_STATUS = 0;
    /**
     * Generated from protobuf enum <code>DEGRADED = 396890926;</code>
     */
    const DEGRADED = 396890926;
    /**
     * Generated from protobuf enum <code>FULLY_DOWN = 255514647;</code>
     */
    const FULLY_DOWN = 255514647;
    /**
     * Generated from protobuf enum <code>FULLY_UP = 504176464;</code>
     */
    const FULLY_UP = 504176464;
    /**
     * Generated from protobuf enum <code>GROUPS_STATUS_UNSPECIFIED = 261932693;</code>
     */
    const GROUPS_STATUS_UNSPECIFIED = 261932693;

    private static $valueToName = [
        self::UNDEFINED_GROUP_STATUS => 'UNDEFINED_GROUP_STATUS',
        self::DEGRADED => 'DEGRADED',
        self::FULLY_DOWN => 'FULLY_DOWN',
        self::FULLY_UP => 'FULLY_UP',
        self::GROUPS_STATUS_UNSPECIFIED => 'GROUPS_STATUS_UNSPECIFIED',
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


