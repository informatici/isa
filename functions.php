<?php

/*
 * This file is part of the ISA package.
 *
 * (c) Informatici Senza Frontiere Onlus <http://informaticisenzafrontiere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function trace($text)
{
    $handle = fopen("tmp/log.txt","a+");
    fwrite($handle, "[Trace] ".$text."\n");
    fclose($handle);
}
