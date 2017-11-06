<?php
/**
 * Copyright © 2017 Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magmodules\Channable\Model\System\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class InvalidationModus implements ArrayInterface
{

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => '',
                'label' => __('Observer')
            ],
            [
                'value' => 'cron',
                'label' => __('Cron')
            ],

        ];
    }
}