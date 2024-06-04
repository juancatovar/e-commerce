<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/common/audiences.proto

namespace Google\Ads\GoogleAds\V16\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Live event segment.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.common.LifeEventSegment</code>
 */
class LifeEventSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * The life event resource.
     *
     * Generated from protobuf field <code>optional string life_event = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $life_event = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $life_event
     *           The life event resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Common\Audiences::initOnce();
        parent::__construct($data);
    }

    /**
     * The life event resource.
     *
     * Generated from protobuf field <code>optional string life_event = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLifeEvent()
    {
        return isset($this->life_event) ? $this->life_event : '';
    }

    public function hasLifeEvent()
    {
        return isset($this->life_event);
    }

    public function clearLifeEvent()
    {
        unset($this->life_event);
    }

    /**
     * The life event resource.
     *
     * Generated from protobuf field <code>optional string life_event = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLifeEvent($var)
    {
        GPBUtil::checkString($var, True);
        $this->life_event = $var;

        return $this;
    }

}

