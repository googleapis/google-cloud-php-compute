<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a reservation resource. A reservation ensures that capacity is held in a specific zone even if the reserved VMs are not running. For more information, read Reserving zonal resources.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Reservation</code>
 */
class Reservation extends \Google\Protobuf\Internal\Message
{
    /**
     * Reservation for aggregated resources, providing shape flexibility.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationAggregateReservation aggregate_reservation = 291567948;</code>
     */
    private $aggregate_reservation = null;
    /**
     * [Output Only] Full or partial URL to a parent commitment. This field displays for reservations that are tied to a commitment.
     *
     * Generated from protobuf field <code>optional string commitment = 482134805;</code>
     */
    private $commitment = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * Duration time relative to reservation creation when Compute Engine will automatically delete this resource.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Duration delete_after_duration = 323997099;</code>
     */
    private $delete_after_duration = null;
    /**
     * Absolute time in future when the reservation will be auto-deleted by Compute Engine. Timestamp is represented in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string delete_at_time = 83294405;</code>
     */
    private $delete_at_time = null;
    /**
     * Specifies the deployment strategy for this reservation.
     * Check the DeploymentType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string deployment_type = 396722292;</code>
     */
    private $deployment_type = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Indicates whether Compute Engine allows unplanned maintenance for your VMs; for example, to fix hardware errors.
     *
     * Generated from protobuf field <code>optional bool enable_emergent_maintenance = 353759497;</code>
     */
    private $enable_emergent_maintenance = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] Type of the resource. Always compute#reservations for reservations.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * [Output Only] Full or partial URL to parent commitments. This field displays for reservations that are tied to multiple commitments.
     *
     * Generated from protobuf field <code>repeated string linked_commitments = 470957784;</code>
     */
    private $linked_commitments;
    /**
     * The name of the resource, provided by the client when initially creating the resource. The resource name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * Specify the reservation sharing policy. If unspecified, the reservation will not be shared with Google Cloud managed services.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationReservationSharingPolicy reservation_sharing_policy = 205970120;</code>
     */
    private $reservation_sharing_policy = null;
    /**
     * Resource policies to be added to this reservation. The key is defined by user, and the value is resource policy url. This is to define placement policy with reservation.
     *
     * Generated from protobuf field <code>map<string, string> resource_policies = 22220385;</code>
     */
    private $resource_policies;
    /**
     * [Output Only] Status information for Reservation resource.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationResourceStatus resource_status = 249429315;</code>
     */
    private $resource_status = null;
    /**
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 480964267;</code>
     */
    private $satisfies_pzs = null;
    /**
     * The type of maintenance for the reservation.
     * Check the SchedulingType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string scheduling_type = 199835397;</code>
     */
    private $scheduling_type = null;
    /**
     * [Output Only] Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * Specify share-settings to create a shared reservation. This property is optional. For more information about the syntax and options for this field and its subfields, see the guide for creating a shared reservation.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ShareSettings share_settings = 266668163;</code>
     */
    private $share_settings = null;
    /**
     * Reservation for instances with specific machine shapes.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationSpecificSKUReservation specific_reservation = 404901951;</code>
     */
    private $specific_reservation = null;
    /**
     * Indicates whether the reservation can be consumed by VMs with affinity for "any" reservation. If the field is set, then only VMs that target the reservation by name can consume from this reservation.
     *
     * Generated from protobuf field <code>optional bool specific_reservation_required = 226550687;</code>
     */
    private $specific_reservation_required = null;
    /**
     * [Output Only] The status of the reservation. - CREATING: Reservation resources are being allocated. - READY: Reservation resources have been allocated, and the reservation is ready for use. - DELETING: Reservation deletion is in progress. - UPDATING: Reservation update is in progress.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    private $status = null;
    /**
     * Zone in which the reservation resides. A zone must be provided if the reservation is created within a commitment.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     */
    private $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\AllocationAggregateReservation $aggregate_reservation
     *           Reservation for aggregated resources, providing shape flexibility.
     *     @type string $commitment
     *           [Output Only] Full or partial URL to a parent commitment. This field displays for reservations that are tied to a commitment.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type \Google\Cloud\Compute\V1\Duration $delete_after_duration
     *           Duration time relative to reservation creation when Compute Engine will automatically delete this resource.
     *     @type string $delete_at_time
     *           Absolute time in future when the reservation will be auto-deleted by Compute Engine. Timestamp is represented in RFC3339 text format.
     *     @type string $deployment_type
     *           Specifies the deployment strategy for this reservation.
     *           Check the DeploymentType enum for the list of possible values.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type bool $enable_emergent_maintenance
     *           Indicates whether Compute Engine allows unplanned maintenance for your VMs; for example, to fix hardware errors.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#reservations for reservations.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $linked_commitments
     *           [Output Only] Full or partial URL to parent commitments. This field displays for reservations that are tied to multiple commitments.
     *     @type string $name
     *           The name of the resource, provided by the client when initially creating the resource. The resource name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type \Google\Cloud\Compute\V1\AllocationReservationSharingPolicy $reservation_sharing_policy
     *           Specify the reservation sharing policy. If unspecified, the reservation will not be shared with Google Cloud managed services.
     *     @type array|\Google\Protobuf\Internal\MapField $resource_policies
     *           Resource policies to be added to this reservation. The key is defined by user, and the value is resource policy url. This is to define placement policy with reservation.
     *     @type \Google\Cloud\Compute\V1\AllocationResourceStatus $resource_status
     *           [Output Only] Status information for Reservation resource.
     *     @type bool $satisfies_pzs
     *           [Output Only] Reserved for future use.
     *     @type string $scheduling_type
     *           The type of maintenance for the reservation.
     *           Check the SchedulingType enum for the list of possible values.
     *     @type string $self_link
     *           [Output Only] Server-defined fully-qualified URL for this resource.
     *     @type \Google\Cloud\Compute\V1\ShareSettings $share_settings
     *           Specify share-settings to create a shared reservation. This property is optional. For more information about the syntax and options for this field and its subfields, see the guide for creating a shared reservation.
     *     @type \Google\Cloud\Compute\V1\AllocationSpecificSKUReservation $specific_reservation
     *           Reservation for instances with specific machine shapes.
     *     @type bool $specific_reservation_required
     *           Indicates whether the reservation can be consumed by VMs with affinity for "any" reservation. If the field is set, then only VMs that target the reservation by name can consume from this reservation.
     *     @type string $status
     *           [Output Only] The status of the reservation. - CREATING: Reservation resources are being allocated. - READY: Reservation resources have been allocated, and the reservation is ready for use. - DELETING: Reservation deletion is in progress. - UPDATING: Reservation update is in progress.
     *           Check the Status enum for the list of possible values.
     *     @type string $zone
     *           Zone in which the reservation resides. A zone must be provided if the reservation is created within a commitment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Reservation for aggregated resources, providing shape flexibility.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationAggregateReservation aggregate_reservation = 291567948;</code>
     * @return \Google\Cloud\Compute\V1\AllocationAggregateReservation|null
     */
    public function getAggregateReservation()
    {
        return $this->aggregate_reservation;
    }

    public function hasAggregateReservation()
    {
        return isset($this->aggregate_reservation);
    }

    public function clearAggregateReservation()
    {
        unset($this->aggregate_reservation);
    }

    /**
     * Reservation for aggregated resources, providing shape flexibility.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationAggregateReservation aggregate_reservation = 291567948;</code>
     * @param \Google\Cloud\Compute\V1\AllocationAggregateReservation $var
     * @return $this
     */
    public function setAggregateReservation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\AllocationAggregateReservation::class);
        $this->aggregate_reservation = $var;

        return $this;
    }

    /**
     * [Output Only] Full or partial URL to a parent commitment. This field displays for reservations that are tied to a commitment.
     *
     * Generated from protobuf field <code>optional string commitment = 482134805;</code>
     * @return string
     */
    public function getCommitment()
    {
        return isset($this->commitment) ? $this->commitment : '';
    }

    public function hasCommitment()
    {
        return isset($this->commitment);
    }

    public function clearCommitment()
    {
        unset($this->commitment);
    }

    /**
     * [Output Only] Full or partial URL to a parent commitment. This field displays for reservations that are tied to a commitment.
     *
     * Generated from protobuf field <code>optional string commitment = 482134805;</code>
     * @param string $var
     * @return $this
     */
    public function setCommitment($var)
    {
        GPBUtil::checkString($var, True);
        $this->commitment = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * Duration time relative to reservation creation when Compute Engine will automatically delete this resource.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Duration delete_after_duration = 323997099;</code>
     * @return \Google\Cloud\Compute\V1\Duration|null
     */
    public function getDeleteAfterDuration()
    {
        return $this->delete_after_duration;
    }

    public function hasDeleteAfterDuration()
    {
        return isset($this->delete_after_duration);
    }

    public function clearDeleteAfterDuration()
    {
        unset($this->delete_after_duration);
    }

    /**
     * Duration time relative to reservation creation when Compute Engine will automatically delete this resource.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Duration delete_after_duration = 323997099;</code>
     * @param \Google\Cloud\Compute\V1\Duration $var
     * @return $this
     */
    public function setDeleteAfterDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Duration::class);
        $this->delete_after_duration = $var;

        return $this;
    }

    /**
     * Absolute time in future when the reservation will be auto-deleted by Compute Engine. Timestamp is represented in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string delete_at_time = 83294405;</code>
     * @return string
     */
    public function getDeleteAtTime()
    {
        return isset($this->delete_at_time) ? $this->delete_at_time : '';
    }

    public function hasDeleteAtTime()
    {
        return isset($this->delete_at_time);
    }

    public function clearDeleteAtTime()
    {
        unset($this->delete_at_time);
    }

    /**
     * Absolute time in future when the reservation will be auto-deleted by Compute Engine. Timestamp is represented in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string delete_at_time = 83294405;</code>
     * @param string $var
     * @return $this
     */
    public function setDeleteAtTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->delete_at_time = $var;

        return $this;
    }

    /**
     * Specifies the deployment strategy for this reservation.
     * Check the DeploymentType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string deployment_type = 396722292;</code>
     * @return string
     */
    public function getDeploymentType()
    {
        return isset($this->deployment_type) ? $this->deployment_type : '';
    }

    public function hasDeploymentType()
    {
        return isset($this->deployment_type);
    }

    public function clearDeploymentType()
    {
        unset($this->deployment_type);
    }

    /**
     * Specifies the deployment strategy for this reservation.
     * Check the DeploymentType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string deployment_type = 396722292;</code>
     * @param string $var
     * @return $this
     */
    public function setDeploymentType($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployment_type = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Indicates whether Compute Engine allows unplanned maintenance for your VMs; for example, to fix hardware errors.
     *
     * Generated from protobuf field <code>optional bool enable_emergent_maintenance = 353759497;</code>
     * @return bool
     */
    public function getEnableEmergentMaintenance()
    {
        return isset($this->enable_emergent_maintenance) ? $this->enable_emergent_maintenance : false;
    }

    public function hasEnableEmergentMaintenance()
    {
        return isset($this->enable_emergent_maintenance);
    }

    public function clearEnableEmergentMaintenance()
    {
        unset($this->enable_emergent_maintenance);
    }

    /**
     * Indicates whether Compute Engine allows unplanned maintenance for your VMs; for example, to fix hardware errors.
     *
     * Generated from protobuf field <code>optional bool enable_emergent_maintenance = 353759497;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableEmergentMaintenance($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_emergent_maintenance = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#reservations for reservations.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#reservations for reservations.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * [Output Only] Full or partial URL to parent commitments. This field displays for reservations that are tied to multiple commitments.
     *
     * Generated from protobuf field <code>repeated string linked_commitments = 470957784;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLinkedCommitments()
    {
        return $this->linked_commitments;
    }

    /**
     * [Output Only] Full or partial URL to parent commitments. This field displays for reservations that are tied to multiple commitments.
     *
     * Generated from protobuf field <code>repeated string linked_commitments = 470957784;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLinkedCommitments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->linked_commitments = $arr;

        return $this;
    }

    /**
     * The name of the resource, provided by the client when initially creating the resource. The resource name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the resource, provided by the client when initially creating the resource. The resource name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Specify the reservation sharing policy. If unspecified, the reservation will not be shared with Google Cloud managed services.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationReservationSharingPolicy reservation_sharing_policy = 205970120;</code>
     * @return \Google\Cloud\Compute\V1\AllocationReservationSharingPolicy|null
     */
    public function getReservationSharingPolicy()
    {
        return $this->reservation_sharing_policy;
    }

    public function hasReservationSharingPolicy()
    {
        return isset($this->reservation_sharing_policy);
    }

    public function clearReservationSharingPolicy()
    {
        unset($this->reservation_sharing_policy);
    }

    /**
     * Specify the reservation sharing policy. If unspecified, the reservation will not be shared with Google Cloud managed services.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationReservationSharingPolicy reservation_sharing_policy = 205970120;</code>
     * @param \Google\Cloud\Compute\V1\AllocationReservationSharingPolicy $var
     * @return $this
     */
    public function setReservationSharingPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\AllocationReservationSharingPolicy::class);
        $this->reservation_sharing_policy = $var;

        return $this;
    }

    /**
     * Resource policies to be added to this reservation. The key is defined by user, and the value is resource policy url. This is to define placement policy with reservation.
     *
     * Generated from protobuf field <code>map<string, string> resource_policies = 22220385;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getResourcePolicies()
    {
        return $this->resource_policies;
    }

    /**
     * Resource policies to be added to this reservation. The key is defined by user, and the value is resource policy url. This is to define placement policy with reservation.
     *
     * Generated from protobuf field <code>map<string, string> resource_policies = 22220385;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setResourcePolicies($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_policies = $arr;

        return $this;
    }

    /**
     * [Output Only] Status information for Reservation resource.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationResourceStatus resource_status = 249429315;</code>
     * @return \Google\Cloud\Compute\V1\AllocationResourceStatus|null
     */
    public function getResourceStatus()
    {
        return $this->resource_status;
    }

    public function hasResourceStatus()
    {
        return isset($this->resource_status);
    }

    public function clearResourceStatus()
    {
        unset($this->resource_status);
    }

    /**
     * [Output Only] Status information for Reservation resource.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationResourceStatus resource_status = 249429315;</code>
     * @param \Google\Cloud\Compute\V1\AllocationResourceStatus $var
     * @return $this
     */
    public function setResourceStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\AllocationResourceStatus::class);
        $this->resource_status = $var;

        return $this;
    }

    /**
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 480964267;</code>
     * @return bool
     */
    public function getSatisfiesPzs()
    {
        return isset($this->satisfies_pzs) ? $this->satisfies_pzs : false;
    }

    public function hasSatisfiesPzs()
    {
        return isset($this->satisfies_pzs);
    }

    public function clearSatisfiesPzs()
    {
        unset($this->satisfies_pzs);
    }

    /**
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 480964267;</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * The type of maintenance for the reservation.
     * Check the SchedulingType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string scheduling_type = 199835397;</code>
     * @return string
     */
    public function getSchedulingType()
    {
        return isset($this->scheduling_type) ? $this->scheduling_type : '';
    }

    public function hasSchedulingType()
    {
        return isset($this->scheduling_type);
    }

    public function clearSchedulingType()
    {
        unset($this->scheduling_type);
    }

    /**
     * The type of maintenance for the reservation.
     * Check the SchedulingType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string scheduling_type = 199835397;</code>
     * @param string $var
     * @return $this
     */
    public function setSchedulingType($var)
    {
        GPBUtil::checkString($var, True);
        $this->scheduling_type = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * Specify share-settings to create a shared reservation. This property is optional. For more information about the syntax and options for this field and its subfields, see the guide for creating a shared reservation.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ShareSettings share_settings = 266668163;</code>
     * @return \Google\Cloud\Compute\V1\ShareSettings|null
     */
    public function getShareSettings()
    {
        return $this->share_settings;
    }

    public function hasShareSettings()
    {
        return isset($this->share_settings);
    }

    public function clearShareSettings()
    {
        unset($this->share_settings);
    }

    /**
     * Specify share-settings to create a shared reservation. This property is optional. For more information about the syntax and options for this field and its subfields, see the guide for creating a shared reservation.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ShareSettings share_settings = 266668163;</code>
     * @param \Google\Cloud\Compute\V1\ShareSettings $var
     * @return $this
     */
    public function setShareSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ShareSettings::class);
        $this->share_settings = $var;

        return $this;
    }

    /**
     * Reservation for instances with specific machine shapes.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationSpecificSKUReservation specific_reservation = 404901951;</code>
     * @return \Google\Cloud\Compute\V1\AllocationSpecificSKUReservation|null
     */
    public function getSpecificReservation()
    {
        return $this->specific_reservation;
    }

    public function hasSpecificReservation()
    {
        return isset($this->specific_reservation);
    }

    public function clearSpecificReservation()
    {
        unset($this->specific_reservation);
    }

    /**
     * Reservation for instances with specific machine shapes.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationSpecificSKUReservation specific_reservation = 404901951;</code>
     * @param \Google\Cloud\Compute\V1\AllocationSpecificSKUReservation $var
     * @return $this
     */
    public function setSpecificReservation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\AllocationSpecificSKUReservation::class);
        $this->specific_reservation = $var;

        return $this;
    }

    /**
     * Indicates whether the reservation can be consumed by VMs with affinity for "any" reservation. If the field is set, then only VMs that target the reservation by name can consume from this reservation.
     *
     * Generated from protobuf field <code>optional bool specific_reservation_required = 226550687;</code>
     * @return bool
     */
    public function getSpecificReservationRequired()
    {
        return isset($this->specific_reservation_required) ? $this->specific_reservation_required : false;
    }

    public function hasSpecificReservationRequired()
    {
        return isset($this->specific_reservation_required);
    }

    public function clearSpecificReservationRequired()
    {
        unset($this->specific_reservation_required);
    }

    /**
     * Indicates whether the reservation can be consumed by VMs with affinity for "any" reservation. If the field is set, then only VMs that target the reservation by name can consume from this reservation.
     *
     * Generated from protobuf field <code>optional bool specific_reservation_required = 226550687;</code>
     * @param bool $var
     * @return $this
     */
    public function setSpecificReservationRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->specific_reservation_required = $var;

        return $this;
    }

    /**
     * [Output Only] The status of the reservation. - CREATING: Reservation resources are being allocated. - READY: Reservation resources have been allocated, and the reservation is ready for use. - DELETING: Reservation deletion is in progress. - UPDATING: Reservation update is in progress.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] The status of the reservation. - CREATING: Reservation resources are being allocated. - READY: Reservation resources have been allocated, and the reservation is ready for use. - DELETING: Reservation deletion is in progress. - UPDATING: Reservation update is in progress.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Zone in which the reservation resides. A zone must be provided if the reservation is created within a commitment.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * Zone in which the reservation resides. A zone must be provided if the reservation is created within a commitment.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

