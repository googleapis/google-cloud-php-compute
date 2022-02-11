<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a machine image resource. A machine image is a Compute Engine resource that stores all the configuration, metadata, permissions, and data from one or more disks required to create a Virtual machine (VM) instance. For more information, see Machine images.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.MachineImage</code>
 */
class MachineImage extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The creation timestamp for this machine image in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    protected $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    protected $description = null;
    /**
     * [Input Only] Whether to attempt an application consistent machine image by informing the OS to prepare for the snapshot process. Currently only supported on Windows instances using the Volume Shadow Copy Service (VSS).
     *
     * Generated from protobuf field <code>optional bool guest_flush = 385550813;</code>
     */
    protected $guest_flush = null;
    /**
     * [Output Only] A unique identifier for this machine image. The server defines this identifier.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    protected $id = null;
    /**
     * [Output Only] Properties of source instance
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceProperties instance_properties = 215355165;</code>
     */
    protected $instance_properties = null;
    /**
     * [Output Only] The resource type, which is always compute#machineImage for machine image.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    protected $kind = null;
    /**
     * Encrypts the machine image using a customer-supplied encryption key. After you encrypt a machine image using a customer-supplied key, you must provide the same key if you use the machine image later. For example, you must provide the encryption key when you create an instance from the encrypted machine image in a future request. Customer-supplied encryption keys do not protect access to metadata of the machine image. If you do not provide an encryption key when creating the machine image, then the machine image will be encrypted using an automatically generated key and you do not need to provide a key to use the machine image later.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CustomerEncryptionKey machine_image_encryption_key = 528089087;</code>
     */
    protected $machine_image_encryption_key = null;
    /**
     * Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 480964267;</code>
     */
    protected $satisfies_pzs = null;
    /**
     * An array of Machine Image specific properties for disks attached to the source instance
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SavedDisk saved_disks = 397424318;</code>
     */
    private $saved_disks;
    /**
     * [Output Only] The URL for this machine image. The server defines this URL.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    protected $self_link = null;
    /**
     * [Input Only] The customer-supplied encryption key of the disks attached to the source instance. Required if the source disk is protected by a customer-supplied encryption key.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SourceDiskEncryptionKey source_disk_encryption_keys = 370408498;</code>
     */
    private $source_disk_encryption_keys;
    /**
     * The source instance used to create the machine image. You can provide this as a partial or full URL to the resource. For example, the following are valid values: - https://www.googleapis.com/compute/v1/projects/project/zones/zone /instances/instance - projects/project/zones/zone/instances/instance 
     *
     * Generated from protobuf field <code>optional string source_instance = 396315705;</code>
     */
    protected $source_instance = null;
    /**
     * [Output Only] DEPRECATED: Please use instance_properties instead for source instance related properties. New properties will not be added to this field.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SourceInstanceProperties source_instance_properties = 475195641;</code>
     */
    protected $source_instance_properties = null;
    /**
     * [Output Only] The status of the machine image. One of the following values: INVALID, CREATING, READY, DELETING, and UPLOADING.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    protected $status = null;
    /**
     * The regional or multi-regional Cloud Storage bucket location where the machine image is stored.
     *
     * Generated from protobuf field <code>repeated string storage_locations = 328005274;</code>
     */
    private $storage_locations;
    /**
     * [Output Only] Total size of the storage used by the machine image.
     *
     * Generated from protobuf field <code>optional int64 total_storage_bytes = 81855468;</code>
     */
    protected $total_storage_bytes = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *           [Output Only] The creation timestamp for this machine image in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type bool $guest_flush
     *           [Input Only] Whether to attempt an application consistent machine image by informing the OS to prepare for the snapshot process. Currently only supported on Windows instances using the Volume Shadow Copy Service (VSS).
     *     @type int|string $id
     *           [Output Only] A unique identifier for this machine image. The server defines this identifier.
     *     @type \Google\Cloud\Compute\V1\InstanceProperties $instance_properties
     *           [Output Only] Properties of source instance
     *     @type string $kind
     *           [Output Only] The resource type, which is always compute#machineImage for machine image.
     *     @type \Google\Cloud\Compute\V1\CustomerEncryptionKey $machine_image_encryption_key
     *           Encrypts the machine image using a customer-supplied encryption key. After you encrypt a machine image using a customer-supplied key, you must provide the same key if you use the machine image later. For example, you must provide the encryption key when you create an instance from the encrypted machine image in a future request. Customer-supplied encryption keys do not protect access to metadata of the machine image. If you do not provide an encryption key when creating the machine image, then the machine image will be encrypted using an automatically generated key and you do not need to provide a key to use the machine image later.
     *     @type string $name
     *           Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type bool $satisfies_pzs
     *           [Output Only] Reserved for future use.
     *     @type \Google\Cloud\Compute\V1\SavedDisk[]|\Google\Protobuf\Internal\RepeatedField $saved_disks
     *           An array of Machine Image specific properties for disks attached to the source instance
     *     @type string $self_link
     *           [Output Only] The URL for this machine image. The server defines this URL.
     *     @type \Google\Cloud\Compute\V1\SourceDiskEncryptionKey[]|\Google\Protobuf\Internal\RepeatedField $source_disk_encryption_keys
     *           [Input Only] The customer-supplied encryption key of the disks attached to the source instance. Required if the source disk is protected by a customer-supplied encryption key.
     *     @type string $source_instance
     *           The source instance used to create the machine image. You can provide this as a partial or full URL to the resource. For example, the following are valid values: - https://www.googleapis.com/compute/v1/projects/project/zones/zone /instances/instance - projects/project/zones/zone/instances/instance 
     *     @type \Google\Cloud\Compute\V1\SourceInstanceProperties $source_instance_properties
     *           [Output Only] DEPRECATED: Please use instance_properties instead for source instance related properties. New properties will not be added to this field.
     *     @type string $status
     *           [Output Only] The status of the machine image. One of the following values: INVALID, CREATING, READY, DELETING, and UPLOADING.
     *           Check the Status enum for the list of possible values.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $storage_locations
     *           The regional or multi-regional Cloud Storage bucket location where the machine image is stored.
     *     @type int|string $total_storage_bytes
     *           [Output Only] Total size of the storage used by the machine image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The creation timestamp for this machine image in RFC3339 text format.
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
     * [Output Only] The creation timestamp for this machine image in RFC3339 text format.
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
     * [Input Only] Whether to attempt an application consistent machine image by informing the OS to prepare for the snapshot process. Currently only supported on Windows instances using the Volume Shadow Copy Service (VSS).
     *
     * Generated from protobuf field <code>optional bool guest_flush = 385550813;</code>
     * @return bool
     */
    public function getGuestFlush()
    {
        return isset($this->guest_flush) ? $this->guest_flush : false;
    }

    public function hasGuestFlush()
    {
        return isset($this->guest_flush);
    }

    public function clearGuestFlush()
    {
        unset($this->guest_flush);
    }

    /**
     * [Input Only] Whether to attempt an application consistent machine image by informing the OS to prepare for the snapshot process. Currently only supported on Windows instances using the Volume Shadow Copy Service (VSS).
     *
     * Generated from protobuf field <code>optional bool guest_flush = 385550813;</code>
     * @param bool $var
     * @return $this
     */
    public function setGuestFlush($var)
    {
        GPBUtil::checkBool($var);
        $this->guest_flush = $var;

        return $this;
    }

    /**
     * [Output Only] A unique identifier for this machine image. The server defines this identifier.
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
     * [Output Only] A unique identifier for this machine image. The server defines this identifier.
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
     * [Output Only] Properties of source instance
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceProperties instance_properties = 215355165;</code>
     * @return \Google\Cloud\Compute\V1\InstanceProperties|null
     */
    public function getInstanceProperties()
    {
        return $this->instance_properties;
    }

    public function hasInstanceProperties()
    {
        return isset($this->instance_properties);
    }

    public function clearInstanceProperties()
    {
        unset($this->instance_properties);
    }

    /**
     * [Output Only] Properties of source instance
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceProperties instance_properties = 215355165;</code>
     * @param \Google\Cloud\Compute\V1\InstanceProperties $var
     * @return $this
     */
    public function setInstanceProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InstanceProperties::class);
        $this->instance_properties = $var;

        return $this;
    }

    /**
     * [Output Only] The resource type, which is always compute#machineImage for machine image.
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
     * [Output Only] The resource type, which is always compute#machineImage for machine image.
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
     * Encrypts the machine image using a customer-supplied encryption key. After you encrypt a machine image using a customer-supplied key, you must provide the same key if you use the machine image later. For example, you must provide the encryption key when you create an instance from the encrypted machine image in a future request. Customer-supplied encryption keys do not protect access to metadata of the machine image. If you do not provide an encryption key when creating the machine image, then the machine image will be encrypted using an automatically generated key and you do not need to provide a key to use the machine image later.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CustomerEncryptionKey machine_image_encryption_key = 528089087;</code>
     * @return \Google\Cloud\Compute\V1\CustomerEncryptionKey|null
     */
    public function getMachineImageEncryptionKey()
    {
        return $this->machine_image_encryption_key;
    }

    public function hasMachineImageEncryptionKey()
    {
        return isset($this->machine_image_encryption_key);
    }

    public function clearMachineImageEncryptionKey()
    {
        unset($this->machine_image_encryption_key);
    }

    /**
     * Encrypts the machine image using a customer-supplied encryption key. After you encrypt a machine image using a customer-supplied key, you must provide the same key if you use the machine image later. For example, you must provide the encryption key when you create an instance from the encrypted machine image in a future request. Customer-supplied encryption keys do not protect access to metadata of the machine image. If you do not provide an encryption key when creating the machine image, then the machine image will be encrypted using an automatically generated key and you do not need to provide a key to use the machine image later.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CustomerEncryptionKey machine_image_encryption_key = 528089087;</code>
     * @param \Google\Cloud\Compute\V1\CustomerEncryptionKey $var
     * @return $this
     */
    public function setMachineImageEncryptionKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\CustomerEncryptionKey::class);
        $this->machine_image_encryption_key = $var;

        return $this;
    }

    /**
     * Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
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
     * Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
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
     * An array of Machine Image specific properties for disks attached to the source instance
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SavedDisk saved_disks = 397424318;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSavedDisks()
    {
        return $this->saved_disks;
    }

    /**
     * An array of Machine Image specific properties for disks attached to the source instance
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SavedDisk saved_disks = 397424318;</code>
     * @param \Google\Cloud\Compute\V1\SavedDisk[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSavedDisks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\SavedDisk::class);
        $this->saved_disks = $arr;

        return $this;
    }

    /**
     * [Output Only] The URL for this machine image. The server defines this URL.
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
     * [Output Only] The URL for this machine image. The server defines this URL.
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
     * [Input Only] The customer-supplied encryption key of the disks attached to the source instance. Required if the source disk is protected by a customer-supplied encryption key.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SourceDiskEncryptionKey source_disk_encryption_keys = 370408498;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSourceDiskEncryptionKeys()
    {
        return $this->source_disk_encryption_keys;
    }

    /**
     * [Input Only] The customer-supplied encryption key of the disks attached to the source instance. Required if the source disk is protected by a customer-supplied encryption key.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SourceDiskEncryptionKey source_disk_encryption_keys = 370408498;</code>
     * @param \Google\Cloud\Compute\V1\SourceDiskEncryptionKey[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSourceDiskEncryptionKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\SourceDiskEncryptionKey::class);
        $this->source_disk_encryption_keys = $arr;

        return $this;
    }

    /**
     * The source instance used to create the machine image. You can provide this as a partial or full URL to the resource. For example, the following are valid values: - https://www.googleapis.com/compute/v1/projects/project/zones/zone /instances/instance - projects/project/zones/zone/instances/instance 
     *
     * Generated from protobuf field <code>optional string source_instance = 396315705;</code>
     * @return string
     */
    public function getSourceInstance()
    {
        return isset($this->source_instance) ? $this->source_instance : '';
    }

    public function hasSourceInstance()
    {
        return isset($this->source_instance);
    }

    public function clearSourceInstance()
    {
        unset($this->source_instance);
    }

    /**
     * The source instance used to create the machine image. You can provide this as a partial or full URL to the resource. For example, the following are valid values: - https://www.googleapis.com/compute/v1/projects/project/zones/zone /instances/instance - projects/project/zones/zone/instances/instance 
     *
     * Generated from protobuf field <code>optional string source_instance = 396315705;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_instance = $var;

        return $this;
    }

    /**
     * [Output Only] DEPRECATED: Please use instance_properties instead for source instance related properties. New properties will not be added to this field.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SourceInstanceProperties source_instance_properties = 475195641;</code>
     * @return \Google\Cloud\Compute\V1\SourceInstanceProperties|null
     */
    public function getSourceInstanceProperties()
    {
        return $this->source_instance_properties;
    }

    public function hasSourceInstanceProperties()
    {
        return isset($this->source_instance_properties);
    }

    public function clearSourceInstanceProperties()
    {
        unset($this->source_instance_properties);
    }

    /**
     * [Output Only] DEPRECATED: Please use instance_properties instead for source instance related properties. New properties will not be added to this field.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SourceInstanceProperties source_instance_properties = 475195641;</code>
     * @param \Google\Cloud\Compute\V1\SourceInstanceProperties $var
     * @return $this
     */
    public function setSourceInstanceProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SourceInstanceProperties::class);
        $this->source_instance_properties = $var;

        return $this;
    }

    /**
     * [Output Only] The status of the machine image. One of the following values: INVALID, CREATING, READY, DELETING, and UPLOADING.
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
     * [Output Only] The status of the machine image. One of the following values: INVALID, CREATING, READY, DELETING, and UPLOADING.
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
     * The regional or multi-regional Cloud Storage bucket location where the machine image is stored.
     *
     * Generated from protobuf field <code>repeated string storage_locations = 328005274;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStorageLocations()
    {
        return $this->storage_locations;
    }

    /**
     * The regional or multi-regional Cloud Storage bucket location where the machine image is stored.
     *
     * Generated from protobuf field <code>repeated string storage_locations = 328005274;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStorageLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->storage_locations = $arr;

        return $this;
    }

    /**
     * [Output Only] Total size of the storage used by the machine image.
     *
     * Generated from protobuf field <code>optional int64 total_storage_bytes = 81855468;</code>
     * @return int|string
     */
    public function getTotalStorageBytes()
    {
        return isset($this->total_storage_bytes) ? $this->total_storage_bytes : 0;
    }

    public function hasTotalStorageBytes()
    {
        return isset($this->total_storage_bytes);
    }

    public function clearTotalStorageBytes()
    {
        unset($this->total_storage_bytes);
    }

    /**
     * [Output Only] Total size of the storage used by the machine image.
     *
     * Generated from protobuf field <code>optional int64 total_storage_bytes = 81855468;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalStorageBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_storage_bytes = $var;

        return $this;
    }

}
