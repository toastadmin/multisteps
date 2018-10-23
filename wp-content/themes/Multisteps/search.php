<?php get_template_part('templates/page', 'header'); ?>

<div class="page-content">
    <div class="container">
		<?php if (!have_posts()) : ?>
		  <div class="alert alert-warning">
		    <?php _e('Sorry, no results were found.', 'sage'); ?>
		  </div>
		  <?php get_search_form(); ?>
		<?php endif; ?>

		<?php /**
		<div class="row">
		<?php while (have_posts()) : the_post(); ?>

				<?php if ( 'product' == get_post_type() ): ?>
				    <div class="col-6 col-lg-4">
				        <?php get_template_part('templates/content-product'); ?>
				    </div>
				<?php else: ?>
					<div class="col-lg-12">
						<?php get_template_part('templates/content', 'search'); ?>
					</div>
				<?php endif; ?>

		<?php endwhile; ?>
		</div>
		**/ ?>

		<?php if( have_posts() ): ?>
		    <?php $types = array('product', 'post', 'page'); ?>
		    <?php foreach( $types as $type ): ?>

		        <?php if($type === 'post' && ('post' === get_post_type())): ?>
		        	<h3 class="mb-4">BLOG POSTS</h3>
			        <?php while( have_posts() ): the_post(); ?>
			            <?php if( $type == get_post_type() ): ?>
			                <?php get_template_part('templates/content', 'search'); ?>
			            <?php endif; ?>
			        <?php endwhile; ?>
			    <?php endif; ?>

		        <?php if($type === 'page' && ('page' === get_post_type())): ?>
		        	<h3 class="mb-4">PAGES</h3>
			        <?php while( have_posts() ): the_post(); ?>
			            <?php if( $type == get_post_type() ): ?>
			                <?php get_template_part('templates/content', 'search'); ?>
			            <?php endif; ?>
			        <?php endwhile; ?>
			    <?php endif; ?>

		        <?php if($type === 'product' && ('product' === get_post_type())): ?>
		        	<div class="products-category-grid">
		        		<h3 class="mb-4">PRODUCTS</h3>
		        		<div class="row">
					        <?php while( have_posts() ): the_post(); ?>
					            <?php if( $type == get_post_type() ): ?>
					            	<div class="col-6 col-lg-4">
					                	<?php get_template_part('templates/content-product'); ?>
					                </div>
					            <?php endif; ?>
					        <?php endwhile; ?>
				        </div>
			        </div>
			    <?php endif; ?>

		        <?php rewind_posts(); ?>
		    <?php endforeach; ?>
		<?php endif; ?>

		<?php the_posts_navigation(); ?>
    </div>
</div>

