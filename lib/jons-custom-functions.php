<?php

/**
* Add parallax class if enabled
*/
add_filter( 'fcb_set_background_classes', 'parallax_block_classes' );
function parallax_block_classes( $classes ) {
    $parallax       = get_sub_field('parallax_effect');
    if( $parallax ) {
        $classes[]  = 'block-with-parallax';
    }
    return $classes;
}
/**
 * Add the background image as the parallax image src
 */
function parallax_img_src() {
    $data   = (get_sub_field('parallax_effect')) ? 'data-stellar-background-ratio="0.5"' : '';
    echo $data;
}
/**
* Add overlay class if enabled
*/
add_filter( 'fcb_set_background_classes', 'overlay_block_class' );
function overlay_block_class( $classes ) {
    $overlay    = get_sub_field('background_overlay');
    if( $overlay ) {
        $classes[]  = 'block-with-overlay';
    }
    return $classes;
}

function overlay_block_style() {
    $overlay        = get_sub_field('background_overlay');
    $colorchoice    = get_sub_field('background_color');
    $opacity        = ( get_sub_field('overlay_opacity') / 100 );
    $choosecolor    = get_sub_field('choose_color');
    $themecolor     = get_sub_field('theme_color');
    $block          = 'block-' . $GLOBALS['fcb_rows_count'];

    if ( $colorchoice == 'choose' ) {
        $color = hex2rgba($choosecolor, $opacity);
    } else {
        $color = hex2rgba($themecolor, $opacity);
    }
    $css = '<style>.' . $block . '.block-with-overlay:before{background:' . $color . ';}</style>';
    if ( $overlay ) {
        return $css;
    }
}
