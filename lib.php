<?php

/*
  Name: Lib.php
  URI: http://ezrpgproject.net/
  Author: UAKTags
  Package: ezRPG-Core
 */

//This file cannot be viewed, it must be included
defined('IN_EZRPG') or exit;

//Functions
$func = array(
    'log',
    'rand',
    'text',
    'player',
    'validate',
    'security',
	'modules');

foreach ( $func as $item )
{
    $filename = LIB_DIR . '/func.' . $item . '.php';
    if ( is_readable($filename) )
    {
        require_once ($filename);
    }
}

//Classes			
$clas = array(
    'dbfactory',
    'modulefactory',
    'base_module',
    'hooks',
    'menu',
    'settings',
    'themes',
	'players'
	//,'router'
);

foreach ( $clas as $item )
{
    $filename = LIB_DIR . '/class.' . $item . '.php';
    if ( is_readable($filename) )
    {
        require_once ($filename);
    }
}

if(file_exists(__DIR__ . '/vendor/autoload.php'))
    require __DIR__ . '/vendor/autoload.php';
else
    die('You must initialize composer!');

require_once (CUR_DIR .'/Application.php');

//Exceptions
require_once (LIB_DIR . '/exception.db.php');

//Constants
require_once (LIB_DIR . '/const.errors.php');

//External Libraries
//Smarty
require_once (EXT_DIR . '/smarty/Smarty.class.php');
?>
