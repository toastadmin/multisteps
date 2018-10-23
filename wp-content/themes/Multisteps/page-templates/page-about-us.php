<?php
/**
 * Template Name: Page - About Us
 */
?>

<?php get_template_part('templates/section', 'hero'); ?>

<?php if($about_intro_section = get_field('about_intro_section')): ?>
<section class="section about-section">
    <div class="container-fluid line-decor">
        <?php if($about_copy1 = $about_intro_section['about_copy1']): ?>
        <div class="about-content bg-dark text-white p-3 p-lg-5 mb-4">
            <?php if($about_copy1['title']): ?>
            <h4 class="about-content__title text-secondary mb-4"><?php echo $about_copy1['title']; ?></h4>
            <?php endif; ?>
            <?php if($about_copy1['copy']): ?>
            <div class="about-content__copy">
                <p><?php echo $about_copy1['copy']; ?></p>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if($about_image1 = $about_intro_section['about_image1']): ?>
        <div class="about-content__img about-content__img_1by1">
            <figure class="bg-image full-wrap" style="background-image: url(<?php echo $about_image1['sizes']['large']; ?>);"></figure>
        </div>
        <?php endif; ?>

        <?php if($about_copy2 = $about_intro_section['about_copy2']): ?>
        <div class="about-content about-content_alt1 bg-dark text-white p-3 p-lg-5 mb-5">
            <?php if($about_copy2['title']): ?>
            <h4 class="about-content__title text-secondary mb-4"><?php echo $about_copy2['title']; ?></h4>
            <?php endif; ?>
            <?php if($about_copy2['copy']): ?>
            <div class="about-content__copy">
                <p><?php echo $about_copy2['copy']; ?></p>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if($about_copy3 = $about_intro_section['about_copy3']): ?>
        <div class="about-content bg-dark text-white p-3 p-lg-5 mb-4">
            <?php if($about_copy3['title']): ?>
            <h4 class="about-content__title text-secondary mb-4"><?php echo $about_copy3['title']; ?></h4>
            <?php endif; ?>
            <?php if($about_copy3['copy']): ?>
            <div class="about-content__copy">
                <p><?php echo $about_copy3['copy']; ?></p>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if($about_image2 = $about_intro_section['about_image2']): ?>
        <div class="about-content__img">
            <figure class="bg-image full-wrap" style="background-image: url(<?php echo $about_image2['sizes']['large']; ?>);"></figure>
        </div>
        <?php endif; ?>

        <?php if($about_copy4 = $about_intro_section['about_copy4']): ?>
        <div class="about-content about-content_alt2 bg-dark text-white p-3 p-lg-5 mb-5">
            <?php if($about_copy4['title']): ?>
            <h4 class="about-content__title text-secondary mb-4"><?php echo $about_copy4['title']; ?></h4>
            <?php endif; ?>
            <?php if($about_copy4['copy']): ?>
            <div class="about-content__copy">
                <p><?php echo $about_copy4['copy']; ?></p>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if($about_copy5 = $about_intro_section['about_copy5']): ?>
        <div class="about-content bg-dark text-white p-3 p-lg-5 mb-4">
            <?php if($about_copy5['title']): ?>
            <h4 class="about-content__title text-secondary mb-4"><?php echo $about_copy5['title']; ?></h4>
            <?php endif; ?>
            <?php if($about_copy5['copy']): ?>
            <div class="about-content__copy">
                <p><?php echo $about_copy5['copy']; ?></p>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if($about_image3 = $about_intro_section['about_image3']): ?>
        <div class="about-content__img about-content__img_alt1 about-content__img_1by1">
            <figure class="bg-image full-wrap" style="background-image: url(<?php echo $about_image3['sizes']['large']; ?>);"></figure>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
