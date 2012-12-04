<?

function trace($text) {
	$handle = fopen("tmp/log.txt","a+");
	fwrite($handle,$text."\n");
	fclose($handle);
}

?>