<?php get_header();?>
<?php
	// $image = get_field('event_image');
	// $date = get_field('event_date', false, false);
	// $date = new DateTime($date);
?>
<section class="header header--fixed">
  <div class="row">
    <div class="columns small-24">
      <p class="header__title"><?php the_title(); ?></p>
    </div>
  </div>
</section>
<article class="container-article">
  <div class="container">
    <div class="row">
      <div class="content-container">
        <div class="columns small-24">
          <div class="content">
            <div id="trigger1"></div>
            <p>
							<?php
								$id = get_the_id();
								$post = get_post($id);
								$content = apply_filters('the_content', $post->post_content);
								_e($content);
							?>
						</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
<?php get_footer(); ?>
