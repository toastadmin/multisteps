<?php
/**
 * Template Name: Page - Links
 */
?>

<?php get_template_part('templates/section', 'hero'); ?>

<?php if($intro_section = get_field('intro_section')): ?>
<section class="section pb-0">
    <div class="container">
        <?php echo $intro_section['section_content']; ?>
    </div>
</section>
<?php endif; ?>

<?php if($links_section = get_field('links_section')): ?>
<section class="section">
    <div class="container-fluid">

    <?php if($link_groups = $links_section['link_group']): ?>

        <?php foreach($link_groups as $link_group): ?>
            <div class="link-group  mb-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <?php if($link_info = $link_group['link_info']): ?>
                        <div class="link-info">
                            <?php if($link_info['link_info_title']): ?>
                                <h3 class="link-info__title "><?php echo $link_info['link_info_title']; ?></h3>
                            <?php endif; ?>
                            <div class="link-info__description">
                                <?php echo $link_info['link_info_description']; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6">
                        <?php if($link_lists = $link_group['link_lists']): ?>
                        <ul class="link-lists">
                            <?php foreach($link_lists as $link): ?>
                                <li><a href="<?php echo $link['link_item']['url']; ?>"><?php echo $link['link_item']['title']; ?> <i class="fa fa-picture-o pl-3" aria-hidden="true"></i></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    <?php endif; ?>

    </div>
</section>
<?php endif; ?>
