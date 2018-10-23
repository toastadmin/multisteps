<?php get_template_part('templates/section', 'hero'); ?>

<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('single-product'); ?>>

        <div class="single-product__wrap">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6">
                        <header class="single-product-header">
                            <h1 class="single-product-title">REF NO: <br><?php the_title(); ?></h1>
                            <?php if(get_field('suitable_for')): ?>
                                <div class="suitable-for"><?php the_field('suitable_for'); ?></div>
                            <?php endif; ?>
                        </header>
                    </div>
                    <div class="col-6">
                        <?php if($also_suitable_for = get_field('also_suitable_for')): ?>
                            <div class="also-suitable-for pl-lg-4">
                                <h3 class="also-suitable-for__label"><?php echo $also_suitable_for['label']; ?></h3>
                                <div class="also-suitable-for__desc"><?php echo $also_suitable_for['description']; ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-product__wrap m-no-border mb-5">
            <div class="container-fluid">
                <?php if($product_details = get_field('product_details')): ?>
                <div class="product-details row">
                    <div class="col-lg-6">
                        <!--
                        <div class="product-detail d-flex align-items-center">
                            <div>Cartons Per Pallet: </div>
                            <div class="col text-center"><span><?php echo $product_details['cartons_per_pallet']; ?></span></div>
                        </div>
                        -->
                        <div class="product-detail d-flex align-items-center">
                            <div>Pieces Per Carton: </div>
                            <div class="col text-center"><span><?php echo $product_details['pieces_per_carton']; ?></span></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-detail d-flex align-items-center pl-lg-4">
                            <div>Dimension: </div>
                            <div class="col text-center"><span><?php echo $product_details['package_dimensions']; ?></span></div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="product-features mt-5 py-lg-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-feature text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-feature-icon1.png" alt="" class="product-feature__img img-fluid">
                        <h3 class="product-feature__title">Shelf Life</h3>
                        <div class="product-feature__description">
                            Once sealed, our oxygen-free trays assist extended shelf life keeping your produce on shelf and standing out
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-feature text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-feature-icon2.png" alt="" class="product-feature__img img-fluid">
                        <h3 class="product-feature__title">Compatibility</h3>
                        <div class="product-feature__description">
                            Multisteps’ technology is compatible with major packing machinery offering efficiencies and cost savings
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-feature text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-feature-icon3.png" alt="" class="product-feature__img img-fluid">
                        <h3 class="product-feature__title">Design</h3>
                        <div class="product-feature__description">
                            High quality design retains shape and form after sealing giving produce premium presentation
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product-feature text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-feature-icon4.png" alt="" class="product-feature__img img-fluid">
                        <h3 class="product-feature__title">Clarity</h3>
                        <div class="product-feature__description">
                            Excellent clarity achieved from quality materials to enhance the look of the product
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</article>
<?php endwhile; ?>

<?php get_template_part('templates/section', 'getintouch'); ?>
