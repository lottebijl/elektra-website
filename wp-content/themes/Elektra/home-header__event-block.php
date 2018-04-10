<?php
	$image = get_field('event_image');
	$date = get_field('event_date', false, false);
	$date = new DateTime($date);
?>

<div class="columns small-24 large-14 float-right">
  <a href="<?php the_permalink();?>" class="event-block">
    <div class="today">
      <p class="today__title">Upcoming<span><?php echo $date->format('j M Y'); ?></span></p>
      <ul class="today__info">
				<?php
					if(!empty(get_field('event_open'))) :
						echo "<li>deur open:<span>".get_field('event_open')."</span></li>";
					endif;
				?>
				<?php
					if(!empty(get_field('event_start'))) :
						echo "<li>start:<span>".get_field('event_start')."</span></li>";
					endif;
				?>
        <li>entree:<span>
					<?php
						if (empty(get_field('event_price'))) :
							echo "Gratis";
						else :
							echo "€". get_field('event_price');
						endif;
					?>
				</span></li>
      </ul>
    </div>
    <figure class="event__bg" style="background-image:url('<?php echo $image ?>')"></figure>
    <p class="event__title"><?php the_title(); ?></p>
    <p class="event__subtitle">
			<?php
				if(!empty(get_field('event_band_genre'))) :
					echo get_field('event_band_genre');
				else :
					echo get_field('event_band_subtitle');
				endif;
			?>
    </p>
  </a>
</div>
