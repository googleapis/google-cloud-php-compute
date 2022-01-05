<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\ReservationAffinity;

use UnexpectedValueException;

/**
 * Specifies the type of reservation from which this instance can consume resources: ANY_RESERVATION (default), SPECIFIC_RESERVATION, or NO_RESERVATION. See Consuming reserved instances for examples.
 *
 * Protobuf type <code>google.cloud.compute.v1.ReservationAffinity.ConsumeReservationType</code>
 */
class ConsumeReservationType
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_CONSUME_RESERVATION_TYPE = 0;</code>
     */
    const UNDEFINED_CONSUME_RESERVATION_TYPE = 0;
    /**
     * Consume any allocation available.
     *
     * Generated from protobuf enum <code>ANY_RESERVATION = 200008121;</code>
     */
    const ANY_RESERVATION = 200008121;
    /**
     * Do not consume from any allocated capacity.
     *
     * Generated from protobuf enum <code>NO_RESERVATION = 169322030;</code>
     */
    const NO_RESERVATION = 169322030;
    /**
     * Must consume from a specific reservation. Must specify key value fields for specifying the reservations.
     *
     * Generated from protobuf enum <code>SPECIFIC_RESERVATION = 229889055;</code>
     */
    const SPECIFIC_RESERVATION = 229889055;
    /**
     * Generated from protobuf enum <code>UNSPECIFIED = 526786327;</code>
     */
    const UNSPECIFIED = 526786327;

    private static $valueToName = [
        self::UNDEFINED_CONSUME_RESERVATION_TYPE => 'UNDEFINED_CONSUME_RESERVATION_TYPE',
        self::ANY_RESERVATION => 'ANY_RESERVATION',
        self::NO_RESERVATION => 'NO_RESERVATION',
        self::SPECIFIC_RESERVATION => 'SPECIFIC_RESERVATION',
        self::UNSPECIFIED => 'UNSPECIFIED',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConsumeReservationType::class, \Google\Cloud\Compute\V1\ReservationAffinity_ConsumeReservationType::class);

