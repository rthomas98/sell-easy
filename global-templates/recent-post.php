<div class="container mb-5">
<div class="row mb-3">
    <div class="col mb-3">
        <h2>Recent Post</h2>
    </div>
</div>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php $loop = new WP_Query( array( 'post_type' => 'post', 'offset'=> 0, 'orderby' => 'post_id', 'order' => 'DSC', 'posts_per_page'=>'3' ) ); ?>

  <div class="row">

    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="col-sm-12 col-md-12 col-lg-4 text-center">

    <a href="<?php the_permalink() ?>">  <?php
          if ( has_post_thumbnail() ) {
              the_post_thumbnail( 'custom-size', array( 'class'  => 'img-fluid mb-3' ) );
          }
          ?>
    </a>

      <h5><a href="<?php the_permalink() ?>">
          <?php echo substr(the_title('', '', FALSE), 0, 24); ?> ...</a></h5>
      <p>
        <?php echo substr(get_the_excerpt(), 0,100); ?>...</p>
      <p><a href="<?php the_permalink() ?>" class="btn btn-secondary">View Post</a></p>

    </div>

    <?php endwhile;
              wp_reset_query(); ?>

  </div><!-- end row -->

  </article><!-- #post-## -->
</div>