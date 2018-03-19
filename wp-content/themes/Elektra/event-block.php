<?
	$image = get_field('event_image');
?>

<div class="columns small-24 large-8 end">
<a href="<?php the_permalink(); ?>" class="tilter agenda-block">
  <figure class="tilter__figure agenda__bg">
    <div class="tilter__image agenda__image" style="background-image:url('<?php echo $image ?>')"></div>
    <figcaption class="tilter__caption agenda__inner">
      <p class="agenda__date">
        <?php

          $format_in = 'yymmdd'; // the format your value is saved in (set in the field options)
          $format_out = 'dd-mm-YY'; // the format you want to end up with

          $date = DateTime::createFromFormat($format_in, the_field('event_date'));
          echo $date;
          // echo $date->format( $format_out );

        ?>
      </p>
      <div class="agenda__content">
        <p class="agenda__title">
          <?php the_title(); ?>
        </p>
        <span class="agenda__subtitle"><?the_field('event_band_genre')?><?the_field('event_subtitle')?></span>
        <span class="agenda__price">€ <?the_field('event_price')?></span>
      </div>
    </figcaption>
  </figure>
</a>
</div>
