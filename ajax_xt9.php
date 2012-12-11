<?
include "config.php"; 
include "functions.php"; 

if (isset($_GET['thema']) && ($_GET['thema'] != '')) {

$query = "SELECT DISTINCT * FROM xt9_dictionary_" . $language . " WHERE word LIKE '" . trim($_GET['thema']) . "%' ORDER BY word ASC LIMIT 14;";

$result = mysql_query($query) or $esito = mysql_error();

while ($linea = mysql_fetch_array($result, MYSQL_ASSOC)) {

	echo '<input type="button" class="xt9_word" value="' . $linea['word'] . '" onclick="xt9_replace_word(this.value);" />';
}

}

?>