<?
/*
	Copyright© 2012,2013 Informatici Senza Frontiere Onlus
	http://www.informaticisenzafrontiere.org

    This file is part of "ISA" I Speak Again - ISF project for impaired and blind people.

    "ISA" I Speak Again is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    "ISA" I Speak Again is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with "ISA" I Speak Again.  If not, see <http://www.gnu.org/licenses/>.
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


?>