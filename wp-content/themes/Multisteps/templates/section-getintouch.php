<?php if($get_in_touch = get_field('get_in_touch', 'option')): ?>
<section class="section bg-dark text-white">
    <div class="container-fluid">
        <div class="getintouch">
            <?php if($get_in_touch['section_title']): ?>
                <h3 class="getintouch__title text-uppercase text-center mb-5"><?php echo $get_in_touch['section_title']; ?></h3>
            <?php endif; ?>

            <?php if($get_in_touch['section_copy']): ?>
            <div class="getintouch__copy text-center mb-5">
                <?php echo $get_in_touch['section_copy']; ?>
            </div>
            <?php endif; ?>

            <?php if($get_in_touch['section_copy']): ?>
            <div>
                <?php echo do_shortcode($get_in_touch['form_shortcode']); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
