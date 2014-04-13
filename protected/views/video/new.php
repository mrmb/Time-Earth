
<script type="text/javascript">

	var url_array = new Array();

	function createVideo(){
		$.ajax({
          type: "GET",
          url: "/earth/index.php?r=video/StoreImage",
          data: ( {
          	'url':'http://www.menucool.com/slider/prod/image-slider-5.jpg',
          	'dir':'case3',
          	'num': '3'
          } ) ,
          cache: false,
          dataType: "json",
          success: function(){
          	alert("DOne");
          } 
        }); 
	}

	$(function() {
		var change_interval;
		//var show_date = new Date('2014-01-01');
		var base_lon = 640;
		var base_lat = 320;
		var interval_time = 1000;
		var map_images = new Array();
		function getTiles(from, frames, lon, lat, zoom){
			var from_date = new Date(from);
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
			
			for(i = 0; i <= frames; i++) {
				from_date.setDate(from_date.getDate() + 1);
				map_images[i] = "http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/" + getDateFormat(from_date) + "/EPSG4326_250m/" + zoom + "/" + tile_row + "/" + tile_col + ".jpg";
			}
			
			return map_images;
		}
		
		
		function getDateFormat(the_date){
			return the_date.getFullYear()+"-"+addzero(the_date.getMonth()+1)+"-"+addzero(the_date.getDate());
		}
		
		function isDate(txtDate)
		{

			var currVal = txtDate;
			if(currVal == '')
				return false;
		  
			//Declare Regex  
			var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/; 
			var dtArray = currVal.match(rxDatePattern); // is format OK?

			if (dtArray == null)
				return false;
		 
			//Checks for mm/dd/yyyy format.
			dtMonth = dtArray[1];
			dtDay= dtArray[3];
			dtYear = dtArray[5];
			// alert(dtMonth + "/" + dtDay + "/" + dtYear);
			if (dtMonth < 1 || dtMonth > 12)
				return false;
			else if (dtDay < 1 || dtDay> 31)
				return false;
			else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31)
				return false;
			else if (dtMonth == 2)
			{
				var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
				if (dtDay> 29 || (dtDay ==29 && !isleap))
					return false;
			}
			return true;
		}
		
		function days_between(date1, date2) {
			// Time difference diveded by the number of milliseconds in one day
			
			var date_1 = new Date(date1);
			var date_2 = new Date(date2); 
			
			return Math.round( (date_2.getTime() - date_1.getTime()) / (1000 * 60 * 60 * 24));

		}
		
		function addzero(number){
			if(number<10){
				return '0' + number;
			}else{
				return number;
			}
		}
		
		function validate(fromDate, toDate, longitud, latitud, zoom){		
			if(isDate(fromDate) && isDate(toDate) && days_between(fromDate, toDate) >= 0 && longitud >= -180 && longitud <= 180 && latitud >= -90 && latitud <= 90 && zoom >= 0 && zoom <= 8)
				return true;
			else
				return false;
		}

		function parseURL(url){
			
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
						
						
			if(validate(query_string.from.split("-").join("/"), query_string.to.split("-").join("/"), query_string.lon, query_string.lat, query_string.z)){
				return getTiles(query_string.from.split("-").join("/"), days_between(query_string.from.split("-").join("/"), query_string.to.split("-").join("/")), query_string.lon, query_string.lat, query_string.z);
			}else{
				alert('Valores Invalidos');
				return null;

			}
		}
		
		url_array = parseURL(window.location.search.substring(1));



		// Set images

		var html_images = ""; 


		for(var i = 0 ; i < url_array.length ; i++ ){
			
			html_images += '<li>';
			html_images += '<input type="checkbox" style="position:relative; top:-10px;">';
			html_images += '<img src="' + url_array[i] + '" />';
			html_images += '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>';
			html_images += "</li>";
		}

		console.log(html_images);
		$("#images_grid").html(html_images);
	});

	

</script>


	<ul class="grid-nav-option">
		<li><a href="#" onClick="createVideo()" >Create Video</a></li>
	</ul>

	<div class="group-images">

		<div id="four-columns" class="grid-container2">
			<ul class="rig columns-4">
				<div id="images_grid"></div>
			</ul>
		</div>
		<!--/#four-columns-->

	</div>	
