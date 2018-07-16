<?php

/* 	D5 Business Line Theme's Single Page to display Single Page or Post
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since D5 Business Line 1.0
*/


get_header(); ?>
<div id="content">
          
		  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          
            <h1 class="page-title"><?php the_title(); ?></h1>
            <p class="postmetadataw"><?php _e('Posted by:', 'd5-business-line'); ?> <?php the_author_posts_link() ?> | on <?php the_time('F j, Y'); ?></p>
                        
            <div class="content-ver-sep"> </div>
            <div class="entrytext">
            <?php the_post_thumbnail('thumbnail'); ?>
			<?php the_content(); ?>
            </div>
            <div class="clear"> </div>
            <div class="up-bottom-border">
             <?php  wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __('Pages:','d5-business-line') . '</span>', 'after' => '</div><br/>' ) ); ?>
 <p class="postmetadata"><?php _e('Posted in', 'd5-business-line'); ?> <?php the_category(', ') ?> | <?php edit_post_link(__('Edit', 'd5-business-line'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'd5-business-line'), __('1 Comment &#187;', 'd5-business-line'), __('% Comments &#187;'.'d5-business-line')); ?> <?php the_tags(__('<br />Tags: ','d5-business-line'), ', ', '<br />'); ?></p><br />
            <div class="floatleft"><?php previous_post_link('&laquo; %link'); ?></div>
			<div class="floatright"><?php next_post_link('%link &raquo;'); ?></div><br /><br />
            <?php if ( is_attachment() ): ?>
            <div class="floatleft"><?php previous_image_link( false, __('&laquo; Previous Image','d5-business-line') ); ?></div>
			<div class="floatright"><?php next_image_link( false, __('Next Image &raquo;','d5-business-line') ); ?></div> 
            <?php endif; ?>
          	</div>
			
			<?php endwhile;?>
          	            
          <!-- End the Loop. -->          
        	
			<?php comments_template( '', true ); ?>
            
</div>			
<?php get_sidebar(); ?>
<?php get_footer(); ?>