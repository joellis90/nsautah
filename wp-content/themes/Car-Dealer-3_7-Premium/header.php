<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta id="Viewport" name="viewport" content=" ">
	<script type="text/javascript">
	if (screen.width < 767) {
		var mvp = document.getElementById('Viewport');
		mvp.setAttribute('content','width=device-width, initial-scale=1');}
</script>
<title>
<?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s','language'), max( $paged, $page ) ); cps_show_title() ?>
</title>
<?php $options = get_option('cardealer_theme_options'); $theme_color = $options['color']; if (!$theme_color) $theme_color = "style";?>
<link rel="stylesheet" id="theme-style" href="<?php bloginfo('template_url'); ?>/<?php echo $theme_color ?>.css"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/jquery.selectBox.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/includes/colorbox.css"/>
<!--CSS For Responsive-->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/foundationFramework/stylesheets/foundation.css">
<script src="<?php bloginfo('template_url'); ?>/foundationFramework/javascripts/modernizr.foundation.js"></script>
<script>
    var  DivElement;
</script>
<!--End CSS For Responsive-->

<!-- Generate Favicon Using 1.http://tools.dynamicdrive.com/favicon/ OR 2.http://www.favicon.cc/ -->

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<!--[if lt IE 7 ]> <body class="ie6" <?php body_class(); ?>> <![endif]-->

<!--[if IE 7 ]>    <body class="ie7" <?php body_class(); ?>> <![endif]-->

<!--[if IE 8 ]>    <body class="ie8" <?php body_class(); ?>> <![endif]-->

<!--[if IE 9 ]>    <body class="ie9" <?php body_class(); ?>> <![endif]-->

<!--[if (gt IE 9)|!(IE)]><!-->
<body <?php body_class(); ?>>
<!--<![endif]--> 
<!--Moblie Navigation Bar-->
<div class="row show-for-small whiteBack">
  <div class="large-12.columns">
    <nav class="top-bar">
      <ul class="title-area">
        <!-- Title Area -->
        <li class="name">
          <div> <a href="<?php bloginfo('url'); ?>"> <img class="logo" src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" /> </a> </div>
        </li>
        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar down-arrow"><a id="menuToggle" href="#"></a></li>
      </ul>
      <section class="top-bar-section"> 
        <!-- Left Nav Section -->
        <?php wp_nav_menu( array( 

							 'theme_location' => 'header-menu',

							 'container' => false,

							 'menu_class'=>'left' 

							 ) 

					  ); ?>
      </section>
    </nav>
  </div>
</div>
<!--End Moblie Navigation Bar-->

<div class="<?php echo is_front_page()?"header-wrapper-home":"header-wrapper";?> ">
  <div class="<?php echo is_front_page()?"header-home":"header";?>"> <a class="hide-for-small" href="<?php bloginfo('url'); ?>"> <img class="logo" src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" /> </a>
    <div class="nav-panel hide-for-small">
      <?php wp_nav_menu( array( 

							 'theme_location' => 'header-menu',

							 'container' => false,

							 'menu_class'=>'main-nav' 

							 ) 

					  ); ?>
    </div><div class="clear"></div>
    <?php if ( is_front_page() ) { require_once( AUTODEALER_INCLUDES.'slider.php'); } ?>
  </div>
  <!--end of header div--> 
  
</div>
