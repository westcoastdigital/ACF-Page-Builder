<?php
    $overlay        = get_sub_field('background_overlay');
    $colorchoice    = get_sub_field('background_color');
    $opacity        = ( get_sub_field('overlay_opacity') / 100 );
    $choosecolor    = get_sub_field('choose_color');
    $themecolor     = get_sub_field('theme_color');
    if ( $colorchoice == 'choose' ) {
        $opacity = hex2rgba($choosecolor, $opacity);
    } else {
        $opaity = hex2rgba($themecolor, $opacity);
    }
?>

<?php if( have_rows('slides') ): ?>

    <div class="slick">

        <?php while ( have_rows('slides') ) : the_row(); ?>

            <div class="item" style="<?php fcb_block_wrapper_styles(); ?>">

                <div class="slide-container">
                    <?php cfb_template('blocks/parts/block-media', get_row_layout()); ?>
                    <div class="content">
                        <h3 class="slide-caption">
                            <?php the_sub_field('title'); ?>
                        </h3>
                        <?php cfb_template('blocks/parts/block-content', get_row_layout()); ?>
                    </div>
                </div>

            </div>

        <?php endwhile; ?>
          
    </div>

    <div class="slick-navigation"></div>

<?php endif; ?>