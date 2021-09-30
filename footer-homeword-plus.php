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
      <div class="wrap group">

        <div class="site-footer--top">
          <a href="#">
            <span class="assistive-text">homeword plus logo in white</span>
            <?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-homeword-logo-white.php'); ?>
          </a>
          <p>Marriage and Family courses for you - or your entire church.</p>
        </div>

        <div class="site-footer--bottom">
          <div class="social">
            <a href="https://www.facebook.com/Homeword" class="icon-social">
              <span class="assistive-text">facebook logo</span>
              <?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-facebook.php'); ?>
            </a>
            <a href="https://twitter.com/drjimburns" class="icon-social">
              <span class="assistive-text">twitter logo</span>
              <?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-twitter.php'); ?>
            </a>
            <a href="https://www.instagram.com/homewordcenter/?igshid=h9kt72lxx4p2" class="icon-social">
              <span class="assistive-text">instagram logo</span>
              <?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-instagram.php'); ?>
            </a>
            <a href="https://www.youtube.com/channel/UCY1vTdorwRKBSgdM5opbTsQ" class="icon-social">
              <span class="assistive-text">youtube logo</span>
              <?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-youtube.php'); ?>
            </a>
          </div>
          <div class="copyright">
            Copyright &copy; HomeWord <?php echo date("Y"); ?> All Rights Reserved.
          </div>
        </div>
      </div>
		</footer><!-- #colophon -->
	</div><!-- site-content -->
</div><!--site-->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_js/production.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>

  const navItem = document.querySelector('nav a');
  const navMenu = document.querySelector('.site-header--menu');

  navItem.addEventListener('click', function() {
    navMenu.classList.remove('visible');
  });

  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    autoplay: {
      delay: 10000,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
      1000: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1600: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      2200: {
        slidesPerView: 4,
        spaceBetween: 40
      }
    }
  }); 

  const testimonialSwiper = new Swiper('.swiper.testimonial', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 30,
    freeMode: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    autoplay: {
      delay: 10000,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // Responsive breakpoints
    breakpoints: {
      1200: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1800: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      2400: {
        slidesPerView: 4,
        spaceBetween: 40
      }
    }
  });

  const accordionBtns = document.querySelectorAll(".accordion--button");

		accordionBtns.forEach((accordion) => {
			accordion.onclick = function () {
				this.parentNode.classList.toggle("active");
				let content = accordion.querySelector('.accordion--content');

				if (content.style.maxHeight) {
					//this is if the accordion is open
					content.style.maxHeight = null;
				} else {
					//if the accordion is currently closed
					content.style.maxHeight = content.scrollHeight + "px";
					console.log(content.style.maxHeight);
				}
			};
		});

		let toggle = document.querySelector('.menu-icon'),
		menu = document.querySelector('.site-header--menu');

		toggle.addEventListener('click', function(e) {
			e.preventDefault();
			menu.classList.toggle('visible');
		});
</script>
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
