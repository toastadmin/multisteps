<?php
/**
 * Template Name: Page - Products
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/section', 'hero'); ?>

    <section>
        <div class="container-fluid">

            <div class="product-categories my-5">
                <?php $term = 'product-category'; ?>
                <?php $product_categories = get_terms($term, array(
                    'hide_empty' => false,
                )); ?>

                <?php foreach($product_categories as $product_category): ?>
                    <?php $product_category_name = get_field('product_category_name_override', 'term_' . $product_category->term_id) ?>
                    <?php $product_category_banner = get_field('product_category_banner_image', 'term_' . $product_category->term_id) ?>
                    <?php $product_category_link = get_term_link($product_category); ?>



                    <div class="product-category mb-4">
                        <a class="product-category__link bg-image" href="<?php echo $product_category_link; ?>" style="background-image: url(<?php echo $product_category_banner['sizes']['large']; ?>);">
                            <?php if($product_category_name): ?>
                                <h2 class="product-category__title"><?php echo $product_category_name; ?></h2>
                            <?php else: ?>
                                <h2 class="product-category__title"><?php echo $product_category->name; ?></h2>
                            <?php endif; ?>
                            <i class="fa fa-arrow-right text-white h3" aria-hidden="true"></i>
                        </a>
                    </div>

                <?php endforeach; ?>

            </div>

            <div class="text-center mb-5">
                <a href="#" class="btn btn-dark btn-large btn-rounded btn-wide">See All Products</a>
            </div>
        </div>
    </section>

    <?php get_template_part('templates/section', 'getintouch'); ?>
<?php endwhile; ?>
