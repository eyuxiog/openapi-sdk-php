<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getRuleActionName()
 * @method $this withRuleActionName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DescribeDingTalk extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}