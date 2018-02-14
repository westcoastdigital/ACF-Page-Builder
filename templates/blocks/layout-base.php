<?php 
/**** EDITED BY JON TO LOAD CUSTOM FIELDS 
 * Added the parallax_img_src() which loads the background image for parallax
 * Added data-parallax="scroll" to load the scroll function
 * Added overlay_block_style() to enable overlay functionality
*/

?>
<?php echo overlay_block_style(); ?>
<section class="<?php fcb_block_wrapper_classes(); ?>" data-parallax="scroll" <?php parallax_img_src(); ?> style="<?php fcb_block_wrapper_styles(); ?>">
    <div class="<?php fcb_block_classes(); ?>">
        <div class="block-inner">

            <?php cfb_template('blocks/parts/block-title', get_row_layout()); ?>
            <?php cfb_template('blocks/layout', get_row_layout()); ?>

        </div> <!-- /block-inner -->
    </div> <!-- /block -->
</section> <!-- /block-wrap -->
