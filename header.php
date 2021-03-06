<?php
/**
 * File that renders the theme Header
 *
 * @package Portum
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'sticky-header' ); ?>>
<div id="wrap">
	<?php get_template_part( 'template-parts/header/topbar' ); ?>
	<?php
		$header_class  = Portum::get_instance()->top_bar ? 'sticky--top-bar ' : '';
		$header_class .= get_theme_mod( 'portum_header_over_content', false ) ? 'header--over-content ' : '';
		$header_class .= get_theme_mod( 'portum_header_shadow', true ) ? '' : 'header--no-shadow ';
	?>

	<div id="header" class="<?php echo esc_attr( $header_class ); ?>">
		<!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div class="container">
			<div class="row">
				<?php
				get_template_part( 'template-parts/misc/logo' );
				get_template_part( 'template-parts/header/menu' );
				?>
			</div><!-- end .row -->
		</div><!-- end .container -->
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	</div>
