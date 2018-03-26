<?
	$image = get_field('event_image');
?>

<div class="columns small-24 large-14 float-right">
  <a href="<?php the_permalink();?>" class="event-block">
    <div class="today">
      <p class="today__title"><?the_field('event_date')?></p>
      <ul class="today__info">
        <li>deur open:<span><?the_field('event_open')?>uur</span></li>
        <li>start:<span><?the_field('event_start')?> uur</span></li>
        <li>entree:<span>€<?the_field('event_price')?></span></li>
      </ul>
    </div>
    <figure class="event__bg" style="background-image:url('<?php echo $image ?>')"></figure>
    <p class="event__title"><?php the_title(); ?></p>
    <p class="event__subtitle">
      <?php if (get_field('event_band_genre')): ?>
        <?the_field('event_band_genre');?>
      <?php else: ?>
        <?the_field('event_subtitle');?>
      <?php endif; ?>
    </p>
  </a>
</div>
