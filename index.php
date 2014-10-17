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
  <script src="js/yqlgeo.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/loader.js"></script>
  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDU2e1nQzTrm7mlv3TZiprp4FY47uUCul8">
  </script>
  <script src="js/requestLocation.js"></script>
</head>

<body>
<div class="spinner">
<div class="loader">
  <div class="double-bounce1"></div>
  <div class="double-bounce2"></div>
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
          </section>
        </div>
        <footer>
          <div class="logo"><a href="https://www.openshift.com/"></a></div>
        </footer>
</section>
</body>
</html>
