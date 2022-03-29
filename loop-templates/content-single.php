<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<div class="sub-banner dark-tint d-flex align-items-center" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="container pt-5">
        <div class="row">
            <div class="col">
			<p class="mt-4">
                    <a class="btn btn-primary btn-lg"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></a>
				</p>
                <h1 class="text-white"><?php the_title(); ?></h1>
                <p class="text-white">
					<small>
						<?php echo get_the_date( get_option('date_format') ); ?>
					</small>
				</p>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
	<div class="row">
		<div class="col">
			<?php the_content(); ?>
		</div>
	</div>
</div>

	


	

</article><!-- #post-## -->

<?php get_template_part( 'global-templates/recent-post' ); ?>


<?php get_template_part( 'global-templates/red-cta'); ?>