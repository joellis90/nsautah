<?php get_header(); ?>

	<div id="container" class="twelve columns">

		<div id="content">

		<div class="tri-col-span right detail-page">

		<div class="cpsAjaxLoaderSingle">

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

		</div>

	<div id="sidebar-right">

            	<?php if ( ! dynamic_sidebar( 'Common Right Sidebar' )) : ?>

				<?php endif; ?>

			</div>

	<div class="clearfix"></div>

</div>

<?php get_footer(); ?>