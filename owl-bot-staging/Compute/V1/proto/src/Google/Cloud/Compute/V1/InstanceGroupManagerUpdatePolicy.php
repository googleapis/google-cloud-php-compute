<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupManagerUpdatePolicy</code>
 */
class InstanceGroupManagerUpdatePolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The instance redistribution policy for regional managed instance groups. Valid values are: - PROACTIVE (default): The group attempts to maintain an even distribution of VM instances across zones in the region. - NONE: For non-autoscaled groups, proactive redistribution is disabled.
     * Check the InstanceRedistributionType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string instance_redistribution_type = 292630424;</code>
     */
    protected $instance_redistribution_type = null;
    /**
     * The maximum number of instances that can be created above the specified targetSize during the update process. This value can be either a fixed number or, if the group has 10 or more instances, a percentage. If you set a percentage, the number of instances is rounded if necessary. The default value for maxSurge is a fixed value equal to the number of zones in which the managed instance group operates. At least one of either maxSurge or maxUnavailable must be greater than 0. Learn more about maxSurge.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.FixedOrPercent max_surge = 302572691;</code>
     */
    protected $max_surge = null;
    /**
     * The maximum number of instances that can be unavailable during the update process. An instance is considered available if all of the following conditions are satisfied: - The instance's status is RUNNING. - If there is a health check on the instance group, the instance's health check status must be HEALTHY at least once. If there is no health check on the group, then the instance only needs to have a status of RUNNING to be considered available. This value can be either a fixed number or, if the group has 10 or more instances, a percentage. If you set a percentage, the number of instances is rounded if necessary. The default value for maxUnavailable is a fixed value equal to the number of zones in which the managed instance group operates. At least one of either maxSurge or maxUnavailable must be greater than 0. Learn more about maxUnavailable.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.FixedOrPercent max_unavailable = 404940277;</code>
     */
    protected $max_unavailable = null;
    /**
     * Minimal action to be taken on an instance. You can specify either RESTART to restart existing instances or REPLACE to delete and create new instances from the target template. If you specify a RESTART, the Updater will attempt to perform that action only. However, if the Updater determines that the minimal action you specify is not enough to perform the update, it might perform a more disruptive action.
     * Check the MinimalAction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string minimal_action = 270567060;</code>
     */
    protected $minimal_action = null;
    /**
     * Most disruptive action that is allowed to be taken on an instance. You can specify either NONE to forbid any actions, REFRESH to allow actions that do not need instance restart, RESTART to allow actions that can be applied without instance replacing or REPLACE to allow all possible actions. If the Updater determines that the minimal update action needed is more disruptive than most disruptive allowed action you specify it will not perform the update at all.
     * Check the MostDisruptiveAllowedAction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string most_disruptive_allowed_action = 66103053;</code>
     */
    protected $most_disruptive_allowed_action = null;
    /**
     * What action should be used to replace instances. See minimal_action.REPLACE
     * Check the ReplacementMethod enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string replacement_method = 505931694;</code>
     */
    protected $replacement_method = null;
    /**
     * The type of update process. You can specify either PROACTIVE so that the instance group manager proactively executes actions in order to bring instances to their target versions or OPPORTUNISTIC so that no action is proactively executed but the update will be performed as part of other actions (for example, resizes or recreateInstances calls).
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     */
    protected $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_redistribution_type
     *           The instance redistribution policy for regional managed instance groups. Valid values are: - PROACTIVE (default): The group attempts to maintain an even distribution of VM instances across zones in the region. - NONE: For non-autoscaled groups, proactive redistribution is disabled.
     *           Check the InstanceRedistributionType enum for the list of possible values.
     *     @type \Google\Cloud\Compute\V1\FixedOrPercent $max_surge
     *           The maximum number of instances that can be created above the specified targetSize during the update process. This value can be either a fixed number or, if the group has 10 or more instances, a percentage. If you set a percentage, the number of instances is rounded if necessary. The default value for maxSurge is a fixed value equal to the number of zones in which the managed instance group operates. At least one of either maxSurge or maxUnavailable must be greater than 0. Learn more about maxSurge.
     *     @type \Google\Cloud\Compute\V1\FixedOrPercent $max_unavailable
     *           The maximum number of instances that can be unavailable during the update process. An instance is considered available if all of the following conditions are satisfied: - The instance's status is RUNNING. - If there is a health check on the instance group, the instance's health check status must be HEALTHY at least once. If there is no health check on the group, then the instance only needs to have a status of RUNNING to be considered available. This value can be either a fixed number or, if the group has 10 or more instances, a percentage. If you set a percentage, the number of instances is rounded if necessary. The default value for maxUnavailable is a fixed value equal to the number of zones in which the managed instance group operates. At least one of either maxSurge or maxUnavailable must be greater than 0. Learn more about maxUnavailable.
     *     @type string $minimal_action
     *           Minimal action to be taken on an instance. You can specify either RESTART to restart existing instances or REPLACE to delete and create new instances from the target template. If you specify a RESTART, the Updater will attempt to perform that action only. However, if the Updater determines that the minimal action you specify is not enough to perform the update, it might perform a more disruptive action.
     *           Check the MinimalAction enum for the list of possible values.
     *     @type string $most_disruptive_allowed_action
     *           Most disruptive action that is allowed to be taken on an instance. You can specify either NONE to forbid any actions, REFRESH to allow actions that do not need instance restart, RESTART to allow actions that can be applied without instance replacing or REPLACE to allow all possible actions. If the Updater determines that the minimal update action needed is more disruptive than most disruptive allowed action you specify it will not perform the update at all.
     *           Check the MostDisruptiveAllowedAction enum for the list of possible values.
     *     @type string $replacement_method
     *           What action should be used to replace instances. See minimal_action.REPLACE
     *           Check the ReplacementMethod enum for the list of possible values.
     *     @type string $type
     *           The type of update process. You can specify either PROACTIVE so that the instance group manager proactively executes actions in order to bring instances to their target versions or OPPORTUNISTIC so that no action is proactively executed but the update will be performed as part of other actions (for example, resizes or recreateInstances calls).
     *           Check the Type enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The instance redistribution policy for regional managed instance groups. Valid values are: - PROACTIVE (default): The group attempts to maintain an even distribution of VM instances across zones in the region. - NONE: For non-autoscaled groups, proactive redistribution is disabled.
     * Check the InstanceRedistributionType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string instance_redistribution_type = 292630424;</code>
     * @return string
     */
    public function getInstanceRedistributionType()
    {
        return isset($this->instance_redistribution_type) ? $this->instance_redistribution_type : '';
    }

    public function hasInstanceRedistributionType()
    {
        return isset($this->instance_redistribution_type);
    }

    public function clearInstanceRedistributionType()
    {
        unset($this->instance_redistribution_type);
    }

    /**
     * The instance redistribution policy for regional managed instance groups. Valid values are: - PROACTIVE (default): The group attempts to maintain an even distribution of VM instances across zones in the region. - NONE: For non-autoscaled groups, proactive redistribution is disabled.
     * Check the InstanceRedistributionType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string instance_redistribution_type = 292630424;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceRedistributionType($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_redistribution_type = $var;

        return $this;
    }

    /**
     * The maximum number of instances that can be created above the specified targetSize during the update process. This value can be either a fixed number or, if the group has 10 or more instances, a percentage. If you set a percentage, the number of instances is rounded if necessary. The default value for maxSurge is a fixed value equal to the number of zones in which the managed instance group operates. At least one of either maxSurge or maxUnavailable must be greater than 0. Learn more about maxSurge.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.FixedOrPercent max_surge = 302572691;</code>
     * @return \Google\Cloud\Compute\V1\FixedOrPercent|null
     */
    public function getMaxSurge()
    {
        return $this->max_surge;
    }

    public function hasMaxSurge()
    {
        return isset($this->max_surge);
    }

    public function clearMaxSurge()
    {
        unset($this->max_surge);
    }

    /**
     * The maximum number of instances that can be created above the specified targetSize during the update process. This value can be either a fixed number or, if the group has 10 or more instances, a percentage. If you set a percentage, the number of instances is rounded if necessary. The default value for maxSurge is a fixed value equal to the number of zones in which the managed instance group operates. At least one of either maxSurge or maxUnavailable must be greater than 0. Learn more about maxSurge.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.FixedOrPercent max_surge = 302572691;</code>
     * @param \Google\Cloud\Compute\V1\FixedOrPercent $var
     * @return $this
     */
    public function setMaxSurge($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\FixedOrPercent::class);
        $this->max_surge = $var;

        return $this;
    }

    /**
     * The maximum number of instances that can be unavailable during the update process. An instance is considered available if all of the following conditions are satisfied: - The instance's status is RUNNING. - If there is a health check on the instance group, the instance's health check status must be HEALTHY at least once. If there is no health check on the group, then the instance only needs to have a status of RUNNING to be considered available. This value can be either a fixed number or, if the group has 10 or more instances, a percentage. If you set a percentage, the number of instances is rounded if necessary. The default value for maxUnavailable is a fixed value equal to the number of zones in which the managed instance group operates. At least one of either maxSurge or maxUnavailable must be greater than 0. Learn more about maxUnavailable.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.FixedOrPercent max_unavailable = 404940277;</code>
     * @return \Google\Cloud\Compute\V1\FixedOrPercent|null
     */
    public function getMaxUnavailable()
    {
        return $this->max_unavailable;
    }

    public function hasMaxUnavailable()
    {
        return isset($this->max_unavailable);
    }

    public function clearMaxUnavailable()
    {
        unset($this->max_unavailable);
    }

    /**
     * The maximum number of instances that can be unavailable during the update process. An instance is considered available if all of the following conditions are satisfied: - The instance's status is RUNNING. - If there is a health check on the instance group, the instance's health check status must be HEALTHY at least once. If there is no health check on the group, then the instance only needs to have a status of RUNNING to be considered available. This value can be either a fixed number or, if the group has 10 or more instances, a percentage. If you set a percentage, the number of instances is rounded if necessary. The default value for maxUnavailable is a fixed value equal to the number of zones in which the managed instance group operates. At least one of either maxSurge or maxUnavailable must be greater than 0. Learn more about maxUnavailable.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.FixedOrPercent max_unavailable = 404940277;</code>
     * @param \Google\Cloud\Compute\V1\FixedOrPercent $var
     * @return $this
     */
    public function setMaxUnavailable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\FixedOrPercent::class);
        $this->max_unavailable = $var;

        return $this;
    }

    /**
     * Minimal action to be taken on an instance. You can specify either RESTART to restart existing instances or REPLACE to delete and create new instances from the target template. If you specify a RESTART, the Updater will attempt to perform that action only. However, if the Updater determines that the minimal action you specify is not enough to perform the update, it might perform a more disruptive action.
     * Check the MinimalAction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string minimal_action = 270567060;</code>
     * @return string
     */
    public function getMinimalAction()
    {
        return isset($this->minimal_action) ? $this->minimal_action : '';
    }

    public function hasMinimalAction()
    {
        return isset($this->minimal_action);
    }

    public function clearMinimalAction()
    {
        unset($this->minimal_action);
    }

    /**
     * Minimal action to be taken on an instance. You can specify either RESTART to restart existing instances or REPLACE to delete and create new instances from the target template. If you specify a RESTART, the Updater will attempt to perform that action only. However, if the Updater determines that the minimal action you specify is not enough to perform the update, it might perform a more disruptive action.
     * Check the MinimalAction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string minimal_action = 270567060;</code>
     * @param string $var
     * @return $this
     */
    public function setMinimalAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->minimal_action = $var;

        return $this;
    }

    /**
     * Most disruptive action that is allowed to be taken on an instance. You can specify either NONE to forbid any actions, REFRESH to allow actions that do not need instance restart, RESTART to allow actions that can be applied without instance replacing or REPLACE to allow all possible actions. If the Updater determines that the minimal update action needed is more disruptive than most disruptive allowed action you specify it will not perform the update at all.
     * Check the MostDisruptiveAllowedAction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string most_disruptive_allowed_action = 66103053;</code>
     * @return string
     */
    public function getMostDisruptiveAllowedAction()
    {
        return isset($this->most_disruptive_allowed_action) ? $this->most_disruptive_allowed_action : '';
    }

    public function hasMostDisruptiveAllowedAction()
    {
        return isset($this->most_disruptive_allowed_action);
    }

    public function clearMostDisruptiveAllowedAction()
    {
        unset($this->most_disruptive_allowed_action);
    }

    /**
     * Most disruptive action that is allowed to be taken on an instance. You can specify either NONE to forbid any actions, REFRESH to allow actions that do not need instance restart, RESTART to allow actions that can be applied without instance replacing or REPLACE to allow all possible actions. If the Updater determines that the minimal update action needed is more disruptive than most disruptive allowed action you specify it will not perform the update at all.
     * Check the MostDisruptiveAllowedAction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string most_disruptive_allowed_action = 66103053;</code>
     * @param string $var
     * @return $this
     */
    public function setMostDisruptiveAllowedAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->most_disruptive_allowed_action = $var;

        return $this;
    }

    /**
     * What action should be used to replace instances. See minimal_action.REPLACE
     * Check the ReplacementMethod enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string replacement_method = 505931694;</code>
     * @return string
     */
    public function getReplacementMethod()
    {
        return isset($this->replacement_method) ? $this->replacement_method : '';
    }

    public function hasReplacementMethod()
    {
        return isset($this->replacement_method);
    }

    public function clearReplacementMethod()
    {
        unset($this->replacement_method);
    }

    /**
     * What action should be used to replace instances. See minimal_action.REPLACE
     * Check the ReplacementMethod enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string replacement_method = 505931694;</code>
     * @param string $var
     * @return $this
     */
    public function setReplacementMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->replacement_method = $var;

        return $this;
    }

    /**
     * The type of update process. You can specify either PROACTIVE so that the instance group manager proactively executes actions in order to bring instances to their target versions or OPPORTUNISTIC so that no action is proactively executed but the update will be performed as part of other actions (for example, resizes or recreateInstances calls).
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @return string
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : '';
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * The type of update process. You can specify either PROACTIVE so that the instance group manager proactively executes actions in order to bring instances to their target versions or OPPORTUNISTIC so that no action is proactively executed but the update will be performed as part of other actions (for example, resizes or recreateInstances calls).
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

