<?php

namespace AlibabaCloud\TeslaDam\V20180118;

use AlibabaCloud\Rpc;

class V20180118Rpc extends Rpc
{
    /** @var string */
    public $product = 'TeslaDam';

    /** @var string */
    public $version = '2018-01-18';
}

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getStepCode()
 * @method $this withStepCode($value)
 */
class Action extends V20180118Rpc
{
}

/**
 * @method string getDiskName()
 * @method $this withDiskName($value)
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getDiskSlot()
 * @method $this withDiskSlot($value)
 * @method string getHostname()
 * @method $this withHostname($value)
 * @method string getDiskMount()
 * @method $this withDiskMount($value)
 * @method string getDiskReason()
 * @method $this withDiskReason($value)
 * @method string getDiskSn()
 * @method $this withDiskSn($value)
 */
class ActionDiskRma extends V20180118Rpc
{
}

/**
 * @method string getDiskMount()
 * @method $this withDiskMount($value)
 * @method string getIp()
 * @method $this withIp($value)
 */
class ActionDiskCheck extends V20180118Rpc
{
}

/**
 * @method string getOp()
 * @method $this withOp($value)
 * @method string getDiskMount()
 * @method $this withDiskMount($value)
 * @method string getIp()
 * @method $this withIp($value)
 */
class ActionDiskMask extends V20180118Rpc
{
}

/**
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 */
class HostGets extends V20180118Rpc
{
}
