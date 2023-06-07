$(document).ready(function () {
  /* Google Map */
  function mapInitialize() {
    var mapStyle =  [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#d3d3d3"},{"visibility":"on"}]}];

    var yourLatitude = 47.822874;
    var yourLongitude = 35.161524;
    var myOptions = {
      zoom: 12,
      center: new google.maps.LatLng(yourLatitude,yourLongitude),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      panControl: false,
      zoomControl: true,
      scaleControl: false,
      streetViewControl: false,
      scrollwheel: false,
      styles: mapStyle
    };
    var map = new google.maps.Map(document.getElementById('google-map'), myOptions);


    var image = new google.maps.MarkerImage('img/map-location.png');

    var myLatLng = new google.maps.LatLng(yourLatitude,yourLongitude);
    
    var myLocation = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
    });

  }
  if( $('#google-map').length > 0 ) {
    google.maps.event.addDomListener(window, 'load', mapInitialize);
  }
});