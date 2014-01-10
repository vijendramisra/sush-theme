<?php
/**
 * @package WordPress
 * @subpackage Sush Mobile
 */
?>
<html>
<head>
	<title><?php wp_title(''); ?></title>
	<!-- HEADER -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.css">

	<!-- Custom CSS -->
	
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="css/animate.css">	 -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">	
	<!-- <link rel="stylesheet" href="css/global.css">	 -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body>
	<?php
		if ( is_home() ) {
		    // This is a homepage
		    echo "<div class='home'></div>";
		}
	?>
	
	<!-- NAVIGATION HEADER -->
	<!-- NAV MENU -->
	<!-- ####################### -->	

	<nav class="navbar navbar-inverse navbar-fixed-top custom_nav" role="navigation">
		<div class="container">			
	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle custom_toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand brand_logo" href="<?php echo get_home_url(); ?>">SUSHMOBILE</a>
	  </div>

	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	    <?php wp_nav_menu( array('menu' => 'Header Menu','container' => '','menu_class' => 'nav navbar-nav navbar-right','items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s<li class="btn-send hidden-xs"><a class="nav_text" href="#footer"><span class="icon_send glyphicon glyphicon-send"></span></a></li></ul>' )); ?>  	 

	    
	  </div><!-- /.navbar-collapse -->

	  </div>
	</nav>