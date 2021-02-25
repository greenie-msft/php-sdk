<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dapr/proto/runtime/v1/dapr.proto

namespace Dapr\Proto\Runtime\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * InvokeBindingRequest is the message to send data to output bindings
 *
 * Generated from protobuf message <code>dapr.proto.runtime.v1.InvokeBindingRequest</code>
 */
class InvokeBindingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the output binding to invoke.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The data which will be sent to output binding.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     */
    protected $data = '';
    /**
     * The metadata passing to output binding components
     * 
     * Common metadata property:
     * - ttlInSeconds : the time to live in seconds for the message. 
     * If set in the binding definition will cause all messages to 
     * have a default time to live. The message ttl overrides any value
     * in the binding definition.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     */
    private $metadata;
    /**
     * The name of the operation type for the binding to invoke
     *
     * Generated from protobuf field <code>string operation = 4;</code>
     */
    protected $operation = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the output binding to invoke.
     *     @type string $data
     *           The data which will be sent to output binding.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           The metadata passing to output binding components
     *           
     *           Common metadata property:
     *           - ttlInSeconds : the time to live in seconds for the message. 
     *           If set in the binding definition will cause all messages to 
     *           have a default time to live. The message ttl overrides any value
     *           in the binding definition.
     *     @type string $operation
     *           The name of the operation type for the binding to invoke
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dapr\Proto\Runtime\V1\Dapr::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the output binding to invoke.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the output binding to invoke.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The data which will be sent to output binding.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The data which will be sent to output binding.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * The metadata passing to output binding components
     * 
     * Common metadata property:
     * - ttlInSeconds : the time to live in seconds for the message. 
     * If set in the binding definition will cause all messages to 
     * have a default time to live. The message ttl overrides any value
     * in the binding definition.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * The metadata passing to output binding components
     * 
     * Common metadata property:
     * - ttlInSeconds : the time to live in seconds for the message. 
     * If set in the binding definition will cause all messages to 
     * have a default time to live. The message ttl overrides any value
     * in the binding definition.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * The name of the operation type for the binding to invoke
     *
     * Generated from protobuf field <code>string operation = 4;</code>
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * The name of the operation type for the binding to invoke
     *
     * Generated from protobuf field <code>string operation = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation = $var;

        return $this;
    }

}

