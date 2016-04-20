<?php



    	// Home Page Right Sidebar

	register_sidebar(array('name'=>'Home Page Right Sidebar',

		'before_widget' => "<div class='right-block'><div class='right-white-block'><ul class='side-nav'>",

		'after_widget' => '</ul></div></div>',

		'before_title' => '<h3>',

		'after_title' => '</h3>'

	));



		//	Welcome Widget

	register_sidebar(array('name'=>'Welcome Widget',

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '',

		'after_title' => ''

	));	

		

		// Car Listing Left Sidebar

	register_sidebar(array('name'=>'Car Listing Left Sidebar',

		'before_widget' => "<div class='right-block'><div class='right-white-block'><ul class='side-nav'>",

		'after_widget' => '</ul></div></div>',

		'before_title' => '<h3>',

		'after_title' => '</h3>'

	));

		// Location: Common Right Sidebar

	register_sidebar(array('name'=>'Common Right Sidebar',

		'before_widget' => "<div class='right-block innerSearhPopup'><div class='right-white-block'><ul class='side-nav'>",

		'after_widget' => '</ul></div></div>',

		'before_title' => '<h3>',

		'after_title' => '</h3>'

	));	

		// Location: Common Left Sidebar

	register_sidebar(array('name'=>'Common Left Sidebar',

		'before_widget' => "<div class='right-block'><div class='right-white-block'><ul class='side-nav'>",

		'after_widget' => '</ul></div></div>',

		'before_title' => '<h3>',

		'after_title' => '</h3>'

	));

	// Location: Form Sidebar

	register_sidebar(array('name'=>'Form Sidebar',

		'before_widget' => "<div class='right-block'><div class='right-white-block'><ul class='side-nav'>",

		'after_widget' => '</ul></div></div>',

		'before_title' => '<h3>',

		'after_title' => '</h3>'

	));

	// Location: Footer

	register_sidebar(array('name'=>'Footer ',

		'before_widget' => "",

		'after_widget' => '',

		'before_title' => '',

		'after_title' => ''

	));
	
	// Similar Cars
	register_sidebar(array('name'=>'Similar Cars',

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '',

		'after_title' => ''

	));

?>