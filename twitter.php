<?php
session_start();

// if there is an ajax request then get the lastest tweets 
require_once __DIR__ . '/TwitterOAuth/TwitterOAuth.php';
require_once __DIR__ . '/TwitterOAuth/Exception/TwitterException.php';

use TwitterOAuth\TwitterOAuth;

date_default_timezone_set('UTC');


/**
* Array with the OAuth tokens provided by Twitter when you create application
*
* output_format - Optional - Values: text|json|array|object - Default: object
*/
$config = array(
  'consumer_key' => 'YCune37DMNxrRhTc1slpxHFBZ',
  'consumer_secret' => '61lYqn3qn3Kv0XPcWxkvYAz940tIf4HTiI1AC2abLxiMvziYhL',
  'oauth_token' => '216797952-gDeNkYxzmMGXyvitjGL34ae3334GXv0Ijfu8xhdJ',
  'oauth_token_secret' => 'RgDwaTtpphZ2Nbc3sxmYC9QwgGywNH4pG2smcMaZ4m0g3',
  'output_format' => 'json'
);

/**
* Instantiate TwitterOAuth class with set tokens
*/
$tw = new TwitterOAuth($config);


/**
* Returns a collection of the most recent Tweets posted by the user
* https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline
*/
$params = array(
  'screen_name' => 'LolitasTacoShop',
  'count' => 10,
  'exclude_replies' => true
);

/**
* Send a GET call with set parameters
*/
$response = $tw->get('statuses/user_timeline', $params);

var_dump($response);


?>