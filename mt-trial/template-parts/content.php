<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MT-Trial
 */

?>

<div class="grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
			<?php

				$args = array(
					'class' => "img-responsive",
					'alt'   => get_the_title()
				);

				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail('blog-thumbnail', $args);
				}

			?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php
				the_excerpt();( __( 'Read More', 'mt-trial' ) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mt-trial' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

	</article><!-- #post-## -->

</div>