<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>

<div class="container" >
	<div class="jumbotron" >
		<div class="row" >
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
				<div class="content" >
					<h1 class="title" >  Search Results </h1>
					
					<center>🔎 <?php printf( __( 'You were looking for: %s', 'shape' ), '<em>"' . get_search_query() . '"</em>' ); ?> and I found: 
					</center>
					
					<hr width="10%" >
					
					<?php
					$s=get_search_query();
					$args = array(
						's' =>$s
					);
					// The Query
                    $the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) {
						_e("");
						$i=0;
						while ( $the_query->have_posts() ) {
							$the_query->the_post();
							$i++;
					?>
					
					<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
</a>
					</h3>
					<small> <?php the_time('F jS Y') ?> </small>
					<br>
					
					<?php the_excerpt(); ?>
					
					<hr /> 
					
					<?php
						}
						echo("<p>Total number of times I've used that word/mentioned it is: <b>".$i.".</b> Yikes! 😱</p>");
					}else{
					?>
          <p>... nothing matched your search criteria! 😔 Try again with some different keywords. <br><br> Looking for something specific and can't find it? <a href="http://pawlean.com/contact-me/" >Get in touch!</a> </p>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	
	<?php get_footer(); ?>