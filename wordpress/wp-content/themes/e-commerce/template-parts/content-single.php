<?php
/**
 * Template part for displaying single posts.
 *
 * @package E-Commerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="entry-thumbnail">
            <?php the_post_thumbnail( 'e-commerce-single' ); ?>
	    </div><!-- .entry-thumbnail -->
    <?php endif; ?>
    
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php e_commerce_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'e-commerce' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php e_commerce_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

