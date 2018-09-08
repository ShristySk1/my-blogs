<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header(); ?>

<!-- page title -->
<div class="sub-nav hidden-xs hidden-sm hidden-md">
    <div class="container">
        <div class="row">
        	<?php
			$class = 'col-xs-12 col-sm-12';
			?>
			<div class="<?php echo esc_attr( $class ); ?>">
            	<span class="sub-nav-span"><?php woocommerce_breadcrumb(); ?></span>
            </div>
        </div>
    </div>
</div>
<!--/ page title -->

<?php while ( have_posts() ) : the_post(); ?>
	<?php
		wc_get_template_part( 'content', 'single-product' );	
	?>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
