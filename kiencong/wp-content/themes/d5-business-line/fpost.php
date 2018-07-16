<?php 
/* 	Simplify Theme's part for showing blog or page in the front page
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Simplify 1.0
*/

?>
<div id="f-post-page" > <<< Show Posts >>> </div>
<div id="f-post-page-container" >
<div class="content-ver-sep"></div><br />
<div id="content">
 <?php if (have_posts()) : while (have_posts()) : the_post();?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
 <?php if (!is_page()): ?><p class="postmetadataw"><?php echo __('Posted by:', 'd5-business-line'); ?> <?php the_author_posts_link() ?> | on <?php the_time('F j, Y'); ?></p><?php endif; ?>		
 <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('thumbnail'); ?>
 <?php d5businessline_content();  ?>
 <div class="clear"> </div>
 <?php if (!is_page()): ?><div class="up-bottom-border">
  <?php  wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __('Pages:','d5-business-line') . '</span>', 'after' => '</div><br/>' ) ); ?>
 <p class="postmetadata"><?php _e('Posted in', 'd5-business-line'); ?> <?php the_category(', ') ?> | <?php edit_post_link(__('Edit', 'd5-business-line'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'd5-business-line'), __('1 Comment &#187;', 'd5-business-line'), __('% Comments &#187;'.'d5-business-line')); ?> <?php the_tags(__('<br />Tags: ','d5-business-line'), ', ', '<br />'); ?></p>
 </div><?php endif; ?>	
 </div></div>
 
 <?php endwhile; if (!is_page()): ?>

<div id="page-nav">
<div class="alignleft"><?php previous_posts_link(__('&laquo; Previous Entries','d5-business-line')) ?></div>
<div class="alignright"><?php next_posts_link(__('Next Entries &raquo;','d5-business-line'),'') ?></div>
</div>
 
<?php endif; endif; ?>
 
</div>
<?php get_sidebar(); ?>
<div class="clear"></div><div class="lsep"></div></div>