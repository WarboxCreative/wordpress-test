<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Warbox
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'warbox' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) {
			$kses = array( 'a' => [ 'href' => [] ] );
			printf(
				/* translators: 1: Link to WP admin new post page. */
				'<p>' . wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'warbox' ), $kses ) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);
		} elseif ( is_search() ) {
			printf(
				'<p>%s<p>',
				esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'warbox' )
			);
			get_search_form();
		} else {
			printf(
				'<p>%s<p>',
				esc_html__( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'warbox' )
			);
			get_search_form();
		}
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
