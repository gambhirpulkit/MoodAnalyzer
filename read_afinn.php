<?php 
include('config.php');
$tbl_score = $db -> tbl_score;
session_start();
// FETCH TWEETS
require_once('TwitterAPIExchange.php');

require_once('twitter_config.php');

if(isset($_POST['name'])) {
	$tag = $_POST['name'];
} 
else {
	$tag = 'gambhirpulkit';
}

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = 'screen_name='.$tag.'&include_rts=false';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$tweets = $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod) ->performRequest();  


$json_a = json_decode($tweets, true);

foreach ($json_a as $person_name => $person_a) {
    $string .= $person_a['text'];
}

 
$pos = 0;
$no_pos = 0;
$neg = 0;
$no_neg = 0;
$no_net = 0;
$sum = 0; 

// READ AFINN - 111

$file = file_get_contents('./AFINN-111.txt', true);

$array = explode("\n", $file);

//print_r($array); exit;

$arr_len = count($array);

for($i=0; $i<$arr_len; $i++) {
	
	$str = preg_split('/[\t]/', $array[$i]);

	$word = $str[0];
	$rating = $str[1];
	if (strpos($string,$word) !== false) {

    	if ($rating > 0) {
    		$no_pos++;
    		$pos = $pos + $rating;

    	}
    	elseif ($rating < 0) {
    		$no_neg++;
    		$neg = $neg + $rating;

    	}
    	else {
    		$no_net++;
    	}
	}	
}

	$sum = $pos + $neg;


$cursor = $tbl_score -> count(array('name' => $tag));

if($cursor == 0) {
	$data = array(
	"name"=>$tag,
	"pos"=>$pos,
	"pos_count"=>$no_pos,
	"neg"=>$neg,
	"neg_count"=>$no_neg,
	"net_count"=>$no_net,
	"total"=>$sum
	);
	
$res = $tbl_score -> insert($data);

	$_SESSION["id"] = $data['_id'];

}
else {
	$fetch = $tbl_score ->findOne(array('name' => $tag));
	$_SESSION["id"] = $fetch['_id'];
	
}

header('Location: layout-4.php');

?>