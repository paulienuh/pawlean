<?php get_header(); ?>

<div class="container" >
<div class="jumbotron" >
<div class="row" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<h1 class="title" >  <?php the_title(); ?>  </h1>


  <div class="content" >

  
<?php the_content(''); ?>
<br>
 <?php edit_post_link( $link, $before, $after, $id, $class ); ?> 


<?php endwhile; ?> 
<?php endif; ?>
</div>


			
</div></div></div>
<?php get_footer(); ?>