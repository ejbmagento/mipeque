<?php
/**
 * @category    CleverSoft
 * @package     CleverBase
 * @copyright   Copyright © 2017 CleverSoft., JSC. All Rights Reserved.
 * @author 		ZooExtension.com
 * @email       magento.cleversoft@gmail.com
 */
 
namespace CleverSoft\Base\Observer;

use Magento\Framework\Event\ObserverInterface;

/**
 * Catalog Compare Item Model
 *
 */
class ThemeDesignObserver implements ObserverInterface
{

    protected $_cssGenerator;

    public function __construct(
        \CleverSoft\Base\Model\Cssgen\Generator $generator
    )
    {
        $this->_cssGenerator = $generator;
    }


    public function execute(\Magento\Framework\Event\Observer $observer){
        $section = $observer->getEvent()->getRequest()->getParam('section');
        if ($section == 'cleversoftbase_design')
        {
            $websiteCode = $observer->getEvent()->getRequest()->getParam('website');
            $storeCode = $observer->getEvent()->getRequest()->getParam('store');

            $this->_cssGenerator->generateCss('design', $websiteCode, $storeCode);
        }else if($section == 'cleversoftbase'){
            $websiteCode = $observer->getEvent()->getRequest()->getParam('website');
            $storeCode = $observer->getEvent()->getRequest()->getParam('store');

            $this->_cssGenerator->generateCss('layout', $websiteCode, $storeCode);
        }
    }

}
