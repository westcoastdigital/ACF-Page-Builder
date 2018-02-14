<?php 

$posts = get_sub_field('featured_content');

if( $posts ): ?>
<div class="block-addon block-featured-content">
    <ul class="featured-content-list">
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <li>
            <?php //*** JON EDITED TO WRAP IN CARD DIV ***// ?>
            <div class="card">
                <?php if ( has_post_thumbnail() ): ?>
                    <figure>
                        <?php the_post_thumbnail('medium'); ?>
                    </figure>
                <?php endif; ?>
                <header><h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></header>
                <article><?php the_excerpt(); ?></article>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
