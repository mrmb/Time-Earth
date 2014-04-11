<html>
<head>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script>
		var max_values = new Array(0,1,2,4,9,19,39,79,159,319);
		var min_date = new Date('2012-05-01');
		var max_date = new Date();
		var start_date = randomDate();
		var show_date = start_date;
		
		//Max_values says how many pics are available per column and row
			//	Columns use positions from 1 to 9
			//	Rows use positions from 0 to 8
		var random_zoom = Math.floor((Math.random() * 9));
		var random_col = Math.floor(Math.random() * max_values[random_zoom+1]) ;
		var random_row = Math.floor(Math.random() * max_values[random_zoom]);
		alert("TILES: " + random_zoom + "/" + random_row + "/" + random_col);
		
		var map_frames = 10;
		
		var interval_time = 1000;
		var step_count = 0;

		var map_images = new Array()
		function preloadMapImates() {
			for (i = 0; i < map_frames; i++) {
				map_images[i] = new Image();
				map_images[i].src = "http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/"+getDateFormat(show_date)+"/EPSG4326_250m/"+getRandomTile()+".jpg";
				
				show_date.setDate(show_date.getDate() + 1);
			}
			
			setInterval( "imgChange()", interval_time);
		}
		preloadMapImates();
		
		function randomDate(){
			var x =  new Date(min_date.getTime() + Math.random() * (max_date.getTime() - min_date.getTime()));
			alert("RANDOM: " + x.getFullYear()+"-"+addzero(x.getMonth()+1)+"-"+addzero(x.getDate()+1));
			return x;
		}
		
		function getDateFormat(the_date){
			//alert("DATE: " + the_date.getFullYear()+"-"+addzero(the_date.getMonth()+1)+"-"+addzero(the_date.getDate()+1));
			return the_date.getFullYear()+"-"+addzero(the_date.getMonth()+1)+"-"+addzero(the_date.getDate()+1);
		}
		
		function getRandomTile(){
			return  random_zoom + "/"+random_row+"/"+random_col;
		}
		
		function imgChange(){ 
			try{
				if(step_count>=map_frames){
					step_count =0;
				}
				
				$("#my_rand_image").attr("src", map_images[step_count].src);
				
				step_count=step_count+1;
			}catch(err)
			{
				alert("Error description: " + step_count + " - " + err.message);
			}
		}
		
		function addzero(number){
			if(number<10){
				return '0' + number;
			}else{
				return number;
			}
		}
	</script>
</head> 
<body>
<!-- TEMP IMAGE MEANWHILE -->
<img id="my_rand_image" src="http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/2012-07-09/EPSG4326_250m/0/0/0.jpg" width="450" />
</body>
</html>