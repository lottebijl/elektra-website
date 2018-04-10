<?php
	$image = get_field('event_image');
	$date = get_field('event_date', false, false);
	$date = new DateTime($date);
?>

<div class="columns small-24 large-8 end">
<a href="<?php the_permalink(); ?>" class="tilter agenda-block">
  <figure class="tilter__figure agenda__bg">
    <div class="tilter__image agenda__image" style="background-image:url('<?php echo $image ?>')"></div>
    <figcaption class="tilter__caption agenda__inner">
      <p class="agenda__date"><?php echo $date->format('j M Y'); ?></p>
      <div class="agenda__content">
        <p class="agenda__title">
          <?php the_title(); ?>
        </p>
        <span class="agenda__subtitle">
					<?php
						if (!empty(get_field('event_band_genre'))) :
							echo get_field('event_band_genre');
						else :
							echo get_field('event_subtitle');
						endif;
					?>
				</span>
        <span class="agenda__price">
					<?php
						if (empty(get_field('event_price'))) :
							echo "Gratis";
						else :
							echo "€". get_field('event_price');
						endif;
					?>
				</span>
      </div>
    </figcaption>
  </figure>
</a>
</div>
