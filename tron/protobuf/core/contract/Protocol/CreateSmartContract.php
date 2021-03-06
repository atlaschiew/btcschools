<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/smart_contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.CreateSmartContract</code>
 */
class CreateSmartContract extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     */
    protected $owner_address = '';
    /**
     * Generated from protobuf field <code>.protocol.SmartContract new_contract = 2;</code>
     */
    protected $new_contract = null;
    /**
     * Generated from protobuf field <code>int64 call_token_value = 3;</code>
     */
    protected $call_token_value = 0;
    /**
     * Generated from protobuf field <code>int64 token_id = 4;</code>
     */
    protected $token_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $owner_address
     *     @type \Protocol\SmartContract $new_contract
     *     @type int|string $call_token_value
     *     @type int|string $token_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Contract\SmartContract::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     * @return string
     */
    public function getOwnerAddress()
    {
        return $this->owner_address;
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->owner_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.protocol.SmartContract new_contract = 2;</code>
     * @return \Protocol\SmartContract
     */
    public function getNewContract()
    {
        return isset($this->new_contract) ? $this->new_contract : null;
    }

    public function hasNewContract()
    {
        return isset($this->new_contract);
    }

    public function clearNewContract()
    {
        unset($this->new_contract);
    }

    /**
     * Generated from protobuf field <code>.protocol.SmartContract new_contract = 2;</code>
     * @param \Protocol\SmartContract $var
     * @return $this
     */
    public function setNewContract($var)
    {
        GPBUtil::checkMessage($var, \Protocol\SmartContract::class);
        $this->new_contract = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 call_token_value = 3;</code>
     * @return int|string
     */
    public function getCallTokenValue()
    {
        return $this->call_token_value;
    }

    /**
     * Generated from protobuf field <code>int64 call_token_value = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCallTokenValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->call_token_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 token_id = 4;</code>
     * @return int|string
     */
    public function getTokenId()
    {
        return $this->token_id;
    }

    /**
     * Generated from protobuf field <code>int64 token_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTokenId($var)
    {
        GPBUtil::checkInt64($var);
        $this->token_id = $var;

        return $this;
    }

}

