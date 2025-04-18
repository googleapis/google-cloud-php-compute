<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for ReservationBlocks.PerformMaintenance. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PerformMaintenanceReservationBlockRequest</code>
 */
class PerformMaintenanceReservationBlockRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     */
    private $request_id = null;
    /**
     * The name of the reservation. Name should conform to RFC1035 or be a resource ID.
     *
     * Generated from protobuf field <code>string reservation = 47530956 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $reservation = '';
    /**
     * The name of the reservation block. Name should conform to RFC1035 or be a resource ID.
     *
     * Generated from protobuf field <code>string reservation_block = 532832858 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $reservation_block = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ReservationsBlocksPerformMaintenanceRequest reservations_blocks_perform_maintenance_request_resource = 485823625 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $reservations_blocks_perform_maintenance_request_resource = null;
    /**
     * Name of the zone for this request. Zone name should conform to RFC1035.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     */
    private $zone = '';

    /**
     * @param string                                                               $project                                             Project ID for this request.
     * @param string                                                               $zone                                                Name of the zone for this request. Zone name should conform to RFC1035.
     * @param string                                                               $reservation                                         The name of the reservation. Name should conform to RFC1035 or be a resource ID.
     * @param string                                                               $reservationBlock                                    The name of the reservation block. Name should conform to RFC1035 or be a resource ID.
     * @param \Google\Cloud\Compute\V1\ReservationsBlocksPerformMaintenanceRequest $reservationsBlocksPerformMaintenanceRequestResource The body resource for this request
     *
     * @return \Google\Cloud\Compute\V1\PerformMaintenanceReservationBlockRequest
     *
     * @experimental
     */
    public static function build(string $project, string $zone, string $reservation, string $reservationBlock, \Google\Cloud\Compute\V1\ReservationsBlocksPerformMaintenanceRequest $reservationsBlocksPerformMaintenanceRequestResource): self
    {
        return (new self())
            ->setProject($project)
            ->setZone($zone)
            ->setReservation($reservation)
            ->setReservationBlock($reservationBlock)
            ->setReservationsBlocksPerformMaintenanceRequestResource($reservationsBlocksPerformMaintenanceRequestResource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Project ID for this request.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *     @type string $reservation
     *           The name of the reservation. Name should conform to RFC1035 or be a resource ID.
     *     @type string $reservation_block
     *           The name of the reservation block. Name should conform to RFC1035 or be a resource ID.
     *     @type \Google\Cloud\Compute\V1\ReservationsBlocksPerformMaintenanceRequest $reservations_blocks_perform_maintenance_request_resource
     *           The body resource for this request
     *     @type string $zone
     *           Name of the zone for this request. Zone name should conform to RFC1035.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * The name of the reservation. Name should conform to RFC1035 or be a resource ID.
     *
     * Generated from protobuf field <code>string reservation = 47530956 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * The name of the reservation. Name should conform to RFC1035 or be a resource ID.
     *
     * Generated from protobuf field <code>string reservation = 47530956 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setReservation($var)
    {
        GPBUtil::checkString($var, True);
        $this->reservation = $var;

        return $this;
    }

    /**
     * The name of the reservation block. Name should conform to RFC1035 or be a resource ID.
     *
     * Generated from protobuf field <code>string reservation_block = 532832858 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getReservationBlock()
    {
        return $this->reservation_block;
    }

    /**
     * The name of the reservation block. Name should conform to RFC1035 or be a resource ID.
     *
     * Generated from protobuf field <code>string reservation_block = 532832858 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setReservationBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->reservation_block = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ReservationsBlocksPerformMaintenanceRequest reservations_blocks_perform_maintenance_request_resource = 485823625 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\ReservationsBlocksPerformMaintenanceRequest|null
     */
    public function getReservationsBlocksPerformMaintenanceRequestResource()
    {
        return $this->reservations_blocks_perform_maintenance_request_resource;
    }

    public function hasReservationsBlocksPerformMaintenanceRequestResource()
    {
        return isset($this->reservations_blocks_perform_maintenance_request_resource);
    }

    public function clearReservationsBlocksPerformMaintenanceRequestResource()
    {
        unset($this->reservations_blocks_perform_maintenance_request_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ReservationsBlocksPerformMaintenanceRequest reservations_blocks_perform_maintenance_request_resource = 485823625 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\ReservationsBlocksPerformMaintenanceRequest $var
     * @return $this
     */
    public function setReservationsBlocksPerformMaintenanceRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ReservationsBlocksPerformMaintenanceRequest::class);
        $this->reservations_blocks_perform_maintenance_request_resource = $var;

        return $this;
    }

    /**
     * Name of the zone for this request. Zone name should conform to RFC1035.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Name of the zone for this request. Zone name should conform to RFC1035.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "zone"];</code>
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

