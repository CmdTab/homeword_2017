<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Home Word
 */
?>

		<footer class="site-footer" role="contentinfo">
			<div class="content-wrap">
				<?php do_action( 'homeword_credits' ); ?>
				<ul class="three-list group">
					<li>
						<h3>About HomeWord</h3>
						<p>HomeWord helps families succeed by creating Biblical resources that build strong marriages, confident parents, empowered kids and healthy leaders. Founded by Jim Burns, HomeWord seeks to advance the work of God in the world by educating, equipping, and encouraging parents and churches. <a href = "<?php echo esc_url( home_url( '/' ) ); ?>about">Learn More &raquo;</a></p>
						<ul class="social ">
							<li>
								<a href = "https://www.facebook.com/Homeword" target="_blank">
									<span aria-hidden="true" data-icon="&#x66;"></span>
									<span class="assistive-text">Facebook</span>
								</a>
							</li>
							<li>
								<a href = "https://twitter.com/drjimburns" target="_blank">
									<span aria-hidden="true" data-icon="&#x74;"></span>
									<span class="assistive-text">Twitter</span>
								</a>
							</li>
							<li>
								<a href = "http://www.pinterest.com/homewordcenter" target="_blank">
									<span aria-hidden="true" data-icon="&#x70;"></span>
									<span class="assistive-text">Pinterest</span>
								</a>
							</li>
							<li>
								<a href = "https://instagram.com/homewordcenter?igshid=h9kt72lxx4p2" target="_blank">
									<span aria-hidden="true" data-icon="&#x69;"></span>
									<span class="assistive-text">Instagram</span>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UCY1vTdorwRKBSgdM5opbTsQ" target="_blank">
									<span aria-hidden="true" data-icon="y"></span>
									<span class="assistive-text">YouTube</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<h3>Support Our Mission</h3>
						<p>HomeWord is non-profit, donor supported ministry. If you would like to partner with HomeWord in our effort to help more parents and families you can make a donation. Your investment will allow us to expand this ministry by offering more resources to families and churches in need.</p>
						<ul class="footer-options">
							<li>
								<a href = "https://homeword.com/your-donation">
									Donate Now
								</a>
							</li>
							<li>
								<a href = "https://homeword.com/store/">
									View Resources
								</a>
							</li>
						</ul>
					</li>
					<li>
						<h3>Contact Information</h3>
						<ul class="contact-info">
							<li>
								<span aria-hidden="true" data-icon="&#x4c;"></span>
								<p>HomeWord<br />
								PO Box 1600<br />
								San Juan Capistrano, CA<br />
								92693</p>
							</li>
							<li>
								<span aria-hidden="true" data-icon="&#x4d;"></span>
								<p><a href = "/contact-us/">Send us an email</a></p>
							</li>
							<li>
								<span aria-hidden="true" data-icon="&#x54;"></span>
								<p><strong>800-397-9725</strong><br />
								<small>(M-F: 8:30am-5pm PST)</small></p>
							</li>
							<li>

								<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2F<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>
							</li>

						</ul>
					</li>
				</ul>
			</div><!-- .content-wrap -->
			<div class="bottom-footer">
				<div class="content-wrap group">
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => '', 'container' => false) ); ?>
					<!--<ul>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
						</li>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/families/?cat=families">Families</a>
						</li>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/about">About</a>
						</li>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/store">Store</a>
						</li>
						<li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/your-donation">Donate</a>
						</li>
					</ul>-->
					<div class="copyright">
						Copyright &copy; <?php echo date("Y"); ?> HomeWord. All Rights Reserved.
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- site-content -->
</div><!--site-->
<div class="modalVideo"><div class="modalContent"></div><a href = "#" class="hideModal">Close</a></div>
<?php wp_footer(); ?>
<!--<script src="//localhost:35729/livereload.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_js/production.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48079221-1', 'homeword.com');
  ga('send', 'pageview');

</script>
</body>
</html>
