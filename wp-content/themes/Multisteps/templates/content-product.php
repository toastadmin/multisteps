<a href="<?php the_permalink(); ?>">
    <div <?php post_class('product-item'); ?>>
        <?php if ( has_post_thumbnail() ): ?>
        <div class="product-item__image">
            <figure class="bg-image full-wrap" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>);"></figure>
        </div>
        <?php endif; ?>
        <h2 class="product-item__title"><?php the_title(); ?></h2>
    </div>
</a>
