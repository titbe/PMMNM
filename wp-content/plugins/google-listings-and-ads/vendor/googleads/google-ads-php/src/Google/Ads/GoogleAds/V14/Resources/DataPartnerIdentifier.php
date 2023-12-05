<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/product_link.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The identifier for Data Partner account.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.DataPartnerIdentifier</code>
 */
class DataPartnerIdentifier extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The customer ID of the Data partner account.
     * This field is required and should not be empty when creating a new
     * data partner link. It is unable to be modified after the creation of
     * the link.
     *
     * Generated from protobuf field <code>optional int64 data_partner_id = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $data_partner_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $data_partner_id
     *           Immutable. The customer ID of the Data partner account.
     *           This field is required and should not be empty when creating a new
     *           data partner link. It is unable to be modified after the creation of
     *           the link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\ProductLink::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The customer ID of the Data partner account.
     * This field is required and should not be empty when creating a new
     * data partner link. It is unable to be modified after the creation of
     * the link.
     *
     * Generated from protobuf field <code>optional int64 data_partner_id = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int|string
     */
    public function getDataPartnerId()
    {
        return isset($this->data_partner_id) ? $this->data_partner_id : 0;
    }

    public function hasDataPartnerId()
    {
        return isset($this->data_partner_id);
    }

    public function clearDataPartnerId()
    {
        unset($this->data_partner_id);
    }

    /**
     * Immutable. The customer ID of the Data partner account.
     * This field is required and should not be empty when creating a new
     * data partner link. It is unable to be modified after the creation of
     * the link.
     *
     * Generated from protobuf field <code>optional int64 data_partner_id = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int|string $var
     * @return $this
     */
    public function setDataPartnerId($var)
    {
        GPBUtil::checkInt64($var);
        $this->data_partner_id = $var;

        return $this;
    }

}

