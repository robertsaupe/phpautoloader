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

namespace RobertSaupe\Example;

class Test {

    public function __construct(string $text = 'test') {
        print($text);
    }

}