<div class="row show-for-small whiteBack">
	<!---- Image for mobile here ---->
</div>
<div class="hide-for-small">
   <div class="cpsAjaxLoader">
     
      <img src="<?php bloginfo('template_url')?>/images/common/loader.gif" />
      <div style="text-align:center;margin-top:10px"><?php _e('Please wait','language');?></div>           
   </div>     
   <div id="slides" class="hide-for-small" >
      <div>             
              <?php   $query = new WP_Query(array(
               'post_type' => array('post','gtcd','user_listing'),
               'meta_key' => '_featured',
               'meta_value' => 'Yes',               
               'orderby' => 'date',               
               'order' => 'DESC' ,
               'posts_per_page' => '10',
               ));
                  if ( $query->have_posts() ) while ( $query->have_posts() ) : $query->the_post();
               ?>                   
               <?php global $post,$field, $fields, $fields2, $fields3; $fields = get_post_meta($post->ID, 'mod1', true); $fields3 = get_post_meta($post->ID, 'mod3', true); $fields2 = get_post_meta($post->ID, 'mod2', true);  $symbols = get_option('gorilla_symbols'); $options = get_option('gorilla_fields');include(TEMPLATEPATH."/functions/var/default-box-one.php");include(TEMPLATEPATH."/functions/var/default-box-two.php");include(TEMPLATEPATH."/functions/var/default-box-three.php");?>                   
                  <div>
<!--Removing a tag to stop banner links. clsing tag commentout out on line 55. use div-->
	                  <!--<a href="<?php the_permalink(); ?>"> -->
                  <h2><?php if (isset( $fields['year'])){ echo $fields['year'].' ';} else {  echo ''; } ?>   
                                  <?php if ($post->post_type == "gtcd") { the_title();if (is_numeric( $fields['price'])){ echo ' | <span class="price_slider">'.'  '.$symbols['currency']; echo number_format($fields['price']).'</span> ';}else {  echo $fields['price']; }
}else { the_title();}?></h2>
                  <!-- Removing text box from home slider 
	                  <div class="title-detail-tag"></div> -->
                    <img class="slides img" src="/wp-content/uploads/2015/02/cover2.jpg"> 
                                    
                  <?php endwhile; wp_reset_query(); ?></div></div>
</div>
<div class="mobile-slider" style="display:none;">

     <?php
    $query = new WP_Query(array(
               'post_type' => array('gtcd','user_listing'),
               'meta_key' => '_featured',
               'meta_value' => 'Yes',
               'orderby' => 'rand',
               'posts_per_page' => '1'
               ));
                  if ( $query->have_posts() ) while ( $query->have_posts() ) : $query->the_post();
               ?>
               <?php global $post,$field, $fields, $fields2, $fields3; $fields = get_post_meta($post->ID, 'mod1', true); $fields3 = get_post_meta($post->ID, 'mod3', true); $fields2 = get_post_meta($post->ID, 'mod2', true);  $symbols = get_option('gorilla_symbols'); $options = get_option('gorilla_fields');?>                             
                        <a class="mobile-slider-link" href="<?php the_permalink(); ?>">
                                            <?php if ( has_post_thumbnail() ) { $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'featured' ); $url = $thumb['0'];echo '<img src="'.$url.'" />';} elseif ( 'user_listing' == get_post_type($post->ID) ){						
$args = array('order'          => 'ASC','orderby'=> 'menu_order','post_type'=> 'attachment','post_parent'    => $post->ID,'post_mime_type' => 'image','post_status'    => null,'numberposts'    => 1,);
$attachments = get_posts($args);
if ($attachments) {

   foreach ($attachments as $attachment) {


arrivals_img ($post->ID,'featured');
}

}


} elseif( 'gtcd' == get_post_type($post->ID) ) {

gorilla_img ($post->ID,'featured');

} ?>
                        <div class="mobile-slider-title">
                       <p><?php if (isset( $fields['year'])){ echo $fields['year'].' ';} else {  echo ''; } ?>   
                       <?php if ($post->post_type == "gtcd") { the_title();if (isset( $fields['price'])){ echo ' | <span class="price_slider">'.'  '.$symbols['currency']; echo number_format($fields['price']).'</span> ';}else {  echo ''; }
}else { the_title();}?></p>
                        </div>
                        <div class="clear"></div>
                        </a>
                        <?php endwhile; wp_reset_query();
             ?>   
</div>