<?php
/**
 * Template Name: Page - Home
 */
?>


<?php get_template_part('templates/section', 'hero'); ?>
<?php get_template_part('templates/section', 'intro'); ?>

<?php if($products_section = get_field('products_section')): ?>
<section>
    <div class="container-fluid">
        <div class="col-lg-10 offset-lg-2">
            <h3><?php echo $products_section['content']['title']; ?></h3>
            <?php echo $products_section['content']['copy']; ?>
        </div>

        <?php if($product_categories = $products_section['product_categories']): ?>
        <div class="product-categories row no-gutters justify-content-center my-5">
            <?php foreach($product_categories as $product_category): ?>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="product-category">
                    <a class="product-category__link bg-image" href="<?php echo get_category_link($product_category['category_link']); ?>" style="background-image: url(<?php echo $product_category['category_thumbnail']['sizes']['large']; ?>);">
                        <h3 class="product-category__title"><?php echo  $product_category['category_name']; ?></h3>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if($all_products_link = $products_section['all_products_link']): ?>
        <div class="text-center mb-5">
            <a href="<?php echo $all_products_link['url']; ?>" class="btn btn-dark btn-large btn-rounded btn-wide"><?php echo $all_products_link['title']; ?></a>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php get_template_part('templates/section', 'getintouch'); ?>

<?php if($make_a_difference_section = get_field('make_a_difference_section')): ?>
<section>
    <div class="section-image with-arrow-down d-flex align-items-center">
        <figure class="bg-image full-wrap mb-0" style="background-image: url(<?php echo $make_a_difference_section['section_background']['sizes']['full-screen']; ?>"></figure>
        <div class="section-image__copy w-100 text-center">
            <?php if($make_a_difference_section['section_title']): ?>
            <h2 class="section-image__title"><?php echo $make_a_difference_section['section_title']; ?></h2>
            <?php endif; ?>
        </div>
    </div>
    <div class="container-fluid">
        <?php echo $make_a_difference_section['section_copy']; ?>
    </div>
</section>
<?php endif; ?>

<?php if(get_field('recent_posts_section')['show_recent_posts'] === 'yes'): ?>
    <?php get_template_part('templates/section', 'recentposts'); ?>
<?php endif; ?>

<?php if(get_field('testimonials_section')['show_testimonials'] === 'yes'): ?>
    <?php get_template_part('templates/section', 'testimonials'); ?>
<?php endif; ?>
