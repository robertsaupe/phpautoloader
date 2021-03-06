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

if (!defined('LIBRARY_PATH')) define('LIBRARY_PATH', dirname(__FILE__));

//init autoloader
if (!file_exists(LIBRARY_PATH . '/autoloader.php') || !is_readable(LIBRARY_PATH . '/autoloader.php')) {
    die('autoloader couldn\'t loaded!');
} else {
    require_once( LIBRARY_PATH . '/autoloader.php' );
    autoloader::register(LIBRARY_PATH);
}
?>