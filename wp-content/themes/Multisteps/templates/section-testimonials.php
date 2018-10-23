<?php if($testimonials = get_field('testimonials', 'option')): ?>
<section class="section bg-white">
    <div class="container-fluid">

        <?php if($testimonial = $testimonials['testimonial']): ?>
        <div id="jsTestimonials" class="testimonials">

            <?php foreach($testimonial as $testi): ?>
            <div class="testimonial">
                <div class="testimonial__img rounded-circle">
                    <figure class="bg-image inner-wrap" style="background-image: url(<?php echo $testi['thumbnail']['sizes']['large']; ?>);"></figure>
                </div>
                <img class="img-fluid mb-3 mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/q-start-dark.png" alt="">
                <div class="testimonial__copy">
                    <p><?php echo $testi['copy']; ?></p>
                </div>
                <div class="testimonial__author">
                    - <?php echo $testi['author']; ?>
                </div>
            </div> <!--/ .testimonial -->
            <?php endforeach; ?>

        </div>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>
