<?php
/**
template name: homepage mg
 */
?>
<?php include 'header.php';?>
		<!--Carousel-->

			<?php echo do_shortcode('[neo_carousel_shortcode id="223"]'); ?>
		<!--Hello-->
			<section class="hello space_re">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-5 hellospace">
							<h1 class="re-font50">Hello</h1>
							<h3 class="re-font25">We are a self-advocacy group for people with learning disabilities in the Wokingham borough</h3>
						</div>
						<div class="col-12 col-md-4 hellospace re-font20">
							<p>Self-advocacy is when you speak up for yourself about the things that are important to you. CLASP help people with learning disabilities to do this. We support each other to speak up for our rights and live more independently.</p>
						</div>
						<div class="col-12 col-md-3 hellospace re-font20">
							<h4>CLASP stands for <strong>Caring, Listening</strong> and <strong>Supporting Partnership.</strong></h4>
						</div>
					</div>
				</div>
			</section>
		<!--Main Projects-->
			<section class="mainprojects">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-4 space_re sidepadding_re re-font35">
							<h2>CLASP runs four main projects:</h2>
						</div>
						<div class="col-12 col-md-8">
							<div class="row no-gutters">
								<div class="col-6 col-md-3">
									<a href="<?php echo get_bloginfo('url')?>/projects/coffee-shop"><img class="img-fluid" width="100%" src="<?php echo get_bloginfo('template_url') ?>/images/coffeeshop.jpg">
									<h2 class="mainprojectstitle_re" style="background-color:#FF6F50">COFFEE<br />SHOP</h2></a>
								</div>
								<div class="col-6 col-md-3">
									<a href="<?php echo get_bloginfo('url')?>/projects/take-notice"><img class="img-fluid" width="100%" src="<?php echo get_bloginfo('template_url') ?>/images/takenotice.jpg">
									<h2 class="mainprojectstitle_re" style="background-color:#FF3A4A">TAKE<br />NOTICE</h2></a>
								</div>
								<div class="col-6 col-md-3">
									<a href="<?php echo get_bloginfo('url')?>/projects/listen-to-us"><img class="img-fluid" width="100%" src="<?php echo get_bloginfo('template_url') ?>/images/Listentous.jpg">
									<h2 class="mainprojectstitle_re" style="background-color:#3E77FA">LISTEN<br />TO US</h2></a>
								</div>
								<div class="col-6 col-md-3">
									<a href="<?php echo get_bloginfo('url')?>/projects/hate-crime"><img class="img-fluid" width="100%" src="<?php echo get_bloginfo('template_url') ?>/images/hatecrime.jpg">
									<h2 class="mainprojectstitle_re" style="background-color:#FF4CFF">HATE<br />CRIME</h2></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<!--News, Article and Upcoming events-->
			<section class="newsarcticleue space_re">
				<div class="container">
					<div class="row">
					<!--News section-->
						<div class="col-6 col-md-3">
							<div class="newsarcticleue_style">
								<p><span class="title">NEWS</span></p>
							</div>
							<?php echo do_shortcode("[ic_add_posts category='news'  showposts='1']"); ?>
						</div>
					<!--Articles section-->
						<div class="col-6 col-md-3">
							<div class="newsarcticleue_style">
								<p><span class="title">ARTICLE</span></p>
							</div>
							<?php echo do_shortcode("[ic_add_posts category='Article' showposts='1']"); ?>
						</div>
					<!--Upcoming events section-->
						<div class="col-12 col-md-6">
							<div class="newsarcticleue_style">
								<p><span class="title">UPCOMING EVENTS</span></p>
							</div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-12 no-gutters">
										<?php echo do_shortcode("[events_list limit='3']"); ?>
									</div>
									<div class="col-12" style="padding-top:20px;">
										<a href="<?php echo get_bloginfo('url')?>/events"><h4>Veiw all events</h4></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
<?php include 'footer.php';?>
