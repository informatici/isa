<link href="stile.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum)
{
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    } else {
        limitCount.value = limitNum - limitField.value.length;
    }
}
</script>
<center><div class='box-tweet'><img src="twitter-logo.png"><div class='tweet'><div class='tweet-wall'><div style="margin-left:100px">Commento su Twitter Postato Correttamente<br/><a href="twitter_oauth.php">Vuoi Cinguettare Ancora?</a></div></div><div class='footer'><span class='credits'>Powered by <a href='http://www.walks.to' title='I Speak Again' target='_blank' >I.S.A.</a></span></div></div></div></center>
