<?php
session_start();

//require the geocoder library
require_once("geocoder/src/autoload.php");
$adapter = new \Geocoder\HttpAdapter\CurlHttpAdapter();
$geocoder = new \Geocoder\Geocoder();
$chain = new \Geocoder\Provider\ChainProvider(array(
	new \Geocoder\Provider\FreeGeoIpProvider($adapter),
	new \Geocoder\Provider\HostIpProvider($adapter),
	new \Geocoder\Provider\GoogleMapsProvider($adapter,'en-US','UNited States',true)
));
$geocoder->registerProvider($chain);
$result = $geocoder->geocode($_SERVER['REMOTE_ADDR']);

var_dump($result);

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>LoLitas?</title>

<link rel="stylesheet" href="css/main.css">
<style>
  background: url('img/background.jpg');
</style>
<script src="js/jquery-2.1.1.min.js"></script>

</head>
<body>

<section class='container'>
	 <hgroup>
            <h1>Who cares about Carmen San Diego? Where in the world are you?</h1>
          </hgroup>
        <div class="row">
          <section class='col-xs-12 col-sm-6 col-md-6'>
            <section>
              <h2>Deploying code changes</h2>
              <div id="mapCanvas"></div>

            </section>

          </section>
          <section class="col-xs-12 col-sm-6 col-md-6">

                <h2>Some heading 2</h2>

                <h3>Some Heading 3</h3>
                <p>Paragraph</p>



          </section>
        </div>


        <footer>
          <div class="logo"><a href="https://www.openshift.com/"></a></div>
        </footer>
</section>

</body>
</html>
