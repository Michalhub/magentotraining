<?php

$installer = $this;
$installer->startSetup();
$installer->run("
    CREATE TABLE `{$installer->getTable('weblog/magentotaskreport')}` (
      `id` bigint NOT NULL auto_increment,
      `ip` VARCHAR(15) ,
      `product_id` INT,
      `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY  (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    INSERT INTO `{$installer->getTable('weblog/magentotaskreport')}` VALUES (1,'192.168.1.1', 1, NOW());
");
$installer->endSetup();