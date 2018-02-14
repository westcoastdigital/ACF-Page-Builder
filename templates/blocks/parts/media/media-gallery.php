<?php 

	$image_ids = get_sub_field('gallery', false, false);

	/**** EDITED BY JON TO LOAD CUSTOM GALLERY RATHER THAN DEFAULT WORDPRESS */

	echo '<div class="masonry" data-columns>';
		foreach ( $image_ids as $image ) {
			$thumbnail = wp_get_attachment_image_src( $image, 'medium_large' );
			$modal = wp_get_attachment_image_src( $image, 'large' );
			echo '<a class="item modaal hover" href="' . $modal[0] . '" class="modaal"><img class="image" src="' . $thumbnail[0] . '" /></a>';
		}
	echo '</div>';

	/**** END JONS CHANGES ****/

	// $shortcode = '[gallery ids="' . implode(',', $image_ids) . '"]';

	// echo do_shortcode( $shortcode );

?>