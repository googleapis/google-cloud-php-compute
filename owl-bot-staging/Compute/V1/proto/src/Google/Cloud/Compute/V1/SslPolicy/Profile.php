<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SslPolicy;

use UnexpectedValueException;

/**
 * Profile specifies the set of SSL features that can be used by the load balancer when negotiating SSL with clients. This can be one of COMPATIBLE, MODERN, RESTRICTED, or CUSTOM. If using CUSTOM, the set of SSL features to enable must be specified in the customFeatures field.
 *
 * Protobuf type <code>google.cloud.compute.v1.SslPolicy.Profile</code>
 */
class Profile
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_PROFILE = 0;</code>
     */
    const UNDEFINED_PROFILE = 0;
    /**
     * Compatible profile. Allows the broadset set of clients, even those which support only out-of-date SSL features to negotiate with the load balancer.
     *
     * Generated from protobuf enum <code>COMPATIBLE = 179357396;</code>
     */
    const COMPATIBLE = 179357396;
    /**
     * Custom profile. Allow only the set of allowed SSL features specified in the customFeatures field.
     *
     * Generated from protobuf enum <code>CUSTOM = 388595569;</code>
     */
    const CUSTOM = 388595569;
    /**
     * Modern profile. Supports a wide set of SSL features, allowing modern clients to negotiate SSL with the load balancer.
     *
     * Generated from protobuf enum <code>MODERN = 132013855;</code>
     */
    const MODERN = 132013855;
    /**
     * Restricted profile. Supports a reduced set of SSL features, intended to meet stricter compliance requirements.
     *
     * Generated from protobuf enum <code>RESTRICTED = 261551195;</code>
     */
    const RESTRICTED = 261551195;

    private static $valueToName = [
        self::UNDEFINED_PROFILE => 'UNDEFINED_PROFILE',
        self::COMPATIBLE => 'COMPATIBLE',
        self::CUSTOM => 'CUSTOM',
        self::MODERN => 'MODERN',
        self::RESTRICTED => 'RESTRICTED',
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
class_alias(Profile::class, \Google\Cloud\Compute\V1\SslPolicy_Profile::class);

