<?php
/**
 * Template Name: Right Sidebar Layout
 * Template Post Type: post, page, forum, topic, llms_membership, course, lesson
 * This template can be used to override the default template and sidebar setup
 *
 * @package centotheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'centotheme_container_type' );

// Cento Global Part #centocode
if( class_exists( 'Kirki' ) ) {
	$rightoption = Kirki::get_option( 'cento_kirki_id' , 'cento_global_right_sidebar' );
}

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div
				class="<?php if ( is_active_sidebar( 'right-sidebar' ) || ! empty($rightoption) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area"
				id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
