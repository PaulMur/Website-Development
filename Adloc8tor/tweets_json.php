<?php
require 'tmhOAuth.php'; 

// Use the data from http://dev.twitter.com/apps to fill out this info
// notice the slight name difference in the last two items)

$connection = new tmhOAuth(array(
  'consumer_key' => '8zBMyCi638wWZCZG8G0tG3zcU',
	'consumer_secret' => 'AFu9z4QSdhDOGaa9JhBHLeTGA72ByDyADhHnGbJS9XEnpkCDqM',
	'user_token' => '2148499350-fhaSJmqMbSsnCjEjHCGuEfM9QQdsslpg5CSp7TD', //access token
	'user_secret' => 'odEXPiezI1lOmtBiwLtiUcS1WSFFhN1P6lMfnD163O1bX' //access token secret
));

// set up parameters to pass
$parameters = array();

if ($_GET['count']) {
	$parameters['count'] = strip_tags($_GET['count']);
}

if ($_GET['screen_name']) {
	$parameters['screen_name'] = strip_tags($_GET['screen_name']);
}

if ($_GET['twitter_path']) { $twitter_path = $_GET['twitter_path']; }  else {
	$twitter_path = '1.1/statuses/user_timeline.json';
}

$http_code = $connection->request('GET', $connection->url($twitter_path), $parameters );

if ($http_code === 200) { // if everything's good
	$response = strip_tags($connection->response['response']);

	if ($_GET['callback']) { // if we ask for a jsonp callback function
		echo $_GET['callback'],'(', $response,');';
	} else {
		echo $response;	
	}
} else {
	echo "Error ID: ",$http_code, "<br>\n";
	echo "Error: ",$connection->response['error'], "<br>\n";
}

// You may have to download and copy http://curl.haxx.se/ca/cacert.pem