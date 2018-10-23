<?php use Roots\Sage\Titles; ?>
<?php if($hero_style = get_field('hero_style')): ?>

    <?php if($hero_style === 'hero_full_screen_slider'): ?>
        <section class="hero hero_full hero_slider">
            <div class="hero-slider">
                <?php if($hero_full_screen_slider = get_field('hero_full_screen_slider')): ?>
                <?php echo do_shortcode($hero_full_screen_slider['hero_slider_shortcode']); ?>
                <?php endif; ?>
            </div>
        </section>
    <?php elseif($hero_style === 'hero_full_screen_banner'): ?>
        <section class="hero hero_full hero_banner">
            <div class="hero-banner h-100 d-flex flex-column justify-content-center">
                <?php if($hero_full_screen_banner = get_field('hero_full_screen_banner')): ?>
                    <figure class="bg-image full-wrap" style="background-image: url(<?php echo $hero_full_screen_banner['sizes']['full-screen']; ?>);"></figure>
                <?php endif; ?>
                <h1 class="hero-title"><?= Titles\title(); ?></h1>
            </div>
        </section>
    <?php elseif($hero_style === 'hero_fix_height_banner'): ?>
        <section class="hero hero_fix-height hero_banner">
            <div class="hero-banner d-flex flex-column justify-content-center">
                <?php if($hero_fix_height_banner = get_field('hero_fix_height_banner')): ?>
                    <figure class="bg-image full-wrap" style="background-image: url(<?php echo $hero_fix_height_banner['sizes']['full-screen']; ?>);"></figure>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

<?php endif; ?>

<?php if(is_tax('product-category') || is_singular('product')): ?>
    <section class="hero hero_fix-height hero_banner">
        <div class="hero-banner">
            <?php $term_id = get_queried_object()->term_id; ?>
            <?php if($product_category_banner_image = get_field('product_category_banner_image', 'term_' . $term_id)): ?>
                <figure class="bg-image full-wrap" style="background-image: url(<?php echo $product_category_banner_image['sizes']['full-screen']; ?>);"></figure>
            <?php elseif( is_singular('product') && has_post_thumbnail()): ?>
                <figure class="bg-image full-wrap" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full-screen'); ?>);"></figure>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
