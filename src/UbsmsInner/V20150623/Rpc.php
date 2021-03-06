<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Rpc;

class V20150623Rpc extends Rpc
{
    /** @var string */
    public $product = 'Ubsms-inner';

    /** @var string */
    public $version = '2015-06-23';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getCallerBid()
 * @method $this withCallerBid($value)
 */
class DescribeBusinessStatusAndKeep extends V20150623Rpc
{
}

/**
 * @method string getRequestid()
 * @method $this withRequestid($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class DescribeBidRelationByBid extends V20150623Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getSuccess()
 * @method $this withSuccess($value)
 * @method string getInterrupt()
 * @method $this withInterrupt($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getInvoker()
 * @method $this withInvoker($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class DoPhysicalDeleteResource extends V20150623Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method array getStatusKey()
 * @method string getCallerBid()
 */
class DescribeBusinessStatusOfUser extends V20150623Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStatusKey(array $value)
    {
        $this->data['StatusKey'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['StatusKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method array getStatusKey()
 * @method string getCallerBid()
 * @method string getBid()
 * @method $this withBid($value)
 */
class DescribeBidUserBusinessStatus extends V20150623Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withStatusKey(array $value)
    {
        $this->data['StatusKey'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['StatusKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method array getRegionIds()
 * @method string getBid()
 * @method $this withBid($value)
 */
class DescribeUserNetworkTypes extends V20150623Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRegionIds(array $value)
    {
        $this->data['RegionIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RegionIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class DescribeUserNetworkType extends V20150623Rpc
{
}

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getCallerBid()
 */
class DescribeBusinessStatus extends V20150623Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCmd()
 * @method $this withCmd($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class NotifyUserBusinessCommand extends V20150623Rpc
{
}

/**
 * @method string getStatusKey10()
 * @method $this withStatusKey10($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getStatusValue1()
 * @method $this withStatusValue1($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getStatusValue2()
 * @method $this withStatusValue2($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getStatusKey3()
 * @method $this withStatusKey3($value)
 * @method string getStatusValue3()
 * @method $this withStatusValue3($value)
 * @method string getStatusKey4()
 * @method $this withStatusKey4($value)
 * @method string getStatusValue4()
 * @method $this withStatusValue4($value)
 * @method string getStatusKey1()
 * @method $this withStatusKey1($value)
 * @method string getStatusValue5()
 * @method $this withStatusValue5($value)
 * @method string getStatusKey2()
 * @method $this withStatusKey2($value)
 * @method string getStatusValue6()
 * @method $this withStatusValue6($value)
 * @method string getStatusKey7()
 * @method $this withStatusKey7($value)
 * @method string getStatusValue7()
 * @method $this withStatusValue7($value)
 * @method string getStatusKey8()
 * @method $this withStatusKey8($value)
 * @method string getStatusValue8()
 * @method $this withStatusValue8($value)
 * @method string getStatusKey5()
 * @method $this withStatusKey5($value)
 * @method string getStatusValue9()
 * @method $this withStatusValue9($value)
 * @method string getStatusKey6()
 * @method $this withStatusKey6($value)
 * @method string getStatusValue10()
 * @method $this withStatusValue10($value)
 * @method string getStatusKey9()
 * @method $this withStatusKey9($value)
 */
class SetUserBusinessStatuses extends V20150623Rpc
{
}

/**
 * @method string getStatusKey10()
 * @method $this withStatusKey10($value)
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getStatusValue1()
 * @method $this withStatusValue1($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getStatusValue2()
 * @method $this withStatusValue2($value)
 * @method string getStatusKey3()
 * @method $this withStatusKey3($value)
 * @method string getStatusValue3()
 * @method $this withStatusValue3($value)
 * @method string getStatusKey4()
 * @method $this withStatusKey4($value)
 * @method string getStatusValue4()
 * @method $this withStatusValue4($value)
 * @method string getStatusKey1()
 * @method $this withStatusKey1($value)
 * @method string getStatusValue5()
 * @method $this withStatusValue5($value)
 * @method string getStatusKey2()
 * @method $this withStatusKey2($value)
 * @method string getStatusValue6()
 * @method $this withStatusValue6($value)
 * @method string getStatusKey7()
 * @method $this withStatusKey7($value)
 * @method string getStatusValue7()
 * @method $this withStatusValue7($value)
 * @method string getStatusKey8()
 * @method $this withStatusKey8($value)
 * @method string getStatusValue8()
 * @method $this withStatusValue8($value)
 * @method string getStatusKey5()
 * @method $this withStatusKey5($value)
 * @method string getStatusValue9()
 * @method $this withStatusValue9($value)
 * @method string getStatusKey6()
 * @method $this withStatusKey6($value)
 * @method string getStatusValue10()
 * @method $this withStatusValue10($value)
 * @method string getStatusKey9()
 * @method $this withStatusKey9($value)
 */
class SetUserSecurityStatus extends V20150623Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getCallerBid()
 */
class DescribeUserBusinessStatus extends V20150623Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['query']['callerBid'] = $value;

        return $this;
    }
}
