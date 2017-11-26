<?php
/**
* A Simple Category Template
*/

get_header(); ?> 

<div class="container" >
<div class="jumbotron" >
<div class="row" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >

<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>



<h2 class="title"><?php single_cat_title(); ?>

</h2>

<?php

// Display optional category description

 if ( category_description() ) : ?>

<div class="archive-meta"><blockquote><?php echo category_description(); ?></blockquote></div>
<br>
<br>
<?php endif; ?>

<?php
// The Loop

while ( have_posts() ) : the_post(); ?>

 <a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail( 'thumbnail' ); ?></a>

 <h1 class="fronttitle" >   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

<small> <?php the_time('F jS Y') ?> </small>
<br><br>
<?php the_excerpt(); ?>
<br>
<center><div class="read" ><a href="<?php echo get_permalink(); ?>"><i class="fa fa-angle-double-down fa-lg" aria-hidden="true"></i></a></div></center>

<hr />
<br>

<?php endwhile; 

else: ?>
<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>


<div class="row" ><center><br><br>
<?php posts_nav_link('.','<div class="alignright"><div class="arrows" >Newer posts</div></div>','<div class="alignleft"><div class="arrows" >Older posts</div></div>
'); ?></center>
</div> 
</div></div></div>


<?php get_footer(); ?>