<?php
    $latest = new WP_Query( (
        array(
            'post_type' => 'post',
            'posts_per_page' => -1
        )
    ) );
?>

<?php if( $latest->have_posts() ): ?>

<section>
    <div class="container-fluid mb-5 p-0">
        <div id="jsPostCarousel" class="post-carousel">

            <?php while( $latest->have_posts() ):  $latest->the_post(); ?>
            <a class="d-block" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="post-carousel-item">
                    <figure class="bg-image full-wrap bg-gray3" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>);"></figure>
                    <div class="post-carousel-item__content">
                        <h3 class="post-carousel-item__title"><?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></h3>
                    </div>
                </div>
            </a>
            <?php endwhile; ?>

        </div>
    </div>
</section>

<?php endif;  ?>
