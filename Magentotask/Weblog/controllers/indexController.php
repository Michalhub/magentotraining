<?php

class Magentotask_Weblog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function testModelAction() {
        $params = $this->getRequest()->getParams();
        $magentotaskreport = Mage::getModel('weblog/magentotaskreport');
        echo("Loading the magentotask_report with an ID of ".$params['id']);
        $magentotaskreport->load($params['id']);
        $data = $magentotaskreport->getData();
        var_dump($data);
    }
}

