<?php include 'header.php';?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-9">
					<p><?php the_post_thumbnail(); ?></p>
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
						endwhile; endif; 
					?>
				</div>
				<div class="col-12 col-md-3 re-menu">
					<?php include 'sidebar.php';?>
				</div>
			</div>
		</div>
	</section>
<?php include 'footer.php';?>