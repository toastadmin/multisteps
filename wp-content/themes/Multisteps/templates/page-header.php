<?php use Roots\Sage\Titles; ?>
<?php $hero_style = get_field('hero_style'); ?>
<?php if($hero_style !== 'no_banner'): ?>
    <?php get_template_part('templates/section', 'hero'); ?>
<?php else: ?>
    <div class="page-header">
        <div class="container-fluid">
            <h1 class="page-title"><?= Titles\title(); ?></h1>
        </div>
    </div>
<?php endif; ?>
