<?php

class Magentotask_Weblog_Model_Resource_Magentotaskreport extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('weblog/magentotaskreport', 'id');
    }
}