<?
include "config.php"; 
include "functions.php"; 

switch ($_GET['function']) {

	case 'xt9_query':
	if (isset($_GET['param1']) && ($_GET['param1'] != '')) {
		$query = "SELECT DISTINCT * FROM xt9_dictionary_" . $language . " WHERE word LIKE '" . trim($_GET['param1']) . "%' ORDER BY hits DESC,word ASC LIMIT 12;";
		$result = mysql_query($query) or $esito = mysql_error();

		while ($linea = mysql_fetch_array($result, MYSQL_ASSOC)) {
			echo '<input type="button" class="xt9_word" value="' . $linea['word'] . '" onclick="xt9_replace_word(this.value);" />';
		}
	}
	break;
	
	case 'xt9_hits':
	if (isset($_GET['param1']) && ($_GET['param1'] != '')) {
		$query = "UPDATE xt9_dictionary_" . $language . " SET hits = hits+1 WHERE word = '" . trim($_GET['param1']) . "';";
		$result = mysql_query($query) or $esito = mysql_error();
	}
	break;
}

?>