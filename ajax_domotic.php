<?php
ini_set('error_reporting', E_ALL);
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
$tmpdir = "./tmp";

if (isset($_GET["domotic_command"]) && isset($_GET["domotic_receiver"])) {
	$domotic_cmd = sprintf($domotic_bin_path . ' ' . $_GET["domotic_command"] . ' ' . $_GET["domotic_receiver"]);
	trace("cmd: " . $domotic_cmd);
	exec($domotic_cmd);

    header('Content-Type: text/html');
    echo '1';
}