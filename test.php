<html>
<head>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script>
		var d = new Date('2012-07-09');
		var count = 0;

		function imgChange(){ 
			//var srcVal=$("#myImage").attr("src"); 
			//var len = srcVal.search("icon_doc.gif");
			try{
				d.setDate(d.getDate() + 1);
				if(count>10){
					count =0;
					d = new Date('2012-07-09');
				}else{
					count=count+1;
				}
				
				$("#i_0_0").attr("src", "http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/"+d.getFullYear()+"-"+addzero(d.getMonth()+1)+"-"+addzero(d.getDate()+1)+"/EPSG4326_250m/3/0/0.jpg");
				$("#i_0_1").attr("src", "http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/"+d.getFullYear()+"-"+addzero(d.getMonth()+1)+"-"+addzero(d.getDate()+1)+"/EPSG4326_250m/3/0/1.jpg");
				$("#i_0_2").attr("src", "http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/"+d.getFullYear()+"-"+addzero(d.getMonth()+1)+"-"+addzero(d.getDate()+1)+"/EPSG4326_250m/3/0/2.jpg");
				$("#i_1_0").attr("src", "http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/"+d.getFullYear()+"-"+addzero(d.getMonth()+1)+"-"+addzero(d.getDate()+1)+"/EPSG4326_250m/3/1/0.jpg");
				$("#i_1_1").attr("src", "http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/"+d.getFullYear()+"-"+addzero(d.getMonth()+1)+"-"+addzero(d.getDate()+1)+"/EPSG4326_250m/3/1/1.jpg");
				$("#i_1_2").attr("src", "http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/"+d.getFullYear()+"-"+addzero(d.getMonth()+1)+"-"+addzero(d.getDate()+1)+"/EPSG4326_250m/3/1/2.jpg");
				$("#i_2_0").attr("src", "http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/"+d.getFullYear()+"-"+addzero(d.getMonth()+1)+"-"+addzero(d.getDate()+1)+"/EPSG4326_250m/3/2/0.jpg");
				$("#i_2_1").attr("src", "http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/"+d.getFullYear()+"-"+addzero(d.getMonth()+1)+"-"+addzero(d.getDate()+1)+"/EPSG4326_250m/3/2/1.jpg");
				$("#i_2_2").attr("src", "http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/"+d.getFullYear()+"-"+addzero(d.getMonth()+1)+"-"+addzero(d.getDate()+1)+"/EPSG4326_250m/3/2/2.jpg");
			}catch(err)
			{
				alert("Error description: " + err.message);
			}
		}
		
		function addzero(number){
			if(number<10){
				return '0' + number;
			}else{
				return number;
			}
		}
		
		setInterval( "imgChange()", 2000);
	</script>
</head> 
<body>
<table>
	<tr>
		<td>
			<img id="i_0_0" src="http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/2012-07-09/EPSG4326_250m/3/0/0.jpg" width="150" />
		</td>
		<td>
			<img id="i_0_1" src="http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/2012-07-09/EPSG4326_250m/3/0/1.jpg" width="150" />
		</td>
		<td>
			<img id="i_0_2" src="http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/2012-07-09/EPSG4326_250m/3/0/2.jpg" width="150" />
		</td>
	</tr>
	<tr>
		<td>
			<img id="i_1_0" src="http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/2012-07-09/EPSG4326_250m/3/1/0.jpg" width="150" />
		</td>
		<td>
			<img id="i_1_1" src="http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/2012-07-09/EPSG4326_250m/3/1/1.jpg" width="150" />
		</td>
		<td>
			<img id="i_1_2" src="http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/2012-07-09/EPSG4326_250m/3/1/2.jpg" width="150" />
		</td>
	</tr>
	<tr>
		<td>
			<img id="i_2_0" src="http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/2012-07-09/EPSG4326_250m/3/2/0.jpg" width="150" />
		</td>
		<td>
			<img id="i_2_1" src="http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/2012-07-09/EPSG4326_250m/3/2/1.jpg" width="150" />
		</td>
		<td>
			<img id="i_2_2" src="http://map1.vis.earthdata.nasa.gov/wmts-geo/MODIS_Terra_CorrectedReflectance_TrueColor/default/2012-07-09/EPSG4326_250m/3/2/2.jpg" width="150" />
		</td>
	</tr>
</table>

</body> </html>