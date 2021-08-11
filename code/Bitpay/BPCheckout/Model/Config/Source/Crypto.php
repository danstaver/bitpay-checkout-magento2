<?php

namespace Bitpay\BPCheckout\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 *Crypto Model
 */
class Crypto implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'BTC', 'label' => __('BTC')],
            ['value' => 'BCH', 'label' => __('BCH')]
        ];
    }
}
