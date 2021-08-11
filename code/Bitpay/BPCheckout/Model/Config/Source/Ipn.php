<?php

namespace Bitpay\BPCheckout\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * IPN Model
 */
class Ipn implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            'pending' => 'Pending',
            'processing' => 'Processing',
        ];
    }
}
