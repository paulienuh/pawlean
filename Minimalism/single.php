<?php get_header(); ?>




<div class="container" >
<div class="jumbotron" >
<div class="row" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>


 <h1 class="title" > <?php the_title(); ?> </h1>
 <center>

<small>by <?php the_author_link(); ?>  on <?php the_time('F jS Y') ?></small></center>
<hr width="5%" >


  <div class="content" >
<?php the_content(); ?>

<center>
<hr width="5%" >

<em> Posted under: <?php the_category( ', ' ); ?> </em></center>
</div>
<?php edit_post_link( $link, $before, $after, $id, $class ); ?>
<hr width="5%" ><br>

<div class="comments-template">
				<?php comments_template(); ?>
</div>

<?php endwhile; ?> 
<?php endif; ?>

</div>

</div> </div> </div> 
		


<?php get_footer(); ?>