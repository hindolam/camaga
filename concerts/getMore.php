<!DOCTYPE html>
<html lang="en">
	<?php 
		define( "CAMAGA_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/" );
		include( CAMAGA_ROOT . "common/html_head.php"); 
	?>
	<body id="concerts">
		<div class="wrapper">
			<?php include(CAMAGA_ROOT . "common/site_header.php"); ?>
			<div id="content">
				<?php
					include( CAMAGA_ROOT . "concerts/message.php"); 
				?>	
		<?php 
					if (!empty($_SERVER['PHP_AUTH_USER']))	{ 
		?>					
						<div>
							<a class="button" href="./concerts/createForm.php">Add Concert</a>
						</div>	
		<?php } ?>
				<?php 
					include( CAMAGA_ROOT . "concerts/upcoming.php"); 
				?>	
				
				<h2>Past Concerts</h2>
				<?php
					$concerts = Concerts::getPast();
					$previousYear = "";
					$num = 0;
					foreach ( $concerts as &$concert) {
						if ($concert -> exists()) {
							$ymdhm = $concert -> getDateTime();	
							$concert_date = strtotime($concert -> getDate());
							$concert_time = strtotime($concert -> getTime());
							$year = $concert -> getYear();
							if ($year <> $previousYear) {
								$previousYear = $year;
								if ($num != 0) {
		?>
										</tbody>	
									</table> <!-- concert-list-table -->
								</section>	
		<?php 			}
				
		?>			
							<section class="collapsible">
								<header>
									<h3>
										<?php  echo $year;?>
									</h3>
								</header>
								<table class="concert-list-table"> 
									<tbody>
		<?php 		} 
								++$num;
		?>				
								
								<tr class="<?php echo($num % 2 == 0 ? 'even' : 'odd');?>">
									<td class="date-column">
										<a href="concerts?datetime=<?php echo $ymdhm ?>">							
											<?php echo date("M d, Y", $concert_date); ?>
										</a>	
									</td> <!-- date -->	
									<td>
										<a href="concerts?datetime=<?php echo $ymdhm ?>">							
		<?php
											include("../artists/views/vertical.php");
		?>
										</a>	
									</td> <!-- artist-box -->
									<td> <!-- photo-box -->
		<?php							
										include("photos/views/album.php"); 
		?>								
									</td>							
								</tr>
		<?php
							} // if concert exists
						} // foreach concert					
						if (!$num == 0) {
		?>
								</tbody>	
							</table> <!-- concert-year-section -->
						</section>	
		<?php 			} ?>
			</div> <!-- page-wrap -->
			<div class="push"></div>
		</div> <!-- wrapper -->
		<?php 
			include(CAMAGA_ROOT . "common/site_footer.php");
		?>						
		<script src="thirdparty/lightbox2/lightbox2-master/dist/js/lightbox.min.js"></script>
		<script>
			$(document).ready( function() {
				// make each a giant clickable row
	            $('tr')
					.mouseover(function(){
						$(this).addClass('active');
					})
					.mouseout(function(){
						$(this).removeClass('active');
					})
					.superLink();
					
				$('.collapsible').each(function() {
					var headingE = $('h1,h2,h3,h4,h5,h6,legend', this).first();
					headingE.addClass('clickable');
					var key = headingE.text();
					if ((key in sessionStorage) && sessionStorage[key]) {
						$('*', this).show();
						headingE.prepend('<i class="fa fa-caret-down"></i>').show();
					}
					else {
						$('*', this).hide();
						headingE.prepend('<i class="fa fa-caret-right"></i>').show();
					}
					var icon = $("i", this);
					icon.show();
					icon.parents().show();
				});
				
				$('.collapsible .clickable').click(function(){
					var collapsible = $(this).closest('.collapsible');
					collapsible.find('*').toggle();					
					var icon = $("i", this);
					icon.show();
					icon.parents().show();
					icon.toggleClass('fa-caret-right fa-caret-down');
					var key = $(this).text();
					if (icon.attr('class') === 'fa-caret-down') {
						sessionStorage[key] =  true;
					}
					else {
						delete sessionStorage[key];
					}	
				});					
			});	
		</script>
	</body>
</html>



