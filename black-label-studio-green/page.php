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
                    <div class="pagetbg_bottom"></div>

               
			</div>
            <div class="comments_template"><?php comments_template('',true); ?></div>
				<?php endwhile ?>
                <div class="navigation">
                    <div class="nxt_page"><?php previous_posts_link('New Entries »', 0); ?></div>
                    <div class="prv_page"><?php next_posts_link('« Old Entries', '0') ?></div>
                 </div>   
                <?php endif ?>

    </div>
    <!--Right Sidebar-->
    <?php get_sidebar(); ?>
</div> 
 
    
</div>
<?php get_footer(); ?>