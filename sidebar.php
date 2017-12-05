	<div>
		<h4>Our projects:</h4>
		<ul class="list-unstyled">
			<li><a class="btn btn-primary btn-block re-coffeeshop" href="<?php echo get_bloginfo('url')?>/projects/coffee-shop">Coffee Shop</a></li>
			<li><a class="btn btn-primary btn-block re-takenotice" href="<?php echo get_bloginfo('url')?>/projects/take-notice">Take Notice</a></li>
			<li><a class="btn btn-primary btn-block re-listentous" href="<?php echo get_bloginfo('url')?>/projects/listen-to-us">Listen to us</a></li>
			<li><a class="btn btn-primary btn-block re-hatecrime" href="<?php echo get_bloginfo('url')?>/projects/hate-crime">Hate crime</a></li>
		</ul>
	</div>
	<div class="re-search">
		<form role="search" method="get" id="searchform" class="searchform" action="<?php echo get_bloginfo('blog_url') ?>">
			<div>
				<label class="screen-reader-text" for="s">Search for:</label>
				<input type="text" value="" name="s" id="s" class="form-control">
				<input type="submit" id="searchsubmit" class="btn btn-primary" value="Search">
			</div>
		</form>		
	</div>
	<div class="sidebar new-sidebar">	
		<?php if ( is_active_sidebar( 'clasp_sidebar' ) ) : ?>
			<div class="sidebar new-sidebar">
				<?php dynamic_sidebar( 'clasp_sidebar' ); ?>
			</div>
		<?php endif; ?>
	</div>
	<div class="re-links">
		<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
		<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a0c17b94079f534"></script> 
	</div>