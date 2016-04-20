<span class="hideOnSearch">
	<h2 class="mobile top-deals-mobile-wrapper"><?php _e('Just Sold','language');?></h2>
		<div class="product-list-wrapper">
			<ul class="tricol-product-list">
				<?php $query = new WP_Query(array(
					'post_type' => array('gtcd','user_listing'),
					'posts_per_page' => '3'
					));
						if ( $query->have_posts() ) while ( $query->have_posts() ) : $query->the_post(); global $post,$field, $fields, $fields2, $fields3; $fields = get_post_meta($post->ID, 'mod1', true); $fields3 = get_post_meta($post->ID, 'mod3', true); $fields2 = get_post_meta($post->ID, 'mod2', true);  $symbols = get_option('gorilla_symbols'); $options = get_option('gorilla_fields');include(TEMPLATEPATH."/functions/var/default-box-one.php");include(TEMPLATEPATH."/functions/var/default-box-two.php");include(TEMPLATEPATH."/functions/var/default-box-three.php");?>					  	
				<li class="new-arrivals-list"><a class="arrivals-link" href="<?php the_permalink();?>">
					<div class="image-container">
						 
							<span class="<?php echo $fields['statustag'];?>"></span>
							
							
<?php

if ( 'user_listing' == get_post_type($post->ID) ) {

$args = array(

'order'          => 'ASC',

'orderby'        => 'menu_order',

'post_type'      => 'attachment',

'post_parent'    => $post->ID,

'post_mime_type' => 'image',

'post_status'    => null,

'numberposts'    => 1,

);



$attachments = get_posts($args);

if ($attachments) {

   foreach ($attachments as $attachment) {


arrivals_img ($post->ID,'arrivals');
}

}


} elseif ( 'gtcd' == get_post_type($post->ID) ) {

gorilla_img ($post->ID,'arrivals');

}?>
						
						
						 
					</div>
                    <div class="arrivals-details">
					<p><strong><?php the_title();?></strong>
					<?php if ( $fields['year']){ echo $fields['year'].' | ';} else {  echo ''; } ?> 
					<?php if ( is_numeric($fields['miles'])){echo number_format($fields['miles'],0,'.',',').' '.$options['milestext']; }else  {echo $fields['miles']; } ?><br />
					
					<span class="price-style"><?php  if (is_numeric( $fields['price'])){ echo $symbols['currency']; echo number_format($fields['price']);} else {  echo $fields['price']; } ?>
</span></p>
						<p><span class="detail-btn" href="<?php the_permalink();?>"></span></p>
                     </div>   
                        
                        </a>
				</li>
			<?php endwhile; wp_reset_query(); ?>       
		</ul>
	</div>
</span>


