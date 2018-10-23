<?php
/**
 * Template Name: Page - Process
 */
?>


<?php get_template_part('templates/section', 'hero'); ?>
<?php get_template_part('templates/section', 'intro'); ?>

<?php if($processes_section = get_field('processes_section')): ?>
<section class="bg-blue section">
    <div class="container-fluid">

        <?php if($processes = $processes_section['processes']): ?>
        <div class="row">

            <?php foreach($processes as $process): ?>
                <div class="col-lg-4">
                    <div class="process-item d-flex align-items-center">
                        <div class="process-item__icon d-flex align-items-center">
                            <img src="<?php echo $process['icon']['sizes']['thumbnail']; ?>" alt="" class="img-fluid mx-auto">
                        </div>
                        <div class="process-item__copy col d-flex align-items-center">
                            <div>
                                <h3 class="process-item__title"><?php echo $process['title']; ?></h3>
                                <div class="process-item__description">
                                    <?php echo $process['description']; ?>
                                </div>
                            </div>
                        </div>
                    </div> <!--/ .process-item -->
                </div>
            <?php endforeach; ?>

        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php if($innovation_section = get_field('innovation_section')): ?>
<section class="section">
    <div class="container-fluid text-center">
        <?php if($innovation_section['section_title']): ?>
            <h2 class="mb-5"><?php echo $innovation_section['section_title']; ?></h2>
        <?php endif; ?>

        <?php if($innovation_section['section_content']): ?>
        <div>
            <?php echo $innovation_section['section_content']; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php if(get_field('recent_posts_section')['show_recent_posts'] === 'yes'): ?>
    <?php get_template_part('templates/section', 'recentposts'); ?>
<?php endif; ?>

<?php if(get_field('testimonials_section')['show_testimonials'] === 'yes'): ?>
    <?php get_template_part('templates/section', 'testimonials'); ?>
<?php endif; ?>

