<!DOCTYPE html>
<html lang="en">
	<?php 
		define( "CAMAGA_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/camaga/" );
		include( CAMAGA_ROOT . "common/html_head.php"); 
	?>
	<body id="home">
		<div class="wrapper">
			<?php
			include(CAMAGA_ROOT . "common/site_header.php");
			?>
		<div id="content">
		<h2>Upcoming Events</h2>
<!-- carnatic mela -->
		<div class="list-concert-box">
		<h3><a href="events#carnatic-mela">Carnatic Mela</a></h3>
		<p><i>Sat Apr 9, 2016</i></p>
                <p>
			CAMAGA is organizing a Carnatic Mela - to celebrate the centenary of Bharat Ratna Smt. M. S. Subbulakshmi, the illustrious musician. 
		</p>
               <p>
			<a target="_blank" href="http://maps.google.com/?q=Chinmaya Niketan">
			Venue:  <br/>
				Chinmaya Niketan<br/>
				Sri Rama Temple<br/>
				6611 Williams Road Norcross GA
			</a>
		</p>		
		<p>
			Refer <a href="events#carnatic-mela">here</a> for more details
                </p>
		</div>
<!-- carnatic mela -->
<!-- Violin Workshop -->
		<div class="list-concert-box">
		<h3><a href="events#violinWorkshop">Vocal and Violin workshop</a></h3>
		<h4> by illustrious violinist Sri Ganesh</h4>
		<p><i>June 18 - 24, 2016</i></p>
		<img src="events/2016/violinWorkshop/ganeshKumaresh.jpg" height="162" align="left" style="padding: 0em 1em 1em 0em;"/>
                <p  >
			CAMAGA is pleased to announce that Sri Ganesh, the renowned violinist and vocalist (of the Ganesh and Kumaresh duo) 
			will conduct a music workshop organized by CAMAGA during June 18 - 24, 2016. 
		</p>
               <p>
			<a target="_blank" href="http://maps.google.com/?q=KA Academy of Indian Music & Dance">
			Venue:  <br/>
				KA Academy of Indian Music & Dance<br/>
				2731 Sandy Plains Rd, Suite #156<br/>
				Marietta, GA, 30066<br/>
			</a>
		</p>		
		<p>
			Refer <a href="events#violinWorkshop">here</a> for more details
                </p>
		</div>
<!-- Violin Workshop -->
		<br/>
		<?php
			include( CAMAGA_ROOT . "concerts/upcoming.php");
		?>
	        <h2>CAMAGA in Pictures</h2>
			<div id="gallery" >
			<img src="data/concerts/201603131600/thumbs/IMG_0002.jpg"
				data-image="data/concerts/201603131600/IMG_0002.jpg"
				data-description="Mar 13, 2016, Sikkil Gurucharan" />
			<img src="data/concerts/201603131600/thumbs/IMG_0008.jpg"
				data-image="data/concerts/201603131600/IMG_0008.jpg"
				data-description="Mar 13, 2016, V.Sanjeev" />
			<img src="data/concerts/201603131600/thumbs/IMG_0011.jpg"
				data-image="data/concerts/201603131600/IMG_0011.jpg"
				data-description="Mar 13, 2016, Sikkil Gurucharan" />
			<img src="data/concerts/201603131600/thumbs/IMG_0016.jpg"
				data-image="data/concerts/201603131600/IMG_0016.jpg"
				data-description="Mar 13, 2016, Patri Satish Kumar, Sikkil Gurucharan & V.Sanjeev" />
			<img src="data/concerts/201603131600/thumbs/IMG_0023.jpg"
				data-image="data/concerts/201603131600/IMG_0023.jpg"
				data-description="Mar 13, 2016, Patri Satish Kumar" />
			<img src="data/concerts/201603131600/thumbs/IMG_0027.jpg"
				data-image="data/concerts/201603131600/IMG_0027.jpg"
				data-description="Mar 13, 2016, Patri Satish Kumar, Sikkil Gurucharan & V.Sanjeev" />
	    </div>

<br/></br/>

		<?php 
			include(CAMAGA_ROOT . "common/site_footer.php");
		?>
		    </div>
    </div>	
	
	<script src='thirdparty/unitegallery/unitegallery-master/package/unitegallery/js/unitegallery.min.js'></script> 
	<script src='thirdparty/unitegallery/unitegallery-master/package/unitegallery/themes/compact/ug-theme-compact.js'></script> 
	<script type="text/javascript"> 			
			jQuery(document).ready(function(){ 
				jQuery("#gallery").unitegallery({
					gallery_theme: "compact",
					gallery_min_width: 150,	
					slider_scale_mode: "down",
					theme_hide_panel_under_width: 4000,
					slider_enable_text_panel: true
				});	
			}); 		
		</script>
	</body>
</html>



