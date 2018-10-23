<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('single'); ?>>
    <header class="single-header">
      <div class="container">
        <h1 class="single-title"><?php the_title(); ?></h1>
        <?php //get_template_part('templates/entry-meta'); ?>
      </div>
    </header>
    <div class="single-content">
      <div class="container">
        <?php the_content(); ?>
      </div>
    </div>
    <footer class="single-footer">
      <div class="container">
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </div>
    </footer>
  </article>
<?php endwhile; ?>
