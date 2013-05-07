<?php

/**
 * Tweets a message from the user whose user token and secret you use.
 *
 * Although this example uses your user token/secret, you can use
 * the user token/secret of any user who has authorised your application.
 *
 * Instructions:
 * 1) If you don't have one already, create a Twitter application on
 *      https://dev.twitter.com/apps
 * 2) From the application details page copy the consumer key and consumer
 *      secret into the place in this code marked with (YOUR_CONSUMER_KEY
 *      and YOUR_CONSUMER_SECRET)
 * 3) From the application details page copy the access token and access token
 *      secret into the place in this code marked with (A_USER_TOKEN
 *      and A_USER_SECRET)
 * 4) Visit this page using your web browser.
 *
 * @author themattharris
 */
session_start();

require 'tmhOAuth.php';
require 'tmhUtilities.php';
$tmhOAuth = new tmhOAuth(array(
  'consumer_key'    => $_SESSION["consumer_key"],
  'consumer_secret' => $_SESSION["consumer_secret"],
  'user_token'      => $_SESSION["user_token"],
  'user_secret'     => $_SESSION["user_secret"],
));

$code = $tmhOAuth->request('POST', $tmhOAuth->url('1/statuses/update'), array(
  'status' => $_REQUEST["t_update"]
));

if ($code == 200) {
    header('Location: twitt.php?status=post inviato correttamente');
} else {
  echo "Codici errati verificare e riprovare!<a href='javascript:history.go(-1)'>Torna indietro</a>";
}
