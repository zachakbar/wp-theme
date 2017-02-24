<!doctype html>
<html lang="en">
<head>
<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

<meta charset="utf-8" />

<meta name="description" content="" />
<meta name="keywords" content="">
<meta name="author" content="">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>favicon.ico">

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>

</head>

<?php 
global $wp_query;
$post_id = $wp_query->post->ID;
$post = get_post( $post_id );
$slug = $post->post_name;
?>
<body id="<?php echo $slug; ?>" <?php body_class(); ?>>

<div id="<?php if ($template_name) { echo 'template_' . $template; } ; ?>" class="container">
	<header role="banner">
		<div class="wrap">
			<div class="sm_12">
			
				<a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
				
				<a href="#menu" id="nav_btn">
					<div id="nav_icon">
						<span></span>
						<span></span>
						<span></span>
					</div>
					Menu
				</a>
				<nav id="menu" role="navigation">
					<?php wp_nav_menu(
					array(
						'theme_location'  => 'main-menu',
						'container_class' => '',
						'container_id'    => 'main_menu',
						'menu_class'      => '',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul>%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
						)
					); ?>
	
				</nav>
				
			</div>
		</div>
	</header>