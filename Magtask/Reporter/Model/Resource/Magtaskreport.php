<?php

class Magtask_Reporter_Model_Resource_Magtaskreport extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('reporter/magtaskreport', 'id');
    }
}