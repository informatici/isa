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

include "config.php"; 
include "functions.php"; 

switch ($_GET['function']) {

	case 'xt9_query':
	if (isset($_GET['param1']) && ($_GET['param1'] != '')) {
		$query = "SELECT DISTINCT * FROM xt9_dictionary_" . $language . " WHERE word LIKE '" . trim($_GET['param1']) . "%' ORDER BY hits DESC,word ASC LIMIT 12;";
		$result = mysql_query($query) or $esito = mysql_error();

		while ($linea = mysql_fetch_array($result, MYSQL_ASSOC)) {
			if ($linea['word'] == 'http') {
				echo '<input type="button" class="xt9_word" value="http" onclick="xt9_replace_word(this.value,false);" />';
				echo '<input type="button" class="xt9_word" value="http://" onclick="xt9_replace_word(this.value,false);" />';
				echo '<input type="button" class="xt9_word" value="http://www." onclick="xt9_replace_word(this.value,false);" />';
			} else {
				echo '<input type="button" class="xt9_word" value="' . $linea['word'] . '" onclick="xt9_replace_word(this.value,true);" />';
			}
		}
	}
	break;
	
	case 'xt9_hits':
	if (isset($_GET['param1']) && ($_GET['param1'] != '')) {
		$query = "UPDATE xt9_dictionary_" . $language . " SET hits = hits+1 WHERE word = '" . trim($_GET['param1']) . "';";
		$result = mysql_query($query) or $esito = mysql_error();
	}
	break;
	
	case 'writtentext_history_write':
	if (isset($_GET['param1']) && ($_GET['param1'] != '')) {
		$query = "INSERT INTO writtentext_history SET text = '" . trim($_GET['param1']) . "',type = 'spoken',language = '" . $_GET['lang'] . "';";
		$result = mysql_query($query) or $esito = mysql_error();
	}
	break;

	case 'writtentext_history_delete':
	if (isset($_GET['param1']) && ($_GET['param1'] != '')) {
		$query = "DELETE FROM writtentext_history WHERE id = " . trim($_GET['param1']) .";";
		$result = mysql_query($query) or $esito = mysql_error();
	}
	break;	
	
	case 'writtentext_history_read':
	$query = "SELECT * FROM writtentext_history WHERE type = 'spoken';";
	$result = mysql_query($query) or $esito = mysql_error();

	while ($linea = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo '<input type="text" class="xt9_word" value="' . $linea['text'] . '" onclick="xt9_replace_word(this.value,true);" />';
		echo '<input type="button" value="Delete" onclick="delete_history(' . $linea['id'] . ');" />';
	}
	break;	

}

?>