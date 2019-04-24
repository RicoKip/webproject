/* 
 * Google Maps API KEY: AIzaSyBTJHaXQooicxa8E0GahtPkbDv7R1BO5YU
 * 
 * var loc = {lat: 52.906425, lng: -1.253231};
    map = new google.maps.Map(document.getElementById('mapView'), {
        zoom: 8,
        center: loc
        });
    var marker = new google.maps.Marker({
        position: loc,
        map: map
        });
 * 
/* global google */
var geocoder;
var map;
function initMap(){
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(52.906425, -1.253231);
    var mapOptions = {
        zoom: 10,
        center: latlng
        }
    map = new google.maps.Map(document.getElementById('mapView'), mapOptions);
    document.getElementById('submit').addEventListener('click', function(){
        codeAddress(geocoder, map);
    });
}
function codeAddress(geocoder, resultsMap){
    var address = document.getElementById('address').value;
    geocoder.geocode( { 'address': address}, function(results, status) {
        if(status === 'OK'){
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: resultsMap,
                position: results[0].geometry.location
            });
      
        }else{
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });          
}




