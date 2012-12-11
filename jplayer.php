<div id="jquery_jplayer"></div>

<form name="speechform" id="speechform" method="post" action="./ajax_festival.php" class="sjbjl_form">
	<input type="hidden" name="speech" id="speech" />
	<input type="hidden" name="volume_scale" id="volume_scale" value="1"> 
	<input type="hidden" name="language" id="language" value="<? echo $language; ?>" />
</form>

<a class="jp-play" href="#">Play</a>
<a class="jp-pause" href="#">Pause</a>
<a class="jp-stop" href="#">Stop</a>
<a class="jp-mute" href="#">Mute</a>
<a class="jp-unmute" href="#">Unmute</a>
<a class="jp-volume-max" href="#">Max</a>