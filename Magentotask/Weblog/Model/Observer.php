<?php

class Magentotask_Weblog_Model_Observer
{
    public function observeProduct(Varien_Event_Observer $observer)
    {
        $product = $observer->getProduct();
        Mage::log($product->getProduct(), null, "product.log");
    }
}

// Mage::dispatchEvent('catalog_controller_product_view', array('product' => $product));

