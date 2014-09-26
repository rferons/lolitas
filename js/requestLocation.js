jQuery(window).ready(function(){
            initiate_geolocation();
        });
 
        function initiate_geolocation() {
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(handle_geolocation_query);
            }else{
                yqlgeo.get('visitor', normalize_yql_response);
            }
        }
 
        function handle_errors(error)
        {
            switch(error.code)
            {
                case error.PERMISSION_DENIED: alert("user did not share geolocation data");
                break;
 
                case error.POSITION_UNAVAILABLE: alert("could not detect current position");
                break;
 
                case error.TIMEOUT: alert("retrieving position timed out");
                break;
 
                default: alert("unknown error");
                break;
            }
        }
        function normalize_yql_response(response)
            {
                if (response.error)
                {
                    var error = { code : 0 };
                    handle_error(error);
                    return;
                }

                var position = {
                    coords :
                    {
                        latitude: response.place.centroid.latitude,
                        longitude: response.place.centroid.longitude
                    },
                    address :
                    {
                        city: response.place.locality2.content,
                        region: response.place.admin1.content,
                        country: response.place.country.content
                    }
                };

                handle_geolocation_query(position);
            }
        var map;
        var directionsDisplay;
        var directionsService;
        var stepDisplay;
        var markerArray = [];
        function handle_geolocation_query(position){
            // Instantiate a directions service.
            directionsService = new google.maps.DirectionsService();
            
            var start = position.coords.latitude + "," + position.coords.longitude;
            var end = '601 E Palomar St, Chula Vista, CA 91911';
            
            var mapOptions = {
              center: { lat: position.coords.latitude, lng: position.coords.longitude},
              zoom: 8
            };
            map = new google.maps.Map(document.getElementById('mapCanvas'),
              mapOptions);
            
            // Create a renderer for directions and bind it to the map.
            var rendererOptions = {
                    map: map
            }
            directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
            
            // Instantiate an info window to hold step text.
            stepDisplay = new google.maps.InfoWindow();
            
            calcRoute(start, end);
            
        }
        function calcRoute(start, end) {

          // First, remove any existing markers from the map.
          for (var i = 0; i < markerArray.length; i++) {
            markerArray[i].setMap(null);
          }

          // Now, clear the array itself.
          markerArray = [];

          // Retrieve the start and end locations and create
          // a DirectionsRequest using WALKING directions.
          var request = {
              origin: start,
              destination: end,
              travelMode: google.maps.TravelMode.DRIVING
          };

          // Route the directions and pass the response to a
          // function to create markers for each step.
          directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
              var warnings = document.getElementById('warnings_panel');
              warnings.innerHTML = '<b>' + response.routes[0].warnings + '</b>';
              directionsDisplay.setDirections(response);
              //showSteps(response);
            }
          });
        }

        function showSteps(directionResult) {
          // For each step, place a marker, and add the text to the marker's
          // info window. Also attach the marker to an array so we
          // can keep track of it and remove it when calculating new
          // routes.
          var myRoute = directionResult.routes[0].legs[0];

          for (var i = 0; i < myRoute.steps.length; i++) {
            var marker = new google.maps.Marker({
              position: myRoute.steps[i].start_location,
              map: map
            });
            attachInstructionText(marker, myRoute.steps[i].instructions);
            markerArray[i] = marker;
          }
        }

        function attachInstructionText(marker, text) {
          google.maps.event.addListener(marker, 'click', function() {
            // Open an info window when the marker is clicked on,
            // containing the text of the step.
            stepDisplay.setContent(text);
            stepDisplay.open(map, marker);
          });
        }
