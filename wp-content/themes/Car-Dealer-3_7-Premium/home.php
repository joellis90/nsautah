<?php
/*
Template Name: home
*/
?>
<?php include(TEMPLATEPATH . '/header1.php'); ?>
	<div id="container" class="twelve columns">

		<div id="content">

		<div class="tri-col-span right detail-page">

		<div class="cpsAjaxLoaderSingle">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</div>

	</div>

		<?php cps_ajax_search_results(); ?>

			<div class="tri-col-span hideOnSearch">

				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                  	<div class="blog-post">

						<h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

							<?php the_content();?>
							
							

					</div>

				<?php endwhile; ?>				

			</div>			
<div><?php require_once( AUTODEALER_INCLUDES.'arrivals1.php'); ?></div>	
<div class="fb-like" data-href="https://www.facebook.com/pages/New-Start-Auto-Utah/749045595110418" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<hr>
		</div>

	<div id="sidebar-right">
		
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d193635.86844972908!2d-111.891248!3d40.68365300000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87528a456c33a079%3A0xf75e5a07eaa40a9c!2sNEW+START+AUTO!5e0!3m2!1sen!2sus!4v1422325800417" width="230" height="330" frameborder="0" style="border:0"></iframe>
            	<?php if ( ! dynamic_sidebar( 'Common Right Sidebar' )) : ?>

				<?php endif; ?>

			</div>

	<div class="clearfix"></div>

</div>

<?php get_footer(); ?>