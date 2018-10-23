<?php
/**
 * Template Name: Page - Location
 */
?>

<?php get_template_part('templates/section', 'hero'); ?>
<?php get_template_part('templates/section', 'intro'); ?>

<?php if($map_section = get_field('map_section')): ?>

    <section class="section bg-purple">
        <div class="container-fluid container-wide py-5">
            <div class="location-map">
                <figure class="bg-image full-wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/earth-map.png);"></figure>
                <?php if($map_section['usa_location']): ?>
                <div class="map-item map-item_usa">
                    <div class="map-item__inner d-flex align-items-center text-center">
                        <p class="map-item__copy"><?php echo $map_section['usa_location']; ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($map_section['australia_location']): ?>
                <div class="map-item map-item_australia">
                    <div class="map-item__inner d-flex align-items-center text-center">
                        <p class="map-item__copy"><?php echo $map_section['australia_location']; ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($map_section['hong_kong_location']): ?>
                <div class="map-item map-item_hongkong">
                    <div class="map-item__inner d-flex align-items-center text-center">
                        <p class="map-item__copy"><?php echo $map_section['hong_kong_location']; ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($map_section['china_location']): ?>
                <div class="map-item map-item_china bg-red">
                    <div class="map-item__inner d-flex align-items-center text-center">
                        <p class="map-item__copy"><?php echo $map_section['china_location']; ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <div class="location-map__instruction"><span class="d-block d-lg-none">Tap on location</span> <span class="d-none d-lg-block">Hover on Location</span></div>
            </div>
        </div>
    </section>

<!--     <div id="gmap" class="gmap" style="height: 800px; width: 100%;"></div>
    <div id="location-details"></div> -->
<?php endif; ?>

<?php if($carousel_section = get_field('carousel_section')): ?>
<section>
    <div class="container-fluid container-wide px-0 px-lg-3 py-0 py-lg-5 my-lg-5">

    <?php if($gallery_carousel = $carousel_section['gallery_carousel']): ?>
        <div id="jsCarousel" class="carousel">
            <?php foreach($gallery_carousel as $carousel_item): ?>
            <div class="carousel__img">
                <figure class="bg-image full-wrap mb-0" style="background-image: url(<?php echo $carousel_item['sizes']['full-screen']; ?>);"></figure>
            </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    </div>
</section>
<?php endif; ?>

<?php get_template_part('templates/section', 'getintouch'); ?>
