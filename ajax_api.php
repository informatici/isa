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
