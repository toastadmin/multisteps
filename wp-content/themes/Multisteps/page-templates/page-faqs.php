<?php
/**
 * Template Name: Page - FAQs
 */
?>

<?php get_template_part('templates/section', 'hero'); ?>

<?php if($faqs_section = get_field('faqs_section')): ?>
    <section class="section">
        <div class="container-fluid">

            <?php if($faqs = $faqs_section['faqs']): ?>
                <div id="jsFaqList" class="faq-list row no-gutters">

                    <?php foreach($faqs as $faq): ?>
                        <div class="faq-list-item col-lg-6">
                            <h3 class="faq-list-item__question">
                                <a href="#"><?php echo $faq['question']; ?></a>
                            </h3>
                            <div class="faq-list-item__answer">
                                <?php echo $faq['answer']; ?>
                            </div>
                            <a href="#" class="faq-list-item__close">Close</a>
                        </div>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>

        </div>
    </section>
<?php endif; ?>

<?php get_template_part('templates/section', 'getintouch'); ?>
