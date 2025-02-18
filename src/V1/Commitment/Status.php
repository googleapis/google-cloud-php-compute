<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Commitment;

use UnexpectedValueException;

/**
 * [Output Only] Status of the commitment with regards to eventual expiration (each commitment has an end date defined). Status can be one of the following values: NOT_YET_ACTIVE, ACTIVE, or EXPIRED.
 *
 * Protobuf type <code>google.cloud.compute.v1.Commitment.Status</code>
 */
class Status
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_STATUS = 0;</code>
     */
    const UNDEFINED_STATUS = 0;
    /**
     * Generated from protobuf enum <code>ACTIVE = 314733318;</code>
     */
    const ACTIVE = 314733318;
    /**
     * Deprecate CANCELED status. Will use separate status to differentiate cancel by mergeCud or manual cancellation.
     *
     * Generated from protobuf enum <code>CANCELLED = 41957681;</code>
     */
    const CANCELLED = 41957681;
    /**
     * Generated from protobuf enum <code>CREATING = 455564985;</code>
     */
    const CREATING = 455564985;
    /**
     * Generated from protobuf enum <code>EXPIRED = 482489093;</code>
     */
    const EXPIRED = 482489093;
    /**
     * Generated from protobuf enum <code>NOT_YET_ACTIVE = 20607337;</code>
     */
    const NOT_YET_ACTIVE = 20607337;

    private static $valueToName = [
        self::UNDEFINED_STATUS => 'UNDEFINED_STATUS',
        self::ACTIVE => 'ACTIVE',
        self::CANCELLED => 'CANCELLED',
        self::CREATING => 'CREATING',
        self::EXPIRED => 'EXPIRED',
        self::NOT_YET_ACTIVE => 'NOT_YET_ACTIVE',
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


