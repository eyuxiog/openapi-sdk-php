<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getVersions()
 * @method $this withVersions($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getItems()
 * @method $this withItems($value)
 */
class SetDeviceDesiredProperty extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}