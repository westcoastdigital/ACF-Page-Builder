<?php 

  $accordion_title = get_sub_field('title'); 

?>
<div class="block-addon accordion-wrapper">
    <?php $i = 0; while ( have_rows('collapsibles') ) : the_row(); ?>
        <div role="presentation" class="accordion-<?php fcb_the_block_id(get_sub_field('title')); ?>">
            <a href="#accordion-<?php echo $i++; ?>" class="accordion-link">
                <?php the_sub_field('title') ?>
            </a>
        </div>

        <div class="accordion-content">
          <article class="tab-content">
            <?php cfb_template('blocks/parts/collapsibles/collapsibles-content', get_row_layout()); ?>
          </article>
        </div>

      <?php endwhile; ?>
</div>