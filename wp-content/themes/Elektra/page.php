<?php get_header(); ?>
<section class="header header--fixed">
  <div class="row">
    <div class="columns small-24 large-14 large-offset-1 end">
      <p class="header__title"><?php the_title(); ?></p>
    </div>
  </div>
</section>
<article class="container-article">
  <div class="container">
    <div class="row">
      <div class="content-container">
        <div class="columns small-24 large-14 large-push-10">
          <div class="content">
            <div id="trigger1"></div>
            <p><?php
              $id = get_the_id();
              $post = get_post($id);
              $content = apply_filters('the_content', $post->post_content);
              echo $content;
            ?></p>
          </div>
        </div>
        <div class="columns small-24 large-9 large-pull-14">
          <?php wp_nav_menu(
              array(
                'theme_location' => 'content-menu',
                'container' => '',
                'menu_class' => 'btn-list',
                'menu_id' => 'pinned-menu'
              )
            );
          ?>
          <!-- <ul class="btn-list" id="pinned-menu">
              <li><a href="vrijwilliger-worden.php"  class="btn btn-primary">Vrijwilliger worden bij Elektra</a></li>
              <li><a href="artiest-info.php"  class="btn btn-primary">Artiest info</a></li>
              <li><a href="repeteren.php"  class="btn btn-primary">Oefenruimte</a></li>
              <li><a href="huisregels.php"  class="btn btn-primary">Huisregels</a></li>
              <li><a href="http://www.sojs.nl"  target="_blank" class="btn btn-primary">Meer over SOJS</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</article>
<?php get_footer(); ?>
