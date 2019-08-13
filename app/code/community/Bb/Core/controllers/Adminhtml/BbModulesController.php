<?php

/**
 * Bb extension for Magento - fully suport - easy to use
 *
 *
 * @category   Bb
 * @package    Bb_Slider
 * @copyright  Copyright (C) 2014 Bb (http://www.babarus.ro/)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 * @author     George Babarus <george.babarus@gmail.com>
 *
 */
class Bb_Core_Adminhtml_BbModulesController extends Mage_Adminhtml_Controller_Action
{

    public function init()
    {
        parent::init();

        $this->_setActiveMenu('bb');

    }


    /**
     * help user to use id
     */
    public function productsAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }


    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('bb_slider');
    }

}