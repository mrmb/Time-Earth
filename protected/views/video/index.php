
<style type="text/css">
	html { height: 100% }
  	body { height: 100%; margin: 0; padding: 0 }
  	#map { 
  		height: 90% ;
  		width: 100% ;
  	 }
</style>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  var poly, map;
  var markers = [];
  var path = new google.maps.MVCArray;

  function initialize() {
    var uluru = new google.maps.LatLng(-25.344, 131.036);

    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 14,
      center: new google.maps.LatLng(24.886436490787712, -70.2685546875),
      zoom: 2,
      mapTypeId: google.maps.MapTypeId.SATELLITE
    });

    poly = new google.maps.Polygon({
      strokeWeight: 3,
      fillColor: '#5555FF'
    });
    poly.setMap(map);
    poly.setPaths(new google.maps.MVCArray([path]));

    google.maps.event.addListener(map, 'click', addPoint);
  }

  function addPoint(event) {
    path.insertAt(path.length, event.latLng);

    var marker = new google.maps.Marker({
      position: event.latLng,
      map: map,
      draggable: true,
      icon : 'http://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=' +  markers.length + '%7cFF0000%7c000000&.png%3f'
    });

    markers.push(marker);
    marker.setTitle("#" + path.length);

    google.maps.event.addListener(marker, 'click', function() {
      marker.setMap(null);
      for (var i = 0, I = markers.length; i < I && markers[i] != marker; ++i);
      markers.splice(i, 1);
      path.removeAt(i);
      }
    );

    google.maps.event.addListener(marker, 'dragend', function() {
      for (var i = 0, I = markers.length; i < I && markers[i] != marker; ++i);
      path.setAt(i, marker.getPosition());
      }
    );
  }
</script>


<body style="margin:0px; padding:0px;" onload="initialize()">
  <div id="map"></div>
</body>
