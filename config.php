<?

$version = 'blindnews 0.2 - 21 Novembre 2012';

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