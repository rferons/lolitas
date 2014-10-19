<?php
session_start();

// if there is an ajax request then get the lastest tweets 
require_once __DIR__ . '/TwitterOAuth/TwitterOAuth.php';
require_once __DIR__ . '/TwitterOAuth/Exception/TwitterException.php';

use TwitterOAuth\TwitterOAuth;

// if($_GET){
	
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
	  'output_format' => 'array'
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
	  'count' => 5,
	  'exclude_replies' => true
	);

	/**
	* Send a GET call with set parameters
	*/
	$response = $tw->get('statuses/user_timeline', $params);

//  }

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>LoLitas?</title>
  <link rel="stylesheet" href="css/main.css">
  <style>
      html, body, #mapCanvas {
          height: 100%;
          margin: 0px;
          padding: 0px;
      }
  </style>
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/twitter.js"></script>
  <script src="js/yqlgeo.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/loader.js"></script>
  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDU2e1nQzTrm7mlv3TZiprp4FY47uUCul8">
  </script>
  <script src="js/requestLocation.js"></script>
</head>

<body>
<!--Just my test comment-->
<div class="spinner">
<div class="loader">
<img src="img/burrito.gif" alt="">
  <!--<div class="double-bounce1"></div>
  <div class="double-bounce2"></div>-->
</div>
</div>
<section class='container'>
	 <hgroup>
            <h1>Need Lolitas now?</h1>
          </hgroup>
        <div class="row">
          <section class='col-xs-12 col-sm-6 col-md-6'>
            <section>
              <div id="mapCanvas"></div>
              <div id="warnings_panel"></div>
            </section>
          </section>
          <section class="col-xs-12 col-sm-6 col-md-6">
          <button type="button" onclick="function()" id="showMore">Show Information</button>
          <div id="informationArea"></div>  
            <a class="twitter-timeline" href="https://twitter.com/LolitasTacoShop" data-widget-id="523540163905871873">Tweets by @LolitasTacoShop</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </section>
        </div>
        <div id='twitter'>
        </div>
        <footer>
          <div class="logo"><a href="https://www.openshift.com/"></a></div>
        </footer>
</section>
</body>
</html>
