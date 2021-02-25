<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dapr/proto/runtime/v1/dapr.proto

namespace Dapr\Proto\Runtime\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetSecretResponse is the response message to convey the requested secret.
 *
 * Generated from protobuf message <code>dapr.proto.runtime.v1.GetSecretResponse</code>
 */
class GetSecretResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * data is the secret value. Some secret store, such as kubernetes secret
     * store, can save multiple secrets for single secret key.
     *
     * Generated from protobuf field <code>map<string, string> data = 1;</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $data
     *           data is the secret value. Some secret store, such as kubernetes secret
     *           store, can save multiple secrets for single secret key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dapr\Proto\Runtime\V1\Dapr::initOnce();
        parent::__construct($data);
    }

    /**
     * data is the secret value. Some secret store, such as kubernetes secret
     * store, can save multiple secrets for single secret key.
     *
     * Generated from protobuf field <code>map<string, string> data = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * data is the secret value. Some secret store, such as kubernetes secret
     * store, can save multiple secrets for single secret key.
     *
     * Generated from protobuf field <code>map<string, string> data = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->data = $arr;

        return $this;
    }

}

