<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s','language'), max( $paged, $page ) ); cps_show_title() ?> </title>
		    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
			<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
			<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/jquery.selectBox.css"/>
			<!-- Generate Favicon Using 1.http://tools.dynamicdrive.com/favicon/ OR 2.http://www.favicon.cc/ -->
			<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<?php wp_head(); ?>
	
</head>
<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->
<div class="<?php echo is_front_page()?"header-wrapper-home":"header-wrapper";?> ">
	<div class="<?php echo is_front_page()?"header-home":"header";?>">	
		<a href="<?php bloginfo('url'); ?>">
			<img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" />
		</a>
			<div class="nav-panel">				
				<?php wp_nav_menu( array( 
							 'theme_location' => 'header-menu',
							 'container' => false,
							 'menu_class'=>'main-nav' 
							 ) 
					  ); ?>
			</div>
	</div><!--end of header div-->
</div>