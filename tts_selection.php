<script type="text/javascript">

var ttse = 'loquendo';

<?

$ttse = 'loquendo';

if (isset($_GET['ttse']) && ($_GET['ttse'] == 'ivona')) {
    $ttse = 'ivona';
    echo "ttse = 'ivona';";
}

if (isset($_GET['ttse']) && ($_GET['ttse'] == 'festival')) {
    $ttse = 'festival';
    echo "ttse = 'festival';";
}

?>

</script>