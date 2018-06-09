<?php get_header(); ?>
<div class="container" >
	<div class="jumbotron" >
		<?php the_post(); ?>
		
		<div class="row" >
			<h1 class="title" >  Archive  </h1>
			<p style="text-align: center;">There have been <font color="#a673aa"><?php echo do_shortcode('[sbs_posts]'); ?></font> blog posts published on <em>Pawlean</em> with a total of <font color="#a673aa"><?php $comments_count = wp_count_comments(); echo $comments_count->approved . "";?></font> comments.</p>
			<hr width="10%" >
		</div>
		
		<div class="row">
			<h2 style="text-align: center;">Topics</h2>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				
<h3 style="text-align: center;">🧘🏻‍♀️Health&amp; Well-Being</h3>
				<p style="text-align: center;"><a href="https://pawlean.com/category/health-well-being/fitness/">PawGainz</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/health-well-being/mental-health/">Mental Health</a></p>
				
				<hr style="width:1%; ">
				
				<h3 style="text-align: center;">🗺Travel</h3>
<p style="text-align: center;"><a href="https://pawlean.com/category/explaw/">Explaw</a></p>
<p style="text-align: center;"><a href="https://pawlean.com/category/world_notes/" >World notes</a></p>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h3 style="text-align: center;">🌌Development</h3>
				<p style="text-align: center;"><a href="https://pawlean.com/category/life/awards-achievements/" >Achievements &amp; Awards</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/work/">Career Development</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/work/checkpoint/">Placement Year: Checkpoints</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/public-speaking/" >Public Speaking</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/university/" >University</a></p>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h3 style="text-align: center;">🔓Personal</h3>
				<p style="text-align: center;"><a href="https://pawlean.com/category/life/memories/" >Memories</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/thoughts/" >Thoughts</a></p>
				<hr style="width:1%; ">
				<h3 style="text-align: center;">🌐 Online</h3>
				<p style="text-align: center;"><a href="https://pawlean.com/category/collaborations/">Collaboration</a>
</p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/how-to/">How to</a></p>
			</div>
		</div>
		<hr style="width:1%; ">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h3 style="text-align: center;">💻Science &amp; Tech</h3>
				<p style="text-align: center;"><a href="https://pawlean.com/category/tech/" target="_blank" rel="noopener">Tech Communities</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/tech/code-first-girls/">Code First: Girls</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/hackathons/" >Hackathons</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/myosinerely/">MyoSinerely</a></p>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h3 style="text-align: center;">🦋Life</h3>
				<p style="text-align: center;"><a href="https://pawlean.com/category/365-days/">365 days</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/daily/">Daily life</a></p>
				<p style="text-align: center;">
					<a href="https://pawlean.com/category/life/inspiring-figures/"  >Inspiring Figures</a>
	</p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/monthly-for-me/">Month, For Me</a></p>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h3 style="text-align: center;">💙 Favourites</h3>
				<p style="text-align: center;"><a href="https://pawlean.com/category/apps/" >Apps</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/movies/" >Films</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/music/" >Music</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/books/" >Books</a></p>
				<p style="text-align: center;"><a href="https://pawlean.com/category/fashion/" >Fashion &amp; Beauty</a></p>
			</div>
		</div>
		<hr width="10%" >
		<div class="row" >
			<h2 style="text-align: center;"> Year & Month </h2>
			<br>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 test" >
				<?php compact_archive($style='block',$before='<center>', $after='</center>'); ?>
			</div>
		</div>
		<br>
		<br>
	</div>
</div>

<?php get_footer(); ?>