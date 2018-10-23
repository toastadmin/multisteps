<?php
/**
 * Template Name: Page - Thank You
 */
?>

<?php while (have_posts()) : the_post(); ?>

    <section class="section section-thankyou bg-dark text-white d-flex align-items-center">
        <div class="container-fluid text-center">
            <p>Thank you for your enquiry, one of our staff members will contact you shortly and help you find the best solution for your produce. </p>
        </div>
    </section>

<?php endwhile; ?>
