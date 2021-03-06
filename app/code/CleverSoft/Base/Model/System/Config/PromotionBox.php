<?php
/**
 * @category    CleverSoft
 * @package     CleverBase
 * @copyright   Copyright © 2017 CleverSoft., JSC. All Rights Reserved.
 * @author 		ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */

namespace CleverSoft\Base\Model\System\Config;
class PromotionBox implements \Magento\Framework\Option\ArrayInterface {
    public function toOptionArray()
    {

        $types = [
            ['value' => 'zoo-promotion-top', 'label' => __('Top')],
            ['value' => 'zoo-promotion-bottom', 'label' => __('Bottom')]
        ];

        return $types;
    }
}