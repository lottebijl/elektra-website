<?php get_header(); ?>

  <section class="header header-artist" data-value="<?php echo $image ?>" style="background-image:url('<?php echo $image ?>')">
  <div class="parallax-window parallax" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory');?>/assets/images/header-bluespills.jpg"></div>
  <div class="container">
    <div class="row">
      <div class="columns small-30">
        <div class="header-container">
          <div class="header-content">
            <p class="title"><?php the_title(); ?></p>
            <p class="genre"><?the_field('genre')?></p>
            <?php if (get_field('land_van_herkomst')) : ?>
            	<p class="country">uit <?the_field('land_van_herkomst')?></p>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <article class="container-article container-artist">
    <div class="container">
      <div class="row bg-lightblue">
        <div class="columns small-30">
          <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?the_field('youtube_link')?>" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="content-container">
          <div class="columns small-30 large-10 large-push-20">
            <div class="artist-info">
							<?php if (get_field('vergelijkbare_bands')) : ?>
								<strong>Klinkt als</strong>
								<p><?the_field('vergelijkbare_bands')?></p>
							<?php endif ?>
							<? if ( get_field('in_coming_line_up') == true ) : ?>
				        <strong><? the_field('stage')?></strong>
								<?php if (get_field('band_playtime_start') && get_field('band_playtime_stop') ) : ?>
									<p><?the_field('band_playtime_start')?> - <?the_field('band_playtime_stop')?></p>
								<?php endif ?>
							<?php else : ?>
								<?php
									$field = get_field_object('tuinfeest_played');
									$value = $field['value'];
									$label = $field['choices'][ $value ];
								?>
								<strong>Deze band speelde op</strong>
								<p><?php echo $label; ?></p>
							<?php endif ?>
							<ul>
								<?php if (get_field('facebook_link')) : ?>
									<li><a href="<?the_field('facebook_link')?>">Facebook</a></li>
								<?php endif ?>
								<?php if (get_field('officiele_website_link')) : ?>
									<li><a href="<?the_field('officiele_website_link')?>">Official website</a></li>
								<?php endif ?>
							</ul>
            </div>
            <?php if (get_field('spotify_embed_link')) : ?>
				<div class="spotify-container">
				  <iframe src="https://embed.spotify.com/?uri=<?the_field('spotify_embed_link')?>" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
				</div>
            <?php endif ?>
          </div>
          <div class="columns small-30 large-20 large-pull-10">
            <div class="content">
            	<?php
								$id = get_the_id();
								$post = get_post($id);
								$content = apply_filters('the_content', $post->post_content);
								echo $content;
							?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
<?php get_footer();?>
