<!DOCTYPE HTML>
<HTML>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fuji Sushi Bar | Auburn AL</title>

    <!--build:css css/main.min.css-->
    <link rel="stylesheet" href="../../bower_components/normalize-css/normalize.css">
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/nav.css" type="text/css">
    <link rel="stylesheet" href="../css/location.css" type="text/css">
    <!--endbuild-->

    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
  </head>
  <body>
    <?php include '../includes/nav.php'?>

    <div id="fuji-panel">
      <h5>Fuji Sushi Bar</h5>
      <p>1499 S College St, Auburn, AL 36832</p>
    </div>
    <div id="right-panel">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2">
            <button type="button" class="btn btn-default" id="get-location"><i class="fa fa-crosshairs" aria-hidden="true"></i></button>
          </div>
          <div class="col-lg-8">
            <input type="text" class="form-control" id="start" placeholder="Enter Your Location">
          </div>
          <div class="col-lg-2">
            <button type="button" id="goBtn" class="btn btn-primary">Go</button>
          </div>
        </div>
      </div>
    </div>
    <div id="map"></div>

    <!--build:js /js/main.min.js -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>

      function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var fuji = new google.maps.LatLng(32.5793295,-85.4958647);
        var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 16,
          mapTypeControl: false,

          // The latitude and longitude to center the map (always required)
          center: fuji, // fuji

          // Disables the default Google Maps UI components
          //disableDefaultUI: true,
          scrollwheel: false,
          //draggable: false,

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
              "color": "#000000"
            }, {
              "lightness": 17
            }]
          }, {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{
              "color": "#000000"
            }, {
              "lightness": 20
            }]
          }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{
              "color": "#000000"
            }, {
              "lightness": 17
            }]
          }, {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{
              "color": "#000000"
            }, {
              "lightness": 29
            }, {
              "weight": 0.2
            }]
          }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{
              "color": "#000000"
            }, {
              "lightness": 18
            }]
          }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{
              "color": "#000000"
            }, {
              "lightness": 16
            }]
          }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
              "color": "#000000"
            }, {
              "lightness": 21
            }]
          }, {
            "elementType": "labels.text.stroke",
            "stylers": [{
              "visibility": "on"
            }, {
              "color": "#000000"
            }, {
              "lightness": 16
            }]
          }, {
            "elementType": "labels.text.fill",
            "stylers": [{
              "saturation": 36
            }, {
              "color": "#000000"
            }, {
              "lightness": 40
            }]
          }, {
            "elementType": "labels.icon",
            "stylers": [{
              "visibility": "off"
            }]
          }, {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{
              "color": "#000000"
            }, {
              "lightness": 19
            }]
          }, {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{
              "color": "#000000"
            }, {
              "lightness": 20
            }]
          }, {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{
              "color": "#000000"
            }, {
              "lightness": 17
            }, {
              "weight": 1.2
            }]
          }]

        };

        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

        var beachMarker = new google.maps.Marker({
          position: fuji,
          animation: google.maps.Animation.DROP,
          map: map,
        });

        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));

        // var control = document.getElementById('floating-panel');
        // control.style.display = 'block';
        // map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

        var fujiControl = document.getElementById('fuji-panel');
        fujiControl.style.display = 'block';
        map.controls[google.maps.ControlPosition.LEFT_TOP].push(fujiControl);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
          console.log("Change Detected");
        };

        document.getElementById('start').addEventListener('change', onChangeHandler);

        $("#goBtn").click(function(event) {
          event.preventDefault();
          calculateAndDisplayRoute(directionsService, directionsDisplay);
          console.log("Change Detected");
        });
      }

      $("#get-location").click(function(event) {
        event.preventDefault();
          var addressId = this.id.substring(0, this.id.indexOf("-"));

          navigator.geolocation.getCurrentPosition(function(position) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
              "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
            },
            function(results, status) {
              if (status == google.maps.GeocoderStatus.OK) {
                $("#start").val(results[0].formatted_address);
                console.log(results[0].formatted_address);
              }
              else {
                $("#error").append("Unable to retrieve your address<br />");
              }
            });
          },
          function(positionError){
            $("#error").append("Error: " + positionError.message + "<br />");
          },
          {
            enableHighAccuracy: true,
            timeout: 10 * 1000 // 10 seconds
          });
        });

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var start = document.getElementById('start').value;
        var fuji = new google.maps.LatLng(32.5793295,-85.4958647);
        directionsService.route({
          origin: start,
          destination: fuji,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfn2aFd3KwmE6NQ13H7lcuCv0JMRDqoIU&callback=initMap">
    </script>
    <!-- endbuild -->

    </body>

    </HTML>
