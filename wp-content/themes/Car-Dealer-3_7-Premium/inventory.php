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
		<?php cps_ajax_search_results(); ?>             
			<div id="sidebar-right" class="hideInventory">
            	<?php if ( ! dynamic_sidebar( 'Common Right Sidebar' )) : ?>
				<?php endif; ?>
			</div>
          		</div>
          		<div style="clear:both"></div>
<?php get_footer(); ?>