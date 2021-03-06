<?php
  $date = get_field('event_date', false, false);
  $date = new DateTime($date);
?>

<div class="columns small-24">
  <a href="<?php the_permalink(); ?>" class="agenda-block agenda-block--small">
    <div class="agenda__inner">
      <p class="agenda__date">
        <span><?php echo $date->format('D j M'); ?></span>
      </p>
      <div class="agenda__content">
        <p class="agenda__title">
          <?php the_title(); ?>
        </p>
        <span class="agenda__subtitle">
          <?php
            if (!empty(get_field('event_subtitle'))) :
              echo get_field('event_subtitle');
            endif;
          ?>
        </span>
        <span class="agenda__subtext"><?php the_field('event_subtext')?></span>
        <span class="agenda__price">
          <?php
            if (empty(get_field('event_price'))) :
              echo "Gratis";
            else :
              echo "€". get_field('event_price');
            endif;
          ?>
        </span>
        <span class="agenda__time">Deur open: <?php the_field('event_open')?> uur<br>Aanvang: <?php the_field('event_start')?> uur</span>
      </div>
    </div>
  </a>
</div>
