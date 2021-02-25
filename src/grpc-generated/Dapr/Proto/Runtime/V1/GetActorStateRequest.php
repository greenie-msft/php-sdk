<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dapr/proto/runtime/v1/dapr.proto

namespace Dapr\Proto\Runtime\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetActorStateRequest is the message to get key-value states from specific actor.
 *
 * Generated from protobuf message <code>dapr.proto.runtime.v1.GetActorStateRequest</code>
 */
class GetActorStateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string actor_type = 1;</code>
     */
    protected $actor_type = '';
    /**
     * Generated from protobuf field <code>string actor_id = 2;</code>
     */
    protected $actor_id = '';
    /**
     * Generated from protobuf field <code>string key = 3;</code>
     */
    protected $key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $actor_type
     *     @type string $actor_id
     *     @type string $key
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dapr\Proto\Runtime\V1\Dapr::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string actor_type = 1;</code>
     * @return string
     */
    public function getActorType()
    {
        return $this->actor_type;
    }

    /**
     * Generated from protobuf field <code>string actor_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setActorType($var)
    {
        GPBUtil::checkString($var, True);
        $this->actor_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string actor_id = 2;</code>
     * @return string
     */
    public function getActorId()
    {
        return $this->actor_id;
    }

    /**
     * Generated from protobuf field <code>string actor_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setActorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->actor_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string key = 3;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

}

