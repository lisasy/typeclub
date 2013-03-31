<!-- footer -->
<div id="footer">
	<div class="container">
		<div class="row">
			<div id="footer-caption" class="span6">
				<p>TypeClub is a student design organization founded at <a href="http://wesleyan.edu" target="_blank">Wesleyan University</a> in 2012.</p>
				<p>"Design is not just what it looks like and feels like. Design is how it works." - Steve Jobs</p>
				
			</div>
			<div id="page-links" class="span4 offset2">
				<?php wp_nav_menu (
                            array(
                                'menu'=>'navigation',
                                'container'=>'',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => '',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => ''
                            ))
                        ;?> 
			</div>
		</div>
		<div class="row">
			<div id="copyright" class="span6">
				<p>Copyright 2012-2013. Made by <a href="http://lisasy.com">Lisa Sy</a>.</p>
			</div>
			<div id="email" class="span4 offset2">
				<span class="entypo-icon small">%</span>
				<a href="mailto:westypeclub@gmail.com" target="_blank">westypeclub@gmail.com</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>