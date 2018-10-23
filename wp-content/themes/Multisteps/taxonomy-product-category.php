<?php use Roots\Sage\Titles; ?>

<?php $term = 'product-category'; ?>
<?php $term_id = get_queried_object()->term_id; ?>
<?php get_template_part('templates/section', 'hero'); ?>

<div class="product-category-header d-flex align-items-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 d-flex align-items-center">

                <?php $product_category_name = get_field('product_category_name_override', 'term_' . $term_id) ?>
                <?php if($product_category_name): ?>
                    <h1 class="product-category-title"><?php echo $product_category_name; ?></h1>
                <?php else: ?>
                    <h1 class="product-category-title"><?php echo single_term_title(); ?></h1>
                <?php endif; ?>
            </div>
            <div class="col-6">
                <div class="d-flex align-items-center h-100 pl-2 pl-lg-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4 text-center">
                            <?php $product_category_icons = get_field('product_category_icons', 'term_' . $term_id) ?>
                            <img src="<?php echo $product_category_icons['brown_icon']['sizes']['thumbnail']; ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-8">
                            <div class="product-category-description pl-2 pl-lg-4"><?php echo term_description(); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-category-filter">
    <div class="container-fluid">

        <?php $product_categories = get_terms($term, array(
            'hide_empty' => false,
        )); ?>

        <div class="category-filters">
            <?php foreach($product_categories as $product_category): ?>
                <?php $product_category_icons = get_field('product_category_icons', 'term_' . $product_category->term_id) ?>

                <div class="category-filter">
                    <a href="<?php echo get_term_link($product_category); ?>" class="category-filter__link <?php echo ($term_id === $product_category->term_id) ? 'active' : ''; ?>">
                        <img src="<?php echo $product_category_icons['white_icon']['sizes']['thumbnail']; ?>" alt="" class="img-fluid">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="products-category-grid">
    <div class="container-fluid">
        <?php if( have_posts() ): ?>
            <div class="row">
                <?php while( have_posts() ):  the_post(); ?>
                    <div class="col-6 col-lg-4">
                        <?php get_template_part('templates/content-product'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <div class="text-center my-5">
                <div class="alert alert-warning"><?php _e('Sorry, but no product exist on this category.', 'sage'); ?></div>
            </div>
        <?php endif; ?>
    </div>
</div>



<?php get_template_part('templates/section', 'getintouch'); ?>
