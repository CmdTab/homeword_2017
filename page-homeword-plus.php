<?php
/**
 * Template name: Homeword Plus
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Home Word
 */

get_header('homeword-plus'); ?>
	
	<div id="intro" class="sectionContainer hero">
		<div class="blue-box"></div>
		<div class="sideBySide flex wrap group">
			<div class="circle yellow"></div>
			<div class="circle orange"></div>
			<div class="sideBySide--text half first group">
				<h1>Marriage and Family courses for you - or your entire church</h1>
				<p>You can purchase each course for individual use or A HomeWord Plus+ site license gives your entire church access to expertly delivered, scripturally-based marriage and parenting content for one low annual price.</p>
				<div class="action-container">
					<a href="#about" class="btn">Learn More</a>
					<a href="#courses" class="btn btn-gray-lt">Explore Courses</a>
				</div>
			</div>
			<div class="sideBySide--image half group">
				<img src ="<?php bloginfo('template_directory'); ?>/_i/_homeword-plus/explore-courses.png" alt="Homeword Explore Courses Image">
			</div>
		</div>
	</div>

	<div id="about" class="sectionContainer about gray">
		<div class="wrap group">
			<div class="sectionHeader">
				<h2>What's included in a HomeWord Plus+ license</h2>
				<p>With HomeWord Plus+ you get trusted marriage and parenting resources (courses and monthly coaching webinars) for you and your entire congregation with unlimited access.</p>
			</div>
			<div class="list flex">
				<div class="list--image half first group">
					<img src ="<?php bloginfo('template_directory'); ?>/_i/_homeword-plus/homeword-license.png" alt="Homeword Explore Courses Image">
				</div>
				<div class="list--items half group">
					<ul>
						<li>
							<div class="icon">
								<span class="assistive-text">Computer courses icon in blue</span>
								<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-courses.php'); ?>
							</div>
							<span>
								<h3>Courses by Dr. Jim Burns</h3>
								<p>There are 18 courses in marriage, parenting, and personal life relationships (including 3 in Spanish) at your fingertips for everyone in your church to watch at their convenience. Each course includes a <a href="#" class="tooltip">downloadable PDF<span>We've created a downloadable PDF to help you process and personalize the content of these courses.</span></a> to help you follow along.</p>
							</span>
						</li>
						<li>
							<div class="icon">
								<span class="assistive-text">People listening to a webinar icon</span>
								<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-webinars.php'); ?>
							</div>
							<span>
								<h3>Monthly Webinars</h3>
								<p>Access to the HomeWord Monthly Parenting and Marriage Webinar for your entire congregation. Jim Burns brings together some of the finest marriage and parenting experts in the world to help coach, teach and answer questions.</p>
							</span>
						</li>
						<li>
							<div class="icon">
								<span class="assistive-text">Multiple users and a document icon</span>
								<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-unlimited-access.php'); ?>
							</div>
							<span>
								<h3>Unlimited Access</h3>
								<p>One subscription provides unlimited access for everyone in your ministry.</p>
							</span>
						</li>
					</ul>
				</div>
			</div>
			<a href="#courses" class="btn-gray-lt">Browse the Courses</a>
		</div>
	</div>

	<div id="why" class="sectionContainer why blue">
		<div class="wrap group">
			<div class="sectionHeader">
				<h2>Why HomeWord Plus+</h2>
			</div>
			<div class="grid-list">
				<ul>
					<li>
						<div class="icon">
							<span class="assistive-text">Family hugging each other icon</span>
							<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-trusted-content.php'); ?>
						</div>
						<div class="content">
							<h3>Trusted Content</h3>
							<p>Family ministry is challenging and complicated. We can help you lead the families in your church well.</p>
						</div>
					</li>
					<li>
						<div class="icon">
							<span class="assistive-text">Family hugging each other icon</span>
							<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-seamless-delivery.php'); ?>
						</div>
						<div class="content">
							<h3>Seamless Delivery</h3>
							<p>Give your entire team access from one easy-to-access link. Learn from any device.</p>
						</div>
					</li>
					<li>
						<div class="icon">
							<span class="assistive-text">Family watching a course Icon</span>
							<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-multiple-uses.php'); ?>
						</div>
						<div class="content">
							<h3>Multiple Uses</h3>
							<p>Gather and discuss or go at your own pace. Use and reuse this content with individuals, couples, small groups, seminars, retreats, and mentoring.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="arrow scroll-js">
			<span class="assistive-text">Orange arrow pointing down</span>
			<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-orange-arrow.php'); ?>
		</div>
	</div>

	<div id="courses" class="sectionContainer courses gray">
		<div class="sectionHeader">
			<h2>Browse the courses</h2>
		</div>

		<?php if( have_rows('courses') ): ?>
			
			<div class="swiper slider">
				<div class="swiper-wrapper slider--wrapper">

				<?php while( have_rows('courses') ): the_row(); 
				
					$image = get_sub_field('image');
					$sessions = get_sub_field('sessions');
					$title = get_sub_field('title');
					$spanish = get_sub_field('spanish');
					$desc = get_sub_field('desc');
					$instructor = get_sub_field('instructor');
					$instructor_image = get_sub_field('instructor_image');
					$preview_vid = get_sub_field('preview');
				?>

					<div class="swiper-slide slider--slide">
						
						<?php if( $image ): ?>
							<img src="<?php echo $image; ?>" />
						<?php endif; ?>

						<span><?php echo $sessions; ?></span>

						<div class="slider--content">

							<h3><?php echo $title; ?></h3>
							
							<?php if( $spanish ) { ?>
								<span>También en español</span>
							<?php } ?>

							<p><?php echo $desc; ?></p>

							<div class="slider--details">

								<div class="slider--author">
									<img src="<?php echo $instructor_image; ?>" />
									<h4><?php echo $instructor; ?></h4>
								</div>

								<div class="slider--preview">
									<?php if ($preview_vid) { ?>
										<a data-video="<?php echo $preview_vid; ?>" href="#">
											<img src="<?php bloginfo('template_directory'); ?>/_i/_homeword-plus/blue-play-arrow.png" />
											Preview
										</a>
									<?php } ?>
								</div>
							</div>

						</div>
					</div>
					
				<?php endwhile; ?>

				</div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>

		<?php endif; ?>



		<a href="#pricing" class="btn">Purchase Now</a>
	</div>

	<div id="webinar" class="sectionContainer webinar">
		<div class="sideBySide flex wrap group">
			<div class="sideBySide--text half first group">
				<h2>Monthly Webinars with Key Leaders in Marriage and Parenting</h2>
				<p>Everyone in your church or organization will have access to the monthly HomeWord coaching and mentoring webinar. Jim Burns brings together key leaders in the field of parenting and marriage each month to coach, mentor and take questions in this interactive webinar. Recent Guests include:</p>
				<ul>
					<li>Les and Leslie Parrot – Improving Your Marriage</li>
					<li>Albert Tate – Talking with Your Children about Racial Reconciliation</li>
					<li>Kristen Ivy – Parenting Kids 10 and Under</li>
					<li>Doug and Cathy Fields – Marriage and Parenting</li>
				</ul>
				<div class="action-container">
					<a href="#pricing" class="btn">Purchase Access</a>
				</div>
			</div>
			<div class="sideBySide--image half group">
				<img src ="<?php bloginfo('template_directory'); ?>/_i/_homeword-plus/albert-tate.png" alt="Homeword Explore Courses Image">
				<div class="feature">
					<span>Featured Webinar</span>
					<h3>Talking with</h3>
					<h3>Your Children About Racial Reconciliation</h3>
					<h4>Albert Tate</h4>
					<p>Pastor, Fellowship Monrovia</p>
				</div>
			</div>
		</div>
		<div class="arrow yellow scroll-js">
			<span class="assistive-text">Yellow arrow pointing down</span>
			<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-yellow-arrow.php'); ?>
		</div>
	</div>

	<div id="testimonials" class="sectionContainer testimonials blue">
		<div class="sectionHeader">
			<h2>Testimonials</h2>
		</div>

		<?php if( have_rows('testimonials') ): ?>
			
			<div class="swiper testimonial">
				<div class="swiper-wrapper">

				<?php while( have_rows('testimonials') ): the_row(); 
				
					$image = get_sub_field('image');
					$desc = get_sub_field('desc');
					$names = get_sub_field('names');
					$title = get_sub_field('title');
				?>

					<div class="swiper-slide testimonial-slide">
						<div class="testimonial-slide--image">
							<img src="<?php echo $image; ?>" />
						</div>
						<div class="testimonial-slide--content">
							<div class="icon">
								<span class="assistive-text">5 star icons</span>
								<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-star-row.php'); ?>
							</div>
							<p><?php echo $desc; ?></p>
							<h3><?php echo $names; ?></h3>
							<h4><?php echo $title; ?></h4>
						</div>
					</div>

				<?php endwhile; ?>

				</div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		<?php endif; ?>
	</div>

	<div id="pricing" class="sectionContainer pricing">
		<div class="wrap group">
			<div class="sectionHeader">
				<h2>Pricing</h2>
			</div>
			<div class="grid-list">
				<ul>
					<li class="scroll-js">
						<h3>Churches less than 500:</h3>
						<span class="price">$69/month</span>
						<p>Unlimited Access for Churches or Organizations under 500.</p>
						<a href="#" class="btn">Add to Cart</a>
					</li>
					<li class="scroll-js">
						<h3>Churches more than 500:</h3>
						<span class="price">$89/month</span>
						<p>Unlimited Access for Churches or Organizations over 500.</p>
						<a href="#" class="btn">Add to Cart</a>
					</li>
					<li class="scroll-js">
						<h3>Individual Courses</h3>
						<span class="price">$89/course</span>
						<p>Individuals can purchase unlimited access to any course.</p>
						<a href="#courses" class="btn">Browse Courses</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="faq" class="sectionContainer faq gray">
		<div class="wrap group">
			<div class="sectionHeader">
				<h2>Frequently Asked Questions.</h2>
			</div>

			<?php if( have_rows('faq') ): ?>
				
				<ul>
					<?php while( have_rows('faq') ): the_row(); 
					
						$question = get_sub_field('question');
						$answer = get_sub_field('answer');
					?>

					<li class="accordion">
						<div class="accordion--button">
							<div class="accordion--icon plus">
								<span class="assistive-text">Plus icon</span>
								<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-add.php'); ?>
							</div>
							<div class="accordion--icon minus">
								<span class="assistive-text">Plus icon</span>
								<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-minus.php'); ?>
							</div>
							<span><?php echo $question; ?></span>
							<div class="accordion--content">
								<p><?php echo $answer; ?></p>
							</div>
						</div>
					</li>

					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
	<div class="overlay-content">
		<a href = "#" class="overlay-close">&times;</a>
		<div class="overlay-video">
		</div>
	</div>
	<div class="overlay"></div>

<?php get_footer('homeword-plus'); ?>
