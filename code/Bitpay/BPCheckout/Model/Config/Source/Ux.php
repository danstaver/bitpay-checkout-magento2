<?php

namespace Bitpay\BPCheckout\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Environment Model
 */
class Ux implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            'redirect' => 'Redirect',
            'modal' => 'Modal',
        ];
    }
}
