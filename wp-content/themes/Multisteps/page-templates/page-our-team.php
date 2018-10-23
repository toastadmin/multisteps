<?php
/**
 * Template Name: Page - Our Team
 */
?>


<?php get_template_part('templates/section', 'hero'); ?>

<?php if($our_team_section = get_field('our_team_section')): ?>
<section class="section">
    <div class="container-fluid">
        <h2 class="sr-only">Our Team</h2>

        <?php if($our_team = $our_team_section['our_team']): ?>
        <div class="our-team">
            <div class="row">

                <?php foreach($our_team as $team_member): ?>
                <div class="col-6 col-lg-3 mb-5">
                    <div class="team-member">
                        <div class="team-member__image">
                            <figure class="bg-image full-wrap" style="background-image: url(<?php echo $team_member['team_member_pic']['sizes']['medium']; ?>);"></figure>
                        </div>
                        <div class="team-member__info">
                            <h3 class="team-member__name"><?php echo $team_member['team_member_info']['name']; ?></h3>
                            <h4 class="team-member__role"><?php echo $team_member['team_member_info']['role']; ?></h4>
                            <a href="mailto:<?php echo $team_member['team_member_info']['email']; ?>" class="team-member__email"><?php echo $team_member['team_member_info']['email']; ?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
        <?php endif; ?>

        <div class="text-center">
            <a href="#" class="btn btn-primary btn-large btn-rounded btn-wide">Meet Our Team</a>
        </div>
    </div>
</section>
<?php endif; ?>
