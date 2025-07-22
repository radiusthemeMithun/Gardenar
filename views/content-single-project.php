<?php
/**
 * The template for displaying all single project
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gardenar
 */

use RT\Gardenar\Options\Opt;

global $post;
$id = get_the_ID();
$rt_project_title 		= get_post_meta( $id, 'rt_project_title', true );
$rt_project_text 		= get_post_meta( $id, 'rt_project_text', true );
$rt_project_client 		= get_post_meta( $id, 'rt_project_client', true );
$rt_project_start 		= get_post_meta( $id, 'rt_project_start', true );
$rt_project_end 		= get_post_meta( $id, 'rt_project_end', true );
$rt_project_weblink 	= get_post_meta( $id, 'rt_project_weblink', true );
$rt_project_location 	= get_post_meta( $id, 'rt_project_location', true );
$rt_project_date 	= get_post_meta( $id, 'rt_project_date', true );
$project_banner_image 	= get_post_meta( $id, 'project_banner_image', true );

$ratting	 	= get_post_meta( $id, 'rt_project_rating', true );
$rt_project_rating = 5- intval( $ratting );

?>
<div id="post-<?php the_ID();?>" <?php post_class( 'project-single' );?>>
	<div class="project-single-item">
		<div class="project-single-img">
			<?php if ( has_post_thumbnail() ) { ?>
				<div class="post-thumbnail-wrap single-post-thumbnail">
					<figure class="post-thumbnail">
						<?php the_post_thumbnail('gardenar-size3'); ?>
					</figure><!-- .post-thumbnail -->
				</div>
			<?php } ?>
		</div>
		<div class="project-item-wrap">
			<div class="project-item-content">
				<div class="project-content">
					<?php if( ! Opt::$breadcrumb_title == 1 ) { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>
					<?php the_content();?>
				</div>
			</div>
			<div class="project-content-info sidebar-sticky">
				<div class="project-information">
					<?php if ( !empty( $rt_project_title ) && gardenar_option( 'rt_project_title' )) { ?>
						<div class="rt-section-title style3 has-animation">
							<h3 class="info-title"><?php echo esc_html( $rt_project_title );?><span class="line"></span></h3>
						</div>
					<?php } if ( !empty( $rt_project_text ) && gardenar_option( 'rt_project_text' ) ) { ?>
						<p><?php echo esc_html( $rt_project_text );?></p>
					<?php } ?>
					<ul class="info-list">
						<?php if ( gardenar_option( 'rt_project_cat' ) ) { ?>
							<li><label><?php esc_html_e( 'Category', 'gardenar' );?>: </label>
								<span class="project-cat"><?php
									$i = 1;
									$term_lists = get_the_terms( get_the_ID(), 'rt-project-category' );
									if( $term_lists ) { foreach ( $term_lists as $term_list ){
										$link = get_term_link( $term_list->term_id, 'rt-project-category' ); ?>
										<?php if ( $i > 1 ){ echo esc_html( ', ' ); } ?><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $term_list->name ); ?></a><?php $i++; } } ?></span>
							</li>
						<?php } ?>
						<?php if ( !empty( $rt_project_client ) && gardenar_option( 'rt_project_client' ) ) { ?>
							<li><label><?php esc_html_e( 'Garden Owner', 'gardenar' );?>: </label><?php echo esc_html( $rt_project_client );?></li>
						<?php } if ( !empty( $rt_project_location ) && gardenar_option( 'rt_project_location' ) ) { ?>
							<li><label><?php esc_html_e( 'Location', 'gardenar' );?>: </label><?php echo esc_html( $rt_project_location );?></li>
						<?php }
						if ( !empty( $rt_project_date ) && gardenar_option( 'rt_project_date' ) ) { ?>
							<li><label><?php esc_html_e( 'Date', 'gardenar' );?>: </label><?php echo esc_html( $rt_project_date );?></li>
						<?php }
						if ( !empty( $rt_project_start ) && gardenar_option( 'rt_project_start' ) ) { ?>
							<li><label><?php esc_html_e( 'Starts On', 'gardenar' );?>: </label><?php echo esc_html( $rt_project_start );?></li>
						<?php } if ( !empty( $rt_project_end ) && gardenar_option( 'rt_project_end' ) ) { ?>
							<li><label><?php esc_html_e( 'Ends On', 'gardenar' );?>: </label><?php echo esc_html( $rt_project_end );?></li>
						<?php } if ( !empty( $rt_project_weblink ) && gardenar_option( 'rt_project_weblink' ) ) { ?>
							<li><label><?php esc_html_e( 'Web Link', 'gardenar' );?>: </label><?php echo esc_html( $rt_project_weblink );?></li>
						<?php } ?>

						<?php if( gardenar_option( 'rt_project_rating' ) ) { ?>
							<?php if( $ratting != -1) { ?>
								<li><label><?php esc_html_e( 'Rating', 'gardenar' );?>: </label>
									<ul class="rating">
										<?php for ($i=0; $i < $ratting; $i++) { ?>
											<li class="star-rate"><i class="icon-rt-star" aria-hidden="true"></i></li>
										<?php } ?>
										<?php for ($i=0; $i < $rt_project_rating; $i++) { ?>
											<li><i class="icon-rt-star" aria-hidden="true"></i></li>
										<?php } ?>
									</ul>
								</li>
							<?php } } ?>
					</ul>
				</div>
				<div class="project-sidebar-img">
					<?php echo wp_get_attachment_image( $project_banner_image, 'full', "", array( "class" => "img-responsive" ) ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
