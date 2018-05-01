<?php get_header();?>
<?php
	if ( is_front_page() && is_home() ) :
		include('header-home.php');
	endif;
?>

<section class="section-bevestigd">
  <div class="row">
    <div class="columns small-24">
      <p class="section-bevestigd__title">Net bevestigd</p>
    </div>
  </div>
  <div class="row">

		<?php
			$today = date('Ymd');

			$args = array(
				'post_type' => 'events',
				'posts_per_page' => '3',
				'meta_query' => array(
					array(
						'key'		=> 'event_date',
						'compare'	=> '>=',
						'value'		=> $today,
					)
				),
				'orderby'	=> 'meta_value_num',
				'order'		=> 'ASC'
			);
			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) : $the_query->the_post();
					include('event-block.php');
				endwhile;
			else :
				_e( 'Er zijn geen evenementen gevonden.' );
			endif;
		?>

  </div>
  <div class="row">
    <div class="columns small-24">
      <a href="/agenda" class="btn btn-primary dark">Bekijk volledige agenda</a>
    </div>
  </div>
</section>

<?php get_footer();?>
