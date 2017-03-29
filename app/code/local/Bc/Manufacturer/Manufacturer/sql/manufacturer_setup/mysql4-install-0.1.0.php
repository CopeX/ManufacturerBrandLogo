<?php
    $installer = $this;
    $installer->startSetup();
    $installer->run("
        -- DROP TABLE IF EXISTS {$this->getTable('manufacturer')};
        CREATE TABLE {$this->getTable('manufacturer')} (
        `manufacturer_id` int(11) unsigned NOT NULL auto_increment,
        `menufecturer_name` varchar(255) NOT NULL default '',
        `filename` varchar(255) NOT NULL default '',
        `content` text NOT NULL default '',
        `status` smallint(6) NOT NULL default '0',
        `created_time` datetime NULL,
        `update_time` datetime NULL,
        PRIMARY KEY (`manufacturer_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

        ");

    $installer->endSetup(); 