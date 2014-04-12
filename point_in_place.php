<html>
<head>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script>
		var change_interval;
		
		var show_date = new Date('2014-01-01');
		
		var base_lon = 640;
		var base_lat = 320;
		
		var map_frames = 10;
		var interval_time = 1000;
		var map_images = new Array();
		function getTiles(lon, lat, zoom){
			var tile_row = 0;
			var tile_col = 0;
			
			var b_col = (base_lon * Math.pow(2, zoom));
			var b_lat = (base_lat * Math.pow(2, zoom));
			
			//alert("MX:"+b_col+" - MY:"+b_lat);
			
			var m_col = b_col/360;
			var m_lat = b_lat/180;
			
			var image_x = (lon * m_col) + (b_col/2);
			var image_y = -(lat * m_lat) + (b_lat/2);
			
			//alert("X:"+image_x+" - Y:"+image_y);
			
			while (image_x > 512){
				image_x = image_x - 512;
				tile_col = tile_col + 1;
			}
			
			while (image_y > 512){
				image_y = image_y - 512;
				tile_row = tile_row + 1;
			}
			
			//alert(zoom+"/"+tile_row+"/"+tile_col);
			
			for (i = 0; i < map_frames; i++) {
				map_images[i] = new Image();
				map_images[i].src = "http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/"+getDateFormat(show_date)+"/EPSG4326_250m/"+zoom+"/"+tile_row+"/"+tile_col+".jpg";
				
				//Next day
				show_date.setDate(show_date.getDate() + 1);
			}
			
			change_interval = setInterval( "imgChange()", interval_time);
		}
		
		function getDateFormat(the_date){
			return the_date.getFullYear()+"-"+addzero(the_date.getMonth()+1)+"-"+addzero(the_date.getDate());
		}
		
		function addzero(number){
			if(number<10){
				return '0' + number;
			}else{
				return number;
			}
		}

		var step_count = 0;
		function imgChange(){ 
			try{
				if(step_count>=map_frames){
					step_count =0;
				}
				
				//Set new image
				$("#my_rand_image").attr("src", map_images[step_count].src);
				
				step_count=step_count+1;
				
				//setInterval(imgChange(), interval_time);
			}catch(err)
			{
				clearInterval(change_interval);
				alert("Error description: " + step_count + " - " + err.message);
			}
		}
		
		function validate(longitud, latitud, zoom){
			if( longitud >= -180 && longitud <= 180 && latitud >= -90 && latitud <= 90 && zoom >= 0 && zoom <= 8)
				return true;
			else
				return false;
		}

		/*function dif_512(number){
			while( number > 512 ) {
				number -= 512 ;
			}
			return 512 - number ;
		}*/

		function parseURL(url){
			//var index = url.indexOf("?");
			//if( index < 0) return false ;
			
			url = url.substring(url.indexOf("?") + 1);

			var query_string = {};
			var vars = url.split("&");
			
			for (var i=0;i<vars.length;i++) {
				var pair = vars[i].split("=");
				
				// If first entry with this name
				if (typeof query_string[pair[0]] === "undefined") {
					query_string[pair[0]] = pair[1];
					// If second entry with this name
				} else if (typeof query_string[pair[0]] === "string") {
					var arr = [ query_string[pair[0]], pair[1] ];
					query_string[pair[0]] = arr;
					// If third or later entry with this name
				} else {
					query_string[pair[0]].push(pair[1]);
				}
			}
						
			if(validate(query_string.lon, query_string.lat, query_string.z)){
				getTiles(query_string.lon, query_string.lat, query_string.z);
			}else{
				alert('Valores Invalidos')
			}
		}
		
		parseURL(window.location.search.substring(1));
	</script>
</head> 
<body>
<!-- TEMP IMAGE MEANWHILE -->
<img id="my_rand_image" src="" width="450" />
</body>
</html>