<?php

/*

Template Name: News



*/

?>
<?php  get_header(); ?>	

	<div id="container" class="twelve columns">		

		<div id="content">

			<div class="tri-col-span right detail-page">

		<div class="cpsAjaxLoaderSingle">

</div>

	</div>

		<?php cps_ajax_search_results(); ?>

            	<div style="border-bottom:none;" class="tri-col-span hideOnSearch ">

				<?php

					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					$the_query = new WP_Query( 'post_type=post&paged='.$paged.'' );

					while ( $the_query->have_posts() ) : $the_query->the_post();

					?>	

                  	<div class="blog-post twelve columns">                 	 

					<h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>	

					<div class="thumb_articles"><a href="<?php the_permalink();?>">
<?php if(has_post_thumbnail()){the_post_thumbnail('featured');} ?></a></div>
					

						<?php the_excerpt();?>

					</div>

				<?php endwhile;wp_reset_postdata();?>

				<?php theme_pagination( $the_query->max_num_pages); ?>	

                  </div>				

		</div><!--end of content div-->

		<div id="sidebar-right">

            	<?php if ( ! dynamic_sidebar( 'Common Right Sidebar' )) : ?>

				<?php endif; ?>

			</div>		

		<div class="clearfix"></div>		 

	</div><!--end of container div-->      

 <?php get_footer(); ?>