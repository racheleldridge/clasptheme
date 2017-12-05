<?php include 'header.php';?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-9">
					<div class="">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</div>		
					<?php
						if ( have_posts() ) : ?>
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<a href="<?php the_permalink(); ?>"><?php the_title( '<h3 class="entry-title">', '</h3>' ); ?></a>
						</header><!-- .entry-header -->
						<div class="entry-content">
							<?php
								the_excerpt();
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->
					</article><!-- #post-## -->
					<?php
						endwhile;
						else :
							echo "No items found";
						endif; ?>
				</div>
				<div class="col-12 col-md-3 re-menu">
					<?php include 'sidebar.php';?>
				</div>
			</div>
		</div>
	</section>
<?php include 'footer.php';?>