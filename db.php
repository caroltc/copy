<?php
require 'cls_mysql.php';
require_once 'checkauth.php';
$config_data = array(
    'host' => '192.168.1.13',
    'username' => '1c67d795-953a',
    'password' => 'fc24863e-4293',
    'database' => 'd6e42dc1034f343f68fc5909df1a340c2'
);
$db = new cls_mysql($config_data['host'], $config_data['username'], $config_data['password'], $config_data['database']);