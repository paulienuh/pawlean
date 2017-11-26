<?php get_header(); ?>
<div class="container" >
<div class="jumbotron" >

<?php the_post(); ?>


<div class="row" >
<h1 class="title" >  Archive  </h1>


<center>
<p style="text-align: center;">Currently, there are <font color="#a673aa"><?php echo do_shortcode('[sbs_posts]'); ?></font> blog posts published with a total of <font color="#a673aa"><?php

$comments_count = wp_count_comments();

echo $comments_count->approved . "";

?></font> comments.</p></center>
<hr width="10%" >
</div>
<div class="row" >
<h3> Year & Month </h3>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
<?php compact_archive($style='block',$before='<div class="test">', $after='</div>'); ?>
</div>

</div>

<hr>

<div class="row" >

<h3>Topics</h3>

<div class="row" >


<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
<div class="box">
<a href="http://pawlean.com/category/health-well-being/" ><img src="http://pawlean.com/wp-content/uploads/fitness-594143_1920.jpg" alt="" width="300px" />
<div class="overbox">
<div class="title overtext">Health & Well-being</div>
<div class="tagline overtext">All my posts about anything health and well-being related such as my fitness lifestyle and meditation practice.</div>
</div>
</div></div>


<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
<div class="box">
<a href="http://pawlean.com/category/tech/"><img src="http://pawlean.com/wp-content/uploads/code-1839406_1280.jpg" alt="" width="300px" />
<div class="overbox">
<div class="title overtext">Women in STEM</div>
<div class="tagline overtext">I talk a lot about diversity and inclusion for socially excluded groups. I currently work do a lot of work with Code First: Girls. </div>
</div></a>

</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
<div class="box">
<a href="http://pawlean.com/category/life/" ><img src="http://pawlean.com/wp-content/uploads/telephone-booth-768610_1280.jpg" alt="" width="300px" />
<div class="overbox">
<div class="title overtext">Life</div>
<div class="tagline overtext">Talking about my daily life and adventures living in sunny England</div>
</div></a>

</div>

</div>



</div>

<div class="row" >

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >

<div class="box">

<a href="http://pawlean.com/category/work/" ><img src="http://pawlean.com/wp-content/uploads/student-849825_960_720.jpg" alt="" width="300px" />
<div class="overbox">
<div class="title overtext">Work</div>
<div class="tagline overtext">Collecting XP from the various jobs I've had (ranging from part time, volunteering and placements) I talk about them here!</div>
</div></a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
<div class="box">

<a href="http://pawlean.com/category/university/" ><img src="http://pawlean.com/wp-content/uploads/books-1835753_960_720.jpg" alt="" width="300px" />
<div class="overbox">
<div class="title overtext">University</div>
<div class="tagline overtext">Documenting and reflecting on my University experience! Currently, I am studying my undergraduate degree in Biomedical Sciences with Employment Experience.</div>
</div></a>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
<div class="box">

<a href="http://pawlean.com/category/personal/" ><img src="http://pawlean.com/wp-content/uploads/mallorca-109204_960_720.jpg" alt="" width="300px" />
<div class="overbox">
<div class="title overtext">Personal</div>
<div class="tagline overtext">Posts that are closer to my heart.</div>
</div></a>

</div>
</div>

</DIV>


<div class="row" >




<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
<div class="box">

<a href="http://pawlean.com/category/interests/" ><img src="http://pawlean.com/wp-content/uploads/xbox-1602822_1280.jpg" alt="" width="300px" />
<div class="overbox">
<div class="title overtext">Interests</div>
<div class="tagline overtext">Posts that show the diversity of my interests in music, movies and games!</div>
</div></a>
</div>
</div>


</div>
<hr />


<div class="row" >
<h3>Columns that I write</h3>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >

<div class="box">

<a href="http://pawlean.com/category/monthly-for-me/" ><img src="http://pawlean.com/wp-content/uploads/DSC03593-e1482959257277.jpg" alt="" width="300px" />
<div class="overbox">
<div class="title overtext">Month, For Me</div>
<div class="tagline overtext">My end of month review</div>
</div></a>
</div>

</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
<div class="box">
<a href="http://pawlean.com/category/explaw/"><img src="http://pawlean.com/wp-content/uploads/air-plan-1670266_960_720.jpg" alt="" width="300px" />
<div class="overbox">
<div class="title overtext">Explaw</div>
<div class="tagline overtext">I used to suffer from horrible travel anxiety, but I've been overcoming it one step at a time. This is a log of all my adventures!</div>
</div>
</div>
</DIV>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >

<div class="box">

<a href="http://pawlean.com/category/health-well-being/fitness/" ><img src="http://pawlean.com/wp-content/uploads/IMG_1098.jpg" alt="" width="300px" />
<div class="overbox">
<div class="title overtext">PawGainz</div>
<div class="tagline overtext">Posts dedicated to tracking my fitness progress!</div>
</div></a>
</div>

</div>




</div>

<div class="row" >




<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >

<div class="box">

<a href="http://pawlean.com/category/myosinerely/" ><img src="http://pawlean.com/wp-content/uploads/Screen-Shot-2017-04-19-at-18.12.03-e1492622002564.png" alt="" width="300px" />
<div class="overbox">
<div class="title overtext">myoSINerely</div>
<div class="tagline overtext">A fun column that communicates science in a simplier way.</div>
</div></a>
</div>

</div>

</div>

<hr>

<div class="row"> 
<h3>Columns I take part in</h3>
<ul>
<li>
<p><i><b>"Timeless thoughts"</B></i> hosted by <a href="http://hey.georgie.nu/" target="_blank">Georgie</a> & <a href="http://aigoo.me/" target="_blank" >Tara</a></p>
<p> Bloggers can document about topics they find unforgettable in their past or present.</p>
</li>
<li>
<p><i><b>"A Day in my Life"</B></i> hosted by <a href="http://janepedia.com/" target="_blank" >Liz</a></p>
<p>A monthly linkup wherein bloggers document their life on a particular day each month, thus sharing a little about what their days are like.</P>
</li>
</ul>
<p>Posts written by me partcipating in these linkups can be found <a href="http://pawlean.com/category/life/" >here.</a>

</div>
<div class="row" >
<hr />
<h3> People </h3>
<p>I write about people a lottttt (I'm like the Taylor Swift of the blogosphere), but I mention these people more than usual:</p>
<ul>
<li><a href="http://pawlean.com/category/life/hamdah/" >Hamdah</a></li>
</ul>
</div>


</div>


</div>








<?php get_footer(); ?>