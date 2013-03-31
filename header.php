<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TypeClub: Wesleyan's Design Organization</title>
    <meta name="author" content="TypeClub" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-responsive.css" />

    <link rel="stylesheet/less" href="<?php bloginfo('template_directory'); ?>/less/style.less" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.masonry.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/less-1.3.0.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//use.typekit.net/iyw5snw.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script>
    $(document).ready(function(){
        /*Masonry*/
        // var $container = $('#portfolio-gallery');

        // $container.imagesLoaded( function(){
        //     $container.masonry({
        //         itemSelector : '.image-holder'
        //     });
        // });

        $('.rollover').css('display', 'none');
        $('.image-holder').hover(function() {
            $(this).children('.rollover').slideDown(250);
        }, function() {
            $(this).children('.rollover').slideUp(250);
        });

    });


  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38245416-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
      
    </script>
</head>