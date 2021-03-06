<footer>
  <div class="row">
    <div class="columns small-24 large-10">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer-menu',
            'container' => '',
            'menu_class' => 'footer__nav',
          )
        );
      ?>
      </ul>
    </div>
    <div class="columns small-24 large-8 end">
      <a href="http://www.sojs.nl"><img src="<?php bloginfo('template_directory');?>/assets/images/logo-sojs--white.png" class="footer__logo"></a>
      <p class="footer__text">Poppodium Elektra maakt deel uit Stichting Open Jeugdwerk Sliedrecht</p>
      <a href="http://www.sojs.nl" target="_blank" class="footer__link"><i class="icon icon-arrow"></i>Meer over SOJS</a>
    </div>
  </div>
</footer><script type="text/javascript">
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');

	__gaTracker('create', 'UA-46271554-1', 'auto');
	__gaTracker('set', 'forceSSL', true);
	__gaTracker('send','pageview');

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46619305-2', 'elektra-sliedrecht.nl');
  ga('send', 'pageview');

</script>
<script src="<?php bloginfo('template_directory');?>/js/vendor.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/script.min.js"></script>
<script><!-- TODO: analytics --></script>
</body>
</html>
