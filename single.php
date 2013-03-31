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
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<header>
				<div class="page-header-content">
					<h1><?php the_title(); ?></h1>
				</div>
			</header>
			<!--content-block-->		
				<div class="orig-image span5">
					<?php if(has_post_thumbnail()) { $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'thumbname' ); echo '<img src="' . $image_src[0] . '" width="100%" />'; } ?>
					<br />
					<a href="<?php print $_SERVER['HTTP_REFERER'];?>">&#8592; Go back</a>
				</div>
				<div class="span4">

					<!-- Custom Fields -->
					<?php $timeframe = get_post_meta($post->ID, 'timeframe', TRUE); ?>

					<ul class="item-details">
						<li><strong>Name:</strong> <?php the_title(); ?></li>
						<li><strong>Semester:</strong> <?php echo $timeframe ?> </li>
						<li><strong>Type:</strong> <?php
							global $post;
							$categories = get_the_category($post->ID);
							echo $categories[0]->cat_name;
							?>
						</li>
					</ul>
					<p><?php the_content(); ?></p>

					</div>
				<?php endwhile; else: ?>
				<?php endif; ?>

			<!--end:content-block-->
		</div>
	</div>
</div>
<?php include('footer.php'); ?>