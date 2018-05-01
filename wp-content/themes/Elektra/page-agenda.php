<?php get_header();?>
<?php	require_once('header-default.php'); ?>

<article class="container-article">
  <div class="container">
    <div class="row">

      <?php
      		$args = array(
            'post_type' => 'events',
            'meta_query' => array(
              array(
                'key'		=> 'event_date',
              )
            ),
            'orderby'	=> 'meta_value_num',
            'order'		=> 'ASC'
          );

      		$the_query = new WP_Query( $args );

      		if ( $the_query->have_posts() ) :
      			while ( $the_query->have_posts() ) : $the_query->the_post();
      				include('agenda-event-block.php');
      			endwhile;
      		else :
      			_e( 'Er zijn geen evenementen gevonden.' );
      		endif;
      	?>

    </div>
  </div>
</article>

<?php get_footer();?>
