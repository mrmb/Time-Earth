
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
<script type="text/javascript">

	var url_array = new Array();

	function generateGif(folder, format){
		$.ajax({
			type: "GET",
			url: "/index.php?r=video/GenerateVideo",
			data: ( {
				'dir': folder,
				'format': format
			} ) ,
			cache: false,
			dataType: "json",
			success: function(){
				//$("#my_rand_image").attr("src", "videos/" + folder + "/" + folder + ".gif");
				window.location = "index.php?r=video/social&name=" +  folder ;
			 } 
		});
	}


	function download(folder, link, id, format){
		$.ajax({
			type: "GET",
			url: "/index.php?r=video/StoreImage",
			data: ( {
				'url': link,
				'dir': folder,
				'num': id,
				'format': format
			} ) ,
			cache: false,
			dataType: "json",
			success: function(){
			} 
		});
	}

	function checkDone(folder, itemN, format){
		$.ajax({
			type: "GET",
			url: "/index.php?r=video/CheckImages",
			data: ( {
				'folder': folder,
				'itemN': itemN,
				'format': format
			} ) ,
			cache: false,
			dataType: "json",
			success: function(data){
				checkDoneVar = data.result;
			} 
		});
	}
	
	var checkDoneVar = false;
	var checkDoneStopper = 0;
	
	var myLoop;

	function checkDoneLoop(folder, itemNumber, format){
		checkDone(folder, itemNumber, format);
		if(checkDoneVar){
			generateGif(folder, format );
			//window.location = "index.php?r=video/social&name=" +  folder ;
			clearInterval(myLoop);
		}else{
			checkDoneStopper++;
			if(checkDoneStopper==itemNumber){
				clearInterval(myLoop);
				$("#floatingBarsG").hide();
			}
		}
	}
	
	function createVideo(){
		$("#floatingBarsG").show();
		
		var array_values = $('input[name="image_checkbox"]:checked') ;
 	
 		if( array_values.length > 0 ) {
 			var d = new Date();
 			var folder = d.getTime();
 			
 			for(var i=0 ; i <  array_values.length ; i++){ 				
 				download( folder , url_array[ array_values[i].value ] , i, items[$("#options_values").val()][2]);
 			}
			
			myLoop = setInterval(function(){checkDoneLoop(folder, array_values.length, items[$("#options_values").val()][2]);}, 5000);
			
 		} else {
 			alert("Add pictures to create a video.");
 		}
	}

	$(function() {

		// options_values

		var change_interval;
		//var show_date = new Date('2014-01-01');
		var base_lon = 640;
		var base_lat = 320;
		var interval_time = 1000;
		var map_images = new Array();
		function getTiles(from, frames, lon, lat, zoom , position){
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
				map_images[i] = "http://map1.vis.earthdata.nasa.gov/wmts-geo/" + items[position][0] + "/default/" + getDateFormat(from_date) + "/EPSG4326_" + items[position][1] +  "/" + zoom + "/" + tile_row + "/" + tile_col + "." + items[position][2];
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

		function parseURL(url , position){
			
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
				return getTiles(query_string.from.split("-").join("/"), days_between(query_string.from.split("-").join("/"), query_string.to.split("-").join("/")), query_string.lon, query_string.lat, query_string.z , position);
			}else{
				alert('Valores Invalidos');
				return null;

			}
		}
		

		function pictures(position){

			url_array = parseURL(window.location.search.substring(1) , position);
			var html_images = ""; 


			for(var i = 0 ; i < url_array.length ; i++ ){
				a = url_array[i] ;
				array_info = a.split("/") ;
				array_info_image = array_info[4].split("_");

				html_images += '<li>';
				html_images += '<input value="' + i +'"type="checkbox" name="image_checkbox" style="position:static; top:-88px; left:-6px; height: 20px; width: 19px;" checked=true>';
				html_images += '<img src="' + url_array[i] + '" />';
				html_images += '<h3 style="color:black">' + array_info_image[0] + " " + array_info_image[1] + '</h3>';
				html_images += '<p> Satelite ' + array_info_image[0] + ',' + array_info_image[1] + '</br> Date = ' + array_info[6] + 
				'</br> Effect = ' + array_info_image[2] + ' ' + array_info_image[3] + '. </p>';
				html_images += "</li>";
			}

			$("#images_grid").html(html_images);
		}
		

		// Add items to combo
		var combo_list = '<select id="options_values" class="selectpicker" data-size="auto" style="left: 10%; position: relative; top: 21px; width: auto;">';
		for(var j = 0 ; j < items.length ; j++){
			
			combo_list+= '<option value=' + j + '>' + items[j][0].split("_").join(" ") + '</option>';
		}
		combo_list += "</select>";
		$("#items_combo").html(combo_list);

		// Set images

		pictures(0);

		$('#options_values').change(function () {
			pictures( $(this).val() );
		});


	});

	

</script>


	<ul class="grid-nav-option">
		<li><a href="#" onClick="createVideo()" >Create Video</a></li>
	</ul>

	
		<div id="items_combo"></div>
	

	<div class="group-images">
		<div id="four-columns" class="grid-container2">
			<ul class="rig columns-4">
				<div id="images_grid"></div>
			</ul>
		</div>

	</div>	

	<div id="floatingBarsG">
		<div class="blockG" id="rotateG_01"></div>
		<div class="blockG" id="rotateG_02"></div>
		<div class="blockG" id="rotateG_03"></div>
		<div class="blockG" id="rotateG_04"></div>
		<div class="blockG" id="rotateG_05"></div>
		<div class="blockG" id="rotateG_06"></div>
		<div class="blockG" id="rotateG_07"></div>
		<div class="blockG" id="rotateG_08"></div>
	</div> 


		<!--/#four-columns-->

	
