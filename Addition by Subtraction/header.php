<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" lang="en">
	<head>
		<title>a blog by Pauline</title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<meta name="theme-color" content="#ffffff">
		<meta name="description" content="Pawlean is a blog by Pauline P. Narvas, documenting her life in the UK, self-development journey and discussing topics on tech, science, travel, health and well-being.
"/>
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@paulienuh" />
		<meta name="twitter:creator" content="@paulienuh" />
		<meta property="og:url" content="http://pawlean.com" />
		<meta property="og:title" content="a blog by Pauline" />
		<meta property="og:description" content="Pawlean is a blog by Pauline P. Narvas, documenting her life in the UK, self-development journey and discussing topics on tech, science, travel, health and well-being."/>
		<meta property="og:image" content="https://image.ibb.co/dsRKCG/lay.png" />
		
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" media="screen" />
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111755151-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-111755151-1');
		</script>
		<script>
			window.twttr = (function(d, s, id) {
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
			}(document, "script", "twitter-wjs"));
		</script>
			<?php if(is_singular()) wp_enqueue_script(‘comment-reply’); ?>
		<?php wp_head(); ?>
	
	</head>
	
	<body>
		<?php include_once("analyticstracking.php") ?>
		<div class="page-header" > <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-centered">
				<ul class="navvy">
					<li><a href="https://pawlean.com/" class="navvy">Blog</a></li>
					<li><a href="/pawlean/" class="navvy">Paw</a></li>
					<li><a href="/online/" class="navvy">Online</a></li>
					<li><a href="/archives/" class="navvy">Archive</a></li>
				</ul>
			</div>
			</div>
		</div>