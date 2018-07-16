<?php
/* 	D5 Business Line Theme's General Page to display all Pages
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since D5 Business Line 1.0
*/

 get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="content-ver-sep"> </div>
            <div class="entrytext">
 <?php the_post_thumbnail('thumbnail'); ?>
 <?php d5businessline_content(); ?>

				<?php wp_link_pages(array('before' => __('<p><strong>Pages:</strong> ','d5-business-line'), 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; ?><div class="clear"> </div>
	<?php edit_post_link(__('Edit This Entry','d5-business-line'), '<p>', '</p>'); ?>
<?php comments_template(); ?>
	<?php else: ?>
		<p><?php _e('Sorry, no pages matched your criteria','d5-business-line'); ?></p>
	<?php endif; ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>