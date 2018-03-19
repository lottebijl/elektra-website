<section class="header header--home">
  <figure class="header__figure" style="background-image:url('<?php bloginfo('template_directory');?>/assets/images/elektra-bg.jpg')">
  </figure>
  <div class="row">
    <div class="columns small-24 large-14 large-offset-1 end">
      <p class="header__title">Het <span>poppodium</span> voor en door jongeren in <span>Sliedrecht</span></p>
      <ul class="header__joinlist">
        <li><a href="over-elektra.php" class="btn btn-primary"><span clas="icon icon-mail"></span>Meer over Elektra</a></li>
        <li><a href="vrijwilliger-worden.php" class="btn btn-primary"><span clas="icon icon-mail"></span>Vrijwilliger worden bij Elektra</a></li>
      </ul>
      <ul class="header__contactlist">
        <li><a href="google-maps.php" class="btn btn-primary"><span class="icon icon-pin"></span>Stationsweg 4, Sliedrecht</a></li>
        <li><a href="mailto:bestuur@sojs.nl" class="btn btn-primary"><span clas="icon icon-mail"></span>bestuur@sojs.nl</a></li>
        <li><a href="tel:031184414273" class="btn btn-primary"><span class="icon icon-phone"></span>+31184 - 414273</a></li>
      </ul>
    </div>
  </div>

  <div class="section-today">
    <div class="row">
    <?php

        $today = date('Ymd');

        $args = get_posts(array(
          'post_type'	=> 'events',
          'posts_per_page' => '1',
          'meta_query' => array(
            array(
              'key'		=> 'event_date',
              'compare'	=> '>=',
              'value'		=> $today,
            )
          ),
          'orderby'	=> 'meta_value_num',
          'order'		=> 'ASC'
        ));

        echo $today;

        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
            include('home-event-block.php');
          endwhile;
        else :
          _e( 'Er is geen evenement gevonden' );
        endif;

      ?>
      <div class="columns small-24 large-9 large-pull-1 xlarge-pull-0">
        <div class="highlighted-newsitem">
          <span>het laatste nieuws</span>
          <h2>Oud-vrijwilligers jaren 80 gezocht</h2>
          <p>Op 12 mei zal een 80's feest plaatsvinden, maar we zijn nog hard op zoek naar oud-vrijwilligers en bands van toen die mee willen helpen.</p>
          <a href="event-reunie-80.php" class="btn btn-primary dark">Lees meer</a>
        </div>
      </div>
    </div>
  </div>
</section>
