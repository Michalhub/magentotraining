<?php

class Magentotask_Weblog_Block_Adminhtml_Sales_Order extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'magentotask_weblog';
        $this->_controller = 'adminhtml_sales_order';
        $this->_headerText = Mage::helper('Magentotask_Weblog')->__('Weblog - Magentotask');

        parent::__construct();
        $this->_removeButton('add');

    }
}