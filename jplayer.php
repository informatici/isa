<?php

/*
 * This file is part of the ISA package.
 *
 * (c) Informatici Senza Frontiere Onlus <http://informaticisenzafrontiere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

?>

<div id="jquery_jplayer"></div>

<form name="speechform" id="speechform" method="post" action="ajax_<?php echo $ttse; ?>.php" class="sjbjl_form">
    <input type="hidden" name="speech" id="speech" />
    <input type="hidden" name="volume_scale" id="volume_scale" value="1">
    <input type="hidden" name="language" id="language" value="<?php echo $language; ?>" />
</form>

<div id="jp-commands">
    <a class="jp-play" href="#">Play</a>
    <a class="jp-pause" href="#">Pause</a>
    <a class="jp-stop" href="#">Stop</a>
    <a class="jp-mute" href="#">Mute</a>
    <a class="jp-unmute" href="#">Unmute</a>
    <a class="jp-volume-max" href="#">Max</a>
</div>
