<?php
// This file generated by Propel 1.5.2 convert-conf target
// from XML runtime conf file /home/naomi/dev-campcaster/campcaster/build/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'campcaster' => 
    array (
      'adapter' => 'pgsql',
      'connection' => 
      array (
        'dsn' => 'pgsql:host=localhost;port=5432;dbname=airtime;user=airtime;password=airtime',
      ),
    ),
    'default' => 'campcaster',
  ),
  'generator_version' => '1.5.2',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-propel-config.php');
return $conf;
