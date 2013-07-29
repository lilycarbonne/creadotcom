
<!--Footer-->
<div id="footer">
   <div class="footage"><ul>          
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?> 
    <?php endif; ?></ul></div>
</div>

<!--Copyright :: Please DO NOT Remove Theme Design by Accreditation -->
<div id="copyright">
	<div id="copy_content"><!-- Please DO NOT Remove Theme Design by Accreditation -->
		Copyright &copy; <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved.<br />
		Theme Design by <a href="http://www.blacklabelstudios.com">Website Design Brisbane</a>
		
		<div id="footmenu">
			<?php wp_nav_menu( array( 'container_class' => 'menu-footer', 'theme_location' => 'foot_menu' ) ); ?><br />
		</div>
		
	</div>
</div>

</body>
</html>