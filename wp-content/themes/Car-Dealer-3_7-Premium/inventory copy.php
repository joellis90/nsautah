<?php
/*
Template Name: Full Inventory
*/
?>
<?php get_header();?>
<div id="container" class="single inventory">
<div class="cpsAjaxLoaderCenter"></div>
	<div class="tri-col-span right detail-page">		
	</div>
		<!-- added to make inventory page display as index -->
		<div><?php require_once( AUTODEALER_INCLUDES.'arrivals.php'); ?></div>	
		<!-- end change -->
		<?php cps_ajax_search_results(); ?>
		             
			<div id="sidebar-right" class="hideInventory">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d193635.86844972908!2d-111.891248!3d40.68365300000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87528a456c33a079%3A0xf75e5a07eaa40a9c!2sNEW+START+AUTO!5e0!3m2!1sen!2sus!4v1422325800417" width="230" height="330" frameborder="0" style="border:0"></iframe>
            	<?php if ( ! dynamic_sidebar( 'Common Right Sidebar' )) : ?>
				<?php endif; ?>
			</div>
          		</div>
          		<div style="clear:both"></div>
<?php get_footer(); ?>