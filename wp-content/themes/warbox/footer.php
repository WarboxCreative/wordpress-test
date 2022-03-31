<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Warbox
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container-fluid bg-black c-footer" id="contact">
	<div class="container">
		<div class="row">

		</div>
	</div>
</div><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<?php // phpcs:ignore ?>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
<script>
	var scroll = new SmoothScroll( 'a[href*="#"]' );
</script>
</body>
</html>
