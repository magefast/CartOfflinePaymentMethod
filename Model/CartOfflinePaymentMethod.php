<?php

namespace Dragonfly\CartOfflinePaymentMethod\Model;

use Magento\Payment\Model\Method\AbstractMethod;

/**
 * CartOffline payment method model
 */
class CartOfflinePaymentMethod extends AbstractMethod
{
    public const METHOD_CODE = 'cartoffline';

    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = self::METHOD_CODE;
}