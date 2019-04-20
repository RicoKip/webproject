/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * Google Maps API KEY: AIzaSyBTJHaXQooicxa8E0GahtPkbDv7R1BO5YU
 * 
 */
/* global google */

var map;
function initMap(){
    var loc = {lat: 52.906425, lng: -1.253231};
    map = new google.maps.Map(document.getElementById('mapView'), {
        zoom: 8,
        center: loc
        });
    var marker = new google.maps.Marker({
        position: loc,
        map: map
        });
};



