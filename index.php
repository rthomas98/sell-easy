<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<?php get_template_part( 'global-templates/navbar' ); ?>


<?php 

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<div class="blog-banner blue-tint d-flex align-items-center">
    <div class="container pt-5">
        <div class="row ">
            <div class="col text-center">
				<h1 class="text-white">Our Blog</h1>
				<p class="text-white">Your life insurance policy is a financial asset – one that can be sold for cash.</p>
			</div>
        </div>
    </div>
</div>

				
<div class="container py-5">
	<?php
global $post;
$tmp_post = $post;
$args = array( 'numberposts' => 1, 'orderby' => 'rand', 'post_status' => 'publish', 'offset' => 0);
$rand_posts = get_posts( $args );
foreach( $rand_posts as $post ) : ?>

<div class="row g-0 mb-5">
	<div class="col-sm-12 col-md-12 col-lg-6">
		<?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
	</div>
	<div class="col-sm-12 col-md-12 col-lg-6 bg-red p-5 post-content-recent align-self-stretch">
		<h2 class="text-white"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="text-white"><?php the_excerpt(); ?></p>
	</div>

    
<?php endforeach; ?>
</div>

</div>

<div class="container mb-5">
  <div class="row">
	              
	              
	              <?php
					if ( get_query_var('paged') ) {
					    $paged = get_query_var('paged');
					} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
					    $paged = get_query_var('page');
					} else {
					    $paged = 1;
					}
					
					$custom_query_args = array(
					    'post_type' => 'post', 
					    'posts_per_page' => get_option('posts_per_page'),
					    'paged' => $paged,
						'offset' => 1,
					    'post_status' => 'publish',
					    'ignore_sticky_posts' => true,
					    //'category_name' => 'custom-cat',
					    'order' => 'DESC', // 'ASC'
					    'orderby' => 'date' // modified | title | name | ID | rand
					);
					$custom_query = new WP_Query( $custom_query_args );
					
					if ( $custom_query->have_posts() ) :
					    while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
					    
					    <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
					        <article class="" <?php post_class(); ?>>

          

						<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'post', array( 'class'  => 'img-fluid mb-3 mt-3' ) );
							}
						?>
					          
						 <p>
							<small><?php the_time('F jS, Y') ?></small>
						</p>

						<h5>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h5>
	
					              
						<?php echo wp_trim_words( get_the_content(),20, '' ); ?>
									
						<p class="mt-5"><a href="<?php the_permalink() ?>" class="btn btn-secondary">View Post</a></p>
					            
					        </article>
					        				        
					        
					    </div>
					
					    <?php
					    endwhile;
					    ?>
					
					    <?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
					        <?php
					        $orig_query = $wp_query; // fix for pagination to work
					        $wp_query = $custom_query;
					        ?>
					        <nav class="row">
					            <div class="col-sm-6 text-left">
					                <h5><?php echo get_next_posts_link( '', $custom_query->max_num_pages ); ?></h5>
					            </div>
					            <div class="col-sm-6 text-right">
					                <h5><?php echo get_previous_posts_link( '' ); ?></h5>
					            </div>
					        </nav>
					        <?php
					        $wp_query = $orig_query; // fix for pagination to work
					        ?>
					    <?php endif; ?>
					
					<?php
					    wp_reset_postdata(); // reset the query 
					else:
					    echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
					endif;
					?>
										
				

              </div><!-- end row -->
  </div>

			


<!-- The pagination component -->
<?php understrap_pagination(); ?>

<?php get_template_part( 'global-templates/site-footer' ); ?>


<?php
get_footer();
