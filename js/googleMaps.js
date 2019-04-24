// Script to set user location in profile page. 
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
//Converts address to geocode and displays location on map
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




