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
        function handle_geolocation_query(position){
            var mapOptions = {
              center: { lat: position.coords.latitude, lng: position.coords.longitude},
              zoom: 8
            };
            map = new google.maps.Map(document.getElementById('mapCanvas'),
              mapOptions);
        }