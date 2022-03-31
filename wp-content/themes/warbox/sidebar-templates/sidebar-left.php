<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Warbox
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'left-sidebar' ) ) {
	return;
}
?>

<div class="col-md-4 widget-area" id="left-sidebar">
	<?php dynamic_sidebar( 'left-sidebar' ); ?>
</div><!-- #left-sidebar -->
