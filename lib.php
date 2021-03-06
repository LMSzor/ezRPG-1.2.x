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
    'modules'
);

foreach ($func as $item) {
    $filename = LIB_DIR . '/functions/func.' . $item . '.php';
    if (is_readable($filename)) {
        require_once($filename);
    }
}

function ezrpg_Autoloader($pClassName)
{
    $class = str_replace("ezRPG\\lib\\", "", $pClassName);
    if (file_exists(__DIR__ . "/lib/" . $class . ".php")) {
        include(__DIR__ . "/lib/" . $class . ".php");
    }
}

spl_autoload_register("ezrpg_Autoloader");


require_once(CUR_DIR . '/lib/Application.php');

//Constants
require_once(LIB_DIR . '/const.errors.php');

?>
