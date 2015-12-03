<?php

use FStudio\myConfig as config;

$config = new config();

//$config->setPath('/var/www/html/destinoTravel/');
//$config->setPath('C:/wamp/www/destinoTravel/');
$config->setPath('C:/xampp/htdocs/Aquiles/');
$config->setUrl('http://localhost/Aquiles/web/');

$config->setDriver('mysql');
$config->setHost('localhost');
$config->setPort(3306);
$config->setDbName('tpsbuga2015');
$config->setUser('root');
$config->setPassword('root');

$config->setDsn(
        $config->getDriver()
        . ':host=' . $config->getHost()
        . ':port=' . $config->getPort()
        . ':dbname=' . $config->getDbName()
);

$config->setSessionName('FStudio');

$config->setDefaultModule('home');
$config->setDefaultAction('index');

//$config->setPlugins(array(
//    'fsEjemplo1Plugin',
//    'fsEjemplo2Plugin',
//));
