<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Warbox
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="wrapper" id="error-404-wrapper">
	<div class="container" id="content" tabindex="-1">
		<div class="col-md-12 content-area" id="primary">
			<main class="site-main" id="main">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'warbox' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p>Here are some helpful links:</p>
						<ul>
							<li><a href="/">Home</a></li>
						</ul>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->
</div><!-- #error-404-wrapper -->

<?php get_footer(); ?>
