<?php

// define paths to yii core and config file
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/../protected/config/main.php';

// debug
// defined('YII_DEBUG') or define('YII_DEBUG',true);

// run application
require_once($yii);
Yii::createWebApplication($config)->run();
