<?php get_header();?>
<div id="container" class="single">
	<p class="control-panel">
	</p>
<div class="tri-col-span right detail-page">
		<div class="cpsAjaxLoaderSingle">
</div></div>
	<div style="clear:both"></div>		 
<div class="sidebar-left hideOnSearch">
	<?php if ( ! dynamic_sidebar( 'Common Left Sidebar' )) : ?>
	<?php endif; ?>
</div> 
<?php cps_ajax_search_results(); ?>
<div class="detail-page-content hideOnSearch"> <!-- detail page content starts -->
<h2 class="result-page-title-tax" ><?php single_cat_title('Results for: '); ?></h2>

<div style="clear:both"></div>
<?php wp_reset_postdata();?>
 		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
 		<?php require_once(TEMPLATEPATH."/functions/var/default-box-one.php");
			  require_once(TEMPLATEPATH."/functions/var/default-box-two.php");
			  require_once(TEMPLATEPATH."/functions/var/default-box-three.php");
			  global $options;$fields;$options2;$options3;$symbols;
			  $fields = get_post_meta($post->ID, 'mod1', true);
			  $options2 = get_post_meta($post->ID, 'mod2', true);
			  $options3 = get_post_meta($post->ID, 'mod3', true);
			  $symbols = get_option('gorilla_symbols');
			  $options = get_option('gorilla_fields');

			  ?>
<div class="result-car hideOnSearch"><!-- result car -->
<a href="<?php the_permalink();?>">
							<span class="<?php echo $fields['statustag'];?>"></span>
						</a>
	   <a href="<?php the_permalink();?>"><?php gorilla_img($post->ID,'thumbnail_results');?><span class="<?php $fields['statustag'];?>"></span></a>

                    <div class="result-detail-wrapper">  <!-- result detail wrapper -->
	                        <p><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php echo $post->post_title ?>"><?php echo $post->post_title ?></a></p>
	                        <p><strong><?php if ( is_numeric($fields['miles'])){echo number_format($fields['miles'],0,'.',',').' '.$options['milestext']; }else  {echo $fields['miles']; }; };?></strong></p>
	                        <p><?php if (isset( $fields['vehicletype'])){ echo $fields['vehicletype'].' | ';}else {  echo ''; };?> <?php if (isset( $fields['transmission'])){ echo $fields['transmission'];}else {  echo ''; };?><br/><?php if (isset( $options2['cylinders'])){ echo $options2['cylinders'].' '.$options['cylinderstext'].' | ';}else {  echo ''; };?><?php if (isset( $fields['interior'])){ echo $fields['interior'].' | ';}else {  echo ''; };?><?php if (isset( $fields['epamileage'])){ echo $fields['epamileage'];}else {  echo ''; };?></p>
	                        <p class="result-price"><?php include(TEMPLATEPATH."/functions/var/default-box-one.php"); if (is_numeric( $fields['price'])){ echo $symbols['currency']; echo number_format($fields['price']) else {   echo number_format($fields['price']; } ?></p>

                        </div> <!--   result detail wrapper ends -->
 </div> <!-- result car ends --> 
			<?php endwhile; else: ?>
				<p style="padding:30px;"><?php _e('Sorry, no listings matched your criteria.','language');?></p>
			<?php endif; ?>
			<div class="bottom-pagination hideOnSearch"> <!-- Pagination starts -->
                    	<p><a href="#top">BACK TO TOP</a></p>
                    	<p class="paging">
                        	<?php cps_show_pagination() ?>
                        </p>
                  </div>  <!-- Pagination ends -->	
           		</div>
           		<div id="sidebar-right">
            	<?php if ( ! dynamic_sidebar( 'Common Right Sidebar' )) : ?>
				<?php endif; ?>
				
			</div><div style="clear:both"></div>
</div>
 <?php get_footer(); ?>