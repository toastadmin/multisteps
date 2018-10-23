<?php
/**
 * Template Name: Page - Register
 */
?>


<?php get_template_part('templates/section', 'hero'); ?>

<?php if($registration_form_section = get_field('registration_form_section')): ?>
<section class="section">
    <div class="container-fluid">
        <?php if($registration_form_section['section_title']): ?>
            <h2 class="mb-5 text-center"><?php echo $registration_form_section['section_title']; ?></h2>
        <?php endif; ?>

        <?php if($registration_form_section['section_title']): ?>
            <div>
                <?php echo $registration_form_section['section_content']; ?>
            </div>
        <?php endif; ?>

        <?php if($registration_form_section['registration_form_shortcode']): ?>
        <div class="enquire-form">
            <?php echo do_shortcode($registration_form_section['registration_form_shortcode']); ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
