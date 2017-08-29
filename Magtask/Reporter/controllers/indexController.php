<?php

class Magtask_Reporter_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        echo "Test indexController";
    }

    public function modelAction() {
        $params = $this->getRequest()->getParams();
        $magtaskreport = Mage::getModel('reporter/magtaskreport');
        echo("Loading the magtask_report with an ID of ".$params['id']);
        $magtaskreport->load($params['id']);
        $data = $magtaskreport->getData();
        var_dump($data);
    }
}