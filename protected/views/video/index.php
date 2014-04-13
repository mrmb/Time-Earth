
<style type="text/css">
	html { height: 100% }
  	body { height: 100%; margin: 0; padding: 0 }
  	#map { 
  		height: 90% ;
  		width: 100% ;
  	 }

     .prev_videos{
        color:black;
     }

     a:hover {
        color: red;
     }
</style>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  var poly, map;
  var markers = [];
  var path = new google.maps.MVCArray;
  var infoWindow;

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
    google.maps.event.addListener(poly, 'click', showInfo);

    infoWindow = new google.maps.InfoWindow();	
  }

  function showInfo(event){
  	var vertices = this.getPath();
    var lat = 0.00, lon = 0.00 ;
    var contentString = '<b>New Video</b> </br>' ;
  	// Iterate over the vertices.
  	// for (var i =0; i < vertices.getLength(); i++) {
   //  	var xy = vertices.getAt(i);
   //  	contentString += '<br>' + 'Coordinate ' + i + ':  ' + xy.lat() + ',' + xy.lng();
   //    lat = xy.lat() ;
   //    lon = xy.lng() ;
  	// }

     contentString += "Fecha Inicial : <input type='date' id='date_s' style='height: auto;' value='10/20/2012' > </br>" ;
     contentString += "Fecha Final   : <input type='date' id='date_e' style='left:2%; position:relative; height: auto;' value='10/20/2013'> </br>";
     contentString += "Zoom          : <input type='number' id='zoom' style='left:13%; position:relative; height: auto;'> </br>";

     
     
     contentString += '<div onClick=newVideo(' + vertices.getAt(0).lat()  + ',' + vertices.getAt(0).lng()  + ')> Preview Video </div>';
     

  	// Replace the info window's content and position.
  	infoWindow.setContent(contentString);
	  infoWindow.setPosition(event.latLng);
  	infoWindow.open(map);
  }

  function newVideo(lat,lon){
      d1 = new Date( $("#date_s").val() );
      d2 = new Date( $("#date_e").val() );

      date_1 = d1.getMonth() + 1 + "/" + d1.getDate() + "/" + d1.getFullYear() ;
      date_2 = d2.getMonth() + 1 + "/" + d2.getDate() + "/" + d2.getFullYear() ;
    
      zoom   = $("#zoom").val();
      window.location = "index.php?r=video/new&from=" + date_1 + "&to=" + date_2 + "&lat=" + lat + "&lon=" + lon + "&z=" + zoom ;
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
