<script type="text/javascript">


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
				
		
		image_string = '<img src="' + '<?php Yii::app()->request->baseUrl; ?>' + "/videos/" +query_string.name + '/i000.jpg" >'  ;
		$("#video").html(image_string);
	}

	$(function() {
		url_array = parseURL(window.location.search.substring(1)) ;

	});

	

</script>


<style type="text/css">
	#video{

		position: absolute;
		left:30%;
	}

	#id{
		left:40%;
		position: relative;
	}

</style>



<div id="video"></div>

<!-- Socialize -->
<div id="social-area" class="page" style="position: relative; top: 0; left:30%">
	
    	
            <div id="media" class="span12">
                <!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
					<a class="addthis_button_facebook"></a>
					<a class="addthis_button_twitter"></a>
					<a class="addthis_button_tumblr"></a>
					<a class="addthis_button_stumbleupon"></a>
					<a class="addthis_button_google_plusone_share"></a>
					<a class="addthis_button_pinterest_share"></a>
					<a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
					</div>
					<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=cavpollo"></script>
<!-- AddThis Button END -->
            </div>
        
    
</div>
<!-- End Socialize -->







