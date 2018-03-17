<div class="columns small-24">
  <a href="event-disquiet.php" class="agenda-block agenda-block--small">
    <div class="agenda__inner">
      <p class="agenda__date">
        zat
        <span><?the_field('event_date')?></span>
      </p>
      <div class="agenda__content">
        <p class="agenda__title">
          <?php the_title(); ?>
        </p>
        <span class="agenda__subtitle"><?the_field('event_band_genre')?><?the_field('event_subtitle')?></span>
        <span class="agenda__subtext">Van Thrash tot Technical Death Metal, headbangen wordt deze avond een garantie</span>
        <span class="agenda__price">€<?the_field('event_price')?></span>
        <span class="agenda__time">Deur open: <?the_field('event_open')?> uur<br>Aanvang: <?the_field('event_start')?> uur</span>
      </div>
    </div>
  </a>
</div>
