<?php

/*
 * This file is part of the ISA package.
 *
 * (c) Informatici Senza Frontiere Onlus <http://informaticisenzafrontiere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$version = 'I.S.A. I Speak Again 0.3 - 09 Gennaio 2013';

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'walks_isa';

$db_connection = mysql_connect($db_host, $db_user, $db_password);
if ($db_connection == false) die ("Errore nella connessione! Impossibile accedere al database.");
mysql_select_db($db_name, $db_connection) or die ("Errore nella selezione del database! Impossibile accedere al database dell'applicazione.");
mysql_query("SET NAMES 'utf8'");

$language = 'it';

if (isset($_GET['lang']) && ($_GET['lang'] != '')) {
    $language = $_GET['lang'];
}
