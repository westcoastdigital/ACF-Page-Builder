<div class="block-addon tabs-wrapper">
    <ul role="tablist" class="nav nav-tabs">
        <?php $i = 0; while ( have_rows('tabs') ) : the_row(); ?>
            <li role="presentation" class="tab-<?php fcb_the_block_id(get_sub_field('title')); ?>">
                 <a href="#tab-<?php echo $i++; ?>">
                    <?php the_sub_field('title') ?>
                </a>
            </li>

        <?php endwhile; ?>
    </ul>

    <?php $i = 0; while ( have_rows('tabs') ) : the_row(); ?>
    <div class="<?php fcb_tab_classes(); ?>" id="tab-<?php echo $i++; ?>">
        <article class="tab-content">
		    <?php cfb_template('blocks/parts/tabs/tab-title', get_row_layout()); ?>
			<?php cfb_template('blocks/parts/block-content', get_row_layout()); ?>
		</article>
		<?php cfb_template('blocks/parts/block-media', get_row_layout()); ?>
    </div>
    <?php endwhile; ?>
</div>