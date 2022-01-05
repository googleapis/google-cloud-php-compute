<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Instance;

use UnexpectedValueException;

/**
 * [Output Only] The status of the instance. One of the following values: PROVISIONING, STAGING, RUNNING, STOPPING, SUSPENDING, SUSPENDED, REPAIRING, and TERMINATED. For more information about the status of the instance, see Instance life cycle.
 *
 * Protobuf type <code>google.cloud.compute.v1.Instance.Status</code>
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
     * The Nanny is halted and we are performing tear down tasks like network deprogramming, releasing quota, IP, tearing down disks etc.
     *
     * Generated from protobuf enum <code>DEPROVISIONING = 428935662;</code>
     */
    const DEPROVISIONING = 428935662;
    /**
     * Resources are being allocated for the instance.
     *
     * Generated from protobuf enum <code>PROVISIONING = 290896621;</code>
     */
    const PROVISIONING = 290896621;
    /**
     * The instance is in repair.
     *
     * Generated from protobuf enum <code>REPAIRING = 413483285;</code>
     */
    const REPAIRING = 413483285;
    /**
     * The instance is running.
     *
     * Generated from protobuf enum <code>RUNNING = 121282975;</code>
     */
    const RUNNING = 121282975;
    /**
     * All required resources have been allocated and the instance is being started.
     *
     * Generated from protobuf enum <code>STAGING = 431072283;</code>
     */
    const STAGING = 431072283;
    /**
     * The instance has stopped successfully.
     *
     * Generated from protobuf enum <code>STOPPED = 444276141;</code>
     */
    const STOPPED = 444276141;
    /**
     * The instance is currently stopping (either being deleted or killed).
     *
     * Generated from protobuf enum <code>STOPPING = 350791796;</code>
     */
    const STOPPING = 350791796;
    /**
     * The instance has suspended.
     *
     * Generated from protobuf enum <code>SUSPENDED = 51223995;</code>
     */
    const SUSPENDED = 51223995;
    /**
     * The instance is suspending.
     *
     * Generated from protobuf enum <code>SUSPENDING = 514206246;</code>
     */
    const SUSPENDING = 514206246;
    /**
     * The instance has stopped (either by explicit action or underlying failure).
     *
     * Generated from protobuf enum <code>TERMINATED = 250018339;</code>
     */
    const TERMINATED = 250018339;

    private static $valueToName = [
        self::UNDEFINED_STATUS => 'UNDEFINED_STATUS',
        self::DEPROVISIONING => 'DEPROVISIONING',
        self::PROVISIONING => 'PROVISIONING',
        self::REPAIRING => 'REPAIRING',
        self::RUNNING => 'RUNNING',
        self::STAGING => 'STAGING',
        self::STOPPED => 'STOPPED',
        self::STOPPING => 'STOPPING',
        self::SUSPENDED => 'SUSPENDED',
        self::SUSPENDING => 'SUSPENDING',
        self::TERMINATED => 'TERMINATED',
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
class_alias(Status::class, \Google\Cloud\Compute\V1\Instance_Status::class);

