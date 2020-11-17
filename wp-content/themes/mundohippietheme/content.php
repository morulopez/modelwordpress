<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<?php if ( is_single() ) : ?>
			<header class="entry-header">
				<div class="div-title">
				<h1 class="entry-title title-single"><?php the_title(); ?></h1>
				</div>
				<div class="div-image">
			<?php	
				if ( ! post_password_required() && ! is_attachment() ) :
						the_post_thumbnail();
					endif;
			?>
				</div>
			</header>
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>
			<?php endif; if ( !is_single() ) : ?>
			<header class="entry-header">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 div-image-post">
						<?php 
							if ( ! post_password_required() && ! is_attachment() ) :
									the_post_thumbnail();
								endif;
						?>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<h1 class="entry-title title-list-post">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h1>
						<div class="entry-summary entry-content-list-post">
						<?php the_excerpt(); ?>
						</div>
					</div>
				</div>
			</header>
			<?php endif; ?><!-- .entry-header -->
		

		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			<?php
			// If a user has filled out their description and this is a multi-author blog, show a bio on their entries.
			if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) :
				?>
				<div class="author-info">
					<div class="author-avatar">
						<?php
						/** This filter is documented in author.php */
						$author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2>
						<?php
						/* translators: %s: Author display name. */
						printf( __( 'About %s', 'twentytwelve' ), get_the_author() );
						?>
						</h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
							<?php
							/* translators: %s: Author display name. */
							printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() );
							?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
