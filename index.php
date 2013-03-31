<?php
/*
Template Name: Work
*/
?>


<?php include('header.php'); ?>
<?php include('nav.php'); ?>

<!-- main content -->
<div id="main-content" class="container">
	<div class="row">
		<div id="container-block" class="span10 offset1">
			<header id="work">
				<div class="page-header-content">
					<h1>We design solutions.</h1>
				</div>
			</header>
			<!--content-block-->
			<div class="row">
				<section id="portfolio-gallery">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<div class="image-holder span3">
							<?php the_post_thumbnail(); ?>
							<span class="rollover">
								<h4><?php the_title(); ?></h4>
								<?php $timeframe = get_post_meta($post->ID, 'timeframe', TRUE); ?>
								<em><?php echo $timeframe ?></em> &#8226; 
								<em>
									<?php
									global $post;
									$categories = get_the_category($post->ID);
									echo $categories[0]->cat_name;
									?>
								</em>
								<p><?php $desc = get_post_meta($post->ID, 'description', TRUE); echo $desc ?></p>
							</span>
						</div>
					</a>
					<?php endwhile; else: ?>
					<?php endif; ?>
				</section>
			</div>
			<!--end:content-block-->
		</div>
	</div>
</div>
<?php include('footer.php'); ?>