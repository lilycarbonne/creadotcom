<?php get_header(); ?>

<!--Content--> 
<div id="content">
	<div id="posts">    
            <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">            
            <div class="postbg_top"><h2 class="postitle"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2></div>
              
                <div class="post_content">
                    <?php the_content(); ?>
                    <?php wp_link_pages('<p class="pages"><strong>'.__('Pages:').'</strong> ', '</p>', 'number'); ?>
                </div> 
                <!--Post Meta-->

                    <div class="postbg_bottom">                <div class="separator"></div>
                    <div class="post_meta">
                    <div class="author"><span>Posted By:</span><?php the_author(); ?></div>
                    <div class="date_meta"><?php the_date(); ?></div>
                    <div class="category_meta"><span>Category:</span><?php the_category(', '); ?></div>
                    <?php if (has_tag()) { ?>
						<div class="category_meta"><span>Tags:</span><?php the_tags(', '); ?></div>
                    <?php } else { ?>
					<?php } ?>
					
					<?php if (!empty($post->post_password)) { ?>
					<?php } else { ?><div class="comments"><span>Comments:</span><?php comments_popup_link('0', '1', '%', '', __('Off')); ?></div>
					<?php } ?>
                
					<div class="edit"><?php edit_post_link(); ?></div>
                    </div>   
                </div>
               
			</div>
            <div class="comments_template"><?php comments_template('',true); ?></div>
				
				<?php endwhile ?>
                <?php endif ?>
				
    </div>
    <!--Right Sidebar-->
    <?php get_sidebar(); ?>
</div> 
 
</div>
<?php get_footer(); ?>