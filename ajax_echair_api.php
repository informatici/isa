<?php

/*
 * This file is part of the ISA package.
 *
 * (c) Informatici Senza Frontiere Onlus <http://informaticisenzafrontiere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include 'config.php';
include 'functions.php';

$command = 'c:\..\ima\isa2chair.exe com'
$comport = '14';

switch ($_GET['function']) {

    case 'ec_stop':
	exec($command . $comport . " s");
    break;

    case 'ec_slow_forward':
	exec($command . $comport . " f");
    break;

    case 'ec_fast_forward':
	exec($command . $comport . " ff");
    break;

    case 'ec_left':
	exec($command . $comport . " l");
    break;

    case 'ec_right':
	exec($command . $comport . " r");
    break;

    case 'ec_back':
	exec($command . $comport . " b");
    break;

}
