<?php get_header();?>
<div id="container" class="single">
	<p class="control-panel hide-for-small">
		<span class="cptext">
		</span>
	</p>
        		
		<?php if (have_posts()) :  while (have_posts()) : the_post();?>	 
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
	<div class="tri-col-span right detail-page">
		<div class="cpsAjaxLoaderSingle">
</div>
	</div>
    
    
		<?php cps_ajax_search_results(); ?>
            <div class="detail-page-content hideOnSearch">
            <div class="backToInventory show-for-small"><a href="javascript: history.go(-1)">< Back</a></div>
            <div class="show-for-small refine-search-single"><a id="searchBoxPop2" href="#"></a></div>
    <div class="clear"></div>
				<h1 class="hideOnSearch"><?php if ( $fields['year']){ echo $fields['year'];}else {  echo ''; }?> <?php the_title();?></h1>
                       <h3 class="show-for-small"><?php if (is_numeric( $fields['price'])){ echo $options['pricetext'].': '.$symbols['currency']; echo number_format($fields['price']);}else {  echo $fields['price']; } ?></h3>
                 <div class="clear"></div>
					<ul class="quick-list quick-glance hideOnSearch ">
                    
           				<?php	if (is_numeric( $fields['price'])){ echo '<li><p class="strong">'.$options['pricetext'].':</p> '.$symbols['currency']; echo number_format($fields['price']).'</li>';}else {  echo $fields['price']; } ?>
           				<?php	if ( is_numeric($fields['miles'])){echo  '<li><p class="strong">'.$options['milestext'].':</p> '.number_format($fields['miles'],0,'.',',').'</li>';} else { echo '<li><p class="strong">'.$options['milestext'].':</p> '.$fields['miles'].'</li>'; }?>
            			<?php	if ( $fields['vehicletype']){ echo '<li><p class="strong">'.$options['vehicletypetext'].':</p> '.$fields['vehicletype'].'</li>';}else {  echo ''; }?>
            			<?php	if ( $fields['drive']){ echo '<li><p class="strong">'.$options['drivetext'].':</p> '.$fields['drive'].'</li>';}else {  echo ''; }?>
            			<?php	if ( $fields['transmission']){ echo '<li><p class="strong">'.$options['transmissiontext'].':</p> '.$fields['transmission'].'</li>';}else {  echo ''; }?>
            			<?php	if ( $fields['exterior']){ echo '<li><p class="strong">'.$options['exteriortext'].':</p> '.$fields['exterior'].'</li>';}else {  echo ''; }?>
   						<?php	if ( $fields['interior']){ echo '<li><p class="strong">'.$options['interiortext'].':</p> '.$fields['interior'].'</li>';}else {  echo ''; }?>
   						<?php	if ( $fields['epamileage']){ echo '<li><p class="strong">'.$options['epamileagetext'].':</p> '.$fields['epamileage'].'</li>';}else {  echo ''; }?>
   						<?php	if ( $fields['stock']){ echo '<li><p class="strong">'.$options['stocktext'].':</p> '.$fields['stock'].'</li>';}else {  echo ''; }?>
   						<?php	if ( $fields['vin']){ echo '<li><p class="strong">'.$options['vintext'].':</p> '.$fields['vin'].'</li>';}else {  echo ''; }?>
   						<div style="background:none; padding:10px 3px 0px 3px!important;margin:0px auto;"><?php   if ( $fields['carfax']){ ?>  <a class="carfax" target="_blank" href='http://www.carfax.com/VehicleHistory/p/Report.cfx?partner=<?php  echo $fields['carfax']; ?>&vin=<?php  echo $fields['vin']; ?>'><img style="border:1px solid #ccc" src='http://www.carfaxonline.com/media/img/subscriber/buyback.jpg' border='0'></a><?php  }else {   echo '';  }?></div>
   						
					</ul>	
    	
                     			
			<div id="gallery_holder" class="big-view hideOnSearch">	
				<div id="gallery" class="big-view hideOnSearch" style="height:auto;">					
                  		    <?php gallery_user($post->ID,'gallery'); ?> 
                            <div style="clear:both"></div>                   	
                   </div>
                   
                     <div style="clear:both"></div> 
                   		<div class="small-view hideOnSearch" style="width:100%; float:left;">			
						<ul id="nav" class="elastislide-list thumbnails hideOnSearch">				
							<?php gallery_thumbs_user($post->ID,'thumbnail_gallery'); ?>							
						</ul>
						<div style="clear:both"></div>
						</div>
						<div style="clear:both"></div>
						</div>								
			                 <div style="clear:both"></div>
                             
              				<div class="tabs hideOnSearch">									
					<span class="features-tab active">
						<?php _e('Features','language');?>
					</span>
					<span class="overview-tab">
						<?php _e('Overview','language');?>
					</span>										
						<?php $video_source = get_post_meta($post->ID, 'video_meta_box_source', true);
									$video_id = get_post_meta($post->ID, 'video_meta_box_videoid', true);					
									if(($video_source == "vimeo") && !empty($video_id)){ ?>
										<span class="video-tab"><?php _e('Video','language');?></span>									<?php } elseif(( $video_source == "youtube") && !empty($video_id)){ ?>
									<span class="video-tab"><?php _e('Video','language');?></span> 
									<?php  } ?>					         										
					<div class="item-list">										
					<ul class="features active first feature-list">
                        		<?php	if (get_the_terms($post->ID, 'features')) {
  									$taxonomy = get_the_terms($post->ID, 'features');									
  									foreach ($taxonomy as $taxonomy_term) {
    								?> <li><?php echo $taxonomy_term->name;?></li><?php }  						
																
									}
									?>
                   		</ul>           					
						<ul class="overview">
                              	<?php 	$trim_length = 200; 
										$values = get_post_meta($post->ID, 'mod3', true);
										if (is_array($values))
										{
										foreach($values as $value) {
										add_filter( 'custom_filter', 'wpautop' );
										echo '<p class="car-detail">'.apply_filters( 'custom_filter', $value ).'</p>';}   
										}		
										?>	
						</ul>						                   
						<ul class="video">
							<li><?php $video_source = get_post_meta($post->ID, 'video_meta_box_source', true);
									$video_id = get_post_meta($post->ID, 'video_meta_box_videoid', true);					
									if(($video_source == "vimeo") && !empty($video_id)){ ?>
									<iframe src="http://player.vimeo.com/video/<?php echo $video_id; ?>?title=0&amp;portrait=0&amp;color=e275c7" width="464" height="318" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>
									<?php } elseif(( $video_source == "youtube") && !empty($video_id)){ ?>
									<iframe src="http://www.youtube.com/embed/<?php echo $video_id; ?>"  width="464" height="318" frameborder="0" allowfullscreen></iframe>
									<?php  } ?>
							</li>
						</ul>
					</div>                        
                </div>
                <div style="clear:both;"></div>
         
             
                       
            </div>      
            
            	<span class="hideOnSearch">
		<?php get_template_part("sidebar-left-listing");?>
	</span>   
    
          
            <?php  endwhile; endif; ?>            
			<div id="sidebar-right">
            	<?php if ( ! dynamic_sidebar( 'Common Right Sidebar' )) : ?>
				<?php endif; ?>
			</div>
          	<div style="clear:both; width:980px; height:1px; overflow:hidden;" class="hide-for-small"></div>  
			<div class="hide-for-small"><?php if ( ! dynamic_sidebar('Similar Cars')) : ?> <?php endif; ?></div>
		<div style="clear:both; width:980px; height:1px; overflow:hidden;" class="hide-for-small"></div>
        <div style="clear:both; width:100%; height:1px; overflow:hidden;"></div>		
	</div>
 <?php get_footer(); ?>
