<?php get_header();?>
<?php
	$image = get_field('event_image');
?>
<section class="header header--event">
  <figure class="header__figure" style="background-image:url('<?php echo $image ?>')">
  </figure>
  <div class="row">
    <div class="columns small-24 large-14 large-offset-1 end">
      <p class="header__date"><?the_field('event_date')?></p>
      <p class="header__title"><?php the_title(); ?></p>
      <p class="header__genre">
        <?php if (get_field('event_band_genre')): ?>
          <?the_field('event_band_genre');?>
        <?php else: ?>
          <?the_field('event_subtitle');?>
        <?php endif; ?>
      </p>
    </div>
  </div>
</section>
<article class="container-event">
  <div class="container">
    <div class="row">
      <div class="header__video">
        <div class="row">
          <div class="columns small-24 large-14 float-right">
            <div class="video-container">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?the_field('event_band_yt')?>" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="content-container">
        <div class="columns small-24 large-14 large-push-10">
          <div class="content">
            <?php
              $id = get_the_id();
              $post = get_post($id);
              $content = apply_filters('the_content', $post->post_content);
              echo $content;
            ?>
          </div>
        </div>
        <div class="columns small-24 large-8 large-pull-15">
          <div class="artist-info">
              <strong>Entree</strong>
              <?php if (get_field('event_price')): ?>
                <p>€<?the_field('event_price')?>,-</p>
              <?php else: ?>
                <p>Gratis</p>
              <?php endif; ?>
              <strong>Deur open</strong>
              <p><?the_field('event_open')?></p>
              <strong>Start</strong>
              <p><?the_field('event_start')?></p>
            <ul>
              <?php if (get_field('event_band_fb')): ?>
                <li><a href="<?the_field('event_band_fb')?>">Facebook</a></li>
              <?php endif; ?>
              <?php if (get_field('event_band_site')): ?>
                <li><a href="<?the_field('event_band_site')?>">Official website</a></li>
              <?php endif; ?>
            </ul>
          </div>
          <div class="spotify-container">
				    <iframe src="https://embed.spotify.com/?uri=<?the_field('event_band_spf')?>" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
				  </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</article>
<?php get_footer();?>
