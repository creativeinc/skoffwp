<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->

<html <?php language_attributes(); ?>>
<!--<![endif]-->

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
	
		<!-- Main Styling -->
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />
		<!-- Fix IE -->
		<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/IE.css" />
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 7 ]> 
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/IE6.css" />
		<![endif]-->	
		
		
		<?php wp_head(); ?>
			
	</head>

	<body <?php body_class(); ?>>
	


<div class="full-width">
  <header class="wrap">
    <nav class="row">
      <div class="content">
        <div class="col-3">
          <ul>
            <li><a href="<?php site_url(); ?>/">Home
            Page</a> <span>Start Again</span></li>

            <li><a href="<?php site_url(); ?>/our-pies/">Our Pies</a> <span>Tasty Bits</span></li>
          </ul>
        </div>

        <div class="logo col-3"></div>

        <div class="col-3">
          <ul>
            <li><a href="<?php site_url(); ?>/updates/">Updates</a> <span>News & Recipes</span></li>

            <li><a href="<?php site_url(); ?>/contact/">Contact</a> <span>Get a Pack</span></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</div>

	<div class="zigzag-wrap">
	    <div class="zigzag"></div>
	</div>


