<body>
<!-- header [logo + navigation bar] -->
<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
            <div class="span3">
			    <a class="brand" href="<?php echo get_option('home'); ?>/"> TypeClub</a>
            </div>
            <div class="span5 offset1">
            <div class="</div>">
                        <?php wp_nav_menu (
                            array(
                                'menu'=>'navigation',
                                'container'=>'',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'nav nav-stacked',
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
<!--                     <li class="active">
                        <a href="<?php echo get_option('home'); ?>/">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo get_option('home'); ?>/about">About</a>
                    </li> 
                    <li>
                        <a href="<?php echo get_option('home'); ?>/work">Work</a>
                    </li>    
                    <li>
                        <a href="<?php echo get_option('home'); ?>/contact">Contact</a>
                    </li> -->
            </div> 
        </div>
		</div>
	</div>
</div>