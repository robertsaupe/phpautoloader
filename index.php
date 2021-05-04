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

require_once( dirname(__FILE__) . '/load.php' );

//Example
use RobertSaupe\Example\{Test};
$test = new Test('it works!');
?>