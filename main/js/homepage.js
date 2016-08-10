var map;
function initMap() {
  var fuji = new google.maps.LatLng(32.5793295,-85.4958647);
  var mapOptions = {
    // How zoomed in you want the map to start at (always required)
    zoom: 16,
    mapTypeControl: false,

    // The latitude and longitude to center the map (always required)
    center: fuji, // fuji

    // Disables the default Google Maps UI components
    // disableDefaultUI: false,
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

  map = new google.maps.Map(document.getElementById('map'), mapOptions);

  var fujiControl = document.getElementById('fuji-panel');
  fujiControl.style.display = 'block';
  map.controls[google.maps.ControlPosition.LEFT_TOP].push(fujiControl);

  var service = new google.maps.places.PlacesService(map);

  service.getDetails({
    placeId: 'ChIJG7kx77zzjIgRb1WBuFYam0Q'
  }, function(place, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
      var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
      });

      $("#address").text(place.formatted_address);

      var ratingPercent = place.rating / 5 * 100;

      $("#google-rating").text(place.rating);
      $('.star-ratings-css-top').css('width', ratingPercent + "%");
      $('#number-reviews').text(place.reviews.length);

      google.maps.event.addListener(marker, 'click', function() {
        console.log(place);
        infowindow.setContent('<div style="color: black"><strong>' + place.name + '</strong><br>' +
        'Place ID: ' + place.place_id + '<br>' +
        place.formatted_address + '</div>');
        infowindow.open(map, this);
      });
    }
  });

  // var beachMarker = new google.maps.Marker({
  //   position: fuji,
  //   animation: google.maps.Animation.DROP,
  //   map: map,
  // });
}
