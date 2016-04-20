<div class="footer-wrapper">

	<div id="footer">

		<?php if ( ! dynamic_sidebar( 'Footer' )) : ?>

		<?php endif; ?>

	</div><!--end of footer div-->

	</div><!--end of footer-wrapper div-->

<!--Footer For Mobile View-->

<footer id="footerMob" class="row show-for-small">
  
 
            <div style="width:100%; height:48px; background: url(<?php bloginfo('template_url'); ?>/images/common/footerMobile.png) repeat-x;">
            <div class="twelve columns">            
                
               
            </div>           
            
            </div>




            <div class="eight columns">
          		<ul class="inline-list left" style="margin-top:12px;">
                  
                   <li >
                   
                   <!-- Get Contact page ID -->
					<?php
                    $pages = get_pages(array(
                    'meta_key' => '_wp_page_template',
                    'meta_value' => 'contact-us.php',
                    'hierarchical' => 0
                    ));
                    foreach($pages as $page){
                    echo '<a href="'.get_site_url().'?p='.$page->ID.'">Contact Us</a>';
					break;
                    }
                    ?>
                   
                   
                    </li>
                </ul>
                <ul class="inline-list right" style="margin-top:12px;">
                  <li><a class="to-top scrollup" href="#">Go To Top</a></li>                  
                </ul>
            </div>
          
  </footer>
  	
<!--End Footer For Mobile View-->


<!--JS For Responsive-->
                 
			<script src="<?php bloginfo('template_url'); ?>/foundationFramework/javascripts/jquery.foundation.mediaQueryToggle.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/foundationFramework/javascripts/jquery.foundation.navigation.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/foundationFramework/javascripts/jquery.foundation.topbar.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/foundationFramework/javascripts/jquery.foundation.reveal.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/foundationFramework/javascripts/app.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/foundationFramework/javascripts/mobileScript.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/foundationFramework/javascripts/touch_slider/modernizr.custom.17475.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/foundationFramework/javascripts/touch_slider/jquery.elastislide.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/foundationFramework/javascripts/touch_slider/jquerypp.custom.js"></script>
     
            
	<?php wp_footer(); ?>	</body>

</html>