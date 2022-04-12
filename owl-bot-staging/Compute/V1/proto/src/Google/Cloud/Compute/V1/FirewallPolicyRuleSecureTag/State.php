<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\FirewallPolicyRuleSecureTag;

use UnexpectedValueException;

/**
 * [Output Only] State of the secure tag, either `EFFECTIVE` or `INEFFECTIVE`. A secure tag is `INEFFECTIVE` when it is deleted or its network is deleted.
 *
 * Protobuf type <code>google.cloud.compute.v1.FirewallPolicyRuleSecureTag.State</code>
 */
class State
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_STATE = 0;</code>
     */
    const UNDEFINED_STATE = 0;
    /**
     * Generated from protobuf enum <code>EFFECTIVE = 244201863;</code>
     */
    const EFFECTIVE = 244201863;
    /**
     * Generated from protobuf enum <code>INEFFECTIVE = 304458242;</code>
     */
    const INEFFECTIVE = 304458242;

    private static $valueToName = [
        self::UNDEFINED_STATE => 'UNDEFINED_STATE',
        self::EFFECTIVE => 'EFFECTIVE',
        self::INEFFECTIVE => 'INEFFECTIVE',
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
class_alias(State::class, \Google\Cloud\Compute\V1\FirewallPolicyRuleSecureTag_State::class);
