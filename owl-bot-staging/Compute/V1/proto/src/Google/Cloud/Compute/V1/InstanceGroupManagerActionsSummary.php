<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupManagerActionsSummary</code>
 */
class InstanceGroupManagerActionsSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The total number of instances in the managed instance group that are scheduled to be abandoned. Abandoning an instance removes it from the managed instance group without deleting it.
     *
     * Generated from protobuf field <code>optional int32 abandoning = 440023373;</code>
     */
    protected $abandoning = null;
    /**
     * [Output Only] The number of instances in the managed instance group that are scheduled to be created or are currently being created. If the group fails to create any of these instances, it tries again until it creates the instance successfully. If you have disabled creation retries, this field will not be populated; instead, the creatingWithoutRetries field will be populated.
     *
     * Generated from protobuf field <code>optional int32 creating = 209809081;</code>
     */
    protected $creating = null;
    /**
     * [Output Only] The number of instances that the managed instance group will attempt to create. The group attempts to create each instance only once. If the group fails to create any of these instances, it decreases the group's targetSize value accordingly.
     *
     * Generated from protobuf field <code>optional int32 creating_without_retries = 369916745;</code>
     */
    protected $creating_without_retries = null;
    /**
     * [Output Only] The number of instances in the managed instance group that are scheduled to be deleted or are currently being deleted.
     *
     * Generated from protobuf field <code>optional int32 deleting = 282846120;</code>
     */
    protected $deleting = null;
    /**
     * [Output Only] The number of instances in the managed instance group that are running and have no scheduled actions.
     *
     * Generated from protobuf field <code>optional int32 none = 3387192;</code>
     */
    protected $none = null;
    /**
     * [Output Only] The number of instances in the managed instance group that are scheduled to be recreated or are currently being being recreated. Recreating an instance deletes the existing root persistent disk and creates a new disk from the image that is defined in the instance template.
     *
     * Generated from protobuf field <code>optional int32 recreating = 339057132;</code>
     */
    protected $recreating = null;
    /**
     * [Output Only] The number of instances in the managed instance group that are being reconfigured with properties that do not require a restart or a recreate action. For example, setting or removing target pools for the instance.
     *
     * Generated from protobuf field <code>optional int32 refreshing = 215044903;</code>
     */
    protected $refreshing = null;
    /**
     * [Output Only] The number of instances in the managed instance group that are scheduled to be restarted or are currently being restarted.
     *
     * Generated from protobuf field <code>optional int32 restarting = 372312947;</code>
     */
    protected $restarting = null;
    /**
     * [Output Only] The number of instances in the managed instance group that are being verified. See the managedInstances[].currentAction property in the listManagedInstances method documentation.
     *
     * Generated from protobuf field <code>optional int32 verifying = 451612873;</code>
     */
    protected $verifying = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $abandoning
     *           [Output Only] The total number of instances in the managed instance group that are scheduled to be abandoned. Abandoning an instance removes it from the managed instance group without deleting it.
     *     @type int $creating
     *           [Output Only] The number of instances in the managed instance group that are scheduled to be created or are currently being created. If the group fails to create any of these instances, it tries again until it creates the instance successfully. If you have disabled creation retries, this field will not be populated; instead, the creatingWithoutRetries field will be populated.
     *     @type int $creating_without_retries
     *           [Output Only] The number of instances that the managed instance group will attempt to create. The group attempts to create each instance only once. If the group fails to create any of these instances, it decreases the group's targetSize value accordingly.
     *     @type int $deleting
     *           [Output Only] The number of instances in the managed instance group that are scheduled to be deleted or are currently being deleted.
     *     @type int $none
     *           [Output Only] The number of instances in the managed instance group that are running and have no scheduled actions.
     *     @type int $recreating
     *           [Output Only] The number of instances in the managed instance group that are scheduled to be recreated or are currently being being recreated. Recreating an instance deletes the existing root persistent disk and creates a new disk from the image that is defined in the instance template.
     *     @type int $refreshing
     *           [Output Only] The number of instances in the managed instance group that are being reconfigured with properties that do not require a restart or a recreate action. For example, setting or removing target pools for the instance.
     *     @type int $restarting
     *           [Output Only] The number of instances in the managed instance group that are scheduled to be restarted or are currently being restarted.
     *     @type int $verifying
     *           [Output Only] The number of instances in the managed instance group that are being verified. See the managedInstances[].currentAction property in the listManagedInstances method documentation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The total number of instances in the managed instance group that are scheduled to be abandoned. Abandoning an instance removes it from the managed instance group without deleting it.
     *
     * Generated from protobuf field <code>optional int32 abandoning = 440023373;</code>
     * @return int
     */
    public function getAbandoning()
    {
        return isset($this->abandoning) ? $this->abandoning : 0;
    }

    public function hasAbandoning()
    {
        return isset($this->abandoning);
    }

    public function clearAbandoning()
    {
        unset($this->abandoning);
    }

    /**
     * [Output Only] The total number of instances in the managed instance group that are scheduled to be abandoned. Abandoning an instance removes it from the managed instance group without deleting it.
     *
     * Generated from protobuf field <code>optional int32 abandoning = 440023373;</code>
     * @param int $var
     * @return $this
     */
    public function setAbandoning($var)
    {
        GPBUtil::checkInt32($var);
        $this->abandoning = $var;

        return $this;
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are scheduled to be created or are currently being created. If the group fails to create any of these instances, it tries again until it creates the instance successfully. If you have disabled creation retries, this field will not be populated; instead, the creatingWithoutRetries field will be populated.
     *
     * Generated from protobuf field <code>optional int32 creating = 209809081;</code>
     * @return int
     */
    public function getCreating()
    {
        return isset($this->creating) ? $this->creating : 0;
    }

    public function hasCreating()
    {
        return isset($this->creating);
    }

    public function clearCreating()
    {
        unset($this->creating);
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are scheduled to be created or are currently being created. If the group fails to create any of these instances, it tries again until it creates the instance successfully. If you have disabled creation retries, this field will not be populated; instead, the creatingWithoutRetries field will be populated.
     *
     * Generated from protobuf field <code>optional int32 creating = 209809081;</code>
     * @param int $var
     * @return $this
     */
    public function setCreating($var)
    {
        GPBUtil::checkInt32($var);
        $this->creating = $var;

        return $this;
    }

    /**
     * [Output Only] The number of instances that the managed instance group will attempt to create. The group attempts to create each instance only once. If the group fails to create any of these instances, it decreases the group's targetSize value accordingly.
     *
     * Generated from protobuf field <code>optional int32 creating_without_retries = 369916745;</code>
     * @return int
     */
    public function getCreatingWithoutRetries()
    {
        return isset($this->creating_without_retries) ? $this->creating_without_retries : 0;
    }

    public function hasCreatingWithoutRetries()
    {
        return isset($this->creating_without_retries);
    }

    public function clearCreatingWithoutRetries()
    {
        unset($this->creating_without_retries);
    }

    /**
     * [Output Only] The number of instances that the managed instance group will attempt to create. The group attempts to create each instance only once. If the group fails to create any of these instances, it decreases the group's targetSize value accordingly.
     *
     * Generated from protobuf field <code>optional int32 creating_without_retries = 369916745;</code>
     * @param int $var
     * @return $this
     */
    public function setCreatingWithoutRetries($var)
    {
        GPBUtil::checkInt32($var);
        $this->creating_without_retries = $var;

        return $this;
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are scheduled to be deleted or are currently being deleted.
     *
     * Generated from protobuf field <code>optional int32 deleting = 282846120;</code>
     * @return int
     */
    public function getDeleting()
    {
        return isset($this->deleting) ? $this->deleting : 0;
    }

    public function hasDeleting()
    {
        return isset($this->deleting);
    }

    public function clearDeleting()
    {
        unset($this->deleting);
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are scheduled to be deleted or are currently being deleted.
     *
     * Generated from protobuf field <code>optional int32 deleting = 282846120;</code>
     * @param int $var
     * @return $this
     */
    public function setDeleting($var)
    {
        GPBUtil::checkInt32($var);
        $this->deleting = $var;

        return $this;
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are running and have no scheduled actions.
     *
     * Generated from protobuf field <code>optional int32 none = 3387192;</code>
     * @return int
     */
    public function getNone()
    {
        return isset($this->none) ? $this->none : 0;
    }

    public function hasNone()
    {
        return isset($this->none);
    }

    public function clearNone()
    {
        unset($this->none);
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are running and have no scheduled actions.
     *
     * Generated from protobuf field <code>optional int32 none = 3387192;</code>
     * @param int $var
     * @return $this
     */
    public function setNone($var)
    {
        GPBUtil::checkInt32($var);
        $this->none = $var;

        return $this;
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are scheduled to be recreated or are currently being being recreated. Recreating an instance deletes the existing root persistent disk and creates a new disk from the image that is defined in the instance template.
     *
     * Generated from protobuf field <code>optional int32 recreating = 339057132;</code>
     * @return int
     */
    public function getRecreating()
    {
        return isset($this->recreating) ? $this->recreating : 0;
    }

    public function hasRecreating()
    {
        return isset($this->recreating);
    }

    public function clearRecreating()
    {
        unset($this->recreating);
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are scheduled to be recreated or are currently being being recreated. Recreating an instance deletes the existing root persistent disk and creates a new disk from the image that is defined in the instance template.
     *
     * Generated from protobuf field <code>optional int32 recreating = 339057132;</code>
     * @param int $var
     * @return $this
     */
    public function setRecreating($var)
    {
        GPBUtil::checkInt32($var);
        $this->recreating = $var;

        return $this;
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are being reconfigured with properties that do not require a restart or a recreate action. For example, setting or removing target pools for the instance.
     *
     * Generated from protobuf field <code>optional int32 refreshing = 215044903;</code>
     * @return int
     */
    public function getRefreshing()
    {
        return isset($this->refreshing) ? $this->refreshing : 0;
    }

    public function hasRefreshing()
    {
        return isset($this->refreshing);
    }

    public function clearRefreshing()
    {
        unset($this->refreshing);
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are being reconfigured with properties that do not require a restart or a recreate action. For example, setting or removing target pools for the instance.
     *
     * Generated from protobuf field <code>optional int32 refreshing = 215044903;</code>
     * @param int $var
     * @return $this
     */
    public function setRefreshing($var)
    {
        GPBUtil::checkInt32($var);
        $this->refreshing = $var;

        return $this;
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are scheduled to be restarted or are currently being restarted.
     *
     * Generated from protobuf field <code>optional int32 restarting = 372312947;</code>
     * @return int
     */
    public function getRestarting()
    {
        return isset($this->restarting) ? $this->restarting : 0;
    }

    public function hasRestarting()
    {
        return isset($this->restarting);
    }

    public function clearRestarting()
    {
        unset($this->restarting);
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are scheduled to be restarted or are currently being restarted.
     *
     * Generated from protobuf field <code>optional int32 restarting = 372312947;</code>
     * @param int $var
     * @return $this
     */
    public function setRestarting($var)
    {
        GPBUtil::checkInt32($var);
        $this->restarting = $var;

        return $this;
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are being verified. See the managedInstances[].currentAction property in the listManagedInstances method documentation.
     *
     * Generated from protobuf field <code>optional int32 verifying = 451612873;</code>
     * @return int
     */
    public function getVerifying()
    {
        return isset($this->verifying) ? $this->verifying : 0;
    }

    public function hasVerifying()
    {
        return isset($this->verifying);
    }

    public function clearVerifying()
    {
        unset($this->verifying);
    }

    /**
     * [Output Only] The number of instances in the managed instance group that are being verified. See the managedInstances[].currentAction property in the listManagedInstances method documentation.
     *
     * Generated from protobuf field <code>optional int32 verifying = 451612873;</code>
     * @param int $var
     * @return $this
     */
    public function setVerifying($var)
    {
        GPBUtil::checkInt32($var);
        $this->verifying = $var;

        return $this;
    }

}

