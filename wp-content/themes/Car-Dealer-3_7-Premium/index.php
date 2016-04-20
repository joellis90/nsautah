<?php get_header(); ?>
<!--SHOW SEARCH PHONE-->

<div id="top">

	</div>

	<div id="container" >

		<div id="content" class="row">

			<span id="results"></span>

			<?php cps_ajax_search_results(); ?>	

				 <div class="cpsAjaxLoaderHome">  </div> 

				<div class="tri-col-span hideOnSearch mini-hide">

					<?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar('Welcome Widget') ) : ?>

					<?php endif; ?>

				</div>
<div><?php require_once( AUTODEALER_INCLUDES.'arrivals.php'); ?></div>	

		</div><!--end of content div-->

		<div id="sidebar-right" >

			<?php if ( ! dynamic_sidebar( 'Home Page Right Sidebar' )) : ?>

			<?php endif; ?>

		</div><!--end of sidebar div-->	<div style="clear:both"></div>
<!-- <div class="hide-for-small">
		<?php require_once( AUTODEALER_INCLUDES.'find-cars.php'); ?>
</div>
	</div><!--end of container div-->  

	<div style="clear:both"></div>    

<?php get_footer(); ?>