<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Informational metadata about Partner attachments from Partners to display to customers. These fields are propagated from PARTNER_PROVIDER attachments to their corresponding PARTNER attachments.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InterconnectAttachmentPartnerMetadata</code>
 */
class InterconnectAttachmentPartnerMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Plain text name of the Interconnect this attachment is connected to, as displayed in the Partner's portal. For instance "Chicago 1". This value may be validated to match approved Partner values.
     *
     * Generated from protobuf field <code>string interconnect_name = 246527900;</code>
     */
    private $interconnect_name = '';
    /**
     * Plain text name of the Partner providing this attachment. This value may be validated to match approved Partner values.
     *
     * Generated from protobuf field <code>string partner_name = 161747874;</code>
     */
    private $partner_name = '';
    /**
     * URL of the Partner's portal for this Attachment. Partners may customise this to be a deep link to the specific resource on the Partner portal. This value may be validated to match approved Partner values.
     *
     * Generated from protobuf field <code>string portal_url = 747292;</code>
     */
    private $portal_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $interconnect_name
     *           Plain text name of the Interconnect this attachment is connected to, as displayed in the Partner's portal. For instance "Chicago 1". This value may be validated to match approved Partner values.
     *     @type string $partner_name
     *           Plain text name of the Partner providing this attachment. This value may be validated to match approved Partner values.
     *     @type string $portal_url
     *           URL of the Partner's portal for this Attachment. Partners may customise this to be a deep link to the specific resource on the Partner portal. This value may be validated to match approved Partner values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Plain text name of the Interconnect this attachment is connected to, as displayed in the Partner's portal. For instance "Chicago 1". This value may be validated to match approved Partner values.
     *
     * Generated from protobuf field <code>string interconnect_name = 246527900;</code>
     * @return string
     */
    public function getInterconnectName()
    {
        return $this->interconnect_name;
    }

    /**
     * Plain text name of the Interconnect this attachment is connected to, as displayed in the Partner's portal. For instance "Chicago 1". This value may be validated to match approved Partner values.
     *
     * Generated from protobuf field <code>string interconnect_name = 246527900;</code>
     * @param string $var
     * @return $this
     */
    public function setInterconnectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->interconnect_name = $var;

        return $this;
    }

    /**
     * Plain text name of the Partner providing this attachment. This value may be validated to match approved Partner values.
     *
     * Generated from protobuf field <code>string partner_name = 161747874;</code>
     * @return string
     */
    public function getPartnerName()
    {
        return $this->partner_name;
    }

    /**
     * Plain text name of the Partner providing this attachment. This value may be validated to match approved Partner values.
     *
     * Generated from protobuf field <code>string partner_name = 161747874;</code>
     * @param string $var
     * @return $this
     */
    public function setPartnerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->partner_name = $var;

        return $this;
    }

    /**
     * URL of the Partner's portal for this Attachment. Partners may customise this to be a deep link to the specific resource on the Partner portal. This value may be validated to match approved Partner values.
     *
     * Generated from protobuf field <code>string portal_url = 747292;</code>
     * @return string
     */
    public function getPortalUrl()
    {
        return $this->portal_url;
    }

    /**
     * URL of the Partner's portal for this Attachment. Partners may customise this to be a deep link to the specific resource on the Partner portal. This value may be validated to match approved Partner values.
     *
     * Generated from protobuf field <code>string portal_url = 747292;</code>
     * @param string $var
     * @return $this
     */
    public function setPortalUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->portal_url = $var;

        return $this;
    }

}

