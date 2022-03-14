<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body>
<?php get_template_part( 'global-templates/navbar' ); ?>

	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'loop-templates/content', 'home' );
	}

	get_template_part( 'global-templates/site-footer' );
	wp_footer();
	?>
</body>
</html>
