<?php if($intro_section = get_field('intro_section')): ?>
<section class="section">
    <div class="container-fluid">
        <div class="special-intro <?php echo $intro_section['intro_section']['content']['position']; ?> d-flex">
            <div class="special-intro__header">
                <div class="special-intro__inner">
                    <div class="special-intro__title pl-5 pr-5"><?php echo $intro_section['intro_section']['content']['title']; ?></div>
                </div>
                <!-- <h1 class="vertical-title">Who We Are</h1> -->
            </div>
            <div class="special-intro__content col pr-0 pl-3 pl-lg-5">
                <figure class="special-intro__image bg-image" style="background-image: url(<?php echo $intro_section['intro_section']['graphic']['sizes']['large']; ?>"></figure>
                <div class="special-intro__copy bg-dark text-white d-flex align-items-center">
                    <div>
                        <?php echo $intro_section['intro_section']['content']['copy']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
