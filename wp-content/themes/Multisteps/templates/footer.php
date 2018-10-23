<footer class="site-footer mt-1">
    <div class="back-to-top">
        <div class="container-fluid">
            <a href="#top"><span class="sr-only">Back To Top</span></a>
        </div>
    </div>

    <div class="footer-content pb-5 pb-lg-0">
        <div class="container-fluid container-full">
            <div class="row">
                <?php if($newsletter_subscribe_form = get_field('newsletter_subscribe_form', 'option')): ?>
                <div class="footer-content_col col-sm d-none d-lg-block">
                    <h3 class="footer-title mb-3">Multisteps Newsletter</h3>
                    <?php echo do_shortcode($newsletter_subscribe_form['form_shortcode']); ?>
                </div>
                <?php endif; ?>

                <?php if($contact_info = get_field('contact_info', 'option')): ?>
                <div class="footer-content_col col-sm footer-content_mid text-lg-center d-flex flex-column">
                    <h3 class="footer-title mb-4">Contact</h3>
                    <div class="contact-links mb-5 mb-lg-0">
                        <?php if($contact_info['contact_number']): ?>
                        <p class="mb-2"><a href="tel:<?php echo $contact_info['contact_number']; ?>"><?php echo $contact_info['contact_number']; ?></a></p>
                        <?php endif; ?>
                        <?php if($contact_info['contact_email']): ?>
                        <p class="mb-2"><a href="mailto:<?php echo $contact_info['contact_email']; ?>"><?php echo $contact_info['contact_email']; ?></a></p>
                        <?php endif; ?>
                    </div>

                    <?php if($social_media = $contact_info['social_media']): ?>
                    <ul class="social-media list-inline mb-3">
                        <li class="list-inline-item"><a href="<?php echo $social_media['facebook_link']; ?>"><span class="sr-only">Facebook</span><i class="fa fa-facebook px-1" aria-hidden="true" style="font-size: 2rem;"></i></a></li>
                        <li class="list-inline-item"><a href="<?php echo $social_media['linkedin_link']; ?>"><span class="sr-only">LinkedIn</span><i class="fa fa-linkedin px-1" aria-hidden="true" style="font-size: 2rem;"></i></a></li>
                        <li class="list-inline-item"><a href="<?php echo $social_media['twitter_link']; ?>"><span class="sr-only">Twitter</span><i class="fa fa-twitter px-1" aria-hidden="true" style="font-size: 2rem;"></i></a></li>
                    </ul>
                    <?php endif; ?>
                </div>
                <?php endif; ?>


                <div class="footer-content_col col-sm d-flex flex-column">
                    <?php if (has_nav_menu('footer_navigation')) : ?>
                        <?php wp_nav_menu(['theme_location' => 'footer_navigation', 'container_class' => '', 'menu_class' => 'footer-nav nav flex-column']); ?>
                    <?php endif; ?>
                    <div class="d-block d-lg-none mt-auto">
                        <a href="#" data-toggle="modal" data-target="#newsletterFormModal" class="lead text-white">Sign up for our Newsletter</a>
                    </div>
                </div>
            </div>

            <div id="newsletterFormModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="newsletterFormModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                        <?php if($newsletter_subscribe_form = get_field('newsletter_subscribe_form', 'option')): ?>
                        <div class="footer-content_col col-sm d-block d-lg-none p-0">
                            <h3 class="h3 text-dark text-center mb-3">Multisteps Newsletter</h3>
                            <?php echo do_shortcode($newsletter_subscribe_form['form_shortcode']); ?>
                        </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
