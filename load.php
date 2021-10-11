<?php
/**
 * phpAutoloader
 * 
 * Please report bugs on https://github.com/robertsaupe/phpautoloader/issues
 *
 * @author Robert Saupe <mail@robertsaupe.de>
 * @copyright Copyright (c) 2018, Robert Saupe. All rights reserved
 * @link https://github.com/robertsaupe/phpautoloader
 * @license MIT License
 */

if (PHP_MAJOR_VERSION < 8) die('This app works only with PHP 8.x or higher!');

define('APP_PATH', dirname(__FILE__));
if (function_exists("chdir")) chdir(APP_PATH);

//library
require_once(APP_PATH . '/library/load.php');

//define and read config (optional)
if ( file_exists( APP_PATH . '/configuration.php' ) && is_readable( APP_PATH . '/configuration.php' ) ) {
    require_once( APP_PATH . '/configuration.php' );
}

//php debug
if (!defined('APP_DEBUG')) define("APP_DEBUG", false);
if (APP_DEBUG === true) {
    if (function_exists('error_reporting')) error_reporting(-1);
    if (function_exists('ini_set')) {
        ini_set("display_errors", 1);
        ini_set('display_startup_errors', 1);
        ini_set('error_reporting', E_ALL);
    }
} else {
    if (function_exists('error_reporting')) error_reporting(0);
    if (function_exists('ini_set')) {
        ini_set("display_errors", 0);
        ini_set('display_startup_errors', 0);
        ini_set('error_reporting', 0);
    }
}
?>