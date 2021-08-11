<?php

namespace Bitpay\BPCheckout\Observer;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Store\Model\ScopeInterface;

class BPPaymentMethodAvailable implements ObserverInterface
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * payment_method_is_active event handler.
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function getStoreConfig($env)
    {
        return $this->scopeConfig->getValue(
            $env, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        if ($observer->getEvent()->getMethodInstance()->getCode()=="bpcheckout") {
            $env = $this->getStoreConfig('payment/bpcheckout/bitpay_endpoint');
            $bitpay_token = $this->getStoreConfig('payment/bpcheckout/bitpay_devtoken');
            if ($env == 'prod') {
                $bitpay_token = $this->getStoreConfig('payment/bpcheckout/bitpay_prodtoken');
            }
            if($bitpay_token == '') {
                #hide the payment method
                $checkResult = $observer->getEvent()->getResult();
                $checkResult->setData('is_available', false); //this is disabling the payment method at checkout page
            }
        }
    }
}
