<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/shield_contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.OutputPointInfo</code>
 */
class OutputPointInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .protocol.OutputPoint out_points = 1;</code>
     */
    private $out_points;
    /**
     * Generated from protobuf field <code>int32 block_num = 2;</code>
     */
    protected $block_num = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Protocol\OutputPoint[]|\Google\Protobuf\Internal\RepeatedField $out_points
     *     @type int $block_num
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Contract\ShieldContract::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.OutputPoint out_points = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutPoints()
    {
        return $this->out_points;
    }

    /**
     * Generated from protobuf field <code>repeated .protocol.OutputPoint out_points = 1;</code>
     * @param \Protocol\OutputPoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Protocol\OutputPoint::class);
        $this->out_points = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 block_num = 2;</code>
     * @return int
     */
    public function getBlockNum()
    {
        return $this->block_num;
    }

    /**
     * Generated from protobuf field <code>int32 block_num = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBlockNum($var)
    {
        GPBUtil::checkInt32($var);
        $this->block_num = $var;

        return $this;
    }

}
