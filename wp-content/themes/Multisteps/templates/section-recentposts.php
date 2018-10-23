<?php
    $latest = new WP_Query( (
        array(
            'post_type' => 'post',
            'posts_per_page' => 3
        )
    ) );
?>

<?php if( $latest->have_posts() ): ?>
<section>
    <div id="jsPostSlider" class="recent-posts">
        <?php $counter = 0; ?>
        <?php while( $latest->have_posts() ):  $latest->the_post(); ?>

            <?php if($counter % 2 === 0): ?>

                <a class="recent-post" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div class="recent-post__img">
                        <figure class="bg-image full-wrap bg-gray3" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>);"></figure>
                    </div>
                    <div class="recent-post__content">
                        <div class="inner-wrap bg-dark text-white d-flex align-items-center">
                            <div class="p-3 p-lg-5">
                                <h3 class="recent-post__title"><?php echo wp_trim_words( get_the_title(), 4, '...' ); ?></h3>
                                <div class="recent-post__summary">
                                    <?php echo wp_trim_words( get_the_content(), 25, '...' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a> <!--/ .recent-post -->

            <?php else: ?>

                <a class="recent-post d-flex flex-column" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div class="recent-post__img order-md-2">
                        <figure class="bg-image full-wrap bg-gray3" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>);"></figure>
                    </div>
                    <div class="recent-post__content order-md-1">
                        <div class="inner-wrap bg-dark text-white d-flex align-items-center">
                            <div class="p-3 p-lg-5">
                                <h3 class="recent-post__title"><?php echo wp_trim_words( get_the_title(), 4, '...' ); ?></h3>
                                <div class="recent-post__summary">
                                    <?php echo wp_trim_words( get_the_content(), 25, '...' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a> <!--/ .recent-post -->

            <?php endif; ?>
        <?php $counter++; endwhile; ?>
        <?php wp_reset_postdata();  ?>


    </div>
    <div class="container-fluid text-center readblog-cta">
        <a href="<?php echo home_url(); ?>/news-blog" class="btn btn-secondary btn-large btn-rounded">Read Blog</a>
    </div>
</section>
<?php endif;  ?>
