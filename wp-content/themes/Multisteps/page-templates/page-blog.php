<?php
/**
 * Template Name: Page - Blog
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/section', 'hero'); ?>

    <section class="section">
        <div class="container-fluid">

            <nav class="blog-nav">
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link">Latest News</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Awards</a></li>
                    <li class="nav-item"><a href="/links" class="nav-link">Links</a></li>
                </ul>
            </nav>

            <div class="blog-posts my-5">


                <?php
                    $latest = new WP_Query( (
                        array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        )
                    ) );
                ?>

                <?php if( $latest->have_posts() ): ?>
                    <?php $counter = 0; ?>
                    <?php while( $latest->have_posts() ):  $latest->the_post(); ?>

                        <?php if($counter % 2 === 0): ?>
                            <article <?php post_class('entry'); ?> title="<?php the_title(); ?>">
                                <div class="entry-image">
                                    <figure class="bg-image full-wrap" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>);"></figure>
                                </div>

                                <div class="entry-content p-3 p-lg-5">
                                    <header class="entry-header">
                                        <h2 class="entry-title" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 4, '...' ); ?></h2>
                                    </header>
                                    <div class="entry-summary">
                                        <?php echo wp_trim_words( get_the_content(), 15, '...' ); ?>
                                    </div>
                                    <footer class="entry-footer">
                                        <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                                    </footer>
                                </div>
                            </article>
                        <?php else: ?>
                            <article <?php post_class('entry entry_alt'); ?> title="<?php the_title(); ?>">
                                <div class="entry-image">
                                    <figure class="bg-image full-wrap" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>);"></figure>
                                </div>

                                <div class="entry-content p-3 p-lg-5">
                                    <header class="entry-header">
                                        <h2 class="entry-title" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 4, '...' ); ?></h2>
                                    </header>
                                    <div class="entry-summary">
                                        <?php echo wp_trim_words( get_the_content(), 15, '...' ); ?>
                                    </div>
                                    <footer class="entry-footer">
                                        <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                                    </footer>
                                </div>
                            </article>
                        <?php endif; ?>

                    <?php $counter++; endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <?php get_template_part('templates/section', 'postcarousel'); ?>
    <?php get_template_part('templates/section', 'getintouch'); ?>
<?php endwhile; ?>
