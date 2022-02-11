<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\XpnResourceId;

use UnexpectedValueException;

/**
 * The type of the service resource.
 *
 * Protobuf type <code>google.cloud.compute.v1.XpnResourceId.Type</code>
 */
class Type
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_TYPE = 0;</code>
     */
    const UNDEFINED_TYPE = 0;
    /**
     * Generated from protobuf enum <code>PROJECT = 408671993;</code>
     */
    const PROJECT = 408671993;
    /**
     * Generated from protobuf enum <code>XPN_RESOURCE_TYPE_UNSPECIFIED = 151607034;</code>
     */
    const XPN_RESOURCE_TYPE_UNSPECIFIED = 151607034;

    private static $valueToName = [
        self::UNDEFINED_TYPE => 'UNDEFINED_TYPE',
        self::PROJECT => 'PROJECT',
        self::XPN_RESOURCE_TYPE_UNSPECIFIED => 'XPN_RESOURCE_TYPE_UNSPECIFIED',
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
class_alias(Type::class, \Google\Cloud\Compute\V1\XpnResourceId_Type::class);
