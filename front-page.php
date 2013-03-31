<?php
/*
Template Name: Front Page
*/
?>


<?php include('header.php'); ?>
<?php include('nav.php'); ?>

<!-- banner/masthead -->
<header class="masthead">
	<div id="banner"> <!-- container should not limit the width of the banner ... -->
		<!-- change styling of masthead to have the picture! -->
		<section class="hero-unit">
			<div class="container">
				<div class="bannerInfo span6 offset3">
					<h1>Let's design.</h1>
		            <p>We are a student-run design organization at Wesleyan University dedicated to crafting beautiful and functional design solutions for the Wesleyan community and beyond.</p> 
		            <a href="<?php echo get_option('home'); ?>/work"><button class="btn-large red-button">See our work!</button></a>   
	        	</div>
            </div> 
		</section>
	</div>
</header>

<!-- main content -->
<div id="front-content" class="container">
	<div class="row">
		<div id="container-block" class="span10 offset1">
			<!--content-block-->
			<div class="row">
				<section id="designing-for-wes" class="content-block span6 offset2">
					<img src="<?php bloginfo('template_directory'); ?>/row-icon.png" class="icon">
	 				<h2>Designing for Wesleyan.</h2>
					<p>We serve the Wesleyan University community by using design to create greater connectivity and break down communication barriers between the vast diversity of campus initiatives and organizations happening at Wesleyan.</p>
				</section>
			</div>
			<!--end:content-block-->
			<!--content-block-->
			<div class="row">
				<section id="our-mission" class="content-block span6 offset2">
					<span class="entypo-icon large">?</span>
	 				<h2>Our Mission.</h2>
					<p>TypeClub is Wesleyan's premier design, advertising, and marketing student organization. TypeClub is dedicated to not only fostering further interest in these fields, but also to developing design solutions for the greater Wesleyan campus. This means working with various venues to create better-designed advertisements, challenging students to think differently about the space around them, and using visual and architectural design to solve problems that we identity at Wesleyan.</p>
				</section>
			</div>
			<!--end:content-block-->
			<div class="row">
				<a href="about"><button class="btn">Learn more!</button></a>
				<a href="work"><button class="btn">See our work</button></a>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>