
                                   /* CREATION DE LA MAP SUR LA PAGE*/
function initialiser() {
  var latlng = new google.maps.LatLng(46.779231, 6.659431);
  //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
  //de définir des options d'affichage de notre carte



  var options = {
    center: latlng,
    zoom: 2,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }; // options pour la google map

  /* LATITUDE, LONGITUDE DE TEST */
  var myLatlng = {lat: -25.363, lng: 131.044};
  /*LATITUDE, LONGITUDE DE TEST */

  //constructeur de la carte qui prend en paramêtre le conteneur HTML
  //dans lequel la carte doit s'afficher et les options
  var map = new google.maps.Map(document.getElementById("carte"), options);
  //google.maps.event.addListener(map, 'clickOnMap', centerOnMap );



  // définition du marker
  var marker = new google.maps.Marker({
    position: myLatlng,
    map:map,
    title: map,
    title: 'Click to zoom'
  });

  
  map.addListener('center_changed', function(){
    window.setTimeout(function(){
      map.panTo(marker.getPosition()); // change le centre de la map aux coordonnées du marqueur
    } , 3000);
  });


  marker.addListener('click',function() {
    map.setZoom(8);
    map.setCenter(marker.getPosition());
    var markerCircle  = new google.maps.Circle({
      strokeColor : '#FF0000', //Couleur du contour du cercle
      strokeOpacity : 0.8, //Opacite du contour du cercle
      strokeWeight : 2,
      fillColor : '#FF0000',
      fillOpacity : 0.35,
      map:map,
      center : marker.getPosition(),
      radius: Math.sqrt(1500000)*100
    });



  });
  google.maps.event.addListener(markerCircle ,"click",function(e){
        alert("clicked")
      });


}//initialiser()

function addMarker(coordX, coordY){
  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(coordX, coordY),
    map: map,
    icon: pinImage,
    shadow : pinShadow
  }); // centre de la zone

  // gestion de l'aire
}//addMarker()




function getCountry(country) {
      geocoder.geocode( { 'address': country }, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
             map.setCenter(results[0].geometry.location);
             var marker = new google.maps.Marker({
                 map: map,
                 position: results[0].geometry.location
             });
          } else {
            alert("Geocode was not successful for the following reason: " + status);
          }
      });
  }

 getCountry('USA');
