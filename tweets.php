<?php 
require_once('TwitterAPIExchange.php');

require_once('twitter_config.php');


$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = 'screen_name=gambhirpulkit&include_rts=false';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$tweets = $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod) ->performRequest();  


$json_a = json_decode($tweets, true);

foreach ($json_a as $person_name => $person_a) {
    $string .= $person_a['text'];
}
echo $string; 
?>