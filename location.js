// Google Maps Scripts
var map = null;
// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);
google.maps.event.addDomListener(window, 'resize', function() {
    map.setCenter(new google.maps.LatLng(32.5793461,-85.495994));
});

function init() {
    console.log("Init");
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 16,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(32.5793461,-85.495994), // fuji

        // Disables the default Google Maps UI components
        //disableDefaultUI: true,
        scrollwheel: false,
        draggable: false,

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

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    map = new google.maps.Map(mapElement, mapOptions);

    // Custom Map Marker Icon - Customize the map-marker.png file to customize your icon
    var myLatLng = new google.maps.LatLng(32.5793461,-85.495994);
    var beachMarker = new google.maps.Marker({
        position: myLatLng,
        animation: google.maps.Animation.DROP,
        map: map,
    });
    
    var contentString = '<div class="text-center"><h1><b>Fuji Suhi Bar</b></h1></div><div id="map" style="height: 500px; width: 100%" >'+          
          '<div id="save-widget">'+
            '<strong>Google Sydney</strong>'+
            '<p>We’re located on the water in Pyrmont, with views of the Sydney Harbour Bridge, The Rocks and Darling Harbour. Our building is the greenest in Sydney. Inside, we have a "living wall" made of plants, a tire swing, a library with a nap pod and some amazing baristas.</p>'+
         '</div>'+
      '</div>'

var infowindow = new google.maps.InfoWindow({
          content: contentString
    
          
        });
beachMarker.addListener('click', function() {
          //infowindow.open(map, beachMarker);
        });
    
    var widgetDiv = document.getElementById('save-widget');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(widgetDiv);

        // Append a Save Control to the existing save-widget div.
        var saveWidget = new google.maps.SaveWidget(widgetDiv, {
          place: {
            // ChIJN1t_tDeuEmsRUsoyG83frY4 is the place Id for Google Sydney.
            //placeId: 'Fuji+Sushi+Bar+Auburn',
            location: {lat: 32.5793461, lng: -85.495994}
          },
          attribution: {
            source: 'Fuji Sushi Bar',
            webUrl: 'https://www.google.com/maps/dir//32.5793295,-85.4958647/@32.57933,-85.495865,16z?hl=en-US'
          }
        });
    
}