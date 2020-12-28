<?php
$month = str_pad(rand(01,12), 2, "0", STR_PAD_LEFT);
$year = mt_rand (2000, 2014);
$day = str_pad(rand(01,28), 2, "0", STR_PAD_LEFT);

$seconds = str_pad(rand(01,59), 2, "0", STR_PAD_LEFT);
$minutes = str_pad(rand(01,59), 2, "0", STR_PAD_LEFT);
$hours = str_pad(rand(01,23), 2, "0", STR_PAD_LEFT);

session_start();
require_once('tumblroauth/tumblroauth.php');

// Define the needed keys
$consumer_key = "<CONSUMER_KEY>";
$consumer_secret = "<CONSUMER_SECRET>";
$oauth_token = '<OAUTH_TOKEN>';
$oauth_token_secret = '<OAUTH_SECRET_KEY>';
$base_hostname = 'youtubetext.co.vu';

//posting URI - http://www.tumblr.com/docs/en/api/v2#posting
$post_URI = 'http://api.tumblr.com/v2/blog/'.$base_hostname.'/post';
$tum_oauth = new TumblrOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);

$videourl = nl2br($_POST['videourl']);



if (empty($videourl)) {
 header('Location: http://youtubetext.co.vu/error1');
die();
}

$parameters = array();
$parameters['type'] = "video";

$parameters['embed'] = $videourl;
$parameters['date'] = $day."-".$month."-".$year." ".$hours.":".$minutes.":".$seconds;

$post = $tum_oauth->post($post_URI,$parameters);

//var_dump($tum_oauth);
echo "<br><br>";
var_dump($post);

// Check for an error.
if (201 == $tum_oauth->http_code) {
  echo $post->meta->msg;

 $zero = $post->response->id;
  echo "<br>id:".$post->response->id;
header("Location:http://youtubetext.co.vu"); 
}
else
{
header("Location:http://youtubetext.co.vu/error2"); 
}


  
?>
