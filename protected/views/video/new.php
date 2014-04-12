


<script type="text/javascript">
	function createVideo(){
		// Ask to proceed the video. 
		$.ajax({
        type: "GET",
          url: "/earth/index.php?r=video/save",
          data: ( {} ) ,
          cache: false,
          dataType: "json",
          success: function(){
          	alert("DOne");
          }
        }); 

	}

</script>


	<ul class="grid-nav-option">
		<li><a href="#" onClick="createVideo()" >Create Video</a></li>
	</ul>

	<div class="group-images">

		<div id="four-columns" class="grid-container2">
			<ul class="rig columns-4">
				<li>
					<input type="checkbox" style="position:relative; top:-10px;">
					<img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/im1.jpg" />
					<h3>Image Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</li>
				<li>
					<input type="checkbox" style="position:relative; top:-10px;">
					<img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/im2.jpg" />
					<h3>Image Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</li>
				<li>
					<input type="checkbox" style="position:relative; top:-10px;">
					<img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/im3.jpg" />
					<h3>Image Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</li>
				<li>
					<input type="checkbox" style="position:relative; top:-10px;">
					<img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/im4.jpg" />
					<h3>Image Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</li>

				<li>
					<input type="checkbox" style="position:relative; top:-10px;">
					<img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/im1.jpg" />
					<h3>Image Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</li>
				<li>
					<input type="checkbox" style="position:relative; top:-10px;">
					<img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/im2.jpg" />
					<h3>Image Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</li>
				<li>
					<input type="checkbox" style="position:relative; top:-10px;">
					<img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/im3.jpg" />
					<h3>Image Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</li>
				<li>
					<input type="checkbox" style="position:relative; top:-10px;">
					<img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/im4.jpg" />
					<h3>Image Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</li>

				

			</ul>
		</div>
		<!--/#four-columns-->

	</div>	
