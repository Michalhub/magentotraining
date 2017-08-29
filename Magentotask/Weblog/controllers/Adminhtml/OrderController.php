<?php

class Magentotask_Weblog_Adminhtml_OrderController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Sales'))->_title($this->__('Magentotask Weblog'));
        $this->loadLayout();
        $this->_setActiveMenu('sales/sales');
        $this->_addContent($this->getLayout()->createBlock('magentotask_weblog/adminhtml_sales_order'));

        return $this->renderLayout();
    }

    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('magentotask_weblog/adminhtml_sales_order_grid')->toHtml()
        );
    }
}