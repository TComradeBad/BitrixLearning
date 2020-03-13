<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/tcb_site/photo/#',
    'RULE' => '',
    'ID' => 'bitrix:photogallery',
    'PATH' => '/tcb_site/photo.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/tcb_site/#',
    'RULE' => '',
    'ID' => 'bitrix:blog',
    'PATH' => '/tcb_site/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/photo/#',
    'RULE' => '',
    'ID' => 'bitrix:photogallery',
    'PATH' => '/photo.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/#',
    'RULE' => '',
    'ID' => 'bitrix:blog',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
);
