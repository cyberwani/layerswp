<?php /*
	Template Name: Page Builder
*/
get_header();
global $post;

$mods = get_theme_mods();

// Dynamic Sidebar for this page
dynamic_sidebar( 'obox-hatch-builder-' . $post->post_name );

echo '<!-- <pre>' . print_r( $mods , true ) . '</pre> -->';

get_footer();