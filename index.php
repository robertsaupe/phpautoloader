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

//load
require_once( dirname(__FILE__) . '/load.php' );

//example
use example\test;
$test = new test('it works!');
?>