<!DOCTYPE html>
<html>
	<head>
		<!--Meta Tagging-->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<meta name="description" content="">
			<meta name="author" content="">
		<!--Favicon-->
			<link rel="icon" href="<?php echo get_bloginfo( 'template_directory' );?>/images/favicon.ico">
		<!--Title-->
			<title>Clasp</title>
		<!-- Bootstrap core CSS -->
			<link href="<?php echo get_bloginfo( 'template_directory' );?>/css/bootstrap.min.css" rel="stylesheet">
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- Custom style -->
		<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	<?php wp_head();?>
	</head>
	<body>
		<!--Navigation bar-->
			<section class="maintop">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-7 text-right textleft_re re-smalltoppad">
							<h6 class="re-font20"><i class="fa fa-phone-square fa-lg"></i> 0118 979 6364</h6>
						</div>
						<div class="d-md-block d-none col-md-2 text-right textleft_re re-smalltoppad">
							<a href="https://www.facebook.com/clasp.wokingham" target="_blank"><img src="<?php echo get_bloginfo('template_url') ?>/images/facebook.jpg"/></a>
							<a href="https://twitter.com/CLASPWokingham" target="_blank"><img src="<?php echo get_bloginfo('template_url') ?>/images/twitter.jpg"/></a>
							<a href="https://www.youtube.com/channel/UCB4ENejNoapKKdY_enx-wHA" target="_blank"><img src="<?php echo get_bloginfo('template_url') ?>/images/youtube.jpg"/></a>
						</div>
						<div class="col-12 col-md-3 text-right textleft_re" style="white-space:nowrap;">
							<a href="<?php echo get_bloginfo('url')?>/support-links/support-us"><button type="button" style="border-color: black; background-color:black; text-transform: uppercase" class="btn btn-primary noradius_re">Join us</button><a>
							<a href="<?php echo get_bloginfo('url')?>/donate"><button type="button" style="border-color: #fe4447; background-color:#fe4447; text-transform: uppercase" class="btn btn-primary noradius_re">Donate</button></a>
						</div>
					</div>
					<div class="row align-items-end logorow_re">
						<div class="col-12 col-md-4 align-self-start">
							<div class="row">
								<div class="col-12 logoimg_re">
									<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/images/logotext.jpg">
								</div>
							</div>
						</div>
						<div class="col-12 col-md-8 nopadding_re">
							<nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse nopadding_re">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"><img src="<?php echo get_bloginfo('template_url') ?>/images/lines.png"/></span>
								</button>
									<?php
										wp_nav_menu( array(
											'theme_location'	=> 'primary',
											'depth'				=> 2,
											'container'			=> 'div',
											'container_class'	=> 'collapse navbar-collapse justify-content-end',
											'container_id'		=> 'nav-content',
											'menu_class'		=> 'navbar-nav xmr-auto',
											'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
											'walker'			=> new WP_Bootstrap_Navwalker())
										);
									?>							
							</nav>
						</div>
					</div>
				</div>
			</section>
			
