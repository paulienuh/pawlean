<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta name="google-site-verification" content="7hPaUmP9R3jocq-SwXbofMZ0oHMBFK2zKCw5ddem55k" />
<meta name="google-site-verification" content="Z71qKneA8DHX0RbwXgyE5Cd41w6QkvdcEtYa3Kz-_uU" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

 <title>a blog by Pauline</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/custom.css" >
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/responsive.css" >
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" media="screen" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php
    /* 
     *  Add this to support sites with sites with threaded comments enabled.
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    wp_head();
     
    wp_get_archives('type=monthly&format=link');
?>

<?php wp_head(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>

<script type="text/javascript">

$(document).ready(function() {
		
	$('.blog-list-archive li ul').hide();
	$('.blog-list-archive li a').click(function(){
    	$(this).parent().addClass('selected');
    	$(this).parent().children('ul').slideDown(250);
    	$(this).parent().siblings().children('ul').slideUp(250);
    	$(this).parent().siblings().removeClass('selected');
	});
});</script>
</head>

<body>
<?php include_once("analyticstracking.php") ?>




<div class="page-header" > <div class="row">

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-centered">
    <ul class="navvy">
  <li><a href="http://pawlean.com/" class="navvy">Blog</a></li>
  <li><a href="http://pawlean.com/pawlean/" class="navvy">Paw</a></li>
    <li><a href="http://pawlean.com/online/" class="navvy">Online</a></li>
  <li><a href="http://pawlean.com/archives/" class="navvy">Archive</a></li>
</ul>

    </div>
  
    

</div>
</div>
	

	