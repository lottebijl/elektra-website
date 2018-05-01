<?php get_header();?>
<?php
	$image = get_field('event_image');
	$date = get_field('event_date', false, false);
	$date = new DateTime($date);
?>
<section class="header header--event">
  <figure class="header__figure" style="background-image:url('<?php echo $image ?>')">
  </figure>
  <div class="row">
    <div class="columns small-24 large-14 large-offset-1 end">
      <p class="header__date"><?php echo $date->format('j M Y'); ?></p>
      <p class="header__title"><?php the_title(); ?></p>
      <p class="header__genre">
				<?php
					if (!empty(get_field('event_band_genre'))) :
						echo get_field('event_band_genre');
					else :
						echo get_field('event_subtitle');
					endif;
				?>
      </p>
    </div>
  </div>
</section>
<article class="container-event">
  <div class="container">
    <div class="row">
			<?php if (get_field('event_yt')): ?>
	      <div class="header__video">
	        <div class="row">
	          <div class="columns small-24 large-14 float-right">
	            <div class="video-container">
	              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php the_field('event_yt')?>" frameborder="0" allowfullscreen></iframe>
	            </div>
	          </div>
	        </div>
	      </div>
			<?php endif; ?>
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
              <p>
							<?php
								if (empty(get_field('event_price'))) :
									echo "Gratis";
								else :
									echo "€". get_field('event_price');
								endif;
							?>
							</p>
							<?php
								if (!empty(get_field('event_open'))) :
									echo"<strong>Deur open</strong>";
									echo "<p>" . get_field('event_open') . "</p>";
								endif;
							?>
							<?php
								if (!empty(get_field('event_start'))) :
									echo"<strong>Start</strong>";
									echo "<p>" . get_field('event_start') . "</p>";
								endif;
							?>
            <ul>
							<?php
								if (!empty(get_field('event_fb'))) :
									echo '<li><a href="'.get_field('event_fb').'">Facebook</a></li>';
								endif;
							?>
							<?php
								if (!empty(get_field('event_band_site'))) :
									echo '<li><a href="'.get_field('event_band_site').'">Official website</a></li>';
								endif;
							?>
            </ul>
          </div>
          <div class="spotify-container">
						<?php
							if (!empty(get_field('event_band_spf'))) :
								echo '<iframe src="https://embed.spotify.com/?uri='.get_field('event_band_spf').'" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
							endif;
						?>
				  </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</article>
<?php get_footer();?>
