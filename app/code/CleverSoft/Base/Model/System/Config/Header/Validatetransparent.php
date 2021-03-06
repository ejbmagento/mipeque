<?php
/**
 * @category    CleverSoft
 * @package     CleverBase
 * @copyright   Copyright © 2017 CleverSoft., JSC. All Rights Reserved.
 * @author 		ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */

namespace CleverSoft\Base\Model\System\Config\Header;

class Validatetransparent extends \Magento\Framework\App\Config\Value
{
    public function beforeSave()
    {
        $v = $this->getValue();
        if ($v == 'rgba(0, 0, 0, 0)')
        {
            $this->setValue('transparent');
        }
        return $this;
    }
}
