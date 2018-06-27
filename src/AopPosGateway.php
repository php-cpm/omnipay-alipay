<?php

namespace Omnipay\Alipay;

use Omnipay\Alipay\Requests\AopTradePayRequest;
use Omnipay\Alipay\Requests\AopTradePreCreateRequest;

/**
 * Class AopF2FGateway
 * @package Omnipay\Alipay
 * @link https://doc.open.alipay.com/docs/doc.htm?treeId=194&articleId=105072&docType=1
 */
class AopPosGateway extends AbstractAopGateway
{

    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Alipay Face To Face POS Gateway';
    }

    /**
     * @param array $parameters
     *
     * @return AopTradePreCreateRequest
     */
    public function purchase(array $parameters = [])
    {
        return $this->createRequest(AopTradePayRequest::class, $parameters);
    }
}
