<?php
/**
 * Template Name: Page - Careers
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/section', 'hero'); ?>

    <?php if($available_position_section = get_field('available_position_section')): ?>
    <section class="section">
        <div class="container-fluid">
            <?php if($available_position_section['section_title']): ?>
                <h2 class="text-center text-uppercase"><?php echo $available_position_section['section_title']; ?></h2>
            <?php endif; ?>

            <?php if($available_positions = $available_position_section['available_positions']): ?>
            <div id="jsPositionsCarousel" class="positions-carousel  mb-5">
                <?php foreach($available_positions as $available_position): ?>
                <div>
                    <div class="position-item">
                        <figure class="bg-image full-wrap bg-dark"></figure>
                        <div class="position-item__content text-white text-center">
                            <h3 class="position-item__title"><?php echo $available_position['position_title']; ?></h3>
                            <h4 class="position-item__position"><?php echo $available_position['term_contract']; ?></h4>
                            <div class="p-3">
                                <?php echo $available_position['position_short_description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if($application_form_section = get_field('application_form_section')): ?>
    <section class="section pt-0">
        <div class="container-fluid">
            <?php if($application_form_section['section_title']): ?>
                <h2 class="text-center  mb-5"><?php echo $application_form_section['section_title']; ?></h2>
            <?php endif; ?>

            <?php if($application_form_section['application_form_shortcode']): ?>
            <div class="application-form">
                <?php echo do_shortcode($application_form_section['application_form_shortcode']); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

<?php endwhile; ?>
